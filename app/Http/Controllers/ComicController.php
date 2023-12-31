<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            'title' => 'required|max:70',
            'description' => 'required',
            'thumb' => 'nullable|active_url',
            'price' => 'required|decimal:0,2',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ]);

        $comic = new Comic();
        $comic->title = $validatedData['title'];
        $comic->description = $validatedData['description'];
        $comic->thumb = $validatedData['thumb'];
        $comic->price = $validatedData['price'];
        $comic->series = $validatedData['series'];
        $comic->sale_date = $validatedData['sale_date'];
        $comic->type = $validatedData['type'];
        $comic->artists = $validatedData['artists'];
        $comic->writers = $validatedData['writers'];

        $comic->save();

        return redirect()->route('comics.index')->with('success', 'Comic created successfully.');
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
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:70',
            'description' => 'required',
            'thumb' => 'nullable|active_url',
            'price' => 'required|decimal:0,2',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required',
            'artists' => 'required',
            'writers' => 'required'
        ]);

        $comic->title = $validatedData['title'];
        $comic->description = $validatedData['description'];
        $comic->thumb = $validatedData['thumb'];
        $comic->price = $validatedData['price'];
        $comic->series = $validatedData['series'];
        $comic->sale_date = $validatedData['sale_date'];
        $comic->type = $validatedData['type'];
        $comic->artists = $validatedData['writers'];
        $comic->writers = $validatedData['writers'];

        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id])->with('success', 'Comic updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
