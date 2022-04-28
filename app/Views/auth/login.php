<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css'>
    <link rel="icon" href="<?=base_url()?>/chat.ico" type="image/gif">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login </h2>
        <div class="text-center mb-5 text-dark">Ayo bangun koneksimu bersama anggota lainnya!</div>
        <div class="card my-5">
          <form action="<?php base_url()?>/login/process" method="POST" class="card-body cardbody-color p-lg-5">
            <div class="text-center">
              <img src="<?php echo base_url('assets/442008571_ARTIST_AVATAR_3D_400px.gif') ?>"
                class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                placeholder="Email">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <div class="mb-3">
              <a href="/forgotPassword" class="text-decoration-none p-1 ">Lupa password?</a>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary px-5 mb-5 w-100">Login</button>
            </div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Tidak Punya Akun? <a href="/register"
                class="text-dark fw-bold text-decoration-none"> Buat Akun</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.min.js'></script>
</body>

</html>