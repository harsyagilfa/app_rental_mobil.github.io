<?php 

class Dashboard extends CI_Controller{
      public function index()
      {
            $data['mobil'] = $this->Rental_Model->get_data('mobil')->result();
            $customer = $this->db->query("SELECT * FROM customer");
            $data['customer'] = $customer->num_rows();
            $this->load->view('templates_customer/header');
            $this->load->view('customer/dashboard',$data);
            $this->load->view('templates_customer/footer'); 
      }

}
