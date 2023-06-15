<?php
class Data_customer extends CI_Controller
{
      public function index()
      {
            $data['customer'] = $this->Rental_Model->get_data('customer')->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/data_customer', $data);
            $this->load->view('templates_admin/footer');
      }
      public function detail_customer($id)
      {
            $data['detail'] = $this->Rental_Model->ambil_id_customer($id);
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/detail_customer', $data);
            $this->load->view('templates_admin/footer');
      }
      public function tambah_customer()
      {
            $data['customer'] = $this->Rental_Model->get_data('customer')->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/form_tambah_customer', $data);
            $this->load->view('templates_admin/footer');
      }
      public function tambah_customer_aksi()
      {
            $this->_rules();
            if ($this->form_validation->run() == FALSE) {
                  $this->tambah_customer();
            } else {
                  $nama_customer = $this->input->post('nama_customer');
                  $username = $this->input->post('username');
                  $alamat = $this->input->post('alamat');
                  $gender = $this->input->post('gender');
                  $no_telepon = $this->input->post('no_telepon');
                  $no_ktp = $this->input->post('no_ktp');
                  $password = md5($this->input->post('password'));
                  $data = [
                        'nama_customer' => $nama_customer,
                        'username' => $username,
                        'alamat' => $alamat,
                        'gender' => $gender,
                        'no_telepon' => $no_telepon,
                        'no_ktp' => $no_ktp,
                        'password' => $password
                  ];
                  $this->Rental_Model->insert_data($data, 'customer');
                  $this->session->set_flashdata('flash', 'ditambahkan');
                  redirect('admin/data_customer');
            }
      }
      public function update_customer($id)
      {
            $where = ['id_customer' => $id];
            $data['customer'] = $this->db->query("SELECT * FROM customer WHERE id_customer= '$id'")->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/form_update_customer', $data);
            $this->load->view('templates_admin/footer');
      }
      public function update_customer_aksi()
      {
            $this->_rules();
            if ($this->form_validation->run() == FALSE) {
                  $this->update_customer('');
            } else {
                  $id            = $this->input->post('id_customer');
                  $nama_customer = $this->input->post('nama_customer');
                  $username = $this->input->post('username');
                  $alamat = $this->input->post('alamat');
                  $gender = $this->input->post('gender');
                  $no_telepon = $this->input->post('no_telepon');
                  $no_ktp = $this->input->post('no_ktp');
                  $password = md5($this->input->post('password'));
                  $data = [
                        'nama_customer' => $nama_customer,
                        'username' => $username,
                        'alamat' => $alamat,
                        'gender' => $gender,
                        'no_telepon' => $no_telepon,
                        'no_ktp' => $no_ktp,
                        'password' => $password
                  ];
                  $where = [
                        'id_customer' => $id
                  ];
                  $this->Rental_Model->update_data('customer',$data,$where);
                  $this->session->set_flashdata('flash', 'diubah');
                  redirect('admin/data_customer');
            }
      }
      public function _rules()
      {
            $this->form_validation->set_rules('nama_customer', 'Nama Customer', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required');
            $this->form_validation->set_rules('no_ktp', 'No KTP', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
      }
      public function delete_customer($id)
      {
            $where = ['id_customer' => $id];
            $this->Rental_Model->delete_data($where, 'customer');
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/data_customer');
      }
}
