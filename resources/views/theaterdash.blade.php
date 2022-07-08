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

        body {
            background-color: black;
        }

        .admin_image {
            height: 25px;
            width: 25px;
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
        <div class="p-2 bd-highlight"><b> Notification</b></div>
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
    <!-- slidebar -->
    <div class="sidebar" style='width:250px'>
        <a href="#home" style="color:blue;fontsize:7;"><i class="fa fa-fw "></i><img
                src="{{ asset('images/admin.jpg') }}" alt="" class="admin_image"> &nbsp;&nbsp; Theater Admin</a>
        <br>
        <hr style="background-color:grey;border-radius=7px;">
        <a href="#services"><i class="fa fa-fw fa-wrench"></i> Dashboard</a>
        <a href="#services"><i class="fa fa-fw fa-wrench"></i> Add Movies</a>
        <a href="#clients"><i class="fa fa-fw fa-wrench"></i> Update Movies</a>
        <a href="#contact"><i class="fa fa-fw fa-wrench"></i> Add Show</a>
        <a href="#services"><i class="fa fa-fw fa-wrench"></i> Update show</a>
        <a href="#services"><i class="fa fa-fw fa-wrench"></i> Booking</a>
        <a href="#services"><i class="fa fa-fw fa-wrench"></i> Change Password</a>
        <a href="#services"><i class="fa fa-fw fa-wrench"></i> Theater details</a>
    </div>
    <h1 style="color: red; margin-left: 300px;">Running Movies</h1>
    <hr style="border-color: chartreuse;"><br><br>
    <table class="table table-borderless" style="width: 1000px; height:200px; margin-left: 400px;border: 2px solid rgb(37, 196, 196); border-radius: 25px;">
        <thead style="color:blue ;background-color:white">
          <tr>
            <th scope="col">#</th>
            <th scope="col">ShowTime</th>
            <th scope="col">MovieName</th>
            <th scope="col">SCreen</th>
          </tr>
        </thead>
        <tbody style="color:black ;background-color:white">
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    <br>


    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
      </svg> -->
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

        </html>