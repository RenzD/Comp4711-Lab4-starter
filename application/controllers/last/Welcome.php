<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{
	function __construct()
	{
		parent::__construct();
	}
        
	public function index()
	{
            $this->data['pagebody'] = 'justone';
            $source = $this->quotes->get('6');
              
            $this->data = array_merge($this->data, $source);
            $this->render();
	}
}