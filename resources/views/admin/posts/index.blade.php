@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>ciao {{ $user->name }}, ecco la lista dei post</h2>

                <ul>
                    @foreach ($posts as $post)
                        <li>
                            {{ $post->user->name }} - {{ $post->title }}
                            <a class="btn-sm btn-primary" href="{{ route('admin.posts.show', $post) }}">vedi post</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
