<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


use PhpParser\Node\Expr\FuncCall;

class ComicController extends Controller
{

    public function validation($data)
    {

        $validated = Validator::make(
            $data,
            [

                "title" => "required|min:2|max:30",
                "description" => "required|min:2|max:400",
                "thumb" =>  "required|min:1",
                "price" => "required",
                "series" => "required|min:2",
                "sale_date" => "required",
                "type" => "required|min:2|max:20",
            ],
            [
                'title.required' => 'Completare il campo',
                'title.max' => 'Hai superato il massimo dei caratteri consentiti',
                'title.min' => 'Usare piu carattermi per il completamento del campo',
                'description.required' => 'Descrivi il tuo fumetto',
                'thumb.required' => "Importa l'Indirizzo dell immagine",
                'price.required' => 'Digita il Prezzo',
                'series.required' => 'Digita la tua serie',
                'sale_date.required' => 'Inserisci la Data di uscita',
                'type.required' => 'Inserisci la tipolgia del tuo prodotto'


            ]
        )->validate();

        return $validated;
    }

    public function index()
    {
        $items = Comics::all();
        return view("comics.index", compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $dati_validati = $this->validation($data);
        $comic = new Comics();
        $comic->fill($dati_validati);
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    public function show(Comics $comic)
    {

        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comics $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comics $comic)
    {
        $data = $request->all();
        $dati_validati = $this->validation($data);
        $comic->update($dati_validati);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comics $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
