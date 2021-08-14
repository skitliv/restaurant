console.log('funciono soy kitUpdate');
let myVar = "Postres";
function runer() {
    setInterval(() => {
        $.ajax({
            url: "php/searchKitchen.php",
            type: "POST",
            data:{"myData":myVar}
          }).done(function(data) {
              $("#orderTable").html(data); 
              console.log('ahi algo nuevo');
          });    
    }, 2000);
        
}

runer();
