@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>benvenuto, ecco la lista dei posts</h2>

                <ul>
                    @foreach ($posts as $post)
                        <li>
                            {{ $post->title }}
                            <a class="btn-sm btn-primary" href="{{ route('posts.show', $post) }}">vedi post</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
