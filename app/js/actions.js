;(function () {
  "use strict";

  document.querySelector('.add-arrow-left-dropdown i.fa-chevron-left').addEventListener("click", function(){
    addArrowLeftDropdown();
  });

  document.querySelector('.add-arrow-left-dropdown i.fa-chevron-right').addEventListener("click", function(){
    addArrowRightDropdown();
  });

  function addArrowLeftDropdown() {
      document.querySelector('main').style.width = '70%';
      document.querySelector('section').style.width = '280px';
      document.querySelector('section .channels-fixed').style.right = '200px';
      document.querySelector('.add-arrow-left-dropdown').style.right = '5px';
      document.querySelector('i.fa-chevron-left').style.display = 'none'
      document.querySelector('i.fa-chevron-right').style.display = 'block'

  }

  function addArrowRightDropdown() {
      document.querySelector('main').style.width = '80%';
      document.querySelector('section').style.width = '5%';
      document.querySelector('section .channels-fixed').style.right = 'auto';
      document.querySelector('.add-arrow-left-dropdown').style.right = '95px';
      document.querySelector('i.fa-chevron-left').style.display = 'block'
      document.querySelector('i.fa-chevron-right').style.display = 'none'
  }

})();