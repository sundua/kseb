<?php if( ! defined('BASEPATH')) exit ('no direct access allowed');

class Login_model extends CI_Model
{
	function __construct()
	{
		 // call model constructor
		 parent::__construct();
	}
	
	 // get credentials
	  function get_user($usr , $pwd)
	  {
		$sql = "select *  from tbl_usrs where username = '" . $usr .  "'
		and password = '" .  $pwd . "' and status ='active'";
            
        $query = $this->db->query($sql);
		return  $query->num_rows();   
	  }
}
?>