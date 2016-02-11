<?php 
	//defineer titel
	$taaknaam ="Allerlei verbanden";
?>

<?php
//Definieer sidebar
$doorverwijzingen = array(
     '#inleiding' => 'Lineaire verbanden',
	 '#theorieA' => 'Lineaire formules',
	 '#theorieB' => 'Van tabel naar formule',
	 '#theorieC' => 'Formules bij grafieken maken',
	 '#theorieD' => 'Grafieken tekenen met behulp van een tabel',
	 '#proeftoets' => 'Proeftoets');  
?>

<title>Leerjaar 2 | <?php echo $taaknaam; ?></title>

<div class="taakinhoud">

<div class="tekstblok opdracht">
	<h3>Opdracht 1</h3>
	<p>
		Taxibedrijf RIJKLAAR berekent voor elke taxirit een begintarief van &euro; `2,50` en
		per gereden kilometer &euro; `0,90`.
	</p>
	<ol>
		<li>
			Laat met een berekening zien dat een taxirit van `8` kilometer bij RIJKLAAR
			&euro;`9,70` kost.
		</li>
		<li>
			Er is een verband tussen de afstand in km en de prijs in euro bij RIJKLAAR.<br>
			Schrijf een woordformule op die bij dit verband hoort.
		</li>
		<li>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>afstand in km</em></TD><TD>0</TD><TD>2</TD><TD>4</TD><TD>6</TD><TD>8</TD><TD>10</TD>
					</TR>
					<TR>
						<TD><em>prijs RIJKLAAR in euro's</em></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD>`9,70`</TD><TD></TD>
					</TR>
			</TABLE>
		</li>
		<br>
			Bij taxibedrijf LOTAX wordt de prijs van een taxirit berekend met de
			woordformule: <em>prijs</em>` = 1,20 * `<em>afstand</em><br>
			Hierin is de <em>prijs</em> in euro en de <em>afstand</em> in km.
			In het assenstelsel hieronder staat de grafiek van de woordformule
			van taxibedrijf LOTAX al in een assenstelsel getekend.<br>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/lotax_assenstelsel.png"   width="400px"  />
		<li>
			Neem het assenstelsel met de grafiek over en teken in hetzelfde assenstelsel de grafiek van het verband
			tussen de <em>afstand</em> in km en de <em>prijs</em> in euro bij taxibedrijf RIJKLAAR. 
		</li>
		<li>
			Selma woont `9,5` km van het treinstation. Zij wil met de taxi naar het treinstation.
			Welk taxibedrijf is voor Selma het goedkoopst? Laat zien hoe je aan je antwoord komt.
		</li>
		<li>
			Taxibedrijf LOTAX start met een actie.<br>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/taxi_actie.PNG" width="200px"/><br>
			Volgens Selma is taxibedrijf LOTAX nu bij elke stadsrit goedkoper dan taxibedrijf
			RIJKLAAR.<br>
			Heeft Selma gelijk? Laat zien hoe je aan je antwoord komt. 
		</li>
	</ol>
<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
		<ol>
		<li>
			`2,50+8*0,90 = 2,50+7,20=9,70`
		</li>
		<li>
			<em>prijs</em>`=2,50 + 0,90*`<em>afstand</em>
		</li>
		<li>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>afstand in km</em></TD><TD>0</TD><TD>2</TD><TD>4</TD><TD>6</TD><TD>8</TD><TD>10</TD>
					</TR>
					<TR>
						<TD><em>prijs RIJKLAAR in euro's</em></TD><TD>`2,50`</TD><TD>`4,30`</TD><TD>`6,10`</TD><TD>`7,90`</TD><TD>`9,70`</TD><TD>`11,50`</TD>
					</TR>
			</TABLE>
		</li>
		<li>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/lotax_rijklaar_grafieken.png"   width="400px"  />
		</li>
		<li>
			Bij RIJKLAAR betaalt Selma &euro;`11,05`<br>
			Bij LOTAX betaalt Selma `1,20*9,5 =`&euro;`11,40`<br>
			RIJKLAAR is voor Selma het goedkoopst. <br>
			of <br>
			Het snijpunt ligt tussen `8` en `9` kilometer.<br>
			Rechts van het snijpunt is RIJKLAAR het goedkoopst<br>
			RIJKLAAR is voor Selma het goedkoopst.<br>
		</li>
		<li>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/lotax_rijklaar_actie.png"   width="400px"  /><br>
			De grafiek van LOTAX ligt altijd onder de grafiek van RIJKLAAR.<br>
			Bij deze actie is LOTAX dus altijd het goedkoopst, dus Selma heeft
			gelijk. 
		</li>
		</ol>

	</div>
	</div>
</div>	

