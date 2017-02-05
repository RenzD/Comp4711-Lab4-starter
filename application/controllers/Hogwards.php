<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hogwards extends Application
{

	function __construct()
	{
		parent::__construct();

	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{

		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;

		$this->render();
	}
        
        /*
         * Issue #4
         * Remapped Elayne Boolster's quote
         */
        public function shucks(){
            $this->data['pagebody'] = 'justone';
            
            $record = $this->quotes->get(2);
            $this->data = array_merge($this->data, $record);
            
            $this->render();
        } 
        
        /*
         * Issue #10
         */
        public function random() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->all();
        $authors = array();
        $record = $source[rand(0, 6)];
        
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}
