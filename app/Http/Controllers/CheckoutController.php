<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\BookDetail;
use Illuminate\Support\Str;
use App\Http\Requests\StoreCheckoutRequest;
use App\Http\Requests\UpdateCheckoutRequest;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administrator.checkouts.index', [
            'title' => 'Data Peminjaman',
            'checkouts' => Checkout::where('arsip', false)->get(),
            'histories' => Checkout::where('arsip', true)->get()
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
    public function store(StoreCheckoutRequest $request)
    {
        $validated = $request->validate([
            'agreement' => ['required'],
            'book_id' => ['required']
        ]);

        $book = BookDetail::where('book_id', $validated['book_id'])
        ->where(function($query) {
            $query->where('availibility', true);
        })
        ->first();
        
        $kode = strtoupper('PM-' . Str::random(4) . '-' . Str::random(2));

        Checkout::create([
            'kode' => $kode,
            'user_id' => auth()->user()->uuid,
            'book_id' => $book->uuid
        ]);

        $book->update([
            'availibility' => false
        ]);

        return redirect(route('users.show', auth()->user()->uuid));
    }

    /**
     * Display the specified resource.
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCheckoutRequest $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
