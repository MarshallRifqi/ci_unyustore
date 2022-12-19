<?php
    defined('BASEPATH') or exit ('no direct script access allowed');

class Games extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        cek_login();

    }
    public function aov_topup(){
        $this->load->view('templates/header',);
        $this->load->view('templates/topbar');
        $this->load->view('games/aov_topup',);
        $this->load->view('templates/footer',);
    }
    public function apl_topup(){
        $this->load->view('templates/header',);
        $this->load->view('templates/topbar',);
        $this->load->view('games/apl_topup',);
        $this->load->view('templates/footer',);
    }
    public function cod_topup(){
        $this->load->view('templates/header',);
        $this->load->view('templates/topbar',);
        $this->load->view('games/cod_topup',);
        $this->load->view('templates/footer',);
    }
    public function gi_topup(){
        $this->load->view('templates/header',);
        $this->load->view('templates/topbar',);
        $this->load->view('games/gi_topup',);
        $this->load->view('templates/footer',);
    }
    public function lol_topup(){
        $this->load->view('templates/header',);
        $this->load->view('templates/topbar',);
        $this->load->view('games/lol_topup',);
        $this->load->view('templates/footer',);
    }
    public function ml_topup(){
        $this->load->view('templates/header',);
        $this->load->view('templates/topbar',);
        $this->load->view('games/ml_topup',);
        $this->load->view('templates/footer',);
    }
    public function pubg_topup(){
        $this->load->view('templates/header',);
        $this->load->view('templates/topbar',);
        $this->load->view('games/pubg_topup',);
        $this->load->view('templates/footer',);
    }
    public function val_topup(){
        $this->load->view('templates/header',);
        $this->load->view('templates/topbar',);
        $this->load->view('games/val_topup',);
        $this->load->view('templates/footer',);
    }
}
