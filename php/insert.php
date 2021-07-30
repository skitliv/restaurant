<?php
$var = 'hola';
if (isset($var)) {

include 'conn.php';
$employee = 5;

$subtotal = mysqli_real_escape_string($conn,$_POST['subtotal']);
$totalTax =  mysqli_real_escape_string($conn,$_POST['totalTax']);
$tableR =  mysqli_real_escape_string($conn,$_POST['tableR']);
$seat =  mysqli_real_escape_string($conn,$_POST['seat']);
	
$misqldata = " INSERT INTO `order` (`iDemployee` , `table`, `seat` ) VALUES  ( $employee , '$tableR' ,'$seat');";  
	mysqli_query($conn, $misqldata);
	
} else{
	header("Location: ../index.php");
	exit();

} 

 echo <<<END
 $tableR todo un exito $seat $subtotal $totalTax 
END;