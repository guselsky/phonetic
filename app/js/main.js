var ambiguities = [];

function resultInput(inputText) {	
	
	tdransform($('#submit-field').val().toLowerCase());


}

// Trigger transformation on Pressing Enter
$('#submit-field').keyup(function(event) {
	if (event.keyCode == 13) {
		$('#result').click();
	}
});


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

	if (ambiguities.indexOf('silentH') != -1) {
		console.log('found a silent H');
		$('#result-area').html('<p>Sollte der Name ein stummes H enthalten, so setzen Sie dieses bitte in Klammern.</p>');
		// output = head + ' ' + otherLetters;
		// 	return output;
	} else {
		output = head + ' ' +  tail;
		$('#result-area').html('<p>Ihr Ergebnis: ' + output + '</p>');
		return output;
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

	// check if h is silent and print out instructions. Then run the function again

	if(silentHTest(miniscule) === true) {
		ambiguities.push('silentH')
		return ambiguities;
	} else {
		console.log('doesnt contain an H');
	}

	

	// take word and split into an array of letters

	// var minisculeArray = miniscule.split('');


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

	return miniscule;

	// return minisculeArray.join('');
}

function silentHTest(miniscule) {
	var containsH = new RegExp(/h/);

	if (containsH.test(miniscule)) {
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