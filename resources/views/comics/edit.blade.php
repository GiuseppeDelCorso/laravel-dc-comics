@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Modifica fumetto</h2>
        </div>
        <div class="row">
            <form action="{{ route('comics.update', $comics->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control" id="title" name="title" 
                    value={{  $comics->title  }}>
                    
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text" class="form-control" id="description" name="description"
                     value={{  $comics->description  }}>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" 
                     value={{  $comics->thumb  }}>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="text" class="form-control" id="price" name="price"
                     value={{  $comics->price  }}>
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text" class="form-control" id="series" name="series"
                     value={{  $comics->series  }}>
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">sale date</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date"
                     value={{  $comics->sale_date  }}>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                    <input type="text" class="form-control" id="type" name="type"
                     value={{  $comics->type  }}>
                </div>
                <button type="submit" class="btn btn-primary">Aggiorna</button>
            </form>
        </div>
    </div>
@endsection