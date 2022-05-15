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
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Upload Postingan</title>
</head>

<body>
    <section>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand mt-2 mt-lg-0" href="/home">
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
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                            id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                            aria-expanded="false">
                            <img src="<?php echo base_url('assets/profile-default.gif') ?>" class="rounded-circle"
                                height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item"
                                    href="<?php echo base_url('profile/edit/'. session()->get('id')) ?>">My
                                    profile</a>
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
                                Hi, <?php echo session()->get('fullname')?>
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
        <form action="<?php echo base_url('/uploadPostingan/process/'.session()->get('id'))?>" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id_users" id="id_users" value="<?php echo session()->get('id') ?>"> 
            <div class="p-3">
                <div class="container">
                    <div class="mb-3"> 
                        <button type="submit" class="btn btn-success container">Upload Postingan</button>
                    </div>
                    <textarea name="postingan" id="postingan" class="form-control" cols="30" rows="10" placeholder="Enter Your ideas in here!"></textarea>
                </div>
            </div>
        </form>
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