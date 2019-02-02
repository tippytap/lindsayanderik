
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Login</h2>
                </div>
                <div class="panel-body">
                    <form action="" class="form-horizontal" method="POST">
                        {{ csrf_field() }}
                        <div>
                            <label for="location" class="col-md-4 control-label">Location</label>
                            <div class="col-md-6">
                                <input type="text" id="location" class="location" name="location" required autofocus>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn-primary">Create wedding</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection