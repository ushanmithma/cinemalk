
// Search bar process

let logo = document.querySelector('.logo');
let searchBg = document.querySelector('.search-bg');
let searchBox = document.querySelector('#searchBox');
let searchBtn = document.querySelector('#searchBtn');
let searchDesktop = document.querySelector('#searchDesktop');

searchBtn.addEventListener("click", function(event) {
	event.preventDefault();
	logo.classList.toggle('toggle-logo');
	searchBg.classList.toggle('toggle-search-bg');
	searchBox.style.animation = "expand 0.5s ease";
	searchBox.focus();
});

searchDesktop.addEventListener("click", function(event) {
	event.preventDefault();
	searchBg.classList.toggle('toggle-search-bg');
	searchBox.style.animation = "expand 0.5s ease";
	searchBox.focus();
});

searchBox.addEventListener("focusout", function() {
	if ($(window).width() < 840) {
		logo.classList.toggle('toggle-logo');
	}
	searchBg.classList.toggle('toggle-search-bg');
});

// Responsive menu control

const menu = document.querySelector('.menu');
const nav = document.querySelector('.nav-links');

menu.addEventListener("click", function() {
	nav.classList.toggle('nav-active');
	menu.classList.toggle('toggle');
});
