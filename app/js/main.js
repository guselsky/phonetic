// Create an array to store all ambiguities in letters
var ambiguities = [];

// Trigger transformation on Pressing Enter
$('#submit-field').keyup(function(event) {
	if (event.keyCode == 13) {
		$('#result').click();
	}
});

function resultInput(inputText) {	
	tdransform($('#submit-field').val().toLowerCase());
}


function tdransform(input) {
	firstTwoletters = input.substr(0,2);
	var doubleLetters = new RegExp(/(äu)|(aj)|(ej)|(eu)|(ay)|(ey)|(ä)|(ae)|(ö)|(oe)/);
	firstThreeletters = input.substr(0,3);
	var tripleLetters = new RegExp(/sch/);

	if(doubleLetters.test(firstTwoletters)) {
		firstLetters = input.substr(0,2);
		otherLetters = input.substr(2);
	} else if (tripleLetters.test(firstThreeletters)) {
		firstLetters = input.substr(0,3);
		otherLetters = input.substr(3);
	} else {
		firstLetters = input.charAt(0);
		otherLetters = input.substr(1);
	} 

	head = capitals(firstLetters);
	tail = miniscules(otherLetters);

	// If there are ambiguities found in the miniscules trigger this logic
	if (ambiguities.indexOf('silentH') != -1) {
		$('#result-area').html('<p>Sollte der Name ein stummes H enthalten, so setzen Sie dieses bitte in Klammern.</p>');
	} else {
		// If there are no more ambiguities, print out the result
		output = head + ' ' +  tail;
		$('#result-area').html('<p>Ihr Ergebnis: ' + output + '</p>');
	}


};

function capitals(capital){

	var eiGruppe = new RegExp (/(äu)|(aj)|(ej)|(eu)|(ay)|(ey)/);
	var eGruppe = new RegExp(/(ä)|(ae)|(ö)|(oe)/);
	var singlesGroup = {
		singlesExpression: [/d|t/,/j|i/,/b|p/,/c|g|k/,/f|v|w/],
		replacement: ['D.T','I.J','B.P','C.G.K','F.V.W']
	};


	if (capital.length === 3) {
		return capital = capital.replace(/(sch)/, 'S.SCH' );
	} else if (eiGruppe.test(capital)) {
		return capital = capital.replace(eiGruppe, 'Ei' );
	} else if (eGruppe.test(capital)){
		return	capital = capital.replace(eGruppe, 'E' ); 

	} else {

		for (var i = 0; i <=singlesGroup.singlesExpression.length; i++) {
			capital = capital.replace(singlesGroup.singlesExpression[i], singlesGroup.replacement[i]);			
		}

	}

	if (capital.length === 1) {
		capital = capital.toUpperCase();
	}
	
	return capital;
}

function miniscules(miniscule) {

	ambiguities = [];

	// check if h is silent and print out instructions.

	if(silentHTest(miniscule) === true) {
		ambiguities.push('silentH');
		return ambiguities;
	} 

	// If the user put the silent h in brackets, remove the brackets with the silent H
	miniscule = miniscule.replace(/\(h\)/, '');

	// take the miniscules string and split into an array of letters
	var minisculeArray = miniscule.split('');

	// Sort out double vowels

	var vowels = new RegExp(/(a)|(e)|(i)|(o)|(u)/);

	// for (var i = 0; i < minisculeArray.length; i++) {
	// 	// if (minisculeArray[i] === 'a') {
	// 		if(vowels.test(minisculeArray[i]) && vowels.test(minisculeArray[i+1])){
			
	// 		minisculeArray.splice(i + 1, 1);	
	// 	}
	// }

	// Check if there is a qu and make an exception from the vowel removal

	// Check if there is an ei etc. and make an exception

	// set expressions group



	// check if double consonants and remove them

	// check if c i k or z sound and change accordingly

	// check if ph sounds like f and change accordingly

	// check if consonants gs, ks, chs, cks are one sound and change accordingly

	// change cs, cZ, Rs, Rz, Zs

	// check if the c in sc, schc is pronunced like a k

	// change Sch, Sz, Scs, Scz, Szc, Szs, Szcs, Szcz


	// execute transformation

	// return miniscule;

	return minisculeArray.join('');
}

function silentHTest(miniscule) {
	var containsBracketH = new RegExp(/\(\h\)/);
	var containsH = new RegExp(/h/);

	if (containsH.test(miniscule) && !containsBracketH.test(miniscule)) {
		return true;
	} else {
		return false;
	}
}



// function stummesH() {
// 	if($('input[name="h-selected"]:checked').val() === 'yes') {
// 		console.log('ist ein stummes H');
// 		return true;
// 	} else if ($('input[name="h-selected"]:checked').val() === 'no') {
// 		console.log('ist kein stummes H');
// 		return false;
// 	}
// }

// // Promts an inquiry if it is a silet h
// function nachfrage(input) {

// 	var hQuery = '<p>Handelt es sich um ein stummes H?</p>' +
// 	'<form><input name="h-selected" type="radio" value="yes">Ja</input>' +
// 	'<input name="h-selected" type="radio" value="no">Nein</input>'+
// 	'<input type="button" value="Bestätigen" onClick="stummesH()"></input></form>';

// 	if (input === 'h') {
// 		$('#result-area').html(hQuery);
// 	} 

// }