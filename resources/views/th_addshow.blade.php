@extends("master")
@section("content")
<<div class="sidebar" style='width:250px'>
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
<div class="container" style="margin-left: 260px; background-color: lightgray;border-radius: 25px;margin-top: 30px;">
    <form action="">
    <div class="row">
        <div class="col-12" style="margin-left:15px ;"><h1>AddShow</h1></div>
    </div><br>
    <div class="row">
        <div class="col-6">
            <label for="">Showtime</label>
        </div>
        <div class="col-6"><input type="text" name="" id=""></div>
    </div><br>
    <div class="row">
        <div class="col-6">
            <label for="">TheaterName</label>
        </div>
        <div class="col-6"><input type="text" name="" id=""></div>
    </div><br>
    

    <div class="row">
        <div class="col-6">
            <label for="">Screen</label>
        </div>
        <div class="col-6"><input type="text" name="" id=""></div>
    </div><br>
    <div class="row">
        <div class="col-6">
            <label for="">Seats</label>
        </div>
        <div class="col-6"><input type="text" name="" id=""></div>
    </div><br>
    <div class="row">
        <div class="col-6">
            <label for="">Charge</label>
        </div>
        <div class="col-6"><input type="text" name="" id=""></div>
    </div><br>
    <div class="row">
        <div class="col-6">
            <label for="">Showtime</label>
        </div>
        <div class="col-6"><input type="text" name="" id=""></div>
    </div>
   <br>
    <div class="row">
        <div class="col-6">
         
        </div>
        <div class="col-6"><button type="submit" style="width: 100px;"class="btn btn-primary">Add</button></div>
    </div>
</form><br>
</div>


@endsection