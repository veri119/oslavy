<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    public function index()
    {
        $data['meno']='meno';
        $data['dnes']=date("j.n.Y");

        $this->load->view('template/hlavicka');
        $this->load->view('home');
        $this->load->view('template/pata');
    }
}
