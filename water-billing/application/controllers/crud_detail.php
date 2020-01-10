<?php 
 
class Crud_detail extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('modelDetail');
        $this->load->helper('url');
	}
 
	function index(){
		$data['detail_transaksi'] = $this->modelDetail->tampil_data()->result();
		$this->load->view('v_detail',$data);
	}

	function tambah(){
		$this->load->view('detail_input');
	}

	function update(){
		$this->load->view('detail_update');
	}

	function tambah_aksi(){
		$id_detail = $this->input->post('id_detail');
		$id_mst = $this->input->post('id_mst');
		$id_plnggn = $this->input->post('id_plnggn');
		$jml_bulan_lalu = $this->input->post('jml_bulan_lalu');
		$jml_bulan_ini = $this->input->post('jml_bulan_ini');
		$harga_satuan = $this->input->post('harga_satuan');
		$tgl_bayar = $this->input->post('tgl_bayar');
		$status_bayar = $this->input->post('status_bayar');
		$jml_bayar = $this->input->post('jml_bayar');
 
		$data = array(
			'id_detail' => $id_detail,
			'id_mst' => $id_mst,
			'id_plnggn' => $id_plnggn,
			'jml_bulan_lalu' => $jml_bulan_lalu,
			'jml_bulan_ini' => $jml_bulan_ini,
			'harga_satuan' => $harga_satuan,
			'tgl_bayar' => $tgl_bayar,
			'status_bayar' => $status_bayar,
			'jml_bayar' => $jml_bayar
			);
		$this->modelDetail->input_data($data,'detail_transaksi');
		redirect('crud_detail');
	}

	function update_data(){
		$id_detail = $this->input->post('id_detail');
		$id_mst = $this->input->post('id_mst');
		$id_plnggn = $this->input->post('id_plnggn');
		$jml_bulan_lalu = $this->input->post('jml_bulan_lalu');
		$jml_bulan_ini = $this->input->post('jml_bulan_ini');
		$harga_satuan = $this->input->post('harga_satuan');
		$tgl_bayar = $this->input->post('tgl_bayar');
		$status_bayar = $this->input->post('status_bayar');
		$jml_bayar = $this->input->post('jml_bayar');

	$data = array(
			'id_detail' => $id_detail,
			'id_mst' => $id_mst,
			'id_plnggn' => $id_plnggn,
			'jml_bulan_lalu' => $jml_bulan_lalu,
			'jml_bulan_ini' => $jml_bulan_ini,
			'harga_satuan' => $harga_satuan,
			'tgl_bayar' => $tgl_bayar,
			'status_bayar' => $status_bayar,
			'jml_bayar' => $jml_bayar
			);

	$where = array(
		'id_detail' => $id_detail
	);

	$this->modelDetail->update_data($where,$data,'detail_transaksi');
	redirect('crud_detail');
	}

	function hapus($id_detail){
		$where = array('id_detail' => $id_detail);
		$this->modelDetail->hapus_data($where,'detail_transaksi');
		redirect('crud_detail');
	}

	function edit($id_detail){
	$where = array('id_detail' => $id_detail);
	$data['detail_transaksi'] = $this->modelDetail->edit_data($where,'detail_transaksi')->result();
	$this->load->view('detail_update',$data);
	}
}