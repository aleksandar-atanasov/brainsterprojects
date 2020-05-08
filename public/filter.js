let categoryFilter = document.getElementsByClassName('categoryFilter');
let timeFilters = document.getElementsByClassName('timeFilter');
let groupFIlters = document.getElementsByClassName('groupFilter');
let searchBtn = document.getElementById('searchBtn');
let cardsContainer = document.getElementsByClassName('cards-container');
let allInputButton = document.getElementById('all');


allInputButton.addEventListener('change', function(e){
   if(e.target.checked !== true){
    e.target.parentElement.style.backgroundColor = 'white';
    e.target.parentElement.style.color = '#520081';
   }else{
    e.target.parentElement.style.backgroundColor = '#520081';
    e.target.parentElement.style.color = 'white'; 
   }
    
})
for (let i = 0; i < categoryFilter.length; i++) {
    categoryFilter[i].addEventListener('click', function (e) {

        if (e.target.defaultValue != 'All') {
            document.getElementById('all').defaultChecked == false;
            e.target.parentElement.style.backgroundColor = '#520081';
            e.target.parentElement.style.color = 'white';
            if (e.target.checked == true) {
                e.target.checked == false;
               
            } else {
                e.target.checked == true;
                e.target.parentElement.style.backgroundColor = 'white';
                e.target.parentElement.style.color = '#520081';
            }
        }
    })
}
for (let i = 0; i < timeFilters.length; i++) {
    timeFilters[i].addEventListener('click', function (e) {
        if (e.target.checked == true) {
            e.target.checked == false;
            e.target.parentElement.style.backgroundColor = '#520081';
            e.target.parentElement.style.color = 'white';
        } else {
            e.target.checked == true;
            e.target.parentElement.style.backgroundColor = 'white';
            e.target.parentElement.style.color = '#520081';
        }
    })
}
for (let i = 0; i < groupFIlters.length; i++) {
    groupFIlters[i].addEventListener('click', function (e) {
        if (e.target.checked == true) {
            e.target.checked == false;
            e.target.parentElement.style.backgroundColor = '#520081';
            e.target.parentElement.style.color = 'white';
        } else {
            e.target.checked == true;
            e.target.parentElement.style.backgroundColor = 'white';
            e.target.parentElement.style.color = '#520081';
        }
    })
}
let errorDiv = document.createElement('div');
errorDiv.setAttribute('class','col-md-12');
errorDiv.style.color = "white";
errorDiv.style.textAlign = "center";
errorDiv.style.marginBottom = "50vh";
errorDiv.innerHTML = `
<h2><i class="fas fa-exclamation-triangle"></i>
Не беа пронајдени резултати што соодвестуваат на вашето пребарување!
Обидете се повторно..</h2>

`
searchBtn.addEventListener('click', function(e){
    let selectedCategories = []
    let selectedTime = []
    let selectedGroupSize = []
    let activeCategories = document.querySelectorAll('.categoryFilter:checked');
    let activeTime = document.querySelectorAll('.timeFilter:checked');
    let activeGroupSize = document.querySelectorAll('.groupFilter:checked');

    for(let i =0; i<activeCategories.length; i++){
        selectedCategories.push(activeCategories[i].value)
    }
    for(let i =0; i<activeTime.length; i++){
        selectedTime.push(activeTime[i].value)
    }

    for(let i =0; i<activeGroupSize.length; i++){
        selectedGroupSize.push(activeGroupSize[i].value)
    }

  let allCards = document.getElementsByClassName('cards-column')
    for(let i =0; i<allCards.length; i++){

        allCards[i].classList.remove('hidden')
        let category = allCards[i].getElementsByClassName('category')[0].innerHTML;
        let timeFrame = allCards[i].getElementsByClassName('time-length')[0].innerHTML;
        let groupSize = allCards[i].getElementsByClassName('group-size')[0].value;
        
    
        if(selectedCategories.length > 0 && selectedCategories.indexOf('All') == -1 && selectedCategories.indexOf(category) == - 1){
            allCards[i].classList.add('hidden')
        }
        if(selectedTime.length > 0 && selectedTime.indexOf(timeFrame) == - 1){
            allCards[i].classList.add('hidden')
        }
        if(selectedGroupSize.length > 0 && selectedGroupSize.indexOf(groupSize) == - 1){
            allCards[i].classList.add('hidden')
        }
        if(selectedCategories.length > 0 && selectedCategories.indexOf('All') == -1 && selectedCategories.indexOf(category) == - 1
        || selectedTime.length > 0 && selectedTime.indexOf(timeFrame) == - 1 &&selectedGroupSize.length > 0 && selectedGroupSize.indexOf(groupSize) == - 1){
            cardsContainer[0].appendChild(errorDiv); 
        }
    }
})
