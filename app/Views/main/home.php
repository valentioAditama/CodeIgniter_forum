<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet" />
  <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
  <!-- MDB -->
  <link rel="icon" href="<?=base_url()?>/chat.ico" type="image/gif">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
  <title>Home</title>
</head>

<body>
  <section>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <!-- Container wrapper -->
      <div class="container">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar brand -->
          <a class="navbar-brand mt-2 mt-lg-0" href="home.html">
            <i class="fas fa-users"></i>
          </a>
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="home.html">Forum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="explore.html">Explore</a>
            </li>
            <li class="nav-item dropdown me-3 me-lg-1">
              <a class="nav-link dropdown-toggle hidden-arrow" href="chat.html" role="button">
                <i class="fas fa-comments fa-lg"></i>
                <span class="badge rounded-pill badge-notification bg-danger">99+</span>
              </a>
            </li>
            <li class="nav-item dropdown me-3 me-lg-1">
              <a class="nav-link dropdown-toggle hidden-arrow" href="notifications.html" role="button"
                data-mdb-toggle="dropdown">
                <i class="fas fa-bell fa-lg"></i>
                <span class="badge rounded-pill badge-notification bg-danger">12</span>
              </a>
          </ul>
          <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
        <!-- Right elements -->
        <div class="d-flex align-items-center">
          <form class="d-flex input-group w-auto">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
              aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </span>
          </form>
          </a>
          <!-- Avatar -->
          <div class="dropdown">
            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar"
              role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <img src="<?php echo base_url('assets/profile-default.gif') ?>" class="rounded-circle" height="25"
                alt="Black and White Portrait of a Man" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
              <li>
                <a class="dropdown-item" href="<?php echo base_url('home/profile/'. session()->get("fullname")) ?>">My profile</a>
              </li>
              <!-- <li>
                <a class="dropdown-item" href="account_settings.html">Settings</a>
              </li> -->
              <li>
                <a class="dropdown-item" href="<?php base_url();?>/logout">Logout</a>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <span class="navbar-text p-2">
                Hi, <?php echo session()->get('fullname'); ?>
              </span>
            </ul>
          </div>
        </div>
        <!-- Right elements -->
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </section>
  <section>
    <div class="container">
      <div class="p-3">
        <div class="row">
          <div class="col-md-3 d-flex justify-content-end">
            <img src="<?php echo base_url('assets/442008570_ARTIST_AVATAR_3D_400px.gif')?>" height="100"
              class="rounded-circle" alt="">
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <input type="text" class="form-control" placeholder="Any Ideas?" readonly>
          </div>
          <div class="col-md-3 d-flex align-items-center">
            <button type="button" class="btn btn-success" data-mdb-toggle="modal" data-mdb-target="#createIdeas">
              Create here!
            </button>
            <!-- Modal -->
            <div class="modal fade" id="createIdeas" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Typing your ideas in here</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div id="editor">
                      Type here
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Posting</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container p-3">
      <div class="row">
        <div class="col-md-3">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia delectus molestias cum nihil
          inventore et obcaecati minima error ratione ab amet excepturi aut aspernatur ea tempora sapiente,
          vel animi id.
        </div>
        <div class="col-md-6 shadow-5 rounded-4 p-3">
          <div class="p-3 shadow-3-strong rounded-4">
            <div class="row">
              <div class="col-md-2">
                <div class="d-flex justify-content-end">
                  <img src="<?php echo base_url('assets/img_avatar.png')?>" height="75" class="rounded-circle" alt="">
                </div>
              </div>
              <div class="col-md-8">
                <div class="d-flex align-items-center">
                  <div class="d-flex flex-column">
                    <div><b>Valentio Aditama</b><span> &#9737; </span><a href="#"><small>Follow</small></a></div>
                    <div>System Engineering</div>
                    <div class="text-black-50"><small>- 9 Min</small></div>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="d-flex justify-content-end">
                  <div class="dropdown">
                    <i class="fas fa-chevron-down" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown"
                      aria-expanded="false">
                    </i>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 p-3">
                <p>Nah inilah akibat kurangnya membaca berita secara tuntas. Sirkuit Mandalika itu dibangun
                  di atas lahan KEK(Kawasan Ekonomi Khusus) Mandalika. Pengelola KEK Mandalika itu adalah
                  PT Pengembangan Pariwisata Indonesia (Persero).[1] Trus PT PPI itu gak Mendanai
                  pembangunan Sirkuit, Pemerintah juga gak mendanai. Yang mendanai adalah Vinci
                  Construction merupakan perusahaan konstruksi asal Perancis. Total dana yang
                  digelontorkan adalah 6,5Trilyun. [2] [3]</p>
              </div>
              <div class="col-md-12 ">
                <center>
                  <img
                    src="<?php echo base_url('/assets/2022_1500_motogp_02_ina_mgp_day04_race_edit_hs.video_list_2x.jpg')?>"
                    class="img-fluid hover-shadow" alt="">
                </center>
                <div class="row">
                  <div class="d-flex justify-content-between">
                    <div class="col-md-2">
                      <div class="p-3">
                        <div class="d-flex justify-content-center align-items-center">
                          <i class="far fa-thumbs-up fa-lg p-2"></i> Likes
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="p-3">
                        <div class="d-flex justify-content-center align-items-center">
                          <i class="far fa-comment fa-lg p-2"></i> Comment
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="p-3">
                        <div class="d-flex justify-content-center align-items-center">
                          <i class="fas fa-share fa-lg p-2"></i> Share
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pt-3">
            <div class="p-3 shadow-3-strong rounded-5">
              <div class="row">
                <div class="col-md-2">
                  <div class="d-flex justify-content-end">
                    <img src="<?php echo base_url('/assets/img_avatar.png')?>" height="75" class="rounded-circle"
                      alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="d-flex align-items-center">
                    <div class="d-flex flex-column">
                      <div><b>Valentio Aditama</b><span> &#9737; </span><a href="#"><small>Follow</small></a></div>
                      <div>System Engineering</div>
                      <div class="text-black-50"><small>- 9 Min</small></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="d-flex justify-content-end">
                    <div class="dropdown">
                      <i class="fas fa-chevron-down" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown"
                        aria-expanded="false">
                      </i>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Delete</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 p-3">
                  <p>Nah inilah akibat kurangnya membaca berita secara tuntas. Sirkuit Mandalika itu dibangun
                    di atas lahan KEK(Kawasan Ekonomi Khusus) Mandalika. Pengelola KEK Mandalika itu adalah
                    PT Pengembangan Pariwisata Indonesia (Persero).[1] Trus PT PPI itu gak Mendanai
                    pembangunan Sirkuit, Pemerintah juga gak mendanai. Yang mendanai adalah Vinci
                    Construction merupakan perusahaan konstruksi asal Perancis. Total dana yang
                    digelontorkan adalah 6,5Trilyun. [2] [3]</p>
                </div>
                <div class="col-md-12 ">
                  <center>
                    <img
                      src="<?php echo base_url('assets/2022_1500_motogp_02_ina_mgp_day04_race_edit_hs.video_list_2x.jpg') ?>"
                      class="img-fluid hover-shadow" alt="">
                  </center>
                  <div class="row">
                    <div class="d-flex justify-content-between">
                      <div class="col-md-2">
                        <div class="p-3">
                          <div class="d-flex justify-content-center align-items-center">
                            <i class="far fa-thumbs-up fa-lg p-2"></i> Likes
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="p-3">
                          <div class="d-flex justify-content-center align-items-center">
                            <i class="far fa-comment fa-lg p-2"></i> Comment
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="p-3">
                          <div class="d-flex justify-content-center align-items-center">
                            <i class="fas fa-share fa-lg p-2"></i> Share
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi qui aut ipsam quasi eius, tempore,
          consequatur harum deserunt natus quam placeat maiores sequi. Quisquam minima, natus aliquid qui
          perspiciatis adipisci!
        </div>
      </div>

    </div>
  </section>
</body>
<script>
  ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
      console.error(error);
    });
</script>

</html>