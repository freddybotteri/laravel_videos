@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div>
                        <img
                        class="rounded-circle"
                        src="{{ $user->image->url}}"
                        alt="" >
                    </div>
                    
                    <p>{{ $user->name }}</p>
                    <p>{{ $user->email }}</p>
                    <p>inst: <strong>{{ $user->profile->instagram }}</strong></p>
                    <p>github: <strong>{{ $user->profile->github }}</strong></p>
                    <p>web: <strong>{{ $user->profile->web }}</strong></p>
                    <p>Pais: <strong>{{ $user->location->country }}</strong></p>
                    <p>Nivel:   @if($user->level)
                                    <a href="#">
                                        <strong>{{ $user->level->name }}</strong>
                                    </a>
                                @else ---
                                @endif
                    </p>
                    <p>
                        <strong>Grupos: </strong>
                        @foreach($user->groups as $group)
                            <span>{{ $group->name }}</span>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
