<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div class="register-container">
        <h2>Tambah Admin</h2>

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif
        @if(session('error'))
            <p class="error">{{ session('error') }}</p>
        @endif

        <form action="{{ route('admin.register') }}" method="POST">
            @csrf
            <label for="name">Nama:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="password_confirmation">Konfirmasi Password:</label>
            <input type="password" name="password_confirmation" required>

            <button type="submit">Tambah Admin</button>
        </form>
    </div>
</body>
</html>
