<?php
class ModelLogout extends CI_Model{
    
    public function getLogout()
    {
        // Jika username tidak ada, maka session akan dilakukan penghapusan session dan diarahkan ke login
        if (empty($this->session->userdata('username'))) {
            $this->session->sess_destroy();
            redirect('_login');
        }
    }
}
