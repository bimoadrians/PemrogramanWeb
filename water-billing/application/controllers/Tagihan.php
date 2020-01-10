<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tagihan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelData');
        $this->load->helper('url');
    }

    public function index()
    {
        if (!is_null($this->input->post('noPelanggan'))) {
            $customer = $this->modelData->checkExist($this->input->post('noPelanggan'));
            if ($customer) {
                $data['pelanggan'] = $this->modelData->showSingleData($this->input->post('noPelanggan'))->result();
                $data['noPelanggan'] = $this->input->post('noPelanggan');
                $data['tarif'] = $this->modelData->getTarif();


                
                $this->load->view('tagihan/cek_tagihan', $data);
            } else {
                $this->load->view('tagihan/error');
            }
        } else {
            header("Location: " . base_url());
        }
    }
}
