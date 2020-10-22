@extends('layouts.app')

@section('title')

My Reservation

@endsection



@section('content')


<style>
    a {
        color: #242424;
        text-decoration: none !important;
    }

    .label-primary {
        padding: 5px 10px;
        background: #fd7e14;
        float: right;
        color: #fff;
    }

    .label-success {
        padding: 5px 10px;
        background: #28a745;
        float: right;
        color: #fff;
    }

    .label-amount {
        margin-right: 5px;
        padding: 5px 10px;
        background: teal;
        float: right;
        color: #fff;
    }

    .label-id {
        margin-right: 5px;
        padding: 5px 10px;
        background: #28a745;

        color: #fff;
    }

    .span-label {
        color: teal;
        font-size: 11px;
    }

    .list-items {
        color: teal;
        font-weight: bold;
        font-size: 16px;
        margin: 10px 0px;
    }

    ul p {
        color: #242424;
    }

    .link{
        position: relative;
        top: 0px;
        left: 0px;
        color: blue;
        text-decoration: none;
        padding: 10px 0px;
    }

</style>

<div class="container py-5">


    <a  class="link" href="{{url('/cars')}}">Go to Reservations</a>

    <div class="row" id="reservationDeck">
        @foreach ($myReservation as $reserved)
        {{-- <a href="#" class="close">x</a> --}}
        <a class="col-md-4 py-2 reservation" href="#" id="{{$reserved->id}}">
            <div class="card">
                <div class="card-body">
                    <span class="span-label">Location</span>
                    <h5 class="card-title">{{$reserved->location}}</h5>
                    <span class="span-label">Pick-up</span>
                    <p class="card-text">{{$reserved->pick_up}}</p>

                    @if($reserved->status == 'Pending')
                    <span class="label label-primary">{{$reserved->status}}</span>
                    <span class="span-label">Amount Paid</span>
                    <span class="label label-amount">₦ {{$reserved->car->hire_cost}}</span>
                    @else
                    <span class="label label-success">{{$reserved->status}}</span>

                    @endif


                    <span class="span-label">Car Name</span>
                    <p>{{$reserved->car['car_name']}}</p>
                    <span class="span-label">Car Type</span>
                    <p>{{$reserved->car['car_type']}}</p>
                </div>
            </div>
        </a>

        @endforeach

     

    </div>

    {{$myReservation->appends(['sort' => 'status'])->links()}}
      
</div>




<div class="modal fade bd-example-modal-md reserve-car">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="alert alert-primary" role="alert">
                    <div class="alert">
                        <p>Note: Please Not that payment validates reservation order.</p>
                    </div>
                </div>

                <input type="hidden" name="reservation_id" id="reserve_id">

                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="list-items"><input type="checkbox" checked disabled> Locations</li>
                            <p id="location"> </p>
                            <li class="list-items"><input type="checkbox" checked disabled> Pick-Up</li>
                            <p id="pick-up"> </p>
                            <li class="list-items"><input type="checkbox" checked disabled> Drop-off</li>
                            <p id="drop-off"> </p>
                            <li class="list-items"><input type="checkbox" checked disabled> Amount</li>
                            <p id="amount"> </p>
                            {{-- <li class="list-items"><input type="checkbox" checked disabled> Status</li> --}}
                            <p id="status" class="label label-primary"> </p>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li>Car</li>
                            <p id="car_type"></p>
                            <li>Car Model</li>
                            <p id="car_model"></p>
                            <img class="img-responsive" id="selected-vehicle-image" src=""
                                alt="Vehicle">
                        </ul>
                    </div>

                </div>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dicta, ex et debitis quas odio dolor? Eveniet porro quod voluptate odit temporibus, similique quisquam totam nihil pariatur rerum dolore iste?


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" onclick="payNow()">Pay Now </button>
                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>




@endsection

@section('js')
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
    $(function () {
        $('.reservation').click(function (e) {
            e.preventDefault();
            var id = $(this).attr('id');

            $('.reserve-car').modal('show');

            $.ajax({
                url: "/reservations/" + id,
                type: "GET",
                // dataType: "JSON",
                success: function (data) {

                    const car = data.car;
                    $('.modal-title').html(
                        `Reservation ID: <span class="label label-id">${data.reservation_id}</span>`
                    );
                    var pathFinder = "{{asset('/storage/images/')}}";

                    $('#reserve_id').val(data.reservation_id);
                    $('#location').html(data.location);
                    $('#pick-up').html(data.pick_up);
                    $('#drop-off').html(data.drop_off);
                    $('#amount').html(`₦ ${car.hire_cost}`);
                    $('#status').html(data.status);
                    $('#car_type').html(car.car_type);
                    $('#car_model').html(car.car_model);
                    $('#selected-vehicle-image').attr('src',`${pathFinder}/${car.image1}`);

                    console.log( `${pathFinder}/${car.image1}`);


                    if (data.status == 'Completed') {
                        $('.modal-footer').hide();
                    } else {
                        $('.modal-footer').show();
                    }


                },
                error: function (jqXHR, textStatus, errorThrown) {
                    setTimeout(() => {
                        toastr.error('Error Get Information !');
                    }, 3000)
                }
            });





        })
    })


    function payNow() {

        $('.reserve-car').modal('hide');

        var res_id = $('#reserve_id').val();


        var mail = '{{ Auth::User()->email }}';
        var money = $('#amount').text();
        var amountPaid = money.replace(/[^a-zA-Z0-9 ]/g, "");

        //     console.log(cleanString)
        // return false;

        var handler = PaystackPop.setup({
            key: 'pk_test_5d5fb23f7643ea0c027b0754c6b8e5861b71c5f4',
            email: mail,
            amount: amountPaid * 100,
            currency: "NGN",
            ref: '' + Math.floor((Math.random() * 1000000000) +
                1
            ), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [{
                    display_name: "Mobile Number",
                    variable_name: "mobile_number",
                    value: "+2348012345678"
                }]
            },
            callback: function (response) {


                if (response.status == 'success') {

                    toastr.info('validating......')

                    const data = {
                        reservation_id: res_id
                    }

                    $.ajax({
                        url: "/reservations-callback",
                        headers: {
                            'X-CSRF-TOKEN': "{{csrf_token()}}"
                        },
                        type: "POST",
                        data: data,

                        success: function (data) {
                            setTimeout(() => {
                                toastr.success(data.msg)
                            }, 6000);

                            $("#reservationDeck").load(window.location.href +
                                " #reservationDeck");
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert('Error Retrieving Data!');
                        }
                    });
                } else {
                    toastr.warning(response.status)
                }

            },
            onClose: function () {
                // alert('window closed');
            }
        });
        handler.openIframe();

    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('[name="_token"]').val()
        }
    });

</script>


@endsection
