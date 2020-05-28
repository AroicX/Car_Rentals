@extends('guest.layouts.app')


@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('css/xpedia.css')}}" />

@endsection

@section('title')
Services  - Forbes Rentals
@endsection

@section('content')
	<!-- btc tittle Wrapper Start -->
	<div class="btc_tittle_main_wrapper">
		<div class="btc_tittle_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_left_heading">
						<h1>Our Services</h1>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_right_heading">
						<div class="btc_tittle_right_cont_wrapper">
							<ul>
								<li><a href="/">Home</a>  <i class="fa fa-angle-right"></i>
								</li>
								<li>Our Services</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- btc tittle Wrapper End -->
	<!-- btc service title Wrapper Start -->
	<div class="x_services_title_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper x_offer_car_tb_heading_wrapper float_left">
						<h4>our services</h4>
						<h3>Full service Spectrum</h3>
						<p>Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero
							<br>Vestibulum imperdiet nibh vel magna lacinia commodo ultricies,</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_slider_bottom_box_wrapper x_service_inner_main_box">	<i class="flaticon-speedometer"></i>
						<h3><a href="#">Well Optimized</a></h3>
						<p>Proin gravida nibh vel velit auctor
							<br>aliquet. Aenean sollicitudin, lorem
							<br>quis bibendum auctor.</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_slider_bottom_box_wrapper x_service_inner_main_box">	<i class="flaticon-people"></i>
						<h3><a href="#">Plenty of Features</a></h3>
						<p>Proin gravida nibh vel velit auctor
							<br>aliquet. Aenean sollicitudin, lorem
							<br>quis bibendum auctor.</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_slider_bottom_box_wrapper x_service_inner_main_box">	<i class="flaticon-shopping-bag"></i>
						<h3><a href="#">Woo Commerce Ready</a></h3>
						<p>Proin gravida nibh vel velit auctor
							<br>aliquet. Aenean sollicitudin, lorem
							<br>quis bibendum auctor.</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_slider_bottom_box_wrapper x_service_inner_main_box">	<i class="flaticon-code"></i>
						<h3><a href="#">Clean Code</a></h3>
						<p>Proin gravida nibh vel velit auctor
							<br>aliquet. Aenean sollicitudin, lorem
							<br>quis bibendum auctor.</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_slider_bottom_box_wrapper x_service_inner_main_box">	<i class="flaticon-idea"></i>
						<h3><a href="#">Smart Approach</a></h3>
						<p>Proin gravida nibh vel velit auctor
							<br>aliquet. Aenean sollicitudin, lorem
							<br>quis bibendum auctor.</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_slider_bottom_box_wrapper x_service_inner_main_box">	<i class="flaticon-pencil-black-tool-interface-symbol"></i>
						<h3><a href="#">Timeless Design</a></h3>
						<p>Proin gravida nibh vel velit auctor
							<br>aliquet. Aenean sollicitudin, lorem
							<br>quis bibendum auctor.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- btc service title Wrapper End -->
	<!-- xs offer car tabs Start -->
	<div class="x_offer_car_main_wrapper x_offer_testislider_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper float_left">
						<h4>Testimonials</h4>
						<h3>Top Reviews</h3>
						<p>Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero
							<br>Vestibulum imperdiet nibh vel magna lacinia commodo ultricies,</p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="screenshot">
						<div class="owl-carousel screen nplr screen-loop">
							<div>
								<div class="card  valign-wrapper">
									<!-- Client's image -->
									<div class="card-image">
										<img src="images/client_1.jpg" alt="img">
									</div>
									<!-- /Client's image -->
									<div class="card-content center-align valign">
										<!-- Client's Feedback -->
										<p>“ I don't always clap, but when I do, it's because of Sella. We can't understand how we've been living without Sella. ”</p>
										<!-- /Client's Feedback -->
										<!-- Client's Name -->
										<p class="card-title">Jonh Smith <span>support manager</span>
										</p>
										<!-- /Client's Name -->
									</div>
								</div>
							</div>
							<div>
								<div class="card  valign-wrapper">
									<!-- Client's image -->
									<div class="card-image">
										<img src="images/client_2.jpg" alt="img">
									</div>
									<!-- /Client's image -->
									<div class="card-content center-align valign">
										<!-- Client's Feedback -->
										<p>“ I don't always clap, but when I do, it's because of Sella. We can't understand how we've been living without Sella. ”</p>
										<!-- /Client's Feedback -->
										<!-- Client's Name -->
										<p class="card-title">Jonh Smith <span>support manager</span>
										</p>
										<!-- /Client's Name -->
									</div>
								</div>
							</div>
							<div>
								<div class="card  valign-wrapper">
									<!-- Client's image -->
									<div class="card-image">
										<img src="images/client_3.jpg" alt="img">
									</div>
									<!-- /Client's image -->
									<div class="card-content center-align valign">
										<!-- Client's Feedback -->
										<p>“ I don't always clap, but when I do, it's because of Sella. We can't understand how we've been living without Sella. ”</p>
										<!-- /Client's Feedback -->
										<!-- Client's Name -->
										<p class="card-title">Jonh Smith <span>support manager</span>
										</p>
										<!-- /Client's Name -->
									</div>
								</div>
							</div>
							<div>
								<div class="card  valign-wrapper">
									<!-- Client's image -->
									<div class="card-image">
										<img src="images/client_4.jpg" alt="img">
									</div>
									<!-- /Client's image -->
									<div class="card-content center-align valign">
										<!-- Client's Feedback -->
										<p>“ I don't always clap, but when I do, it's because of Sella. We can't understand how we've been living without Sella. ”</p>
										<!-- /Client's Feedback -->
										<!-- Client's Name -->
										<p class="card-title">Jonh Smith <span>support manager</span>
										</p>
										<!-- /Client's Name -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- btc team Wrapper Start -->
	<!-- x booking Wrapper Start -->
	<div class="x_booking_main_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="x_book_logo_wrapper float_left">
						<img src="images/white_logo.png" alt="logo">
					</div>
				</div>
				<div class="col-md-6">
					<div class="x_book_logo_heading_wrapper float_left">
						<h3>Book on AutoRez Now!</h3>
						<p>The Most User Centric Rental Theme on the Market.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="x_book_logo_btn float_left">
						<ul>
							<li><a href="#">See All Cars <i class="fa fa-arrow-right"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- x booking Wrapper End -->
	<!-- x progress Wrapper Start -->
	<div class="x_progressbar_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="skills mt-50">
						<h3>Progress</h3>
						<div class="skill-item">
							<h6>Photoshop<span>90%</span></h6>
							<div class="skills-progress"><span data-value="90%"></span>
							</div>
						</div>
						<div class="skill-item">
							<h6>CorelDrow<span>40%</span></h6>
							<div class="skills-progress"><span data-value="70%"></span>
							</div>
						</div>
						<div class="skill-item">
							<h6>IIustration <span>80%</span></h6>
							<div class="skills-progress"><span data-value="80%"></span>
							</div>
						</div>
						<div class="skill-item">
							<h6>Javascript <span>85%</span></h6>
							<div class="skills-progress"><span data-value="85%"></span>
							</div>
						</div>
						<div class="skill-item">
							<h6>Javascript <span>5%</span></h6>
							<div class="skills-progress"><span data-value="5%"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="x_serv_progress_img float_left">
						<img src="images/prog1.jpg" alt="img">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- x progress Wrapper End -->
	<div class="x_partner_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper float_left">
						<h4>Our Cars Partners</h4>
						<h3>brands in fleet</h3>
						<p>Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero
							<br>Vestibulum imperdiet nibh vel magna lacinia commodo ultricies,</p>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wrap-album-slider">
						<ul class="album-slider">
							<li class="album-slider__item">
								<figure class="album">
									<img src="images/prt1.png" alt="img">
								</figure>
							</li>
							<li class="album-slider__item">
								<figure class="album">
									<img src="images/prt2.png" alt="img">
								</figure>
							</li>
							<li class="album-slider__item">
								<figure class="album">
									<img src="images/prt3.png" alt="img">
								</figure>
							</li>
							<li class="album-slider__item">
								<figure class="album">
									<img src="images/prt4.png" alt="img">
								</figure>
							</li>
							<li class="album-slider__item">
								<figure class="album">
									<img src="images/prt5.png" alt="img">
								</figure>
							</li>
							<li class="album-slider__item">
								<figure class="album">
									<img src="images/prt6.png" alt="img">
								</figure>
							</li>
							<li class="album-slider__item">
								<figure class="album">
									<img src="images/prt1.png" alt="img">
								</figure>
							</li>
							<li class="album-slider__item">
								<figure class="album">
									<img src="images/prt2.png" alt="img">
								</figure>
							</li>
							<li class="album-slider__item">
								<figure class="album">
									<img src="images/prt3.png" alt="img">
								</figure>
							</li>
							<li class="album-slider__item">
								<figure class="album">
									<img src="images/prt4.png" alt="img">
								</figure>
							</li>
							<li class="album-slider__item">
								<figure class="album">
									<img src="images/prt5.png" alt="img">
								</figure>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- btc team Wrapper Start -->
	<!-- x news latter Wrapper Start -->
	<div class="x_news_letter_main_wrapper">
		<div class="container">
			<div class="x_news_contact_wrapper">
				<img src="images/nl1.png" alt="news_img">
				<h4>Call Us <br> <span>+1 800 123 4567</span></h4>
			</div>
			<div class="x_news_contact_second_wrapper">
				<h4>Newsletter</h4>
			</div>
			<div class="x_news_contact_search_wrapper">
				<input type="text" placeholder="Email Address">
				<button>read more <i class="fa fa-arrow-right"></i>
				</button>
			</div>
		</div>
	</div>
	<!-- x news latter Wrapper End -->
@endsection
