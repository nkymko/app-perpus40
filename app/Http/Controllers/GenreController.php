<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administrator.categories.index', [
            'genres' => Genre::all(),
            'title' => 'Genre Buku'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenreRequest $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'min: 3']
        ]);

        $validated['slug'] = strtolower($validated['nama']);

        Genre::create($validated);
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenreRequest $request, Genre $genre)
    {
        $validated = $request->validate([
            'nama' => ['required', 'min: 3']
        ]);

        if ($validated['nama'] === $genre->nama) {
            return redirect()->back();
        }

        $validated['slug'] = strtolower($validated['nama']);

        $genre->update($validated);
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->back();
    }
}
