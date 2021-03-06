@extends('guest.layouts.app')


@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('css/xpedia.css')}}" />

@endsection

@section('title')
Car Bookings - Forbes Rentals
@endsection

@section('content')


<!-- btc tittle Wrapper Start -->
<div class="btc_tittle_main_wrapper">
    <div class="btc_tittle_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
                <div class="btc_tittle_left_heading">
                    <h1>Best Offer Cars</h1>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
                <div class="btc_tittle_right_heading">
                    <div class="btc_tittle_right_cont_wrapper">
                        <ul>
                            <li><a href="/">Home</a> <i class="fa fa-angle-right"></i>
                            </li>
                            <li><a href="/cars">Cars</a> <i class="fa fa-angle-right"></i>
                            </li>
                            <li>Best Offers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- btc tittle Wrapper End -->
<!-- x tittle num Wrapper Start -->
{{-- <div class="x_title_num_mian_Wrapper float_left">
		<div class="container">
			<div class="x_title_inner_num_wrapper float_left">
				<div class="x_title_num_heading">
					<h3>Choose a car</h3>
					<p>Complete Your Step</p>
				</div>
				<div class="x_title_num_heading_cont">
					<div class="x_title_num_main_box_wrapper">
						<div class="x_icon_num">
							<p>1</p>
						</div>
						<h5>Time & place</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper2">
						<div class="x_icon_num x_icon_num2">
							<p>2</p>
						</div>
						<h5>Car</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3">
						<div class="x_icon_num x_icon_num3">
							<p>3</p>
						</div>
						<h5>detail</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3">
						<div class="x_icon_num x_icon_num3">
							<p>4</p>
						</div>
						<h5>checkout</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3 x_title_num_main_box_wrapper_last">
						<div class="x_icon_num x_icon_num3">
							<p>5</p>
						</div>
						<h5>done!</h5>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
<!-- x tittle num Wrapper End -->
<!-- x car book sidebar section Wrapper Start -->
<div class="x_car_book_sider_main_Wrapper float_left" style="margin: 100px 0px">
    <div class="container">
        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="x_carbooking_right_section_wrapper float_left">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="x_carbook_right_select_box_wrapper float_left">
                                <select class="myselect">
                                    <option>Sort by Price</option>
                                    <option>12$</option>
                                    <option>13$</option>
                                    <option>14$</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="x_carbook_right_tabs_box_wrapper float_left">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home"> <i
                                                class="flaticon-menu"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu1"><i
                                                class="flaticon-list"></i></a>
                                    </li>
                                </ul>
                                <p><span>Showing 1-12</span> of 256 results</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="x_car_book_tabs_content_main_wrapper">
                                <div class="tab-content">
                                    <div id="home" class="tab-pane active">
                                        <div class="row">



                                            <!--loop starts here -->
                                            @foreach(\App\Car::all() as $key => $car)
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                                    <div class="x_car_offer_starts float_left">
                                                        <div class="color"
                                                            style="width: 20px; height: 20px; padding: 10px; background:{{$car->car_color}}"
                                                            title="color"></div>
                                                    </div>
                                                    <div class="x_car_offer_img float_left">
                                                    <img src="{{ asset('/storage/images')}}/{{$car->image1}}" width="200px" alt="img">



                                                    </div>
                                                    <div class="x_car_offer_price float_left">
                                                        <div class="x_car_offer_price_inner">
                                                            <h6><i class="fa fa-tag"></i> &nbsp;15% off Deal</h6>
                                                            <h3>₦{{$car->hire_cost}}</h3>
                                                            <p><span>from</span>
                                                                <br>/ day</p>
                                                        </div>
                                                    </div>
                                                    <div class="x_car_offer_heading float_left">
                                                        <h2><a href="#">{{$car->car_name}}</a></h2>
                                                        <p>{{$car->car_model}}</p>
                                                        <p>{{$car->gear_type == 'automatic' ? 'Automatic' : 'Manual'}}
                                                        </p>
                                                    </div>
                                                    <div class="x_car_offer_heading float_left">
                                                        <ul>
                                                            <li> <a href="#"><i class="fa fa-users"></i>
                                                                    &nbsp;{{$car->capacity}}</a>
                                                            </li>
                                                            <li> <a href="#"><i class="fa fa-clone"></i>
                                                                    &nbsp;{{$car->size_of_tyre}}</a>
                                                            </li>
                                                            <li> <a href="#"><i class="fa fa-briefcase"></i>
                                                                    &nbsp;{{$car->capacity}}</a>
                                                            </li>
                                                            <li>
                                                                <div class="nice-select" tabindex="0"> <span
                                                                        class="current"><i
                                                                            class="fa fa-bars"></i></span>
                                                                    <ul class="list">
                                                                        <li class="dpopy_li"><a href="#"><i
                                                                                    class="fa fa-snowflake-o"></i>
                                                                                {{$car->ac == 1 ? 'Air Conditioning' : 'No Conditioning' }}
                                                                            </a>
                                                                        </li>
                                                                        <li class="dpopy_li"><a href="#"><i
                                                                                    class="fa fa-code-fork"></i>
                                                                                {{$car->fuel == 1 ? 'Petorleumn' : 'Diesel' }}</a>
                                                                        </li>
                                                                        <li class="dpopy_li"><a href="#"><i
                                                                                    class="fa fa-user-circle-o"></i>
                                                                                Minimum age 18</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="x_car_offer_bottom_btn float_left">
                                                        <ul>
                                                            <li><a href="/cars/{{encrypt($car->id)}}">Book now</a>
                                                            </li>
                                                            <li><a href="/cars/{{encrypt($car->id)}}">Details</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!--loop ends here -->


                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <div class="row">
                                            <!--loop starts here -->
                                            @foreach(\App\Car::all() as $key => $car)
                                            <div class="col-md-12">
                                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                                    <div
                                                        class="x_car_offer_starts x_car_offer_starts_list_img float_left">
                                                        <div class="color"
                                                            style="width: 20px; height: 20px; padding: 10px; background:{{$car->car_color}}"
                                                            title="color"></div>
                                                        <div class="x_car_offer_img x_car_offer_img_list float_left">
                                                            <img src="images/c1.png" alt="img">
                                                        </div>
                                                        <div
                                                            class="x_car_offer_price x_car_offer_price_list float_left">
                                                            <div
                                                                class="x_car_offer_price_inner x_car_offer_price_inner_list">
                                                                <h6><i class="fa fa-tag"></i> &nbsp;15% off Deal</h6>
                                                                <h3>${{$car->hire_cost}}</h3>
                                                                <p><span>from</span>
                                                                    <br>/ day</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="x_car_offer_starts_list_img_cont">
                                                        <div
                                                            class="x_car_offer_heading x_car_offer_heading_list float_left">
                                                            <h2><a href="#">{{$car->car_name}}</a></h2>
                                                            <p>{{$car->car_model}}</p>
                                                        </div>
                                                        <div
                                                            class="x_car_offer_bottom_btn x_car_offer_bottom_btn_list float_left">
                                                            <ul>
                                                                <li><a href="/cars/{{encrypt($car->id)}}">Book now</a>
                                                                </li>
                                                                <li><a href="/cars/{{encrypt($car->id)}}">Details</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div
                                                            class="x_car_offer_heading x_car_offer_heading_listing float_left">
                                                            <ul class="">
                                                                <li> <a href="#"><i class="fa fa-users"></i>
                                                                        &nbsp;{{$car->capacity}}
                                                                        Seats</a>
                                                                </li>
                                                                <li> <a href="#"><i class="fa fa-clone"></i>
                                                                        &nbsp;{{$car->capacity}}
                                                                        Doors</a>
                                                                </li>
                                                                <li> <a href="#"><i class="fa fa-shield"></i> &nbsp;
                                                                        {{$car->gear_type == 'automatic' ? 'Automatic' : 'Manual'}}
                                                                    </a>
                                                                </li>

                                                                <li> <a href="#"><i class="fa fa-briefcase"></i> &nbsp;
                                                                        {{$car->fuel == 1 ? 'Petroleumn' : 'Diesel'}}
                                                                    </a>
                                                                </li>
                                                                <li> <a href="#"><i
                                                                            class="fa fa-snowflake-o"></i>&nbsp;A/C:
                                                                        {{$car->ac == 1 ? 'Yes' : 'No'}}</a>
                                                                </li>
                                                                <li>
                                                                    <div class="nice-select" tabindex="0"> <span
                                                                            class="current"><i class="fa fa-bars"></i>
                                                                            Others (2)</span>
                                                                        <ul class="list">
                                                                            <li class="dpopy_li"><a href="#"><i
                                                                                        class="fa fa-snowflake-o"></i>
                                                                                    {{$car->ac == 1 ? ' Air Conditioning' : 'No  Air Conditioning'}}</a>
                                                                            </li>
                                                                            <li class="dpopy_li"><a href="#"><i
                                                                                        class="fa fa-code-fork"></i>
                                                                                    Transmission</a>
                                                                            </li>
                                                                            <li class="dpopy_li"><a href="#"><i
                                                                                        class="fa fa-user-circle-o"></i>
                                                                                    Minimum age 18</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!--loop ends here -->

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
</div>

@endsection
