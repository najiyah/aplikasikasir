<?php
Class Commodity extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function get(){
        $sql = 'select * from comodities';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return $que->result();
    }
}