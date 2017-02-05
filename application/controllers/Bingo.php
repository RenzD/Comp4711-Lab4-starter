<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bingo extends Application
{
	function __construct()
	{
		parent::__construct();
	}

        /*
         * Issue #8
         * Remapped Socrate's quote
         */
	public function index()
	{
		$this->data['pagebody'] = 'justone';
		$source = $this->quotes->get(5);
		$this->data = array_merge($this->data, $source);
		$this->render();
	}
}