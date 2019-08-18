<?php
class M_dashboard extends CI_Model{
    function show_data(){
        return $this->db->get('users');
    }
}
