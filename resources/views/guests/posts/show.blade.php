@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>post: {{ $post->title }}</h2>

                <div>
                    <img src="{{ $post->image_path }}" alt="{{ $post->title }}">
                </div>

                <div>
                    <p>{{ $post->content }}</p>
                </div>
                <a class="btn btn-primary" href="{{ route('posts.index') }}">torna alla bacheca</a>
            </div>
        </div>
    </div>
@endsection
