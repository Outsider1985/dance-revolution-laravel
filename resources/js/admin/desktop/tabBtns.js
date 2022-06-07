export let tabBtns = () => {

  let tabBtns = document.querySelectorAll('.form-tab');
  let tabContents = document.querySelectorAll('.tab-content');

  tabBtns.forEach(tabBtn => {

    tabBtn.addEventListener('click', function(){

      let tabTriggerData = tabBtn.dataset.tabtrigger;

      tabBtns.forEach( tabBtn => {

        tabBtn.classList.remove('is_selected');
      
      });
      
      tabContents.forEach( tabContent => {
      
        tabContent.classList.remove('is_active');
        
      });
      
      document.querySelector('.form-tab[data-tabtrigger="' + tabTriggerData + '"]').classList.add('is_selected');
      document.querySelector('.tab-content[data-tabcontent="' + tabTriggerData + '"]').classList.add('is_active');

    });
  });

}