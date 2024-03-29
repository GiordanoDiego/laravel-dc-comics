@extends('layouts.app')

@section('page-title', 'Comics')

@section('main')
<h1 class="text-center">
    Comics
</h1>

<div class="row">
    <div class="col text-center">
        <div class="mb-4">
            <a href="{{ route('comics.create') }}" class="btn btn-primary ">
                ADD
            </a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data Vendita</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>${{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary btn-sm">
                                Show
                            </a>
                            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            <form
                                onsubmit="return confirm('Sei sicuro di voler eliminare?');"
                                class="d-inline-block"
                                action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Elimina
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection