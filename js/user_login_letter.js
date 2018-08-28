var letters = document.querySelectorAll(".letters");	
var counter = 0;
	
window.addEventListener("keydown", function(e) {
	if (e.keyCode == "32") {
		if (counter === 0) {
			counter++;
			letters[counter].focus();
			e.preventDefault();

		} else if (counter === letters.length - 1) {
			counter = 0;
			letters[counter].focus();
			e.preventDefault();

		} else {
			counter++;
			letters[counter].focus();
			e.preventDefault();
		}
	}
});