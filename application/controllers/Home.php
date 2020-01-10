<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == true) {
            return true;
        } else {
            redirect('login/keluar', 'refresh');
        }
    }

    function index()
    {
        $data = array(
            'datapemesanan' => $this->db->get('pemesanan')
        );
        $this->load->view('home/view', $data);
    }
}