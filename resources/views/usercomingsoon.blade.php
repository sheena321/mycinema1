@extends("master")
@section("content")
<style>
    /* body{
background-image:url("{{ asset('images/comingsoon.jpg') }}" ) ;
background-repeat: no-repeat;
            /* width: 5000px; */
            /* height: 400px; */
            /* background-size: cover; */
            
    /* } */ */
</style>
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
    <a href="{{ asset('') }}"><i class="fa fa-fw fa-wrench"></i> LogOut</a>
    <!-- <a href="{{ asset('http://127.0.0.1:8000/thad_theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i> Theater -->
    details</a>
</div>
<div class="container" style="margin-left: 260px; border: 1px solid seashell;height: 200px;;">
    <div class="row">
        <div class="col">
            <!-- <img src="{{ asset('images/comingsoon.jpg') }}" alt="" style="height: 200px;"> -->
            <h1 style="background-color: brown;">ComingSoon</h1>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
                <div class="carousel-inner" >
                  <div class="carousel-item active">
                    <img src="{{ asset('images/hd3.jpg') }}" class="d-block w-100" alt="..." style="width:300px;height:200px;">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/hd2.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/hd1.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
               <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" dataide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span></style>
                  <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
              </div>
              </div>
        </div>
    </div>
</div>

@endsection