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
<div class="container" style="margin-left:250px; background-color:lightgrey; border-radius :20px; height: 500px;"><br>
    <form action="">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <h2>AdvertiseWithUs</h2>
            </div>
            <div class="col-4"></div>
        </div><br>
        <div class="row">

            <br><br>

            <div class="col-4"><b> Advertisement Image</b>

            </div>
            <div class="col-8">
                <input type="text" name="" id="">&nbsp;&nbsp;<button class="btn btn-secondary"> Browse</button>
            </div>
        </div>
        <div class="row">
            <div class="col-4"> <b> Discription</b>
            </div>

            <div class="col-6" style="padding-left: 15px; "><textarea name="" id="" cols="30" rows="10"
                    style="width:500px;"></textarea>
            </div>
        </div><br><br>
        <div class=" row">
            <div class="col-4"></div>
            <div class="c0l-4"><button type="button" class="btn btn-success" style="width:150px;">Send</button></div>
            <div class="col-4"></div>
        </div>
    </form>
</div>
@endsection