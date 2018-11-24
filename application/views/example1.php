  <?php $this->load->view('header') ?>
 <div id="container">
  <center><h1> watts</h1></center>
  <div id="body">
<?php
echo '<pre>';
//var_dump($results[0]);
echo '</pre>';
 echo '<center><table  class="table table-bordered"> ';
foreach($results as $data) {
    echo "<tr><td>".$data->unit . " </td><td> " . $data->date . " </td><td> " .  $data->hour . "</td><td> " . $data->min ."</td><td>".  $data->utc . "</td><td>  " . $data->unitreadtime . "</td></tr>";
} 
 echo '</center></table> ';
?>
   <p><?php echo $links; ?></p>
  </div>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
 </div>
  <?php $this->load->view('footer') ?>

 