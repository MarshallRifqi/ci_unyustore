<?php
    defined('BASEPATH') or exit ('no direct script access allowed');

class Order extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function selesai(){
            $this->load->view('templates/header',);
            $this->load->view('templates/topbar',);
            $this->load->view('games/selesai');
            $this->load->view('templates/footer',);
    }
    public function bayar(){
            $data = [
                'player_id' => $this->input->post('player_id'),
                'item_beli' => $this->input->post('item_beli'),
                'email'     => $this->input->post('email')
            ];
            $this->ModelOrder->inputData($data);
            redirect('order/selesai');
    }
    public function sendWa(){
        $tujuan = $this->input->post('tujuan');
        $message = urlencode($this->input->post('message'));

        $result = file_get_contents("http:/localhost:5000/". "msg?number=".$tujuan."&message=".$message);
        $this->session->flashdata('message', 'Berhasil kirim pesan');
        redirect('user/index');
    }
}