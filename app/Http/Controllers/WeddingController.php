<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Wedding;
use App\Invitee;

class WeddingController extends Controller
{
    public function show($id){

        $wedding = Wedding::where('id', $id)->first();

        $invitees = Invitee::where('wedding', $id)->get();

        return view('wedding.view', [
            'wedding' => $wedding,
            'invitees' => $invitees
        ]);

    }
}
