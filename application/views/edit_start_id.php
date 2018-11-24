  <?php $this->load->view('header') ?>
		<form action=" <?php echo site_url('Kseb/update_start_id'); ?>" method="post">
        	<center><table class="table table-bordered">
			<tr>
                	<td> misc</td>
					<td>
						<input type="text" name="misc" value="<?php echo $r->misc;?>" />
                    </td>
                </tr>
				 
            	<tr>
                	<td>ID:</td>
					<td>
						<input type="text" name="id"  disabled value="<?php  echo $r->id;?>" />
                    </td>
                </tr>
            	 
                <tr>
                	<td> dvdr</td>
					<td>
						<input type="text" name="dvdr" value="<?php    echo $r->dvdr;?>" />
                    </td>
                </tr>
                <tr>
                	<td>  time:</td>
					<td>
						<input type="text" name="time" value="<?php  echo $r->time; ?>"/>
                    </td>
                    
                </tr>  
				 <tr>
                	<td> days</td>
					<td>
						<input type="text" name="days" value="<?php  echo $r-> days;?>" />
                    </td>
                </tr>
                <tr>
                	<td>   offset</td>
					<td>
						<input type="text" name="offset" value="<?php  echo $r->offset;?>"/>
                    </td>
                    
                </tr>  
				 <tr>
                	<td> start id:</td>
					<td>
						<input type="text" name="start_id_this" value="<?php    echo $r->start_id_this;?>" />
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
		var_dump($r);
		echo '</pre>';
		?>
     <?php $this->load->view('footer') ?>