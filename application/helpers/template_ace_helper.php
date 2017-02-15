<?php

/*
 * Template Helper By Herlambang S.
 * Hellper ini di sesuaikan dan di peruntukkan template Ace Admin
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function title() {
    $_this = & get_instance();
    $array_backend_page = array(
        '' => 'Dashboard',
        'master' => 'Master Data'
    );
    $title = NULL;
    if ((array_key_exists($_this->uri->segment(1), $array_backend_page))) {
        return $array_backend_page[$_this->uri->segment(1)];
    }
}

function class_menu($menu) {
    $_this = & get_instance();
    if ($_this->uri->segment(1) == $menu) {
        $class = "active open hover";
    } else {
        $class = "hover";
    }
    return $class;
}

function class_submenu_1($menu) {
    $_this = & get_instance();
    if ($_this->uri->segment(2) == $menu) {
        $class = "active open hover";
    } else {
        $class = "hover";
    }
    return $class;
}

function class_submenu_2($menu) {
    $_this = & get_instance();
    if ($_this->uri->segment(3) == $menu) {
        $class = "active open hover";
    } else {
        $class = "hover";
    }
    return $class;
}

