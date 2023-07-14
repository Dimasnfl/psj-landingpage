<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

	function harga()
	{
		$builder = $this->db->select('*');
		$builder = $this->db->from('tipe_produk');
		$builder = $this->db->order_by('id', 'desc');
		$builder = $this->db->where('deleted_at is NULL', NULL);
		$builder = $this->db->where('terbaru', 1);
		$query = $builder->get();
		return $query->result();
	}

	public function total_produk()
	{
		$builder = $this->db->select('*');
		$builder = $this->db->from('produk');
		$builder = $this->db->where('id_status_produk !=', 4);
		$builder = $this->db->where('id_status_produk !=', 5);
		$builder = $this->db->where('id_status_produk !=', 6);
		$builder = $this->db->where('id_status_produk !=', 7);
		$query = $builder->get();
		return $query->num_rows();
	}

	public function total_transaksi()
	{
		$builder = $this->db->select('*');
		$builder = $this->db->from('transaksi');
		$builder = $this->db->where('id_status_transaksi', 4);
		$query = $builder->get();
		return $query->num_rows();
	}

	public function total_petani()
	{
		$builder = $this->db->select('*');
		$builder = $this->db->from('user');
		$builder = $this->db->where('id_kurir', NULL);
		$query = $builder->get();
		return $query->num_rows();
	}

	public function total_mitra()
	{
		$query = $this->db->get('mitra');
		return $query->num_rows();
	}


}
