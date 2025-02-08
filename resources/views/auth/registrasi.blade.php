@extends('layouts.app')

@section('title', 'Registrasi')

@section('content')
    <div class="register-container">
        <h2>Daftar</h2>

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <label for="name">Nama:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="password_confirmation">Konfirmasi Password:</label>
            <input type="password" name="password_confirmation" required>

            <button type="submit">Daftar</button>
        </form>
    </div>
@endsection
