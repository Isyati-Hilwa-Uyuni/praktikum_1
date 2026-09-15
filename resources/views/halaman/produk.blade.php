@extends('layouts.app')

@section('title', 'Daftar produk')

@section('card')
    <div style="border: 1px solid #ccc; padding: 10px; margin: 10px; width: 200px; height: 150px;">
        <h2>Card Title</h2>
        <p>This is a simple card component.</p>
    </div>
@endsection

@section('content')
    <h1>Produk Kami</h1>

    {{-- @foreach ($produk as $p)
        <p>{{ $p->nama }}</p>
    @endforeach --}}

    @for ($i = 1; $i <= 10; $i++)
        produk ({{ $i }}) <br>
    @endfor

@endsection
