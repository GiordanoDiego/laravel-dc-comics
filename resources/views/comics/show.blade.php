@extends('layouts.app')

@section('page-title', 'Single Comics')

@section('main')
    <h1 class="text-center">
        Comics
    </h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <a href="{{ route('comics.index') }}">Torna indietro alla visione di tutti i comics</a>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <div>
                            <img src="{{ $comic->thumb }}" alt="">
                        </div>
                        <p class="card-text">
                            <ul>
                                <li>
                                    Prezzo: ${{ $comic->price }}
                                </li>
                                <li>
                                    Serie: {{ $comic->series }}
                                </li>
                                <li>
                                    Data uscita: {{ $comic->sale_date }}
                                </li>
                                <li>
                                    Tipo: {{ $comic->type }}
                                </li>
                            </ul>
                        </p>
                        <p>
                            {{ $comic->description }}
                        </p>
                    </div>

                    
                  </div>  
            </div>
        </div>
    </div>
@endsection