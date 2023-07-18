<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
//        dd($request->all());
        $user = Auth::user();
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'nickname' => 'required',
            'facebook' => 'required',
            'line' => 'required',
            'telephone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'slip' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as needed
        ]);
        if ($request->hasFile('slip')) {
            $image = $request->file('slip');
            $path = $image->store('images');
//            <img src="{{ Storage::url($path) }}" alt="Image">
        }

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->nickname = $request->nickname;
        $user->facebook = $request->facebook;
        $user->line = $request->line;
        $user->telephone = $request->telephone;
        $user->date = $request->date;
        $user->time = $request->time;
        $user->register = 1;
        $user->slip = $path;
        $user->save();
        return redirect('/dashboard')->withErrors(['error' => 'Failed to save data.']);
        // Redirect or return a response as desired
    }
}
