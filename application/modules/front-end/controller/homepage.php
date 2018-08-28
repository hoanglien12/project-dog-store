<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

    public function index()
    {
    	echo "Hello"; die;
        $this->load->view('home');
    }
    public function test()
    {
    	$this->load->view('home/home');
    }
}