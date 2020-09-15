@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>crea nuovo post</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form enctype="multipart/form-data" action="{{ route('admin.posts.update', $post) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">

                        <label>titolo</label>
                        <input type="text" name="title" class="form-control" placeholder="inserisci titolo..." value="{{ $post->title }}">

                    </div>
                    <div class="form-group">

                        <label>contenuto</label>
                        <textarea class="form-control" rows="3" name="content" placeholder="inserisci contenuto..">{{ $post->content }}</textarea>

                    </div>
                    <div class="form-group">

                        <label>carica immagine</label>
                        <input type="file" name="image_path" accept="image/*">
                        <p class="help-block">inserisci un'immagine</p>

                    </div>
                    <input type="submit" class="btn btn-warning" value="modifica">
                    <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">torna alla bacheca</a>
                </form>

            </div>
        </div>
    </div>
@endsection
