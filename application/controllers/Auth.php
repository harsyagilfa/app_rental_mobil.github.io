<?php

class Auth extends CI_Controller
{
      public function login()
      {
            $this->_rules();

            if ($this->form_validation->run() == FALSE) {
                  $this->load->view('form_login');
            } else {
                  $username = $this->input->post('username');
                  $password = md5($this->input->post('password'));

                  $cek = $this->Rental_Model->cek_login($username, $password);

                  if ($cek == FALSE) {
                        $this->session->set_flashdata('flash', 'Salah');
                        redirect('auth/login');
                  } else {
                        $this->session->set_userdata('id_customer', $cek->id_customer);
                        $this->session->set_userdata('nama_customer', $cek->nama_customer);
                        $this->session->set_userdata('username', $cek->username);
                        $this->session->set_userdata('role_id', $cek->role_id);
                  }
                  switch ($cek->role_id) {
                        case 1:
                              redirect('admin/dashboard');
                              break;

                        case 2:
                              redirect('customer/dashboard');
                              break;

                        default:
                              break;
                  }
            }
      }
      public function _rules()
      {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
      }
      public function logout()
      {
            $this->session->sess_destroy();
            redirect('customer/dashboard');
      }
      public function ganti_password()
      {
            $this->load->view('ganti_password');
      }
      public function ganti_password_aksi()
      {
            $pass_baru = $this->input->post('pass_baru');
            $ulang_pass = $this->input->post('ulang_pass');

            $this->form_validation->set_rules('pass_baru', 'Password Baru', 'required|matches[ulang_pass]');
            $this->form_validation->set_rules('ulang_pass', 'Ulangi Password', 'required');

            if ($this->form_validation->run() == FALSE) {
                  $this->load->view('ganti_password');
            } else {
                  $data = [
                        'password' => md5($pass_baru),

                  ];
                  $id = [
                        'id_customer' => $this->session->userdata('id_customer')

                  ];
                  $this->Rental_Model->update_password($id, $data, 'customer');
                  $this->session->set_flashdata('flash', 'Diubah,Silahkan Login');
                  redirect('auth/login');
            }
      }
}
