export let elementDelete = () => {

    let deleteBtns = document.querySelectorAll('.delete-button');
    let deleteWarningBox = document.getElementById("delete-warning-box");
    let cancelButton = document.getElementById("cancel-button");

    deleteBtns.forEach(deleteBtn => {

        deleteBtn.addEventListener("click", () => {

            deleteWarningBox.classList.add("is_displayed");

        });

        cancelButton.addEventListener("click", () => {

            deleteWarningBox.classList.remove("is_displayed");

        });
    });
}