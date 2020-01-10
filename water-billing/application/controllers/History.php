<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
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
                $data['detail_transaksi'] = $this->modelTagihan->getHistory($customer->idPelanggan, 'Sudah Bayar')->result();
                if ($data['detail_transaksi']) {
                    $this->load->view('history/history', $data);   
                } else {
                    $this->load->view('history/belum.php');
            }
            } else {
                $this->load->view('history/history.php');
            }
        } else {
            header("Location: " . base_url());
        }
    }

    public function tunggakan()
    {
      if (!is_null($_GET['noPelanggan'])) {
            $customer = $this->modelData->checkExist($_GET['noPelanggan']);
            if ($customer) {
                $data['detail_transaksi'] = $this->modelTagihan->getHistory($customer->idPelanggan, 'Belum Bayar')->result();
                if ($data['detail_transaksi']) {
                    $this->load->view('history/tunggakan', $data);
                }else {
                    $this->load->view('history/lunas.php');
            }
                
            } else {
                $this->load->view('history/lunas.php');
            }
        } else {
            header("Location: " . base_url());
        }
    }
}
