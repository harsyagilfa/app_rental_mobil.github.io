<?php

class Register extends CI_Controller
{

      public function index()
      {
            $this->_rules();

            if ($this->form_validation->run() == FALSE) {
                  $this->load->view('templates_admin/header');
                  $this->load->view('register_form');
            } else {
                  $nama_customer = $this->input->post('nama_customer');
                  $username = $this->input->post('username');
                  $alamat = $this->input->post('alamat');
                  $gender = $this->input->post('gender');
                  $no_telepon = $this->input->post('no_telepon');
                  $no_ktp = $this->input->post('no_ktp');
                  $password = md5($this->input->post('password'));
                  $role_id = '2';
                  $data = [
                        'nama_customer' => $nama_customer,
                        'username' => $username,
                        'alamat' => $alamat,
                        'gender' => $gender,
                        'no_telepon' => $no_telepon,
                        'no_ktp' => $no_ktp,
                        'password' => $password,
                        'role_id' => $role_id
                  ];
                  $this->Rental_Model->insert_data($data, 'customer');
                  $this->session->set_flashdata('flash', 'ditambahkan');
                  redirect('auth/login');
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
}
