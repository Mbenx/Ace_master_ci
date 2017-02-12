<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mata_pelajaran extends MX_Controller {

    function __construct() {
        
    }

    public function index() {
        $this->template->load('Backend_view','mata_pelajaran/index');
    }

}
