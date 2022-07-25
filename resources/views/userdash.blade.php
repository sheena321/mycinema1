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

<div class="container" style="margin-left:250px;">
    <div class="row" style="height:200px;width: 1000px; margin-left: 50px;;">
        <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/off1.jpg') }}" class="d-block w-100" alt="..."
                            style="height:200px; ">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/off2.jpg') }}" class="d-block w-100" alt="..." style="height:200px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/adv1.jpg') }}" class="d-block w-100" alt="..." style="height:200px;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </div>
    <br>
    <div class="row" style="background-color:rgb(236, 50, 50) ;">
        <div class="col-12">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Now Showing</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">ComingSoon</a>
                </li>
               
            </ul>
        </div>
    </div>
    <br><br>
    <div class="row" style="margin-left: 40px;">
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/hd1.jpg') }}" class="card-img-top" alt="..."
                    style="width: 180px; height:230px;">
                <div class="card-body">
                    <h5 class="card-title">Movie Name</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="{{ asset('http://127.0.0.1:8000/userbooking') }}" class="btn btn-primary">BookNow</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/hd2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Movie Name</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="#" class="btn btn-primary">BookNow</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/hd3.jpg') }}" class="card-img-top" alt="..."
                    style="width: 180px; height:230px;">
                <div class="card-body">
                    <h5 class="card-title">Movie Name</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="#" class="btn btn-primary">BookNow</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/hd4.jpg') }}" class="card-img-top" alt="..."
                    style="width: 180px; height:230px;">
                <div class="card-body">
                    <h5 class="card-title">Movie Name</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="#" class="btn btn-primary">BookNow</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<h3 style="background-color:rgb(236, 50, 50);margin-left: 260px;width: 1150px; color:rgba(84, 73, 133, 0.878)">Trailers<h3>
        <div class="container" style="margin-left: 250px;">
            <div class="row">
                <div class="col-6">
                    <iframe width="560" height="340" src="https://www.youtube.com/embed/wefLDlv0wOY"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>

                <div class="col-6">
                    <iframe width="560" height="340" src="https://www.youtube.com/embed/wefLDlv0wOY"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        @endsection