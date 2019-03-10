<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Wedding;
use App\Invitee;

class InviteeController extends Controller
{
    public function invite($wedding){
        $wedding = Wedding::where('id', $wedding)->first();
        return view('invite.new', [
            'wedding' => $wedding
        ]);
    }

    public function edit($wedding, $invitee){
        $wedding = Wedding::where("id", $wedding)->first();
        $invitee = Invitee::where("id", $invitee)->first();
        $guest2 = ($invitee->plusone) ? explode(' ',$invitee->plusone) : '';
        return view('invite.edit', [
            'wedding' => $wedding,
            'invitee' => $invitee,
            'guest2' => $guest2
        ]);
    }

    public function update(Request $request, $wedding, $invitee){

        $validatedData = $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'attending' => 'required'
        ]);

        $invitee = Invitee::where('id', $invitee)->first();

        $invitee->firstname = $request->input('firstname');
        $invitee->lastname = $request->input('lastname');
        $invitee->attending = ($request->input('attending') == 'yes') ? true : false;

        $invitee->guests = $request->input('numguests');

        if($invitee->attending){
            if($request->input('firstname-2') && $request->input('lastname-2')){
                $invitee->plusone = $request->input('firstname-2') . " " . $request->input('lastname-2');
            }
            $invitee->shuttle = ($request->input('shuttle')) ? true : false;
        }
        
        if(!$invitee->attending && $invitee->plusone)
            $invitee->plusone = null;

        $numguests = $request->input('numguests');

        // if numguests not filled out:
            // if attending and filled out second guest, it's 2
            // if attending and haven't filled out second guest, it's 1 
        if($numguests > 0){
            $invitee->guests = $numguests;

            if(($request->input('firstname-2') && $request->input('lastname-2')) && $numguests < 2){
                $invitee->guests = 2;
            }
        }
        else{
            if($request->input('attending') == 'yes' 
                && ($request->input('firstname-2') && $request->input('lastname-2'))
            ){
                $invitee->guests = 2;
            }
            else{
                if($request->input('attending') == 'yes'
                    && !($request->input('firstname-2') && $request->input('lastname-2'))
                ){
                    $invitee->guests = 1;
                }
            }
        }

        if(!$invitee->attending && $invitee->guests > 0)
            $invitee->guests = 0;

        if(!$invitee->attending && $invitee->shuttle)
            $invitee->shuttle = false;

        $invitee->save();

        return back();

    }

    public function create(Request $request, $wedding){

        $validatedData = $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'attending' => 'required'
        ]);

        $invitee = new Invitee;

        if($request->has(['firstname', 'lastname'])){
            $invitee->firstname = $request->input('firstname');
            $invitee->lastname = $request->input('lastname');

            $invitee->attending = ($request->input('attending') == 'yes') ? true : false;

            $invitee->guests = $request->input('numguests');

            if($invitee->attending){
                if($request->input('firstname-2') && $request->input('lastname-2')){
                    // $invitee->plusone = ($request->input('plusone')) ? $request->input('plusone') : null;
                    $invitee->plusone = $request->input('firstname-2') . " " . $request->input('lastname-2');
                }
                $invitee->shuttle = ($request->input('shuttle')) ? true : false;
            }

            // if numguests not filled out:
                // if attending and filled out second guest, it's 2
                // if attending and haven't filled out second guest, it's 1 
            if($request->input('numguests') > 0){
                $invitee->guests = $request->input('numguests');
            }
            else{
                if($request->input('attending') == 'yes' 
                    && ($request->input('firstname-2') && $request->input('lastname-2'))
                ){
                    $invitee->guests = 2;
                }
                else{
                    if($request->input('attending') == 'yes'
                        && !($request->input('firstname-2') && $request->input('lastname-2'))
                    ){
                        $invitee->guests = 1;
                    }
                }
            }
            
            if(!$invitee->attending && $invitee->plusone)
                $invitee->plusone = null;

            $invitee->wedding = $wedding;

            $invitee->save();
        }

        if(!Auth::check()){
            if($invitee->attending){
                $request->session()->flash('message', 'Thank you! Your RSVP has been received.');
            }
            else{
                $request->session()->flash('message', 'Thank you for your response! We are sorry to miss you but hope to see you soon!');
            }
            return redirect('/');
        }

        return redirect()->route('home');

    }
}
