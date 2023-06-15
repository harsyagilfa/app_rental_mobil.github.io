<?php 

class Data_type extends CI_Controller
{
      public function index()
      {
            $data['type'] = $this->Rental_Model->get_data('type')->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/data_type',$data);
            $this->load->view('templates_admin/Footer');
      }
      public function tambah_type()
      {
            
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/form_tambah_type');
            $this->load->view('templates_admin/Footer');
      }
      public function tambah_type_aksi()
      {
            $this->_rules();
            if ($this->form_validation->run() == FALSE) {
                  $this->tambah_type();
            }else{
                  $kode_type = $this->input->post('kode_type');
                  $nama_type = $this->input->post('nama_type');
                  $data = [
                        'kode_type' => $kode_type,
                        'nama_type' => $nama_type,
                  ];
                  $this->Rental_Model->insert_data($data, 'type');
                  $this->session->set_flashdata('flash', 'ditambahkan');
                  redirect('admin/data_type');
            }
      }
      public function update_type($id)
      {
            $where = ['id_type'=> $id];
            $data['type']= $this->db->query("SELECT * FROM type WHERE id_type='$id'")->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/form_update_type',$data);
            $this->load->view('templates_admin/Footer');
      }
      public function update_type_aksi()
      {
            $this->_rules();
            if ($this->form_validation->run() == FALSE) 
            {
                  $this->update_type('');
            }else{
                  $id            = $this->input->post('id_type');
                  $kode_type     = $this->input->post('kode_type');
                  $nama_type     = $this->input->post('nama_type');
                  
                  $data = [
                        'kode_type' => $kode_type,
                        'nama_type' => $nama_type,
                  ];
                  $where = [
                        'id_type' => $id
                  ];
                  $this->Rental_Model->update_data('type',$data,$where);
                  $this->session->set_flashdata('flash', 'diubah');
                  redirect('admin/data_type');
            }
      }
      
      public function _rules()
      {
            $this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
            $this->form_validation->set_rules('nama_type', 'Nama type', 'required');
      }
      public function delete_type($id)
      {
            $where = ['id_type' => $id];
            $this->Rental_Model->delete_data($where,'type');
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/data_type');
      }
}
