<?php
//membuat model untuk menampilkan data
class User_model{
    private string $nama = 'dais';

    public function getUser(){
        return $this->nama;
    }
}