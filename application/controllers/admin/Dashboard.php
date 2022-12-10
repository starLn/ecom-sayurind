<?php
    class Dashboard extends CI_Controller {
        public function __construct(){
            parent::__construct();
            if($this->session->userdata('role_id')!='1'){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Anda Belum login !</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');

              redirect('auth/login');
            }
        }
        public function index() {
            
            $a['a']=$this->M_barang->sayur();
            $b['b']=$this->M_barang->buah();
            $c['c']=$this->M_barang->lainnya();
            $this->load->view('admin/dashboard',$a+$b+$c);
        }
     
     
    }

?>