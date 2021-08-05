// control del boton que añade ordenes a la forma #enviar 
// calculadora
console.log('Aqui esta la calculadora');
console.log('js/settings.js');


let contador = 0;
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
        contador = ++contador;
        let contenedor = e.closest('.conItem');
        let precio = Number(contenedor.querySelector('.pprice').textContent) ;
        let nombre = '<td>' + contenedor.querySelector('.nombreProduct').textContent + "</td>";
        let precioCon = '<td class = "precioTD">' + precio + "</td>";
        let hiddenDish = Number(contenedor.querySelector('.hiddenDish').value);
        let cantidadInput = `<td><input name = "cantidadInput${contador}" type="number" value = "1" class = "cantidadInput" onchange="suma(event)" > </td>`;

        let size = `<td><select name="size${contador}" id="size"  >
        <option value="pequeño">Pequeño</option> 
        <option value="Madiano">Medium</option>      
        <option value="Grande">Grande</option>       
        </select>
         </td>  `;
        let detalles = '<td><input type= "text" value = "something" name = "detalles"></td>';
        let totalRow = `<td > <input name = "totalRow${contador}" class = "totalRow" type = "number"
         value = "${precio}" readonly></td>`;    
        let seat = `<td> <input type = "number" name = "seat${contador}" > </td>`;
        let IDdish = `<input type = "hidden" name = "hiddenDish${contador}" value = "${hiddenDish}"> `;
        let trParent = document.getElementById('trParent');
        let newElement = document.createElement('TR');
        newElement.innerHTML =`${IDdish}  ${nombre}  ${cantidadInput}  ${size}  ${seat}
         ${detalles}  ${precioCon}  ${totalRow}`;
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
    e.parentNode.parentNode.querySelector('.totalRow').value = parseFloat( precio * cantidad).toFixed(2);
    sumT();

}

// suma de todo

function sumT() {
let rowsCounter= 0;
    var TotalValue = 0;
    $(".totalRow").each(function(index,value){
      
      currentRow = parseFloat($(this).val());
      TotalValue += currentRow;
      ++rowsCounter;
      document.getElementById('rowsCounter').value = rowsCounter;  
    });


    document.getElementById('totality').value = TotalValue;
    let tax = textContent = TotalValue + TotalValue * 0.06;
    document.getElementById('totalTax').value = parseFloat(tax).toFixed(2);
};



sumT();

































