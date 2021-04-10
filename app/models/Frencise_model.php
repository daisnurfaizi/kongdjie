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
}
