<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  Kseb extends CI_Controller
{
	
	 
	 
	public function index()
	{$mydate=getdate(date("U"));
		
       // $cart=   $mydate;
        
       
		$data['y'] =$mydate; // date is sent to view page
	 
		$data['start_id']= $this->KsebModel->viewstart_id();  // start is is sent to view page
		$this->load->view("index",$data );  
		 
			
	}
	public function insertdata()
	{
		//create array for get data from index
		$mydate=getdate(date("U"));
		$d="$mydate[mday]";
        $h="$mydate[hours]";
        $m="$mydate[minutes]";
        $testTime= "1000-01-01 00:00:00";
		$sqldate = date("Y-m-d H:i:s") ; 
		$row      = $this->KsebModel->getstart_id();
		$offset   = $row->offset;
		$pre_unit = $this->input->post('unit');
		$unit =$pre_unit+$offset;
        $data = array( 
            'unit' =>  $unit,
			'date' =>  $d,
            'hour' =>  $h,
            'min'  =>  $m,
			'utc'  =>  $sqldate
 
		 ); 
		
		//means this data insert into table name  units_aug
					$this->db->insert('units_aug',$data);
					redirect("Kseb/index");
	}
	public function edit($id)
	{
		$row=$this->KsebModel->getonerow($id);
		$data['r']=$row;
		$this->load->view('edit',$data);
		//redirect('Kseb/edit');
	}
	public function update($id)
	{
		$id=$this->input->post('id');
		
		 
		$data = array( 
            'unit' => $this->input->post('unit'),
			'date' =>  $this->input->post('date'), 
            'hour' =>  $this->input->post('hour'),
            'min' =>   $this->input->post('min'),
			'utc' =>   $this->input->post('utc'),
 
		 ); 			
						$this->db->where('id',$id);
						$this->db->update('units_aug',$data);
						redirect("Kseb/index");
		
	}
	public function delete($id)
	{
		$id=$this->db->where('id',$id);
		$this->db->delete('units_aug',$id);
		redirect("Kseb/index");
	}
	
	public function start_id()
	{
		$this->load->view("start_id");  
			
	}
	public function testview()
	{
		$this->load->view("testview");
	}
	public function edit_start_id()
	{
		$row=$this->KsebModel->getstart_id();
		$data['r']=$row;
		$this->load->view('edit_start_id',$data);
		//redirect('Kseb/edit');
	}
	public function update_start_id()
	{
		$id=$this->input->post('id');
		$id=0;// whatever input ,id is 0
		 
		$data = array( 
            'misc' =>  $this->input->post('misc'),
			'dvdr' =>  $this->input->post('dvdr'), 
            'offset' =>  $this->input->post('offset'),
            'days' =>   $this->input->post('days'),
			'start_id_this' =>   $this->input->post('start_id_this'),
 
		 ); 			
						$this->db->where('id',$id);
						$this->db->update('start_id',$data);
						redirect("Kseb/start_id");
		
	}
	
	public function viewstartid() // this is not used , just trial of tables library
	 {  
		// Load the tables library
		  $this->load->library('table');
		  echo'<pre>';
		  $data['offsetid'] = $this->db->get("units_aug");  //offsetid NAME is irrelevent
		  $this->load->view('table_view',$data);
	}
	
	public function viewslab()
	{
	$this->load->view("slabview");
	
	}



	//----------------------------------start computations
	public function calculate()
	{ $i=0;
		$count=0;
          foreach($this->KsebModel->viewdata() as $row)
            {//$data['onebyone'][]=$row;//ref
      	          if($i==0)
                  {
                  	 $unitplus  = $row->unit;
                     $startunit = $row->unit;
                     $maxunit   = $row->unit;
                     $startdate = $row->utc;
                  }
                   

             $data['resultdate'][$i] = $row->utc;
             $data['unitdiff'][$i]   = $row->unit -$maxunit; //subtracting WARNING minus SIGNN
             
        
             $unitplus=$row->unit;  
             $maxunit =$row->unit; 
             $maxdate =$row->utc;

             $i++;
             $data['count']=$i;
             }
            
             $data['unitscons']  = $maxunit-$startunit; //MINUS SIGN
             $data['startdate']  = $startdate;
             $data['maxdate']    = $maxdate;

             $startdate_string   = strtotime($startdate);
             $maxdate_string     = strtotime($maxdate);
             $datespan           = ($maxdate_string-$startdate_string) ;
             $datespan           = floor($datespan/(60*60*24));
             $average            = ($data['unitscons'])/$datespan;
             $data['datespan']   = $datespan;
             $data['average']    = $average;






             $this->load->view('calculate',$data);
	}
	
}
?>
 



