!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- 3 link below for the star rating-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        .reel {
            font-size: large;
            background-image: url("{{ asset('images/reel4.jpg') }}");
            width: 100%;
            height: 100px;
            /* margin-left: 0%; */
        }

        .icon_padd {
            width: 70px;
            height: 65px;
            padding-top: 20px;
            float: left;

        }

        h1 {
            /* padding-left: 50px; */
            /* padding-bottom: 1000px; */
            float: left;
            padding-top: 10px;
            font-style: italic;
        }

        body {
            background-color: black;
        }

        .admin_image {
            height: 25px;
            width: 25px;
        }

        /* text_len {
            max-width: 80px;
            padding-top: 10px;


        } */
        /* below class for star rating in css */
        .rating-loading {
            width: 25px;
            height: 25px;
            font-size: 0;
            color: #fff;
            background: url(../img/loading.gif) top left no-repeat;
            border: none
        }

        .rating-container .rating-stars {
            position: relative;
            cursor: pointer;
            vertical-align: middle;
            display: inline-block;
            overflow: hidden;
            white-space: nowrap
        }

        .rating-container .rating-input {
            position: absolute;
            cursor: pointer;
            width: 100%;
            height: 1px;
            bottom: 0;
            left: 0;
            font-size: 1px;
            border: none;
            background: 0 0;
            padding: 0;
            margin: 0
        }

        .rating-disabled .rating-input,
        .rating-disabled .rating-stars {
            cursor: not-allowed
        }

        .rating-container .star {
            display: inline-block;
            margin: 0 3px;
            text-align: center
        }

        .rating-container .empty-stars {
            color: #aaa
        }

        .rating-container .filled-stars {
            position: absolute;
            left: 0;
            top: 0;
            margin: auto;
            color: #fde16d;
            white-space: nowrap;
            overflow: hidden;
            -webkit-text-stroke: 1px #777;
            text-shadow: 1px 1px #999
        }

        .rating-rtl {
            float: right
        }

        .rating-animate .filled-stars {
            transition: width .25s ease;
            -o-transition: width .25s ease;
            -moz-transition: width .25s ease;
            -webkit-transition: width .25s ease
        }

        .rating-rtl .filled-stars {
            left: auto;
            right: 0;
            -moz-transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0);
            -webkit-transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0);
            -o-transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0);
            transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0)
        }

        .rating-rtl.is-star .filled-stars {
            right: .06em
        }

        .rating-rtl.is-heart .empty-stars {
            margin-right: .07em
        }

        .rating-lg {
            font-size: 3.91em
        }

        .rating-md {
            font-size: 3.13em
        }

        .rating-sm {
            font-size: 2.5em
        }

        .rating-xs {
            font-size: 2em
        }

        .rating-xl {
            font-size: 4.89em
        }

        .rating-container .clear-rating {
            color: #aaa;
            cursor: not-allowed;
            display: inline-block;
            vertical-align: middle;
            font-size: 60%;
            padding-right: 5px
        }

        .clear-rating-active {
            cursor: pointer !important
        }

        .clear-rating-active:hover {
            color: #843534
        }

        .rating-container .caption {
            color: #999;
            display: inline-block;
            vertical-align: middle;
            font-size: 60%;
            margin-top: -.6em;
            margin-left: 5px;
            margin-right: 0
        }

        .rating-rtl .caption {
            margin-right: 5px;
            margin-left: 0
        }

        @media print {
            .rating-container .clear-rating {
                display: none
            }
        }
    </style>
</head>


