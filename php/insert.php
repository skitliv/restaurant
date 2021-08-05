<?php
$var = 'hola';
if (isset($var)) {

include 'conn.php';
$rowsCounter =  mysqli_real_escape_string($conn,$_POST['rowsCounter']);
$rowsCounter1 = (int)$rowsCounter;
$employee = 5;
$subtotal = mysqli_real_escape_string($conn,$_POST['subtotal']);
$tableR =  mysqli_real_escape_string($conn,$_POST['tableR']);
$total =  mysqli_real_escape_string($conn,$_POST['total']);
	

// data from de rows




// send orders 
$misqldata = " INSERT INTO `order` (`iDemployee` , `table`,`subtotal` ,`total` ) VALUES  ( $employee , '$tableR','$subtotal' ,'$total' );";  
	mysqli_query($conn, $misqldata);

$lastOne = mysqli_insert_id($conn);	
// send order detalles


	for ($i=1; $i < $rowsCounter1 + 1 ; $i++) { 

		$hiddenDish = mysqli_real_escape_string($conn,$_POST['hiddenDish'.$i]);
        $seat =  mysqli_real_escape_string($conn,$_POST['seat'.$i]);	
        $cantidadInput =  mysqli_real_escape_string($conn,$_POST['cantidadInput'.$i]);
        $size =   mysqli_real_escape_string($conn,$_POST['size'.$i]);
        $totalRow =   mysqli_real_escape_string($conn,$_POST['totalRow'.$i]);

		$misqldata1 = "INSERT into orderdetails (IDdish,cantidad,size,priceT,iDorder)values($hiddenDish ,$cantidadInput,'$size',$totalRow,$lastOne);";  
		mysqli_query($conn, $misqldata1);
		
	}
	
	

} else{
	header("Location: ../index.php");
	exit();

} 




// $numberOfRowss = 3;
// $fields = ['cantidadInput','size'];
// $my_array1 = array();
// for ($i=1; $i < $numberOfRowss + 1 ; $i++) { 
// 	$options = 'option'. $i; 
// array_push($my_array1,mysqli_real_escape_string($conn,$_POST[$options]));
// }

// for ($i=0; $i < $numberOfRowss ; $i++) { 

// $misqldata = " INSERT INTO orderdetails (IDod,cantidad,size,priceT) VALUES
//  ($lastOne , $i+1, '$my_array1[$i]','$string1');";  
	
	
// 	mysqli_query($conn, $misqldata);	
// }
//  echo 'funciono';
// 	for ($i=0; $i < 3 ; $i++) { 
// 	 echo '<h1>'. $my_array1[$i] . '</h1>';
//  }





 echo <<<END
 Tabla numero $tableR Total sin taxes $subtotal total con taxes $total este fue la ultima id $lastOne <br> este es el rowscounter  $rowsCounter;
END;