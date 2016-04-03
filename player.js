// Javascript function file for player.php

// updateSource() -- used to update the source of the audio html element
function updateSource() {
	var audio = document.getElementByID('webplayerCore');
	audio.src = 'audio/webplayerSource' + this.getAttribute('data-track');
	audio.load();
}


// AJAX Event Listener
var previous = "";

setInterval(function() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4) {
			if (ajax.responseText != previous) {
				alert("Command Received");
				previous = ajax.responseText;
			}
		}
	};
	ajax.open("POST", "eventStream.txt", true); // POST avoids any local caching
	ajax.send();
}, 1000);
