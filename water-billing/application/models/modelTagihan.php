<?php
class modelTagihan extends CI_Model
{
    function getId($noPelanggan)
    {
        $this->db->select('idPelanggan');
        $this->db->from('pelanggan');
        $this->db->where('noPelanggan', $noPelanggan);
        return $this->db->get();
    }

    function getHistory($idPelanggan, $bayar = null){
        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->where('id_plnggn', $idPelanggan);
        if ($bayar) {
            $this->db->where('status_bayar', $bayar);
        }
        return $this->db->get();
    }

    function getBelum($idPelanggan){
        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->where('id_plnggn', $idPelanggan);
        return $this->db->get();
    }
}
