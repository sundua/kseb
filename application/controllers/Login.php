<?php if ( ! defined ('BASEPATH')) exit ('no ditrect access');
class login extends CI_controller
{
  public function __construct()
  {
	  parent::__construct();
	  
	   $this->load->library('session');
	   $this->load->helper('form');
       $this->load->helper('html');
	   $this->load->database();
       $this->load->library('form_validation');	  
	   // load THE login model
	   $this->load->model('login_model');
	  
	  
  }
  
  public function index()
  {
	  // get posted values
	  $username = $this->input->post("txt_username");
	  $password = $this->input->post("txt_password");
	  $xyz =$this->input->post();
	  var_dump($xyz);
	  echo "USERNAAAME";
	  echo $username;
	  echo " ------<br>";
	  $usr_result =NULL;
	  // set validations
	  $this->form_validation->set_rules("txt_username");
	  //$this->form_validation->set_rules("txt_password");
	  
	  //set validations
          //$this->form_validation->set_rules("txt_username", "Username", "trim|required");
         // $this->form_validation->set_rules("txt_password", "Password", "trim|required");

          $this->form_validation->set_rules("txt_username", "UsErname", "required");
          //$this->form_validation->set_rules("txt_password", "Password", "trim");
	  
	      $valida = $this-> form_validation->run();
	      echo'<pre>';
	      var_dump($valida);
	      echo '</pre>';

	   if($this-> form_validation->run() ==FALSE)
	   {        echo "  sundu message validations Fail<br>";
		   $this->load->view('login_view');
	   }
	   else
	   {
		   if($this->input->post('btn_login') =="Login")
		   {
			  $usr_result =$this->login_model->get_user($username,$password);
			  echo 'blah';
			  //var_dump($usr_result);
			  $usr_result =1;
			  
		   }
	           if($usr_result >0  )
			   {
				   $sessiondata =array(
				       'username'=>$username,
					   'loginuser' => TRUE
				   
				   );
				   $this->session->set_userdata($sessiondata);
                     // redirect('index');	
                    header("Location: index");
 					 
			   }
                else
				{
					$this->session->set_flashdata('msg', '<div class =" alert alert-danger text-center">Invalid</div>');
					//redirect ('login/index');
					 header("Location:index  ");
				}
           
  
	   }
  }             
               public function fail()
			   {
				 header("Location:  index ");   
			   }
}
  ?>  