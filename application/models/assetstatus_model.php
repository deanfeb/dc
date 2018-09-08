<?php
class assetstatus_model extends CI_Model {

	public $name;
	public $status1;
	public $status2;
	public $last_update;

  function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	function gets()
	{
		
		$this->db->order_by("name", "asc");
		$query = $this->db->get('asset_status');
		return $query->result();
	}
	  public function aktif_record_count() {
		$this->db->select('1');
		$this->db->from('asset_status');				
		$query = $this->db->get();			
        return $query->num_rows();
    }

	function getsAktif($limit, $start)
	{	
	
		$this->db->select('*');
		$this->db->from('asset_status');		
		//$this->db->where('aktif', true );
		$this->db->limit($limit, $start*$limit);
		$this->db->order_by("name", "asc");
		$query = $this->db->get();	
		
		 if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
		//}
        return false;
	}
	function deleteAll(){
		$this->db->empty_table('asset_status');
	}
	function save(){
		$temp=json_decode(file_get_contents('php://input'), true);
		if(isset($temp['skey'])){
			$data=$temp['data'];
		}else{
			$data=$temp;
		}
		
		

		

		$this->name   = $data['name']; // please read the below note
		$this->status1= $data['status1'];
		$this->status2 = $data['status2'];		
		$this->last_update    = $data['last_update'];
		$this->db->insert('asset_status', $this);	

	}

	
}
