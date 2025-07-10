<link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      data-purpose="Layout StyleSheet"
      title="Web Awesome"
      href="/css/app-wa-d53d10572a0e0d37cb8d614a3f177a0c.css?vsn=d"
    >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-thin.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-solid.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-regular.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-light.css"
      >
          <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">


<div style="background-image: url('img/bg-login.jpg');
     background-size: 100%;
     background-repeat: no-repeat;
    background-position: center;
        margin: 0;
     padding: 0;
    min-height: 100vh;
  background-size: cover;
font-family: 'Noto Serif', serif;
display: flex;
  justify-content: center;
  align-items: center;

  ">



<div class="row d-flex justify-content-center">
    <div class="col-md-8">
        <center>
            <div class="wrapper  border border-1 border-black shadow-lg">
                <div class="form-box login">
                    <h2>Login</h2>
                    <p>Silahkan Login Terlebih Dahulu</p>

                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" style="background: transparent;"></button>
                        </div>
                    @endif

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" style="background: transparent;"></button>
                        </div>
                    @endif

                    <form action="/login" method="post">
                        @csrf
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <input type="email" class="@error('email') is-invalid @enderror" name="email" id="email" required>
                            <label>Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input type="password" name="password" id="password" required>
                            <label>Password</label>
                        </div>
                        <button type="submit" name="login" class="btn">Login</button>
                        <div class="login-register">
                            <p>Dont have an account? <a
                            href="#"
                            class="register-link">Register</a>
                            </p>
                        </div>
                    </form>
                </div>

                <div class="form-box register">
                    <h2>Registration</h2>
                    <form action="/register" method="post">
                        @csrf
                        <div class="input-box">
                            <span class="icon"><ion-icon name="person"></ion-icon></span>
                            <input type="text" class="@error('name') is-invalid @enderror" name="name" id="name" required>
                            <label>Nama</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="email"></ion-icon></span>
                            <input type="email" class="@error('email') is-invalid @enderror" name="email" id="email" required>
                            <label>Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input type="password"  class="@error('password') is-invalid @enderror" name="password" id="password" required>
                            <label>Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn">Register</button>
                        <div class="login-register">
                            <p>Already have an account? <a
                            href="#"
                            class="login-link">Login</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </center>
    </div>
</div>
</div>
        <script src="js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/vanilla-tilt.min.js"></script>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelectorAll('.shoes-box'), {
        max: 35,
        speed: 1000,
        glare: true,
      });
    </script>


