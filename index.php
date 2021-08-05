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
      <th>Seat</th>
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
      <th>Total</th>
      <th>+ Inpuesto 6%</th>
      
    </tr>
   </thead>
   <tbody id="totalAbs">
    <tr>
        <td><input type="text" id="totality" name="subtotal" readonly="readonly"></td>
        <td><input type="text" id="totalTax" name="total" readonly="readonly"></td>
        <input type="number" id="tableR" name="tableR" value = '' placeholder="Mesa" >
        <input type="hidden" id="rowsCounter" name="rowsCounter" value = ''>
    </tr>
     
  </tbody>
</table>

<button class="custom-btn btn-16" type="submit" id="submit" >submit </button> 

    </form>
</section>
<section id="envioAnuncio">


</section>

</div>



<?php
include 'php/footer.php';
 ?>