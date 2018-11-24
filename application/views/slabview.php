 <?php $this->load->view('header') ?>
 
  
		<hr>
<div align ="center">
<?php 
 
 
 
echo ' <table  class="table table-bordered">';
echo '<th>Start</th><th>upper</th><th>value</th><th>rupees</th><th>type</th><th>slab</th><th>slab_rs</th>';
foreach ($this->KsebModel->viewslab() as $row)
{
	echo '<tr><td>'; 
   	echo $row->start;
	echo  '</td><td>';
	echo $row->upper;
	echo  '</td><td>';
	echo $row->value;
	echo  '</td><td>';
	echo $row->rupees;
	echo  '</td><td>';
	echo $row->type;
	echo  '</td><td>';
	echo $row->slab;
	echo  '</td><td>';
	echo $row->slab_rs;
	echo  '</td><tr>';
  
} 

?>
</div>
  <?php $this->load->view('footer') ?>