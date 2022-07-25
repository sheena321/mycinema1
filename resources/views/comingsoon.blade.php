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
<div class="container" style="margin-left:250px ;">
    <div class="row">
        <div class="col-12">
            <h1 style="background-color:brown; width: 1000px;">Coming Soon</h1>
        </div>
    </div><br>
    <div class="row" style="background-color: rgb(234, 204, 59);width: 1000px;margin-left: 5px;">
        <div class="col-4"><b>Movie</b></div>
       <div class="col-8">Trailer</div>
    </div><br>
    <div class="row">
        <div class="col-4"> <img src="{{ asset('images/hd4.jpg') }}" alt=""></div>
        <div class="col-8"><iframe width="560" height="340" src="https://www.youtube.com/embed/wefLDlv0wOY"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe></div>
    </div>
    <div class="row">
        <div class="col-4"> <img src="{{ asset('images/hd2.jpg') }}" alt=""></div>
        <div class="col-8"><iframe width="560" height="340" src="https://www.youtube.com/embed/wefLDlv0wOY"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe></div>
    </div>
</div>


@endsection