<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Halaman Registrasi</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #43cea2, #185a9d);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .register-container {
      background-color: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 450px;
    }

    .register-container h2 {
      text-align: center;
      margin-bottom: 24px;
      color: #333;
    }

    .register-container input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
    }

    .register-container button {
      width: 100%;
      padding: 12px;
      background-color: #185a9d;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .register-container button:hover {
      background-color: #104478;
    }

    .register-container .login-link {
      text-align: center;
      margin-top: 16px;
      font-size: 0.9em;
    }

    .register-container .login-link a {
      color: #185a9d;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h2>Registrasi Akun</h2>
    <form action="{{route('register.post')}}" method="POST">
        @csrf
      <input type="text" name="name" placeholder="Nama Lengkap" required />
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required />
      <button type="submit">Daftar</button>
    </form>
    <div class="login-link">
      Sudah punya akun? <a href="{{route('login')}}">Login di sini</a>
    </div>
  </div>
</body>
</html>
