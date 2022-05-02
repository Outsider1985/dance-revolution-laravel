export let elementEdit = () => {

    let editBtns = document.querySelectorAll('.edit-button');
    let deleteWarningBox = document.getElementById("delete-warning-box");
    let cancelButton = document.getElementById("cancel-button");

    editBtns.forEach(editBtn => {

        editBtn.addEventListener("click", () => {

            deleteWarningBox.classList.add("is_displayed");

        });

        cancelButton.addEventListener("click", () => {

            deleteWarningBox.classList.remove("is_displayed");

        });
    });
}