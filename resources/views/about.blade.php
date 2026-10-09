@extends('layout')
@section('title', 'About')
@section('content')
    <h1 class="text-3xl font-bold text-indigo-700 mb-6">Tentang Saya</h1>
    <div class="bg-white rounded-lg shadow p-6 space-y-2">
        <p><strong>Nama:</strong> {{ $profil['nama'] }}</p>
        <p><strong>NIM:</strong> {{ $profil['nim'] }}</p>
        <p><strong>Kelas:</strong> {{ $profil['kelas'] }}</p>
        <p><strong>Hobi:</strong> {{ implode(', ', $profil['hobi']) }}</p>
    </div>
@endsection