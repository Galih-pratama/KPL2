<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk/Daftar MyShop</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <div class="header">
        <h2>Selamat datang di MyShop,
            Ayo belanja!
        </h2>
    </div>

    <form method="POST" action="/login">
      @csrf
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" placeholder="Masukkan email" autocomplete="off">
        </div>


        <div class="input-group">
            <label>Kata Sandi</label>
            <input type="password" name="password" placeholder="Masukkan kata sandi">
        </div>

        <div class="input-group">
            <button type="submit" name="login" class="buton" >Masuk</button>
        </div>
        <p>
            Belum bergabung? <a href="/register">Daftar</a>
        </p>
        
    </form>
</body>
</html>