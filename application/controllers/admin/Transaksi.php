<?php
    class Transaksi extends CI_Controller{
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
        public function index(){
            $data['invoice']=$this->M_pembayaran->tampil_data();
           
            $this->load->view('admin/nav');
            $this->load->view('admin/transaksi',$data);
            $this->load->view('admin/footer');
        }
        public function detail($id_invoice){
            $data['invoi']=$this->M_pembayaran->ambil_id_invoice($id_invoice);
            $data['pesanan']=$this->M_pembayaran->ambil_id_pesanan($id_invoice);

           
            $this->load->view('admin/nav');
            $this->load->view('admin/detail_transaksi',$data);
            $this->load->view('admin/footer');
        }

        public function edit($id){
            $where = array('id'=>$id);
            $data['bayar']=$this->M_pembayaran->edit_barang($where,'tb_pembayaran')->result();
            
            $this->load->view('admin/nav');
            $this->load->view('admin/edit_status',$data);
            $this->load->view('admin/footer');
            
        }
        public function update(){
            $id             =$this->input->post('id');
            $status            =$this->input->post('status');
            
            $data=array(
                'status'          =>$status,
                
            );
            
            $where=array(
                'id' =>$id,
            );
            
            $this->load->model('M_pembayaran');
            $this->M_pembayaran->update_data($where,$data,'tb_pembayaran');
            redirect('admin/transaksi/index');


        }
        
                
        public function cetakpdf(){
            $this->load->library('dompdf_gen');
            $data['invoice']=$this->M_pembayaran->tampil_data('tb_pembayaran')->result();
            $this->load->view('export_transaksi',$data);
            $paper_size='A4';
            $orientation='portrait';
            $html=$this->output->get_output();
            $this->dompdf->set_paper($paper_size,$orientation);
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $this->dompdf->stream('Export_transaksi.pdf',array('Attachment'=>0));
        }
    }
?>