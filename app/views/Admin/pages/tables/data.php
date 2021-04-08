    <!-- Main content -->
    <div class="container-fluid">
      <div class="col-lg-6">
        <?php Flasher::flash() ?>
      </div>
    </div>
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
                  <!-- <th>Rendering engine</th> -->
                  <th>Nama Produk</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Image</th>
                  <th>link tokopedia</th>
                  <th>link bukalapak</th>
                  <th>link shoppe</th>
                  <!-- <th>link whatsapp</th> -->
                  <th>link aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($data['produk'] as $produk) :
                ?>
                  <tr>
                    <!-- <td>Trident</td> -->
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
                    <td>
                      <?= $produk['link'] ?>
                    </td>
                    <td>
                      <?= $produk['link'] ?>
                    </td>
                    <td>
                      <button id="updatedata" type="button" class="badge badge-primary float-lg-left mr-1" data-toggle="modal" data-target="#exampleModal" data-produk="<?= $produk['nama_produk'] ?>" data-deskripsi="<?= $produk['deskripsi'] ?>" data-harga="<?= $produk['harga'] ?>" data-tokopedia="<?= $produk['link'] ?>" data-bukalapak="<?= $produk['link'] ?>" data-shoppe="<?= $produk['link'] ?>" data-whatever="@mdo">Update Data</button>

                      <a href="<?= BASEURL, PORT, LOCATION; ?>/admin/delete/<?= $produk['id']; ?>" class="badge badge-danger float-lg-left mr-1" onclick="return confirm('yakin')">Delete</a>

                    </td>
                    <!-- <td>
                        <?= $produk['link'] ?>
                      </td> -->
                  </tr>
                <?php
                endforeach;
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <!-- <th>Rendering engine</th> -->
                  <th>Nama Produk</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Image</th>
                  <th>link tokopedia</th>
                  <th>link bukalapak</th>
                  <th>link shoppe</th>
                  <!-- <th>link whatsapp</th> -->
                  <th>link aksi</th>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Produk</label>
                <input itype="text" class="form-control" id="nama_produk" placeholder="Nama Produk" name="nama_produk" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Harga</label>
                <input type="number" required class="form-control" id="harga" placeholder="Harga" name="harga">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Gambar</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" required class="custom-file-input" id="exampleInputFile" name="gambar">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Deskripsi</label>
                <textarea name="deskripsi" required id="deskripsi" class="form-control"></textarea>
                <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" name="deskripsi"> -->
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Link</label>
                <textarea name="link" id="link" class="form-control"></textarea>
                <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" name="deskripsi"> -->
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function() {
        $(document).on('click', '#updatedata', function() {
          var namaproduk = $(this).data('produk')
          var harga = $(this).data('harga')
          var deskripsi = $(this).data('deskripsi')
          var link = $(this).data('link')
          // console.log(namaproduk)
          $('#nama_produk').val(namaproduk)
          $('#harga').val(harga)
          $('#deskripsi').val(deskripsi)
          $('#link').val(link)
        })
      })
    </script>
    <script>
      function confirmasi(ev) {
        //   ev.preventDefault();
        //   var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
        //   console.log(urlToRedirect);
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        })
      }
    </script>