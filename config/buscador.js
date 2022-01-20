const productos = [
  {nombre: 'Zephyrus Duo 15', Sale:2700000},
  {nombre: 'Asus ROG Strix G15', Sale:1399999},
  {nombre: 'Zenbook Pro Duo', Sale:900000},

]

const formulario =document.querySelector('#formulario');
const boton = document.querySelector('#boton');
const resultado = document.querySelector('#resultado');

const filtrar = ()=>{
  resultado.innerHTML = '';

  const texto = formulario.value.toLowerCase();
         for(let producto of productos) {
          let nombre = producto.nombre.toLowerCase();
          if(nombre.indexOf(texto) !== -1) {
            resultado.innerHTML += `
            <li>${producto.nombre} - Sale: ${producto.Sale}</li> `

          }
        }


        if(resultado.innerHTML === '') {
          resultado.innerHTML += `
          <li>Producto No Disponible</li> `

        }

}

boton.addEventListener('click', filtrar);
formulario.addEventListener('keyup', filtrar)

filtrar();
