<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('profile');
        }
        return back()->withErrors(['email' => 'Invalid email or password']);
    }

    public function showProfile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->update($request->only('username', 'phone', 'address'));
        return back()->with('success', 'Profile updated successfully');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
