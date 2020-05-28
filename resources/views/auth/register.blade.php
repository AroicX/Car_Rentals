@extends('layouts.auth')
@section('title')
Register
@endsection


@section('content')

<style>
    .login-area {
        box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.06) !important;
    }

</style>

<div class="login-area">
    <div class="container">
        <div class="login-box ptb--100">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}


                <div class="login-form-head">
                    <h4>Register</h4>
                    <p>Please fill-In form to Contiune </p>
                </div>
                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="name" id="exampleInputEmail1" name="name" value="{{ old('name') }}">
                        <i class="ti-email"></i>
                        <div class="text-danger"></div>

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-gp">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" id="exampleInputEmail1" name="email" value="{{ old('email') }}">
                        <i class="ti-email"></i>
                        <div class="text-danger"></div>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-gp">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" id="exampleInputPassword1" name="password">
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-gp">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" id="exampleInputPassword1" name="password_confirmation">
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>

                     
                    </div>
                    {{-- <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember
                                        Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div> --}}
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Register <i class="ti-arrow-right"></i></button>

                    </div>

                </div>
            </form>
        </div>
    </div>
</div>



@endsection


