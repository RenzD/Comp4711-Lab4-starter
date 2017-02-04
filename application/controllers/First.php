<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application {

  // Constructor
  public function __construct()
  {
    parent::__construct();
  }


  public function index(){

    $this->load->model('quotes');
    $this->data['pagebody'] = 'justone';


    $this->data = array_merge($this->data, $this->quotes->get(1));
    
    $this->render();
  }

  public function zzz(){

    $this->load->model('quotes');
    $this->data['pagebody'] = 'justone';

    $this->data = array_merge($this->data, $this->quotes->get(1));

    $this->render();

  }
}