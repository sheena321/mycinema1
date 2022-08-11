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
<br><br>

<div class="container"
    style="margin-left:300px; background-color: rgb(212, 210, 210); border-radius: 20px; width:1200px;">
    <br>
    <form action="">
        <div class="row">
            <div class="col-12">
                <h2 style="margin-left: 400px;">Reviews</h2>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-3"> <b>Movie Name</b></div>
            <div class="col-4"><input type="text" name="" id="" placeholder="Movie1"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-3"><label for="">Your Comment</label></div>
            <div class="col-4"><textarea name="" id="" cols="30" rows="10" style="width:500px ;"></textarea></div>
        </div>
        <div class="row">
            <div class="col-3">Rating</div>
            <div class="col-2" id="div1" style="margin-left: 0px;"></div>
            <div class="col-1">
                <h4>/5 Stars</h4>
            </div>
            <div class="col-6">
                <button type="button" id="btn1" onclick="click1()"><img src="{{ asset('images/star.jpg') }}" alt=""
                        style="width:30px;height: 30px;;"></button>
                <!-- <button id="btn2" onclick="click2()"><img src="{{ asset('images/halfstar.jpg') }}" alt="" -->
                        <!-- style="width:30px;height: 30px;;"></button> -->
                <label for="" style="color: red;">(click star button for rating) </label>
                <br><br>
            </div>
        </div>
    </form>
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
        // img.src = document.getElementById("l1").innerHTML;
        // console.log(imgArray[0])
        // // if (img.src == " ") {
        // //     document.getElementById("l1").innerHTML = imgArray[0].src;
        // // }
        // // else {
        //     img.src = document.getElementById("l1").innerHTML;
        //     document.getElementById("l1").innerHTML += img.src;

        // img.src=imgArray[0].src;
        // console.log(img.src)
        document.getElementById("div1").innerHTML += '<img src="' + imgArray[0].src + '" style=' + '"width:30px;height:30px">'
        c = c + 1
        console.log(c)
        if (c == 5) {
            document.getElementById('btn1').disabled = true;
        }
    }

    // function click2() {
    //     document.getElementById("div1").innerHTML += '<img src="' + imgArray[1].src + '" style=' + '"width:30px;height:30px">'
    //     c = c + 1

    // }
</script>


@endsection