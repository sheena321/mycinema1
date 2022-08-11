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

    <div class="containter-fluid"
        style="height: 1000px;width: 1100px; margin-left: 300px; background-color: rgb(244, 217, 121); border-radius:20px;">
        <form action="">
            <div class="row">
                <div class="col-12">
                    <h1 style="padding-left:350px;padding-top:20px; ">ADD Movie</h1><br>
                </div>
            </div>
            <div class="row" style="padding-top:60px ;padding-left: 89px;">

                <div class="col-6">

                    <label for="">Movie Name</label>
                </div>
                <div class="col-6">

                    <input type="text" name="" id="">
                </div>

            </div><br>
            <div class="row">

                <div class="col-6" style="padding-left: 109px;">

                    <label for="">Screen</label>
                </div>
                <div class=" col-6">

                    <div class="container">
                        <select class="form-control" style="width:190px; margin-left:29px ;border: 1px solid black;">
                            <option>Screen1</option>
                            <option>Screen2</option>
                            <option>Screen3</option>
                        </select>
                    </div>
                </div>

            </div><br>
            <div class="row" style="padding-left: 89px; ">

                <div class="col-6">

                    <label for="">Shwo Time</label>
                </div>
                <div class="col-6">

                    <input type="text" name="" id="">
                </div>

            </div><br>
            <div class="row" style="padding-left: 89px;">

                <div class="col-6">

                    <label for="">Start Date</label>
                </div>
                <div class="col-6">

                    <input type="date" name="" id="">
                    
                </div>
            </div><br>
            <div class="row" style="padding-left: 89px;">

                <div class="col-6">

                    <label for="">End Date</label>
                </div>
                <div class="col-6">

                    <input type="date" name="" id="">
                    
                </div>
            </div><br>
            <div class="row" style="padding-left: 89px;">

                <div class="col-6">

                    <label for="">Poster link</label>
                </div>
                <div class="col-6">

                    <input type="text" name="" id="">
                </div>
            </div><br>
            <div class="row" style="padding-left: 89px;">

                <div class="col-6">

                    <label for="">Trailer Link</label>
                </div>
                <div class="col-6">

                    <input type="text" name="" id="">
                </div>

            </div><br><br>
            <div class="row" style="padding-left: 89px;">
                <div class="col-4"></div>
                <div class="col-4">


                    <button type="button" class="btn btn-primary">ADD</button>

                </div>
                <div class="col-4"></div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped"
                        style="background-color:white;padding:100px;border:15px inset rgb(45, 194, 197);height: 300px; width: 1000px;margin-left: 50px;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>

    @endsection