    <!-- Main content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <!-- /.card-header -->

            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Produk</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Image</th>
                    <th>link Online Shop</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($data['produk'] as $produk) :
                  ?>
                    <tr>
                      <td>Trident</td>
                      <td>
                        <?= $produk['nama_produk'] ?>
                      </td>
                      <td>
                        <?= $produk['deskripsi'] ?>
                      </td>
                      <td>
                        <?= $produk['harga'] ?>
                      </td>
                      <td>
                        <img src="<?= BASEURL, LOCATION, PORT ?>/img/<?= $produk['gambar'] ?>" alt="" style="width: 50px; height: 50px;">
                      </td>
                      <td>
                        <?= $produk['link'] ?>
                      </td>
                    </tr>
                  <?php
                  endforeach;
                  ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Image</th>
                    <th>link Online Shop</th>
                  </tr>

                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->