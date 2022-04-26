import {popup} from './popup.js';

export let form = () => {

    let saveButton = document.getElementById("save-button");
    let forms = document.querySelectorAll(".admin-form");

    saveButton.addEventListener("click" , () => {

        forms.forEach( form => {
        


                let data = new FormData(form);

                //Condicional de valor no nulo para agregarlos al array de comentarios.
                if( ckeditors != 'null'){
                    //Agregamos los comentarios y sus etiquetas de atributo name a cada posición del array con append()
                    Object.entries(ckeditors).forEach(([key, value]) => {
                        data.append(key, value.getData());
                    });
                    //llamamos a la función que crea un mensaje de éxito.
                    popup('success', 'Usuario guardado correctamente');
                }else{
                    //llamamos a la función que crea un mensaje de fracaso.
                    popup('error', 'Revise el formulario');
                }
                //imprimimos en consola todos los datos del formulario.
                for (var pair of data.entries()) {
                    console.log(pair[0]+ ', ' + pair[1]); 
                }            
            });
        });
}