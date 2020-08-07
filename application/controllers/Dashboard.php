<?php
class Dashboard extends CI_Controller {
        
        public function __constructor()
        {
                parent::__constructor();
        }

        public function index()
        {
                $this->load->view('_parents/header');
                $this->load->view('_parents/sidebar');
                $this->load->view('v_content');
                $this->load->view('_parents/footer');
        }
}