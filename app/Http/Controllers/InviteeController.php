<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function create(Request $request, $wedding){
        $invitee = new Invitee;

        if($request->has(['firstname', 'lastname'])){
            $invitee->firstname = $request->input('firstname');
            $invitee->lastname = $request->input('lastname');

            $invitee->attending = ($request->input('attending') == 'yes') ? true : false;

            $invitee->guests = $request->input('numguests');

            $invitee->wedding = $wedding;

            $invitee->save();
        }

        return view('wedding.view', [
            'wedding' => Wedding::where('id', $wedding)->first(),
            'invitees' => Invitees::where('wedding', $wedding)->get()
        ]);
    }
}
