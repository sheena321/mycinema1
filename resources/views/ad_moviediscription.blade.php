@extends("master")
@section("content")
<div class="sidebar" style='width:250px'>
    <a href="{{ asset('http://127.0.0.1:8000/admnprofile') }}" style="color:blue;font-size:7;background-color: rgb(240, 81, 66);"><i class="fa fa-fw "></i><img
            src="{{ asset('images/admin.jpg') }}" alt="" class="admin_image"> &nbsp;&nbsp;Admin</a>
    
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
    <h1 style="margin-left: 260px; color: brown;">About Movies</h1><br><br><br><br>
<div class="container" style="border: 1px solid black;width: 100%; height: 100%;margin-left:260px; background-color: white;" >
    <div class="row">
        <div class="col-4"><img src="{{ asset('images/mov4.jpg') }}" alt="" style="height:200px ; width:300px">
    </div>
    <div class="col-7"><p style="color: blue"> <br><p> A tale of two legendary revolutionaries and their journey far away from home. After their journey they return home to start fighting back against British colonialists in the 1920s.
     Directed by	S. S. Rajamouli
Screenplay by	S. S. Rajamouli
Story by	V. Vijayendra Prasad
Dialogue by	
Sai Madhav Burra
Produced by	D. V. V. Danayya
Starring	
N. T. Rama Rao Jr.
Ram Charan
Ajay Devgn
Alia Bhatt
Shriya Saran
Samuthirakani
Ray Stevenson
Alison Doody
Olivia Morris</P>

</div>
    </div>
<hr>
<div class="row">
    <div class="col-4"><img src="{{ asset('images/mov5.jpg') }}" alt="" style="height:200px ; width:300px">
</div>
<div class="col-7"><br><p> A tale of two legendary revolutionaries and their journey far away from home. After their journey they return home to start fighting back against British colonialists in the 1920s.
    Directed by	S. S. Rajamouli
Screenplay by	S. S. Rajamouli
Story by	V. Vijayendra Prasad
Dialogue by	
Sai Madhav Burra
Produced by	D. V. V. Danayya
Starring	
N. T. Rama Rao Jr.
Ram Charan
Ajay Devgn
Alia Bhatt
Shriya Saran
Samuthirakani
Ray Stevenson
Alison Doody
Olivia Morris</P></div>
</div>
@endsection