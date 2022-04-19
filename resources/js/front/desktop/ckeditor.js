import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export let ckeditor = () => {

    window.ckeditors = []; //Array para guardar los comentarios.

    document.querySelectorAll('.ckeditor').forEach(ckeditor => {

        ClassicEditor.create(ckeditor, {
           
            toolbar: {
                items: [
                    'bold',
                    'italic',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'blockQuote',
                    'undo',
                    'redo'
                ]
            },
            language: 'es',
            licenseKey: 0,
        })
        .then( classicEditor => {
            ckeditors[ckeditor.name] = classicEditor; //Agregamos a cada comentario su etiqueta de name.
        })
        .catch( error => {
            console.error(error);
        } );
    });

}