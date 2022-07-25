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
<div class="container" style="margin-left:250px; background-color:lightgrey; border-radius :20px; height: 500px;">
    <br>
    <div class="row">
        <div class="col-12">
            <h3><b>ContactUs</b></h3>
        </div>
    </div><br>
    <div class="row">
        <div class="col-2"> <b> Enter Your Message</b>
        </div>
        <div class="col-5" style=" width:700px;"><textarea name="" id="" cols="30" rows="10"
                style="width:500px;"></textarea>
        </div>
        <div class="col-5" style="padding-left: 60px;"><label for=""><b>Date</b></label> &nbsp;&nbsp;<input type="date" name=""
                id=""></div>
    </div><br><br>
    <div class=" row">
        <div class="col-4"></div>
        <div class="c0l-4"><button type="button" class="btn btn-success" style="width:150px;">Send</button></div> &nbsp;&nbsp;
        <div class="c0l-4"><button type="button" class="btn btn-success" onclick="tog()" style="width:150px;">ShowMessage</button></div>
        
        
        </div>
    </div>
</div><br>
<table class="table" id="tb1" style="background-color: white; display: none;width:500px;margin-left: 450px; border: 7px solid blueviolet;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Message</th>
        <th scope="col">Date</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
      
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
    
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>

      </tr>
    </tbody>
  </table>



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