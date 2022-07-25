@extends("master")
@section("content")
<div class="sidebar" style='width:250px'>
        <a href="{{ asset('http://127.0.0.1:8000/thad_profile') }}" style="color:blue;fontsize:7;"><i class="fa fa-fw "></i><img
                src="{{ asset('images/admin.jpg') }}" alt="" class="admin_image"> &nbsp;&nbsp; Theater Admin</a>
        <br>
        <hr style="background-color:grey;border-radius=7px;">
        <a href="{{ asset('http://127.0.0.1:8000/theaterdash') }}"><i class="fa fa-fw fa-wrench"></i> Home</a>
        <a href="{{ asset('http://127.0.0.1:8000/th_addmovie') }}"><i class="fa fa-fw fa-wrench"></i> Add Movies</a>
        <a href="{{ asset('http://127.0.0.1:8000/th_updatemovie') }}"><i class="fa fa-fw fa-wrench"></i> Update Movies</a>
        <a href="{{ asset('http://127.0.0.1:8000/th_addshow') }}"><i class="fa fa-fw fa-wrench"></i> Add Show</a>
        <a href="{{ asset('http://127.0.0.1:8000/editshow') }}"><i class="fa fa-fw fa-wrench"></i> Update show</a>
        <a href="{{ asset('http://127.0.0.1:8000/th_booking') }}"><i class="fa fa-fw fa-wrench"></i> Booking</a>
        <a href="{{ asset('http://127.0.0.1:8000/th_chgpsw') }}"><i class="fa fa-fw fa-wrench"></i> Change Password</a>
        <a href="{{ asset('http://127.0.0.1:8000/thad_theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i> Theater details</a>
    </div>
<div class="container" style="margin-left: 250px; "><br>
    <div class="row">
        <div class="col-12"><h1 style="color: yellow;">
            Booking</h1></div>
    </div><br>
    <div class="row">
        <div class="col-12">
            <form action="">
            <table class="table table-striped" style="background-color: darkmagenta; border: 10px outset rgba(229, 235, 36, 0.975);">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">UserName</th>
      <th scope="col">ShowId</th>
      <th scope="col">ShowDate</th>
      <th scope="col">Status</th>
      <th scope="col">BookedOn</th>
      <th scope="col">Seats</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
            </form>
        </div>
    </div>
</div>

@endsection