@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$wedding->name}}</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><small>Location</small></p>
                            {{$wedding->location}}
                        </div>
                        <div class="col-md-6">
                            <p><small>Date</small></p>
                            date
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-4">
                            <p><small>Couple</small></p>
                            couple
                        </div>
                        <div class="col-md-4">
                            <p><small>Wedding party</small></p>
                            party
                        </div>
                        <div class="col-md-4">
                            <p><small>Registry</small></p>
                            registry
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <small>Attendance</small>
                            <a href="{{ url('invite/' . $wedding->id) }}" class="btn btn-link">Invite someone</a>
                            </p>
                            <ul>
                                @foreach($invitees as $invitee)
                                <li>
                                    {{ $invitee->firstname . ' ' . $invitee->lastname }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection