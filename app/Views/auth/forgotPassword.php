<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> Forgot Password </title>
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css'>
    <link rel="icon" href="<?=base_url()?>/chat.ico" type="image/gif">
</head>
<body>
  <!-- partial:index.partial.html -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Lupa Password</h2>
        <div class="text-center mb-5 text-dark">Ayo bangun koneksimu bersama anggota lainnya!</div>
        <div class="card my-5">
          <form class="card-body cardbody-color p-lg-5">
            <div class="text-center">
              <img src="<?php echo base_url('assets/442008570_ARTIST_AVATAR_3D_400px.gif')?>"
                class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="Email"
                required>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-primary px-5 mb-5 w-100">Submit</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Sudah punya akun? <a href="/"
                class="text-dark fw-bold text-decoration-none"> Login</a>
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