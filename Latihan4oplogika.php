<?php
$true = 1;
$false = 0;
$A= true;
$B= false;
//variabel $C benilai false 
$C = $A && $B;
printf ("%B && %B = %B", $A,$B,$C );
echo "<hr>";
//variabel $C true
$C = $A || $B;
printf("$B || $B = $B", $A,$B,$C);
echo "<hr>";
//variabel $C benilai false 
$C = !$A;
printf ("!%B=%B", $A,$C );
echo "<hr>";
?>
