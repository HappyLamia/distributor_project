<?php 

	/**
	* 
	*/
	class Privileges
	{
		public function __construct($params = array())
    	{
    		
	    }
    	public function getMetadata($pageid)
   		{
			$sql = "SELECT * FROM pages WHERE pageid = ?"; 
			$results = $this->CI->db->query($sql, array($pageid));
			$pageMetadata = $results->row(); 
			$data['keywords'] = $pageMetadata->keywords;
			$data['description'] = $pageMetadata->description;
			$this->CI->load->view('templates/header',$data); 
		}
	}
?>