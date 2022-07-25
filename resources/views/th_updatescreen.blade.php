@extends("master")
@section("content")
<!-- slidebar -->
<div class="sidebar" style='width:250px'>
    <a href="{{ asset('http://127.0.0.1:8000/thad_profile') }}" style="color:blue;font-size:7;"><i
            class="fa fa-fw "></i><img src="{{ asset('images/admin.jpg') }}" alt="" class="admin_image"> &nbsp;&nbsp;
        Theater Admin</a>
    <br>
    <hr style="background-color:grey;border-radius:7px;">
    <a href="{{ asset('http://127.0.0.1:8000/theaterdash') }}"><i class="fa fa-fw fa-wrench"></i> Home</a>
    <a href="{{ asset('http://127.0.0.1:8000/th_addmovie') }}"><i class="fa fa-fw fa-wrench"></i> Add Movies</a>
    <a href="{{ asset('http://127.0.0.1:8000/th_updatemovie') }}"><i class="fa fa-fw fa-wrench"></i> Update Movies</a>
    <a href="{{ asset('http://127.0.0.1:8000/th_addshow') }}"><i class="fa fa-fw fa-wrench"></i> Add Show</a>
    <a href="{{ asset('http://127.0.0.1:8000/editshow') }}"><i class="fa fa-fw fa-wrench"></i> Update show</a>
    <a href="{{ asset('http://127.0.0.1:8000/th_booking') }}"><i class="fa fa-fw fa-wrench"></i> Booking</a>
    <a href="{{ asset('http://127.0.0.1:8000/th_chgpsw') }}"><i class="fa fa-fw fa-wrench"></i> Change Password</a>
    <a href="{{ asset('http://127.0.0.1:8000/thad_theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i> Theater
        details</a>
</div>


<div class="container" style="margin-left: 260px; background-color: rgb(166, 161, 161);">
    <div class="row">
        <div class="col-12">
            <h1>EditScreen</h1>
        </div>
    </div><br>
    <div class="row">
        <div class="col-6">
            <label for="">ScreenName</label>
        </div>
        <div class="col-6">
            <select class="form-select" aria-label="Default select example">
                <option selected>select screen Name</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </div>
    </div><br>
    <div class="row">
        <div class="col-6">
            <label for="">Seats</label>
        </div>
        <div class="col-6">
            <input type="text" name="" id="">
        </div>
    </div><br>
    <div class="row">
        <div class="col-6">
            <label for="">Charge</label>
        </div>
        <div class="col-6">
            <input type="text" name="" id="">
        </div>
    </div><br>
    <div class="row">
        <div class="col-6">
            <label for="">ShowTime</label>
        </div>
        <div class="col-6">
            <input type="text" name="" id="">
        </div>
    </div><br>
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
          <button type="submit" class="btn btn-success ">Update</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
       
    </div>
    <br><br>
    

</div>
@endsection