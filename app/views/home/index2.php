
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <LInk rel="stylesheet" href="<?= BASEURL, PORT, LOCATION; ?>/css/style2.css">
    <link rel="icon" type="image/png" href="<?= BASEURL, PORT, LOCATION; ?>/img/logo.png">

    <title>Kong Djie Coffee</title>
  </head>
  <body>
    <!-- navbar -->
    <div class="logatas">
      <img src="<?= BASEURL, PORT, LOCATION; ?>/img/logo.png">
      <p>CV. KONDJIE HAMPARAN RASA</p>    
    </div>
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"  aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
    <!-- akhir navbar -->

    
    <!-- Jumbotron Header  -->
    <section class="header" id="home"> 
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <img src="<?= BASEURL, PORT, LOCATION; ?>/img/logorev.png">
          <p> Ingin Bermitra <br> Klik : </p>
          <a href="" class="btn joinus"> Join Us </a>
          <a href="" class="btn tentang"> About Us </a>
          <div class="medsos">
            <p>kongdjieoffice</p> 
            <img src="<?= BASEURL, PORT, LOCATION; ?>/img/0111-instagram.png" class="instagram">
            <img src="<?= BASEURL, PORT, LOCATION; ?>/img/031-facebook.png" class="facebook">

            <div class="ornamen">
              <img src="<?= BASEURL, PORT, LOCATION; ?>/img/Bijay Coffe Back Atas.png">
            </div>    
            <div class="ornamen1">
              <img src="<?= BASEURL, PORT, LOCATION; ?>/img/Bijay Coffe Back Bawah.png">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Profile  -->
    <section class="isi" id="profile">
      <div class="row about">
        <div class="col">
          <p> Kong Djie Coffee merupakan usaha kopi yang  berdiri sejak 1943 yang berlokasi  di Tanjung  Pandan , Belitung. Saat ini Kong Djie di dukung  lebih 100 outlet cafe dan resto.  Kong Djie  berkomitmen untuk selalu memenuhi kebutuhan dan  kepuasan konsumen,  tidak hanya dengan   menyediakan produk dengan kualitas terbaik,   namun juga memberikan solusi yang tepat bagi  setiap pangsa pasar kami. </p>
          <a href="" class="btn viewdetail" data-toggle="modal" data-target="#mymodal"> View Detail </a>
          <div class="modal" id='mymodal'>
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3>Sejarah KongDjie Coffee</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">Kong Djie Coffee merupakan usaha kopi yang berdiri sejak 1943 yang berlokasi di Tanjung Pandan , Belitung. Kong djie coffee yang di awali berbentuk kedai kopi yang hingga saat ini berubah menjadi cafe dan resto di setiap Kota Besar di Indonesia. Saat ini Kong Djie di dukung lebih 100 outlet cafe dan resto. <br><br>
                Dan pada Tahun 2021 dengan memperluas usaha nya, Kong Djie meramba usahanya di sektor Retail dan Distribusi dengan mendirikan CV.Kong Djie Hamparan Rasa. Kong Djie berkomitmen untuk selalu memenuhi kebutuhan dan kepuasan konsumen, tidak hanya dengan menyediakan produk dengan kualitas terbaik, namun juga memberikan solusi yang tepat bagi setiap pangsa pasar kami. <br><br>
                Dengan pengalaman yang cukup mumpuni Kong Djie telah memiliki kepekaan untuk memberikan Kualitas dan rasa atas setiap kebutuhan konsumen yang terus berkembang. Pengetahuan ini membuat kami mampu untuk memberikan solusi yang tepat bagi mitra kami dalam memenuhi keinginan konsumen yang semakin kompleks. <br><br>
                Seluruh Produk kami terjamin keamanan dan mutunya karena sebelum beredar telah diperiksa dan didaftarkan ke Balai Pengawasan Obat dan Makanan (BPOM).
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <img src="<?= BASEURL, PORT, LOCATION; ?>/img/gawean1.png" alt="viewdetail">
        </div>
      </div>
      <div class="teks">
        <h3> Visi & Misi </h3>
      </div>
      <div class="visimisi">
        <div class="visi">
          <p> MENJADI PERUSAHAAN TERBAIK YANG MAMPU   MEMBERIKAN RASA YANG BERKUALITAS  </p>
        </div>
        <div class="misi">
          <p><a href=""> MANAJEMEN DENGAN INTEGRITAS   TINGGI </a></p>  
          <p><a href=""> MAMPU MEMPEROLEH LABA YANG BAIK   </a></p>  
          <p><a href=""> PENGABDIAN UNTUK RELASI DAN   KONSUMEN </a></p>  
          <p><a href=""> INOVASI TANPA HENTI </a></p>  
          <p><a href=""> STANDAR ETIKA YANG TINGGI </a></p>
        </div>           
      </div>
      <img src="<?= BASEURL, PORT, LOCATION; ?>/img/bijay coffe menu prodile.png" id="ornamen2">
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>