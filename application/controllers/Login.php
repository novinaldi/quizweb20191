<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index()
    {
        $view = array(
            'isi' => $this->load->view('login/formlogin', '', true)
        );
        $this->parser->parse('login/formlogin', $view);
    }

    function validasiuser()
    {
    }
}