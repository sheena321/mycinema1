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
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <style>
        body {
            background-image: url("{{ asset('images/log2.jpg') }}");
            background-repeat: no-repeat;
            /* width: 5000px; */
            /* height: 400px; */
            background-size: cover;
        }
    </style>
</head>

<body>
    <div
        style="border: 4px dotted rgb(8, 1, 1); width: 400px;height:400px;margin-left: 200px;margin-top: 200px;background-color:white; border-radius: 40px;">
        <h2 style="margin-top: 10px; color:hwb(126 15% 5% / 0.851)" align="center"><B>Hi..User!</B></h2><br><br>
        <form id="form1">
            <div class="form-group">
                <label for="exampleInputEmail1" style="margin-left:10px"><B>Email Id</B></label>
                <input type="email" name="usereid" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" style="margin:  10px; width: 380px;">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" style="margin-left:10px"><B>Password</B></label>
                <input type="password" name="userpsw" class="form-control" id="exampleInputPassword1"
                    style="margin:  10px; width: 380px;">
            </div>

            <button type="submit" class="btn btn-primary" style="margin-left: 160px;">Login</button>
        </form><br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
            style="margin-left:110px;width:170px;height:30px">New user ?</button>
    </div>

    <!-- ******modal***** -->
    <div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: black;">
                    <h5 class="modal-title" id="exampleModalLabel" align-content:center style=" color:aliceblue">
                        Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <div class=""> -->
                    <div class="container-fluid">
                        <div class="row row-sm-4">
                            <div class="col-6 col-sm-4">
                                <form action="" id="form2" class=" justify-content-center align-items-center container" method="">
                                    <div class="form-group">
                                        <label for="UName" class="label_style">Username</label>
                                        <input type="email" name="username" class="form-control input_style" >
                                        <label for="UName" class="label_style">Password</label>
                                        <input type="password" name="userpsw" class="form-control input_style"
                                            id="UName">
                                        <!-- </div> -->
                                        <!-- <div class="form-group"> -->
                                        <label for="UName" class="label_style">mobile</label>
                                        <input type="text" name="mob" class="form-control input_style" >
                                        <label for="UName" class="label_style">Email Id</label>
                                        <input type="email" name="eid" class="form-control input_style" >
                                        <!-- </div> -->
                                        <!-- <div class="form-group"> -->
                                        <label for="UName" class="label_style">District</label>
                                        <input type="text" name="dist" class="form-control input_style" >
                                        <!-- <label for="UName" class="label_style">District</label>
                                        <input type="password" class="form-control input_style" id="UName"> -->
                                        <label for="UName" class="label_style">State</label>
                                        <input type="text" name="state" class="form-control input_style" ><br>
                                        <!-- <label for="UName" class="label_style">Email Id</label>
                                        <input type="password" class="form-control input_style" id="UName"> -->
                                        <button type="submit" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                    <!-- </div> -->
                </div>
                <!-- <div class="modal-footer">
                   
                </div> -->
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $("#form1").validate({
                rules: {
                    userpsw: {
                        minlength: 8,
                        required: true
                    },
                    usereid: {
                        required: true,
                        email: true,
                    },
                    messages: {
                        psw: "this field required",
                        eid: "this field required",
                    },
                    submitHandler: function (form) {
                        form.submit();
                    }

                }

            })
        })

        $(document).ready(function () {
            $("#form2").validate({
                rules: {
                    username: {
                        email: true,
                        required: true,
                    },
                    userpsw: {
                        required: true,
                        minlength: 8,
                    },
                    mob: {
                        minlength: 10,
                    },
                    eid: {
                        email: true,
                        required: true,
                    },
                    dist: {
                        required: true,
                    },
                    state: {
                        required: true,
                    },
                },
                messages: {
                    // username: "this field is required",
                    mob: "10 digit number",
                },
                submitHandler: function (form) {
                    form.submit();
                },
            })
        })
    </script>



</body>

</html>