<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerantController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:students|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        User::create($validatedData);

        return redirect()->route('index')->with('success', 'Utilisateur ajouté avec succès');
      

        // return redirect('/index');
    }
}
