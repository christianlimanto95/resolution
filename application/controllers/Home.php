<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//include general controller supaya bisa extends General_controller
require_once("application/core/General_controller.php");

class Home extends General_controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("Home_model");
	}
	
	public function index()
	{
		$data = array(
			"title" => "Create 2018 Resolution"
		);
		
		parent::view("home", $data);
	}

	function submit_resolution() {
		$resolution_text = $this->input->post("resolution_text");
		$resolution_text_color = $this->input->post("resolution_text_color");
		$resolution_text_font_family = $this->input->post("resolution_text_font_family");
		$resolution_background_color = $this->input->post("resolution_background_color");

		$data = array(
			"resolution_text" => $resolution_text,
			"resolution_text_color" => $resolution_text_color,
			"resolution_text_font_family" => $resolution_text_font_family,
			"resolution_background_color" => $resolution_background_color
		);
		$item_id = $this->Home_model->submit_resolution($data);
		redirect(base_url("my_resolution/" . $item_id));
	}

	function my_resolution() {
		$item_id = $this->uri->segment(2);
		$item = $this->Home_model->get_resolution($item_id);
		if (sizeof($item) > 0) {
			$data = array(
				"title" => "My 2018 Resolution",
				"item" => $item[0],
				"url" => base_url("my_resolution/" . $item_id)
			);
			
			parent::view("my_resolution", $data);
		} else {
			redirect(base_url());
		}
	}
}
