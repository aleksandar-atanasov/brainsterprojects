let search = document.getElementById("search");
let energizersDiv = document.getElementsByClassName("energizers");
// console.log(energizersDiv);

let energizers = document.getElementById("energizers");
energizers.addEventListener("change", function (e) {
  if (e.target.checked) {
    energizersDiv[0].classList.add("active");
  }
});
