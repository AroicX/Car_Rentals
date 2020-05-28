@extends('guest.layouts.app')


@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('css/xpedia.css')}}" />

@endsection

@section('title')
AboutPage - Forbes Rentals
@endsection

@section('content')

<!-- btc tittle Wrapper Start -->
<div class="btc_tittle_main_wrapper">
    <div class="btc_tittle_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
                <div class="btc_tittle_left_heading">
                    <h1>About Us</h1>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
                <div class="btc_tittle_right_heading">
                    <div class="btc_tittle_right_cont_wrapper">
                        <ul>
                            <li><a href="#">Home</a> <i class="fa fa-angle-right"></i>
                            </li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- btc tittle Wrapper End -->
<!-- x about title Wrapper Start -->
<div class="x_about_seg_main_wrapper float_left padding_tb_100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="x_about_seg_img_wrapper float_left">
                    <img src="images/about_img1.jpg" alt="about_img">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="x_about_seg_img_cont_wrapper float_left">
                    <h3>Our Story</h3>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, rem a quis bibendum auctor,
                        nisi elit consequat ipsum, nec sagittis sem nibh id elit. Dssed odio sit amet nibh vulputate
                        cursus a sit amt mauris. Morbi accumsan ipsum velit.
                        <br>
                        <br>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, rem a quis bibendum
                        auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Dssed odio sit amet nibh
                        vulputate cursus a sit amt mauris. Morbi accumsan ipsum velit.</p>
                    <img src="images/seg.png" alt="segn">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- x about title Wrapper End -->
<!--  counter Wrapper Start -->
<div class="counto_main_wrapper">
    <div class="counto_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <section class="counter-section section-padding">
                    <div class="row">
                        <div class="trucking_counter">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="con con_right_border"> <i class="flaticon-car-trip"></i>
                                </div>
                                <div class="count-description"> <span class="timer">513</span>
                                    <h5 class="con1">qulified staff</h5>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="con con_right_border con2 cont2 cont3"> <i
                                        class="flaticon-multiple-users-silhouette"></i>
                                </div>
                                <div class="count-description"> <span class="timer">325</span>
                                    <h5 class="con2">Years Of Experience</h5>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="con con_right_border con3 cont2"> <i
                                        class="flaticon-cup-of-hot-chocolate"></i>
                                </div>
                                <div class="count-description"> <span class="timer">1024</span>
                                    <h5 class="con3">Happy Clients</h5>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="con con_right_border con4"> <i class="flaticon-mail-send"></i>
                                </div>
                                <div class="count-description"> <span class="timer">275</span>
                                    <h5 class="con4">Deserved Awards</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!--  counter Wrapper End -->
<!-- xs offer car tabs Start -->
<div class="x_ln_car_main_wrapper float_left padding_tb_100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="x_ln_car_heading_wrapper float_left">
                    <h3>Our Core team</h3>
                </div>
            </div>
            <div class="col-md-12">
                <div class="btc_ln_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="btc_team_slider_cont_main_wrapper">
                                <div class="btc_team_img_wrapper">
                                    <img src="images/team1.jpg" alt="team_img1">
                                    <div class="btc_team_social_wrapper">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btc_team_img_cont_wrapper">
                                    <h4><a href="#">Ajay Suryavanshi</a></h4>
                                    <p>(Consultant)</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="btc_team_slider_cont_main_wrapper">
                                <div class="btc_team_img_wrapper">
                                    <img src="images/team2.jpg" alt="team_img1">
                                    <div class="btc_team_social_wrapper">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btc_team_img_cont_wrapper">
                                    <h4><a href="#">Ajay Suryavanshi</a></h4>
                                    <p>(Consultant)</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="btc_team_slider_cont_main_wrapper">
                                <div class="btc_team_img_wrapper">
                                    <img src="images/team3.jpg" alt="team_img1">
                                    <div class="btc_team_social_wrapper">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btc_team_img_cont_wrapper">
                                    <h4><a href="#">Ajay Suryavanshi</a></h4>
                                    <p>(Consultant)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--js Start-->
<!-- x counter Wrapper Start -->
<div class="x_counter_main_wrapper">
    <div class="x_counter_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="x_counter_car_heading_wrapper float_left">
                    <h4>Work Process</h4>
                    <h3>How it works?</h3>
                    <p>Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id
                        ullamcorper libero
                        <br>Vestibulum imperdiet nibh vel magna lacinia commodo ultricies,</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_cou_main_box_wrapper">
                    <div class="x_icon"> <i class="flaticon-airplane-shape"></i>
                    </div>
                    <h5><span>1.</span> <a href="#">pick destination</a></h5>
                    <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_cou_main_box_wrapper">
                    <div class="x_icon"> <i class="flaticon-calendar"></i>
                    </div>
                    <h5><span>2.</span> <a href="#">select term</a></h5>
                    <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_cou_main_box_wrapper">
                    <div class="x_icon"> <i class="flaticon-sedan-car-front"></i>
                    </div>
                    <h5><span>3.</span> <a href="#">choose a car</a></h5>
                    <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_cou_main_box_wrapper x_cou_main_box_wrapper_last">
                    <div class="x_icon"> <i class="flaticon-emoticon-square-smiling-face-with-closed-eyes"></i>
                    </div>
                    <h5><span>4.</span> <a href="#">enjoy the ride</a></h5>
                    <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- x counter Wrapper End -->
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
<!-- xs offer car tabs Start -->
<div class="x_partner_main_wrapper float_left padding_tb_100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h4>Our Cars Partners</h4>
                    <h3>brands in fleet</h3>
                    <p>Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id
                        ullamcorper libero
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

@endsection
