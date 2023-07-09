
// Responsive menu control

const menu = document.querySelector('.menu');
const nav = document.querySelector('.navigation');

menu.addEventListener("click", function() {
	nav.classList.toggle('nav-active');
	menu.classList.toggle('toggle');
});

// Accordion sub menu controller

var accordion = document.querySelectorAll(".accordion");

for (var i = 0; i < accordion.length; i++) {
	accordion[i].addEventListener("click", function(event) {
		event.preventDefault();
		var subMenu = this.nextElementSibling;
		if (subMenu.style.maxHeight) {
			subMenu.style.maxHeight = null;
		} else {
			subMenu.style.maxHeight = subMenu.scrollHeight + "px";
			subMenu.style.display = "flex";
			subMenu.style.flexDirection = "column";
		}
	});
}
