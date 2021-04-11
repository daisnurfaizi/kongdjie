<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-6 connectedSortable">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <?php
          // var_dump($data);
          ?>
          <h3><?= $data['jumlahproduk'][0]['COUNT(id)'] ?></h3>

          <p>Total Produk</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="<?= BASEURL, PORT, LOCATION ?>/admin/Datatable" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3><?= $data['jumlahadmin'][0]['COUNT(id)'] ?><sup style="font-size: 20px"></sup></h3>

          <p>Jumlah User Admin</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="<?= BASEURL, PORT, LOCATION ?>/admin/User" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3><?= $data['jumlahtoko'][0]['COUNT(id)'] ?></h3>

          <p>Jumlah Frenchise</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="<?= BASEURL, PORT, LOCATION ?>/admin/Franchise" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->

    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->

      <!-- /.card -->

      <!-- DIRECT CHAT -->

      <!--/.direct-chat -->

      <!-- TO DO List -->

      <!-- /.card -->
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">

      <!-- Map card -->

      <!-- /.card -->

      <!-- solid sales graph -->

      <!-- /.card -->

      <!-- Calendar -->

      <!-- /.card -->
    </section>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
<script>
  var alamat = <?= BASEURL, PORT, LOCATION ?>
  $(document).ready(function() {

    // sembunyikan form kabupaten, kecamatan dan desa
    $("#form_kab").hide();
    $("#form_kec").hide();
    $("#form_des").hide();

    // ambil data kabupaten ketika data memilih provinsi
    $('body').on("change", "#form_prov", function() {
      var id = $(this).val();
      var data = "id=" + id + "&data=kabupaten";
      $.ajax({
        type: 'POST',
        url: "get_daerah.php",
        data: data,
        success: function(hasil) {
          $("#form_kab").html(hasil);
          $("#form_kab").show();
          $("#form_kec").hide();
          $("#form_des").hide();
        }
      });
    });

    // ambil data kecamatan/kota ketika data memilih kabupaten
    $('body').on("change", "#form_kab", function() {
      var id = $(this).val();
      var data = "id=" + id + "&data=kecamatan";
      $.ajax({
        type: 'POST',
        url: "get_daerah.php",
        data: data,
        success: function(hasil) {
          $("#form_kec").html(hasil);
          $("#form_kec").show();
          $("#form_des").hide();
        }
      });
    });

    // ambil data desa ketika data memilih kecamatan/kota
    $('body').on("change", "#form_kec", function() {
      var id = $(this).val();
      var data = "id=" + id + "&data=desa";
      $.ajax({
        type: 'POST',
        url: "get_daerah.php",
        data: data,
        success: function(hasil) {
          $("#form_des").html(hasil);
          $("#form_des").show();
        }
      });
    });


  });
</script>