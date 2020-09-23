<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sea Rock</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Changa' rel='stylesheet'>    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">

        .bungee {
            font-family: 'Bungee';/*font-size: 22px;*/
            }
        .charm{
          font-family: 'Changa';
        }


        @media (pointer: coarse) and (hover: none) {
          header {
            background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
          }
          header video {
            display: none;
          }
        }      
        /* gallery*/
        @media (min-width: 768px) {
        .carousel-multi-item-2 .col-md-3 {
        float: left;
        width: 25%;
        max-width: 100%; } }

        @media (max-width: 700px){
          #booking{
            display: none;
          }
        }

        .carousel-multi-item-2 .card img {
        border-radius: 2px; }       
    </style>
  </head>
  <body >

  <?php include_once('header.php'); ?>

    <section class="ftco-section ftco-no-pt ftco-no-pb px-0" id="body">
      <div class="container-fluid px-0">
        <div class="row no-gutters justify-content-end">
          <div class="col-md-12">
            <div id="home" class="video-hero" style=" background-image: url(images/bg_1.jpg); background-size:cover; background-position: center center;">
              <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=ism1XqnZJEg',containment:'#home', showControls:false, autoPlay:true, loop:true,height:500, mute:true, startAt:0, opacity:1, quality:'default'}" ></a>
              <div class="container">                
                <div class="row justify-content-start d-flex text-center align-items-end height-text ">
                  <section class="">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12">
                          <h1 class="mt-5 mb-3 text-light bungee">Hotel Sea Rock</h1>
                          <h4 class="text-light charm">MORE THAN A HOTEL... AN EXPERIENCE</h4>
                        </div>
                      </div>
                    </div>
                  </section>

                    <section class="ftco-booking ftco-section ftco-no-pt ftco-no-pb" id="booking">

                      <div class="container" style="padding-top:250px ">
                        <div class="row">
                          <div class="col-sm-12 col-lg-12 pr-1 aside-stretch">
                            <form action="#" class="booking-form">
                              <div class="row">
                                <div class="col-md col-sm-4 d-flex py-md-4">
                                  <div class="form-group align-self-stretch d-flex align-items-end">
                                    <div class="wrap bg-white align-self-stretch py-3 px-4">
                                      <label for="#">Check-in Date</label>
                                      <input type="text" class="form-control checkin_date" placeholder="Check-in date">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md  col-sm-4 d-flex py-md-4">
                                  <div class="form-group align-self-stretch d-flex align-items-end">
                                    <div class="wrap bg-white align-self-stretch py-3 px-4">
                                      <label for="#">Check-out Date</label>
                                      <input type="text" class="form-control checkout_date" placeholder="Check-out date">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md col-sm-4 d-flex py-md-4">
                                  <div class="form-group align-self-stretch d-flex align-items-end">
                                    <div class="wrap bg-white align-self-stretch py-3 px-4">
                                      <label for="#">Room</label>
                                      <div class="form-field">
                                        <div class="select-wrap">
                                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                          <select name="" id="" class="form-control">
                                            <option value="">Suite</option>
                                            <option value="">Family Room</option>
                                            <option value="">Deluxe Room</option>
                                            <option value="">Classic Room</option>
                                            <option value="">Superior Room</option>
                                            <option value="">Luxury Room</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md col-sm-4 d-flex py-md-4">
                                  <div class="form-group align-self-stretch d-flex align-items-end">
                                    <div class="wrap bg-white align-self-stretch py-3 px-4">
                                      <label for="#">Guests</label>
                                      <div class="form-field">
                                        <div class="select-wrap">
                                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                          <select name="" id="" class="form-control">
                                            <option value="">1 Adult</option>
                                            <option value="">2 Adult</option>
                                            <option value="">3 Adult</option>
                                            <option value="">4 Adult</option>
                                            <option value="">5 Adult</option>
                                            <option value="">6 Adult</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md col-sm-3 d-flex">
                                  <div class="form-group d-flex align-self-stretch">
                                    <a href="#" class="btn btn-black py-5 py-md-3 px-4 align-self-stretch d-block"><span>Check Availability <small>Best Price Guaranteed!</small></span></a>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </section>
                  <div class="col-md-8">


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-wrap">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-3">
						<a href="#" class="services-wrap img align-items-end d-flex" style="background-image: url(images/room-3.jpg);">
							<div class="text text-center pb-2">
								<h3>Special Rooms</h3>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="#" class="services-wrap img align-items-end d-flex" style="background-image: url(images/swimming-pool.jpg);">
							<div class="text text-center pb-2">
								<h3>Swimming Pool</h3>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="#" class="services-wrap img align-items-end d-flex" style="background-image: url(images/resto.jpg);">
							<div class="text text-center pb-2">
								<h3>Restaurant</h3>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<div class="services-wrap services-overlay img align-items-center d-flex" style="background-image: url(images/sleep.jpg);">
							<div class="text text-center pb-2">
								<h3 class="mb-0">Suites &amp; Rooms</h3>
								<span>Special Rooms</span>
								<div class="d-flex mt-2 justify-content-center">
								<div class="icon">
									<a href="#"><span class="ion-ios-arrow-forward"></span></a>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section" id="social">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Welcome to Sea Rock Hotel</span>
            <h2 class="mb-4">A New Vision of Luxury Hotel</h2>
          </div>
        </div>  
        <div class="row d-flex">
          <div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-reception-bell"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Friendly Service</h3>
              </div>
            </div>      
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-serving-dish"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Get Breakfast</h3>
              </div>
            </div>    
          </div>
          <div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-car"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Transfer Services</h3>
              </div>
            </div>      
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-spa"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Suits &amp; SPA</h3>
              </div>
            </div>      
          </div>
          <div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="ion-ios-bed"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Cozy Rooms</h3>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light ftco-room">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Sea Rock Rooms</span>
            <h2 class="mb-4">Hotel Master's Rooms</h2>
          </div>
        </div>  
    		<div class="row no-gutters">
    			<div class="col-lg-6">
    				<div class="room-wrap">
    					<div class="img d-flex align-items-center" style="background-image: url(images/sea.jpg);">
    						<div class="text text-center px-4 py-4" style="background: rgba(0,0,0,0.4);">
    							<h2><b>Welcome to <a href="index.php" class="text-warning">Sea Rock</a> Hotel</b></h2>
    							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img" style="background-image: url(images/room-1.jpg);"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per day</span></p>
	    						<h3 class="mb-3"><a href="rooms.php">Suite Room</a></h3>
	    						<p class="pt-1"><a href="rooms-single.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img order-md-last" style="background-image: url(images/room-2.jpg);"></a>
    					<div class="half right-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per day</span></p>
	    						<h3 class="mb-3"><a href="rooms.php">Family Room</a></h3>
	    						<p class="pt-1"><a href="rooms-single.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img order-md-last" style="background-image: url(images/room-3.jpg);"></a>
    					<div class="half right-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per day</span></p>
	    						<h3 class="mb-3"><a href="rooms.php">Deluxe Room</a></h3>
	    						<p class="pt-1"><a href="rooms-single.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img" style="background-image: url(images/room-4.jpg);"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per day</span></p>
	    						<h3 class="mb-3"><a href="rooms.php">Luxury Room</a></h3>
	    						<p class="pt-1"><a href="rooms-single.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img" style="background-image: url(images/room-6.jpg);"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per day</span></p>
	    						<h3 class="mb-3"><a href="rooms.php">Superior Room</a></h3>
	    						<p class="pt-1"><a href="rooms-single.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


    <section class="ftco-section testimony-section bg-light" id="guest">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Our Happy Guest Says</h2>
          </div>
        </div>  
        <div class="row justify-content-center">
          <div class="col-md-8 ftco-animate">
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel ftco-owl">
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                  	<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Nathan Smith</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                  	<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Nathan Smith</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                  	<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Nathan Smith</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                  	<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Nathan Smith</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                  	<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Nathan Smith</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section" id="video">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Read Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-6 mb-5" style="height: 300px;">

          <iframe  src="https://www.youtube.com/embed/fX5EispOaKI?controls=0" frameborder="0" allow="accelerometer; autoplay:true; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;height: 100%"></iframe>

          </div>
          <div class="col-md-6 mb-5" style="height: 300px;">

          <iframe src="https://www.youtube.com/embed/xaXEd8lGUz4?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;height: 100%"></iframe>
          </div>
          <div class="col-md-6 mb-5" style="height: 300px;">

          <iframe  src="https://www.youtube.com/embed/fX5EispOaKI?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;height: 100%"></iframe>

          </div>
          <div class="col-md-6 mb-5" style="height: 300px;">

          <iframe  src="https://www.youtube.com/embed/fX5EispOaKI?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;height: 100%"></iframe>

          </div>
        </div>
      </div>
    </section>

		
		<section class="ftco-section ftco-menu" style="background-image: url(images/restaurant-pattern.jpg);">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Restaurant</span>
            <h2>Restaurant</h2>
          </div>
        </div>
				<div class="row">
        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img order-md-last" style="background-image: url(images/menu-1.jpg);"></div>
        			<div class="desc pr-3 text-md-right">
	        			<div class="d-md-flex text align-items-center">
	        				<h3 class="order-md-last heading-left"><span>Grilled Sandwich</span></h3>
	        				<span class="price price-left">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img order-md-last" style="background-image: url(images/menu-2.jpg);"></div>
        			<div class="desc pr-3 text-md-right">
	        			<div class="d-md-flex text align-items-center">
	        				<h3 class="order-md-last heading-left"><span>Grilled Burger</span></h3>
	        				<span class="price price-left">$29.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img order-md-last" style="background-image: url(images/menu-3.jpg);"></div>
        			<div class="desc pr-3 text-md-right">
	        			<div class="d-md-flex text align-items-center">
	        				<h3 class="order-md-last heading-left"><span>Grilled Pizza</span></h3>
	        				<span class="price price-left">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>

        	</div>

        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/menu-5.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-md-flex text align-items-center">
	        				<h3><span>South Indian Thali</span></h3>
	        				<span class="price">$49.91</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/menu-6.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-md-flex text align-items-center">
	        				<h3><span>Ultimate Overload</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/menu-7.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-md-flex text align-items-center">
	        				<h3><span>North Indian Thali</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>

        	</div>
        </div>
			</div>
		</section>

    <section class="ftco-section" id="gallery">
      <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Events</span>
            <h2>Our Gallery  </h2>
          </div>
        </div>

    <section class="instagram">
        <div class="container-fluid">
          <!--Carousel Wrapper-->
          <div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

            <!--Controls-->
