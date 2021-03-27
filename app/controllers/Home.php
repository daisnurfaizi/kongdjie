<?php
class Home extends Controller
{
    public function index()
    {
        //echo'home/index';
        $data['judul'] = 'home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('home/index2', $data);
    }
    public function Beranda()
    {
        $data['judul'] = 'home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/Beranda', $data);
        $this->view('templates/footer');
    }
}