<div class="tekstblok opdracht">
	<h3>Opdracht 2</h3>
		<p>De grafieken in de figuur hieronder gaan over Taxibedrijven "Mario" en "Luigi". Bij de grafieken horen de formules
		`K`<sub>`mario`</sub>`= 5,75 + 0,8a` en<br> `K`<sub>`luigi`</sub>`= 1,75+ 1,25a`. Hierin is `a` het aantal kilometers per rit en `K` de kosten van de rit.<br>
		<img src="afbeeldingen/analyse_kwadratische_vergelijkingen_2hv/snijpunt_aflezen.png" width="400" /></p>
	<ol>
		<li>
			Controleer door invullen in de formule dat een taxirit van `4` km bij Luigi &euro;`6,75` kost.
		</li>
		<li>
			Welke grafiek hoort bij de formule van Luigi? Leg je antwoord uit.
		</li>
		<li>
			Bianca neemt voor een rit van `8` kilometer de taxi. Welk taxibedrijf is het goedkoopst? Hoe zie je dat in de grafiek? 
		</li>
		<li>
			Lees uit de grafiek af bij welk aantal kilometers de taxibedrijven even duur zijn.
		</li>
		<li>
			Het anwoord van de vorige vraag kan je ook berekenen. Als de bedrijven even duur zijn dan geldt:<br>
			`1,75 +1,25a= 5,75 + 0,8a` . Gebruik de <a href="http://wiskunde.vathorstcollege.nl/index2.php?p=analyse_lineaire_vergelijkingen_2t" target="_blank"> balansmethode</a> om 
			deze vergelijking op te lossen en controleer hiermee je antwoord van de vorige vraag.
		</li>
	</ol>

	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
		<ol>
		<li>
			`K`<sub>`luigi`</sub>`= 1,75+ 1,25a`<br>
			`K`<sub>`luigi`</sub>`= 1,75+ 1,25*4`<br>
			`K`<sub>`luigi`</sub>`= 1,75+ 5`<br>
			`K`<sub>`luigi`</sub>`= 6,75`
		</li>
		<li>
			De rode grafiek hoort bij Luigi. Het startgetal van Luigi is lager, dus begint zijn grafiek ook lager op de verticale as.
		</li>
		<li>
			Het taxibedrijf van Luigi is goedkoper. Bij `8` km. ligt de rode grafiek het laagst!
		</li>
		<li>
			Bij Ongeveer `9` km. zijn de taxibedrijven even duur.
		</li>
		<li>
			<table>
					<tr>
						<td>`1,75 + 1,25a`</td>
						<td>`=`</td>
						<td>`5,75 + 0,8a`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-0,8a`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-0,8a`</td>
					</tr>
					<tr>
						<td>`1,75+0,45a`</td>
						<td>`=`</td>
						<td>`5,75`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-1,75`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-1,75`</td>
					</tr>
					<tr>
						<td>`0,45a`</td>
						<td>`=`</td>
						<td>`4`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`: 0,45`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`: 0,45`</td>
					</tr>
					<tr>
						<td>`a`</td>
						<td>`=`</td>
						<td>`8,9`</td>
					</tr>
				</table>
				Dus bij een rit van `8,9` km. zijn de taxibedrijven even duur.
			</li>

		</ol>

	</div>
	</div>
</div>	

<div class="tekstblok opdracht">
	<h3>Opdracht 3</h3>
		<p>Hienaast zie je de grafieken van `y=x^2` en `y=2-x`.
		<img src="afbeeldingen/analyse_kwadratische_vergelijkingen_2hv/snijpunt_aflezen_parabool_lijn.png" width="400" /></p>
	<ol>
		<li>
			Welke formule hoort bij rode grafiek? Leg je antwoord uit. Hoe heet zo'n grafiek?
		</li>
		<li>
			Wat zijn de coordinaten van snijpunt A?
		</li>
		<li>
			Controleer je antwoord van de vorige vraag door de `x`-waarde in beide formules in te vullen.
		</li>
		<li>
			Wat zijn de coordinaten van snijpunt B?
		</li>
	</ol>

	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
		<ol>
		<li>
			De formule `y=x^2`, want dit is de formule van een parabool.
		</li>
		<li>
			`A(-2,4)`
		</li>
		<li>
			`y=x^2` <br>
			`y=(-2)^2`<br>
			`y=4` Klopt dus!<br>
			<br>
			`y=2-x`<br>
			`y=2- -2`<br>
			`y=2+2=4` Klopt dus!
		</li>
		<li>
			`B(1,1)`
		</li>
	</ol>

	</div>
	</div>
</div>	

<div class="tekstblok opdracht">
	<h3>Opdracht 4</h3>
	<p>
		<img src="afbeeldingen/analyse_allerlei_verbanden_2t/vierkant_inl_opdr.png" width="200px" class="rightfloat">
	</p>
	<ol>
		<li>
			Neem aan dat de lengte van de zijde van het vierkant hiernaast `4` cm. is.<br>
			Bereken de oppervlakte van dit vierkant.
		</li>

	<p>
		De woordformule die hoort bij het berekenen van de oppervlakte van een vierkant is:<br>
		<em>Oppervlakte</em>`= `<em>zijde</em><sup>2</sup><br>
		Hierin is zijde in cm. en oppervlakte in cm<sup>2</sup>.
	</p>
		<li>
			Bereken met behulp van de formule de oppervlakte van een vierkant met zijde `9` cm.
		</li>
		<li>
			Neem de tabel over en vul hem in.<br>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>zijde</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD>
					</TR>
					<TR>
						<TD><em>Oppervlakte</em></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD>
					</TR>
			</TABLE>
		</li>
		<li>
			Neem het assenstelsel hieronder over en teken daarin de grafiek van de oppervlakte.<br>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/oppervlakte_assenstelsel.png"  width="300px"/>
		</li>
		<li>
			Is de grafiek die je getekend hebt een parabool? Leg je antwoord uit.
		</li>
		<li>
			Hoe lang is de zijde van een vierkant met een oppervlakte van `100` cm<sup>2</sup>. ?
		</li>

	</ol>


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
		<ol>
		<li>
			<em>Oppervlakte</em>`=4*4=16`
		</li>
		<li>
			<em>Oppervlakte</em>`= `<em>zijde</em><sup>2</sup><br>
			<em>Oppervlakte</em>`= 9^2`<br>
			<em>Oppervlakte</em>`= 81`
		</li>
		<li>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>zijde</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD>
					</TR>
					<TR>
						<TD><em>Oppervlakte</em></TD><TD>`1`</TD><TD>`4`</TD><TD>`9`</TD><TD>`16`</TD><TD>`25`</TD>
					</TR>
			</TABLE>
		</li>
		<li>
			<br>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/oppervlakte_grafiek.png"  width="300px"/>
		</li>
		<li>
			Ja, de grafiek is een parabool. Je ziet hier alleen maar de "helft".
		</li>
		<li>
			<em>zijde</em>`=sqrt100=10`<br>
			Dus de <em>zijde</em> is `10` cm.
		</li>
		</ol>

	</div>
	</div>
