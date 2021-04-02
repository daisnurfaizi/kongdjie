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

        $this->view('Admin/header/header');
        $this->view('Admin/index');
        $this->view('Admin/footer/footer');
    }

    public function inputform()
    {

        $data['judul'] = 'Admin';

        $this->view('Admin/header/header');
        $this->view('Admin/pages/forms/general');
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
}
