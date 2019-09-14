<?php

use GuzzleHttp\Client;

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends MX_Controller {

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
        $this->load->model('m_pembayaran');
        $this->load->library('template');
        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->library('datatables');
        $this->load->helper(['url', 'language']);
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
        $this->lang->load('auth');
    }


    public function index()
    {
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }else {

            $data['users'] = $this->m_pembayaran->show_data()->result();
            $this->template->set_layout('v_frontend');
            $this->template->set_partial('header', 'partials/v_header');
            $this->template->set_partial('aside', 'partials/v_aside');
            $this->template->build('index', $data);
        }
    }

    public function get_data_inquiry($trx_id){
        try {
            $client = new GuzzleHttp\Client();
            $response = $client->get('https://payment.unmer.ac.id/api/DevWisuda/inquiry',
                [
                    'auth' => ['rofickachmad', 'latansa876'],
                    'query' => ['type' => 'inquirybilling', 'client_id' => '00238', 'trx_id' => $trx_id, 'access_key' => 'latansa876']
                ])->getBody()->getContents();

            $jsonResource = json_decode($response);

            $response = array(
                'status' =>  $jsonResource->status,
                'message' => $jsonResource->data,
            );
        }catch (\GuzzleHttp\Exception\ClientException $e) {

            $hand = $e->getResponse()->getBody()->getContents();
            $dataJson = json_decode($hand);
            $response = array(
                'status' =>  $dataJson->status,
                'message' => $dataJson->message,
            );

        }

        header("Content-type: application/json; charset=utf-8");
        echo json_encode($response);

    }

    public function get_inquiry($trx_id){
        try {
            $client = new GuzzleHttp\Client();
            $response = $client->get('https://payment.unmer.ac.id/api/DevWisuda/inquiry',
                [
                    'auth' => ['rofickachmad', 'latansa876'],
                    'query' => ['type' => 'inquirybilling', 'client_id' => '00238', 'trx_id' => $trx_id, 'access_key' => 'latansa876']
                ])->getBody()->getContents();

            $jsonResource = json_decode($response);

            $response = array(
                'status' =>  $jsonResource->status,
                'message' => $jsonResource->data,
            );
        }catch (\GuzzleHttp\Exception\ClientException $e) {

            $hand = $e->getResponse()->getBody()->getContents();
            $dataJson = json_decode($hand);
            $response = array(
                'status' =>  $dataJson->status,
                'message' => $dataJson->message,
            );

        }

        $this->load->view('invoice', $response);

    }
    public function get_list_va(){
        $client = new GuzzleHttp\Client();
        $response = $client->get('https://payment.unmer.ac.id/api/DevWisuda',
            [
                'auth' => ['rofickachmad', 'latansa876'],
                'query' => ['access_key' => 'latansa876']
            ])->getBody()->getContents();

        $jsonResource = json_decode($response);

        $get_trx = array();
        foreach($jsonResource->data as $key => $value) {

                $responseInq = $client->get('https://payment.unmer.ac.id/api/DevWisuda/inquiry',
                    [
                        'auth' => ['rofickachmad', 'latansa876'],
                        'query' => ['type' => 'inquirybilling', 'client_id' => '00238', 'trx_id' => $value->trx_id, 'access_key' => 'latansa876']
                    ])->getBody()->getContents();
                $jsonResourceInq = json_decode($responseInq);
                $get_trx[$key]['id'] = $value->id;
                $get_trx[$key]['customer_name'] = $value->customer_name;
                $get_trx[$key]['trx_id'] = $value->trx_id;
                $get_trx[$key]['trx_amount'] = $value->trx_amount;
                $get_trx[$key]['trx_amount'] = $value->trx_amount;
                $get_trx[$key]['datetime_expired'] = $jsonResourceInq->data->datetime_expired;
                $get_trx[$key]['va_status'] = $value->va_status;
        }

        header("Content-type: application/json; charset=utf-8");

        echo json_encode($get_trx);

    }



