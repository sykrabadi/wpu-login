<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Sistem Informasi PKM';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		//panggil file index dalam folder user, dalam folder view
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}
	
}