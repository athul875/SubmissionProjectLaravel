<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MatakuliahController;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello Laravel!';
});

Route::get('/perkenalan', function () {
    return 'Muhammad Atha Zufar Haqq 242520054';
});

Route::get('/halo', function () {
    return 'Halo, selamat datang di Laravel 13!';
});

Route::get('/waktu', fn () => now()->format('d-m-Y H:i:s'));

Route::get('/profil/{nama}', function (string $nama) {
    return "Halo, {$nama}!";
});

Route::get('/kategori/{nama?}', function (?string $nama = 'semua') {
    return "Menampilkan kategori: {$nama}";
});

Route::get('/kelas/{kode}/mahasiswa/{nim}', function (string $kode, string $nim) {
    return "Kelas {$kode}, NIM {$nim}";
});

Route::get('/artikel/{id}', function (int $id) {
    return "Artikel nomor {$id}";
})->whereNumber('id');

Route::get('/pengguna/{username}', function (string $username) {
    return "Pengguna: {$username}";
})->whereAlpha('username');

Route::get('/kode/{kode}', function (string $kode) {
    return "Kode: {$kode}";
})->Where('kode', '[A-Z]{3}[0-9]{2}');

Route::view('/tentang', 'tentang')->name('tentang');

Route::get('/kontak', function () {
    return view('kontak', ['email' => 'info@kampus.ac.id']);
})->name('kontak');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', fn() => 'Dashboard Admin')
        ->name('dashboard');

    Route::get('/pengaturan', fn() => 'Pengaturan Admin')
        ->name('pengaturan');
});

Route::redirect('/beranda', '/');

Route::fallback(function () {
    return response('Halaman tidak ditemukan (kustom).', 404);
});

Route::get('/produk', [ProductController::class, 'index']) -> name('produk.index');
Route::get('/produk/{id}', [ProductController::class, 'show']) -> name('produk.show');
Route::resource('produk', ProductController::class);

Route::get('/profil', [MahasiswaController::class, 'profil'])->name('mahasiswa.profil');
Route::get('/mahasiswa', [MahasiswaController::class, 'daftar'])->name('mahasiswa.daftar');
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'detail'])->name('mahasiswa.detail');

// Route::get('/jurusan', [JurusanController::class, 'index']);
// Route::get('/jurusan/{id}', [JurusanController::class, 'show']);

// Pertemuan 6
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
Route::get('/jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.store');

//Tugas Pertemuan 6
Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.store'); 
Route::get('/matakuliah/{id}',  [MatakuliahController::class, 'show'])->name('matakuliah.show');