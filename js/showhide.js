
var i = 0;
while (i < document.getElementsByClassName('hider').length) {
	var hider = document.getElementsByClassName('hider')[i];
	hider.getElementsByClassName('showhide')[0].innerHTML = '<div onClick="toggle_visibility('+ i +')" id="antwoordknopje">Uitwerkingen ✎ </div>';
	i++;
}

function toggle_visibility(iteller) {
	var e = document.getElementsByClassName('hider')[iteller],
	showhide = e.getElementsByClassName("showhide")[0],
	antwoord = e.getElementsByClassName("antwoord")[0];
	if (antwoord.style.display == 'block') {
		antwoord.style.display = 'none';
		showhide.innerHTML = '<div onClick="toggle_visibility('+ iteller +')"id="antwoordknopje">Uitwerkingen ✎ </div>';
	} else {
		antwoord.style.display = 'block';
		showhide.innerHTML = '<div onClick="toggle_visibility('+ iteller +')"><p><u>Uitwerkingen verbergen</u></p></div>';
	}
}

