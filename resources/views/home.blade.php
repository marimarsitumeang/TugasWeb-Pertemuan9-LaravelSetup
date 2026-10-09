@extends('layout')
@section('title', 'Dashboard')
@section('content')
    <h1 class="text-3xl font-bold text-indigo-700 mb-2">{{ $judul }}</h1>
    <p class="mb-6">{{ $deskripsi }}</p>

    <h2 class="text-xl font-semibold mb-3">Yang dipelajari:</h2>
    <ul class="list-disc list-inside space-y-1">
        @foreach ($fitur as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
@endsection 