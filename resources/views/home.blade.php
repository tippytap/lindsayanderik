@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($weddings as $wedding)
            <div class="panel panel-default">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="panel-heading">
                    {{$wedding->name}}
                </div>

                <div class="panel-body">
                    <div>
                        <a class="btn btn-primary pull-right" href='{{ url("/invite/$wedding->id") }}'>Invite Someone</a>
                    </div>
                    <br>
                    <h3>Attendees</h3>
                    <hr>
                    @if(count($wedding->attendees) > 0)
                    <ul class="attendees-list">
                        @foreach($wedding->attendees as $attendee)
                        <li>
                            <div>
                            <strong>{{ "$attendee->firstname $attendee->lastname" }}</strong>&nbsp;&nbsp;<a href='{{ url("/invitee/$wedding->id/$attendee->id") }}' class="">Edit</a>
                            <span class="pull-right {{ ($attendee->attending) ? 'text-success' : 'text-danger' }}">{{ ($attendee->attending) ? "Attending" : "Not Attending" }}</span>
                            </div>
                            @if($attendee->plusone)
                            <div class="text-left">
                                Also bringing: {{ $attendee->plusone }}
                            </div>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    @else
                    <p>No attendees yet.</p>
                    @endif
                </div>
                <div class="panel-footer">
                    <div class="text-right">
                    Total Guests: <strong>{{ $total }}</strong>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
