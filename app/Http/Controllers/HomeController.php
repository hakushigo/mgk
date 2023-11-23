<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $welcomeContents = WelcomeContent::all();
        return view('welcome')->with('welcomeContents', $welcomeContents);
    }

    public function create()
    {
        // Logika untuk menampilkan formulir pembuatan data baru, jika diperlukan
        return view("create");
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data baru ke dalam penyimpanan, seperti database
        return redirect()->route('home.index')->with('success', 'Data berhasil disimpan.');
    }

    public function show($id)
    {
        // Logika untuk menampilkan detail data dengan ID tertentu
        return view("show", compact('id'));
    }

    public function edit($id)
    {
        // Logika untuk menampilkan formulir pengeditan data dengan ID tertentu
        return view("edit", compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logika untuk menyimpan perubahan pada data dengan ID tertentu
        return redirect()->route('home.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Logika untuk menghapus data dengan ID tertentu
        return redirect()->route('home.index')->with('success', 'Data berhasil dihapus.');
    }

    public function welcome(Request $request)
    {
        $auth = Auth::user();

        $data = [
            "auth" => $auth
        ];

        return view("welcome", $data);
    }
}
