<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'asc')->get();
        return view('pages.pegawai.index', ['employees' => $users]);
    }

    public function dashboard()
    {
        $jumlahPegawai = User::count();

        $jumlahPosisi = User::distinct('name')->count('name');
        $jumlahKota = User::distinct('alamat')->count('alamat');

        $statistikKota = User::select('alamat', DB::raw('count(*) as jumlah'))
                             ->groupBy('alamat')
                             ->pluck('jumlah', 'alamat');

        $data = [
            'jumlah_pegawai' => $jumlahPegawai,
            'jumlah_orang' => $jumlahPosisi,
            'jumlah_kota' => $jumlahKota,
            'statistik_kota' => $statistikKota
        ];

        return view('pages.dashboard', compact('data'));
    }

    public function create()
    {
        return view('pages.pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = $path;
        }

        $data['password'] = bcrypt($request->input('password', 'default_password'));

        User::create($data);

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pegawai = User::findOrFail($id);
        return view('pages.pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pegawai = User::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('avatar')) {
            if ($pegawai->avatar) {
                Storage::disk('public')->delete($pegawai->avatar);
            }

            $path = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = $path;
        }

        $pegawai->update($data);

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil diupdate.');
    }

    public function destroy($id)
    {
        $pegawai = User::findOrFail($id);
        if ($pegawai->avatar) {
            Storage::disk('public')->delete($pegawai->avatar);
        }
        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil dihapus.');
    }
}
