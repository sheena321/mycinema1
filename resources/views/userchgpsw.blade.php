@extends("master")
@section("content")
<div class="sidebar" style='width:250px;'>
    <a href="{{ asset('http://127.0.0.1:8000/userprofile
    ') }}" style="color:blue;font-size: 6;"><i class="fa fa-fw "></i><img src="{{ asset('images/admin.jpg') }}"
            alt="" class="admin_image"> &nbsp;&nbsp; User</a>
    <hr style="background-color:grey;border-radius:7px;">
    <a href="{{ asset('http://127.0.0.1:8000/userdash') }}"><i class="fa fa-fw fa-wrench"></i> Home</a>
    <a href="{{ asset('http://127.0.0.1:8000/usermovie') }}"><i class="fa fa-fw fa-wrench"></i> Movies</a>
    <a href="{{ asset('http://127.0.0.1:8000/mybooking') }}"><i class="fa fa-fw fa-wrench"></i> My Booking</a>
    <a href="{{ asset('http://127.0.0.1:8000/ratetheater') }}"><i class="fa fa-fw fa-wrench"></i> Rate Theater</a>
    <a href="{{ asset('http://127.0.0.1:8000/ratemovie') }}"><i class="fa fa-fw fa-wrench"></i> Rate Movie</a>
    <a href="{{ asset('http://127.0.0.1:8000/contactus') }}"><i class="fa fa-fw fa-wrench"></i> ContactUs</a>
    <a href="{{ asset('http://127.0.0.1:8000/useradvts') }}"><i class="fa fa-fw fa-wrench"></i> Advertise with us</a>
    <a href="{{ asset('http://127.0.0.1:8000/userchgpsw') }}"><i class="fa fa-fw fa-wrench"></i> Change Password</a>
    <!-- <a href="{{ asset('http://127.0.0.1:8000/thad_theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i> Theater -->
    details</a>
</div>
<br>
<div class="container"
    style="border: 15px outset lightgrey ;border-radius:20px;background-color:lightgray ;height: 400px;width: 600px; ">
    <br>
    <form action="">
        <div class="row">
            <div class="col-12"><h3><b>ChangePassWord</b></h3></div>
        </div><br><br>

        <div class="row">
            <div class="col-6">
                <label for="">Username</label>
            </div>
            <div class="col-6">
                <input type="text" name="" id="">
            </div>

        </div><br>
        <div class="row">
            <div class="col-6"> <label for=""> Enter Password</label></div>
            <div class="col-6"><input type="password" name="" id=""></div>
        </div><br>
        <div class="row">
            <div class="col-6"><label for="">ReEnter Password</label></div>
            <div class="col-6"><input type="password" name="" id=""></div>
        </div><br><br>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6">
                <button type="button" class="btn btn-success">Save Changes</button>
                <button type="button" class="btn btn-primary">Cancel</button>
            </div>
        </div>
    </form>
</div>
@endsection