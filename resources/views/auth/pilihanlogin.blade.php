@extends('layouts.app')

@section('title', 'Pilih Login')

@section('content')
    <div class="login-hero">
        <div class="overlay"> <!-- Tambahkan overlay agar teks lebih jelas -->
            <div class="login-container">

                <h2>Pilih Jenis Login</h2>
                @if(session('success'))
                <p class="success-message">{{ session('success') }}</p>
                @endif
                <div class="choice-buttons">
                    <a href="{{ route('admin.login') }}" class="choice-button admin">Login sebagai Admin</a>
                    <a href="{{ route('login') }}" class="choice-button user">Login sebagai Siswa</a>

                    <p class="register-text">Belum punya akun?</p>
                    <a href="{{ route('register') }}" class="register-button">Daftar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
