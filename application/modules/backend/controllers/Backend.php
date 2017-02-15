<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends MX_Controller {

    function __construct() {
        
    }

    public function index() {
        $this->template->load('Backend_view','dashboard_view1');
    }

}
