<?php
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Popup Boostrap 4</title>
    <LInk rel="stylesheet" href="<?= BASEURL, PORT, LOCATION; ?>/css/style2.css">
    <link rel="icon" type="image/png" href="<?= BASEURL, PORT, LOCATION; ?>/img/logo.png">
    <link rel="stylesheet" href="<?= BASEURL, PORT, LOCATION; ?>/css/produk1.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body style="background: #3D2120;">
    <?php
    $perpage = 10;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    if ($page > 1) {
        $start = ($page * $perpage) - $perpage;
    } else {
        $start = 0;
    }
    ?>
    <div class="logatas">
        <img src="<?= BASEURL, PORT, LOCATION; ?>/img/logo.png">
        <p>Product</p>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link" href="#home">home</a>
                    <a class="nav-link" href="#profile">profile</a>
                    <a class="nav-link" href="#product">product</a>
                    <a class="nav-link" href="#franchise">franchise</a>
                    <a class="nav-link" href="#about">about</a>
                    <a class="nav-link" href="#location">location</a>
                    <a class="nav-link" href="#content">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <?php
    // var_dump($data);
    ?>
    <!-- <div class="card-columns"> -->

    <!-- 
        <div class="container">
          <div class="row">    
          <div class="col-md-3"> 
            <div class="thumbnail">
              <img  src = "img/KongDjie_Toraja.png" alt="" class="img-fluid">
              <div class="card-title">
                <h4>title 1</h4>
              </div>
              <div class="card-text">this is some sample text.this is some sampel text.this is some sampel text</text>
              <a style="margin-top": 10px href="#" class="btn btn-success">click here</a>
            </div>
          </div>
        </div>  
      </div> -->

    //pagination
    //konfigurasi
    $JumlahDataPerhalaman = 6;
    $JumlahData = ceil(query ("SELECT * FROM produk"));
    $JumlahHalaman = $JumlahData / $JumlahDataPerhalaman;
    $halamanAktif = (isset($_GET["halaman"]) ? $_GET ["halaman"] : 1;
    $awalData = ( $JumlahDataPerhalaman * $halamanAktif) - $JumlahDataPerhalaman;


    $produk = query("SELECT * FROM produk LIMIT 0, $JumlahDataPerhalaman")

    <?php
    $readmore = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sit necessitat
  ibus velit eum, tenetur et! Placeat cupiditate quaerat accusamus laboriosam quasi, aliquam architecto, error debitis facere iure rerum nostrum illum!";
    ?>
    <img src="app/file/img/gawean1.png" class="logo">
    <div class="container">
        <div class="row">
            <?php
            $dataproduk = count($data['produk']);
            $halaman = ceil($dataproduk / $perpage);
            // var_dump($dataproduk);
            foreach ($data['produk'] as $produk) {
            ?>


                <!-- <div class="row"> -->
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-bg">
                                <img src="<?= BASEURL, PORT, LOCATION; ?>/img/<?= $produk['gambar'] ?>" class="card-img-top">
                                <h5 class="card-title"><?= $produk['nama_produk'] ?></h5>
                                <h6 class="card-deskripsi">
                                    <?= substr($produk['deskripsi'], 0, 50) ?>
                                </h6>
                                <p class="card-text">Rp <?= $produk['harga'] ?></p>
                                <p class="card-text">Order Here</p>
                                <div class="col-sd">
                                    <div class="box">
                                        <a href="https://www.facebook.com/">
                                            <img src="<?= BASEURL, PORT, LOCATION; ?>/img/whatsapp.png" id="wa"> </a>
                                        <a href="">
                                            <img src="<?= BASEURL, PORT, LOCATION; ?>/img/tokopedia.png" id="toko"></a>
                                        <a href="">
                                            <img src="<?= BASEURL, PORT, LOCATION; ?>/img/shopee.png" id="sh"> </a>
                                        <a href="">
                                            <img src="<?= BASEURL, PORT, LOCATION; ?>/img/bukalapak.png" id="bl"> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    //navigasi

    </li>
    </ul>
    </nav>


    <div class="col-md-3">
        <div class="thumbnail">
            <div class="card-body">
                <div class="card-bg">
                    <img src="img/KongDjie_Toraja.png" style="width:170px" class="card-img-top">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>




    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>