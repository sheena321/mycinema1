<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .bg_image {
      background-image: url("{{ asset('images/log1.jpg') }}");
      background-repeat: no-repeat;
      /* width: 5000px; */
      /* height: 400px; */
      background-size: cover;


    }

    .icon_padd {
      width: 70px;
      height: 40px;
      padding-top: 0px;
      /* float: left; */

    }
  </style>



</head>

<body class="bg_image">
  <div style="background-color:black; height: 100px; width:100% ; opacity: 1;">
    <span>
      <h1 style="color:#f7f719c0 ; padding-left:20px; float:left; padding-top: 50px;"><img
          src="{{ asset('images/icon1.jpg') }}" alt="" class="icon_padd"><b>My Cinema</B></h1>
    </span>
    <div class="btn-group" style="float:right; padding-right: 60px; padding-top: 40px;">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
        id="btn">
        Login
      </button>
      <div class="dropdown-menu" aria-labelledby="btn">
        <a class="dropdown-item" href="{{ asset('http://127.0.0.1:8000/logadmin')}}">Admin</a>
        <a class="dropdown-item" href="{{ asset('http://127.0.0.1:8000/loguser')}}">User</a>
        <a class="dropdown-item" href="{{ asset('http://127.0.0.1:8000/logtheateradmin')}}">Theater owner</a>
        <!-- <div class="dropdown-divider"></div> -->
        <!-- <a class="dropdown-item" href="#">Separated link</a>  -->
        <!-- </div>  -->
      </div>
    </div>


  </div>
  <div style="float:center;padding-top: 50px; opacity:.8; padding-left: 280px;"><img
      src="{{ asset('images/center image.jpg') }}" style="height: 400px; width:900px">
  </div>

</body>

</html>