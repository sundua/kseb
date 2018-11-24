 <?php $this->load->view('header') ?>
 
 <div class="container=fluid">
       <div class="row">
	  <div class ="col-sm-1" style="background-color:FEFEFE;">
		  <p> 
		  </p>
		 </div>
			<div class ="col-sm-6" style="background-color:#EEEEEE;">
            <table  class="table table-bordered table-striped">
            <thead>
            	
                <th>Unit</th>
                <th>Date</th>
                <th>Hour</th>
                <th> Min</th>
				<th> utc</th>
                <th>Read time</th>
				
                <th>ID</th>
				<th>action</th>
            </thead>
            <tbody>
			<hr>
					<?php 
						foreach($this->KsebModel->viewdata() as $row)
						{
							echo "<tr>
								<td> $row->unit </td>
								<td> $row->date </td>
								<td> $row->hour </td>
								<td> $row->min</td>
								<td> $row->utc </td>
								<td> $row->unitreadtime </td>
								 
								<td> $row->id </td>
                                <td><a href='".site_url('Kseb/edit/'.$row->id)."'>Edit</a> | <a href='".site_url('Kseb/delete/'.$row->id)."'>Delete</a></td>
								</tr>";
                    
						}
					
					?>
            </tbody> </table>
			</div>
			 <div class ="col-sm-1" style="background-color:#FFFFFF;">
		  <p> 
		 
		  </p>
		   
		  </div>
       
		 <div class ="col-sm-3" style="background-color:#EEEEEE;">
	      <?php
	      $row= $this->KsebModel->getstart_id();
	      $offset = $row->offset ;
	      $dvdr   = $row->dvdr;
	      $x=$offset/$dvdr;
	      ?>
	    
		<form action=" <?php echo site_url('Kseb/insertdata'); ?>" method="post">
        	<Kseb><table  class="table table-bordered">
            	<tr>
                	<td>Units:</td>
                	<td>
                     <input type ="text" value="<?php echo$x;?>" disabled size=3>
                	</td>
					<td>
						<input type="text" name="unit" />
                    </td>
                </tr>
                
                
                <tr>
                	<td colspan="2">
                    	<center><input type="submit" value="submit" name="submit" /></center>
                    </td>
                </tr>
            </table></Kseb>
			</form>
			 
		 



			</div>
		 
		 
		  
		</div>
		</div>
		<?php #echo base_url();?>
		<script>
         
         </script>		  
		 
   <?php $this->load->view('footer') ?>