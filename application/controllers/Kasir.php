<?php
Class Kasir extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->load->model('category');
        $this->load->model('commodity');
        $category = $this->category->get();
        $commodity = $this->commodity->get();
        $data = array(
            'categories'=>$category,
            'comodities'=>$commodity
        );
        $this->load->view('kasir/index',$data);
    }
    function ambildata(){
        $this->load->model('commodity');
        echo json_encode($this->commodity->get());
    }
    function senddata(){
        echo 'Hi My Name is Najiyah';
    }
    function postdata(){
        $params = $this->input->post();
        echo 'Nama anda adalah '. $params['nama'] . '\n';
        echo 'Alamat anda adalah '. $params['alamat'] . '\n';
        echo 'SIapa nama anda ?\n';
    }
}