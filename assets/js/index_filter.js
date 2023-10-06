/*
* Filter home page
*/
var btns = document.getElementsByClassName("btn");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";

    var filterValue = this.dataset.filter;
    var items = document.getElementsByClassName("item");
    if (filterValue == "all") {
      for (var j = 0; j < items.length; j++) {
        items[j].style.display = "block";
      }
    } else {
      for (var j = 0; j < items.length; j++) {
        var categories = items[j].classList;
        if (!categories.contains(filterValue)) {
          items[j].style.display = "none";
        } else {
          items[j].style.display = "block";
        }
      }
    }
  });
}