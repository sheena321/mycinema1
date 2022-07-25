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
<div class="container" style="margin-left:250px ;">
    <div class="row">
        <div class="col-12">
            <h1 style="width: 1100px; color:yellow;background-color: brown;">MyBooking</h1>
        </div>
    </div><br><br>
    <div class="row">
        <div class="col">
        <table class="table table-striped" style="border: 7px outset blue;">
  <thead style="background-color:lightgrey;">
    <tr>
      <th scope="col">#</th>
      <th scope="col">TheaterName</th>
      <th scope="col">MovieName</th>
      <th scope="col">Totalseaats</th>
      <th scope="col">DateOfBooking</th>
    </tr>
  </thead>
  <tbody style="background-color:rgb(134, 217, 238);">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
</div>


@endsection