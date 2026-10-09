<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama' => 'Marimar Situmeang', 'nim' => '4252250010', 'jurusan' => 'Ilmu Komputer'],
            ['nama' => 'Albert Situmorang', 'nim' => '4252250006', 'jurusan' => 'Ilmu Komputer'],
            ['nama' => 'Holan Samosir',     'nim' => '4253550015', 'jurusan' => 'Ilmu Komputer'],
        ];

        foreach ($data as $row) {
            // updateOrCreate: aman dijalankan berulang, tidak membuat data ganda
            Mahasiswa::updateOrCreate(['nim' => $row['nim']], $row);
        }
    }
}