<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="assets/image/20220299.141015140632.png">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="assets/fontawesome-free-5.12.0-web/css/all.min.css">
    <link rel="icon" href="20220299.141015140632.png">
    <style>
      body{
        background:url('download.jpg');
      }
        td{
            padding:30px;
        }
        .jumbotron{
            background:url('download.png');
            background-size:cover;
        }
        .jumbroton b{
          color:white;
          color: white;
        }
    </style>
    <title>Potensi Tertular di Luar Rumah</title>
  </head>
  <body>
        <div class="container fixed-top" style="margin-top:100px">
  <div class="jumbotron">
  <h1 class="display-4" style="text-align:center; font-family:arial; color:white;"><b>SELAMAT DATANG!</b></h1>
  <p class="lead" style="text-align:center; color:honeydew; "><b>PENILAIAN RESIKO PRIBADI TERJANGKIT COVID-19</b></p><hr style="background:white;">
  <hr class="my-4">
  <p style="text-align:center; "><b>BY: KARINA AMANDA PUTRI RPL XI-3</b></p>  
</div>
  <form action="{{ route('form.store') }}" method="POST"enctype="multipart/form-data"> 
    @csrf
    <div class="accordion" id="accordionExample" style="margin-top:-30px; bg-transparent; border-radius:50px;">
        <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <b style="color:black;">POTENSI TERTULAR DI LUAR RUMAH</b>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table-hover" style="margin-left:40px" border="1">
                     <tr  class="table-active">
                        <th>No</th>
                        <th>Kegiatan</th>
                        <th>&nbsp;&nbsp;&nbsp;Ya&nbsp;&nbsp;&nbsp;</th>
                        <th>Tidak</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Saya pergi keluar rumah </td>
                        <td><input class="rb" type="radio" name="v1" value="1"></td>
                        <td><input class="rb" type="radio" name="v1" value="0"></td>
                    </tr>
                    <tr  class=" table-info">
                        <td>2</td>
                        <td>Saya menggunakan transportasi umum: online, angkot, bus, taksi, kereta api </td>
                        <td><input class="rb" type="radio" name="v2" value="1"></td>
                        <td><input class="rb" type="radio" name="v2" value="0"></td>
                    </tr>
                    <tr>
                        <td >3</td>
                        <td>Saya tidak memakai masker pada saat berkumpul dengan orang lain </td>
                        <td><input class="rb" type="radio" name="v3" value="1"></td>
                        <td><input class="rb" type="radio" name="v3" value="0"></td>
                    </tr>
                    <tr class=" table-info">
                        <td >4</td>
                        <td>Saya berjabat tangan dengan orang lain</td>
                        <td><input class="rb" type="radio" name="v4" value="1"></td>
                        <td><input class="rb" type="radio" name="v4" value="0"></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Saya tidak membersihkan tangan dengan handsenitizer/tissue basah sebelum pegang kemudi mobil/motor</td>
                        <td><input class="rb" type="radio" name="v5" value="1"></td>
                        <td><input class="rb" type="radio" name="v5" value="0"></td>
                    </tr>
                    <tr class=" table-info">
                        <td >6</td>
                        <td>Saya menyentuh benda / uang yang juga disentuh orang lain </td>
                        <td><input class="rb" type="radio" name="v6" value="1"></td>
                        <td><input class="rb" type="radio" name="v6" value="0"></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika : belanja, bekerja, belajar, ibadah </td>
                        <td><input class="rb" type="radio" name="v7" value="1"></td>
                        <td><input class="rb" type="radio" name="v7" value="0"></td>
                    </tr>
                    <tr class=" table-info">
                        <td >8</td>
                        <td>Saya makan di luar rumah (warung/restoran)</td>
                        <td><input class="rb" type="radio" name="v8" value="1"></td>
                        <td><input class="rb" type="radio" name="v8" value="0"></td>
                    </tr>
                    <tr>
                        <td> 9</td>
                        <td>Saya tidak minum hangat & cuci tangan dengan sabun setelah tiba di tujuan </td>
                        <td><input class="rb" type="radio" name="v9" value="1"></td>
                        <td><input class="rb" type="radio" name="v9" value="0"></td>
                    </tr>
                    <tr class=" table-info">
                        <td >10</td>
                        <td>Saya berada di wilayah kelurahan tempat pasien tertular</td>
                        <td><input class="rb" type="radio" name="v10" value="1"></td>
                        <td><input class="rb" type="radio" name="v10" value="0"></td>
                    </tr>

        </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <b style="color:black;">POTENSI TERTULAR DI DALAM RUMAH</b>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table table-hover" border="1">
                    <tr class="table-active">
                        <th>No</th>
                        <th>Kegiatan</th>
                        <th>&nbsp;&nbsp;&nbsp;Ya&nbsp;&nbsp;&nbsp;</th>
                        <th>Tidak</th>
                    </tr>
                    <tr >
                        <td>11</td>
                        <td>Saya tidak pasang hands anitizer di depan pintu masuk, untuk membersihkan tangan sebelum memegang handle pintu masuk rumah</td>
                        <td><input class="rb" type="radio" name="v11" value="1"></td>
                        <td><input class="rb" type="radio" name="v11" value="0"></td>
                    </tr>
                    <tr class="table-success">
                        <td>12</td>
                        <td>Saya tidak mencuci tangan dengan sabun setelah tiba di rumah</td>
                        <td><input class="rb" type="radio" name="v12" value="1"></td>
                        <td><input class="rb" type="radio" name="v12" value="0"></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Saya tidak menyediakan : tissue basah/antiseptic, masker, sabun antiseptic bagi keluarga di rumah</td>
                        <td><input class="rb" type="radio" name="v13" value="1"></td>
                        <td><input class="rb" type="radio" name="v13" value="0"></td>
                    </tr>
                    <tr class="table-success">
                        <td>14</td>
                        <td>Saya tidak segera mandi keramas setelah saya tiba di rumah</td>
                        <td><input class="rb" type="radio" name="v14" value="1"></td>
                        <td><input class="rb" type="radio" name="v14" value="0"></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Saya tidak mengisolasi check list penilaian resiko pribadi ini kepada keluarga di rumah</td>
                        <td><input class="rb" type="radio" name="v15" value="1"></td>
                        <td><input class="rb" type="radio" name="v15" value="0"></td>
                    </tr>
                    <tr class="table-success">
                        <td>16</td>
                        <td>Saya menyentuh benda / uang yang juga disentuh orang lain </td>
                        <td><input class="rb" type="radio" name="v16" value="1"></td>
                        <td><input class="rb" type="radio" name="v16" value="0"></td>
                    </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <b style="color:black;">DAYA TAHAN TUBUH </b>
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table table-hover" border="1">
                    <tr class="table-active">
                        <th>No</th>
                        <th>Kegiatan</th>
                        <th>&nbsp;&nbsp;&nbsp;Ya&nbsp;&nbsp;&nbsp;</th>
                        <th>Tidak</th>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Saya dalam sehari tidak terkena cahaya matahari minimal 15 menit </td>
                        <td><input class="rb" type="radio" name="v17" value="1"></td>
                        <td><input class="rb" type="radio" name="v17" value="0"></td>
                    </tr>
                    <tr class="table-primary">
                        <td>18</td>
                        <td>Saya tidak jalan kaki / berolahraga minimal 30 menit setiap hari</td>
                        <td><input class="rb" type="radio" name="v18" value="1"></td>
                        <td><input class="rb" type="radio" name="v18" value="0"></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Saya jarang minum vitamin C & E, dan kurang tidur</td>
                        <td><input class="rb" type="radio" name="v19" value="1"></td>
                        <td><input class="rb" type="radio" name="v19" value="0"></td>
                    </tr>
                    <tr class="table-primary">
                        <td>20</td>
                        <td>Usia saya diatas 60 tahun</td>
                        <td><input class="rb" type="radio" name="v20" value="1"></td>
                        <td><input class="rb" type="radio" name="v20" value="0"></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Saya mempunyai penyakit : jantung/diabetes/gangguan pernafasan kronik</td>
                        <td><input class="rb" type="radio" name="v21" value="1"></td>
                        <td><input class="rb" type="radio" name="v21" value="0"></td>
                    </tr>
                </table>
              </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success" style="margin-top:30px; float:right; margin-right:0px; border-radius:30px ;"> Lihat hasil >></button>
  </form>
  <p style="color:grey;">&copy;2020 All Right Reserved by Karina Amanda Putri </p>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>