<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }


    // Method to show the user's profile content
    public function show()
    {
        return view('profile.show', [
            'user' => Auth::user(), // Pass the authenticated user to the view
        ]);
    }

    

}
