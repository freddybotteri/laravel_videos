@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Todos los usuarios de nivel {{ $level->name }}</div>

                <div class="card-body">
                    <p>Posts</p>
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-6">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img
                                            src="{{$post->image->url}}"
                                            class="card-img"
                                            alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$post->name}}</h5>
                                                <h6 class="card-subtitle text-muted">
                                                    {{$post->category->name}} |
                                                    {{$post->comments_count}}
                                                    {{Str::plural('comentario',$post->comments_count)}}
                                                </h6>
                                                <div class="card-text small">
                                                    @foreach($post->tags as $tag)
                                                        <span>
                                                            #{{$tag->name}}
                                                        </span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <p>Videos</p>
                    <div class="row">
                        @foreach($videos as $video)
                            <div class="col-6">
                                <div class="card mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img
                                            src="{{$video->image->url}}"
                                            class="card-img"
                                            alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="card-title">{{$video->name}}</h5>
                                            <h6 class="card-subtitle text-muted">
                                                {{$video->category->name}} |
                                                {{$video->comments_count}}
                                                {{Str::plural('comentario',$video->comments_count)}}
                                            </h6>
                                            <div class="card-text small">
                                                @foreach($video->tags as $tag)
                                                    <span>
                                                        #{{$tag->name}}
                                                    </span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
