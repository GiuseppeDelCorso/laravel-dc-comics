@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h2>I Nostri Fumetti</h2>
        </div>
        <div class="row">
            @foreach ($items as $element)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $element->thumb }}" class="card-img-top" alt="{{ $element->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $element->title }}</h5>
                            <p class="card-text">
                                Costo -> {{ $element->price }}<br>
                                Cosa Compro ->{{ $element->type }}
                            </p>
                            <a href="{{ route('comics.show', $element->id) }}" class="btn btn-primary">Mostra dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




@endsection