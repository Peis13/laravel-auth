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

                @if (!empty($post->image_path))
                    <div>
                        <img src="{{ asset('storage') . '/' . $post->image_path }}" alt="{{ $post->title }}">
                    </div>
                @endif

                <div>
                    <p>{{ $post->content }}</p>
                </div>
                <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">torna alla bacheca</a>
                <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post) }}">modifica post</a>
            </div>
        </div>
    </div>
@endsection
