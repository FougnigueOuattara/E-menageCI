<?php

namespace App\Repository;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserRepository
{
    public function formatUserFromHttpRequest(Request $request)
    {
        $user = new User;

        $file = $request->file('picture');
        $path = $file->store('profil', 'public');

        $user->firstName = $request->input('firstname');
        $user->lastName = $request->input('name');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->gender = $request->input('genre');
        $user->phoneNumber = $request->input('number');
        $user->city = $request->input('city');
        $user->quarter = $request->input('quarter');
        $user->photo = $path;
        $user->staff = $request->input('work');
        $user->etat = true;
        $user->password = Hash::make($request->input('password'));
        $user->created_at = now();

        $request->validate([
            'name' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'age' => 'required|integer|min:20',
            'number' => 'required|numeric',
            'city' => 'required|string|max:255',
            'quarter' => 'required|string|max:255',
            'password' => 'required|string|min:5',
            'work' => 'required|string',
            'genre' => 'required|string|in:M,F',
            'picture' => 'required|image|max:2048',
        ]);


        return $user;
    }
}
