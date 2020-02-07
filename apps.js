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


document.querySelector("#show-it").addEventListener("change", handleIT); 
document.querySelector("#show-design").addEventListener("change", handleDesign); 
document.querySelector("#show-marketing").addEventListener("change", handleMarketing);
            
function handleIT() {
    if(document.querySelector("#show-it").checked) {
        document.querySelector("#show-design").checked = false;
        document.querySelector("#show-marketing").checked = false;

    }

        handle();
    }
function handleMarketing() {
    if(document.querySelector("#show-marketing").checked) {
       document.querySelector("#show-design").checked = false;
       document.querySelector("#show-it").checked = false;
}

        handle();

    }

function handleDesign() {
    if(document.querySelector("#show-design").checked) {
      document.querySelector("#show-marketing").checked = false;
      document.querySelector("#show-it").checked = false;
  }

      handle();

   }

function handle() {
    hideAll();
    var counter = 0;
    if(document.querySelector("#show-it").checked) {
                    showByCategory(".it");
                    counter++;
                }
    if(document.querySelector("#show-design").checked) {
                    showByCategory(".design");
                    counter++;
                }

    if(document.querySelector("#show-marketing").checked) {
                    showByCategory(".marketing");   
                    counter++;
                }

    if(counter == 0) {
                    showByCategory(".card");
                }
                
            }

function hideAll() {

    var allCards = document.querySelectorAll(".card");
    var i = 0;
    while(i < allCards.length) {
         allCards[i].style.display = "none";
        i++;
}

}

function showByCategory(category) {
        var cards = document.querySelectorAll(category);
        i = 0;
        while(i < cards.length) {
        cards[i].style.display = "block";
        i++; 
    }
    
}
