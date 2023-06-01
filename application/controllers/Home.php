<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data = [
            'title' => 'Latihan Data Table ServerSide',
            'judul' => 'Dashboard',
            'isi'   => $this->load->view('home/branda', '', true),
        ];
        $this->parser->parse('template', $data);
	}
}
