@extends('layouts.adminLayout.admin_design')

@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Admin Settings</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    @if (Session::has('flash_message_error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! session('flash_message_error') !!}</strong>
        </div>
    @endif
    @if (Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! session('flash_message_success') !!}</strong>
        </div>
    @endif
    <div class="card">

        <form class="form-horizontal" method="POST" action="{{ url('/admin/update-pwd') }}" novalidate="novalidate" id="password_validate" name="password_validate">
            {{ csrf_field() }}
            <div class="card-body">
                <h4 class="card-title">Update Password</h4>
                <hr>
                <br>
                <div class="form-group row">
                    <label for="current_pwd" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">Current Password *</label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <input type="password" class="form-control" id="current_pwd" name="current_pwd" placeholder="Current Password Here">
                        <span id="chkPwd"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="new_pwd" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">New Password *</label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <input type="password" class="form-control" id="new_pwd" name="new_pwd" placeholder="New Password Here">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="confirm_pwd" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">Confirm New Password *</label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <input type="password" class="form-control" id="confirm_pwd" name="confirm_pwd" placeholder="Confirm New Password Here">
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <input type="submit" value="Update Password" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->


@endsection ('content')
