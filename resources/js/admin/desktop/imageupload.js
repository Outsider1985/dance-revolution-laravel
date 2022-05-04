export let imageUpload = () => {

    let chooseFiles = document.querySelectorAll('.choose-file');
    
    chooseFiles.forEach(chooseFile => {

        chooseFile.addEventListener("change", () => {

            const files = chooseFile.files[0];
    
            if(files) {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(files);
    
                fileReader.addEventListener("load", () => {
                    chooseFile.closest('.image-selector').querySelector('.image-svg').classList.add('hidden');
                    chooseFile.closest('.image-selector').querySelector('.image').src = fileReader.result;
                });    
            }
        });
    })

}
