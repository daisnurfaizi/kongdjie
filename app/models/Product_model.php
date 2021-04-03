<?php
//membuat model untuk menampilkan data
class Product_model
{
    // memnuat objek nama table
    private $table = 'product';
    //membuat penampung data
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getprodukall()
    {
        $this->db->query('Select * from ' . $this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id)
    {
        $hash = base64_decode($id);
        $this->db->query('Select * from ' . $this->table . ' where id=:id ');
        $this->db->bind('id', $hash);
        return $this->db->single();
    }
    // select wilayah
    public function getWilayah()
    {
        $this->db->query('SELECT kode,nama FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=2 ORDER BY nama');
        return $this->db->resultSet();
    }
    public function getLogin($data)
    {
        var_dump($data);
    }
    // upload
    function upload($gambar)
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
    public function Inputproduk($data)
    {
        $datagambar = $this->upload($data['gambar']);
        $query = ("INSERT into product (nama_produk,deskripsi,harga,gambar,link) values (:nama_produk,:deskripsi,:harga,:gambar,:link)");
        $this->db->query($query);
        $this->db->bind('nama_produk', $data['nama_produk']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('gambar', $datagambar);
        $this->db->bind('link', $data['link']);
        $this->db->execute();
        return $this->db->RowCount();
    }
    public function DeleteMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa where id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        //echo var_dump($id);
        $this->db->execute();
        return $this->db->RowCount();
    }
    public function ubahMahasiswa($data)
    {
        //UPDATE `mahasiswa` SET `npm` = '21231232' WHERE `mahasiswa`.`id` = 1; 
        $query = "UPDATE mahasiswa SET
            nama = :nama,
            npm=:npm,
            email=:email
            WHERE id =:id ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->RowCount();
    }
}
