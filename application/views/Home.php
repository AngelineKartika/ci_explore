<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Explore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#destination-section" class="nav-link"><span>Destination</span></a></li>
	          <li class="nav-item" style="padding-right:12px"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
              <li class="nav-item">
			  		

					<?php 
						if($this->session->userdata("logged_in")){?><a href="<?=base_url('Page')?>" class="btn btn-primary px-4 py-2 mt-2"><span>
							<?php
							echo $this->session->userdata("nama_pengguna");
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

	  <section id="home-section" class="hero" style="padding-bottom: 120px;">
	  	<img src="<?=base_url()?>/asset2/images/blob-shape-3.svg" class="svg-blob" alt="Colorlib Free Template">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last">
	          		<div class="img" style="background-image:url(<?=base_url()?>/asset2/images/labuanbajo.jpg);">
	          			<div class="overlay"></div>
	          		</div>
	          		<div class="bg-primary">
		          		<div class="vr"><span class="pl-3 py-4" style="background-image: url(<?=base_url()?>/asset2/images/labuanbajo.jpg);">Labuan Bajo</span></div>
	          		</div>
	          	</div>

		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading pl-5">Discover Labuan Bajo</span>
			            <h1 class="mb-4 mt-3">Explore Your Travel Destinations like never before</h1>
			            <p>Labuan Bajo is still free from shopping malls and fast-food restaurants – the charm is immediate. Sun, beauty and many different cultures make this the ideal holiday and most interestingly of all.</p>

		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last">
	          		<div class="img" style="background-image:url(<?=base_url()?>/asset2/images/nusapenida.jpg);">
	          			<div class="overlay"></div>
	          		</div>
	          		<div class="vr"><span class="pl-3 py-4" style="background-image: url(<?=base_url()?>/asset2/images/bg_2-2.jpg);">Nusa Penida</span></div>
	          	</div>
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading pl-5">Discover Nusa Penida</span>
			            <h1 class="mb-4 mt-3">Never Stop Exploring</h1>
			            <p>Nusa Penida is the largest and most exotic of the 3 Nusa islands, thanks to its collection of unique Hindu temples and picturesque natural features of cliff formations and lagoons. </p>

			            <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Discover <span class="ion-ios-arrow-forward"></span></a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
            </div>
          </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center pb-0 pb-mb-5 pt-5 pt-md-0">
          <div class="col-md-12 heading-section ftco-animate">
          	<br>
            <h2 class="mb-4">Where do you want to go?</h2>
            <p>Far far away, behind the word mountains, far from the countries.</p>
          </div>
        </div>
	    	<div class="row">
					<div class="col-md-12">
						<div class="search-wrap-1 ftco-animate p-4">
							<form action="#" class="search-property-1">
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Destination</label>
		          				<div class="form-field">
		          					<div class="icon"><span class="ion-ios-search"></span></div>
				                <input type="text" class="form-control" placeholder="Search place">
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Date of the trip</label>
		        					<div class="form-field">
		          					<div class="icon"><span class="ion-ios-calendar"></span></div>
				                <input type="text"class="form-control checkin_date" placeholder="Check In Date">
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Day(s)</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="" id="" class="form-control">
		                        <option value="">1</option>
		                        <option value="">2</option>
		                        <option value="">3</option>
		                        <option value="">4</option>
		                        <option value="">5</option>
		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Person(s)</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="" id="" class="form-control">
		                        <option value="">1</option>
		                        <option value="">2</option>
		                        <option value="">3</option>
		                        <option value="">4</option>
		                        <option value="">5</option>
		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-self-end">
		        				<div class="form-group">
		        					<div class="form-field">
				                <input type="submit" value="Search" class="form-control btn btn-primary">
				              </div>
			              </div>
		        			</div>
		        		</div>
		        	</form>
		        </div>
					</div>
	    	</div>
	    </div>
    </section>
		<hr>
		<section class="ftco-section ftco-services-2" id="services-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-gliding"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Activities</h3>
                <p>There will be a lot of fun activities included in the package.</p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-world"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Travel Arrangement</h3>
                <p>You don't have to feel worry about the schedule, transport, or hotel.  Your itinerary is arranged by EXPLORE.</p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-tour-guide"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Private Guide</h3>
                <p>Our services include a friendly tour guide who has a lot of knowledge about your destination.</p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-map-of-roads"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Location Manager</h3>
                <p>You will get so much easier because EXPLORE arranged your destination. We will give you the best travel experiences.</p>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section" >
    	<div class="container" style="padding-bottom: 50px">
    		<div class="row no-gutters d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(<?=base_url()?>/asset2/images/about.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 px-lg-5 py-md-5 bg-darken">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-5 p-lg-0">
			          	<span class="subheading">Get in touch with us</span>
			            <h2 class="mb-4">Get Best Travel Deals</h2>
			            <p>For those who already have an account for EXPLORE website, there will be a lot advantages like membership discount.</p>
			            <p>So, let's join us and EXPLORE!</p>

			            <p><a href="#" class="btn btn-primary py-3 px-4">Book now</a> <a href="#" class="btn btn-white py-3 px-4">Contact us</a></p>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-intro img" id="destination-section" style="background-image: url(<?=base_url()?>/asset2/images/indonesia.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Choose the Perfect Destination</h2>
						<p>We can manage your dream building A small river named Duden flows by their place</p>
						<p class="mb-0"><a href="#" class="btn btn-white px-4 py-3">Search Places</a></p>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Best Destination</span>
            <h2 class="mb-4">Best Place to Travel</h2>
            <p>Far far away, behind the word mountains, far from the countries</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
    						<div class="vr"><span>Sale</span></div>
		    				<a href="destination.html"><img src="<?=base_url()?>/asset2/images/labuanbajo.jpg" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price"><span class="old-price mr-2">$500</span>$400</h4>
	    					<span>7 Days Tour</span>
	    					<h3><a href="destination.html">Labuan Bajo, NTT</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="<?=base_url()?>/asset2/images/destination-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="destination.html"><img src="<?=base_url()?>/asset2/images/pulocinto.jpg" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span>5 Days Tour</span>
	    					<h3><a href="destination.html">Pulo Cinto, Gorontalo</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="<?=base_url()?>/asset2/images/destination-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>



    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<a href="destination.html"><img src="<?=base_url()?>/asset2/images/nusapenida.jpg" class="img-fluid" alt="Colorlib Template"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span>6 Days Tour</span>
	    					<h3><a href="destination.html">Nusa Penida, Bali</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="<?=base_url()?>/asset2/images/destination-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


      <hr>
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Us</h2>
            <p>Your feedback makes us better every day</p>
          </div>
        </div>

        <div class="row block-9" style="padding-bottom: 50px;">
          <div class="col-md-7 order-md-last d-flex">
		  <form action="<?php echo base_url().'Home/insertTable';?>" method="post" class="bg-light p-4 p-md-5 contact-form" >
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="nama">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="topik">
              </div>
              <div class="form-group">
                <textarea name="pesan" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>


          </div>

          <div class="col-md-5 d-flex">
          	<div class="row d-flex contact-info mb-5">
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-map-signs"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Address</h3>
				            <p>Golf Island, Pantai Indah Kapuk, Jakarta Utara, Indonesia.</p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-phone2"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Contact Number</h3>
				            <p><a href="tel://1234567920">+62 813-1573-9333</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-paper-plane"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Email Address</h3>
				            <p><a href="mailto:info@yoursite.com">exploreyuk@gmail.com</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-globe"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Website</h3>
				            <p><a href="#">explore.com</a></p>
			            </div>
			          </div>
		          </div>
		        </div>
          </div>


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

  <script src="<?=base_url()?>/asset2/js/main.js"></script>

  </body>
</html>
