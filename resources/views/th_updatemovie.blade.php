@extends("master")
@section("content")
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
    </div>
<div class="container" style="margin-left:260px ; background-color: grey;">
<br>
    <div class="row">
        <div class="col-12" style="margin-left: 50px;">
        <b><h1>
            EditMovie
        </h1></b>
        </div>
    </div>
    <br><div class="row">
        <div class="col-5"></div>
        <div class="col-2">Enter Movie</div>
        <div class="col-2"><input type="text" name="" id=""></div>
        <div class="col-3"><button type="submit" class="btn btn-primary">ok</button></div>
    </div><br>
    
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">movie_id</th>
                        <th scope="col">MovieName</th>
                        <th scope="col">Screen</th>
                        <th scope="col">ShowTime</th>
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

    <div class="container" style="border:7px solid black ; width:1000px;">
        <br>
        <form action="">
        <div class="row">
            <div class="col-6"></div>
            <div class="col-3">Enter movieId</div>
            <div class="col-2"><input type="text" name="" id=""></div>
            <div class="col-1"><button type="submit">ok</button></div>
        </div><br>
        <div class="row">
            <div class="col-6">Movie name</div>
            <div class="col-6"><input type="text" name="" id=""></div>
        </div><br>
        <div class="row">
            <div class="col-6">Screeen</div>
            <div class="col-6"><input type="text" name="" id=""></div>
        </div><br>
        <div class="row">
            <div class="col-6">showTime</div>
            <div class="col-6"><input type="text" name="" id=""></div>
        </div><br>
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4"><button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </form><br><br>
    </div>
    <br><br>
</div>







@endsection