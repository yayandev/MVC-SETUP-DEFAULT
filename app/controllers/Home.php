<?php
class Home extends Controller
{
	public function index()
	{
		$data['judul'] = 'Beranda';
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
}
