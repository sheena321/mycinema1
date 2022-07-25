@extends("master")
@section("content")


    <div class="sidebar" style='width:250px'>
        <a href="{{ asset('http://127.0.0.1:8000/admnprofile') }}" style="color:blue;fontsize:7;"><i class="fa fa-fw "></i><img
                src="{{ asset('images/admin.jpg') }}" alt="" class="admin_image"> &nbsp;&nbsp;Admin</a>
        <br>
        <hr style="background-color:grey;border-radius=7px;">
        <a href="{{ asset('http://127.0.0.1:8000/admindash') }}"><i class="fa fa-fw fa-wrench"></i> Home</a>
        <a href="{{ asset('http://127.0.0.1:8000/theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i> Theaters</a>
        <a href="{{ asset('http://127.0.0.1:8000/moviedetails') }}"><i class="fa fa-fw fa-wrench"></i> Movies</a>
        <a href="{{ asset('http://127.0.0.1:8000/theateradminlist') }}"><i class="fa fa-fw fa-wrench"></i> Theater admin list</a>
        <a href="{{ asset('http://127.0.0.1:8000/bookingdetails') }}"><i class="fa fa-fw fa-wrench"></i> Booking</a>
        <a href="{{ asset('http://127.0.0.1:8000/adminchgpsw') }}"><i class="fa fa-fw fa-wrench"></i> Change Password</a>
        <a href="{{ asset('http://127.0.0.1:8000/ad_moviediscription') }}"><i class="fa fa-fw fa-wrench"></i> About Movie</a>
    </div>
    <h1 style="padding-left: 300px; color:brown">Movie List</h1>
    <table class="table table-striped" style="margin-left: 260px;">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Movie Name</th>
        <th scope="col">Theater Name</th>
        <th scope="col">Category</th>
        <th scope="col"> Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Running</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Running</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>Action</td>
        <td>Coming soon</td>
      </tr>
    </tbody>
</table>
<br>
    <hr>
  <span ><h1 style="margin-left: 500px; color: brown;">ShowTime</h1></span>
  <table class="table table-sm" style="border:5px solid black; width: 500px;height: 300px; margin-left: 350px; margin-top: 120px; background-color: beige;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Theater</th>
      <th scope="col">Movie</th>
      <th scope="col">ShowTime1</th>
      <th scope="col">ShowTime2</th>
      <th scope="col">ShowTime3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>10:00 AM</td>
      <td>1:00 PM</td>
      <td>5;00 PM</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>10:00 AM</td>
      <td>1:00 PM</td>
      <td>5;00 PM</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>10:00 AM</td>
      <td>1:00 PM</td>
      <td>5;00 PM</td>
    </tr>
  </tbody>
</table>
  <hr>
  @endsection
