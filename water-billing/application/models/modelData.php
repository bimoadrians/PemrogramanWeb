<?php
class ModelData extends CI_Model
{
    function showData()
    {
        return $this->db->get('pelanggan');
    }
    function showSingleData($noPelanggan)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('noPelanggan', $noPelanggan);

        return $this->db->get();
    }
    function checkExist($noPelanggan)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('noPelanggan', $noPelanggan);

        $model = $this->db->get();
        if ($model->num_rows() == 1) {
            return $model->result()[0];
        } else return false;
    }

    function getTarif()
    {
        $query = $this->db->query('SELECT * FROM tarif');
        return $query->result();
    }
}
