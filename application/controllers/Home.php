<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{	 

	function index()
	{
		$this->load->model('M_home');

		$data['jml_petani'] 	= $this->M_home->total_petani();	
		$data['jml_produk'] 	= $this->M_home->total_produk();	
		$data['jml_transaksi'] 	= $this->M_home->total_transaksi();	
		$data['jml_mitra'] 	    = $this->M_home->total_mitra();		
		$data['daftar_harga']	= $this->M_home->harga();			

		$this->load->view('welcome_message',$data);
	}


}
