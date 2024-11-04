<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kustomer extends CI_Controller{
    public function laporan()
    {
        $data = array(
            'title' => 'Laporan Data kustomer',
            'content'=> 'kustomer/laporan'
        );
        $this->load->view('template/main', $data);
    }
}