<?php 

class Rental extends CI_Controller
{
      public function tambah_rental($id)
      {
            $data['detail'] = $this->Rental_Model->ambil_id_mobil($id);
            $this->load->view('templates_customer/header');
            $this->load->view('customer/tambah_rental',$data);
            $this->load->view('templates_customer/footer'); 
      }
      public function tambah_rental_aksi()
      {
            $id_customer      = $this->session->userdata('id_customer');
            $id_mobil         = $this->input->post('id_mobil');
            $tanggal_rental   = $this->input->post('tanggal_rental'); 
            $tanggal_kembali  = $this->input->post('tanggal_kembali');
            $harga            = $this->input->post('harga');
            $denda            = $this->input->post('denda');

            $data = [
                  'id_customer'           => $id_customer,
                  'id_mobil'              => $id_mobil,
                  'tanggal_rental'        => $tanggal_rental,
                  'tanggal_kembali'       => $tanggal_kembali,
                  'harga'                 => $harga,
                  'denda'                 => $denda,
                  'tanggal_pengembalian'  => '-',
                  'status_pengembalian'   => 'belum kembali',
                  'status_rental'         => 'belum Selesai',
            ];
            $this->Rental_Model->insert_data($data,'transaksi');
            $status = [
                  'status' => '0'
            ];
            $id = [
                  'id_mobil' => $id_mobil
            ];
            $this->Rental_Model->update_data('mobil',$status,$id);
            $this->session->set_flashdata('flash' ,' <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                                          <strong>Transaksi Berhasil</strong> Silahkan Checkout
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                          </div>'
        );
        redirect('customer/data_mobil');
      } 
      
}
