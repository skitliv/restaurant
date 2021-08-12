
<style>
body{
    background-color: #000;
    color: #fff;
}

</style>
<h1>nada que decir</h1>
<?php
include 'php/header.php';

// kitchen update 
// $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$sql= ";  ";
$result =mysqli_query($conn,$sql);
$output = "  ";

function getData($result){

if (mysqli_num_rows($result)>0) {
	$output=' ';

	while ($row = mysqli_fetch_assoc($result)) {    

	
	
    
} // end of while that get everything

echo $output;
}else{
	echo 'Data not found';
}
echo 'por que chucha no vale';
}// end function get data

?> 


<?php
// $result =mysqli_query($conn,$sql);

?>