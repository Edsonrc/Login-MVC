<?php

namespace controller\web;

use core\Controller;

class homeController extends Controller {

	public function __construct(){
		parent::__construct();

		$this->layout = '_layout';

	}

	public function index(){
		$this->title = 'Home';
		$this->view();


	}


}

