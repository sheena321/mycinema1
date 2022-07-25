@extends("master")
@section("content")
<div class="sidebar" style='width:250px'>
    <a href="{{ asset('http://127.0.0.1:8000/thad_profile') }}" style="color:blue;font-size:7;"><i
            class="fa fa-fw "></i><img src="{{ asset('images/admin.jpg') }}" alt="" class="admin_image"> &nbsp;&nbsp;
        Theater Admin</a>
    <br>
    <hr style="background-color:grey;border-radius=7px;">
    <a href="{{ asset('http://127.0.0.1:8000/theaterdash') }}"><i class="fa fa-fw fa-wrench"></i> Home</a>
    <a href="{{ asset('http://127.0.0.1:8000/th_addmovie') }}"><i class="fa fa-fw fa-wrench"></i> Add Movies</a>
    <a href="{{ asset('http://127.0.0.1:8000/th_updatemovie') }}"><i class="fa fa-fw fa-wrench"></i> Update Movies</a>
    <a href="{{ asset('http://127.0.0.1:8000/th_addshow') }}"><i class="fa fa-fw fa-wrench"></i> Add Show</a>
    <a href="{{ asset('http://127.0.0.1:8000/editshow') }}"><i class="fa fa-fw fa-wrench"></i> Update show</a>
    <a href="{{ asset('http://127.0.0.1:8000/th_booking') }}"><i class="fa fa-fw fa-wrench"></i> Booking</a>
    <a href="{{ asset('http://127.0.0.1:8000/th_chgpsw') }}"><i class="fa fa-fw fa-wrench"></i> Change Password</a>
    <a href="{{ asset('http://127.0.0.1:8000/thad_theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i> Theater
        details</a>
</div>
<div class="container" style="margin-left:260px; background-color: beige;">
    <br>
    <form action="">
        <div class="row">
            <div class="col-2"><img src="{{ asset('images/profile.jpg') }}" alt="" class="icon_padd"
                    style="width: 100%; height: 100%; border:1px solid black;padding: 2px;"></div>
            <div class="col-10" style="padding-left: 200px; padding-top: 50px;">
                <h1>TheaterAdmin Profile</h1>
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
        <div class="row">
            <div class="col-2"></div>
            <div class="col-4">
                <label for="">Theater Name</label>
            </div>
            <div class="col-6">
                <input type="text" name="thad_name" id="">
            </div>
        </div><br>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-4">
                <label for="">Thewater Address</label>
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
                <button type="submit" class="btn btn-primary" style="border-radius: 20px; width:100px;">Edit</button>
            </div>
        </div>
    </form>
    <br><br>
</div>

</div>
@endsection