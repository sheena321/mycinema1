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
        body{
            background-image: url("{{ asset('images/log2.jpg') }}");
            background-repeat: no-repeat;
            /* width: 5000px; */
            /* height: 400px; */
            background-size: cover;
        }
    </style>
</head>
<body>
<div style="border: 4px dotted rgb(8, 1, 1); width: 400px;height:400px;margin-left: 200px;margin-top: 200px;background-color:white; border-radius: 40px;">
        <h2 style="margin-top: 10px;" align="center"><B>Hi..Theater Admin!</B></h2><br><br>
        <form>
        <div class="form-group">
          <label for="exampleInputEmail1" style="margin-left:10px"><B>Email Id</B></label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="margin:  10px; width: 380px;">
      
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1"  style="margin-left:10px"><B>Password</B></label>
          <input type="password" class="form-control" id="exampleInputPassword1" style="margin:  10px; width: 380px;">
        </div>
        
        <button type="submit" class="btn btn-primary" style="margin-left: 160px;">Login</button>
      </form>
    </div>
</body>
</html>