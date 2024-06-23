<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'jumlah_pegawai' =>  Employee::count(),
            'jumlah_posisi' => 8, // Replace with actual logic to count positions if available
            'jumlah_kota' => 8, // Replace with actual logic to count cities if available
            'statistik_posisi' => [
                'A' => 40,
                'B' => 30,
                'C' => 20,
                'D' => 10
            ],
            'statistik_kota' => [
                'City A' => 50,
                'City B' => 20,
                'City C' => 20,
                'City D' => 10
            ]
        ];

        $employees = Employee::all();

        return view('pages.dashboard', compact('data', 'employees'));
    }
}
