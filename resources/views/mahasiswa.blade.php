@extends('layout')
@section('title', 'Mahasiswa')
@section('content')
    <h1 class="text-3xl font-bold text-indigo-700 mb-6">Daftar Mahasiswa</h1>
    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="w-full text-left">
            <thead class="bg-indigo-600 text-white">
                <tr>
                    <th class="p-3">No</th>
                    <th class="p-3">Nama</th>
                    <th class="p-3">NIM</th>
                    <th class="p-3">Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $i => $m)
                    <tr class="border-b">
                        <td class="p-3">{{ $i + 1 }}</td>
                        <td class="p-3">{{ $m['nama'] }}</td>
                        <td class="p-3">{{ $m['nim'] }}</td>
                        <td class="p-3">{{ $m['jurusan'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection