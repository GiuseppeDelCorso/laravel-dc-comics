<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;

class ComicController extends Controller
{

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

        $comics = new Comics();
        $comics->title = $data["title"];
        $comics->description = $data["description"];
        $comics->thumb = $data["thumb"];
        $comics->price = $data["price"];
        $comics->series = $data["series"];
        $comics->sale_date = $data["sale_date"];
        $comics->type = $data["type"];
        $comics->save();

        return redirect()->route('comics.show', $comics->id);
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
        $comic->update($data);
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
