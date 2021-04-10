<?php
class Frencise_model
{
    private $table = "franchise";
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function Inputfrencise($data)
    {
        $provinsi = explode("/", $data['provinsi']);
        $kabupaten = explode("/", $data['kabupaten']);
        $kecamatan = explode("/", $data['kecamatan']);
        $desa = explode("/", $data['desa']);
        $query = ("INSERT INTO franchise (nama,namafranchise,provinsi,kabupaten,kecamatan,desa,alamat) VALUES (:nama,:namafranchise,:provinsi,:kabupaten,:kecamatan,:desa,:alamat);");
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('namafranchise', $data['namafranchise']);
        $this->db->bind('provinsi', $provinsi[1]);
        $this->db->bind('kabupaten', $data['hidenkab']);
        $this->db->bind('kecamatan', $kecamatan[1]);
        $this->db->bind('desa', $desa[1]);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->RowCount();
    }

    public function Franchiseall()
    {
        $this->db->query('Select * from ' . $this->table);
        return $this->db->resultSet();
    }

    public function Deletetoko($id)
    {
        $query = "DELETE FROM franchise where id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        //echo var_dump($id);
        $this->db->execute();
        return $this->db->RowCount();
    }

    public function updatetoko($data)
    {
        $query = "UPDATE franchise SET 
        nama =:nama,
        namafranchise =:namafranchise, 
        provinsi =:provinsi, 
        kabupaten =:kabupaten, 
        kecamatan =:kecamatan, 
        desa =:desa, 
        alamat =:alamat 
        WHERE id =:id";
        $provinsi = explode("/", $data['provinsi']);
        $kabupaten = explode("/", $data['kabupaten']);
        $kecamatan = explode("/", $data['kecamatan']);
        $desa = explode("/", $data['desa']);
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('namafranchise', $data['namafranchise']);
        $this->db->bind('provinsi', $provinsi[1]);
        $this->db->bind('kabupaten', $data['hidenkab']);
        $this->db->bind('kecamatan', $kecamatan[1]);
        $this->db->bind('desa', $desa[1]);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->RowCount();
    }

    public function jumlahtoko()
    {
        $query = "SELECT COUNT(id) FROM franchise";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
}
