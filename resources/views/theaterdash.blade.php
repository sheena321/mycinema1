@extends("master")
@section("content")
<!-- slidebar -->
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
        <a href="{{ asset('http://127.0.0.1:8000/thad_theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i>LogOut</a>
    </div>
<h1 style="color: red; margin-left: 260px;">Running Movies</h1><br><br><br><br><br>
<!-- <hr style="border-color: chartreuse;"><br><br> -->
<div
  style="display:inline; width: 600px;height: 200px;margin-top: 100px;margin-left: 260px;">
  &nbsp;&nbsp;&nbsp;&nbsp;
  <div class="card" style="width: 18rem;display: inline-block;">
    <img src="{{ asset('images/hd1.jpg') }}" class="card-img-top" alt="..." style="width: 180px; height:230px;">
    <div class="card-body">
      <h5 class="card-title">Movie Name</h5>
      <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
      <!-- <a href="{{ asset('http://127.0.0.1:8000/userbooking') }}" class="btn btn-primary">BookNow</a> -->
    </div>

  </div>
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  <div class="card" style="width: 18rem;display: inline-block;">
    <img src="{{ asset('images/hd2.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Movie Name</h5>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <!-- <a href="#" class="btn btn-primary">BookNow</a> -->
    </div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<div class="card" style="width: 18rem;display: inline-block;">
  <img src="{{ asset('images/hd3.jpg') }}" class="card-img-top" alt="..."
      style="width: 180px; height:230px;">
  <div class="card-body">
      <h5 class="card-title">Movie Name</h5>
      <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
      <!-- <a href="#" class="btn btn-primary">BookNow</a> -->
  </div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<div class="card" style="width: 18rem;display: inline-block;">
  <img src="{{ asset('images/hd4.jpg') }}" class="card-img-top" alt="..."
      style="width: 180px; height:230px;">
  <div class="card-body">
      <h5 class="card-title">Movie Name</h5>
      <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
      <!-- <a href="#" class="btn btn-primary">BookNow</a> -->
  </div>
</div>

</div>
<br><br><br>
<button type="submit" class="btn btn-primary" id="btn1" onclick="tog()" style="margin-left: 700px; width: 200px;height:60px;border-radius: 22px;">Details</button>
<br><br><br>
<table class="table table-borderless stripped" id="tb1"
  style=" margin-left: 650px; display: none;width: 500px;">
  <thead style="color:blue ;background-color:white;">
    <tr>
      <th scope="col">No</th>
      <th scope="col">ShowTime</th>
      <th scope="col">MovieName</th>
      <th scope="col">SCreen</th>
    </tr>
  </thead>
  <tbody style="color:black ;background-color:rgb(86, 64, 64)">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<br>


<script>
  var c=0;
  function tog(){
      var x = document.getElementById("tb1");
      if (x.style.display === "none") {
  x.style.display = "block";
  }
  else{
      x.style.display = "none";
  }
}
</script>

@endsection