@extends("master")
@section("content")
<!-- slidebar -->
<div class="sidebar" style='width:250px'>
        <a href="{{ asset('http://127.0.0.1:8000/thad_profile') }}" style="color:blue;fontsize:7;"><i class="fa fa-fw "></i><img
                src="{{ asset('images/admin.jpg') }}" alt="" class="admin_image"> &nbsp;&nbsp; Theater Admin</a>
        <br>
        <hr style="background-color:grey;border-radius=7px;">
        <a href="{{ asset('http://127.0.0.1:8000/theaterdash') }}"><i class="fa fa-fw fa-wrench"></i> Home</a>
        <a href="{{ asset('http://127.0.0.1:8000/th_addmovie') }}"><i class="fa fa-fw fa-wrench"></i> Add Movies</a>
        <a href="{{ asset('http://127.0.0.1:8000/th_updatemovie') }}"><i class="fa fa-fw fa-wrench"></i> Update Movies</a>
        <a href="{{ asset('http://127.0.0.1:8000/th_addshow') }}"><i class="fa fa-fw fa-wrench"></i> Add Show</a>
        <a href="{{ asset('http://127.0.0.1:8000/editshow') }}"><i class="fa fa-fw fa-wrench"></i> Update show</a>
        <a href="{{ asset('http://127.0.0.1:8000/th_booking') }}"><i class="fa fa-fw fa-wrench"></i> Booking</a>
        <a href="{{ asset('http://127.0.0.1:8000/th_chgpsw') }}"><i class="fa fa-fw fa-wrench"></i> Change Password</a>
        <a href="{{ asset('http://127.0.0.1:8000/thad_theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i> Theater details</a>
        <a href="{{ asset('http://127.0.0.1:8000/thad_theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i>LogOut</a>
    </div>

<div class="container-fluid"
    style="border: 1px solid black;background-color: rgb(252, 229, 129); margin-left: 260px; margin-right: 700px; width:1100px; margin-top: 15px;">
    <div class="row">
    
        <div class="col-12">
            <h1 style="padding-left:400px">Theater Details</h1><br>
            <div class="container"
            style="border: 4px solid rgb(91, 86, 86);border-radius:20px;background-color: ghostwhite;border-style: inset; width:900px;">
                <form action="">
                    <br><br>
                    <!-- <div class="row" >
                            <div class="col-2" style="margin-right:500px;">
                                <h4> <label for="">Address</label></h4>
 ddddd
                            </div>
                            <div class="col-8">
                                <textarea name="" id="" cols="30" rows="10" placeholder="
                                August Wilson Theatre,
                                245 W 52nd Street,
                                Manhattan,
                                New York,
                                NY 10019,
                                United States" style="width:800px; background-color: rgb(247, 244, 197);margin-right:200px;"></textarea>
                            </div>
                        </div><br> -->
                    <div class="col-5">
                        <label for="">Address :</label>
                        <textarea name="" id="" cols="30" rows="10" placeholder="
                                August Wilson Theatre,
                                245 W 52nd Street,
                                Manhattan,
                                New York,
                                NY 10019,
                                United States"
                                style="width:500px; background-color: rgb(247, 244, 197);margin-left:170px"></textarea>
                        

                        <!-- <div class="col-2"></div> -->
                    </div>

                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#update1"
                                style="width: 300px; border-radius:20px;">Update</button>
                        </div>
                        <div class="col-4"></div>
                    </div><br>
                </form>
            </div><br><br>
            <div class="container"
                style="border:5px outset rgb(96, 97, 98); border-radius: 20px; background-color:ghostwhite;width:900px;">
                <form action="">
                    <div class="row">

                        <div class="col-12"><br>
                            <h3>Screen Details</h3>
                            </h1>
                        </div>
                    </div><br>
                    <div class="row" ">
                            <div class=" col-12">
                        <table class="table"
                            style="border: 5px inset rgb(79, 75, 75); background-color: rgb(239, 156, 156);">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Screen</th>
                                    <th scope="col">seats</th>
                                    <th scope="col">Charge</th>
                                    <th scope="col">ShowTime</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
            </div><br>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8" style="padding-left: 250px;">
                    <!-- <button type="submit" class="btn btn-primary" style="width: 150px;">Add</button> -->
                    <!-- <button type="butto" class="btn btn-success" style="width: 150px;">Update</button> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update2"
                        style="width: 150px;">Add</button>
                    <button type="submit" class="btn btn-success" style="width: 150px;"><a href="{{ asset('http://127.0.0.1:8000/th_updatescreen') }}" style="text-decoration: none;color: white;">Update</a> </button>
                </div>
                <div class="col-2"></div>
            </div><br><br>

            </form>
        </div>
    </div>


</div>
</div>
<!-- </div> -->
<div class="modal fade" id="update1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <label for="">Enter your New Address</label><br>
                    <textarea name="" id="" cols="30" rows="10" style="width: 450px;"></textarea>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="update2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-lg" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><h3>Add Screen</h3></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <form action="">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">ScreenName</div>
                            <div class="col-9"><input type="text" name="" id="" style="width: 400px;"></div>
                        </div>
                        <div class="row">
                            <div class="col-3">SeatNo</div>
                            <div class="col-9"><input type="text" name="" id=""style="width: 400px;"></div>
                        </div>
                        <div class="row">
                            <div class="col-3">Charge</div>
                            <div class="col-9"><input type="text" name="" id=""style="width: 400px;"></div>
                        </div>
                        <div class="row">
                            <div class="col-3">Showtime</div>
                            <div class="col-9"><input type="text" name="" id=""style="width: 400px;"></div>
                        </div>
                    </div>

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
@endsection