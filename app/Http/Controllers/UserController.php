<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('profile.index', [
            'title' => 'Profile',
            'user' => $user,   
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'nama' => ['required'],
            'nomor_induk' => ['required'],
        ]);
        
        if ($request->file('profpic')) {
            $file = $request->file('profpic');
            $filename = $file->store('prof-pic'); // Store the file
            $validated['profpic'] = $filename;
            
            if ($user->profpic !== 'prof-pic/user.png') {
                Storage::delete($user->profpic);
            }
        }

        $user->update($validated);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
