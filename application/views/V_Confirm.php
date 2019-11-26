<!DOCTYPE html>
<?php include('koneksi.php')?>
<html lang="en">
  <head>
    <title>Explore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="<?php echo base_url()?>/asset2/js/jquery-3.2.1.min.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url()?>/asset2/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/asset2/css/animate.css">

    <link rel="stylesheet" href="<?=base_url()?>/asset2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/asset2/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/asset2/css/magnific-popup.css">

    <link rel="stylesheet" href="<?=base_url()?>/asset2/css/aos.css">

    <link rel="stylesheet" href="<?=base_url()?>/asset2/css/ionicons.min.css">

    <link rel="stylesheet" href="<?=base_url()?>/asset2/css/flaticon.css">
    <link rel="stylesheet" href="<?=base_url()?>/asset2/css/icomoon.css">
    <link rel="stylesheet" href="<?=base_url()?>/asset2/css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
        <!--logo-->
            <a class="navbar-brand" href="index.html">EXPLORE</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">

            <li class="nav-item">
					<?php
						if($this->session->userdata("logged_in")){?><a href="<?=base_url('Home')?>" class="btn btn-primary px-4 py-2 mt-2"><span>
							<?php
							echo ('Home');
						}
						else{
							?><a href="<?=base_url('Login')?>" class="btn btn-primary px-4 py-2 mt-2"><span>
							<?php
							echo "Log in";
						}
					?>
					</span></a>
			  </li>

			</ul>

	      </div>


	    </div>

	  </nav>



		<section class="ftco-section ftco-services-2" id="services-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Confirmation Page</h2>
            <p>Check your order details before you click confirm</p>
          </div>
        </div>

			</div>


    <div class="row block-9" style="padding-bottom: 30px;padding-left: 80px;padding-right: 80px; ">
       <div class="col-md">
       <?php foreach ($order_pending as $a)?>
       <form action="<?php echo base_url().'Order/insertData';?>" method="post" class="bg-light p-4 p-md-5 contact-form" >

              <div class="form-group" hidden>
                Id Order
                <input type="text" class="form-control" name="ido"  value="<?=$a->id_order?>" readonly>
              </div>
              <div class="form-group" hidden>
                Id TG
                <input type="text" class="form-control" name="idtg"  value="<?=$a->id_tg?>" readonly>
              </div>
              <div class="form-group" hidden>
                Id Tour
                <input type="text" class="form-control" name="idt"  value="<?=$a->id_tour?>" readonly>
              </div>
              <div class="form-group">
                Nama Tour
                <input type="text" class="form-control" name="nama"  value="<?=$a->nama_tour?>" readonly>
              </div>
              <div class="form-group">
                Tanggal Berangkat
                <input type="text" class="form-control" name="tgl"  value="<?=$a->tanggal_tour?>" readonly>
              </div>
              <div class="form-group">
                Hari
                <input type="text" class="form-control" name="hari"  value="<?=$a->hari_tour?>" readonly>
              </div>
              <div class="form-group">
                Harga Normal
                <input type="text" class="form-control" name="harga"  value="<?=$a->harga_tour?>" readonly>
              </div>

              <div class="form-group">
                Harga Promo
                <?php
                $x=$a->harga_tour;
                $y=$a->diskon_promo;
                $z=$x-$y;
                ?>
                <input type="text" class="form-control" name="harga_promo"  value="<?=$z?>" readonly>
              </div>
              <div class="form-group">
                Tourguide
                <input type="text" class="form-control" name="tg"  value="<?=$a->nama_pengguna?>" readonly>
              </div>
              <div class="form-group" hidden>
                Status
                <input type="number" class="form-control" name="status_order"  value="0" readonly>
              </div>
              <div class="form-group">
                Jumlah Orang
                <input type="number" class="form-control" name="jumlah_orang">
              </div>

              <div class="form-group">
                <input type="submit" value="Confirm" id="submit" class="btn btn-primary py-3 px-5 " >
              </div>
            </form>
          </div>
        </div>
</section>




    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About <span><a href="index.html">EXPLORE</a></span></h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>


          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Golf Island, Pantai Indah Kapuk, Jakarta Utara, Indonesia.</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 813-1573-9333</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">exploreyuk@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?=base_url()?>/asset2/js/jquery.min.js"></script>
  <script src="<?=base_url()?>/asset2/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=base_url()?>/asset2/js/popper.min.js"></script>
  <script src="<?=base_url()?>/asset2/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/asset2/js/jquery.easing.1.3.js"></script>
  <script src="<?=base_url()?>/asset2/js/jquery.waypoints.min.js"></script>
  <script src="<?=base_url()?>/asset2/js/jquery.stellar.min.js"></script>
  <script src="<?=base_url()?>/asset2/js/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>/asset2/js/jquery.magnific-popup.min.js"></script>
  <script src="<?=base_url()?>/asset2/js/aos.js"></script>
  <script src="<?=base_url()?>/asset2/js/jquery.animateNumber.min.js"></script>
  <script src="<?=base_url()?>/asset2/js/scrollax.min.js"></script>
  <script src="<?=base_url()?>/asset2/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?=base_url()?>/asset2/js/google-map.js"></script>
  <script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>

  <script src="<?=base_url()?>/asset2/js/main.js"></script>

  </body>
</html>
