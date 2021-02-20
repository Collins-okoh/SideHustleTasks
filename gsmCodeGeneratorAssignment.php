<?php 

mt_srand(10);

$counter = 0;
    
while ($counter <= 210) {
    echo random_int(1000000000,9999999999). "<hr width='30%'; align='left'>";
    $counter++;
}
?>