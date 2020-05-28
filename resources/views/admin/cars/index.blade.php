@extends('admin.layout.app')

@section('title')
Manage Cars - {{ Auth::user()->name }}
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
    span {
        cursor: pointer;
    }

</style>

<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Manage CARS <span class="text-primary"
                            style="font-size: 11px !important;">can view/edit</span>
                        <span><i class="ti-plus pull-right" data-toggle="modal" data-target=".add-car"></i></span>
                    </h4>
                    <div class="data-tables">
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th>Name</th>
                                    <th>Gear Type</th>
                                    <th>Type</th>
                                    <th>Model</th>
                                    <th>Hire Cost</th>
                                    <th>Capacity</th>
                                    <th>Plate Number</th>
                                    <th>Engine Number</th>
                                    <th>AC</th>
                                    <th>Fuel</th>
                                    <th>Actions</th>
                                    <th>Car Documents</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cars as $car)

                                <tr>
                                    <td>{{$car->car_name}}</td>
                                    <td>{{$car->gear_type == 'automatic' ? 'Automatic' : 'Manual'}}</td>
                                    <td>{{$car->car_type}}</td>
                                    <td>{{$car->car_model}}</td>
                                    <td>{{$car->hire_cost}}</td>
                                    <td>{{$car->capacity}}</td>
                                    <td>{{$car->plate_num}}</td>
                                    <td>{{$car->engine_num}}</td>
                                    <td>{{$car->ac == 1 ? 'Yes' : 'No'}}</td>
                                    <td>{{$car->fuel == 1 ? 'Yes' : 'No'}}</td>
                                  
                                    <td>
                                        <ul class="action">
                                            <li id="{{$car->id}}" class="view-car"><i class="ti-eye"></i></li>
                                            <li id="{{$car->id}}" class="edit-car" onclick="edit({{$car->id}})"><i
                                                    class="ti-slice"></i></li>
                                            <li onclick="del({{$car->id}})" class="del-car"><i class="ti-close"></i>
                                            </li>
                                        </ul>
                                    </td>
                                <td><a href="{{asset('/storage/documents').'/'.$car->car_documents}}" target="_blank">View</a></td>
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


<div class="modal fade bd-example-modal-lg add-car">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Car</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">

                <form action="{{ url('admin/cars/add')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <h5 class="my-2">Basic Informations</h5>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Image 1 <br> <small class="text-danger">Note: Image should not be greater than
                                        (2048mb) </small> </label>
                                <input class="form-control" type="file" name="image1" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Image 2 <br> <small class="text-danger">Note: Image should not be greater than
                                        (2048mb) </small> </label>
                                <input class="form-control" type="file" name="image2" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Image 3 <br> <small class="text-danger">Note: Image should not be greater than
                                        (2048mb) </small> </label>
                                <input class="form-control" type="file" name="image3" >
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Car Name</label>
                                <input class="form-control" type="text" name="car_name" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Car Type</label>
                                <select class="form-control" name="car_type" required>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Audi">Audi</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Kia">Kia</option>
                                    <option value="Nissan">Nissan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Car Model</label>
                                <input class="form-control" type="text" name="car_model" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Plate Number</label>
                                <input class="form-control" type="text" name="plate_num" min="6" max="10" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Capacity </label>
                                <input class="form-control" type="number" name="capacity" min="2" max="8" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hire Cost <small class="text-danger">Note: Price is in naira (₦)</small> </label>
                                <input class="form-control" type="text" name="hire_cost" required>
                            </div>
                        </div>


                    </div>

                    <h5 class="my-2">Other Informations</h5>
                    <br>

                    <div class="row">
                        <br>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Gear Type </label>
                                <select class="form-control" name="gear_type" id="gear_type">
                                    <option value="manual">Manual</option>
                                    <option value="automatic">Automatic</option>
                                </select>
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tyre Size </label>
                                <input type="number" class="form-control" name="tyre_size">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="color" class="my-4" name="car_color" value="#e66465">
                                <label>Car Color </label>

                                <input type="checkbox" class="form-control-inline mx-2" name="ac" >
                                <label>A/C </label>

                                <input type="checkbox" class="form-control-inline mx-2" name="fuel" >
                                <label> Fuel </label>


                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Engine Number </label>
                                <input class="form-control" type="text" name="engine_num" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Year of Make </label>
                                <input class="form-control" type="text" name="year_of_make" required>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Car Documents <br> <small class="text-danger">Note: Preferably in pdf format
                                    </small> </label>
                                <input class="form-control" type="file" name="car_documents" required>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Description  <br> <small class="text-danger">Note: Give Further information of the car such as interior, premium features etc.
                                    </small> </label>
                               <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>


                    </div>

                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>

                    </div>

                </form>


            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
    </div>
</div>




<div class="modal fade bd-example-modal-lg" id="edit-car">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Car</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">

                <form action="{{ url('admin/cars/edit')}}" method="POST">
                    {{csrf_field()}}
                    <div class="row">

                        <input type="hidden" name="car_id" id="car_id">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Car Name</label>
                                <input class="form-control" type="text" id="car_name" name="car_name" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Car Type</label>
                                <select class="form-control" id="car_type" name="car_type" required>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Audi">Audi</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Kia">Kia</option>
                                    <option value="Nissan">Nissan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Car Model</label>
                                <input class="form-control" id="car_model" type="text" name="car_model" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Plate Number</label>
                                <input class="form-control" id="plate_num" type="text" name="plate_num" min="6" max="10"
                                    required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Capacity </label>
                                <input class="form-control" id="capacity" type="number" name="capacity" min="2" max="8"
                                    required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hire Cost <small class="text-danger">Note: Price is in naira (₦)</small> </label>
                                <input class="form-control" id="hire_cost" type="text" name="hire_cost" required>
                            </div>
                        </div>


                    </div>

                    <div class="submit-btn-area">
                        <button type="submit">Submit <i class="ti-arrow-right"></i></button>

                    </div>

                </form>


            </div>

        </div>
        {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
    </div>
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


<script>
    $(document).ready(function () {
        console.log('testing')
    });




    function edit(id) {

        toastr.warning('Loading....')

        // $('#edit_car').modal('show');


        $.ajax({
            url: "/admin/cars/findCar/" + id,
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                $('#edit-car').modal('show'); // show bootstrap modal when complete loaded
                $('#car_id').val(data.id);
                $('#car_name').val(data.car_name);
                $('#car_type').val(data.car_type);
                $('#car_model').val(data.car_model);
                $('#plate_num').val(data.plate_num);
                $('#capacity').val(data.capacity);
                $('#hire_cost').val(data.hire_cost);


            },
            error: function (jqXHR, textStatus, errorThrown) {
                setTimeout(() => {
                    toastr.error('Error Retrieving Data!');
                }, 3000)
                // toastr.error('Error Retrieving Data!');
            }
        });

    }



    function del(id) {



        if (confirm('Are sure You want to delete ...!')) {

            $.ajax({
                url: "/admin/cars/delete/" + id,
                type: "GET",
                // dataType: "JSON",
                success: function (data) {
                    toastr.error('Car Deleted Successfully');

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    setTimeout(() => {
                        toastr.error('Error Deleting Car !');
                    }, 3000)
                    // toastr.error('Error Retrieving Data!');
                }
            });


        } else {
            toastr.info('Car was not deleted');

        }

    }

</script>



@endsection
