<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * php class to fix issue #8 Issac Asimov's link
 */

class Wise extends Application
{
	function __construct()
	{
		parent::__construct();
	}
	public function bingo(){
		$this->data['pagebody'] = 'justone';
		$something = $this->quotes->get(6);
		$this->data = array_merge($this->data, $something);
		$this->render();
	}
}