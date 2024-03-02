@extends('layouts.app')

@section('page-title', 'Comic Edit')

@section('main')
<h1>
    Comic edit
</h1>

<div class="container">
    <div class="row">
        <div class="col py-4">
            <div class="mb-4">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">
                    Torna all'index dei comics
                </a>
            </div>
            
            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input  value="{{ $comic->title }}" type="text" class="form-control" id="title" name="title" placeholder="Inserisci titolo..." maxlength="1024">
                </div>
    
                <div class="mb-3">
                    <label for="thumb" class="form-label">Url img <span class="text-danger">*</span></label>
                    <input value="{{ $comic->thumb }}" type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'url dell'img..." maxlength="1024" required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo<span class="text-danger">*</span></label>
                    <input value="{{ $comic->type }}" type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo..." maxlength="128" required>
                </div>


                <div class="mb-3">
                    <label for="series" class="form-label">Serie<span class="text-danger">*</span></label>
                    <input value="{{ $comic->series }}" type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie.." maxlength="256" required>
                </div>
    
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input value="{{ $comic->price }}" type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo.." min="1" max="999.99">
                </div>
    
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di uscita<span class="text-danger">*</span></label>
                    <input value="{{ $comic->sale_date }}" type="date" class="form-control" id="sale_date" name="sale_date" required>
                </div>
    
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione...">{{ $comic->description }}</textarea>
                </div>
    
                <div>
                    <button type="submit" class="btn btn-warning">
                        Modifica
                    </button>
                </div>
    
            </form>
        </div>
    </div>
</div>
@endsection