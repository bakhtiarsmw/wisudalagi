<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisuda extends MX_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * http://example.com/index.php/welcome
     *    - or -
     * http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_wisuda');
        $this->load->helper('url');
        $this->load->library('template');
    }


    public function index()
    {
        $data['users'] = $this->m_wisuda->show_data()->result();
        $this->template->set_layout('v_frontend');
        $this->template->set_partial('header', 'partials/v_header');
        $this->template->build('index', $data);
    }


}
