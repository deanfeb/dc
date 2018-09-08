<?php
class html_raw_viewer_model extends CI_Model {

	public $name;
	public $body;

  function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	function gets()
	{
		$temp=json_decode(file_get_contents('php://input'), true);
		
		$name=$temp['name'];

		$this->db->where('name', $name);		
		$query = $this->db->get('html_raw_viewer');
		return $query->result();
	}
	
	function deleteAll(){
		$this->db->empty_table('html_raw_viewer');
	}
	function save(){
		$temp=json_decode(file_get_contents('php://input'), true);
		if(isset($temp['skey'])){
			$data=$temp['data'];
		}else{
			$data=$temp;
		}
		
		

		

		$this->name   = $data['name']; // please read the below note
		$this->body= $data['body'];
		$this->db->insert('html_raw_viewer', $this);	

	}

	
}
