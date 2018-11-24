<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KsebModel extends CI_Model
{
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
       // $this->db->query("SET time_zone='+5:30'");
    }
	public function getstart_id()
	{
		 
		$query=$this->db->get('start_id');
		return $query->row();
	}
	public function viewdata()                                // from main table units_aug
	
	{   
	    $start_table ='start_id';                           // donot change 
        $table ='units_aug';                               // do not change		
        $qry =$this->getstart_id();                       // get start _id value to read from units_aug table
		$start_id =$qry->start_id_this;  		// read start_id element
		$query = $this->db->query("SET time_zone='+05:30'");  
		 
		//var_dump($query);
	   //	$query = $this->db->query("SELECT  * FROM  $table   WHERE `id` >=   '$start_id' ORDER BY `id` DESC ");
		 $query = $this->db->query("SELECT  * FROM  $table   WHERE `id` >=   '$start_id' ORDER BY `id` ASC ");
		return $query->result();
	}
	public function getonerow($id)                     // tag on one row of units_aug for edit delete etc
	{
		$this->db->where('id',$id);
		$query=$this->db->get('units_aug');
		return $query->row();
	}
	public function viewstart_id()                    // display start_id table
	{   $start_table ='start_id';  
     	 
		$query=$this->db->get('start_id'); 
		return $query->result();
	}
	
	public function viewslab()            // read slab table
	{
	$slab ='slab';
    //$query =$this->db->query("SELECT * FROM $slab");
	$query =$this->db->get($slab);
  	return $query->result(); 
	}
}