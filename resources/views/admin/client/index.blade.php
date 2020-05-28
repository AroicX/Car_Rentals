@extends('admin.layout.app')


@section('title')
Manage User
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection




@section('content')



<style>
    .label-primary {
        padding: 5px 10px;
        background: #fd7e14;
        color: #fff;
    }

    .label-success {
        padding: 5px 10px;
        background: #28a745;
        color: #fff;
    }

</style>



<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Manage User <span class="text-primary"
                            style="font-size: 11px !important;">can view/edit</span>
                        {{-- <span><i class="ti-plus pull-right" data-toggle="modal" data-target=".add-car"></i></span> --}}
                    </h4>
                    <div class="data-tables">
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Location</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($client as $user)
                                    <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->location}}</td>
                                    <td>{{$user->gender}}</td>
                                    <td>
                                        @if($user->status == '1')
                                        <span class="label label-primary">Not Active</span>
                                        @else
                                        <span class="label label-success">Active</span>
                                        @endif
                                    </td>
                                     <td>
                                        <ul class="action">
                                            <li id="{{$user->id}}" class="view-car"><i class="ti-eye"></i></li>
                                        <li id="{{$user->id}}" class="edit-car" onclick="edit({{$user->id}})"><i
                                                class="ti-slice"></i></li>
                                        <li onclick="del({{$user->id}})" class="del-car"><i class="ti-close"></i>
                                        </li>
                                        </ul>
                                    </td>


                                    </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->


    </div>
</div>




@endsection



@section('js')




<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
@endsection
