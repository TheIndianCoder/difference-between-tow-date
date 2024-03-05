<?php 
$datea = "2024-03-05";
$dateb = "2024-03-10";

$date1 = new DateTime($datea);
$date2 = new DateTime($dateb);
$interval = $date1->diff($date2);
echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 

// shows the total amount of days (not divided into years, months and days like above)
echo "difference " . $interval->days . " days ";
?>
