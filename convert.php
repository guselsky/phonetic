	<?php 

	function pow_convertfirst($pow_toconvertfirst) {

		//Convert J,I to I.J
		if ($pow_toconvertfirst == 'j' || $pow_toconvertfirst == 'J' || $pow_toconvertfirst == 'i' || $pow_toconvertfirst == 'I') {

			return $pow_toconvertfirst = 'I.J'; 

		//Convert B, P to B. P
		} else if ($pow_toconvertfirst == 'b' || $pow_toconvertfirst == 'B' || $pow_toconvertfirst == 'p'|| $pow_toconvertfirst == 'P') {

			return $pow_toconvertfirst = 'B.P';

		//Convert C, G, K to C.G.K
		} else if ($pow_toconvertfirst == 'c' || $pow_toconvertfirst == 'C' || $pow_toconvertfirst == 'g'|| $pow_toconvertfirst == 'G'|| $pow_toconvertfirst == 'k' || $pow_toconvertfirst == 'K') {

			return $pow_toconvertfirst = 'C.G.K';

		//Convert D,T to D.T
		} else if ($pow_toconvertfirst == 'd' || $pow_toconvertfirst == 'D' || $pow_toconvertfirst == 't'|| $pow_toconvertfirst == 'T') {

			return $pow_toconvertfirst = 'D.T';

		//Convert F, V, W to F.V.W
		} else if ($pow_toconvertfirst == 'f' || $pow_toconvertfirst == 'F' || $pow_toconvertfirst == 'v'|| $pow_toconvertfirst == 'V'|| $pow_toconvertfirst == 'w'|| $pow_toconvertfirst == 'W') {

			return $pow_toconvertfirst = 'F.V.W';

		//Convert S, Sch to S.Sch
		} else if ($pow_toconvertfirst == 's' || $pow_toconvertfirst == 'S' || $pow_toconvertfirst == 'sch'|| $pow_toconvertfirst == 'Sch'|| $pow_toconvertfirst == 'SCH'|| $pow_toconvertfirst == 'SCh') {

			return $pow_toconvertfirst = 'S.SCH';

		//Convert e, ä, ae, ö, oe to e	
		} else if ($pow_toconvertfirst == 'ä' || $pow_toconvertfirst == 'Ä' || $pow_toconvertfirst == 'ae' || $pow_toconvertfirst == 'AE' || $pow_toconvertfirst == 'ö' || $pow_toconvertfirst == 'Ö' || $pow_toconvertfirst == 'oe' || $pow_toconvertfirst == 'Oe' || $pow_toconvertfirst == 'OE' || $pow_toconvertfirst == 'oE') {

			return $pow_toconvertfirst = 'E';
		
		//Convert ei, äu, aj, ej, eu, ay, ey to ei	
		} else if ($pow_toconvertfirst == 'äu' || $pow_toconvertfirst == 'Äu' || $pow_toconvertfirst == 'aj' || $pow_toconvertfirst == 'Aj' || $pow_toconvertfirst == 'ej' || $pow_toconvertfirst == 'Ej' || $pow_toconvertfirst == 'eu' || $pow_toconvertfirst == 'Eu' || $pow_toconvertfirst == 'ay' || $pow_toconvertfirst == 'Ay' || $pow_toconvertfirst == 'ey' || $pow_toconvertfirst == 'Ey') {

			return $pow_toconvertfirst = 'Ei';

			//Convert i, ü, ui, y, ue to i	
		} else if ($pow_toconvertfirst == 'ü' || $pow_toconvertfirst == 'Ü' || $pow_toconvertfirst == 'ui' || $pow_toconvertfirst == 'Ui' || $pow_toconvertfirst == 'y' || $pow_toconvertfirst == 'Y' || $pow_toconvertfirst == 'ue' || $pow_toconvertfirst == 'Ue') {

			return $pow_toconvertfirst = 'I.J';
	

		} else {

			return $pow_toconvertfirst;

		}

	}

	function pow_convert($pow_toconvert) {
		
		//Convert e, ä, ae, ö, oe to e	
		if ($pow_toconvert == 'ä' || $pow_toconvert == 'Ä' || $pow_toconvert == 'ae' || $pow_toconvert == 'AE' || $pow_toconvert == 'ö' || $pow_toconvert == 'Ö' || $pow_toconvert == 'oe' || $pow_toconvert == 'Oe' || $pow_toconvert == 'OE' || $pow_toconvert == 'oE') {

			return $pow_toconvert = 'e';
		
		//Convert ei, äu, aj, ej, eu, ay, ey to ei	
		} else if ($pow_toconvert == 'äu' || $pow_toconvert == 'Äu' || $pow_toconvert == 'aj' || $pow_toconvert == 'Aj' || $pow_toconvert == 'ej' || $pow_toconvert == 'Ej' || $pow_toconvert == 'eu' || $pow_toconvert == 'Eu' || $pow_toconvert == 'ay' || $pow_toconvert == 'Ay' || $pow_toconvert == 'ey' || $pow_toconvert == 'Ey') {

			return $pow_toconvert = 'ei';

			//Convert i, ü, ui, y, ue to i	
		} else if ($pow_toconvert == 'ü' || $pow_toconvert == 'Ü' || $pow_toconvert == 'ui' || $pow_toconvert == 'Ui' || $pow_toconvert == 'y' || $pow_toconvert == 'Y' || $pow_toconvert == 'ue' || $pow_toconvert == 'Ue') {

			return $pow_toconvert = 'i';

		// Convert b,p to pb
		} else if ($pow_toconvert == 'b' || $pow_toconvert == 'B' || $pow_toconvert == 'p'|| $pow_toconvert == 'P') {

			return $pow_toconvert = 'bp';

		// Convert c, g k, q to ckg			
		} else if ($pow_toconvert == 'c' || $pow_toconvert== 'g' || $pow_toconvert == 'k' || $pow_toconvert == 'q' || $pow_toconvert == 'C' || $pow_toconvert== 'G' || $pow_toconvert == 'K' || $pow_toconvert == 'Q') {

			return $pow_toconvert = 'ckg';

		// Convert d,t to dt		
		} else if ($pow_toconvert == 'd' || $pow_toconvert== 'D' || $pow_toconvert == 't' || $pow_toconvert == 'T' ) {

			return $pow_toconvert = 'dt';

		// Convert f, v, w, ph to fvw	
		} else if ($pow_toconvert == 'f' || $pow_toconvert== 'F' || $pow_toconvert == 'v' || $pow_toconvert == 'V' || $pow_toconvert == 'w' || $pow_toconvert== 'W' || $pow_toconvert == 'ph' || $pow_toconvert == 'Ph') {

			return $pow_toconvert = 'fvw';

		// Convert ł, l to l	
		} else if ($pow_toconvert == 'ł' || $pow_toconvert== 'Ł,') {

			return $pow_toconvert = 'l';

		// Convert ř to r
		} else if ($pow_toconvert == 'ř' || $pow_toconvert== 'Ř') {

			return $pow_toconvert = 'r';

	
		//Convert sch, ß, š sz, scs, scz, szc, szs, szcs, szcz to sschcz
		} else if ($pow_toconvert == 's' || $pow_toconvert == 'S' || $pow_toconvert == "sch" || $pow_toconvert == 'Sch' || $pow_toconvert == 'ß' || $pow_toconvert == 'sz' || $pow_toconvert == 'SZ' || $pow_toconvert == 'Sz' || $pow_toconvert == 'scs' || $pow_toconvert == 'Scs' || $pow_toconvert == 'SZS' || $pow_toconvert == 'scz' || $pow_toconvert == 'Scz' || $pow_toconvert == 'ScZ' || $pow_toconvert == 'szc' || $pow_toconvert == 'Szc' || $pow_toconvert == 'SZC' || $pow_toconvert == 'szs' || $pow_toconvert== 'Szs' || $pow_toconvert == 'SZS' || $pow_toconvert == 'szcs' || $pow_toconvert == 'Szcs' || $pow_toconvert== 'SZCS' || $pow_toconvert == 'szcz' || $pow_toconvert == 'Szcz' || $pow_toconvert == 'SZCZ' || $pow_toconvert == 'sc' || $pow_toconvert == 'Sc' || $pow_toconvert== 'SC' || $pow_toconvert == 'schc' || $pow_toconvert == 'Schc' || $pow_toconvert == 'SCHZ') {

			return $pow_toconvert = 'sschcz';

		//Convert ks, cks, chs, gs, x to x
		} else if ($pow_toconvert == "ks" || $pow_toconvert == 'Ks' || $pow_toconvert == 'KS' || $pow_toconvert == 'cks' || $pow_toconvert == 'Cks' || $pow_toconvert == 'CKS' || $pow_toconvert == 'chs' || $pow_toconvert == 'Chs' || $pow_toconvert == 'CHS' || $pow_toconvert == 'gs' || $pow_toconvert == 'Gs' || $pow_toconvert == 'GS' || $pow_toconvert == 'x' || $pow_toconvert == 'X' || $pow_toconvert == 'ch'|| $pow_toconvert == 'Ch'|| $pow_toconvert == 'CH') {

			return $pow_toconvert = 'ckqghx';

		//Convert cs, cz, dc, ds, dsch, dz, tc, ts, tsch, tz, zs, z to z
		} else if ($pow_toconvert == "cs" || $pow_toconvert == 'Cs' || $pow_toconvert == 'CS' || $pow_toconvert == 'cz' || $pow_toconvert == 'Cz' || $pow_toconvert == 'CZ' || $pow_toconvert == 'dc' || $pow_toconvert == 'Dc' || $pow_toconvert == 'DC' || $pow_toconvert == 'ds' || $pow_toconvert == 'Ds' || $pow_toconvert == 'DS'|| $pow_toconvert == 'dsch' || $pow_toconvert == 'Dsch' || $pow_toconvert == 'DSCH' || $pow_toconvert == 'dz' || $pow_toconvert == 'Dz' || $pow_toconvert == 'DZ' || $pow_toconvert == 'tc' || $pow_toconvert == 'Tc' || $pow_toconvert == 'TC' || $pow_toconvert == 'ts' || $pow_toconvert == 'Ts'|| $pow_toconvert == 'TS' || $pow_toconvert == 'tsch' || $pow_toconvert == 'Tsch' || $pow_toconvert == 'TSCH' || $pow_toconvert == 'tz' || $pow_toconvert == 'Tz' || $pow_toconvert == 'TZ' || $pow_toconvert == 'zs' || $pow_toconvert == 'Zs' || $pow_toconvert == 'ZS' || $pow_toconvert == 'z'|| $pow_toconvert == 'Z') {

			return $pow_toconvert = 'z?';
		
		
		} else {
			
			return $pow_toconvert;
		}
	
	}

	?>