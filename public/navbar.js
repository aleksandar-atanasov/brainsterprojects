const menu = document.querySelector(".games .menu-wrapper");
function changeMenuColorEventHandler() {
  if (
    document.body.scrollTop > 200 ||
    document.documentElement.scrollTop > 200
  ) {
    menu.style.backgroundColor = "#520081";
  } else {
    menu.style.backgroundColor = "transparent";
  }
}
if (menu !== null) {
  window.addEventListener("scroll", changeMenuColorEventHandler);
}
const hamburger = document.querySelector(".hamburger-menu");
const navbar = document.querySelector(".nav-mobile");
const navLinks = document.querySelectorAll(".navbar-links li");
const closeNav = document.querySelector(".close-nav");

function navbarActiveEventHandler() {
  navbar.classList.add("navbar-active");
  hamburger.classList.add("toggle");
  closeNav.classList.add("close-nav-active");
}

function navbarRemoveActiveEventHandler() {
  navbar.classList.remove("navbar-active");
  hamburger.classList.remove("toggle");
  closeNav.classList.remove("close-nav-active");
}

function linksFadeEventHandler() {
  navLinks.forEach((link, index) => {
    if (link.style.animation) {
      link.style.animation = "";
    } else {
      link.style.animation = `navLinkFade 0.5s ease forwards ${
        index / 7 + 0.3
      }s`;
    }
  });
}
hamburger.addEventListener("click", navbarActiveEventHandler);
hamburger.addEventListener("click", linksFadeEventHandler);
closeNav.addEventListener("click", navbarRemoveActiveEventHandler);
closeNav.addEventListener("click", linksFadeEventHandler);

let filterContainer = document.querySelector('.filtersContainer');
let filterBtn = document.querySelector('.filterBtn');
let filterBtnContainer = document.querySelector('.filters-button');
let searchFilter = document.querySelector('#searchBtn');
let body = document.getElementsByTagName('body');
  

function filtersActiveEventHandler(){
  filterContainer.classList.add('filters-active');
}

function removeActiveFiltersEventHandler(){
  if(filterContainer.classList.contains('filters-active')){
    filterContainer.classList.remove('filters-active');

  }
}
filterBtn.addEventListener('click', filtersActiveEventHandler);
searchFilter.addEventListener('click', removeActiveFiltersEventHandler);


