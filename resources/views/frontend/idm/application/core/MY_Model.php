<?php

class MY_Model extends CI_Model {
	var $table;
	var $id;

  	function __construct() 
  	{
    	parent::__construct();
  	}

  	function get($id)
  	{
  		return $this->db->get_where($this->table, array($this->id => $id))->row();
  	}

    function get_all()
    {
      return $this->db->get($this->table)->result();
    }

  	function get_by_criteria()
  	{
  		$query = $this->db->from($this->table);

  		return $query;
  	}

  	function save($data, $id = NULL)
  	{
  		if ($id)
  		{
  			$this->db->update($this->table, $data, array($this->id => $id));
  		}
  		else
  		{
  			$this->db->insert($this->table, $data);
  		}
  	}

    function delete($id)
    {
        $this->db->delete($this->table, array($this->id => $id));
    }
}