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
        return view('invite.edit', [
            'wedding' => $wedding,
            'invitee' => $invitee
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

        if($invitee->attending){
            $invitee->plusone = ($request->input('plusone')) ? $request->input('plusone') : null;
            $invitee->shuttle = ($request->input('shuttle')) ? true : false;
        }
        
        if(!$invitee->attending && $invitee->plusone)
            $invitee->plusone = null;

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
                $invitee->plusone = ($request->input('plusone')) ? $request->input('plusone') : null;
                $invitee->shuttle = ($request->input('shuttle')) ? true : false;
            }
            
            if(!$invitee->attending && $invitee->plusone)
                $invitee->plusone = null;

            $invitee->wedding = $wedding;

            $invitee->save();
        }

        if(!Auth::check()){
            return redirect('/');
        }

        return redirect()->route('home');

    }
}
