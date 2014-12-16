"use strict";

window.onload = function() {
	var mainImages = document.querySelectorAll("#gallery");
	for (var i = 0; i < mainImages.length; i++) {
		mainImages[i].style.visibility = "hidden";
	}
	for (var i = 0; i < mainImages.length; i++) {
		mainImages[i].onmouseover = appear;
	}
};

function appear() {
	var mainImages = document.querySelectorAll("#gallery");
	for (var i = 0; i < mainImages.length; i++) {
		mainImages[i].style.visibility = "hidden";
	}
}
