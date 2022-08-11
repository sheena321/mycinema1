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
  <a href="{{ asset('ttp://127.0.0.1:8000/contactus') }}"><i class="fa fa-fw fa-wrench"></i> ContactUs</a>
  <a href="{{ asset('http://127.0.0.1:8000/useradvts') }}"><i class="fa fa-fw fa-wrench"></i> Advertise with us</a>
  <a href="{{ asset('http://127.0.0.1:8000/userchgpsw') }}"><i class="fa fa-fw fa-wrench"></i> Change Password</a>
  <!-- <a href="{{ asset('http://127.0.0.1:8000/thad_theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i> Theater -->
  details</a>
</div>

<h2>Movie name</h2>
<!-- <div class="jumbotron"> -->
  <!-- <h1 class="display-4"> -->
  <!-- <img src="{ as{set('images/hd1.jpg') }}" alt="" width="90%" height="300px">  <br><br> -->
  <!--label and input for rating stars-->

  <!-- <label for="input-1" class="control-label">Give a rating for Movie:</label> -->
  <!-- <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="2"> -->

  <!-- <label for="">enter your comments</label> -->
  <!-- <input type="text" name="" id=""> -->
<!-- </h1> -->
<!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> -->
<!-- <hr class="my-4"> -->
<!-- <label for="">Theater Name</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
<!-- <button style="border:none ;">time1</button> -->
<!-- <button  style="border:none ;">time2</button> -->
<!-- <button  style="border:none ;">time3</button><br> -->
<!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
<!-- <a class="btn btn-primary btn-lg" href="#" role="button " style="margin-left: 40px; margin-top: 30px;">Book</a> -->
<!-- </div> -->

<div class="container" style="margin-left:250px; background-color:white; height: 550px;">
    
    <div class="row">
        <div class="col-12">
            <h1 style="color:brown ;"> <b>Booking</b> </h1>
        </div>
    </div><br>
    <div class="row" style="border: 1px solid black; width:900px; margin-left: 30px; height: 250px;">
        <div class="col-6" style="margin-top:20px;">
            <img src="{{ asset('images/hd1.jpg') }}" alt="" style="height:200px;">
        </div>
        <div class="col-6" style="margin-top:50px;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dignissimos blanditiis molestiae.
        </div>
    </div><br>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">TheaterName</th>
                    <th scope="col">Address</th>
                    <th scope="col">ShowTime</th>
        
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>the Bird</td>
                    <td>Mark</td>
                    <td> <a href="{{ asset('http://127.0.0.1:8000/selectseat') }}">1 pm</a> </td>
                
                  </tr>
                  <tr>
                    <td>the Bird</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                
                  </tr>
                  <tr>
                    <td>the Bird</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection