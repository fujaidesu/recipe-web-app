function addToFavorites() {
  // Use AJAX to get the recipe ID value from the server-side session
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "get_recipe_id.php", true);
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var recipeId = this.responseText.trim(); // Remove whitespace from the response

      // Get the button element
      var button = document.getElementById("favoritesButton");

      // Determine whether to add or remove from favorites
      var status = button.textContent.trim() === "Add to Favourites" ? "add" : "remove";

      if (button.innerHTML == "Add to Favourites") {
        // Code to add the current page to user's favorites
        button.innerHTML = "Added to Favourites";
      } else {
        // Code to remove the current page from user's favorites
        button.innerHTML = "Add to Favourites";
      }

      // Send the add-to-favorite status to the PHP script using AJAX
      var xhr2 = new XMLHttpRequest();
      xhr2.open("POST", "update_fav.php", true);
      xhr2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr2.send("recipeId=" + encodeURIComponent(recipeId) + "&status=" + encodeURIComponent(status));
    }
  };
  xhr.send();
}