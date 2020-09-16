@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="index">
                    <h2>ciao {{ $user->name }}, ecco la lista dei post</h2>

                    <ul class="lista-posts">
                        @foreach ($posts as $post)
                            <li class="post">
                                <a class="link" href="{{ route('admin.posts.show', $post) }}">
                                    <div class="post-img">
                                        <img src="{{ asset('storage') . '/' . $post->image_path }}" alt="{{ $post->title }}">
                                    </div>

                                    <div class="post-info">
                                        <h4 class="titolo">{{ $post->title }}</h4>
                                        <p class="autore">{{ $post->user->name }}</p>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
