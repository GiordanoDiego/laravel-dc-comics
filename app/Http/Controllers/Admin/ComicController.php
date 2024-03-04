<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//models
use App\Models\Comic;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|max:1024',
            'description' => 'nullable|max:4096',
            'thumb' => 'nullable|max:1024|url',
            'price' => 'required|numeric|min:1|max:999',
            'series' => 'nullable|max:256',
            'sale_date' => 'required',
            'type' => 'required|max:1024',
        ],
        //posso aggiungere un array per personalizzare i messaggi di errore e magari metterli in italiano
        [
            'title.required' => 'Devi inserire un titolo',
            'title.max' => 'Non puoi inserire un titolo più lungo di 1024 caratteri ',
            'description.max' => 'Non puoi inserire un descrizione più lunga di 4096 caratteri ',
            'thumb.max' => 'Non puoi inserire un url più lungo di 1024 caratteri ',
            'price.required' => 'Devi inserire un prezzo',
            'price.max' => 'Non puoi inserire un prezzo superiore a 999,00€',
            'sale_date.required' => 'Devi inserire una data',
            'series.max' => 'Non puoi inserire una più di 256 caratteri ',
            'type.required' => 'Devi inserire un tipo',
            'type.max' => 'Non puoi inserire più di 1024 caratteri '
        ]);

        //se va a buon fine continua il codice e crea
        //se fallisce c'è un redirect alla pagina iniziale ma avremo accesso a una variabile errors che conterrà gli errori

        // $comicData = $request->all(); non è necessario perchè abbiamo i dati dentro validatedDate
        
        $comic = Comic::create($validatedData);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {   
        
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:1024',
            'description' => 'nullable|max:4096',
            'thumb' => 'nullable|max:1024|url',
            'price' => 'required|numeric|min:1|max:999',
            'series' => 'nullable|max:256',
            'sale_date' => 'required',
            'type' => 'required|max:1024',
        ],
        //posso aggiungere un array per personalizzare i messaggi di errore e magari metterli in italiano
        [
            'title.required' => 'Devi inserire un titolo',
            'title.max' => 'Non puoi inserire un titolo più lungo di 1024 caratteri ',
            'description.max' => 'Non puoi inserire un descrizione più lunga di 4096 caratteri ',
            'thumb.max' => 'Non puoi inserire un url più lungo di 1024 caratteri ',
            'price.required' => 'Devi inserire un prezzo',
            'price.max' => 'Non puoi inserire un prezzo superiore a 999,00€',
            'sale_date.required' => 'Devi inserire una data',
            'series.max' => 'Non puoi inserire una più di 256 caratteri ',
            'type.required' => 'Devi inserire un tipo',
            'type.max' => 'Non puoi inserire più di 1024 caratteri '
        ]);
        
        // $comicData = $request->all();
        $comic->update($validatedData);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
