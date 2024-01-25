@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Aggiuni un fumetto</h2>
        </div>
        <div class="row">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">sale date</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
                <button type="submit" class="btn btn-primary">Inserisci</button>
            </form>
        </div>
    </div>
@endsection