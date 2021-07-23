
let conProducts = document.querySelector(".conProductos");


conProducts.addEventListener('click', function(event) {
        let e = event.target;
	if (event.target.tagName == "IMG") {
        let objetivo = e.parentElement.parentElement; 
        if (objetivo.classList.contains("selected") ){
        objetivo.classList.remove("selected")
        } else {
            objetivo.classList.add('selected');
        }      
        
	};
},true);


$('a').on('click', function(){
        var target = $(this).attr('rel');
        $("#"+target).show().siblings("div").hide();
     });