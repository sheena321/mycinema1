@extends("master")
@section("content")
<div class="sidebar" style='width:250px'>
    <a href="{{ asset('http://127.0.0.1:8000/admnprofile') }}" style="color:blue;fontsize:7;"><i class="fa fa-fw "></i><img
            src="{{ asset('images/admin.jpg') }}" alt="" class="admin_image"> &nbsp;&nbsp;Admin</a>
    <br>
    <hr style="background-color:grey;border-radius:7px;">
    <a href="{{ asset('http://127.0.0.1:8000/admindash') }}"><i class="fa fa-fw fa-wrench"></i> Home</a>
    <a href="{{ asset('http://127.0.0.1:8000/theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i> Theaters</a>
    <a href="{{ asset('http://127.0.0.1:8000/moviedetails') }}"><i class="fa fa-fw fa-wrench"></i> Movies</a>
    <a href="{{ asset('http://127.0.0.1:8000/theateradminlist') }}"><i class="fa fa-fw fa-wrench"></i> Theater admin list</a>
    <a href="{{ asset('http://127.0.0.1:8000/bookingdetails') }}"><i class="fa fa-fw fa-wrench"></i> Booking</a>
    <a href="{{ asset('http://127.0.0.1:8000/adminchgpsw') }}"><i class="fa fa-fw fa-wrench"></i> Change Password</a>
    <a href="{{ asset('http://127.0.0.1:8000/ad_moviediscription') }}"><i class="fa fa-fw fa-wrench"></i> About Movie</a>
</div>
    <h1 style="margin-left: 260px; color:brown">Booking Details</h1>
    <table class="table" style="margin-left: 260px ;background-color: beige;">
    <thead class="thead-dark">
      <tr>
        <th scope="col">SINo</th>
        <th scope="col">Movie Name</th>
        <th scope="col">Theater Name</th>
        <th scope="col">UseId</th>
        <th scope="col"> ShowDate</th>
        <th scope="col"> BookedOn</th>
        <th scope="col"> Seats</th>
        <th scope="col"> Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        
        <td>2/5/2022</td>
        <td>3/7/2022</td>
        <td>A12,A13</td>
        <td>Booked</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        
        <td>2/5/2022</td>
        <td>3/7/2022</td>
        <td>B12,B13</td>
        <td>Cancelled</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>Action</td>
        <td>Coming soon</td>
        <td>3/7/2022</td>
        <td>B12,B13</td>
        <td>Cancelled</td>
      </tr>
    </tbody>

  </table>
  <hr>
  @endsection