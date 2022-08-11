@extends("master")
@section("content")
<style>
    #dv1 {
        box-shadow: 10px 10px rgb(91, 119, 128);
    }
</style>
<div class="sidebar" style='width:250px;'>
    <a href="{{ asset('http://127.0.0.1:8000/userprofile
    ') }}" style="color:blue;font-size: 6;"><i class="fa fa-fw "></i><img src="{{ asset('images/admin.jpg') }}" alt=""
            class="admin_image"> &nbsp;&nbsp; User</a>
    <hr style="background-color:grey;border-radius:7px;">
    <a href="{{ asset('http://127.0.0.1:8000/userdash') }}"><i class="fa fa-fw fa-wrench"></i> Home</a>
    <a href="{{ asset('http://127.0.0.1:8000/usermovie') }}"><i class="fa fa-fw fa-wrench"></i> Movies</a>
    <a href="{{ asset('http://127.0.0.1:8000/mybooking') }}"><i class="fa fa-fw fa-wrench"></i> My Booking</a>
    <a href="{{ asset('http://127.0.0.1:8000/ratetheater') }}"><i class="fa fa-fw fa-wrench"></i> Rate Theater</a>
    <a href="{{ asset('http://127.0.0.1:8000/ratemovie') }}"><i class="fa fa-fw fa-wrench"></i> Rate Movie</a>
    <a href="{{ asset('http://127.0.0.1:8000/contactus') }}"><i class="fa fa-fw fa-wrench"></i> ContactUs</a>
    <a href="{{ asset('http://127.0.0.1:8000/useradvts') }}"><i class="fa fa-fw fa-wrench"></i> Advertise with us</a>
    <a href="{{ asset('http://127.0.0.1:8000/userchgpsw') }}"><i class="fa fa-fw fa-wrench"></i> Change Password</a>
    <a href="{{ asset('') }}"><i class="fa fa-fw fa-wrench"></i>SignOut</a>
    <!-- <a href="{{ asset('http://127.0.0.1:8000/thad_theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i> Theater -->
    details</a>
</div>
<br>
<div class="container" style="margin-left:260px; background-color:rgb(251, 229, 141); border-radius :20px; height: 500px;"
    id="dv1"><br>
    <form action="">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <h2>AdvertiseWithUs</h2>
            </div>
            <div class="col-4"></div>
        </div><br>
        <div class="row">

            <br><br>

            <div class="col-4"><b> Advertisement Image</b>

            </div>
            <div class="col-8">
                <!-- <input type="text" name="" id="">&nbsp;&nbsp;<button class="btn btn-secondary"> Browse</button> -->
                <div class="custom-file mb-3" style="width: 300px;">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4"> <b> Discription</b>
            </div>

            <div class="col-6" style="padding-left: 15px; "><textarea name="" id="" cols="30" rows="10"
                    style="width:500px;"></textarea>
            </div>
        </div><br><br>
        <div class=" row">
            <div class="col-4"></div>
            <div class="c0l-4"><button type="button" class="btn btn-success" style="width:150px;">Send</button></div>
            <div class="col-4"></div>
        </div><br>
    </form>
    <marquee width="90%" direction="right" height="300px" style="color: red; font-size: medium;">********--
        Valied period of an advertisement is 2 weeks from the date of upload. --********
    </marquee>
</div>
@endsection