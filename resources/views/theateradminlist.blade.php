@extends("master")
@section("content")
<div class="sidebar" style='width:250px'>
    <a href="{{ asset('http://127.0.0.1:8000/admnprofile') }}" style="color:blue;font-size:7;"><i class="fa fa-fw "></i><img
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
    <h1 style="margin-left: 260px;color: brown;">Theater Owner List</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:1200px; width:100px;border-radius: 20px;">
        ADD
        </button><br><br>
    <table class="table table-striped" style="margin-left: 260px; background-color: azure; width: 1200px;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col"> OwnerName</th>

                <th scope="col">Theate Name</th>
                <th scope="col">Emai Id</th>
                <th scope="col">Mobile</th>
                <th scope="col">REMOVE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Running</td>
                <td><button type="submit" class="btn btn-danger">REMOVE</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Running</td>
                <td><button type="submit" class="btn btn-danger">REMOVE</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>Action</td>
                <td>Coming soon</td>
                <td><button type="submit" class="btn btn-danger">REMOVE</button></td>
            </tr>
        </tbody>
    </table>
    <br>
    
    <!-- <div style="background-color: bisque; width:200px ; margin-left: 500px;border-radius: 30px;"> -->
    <!-- Button trigger modal -->
    <!-- Button trigger modal -->
    
    <hr>
    <!-- <button type="button" class="btn btn-danger" style="margin-left: 0px;">REMOVE</button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="opacity: 1;"  >
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">AddTheaterOwners</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" >
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <label for="">Owner Name</label>
                        </div>
                        <div class="col-6">
                            <input type="text" name="" id="">
                        </div>
            
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="">Theater Name</label>
                        </div>
                        <div class="col-6">
                            <input type="text" name="" id="">
                        </div>
            
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="">EnterMailId</label>
                        </div>
                        <div class="col-6">
                            <input type="text" name="" id="">
                        </div>
            
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="">Mobile</label>
                        </div>
                        <div class="col-6">
                            <input type="text" name="" id="">
                        </div>
            
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    
    
    
    
    
    
    
   
    @endsection