//    public function get_list_va(){
//        $client = new GuzzleHttp\Client();
//        $response = $client->get('https://payment.unmer.ac.id/api/DevWisuda',
//            [
//                'auth' => ['rofickachmad', 'latansa876'],
//                'query' => ['access_key' => 'latansa876']
//            ])->getBody()->getContents();
//
//        $jsonResource = json_decode($response);
//        header("Content-type: application/json; charset=utf-8");
//
//        echo json_encode($jsonResource->data);
//
//    }
    public function get_trxId($tahun, $periode, $jenis){
        $periode = $tahun.$periode;
        $client = new GuzzleHttp\Client();
        $response = $client->get('https://payment.unmer.ac.id/api/DevWisuda/trxId',
            [
                'auth' => ['rofickachmad', 'latansa876'],
                'query' => ['access_key' => 'latansa876', 'periode' => $periode, 'jenis' => $jenis]
            ])->getBody()->getContents();

        $jsonResource = json_decode($response);
        header("Content-type: application/json; charset=utf-8");

        return json_encode($jsonResource->data);

    }
    public function get_va_byNim(){
        $getNim = trim($this->input->post('nim'));
        $client = new GuzzleHttp\Client();
        $response = $client->get('https://payment.unmer.ac.id/api/DevWisuda/getVA',
            [
                'auth' => ['rofickachmad', 'latansa876'],
                'query' => ['access_key' => 'latansa876', 'nim' => $getNim],
            ])->getBody()->getContents();

        $jsonResource = json_decode($response);
        header("Content-type: application/json; charset=utf-8");

        echo json_encode($jsonResource->data);

    }

    public function post_payment(){
        $this->form_validation->set_rules('nim','NIM','required');
        $this->form_validation->set_rules('customer_name','Customer Name','required');
        $this->form_validation->set_rules('customer_email','Customer Email','required');
        $this->form_validation->set_rules('customer_phone','Customer Phone','required');
        $this->form_validation->set_rules('virtual_account','Virtual Account','required');
        $this->form_validation->set_rules('prodi','Prodi','required');
        $this->form_validation->set_rules('tahun','Tahun','required');
        $this->form_validation->set_rules('periode','Periode','required');
        $this->form_validation->set_rules('jenis','Jenis Pembayaran','required');
        $this->form_validation->set_rules('trx_amount','TRX Amount','required');

        if($this->form_validation->run() != false){

            date_default_timezone_set("Asia/Jakarta");
            $tahun = trim($this->input->post('tahun'));
            $periode = trim($this->input->post('periode'));
            $jenis = trim($this->input->post('jenis'));

            $trx_json = $this->get_trxId($tahun, $periode, $jenis);
            $id = json_decode($trx_json);
            $client = new GuzzleHttp\Client();
            $tagihan = str_replace(".", "", $this->input->post('trx_amount'));


            try {
                $responseSource = $client->request('POST', 'https://payment.unmer.ac.id/api/DevWisuda', [
                    'auth' => ['rofickachmad', 'latansa876'],
                    'form_params' => [
                        'type' => 'createbilling',
                        'client_id' => '00238',
                        'trx_id' => $id[0]->TrxId,
                        'trx_amount' => trim($tagihan) + 2500,
                        'billing_type' => 'c',
                        'customer_name' => trim($this->input->post('customer_name')),
                        'customer_email' => trim($this->input->post('customer_email')),
                        'customer_phone' => trim($this->input->post('customer_phone')),
                        'virtual_account' => trim($this->input->post('virtual_account')),
                        'datetime_expired_iso8601' => date("c", strtotime(date('Y-m-d H:i:s'). ' + 2 days')),
                        'va_status' => 1,
                        'access_key' => 'latansa876',
                    ]
                ]);
                $hand = $responseSource->getBody()->getContents();
                $dataJson = json_decode($hand);
                $response = array(
                    'status' =>  $dataJson->status,
                    'message' => $dataJson->message,
                );
            } catch (\GuzzleHttp\Exception\ClientException $e) {

                $hand = $e->getResponse()->getBody()->getContents();
                $dataJson = json_decode($hand);
                $response = array(
                    'status' =>  $dataJson->status,
                    'message' => $dataJson->message,
                );
            }




        }else{
            $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );
        }

        echo json_encode($response);
        header("Content-type: application/json; charset=utf-8");

    }

    public function put_payment(){
        $this->form_validation->set_rules('trx_id_up','TRX ID','required');
        $this->form_validation->set_rules('id_up','ID','required');
        $this->form_validation->set_rules('customer_name_up','Customer Name','required');
        $this->form_validation->set_rules('customer_email_up','Customer Email','required');
        $this->form_validation->set_rules('customer_phone_up','Customer Phone','required');
        $this->form_validation->set_rules('trx_amount_up','TRX Amount','required');
        $this->form_validation->set_rules('virtual_account_up','Virtual Account','required');

        if($this->form_validation->run() != false){

            date_default_timezone_set("Asia/Jakarta");

            $client = new GuzzleHttp\Client();
            $tagihan = str_replace(".", "", $this->input->post('trx_amount_up'));


            try {
                $responseSource = $client->request('PUT', 'https://payment.unmer.ac.id/api/DevWisuda', [
                    'auth' => ['rofickachmad', 'latansa876'],
                    'form_params' => [
                        'type' => 'updatebilling',
                        'client_id' => '00238',
                        'trx_id' => trim($this->input->post('trx_id_up')),
                        'trx_amount' => trim($tagihan) + 2500,
                        'customer_name' => trim($this->input->post('customer_name_up')),
                        'customer_email' => trim($this->input->post('customer_email_up')),
                        'customer_phone' => trim($this->input->post('customer_phone_up')),
                        'datetime_expired_iso8601' => date("c", strtotime(date('Y-m-d H:i:s'). ' + 2 days')),
                        'access_key' => 'latansa876',
                        'id' => trim($this->input->post('id_up')),
                        'virtual_account' => trim($this->input->post('virtual_account_up')),
                    ]
                ]);
                $hand = $responseSource->getBody()->getContents();
                $dataJson = json_decode($hand);
                $response = array(
                    'status' =>  $dataJson->status,
                    'message' => $dataJson->message,
                );
            } catch (\GuzzleHttp\Exception\ClientException $e) {

                $hand = $e->getResponse()->getBody()->getContents();
                $dataJson = json_decode($hand);
                $response = array(
                    'status' =>  $dataJson->status,
                    'message' => $dataJson->message,
                );
            }




        }else{
            $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );
        }

        echo json_encode($response);
        header("Content-type: application/json; charset=utf-8");

    }


}
