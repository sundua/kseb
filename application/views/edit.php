  <?php $this->load->view('header') ?>
		<form action=" <?php echo site_url('Kseb/update'); ?>" method="post">
        	<center><table  class="table table-bordered">
			<tr>
                	<td>Units:</td>
					<td>
						<input type="text" name="unit" value="<?php echo $r->unit;?>" />
                    </td>
                </tr>
				 
            	<tr>
                	<td>ID:</td>
					<td>
						<input type="text" name="id" hidden value="<?php echo $r->id;?>" />
                    </td>
                </tr>
            	 
                <tr>
                	<td>Date</td>
					<td>
						<input type="text" name="date" value="<?php   echo $r->date;?>" />
                    </td>
                </tr>
                <tr>
                	<td> Hour:</td>
					<td>
						<input type="text" name="hour" value="<?php echo $r->hour;?>"/>
                    </td>
                    
                </tr>  
				 <tr>
                	<td>Min:</td>
					<td>
						<input type="text" name=" min" value="<?php   echo $r->min;?>" />
                    </td>
                </tr>
                <tr>
                	<td>  utc:</td>
					<td>
						<input type="text" name=" utc" value="<?php echo $r->utc;?>"/>
                    </td>
                    
                </tr>  
				 <tr>
                	<td> Unit read time:</td>
					<td>
						<input type="text" name="unitreadtime" value="<?php   echo $r->unitreadtime;?>" />
                    </td>
                </tr>
                
                <tr>
                	<td colspan="2">
                    	<center><input type="submit" value="submit" name="submit" /></center>
                    </td>
                </tr> 
            </table></center>
            
        </form>
		<?php
		echo '<pre>';
		#var_dump($r);
		echo '</pre>';
		?>
     <?php $this->load->view('footer') ?>