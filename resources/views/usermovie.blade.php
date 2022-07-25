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
<div class="container">
    <div class="row" style="margin-left:180px ;">
        <div class="col-12">
            <h3 style="background-color: brown;width:980px; color: yellow;">Now Showing</h3>
        </div>
    </div><br>
    <div class="row" style="margin-left: 200px; border:1px solid yellow">
        <div class="col-3"><img src="{{ asset('images/hd4.jpg') }}" alt="" style="height: 200px;"></div>
        <div class="col-4"><textarea name="" id="" cols="30" rows="10" placeholder="Directed by	S. S. Rajamouli
            Screenplay by	S. S. Rajamouli
            Story by	V. Vijayendra Prasad
            Dialogue by	
            Sai Madhav Burra
            Produced by	D. V. V. Danayya
            Starring	
            N. T. Rama Rao Jr.
            Ram Charan
            Ajay Devgn"style="width:300px;"></textarea></div>
        <div class="col-5"><iframe width="360" height="200" src="https://www.youtube.com/embed/wefLDlv0wOY"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe></div>
    </div>
    <div class="row" style="margin-left: 200px; border:1px solid yellow">
        <div class="col-3"><img src="{{ asset('images/hd4.jpg') }}" alt="" style="height: 200px;"></div>
        <div class="col-4"><textarea name="" id="" cols="30" rows="10" placeholder="Directed by	S. S. Rajamouli
            Screenplay by	S. S. Rajamouli
            Story by	V. Vijayendra Prasad
            Dialogue by	
            Sai Madhav Burra
            Produced by	D. V. V. Danayya
            Starring	
            N. T. Rama Rao Jr.
            Ram Charan
            Ajay Devgn"style="width:300px;"></textarea></div>
        <div class="col-5"><iframe width="360" height="200" src="https://www.youtube.com/embed/wefLDlv0wOY"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe></div>
    </div>
</div>




@endsection