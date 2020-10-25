<?php
Class Test extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function coba($param1){
        echo $param1;
    }
    function penambahan($angka1,$angka2){
        return $angka1+$angka2;
    }
    function perkalian($angka1,$angka2){
        return $angka1*$angka2;
    }
    function index(){
        $operasi = $this->uri->segment(3);
        $angka1 = $this->uri->segment(4);
        $angka2 = $this->uri->segment(5);
        if($operasi=='perkalian'){
        echo 'Hasil : '. $this->perkalian($angka1,$angka2);
        }else{
            echo 'HZ ; ' . $this->penambahan($angka1,$angka2);
        }
    }
}
?>