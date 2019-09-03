<?php
class M_dashboard extends CI_Model{
    function __construct(){
        parent::__construct();
        //load our second db and put in $db2
//        $this->db2 = $this->load->database('secondary', TRUE);
    }
    function show_data(){
        return $this->db->get('users');
    }

//    function show_data_db2(){
//        return $this->db2->get('users');
//    }
}
