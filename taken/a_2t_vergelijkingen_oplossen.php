<?php 
	//defineer taaknaam
	$taaknaam ="Lineaire vergelijkingen 2t";
?>


<?php
//Definieer sidebar
$doorverwijzingen = array(
	'#inleiding' => 'Inleiding',
	 '#theorieA' => 'Bordjesmethode I',
	 '#theorieB' => 'Bordjesmethode II',
	 '#theorieC' => 'Bordjesmethode III',
	 '#theorieD' => 'Oplossen met grafieken',
	 '#theorieE' => 'Balansmethode I',
	 '#theorieF' => 'Balansmethode II',	 
	 '#theorieG' => 'Balansmethode III',
	 '#proeftoets' => 'Proeftoets');  
?>


<title>Leerjaar 2t | <?php echo $taaknaam; ?></title>

<div class="taakinhoud">

<div class="tekstblok theorie analyse" id="inleiding">
	<h3>Inleiding</h3>
		<p>
			Deze taak is een vervolg op <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=a_2t_lineaire_verbanden">Lineaire verbanden</a>. In die taak leerde je onder andere vanuit de invoer de uitvoer berekenen. In deze taak ga je precies andersom: vanuit de uitvoer bereken je de invoer.
		</p>
		<p>
			Bij een <b>lineair verband</b> hoort een lineaire formule. De grafiek bij een lineaire formule is een rechte lijn.
		</p>
		<p class="geeltje">
			De <b>algemene vorm</b> van een lineaire formule is:
			<br>
			<nobr><em>uitvoer</em> = <span id="hellingsgetal">hellingsgetal</span> &times; <em>invoer</em> + <span id="startgetal">startgetal</span></nobr>
		</p>
		<p>			
			Stel dat het verband tussen de <em>tijd</em> (aantal weken) en het <em>Bedrag</em> (euro's) met de volgende formule wordt beschreven: 
		</p>
		<p>
			<em>B</em> = <span id="hellingsgetal">2</span><em>w</em> +  <span id="startgetal">5</span>
		</p>
		<p>
			In de formule geeft het <span id="hellingsgetal">hellingsgetal 2</span> de richting van de grafiek aan. Het <span id="startgetal">startgetal 5</span> is de <em>y</em>-coördinaat van het snijpunt met de verticale as.
		</p>
		<p>
			Om een grafiek bij dit verband te maken, gebruik je een tabel of direct start- en hellingsgetal.
		</p>	
		<div class="table-responsive verhouding">
			<table class="verhouding">
				<tbody>
					<tr class="borderbottom">
						<td><em>w</em></td>
						<td colspan="2">0</td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2">3</td>
						<td colspan="2">4</td>
						<td colspan="2">5</td>
					</tr>
					<tr>
						<td><em>B</em></td>
						<td colspan="2"><span id="startgetal">5</span></td></td>
						<td colspan="2">7</td>
						<td colspan="2">9</td>
						<td colspan="2">11</td>
						<td colspan="2">13</td>
						<td colspan="2">15</td>
					</tr>			
				</tbody>
			</table>
		</div>
	<div class="row">
		<div class="col-xs-8">		
		
		<p>
		 	Uit de tabel haal je de punten: (0, 5) en (5, 15). Zet deze punten in een geschikt assenstelsel, verbind ze met een lijn en je hebt de grafiek.
		 </p>
		 <p>
		 	Uit de formule haal je het snijpunt met de verticale as: (0, 5). Vervolgens bepaal je met behulp van het hellingsgetal het volgende punt: (1, 7), want <nobr>5 + <span id="hellingsgetal">2</span> = 7</nobr>.
		 </p>
		</div>          
		<div class="col-xs-4">
			<img class="img-responsive" src="../afbeeldingen/analyse_leerjaar_2/lineair_verband.png" alt="lineair_verband" width="" height="" />
		</div>
	</div>
	<p>
		In de grafiek is het verband tussen <em>tijd</em> (aantal weken) en <em>Bedrag</em> (euro's) weergegeven. Merk op dat de grootheden en eenheden bij de assen staan. Ook de stapgrootte langs de assen is constant.
	</p>
</div>

<div class="tekstblok opdracht" id="1">
	<h3>Opdracht 1 Twee grafieken</h3>
	<div class="row">
		<div class="col-md-6">
			<ol>
				<li>
					Teken de grafiek bij `N = 3t + 2`.<br>
					Gebruik daarbij tabel en assenstelsel.
					<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>t</em></td>
							<td colspan="2">0</td>
							<td colspan="2">2</td>
							<td colspan="2">4</td>
							<td colspan="2">6</td>
						</tr>
						<tr>
							<td><em>N</em></td>
							<td colspan="2"><span id="startgetal">...</span></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>	
					</tbody>
				</table>
			</div>
				</li>
			</ol>
		</div>
		<div class="col-md-4">
			<img class="img-medium" src="../afbeeldingen/analyse_leerjaar_2/assenstelsel_Nent.png" alt="assenstelsel_Nent" width="" height="" />	
		</div>				
	</div>
	<p> <br></p>
	<div class="row">
		<div class="col-md-6">
			<ol start="2">
				<li>
					Teken ook de grafiek bij `y = -2t + 3`.<br>
					Gebruik weer tabel en assenstelsel.
					<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>t</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
						</tr>
						<tr>
							<td><em>y</em></td>
							<td colspan="2"><span id="startgetal">...</span></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>	
					</tbody>
				</table>
			</div>
				</li>
			</ol>
		</div>
		<div class="col-md-4">
			<img class="img-medium" src="../afbeeldingen/analyse_leerjaar_2/assenstelsel_yent.png" alt="assenstelsel_yent" />	
		</div>				
	</div>	
</div>

<div class="tekstblok opdracht" id="2">
	<h3>Opdracht 2 OV-chipkaart</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Het bedrag `B` in centen dat je met een OV-chipkaart moet betalen 
				voor een busreis kun je berekenen met de formule:
			</p>
			<p>
				`B= 83 + 13k`<br>
				Met `k` = <em>aantal gereden kilometers</em>.
			</p>
			<ol>
				<li>
					Hoeveel cent kost een rit van 10 kilometer?
				</li>
				<li>
					Er staat nog €`1,35` op Peters persoonlijke ov-chipkaart op het moment 
					dat hij de bus in stapt. Zoek uit hoeveel kilometer hij nog met de bus kan rijden.
				</li>
			</ol>		
		</div>
		<div class="col-xs-5">
			<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2hv/bus.png">
		</div>
	</div>
	
<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`B=13k+83`<br>
					Neem `k=10` <br>
					`B=13*10+83`<br>
					`B=130+83=213`<br>
					Dus een rit van `10` kilometer kost `213` cent.
				</li>
				<li>
					Eerst €`1,35` omrekenen naar centen. Dit is `135` cent. Nu moet er eerst `83` cent vanaf.<br>
					`135-83=52`. Ieder kilometer kost `13` cent. `52/13 = 4`. Je kan dus nog 4 kilometer met de bus.
				</li>
			</ol>
			
		</div>
		</div>		
</div>

<div class="tekstblok opdracht" id="3">
	<h3>Opdracht 3 Fasthorst</h3>
	<p>
		Scooterbedrijf Fasthorst verhuurt scooters.Als je een scooter huurt betaal je een vast bedrag van €5 en nog €3 per uur. De formule om de kosten te berekenen is:
	</p>
	<div class="row">
		<div class="col-xs-8">
			<p>
				`K =3u+5`<br>
				Met `u` = aantal uren en `K` = kosten in euro's.
			</p>
			<ol>
				<li>
					Gebruik de grafiek om af te lezen hoeveel ik moet betalen als ik een scooter `5` uur wil huren?
				</li>
				<li> 
					Controleer je antwoord met de formule.
				</li>
				<li>
					Ik krijg van het scooterbedrijf een rekening van €50.<br>
					Zoek met behulp van de grafiek uit hoe lang ik de scooter heb gehuurd.<br>
					Controleer je antwoord door het aantal uren in te vullen in de formule.
				</li>
				<li>
					Een vriend van Peter heeft ook een scooter gehuurd en krijgt een rekening van €40.
					Zoek met behulp van de grafiek uit hoe lang ik de scooter heb gehuurd.<br>
					Controleer je antwoord door het aantal uren in te vullen in de formule.
				</li>
			</ol>
		</div>
		<div class="col-xs-4">
			<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2hv/scooter_grafiek.png">
		</div>
	</div>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Als ik de scooter 5 uur wil huren kost mij dat € 20,-.
				</li>
				<li>
					`Kosten=3u+5`<br>
					`Kosten=3*5+5`<br>
					`Kosten=20`<br>
					Klopt!
				</li>
				<li><br>
					<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2hv/scooter_grafiek_antw_1.png" width="250px"><br>
					Ik heb de scooter `15` uur gehuurd.<br>
					`Kosten=3u+5`<br>
					`Kosten=3*15+5`<br>
					`Kosten=45+5=50`<br>
					Klopt!
				</li>
				<li><br>
					<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2hv/scooter_grafiek_antw_2.png" width="250px"><br>
					Ik heb de scooter `12` uur gehuurd.<br>
					`Kosten=3u+5`<br>
					`Kosten=3*12+5`<br>
					`Kosten=36+5=41`<br>
					Klopt niet precies!
				</li>
			</ol>
		</div>
		</div>		
</div>

<div class="tekstblok opdracht" id="4">
	<h3>Opdracht 4 Vakantiefoto's</h3>
	<p>
		Lisa wil haar vakantiefoto's laten afdrukken. De kosten voor dit afdrukken kan ze berekenen met de volgende formule:<br>
		<em>Kosten in euro's</em> `= 0,25`&sdot;<em>Aantal foto's</em> `+ 7`
		<ol>
			<li>
				Wat betekent de `0,25` in de formule?
			</li>
			<li>
				Wat betekent de `7` in de formule?
			</li>
			<li>
				Bereken met de formule hoeveel Lisa moet betalen als ze 40 foto's wil laten afdrukken.
			</li>
			<li>
				Teken de grafiek bij de formule. Neem op de horzontale as stapgrootte 10. En op de verticale as stapgroote 2
				Gebruik daarbij de volgende tabel:
				<TABLE class="verhouding">
					<TR>
						<TD ><em>Aantal foto's</em></TD>
						<TD>0</TD><TD>100</TD>
					</TR>
					<TR>
						<TD><em>Kosten in euro's</em></TD>
						<TD></TD><TD></TD>
					</TR>
				</TABLE>
			</li>
			<li>
				Lees uit je grafiek af hoeveel foto's je kan laten afdrukken voor €22.
			</li>
			<li>
				Gebruik de grafiek om af te lezen hoeveel foto's je kan bestellen voor €16.
			</li>
			<li> 
				Controleer je antwoord van opgave f. met de formule? Had je het goed afgelezen?
			</li>	
		</ol>
	</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					De kosten per foto zijn 25 cent.
				</li>
				<li>
					De vaste kosten zijn €7, dit zijn bijvoorbeeld verwerkingskosten.
				</li>
				<li>
					<em>Kosten in euro's</em> `= 0,25`&sdot;<em>Aantal foto's</em> `+ 7`<br>
					<em>Kosten in euro's</em> `= 0,25`&sdot;<em>40</em> `+ 7`<br>
					<em>Kosten in euro's</em> `= `10 + 7`<br>
					<em>Kosten in euro's</em> `= `17`<br>
					Lisa moet €17 betalen.
				</li>
				<li>
					<br>
					<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2t/antwoord_opdracht_7.png" width="450px">
				</li>
				<li>
					<br>
					<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2t/antwoord_opdracht_7e.png" width="450px"><br>
					Je kan 60 foto's laten afdrukken voor €22.
				</li>
				<li>
					<br>
					<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2t/antwoord_opdracht_7f.png" width="450px"><br>
					Je kan 37 foto's laten afdrukken voor €16.
				</li>
				<li>
					<em>Kosten in euro's</em> `= 0,25`&sdot;<em>Aantal foto's</em> `+ 7`<br>
					<em>Kosten in euro's</em> `= 0,25`&sdot;<em>37</em> `+ 7`<br>
					<em>Kosten in euro's</em> `= 9,25 + 7`<br>
					<em>Kosten in euro's</em> `= 16,25`<br>
					Lisa moet €16,25 betalen voor 37 foto's. <br>
					Aflezen in de grafiek geeft dus niet precies het juiste antwoord. 
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht " id="5">
	<h3>Opdracht 5 Sponsorloop</h3>
	<p>
		Youssef doet mee aan een sponsorloop. Hij krijgt €3 en voor ieder rondje dat hij loopt ontvangt hij €1. 
		<ol>
			<li>
				Neem over en vul in:<br>
				<em>Bedrag</em> `=` ..<em> &sdot; aantal rondjes</em> `+` ...
			</li>
			<li>
				Teken de grafiek die hoort bij de formule hierboven.
			</li>
			<li>
				Lees uit de grafiek af hoeveel rondjes Youssef moet lopen om €10 te verdienen.
			</li>
		</ol>
	</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<em>Bedrag</em> `= 1`<em> &sdot; aantal rondjes</em> `+ 3`.
				</li>
				<li>
					<br>
					<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2t/antwoord_opdracht_8b.png" width="400px">
				</li>
				<li>
					<br>
					<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2t/antwoord_opdracht_8c.png" width="400px"><br>
					Youssef moet 7 rondjes lopen om €10 te verdienen.
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie A Bordjesmethode I</h3>
		<p>
			In de opgaven hierboven heb je vergelijkingen opgelost met grafieken.
		Je kunt vergelijkingen ook oplossen met de
		<b>bordjesmethode</b>. 
		</p>
	
	
	<p>
		`x + 3 = 10`	is een voorbeeld van een <b>vergelijking</b>. In een vergelijking staat altijd een onbekend getal. Het onbekende getal geven we aan met een letter. Hier is dat de letter `x`. Dit noemen we de <b>variabele</b>.
	</p>
	<p>
		We zoeken de waarde van `x` waarvoor de vergelijking klopt. Het getal voor `x` waarvoor de vergelijking klopt, is de <b>oplossing</b> van de vergelijking.</b> 
	</p>
	<p>
		Vergelijkingen kun je oplossen met behulp van de <b>bordjesmethode</b>.<br>
		De bordjesmethode werkt zo:
	</p>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 1</p>
		</div>
		<div class="col-md-5">
			<p>
				Neem de vergelijking over.
			</p>
		</div>
		<div class="col-md-5">
			<p>
				`x + 3 = 10`
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 2</p>
		</div>
		<div class="col-md-5">
			<p>
				Leg een bordje op `x`.
			</p>
		</div>
		<div class="col-md-5">
			<p>
				<span class="formula"> ? </span> `+`  `3 = 10`
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 3</p>
		</div>
		<div class="col-md-5">
			<p>
				Onder het bordje moet `7` leggen, want:
			</p>
		</div>
		<div class="col-md-5">
			<p>
				`7 + 3 = 10`
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 4</p>
		</div>
		<div class="col-md-5">
			<p>
				Nu weet je dat `x` gelijk is aan `7`.
			</p>
		</div>
		<div class="col-md-5">
			<p>
				`x = 7`
			</p>
		</div>			
	</div>

</div>

<div class="tekstblok opdracht" id="6">
	<h3>Opdracht 6 Bordjesmethode</h3>
	<p>
		Los de volgende vergelijkingen op met de bordjes methode:
	</p>
	<div class="row">
		<div class="col-md-6">
			<ol>
					<li>`x+12=30`</li>
					<li>`x-22=35`</li>
					<li>`x-7=-5`</li>
			</ol>
		</div>
		<div class="col-md-6">
			<ol start="4">
					<li>`2 &sdot; x=10`</li>
					<li>`24 : x=6`</li>
					<li>`-8*x=32`</li>
				</ol>
		</div>
	</div>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`x+12=30`<br>
					<span class="formula"> ? </span> `+` `12=30`<br>
					`x=18`
				</li>
				<li>
					`x-22=35`<br>
					<span class="formula"> ? </span> `-` `22=35`<br>
					`x=57`
				</li>
				<li>
					`x-7=-5`<br>
					<span class="formula"> ? </span> `-` `7=-5`<br>
					`x=2`
				</li>
				<li>
					`2&sdot;x=10`<br>
					`2` &sdot; <span class="formula"> ? </span> `=10`<br>
					`x=5`
				</li>
				<li>
					`24/x=6`<br><br>
					`24/? =6`<br>
					`x=4`
				</li>					
			</ol>
		</div>		
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieB">
	<h3>Theorie B Bordjesmethode II</h3>
	<p>
		Nog een voorbeeld van de bordjesmethode.<br>
		Los op: `5x + 23 = 38`
	</p>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 1</p>
		</div>
		<div class="col-md-5">
			<p>
				Neem de vergelijking over.
			</p>
		</div>
		<div class="col-md-5">
			<p>
				`5x + 23 = 38`
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 2</p>
		</div>
		<div class="col-md-5">
			<p>
				Leg een bordje op `5x`.
			</p>
		</div>
		<div class="col-md-5">
			<p>
				<span class="formula"> ? </span> `+`  `23 = 38`
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 3</p>
		</div>
		<div class="col-md-5">
			<p>
				Onder het bordje moet `15` liggen, want:
			</p>
		</div>
		<div class="col-md-5">
			<p>
				`15 + 23 = 38`
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 4</p>
		</div>
		<div class="col-md-5">
			<p>
				Nu weet je dat `5x` gelijk is aan `15`.
			</p>
		</div>
		<div class="col-md-5">
			<p>
				`5x = 15`
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 5</p>
		</div>
		<div class="col-md-5">
			<p>
				Nu leggen we een bordje op `x`.<br>
				Weet je nog: `5x` betekent `5 &sdot;x`!			
			</p>
		</div>
		<div class="col-md-5">
			<p>
			`5 &sdot;`<span class="formula"> ? </span>`= 15`
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 6</p>
		</div>
		<div class="col-md-5">
			<p>
				Onder het bordje moet `3` liggen, want:
			</p>
		</div>
		<div class="col-md-5">
			<p>
				`5*3=15`<br>
				Dus `x=3`
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 7</p>
		</div>
		<div class="col-md-5">
			<p>
				Controleer je antwoord door dit in te vullen.	
			</p>
		</div>
		<div class="col-md-5">
			<p>
				`5*3+23=38` Klopt!
			</p>
		</div>			
	</div>
</div>

<div class="tekstblok opdracht" id="7">
	<h3>Opdracht 7 Bordjesmethode</h3>
	<p>
		Los de volgende vergelijkingen op met de bordjes methode.
	</p>
	<div class="row">
		<div class="col-md-6">
			<ol>
				<li>`2x+7=13`</li>
				<li>`3x+24=51`</li>
				<li>`4x-8=52`</li>
			</ol>
		</div>
		<div class="col-md-6">
			<ol start="4">
				<li>`3+6x=6`</li>
				<li>`-8+5x=17`</li>
				<li>`17-8x=-23`</li>
			</ol>
		</div>
	</div>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`2x+7=13`<br>
					<span class="formula"> ? </span> `+` `7=13`<br>
					`2x=6`<br>
					`2` `*` <span class="formula"> ? </span> `= 6`<br>
					`x=3`
				</li>
				<li>
					`3x+24=51`<br>
					<span class="formula"> ? </span> `+` `24=51`<br>
					`3x=27`<br>
					`3` `*` <span class="formula"> ? </span> `= 27`<br>
					`x=9`
				</li>
				<li>
					`4x-8=52`<br>
					<span class="formula"> ? </span> `-` `8=52`<br>
					`4x=60`<br>
					`4` `*` <span class="formula"> ? </span> `= 60`<br>
					`x=15`
				</li>
				<li>
					`3+6x=6`<br>
					`3 +` <span class="formula"> ? </span> `=6`<br>
					`6x=3`<br>
					`6` `*` <span class="formula"> ? </span> `= 3`<br>
					`x=1/2`
				</li>
				<li>
					`-8+5x=17`<br>
					`-8 +` <span class="formula"> ? </span> `=17`<br>
					`5x=25`<br>
					`5` `*` <span class="formula"> ? </span> `= 25`<br>
					`x=5`
				</li>
				<li>
					`17-8x=-23`<br>
					`17 -` <span class="formula"> ? </span> `=-23`<br>
					`8x=40`<br>
					`8` `*` <span class="formula"> ? </span> `= 40`<br>
					`x=5`
				</li>
			</ol>
		</div>		
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieC">
	<h3>Theorie C Bordjesmethode III</h3>
	<p>
		Nog een voorbeeld van de bordjesmethode. Los op: `2*(x + 3) = 14`
	</p>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 1</p>
		</div>
		<div class="col-md-5">
			<p>
				Neem de vergelijking over.
			</p>
		</div>
		<div class="col-md-5">
			<p>
				`2*(x + 3) = 14`
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 2</p>
		</div>
		<div class="col-md-5">
			<p>
				Leg een bordje op `(x + 3)`.
			</p>
		</div>
		<div class="col-md-5">
			<p>
				`2 *`<span class="formula"> ? </span> `= 14`
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 3</p>
		</div>
		<div class="col-md-5">
			<p>
				2 &sdot; <span class="formula"> 7 </span> = 14, dus:
			</p>
		</div>
		<div class="col-md-5">
			<p>
				(`x` + 3) = <span class="formula"> 7 </span>
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 4</p>
		</div>
		<div class="col-md-5">
			<p>
				Nu leggen we een bordje op `x`.			
			</p>
		</div>
		<div class="col-md-5">
			<p>
			<span class="formula"> ? </span> + 3 = 7
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 5</p>
		</div>
		<div class="col-md-5">
			<p>
				<span class="formula"> 4 </span> + 3 = 7, dus:
			</p>
		</div>
		<div class="col-md-5">
			<p>
				`x` = <span class="formula"> 4 </span>
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 6</p>
		</div>
		<div class="col-md-5">
			<p>
				Controleer door in te vullen.	
			</p>
		</div>
		<div class="col-md-5">
			<p>
				2 &sdot; (4 + 3) = 14 <span>  </span> Klopt!
			</p>
		</div>			
	</div>
</div>

<div class="tekstblok opdracht" id="8">
	<h3>Opdracht 8 Bordjesmethode</h3>
	<p>
		Los de volgende vergelijkingen op met de bordjesmethode.
	</p>
	<div class="row">
		<div class="col-md-6">
			<ol>
				<p>basis</p>
				<li>`2*(x+4)=12`</li>
				<li>`3*(x-2)=36`</li>
				<li>`-2*(x + 10)= - 42`</li>
			</ol>
		</div>
		<div class="col-md-6">
			<ol start="4">
				<p>uitdaging</p>
				<li>`3+6*(x + 3)=15`</li>
				<li>`-5+5*(x-7)=20`</li>
				<li>`24 - 8*(3*(x-1))= 0`</li>
			</ol>
		</div>
	</div>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<div class="row">
				<div class="col-md-6">
					<ol>
						<p>basis</p>
						<li>
							`2*(x+4)=12`<br>
							`2*`<span class="formula"> ? </span>`=12`<br>
							`x+4=6`<br>
							<span class="formula"> ? </span>`+4=6`<br>
							`x=2`
						</li>
						<li>
							`3*(x-2)=26`<br>
							`3*`<span class="formula"> ? </span>`=36`<br>
							`x-2=12`<br>
							<span class="formula"> ? </span>` - 2 = 12`<br>
							`x = 14`
						</li>
						<li>
							`-2*(x + 10)= - 42`<br>
							`-2* `<span class="formula"> ? </span>` = -42`<br>
							`x + 10 = 21`<br>
							<span class="formula"> ? </span>` + 10 = 21` <br>
							`x = 11`
						</li>
					</ol>
				</div>
				<div class="col-md-6">
					<ol start="4">
						<p>uitdaging</p>
						<li>
							`3+6*(x + 3)=15`<br>
							`3 + `<span class="formula"> ? </span>` = 15`<br>
							`6*(x + 3) = 12`<br>
							`6 * `<span class="formula"> ? </span>` = 12`<br>
							`x + 3 = 2`<br>
							`x = -1`
						</li>
						<li>
							`-5+5*(x-7)=20`<br>
							`-5 + `<span class="formula"> ? </span>`= 20`<br>
							`5*(x-7)= 25`<br>
							`5* `<span class="formula"> ? </span> `=25`<br>
							`x-7= 5`<br>
							`x = 12`
						</li>
						<li>
							`24 - 8*(3*(x-1))= 0`<br>
							`24-` <span class="formula"> ? </span> `=0`<br>
							`8*(3*(x-1))=24`<br>
							`8*` <span class="formula"> ? </span> `=24`<br>
							`3*(x-1)=3`<br>
							`3*`<span class="formula"> ? </span>`=3`<br>
							`x-1=1`<br>
							`x=2`
						</li>
					</ol>
				</div>
			</div>			
		</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="9">
	<h3>Opdracht 9 @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Lineaire vergelijkingen (vmbo-t)</em> en maak activiteit:
	</p>
	<ol id="numbers">
		<li>
			<em>De bordjesmethode</em>
		</li>
	</ol>
</div><!-- @DWO -->

<div class="tekstblok opdracht" id="10">
	<div class="row">
		<div class="col-md-8">
			<h3>Opdracht 10 Watertonnen</h3>
			<p>
				Twee tonnen A en B worden gevuld met water.<br>
				In het assenstelsel is voor beide tonnen de veranderende waterhoogte getekend. De groene grafiek hoort bij ton A, de blauwe grafiek bij ton B.
			</p>
			<ol>
				<li>
					Na hoeveel minuten zijn beide tonnen evenvol?	
				</li>
				<li>
					Hoe hoog staat het water dan
				</li>
				<li>
					Maak voor beide tonnen een formule van het verband tussen waterhoogte en tijd.<br>
					Neem <em>w</em> voor <em>Waterhoogte in cm</em> en <em>t</em> voor <em>tijd in minunten</em>.
				</li>
			</ol>
		</div>
		<div class="col-md-4">
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_waterhoogte_tijd.png" alt="grafiek_waterhoogte_tijd" width="" height="" />
		</div>
	</div>
	
 	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Na 2 minuten zijn beide tonnen evenvol.
				</li>
				<li>
					Het water staat dan 40 cm hoog.
				</li>
				<li>
					Ton A: <em>Waterhoogte in cm</em> = 10 &times; <em>tijd in minuten</em> + 20<br>
					Ton B: <em>Waterhoogte in cm</em> = 20 &times; <em>tijd in minuten</em><br>
					Bij ton B is het startgetal 0. In de formule laat je dat weg omdat het opschrijven van "+ 0" niets toevoegt.
				</li>
			</ol>
		</div>
	</div>	
</div>

<div class="tekstblok opdracht" id="11">
	<h3>Opdracht 11 Schilders</h3>
	<div class="row">
		<div class="col-md-6">
			<p>
				Hiernaast zie je de grafieken getekend die horen bij de schildersbedrijven "Witze" en schildersbedrijf "Anders". 
			</p>	
			
		</div>
		<div class="col-md-6">
			<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2hv/schildersbedrijven_vergelijken.png">
		</div>
	</div>
	<ol>
		<li>
			Wat moet je bij schildersbedrijf "Anders" betalen voor een schildersklus van `20` uur? Wat betaal je voor dezelfde klus bij "Witze"?
		</li>
	</ol>
	<p>
		In mijn huis is de gang toe aan een schilderbeurt. De schilder verwacht ongeveer `5` uur bezig te zijn met de klus.
	</p>
	<ol start="2">
		<li>
			Welk schildersbedrijf moet ik inhuren om de kosten zo laag mogelijk te houden?
		</li>
	</ol>
	<p>
		Nu mijn gang er zo mooi uit ziet, wil ik toch ook graag dat mijn woonkamer een nieuw kleurtje krijgt. De schilder berekent dat hij voor de woonkamer `17` uur nodig heeft.
	</p>
	<ol start="3">
		<li>
			Welk bedrijf moet ik inhuren voor mijn woonkamer?
		</li>
		<li>
			Bij hoeveel uur werk zijn beide bedrijven even duur?
		</li>
	</ol>	

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Bij schildersbedrijf "Anders" betaal je €`700` en bij schildersbedrijf "Witze" betaal je €`650`.
				</li>
				<li>
					Ik kan het beste schildersbedrijf "Anders" inhuren.
				</li>
				<li>
					Voor mijn woonkamer kan ik beter schildersbedrijf "Witze" inschakelen.
				</li>
				<li>
					Bij klussen die precies `15` uur duren zijn de twee schilders even duur. Als een klus langer duurt dan `15` uur is "Witze" goedkoper.
				</li>
			</ol>
		</div>
	</div>		
</div>

<div class="tekstblok opdracht" id="12">
	<h3>Opdracht 12 Pretparken</h3>
	<div class="row">
		<div class="col-md-6">
			<p>
				Olga bezoekt in haar vakantie drie verschillende pretparken. In een assenstelsel heeft zij getekend hoeveel ze moest betalen naarmate ze meer attracties deed.
			</p>
			<ol>
				<li>
					Bij welk aantal attracties betaal je evenveel bij <em>Kidsparc</em> en <em>Playfield</em>?
				</li>
				<li>
					Hoeveel betaal je bij dat aantal attracties bij <em>Funtronic</em>?
				</li>
				<li>
					Bij <em>Kidsparc</em> betaal je € 2,50 per attractie.<br>
					Bij <em>Funtronic</em> betaal je € 4,00 per attractie.<br>
					Hoeveel betaal je bij <em>Playfield</em> per attractie?
				</li>
				<li>
					Wat zijn de entreekosten per park?
				</li>
				<li>
					Bepaal per pretpark een woordformule waarmee je de totale kosten uitrekent als je het aantal attracties weet.
				</li>
			</ol>
				
		</div>
		<div class="col-md-6">
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_kosten_attracties.png" alt="grafiek_kosten_attracties" width="" height="" />
		</div>
	</div>

	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					De grafiek van <em>Funtronic</em> start in de Oorspong. Dus bij <em>Funtronic</em> betaalt ze geen entreekosten.
				</li>
				<li>
					Bij <em>Playfield</em> betaal je alleen entreekosten, eenmaal binnen kun je overal in zonder bij te betalen.
				</li>
				<li>
					Kidsparc: <em>totale kosten in €</em> = 2,50 &times; <em>aantal attracties</em> + 12,50<br>
					Playfield: <em>totale kosten in €</em> = 28,00<br>
					Funtronic: <em>totale kosten in €</em> = 4,00 &times; <em>aantal attracties</em>
				</li>
			</ol>					
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="13">
	<h3>Opdracht 13 Bij de Jumpo</h3>
	<p>
		Ali werkt bij de Jumpo.<br>
			De formule die uitrekent welk bedrag Ali heeft verdiend is:<br>
			Ali: Bedrag in € = `3t + 10`
	</p>
	<ol>
		<li>
			Neem de tabel over en vul hem in:<br>
			<TABLE class= "verhouding">
						<TR>
								<TD><em>t in uren</em></TD><TD>0</TD><TD>10</TD><TD>20</TD>
							</TR>
						<TR>
								<TD><em>Bedrag in €</em></TD><TD></TD><TD></TD><TD></TD>
							</TR>
			</TABLE><br>
		</li>
		<li>
			Teken de grafiek van Ali in een assenstelsel.
		</li>
		<li>
			Gebruik de grafiek om af te lezen na hoeveel uur werken Ali €55 heeft verdiend.
		</li>
		<li>
			Ali spaart voor een tablet. De tablet die hij wil kopen kost €65.<br>
			Gebruik de grafiek om af te lezen hoelang Ali moet werken om de tablet te kunnen kopen.
		</li>
		<li>
			We kunnen de vorige vraag ook oplossen door een vergelijking te maken en deze op te lossen met de bordjesmethode:<br>
			Neem over en maak de vergelijking af:<br>
			`3t+10 = ...` 
		</li>
		<li>
			Los de vergelijking op met de bordjesmethode.
		</li>
		<li>
			Hoeveel minuten moet Ali werken om de tablet te kunnen kopen? 
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
							Neem de tabel over en vul hem in:<br>
							<TABLE class= "verhouding">
							<TR>
								<TD><em>t in uren</em></TD><TD>0</TD><TD>10</TD><TD>20</TD>
							</TR>
							<TR>
								<TD><em>Bedrag in €</em></TD><TD>10</TD><TD>40</TD><TD>70</TD>
							</TR>
							</TABLE><br>
						</li>
				<li>
							<br>
							<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2t/antwoord_opdracht_23.png"  width="350px">
						</li>
				<li>
							<br>
							<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2t/antwoord_opdracht_23c.png"  width="350px"><br >
							Na 15 uur werken heeft Ali €55 verdiend.
						</li>
				<li>
							<br>
							<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2t/antwoord_opdracht_23d.png"  width="350px"><br>
							Na ongeveer 18,3 uur werken heeft Ali €65 verdiend.
						</li>
				<li>
							`3t+10 = 65`
						</li>
				<li>
							`3t+10=65`<br>
							<span class="formula"> ? </span> `+` `10=65`<br>
							`3t=55`<br>
							`3` `*` <span class="formula"> ? </span> `= 55`<br>
							`x=55/3` dus  `18,3333....`
						</li>
				<li>
							De bordjesmethode geeft een nauwkeuriger antwoord.
						</li>
				<li>
							`x=18,3333....` Dus na `18` uur, en `0,3333...`&sdot;`60 = 20`, 20 minuten.
						</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieD">
	<h3>Theorie D Oplossen met grafieken</h3>
	<div class="row">
		<div class="col-md-8">
			<p>	
				Bij <em>Pizzeria Donna</em> kost een pizza €3,00 plus €0,50 voor elk ingredient dat erbij komt.
				De formule die daar bij hoort is:<br>
				<em>prijs in €</em> = `3,00 + 0,50i`<br>
				Met `i` is <em>aantal ingrediënten</em>.
			</p>
			<p>
				Voor een andere pizzeria, <em>Pizzeria Roma</em> geldt de formule:<br>
				<em>prijs in € </em>= `2,50 + 0,60i`
			</p>
		</div>
		<div class="col-md-4">
			<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2t/pizza.png">
		</div>
	</div>
	
	<p>
		Thomas vraagt zich af bij welk aantal ingredienten de pizzeria's even duur zijn.
		Om deze vraag op te beantwoorden, moeten we de volgende vergelijking oplossen:<br>
		`3,00 + 0,50i = 2,50 + 0,60i`
	</p>	
	<p>
		Je kunt nu handig gebruik maken van grafieken.<br>
		Bij het snijpunt van de grafieken vind je de oplossing van deze vergelijking.
	</p>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 1</p>
		</div>
		<div class="col-md-5">
			<p>
				Maak tabellen bij de formules.
			</p>
		</div>
		<div class="col-md-5">
			<table class="verhouding">
				<tr>
					<td>`i`</td><td>`0`</td><td>`4`</td><td>`8`</td>
				</tr>
				<tr>
					<td><em>Donna</em></td><td>`3,00`</td><td>`5,00`</td><td>`7,00`</td>
				</tr>
			</table><br>
			<TABLE class="verhouding">
				<TR>
					<TD>`i`</TD><TD>`0`</TD><TD>`4`</TD><TD>`8`</TD>
				</TR>
				<TR>
					<TD><em>Roma</em></TD><TD>`2,50`</TD><TD>`4,90`</TD><TD>`7,30`</TD>
				</TR>
			</TABLE>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 2</p>
		</div>
		<div class="col-md-5">
			<p>
				Teken de grafieken in één assenstelsel.<br>
				Zet bij de grafiek welke pizzeria erbij hoort.
			</p>
		</div>
		<div class="col-md-5">
			<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2t/theorie_oplossen_met_grafieken.png">
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 3</p>
		</div>
		<div class="col-md-5">
			<p>
				Lees het snijpunt af.
			</p>
		</div>
		<div class="col-md-5">
			<p>
				(5; 5,50)
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 4</p>
		</div>
		<div class="col-md-5">
			<p>
				Controleer je antwoord.	<br>
				Vul `5` in voor `i` in beide formules en controleer of steeds `5,50` uitkomt.		
			</p>
		</div>
		<div class="col-md-5">
			<p>
				Pizzeria Donna:<br>
				`0,50&sdot;5 + 3,00 =`<br>
				`2,5 + 3,00 = 5,50` Klopt! 
			</p>
			<p>
				Pizzeria Roma:<br>
				`0,60&sdot;5 + 2,50 =`<br>
				`3,00 + 2,50 = 5,50` Klopt ook!
			</p>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 5</p>
		</div>
		<div class="col-md-5">
			<p>
				Geef antwoord op de vraag.
			</p>
		</div>
		<div class="col-md-5">
			<p>
				Bij 5 ingredienten zijn de pizzeria's even duur.
			</p>
		</div>			
	</div>
</div>
	
<div class="tekstblok opdracht" id="14">
	<h3>Opdracht 14 Bij de pizzaria</h3>
	<p>
		Corry en Myrthe werken allebei als serveerster in een pizzeria. 
		Wat ze verdienen kunnen ze berekenen met de volgende formules:<br>
		Corry:	Bedrag in € = `4,50 + 4t`<br>
		Myrthe: Bedrag in € = `9 + 3,50t`
	</p>
	<p>
		Corry en Myrthe vragen zich af bij welk aantal uur ze evenveel verdienen. Om deze vraag op te beantwoorden moeten we een vergelijking maken en oplossen.
	</p>
	<ol>
		<li>
			Maak de vergelijking.
		</li>
		<li>
			Los de vergelijking op met grafieken. Doe dat in vijf stappen, net zo als de theorie.
		</li>
		<li>
			Bij Hoeveel uur werken verdienen Corry en Myrthe evenveel?
		</li>
		<li>
			Wie verdient meer bij 10 uur werken? Leg uit hoe je aan je antwoord bent gekomen.
		</li>
	</ol>	
	<p> 
		We hadden het snijpunt ook kunnen <b>berekenen</b>. Dit kan door de formules aan elkaar gelijk te stellen. Je krijgt dan de volgende vergelijking:<br>
		`4,50 + 4t = 9 +3,50t`
	</p>
	<ol start="5">				
		<li>
			Kun je deze vergelijking oplossen met de bordjesmethode?
		</li>
	</ol>
		
	<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
			
					<ol>
						<li>
							`4,50 + 4t = 9 +3,50t`
						</li>
						<li>
							<table class="stappenplan">
			<tbody>
				<tr>
					<td> Stap 1</td>
					<td>Maak tabellen bij de formules.</td>
					<td><table class="verhouding">
							<tr>
								<td>`t`</td><td>`0`</td><td>`4`</td><td>`8`</td>
							</tr>
							<tr>
								<td><em>Corry</em></td><td>`4,50`</td><td>`20,50`</td><td>`36,50`</td>
							</tr>
						</table><br>
						<TABLE class="verhouding">
								<TR>
									<TD>`t`</TD><TD>`0`</TD><TD>`4`</TD><TD>`8`</TD>
								</TR>
								<TR>
									<TD><em>Myrthe</em></TD><TD>`3,50`</TD><TD>`23`</TD><TD>`37,00`</TD>
								</TR>
							</TABLE>
					</td>
				</tr>
				<tr>
					<td>
						Stap 2
					</td>
					<td>
						Teken de grafieken in één assenstelsel.<br>
						Zet bij de grafiek welke pizzeria erbij hoort.
					</td>
					<td>
						<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2t/antwoord_opdracht_24b.png"  width="350px">
					</td>
				</tr>
				<tr>
					<td>
						Stap 3
					</td>
					<td>
						Lees het snijpunt af.
					</td>
					<td>
						`(9;41)`
					</td>
				</tr>
				<tr>
					<td>
						Stap 4
					</td>
					<td>
						Controleer je antwoord.
					</td>
					<td>
						<em>Bedrag Corry in €</em> = `4,50 + 4&sdot;9`<br>
						<em>prijs pizzeria Donna in €</em> = `4,50 + 36,00`<br>
						<em>prijs pizzeria Donna in €</em> = `40,50`<br>
						<br>
						<em>prijs pizzeria Roma in € </em>= `9,00 + 3,50&sdot;9`<br>
						<em>prijs pizzeria Roma in € </em>= `9,00 + 31,50`<br>
						<em>prijs pizzeria Roma in € </em>= `40,50`<br>
						<br>
						Dit klopt! 
					</td>
				</tr>						
				<tr>
					<td>
						Stap 5
					</td>
					<td>
						Geef antwoord op de vraag.
					</td>
					<td>
						Na `9` uur verdienen ze evenveel. Ze verdienen dan €`40,50`. Aflezen gaf €`41`, iets minder nauwkeurig dus.
					</td>
				</tr>

				</tbody>
				</table>
			</li>
			<li>
				Na `9` uur verdienen ze evenveel. Ze verdienen dan €`40,50`. Aflezen gaf €`41`, iets minder nauwkeurig dus.
			</li>
			<li>
				<table>
					<tr>
						<td>`4,50+4t`</td>
						<td>`=`</td>
						<td>`9+3,50t`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-3,50t`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-3,50t`</td>
					</tr>
					<tr>
						<td>`4,50+0,50t`</td>
						<td>`=`</td>
						<td>`9`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-4,50`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-4,50`</td>
					</tr>
					<tr>
						<td>`0,50t`</td>
						<td>`=`</td>
						<td>`4,50`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:0,50`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:0,50`</td>
					</tr>
					<tr>
						<td>`t`</td>
						<td>`=`</td>
						<td>`9`</td>
					</tr>
					</table>
				</li>
				<li>
					Corry verdient bij 10 uur werken mee. Dit lees je af uit de grafiek.
				</li>
		</ol>

				</div>
			</div>
</div>

<div class="tekstblok opdracht" id="15">
	<h3>Opdracht 15 Sjoerd en Sophie sparen zich suf</h3>
	<!-- variatie op opdracht 27 uit Moderne wiskunde 1A vwo leerjaar 1, blz. 179 -->
	<div class="row">
		<div class="col-md-12">
			<p>
				Sjoerd heeft 23 euro en spaart elke week 5 euro. Sophie heeft 11 euro en spaart wekelijks 6 euro.
			</p>
			<ol>
				<li>
					Neem over en vul in.<br>
					Spaarverloop Sjoerd<br>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>aantal weken</em></td>
									<td colspan="2">0</td>
									<td colspan="2">5</td>
									<td colspan="2">10</td>
									<td colspan="2">15</td>
									<td colspan="2">20</td>
								</tr>
								<tr>
									<td><em>Bedrag in €</em></td>
									<td colspan="2"><span id="startgetal">...</span></td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
								</tr>			
							</tbody>
						</table>
					</div>
				</li>
				<li>
					Neem over en vul in.<br>
					Spaarverloop Sophie<br>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>aantal weken</em></td>
									<td colspan="2">0</td>
									<td colspan="2">5</td>
									<td colspan="2">10</td>
									<td colspan="2">15</td>
									<td colspan="2">20</td>
								</tr>
								<tr>
									<td><em>Bedrag in €</em></td>
									<td colspan="2"><span id="startgetal">...</span></td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
								</tr>			
							</tbody>
						</table>
					</div>
				</li>	
				<li>
					Maak een assenstelsel van 10 bij 10 vakjes, met horizontaal van 0 tot en met 20 weken en verticaal van 0 tot en met 100 euro. Zet de grootheden en eenheden bij de assen.
				</li>
				<li>
					Teken de grafieken van het spaarverloop van Sjoerd en Sophie in het assenstelsel.
				</li>
				<li>
					Geef in het assenstelsel met behulp van rechte lijnen aan wanneer ze evenveel spaargeld hebben.
				</li>
				<li>
					Na hoeveel weken hebben ze evenveel spaargeld en hoe groot is dat bedrag?
				</li>
			</ol>
		</div>

	</div>

	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			
				
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="16">
	<h3>Opdracht 16 Twee kaarsen</h3>
	<p>
		Een groene kaars van 60 cm brandt met `2 1/2` cm per uur op. Een blauwe kaars is 40 cm en brandt met `1 1/2` cm per uur op.
	</p>
	<ol>
		<li>
			Maak voor beide kaarsen een formule waarmee je de lengte kunt uitrekenen als je de brandtijd weet.<br>
			Neem <em>l</em> voor <em>lengte in cm</em> en <em>b</em> voor <em>brandtijd in uren</em>.
		</li>
		<li>
			Neem over en vul in.<br>
			Groene kaars<br>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>brandtijd in uren</em></td>
							<td colspan="2">0</td>
							<td colspan="2">12</td>
							<td colspan="2">24</td>
						</tr>
						<tr>
							<td><em>Lengte in cm</em></td>
							<td colspan="2"><span id="startgetal">...</span></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
				</table>
			</div>
		</li>
		<li>
			Neem over en vul in.<br>
			Blauwe kaars<br>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>brandtijd in uren</em></td>
							<td colspan="2">0</td>
							<td colspan="2">12</td>
							<td colspan="2">24</td>
						</tr>
						<tr>
							<td><em>Lengte in cm</em></td>
							<td colspan="2"><span id="startgetal">...</span></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
				</table>
			</div>
		</li>	
		<li>
			Maak een assenstelsel met horizontaal ruimte voor 0 tot en met 24 uur en verticaal ruimte voor 0 tot en met 60 cm.
		</li>
		<li>
			Geef aan op welk moment beide kaarsen even lang zijn door middel van rechte lijnen in het assenstelsel.
		</li>
		<li>
			Hoelang zijn beide kaarsen dan?
		</li>
	</ol>
</div>

<div class="tekstblok opdracht" id="17">
	<h3>Opdracht 17 De race</h3>
	<p>
		Haas en Slak doen een race. Ze lopen 400 meter. Haas geeft Slak 20 minuten voorsprong.<br>
		5 minuten later passeert Haas de finish. Slak doet er 45 minuten over om de finish te halen.
	</p>
	<ol>
		<li>
			Maak een assenstelsel bij dit verhaal.
		</li>
		<li>
			Geef in het assenstelsel aan waar Haas Slak inhaalt.
		</li>
		<li>
			Geef de afstand en tijd van dat moment.
		</li>
	</ol>
	<p>
		Sta je zelf toe om te puzzelen en te proberen. Wat heb je geleerd? Hoe kun je dat toepassen? Probeer een en ander uit.
	</p>
		
</div><!-- De race -->

<div class="tekstblok opdracht" id="18">
	<h3>Opdracht 18 Henk</h3>
	<p>
		Henk wil de volgende vergelijking oplossen:
	</p>
	<p>
		`5x+8=2x+17`
	</p>
	<p>
			Kun je de vergelijking van Henk oplossen met de bordjesmethode?<br>
	    	Waarom wel/niet?
	</p>	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Nee, want de variabele `x` komt twee keer voor in de vergelijking. Je zou dan eigenlijk twee bordjes moeten leggen.
			</p>
		</div>	
	</div>
</div>

<div class="tekstblok opdracht" id="19">
	<h3>Opdracht 19 @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Lineaire vergelijkingen (vmbo-t)</em> en maak activiteit:
	</p>
		<ol id="numbers" start="2">
			<li><em>De balansmethode (intro)</em></li>
		</ol>
</div><!-- @DWO -->

<div class="tekstblok theorie analyse" id="theorieE">
	<h3>Theorie E De balansmethode I</h3>
	<p>
		Er zijn vergelijkingen die je niet met de bordjesmethode kunt oplossen. Voor die vergelijkingen kun je de <b>balansmethode</b> gebruiken.
	</p>
	<p>
		Bij de balansmethode werk je naar de oplossing toe door steeds aan beide kanten van de `=` hetzelfde te doen. Zo blijft de vergelijking in <em>balans</em> en houd je uiteindelijk de oplossing over.
	</p>
	<p>
		In het voorbeeld hieronder wordt een vergelijking `5x + 6 = 2x + 12` met de balansmethode opgelost.<br>
		Let op: de notatie verschilt van die op de DWO.
	</p>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 1</p>
		</div>
		<div class="col-md-5">
			<p>
				Haal links en rechts <span class="balans">`2x`</span> weg.
			</p>
		</div>
		<div class="col-xs-4">
			<table class="table">
				<tbody>
					<tr>
						<td>
							`5x + 6`
						</td>
						<td>
							 `=`
						</td>
						<td> 
							`2x + 12`
						</td>
					</tr>
					<tr>
						<td>
							<span class="balans">`- 2x`</span>
						</td>
						<td>
							
						</td>
						<td> 
							<span class="balans">`- 2x`</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>		
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 2</p>
		</div>
		<div class="col-md-5">
			<p>
				Haal links en rechts <span class="balans">`6`</span> weg.
			</p>
		</div>
		<div class="col-xs-4">
			<table class="table">
				<tbody>
					<tr>
						<td>
							`3x + 6`
						</td>
						<td>
							 `=`
						</td>
						<td> 
							`12`
						</td>
					</tr>
					<tr>
						<td>
							<span class="balans">`- 6`</span>
						</td>
						<td>
							
						</td>
						<td> 
							<span class="balans">`- 6`</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>		
	</div>		
	<div class="row">
		<div class="col-md-2">
			<p>Stap 3</p>
		</div>
		<div class="col-md-5">
			<p>
				Deel beide kanten door <span class="balans">`3`</span>.
			</p>
		</div>
		<div class="col-xs-4">
			<table class="table">
				<tbody>
					<tr>
						<td>
							`3x`
						</td>
						<td>
							 `=`
						</td>
						<td> 
							`6`
						</td>
					</tr>
					<tr>
						<td>
							<span class="balans">`&divide; 3`</span>
						</td>
						<td>
							
						</td>
						<td> 
							<span class="balans">`&divide; 3`</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>		
	</div>		
	<div class="row">
		<div class="col-md-2">
			<p></p>
		</div>
		<div class="col-md-5">
			<p>
				Dus
			</p>
		</div>
		<div class="col-xs-4">
			`x = 6/3 = 2`
		</div>		
	</div>	
	<p>
		Bij die laatste stap, deel je dus simpelweg door het getal voor de `x`.
	</p>		
</div>

<div class="tekstblok opdracht" id="20">
	<h3>Opdracht 20 Balansmethode</h3>
	<p>
		Neem de vergelijkingen over en los ze op met de balansmethode. <br>
		Schrijf steeds op wat je links en rechts doet. <br>
		Werk net zoals het voorbeeld hierboven: tussenstappen onder elkaar en rekenstappen ertussen.
	</p>
	<div class="row">
		<div class="col-xs-8">
			<ol>
				<li>`4x+3=2x+11`
				</li>
				<li>`7x+8=4x+23`
				</li>
				<li>`6x+7=5x+17`
				</li>
				<li>`12x+16=3x+97`
				</li>
			</ol>
		
		</div>
		<div class="col-xs-4">
			<img src="afbeeldingen/analyse_leerjaar_2/weegschaal.png" >
		</div>
	</div>		

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li><table>
					<tr>
						<td>`4x+3`</td>
						<td>`=`</td>
						<td>`2x+11`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-2x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-2x`</td>
					</tr>
					<tr>
						<td>`2x+3`</td>
						<td>`=`</td>
						<td>`11`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-3`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-3`</td>
					</tr>
					<tr>
						<td>`2x`</td>
						<td>`=`</td>
						<td>`8`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:2`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:2`</td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`4`</td>
					</tr>
					</table>
				</li>
				<li><table>
					<tr>
						<td>`7x+8`</td>
						<td>`=`</td>
						<td>`4x+23`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-4x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-4x`</td>
					</tr>
					<tr>
						<td>`3x+8`</td>
						<td>`=`</td>
						<td>`23`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-8`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-8`</td>
					</tr>
					<tr>
						<td>`3x`</td>
						<td>`=`</td>
						<td>`15`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:3`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:3`</td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`5`</td>
					</tr>
					</table>
				</li>
				<li><table>
					<tr>
						<td>`6x+7`</td>
						<td>`=`</td>
						<td>`5x+17`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-5x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-5x`</td>
					</tr>
					<tr>
						<td>`x+7`</td>
						<td>`=`</td>
						<td>`17`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-7`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-7`</td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`10`</td>
					</tr>
					</table>
				</li>
				<li><table>
					<tr>
						<td>`12x+16`</td>
						<td>`=`</td>
						<td>`3x+97`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-3x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-3x`</td>
					</tr>
					<tr>
						<td>`9x+16`</td>
						<td>`=`</td>
						<td>`97`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-16`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-16`</td>
					</tr>
					<tr>
						<td>`9x`</td>
						<td>`=`</td>
						<td>`81`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:9`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:9`</td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`9`</td>
					</tr>
					</table>
				</li>
				</ol>
		
			</div>		
		</div>

</div>

<div class="tekstblok opdracht" id="21">
	<h3>Opdracht 21 Eraf of erbij?</h3>
	<p>
		Robin en Moustafa moeten de volgende vergelijking oplossen.
	</p>
	<p>
		`2x - 8 = 5`
	</p>
	<p>
		Robin zegt: "<em>We moeten er nu dus links en rechts 8 afhalen!</em>"<br>
		Moustafa zegt: "<em>Je moet er links en rechts ` bij doen!</em>"
	</p>
	<p>
		Wie heeft hier gelijk en waarom?
	</p>
					
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>Moustafa heeft gelijk!<br>
			2<em>x</em> - 8 <span class="balans"> + 8</span> = 5 <span class="balans"> + 8</span><br>
			2<em>x</em> = 13<br>
			Om ervoor te zorgen dat `-8` wegvalt,  moet je er `8` bij optellen!</p>			
		</div>		
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieF">
	<h3>Theorie F De balansmethode II</h3>
	<p>
		Om `+ 6` weg te halen, moet je `6` aftrekken, dus <span class="balans">`- 6`</span>.<br>
		Om `- 8` weg te halen, moet je `8` optellen, dus <span class="balans">`+ 8`</span>.
	</p>
	<p>
		Je doet steeds de tegenovergestelde bewerking.
	</p>
	<p>
		Een voorbeeld, los de vergelijking `6x - 8 = 4x + 22` op.
	</p>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 1</p>
		</div>
		<div class="col-md-5">
			<p>
				Haal links en rechts <span class="balans">`4x`</span> weg.
			</p>
		</div>
		<div class="col-xs-4">
			<table class="table">
				<tbody>
					<tr>
						<td>
							`6x - 8`
						</td>
						<td>
							 `=`
						</td>
						<td> 
							`4x + 22`
						</td>
					</tr>
					<tr>
						<td>
							<span class="balans">`- 4x`</span>
						</td>
						<td>
							
						</td>
						<td> 
							<span class="balans">`- 4x`</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>		
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 2</p>
		</div>
		<div class="col-md-5">
			<p>
				Tel links en rechts <span class="balans">`8`</span> op.
			</p>
		</div>
		<div class="col-xs-4">
			<table class="table">
				<tbody>
					<tr>
						<td>
							`2x - 8`
						</td>
						<td>
							 `=`
						</td>
						<td> 
							`22`
						</td>
					</tr>
					<tr>
						<td>
							<span class="balans">`+ 8`</span>
						</td>
						<td>
							
						</td>
						<td> 
							<span class="balans">`+ 8`</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>		
	</div>		
	<div class="row">
		<div class="col-md-2">
			<p>Stap 3</p>
		</div>
		<div class="col-md-5">
			<p>
				Deel beide kanten door <span class="balans">`2`</span>.
			</p>
		</div>
		<div class="col-xs-4">
			<table class="table">
				<tbody>
					<tr>
						<td>
							`2x`
						</td>
						<td>
							 `=`
						</td>
						<td> 
							`30`
						</td>
					</tr>
					<tr>
						<td>
							<span class="balans">`&divide; 2`</span>
						</td>
						<td>
							
						</td>
						<td> 
							<span class="balans">`&divide; 2`</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>		
	</div>		
	<div class="row">
		<div class="col-md-2">
			<p></p>
		</div>
		<div class="col-md-5">
			<p>
				Dus
			</p>
		</div>
		<div class="col-xs-4">
			`x = 30/2 = 15`
		</div>		
	</div>	
	<p>
		Bij die laatste stap, deel je dus weer door het getal voor de `x`.
	</p>		
</div>

<div class="tekstblok opdracht" id="22">
	<h3>Opdracht 22 Balansmethode</h3>
	<p>
		Neem de vergelijkingen over en los ze op met de balansmethode. <br>
		Schrijf steeds op wat je links en rechts doet. <br>
		Werk zoals het voorbeeld uit de theorie.
	</p>
	<div class="row">
		<div class="col-xs-8">
			<ol>
				<li>`8x - 4 = 5x + 5`
				</li>
				<li>`5x - 12 = 3x + 4`
				</li>
				<li>`3x - 5 = x + 7`<br>
				</li>
				<li>`8x - 17 = 3x - 2`
				</li>
			</ol>
		
		</div>
		<div class="col-xs-4">
			<img src="afbeeldingen/analyse_leerjaar_2/weegschaal.png" >
			<p class="geeltje">Let op: `x = 1 * x`</p>
		</div>
	</div>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li><table>
				<tr>
					<td>`8x-4`</td>
					<td>`=`</td>
					<td>`5x+5`</td>
				</tr>
				<tr>
					<td class="tussenstap_vergelijking">`-5x`</td>
					<td></td>
					<td class="tussenstap_vergelijking">`-5x`</td>
				</tr>
				<tr>
					<td>`3x-4`</td>
					<td>`=`</td>
					<td>`5`</td>
				</tr>
				<tr>
					<td class="tussenstap_vergelijking">`+4`</td>
					<td></td>
					<td class="tussenstap_vergelijking">`+4`</td>
				</tr>
				<tr>
					<td>`3x`</td>
					<td>`=`</td>
					<td>`9`</td>
				</tr>
				<tr>
					<td class="tussenstap_vergelijking">`:3`</td>
					<td></td>
					<td class="tussenstap_vergelijking">`:3`</td>
				</tr>
				<tr>
					<td>`x`</td>
					<td>`=`</td>
					<td>`9`</td>
				</tr>
				</table>
			</li>
			<li><table>
				<tr>
					<td>`5x-12`</td>
					<td>`=`</td>
					<td>`3x+4`</td>
				</tr>
				<tr>
					<td class="tussenstap_vergelijking">`-3x`</td>
					<td></td>
					<td class="tussenstap_vergelijking">`-3x`</td>
				</tr>
				<tr>
					<td>`2x-12`</td>
					<td>`=`</td>
					<td>`4`</td>
				</tr>
				<tr>
					<td class="tussenstap_vergelijking">`+12`</td>
					<td></td>
					<td class="tussenstap_vergelijking">`+12`</td>
				</tr>
				<tr>
					<td>`2x`</td>
					<td>`=`</td>
					<td>`16`</td>
				</tr>
				<tr>
					<td class="tussenstap_vergelijking">`:2`</td>
					<td></td>
					<td class="tussenstap_vergelijking">`:2`</td>
				</tr>
				<tr>
					<td>`x`</td>
					<td>`=`</td>
					<td>`8`</td>
				</tr>
				</table>
			</li>
			<li><table>
				<tr>
					<td>`3x-5`</td>
					<td>`=`</td>
					<td>`x+7`</td>
				</tr>
				<tr>
					<td class="tussenstap_vergelijking">`-x`</td>
					<td></td>
					<td class="tussenstap_vergelijking">`-x`</td>
				</tr>
				<tr>
					<td>`2x-5`</td>
					<td>`=`</td>
					<td>`7`</td>
				</tr>
				<tr>
					<td class="tussenstap_vergelijking">`+5`</td>
					<td></td>
					<td class="tussenstap_vergelijking">`+5`</td>
				</tr>
				<tr>
					<td>`2x`</td>
					<td>`=`</td>
					<td>`12`</td>
				</tr>
				<tr>
					<td class="tussenstap_vergelijking">`:2`</td>
					<td></td>
					<td class="tussenstap_vergelijking">`:2`</td>
				</tr>
				<tr>
					<td>`x`</td>
					<td>`=`</td>
					<td>`6`</td>
				</tr>
				</table>
			</li>
			<li><table>
				<tr>
					<td>`8x-17`</td>
					<td>`=`</td>
					<td>`3x-2`</td>
				</tr>
				<tr>
					<td class="tussenstap_vergelijking">`-3x`</td>
					<td></td>
					<td class="tussenstap_vergelijking">`-3x`</td>
				</tr>
				<tr>
					<td>`5x-17`</td>
					<td>`=`</td>
					<td>`-2`</td>
				</tr>
				<tr>
					<td class="tussenstap_vergelijking">`+17`</td>
					<td></td>
					<td class="tussenstap_vergelijking">`+17`</td>
				</tr>
				<tr>
					<td>`5x`</td>
					<td>`=`</td>
					<td>`15`</td>
				</tr>
				<tr>
					<td class="tussenstap_vergelijking">`:5`</td>
					<td></td>
					<td class="tussenstap_vergelijking">`:5`</td>
				</tr>
				<tr>
					<td>`x`</td>
					<td>`=`</td>
					<td>`3`</td>
				</tr>
				</table>
			</li>
			</li>
		</ol>
				
		</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="23">
	<h3>Opdracht 23 @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Lineaire vergelijkingen (vmbo-t)</em> en maak activiteit:
		<ol id="numbers" start="3">
			<li><em>De balansmethode 1</em></li>
			<li><em>De balansmethode 2</em></li>
			<li><em>De balansmethode 3</em></li>
			<li><em>De balansmethode 4</em></li>
		</ol>
	</p>
</div><!-- @DWO -->

<div class="tekstblok theorie analyse" id="theorieG">
	<h3>Theorie G De balansmethode III</h3>
	<p>
		Nog een voorbeeld: los de vergelijking `-8x + 7 = -2x + 37` op.
	</p>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 1</p>
		</div>
		<div class="col-md-5">
			<p>
				Om `- 2x` weg te halen, moet je `2x` optellen, dus <span class="balans">`+ 2x`</span>.
			</p>
		</div>
		<div class="col-xs-4">
			<table class="table">
				<tbody>
					<tr>
						<td>
							`-8x + 7` 
						</td>
						<td>
							 `=`
						</td>
						<td> 
							`-2x + 37`
						</td>
					</tr>
					<tr>
						<td>
							<span class="balans">`+ 2x`</span>
						</td>
						<td>
							
						</td>
						<td> 
							<span class="balans">`+ 2x`</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>		
	</div>
	<div class="row">
		<div class="col-md-2">
			<p>Stap 2</p>
		</div>
		<div class="col-md-5">
			<p>
				Om `+ 7` weg te halen, moet je `7` aftrekken, dus <span class="balans">`- 7`</span>.
			</p>
		</div>
		<div class="col-xs-4">
			<table class="table">
				<tbody>
					<tr>
						<td>
							`-6x + 7`
						</td>
						<td>
							 `=`
						</td>
						<td> 
							`37`
						</td>
					</tr>
					<tr>
						<td>
							<span class="balans">`- 7`</span>
						</td>
						<td>
							
						</td>
						<td> 
							<span class="balans">`- 7`</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>		
	</div>		
	<div class="row">
		<div class="col-md-2">
			<p>Stap 3</p>
		</div>
		<div class="col-md-5">
			<p>
				`-6 &sdot; x = x &sdot; -6`<br>
				Om `&sdot; -6` weg te werken, deel je door `-6`, dus 
				<span class="balans">`&divide; -6`</span>
			</p>
		</div>
		<div class="col-xs-4">
			<table class="table">
				<tbody>
					<tr>
						<td>
							`-6x`
						</td>
						<td>
							 `=`
						</td>
						<td> 
							`30`
						</td>
					</tr>
					<tr>
						<td>
							<span class="balans">`&divide; -6`</span>
						</td>
						<td>
							
						</td>
						<td> 
							<span class="balans">`&divide; -6`</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>		
	</div>		
	<div class="row">
		<div class="col-md-2">
			<p></p>
		</div>
		<div class="col-md-5">
			<p>
				Dus
			</p>
		</div>
		<div class="col-xs-4">
			`x = 30/(-6) = -5`
		</div>		
	</div>	
	<p>
		Merk op dat je steeds de tegengestelde bewerking gebruikt.<br>
		optellen wordt aftrekken<br>
		aftrekken wordt optellen<br>
		vermenigvuldigen wordt delen
	</p>
	<p class="geeltje">
		De oplossing van een vergelijking is altijd in de vorm `x = ...`. Je mag dus geen min voor de `x` laten staan.	
	</p>		
</div>

<div class="tekstblok opdracht" id="24">
	<h3>Opdracht 24 Zoek die balans</h3>			
	<p>
		Los de volgende vergelijkingen op met de balansmethode. 
		Schrijf steeds op wat je links en rechts doet. 
		Werk weer zoals het voorbeeld hierboven.
	</p>
	<ol>
		<li><math><mn>2</mn><mi>x</mi><mo>+</mo><mn>5</mn><mo>=</mo><mn>-7</mn><mi>x</mi><mo>-</mo><mn>85</mn></math></li>
		<li><math><mn>6</mn><mi>x</mi><mo>-</mo><mn>7</mn><mo>=</mo><mn>-2</mn><mi>x</mi><mo>+</mo><mn>9</mn></math></li>
		<li><math><mn>-3</mn><mi>x</mi><mo>+</mo><mn>12</mn><mo>=</mo><mn>-8</mn><mi>x</mi><mo>+</mo><mn>52</mn></math></li>
		<li><math><mn>-7</mn><mi>x</mi><mo>-</mo><mn>13</mn><mo>=</mo><mn>-3</mn><mi>x</mi><mo>-</mo><mn>29</mn></math></li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li><table>
					<tr>
						<td>`2x+5`</td>
						<td>`=`</td>
						<td>`-7x-85`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`+7x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`+7x`</td>
					</tr>
					<tr>
						<td>`9x+5`</td>
						<td>`=`</td>
						<td>`-85`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-5`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-5`</td>
					</tr>
					<tr>
						<td>`9x`</td>
						<td>`=`</td>
						<td>`-90`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:9`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:9`</td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`-10`</td>
					</tr>
					</table>
				</li>
				<li><table>
					<tr>
						<td>`6x-7`</td>
						<td>`=`</td>
						<td>`-2x+9`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`+2x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`+2x`</td>
					</tr>
					<tr>
						<td>`8x-7`</td>
						<td>`=`</td>
						<td>`9`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`+7`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`+7`</td>
					</tr>
					<tr>
						<td>`8x`</td>
						<td>`=`</td>
						<td>`16`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:8`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:8`</td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`2`</td>
					</tr>
					</table>
				</li>
				<li><table>
					<tr>
						<td>`-3x+12`</td>
						<td>`=`</td>
						<td>`-8x+52`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`+8x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`+8x`</td>
					</tr>
					<tr>
						<td>`5x+12`</td>
						<td>`=`</td>
						<td>`52`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-12`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-12`</td>
					</tr>
					<tr>
						<td>`5x`</td>
						<td>`=`</td>
						<td>`40`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:5`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:5`</td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`8`</td>
					</tr>
					</table>
				</li>
				<li><table>
					<tr>
						<td>`-7x-13`</td>
						<td>`=`</td>
						<td>`-3x-29`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`+3x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`+3x`</td>
					</tr>
					<tr>
						<td>`-4x-13`</td>
						<td>`=`</td>
						<td>`-29`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`+13`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`+13`</td>
					</tr>
					<tr>
						<td>`-4x`</td>
						<td>`=`</td>
						<td>`-16`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:-4`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:-4`</td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`4`</td>
					</tr>
					</table>
				</li>
			</ol>
			</div>		
		</div>
</div>

<div class="tekstblok opdracht" id="25">
	<h3>Opdracht 25 @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Lineaire vergelijkingen (vmbo-t)</em> en maak activiteit:
		<ol id="numbers" start="7">
			<li><em>De balansmethode 5</em></li>
			<li><em>De balansmethode 6</em></li>
		</ol>
	</p>
</div><!-- @DWO -->

<div class="tekstblok opdracht" id="26">
	<h3>Opdracht 26 Rode kaars</h3>
	<p>
		Brechtje steekt een rode kaars aan. De formule die hoort bij de rode kaars is:<br>
			`l = 44 - 8t`<br>
			Hierbij is `l` de lengte van de kaars in cm. en `t` de brandtijd in uren.
	</p>
	<ol>
		<li>
			Hoe lang is de kaars?
		</li>
		<p>
			Brechtje blaast de kaars uit als hij voor de helft is opgebrand.
			Ze wil graag weten hoe lang de kaars gebrand heeft.
		</p>
		<li> 
			Welke vergelijking moet brechtje opstellen?
		</li>
		<li>
			Gebruik de balansmethode om de vergelijking op te lossen.
		</li>
		<li>
			Hoe lang heeft de kaars gebrand?
		</li>
	</ol>

		<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
					<ol>
						<li>
							`44`cm.
						</li>
						<li>
							`22=44-8t`
						</li>
						<li>
							<table>
								<tr>
									<td>`22`</td>
									<td>`=`</td>
									<td>`44-8t`</td>
								</tr>
								<tr>
									<td class="tussenstap_vergelijking">`+8t`</td>
									<td></td>
									<td class="tussenstap_vergelijking">`+8t`</td>
								</tr>
								<tr>
									<td>`22+8t`</td>
									<td>`=`</td>
									<td>`44`</td>
								</tr>
								<tr>
									<td class="tussenstap_vergelijking">`-22`</td>
									<td></td>
									<td class="tussenstap_vergelijking">`-22`</td>
								</tr>
								<tr>
									<td>`8t`</td>
									<td>`=`</td>
									<td>`22`</td>
								</tr>
								<tr>
									<td class="tussenstap_vergelijking">`:8`</td>
									<td></td>
									<td class="tussenstap_vergelijking">`:8`</td>
								</tr>
								<tr>
									<td>`t`</td>
									<td>`=`</td>	
									<td>`2,75`</td>
								</tr>
								</table>
							</li>
							<li>
								De kaars heeft 2,75 uur gebrand. <br>
								Een uur heeft 60 minuten dus de kaar brand 2 uur en `0,75`&sdot;`60 = 45` minuten.
							</li>
					</ol>
				</div>
			</div>
	</div>

<div class="tekstblok opdracht" id="proeftoets">
	<h3>Proeftoets</h3>
	<p>
		Ga naar de map <a href="https://drive.google.com/drive/folders/0B-EzZiYS_HciWDNsS29Xa1lvcDQ" target="_blank">Proeftoetsen leerjaar 2 Wiskunde123</a> en open daar de juiste proeftoets.
	</p>
</div>

</div>