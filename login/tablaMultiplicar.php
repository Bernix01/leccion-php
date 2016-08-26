<?php
for($i=2;$i<11;$i++){
	echo"Tabla del $i";
	echo"<br>";
	echo "<table border=1>";
	for($j=0;$j<13;$j++){
           echo "<tr>";
	   echo "<td> $i";
	   echo "</td>";
 	   echo "<td> x";
	   echo "</td>";
 	   echo "<td>$j";
	   echo "</td>";
	   echo "<td>=";
 	   echo "</td>";
	   echo "<td>".($i*$j);
 	   echo "</td>";
           echo"</tr>";
	   
}
        echo "</table>";
}
?>
