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
                <form action='{{ url("/invitee/$wedding->id/$invitee->id") }}' class="form-horizontal" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname" class="control-label">First name</label>
                                <input class="form-control" type="text" name="firstname" id="firstname" value='{{"$invitee->firstname"}}'>
                            </div>
                            <div class="col-md-6">
                                <label for="lastname" class="control-label">Last name</label>
                                <input class="form-control" type="text" name="lastname" id="lastname" value='{{"$invitee->lastname"}}'>
                            </div>
                            <div class="col-md-6">
                                @if($invitee->attending)
                                    <br>
                                    <strong>Attending?</strong>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="attending" id="yes" value="yes" checked>
                                            Yes
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="attending" id="no" value="no">
                                            No
                                        </label>
                                    </div>
                                @endif
                                @if(!$invitee->attending)
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
                                            <input type="radio" name="attending" id="no" value="no" checked>
                                            No
                                        </label>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <br/>
                                <lable for="plusone" class="control-label">Plus one name:</lable>
                                <input class="form-control" type="text" placeholder="Jane Doe" name="plusone" id="plusone" value='{{ "$invitee->plusone" }}'>
                                <div class="form-group col-xs-12">
                                    <br>
                                    <label for="numguests">
                                        How many kids?
                                        <input class="form-control" name="numguests" id="numguests" value='{{ ($invitee->guests) ? $invitee->guests : 0 }}' type="number"/>
                                    </label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input class="" type="checkbox" name="shuttle" id="shuttle" {{ ($invitee->shuttle) ? 'checked' : '' }}> <strong>My party will use the shuttle</strong>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br/>
                                <button class="btn btn-primary col-md-4">Update</button>
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