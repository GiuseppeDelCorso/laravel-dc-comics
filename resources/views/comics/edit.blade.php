@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Modifica fumetto</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" 
                    name="title"  value="{{ old('title') ?? $comic->title }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror   
                </div>
               <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text"  class="form-control @error('description') is-invalid @enderror" id="description" 
                    name="description" value="{{ old('description') ?? $comic->description }}">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror 
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">image</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" 
                    name="thumb"  value="{{ old('thumb') ?? $comic->thumb }}">
                    @error('thumb')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <select class="form-select"  name="price" id="price">
                        <option value="alto" @selected(old('type', $comic->price) == 'alto')>10$</option>
                        <option value="normale" @selected(old('type', $comic->price) == 'normale')>7$</option>
                        <option value="basso" @selected(old('type', $comic->price) == 'basso')>5$</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text"  class="form-control @error('series') is-invalid @enderror" id="series"
                     name="series" value="{{ old('series') ?? $comic->series }}">
                    @error('series')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                 <div class="mb-3">
                    <label for="sale_date" class="form-label">sale date</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                     name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date}}">
                    @error('sale_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
               <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                    <input type="text"  class="form-control @error('sale_date') is-invalid @enderror" id="type" 
                    name="type" value="{{ old('type') ?? $comic->type }}">
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Aggiorna</button>
            </form>
        </div>
    </div>
@endsection