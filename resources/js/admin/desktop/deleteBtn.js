export let elementDelete = () => {

    let deleteButton = document.getElementById("delete-button");
    let deleteWarningBox = document.getElementById("delete-warning-box");
    let deleteConfirmationButton = document.getElementById("cancel-button");

    deleteButton.addEventListener("click", () => {

        deleteWarningBox.classList.add("is_displayed");

    });

    deleteConfirmationButton.addEventListener("click", () => {

        deleteWarningBox.classList.remove("is_displayed");

    });

}