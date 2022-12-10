<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailProduk extends CI_Controller {
	public function produk($id_brg)
	{ 
        $data['prod']=$this->M_barang->detail_brg($id_brg);
        $this->load->view('templates/before/header');
        $this->load->view('produk_details',$data);
        $this->load->view('templates/before/footer');
	}
        public function products($id_brg)
	{ 
        $data['prod']=$this->M_barang->detail_brg($id_brg);
        $this->load->view('templates/after/header');
        $this->load->view('produk_details',$data);
        $this->load->view('templates/after/footer');
	}
}
