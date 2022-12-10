<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$data['barang']=$this->M_barang->tampil_data()->result();

		$this->load->view('templates/before/header');
		$this->load->view('welcome',$data);
		$this->load->view('templates/before/footer');
	}
	public function detail_produk($id_brg){
		$data['prod']=$this->M_barang->detail_brg($id_brg);

		$this->load->view('templates/before/header');
		$this->load->view('produk_details',$data);
		$this->load->view('templates/before/footer');
	}

	public function cari(){
		$key = $this->input->post('katakunci');
		$data['barang']=$this->M_barang->get_key($key);

		$this->load->view('templates/before/header');
		$this->load->view('home',$data);
		$this->load->view('templates/before/footer');
	}
	public function adminsementara(){
		$key = $this->input->post('katakunci');
		$data['barang']=$this->M_barang->get_key($key);

		$this->load->view('admin/dashboard');
	}
	public function status()
        {
            $data['pesan']=$this->M_pembayaran->tampil_status()->result();
            $this->load->view('templates/before/header');
            $this->load->view('status',$data);
            $this->load->view('templates/before/footer');
        }
	
}
