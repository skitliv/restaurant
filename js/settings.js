// control del boton que añade ordenes a la forma #enviar 
// calculadora
console.log('Aqui esta la calculadora');
console.log('js/settings.js');
let secProducts1 = document.querySelector('.secProducts');
secProducts1.addEventListener('click',function (event) {
    let e = event.target;
    if (e.classList.contains('btnSet')) {
        let choosen = e.closest('.conItem').querySelector('.itemExpand .simpleView');
        
        if (choosen.innerHTML == '') {
            choosen.innerHTML = 'Large Medium Small';
        } else {
            choosen.innerHTML = '';
        }

    } else if (e.tagName == 'BUTTON' &&  e.classList.contains('enviarBtn'))  {
        let contenedor = e.closest('.conItem');
        let precio = contenedor.querySelector('.pprice').textContent ;
        let nombre = '<td>' + contenedor.querySelector('.nombreProduct').textContent + "</td>";
        let precioCon = '<td class = "precioTD">' + precio + "</td>";
        let cantidad = '<td><input name = "cantidadInput" type="number" value = "1" class = "cantidadInput" onchange="suma(event)" > </td>';
        let tamaño = `<select name="cars" id="cars">
        <option value="Pequeño">Pequeño</option> 
        <option value="Madiano" selected>Medium</option>      
        <option value="Grande">Grande</option>       
        </select>
         </td>  `;
        let detalles = '<td>Sin cebollini</td>';
        let totalRow = '<td class = "totalRow"> '+ precio + '</td>';    
        

        let trParent = document.getElementById('trParent');
        let newElement = document.createElement('TR');
        newElement.innerHTML = nombre + cantidad + tamaño + detalles + precioCon + totalRow;
        trParent.append(newElement);
      sumT();
     } // else if button &&
    

},true);

// calculadora


function suma(event) {
    let e = event.target;
    // console.log(e.value);
    let cantidad = parseFloat(e.value).toFixed(2);
    let precio = parseFloat(e.parentNode.parentNode.querySelector('.precioTD').textContent).toFixed(2);
    e.parentNode.parentNode.querySelector('.totalRow').textContent = parseFloat( precio * cantidad).toFixed(2);
    sumT();

}

// suma de todo

function sumT() {

    var TotalValue = 0;

    $(".totalRow").each(function(index,value){
      currentRow = parseFloat($(this).text());
      TotalValue += currentRow
    });

    document.getElementById('totality').innerHTML = TotalValue;

};

sumT();

































