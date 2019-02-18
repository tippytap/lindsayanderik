@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Weddings
                    <a href="#" class="btn btn-primary">Create a new wedding</a>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                    @foreach($weddings as $wedding)
                        <li>
                        <a href="{{ route('weddingShow', ['id' => $wedding->id]) }}">
                            {{$wedding->name}}
                        </a>
                        </li>
                    @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
