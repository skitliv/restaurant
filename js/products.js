
let secProducts = document.querySelector(".secProducts");


secProducts.addEventListener('click', function(event) {
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


let secondMenu = document.querySelector(".secondMenu ul");
secondMenu.addEventListener('click', function(event) {
        let e = event.target;
	if (event.target.tagName == "BUTTON") {
        let target = e.getAttribute("rel");
        $("#"+target).show().siblings("div").hide();
        console.log(target);
	};
},true);

document.getElementById('PlatoFuerte').style.display = 'block';