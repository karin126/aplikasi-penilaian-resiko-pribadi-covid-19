<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fontawesome-free-5.12.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/hasil.css">
    <link rel="icon" href="20220299.141015140632.png">
    <style>

        body{
            background-image:url('Medical Light Blue Poster Background.jpg');
        }
    #status{
        text-align:center;
        margin-left:90px;
    }
    </style>
    <title>Hasil</title>
  </head>
  <body>
    <div class="container " style="margin-top: 60px;">
            <div class="container">
                <div class="card " style="width: 30rem; margin-left:300px; margin-top:100px; border-radius:15px;">
                    <img src="OQ6UTW0.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-info">
                       <p style="text-align:center;"><b>HASIL TES</b></p>
                      @if($form->ya<8)
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label id="status" style="text-align:center;">RESIKO TERTULAR = </label>
                                    <label style="border-radius:5px;background-color:#43a047;width:80px;color:white;">&nbsp;&nbsp; RENDAH</label>
                                </div>
                            </div>
                            @elseif($form->ya>7 & $form->ya<15)
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label id="status" style="text-align:center;">RESIKO TERTULAR = </label>
                                    <label style="border-radius:5px;background-color:#fdd835;width:80px;color:white;">&nbsp;&nbsp; SEDANG</label>
                                </div>
                            </div>
                            @elseif($form->ya>14)
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label id="status" style="text-align:center;">RESIKO TERTULAR = </label>
                                    <label  style="border-radius:5px;background-color:#e53935;width:80px;color:white;">&nbsp;&nbsp; TINGGI</label>
                                </div>
                            </div>
                            @endif
                            <h5 style="text-align:center;">TERIMA KASIH! SEHAT SELALU!</h5>
                            <p style="text-align:center;">#dirumahaja</p>
                    </div>
                  </div>
                  <p style="color:grey;">&copy;2020 All Right Reserved by Karina Amanda Putri </p>
            </div>
                           
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>