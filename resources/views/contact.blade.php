@extends('layout')
@section('title', 'Contact')
@section('content')
    <h1 class="text-3xl font-bold text-indigo-700 mb-6">Kontak</h1>
    <div class="bg-white rounded-lg shadow divide-y">
        @foreach ($kontak as $k)
            <div class="p-4 flex justify-between">
                <span class="font-semibold">{{ $k['label'] }}</span>
                <span>{{ $k['isi'] }}</span>
            </div>
        @endforeach
    </div>
@endsection