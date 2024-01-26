@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h2>I Nostri Fumetti</h2>
        </div>
        <div class="row">
            @foreach ($items as $element)
                <div class="col-4">
                    <div class="card my-3 HeigthBodyCard" style="width: 18rem;">
                        <div class="HeigthImgCardContainer">
                            <img class="StyleImgCard img-fluid" src="{{ $element->thumb }}" class="card-img-top" alt="{{ $element->title }}">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <h5 class="card-title">{{ $element->title }}</h5>
                            </div>
                            <div class="my-3 d-flex justify-content-center">
                                <p class="card-text ">
                                    Costo -> {{ $element->price }}<br>
                                    Cosa Compro ->{{ $element->type }}
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('comics.show', $element->id) }}" class="btn btn-primary">Mostra dettagli</a>


                                <form action="{{ route('comics.destroy', $element->id)}}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Cancella" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




@endsection