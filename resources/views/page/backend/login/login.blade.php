<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #199BD9, #2BB4B4);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            width: 430px;
            background: white;
            border-radius: 10px;
            padding: 40px 45px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        h2 {
            color: #2736D9;
            font-size: 22px;
            margin-bottom: 5px;
        }
        p {
            color: #555;
            font-size: 14px;
            margin-bottom: 25px;
        }
        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 18px;
            font-size: 14px;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #1A00FF;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            opacity: .9;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }
        .error {
            background: #ffdddd;
            color: #d00;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="card">

        <h2>Login Pengguna</h2>
        <p>Masuk ke akun Anda</p>

        @if(session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>

        <div class="footer">
            © 2025 Kelompok 4
        </div>
    </div>

</body>
</html>
