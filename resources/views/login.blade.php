<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 24px;
      color: #333;
    }

    .login-container input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
    }

    .login-container button {
      width: 100%;
      padding: 12px;
      background-color: #2575fc;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-container button:hover {
      background-color: #1a5ed9;
    }

    .login-container .forgot {
      text-align: center;
      margin-top: 16px;
    }

    .login-container .forgot a {
      color: #2575fc;
      text-decoration: none;
      font-size: 0.9em;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
     @if (session('success'))
      <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
        {{ session('success') }}
      </div>
    @endif
    <form action="{{route('login.post')}}" method="POST">
      @csrf
      <input type="text" name="email" placeholder="email" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Masuk</button>
    </form>
    <div class="forgot">
      <a href="{{route('register')}}">Registrasi</a>
    </div>
  </div>
</body>
</html>
