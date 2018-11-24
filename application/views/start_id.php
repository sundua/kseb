  <?php $this->load->view('header') ?>
	    
	 
		<form action=" <?php echo site_url('Kseb/insertdata'); ?>" method="post">
        	 
            <center><table  class="table table-bordered">
            <thead>
            	
                <th> Misc</th>
                <th> Dvdr</th>
                <th> Time</th>
                <th>days</th>
				<th> offset</th>
                <th> start id</th>
				
                <th>ID</th>
				<th>action</th>
            </thead>
            <tbody>
					<?php 
						foreach($this->KsebModel->viewstart_id() as $row)
						{
							echo "<tr>
								<td> $row->misc </td>
								<td> $row->dvdr </td>
								<td> $row->time </td>
								<td> $row->days</td>
								<td> $row->offset </td>
								<td> $row->start_id_this </td>
								<td> $row->id </td>
                                <td><a href='".site_url('Kseb/edit_start_id/'.$row->id)."'>Edit</a></td>
								</tr>";
                    
						}
					
					?>
            </tbody>
            </table></center>
        </form>
     <?php $this->load->view('footer') ?>