<?php
    class Auth extends CI_Controller {
        public function login(){
            $this->form_validation->set_rules('username','Username','required',['required'=>'Username wajib diisi !']);
            $this->form_validation->set_rules('password','Password','required',['required'=>'Password wajib diisi !']);
            if($this->form_validation->run() == FALSE){
                $this->load->view('templates/before/header');
                $this->load->view('login');
                $this->load->view('templates/before/footer');
            }else{
                $auth=$this->M_auth->cek_login();
                if($auth==FALSE){
                    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Username atau Password anda Salah!</strong> 
                  </div>');
                redirect('auth/login');
                }else{
                    $this->session->set_userdata('username',$auth->username);
                    $this->session->set_userdata('role_id',$auth->role_id);

                    switch($auth->role_id){
                        case 1:
                            redirect('admin/dashboard');
                        break;
                        case 2:
                            redirect('auth/home');
                       break;
                        default:
                    break;
                    }
                }
            }
        }

        public function logout() {
            $this->session->sess_destroy();
            redirect('auth/login');
        }
        public function logout_user() {
            $this->session->sess_destroy();
            redirect('welcome');
        }
        public function home(){
            $data['barang']=$this->M_barang->tampil_data()->result();
            $this->load->view('templates/after/header');
            $this->load->view('home',$data);
            $this->load->view('templates/after/footer');
        }
        public function cart(){
            $this->load->view('templates/after/header');
            $this->load->view('cart');
            $this->load->view('templates/after/footer');
        }
        public function hapus_keranjang(){
            $this->cart->destroy();
            $this->session->set_flashdata('success', 'Berhasil menghapus keranjang');
            redirect('auth/home');
        }
        public function pesan(){
            $this->load->view('templates/after/header');
            $this->load->view('pesan');
            $this->load->view('templates/after/footer');
        }
        public function is_processed(){
            $is_processed=$this->M_pembayaran->index();
            if($is_processed){
                $this->cart->destroy();
            $this->load->view('templates/after/header');
            $this->load->view('is_processed');
            $this->load->view('templates/after/footer');
        }else{
            echo "Maaf pesanan anda tidak dapat diproses";
        }
        }

        public function register(){

            
            $this->form_validation->set_rules('nama','Nama','required',['required'=>'Nama wajib diisi !']);
            $this->form_validation->set_rules('username','Username','required',['required'=>'Username wajib diisi !']);
            
            $this->form_validation->set_rules('password_1','Password','required|matches[password_2]',['required'=>'Password wajib diisi !','matches'=>'Password tidak cocok !']);
            $this->form_validation->set_rules('password_2','Password','required|matches[password_1]');
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('templates/before/header');
                $this->load->view('register');
                $this->load->view('templates/before/footer');
            }else{
                $data=array(
                    'id'        =>'',
                    'nama'      =>$this->input->post('nama'),
                    'username'      =>$this->input->post('username'),
                    'password'      =>$this->input->post('password_1'),
                    'role_id'       =>2,
                );
                $this->db->insert('tb_user',$data);
                redirect('auth/login');
            }
            
        }
    }
?>