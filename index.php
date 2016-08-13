<?php

include 'convert.php';

// try {
// 	$handler = new PDO('mysql:host=127.0.0.1;dbname=pow', 'root', '');
// 	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
// 	echo die('Sorry, database problems. Please email the webmaster at <a href="mailto:david.gusel@webdesign-gusel.at">david.gusel@webdesign-gusel.at</a>');
// }


// $query = $handler->query('SELECT * FROM buchstaben');

// while ($r = $query->fetch(PDO::FETCH_OBJ)) {
// 	echo $r->pow_buchstabengruppe1, '<br>';
// }


?>
<!DOCTYPE html>
<html lang="de">
<head>
	<title>Phonetisches Alphabet Wortumwandler</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<p class="pow_more"><a href="https://de.wikipedia.org/wiki/Phonetische_Ordnung">mehr erfahren</a></p>
	<h1 class="pow_prompt">Geben Sie einen Namen ein.<br>Bsp: <em>Weininger</em></h1>
	<p class="pow_instructions">Geben Sie die einzelnen Buchstaben oder Buchstabenpaare getrennt in die Felder ein.<br>Bsp: <em>W-ei-n-i-n-g-e-r</em></p>
	<p class="pow_instructions"><strong>Eingaberegeln für ein korrektes Ergebnis:</strong></p>
	<ol class="pow_instructions">	

		<li>Es wird immer nur der erste Vokal in einer Folge von Vokalen eingegeben (Bsp.: "Noel" wird zu "Nol", )</li>
		<li>J als Vokal wird als I eingegeben.</li>	
		<li>Diphtonge (au, eu, ei, ai, aj, ej, äu, ay, ey) werden zusammen in ein Feld eingegeben.</li>
		<li>Vokale mit zwei Buchstaben (ae, oe, Ae, Oe, ue, Ue, ui, Ui) werden zusammen in ein Feld eingegeben</li>

		<li>Stummes H wird nicht eingegeben.</li>
		<li>Wenn c als Z-Laut ausgesprochen wird, wird z eingegeben.</li>
		<li>Doppelkonsonanten (tt, bb, ss, werden als einfache konsonanten eingegeben: t, b, s)</li>
		<li>Ph wird in ein Feld eingegeben, wenn es wie F ausgesprochen wird.</li>
		<li>Konsonantenpaare, die nur einen Laut haben, werden zusammen in ein Feld eingegeben (gs, ks, chs, cks).</li>
				
		<li>Cs, Cz, Rs, Rz, Zs werden zusammen in ein Feld eingegeben.</li>
		<li>Sch, Sz, Scs, Scz, Szc, Szs, Szcs, Szcz, Sc, Schc (wenn c nicht als K-Laut ausgesprochen wird) werden zusammen in ein Feld eingegeben.</li>
		
		
	</ol>

	<form class="pow_form" action="index.php" method="post" >
			
		<?php

			// $pow_counter = 0;

			// while ($pow_counter < 20) {
			// 	$pow_counter++;
			// 	echo '<input class="pow_name" type="text" name="pow_buchstabengruppe' . $pow_counter . ' ">';
			// }

			// echo '<br>';

		 ?>
		<!-- Input fields for the character groups -->
		 <input class="pow_name" type="text" name="buchstabengruppe1">
		 <input class="pow_name" type="text" name="buchstabengruppe2">
		 <input class="pow_name" type="text" name="buchstabengruppe3">
		 <input class="pow_name" type="text" name="buchstabengruppe4">
		 <input class="pow_name" type="text" name="buchstabengruppe5">
		 <input class="pow_name" type="text" name="buchstabengruppe6">
		 <input class="pow_name" type="text" name="buchstabengruppe7">
		 <input class="pow_name" type="text" name="buchstabengruppe8">
		 <input class="pow_name" type="text" name="buchstabengruppe9">
		 <input class="pow_name" type="text" name="buchstabengruppe10">
		 <input class="pow_name" type="text" name="buchstabengruppe11">
		 <input class="pow_name" type="text" name="buchstabengruppe12">
		 <input class="pow_name" type="text" name="buchstabengruppe13">
		 <input class="pow_name" type="text" name="buchstabengruppe14">
		 <input class="pow_name" type="text" name="buchstabengruppe15">
		 <input class="pow_name" type="text" name="buchstabengruppe16">
		 <input class="pow_name" type="text" name="buchstabengruppe17">
		 <input class="pow_name" type="text" name="buchstabengruppe18">
		 <input class="pow_name" type="text" name="buchstabengruppe19">
		 <input class="pow_name" type="text" name="buchstabengruppe20">

		<input type="submit" name="search" value="Umwandeln">

	</form>
	<!-- <form method="post" action="index.php" class="pow_form">
		Benutzername: <input type="text" name="user" id="pow_username" />
		Passwort: <input type="text" name="pass" id="pow_password" />
		<input type="submit" name="submit" value="Login" />
	</form>  -->

	<?php 

		// Get entered character groups and convert them to the phonetic alphabet and echo them out
		if (isset($_POST['search'])) {

			if(isset($_POST['buchstabengruppe1'])) {

				$pow_buchstabe1 = $_POST['buchstabengruppe1'];

				$pow_buchstabe1 = pow_convertfirst($pow_buchstabe1); 


			} else {
			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe2'])) {

				$pow_buchstabe2 = $_POST['buchstabengruppe2'];

				$pow_buchstabe2 = pow_convert($pow_buchstabe2); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe3'])) {

				$pow_buchstabe3 = $_POST['buchstabengruppe3'];

				$pow_buchstabe3 = pow_convert($pow_buchstabe3); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe4'])) {

				$pow_buchstabe4 = $_POST['buchstabengruppe4'];

				$pow_buchstabe4 = pow_convert($pow_buchstabe4); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe5'])) {

				$pow_buchstabe5 = $_POST['buchstabengruppe5'];

				$pow_buchstabe5 = pow_convert($pow_buchstabe5); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe6'])) {

				$pow_buchstabe6 = $_POST['buchstabengruppe6'];

				$pow_buchstabe6 = pow_convert($pow_buchstabe6); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe7'])) {

				$pow_buchstabe7 = $_POST['buchstabengruppe7'];

				$pow_buchstabe7 = pow_convert($pow_buchstabe7); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe8'])) {

				$pow_buchstabe8 = $_POST['buchstabengruppe8'];

				$pow_buchstabe8 = pow_convert($pow_buchstabe8); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe9'])) {

				$pow_buchstabe9 = $_POST['buchstabengruppe9'];

				$pow_buchstabe9 = pow_convert($pow_buchstabe9); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe10'])) {

				$pow_buchstabe10 = $_POST['buchstabengruppe10'];

				$pow_buchstabe10 = pow_convert($pow_buchstabe10); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe11'])) {

				$pow_buchstabe11 = $_POST['buchstabengruppe11'];

				$pow_buchstabe11 = pow_convert($pow_buchstabe11); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe12'])) {

				$pow_buchstabe12 = $_POST['buchstabengruppe12'];

				$pow_buchstabe12 = pow_convert($pow_buchstabe12); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe13'])) {

				$pow_buchstabe13 = $_POST['buchstabengruppe13'];

				$pow_buchstabe13 = pow_convert($pow_buchstabe13); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe14'])) {

				$pow_buchstabe14 = $_POST['buchstabengruppe14'];

				$pow_buchstabe14 = pow_convert($pow_buchstabe14); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe15'])) {

				$pow_buchstabe15 = $_POST['buchstabengruppe15'];

				$pow_buchstabe15 = pow_convert($pow_buchstabe15); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe16'])) {

				$pow_buchstabe16 = $_POST['buchstabengruppe16'];

				$pow_buchstabe16 = pow_convert($pow_buchstabe16); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe17'])) {

				$pow_buchstabe17 = $_POST['buchstabengruppe17'];

				$pow_buchstabe17 = pow_convert($pow_buchstabe17); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe18'])) {

				$pow_buchstabe18 = $_POST['buchstabengruppe18'];

				$pow_buchstabe18 = pow_convert($pow_buchstabe18); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe19'])) {

				$pow_buchstabe19 = $_POST['buchstabengruppe19'];

				$pow_buchstabe19 = pow_convert($pow_buchstabe19); 

			} else {

			echo "not working";
		
			}

			if(isset($_POST['buchstabengruppe20'])) {

				$pow_buchstabe20 = $_POST['buchstabengruppe20'];

				$pow_buchstabe20 = pow_convert($pow_buchstabe20); 

			} else {

			echo "not working";
		
			}

			
			echo '<p class = "pow_instructions">Das Ergebnis:<br><strong>' . $pow_buchstabe1 . $pow_buchstabe2 . $pow_buchstabe3. $pow_buchstabe4 . $pow_buchstabe5 . $pow_buchstabe6 . $pow_buchstabe7 . $pow_buchstabe8. $pow_buchstabe9. $pow_buchstabe10. $pow_buchstabe11. $pow_buchstabe12. $pow_buchstabe13. $pow_buchstabe14. $pow_buchstabe15. $pow_buchstabe16. $pow_buchstabe17. $pow_buchstabe18. $pow_buchstabe19. $pow_buchstabe20 . '<strong><p>';


		} 
	?>
</body>
</html>