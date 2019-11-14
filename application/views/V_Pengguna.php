<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?=base_url()?>asset/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>asset/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>asset/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>asset/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?=base_url()?>asset/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?=base_url()?>asset/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>asset/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>asset/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>asset/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>asset/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>asset/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?=base_url()?>asset/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?=base_url()?>/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
      <?php include('sidebar.php') ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <?php include('topbar.php') ?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <a href="<?php echo base_url().'Pengguna/tambahData'?>"><button type="button" class="btn btn-primary  pull-right">Tambah Data</button> </a>
                        <div class="row">
                            <div class="col-lg-13">

                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th> Id</th>
                                                <th> Nama</th>
                                                <th> Email </th>
                                                <th> Alamat </th>
                                                <th> No Telepon </th>
                                                <th> Status </th>
                                                <th> Aksi </th>

                                            </tr>
                                        </thead>
                                        <?php
                                        foreach($pengguna as $a){?>
                                        <tbody>
                                            <tr>
                                              <td><?php echo $a -> id_pengguna?></td>
                                              <td><?php echo $a -> nama_pengguna?></td>
                                              <td><?php echo $a -> email_pengguna?></td>
                                              <td><?php echo $a -> alamat_pengguna?></td>
                                              <td><?php echo $a -> telp_pengguna?></td>
                                              <td><?php echo $a -> status_pengguna?></td>


                                              <td>
                                                <a href="<?php echo base_url().'Pengguna/EditData/'.$a->id_pengguna;?>"><button type="button" class="btn btn-warning" data-toggle="tooltip" title="Edit" ><i class="fas fa-edit"></i></button></a>
                                                <a href="<?php echo base_url().'Pengguna/hapusData/'.$a->id_pengguna;?>"><button type="button" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button></a>

                                              </td>

                                            </tr>
                                              <?php }?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>




                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <!-- Jquery JS-->
    <script src="<?=base_url()?>asset/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?=base_url()?>asset/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?=base_url()?>asset/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?=base_url()?>asset/vendor/slick/slick.min.js">
    </script>
    <script src="<?=base_url()?>asset/vendor/wow/wow.min.js"></script>
    <script src="<?=base_url()?>asset/vendor/animsition/animsition.min.js"></script>
    <script src="<?=base_url()?>asset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?=base_url()?>asset/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>asset/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?=base_url()?>asset/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?=base_url()?>asset/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=base_url()?>asset/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?=base_url()?>asset/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?=base_url()?>asset/js/main.js"></script>

</body>

</html>
<!-- end document-->
