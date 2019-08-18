<?php
class M_wisuda extends CI_Model{
    function show_data(){
        return $this->db->get('users');
    }
}
