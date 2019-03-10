@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>RSVP Form</h2>
                </div>
                <div class="panel-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action='{{ route("createInvite", ["wedding" => $wedding->id]) }}' class="form-horizontal" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xs-12 guest-heading">
                                <h3><small>Name(s)</small></h3>
                            </div>
                            <div class="col-md-6">
                                <label for="firstname" class="control-label">First name</label>
                                <input class="form-control" type="text" placeholder="John" name="firstname" id="firstname">
                            </div>
                            <div class="col-md-6">
                                <label for="lastname" class="control-label">Last name</label>
                                <input class="form-control" type="text" placeholder="Doe" name="lastname" id="lastname">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            {{-- <div class="col-xs-12 guest-heading">
                                <h3><small>Guest 2</small></h3>
                            </div> --}}
                            <div class="col-md-6">
                                <label for="firstname-2" class="control-label">First name</label>
                                <input class="form-control" type="text" placeholder="John" name="firstname-2" id="firstname">
                            </div>
                            <div class="col-md-6">
                                <label for="lastname-2" class="control-label">Last name</label>
                                <input class="form-control" type="text" placeholder="Doe" name="lastname-2" id="lastname">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <fieldset>
                                    <legend>
                                        <strong>Attending?</strong>
                                    </legend>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="attending" id="yes" value="yes">
                                            Happily accept
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="attending" id="no" value="no">
                                            Regretfully decline
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12">
                                <label for="numguests">
                                    Total number attending in my party
                                    <input class="form-control" name="numguests" id="numguests" value='0' max='10' min='0' type="number"/>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <br/>
                                <div class="checkbox">
                                    <label>
                                        <input class="" type="checkbox" name="shuttle" id="shuttle"> <strong>My party will use the shuttle that will be available at the Hilton Garden Inn to travel to and from the wedding location.</strong>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12">
                                <br/>
                                <button class="btn btn-primary col-md-4">RSVP</button>
                                &nbsp;
                                @if(Auth::guest())
                                <a href="{{ url('/') }}" class="btn btn-danger">Cancel</a>
                                @else
                                <a class="btn btn-danger" href="{{ url('/home') }}">Cancel</a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection