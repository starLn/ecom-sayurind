<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function all()
	{ 
        $data['barang']=$this->M_barang->tampil_data()->result();
        $this->load->view('templates/after/header');
        $this->load->view('produk',$data);
        $this->load->view('templates/after/footer');
	}
        public function sayuran()
	{ 
        $data['sayuran']=$this->M_kategori->data_sayur()->result();
        $this->load->view('templates/after/header');
        $this->load->view('sayur',$data);
        $this->load->view('templates/after/footer');
	}
        public function buah()
	{ 
        $data['buah']=$this->M_kategori->data_buah()->result();
        $this->load->view('templates/after/header');
        $this->load->view('buah',$data);
        $this->load->view('templates/after/footer');
	}
        public function lainnya()
	{ 
        $data['lainnya']=$this->M_kategori->data_lainnya()->result();
        $this->load->view('templates/after/header');
        $this->load->view('lainnya',$data);
        $this->load->view('templates/after/footer');
	}
}
