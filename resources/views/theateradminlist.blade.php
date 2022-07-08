<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>Theater Owner List</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col"> OwnerName</th>

                <th scope="col">Theate Name</th>
                <th scope="col">Emai Id</th>
                <th scope="col">Mobile</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Running</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Running</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>Action</td>
                <td>Coming soon</td>
            </tr>
        </tbody>
    </table>
    <br>
    <hr>
    <!-- <div style="background-color: bisque; width:200px ; margin-left: 500px;border-radius: 30px;"> -->
    <!-- Button trigger modal -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" style="margin-left: 20px;">
    ADD
    </button>
    <button type="button" class="btn btn-danger">REMOVE</button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">ADD Theater Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                                <label for="">enter EmailId</label>
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
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>