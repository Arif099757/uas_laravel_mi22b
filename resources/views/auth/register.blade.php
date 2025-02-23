<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pengguna</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f4f4f4;
        }

        .register-container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background: #0056b3;
        }

        .error {
            color: red;
            font-size: 12px;
        }

        .link-container {
            margin-top: 10px;
            font-size: 12px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h1>Daftar</h1>
        <form action="{{ url('/register') }}" method="POST">
            @csrf
            <div>
                <input type="text" name="name" id="name" placeholder="Nama" required>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input type="email" name="email" id="email" placeholder="Email" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Password" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi Password" required>
            </div>
            <button type="submit">Daftar</button>
        </form>
        <div class="link-container">
            <p>Sudah punya akun? <a href="{{ url('/login') }}">Login di sini</a></p>
        </div>
    </div>

</body>
</html>
