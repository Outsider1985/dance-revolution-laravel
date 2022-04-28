export let filter = () => {

    let filterButton = document.getElementById("filter-button");
    let filterMenu = document.getElementById("filter-menu");

    filterButton.addEventListener("click", () => {

        filterMenu.classList.toggle("is_shown");

    });

}