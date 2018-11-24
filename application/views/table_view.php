  <?php $this->load->view('header') ?>
	<div id='results'>
	 
	<?php 
	 
	$xyz= $this->table->generate($offsetid); 
    echo $xyz;
	
	?>
	</div>
  <?php $this->load->view('footer') ?>