</div>	

<div class="tekstblok opdracht">
	<h3>opdracht 5 </h3>
	<p>
	
		In de taak <a href="http://wiskunde.vathorstcollege.nl/index2.php?p=meet_vlakke_figuren_2" target="_blank">vlakke figuren</a> heb je geleerd hoe je de oppervlakte van een cirkel kunt uitrekenen.
		<p>
		Er is een formule voor de oppervlakte van een cirkel:<br>
		<em>Oppervlakte cirkel</em> = `&pi;` &sdot; <em>straal</em><sup>2</sup>
	</p>
	<p>
		Het teken `&pi;` is een getal, namelijk 3,141592... Je spreekt `&pi;` uit als <b>pi</b>. Op je rekenmachine is het getal `&pi;` opgeslagen onder een knop. 
	</p>
	
	<p>
		<img src="afbeeldingen/analyse_allerlei_verbanden_2t/opp_cirkel_vb.png" width="150px" class="rightfloat">
		<u>Voorbeeld</u>:<br>
		Bekijk de cirkel hiernaast en bereken de oppervlakte ervan.
	</p>
	<p>
		<u>Uitwerking</u>:<br>
		De <b>diameter</b> is 4 cm, dus de straal is 2 cm.<br>
		De oppervlakte van de cirkel is <nobr>`&pi;` &sdot; 2<sup>2</sup> = 12,57 cm<sup>2</sup></nobr>.
	</p>
	</p>
	<ol>
		<li>
			Bereken met de formule de oppervlakte van een cirkel met straal `5` cm.
		</li>
		<li>
			Bereken met de formule de oppervlakte van een cirkel met straal `10` cm.
		</li>
		<li>
			Neem de tabel over en vul hem in.<br>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>`straal`</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD>
					</TR>
					<TR>
						<TD><em>oppervlakte</em></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD>`78,5`</TD>
					</TR>
			</TABLE>
		</li>
		<li>
			Neem het assenstelsel hieronder over en teken daarin de grafiek van de oppervlakte.<br>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/cirkel_assenstelsel.png"  width="300px"/>
		</li>
		<li>
			Gebruik de grafiek om af te lezen wat de straal van een cirkel is met een oppervlakte van `40` cm<sup>2</sup>. 
			Laat zien hoe je aan je antwoord komt door afleeslijntjes in je assenstelsel te tekenen.
		</li>
	</ol>
	



<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
		<ol>
			<li>
				<em>Oppervlakte cirkel</em> = `&pi;` *5^2`<br>
				<em>Oppervlakte cirkel</em> = `&pi;` 25`<br>
				<em>Oppervlakte cirkel</em> = `78,5398..approx78,5
			</li>
			<li>
				<em>Oppervlakte cirkel</em> = `&pi;` *10^2`<br>
				<em>Oppervlakte cirkel</em> = `&pi;` 100`<br>
				<em>Oppervlakte cirkel</em> = `314,159..approx314,2
			</li>
			<li>
				<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>`straal`</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD>
					</TR>
					<TR>
						<TD><em>oppervlakte</em></TD><TD>`0`</TD><TD>`3,1`</TD><TD>`12,6`</TD><TD>`28,3`</TD><TD>`50,3`</TD><TD>`78,5`</TD>
					</TR>
			</TABLE>
			</li>
			<li>
				<br>
				<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/cirkel_grafiek.png"  width="300px"/>
			</li>
			<li>
				<br>
				<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/cirkel_punt_aflezen.png"  width="300px"/><br>
				Teken bij oppervlakte `=40` een horizontale stippellijn naar de grafiek. Vanuit het snijpunt met de grafiek een verticale stippellijn naar beneden. 
				Lees af welke straal erbij hoort. <em>straal</em> `approx3,6`
			</li>
		</ol>
	</div>
