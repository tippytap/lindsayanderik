@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Invite someone to our wedding</h2>
                </div>
                <div class="panel-body">
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
                                <br/>
                                <p>Attending?</p>
                                <label for="yes" class="control-label">Yes</label>
                                <input type="radio" name="attending" id="yes" value="yes" checked>
                                <label for="no" class="control-label">No</label>
                                <input type="radio" name="attending" id="no" value="no">
                            </div>
                            <div class="col-md-3">
                                <br/>
                                <label for="numguests" class="control-label">Number of guests</label>
                                <input type="number" id="numguests" value="0" class="form-control" name="numguests">
                            </div>
                            <div class="col-md-12">
                                <br/>
                                <button class="btn btn-primary col-md-4">RSVP</button>
                                &nbsp;
                                <a href="{{url('/wedding/' . $wedding->id)}}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection