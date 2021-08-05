<?php
include 'php/conn.php';
include 'php/header.php';
// $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$sql= "SELECT * FROM menu order by category";
$result =mysqli_query($conn,$sql);
$check = 'some';
$end = '';
if (mysqli_num_rows($result)>0) {
	$output=' ';
	$output.='  ';
	while ($row = mysqli_fetch_assoc($result)) {      
        if ($check != $row['category']) {
            $output.= $end;
            $string = str_replace(' ', '', $row["category"]);
            $output .= '<div class="categorias Postres" style="display: none;" id="'.$string.'">';    
            $output .= '<h2> '. $row['category']  .' </h2>';     
            $output .= '<div class="conProductos" >';     
            $end = ' </div> </div> ';           
        }
            // product
            $output .= '
            <div class="conItem">
            <input type ="hidden" class = "hiddenDish" value= '.$row["idDish"].' >
            <div class="itemName"> <p class="nombreProduct"> '.$row["name"] .' </p>  <p class = "pprice" >'. $row['price'] .' </p> </div> 
            <div class="productImg"> <img src="img/productos/'.$row["img"] .'.jpg" alt="">  </div>
           
            <div class="itemExpand">
                <div class="simpleView"></div>
                <div class="advanceView"></div>
            </div>
           <div> <button class="custom-btn btn-16 btnSet"><i class="fas fa-cog btnSet"></i>  </button> <button class="custom-btn btn-16 enviarBtn"> Enviar </button>
           </div>
            </div>  
            ';


            // product

     $check = $row["category"]; // revisa el nombre de la categoria para organizar los //divs
      
        
} // end of while that get everything

echo $output;
}else{
	echo 'Data not found';
}
?> 