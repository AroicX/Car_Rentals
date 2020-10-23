@extends('guest.layouts.app')


@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('css/xpedia.css')}}" />

@endsection

@section('title')
Car Bookings - {{$car->car_name}}
@endsection

@section('content')
<!-- btc tittle Wrapper Start -->
<div class="btc_tittle_main_wrapper">
    <div class="btc_tittle_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
                <div class="btc_tittle_left_heading">
                    <h1>{{$car->car_name}}</h1>
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
                            <li>{{$car->car_name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- btc tittle Wrapper End -->

<!-- x tittle num Wrapper End -->
<!-- x car book sidebar section Wrapper Start -->
<div class="x_car_book_sider_main_Wrapper float_left">
    <div class="container">
        <div class="row">

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_car_detail_main_wrapper float_left">
                            <div class="lr_bc_slider_first_wrapper">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="lr_bc_slider_img_wrapper">
                                            <img src="{{ asset('/storage/images')}}/{{$car->image1}}" alt="fresh_food_img">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="lr_bc_slider_img_wrapper">
                                            <img src="{{ asset('/storage/images')}}/{{$car->image2}}" alt="fresh_food_img">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="lr_bc_slider_img_wrapper">
                                            <img src="{{ asset('/storage/images')}}/{{$car->image3}}" alt="fresh_food_img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="x_car_detail_slider_bottom_cont float_left">
                                <div class="x_car_detail_slider_bottom_cont_left">
                                    <h3>{{$car->car_model}}</h3>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>2 Reviews</span>
                                </div>
                                <div class="x_car_detail_slider_bottom_cont_right">
                                    <h3>₦{{$car->hire_cost}}</h3>
                                    <p><span>from</span>
                                        <br>/ day</p>
                                </div>
                                <div class="x_car_detail_slider_bottom_cont_center float_left">
                                    <p>{{$car->description}}</p>
                                </div>
                                <div
                                    class="x_car_offer_heading x_car_offer_heading_listing float_left x_car_offer_heading_inner_car_names x_car_offer_heading_inner_car_names2">
                                    <ul class="">
                                        <li> <a href="#"><i class="fa fa-users"></i> &nbsp;{{$car->capacity}} Seats</a>
                                        </li>
                                        <li> <a href="#"><i class="fa fa-circle-o-notch"></i>
                                                &nbsp;{{$car->size_of_tyre}} Tyre size</a>
                                        </li>
                                        <li> <a href="#"><i class="fa fa-shield"></i> &nbsp;
                                                {{$car->gear_type == 'automatic' ? 'Automatic' : 'Manual'}}</a>
                                        </li>

                                        <li> <a href="#"><i class="fa fa-briefcase"></i> &nbsp;{{$car->capacity}} Bag
                                                Space</a>
                                        </li>
                                        <li> <a href="#"><i class="fa fa-snowflake-o"></i>&nbsp; A/C
                                                {{$car->ac == 1 ? 'Yes' : 'No'}}</a>
                                        </li>
                                        <li>
                                            <div class="nice-select" tabindex="0"> <span class="current"><i
                                                        class="fa fa-bars"></i> Others (2)</span>
                                                <ul class="list">
                                                    <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i>
                                                            {{$car->ac == 1 ? ' Air Conditioning' : 'No  Air Conditioning'}}</a>
                                                    </li>
                                                    <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i>
                                                            {{$car->fuel == 1 ? 'Petroleumn' : 'Diesel'}}</a>
                                                    </li>
                                                    <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i>
                                                            Minimum age 18+</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="x_slider_form_main_wrapper float_left" style="margin: 100px 0px">
                                    <div class="x_slider_form_heading_wrapper float_left">
                                        <h3>Book {{$car->car_name}} Now </h3>
                                    </div>
                                    <form action="{{route('reservation.create')}}" method="POST">
                                        {{ csrf_field() }}

                                        <input type="hidden" name="car_id" value={{$car->id}}>
                                        <input type="hidden" name="hire_cost" value={{$car->hire_cost}}>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="x_slider_form_input_wrapper float_left">
                                                    <h3>Pick-up Location</h3>
                                                    <input name="pickup_location" type="text"
                                                        placeholder="City, Airport, Station, etc." required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="x_slider_form_input_wrapper float_left">
                                                    <h3>Drop-off Location</h3>
                                                    <input type="text" name="dropoff_location"
                                                        placeholder="City, Airport, Station, etc." required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                <div class="x_slider_checkbox float_left">
                                                    <input type="checkbox" id="c5" name="cb">
                                                    <label for="c5">Driver age is between 18-65 &nbsp;<i
                                                            class="fa fa-question-circle"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-sec-header">
                                                    <h3>Pick-up Date</h3>
                                                    <label class="cal-icon">Pick-up Date
                                                        <input name="pick_up_date" type="text"
                                                            placeholder="Tue 16 Jan 2018"
                                                            class="form-control datepicker" required>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-sec-header">
                                                    <h3>Drop-Off Date</h3>
                                                    <label class="cal-icon">Pick-up Date
                                                        <input name="drop_off_date" type="text"
                                                            placeholder="Tue 16 Jan 2018"
                                                            class="form-control datepicker" required>
                                                    </label>
                                                </div>
                                            </div>
                                         
                                            <div class="col-md-12">
                                                <div class="x_slider_checkbox_bottom float_left">
                                                    <div class="x_slider_checout_left">
                                                        <ul>
                                                            <li><i class="fa fa-check-circle"></i>&nbsp;&nbsp;24/7 Phone
                                                                Support</li>
                                                            <li><i class="fa fa-check-circle"></i>&nbsp;&nbsp;No Credit
                                                                Card Fees</li>
                                                            <li><i class="fa fa-check-circle"></i>&nbsp;&nbsp;No
                                                                Amendment Fees</li>
                                                        </ul>
                                                    </div>
                                                    <div class="x_slider_checout_right">
                                                        <button class="btn btn-info btn-lg" type="submit"
                                                            style="background:  #4f5dec !important">Book Now <i
                                                                class="fa fa-arrow-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <br>
                                <br>
                            </div>

                            <div class="x_ln_car_heading_wrapper x_ln_car_heading_wrappercsss float_left">
                                <h3>Latest cars</h3>
                            </div>
                            <div class="btc_ln_slider_wrapper btc_ln_slider_wrapper_cs">
                                <div class="owl-carousel owl-theme">
                                    {{-- @@foreach ($collection as $item)
                                        
                                    @endforeach --}}
                                    <div class="item">
                                        <div class="x_car_offer_main_boxes_wrapper float_left margintop_zero">
                                            <div class="x_car_offer_starts float_left"> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="x_car_offer_img float_left">
                                                <img src="{{asset('images/c1.png')}}" alt="img">
                                            </div>
                                            <div class="x_car_offer_price float_left">
                                                <div class="x_car_offer_price_inner">
                                                    <h3>$25</h3>
                                                    <p><span>from</span>
                                                        <br>/ day</p>
                                                </div>
                                            </div>
                                            <div class="x_car_offer_heading float_left">
                                                <h2><a href="#">Dakota zaris</a></h2>
                                                <p>Extra Small</p>
                                            </div>
                                            <div class="x_car_offer_heading x_car_offer_heading_avanti float_left">
                                                <ul>
                                                    <li> <a href="#"><i class="fa fa-users"></i> &nbsp;4</a>
                                                    </li>
                                                    <li> <a href="#"><i class="fa fa-clone"></i> &nbsp;2</a>
                                                    </li>
                                                    <li> <a href="#"><i class="fa fa-briefcase"></i> &nbsp;9</a>
                                                    </li>
                                                    <li>
                                                        <div class="nice-select" tabindex="0"> <span class="current"><i
                                                                    class="fa fa-bars"></i></span>
                                                            <ul class="list">
                                                                <li class="dpopy_li"><a href="#"><i
                                                                            class="fa fa-snowflake-o"></i> Air
                                                                        Conditioning</a>
                                                                </li>
                                                                <li class="dpopy_li"><a href="#"><i
                                                                            class="fa fa-code-fork"></i>
                                                                        Transmission</a>
                                                                </li>
                                                                <li class="dpopy_li"><a href="#"><i
                                                                            class="fa fa-user-circle-o"></i> Minimum
                                                                        age</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="x_car_offer_bottom_btn float_left">
                                                <ul>
                                                    <li><a href="#">Book now</a>
                                                    </li>
                                                    <li><a href="#">Details</a>
                                                    </li>
                                                </ul>
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
</div>
<!-- x car book sidebar section Wrapper End -->

@endsection
