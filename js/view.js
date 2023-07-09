
// Trailer show hide process

let trailer = document.querySelector('.trailer');
let closeBtn = document.querySelector('.close');
let trailerFrame = document.querySelector('#trailer-frame');
let trailerBtn = document.querySelector('#watch-trailer');

trailerBtn.addEventListener("click", function(event) {
	event.preventDefault();
	trailer.style.display = "block";
	trailerFrame.style.animation = "trailerFade 0.4s ease";
});

closeBtn.addEventListener("click", function() {
	trailer.style.display = "none";
});

window.onclick = function(event) {
	if (event.target == trailer) {
		trailer.style.display = "none";
	}
}
