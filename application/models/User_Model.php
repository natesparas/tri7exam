<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{
	public function __construct()
  	{
	    parent::__construct();
	    $CI = &get_instance();
	    date_default_timezone_set("Asia/Manila");
  	}

  	public function get_user_list()
  	{
	    $this->db->select('*');
	    $this->db->from('user');
	    $user = $this->db->get();
	    return $user->result();
  	}

  	public function insert()
    {
    	$this->db->trans_begin();

		$data = array(
			'first_name'  	=>  $this->input->post('first_name'),
			'last_name' 	=> $this->input->post('last_name'),
			'position' 		=> $this->input->post('position'),
			'create_date' 	=> date("Y-m-d")
		);

		// Check if already exist
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('first_name', $this->input->post('first_name'));
        $this->db->where('last_name', $this->input->post('last_name'));
        $query = $this->db->get();
        $result = $query->row_array();

        if (!empty($result)) {
            return array('code' => '01'); // exist
        } else {
            $this->db->insert('user', $data);
        }

		if ($this->db->trans_status() === false) {
			$db_error = "";
			$db_error = $this->db->error();
			$this->db->trans_rollback();
			return $db_error;
		} else {
			$this->db->trans_commit();
			return array('code' => '00', 'data' => $data);
		}
    }

    public function update($value='')
    {
    	$this->db->trans_begin();

		$data = array(
			'first_name'  	=>  $this->input->post('first_name'),
			'last_name' 	=> $this->input->post('last_name'),
			'position' 		=> $this->input->post('position'),
			'create_date' 	=> date("Y-m-d")
		);

		// Check if already exist
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('first_name', $this->input->post('first_name'));
        $this->db->where('last_name', $this->input->post('last_name'));
        $query = $this->db->get();
        $result = $query->row_array();

        if (!empty($result)) {
            return array('code' => '01'); // exist
        } else {
            $this->db->where('id', $this->input->post('id'));
      		$this->db->update('user', $data);
        }

		if ($this->db->trans_status() === false) {
			$db_error = "";
			$db_error = $this->db->error();
			$this->db->trans_rollback();
			return $db_error;
		} else {
			$this->db->trans_commit();
			return array('code' => '00', 'data' => $data);
		}
    }

    public function delete($value='')
    {
    	$this->db->trans_begin();

    	$this->db->where('id', $this->input->post('id'));
      	$this->db->delete('user');

    	if ($this->db->trans_status() === false) {
			$db_error = "";
			$db_error = $this->db->error();
			$this->db->trans_rollback();
			return $db_error;
		} else {
			$this->db->trans_commit();
			return array('code' => '00', 'data' => '');
		}
    }
}
?>