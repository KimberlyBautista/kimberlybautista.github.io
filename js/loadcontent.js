// Kimberly Bautista
// 26 December 2014
// Description: loads the content of my page
// Note: Since you are looking at my source code, why not visit my github: github.com/KimberlyBautista
// Don't be a afraid to send me a message! (I don't bite...most of the time)

"use strict";

(function () {

	var pageName;

	window.onload = function() {
		// finds the id of the page in order to load the correct contents
		var page = document.getElementsByTagName("body")[0].id; // gets the id of the page from body tag
		pageName = page;
		loadPage(); // loads the .html page contents 
	};

	function loadPage() {
		var ajax = new XMLHttpRequest();
		ajax.onload = insert;
		ajax.open("GET", "load.php?page=" + pageName, true);
		ajax.send();
	}

	function insert() {
		var section = document.getElementById("content");
		section.innerHTML = this.responseText;
		fadeIn(section);

		if(pageName == "main") {
			var button = document.getElementById("aboutmelink");
			button.onclick = changePage;
		}
	}

	function changePage() {
		document.getElementById("main").id = "about";
		//location.reload();
	}


	function fadeIn(el) {
  		el.style.opacity = 0;


  		var tick = function() {
    		el.style.opacity = +el.style.opacity + 0.01;


    		if (+el.style.opacity < 1) {
      			(window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16)
    		}
  		};

  		tick();
	}

} ());