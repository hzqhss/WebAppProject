<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show the login page.
     */
    public function showLogin()
    {
        return view('login');
    }

    /**
     * Handle user login.
     */
    public function login(Request $request)
    {
        // Validate input fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt authentication
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Redirect to the menu page on successful login
            return redirect()->route('menu');
        }

        // Redirect back with error message on failure
        return back()->withErrors(['email' => 'Invalid email or password']);
    }

    /**
     * Show the menu page.
     */
    public function showMenu()
    {
        return view('menu'); // View located in resources/views/menu.blade.php
    }

    /**
     * Show the user profile.
     */
    public function showProfile()
    {
        $user = Auth::user(); // Get the authenticated user
        return view('profile', compact('user'));
    }

    /**
     * Update user profile.
     */
    public function updateProfile(Request $request)
    {
        // Validate input fields
        $request->validate([
            'username' => 'required|string|max:255',
            'phone' => 'nullable|digits_between:10,15',
            'address' => 'nullable|string|max:255',
        ]);

        // Update user details
        $user = Auth::user();
        $user->update($request->only('username', 'phone', 'address'));

        return back()->with('success', 'Profile updated successfully');
    }

    /**
     * Logout the user.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
