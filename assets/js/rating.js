var ratingInputs = document.getElementsByName('rating');
    for (var i = 0; i < ratingInputs.length; i++) {
    ratingInputs[i].addEventListener('click', function() {
        var rating = this.value;
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'rate.php'); // replace with the actual URL of the PHP script that handles the rating
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                alert(response.message);
            } else {
                alert('An error occurred.');
            }
        };
        xhr.send('rating=' + rating);
    });
}
