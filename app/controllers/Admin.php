<?php
class Admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';

        $this->view('Admin/login/index', $data);
    }
    public function adminpage()
    {
        $data['judul'] = 'Admin';
        $data['jumlahproduk'] = $this->model('Product_model')->jumlahproduk();
        $this->view('Admin/header/header');
        $this->view('Admin/index', $data);
        $this->view('Admin/footer/footer');
    }


    public function inputform()
    {

        $data['judul'] = 'Admin';
        $data['wilayah'] = $this->model('Product_model')->getWilayah();

        $this->view('Admin/header/header');
        $this->view('Admin/pages/forms/general', $data);
        $this->view('Admin/footer/footer');
    }
    public function Datatable()
    {
        $data['judul'] = 'Admin';
        $data['produk'] = $this->model('Product_model')->getprodukall();

        $this->view('Admin/header/header');
        $this->view('Admin/pages/tables/data', $data);
        $this->view('Admin/footer/footer');
    }
    public function page()
    {

        //mengisi data 
        //$data['data1'] = $data1;
        //$data['data2'] = $data2;
        //$data['data3'] = $data3;
        $data['judul'] = 'page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }

    public function TambahProduk()
    {
        // var_dump($_POST);
        // var_dump($_FILES);
        // $this->model('Product_model')->InputProduk($_POST, $_FILES);
        if ($this->model('Product_model')->InputProduk($_POST, $_FILES) > 0) {
            Flasher::setFlash('berhasil', ' ditambah ', 'alert-success');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/inputform');
            exit();
        } else {
            Flasher::setFlash('gagal', 'ditambah', 'alert-danger');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/inputform');
            exit();
        }
    }

    function uplad()
    {
        $namafile = $_FILES['gambar']['name'];
        $ukuranfile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];
        // cek apakah ada gambar yg di upload
        if ($error === 4) {
            echo 'pilih gambar dahulu';
            return false;
        }
        $extensifilevalid = ['jpg', 'jpeg', 'png'];
        $extensigambar = explode('.', $namafile);
        $extensigambar = strtolower(end($extensigambar));

        if (!in_array($extensigambar, $extensifilevalid)) {
            $error = 'yang anda upload bukan gambar';
            // $result = json_encode($error, true);
            echo $error;
            // echo $result;
            return false;
        }

        if ($ukuranfile > 3000000) {
            echo "gambar terlalu besar";
            return false;
        }
        //upload data
        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $extensigambar;
        move_uploaded_file($tmpName, BASEURL . PORT . LOCATION, '/img' . $namafilebaru);
        return $namafilebaru;
    }
}
