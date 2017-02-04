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
    $this->data['pagebody'] = 'homepage';

    $authors[] = $this->quotes->get(1);
    $this->data['authors'] = $authors;

    $this->render();
  }

  public function zzz(){

    $this->load->model('quotes');
    $this->data['pagebody'] = 'homepage';

    $authors[] = $this->quotes->get(1);
    $this->data['authors'] = $authors;

    $this->render();

  }
}