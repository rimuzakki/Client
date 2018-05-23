<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

// request untuk data customer di server

class Customer extends CI_Controller {
	
	var $API = '';

	function __construct() {
		parent::__construct();
		$this->API="http://localhost/server/index.php/api/customers/";
	}

	function index() {
		$data['customers'] = $this->__execute($this->API, 'get', '');
		$this->template->load('template_master', 'customer/list', $data);
	}

	function add() {
		if (isset($_POST['submit'])) {
			$params = array(
				'name' => $this->input->post('name'),
				'phone' => $this->input->post('phone'),
				'city' => $this->input->post('city')
			);
			$this->__execute($this->API, 'post', $params);
			redirect('customer');
		} 
		else {
			$this->template->load('template_master', 'customer/add');
		}
	}

	function edit() {
		if (isset($_POST['submit'])) {
			$params = array(
				'name' => $this->input->post('name'),
				'id' => $this->input->post('id'),
				'phone' => $this->input->post('phone'),
				'city' => $this->input->post('city')
			);
			$result = $this->__execute($this->API. 'format/json/', 'put', $params);
			redirect('customer');
		}
		else {
			$id = $this->uri->segment(3);
			$data['customer'] = $this->__execute($this->API. 'id/'.$id, 'get', array('id' => $id));
			$this->template->load('template_master', 'customer/edit', $data);
		}
	}

	function delete() {
		$id = $this->uri->segment(3);
		$this->__execute($this->API, 'delete', array('id' => $id));
		redirect('customer');
	}

	function __execute($url, $method, $param) {
		$this->curl->create($url);
		$this->curl->$method($param);
		$result = json_decode($this->curl->execute());
		return $result;
	}
}
?>