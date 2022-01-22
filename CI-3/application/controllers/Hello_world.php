<?php
class Hello_world extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Hello World';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('hello_world');
        $this->load->view('templates/footer');
    }
}
