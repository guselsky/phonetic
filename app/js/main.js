function resultInput(inputText) {	
	input = tdransform(inputText.inputbox.value);
	$('#result-area').text(output);
}

function tdransform(input) {

	firstLetter = capitals(input.charAt(0));
	otherLetters = miniscules(input.substr(1));

	output = firstLetter + otherLetters;
	return output;
}

function capitals(capital){
	capital = capital.replace(/[D,d,T,t]/, 'D.T' );
	capital = capital.replace(/[J,j,I,i]/, 'I.J' );

	return capital;
}

function miniscules(miniscule) {
	return miniscule;
}