</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 6</h3>
	<p>
		<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/sierbestrating_foto.PNG"  class="rightfloat" width="200px"  />

		Hiernaast zie je een foto van een stuk sierbestrating.
		De stenen die hiervoor gebruikt worden heten klinkers.
		De klinkers worden in drietallen naast elkaar gelegd.
		Zo ontstaat telkens een vierkant. 
		<br>
		De vierkanten worden gelegd volgens een bepaald patroon.
		Hieronder zie je de eerste vier figuren uit een reeks.
		Het rangnummer van elke figuur is aangegeven met de letter `n`.
		De figuur met rangnummer `2`bestaat dus uit `4` vierkanten. 

		<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/sierbestrating_figuren_reeks.PNG"  width="450px"  />
	</p>
	<ol>
		<li>
			Hoeveel vierkanten heeft de figuur met rangnummer 6? Laat zien hoe je aan je
			antwoord komt. 
		</li>
		
		<br>
	Als je het nummer van een figuur weet kan je het aantal klinkers van dat figuur berekenen met de formule <em>aantal klinkers</em>`=3*n^2`.
		<br>
		<li>
			Bereken met de formule hoeveel klinkers figuur nummer `4` heeft.
		</li>
		<li>
			Hoeveel klinkers heeft figuur nummer `12`? Schrijf je berekening netjes op, gebruik de formule.
		</li>
		<li>
			Neem de tabel over en vul hem in.<br>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>`n`</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD><TD>8</TD><TD>9</TD><TD>10</TD>
					</TR>
					<TR>
						<TD><em>aantal klinkers</em></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD>
					</TR>
			</TABLE>
		</li>
		<li>
			Neem het assenstelsel hieronder over en teken daarin de grafiek van het aantal klinkers.<br>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/sierbestrating_assenstelsel.png"  width="300px"/>
		</li>
		<li>
			Er zijn `200` klinkers beschikbaar. Hiermee wil ik een zo groot mogelijk figuur uit de reeks leggen.
			Welk rangnummer heeft dit figuur? Laat duidelijk in het assenstelsel zien wat je doet.
		</li>
		<br>
			Er bestaan ook bredere klinkers. Met die brede klinkers krijg je al een vierkant
			door 2 klinkers naast elkaar te leggen.
			Hieronder zie je de eerste drie figuren uit een reeks volgens dit patroon met
			brede klinkers. 
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/sierbestrating_figuren_reeks_2.PNG"  width="350px"  />
		<li>
			Geef de formule die hoort bij het verband tussen het aantal klinkers van een
			figuur en zijn rangnummer `n` volgens dit patroon. 
		</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`6*6=36` Dus het figuur heeft `36` vierkanten.
				</li>
				<li>
					<em>aantal klinkers</em>`=3*n^2`<br>
					<em>aantal klinkers</em>`=3*4^2`<br>
					<em>aantal klinkers</em>`=3*16=48`<br>
				</li>
				<li>
					<em>aantal klinkers</em>`=3*n^2`<br>
					<em>aantal klinkers</em>`=3*12^2`<br>
					<em>aantal klinkers</em>`=3*144=432`<br>
				</li>
				<li>
					<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>`n`</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD><TD>8</TD><TD>9</TD><TD>10</TD>
					</TR>
					<TR>
						<TD><em>aantal klinkers</em></TD><TD>`0`</TD><TD>`3`</TD><TD>`12`</TD><TD>`27`</TD><TD>`48`</TD><TD>`75`</TD><TD>`108`</TD><TD>`147`</TD><TD>`196`</TD><TD>`243`</TD><TD>`300`</TD>
					</TR>
			</TABLE>
				</li>
				<li>
					<br>
					<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/sierbestrating_grafiek.png"  width="200px"  />
				</li>
				<li>
					<br>
					<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/sierbestrating_grafiek_vergelijken.png"  width="200px"  />
				</li>
				<li>
					<em>aantal klinkers</em>`=2*n^2`
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 7</h3>
<p>
	Een thermometer geeft de buitentemperatuur aan in graden Celsius (°C).
	Als het waait, voelt het veel kouder aan dan de thermometer buiten aangeeft.
	Dit wordt de gevoelstemperatuur genoemd.
	De gevoelstemperatuur hangt ook af van de windsnelheid. Hoe harder het waait,
	hoe kouder het aanvoelt.
	De windsnelheid wordt gemeten in meter per seconde (m/s). 
	De gevoelstemperatuur bij een temperatuur van 0 °C kun je uitrekenen met de
	onderstaande formule:<br>
	`G=0,0124w^2-1,162w+1,41`<br>
	Hierin is `G` de gevoelstemperatuur in °C en `w` de windsnelheid in m/s. <br>
	Bij de volgende vragen gaan we uit van een temperatuur van `0` °C.
</p>
<ol>
	<li>
		De windsnelheid is `5` m/s. Laat met een berekening zien dat de gevoelstemperatuur bij deze
		windsnelheid ongeveer `−4` °C is. 
	</li>
	<li>
		Neem de tabel over en vul hem in.<br>
		<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>`w` in m/s</em></TD><TD>0</TD><TD>5</TD><TD>10</TD><TD>15</TD><TD>20</TD><TD>25</TD><TD>30</TD><TD>35</TD><TD>40</TD>
					</TR>
					<TR>
						<TD><em>`G` in °C</em></TD><TD></TD><TD>`-4`</TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD>
					</TR>
			</TABLE>
	</li>
	<li>
		Neem het assenstelsel hieronder over en teken daarin de grafiek van de gevoelstemperatuur.<br>
		<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/gevoelstemperatuur_assenstelsel.png"  width="400px"  />
	</li>
	<li>
		Gebruik de grafiek om uit te zoeken welke windsnelheid hoort bij een gevoelstemperatuur van `-15`°C. Denk aan het trekken van afleeslijntjes!
	</li>
<p>
	Hieronder zie je een tabel met daarin een omschrijving en daarnaast de verschillende
	windsnelheden die daarbij horen. <br>
	<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/gevoelstemperatuur_tabel.PNG"  width="400px"  />
</p>
	<li>
		Welke gevoelstemperaturen horen er bij harde wind? Leg uit hoe je aan je antwoord komt.
	</li>
</ol>

