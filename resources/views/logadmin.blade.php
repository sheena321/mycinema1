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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script> -->
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
    style="border: 3px dotted rgb(8, 1, 1); width: 400px;height:400px;margin-left: 200px;margin-top: 200px;background-color:white; border-radius: 30px;">
    <h2 style="margin-top: 10px;" align="center"><B>Hi..Admin!</B></h2><br><br>
    <form id="form" method="get" action="">
      <div class="form-group">
        <label for="exampleInputEmail1" style="margin-left:10px"><B>Email Id</B></label>
        <input type="email" name="eid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          style="margin:  10px; width: 380px;">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" style="margin-left:10px"><B>Password</B></label>
        <input type="password" name="psw" class="form-control" id="exampleInputPassword1"
          style="margin:  10px; width: 380px;">
      </div>

      <button type="submit" class="btn btn-primary" style="margin-left: 160px;">Login</button>
    </form>
  </div>
  <script>
    $(document).ready(function () {
      $("#form").validate({
        rules: {
          psw: {
            minlength:8,
            required:true
          },
          eid: {
            required: true,
            email: true,
          },
          messages:{
            psw: "this field required",
            eid: "this field required",
          },
        submitHandler: function(form) {
      form.submit();
    }
          
        }
        
      })
    })
    

  </script>

</body>

</html>