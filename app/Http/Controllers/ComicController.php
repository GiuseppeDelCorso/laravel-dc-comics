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

    public function show(string $id)
    {
        $comics = Comics::find($id);
        return view("comics.show", compact("comics"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comics $comics)
    {
        return view("comics.edit", compact("comics"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comics $comics)
    {
        $data = $request->all();
        $comics->update($data);
        return redirect()->route('comics.show', $comcis->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
