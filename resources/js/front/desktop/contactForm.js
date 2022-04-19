import {validator} from './validation.js';
import {popup} from './popup.js';

export let form = () => {

  let sendButton = document.getElementById("send-button");
  let form = document.getElementById("contact-form");
  
  sendButton.addEventListener("click" , () => {

    let validation = validator(form);
  
    validation.onSuccess(() => {

      let data = new FormData(form);

      //Condicional de valor no nulo para agregarlos al array de comentarios.
      if( ckeditors != 'null'){
          //Agregamos los comentarios y sus etiquetas de atributo name a cada posición del array con append()
          Object.entries(ckeditors).forEach(([key, value]) => {
              data.append(key, value.getData());
          });
      }

      //imprimimos en consola todos los datos del formulario.
      for (var pair of data.entries()) {
        console.log(pair[0]+ ', ' + pair[1]); 
      }

      //llamamos a la función que crea un mensaje de éxito.
      popup('success', 'Mensaje enviado correctamente');
      
    });

    validation.onFail( () => {

      ////llamamos a la función que crea un mensaje de fracaso.
      popup('error', 'Revise el formulario');
    
    });

  });

}