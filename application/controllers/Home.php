<?php
   class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role_id')!='2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda Belum login !</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');

          redirect('auth/login');
        }
    }
        
        public function tambah_keranjang($id){
                $produk=$this->M_barang->find($id);

                $data = array(
                    'id'      => $produk->id_brg,
                    'qty'     => 1,
                    'price'   => $produk->harga,
                    'name'    => $produk->nama_brg,
                    
            );
            
            $this->cart->insert($data);
            redirect('auth/cart');
        } 
        public function delete_cart($rowid) {
            if ($rowid == "all") {
                    $this->cart->destroy();
            } else {
                $data = [
                    'rowid' => $rowid,
                    'qty' => 0
                ];
    
                $this->session->set_flashdata('success', 'Item telah terhapus');
                $this->cart->update($data);
            }
    
            redirect('auth/cart');
        }
        public function detail_keranjang(){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('keranjang');
            $this->load->view('templates/footer');
        }

        public function hapus_keranjang(){
            $this->cart->destroy();
            redirect('auth/home');
        }
        public function pembayaran(){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pembayaran');
            $this->load->view('templates/footer');
        }
        public function proses_pesanan(){
            $is_processed=$this->M_pembayaran->index();
            if($is_processed){
                $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
            }else{
                echo "Maaf pesanan anda tidak dapat diproses";
            }
            
        }
       

    }
?>