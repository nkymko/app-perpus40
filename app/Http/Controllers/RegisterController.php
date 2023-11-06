<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'nomor_induk' => ['required'],
            'agreement' => ['required']
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['uuid'] = Str::uuid();

        User::create($validated);

        return redirect(route('login'))->with('success', 'Akun berhasil dibuat, silahkan lakukan sign in!');
    }
}
