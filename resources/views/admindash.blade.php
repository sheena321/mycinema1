@extends("master")
@section("content")
    
    <!-- ******slidbar**** -->
    <div class="sidebar" style='width:250px'>
        <a href="{{ asset('http://127.0.0.1:8000/admnprofile') }}" style="color:blue;fontsize:7;"><i class="fa fa-fw "></i><img
                src="{{ asset('images/admin.jpg') }}" alt="" class="admin_image"> &nbsp;&nbsp;Admin</a>
        <br>
        <hr style="background-color:grey;border-radius=7px;">

        <a href="{{ asset('http://127.0.0.1:8000/admindash') }}"><i class="fa fa-fw fa-wrench"></i> Home</a>
        <a href="{{ asset('http://127.0.0.1:8000/theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i> Theaters</a>
        <a href="{{ asset('http://127.0.0.1:8000/moviedetails') }}"><i class="fa fa-fw fa-wrench"></i> Movies</a>
        <a href="{{ asset('http://127.0.0.1:8000/theateradminlist') }}"><i class="fa fa-fw fa-wrench"></i> Theater admin list</a>
        <a href="{{ asset('http://127.0.0.1:8000/bookingdetails') }}"><i class="fa fa-fw fa-wrench"></i> Booking</a>
        <a href="{{ asset('http://127.0.0.1:8000/adminchgpsw') }}"><i class="fa fa-fw fa-wrench"></i> Change Password</a>
        <a href="{{ asset('http://127.0.0.1:8000/ad_moviediscription') }}"><i class="fa fa-fw fa-wrench"></i> About Movie</a>
    </div>
    <div
        style="display:inline ; margin-left: 200px; margin-top:2000px; padding: 0px 10px; height: 1000px;width: 150%;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="card text-white bg-primary mb-3" style="min-width: 250px; display: inline-block; margin-top: 30px; height: 150px;">
            <div class="card-header"><b>Users</b></div>
            <div class="card-body">
                <!-- <h5 class="card-title">Primary card title</h5> -->
                <p class="card-text"><b>56</b></p>
            </div>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="card text-white bg-success mb-3" style="min-width: 250px; display: inline-block; margin-top: 30px; height: 150px;">
            <div class="card-header"><b>Theaters</b></div>
            <div class="card-body">
                <!-- <h5 class="card-title">Primary card title</h5> -->
                <p class="card-text">5</p>
            </div>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="card text-white bg-danger mb-3" style="min-width: 250px; display: inline-block; margin-top: 30px; height: 150px;">
            <div class="card-header">Movies</div>
            <div class="card-body">
                <!-- <h5 class="card-title">Primary card title</h5> -->
                <p class="card-text">6.</p>
            </div>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="card text-white bg-warning mb-3" style="min-width: 250px; display: inline-block;margin-top: 30px; height: 150px;">
            <div class="card-header"><B>Booking</B></div>
            <div class="card-body">
                <!-- <h5 class="card-title">Primary card title</h5> -->
                <p class="card-text">5</p>
            </div>
        </div>
    </div>
    @endsection