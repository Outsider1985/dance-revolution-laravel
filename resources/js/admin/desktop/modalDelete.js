export let renderModalDelete = () => {

    let modalDelete = document.querySelector('.delete-warning-box');
    let deleteConfirm = document.getElementById('delete-confirmation-button');
    let deleteCancel = document.getElementById('delete-cancel-button');
    let overlay = document.querySelector('.overlay');

    document.addEventListener("openModalDelete",( event =>{
        
        deleteConfirm.dataset.url = event.detail.url;
        modalDelete.classList.add('is_displayed');
        overlay.classList.add('blur');
    }));

    deleteCancel.addEventListener("click", () => {
        modalDelete.classList.remove('is_displayed');
        overlay.classList.remove('blur');
    });

    deleteConfirm.addEventListener("click", () => {

        let url = deleteConfirm.dataset.url;

        console.log(url);
    
        let sendDeleteRequest = async () => {

            let response = await fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                },
                method: 'DELETE', 
            })
            .then(response => {
                          
                if (!response.ok) throw response;

                return response.json();
            })
            .then(json => {

                if(json.table){
                    document.dispatchEvent(new CustomEvent('loadTable', {
                        detail: {
                            table: json.table,
                        }
                    }));
                }

                document.dispatchEvent(new CustomEvent('loadForm', {
                    detail: {
                        form: json.form,
                    }
                }));

                modalDelete.classList.remove('is_displayed');

                document.dispatchEvent(new CustomEvent('renderFormModules'));
                document.dispatchEvent(new CustomEvent('renderTableModules'));
                overlay.classList.remove('blur');

                // document.dispatchEvent(new CustomEvent('stopWait'));
                document.dispatchEvent(new CustomEvent('message', {
                    detail: {
                        message: json.message,
                        type: 'success'
                    }
                }));
            })
            .catch(error =>  {

                // document.dispatchEvent(new CustomEvent('stopWait'));

                if(error.status == '500'){
                    console.log(error);
                };
            });
        };

        sendDeleteRequest();
    });   
}