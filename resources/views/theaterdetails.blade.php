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
  <!-- <button type="button" class="btn btn-primary" style="float: right; margin-right: 40px;">ADD Theater</button> -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
    style="float: right; margin-right: 40px;">
    ADD Theater
  </button>
  <br><br>
  <h1>Theater List</h1>

  <table class="table">
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



</body>

</html>