<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetak extends CI_Controller 
{
    public function index()
    {
        $this->load->model('m_catatan');

        $data['print'] = $this->m_catatan->print_catatan();
        $this->load->view('cetak', $data);
    }
}