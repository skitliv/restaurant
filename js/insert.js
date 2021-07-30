// $.ajax({  
//     url:"php/insert.php",  
//     method:"POST",  
//     data:$('#submitOrder').serialize() ,   
//     success:function(data){  
//          $('#form3').trigger("reset");                            
//     }  
// });
// ////////// otro metodo
// jQuery.ajax({
// url: '/some/endpoint.php',
// method: 'GET',
// data: $('#the-form').serialize()
// }).done(function (response) {
// // Do something with the response
// }).fail(function () {
// // Whoops; show an error.
// });  
console.log('js/insert.js');

$('#submit').click(function(event) {
	let e = event;
$.ajax({  
                     url:"php/insert.php",  
                     method:"POST",  
                     data:$('#submitOrder').serialize(),   
                     success:function(data){  
                          $('#submitOrder').trigger("reset");
                          $('#envioAnuncio').html(data);                            
                     }  
                }); 

	e.preventDefault();
});// btn click
