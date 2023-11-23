<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getLogin(Request $request)
    {
        if (Auth::user()) {
            return redirect()->route("welcome");
        }
        return view("auth.login");
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::where("email", $request->email)->first();
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->route("login")->with("error", "Kredensial akun tidak ditemukan");
        }

        Auth::attempt([
            "email" => $request->email,
            "password" => $request->password
        ]);

        return redirect()->route("welcome");
    }

    public function getRegister(Request $request)
    {
        if (Auth::user()) {
            return redirect()->route("welcome");
        }
        return view("auth.register");
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route("login");
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
