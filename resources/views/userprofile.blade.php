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


<div class="container" style="border-radius:20px; border:1px solid black; background-color:rgb(255, 248, 205);margin-left:  260px; margin-top:20px;">
        <form action="">
            <div class="row" style="margin-top: 20px;">
                <br>
                <div class="col-2"><img src="{{ asset('images/profile.jpg') }}" alt="" class="icon_padd"
                        style="width: 100%; height: 100%; border:1px solid black;padding: 2px; "></div>
                <div class="col-10" style="padding-left: 200px; padding-top: 50px;">
                    <h1>My Profile</h1>
                </div>

            </div><br>

            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-4">
                    <label for="">Name</label>
                </div>
                <div class="col-6">
                    <input type="text" name="thad_name" id="">
                </div>
            </div><br>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <label for="">Password</label>
                </div>
                <div class="col-6">
                    <input type="text" name="thad_psw" id="">
                </div>
            </div><br>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <label for="">Email Id</label>
                </div>
                <div class="col-6">
                    <input type="text" name="thad_eid" id="">
                </div>
            </div><br>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <label for="">Mobile</label>
                </div>
                <div class="col-6">
                    <input type="text" name="thad_mob" id="">
                </div>
            </div><br>
            <!-- <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <label for="">Theater Name</label>
                </div>
                <div class="col-6">
                    <input type="text" name="thad_name" id="">
                </div>
            </div><br> -->
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <label for=""> Address</label>
                </div>
                <div class="col-6">
                    <input type="text" name="thad_add" id="">
                </div>
            </div><br>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <label for="">Loction</label>
                </div>
                <div class="col-6">
                    <input type="text" name="thad_loc" id="">
                </div>
            </div><br>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">

                </div>
                <div class="col-6">
                    <!-- <button type="submit btn-primery" style="border-radius: 20px; width:100px;">Edit</button> -->
                    <button type="submit" class="btn btn-primary"
                        style="border-radius: 20px; width:100px;">Update</button>
                </div>
        </form>
        <br><br>
    </div>


@endsection