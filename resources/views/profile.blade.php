@extends('layouts.app')

@section('title')
Profile - {{ Auth::user()->name }}
@endsection


@section('content')

<div class="container py-5">

    <div class="row py-6">
        <div class="col-xs-12 col-md-8 col-lg-8 mx-auto">


            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Profile - {{$user->name}}
                        <a class="pull-right" href="#" id="change-password"><i class="ti-lock"></i></a>
                        <a class="pull-right" href="#" id="edit-form"><i class="ti-pencil-alt2"></i></a>
                    </h5>


                    <div class="row">
                        <div class="col-md-12">
                        <form action="{{ route('update-profile') }}" method="POST" id="user-form">

                            {{csrf_field()}}

                            <input type="hidden" name="action" value="information">
                                <div class="form-group">
                                    <label for="my-input">Name</label>
                                    <input class="form-control" type="text" name="name" value="{{$user->name}}"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Email</label>
                                    <input class="form-control" type="email" name="email" value="{{$user->email}}"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Phone Number</label>
                                    <input class="form-control" type="text" name="phone" value="{{$user->phone}}"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Location</label>
                                    <input class="form-control" type="text" name="location" value="{{$user->location}}"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="gender" disabled="disabled">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success pull-right" disabled>Submit</button>
                                </div>


                            </form>

                            <form action="{{ route('update-profile') }}" method="POST" id="password-form" class="py-3" style="display:none;">
                                <h3 class="card-title">Change Password</h3>

                                {{csrf_field()}}

                                <input type="hidden" name="action" value="password">
                                <div class="form-group">
                                    <label for="my-input">Old Password</label>
                                    <input class="form-control" type="password" name="old" 
                                        disabled>
                                </div>
                             
                                <div class="form-group">
                                    <label for="my-input">New Password</label>
                                    <input class="form-control" type="password" name="new" 
                                        disabled>
                                </div>
                             
                                <div class="form-group">
                                    <label for="my-input">Confirm Password</label>
                                    <input class="form-control" type="password" name="con" 
                                        disabled>
                                </div>
                             
                              
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success pull-right" disabled>Submit</button>
                                </div>


                            </form>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>

</div>


@endsection



@section('js')


<script>
    $(document).ready(function () {


        $('#edit-form').click(function () {

            $('form input[type="text"]').prop('disabled', false);
            $('form input[type="password"]').prop('disabled', false);
            $('form button[type="submit"]').prop('disabled', false);


        });


        $('#change-password').click(function(){
            $('#user-form').toggle('slow');
            $('#password-form').toggle('slow');
        })
    })

</script>


@endsection
