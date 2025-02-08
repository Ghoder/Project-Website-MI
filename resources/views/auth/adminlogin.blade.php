@extends('layouts.app')

@section('title', 'Login Admin')

@section('content')
<div class="admin-login-wrapper">
    <div class="admin-login-container">
        <h2>Login Admin</h2>

        @if(session('error'))
            <p class="error-message">{{ session('error') }}</p>
        @endif

        <form action="{{ route('admin.login.post') }}" method="POST">
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
