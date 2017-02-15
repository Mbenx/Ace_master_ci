<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends MX_Controller {

    function __construct() {
        
    }

    public function index() {
        $this->template->load('Backend_view','master_view');
    }

}
