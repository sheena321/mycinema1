@extends("master")
@section("content")


  <div class="sidebar" style='width:250px'>
        <a href="{{ asset('http://127.0.0.1:8000/admnprofile') }}" style="color:blue;fontsize:7;"><i class="fa fa-fw "></i><img
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
    </div>
  <!-- <button type="button" class="btn btn-primary" style="float: right; margin-right: 40px;">ADD Theater</button> -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
    style="float: right; margin-right: 40px;">
    ADD Theater
  </button>
  <br><br>
  <h1 style="margin-left:260px ;color:rgb(242, 88, 88)">Theater List</h1>

  <table class="table table-striped" style="margin-left:260px; background-color: aliceblue;">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Theater Name</th>
        <th scope="col">Address</th>
        <th scope="col">Category</th>
      </tr>
    </thead>
    <tbody>
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
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal"data-target="#exampleModal">ADD Theater</button> -->

  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    >
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD Theater</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="height:350px ;">
          <div class="container">
            <div class="row">
              <div class="col-6"><label for=""><b>Theater Name</b></label></div>

              <div class="col-6"><input type="text" name="" id=""><br></div>

            </div>
            <div class="row">
              <div class="col-6"><label for=""><b>Address</b></label></div>

              <div class="col-6"><textarea name="" id="" cols="30" rows="10"></textarea><br></div>



              <div class="col-6"><label for=""><b>Category</b></label></div>

              <div class="col-6"><input type="text" name="" id=""><br></div>
            </div>

          </div>

        </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      <!-- <div class="modal-footer" style="height:500px ;">
        
      </div> -->
    </div>
  </div>
  </div>
  <hr>

  <label for="" style="padding-left: 1100px;"><b>Enter Theater No</b></label>
  <input type="text" name="" id="">
  <button type="button" class="btn btn-primary" style="float: right; margin-right: 60px;">Remove</button>
  <!-- <button type="button" class="btn btn-primary"
    style="float: right; margin-right: 60px;"> <a href=""></a>&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a></button> -->


    @endsection