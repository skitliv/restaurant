<?php 
include 'php/header.php';
?>

<header>
    <nav>

    </nav>
</header>
<div class="container">
    <section class="secondMenu" >
        <nav>
            <ul>
            <button class="custom-btn btn-16" rel= 'PlatoFuerte' id="dishShow" >Platos Fuerte </button>
            <button class="custom-btn btn-16" rel= 'Postres'>Postres </button> 
            <button class="custom-btn btn-16" rel= 'Sides'>Sides </button> 

            </ul>
        </nav>
    </section>

    <!-- section the productos -->
<section class="secProducts">
<?php
include 'dishCategorias.php';

?>
</section>
<section class="submitSection">
    <form action="" id="submitOrder">
    <table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Cantidad</th>
      <th>Tamaño</th>
      <th>Detalles</th>
      <th>Precio por unidad</th>
      <th>Total</th>
    </tr>
   </thead>
   <tbody id="trParent">

     
  </tbody>
</table>

<!-- informacion total table  -->
<table>
  <thead>
    <tr>
      <th>Total absoluto</th>
      
    </tr>
   </thead>
   <tbody id="totalAbs">
    <tr>
        <td id="totality">1000</td>
    </tr>
     
  </tbody>
</table>


    </form>
</section>


</div>



<?php
include 'php/footer.php';
 ?>