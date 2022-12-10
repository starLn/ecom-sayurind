<?php
    class M_pembayaran extends CI_Model{
        public function index(){
                date_default_timezone_set('Asia/Jakarta');
                $nama       =$this->input->post('nama');
                $alamat       =$this->input->post('alamat');
                $bukti_tf       = $_FILES['bukti']['name'];

                if($bukti_tf=''){}else{
                    $config['upload_path']='./uploads/bukti';
                    $config['allowed_types']='jpg|jpeg|png|gif';
    
                    $this->load->library('upload',$config);
                    if(!$this->upload->do_upload('bukti')){
                       $bukti_tf='image.jpg';
                    }else{
                        $bukti_tf=$this->upload->data('file_name');
                    }
    
                }
           
                $invoice=array(
                    'nama'              =>$nama,
                    'alamat'            =>$alamat,
                    'tgl_pesan'         =>date('Y-m-d H:i:s'),
                    'batas_bayar'       =>date('Y-m-d H:i:s',mktime(date('H'),
                        date('i'),date('s'),date('m'),date('d')+1,date('Y')
                    )),
                    'bukti'          =>$bukti_tf,
                    'status' => 'Pending'
                );
                $this->db->insert('tb_pembayaran',$invoice);
                $id_invoice =$this->db->insert_id();

                foreach($this->cart->contents() as $item){
                    $data=array(
                       'id_invoice' =>$id_invoice,
                       'id_brg' =>$item['id'],
                       'nama_brg' =>$item['name'],
                       'jumlah' =>$item['qty'],
                       'harga' =>$item['price'],
                    );
                    $this->db->insert('tb_pesanan',$data);

                }
                return true;
        }
       
        public function tampil_data(){
            $result = $this->db->get('tb_pembayaran');
            if($result->num_rows()>0){
                return $result->result();
            }else{
                return false;
            }
        }
        public function tampil_status(){
            return $this->db->get('tb_pembayaran');
            
        }

        public function edit_barang($where,$table){
            return $this->db->get_where($table,$where);
        }
    
       public function update_data($where,$data,$table){
           $this->db->where($where);
           $this->db->update($table,$data);
       }
       
        public function ambil_id_invoice($id_invoice){
            $result=$this->db->where('id',$id_invoice)->limit(1)->get('tb_pembayaran');
            if($result->num_rows()>0){
                return $result->row();
            }else{
                return false;
            }
        }
        public function ambil_id_pesanan($id_invoice){
            $result=$this->db->where('id_invoice',$id_invoice)->get('tb_pesanan');
            if($result->num_rows()>0){
                return $result->result();
            }else{
                return false;
            }
        }

        public function ambil_id_user($id_user){
            $result=$this->db->where('id',$id_user)->limit(1)->get('tb_user');
            if($result->num_rows()>0){
                return $result->row();
            }else{
                return false;
            }
        }
        public function ambil_id_pembayaran($id_user){
            $result=$this->db->where('id_user',$id_user)->get('tb_pembayaran');
            if($result->num_rows()>0){
                return $result->result();
            }else{
                return false;
            }
        }
        public function status($id_user){
            $result=$this->db->where('id',$id_user)->limit(1)->get('tb_user');
            var_dump($result->context);

            if($result->num_rows()>0){
                return $result->row();
            }else{
                return false;
            }
        }
        // public function ambil_id_status($id_invoice){
        //     $result=$this->db->where('id',$id_invoice)->limit(1)->get('tb_pembayaran');
        //     if($result->num_rows()>0){
        //         return $result->row();
        //     }else{
        //         return false;
        //     }
        // }
        public function ambil_id_status($id){
            $result = $this->db->get('tb_pembayaran');
            if($result->num_rows()>0){
                return $result->result();
            }else{
                return false;
            }
        }
    }
?>