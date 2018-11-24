<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 
echo'<pre>';
echo $count;
echo '<br>';
echo 'Units consumed ';
echo $unitscons;
echo '<br>';

echo ' startdate ';
echo $startdate;
echo '<br>';
echo ' max_ date ';
echo $maxdate;
echo '<br>';
echo ' date span = ';
echo $datespan;
echo '<br>';
echo ' Average = ';
echo number_format($average,2);
echo '<br>';
for($j=$count-1;$j>0;$j--)
{
echo $unitdiff[$j];
echo '  -  ';
echo $resultdate[$j];
echo '<br>';
} 
// var_dump($unitdiff);
// var_dump($resultdate);
 
  
?>