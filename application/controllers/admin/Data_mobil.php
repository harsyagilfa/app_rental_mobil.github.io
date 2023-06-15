<?php

class Data_mobil extends CI_Controller
{
      public function index()
      {
            $data['mobil'] = $this->Rental_Model->get_data('mobil')
                  ->result();
            $data['type'] = $this->Rental_Model->get_data('type')
                  ->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/data_mobil', $data);
            $this->load->view('templates_admin/footer'); 
      }
      public function tambah_mobil()
      {
            $data['type'] = $this->Rental_Model->get_data('type')
                  ->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/form_tambah_mobil', $data);
            $this->load->view('templates_admin/footer');
      }
      public function tambah_mobil_aksi()
      {
            $this->_rules();

            if ($this->form_validation->run() == FALSE) {
                  $this->tambah_mobil();
            } else {
                  $kode_type = $this->input->post('kode_type');
                  $merk      = $this->input->post('merk');
                  $no_plat   = $this->input->post('no_plat');
                  $warna     = $this->input->post('warna');
                  $tahun     = $this->input->post('tahun');
                  $harga     = $this->input->post('harga');
                  $denda     = $this->input->post('denda');
                  $status    = $this->input->post('status');
                  $gambar    = $_FILES['gambar']['name'];
                  if ($gambar == '') {
                  } else {
                        $config['upload_path'] = './assets/upload';
                        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('gambar')) {
                              echo "Gambar Mobil Gagal Diupload";
                        } else {
                              $gambar = $this->upload->data('filename');
                        }
                  }
                  $data = [
                        'kode_type' => $kode_type,
                        'merk'      => $merk,
                        'no_plat'   => $no_plat,
                        'warna'     => $warna,
                        'tahun'     => $tahun,
                        'harga'     => $harga,
                        'denda'     => $denda,
                        'status'    => $status,
                        'gambar'    => $gambar,
                  ];
                  $this->Rental_Model->insert_data($data, 'mobil');
                  $this->session->set_flashdata('flash', 'ditambahkan');
                  redirect('admin/data_mobil');
            }
      }
      public function update_mobil($id)
      {
            $where = ['id_mobil' => $id];
            $data['mobil'] = $this->db->query("SELECT * FROM mobil mb, type tp 
            WHERE mb.kode_type=tp.kode_type AND mb.id_mobil='$id'")->result();
            $data['type'] = $this->Rental_Model->get_data('type')->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/form_update_mobil', $data);
            $this->load->view('templates_admin/footer');
      }
      public function update_mobil_aksi()
      {
            $this->_rules();
            if ($this->form_validation->run() == FALSE) {
                  $this->update_mobil('');
            } else {
                  $id        = $this->input->post('id_mobil');
                  $kode_type = $this->input->post('kode_type');
                  $merk      = $this->input->post('merk');
                  $no_plat   = $this->input->post('no_plat');
                  $warna     = $this->input->post('warna');
                  $tahun     = $this->input->post('tahun');
                  $harga     = $this->input->post('harga');
                  $denda     = $this->input->post('denda');
                  $status    = $this->input->post('status');
                  $gambar    = $_FILES['gambar']['name'];
                  if ($gambar) {
                        $config['upload_path'] = './assets/upload';
                        $config['allowed_types'] = 'jpg|jpeg|png|tiff';

                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload('gambar')) {
                              $gambar = $this->upload->data('file_name');
                              $this->db->set('gambar', $gambar);
                        } else {
                              echo $this->upload->display_errors();
                        }
                  }
                  $data = [
                        'kode_type' => $kode_type,
                        'merk'      => $merk,
                        'no_plat'   => $no_plat,
                        'tahun'     => $tahun,
                        'harga'     => $harga,
                        'denda'     => $denda,
                        'warna'     => $warna,
                        'status'    => $status,
                  ];
                  $where = [
                        'id_mobil' => $id
                  ];
                  $this->Rental_Model->update_data('mobil', $data, $where);
                  $this->session->set_flashdata('flash', 'diubah');
                  redirect('admin/data_mobil');
            }
      }

      public function _rules()
      {
            $this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
            $this->form_validation->set_rules('merk', 'Merk', 'required');
            $this->form_validation->set_rules('no_plat', 'No Plat', 'required');
            $this->form_validation->set_rules('tahun', 'Tahun', 'required');
            $this->form_validation->set_rules('warna', 'Warna', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');
      }
      public function detail_mobil($id)
      {
            $data['detail'] = $this->Rental_Model->ambil_id_mobil($id);
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/detail_mobil', $data);
            $this->load->view('templates_admin/footer');
      }
      public function delete_mobil($id)
      {
            $where = ['id_mobil' => $id];
            $this->Rental_Model->delete_data($where,'mobil');
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/data_mobil');
      }
}
