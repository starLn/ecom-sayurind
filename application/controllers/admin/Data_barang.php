<?php
    class Data_barang extends CI_Controller{
        public function __construct(){
            parent::__construct();
            if($this->session->userdata('role_id')!='1'){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Silakan Login terlebih dahulu!</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');

              redirect('auth/login');
            }
        }
        public function index(){
            $data['barang']=$this->M_barang->tampil_data()->result();
            $this->load->view('admin/nav');
            $this->load->view('admin/barang',$data);
            $this->load->view('admin/footer');
        }
        public function tambah_aksi(){
            $nama_brg       = $this->input->post('nama_brg');
            $keterangan       = $this->input->post('keterangan');
            $kategori       = $this->input->post('kategori');
            $harga       = $this->input->post('harga');
            $stok       = $this->input->post('stok');
            $gbr_brg       = $_FILES['gambar_brg']['name'];

            if($gbr_brg=''){}else{
                $config['upload_path']='./uploads/';
                $config['allowed_types']='jpg|jpeg|png|gif';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('gambar_brg')){
                   $gbr_brg='image.jpg';
                }else{
                    $gbr_brg=$this->upload->data('file_name');
                }

            }
            $data=array(
                'nama_brg'          =>$nama_brg,
                'keterangan'          =>$keterangan,
                'kategori'          =>$kategori,
                'harga'          =>$harga,
                'stok'          =>$stok,
                'gambar'          =>$gbr_brg,
            );
            $this->M_barang->tambah_barang($data,'tb_barang');
           
            redirect('admin/data_barang/index');
        }
        public function edit($id){
            $where = array('id_brg'=>$id);
            $data['barang']=$this->M_barang->edit_barang($where,'tb_barang')->result();

            $this->load->view('admin/nav');
            $this->load->view('admin/edit_barang',$data);
            $this->load->view('admin/footer');
        }

        public function update(){
            $id             =$this->input->post('idbrg');
            $nama_brg             =$this->input->post('nama_brg');
            $keterangan             =$this->input->post('keterangan');
            $kategori             =$this->input->post('kategori');
            $harga             =$this->input->post('harga');
            $stok             =$this->input->post('stok');
            $gbr_brgskrg             =$this->input->post('fotoskr');
            $gbr_brg             =$_FILES['gambar_brg'];
    
            if($gbr_brg=''){}else{
                $config['upload_path']='./uploads/';
                $config['allowed_types']='jpg|jpeg|png|gif';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('gambar_brg')){
                   $gbr_brg=$gbr_brgskrg;
                }else{
                    $gbr_brg=$this->upload->data('file_name');
                }

            }
            $data=array(
                'nama_brg'          =>$nama_brg,
                'keterangan'          =>$keterangan,
                'kategori'          =>$kategori,
                'harga'          =>$harga,
                'stok'          =>$stok,
                'gambar'          =>$gbr_brg,
            );
            $where=array(
                'id_brg' =>$id,
            );
           
            $this->M_barang->update_data($where,$data,'tb_barang');
            redirect('admin/data_barang/index');
        }
        public function hapus($id){
            $where=array('id_brg'=>$id);
            $this->M_barang->hapus_data($where,'tb_barang');
            redirect('admin/data_barang/index');
        }

        public function detail($id){
            $this->load->model('M_barang');
            $detilnya=$this->M_barang->detil_barang($id);
            $data['detil']=$detilnya;

            $this->load->view('admin/nav');
            $this->load->view('admin/detail_barang',$data);
            $this->load->view('admin/footer');
        }

        public function cari(){
            $key=$this->input->post('katakunci');
            $data['barang']=$this->M_barang->get_key($key);

            $this->load->view('admin/nav');
            $this->load->view('admin/barang',$data);
            $this->load->view('admin/footer');
        
        }
        public function cetakpdf(){
            $this->load->library('dompdf_gen');
            $data['barang']=$this->M_barang->tampil_data('tb_barang')->result();
            $this->load->view('export',$data);
            $paper_size='A4';
            $orientation='portrait';
            $html=$this->output->get_output();
            $this->dompdf->set_paper($paper_size,$orientation);
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $this->dompdf->stream('Export_produk.pdf',array('Attachment'=>0));
        }
    }
?>