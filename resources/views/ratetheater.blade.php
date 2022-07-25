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
<div class="container" style="background-color: lightgrey; margin-left: 260px; border-radius: 20px;height: 600px;">
    <div class="row"
        style="background-color:azure; border: 1px solid black; border-radius: 18px; margin-left: 30px;width: 1000px; margin-top: 20px;">
        <div class="col-4">
            <img src="{{ asset('images/theater.jpg') }}" alt="..." style="width:200px;height:150px;">
        </div>
        <div class="col-8" style="margin-top: 20px;">
            <label for=""> August Wilson Theatre,<br>
                245 W 52nd Street,<br>
                Manhattan,<br>
                New York,<br>
                NY 10019,<br>
                United States"</label>
        </div>
    </div><br>
    <div class="row">
        <div class="col-3">
            Enter Your Comments
        </div>
        <div class="col-4"><textarea name="" id="" cols="30" rows="10" style="width:500px ;"></textarea></div>
    </div>
    <div class="row">
        <div class="col-3">Rating</div>
        <div class="col-2" id="div1" style="margin-left: 0px;"></div>
        <div class="col-1">
            <h4>/5 Stars</h4>
        </div>
        <div class="col-6">
            <button id="btn1" onclick="click1()"><img src="{{ asset('images/star.jpg') }}" alt=""
                    style="width:30px;height: 30px;;"></button>
            <!-- <button id="btn2" onclick="click2()"><img src="{{ asset('images/halfstar.jpg') }}" alt="" -->
            <!-- style="width:30px;height: 30px;;"></button> -->
            <label for="" style="color: red;">(click star button for rating) </label>
            <br><br>
        </div>
    </div><br><br>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"><button type="submit" class ="btn btn-primary" style="width:200px;border-radius:20px ;">Send</button></div><br>
        <div class="col-4"></div>
    </div>
</div><br><br>
<div class="container"
    style="border-radius:20px; border:1px solid black; background-color:rgb(255, 248, 205);margin-left:  260px;"><br>
    <div class="row">
        <div class="col-12"><b>Reviews</b></div>
    </div>
    <div class="col-12"><table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Comments</th>
            <th scope="col">Rating</th>
            
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
      </table></div>
</div>
<script>
    var img = "";
    let c = 0
    var imgArray = new Array();
    imgArray[0] = new Image();
    imgArray[0].src = 'images/star.jpg';
    imgArray[1] = new Image();
    imgArray[1].src = 'images/halfstar.jpg';
    function click1() {

        document.getElementById("div1").innerHTML += '<img src="' + imgArray[0].src + '" style=' + '"width:30px;height:30px">'
        c = c + 1
        if (c == 5) {
            document.getElementById('btn1').disabled = true;
        }
    }

    function click2() {
        document.getElementById("div1").innerHTML += '<img src="' + imgArray[1].src + '" style=' + '"width:30px;height:30px">'
        c = c + 1

    }
</script>

@endsection