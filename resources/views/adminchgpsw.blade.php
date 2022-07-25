@extends("master")
@section("content")
<style>
    #dv1{
        box-shadow: 10px 10px rgba(102, 179, 241, 0.5);
    }
</style>
<div class="sidebar" style='width:250px'>
    <a href="{{ asset('http://127.0.0.1:8000/admnprofile') }}" style="color:blue;font-size:7;"><i class="fa fa-fw "></i><img
            src="{{ asset('images/admin.jpg') }}" alt="" class="admin_image"> &nbsp;&nbsp;Admin</a>
    <br>
    <hr style="background-color:grey;border-radius:7px;">
    <a href="{{ asset('http://127.0.0.1:8000/admindash') }}"><i class="fa fa-fw fa-wrench"></i> Home</a>
    <a href="{{ asset('http://127.0.0.1:8000/theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i> Theaters</a>
    <a href="{{ asset('http://127.0.0.1:8000/moviedetails') }}"><i class="fa fa-fw fa-wrench"></i> Movies</a>
    <a href="{{ asset('http://127.0.0.1:8000/theateradminlist') }}"><i class="fa fa-fw fa-wrench"></i> Theater admin list</a>
    <a href="{{ asset('http://127.0.0.1:8000/bookingdetails') }}"><i class="fa fa-fw fa-wrench"></i> Booking</a>
    <a href="{{ asset('http://127.0.0.1:8000/adminchgpsw') }}"><i class="fa fa-fw fa-wrench"></i> Change Password</a>
    <a href="{{ asset('http://127.0.0.1:8000/ad_moviediscription') }}"><i class="fa fa-fw fa-wrench"></i> About Movie</a>
    <a href="{{ asset('') }}"><i class="fa fa-fw fa-wrench"></i> SignOut</a>
</div>
    <h1 style="margin-left:260px ;color: brown; text-shadow: 0 0 3px #FF0000;">Change Password</h1>
    <hr><br>
    <div class="container" id="dv1"
        style="border: 2px solid ;border-radius:20px;background-color:lightgray ;height: 300px;width: 600px; margin-left:400px; margin-top: 80px;">
        <br><br><br>
        <form action="">
            <div class="row">
                <div class="col-6">
                    <label for="">Username</label>
                </div>
                <div class="col-6">
                    <input type="text" name="" id="">
                </div>

            </div><br>
            <div class="row">
                <div class="col-6"> <label for=""> Enter Password</label></div>
                <div class="col-6"><input type="password" name="" id=""></div>
            </div><br>
            <div class="row">
                <div class="col-6"><label for="">ReEnter Password</label></div>
                <div class="col-6"><input type="password" name="" id=""></div>
            </div><br>
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary">Save Changes</button>
                    <button type="button" class="btn btn-primary">Cancel</button>
                </div>
            </div>
        </form>
    </div>
    @endsection