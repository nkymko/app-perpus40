<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\BookDetail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administrator.books.index', [
            'title' => 'Data Buku',
            'books' => Book::all(),
            'genres' => Genre::all()
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => ['required', 'min:3'],
            'penulis' => ['required'],
            'penerbit' => ['required'],
            'deskripsi' => ['required', 'min:50', 'max:1500'],
            'genre_id' => ['required'],
        ]);

        $validated['uuid'] = Str::uuid();

        $request->validate([
            'cover' => ['required', 'max: 5128', 'mimes:jpg,jpeg,png,webp']
        ]);

        $file = $request->file('cover');

        $filename = $file->store('books-cover'); // Store the file
        $validated['cover'] = $filename;

        Book::create($validated);

        $book_id = Book::where('uuid', $validated['uuid'])->first();

        for ($i=1; $i <= intval($request->get('stok')); $i++) { 
            BookDetail::create([
                'book_id' => $validated['uuid'],
                'serial_num' => 'P40-G' . $validated['genre_id'] . '-B' . $book_id->id . '-S' . $i,
                'availibility' => true
            ]);
        }

        return redirect()->back()->with('success', 'Penambahan buku berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('administrator.books.edit', [
            'title' => 'Data Buku',
            'book' => $book,
            'genres' => Genre::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'judul' => ['required', 'min:3'],
            'penulis' => ['required'],
            'penerbit' => ['required'],
            'deskripsi' => ['required', 'min:50', 'max:1500'],
            'genre_id' => ['required'],
        ]);

        if ($request->file('cover')) {
            $file = $request->file('cover');
            $filename = $file->store('books-cover'); // Store the file
            $validated['cover'] = $filename;
            Storage::delete($book->gambar);
        }

        $book->update($validated);

        if ($request->get('stok') > $book->detail->count()) {
            $serial_num = $book->detail->last();
            $serial_num = intval(substr($serial_num->serial_num, -1)) + 1;

            for ($i=1; $i <= intval($request->get('stok')) - $book->detail->count(); $i++) { 
                BookDetail::create([
                    'book_id' => $book->uuid,
                    'serial_num' => 'P40-G' . $validated['genre_id'] . '-B' . $book->id . '-S' . $serial_num++,
                    'availibility' => true
                ]);
            }
        }

        return redirect(route('books.index'))->with('success', 'Edit data buku berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->back();
    }
}
