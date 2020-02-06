const navSlide = () => {
    const hamburger = document.querySelector('.hamburger-menu'); 
    const navbar = document.querySelector('.navbar-links');
    const navLinks = document.querySelectorAll('.navbar-links li');
    

    hamburger.addEventListener('click', () =>{

        navbar.classList.toggle('navbar-active');

        hamburger.classList.toggle('toggle');


        navLinks.forEach((link, index) => {
            if(link.style.animation) {
                link.style.animation = ''
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
            }
        });

    });

}
navSlide();

let myListItems = document.querySelectorAll('.projects-nav');



function setActive(type, element) {

    let isActive = element.classList.contains('active');

    let myActiveItem = document.querySelector('.projects-nav.active');


    if (myActiveItem) { myActiveItem.classList.remove('active'); };
    switch (type) {
        case 'marketing':
            if (isActive) {
                myListItems[0].classList.remove('active');
            } else {
                myListItems[0].classList.add('active');
            }
            break;
        case 'development':
            if (isActive) {
                myListItems[1].classList.remove('active');
            } else {
                myListItems[1].classList.add('active');
            }
            break;
        case 'design':
            if (isActive) {
                myListItems[2].classList.remove('active');
            } else {
                myListItems[2].classList.add('active');
            }
            break;
    }
}