<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
		<ol>
			<li>
				`G=0,0124w^2-1,162w+1,41`<br>
				`G=0,0124*5^2-1,162*5+1,41`<br>
				`G=0,0124*25-1,162*5+1,41`<br>
				`G=0,31-5,81+1,41`<br>
				`G=-4,09 approx-4`
			</li>
			<li>
				<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>`w` in m/s</em></TD><TD>0</TD><TD>5</TD><TD>10</TD><TD>15</TD><TD>20</TD><TD>25</TD><TD>30</TD><TD>35</TD><TD>40</TD>
					</TR>
					<TR>
						<TD><em>`G` in °C</em></TD><TD>`1,41`</TD><TD>`-4`</TD><TD>`-8,97`</TD><TD>-13,23`</TD><TD>`-16,87`</TD><TD>`-19,89`</TD><TD>`-22,29`</TD><TD>`-24,07`</TD><TD>`-25,23`</TD>
					</TR>
			</TABLE>
		</li>
		<li>
			<br>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/gevoelstemperatuur_grafiek.png"  width="400px"  />
		</li>
		<li>
			<br>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/gevoelstemperatuur_punt_aflezen.png"  width="400px"  />
		</li>
		<li>
			Lees uit de tabel af dat harde wind hoort bij een windsnelheid van `14` m/s tot `17` m/s.<br>
			Bereken met de formule welke gevoelstemperaturen daar bij horen.<br>
			`G=0,0124*14^2-1,162*14+1,41 = -12,43`<br>
			`G=0,0124*17^2-1,162*17+1,41 = -14,76`<br>
			Dus bij harde wind hoort een gevoelstemperatuur tussen de `-14,76` en `-12,43` °C.
		</li>
		</ol>

	</div>
	</div>
</div>	

<div class="tekstblok theorie analyse">
	<h3>Wortelformule</h3>
	<p>
		In opdracht 4 heb je een formule gekregen met een kwadraat erin. Dit heet zoals je weet uit de taak <a href="http://wiskunde.vathorstcollege.nl/index2.php?p=analyse_kwadratische_verbanden_vmbo-t" target="_blank">kwadratische verbanden</a> een kwadratische formule.
		Er zijn ook formules met een wortel. Zo'n formule heet een <b>wortelformule</b>.
	</p>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 8</h3>
	<p>
		In opdracht `4` heb je gezien dat je de oppervlakte van een vierkant kunt uitrekenen met de formule:<br>
		<em>Oppervlakte</em>`=`<em>zijde</em><sup>2</sup>.<br>
		Er is ook een formule om de <em>zijde</em> van een vierkant te berekenen als je de <em>oppervlakte</em> van het vierkant weet.
		<em>zijde</em>`=sqrt(O)`.<br>
		Hierin is zijde in cm. en <em>O</em> de oppervlakte in cm<sup>2</sup>.<br>
	</p>
	<ol>
		<li>
			Bereken de <em>zijde</em> van een vierkant met oppervlakte `49`  cm<sup>2</sup>.
		</li>
		<li>
			Bereken de <em>zijde</em> van een vierkant met oppervlakte `80`  cm<sup>2</sup>. Rond je antwoord af op `1` decimaal.
		</li>
		<li>
			Neem de tabel over en vul hem in.<br>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>Oppervlakte</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD><TD>8</TD><TD>9</TD><TD>10</TD>
					</TR>
					<TR>
						<TD><em>zijde</em></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD>
					</TR>
			</TABLE>
		</li>
		<li>
			Neem het assenstelsel hieronder over en teken daarin de grafiek van de oppervlakte.<br>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/zijde_assenstelsel.png"  width="300px"/>
		</li>
	</ol>


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
		<ol>
		<li>
			<em>zijde</em>`=sqrt49`<br>
			<em>zijde</em>`= 7`
		</li>
		<li>
			<em>zijde</em>`=sqrt80`<br>
			<em>zijde</em>`= 8,9`
		</li>
		<li>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>Oppervlakte</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD><TD>8</TD><TD>9</TD><TD>10</TD>
					</TR>
					<TR>
						<TD><em>zijde</em></TD><TD>`0`</TD><TD>`1`</TD><TD>`1,4`</TD><TD>`1,7`</TD><TD>`2`</TD><TD>`2,2`</TD><TD>`2,4`</TD><TD>`2,6`</TD><TD>`2,8`</TD><TD>`3`</TD><TD>`3,2`</TD>
					</TR>
			</TABLE>
		</li>
		<li>
			<br>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/zijde_grafiek.png"  width="300px"/>
		</li>
		</ol>

	</div>
	</div>
</div>	

<div class="tekstblok theorie analyse">
	<h3>Wortels op de getallenlijn </h3>
	
	<p>
		Hieronder zie je een stukje van een getallenlijn.
	<img src="../afbeeldingen/vaar_kwadraten_en_wortels_2thv/wortelgetallenlijn.png" alt="wortelgetallenlijn" width="600" height="" />
	</p>
	<p>
		Je ziet dat `sqrt1`, `sqrt4` en `sqrt9` overeenkomen met de getallen `1`, `2` en `3`.
	</p>
	<p>
		Omdat `sqrt6` ligt tussen `sqrt4` en `sqrt9`, ligt de uitkomst van `sqrt6` tussen `2` en `3`. 
	</p>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 9</h3>
	<p>
		Bepaal van elke wortel tussen welke twee hele getallen die ligt.<br>
		Doe het zo:<br> `sqrt3` ligt tussen `1` en `2`, want `sqrt1=1` en `sqrt4=2`
	</p>
	<ol>
		<li>
			`sqrt8` ligt tussen `2` en `3`, want `sqrt(...)=...` en `sqrt...=...`
		</li>
		<li>
			`sqrt11` ligt tussen `3` en `...`, want `sqrt...=...` en `sqrt16=...`
		</li>
		<li>
			`sqrt20` ligt tussen `...` en `...`, want `sqrt...=...` en `sqrt...=...`
		</li>
		<li>
			`sqrt50` ligt tussen `...` en `...`, want `sqrt...=...` en `sqrt...=...`
		</li>
		<li>
			`sqrt78` ligt tussen `...` en `...`, want `sqrt...=...` en `sqrt...=...`
		</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
				`sqrt8` ligt tussen `2` en `3`, want `sqrt(4)=2` en `sqrt9=3`
			</li>
			<li>
				`sqrt11` ligt tussen `3` en `4`, want `sqrt9=3` en `sqrt16=4`
			</li>
			<li>
				`sqrt20` ligt tussen `4` en `5`, want `sqrt16=4` en `sqrt25=5`
			</li>
			<li>
				`sqrt50` ligt tussen `7` en `8`, want `sqrt49=7` en `sqrt64=8`
			</li>
			<li>
				`sqrt78` ligt tussen `8` en `9`, want `sqrt64=8` en `sqrt81=9`
			</li>
		</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 10</h3>
	<ol>
		<li>
			Maak een getallenlijn van `0` t/m `12` van `24` cm lang. Je mag je schrift een kwartslag draaien.
		</li>
		<li>
			Zet de getallen van `0` tot en met `12` met `2` cm tussenruimte onder de getallenlijn.
		</li>
		<li>
			Zet de volgende wortels (ongeveer) op de juiste plek boven de getallenlijn: <br>
			`sqrt2`, `sqrt3`, `sqrt5`, `sqrt7`, `sqrt10`, `sqrt15`, `sqrt30`, `sqrt45`, `sqrt90`, `sqrt100`, `sqrt120` en `sqrt144`.
		</li>
		<li>
			Tussen welke hele getallen vallen alle wortels van de getallen van 10 t/m 80?
		</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				<img src="../afbeeldingen/vaar_kwadraten_en_wortels_2thv/uitwerking_wortels_getallenlijn.png" alt="uitwerking_wortels_getallenlijn" width="600" height="" /><br>
				De wortels 10 t/m 80 liggen tussen 3 en 9.
			</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 11</h3>
		<p>In de taak <a href="http://wiskunde.vathorstcollege.nl/index2.php?p=vaar_kwadraten_en_wortels_2thv" target="_blank">kwadraten en wortels</a>
			heb je geleerd wat wortels zijn en hoe je met de rekenmachine kwadraten en wortels kunt uitrekeken.<br>
		</p>

			
	<aside class="tekstballon_theorie" style="width: 250px !important">
	<p>
		`approx` betekent <em>ongeveer</em><br>
		bijvoorbeeld: `sqrt7 approx 2`,`65`<br>
		<em>"Wortel 7 is ongeveer 2,65."</em>
	</p>
	</aside>
	<p>
		Bereken met behulp van je rekenmachine, rond af op 2 decimalen. Vragen over afronden? Kijk bij de taak <a href="http://wiskunde.vathorstcollege.nl/index2.php?p=vaar_afronden">Afronden</a> voor uitleg.
	</p>
		<table>
			<tr>
				<td width="300">
					<ol>
						<li>
							`sqrt2`
						</li>
						<li>
							`sqrt3`
						</li>
						<li>
							`sqrt5`
						</li>
					</ol>
				</td>
				<td width="300">
					<ol start="4">
						<li>
							`sqrt6`
						</li>
						<li>
							`sqrt10`
						</li>
						<li>
							`sqrt15`
						</li>
					</ol>
				</td>
			</tr>
		</table>

		<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<table>
			<tr>
				<td width="300">
					<ol>
						<li>
							`sqrt2 = 1`,`141421... approx 1`,`14`
						</li>
						<li>
							`sqrt3 = 1`,`732050... approx 1`,`73`
						</li>
						<li>
							`sqrt5 = 2`,`236067... approx 2`,`24`
						</li>
					</ol>
				</td>
				<td width="300">
					<ol start="4">
						<li>
							`sqrt6 = 2`,`449489... approx 2`,`45`
						</li>
						<li>
							`sqrt10 = 3`,`162277... approx 3`,`16`
						</li>
						<li>
							`sqrt15 = 3`,`872983... approx 3`,`87`
						</li>
					</ol>
				</td>
			</tr>
		</table>
		<p>
			Als antwoord volstaat het om op te schrijven: `sqrt2 approx 1`,`14`. 
		</p>
		</div>
		</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 12</h3>
	<p>
		Bereken en rond af op twee decimalen.
	</p>
	<table>
			<tr>
				<td width="300">
					<ol>
						<li>
							`sqrt64-sqrt7 = `
						</li>
						<li>
							`sqrt(64-7) = `
						</li>
						<li>
							`sqrt17 / sqrt7 = `
						</li>
					</ol>
				</td>
				<td width="300">
					<ol start="4">
						<li>
							`sqrt6 * sqrt2 = `
						</li>
						<li>
							`5/(sqrt10-sqrt3) = `
						</li>
						<li>
							`3,4*sqrt15 = `
						</li>
					</ol>
				</td>
			</tr>
		</table>
		

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">

	<table>
			<tr>
				<td width="300">
					<ol>
						<li>
							`sqrt64-sqrt7 = `5,`354... approx 5`,`35`
						</li>
						<li>
							`sqrt(64-7) = 7`,`549.... approx 5`,`55`
						</li>
						<li>
							`sqrt17 / sqrt7 = 1`,`558... approx 1`,`56`
						</li>
					</ol>
				</td>
				<td width="300">
					<ol start="4">
						<li>
							`sqrt6 * sqrt2 = 3`,`464... approx 3`,`46`
						</li>
						<li>
							`5/(sqrt10-sqrt3) = 1`,`738... approx 1`,`74`
						</li>
						<li>
							`3,4*sqrt15 = 13`,`168... approx 13`,`17`
						</li>
					</ol>
				</td>
			</tr>
		</table>
		<p>
			Als antwoord volstaat het om op te schrijven: `sqrt2 approx 1`,`14`. 
		</p>
		</div>
		</div>
</div>
		
<div class="tekstblok opdracht">
	<h3>opdracht 13</h3>
	<p>
		<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/dominostenen_foto.PNG"  width="300px"/><br>
		Bij Domino Day worden miljoenen dominostenen in rijen neergezet. Door de
		eerste steen van zo’n rij om te stoten, valt daarna de hele rij om.
		De dominostenen staan op onderling gelijke afstanden van elkaar.
		De snelheid waarmee zo’n rij omvalt hangt af van de hoogte van dominostenen
		en kun je met de volgende woordformule berekenen:<br>
		<em>snelheid</em> `=50*sqrt(h)`
		<br>
		Hierin is snelheid de snelheid van de rij omvallende dominostenen in centimeter
		per seconde (cm/s) en `h` de hoogte van de dominosteen in cm. 
	</p>
	<ol>
		<li>
			Laat met een berekening zien dat de dominostenen met een hoogte van `9` cm,
			omvallen met een snelheid van `150` cm/s.
		</li>
		<li>
			Neem de tabel over en vul hem in.<br>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>`h`</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD><TD>8</TD><TD>9</TD><TD>10</TD><TD>11</TD><TD>12</TD>
					</TR>
					<TR>
						<TD><em>snelheid</em></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD>`150`</TD><TD></TD><TD></TD><TD></TD>
					</TR>
			</TABLE>
		</li>
		<li>
			Neem het assenstelsel hieronder over en teken daarin de grafiek van de snelheid.<br>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/dominostenen_assenstelsel.png"  width="300px"/>
		</li>
	</ol>
		
	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
		<ol>
			<li>
				<em>snelheid</em> `=50*sqrt(9)`<br>
				<em>snelheid</em> `=50*3`<br>
				<em>snelheid</em> `=150`		
			</li>
			<li>
				<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>`h`</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD><TD>8</TD><TD>9</TD><TD>10</TD><TD>11</TD><TD>12</TD>
					</TR>
					<TR>
						<TD><em>snelheid</em></TD><TD>`0`</TD><TD>`50`</TD><TD>`70,7`</TD><TD>`86,6`</TD><TD>`100`</TD><TD>`111,8`</TD><TD>`122,5`</TD><TD>`132,3`</TD><TD>`141,4`</TD><TD>`150`</TD><TD>`158,1`</TD><TD>`165,8`</TD><TD>`173,2`</TD>
					</TR>
				</TABLE>
			</li>
			<li>
				<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/dominostenen_grafiek.png"  width="400px"/>
			</li>
		</ol>
		
	</div>
	</div>
</div>			

<div class="tekstblok opdracht">
	<h3>opdracht 14</h3>
	<p>
		De tijd die de slinger van een klok nodig heeft om één
		keer van links naar rechts en weer terug te gaan, heet de
		slingertijd. De slingertijd kan met de volgende formule
		worden berekend:
		<em>slingertijd</em>`=0,2*sqrt(l)`.<br>
		Hierin is slingertijd in seconden en <em>l</em> de lengte van de slinger in
		centimeters.
	</p>
	<ol>
		<li>
			Een klok heeft een slinger met een lengte van 40 cm.
			Laat met een berekening zien dat de slingertijd bij
			deze klok afgerond 1,3 seconden is.
		</li>
		<li>
			Neem de tabel over en vul hem in.<br>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>`l`</em></TD><TD>0</TD><TD>20</TD><TD>40</TD><TD>60</TD><TD>80</TD><TD>100</TD><TD>120</TD>
					</TR>
					<TR>
						<TD><em>slingertijd</em></TD><TD></TD><TD></TD><TD>`1,3`</TD><TD></TD><TD></TD><TD></TD><TD></TD>
					</TR>
			</TABLE>
		</li>
		<li>
			Neem het assenstelsel hieronder over en teken daarin de grafiek van de slingertijd.<br>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/slingertijd_assenstelsel.png"  width="300px"/>
		</li>
		<li>
			Een klok heeft een <em>slingertijd</em> van `1` seconde. Gebruik de grafiek om uit te zoeken hoe lang de slinger is. Leg je antwoord uit door het tekenen van afleeslijntjes.
		</li>
		<li>
			Malik denkt dat als de slinger van een klok tweemaal zo
			lang is, de slingertijd dan ook tweemaal zo groot wordt.
			Heeft Malik gelijk? Laat zien hoe je aan je antwoord
			komt.
		</li>
	</ol>

<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
		<ol>
		<li>
			<em>slingertijd</em>`=0,2*sqrt(l)`<br>
			<em>slingertijd</em>`=0,2*sqrt40`<br>
			<em>slingertijd</em>`=0,2*6,32..`.<br>
			<em>slingertijd</em>`=1,2649.. approx1,3`.<br>
		</li>
		<li>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD><em>`l`</em></TD><TD>0</TD><TD>20</TD><TD>40</TD><TD>60</TD><TD>80</TD><TD>100</TD><TD>120</TD>
					</TR>
					<TR>
						<TD><em>slingertijd</em></TD><TD>`0`</TD><TD>`0,9`</TD><TD>`1,3`</TD><TD>`1,5`</TD><TD>`1,8`</TD><TD>`2`</TD><TD>`2,2`</TD>
					</TR>
			</TABLE>
		</li>
		<li>
			<br>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/slingertijd_grafiek.png"  width="300px"/>
		</li>
		<li>
			<br>
			<img src="/afbeeldingen/analyse_allerlei_verbanden_2t/slingertijd_punt_aflezen.png"  width="300px"/>
		</li>
		<li>
			Bereken de <em>slingertijd</em> voor een slinger met lengte `80`cm.<br>
			<em>slingertijd</em>` = 0,2*sqrt80 approx1,78885..`<br>
			De <em>slingertijd</em> van een slinger van `40` cm was `1,3` seconden (zie a.).<br> 
			De slingertijd van een slinger van `80` cm is dus minder dan tweemaal zo
			groot als de slingertijd van een slinger van `40` cm, dus Malik heeft geen
			gelijk <br>
		</li>
 
		
		</ol>

	</div>
	</div>
</div>	

<div class="tekstblok opdracht">
	<h3>opdracht 15</h3>
	<p>
		Een heteluchtballon vaart op een hoogte van `500` meter. De ballon gaat dalen. Hierbij hoort de formule:

		<em>tijd in minuten</em>`=(500-h)/25`<br>
		Hierin is `h` de hoogte in meters.
	</p>
	<ol>
		<li>
			Lisa rekent uit dat het `496` minuten duurt om de ballon te laten dalen naar een hoogte van `100` meter. Ze snapt dat dit wel erg lang is. Wat doet ze fout?
		</li>
		<li>
			Bereken in hoeveel minuten de ballon daalt van een hoogte van `500` meter naar een hoogte van `100` meter.
		</li>
	</ol>

<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
		<ol>
		<li>
			ze doet `500-100/25` Maar je moet eerst `500-100` uitrekenen en dan pas delen door `25`.
		</li>
		<li>
			<em>tijd in minuten</em>`=(500-h)/25`<br>
			<em>tijd in minuten</em>`=(500-100)/25`<br>
			<em>tijd in minuten</em>`=400/25 = 16`<br>
			Het duurt dus `16` minuten voordat de ballon gedaald is naar `100` meter.
		</li>
		</ol>

	</div>
	</div>
</div>	

<div class="tekstblok theorie analyse">
	<h3>Formules met een deelstreep</h3>
	<p>
		In de vorige opgave heb je gezien dat er ook formules zijn met deelstrepen. Bij dit soort formules is het belangrijk dat je altijd eerst uitrekent wat er <b>boven</b> de deelstreep en <b>onder</b> de deelstreep uitkomt. Daarna pas delen!
		Dus:<br>
		`(24-6)/(1+5)=18/6=3`<br>
		Als je de som hierboven wil uitrekenen met je rekenmachine dan moet je altijd haakjes gebruiken! Zet de teller tussen haakjes en zet de noemer tussen haakjes:<br>
		(24-6)/(1+5)=
	</p>
</div>		

<div class="tekstblok opdracht">
	<h3>opdracht 16</h3>
	<p>

		Een heteluchtballon vaart op een hoogte van `140` meter. De ballon gaat nog verder stijgen. Hierbij hoort de formule:

		<em>tijd in minuten</em>`=(h-140)/20`<br>
		Hierin is `h` de hoogte in meters.
	</p>
	<ol>
		<li>
			Bereken hoeveel minuten het duurt om de ballon  van `140` meter naar `280` meter te laten stijgen.
		</li>
		<li>
			Bereken hoeveel minuten het duurt om de ballon  van `140` meter naar `560` meter te laten stijgen.
		</li>
	</ol>
	

<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
		<ol>
		<li>
			<em>tijd in minuten</em>`=(h-140)/20`<br>
			<em>tijd in minuten</em>`=(200-140)/20`<br>
			<em>tijd in minuten</em>`=60/20 = 3`<br>
			Het duurt `3` minuten.
		</li>
		<li>
			<em>tijd in minuten</em>`=(h-140)/20`<br>
			<em>tijd in minuten</em>`=(560-140)/20`<br>
			<em>tijd in minuten</em>`=420/20 = 21`<br>
			Het duurt `21` minuten.
		</li>
		</ol>

	</div>
	</div>
</div>	


<div class="tekstblok theorie analyse">
	<h3>Inhoud</h3>
	<p>
		Voorkennis: 
		<ol>
			<li>
				rekenen met wortels;
			</li>
			<li>
				lineaire en kwadratische verbanden;
			</li>
			<li>
				balansmethode.
			</li>
		</ol>

	</p>
	<p>
		Allerlei verbanden:
		<ol>
			<li>
				wortel verbanden;
			</li>
			<li>
				formules met een deelstreep;
			</li>
		</ol>
	</p>
</div>



<p>
	In deze taak zijn bewerkte examenopgaven gebruikt.
</p>


</div>

<div><!-- verwijzingen naar doelen, voorkennis, werkwijze en benodigdheden -->
	<div id="open_doelen" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>	Doelen</h3>
				<ol>
					<li>volgorde van bewerkingen kennen en toepassen;</li>
				<li>werkaanpak bij volgorde sommen leren.</li>
				</ol>
			</div>
		</div>
	<div id="open_voorkennis" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>Voorkennis</h3>
				<ol>
					<li>optellen, aftrekken, vermenigvuldigen en delen</li>
				</ol>
			</div>
		</div>
	<div id="open_werkwijze" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>Werkwijze</h3>
					 <p>
					Je maakt de opdrachten uit de taak in je schrift. Zorg voor een nette kantlijn en zet opgaven uit een opdracht steeds onder elkaar. Kijk nog even op de <a href="afbeeldingen/algemeen/voorbeeldbladzijde_wiskundeschrift.pdf" target="_blank">voorbeeldbladzijde</a> als je niet meer weet hoe je schrift eruit moet zien.
				</p>
					 <p>
					Sommige opdrachten verwijzen naar de DWO. Maak de gevraagde activiteiten. Let op: eindtoetsen kun je maar eenmaal maken, bij andere activiteiten kun je meestal eindeloos oefenen met steeds nieuwe opgaven.
				</p>
			</div>
			</div>
	<div id="open_benodigdheden" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>Benodigdheden</h3>
				<p>
					In deze taak heb je nodig:
					<ol>
						<li>Schrift, pen, potlood en gum.</li>
					</ol>
				</p>
			</div>
		</div>
</div><!-- /verwijzingen naar doelen, voorkennis, werkwijze en benodigdheden -->