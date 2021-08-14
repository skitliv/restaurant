<?php


// kitchen update 
include 'conn.php';
// $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$page =  mysqli_real_escape_string($conn,$_POST['myData']);
$page1 =  'Plato Fuerte';


$sqlGen= "SELECT IDorder, category,  m.name as nombre, m.img as imagen , od.size , od.Detalles , img , od.status as status FROM menu m
JOIN orderdetails od using(IDdish) order by IDorder desc ;";


$sqlPos= "SELECT IDorder, category,  m.name as nombre, m.img as imagen , od.size , od.Detalles , img , od.status as status FROM menu m
JOIN orderdetails od using(IDdish) where category = '$page1;olk' order by IDorder desc ;";

$result =mysqli_query($conn,$sqlGen);
$resultPos =mysqli_query($conn,$sqlPos);

$check = 'some';


function genData($result){

if (mysqli_num_rows($result)>0) {
	$output='<li class="table-header">
	<div class="col col-1">Img</div>
	<div class="col col-1">Id order</div>
	<div class="col col-3">Name</div>
	<div class="col col-4">Category</div>
	<div class="col col-4"> Status</div>
	<div class="col col-4"> Tiempo</div>
              </li> ';

	while ($row = mysqli_fetch_assoc($result)) {    

		$evenOdd = ($row['IDorder'] % 2 === 0)? 'odd' : 'even' ;
		// if ($row['IDorder'] % 2 === 0) {
		// 	$evenOdd = 'even';
		// }	 else {
		// 	$evenOdd = 'odd'
		// };
	$output.="<li class='table-row " .$evenOdd. "'>";	
	 
	 switch ($row['status']) {
		 case 1:
		$estado = 'Empezado';
			 break;
		 case 2:
		$estado = 'Terminado';
					 break;	 
		 default:
			 
		$estado = 'Ordenado';

			 break;
	 };	
	$output.=  
	"<div class='col col-1' data-label='Job Id'> <img src='img/productos/".$row['img'].".jpg'></div>"
	."<div class='col col-2' data-label='DishId'> ".$row['IDorder']."</div>"
	."<div class='col col-3' data-label='Job Id'> ".$row['nombre'] . "</div>"
	."<div class='col col-4' data-label='Job Id'> ". $row['category'] . "</div>"
	."<div class='col col-2' data-label='Job Id'> ". $estado . "</div>"
	."<div class='col col-2' data-label='Job Id'> ". $estado . "</div>"
	 ;
	 $output.='</li>'; 
    
} // end of while that get everything

echo $output;
}else{
	echo 'Data not found';
}
echo 'por que chucha no vale';
}// end function get data



function posData($result){

	if (mysqli_num_rows($result)>0) {
		$output='<li class="table-header">
		<div class="col col-1">Img</div>
		<div class="col col-1">Id order</div>
		<div class="col col-3">Name</div>
		<div class="col col-4">Category</div>
		<div class="col col-4"> Status</div>
		<div class="col col-4"> Tiempo</div>
				  </li> ';
	
		while ($row = mysqli_fetch_assoc($result)) {    
	
			$evenOdd = ($row['IDorder'] % 2 === 0)? 'odd' : 'even' ;
			// if ($row['IDorder'] % 2 === 0) {
			// 	$evenOdd = 'even';
			// }	 else {
			// 	$evenOdd = 'odd'
			// };
		$output.="<li class='table-row " .$evenOdd. "'>";	
		 
		 switch ($row['status']) {
			 case 1:
			$estado = 'Empezado';
				 break;
			 case 2:
			$estado = 'Terminado';
						 break;	 
			 default:
				 
			$estado = 'Ordenado';
	
				 break;
		 };	
		$output.=  
		"<div class='col col-1' data-label='Job Id'> <img src='img/productos/".$row['img'].".jpg'></div>"
		."<div class='col col-2' data-label='DishId'> ".$row['IDorder']."</div>"
		."<div class='col col-3' data-label='Job Id'> ".$row['nombre'] . "</div>"
		."<div class='col col-4' data-label='Job Id'> ". $row['category'] . "</div>"
		."<div class='col col-2' data-label='Job Id'> ". $estado . "</div>"
		."<div class='col col-2' data-label='Job Id'> ". $estado . "</div>"
		 ;
		 $output.='</li>'; 
		
	} // end of while that get everything
	
	echo $output;
	}else{
		echo 'Data not found';
	}
	echo 'por que chucha no vale';
	}// end function get data
	

if ($page=='General') {	
	genData($result);
} elseif($page=='Postres'){
	posData($resultPos);

}


?> 

