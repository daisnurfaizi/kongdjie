<!-- <!doctype html> -->
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <!-- <LInk rel="stylesheet" href="<?= BASEURL, PORT, LOCATION ?>/css/bootstrap.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
  <LInk rel="stylesheet" href="<?= BASEURL, PORT, LOCATION ?>/css/style2.css">
  <link rel="icon" type="image/png" href="<?= BASEURL, PORT, LOCATION ?>/img/logo.png">

  <!-- ini dari bulut -->
  <style>
    #more {
      display: none;
    }
  </style>
  <script scr="<?= BASEURL, PORT, LOCATION ?>/js/jquery-3.6.0.min.js">
  </script>

  <title>Kong Djie Coffe!</title>
</head>

<body>
  <!-- navbar -->
  <div class="logatas">
    <img src="<?= BASEURL, PORT, LOCATION ?>/img/logo.png">
    <p>CV. KONDJIE HAMPARAN RASA</p>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
          <a class="nav-link" href="#home">home</a>
          <a class="nav-link" href="#profile">profile</a>
          <a class="nav-link" href="#product">product</a>
          <a class="nav-link" href="#All">franchise</a>
          <a class="nav-link" href="#about1">about</a>
          <a class="nav-link" href="#location">location</a>
          <a class="nav-link" href="#contact">Contact</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->


  <!-- Jumbotron Header  -->
  <section class="home" id="home">
    <div class="jumbotron jumbotron-fluid">
      <h3 class="display-4 mt-5 text-center">Info lokasi mitra kongdjie coffee</h3>
      <div class="table-responsive">
        <div class="container">
          <table id="example" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Toko</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($data['Franchise'] as $franchise) :
              ?>
                <tr>
                  <th><?= $no++ ?></th>
                  <th><?= $franchise['namafranchise'] ?></th>
                  <th>
                    <textarea disabled name='' id='' cols='100' rows='4'>  <?= $franchise['alamat'] . " Desa/Kelurahan " . $franchise['desa'] . ", Kecamatan " . $franchise['kecamatan'] . ", " . $franchise['kabupaten'] . ", Provinsi " . $franchise['provinsi'] ?></textarea>
                  </th>
                </tr>
              <?php
              endforeach;
              ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Nama Toko</th>
                <th>Alamat</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Header -->

  <!-- Profile  -->

  <!-- Akhir Profile -->

  <!-- Product -->



  <!-- Akhir Product -->

  <!-- Franchise -->

  <!-- Akhir Franchise -->

  <!-- ABOUT -->

  <!-- Akhir Produk -->

  <!-- Location -->

  <!-- Akhit Location -->

  <!-- Contact  -->

  <!--Akhir Contact  -->




  <!-- Optional JavaScript; choose one of the two! -->
  <script scr="<?= BASEURL, PORT, LOCATION ?>/js/KongDjie1.js">
  </script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- <script src="<?= BASEURL, PORT, LOCATION ?>/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->
  <!-- <script> -->
  <script scr="<?= BASEURL, PORT, LOCATION ?>/js/KongDjie1.js">
  </script>


  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>