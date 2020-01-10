<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tunggakan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelTagihan');
        $this->load->model('modelData');
        $this->load->helper('url');
    }

    public function index()
    {
      if (!is_null($_GET['noPelanggan'])) {
            $customer = $this->modelData->checkExist($_GET['noPelanggan']);
            if ($customer) {
                $data['detail_transaksi'] = $this->modelTagihan->getBelum($customer->idPelanggan)->result();
                $this->load->view('history/tunggakan', $data);
            } else {
                $this->load->view('history/tunggakan.php');
            }
        } else {
            header("Location: " . base_url());
        }
    }
}
