<?php
// app/Http/Controllers/SettingsController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function edit()
    {
        return view('settings.edit', ['user' => Auth::user()]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|string',
            'password' => 'nullable|confirmed|min:8',
        ]);

        $user->email = $request->email;
        $user->phone = $request->phone;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $request->user()->save();

        return redirect()->route('settings.edit')->with('success', 'Profile updated successfully.');
    }
}

