<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    private $dataMahasiswa = [
        ['nim' => '1', 'nama' => 'Atha', 'prodi' => 'Teknologi Informasi', 'ipk' => 2.4],
        ['nim' => '2', 'nama' => 'Dajit', 'prodi' => 'Teknologi Informasi', 'ipk' => 3.65],
        ['nim' => '3', 'nama' => 'kicik', 'prodi' => 'Teknologi Informasi', 'ipk' => 3],
        ['nim' => '4', 'nama' => 'ibnu', 'prodi' => 'Teknologi Informasi', 'ipk' => 3.7],
        ['nim' => '5', 'nama' => 'alpin', 'prodi' => 'Teknologi Informasi', 'ipk' => 3.99],
    ];

    public function profil() {
        $nama = 'Atha';
        $nim = '1';
        $prodi = 'Teknologi Informasi';
        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    public function daftar() {
        $mahasiswa = $this->dataMahasiswa;
        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim) {
        $mhs = collect($this->dataMahasiswa)->firstWhere('nim', $nim);
        abort_unless($mhs, 404);
        return view('mahasiswa.detail', ['mhs' => $mhs]);
    }
}
