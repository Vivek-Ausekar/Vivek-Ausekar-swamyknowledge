<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    function __construct() {

        parent::__construct();
        $this->load->view('common/header');
    }

    public function index() {

        $this->load->view('common/footer');
    }

}
