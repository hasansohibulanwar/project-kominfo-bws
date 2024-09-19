<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporController extends Controller
{
    // Method untuk menampilkan halaman index atau daftar laporan
    public function index()
    {
        // Ambil semua laporan dari database
        $laporan = Laporan::all();

        // Return view dengan data laporan
        return view('pages.lapor.index', compact('laporan'));
    }

    // Method untuk menyimpan laporan yang dikirim dari form
    public function store(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'classification' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'privacy' => 'required|string|in:public,private', // Ensure valid privacy values
        ]);

        // Buat instance Laporan baru
        $laporan = new Laporan();
        $laporan->fill($validatedData); // Mass assign the validated data

        // Jika ada file yang diunggah, simpan file tersebut
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('lampiran', 'public');
            $laporan->file = $filePath;
        }

        // Simpan laporan ke database
        $laporan->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Laporan berhasil dikirim.');
    }
}
