<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <?php Flasher::flash() ?>
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Upload Produk</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= BASEURL, PORT, LOCATION; ?>/admin/TambahProduk" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Produk</label>
              <input type="text" class="form-control" id="exampleInputEmail" placeholder="Nama Produk" name="nama_produk">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Harga</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Harga" name="harga">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Gambar</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Deskripsi</label>
              <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
              <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" name="deskripsi"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Link</label>
              <textarea name="link" id="link" class="form-control"></textarea>
              <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" name="deskripsi"> -->
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card -->

      <!-- general form elements -->

      <!-- /.card -->

      <!-- Input addon -->

      <!-- /.card -->
      <!-- Horizontal Form -->
      <!-- /.card -->

    </div>
    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-6">
      <!-- Form Element sizes -->
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Franchise</h3>
        </div>
        <div class="card-body">
          <input class="form-control form-control-lg" type="text" placeholder="Nama Franchise">
          <br>
          <div class="form-group" id="form_prov">
            <label>Pilih Provinsi</label>
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
              <option selected="selected">--Pilih Provinsi--</option>
              <?php
              foreach ($data['wilayah'] as $daerah) :
              ?>
                <option value="<?php echo $daerah['kode']; ?>"><?= $daerah['nama'] ?></option>
              <?php
              endforeach;
              ?>


            </select>

          </div>
          <div class="form-group">
            <select id="form_kab"></select>

            <select id="form_kec"></select>

            <select id="form_des"></select>
          </div>
          <input class="form-control" type="text" placeholder="Alamat">
          <br>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Different Width</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-3">
              <input type="text" class="form-control" placeholder=".col-3">
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder=".col-4">
            </div>
            <div class="col-5">
              <input type="text" class="form-control" placeholder=".col-5">
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!-- general form elements disabled -->

      <!-- /.card -->
      <!-- general form elements disabled -->

      <!-- /.card -->
    </div>
    <!--/.col (right) -->
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->

<!-- Page specific script -->
<script>
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