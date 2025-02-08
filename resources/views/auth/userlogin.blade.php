@extends('layouts.app')

@section('title', 'Login Siswa')

@section('content')
<div class="user-login-wrapper">
    <div class="user-login-container">
        <h2>Login Siswa</h2>

        @if(session('error'))
            <p class="error-message">{{ session('error') }}</p>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" name="email" required placeholder="Masukkan Email">
            </div>

            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required placeholder="Masukkan Password">
            </div>

            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</div>
@endsection
