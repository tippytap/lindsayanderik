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
                            <div class="col-md-6">
                                <label for="firstname" class="control-label">First name</label>
                                <input class="form-control" type="text" placeholder="John" name="firstname" id="firstname">
                            </div>
                            <div class="col-md-6">
                                <label for="lastname" class="control-label">Last name</label>
                                <input class="form-control" type="text" placeholder="Doe" name="lastname" id="lastname">
                            </div>
                            <div class="col-md-6">
                                <br>
                                <strong>Attending?</strong>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="attending" id="yes" value="yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="attending" id="no" value="no">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <br/>
                                <lable for="plusone" class="control-label"><strong>Plus one name:</strong></lable>
                                <input class="form-control" type="text" placeholder="Jane Doe" name="plusone" id="plusone">
                            </div>
                            <div class="col-md-12">
                            <br>
                                <div class="checkbox">
                                    <label>
                                        <input class="" type="checkbox" name="shuttle" id="shuttle"> <strong>I will be using the shuttle</strong>
                                    </label>
                                </div>
                            </div>
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