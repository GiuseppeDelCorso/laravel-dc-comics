@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>{{ $comics->title }}</h2>
        </div>
        <div class="row">
            <img src="{{ $comics->thumb }}" class="card-img-top" alt="{{ $comics->title }}">
        </div>
        <div class="row">
            <p>{{ $comics->description }}</p>
        </div>
       <div class="d-flex justify-content-center">
            <a href="{{ route('comics.edit', $comics->id) }}" class="btn btn-primary">Modifica il Fumetto</a>
        </div> >
    </div>
@endsection