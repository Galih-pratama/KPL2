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
            Ayo bergabung!
        </h2>
    </div>
    


    <form method="post" action="/register">
      @csrf

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" class=" @error('username')is-invalid @enderror" placeholder="Masukkan username" autocomplete="off">

            @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" class=" @error('email')is-invalid @enderror" placeholder="Masukkan email" autocomplete="off">

            @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="input-group">
            <label>Kata Sandi</label>
            <input type="password" name="password" class=" @error('password')is-invalid @enderror" placeholder="Masukkan kata sandi">

            @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          </div>
          
        <div class="input-group">
          <label>No. Handphone</label>
          <input type="number" class=" @error('nomer')is-invalid @enderror" name="nomer" placeholder="Enter No Hp" autocomplete="off" pattern="(\+62|62|0)8[1-9][0-9]{6,12}$">

          @error('nomer')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
      </div>

      <div class="input-group">
        <label class="text-light mb-2"><i class="bi bi-calendar"></i> Tanggal</label>
        <div class="col-sm-12">
                <input type="datetime-local" class="form-control" placeholder="Enter Date">
        </div>
    </div>
    <script type="text/javascript">
      $(function() {
          $('#datepicker').datepicker();
      });
    </script>


        <div class="input-group">
            <button type="submit" name="register" class="buton" >Daftar</button>
        </div>
        <p>
            Sudah bergabung? <a href="/">Masuk</a>
        </p>
    </form>
</body>
</html>