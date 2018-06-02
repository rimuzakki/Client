<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

// request untuk data produk di server

class Produk extends CI_Controller {
	
	var $API = '';

	function __construct() {
		parent::__construct();
		$this->API="http://www.rimuzakki.com/index.php/api/produks/";

		$this->data['opt_kategori'] = array('' => '-Kategori-',
											'Gaming Headset' => 'Gaming Headset',
											'Gaming Laptop' => 'Gaming Laptop',
											'Gaming Mouse' => 'Gaming Mouse',
											'Gaming Accesories' => 'Gaming Accesories');
	}

	function index() {
		$data['produks'] = $this->__execute($this->API, 'get', '');
		$this->template->load('template_master', 'produk/list', $data);
	}

	function add() {
		if (isset($_POST['submit'])) {
			$params = array(
				'nama' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi'),
				'kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga')
			);
			$this->__execute($this->API, 'post', $params);
			redirect('produk');
		} 
		else {
			$this->template->load('template_master', 'produk/add');
		}
	}

	function edit() {
		if (isset($_POST['submit'])) {
			$params = array(
				'nama' => $this->input->post('nama'),
				'id' => $this->input->post('id'),
				'deskripsi' => $this->input->post('deskripsi'),
				'kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga')
			);
			$result = $this->__execute($this->API. 'format/json/', 'put', $params);
			redirect('produk');
		}
		else {
			$id = $this->uri->segment(3);
			$data['produk'] = $this->__execute($this->API. 'id/'.$id, 'get', array('id' => $id));
			$this->template->load('template_master', 'produk/edit', $data);
		}
	}

	function delete() {
		$id = $this->uri->segment(3);
		$this->__execute($this->API, 'delete', array('id' => $id));
		redirect('produk');
	}

	function __execute($url, $method, $param) {
		$this->curl->create($url);
		$this->curl->$method($param);
		$result = json_decode($this->curl->execute());
		return $result;
	}
}
?>