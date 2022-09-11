@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p>{{ $user->name }}</p>
                    <p>{{ $user->email }}</p>
                    <p>inst: <strong>{{ $user->profile->instagram }}</strong></p>
                    <p>github: <strong>{{ $user->profile->github }}</strong></p>
                    <p>web: <strong>{{ $user->profile->web }}</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
