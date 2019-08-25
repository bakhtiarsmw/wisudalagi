<?php
class M_pembayaran extends CI_Model{
    function show_data(){
        return $this->db->get('users');
    }
}
