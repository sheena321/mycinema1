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
            background-color: rgb(253, 218, 206);
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
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-2"><img src="{{ asset('images/profile.jpg') }}" alt="" class="icon_padd"
                        style="width: 100%; height: 100%; border:1px solid black;padding: 2px;"></div>
                <div class="col-10" style="padding-left: 200px; padding-top: 50px;"> <h1>Admin Profile</h1></div>
            
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
            <!--<div class="row">
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
            </div><br> -->
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4"></div>
                <div class="col-6">
                    <!-- <button type="submit btn-primery" style="border-radius: 20px; width:100px;">Edit</button> -->
                    <button type="submit" class="btn btn-primary"
                        style="border-radius: 20px; width:100px;">Edit</button>
                </div>
        </form>
    </div>

    </div>
</body>

</html>