<!--             <div class="controls-top text-center" style="background: #000 !important;color: #fff;height: 100px;">
              <a class="black-text" href="#multi-item-example" data-slide="prev"  style="height: 100px;width: 100px"><i class="fa fa-angle-left" style="height: 100px;width: 100px"></i></a>
              <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fa fa-arrow-right fa-3x pl-3"></i></a>
            </div> -->
            <!--/.Controls-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

              <!--First slide-->
              <div class="carousel-item active">

                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" src="images/sea1.jpg"
                      alt="Card image cap" style="height: 220px;">
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" src="images/sea2.jpg"
                      alt="Card image cap" style="height: 220px;">
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" src="images/sea3.jpg"
                      alt="Card image cap" style="height: 220px;">
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" src="images/event1.jpg"
                      alt="Card image cap" style="height: 220px;">
                  </div>
                </div>

              </div>
              <!--/.First slide-->

              <!--Second slide-->
              <div class="carousel-item">

                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" height="300" src="images/event2.jpg"
                      alt="Card image cap" style="height: 220px;">
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" src="images/event3.jpg"
                      alt="Card image cap" style="height: 220px;">
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" src="images/event4.jpg"
                      alt="Card image cap" style="height: 220px;">
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" src="images/event5.jpeg"
                      alt="Card image cap" style="height: 220px;">
                  </div>
                </div>

              </div>
              <!--/.Second slide-->

            </div>
            <!--/.Slides-->

          </div>
          <!--/.Carousel Wrapper-->
        </div>
    </section>
      </div>
    </section>


    
    <section class="ftco-section bg-light ftco-room" style="padding-bottom: 0px;" id="google_map">
      <div class="container-fluid px-0">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Locate Us</span>
            <h2 class="mb-4">Locate US</h2>
          </div>
            <div class="col-sm-12">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.395986068309!2d79.89513891465631!3d23.15574328488575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3981b1f4d1bd1da7%3A0xdb874aad8b013d69!2sOYO%2012498%20Hotel%20Sea%20Rock!5e0!3m2!1sen!2sin!4v1578412740748!5m2!1sen!2sin" height="500" frameborder="0" style="border:0;width: 100%" allowfullscreen=""></iframe>               
            </div>          
        </div>  
      </div>
    </section>
<?php
  include_once('footer.php');
?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- // <script src="js/jquery.timepicker.min.js"></script> -->
  <script src="js/scrollax.min.js"></script>
<!--   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script> -->
  <script src="js/main.js"></script>
    
  </body>
</html>