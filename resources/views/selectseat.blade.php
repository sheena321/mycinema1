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
<div class="container" style="margin-left:250px; background-color:grey; height: 550px;"><br><br>
    <div class="row" style="border:1px solid black ;border-radius:20px;width:700px;margin-left: 200px;">
        <div class="col-3"></div>
        <div class="col-6">
            <button style="background-color:blue ;">selected</button>
            <button style="background-color:white ;">Available</button>
            <button style="background-color:rgb(229, 241, 6) ;">occupied</button>
        </div>
        <div class="col-3"></div>
    </div><br><br><br>
    <div class="row" style="margin-left: 20px;">
        <div class="col-5">
            <button style="background-color: white" onclick="change('a1')" id="a1">A1</button>
            <button style="background-color: white" onclick="change('a2')" id="a2">A2</button>
            <button disabled style="background-color: rgb(229, 241, 6)" onclick="change('a3')" id="a3">A3</button>
            <button style="background-color: white" onclick="change('a4')" id="a4">A4</button>
            <button style="background-color: white" onclick="change('a5')" id="a5">A5</button>
            <button style="background-color: rgb(229, 241, 6)" onclick="change('a6')" id="a6">A6</button>
            <button style="background-color: white" onclick="change('a7')" id="a7">A7</button>
            <button style="background-color: white" onclick="change('a8')" id="a8">A8</button>


        </div>
        <div class="col-1">
            &nbsp;
        </div>
        <div class="col-5">
            <button style="background-color: white" onclick="change('a9')" id="a9">A9</button>
            <button style="background-color: white" onclick="change('a10')" id="a10">A10</button>
            <button style="background-color: white" onclick="change('a11')" id="a11">A11</button>
            <button style="background-color: white" onclick="change('a12')" id="a12">A12</button>
            <button style="background-color: white" onclick="change('a13')" id="a13">A13</button>
            <button style="background-color: rgb(229, 241, 6)" onclick="change('a14')" id="a14">A14</button>
            <button style="background-color: rgb(229, 241, 6)" onclick="change('a15')" id="a15">A15</button>
            <button style="background-color: white" onclick="change('a16')" id="a16">A16</button>

        </div>
    </div>
    <div class="row" style="margin-left: 20px;">
        <div class="col-5">
            <button style="background-color: white" onclick="change('b1')" id="a1">A1</button>
            <button style="background-color: white" onclick="change('a2')" id="a2">A2</button>
            <button style="background-color: white" onclick="change('a3')" id="a3">A3</button>
            <button style="background-color: white" onclick="change('a4')" id="a4">A4</button>
            <button style="background-color: white" onclick="change('a5')" id="a5">A5</button>
            <button style="background-color: white" onclick="change('a6')" id="a6">A6</button>
            <button style="background-color: white" onclick="change('a7')" id="a7">A7</button>
            <button style="background-color: white" onclick="change('a8')" id="a8">A8</button>


        </div>
        <div class="col-1">
            &nbsp;
        </div>
        <div class="col-5">
            <button style="background-color: white" onclick="change('a9')" id="a9">A9</button>
            <button style="background-color: white" onclick="change('a10')" id="a10">A10</button>
            <button style="background-color: white" onclick="change('a11')" id="a11">A11</button>
            <button style="background-color: white" onclick="change('a12')" id="a12">A12</button>
            <button style="background-color:rgb(229, 241, 6)" onclick="change('a13')" id="a13">A13</button>
            <button style="background-color: white" onclick="change('a14')" id="a14">A14</button>
            <button style="background-color: white" onclick="change('a15')" id="a15">A15</button>
            <button style="background-color: white" onclick="change('a16')" id="a16">A16</button>

        </div>
    </div>
    <div class="row" style="margin-left: 20px;">
        <div class="col-5">
            <button style="background-color: white" onclick="change('a1')" id="a1">A1</button>
            <button style="background-color: white" onclick="change('a2')" id="a2">A2</button>
            <button style="background-color: white" onclick="change('a3')" id="a3">A3</button>
            <button style="background-color: white" onclick="change('a4')" id="a4">A4</button>
            <button disabled style="background-color: rgb(229, 241, 6)" onclick="change('a5')" id="a5" >A5</button>
            <button style="background-color:rgb(229, 241, 6)" onclick="change('a6')" id="a6">A6</button>
            <button style="background-color:rgb(229, 241, 6)" onclick="change('a7')" id="a7">A7</button>
            <button style="background-color: white" onclick="change('a8')" id="a8">A8</button>


        </div>
        <div class="col-1">
            &nbsp;
        </div>
        <div class="col-5">
            <button style="background-color: white" onclick="change('a9')" id="a9">A9</button>
            <button style="background-color: white" onclick="change('a10')" id="a10">A10</button>
            <button style="background-color: white" onclick="change('a11')" id="a11">A11</button>
            <button style="background-color: white" onclick="change('a12')" id="a12">A12</button>
            <button style="background-color: white" onclick="change('a13')" id="a13">A13</button>
            <button style="background-color: white" onclick="change('a14')" id="a14">A14</button>
            <button style="background-color: white" onclick="change('a15')" id="a15">A15</button>
            <button style="background-color: white" onclick="change('a16')" id="a16">A16</button>

        </div>
    </div>
    <div class="row" style="margin-left: 20px;">
        <div class="col-5">
            <button style="background-color: white" onclick="change('a1')" id="a1">A1</button>
            <button style="background-color: white" onclick="change('a2')" id="a2">A2</button>
            <button style="background-color: white" onclick="change('a3')" id="a3">A3</button>
            <button style="background-color: white" onclick="change('a4')" id="a4">A4</button>
            <button style="background-color: white" onclick="change('a5')" id="a5">A5</button>
            <button style="background-color: white" onclick="change('a6')" id="a6">A6</button>
            <button style="background-color: white" onclick="change('a7')" id="a7">A7</button>
            <button style="background-color: white" onclick="change('a8')" id="a8">A8</button>


        </div>
        <div class="col-1">
            &nbsp;
        </div>
        <div class="col-5">
            <button style="background-color: white" onclick="change('a9')" id="a9">A9</button>
            <button style="background-color: white" onclick="change('a10')" id="a10">A10</button>
            <button style="background-color: white" onclick="change('a11')" id="a11">A11</button>
            <button style="background-color: white" onclick="change('a12')" id="a12">A12</button>
            <button style="background-color: white" onclick="change('a13')" id="a13">A13</button>
            <button style="background-color: white" onclick="change('a14')" id="a14">A14</button>
            <button style="background-color: white" onclick="change('a15')" id="a15">A15</button>
            <button style="background-color: white" onclick="change('a16')" id="a16">A16</button>

        </div>
    </div>
    <div class="row" style="margin-left: 20px;">
        <div class="col-5">
            <button style="background-color: white" onclick="change('a1')" id="a1">A1</button>
            <button style="background-color: white" onclick="change('a2')" id="a2">A2</button>
            <button style="background-color: white" onclick="change('a3')" id="a3">A3</button>
            <button style="background-color: white" onclick="change('a4')" id="a4">A4</button>
            <button style="background-color: white" onclick="change('a5')" id="a5">A5</button>
            <button style="background-color: white" onclick="change('a6')" id="a6">A6</button>
            <button style="background-color: white" onclick="change('a7')" id="a7">A7</button>
            <button style="background-color: white" onclick="change('a8')" id="a8">A8</button>


        </div>
        <div class="col-1">
            &nbsp;
        </div>
        <div class="col-5">
            <button style="background-color: white" onclick="change('a9')" id="a9">A9</button>
            <button style="background-color: white" onclick="change('a10')" id="a10">A10</button>
            <button style="background-color: white" onclick="change('a11')" id="a11">A11</button>
            <button style="background-color: white" onclick="change('a12')" id="a12">A12</button>
            <button style="background-color: white" onclick="change('a13')" id="a13">A13</button>
            <button style="background-color: white" onclick="change('a14')" id="a14">A14</button>
            <button style="background-color: white" onclick="change('a15')" id="a15">A15</button>
            <button style="background-color: white" onclick="change('a16')" id="a16">A16</button>

        </div>
    </div><br><br><br>
    <div class="row">
        <div class="col-12">
            <!-- <hr style="width:200px; border-width: 7px;"> -->
            <label for=""
                style="width:200px ;border-width:7px; background-color: white; text-align: center;margin-left: 350px;">screen</label>
        </div>
    </div><br><br>
    <!-- inner container -->
    <div class="container" style="margin-left: 40px; border:2px solid black; border-radius: 20px;padding: 10px;width: 600px;">
        <form action="">
            <div class="row">
                <div class="col-6">
                    <label for="">Movie Name:</label>
                </div>
                <div class="col-6">
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="">Theater Name:</label>
                </div>
                <div class="col-6">
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="">seats:</label>
                </div>
                <div class="col-6">
                    <label for="" id="l1" style="background-color: white;"></label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="">Total amount:</label>
                </div>
                <div class="col-6">
                    <label for="" id="l2" style="background-color: white;"></label>
                </div>
            </div>
            <div class="row">
                <div class="col"><button type="submit">Payment</button></div>
            </div>
        </form>
    </div>




    <!-- end of main container -->

</div>
<!-- <div class="container" style="margin-left:250px; background-color:rgb(18, 13, 13); height: 550px;">
    <div class="row">
        <div class="col-12">
        <label for="" id="l1" style="background-color: white;"></label>
        </div>
    </div>
</div> -->

<script>

    var count = 0;
    var b = [];
    function change(id1) {
        //     document.getElementById("l1").innerHTML=id1;
        //    var a=document.getElementById("l1").innerHTML;
        var a = id1;
        b[count] = a;
        document.getElementById(a).style.backgroundColor = '#0000FF';
        count = count + 1;
        document.getElementById("l1").innerHTML += " " + a
        document.getElementById("l2").innerHTML =count*150;
    }
</script>

@endsection