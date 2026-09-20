<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700636',
            'nama' => 'Muhammad Dzaki Al Hakim',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'dzakialhhakim72@gmail.com',
            'status' => 'aktif',
        ];
        return view('mahasiswa', compact('mahasiswa'));
    }

}