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
    <h1>About Movies</h1>
<div class="container" style="border: 1px solid black;width: 100%; height: 100%;" >
    <div class="row">
        <div class="col-4"><img src="{{ asset('images/mov4.jpg') }}" alt="" style="height:200px ; width:300px">
    </div>
    <div class="col-7"><p style="color: blue"> <br><p> A tale of two legendary revolutionaries and their journey far away from home. After their journey they return home to start fighting back against British colonialists in the 1920s.
     Directed by	S. S. Rajamouli
Screenplay by	S. S. Rajamouli
Story by	V. Vijayendra Prasad
Dialogue by	
Sai Madhav Burra
Produced by	D. V. V. Danayya
Starring	
N. T. Rama Rao Jr.
Ram Charan
Ajay Devgn
Alia Bhatt
Shriya Saran
Samuthirakani
Ray Stevenson
Alison Doody
Olivia Morris</P>

</div>
    </div>
<hr>
<div class="row">
    <div class="col-4"><img src="{{ asset('images/mov5.jpg') }}" alt="" style="height:200px ; width:300px">
</div>
<div class="col-7"><br><p> A tale of two legendary revolutionaries and their journey far away from home. After their journey they return home to start fighting back against British colonialists in the 1920s.
    Directed by	S. S. Rajamouli
Screenplay by	S. S. Rajamouli
Story by	V. Vijayendra Prasad
Dialogue by	
Sai Madhav Burra
Produced by	D. V. V. Danayya
Starring	
N. T. Rama Rao Jr.
Ram Charan
Ajay Devgn
Alia Bhatt
Shriya Saran
Samuthirakani
Ray Stevenson
Alison Doody
Olivia Morris</P></div>
</div>
</body>
</html>