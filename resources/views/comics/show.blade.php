@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>{{ $comic->title }}</h2>
        </div>
        <div class="row">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        </div>
        <div class="row">
            <p>{{ $comic->description }}</p>
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Modifica il Fumetto</a>
        </div>
    </div>
@endsection