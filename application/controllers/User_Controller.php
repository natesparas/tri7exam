<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller
{
	public function __construct()
    {
		parent::__construct();

  		$this->load->model("User_Model");
  		date_default_timezone_set("Asia/Manila");
    }

    public function index()
    {
      $this->load->view('Common/header');
  		$this->load->view('Pages/index');
  		$this->load->view('Common/footer');
    }

    public function get_user_list()
    {
    	$data = $this->User_Model->get_user_list();
      echo json_encode(array("code" => "00", "msg" => "Success", "data" => $data));
      return; 
    }

    public function insert()
    {
      $result = $this->User_Model->insert();
        if($result['code'] == '00'){
        echo json_encode(array("code" => "00", "msg" => "Success"));
        return; 
      }elseif ($result['code'] == '01') {
        echo json_encode(array("code" => "01", "msg" => "Already Exist"));
        return; 
      }else{
        echo json_encode(array("code" => "99", "msg" => "Failed"));
        return; 
      }
    }

    public function update()
    {
    	$result = $this->User_Model->update();
      if($result['code'] == '00'){
       	echo json_encode(array("code" => "00", "msg" => "Success"));
        return; 
      }elseif ($result['code'] == '01') {
      	echo json_encode(array("code" => "01", "msg" => "Already Exist"));
      	return; 
      }else{
      	echo json_encode(array("code" => "99", "msg" => "Failed"));
      	return; 
      }
    }

    public function delete()
    {
    	$result = $this->User_Model->delete();
      if($result['code'] == '00'){
       	echo json_encode(array("code" => "00", "msg" => "Success"));
        return; 
      }else{
        echo json_encode(array("code" => "99", "msg" => "Failed"));
        return; 
      }
    }
}