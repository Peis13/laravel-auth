@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="lrow">
            <div class="col-12">
                <h2>{{ $post->title }}</h2>

                <div>
                    <h4>autore: {{ $post->user->name }}</h4>

                    <ul>
                        <li>email: {{ $post->user->email }}</li>
                        <li>creato il: {{ $post->created_at }}</li>
                    </ul>
                </div>

                <div>
                    <img src="{{ $post->image_path }}" alt="{{ $post->title }}">
                </div>

                <div>
                    <p>{{ $post->content }}</p>
                </div>
                <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">torna alla bacheca</a>
            </div>
        </div>
    </div>
@endsection
