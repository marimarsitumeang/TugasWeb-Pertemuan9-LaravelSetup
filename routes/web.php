<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    $data = [
        'judul' => 'Dashboard',
        'deskripsi' => 'Ini adalah project tugas rutin pertemuan 9, dan merupakan project laravel pertama saya.',
        'fitur' => ['Routing', 'Blade Template', 'Controller', 'Model & Migration'],
    ];
    return view('home', $data);
});

Route::get('/about', function () {
    $profil = [
        'nama' => 'Marimar Situmeang',
        'nim' => '4252250010',
        'kelas' => 'PSIK 25B',
        'hobi' => ['Membaca', 'Musik'],
    ];
    return view('about', ['profil' => $profil]);
});

Route::get('/contact', function () {
    $kontak = [
        ['label' => 'Email', 'isi' => 'marimarsitumeang.com'],
        ['label' => 'Instagram', 'isi' => 'MarimarS007'],
        ['label' => 'GitHub', 'isi' => 'github.com/marimarsitumeang'],
    ];
    return view('contact', ['kontak' => $kontak]);
});

// Bonus: route parameter
Route::get('/hello/{nama}', function ($nama) {
    return view('hello', ['nama' => $nama]);
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);