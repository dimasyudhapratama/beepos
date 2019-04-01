<?php
defined("BASEPATH") OR die("No Direct Access Allowed");

class MasterBackend extends CI_Controller{
    function index(){
        $this->load->view('backend/master');
    }
}