<body>
    <div class="d-flex flex-row bd-highlight align-items-center reel mb-3">
        <div class="p-2 bd-highlight"><span><img src="{{ asset('images/icon1.jpg') }}" alt="" class="icon_padd"></span>
        </div>
        <div class="p-2 bd-highlight">
            <h1 class="font-italic font-weight-bold">My Cinema</h1>
        </div>
        <div class="p-2 flex-fill bd-highlight text_len">
            <form>
                <div class="form-group">

                    <input type="email" class="form-control flex-fill" id="text1" placeholder="search">
                </div>
            </form>
        </div>
        <div class="p-2 bd-highlight"><b> <a href="#" style="color:black;"> Notification</a></b></div>
        <div class="p-2 bd-highlight">
            <form class="form-inline">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><b> Location</b></label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>kozhikode</option>
                    <option value="1">KZD</option>
                    <option value="2">TVM</option>
                    <option value="3">KOCHI</option>
                </select>
            </form>
        </div>
    </div>
    <!-- ******slidbar**** -->
    <div class="sidebar" style='width:250px'>
        <a href="#home" style="color:blue;fontsize:7;"><i class="fa fa-fw "></i><img
                src="{{ asset('images/admin.jpg') }}" alt="" class="admin_image"> &nbsp;&nbsp;Admin</a>
        <br>
        <hr style="background-color:grey;border-radius=7px;">
        <a href="#services"><i class="fa fa-fw fa-wrench"></i> Dashboard</a>
        <a href="{{ asset('http://127.0.0.1:8000/theaterdetails') }}"><i class="fa fa-fw fa-wrench"></i> Theaters</a>
        <a href="{{ asset('http://127.0.0.1:8000/moviedetails') }}"><i class="fa fa-fw fa-wrench"></i> Movies</a>
        <!-- <a href="{{ asset('') }}">"><i class="fa fa-fw fa-wrench"></i> Show Time</a> -->
        <a href="{{ asset('http://127.0.0.1:8000/theateradminlist') }}"><i class="fa fa-fw fa-wrench"></i> Theater admin list</a>
        <a href="{{ asset('http://127.0.0.1:8000/bookingdetails') }}"><i class="fa fa-fw fa-wrench"></i> Booking</a>
        <a href="{{ asset('http://127.0.0.1:8000/adminchgpsw') }}"><i class="fa fa-fw fa-wrench"></i> Change Password</a>
        <a href="{{ asset('http://127.0.0.1:8000/ad_moviediscription') }}"><i class="fa fa-fw fa-wrench"></i> About Movie</a>
    </div>
    <div
        style="display:inline ; margin-left: 200px; margin-top:1000px; padding: 0px 10px; height: 1000px;width: 150%;">
        <!-- ground-color: blueviolet;"></div>
    <div style="display:inline-<div style="display:inline-block ; background-color: red;"></div>
    <div style="display:inline-block ;background-color: blue;"></div>
    <div style="display:inline-block ; backblock ; background-color:#fde16d;"></div>
     -->
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="card text-white bg-primary mb-3" style="min-width: 200px; display: inline-block;">
            <div class="card-header">Users</div>
            <div class="card-body">
                <!-- <h5 class="card-title">Primary card title</h5> -->
                <p class="card-text">56</p>
            </div>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="card text-white bg-success mb-3" style="min-width: 200px; display: inline-block;">
            <div class="card-header">Theaters</div>
            <div class="card-body">
                <!-- <h5 class="card-title">Primary card title</h5> -->
                <p class="card-text">5</p>
            </div>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="card text-white bg-danger mb-3" style="min-width: 200px; display: inline-block;">
            <div class="card-header">Movies</div>
            <div class="card-body">
                <!-- <h5 class="card-title">Primary card title</h5> -->
                <p class="card-text">6.</p>
            </div>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="card text-white bg-warning mb-3" style="min-width: 200px; display: inline-block;">
            <div class="card-header"><B>Booking</B></div>
            <div class="card-body">
                <!-- <h5 class="card-title">Primary card title</h5> -->
                <p class="card-text">5</p>
            </div>
        </div>
    </div>
</body>
<style>
    .sidebar {
        height: 100%;
        width: 200px;
        position: fixed;
        z-index: 1;
        top: 120px;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 16px;
    }

    .sidebar a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
    }

    .sidebar a:hover {
        color: #f1f1f1;
    }

    .main {
        margin-left: 160px;
        /* Same as the width of the sidenav */
        padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
        .sidebar {
            padding-top: 30px;
        }

        .sidebar a {
            font-size: 18px;
        }
    }
</style>

</html>