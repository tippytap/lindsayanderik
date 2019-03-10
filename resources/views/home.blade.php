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
                    <div class="col-xs-12">
                        <div>
                            <a class="btn btn-primary pull-right" href='{{ url("/invite/$wedding->id") }}'>Invite Someone</a>
                        </div>
                        <br>
                        <h3>Attendees</h3>
                        <hr>
                    </div>
                    @if(count($wedding->attendees) > 0)
                    <ul class="attendees-list">
                        @foreach($wedding->attendees as $attendee)
                        <li class="row">
                            <div class="col-xs-12">
                                <strong>{{ "$attendee->firstname $attendee->lastname" }}</strong>&nbsp;&nbsp;<a href='{{ url("/invitee/$wedding->id/$attendee->id") }}' class="">Edit</a>
                                <div class="pull-right">
                                    <div class="{{ ($attendee->attending) ? 'text-success' : 'text-danger' }} text-right">{{ ($attendee->attending) ? "Attending" : "Not Attending" }}</div>

                                    @if($attendee->guests > 0)
                                    <div class="text-left">
                                        Total in party: {{ $attendee->guests }}
                                    </div>
                                    @endif

                                    @if($attendee->shuttle)
                                    <div class="text-right">
                                        Shuttle <span class="text-success fas fa-check-circle"></span>
                                    </div>
                                    @endif
                                </div>
                            @if($attendee->plusone)
                            <div class="text-left">
                                Also bringing: {{ $attendee->plusone }} 
                            </div>
                            @endif
                            </div>
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
