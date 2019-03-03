<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Wedding;
use App\Invitee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_guests = 0;
        $authID = Auth::id();

        // if Lindsay, set the id to 1 so she can see the wedding
        if($authID === 2){
            $authID = 1;
        }
        $weddings = Wedding::where('owner', $authID)->get();
        foreach($weddings as $wedding){
            $wedding->attendees = Invitee::where('wedding', $wedding->id)->get();
            foreach($wedding->attendees as $attendee){
                if($attendee->attending){
                    $total_guests++;
                    if($attendee->plusone) $total_guests++;
                }
                if($attendee->guests > 0){
                    $total_guests += $attendee->guests;
                }
            }
        }

        return view('home', [
            'weddings' => $weddings,
            'total' => $total_guests
        ]);
    }
}
