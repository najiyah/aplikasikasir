<?php
Class Category extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function get(){
        $sql = 'select * from categories order by name asc';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return $que->result();
    }
}