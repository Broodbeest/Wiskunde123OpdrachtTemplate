<?php 
	//defineer taaknaam
	$taaknaam ="Lineaire vergelijkingen 2hv";
?>

<?php
//Definieer sidebar
$doorverwijzingen = array(
	'#inleiding' => 'Inleiding',
     '#theorieA' => 'Bordjesmethode',
	 '#theorieB' => 'Balansmethode I',
	 '#theorieC' => 'Balansmethode II',
	 '#theorieD' => 'Vergelijkingen met haakjes',
	 '#theorieE' => 'Vergelijkingen met breuken I',
	 '#theorieF' => 'Vergelijkingen met breuken II',
	 '#theorieG' => 'Snijpunt van grafieken',
	 '#proeftoets' => 'Proeftoets');  
?>

<title>Leerjaar 2 | <?php echo $taaknaam; ?></title>

<div class="taakinhoud">


<div class="tekstblok theorie analyse" id="inleiding">
	<h3>Inleiding</h3>
		<p>
			Deze taak is een vervolg op <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=a_2hv_lineaire_verbanden">Lineaire verbanden</a>. In die taak leerde je onder andere vanuit de invoer de uitvoer berekenen. In deze taak ga je precies andersom: vanuit de uitvoer bereken je de invoer.
		</p>
		<p>
			Bij een <b>lineair verband</b> hoort een lineaire formule. De grafiek bij een lineaire formule is een rechte lijn.
		</p>
		<p class="geeltje">
			De <b>algemene vorm</b> van een lineaire formule is:
			<br>
			<nobr><em>y</em> = <span id="hellingsgetal">a</span><em>x</em> + <span id="startgetal">b</span></nobr>
			<br>
			Met <span id="hellingsgetal">hellingsgetal a</span> en <span id="startgetal">startgetal b</span>.
		</p>
		<p>			
			Stel dat het verband tussen <em>tijd</em> (aantal weken) en <em>Bedrag</em> (euro's) met de volgende formule wordt beschreven: 
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
						<td colspan="2">5</td>
					</tr>
					<tr>
						<td><em>B</em></td>
						<td colspan="2"><span id="startgetal">5</span></td></td>
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
		In de grafiek is het verband tussen de <em>tijd</em> (aantal weken) en het <em>Bedrag</em> (euro's) weergegeven. Merk op dat de grootheden en eenheden bij de assen staan. Ook de stapgrootte langs de assen is constant.
	</p>
</div>


<div class="tekstblok opdracht" id="1">
	<h3>Opdracht 1</h3>
	<ol>
		<li>Teken de grafiek van de volgende formule. 
			`N = 3,5t + 5`
		</li>
		<li>Teken de grafiek van de volgende formule. 
			`y=-2x+3`
		</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord" class="breuken">
			<math displaystyle="inline">
				<ol>
					<li>
						<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
							<TR>
								<TD ><em>t</em></TD>
								<TD>0</TD><TD>4</TD>
							</TR>
							<TR>
								<TD><em>N</em></TD>
								<TD>5</TD><TD>19</TD>
							</TR>
						</TABLE>
						<br><img src="afbeeldingen/analyse_leerjaar_2/opdracht_2a.png" width="600px">
					</li>
					<li>
						<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
							<TR>
								<TD><em>t</em></TD>
								<TD>0</TD><TD>5</TD>
							</TR>
							<TR>
								<TD><em>y</em></TD>
								<TD>3</TD><TD>-7</TD>
							</TR>
						</TABLE>
						<br><img src="afbeeldingen/analyse_leerjaar_2/opdracht_2b.png" width="600px">
					</li>
				</ol>
			</math>
		</div>	
	</div>
</div>

<div class="tekstblok opdracht" id="2">
	<h3>Opdracht 2</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Het bedrag `B` in centen dat je met een OV-chipkaart moet betalen 
				voor een busreis kun je berekenen met de formule:
			</p>
			<p>
				`B=13k+83`<br>
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
	<h3>Opdracht 3</h3>
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
		<h3>Opdracht 4</h3>
		<p>Lisa wil haar vakantiefoto's laten afdrukken. De kosten voor dit afdrukken kan ze berekenen met de volgende formule:<br>
			<em>Kosten in euro's</em> `= 0,25`&sdot;<em>Aantal foto's</em> `+ 7`
		</p>
		<ol>
			<li>
				Wat betekent de `0,25` in de formule?
			</li>
			<li>
				Wat betekent de `7` in de formule?
			</li>
			<li>
				Bereken met de formule hoeveel Lisa moet betalen als ze `40` foto's wil laten afdrukken.
			</li>
			<li>
				Teken de grafiek bij de formule. Neem geschikte stapgrootte.
			</li>
			<li>
				Lees uit je grafiek af hoeveel foto's je kan laten afdrukken voor €`22`.
			</li>
			<li>
				Gebruik de grafiek om af te lezen hoeveel foto's je kan bestellen voor €`16`.
			</li>
			<li> 
				Controleer je antwoord van opgave f. met de formule? Had je het goed afgelezen?
			</li>	
			
		</ol>

		<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
					<ol>
						<li>
							De kosten per foto zijn `25` cent.
						</li>
						<li>
							De vaste kosten zijn €`7`, dit zijn bijvoorbeeld verwerkingskosten.
						</li>
						<li>
							<em>Kosten in euro's</em> `= 0,25`&sdot;<em>Aantal foto's</em> `+ 7`<br>
							<em>Kosten in euro's</em> `= 0,25`&sdot;<em>40</em> `+ 7`<br>
							<em>Kosten in euro's</em> `= `10 + 7`<br>
							<em>Kosten in euro's</em> `= `17`<br>
							Lisa moet €`17` betalen.
						</li>
						<li>
							<br>
							<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2t/antwoord_opdracht_7.png" width="450px">
						</li>
						<li>
							<br>
							<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2t/antwoord_opdracht_7e.png" width="450px"><br>
							Je kan `60` foto's laten afdrukken voor €`22`.
						</li>
						<li>
							<br>
							<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2t/antwoord_opdracht_7f.png" width="450px"><br>
							Je kunt `36` foto's laten afdrukken voor €`16`.
						</li>
						<li>
							<em>Kosten in euro's</em> `= 0,25`&sdot;<em>Aantal foto's</em> `+ 7`<br>
							<em>Kosten in euro's</em> `= 0,25`&sdot;<em>36</em> `+ 7`<br>
							<em>Kosten in euro's</em> `= 9,00 + 7`<br>
							<em>Kosten in euro's</em> `= 16,00`<br>
							Lisa moet €`16,-` betalen voor `36` foto's. <br>
							Stel dat je 37 foto's had afgelezen, dan krijg je:<br>
							<em>Kosten in euro's</em> `= 0,25`&sdot;<em>Aantal foto's</em> `+ 7`<br>
							<em>Kosten in euro's</em> `= 0,25`&sdot;<em>37</em> `+ 7`<br>
							<em>Kosten in euro's</em> `= 9,25 + 7`<br>
							<em>Kosten in euro's</em> `= 16,25`<br>
							Lisa moet €`16,25` betalen voor `37` foto's. <br>
							Aflezen in de grafiek geeft dus niet altijd het juiste antwoord. 
						</li>
					</ol>
				
				</div>
			</div>
</div>

<div class="tekstblok opdracht" id="5">
		<h3>Opdracht 5</h3>
		<p>Youssef doet mee aan een sponsorloop. Hij krijgt €`3` en voor ieder rondje dat hij loopt ontvangt hij €`1`. 
		</p>
		<ol>
			<li>
				Neem over en vul in:<br>
				<em>Bedrag</em> `=` ..<em> &sdot; aantal rondjes</em> `+` ...
			</li>
			<li>
				Teken de grafiek die hoort bij de formule hierboven.
			</li>
			<li>
				Lees uit de grafiek af hoeveel rondjes Youssef moet lopen om €`10` te verdienen.
			</li>
		</ol>

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
							Youssef moet 7 rondjes lopen om €`10` te verdienen.
						</li>
					</ol>
				
				</div>
			</div>
</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie A De bordjesmethode</h3>
	<p>
		In de opgaven hierboven heb je vergelijkingen opgelost met grafieken.
		Eerder heb je geleerd hoe je vergelijkingen kunt oplossen met de
		<b>bordjesmethode</b>.
	</p>
	<p>
		`5x + 23 = 38`	is een voorbeeld van een <b>vergelijking</b>. Als je deze vergelijking wilt <b>oplossen</b>, dan wil je weten welke `x` je moet invullen zodat er `38` uitkomt.
	</p>
	<p>
		De waarde van `x` waarvoor de vergelijking klopt, is de <b>oplossing</b> van de vergelijking. De letter in de vergelijking, hier is dat de letter `x`, noemen we de <b>variabele</b>. 
	</p>
	<p>
		Vergelijkingen kun je oplossen met behulp van de <b>bordjesmethode</b>.<br>
		De bordjesmethode werkt zo:
	</p>

			
	<table style="vertical-align=top" class="stappenplan">
		<tr>
			<td>Stap 1</td>
			<td>
				Neem de vergelijking over.
			</td>
			<td>
				`5x + 23 = 38`
			</td>
		</tr>	
		<tr>
			<td>Stap 2</td>
			<td>
				Leg een bordje op `5x`.
			</td>
			<td>
					<span class="formula"> ? </span> `+`  `23 = 38`
			</td>
		</tr>			
 		<tr>		
 			<td>Stap 3</td>
			<td>
				Onder het bordje moet `15` liggen, want:
			</td>
			<td>
				`15 + 23 = 38`<br>
			</td>
		</tr>	
		<tr>		
 			<td>Stap 4</td>
			<td>
				Nu weet je dat `5x` gelijk is aan `15`.
			</td>
			<td>
				`5x = 15`
			</td>
		</tr>	
		<tr>	
			<td>Stap 5</td>
			<td>
				Nu leggen we een bordje op `x`.<br>
				Weet je nog: <math><mn>5</mn><mi>x</mi></math> betekent <math><mn>5</mn><mo>&sdot;</mo><mi>x</mi></math>!
			</td>
			<td>
				<math><mn>5</mn></math>`*`<span class="formula"> ? </span><math><mo>=</mo><mn>15</mn></math>
			</td>
		</tr>
		<tr>
			<td>Stap 6</td>
			<td>
				Onder het bordje moet `3` liggen, want:
			</td>
			<td>
				`5*3=15`<br>
				Dus `x=3`
			</td>
		</tr>
		<tr>
			<td>Stap 7</td>
			<td>
				Controleer je antwoord door dit in te vullen.
			</td>
			<td>
				`5*3+23=38` Klopt!
			</td>
		</tr>
	</table>
</div>

<div class="tekstblok opdracht" id="6">
		<h3>Opdracht 6</h3>
		<p>In opdracht 4g. heb je gezien dat het niet precies lukt om af te lezen 
			hoeveel foto's je kan bestellen voor €16. De formule om de kosten voor 
			het afdrukken van foto's te berekenen is:<br>
			<em>Kosten in euro's</em> `= 0,25`&sdot;<em>Aantal foto's</em> `+ 7`
			We gaan m.b.v. de formule uitrekenen hoeveel foto's we kunnen bestellen voor €`28`.</p>
			<ol>
				<li>
					Vul €28 op de goede plek in de formule in. Je hebt nu een vergelijking gemaakt.
				</li>
				<li>
					Los de vergelijking op met de bordjesmethode.
				</li>
				<li>
					Hoeveel foto's kan je bestellen voor €`28`?
				</li>
			</ol>

<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
					<ol>
						<li>
							`28= 0,25`&sdot;<em>Aantal foto's</em> `+ 7`
						</li>
						<li>
							<span class="formula"> ? </span> `+ 7 = 28` <br>
							<span class="formula"> ? </span> `= 21` <br>
							`0`,`25 *` <em>Aantal foto's</em> `= 21`<br>
							`0`,`25 &times;` <span class="formula"> ? </span> `= 21`<br>
							<em>Aantal foto's</em> `= 84`
						</li>
						<li>
							Je kan `84` foto's bestellen voor €`28`.
						</li>
					</ol>
				
				</div>
			</div>
</div>

<div class="tekstblok opdracht" id="7">
	<h3>Opdracht 7</h3>
	<p>Los de volgende vergelijkingen op met de bordjes methode:</p>
	<div class="row">
		<div class="col-md-4" class="breuken">
			<ol>
				<li>`x+23=30`</li>
				<li>`x-8=47`</li>
				<li>`2x+12=27`</li>
				<li>`3x+38=53`</li>
			</ol>
		</div>
		<div class="col-md-4">
		<ol start="5">
			<li>`4x-7=33`</li>
			<li>`12+5x=137`</li>
			<li>`-8+7x=41`</li>
			<li>`112-8x=-48`</li>
		</ol>
		</div>
		<div class="col-md-4">
			<ol start="9">
				<li>`3x-12=15`</li>
				<li>`12 1/2+4x=22 1/2`</li>
				<li>`-16+11x=72`</li>
				<li>`112-5x=-8`</li>
			</ol>
		</div>
	</div>

	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`x+23=30`<br>
					<span class="formula"> ? </span> `+` `23=30`<br>
					`x=7`
				</li>
				<li>
					`x-8=47`<br>
					<span class="formula"> ? </span> `-` `8=47`<br>
					`x=55`
				</li>
				<li>
					`2x+12=27`<br>
					<span class="formula"> ? </span> `+` `12=27`<br>
					`2x=15`<br>
					`2` `*` <span class="formula"> ? </span> `= 15`<br>
					`x=7 1/2`
				</li>
				<li>
					`3x+38=53`<br>
					<span class="formula"> ? </span> `+` `38=53`<br>
					`3x=15`<br>
					`3` `*` <span class="formula"> ? </span> `= 15`<br>
					`x=5`
				</li>
				<li>
					`4x-7=33`<br>
					<span class="formula"> ? </span> `-` `7=33`<br>
					`4x=40`<br>
					`4` `*` <span class="formula"> ? </span> `= 40`<br>
					`x=10`
				</li>
				<li>
					`12+5x=137`<br>
					`12 +` <span class="formula"> ? </span> `=137`<br>
					`5x=125`<br>
					`5` `*` <span class="formula"> ? </span> `= 125`<br>
					`x=25`
				</li>
				<li>
					`-8+7x=41`<br>
					`-8 +` <span class="formula"> ? </span> `=41`<br>
					`7x=49`<br>
					`7` `*` <span class="formula"> ? </span> `= 49`<br>
					`x=7`
				</li>
				<li>
					`112-8x=-48`<br>
					`112 -` <span class="formula"> ? </span> `=-48`<br>
					`8x=160`<br>
					`8` `*` <span class="formula"> ? </span> `= 160`<br>
					`x=20`
				</li>
				<li>
					`3x-12=15`<br>
					<span class="formula"> ? </span> `-` `12=15`<br>
					`3` `*` <span class="formula"> ? </span> `= 27`<br>
					`x=9`
				</li>
				<li>
					`12 1/2 +4x=22 1/2`<br>
					`12 1/2 +`<span class="formula"> ? </span> `=22 1/2`<br>
					`4` `*` <span class="formula"> ? </span> `= 10`<br>
					`x=2 1/2`
				</li>
				<li>
					`-16+11x=72`<br>
					`-16+`<span class="formula"> ? </span> `=72`<br>
					`11x=88`<br>
					`11` `*` <span class="formula"> ? </span> `= 88`<br>
					`x=8`
				</li>
				<li>
					`112-5x=-8`<br>
					`112-`<span class="formula"> ? </span> `=-8`<br>
					`5` `*` <span class="formula"> ? </span> `= 120`<br>
					`x=24`
				</li>
			</ol>
		</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="8">
	<h3>Opdracht 8</h3>
	<p>
		Kun je de vergelijking hieronder oplossen met de bordjesmethode? Leg je antwoord uit.<br>
		`12x+15=7x+5`
	</p>
<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Je kunt de vergelijking <b>niet</b> oplossen met de 
				bordjesmethode om dat de variabele, hier de `x`, 
				twee keer voorkomt in de vergelijking.
			</p>
		</div>
		</div>		
</div>

<div class="tekstblok theorie analyse" id=theorieB>
	<h3>Theorie B De balansmethode I</h3>
	<p>	
		Vergelijkingen die je niet kunt oplossen met de bordjesmethode, lossen we op met de <b>balansmethode</b>.
	</p>
	<p>
		Los de vergelijking `5x + 6 = 2x + 12` op.
	</p>
	<p>
		Let op: de notatie verschilt van die op de DWO.
	</p>
	<p>
		`5x + 6 = 2x + 12`
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

<div class="tekstblok opdracht" id="9">
	<h3>Opdracht 9</h3>
	<p>
		Los de volgende vergelijkingen op met de balansmethode. <br>
		Schrijf steeds op wat je links en rechts doet. <br>
		Werk onder elkaar zoals het voorbeeld in de theorie hierboven.
	</p>	
	<div class="row">
		<div class="col-md-6">
			<ol>
				<li>
					`4+3x=2x+16`
				</li>
				<li>
					`5x+8=3x+24`
				</li>
			</ol>
		</div>
		<div class="col-md-6">
			<ol start="3">
				<li>
					`6x+19=3x+28`
				</li>
				<li>
					`15x+81=10x+116`
				</li>
			</ol>
		</div>
	</div>					
				
<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li><table>
					<tr>
						<td>`4+3x`</td>
						<td>`=`</td>
						<td>`2x+16`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-2x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-2x`</td>
					</tr>
					<tr>
						<td>`4+x`</td>
						<td>`=`</td>
						<td>`16`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-4`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-4`</td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`12`</td>
					</tr>
					</table>
				</li>
				<li><table>
					<tr>
						<td>`5x+8`</td>
						<td>`=`</td>
						<td>`3x+24`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-3x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-3x`</td>
					</tr>
					<tr>
						<td>`2x+8`</td>
						<td>`=`</td>
						<td>`24`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-8`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-8`</td>
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
						<td>`6x+19`</td>
						<td>`=`</td>
						<td>`3x+28`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-3x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-3x`</td>
					</tr>
					<tr>
						<td>`3x+19`</td>
						<td>`=`</td>
						<td>`28`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-19`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-19`</td>
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
						<td>`3`</td>
					</tr>
					</table>
				</li>
				<li><table>
					<tr>
						<td>`15x+81`</td>
						<td>`=`</td>
						<td>`10x+116`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-10x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-10x`</td>
					</tr>
					<tr>
						<td>`5x+81`</td>
						<td>`=`</td>
						<td>`116`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-81`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-81`</td>
					</tr>
					<tr>
						<td>`5x`</td>
						<td>`=`</td>
						<td>`35`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:5`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:5`</td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`7`</td>
					</tr>
					</table>
				</li>
				</ol>
		
			</div>		
		</div>
	</div>

<div class="tekstblok opdracht" id="10">
	<h3>Opdracht 10 @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Lineaire vergelijkingen (havo/vwo)</em> en maak activiteit:
	</p>
		<ol id="numbers" start="1">
			<li><em>Lineaire vergelijkingen Strategie (1)</em></li>
			<li><em>Lineaire vergelijkingen Strategie (2)</em></li>
		</ol>
</div><!-- @DWO -->

<div class="tekstblok theorie analyse" id="theorieC">
	<h3>Theorie C De balansmethode II</h3>
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

<div class="tekstblok opdracht" id="11">
	<h3>Opdracht 11</h3>
	<p>
		Los de volgende vergelijkingen op met de balansmethode. <br>
		Schrijf steeds op wat je links en rechts doet. <br>
		Werk onder elkaar zoals het voorbeeld in de theorie hierboven.
	</p>				
	<div class="row">
		<div class="col-md-6">
			<ol>
				<li>
					`5x-8=3x+6`
				</li>
				<li>
					`7x+12=-3x+92`
				</li>
			</ol>
		</div>
		<div class="col-md-6">
			<ol start="3">
				<li>
					`3x-20=15-2x`
				</li>
				<li>
					`-8x+7=7x+97`
				</li>
			</ol>
		</div>
	</div> 

<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li><table>
					<tr>
						<td>`5x-8`</td>
						<td>`=`</td>
						<td>`3x+6`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-3x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-3x`</td>
					</tr>
					<tr>
						<td>`2x-8`</td>
						<td>`=`</td>
						<td>`6`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`+8`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`+8`</td>
					</tr>
					<tr>
						<td>`2x`</td>
						<td>`=`</td>
						<td>`14`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:2`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:2`</td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`7`</td>
					</tr>
					</table>
				</li>
				<li><table>
					<tr>
						<td>`7x+12`</td>
						<td>`=`</td>
						<td>`-3x+92`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`+3x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`+3x`</td>
					</tr>
					<tr>
						<td>`10x+12`</td>
						<td>`=`</td>
						<td>`92`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-12`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-12`</td>
					</tr>
					<tr>
						<td>`10x`</td>
						<td>`=`</td>
						<td>`80`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:10`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:10`</td>
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
						<td>`3x-20`</td>
						<td>`=`</td>
						<td>`15-2x`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`+2x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`+2x`</td>
					</tr>
					<tr>
						<td>`5x-20`</td>
						<td>`=`</td>
						<td>`15`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`+20`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`+20`</td>
					</tr>
					<tr>
						<td>`5x`</td>
						<td>`=`</td>
						<td>`35`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:5`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:5`</td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`7`</td>
					</tr>
					</table>
				</li>
				<li><table>
					<tr>
						<td>`-8x+7`</td>
						<td>`=`</td>
						<td>`7x+97`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-7x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-7x`</td>
					</tr>
					<tr>
						<td>`-15x+7`</td>
						<td>`=`</td>
						<td>`97`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-7`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-7`</td>
					</tr>
					<tr>
						<td>`-15x`</td>
						<td>`=`</td>
						<td>`90`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:-15`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:-15`</td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`-6`</td>
					</tr>
					</table>
				</li>
				
				</ol>
				</div>	
			</div>		
		</div>

<div class="tekstblok opdracht" id="12">
	<h3>Opdracht 12</h3>
	<p>
		Brechtje steekt een rode kaars aan. De formule die hoort bij de rode kaars is:<br>
		`l = 44 - 8t`<br>
		Hierbij is `l` de lengte van de kaars in cm. en `t` de brandtijd in uren.
	</p>
	<p>
		Brechtje blaast de kaars uit als hij voor de helft is opgebrand.
		Ze wil graag weten hoe lang de kaars gebrand heeft.
	</p>
	<ol>	
		<li> 
			Welke vergelijking moet brechtje opstellen?
		</li>
		<li>
			Los de vergelijking op.
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
							`t=2,75` betekent dat de kaars 2 uur en `75/100=3/4` uur brandt. Een uur heeft 60 minuten, dus 
							de kaars brandt 2 uur en `0,75`&sdot; `60=45` minuten.
						</li>
					</ol>
				
				</div>
			</div>

</div>

<div class="tekstblok theorie analyse" id="theorieD">
	<h3>Theorie D Vergelijkingen met haakjes</h3>
	<p>
		Bij een vergelijking met haakjes, werk je eerst de haakjes weg. Daarna los je de vergelijking met de balansmethode op.
	</p>
	<p>
		Kijk voor het wegwerken van haakjes zonodig bij de taak <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=v_2hv_herleiden"><em>Herleiden</em></a>.
	</p>
	<p>
		Voorbeeld: los de vergelijking `2x + 6(3x - 5) = 7x + 9` op.
	</p>
		<div class="row">
			<div class="col-xs-2">
			<p>Stap 1</p>
		</div>
			<div class="col-xs-5">
			<p>
				Werk de haakjes weg.
			</p>
		</div>
			<div class="col-xs-5">
			<table class="table">
				<tbody>
					<tr>
						<td>
							`2x + 6(3x - 5)` 
						</td>
						<td>
							 `=`
						</td>
						<td> 
							`7x + 9`
						</td>
					</tr>
					
				</tbody>
			</table>
		</div>		
		</div>
		<div class="row">
			<div class="col-xs-2">
			<p>Stap 2</p>
		</div>
			<div class="col-xs-5">
			<p>
				Herleid gelijksoortige termen.
			</p>
		</div>
			<div class="col-xs-5">
			<table class="table">
				<tbody>
					<tr>
						<td>
							`2x + 18x - 30`
						</td>
						<td>
							`=`
						</td>
						<td> 
							`7x + 9`
						</td>
					</tr>
				</tbody>
			</table>
		</div>		
		</div>		
		<div class="row">
			<div class="col-xs-2">
			<p>Stap 3</p>
		</div>
			<div class="col-xs-5">
				<p>
					Los verder op.
				</p>
			</div>
			<div class="col-xs-5">
			<table class="table">
				<tbody>
					<tr>
						<td>
							`20x - 30`
						</td>
						<td>
							 `=`
						</td>
						<td> 
							`7x + 9`
						</td>
					</tr>
					<tr>
						<td>
							<span class="balans">`-7x`</span>
						</td>
						<td>
							
						</td>
						<td> 
							<span class="balans">`-7x`</span>
						</td>
					</tr>
					<tr>
						<td>
							`13x - 30`
						</td>
						<td>
							 `=`
						</td>
						<td> 
							`9`
						</td>
					</tr>
					<tr>
						<td>
							<span class="balans">`+30`</span>
						</td>
						<td>
							
						</td>
						<td> 
							<span class="balans">`+30`</span>
						</td>
					</tr>
					<tr>
						<td>
							`13x`
						</td>
						<td>
							 `=`
						</td>
						<td> 
							`39`
						</td>
					</tr>
					<tr>
						<td>
							<span class="balans">`&divide; 13`</span>
						</td>
						<td>
							
						</td>
						<td> 
							<span class="balans">`&divide; 13`</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>		
		</div>		
		<div class="row">
			<div class="col-xs-2">
			<p></p>
		</div>
			<div class="col-xs-5">
			<p></p>
		</div>
			<div class="col-xs-5">
			`x = 39/13 = 3`
		</div>		
		</div>

</div>

<div class="tekstblok opdracht" id="13">
	<h3>Opdracht 13 @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Lineaire vergelijkingen (havo/vwo)</em> en maak activiteit:
	</p>
	<ol id="numbers" start="3">
		<li><em>Lineaire vergelijkingen Strategie (3)</em></li>
	</ol>
</div><!-- @DWO -->

<div class="tekstblok opdracht" id="14">
	<h3>Opdracht 14</h3>
	<p>Los de volgende vergelijkingen op met de balansmethode.</p>
	<ol>
		<li><math><mn>5</mn><mo>+</mo><mn>3</mn><mo>(</mo><mn>3</mn><mi>x</mi><mo>+</mo><mn>2</mn><mo>)</mo><mo>=</mo><mn>29</mn></math></li>
		<li><math><mn>3</mn><mi>x</mi><mo>+</mo><mn>2</mn><mo>(</mo><mn>4</mn><mi>x</mi><mo>+</mo><mn>8</mn><mo>)</mo><mo>=</mo><mn>6</mn><mi>x</mi><mo>+<mn>26</mn></math></li>
		<li><math><mn>8</mn><mi>x</mi><mo>-</mo><mn>3</mn><mo>(</mo><mn>5</mn><mi>x</mi><mo>+</mo><mn>7</mn><mo>)</mo><mo>=</mo><mn>19</mn><mo>-<mn>3</mn><mi>x</mi></math></li>
		<li><math><mn>42</mn><mo>(</mo><mn>2</mn><mo>+</mo><mi>x</mi><mo>)=</mo><mn>420</mn></math></li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li><table>
					<tr>
						<td>`5 + 3(3x + 2)`</td>
						<td>`=`</td>
						<td>`29`</td>
					</tr>
					<tr>
						<td>`5 + 9x + 6`</td>
						<td>`=`</td>
						<td>`29`</td>
					</tr>
					<tr>
						<td>`11 + 9x`</td>
						<td>`=`</td>
						<td>`29`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-11`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-11`</td>
					</tr>
					<tr>
						<td>`9x`</td>
						<td>`=`</td>
						<td>`18`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:9`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:9`</td>
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
						<td>`3x + 2(4x+8)`</td>
						<td>`=`</td>
						<td>`6x+26`</td>
					</tr>
					<tr>
						<td>`3x+8x+16`</td>
						<td>`=`</td>
						<td>`6x+26</td>
					</tr>
					<tr>
						<td>`11x+16`</td>
						<td>`=`</td>
						<td>`6x+26`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-6x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-6x`</td>
					</tr>
					<tr>
						<td>`5x+16`</td>
						<td>`=`</td>
						<td>`26`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-16`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-16`</td>
					</tr>
					<tr>
						<td>`5x`</td>
						<td>`=`</td>
						<td>`10`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:5`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:5`</td>
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
						<td>`8x-3(5x+7)`</td>
						<td>`=`</td>
						<td>`19-3x`</td>
					</tr>
					<tr>
						<td>`8x-15x-21`</td>
						<td>`=`</td>
						<td>`19-3x`</td>
					</tr>
					<tr>
						<td>`-7x-21`</td>
						<td>`=`</td>
						<td>`19-3x`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`+3x`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`+3x`</td>
					</tr>
					<tr>
						<td>`-4x-21`</td>
						<td>`=`</td>
						<td>`19`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`+21`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`+21`</td>
					</tr>
					<tr>
						<td>`-4x`</td>
						<td>`=`</td>
						<td>`40`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:-4`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:-4`</td>
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
						<td>`42(2+x)`</td>
						<td>`=`</td>
						<td>`420`</td>
					</tr>
					<tr>
						<td>`84+42x`</td>
						<td>`=`</td>
						<td>`420`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-84`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-84`</td>
					</tr>
					<tr>
						<td>`42x`</td>
						<td>`=`</td>
						<td>`336`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:42`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:42`</td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`8`</td>
					</tr>
					</table>
				</li>
				</ol>
					
			</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="15">
	<h3>Opdracht 15</h3>
	<p>
		Kijk nog eens naar de vorige opdracht.<br>
		Welke vergelijkingen had je ook kunnen oplossen zonder de haakjes weg te werken en de bordjesmethode te gebruiken? 
	</p>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<p>
					`42(2+x)=420`<br>
					`42`&sdot;<span class="formula"> ? </span> `=420`<br>
					`2+x=10`<br>
					`2+`<span class="formula"> ? </span>`=10`<br>
					`x=8`
				</p>
			</div>
	</div>
</div>

<div class="tekstblok opdracht" id="16">
			<h3>Opdracht 16</h3>
			<p>Los de volgende vergelijkingen op. Bepaal zelf of je de 
				bordjesmethode en/of je de balansmethode moet gebruiken.	
			</p>	

			<ol>
				<li>
					`2x+5(2x-4)=4x+44`
				</li>
				<li>
					`3(2x+8)=12`
				</li>
				<li>
					`3+ x/4 = 8`
				</li>
				<li>
					`1/2 (6x+2) - x=11-3x`
				</li>
			</ol>		
	
<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				
				<ol>
				<li>
					`2x+5(2x-4)=4x+44`<br>
					`2x+10x-20=4x+44`<br>
					`12x-20=4x+44`<br>
					`8x-20=44`<br>
					`8x=64`<br>
					`x=8`
				</li>
				<li>
					`3(2x+8)=12`<br>
					`3*`<span class="formula"> ? </span>`=12`<br>
					`2x+8=4`<br>
					`2x=-4`<br>
					`x=-2`
				</li>
				<li>
					`3+ x/4 = 8`<br>
					`3+`<span class="formula"> ? </span>`=8`<br>
					`x/4 = 5`<br>
					`x=20`
				</li>
				<li>
					`1/2 (6x+2) - x=11-3x`<br>
					`3x+1-x=11-3x`<br>
					`2x+1=11-3x`<br>
					`5x+1=11`<br>
					`5x=10`<br>
					`x=2`
				</li>
			</ol>		
		</div>		
		</div>
</div>

<div class="tekstblok theorie analyse" id="theorieE">
	<h3>Theorie E Vergelijkingen met breuken I</h3>
	<p>
		Een vergelijking met breuken kan je soms makkelijker maken door de 
		breuken eerst weg te werken.
	</p>
	<p>
		Voorbeeld, los op: `3/5 x+7 = 10`
	</p>
	<table class="stappenplan">
		<tr>
				<td>Stap 1:</td>
				<td>Kijk naar de noemer van de breuk.</td>
				<td>Hier is de noemer `5`</td>
			</tr>
		<tr>
				<td>Stap 2:</td>
				<td>Vermenigvuldig de vergelijking met 5</td>
				<td>`3x+35=50`</td>
			</tr>
		<tr>
				<td>Stap 3:</td>
				<td>Los de vergelijking op</td>
				<td><table>
					<tr>
						<td>`3x+35`</td>
						<td>`=`</td>
						<td>`50`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`-35`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`-35`</td>
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
				</td>
			</tr>
	</table>
</div>

<div class="tekstblok opdracht" id="17">
	<h3>Opdracht 17</h3>
	</p>
		Neem over en los op.
	</p>
	<ol class="breuken">
				<li>
					`3/4 x+12=18`
				</li>
				<li>
					`2/9 x-4=6`
				</li>
				<li>
					`6/11 +x=2/11 x+3`
				</li>
				<li>
					<aside class="tekstballon_theorie">
						<p>`1 3/5=8/5`</p>
					</aside>
					
					`1/5 x+1=1 3/5`
				</li>
				<li>
					`1 3/7 x+8=5/7 x +6`
				</li>
			</ol>

	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						`3/4 x+12=18`<br>
						`3x+48=72`<br>
						`3x=24`<br>
						`x=8`<br>
					</li>
					<li>
						`2/9 x-4=6`<br>
						`2x-36=54`<br>
						`2x=90`<br>
						`x=45`<br>
					</li>
					<li>
						`6/11 +x=2/11 x+3`<br>
						`6+11x=2x+33`<br>
						`6+9x=33`<br>
						`9x=27`<br>
						`x=3`<br>
					</li>
						<li>		
						`1/5 x+1=1 3/5`<br>
						`x+5=8`<br>
						`x=3`
					</li>
					<li>
						`1 3/7 x+8=5/7 x +6`<br>
						`10x+56=5x+42`<br>
						`5x+56=42`<br>
						`5x=-14`<br>
						`x=- 14/5`
					</li>
				</ol>
					
			</div>		
		</div>

</div>

<div class="tekstblok theorie analyse" id="theorieF">
	<h3>Theorie F Vergelijkingen met breuken II</h3>
	<p>
		Om in de vergelijking <br>
		`3/4 x+2= 1/3 x+7` <br>
		alle breuken 'kwijt' te raken is het niet genoeg om te vermenigvuldigen met `4`:<br>
		`3x+8=4/3 x+28` <br>
		<br>
		Om in de vergelijking <br>
		`3x+8=4/3 x+28` <br>
		de breuken weg te werken vermenigvuldigen we met `3`:<br>
		`9x+24=4x+84`<br>
	</p>
	<p>	
		<aside class="tekstballon_theorie">
			<p>veelvouden van `3`:<br>
				`3,6,9,`<FONT color="red">12</FONT>`,15,18`<br>
			
				veelvouden van `4`:<br>
				`4,8,`<FONT color="red">12</FONT>`,16,20`<br>
				<br>
				`12` is het kleinste gemeenschappelijke veelvoud (kgv).
			</p>
		</aside>
		Hoe raak ik in de volgende vergelijking in één keer alle breuken kwijt?<br>
		 `3/4 x+2= 1/3 x+7`<br>
		 <br>
		 Vermenigvuldig de vergelijking met `12`:<br>
		 <br>
		`12 * 3/4 x+12*2=12* 1/3 x+12*7`<br>
		`12/1 * 3/4 x+24=12/1 * 1/3 x+84`<br>
		`(12*3)/4 x+24=12/3 x+84`<br>
		`36/4 x+24=12/3 x+84`<br>
		`9x+24=4x+84`<br>
		<br>
		We vermenigvuldigen met `12` omdat `12` het kleinste gemeenschappelijke 
		veelvoud is van `3` en `4`. Hierdoor zijn we in één keer van alle breuken in de vergelijking af.
	</p>
</div>

<div class="tekstblok opdracht" id="18">
	<h3>Opdracht 18 @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Lineaire vergelijkingen (havo/vwo)</em> en maak activiteit:
	</p>
	<ol id="numbers" start="4">
		<li><em>Lineaire vergelijkingen Strategie (4)</em></li>
		<li><em>Lineaire vergelijkingen Strategie (5)</em></li>
	</ol>
</div><!-- @DWO -->

<div class="tekstblok opdracht" id="19">
	<h3>Opdracht 19</h3>
	<p>Los de volgende vergelijkingen op met de balansmethode.</p>
		<ol>
			<li>
				`5/6 x + 2/3 = 1/2 x - 1/6`
			</li>
			<li>
				`2/3 x + 3/8 = -2x + 1 1/8`
			</li>
			<li>
				`2 1/2 x - 1/4 = 1 3/4 x + 1 2/3`
			</li>
		</ol>
		
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
		<ol>
			<li>
				`5/6 x + 2/3 = 1/2 x - 1/6`<br>
				Vermenigvuldig alles met 12 (het KGV van 2, 3 en 6)<br>
				`10 x + 8 = 6 x - 2`<br>
				`4 x  = - 10`<br>
				`x  = - 10/4 = -2 1/2`
			</li>
			<li>
				`2/3 x + 3/8 = -2x + 1 1/8`<br>
				Vermenigvuldig met 24<br>
				`16 x + 9 = -48x + 27`<br>
				`64 x  = 18`<br>
				`x  = 18/64 = 9/32`
			</li>
			<li>
				`2 1/2 x - 1/4 = 1 3/4 x + 1 2/3`<br>
				Vermenigvuldig alles met 12<br>
				`30 x - 3 = 21 x + 20`<br>
				`9 x  = 23`<br>
				`x  = 23/9 = 2 5/9`
			</li>
		</ol>
			</div>		
		</div>
</div>

<div class="tekstblok opdracht" id="20">
	<h3>Opdracht 20</h3>
	<p>
		Gegeven is de volgende vergelijking:<br>
		`2/3 x+4=1/5 x+19`
	</p>
	<ol>
		<li>
			Welke vergelijking krijg je als je de vergelijking hierboven 
			vermenigvuldigt met `3`?
		</li>
		<li>
			Met welk getal moet je de vergelijking uit opgave a. 
			vermenigvuldigen om de breuk ook rechts van het `=`-teken te 
			laten verdwijnen?
		</li>
		<li>
			Met welk getal moet je de vergelijking `2/3 x+4=1/5 x+19` 
			vermenigvuldigen om de breuken in één keer weg te werken?
		</li>
	</ol>

<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						`2x+12=3/5 x+57`
					</li>
					<li>
						Je moet de vergelijking vermenigvuldigen met `5`.
					</li>
					<li>
						Dan moet je de vergelijking vermenigvuldigen met `15`.
					</li>
				</ol>
			</div>		
		</div>
</div>

<div class="tekstblok opdracht" id="21">
	<h3>Opdracht 21</h3>
	<p>Los de volgende vergelijkingen op.</p>
	<ol>
		<li>
			`2/3 x+4=1/2 x+5`
		</li>
		<li>
			`x+3/4=2/5 x+3`
		</li>
		<li>
			`2 1/4 x+2=3/8 x+5 3/4`
		</li>
		<li>
			`1/3 x- 1/2=3/4 x+1/6`
		</li>
		<li>
			`3/4 x + 1/5 = 1/3 x + 5/7`
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`2/3 x+4=1/2 x+5`<br>
					Vermenigvuldigen met `6`<br>
					`6* 2/3 x + 24=6* 1/2 x+30`<br>
					`12/3 x+24= 6/2 x+30`<br>
					`4x+24=3x+30`<br>
					`x=6`
				</li>
				<li>
					`x+3/4=2/5 x+3`<br>
					Vermenigvuldig met `20`<br>
					`20x+ 60/4 = 40/5 x+60`<br>
					`20x+15=8x+60`<br>
					`12x=45`<br>
					`x=45/12`<br>
					`x= 15/4 = 3 3/4`
				</li>
				<li>
					`2 1/4 x+2=3/8 x+2 3/4`<br>
					Vermenigvuldig met `8`<br>
					`8* 9/4 x+16= 8* 3/8 x + 8* 11/4`<br>
					`72/4 x+16= 24/8 x+ 88/4`<br>
					`18x+16=3x+22`<br>
					`15x=6` <br>
					`x= 6/15`
				</li>
				<li>
					`1/3 x- 1/2=3/4 x+1/6`<br>
					Vermenigvuldig met `12`<br>
					`12/3 x- 12/2 = 36/4 x+ 12/6`<br>
					`4x-6=9x+2`<br>
					`-5x=8`<br>
					`x= - 8/5`
				</li>
				<li>
					`3/4 x + 1/5 = 1/3 x + 5/7`<br>
					Vermenigvuldig met `420` (dat is het KGV van `3`,`4`,`5` en `7`)<br>
					`315 x + 84 = 140 x + 300`<br>
					`175 x  = 216`<br>
					`x  = 216/175 = 1 41/175`
				</li>
			</ol>
		</div>		
		</div>
</div>

<div class="tekstblok opdracht" id="22">
	<h3>Opdracht 22 @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Lineaire vergelijkingen (havo/vwo)</em> en maak activiteit:
	</p>
	<ol id="numbers" start="6">
		<li><em>Snijpunt van grafieken</em></li>
	</ol>
</div><!-- @DWO -->

<div class="tekstblok theorie analyse" id="theorieG">
	<h3>Theorie G Snijpunt van grafieken</h3>
	<p>
		Om het snijpunt van twee lijnen te berekenen, moet je de 	`x`-waarde en de `y`-waarde van het snijpunt vinden.
	</p>
	<p>
		Een voorbeeld:<br>
			Bereken het snijpunt van de volgende grafieken: 
			<FONT color="red">`y=1/2 x+1`</FONT> en
			<FONT color="blue">`y=-1 1/2x+7`</FONT>
	</p>
	<table class="stappenplan">
		<tr>
			<td>Stap 1:</td>
			<td>Stel een vergelijking op.</td>
			<td><FONT color="red">`1/2 x+1`</FONT>`=`<FONT color="blue">`-1 1/2 x+7`</FONT></td>
		</tr>
		<tr>
			<td>Stap 2:</td>
			<td>Bereken de `x`-waarde van het snijpunt door de vergelijking uit stap 1 op te lossen.</td>
			<td>
				<table>
					<tr>
						<td>`1/2 x+1`</td>
						<td>`=`</td>
						<td>`-1 1/2 x+7`</td>
					</tr>
					<tr>
						<td><FONT color="orange">`+1 1/2 x`</FONT></td>
						<td></td>
						<td><FONT color="orange">`+1 1/2 x`</FONT></td>
					</tr>
					<tr>
						<td>`2x+1`</td>
						<td>`=`</td>
						<td>`7`</td>
					<tr>
						<td><FONT color="orange">`-1`</FONT></td>
						<td></td>
						<td><FONT color="orange">`-1`</FONT></td>
					</tr>
					<tr>
						<td>`2x`</td>
						<td>`=`</td>
						<td>`6`</td>
					</tr>
						<td><FONT color="orange">`:2`</FONT></td>
						<td></td>
						<td><FONT color="orange">`:2`</FONT></td>
					</tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`3`</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>Stap 3:</td>
			<td>
				Bereken de`y`-waarde van het snijpunt door
				 de `x`-waarde die je hebt uitgerekend bij stap 2 
				 in te vullen in één van de twee formules.
			</td>
			<td>
				`y=1/2 x+1`<br>
				`y=1/2` &sdot; `3+1`<br>
				`y=2 1/2`
			</td>
		</tr>
		<tr>
			<td>Stap 4:</td>
			<td>
				Als het goed is krijg je dezelfde `y`-waarde als je de `x`-waarde invult in de andere formule. Controleer dit.
			</td>
			<td>
				`y=-1 1/2 x+7`<br>
				`y=-1 1/2`&sdot;`3+7`<br>
				`y=-4 1/2+7`<br>
				`y=2 1/2`
			</td>
		</tr>
		<tr>
			<td>Stap 5:</td>
			<td>Schrijf de coordinaten van het snijpunt op.</td>
			<td>Snijpunt:`(3,2 1/2)`</td>
		</tr>
		</table>
		
	</div>

<div class="tekstblok opdracht" id="23">
			<h3>Opdracht 23</h3>
			<p>Bereken het snijpunt voor de volgende grafieken.</p>
			<ol>
				<li>
					`y=3x+8` en `y=-2x+23`
				</li>
				<li>
					`y=-4x+17` en `y=2x+8`
				</li>
			</ol>
	

<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
<table>
					<tr>
						<td>`3x+8`</td>
						<td>`=`</td>
						<td>`-2x+23`</td>
					</tr>
					<tr>
						<td><FONT color="orange">`+2x`</FONT></td>
						<td></td>
						<td><FONT color="orange">`+2x`</FONT></td>
					</tr>
					<tr>
						<td>`5x+8`</td>
						<td>`=`</td>
						<td>`23`</td>
					</tr>
					<tr>
						<td><FONT color="orange">`-8`</FONT></td>
						<td></td>
						<td><FONT color="orange">`-8`</FONT></td>
					</tr>
					<tr>
						<td>`5x`</td>
						<td>`=`</td>
						<td>`15`</td>
					</tr>
					<tr>
						<td><FONT color="orange">`:5`</FONT></td>
						<td></td>
						<td><FONT color="orange">`:5`</FONT></td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`3`</td>
					</tr>
				</table>
				<br>
						`y=3x+8`<br>
						`y=3*3+8`<br>
						`y=9+8=17`<br>
						<br>
						Controle met andere formule:<br>
						`y=-2x+23`<br>
						`y=-2*3+23`<br>
						`y=-6+23`<br>
						`y=17`<br>
						coordinaten zijn `(3,17)`.
					</li>
					<li>
						<table>
					<tr>
						<td>`-4x+17`</td>
						<td>`=`</td>
						<td>`2x+8`</td>
					</tr>
					<tr>
						<td><FONT color="orange">`-2x`</FONT></td>
						<td></td>
						<td><FONT color="orange">`-2x`</FONT></td>
					</tr>
					<tr>
						<td>`-6x+17`</td>
						<td>`=`</td>
						<td>`8`</td>
					</tr>
					<tr>
						<td><FONT color="orange">`-17`</FONT></td>
						<td></td>
						<td><FONT color="orange">`-17`</FONT></td>
					</tr>
					<tr>
						<td>`-6x`</td>
						<td>`=`</td>
						<td>`-9`</td>
					</tr>
					<tr>
						<td><FONT color="orange">`:-6`</FONT></td>
						<td></td>
						<td><FONT color="orange">`:-6`</FONT></td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`1 1/2`</td>
					</tr>
				</table>
				<br>
					`y=-4x+17`<br>
					`y=-4*1 1/2 +17`<br>
					`y=-6+17`<br>
					`y=11`<br>
					<br>
					Controle met andere formule:<br>
					`y=2x+8`<br>
					`y=2*1 1/2 +8`<br>
					`y=11`<br>
					coordinaten zijn: `(1 1/2 , 11)`.
			</li>
				</ol>
			</div>	
		</div>	
</div>

<div class="tekstblok opdracht" id="24">
	<h3>Opdracht 24</h3>
	<p>Hieronder zie je twee grafieken.
		<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2hv/twee_lijnen.png" width="450px">
		<ol>
			<li>
				Stel formules op voor de lijnen `l` en `m`.
			</li>
			<li>
				Bereken het snijpunt van de lijnen `l` en `m`.
			</li>
		</ol>
	</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Lijn `l`:<br>
					Twee punten aflezen: `(0,-4)` en `(2,1)`.<br>
					Hellingsgetal: `(1- -4)/(2-0) = 5/2 = 2 1/2` <br>
					Startgetal: `-4`<br>
					Formule: `y=2 1/2 x-4`<br>
					<br>
					Lijn `m`:<br>
					Twee punten aflezen: `(0,6)` en `(1,4)`.<br>
					Hellingsgetal: `(4-6)/(1-0) = (-2)/1 = -2` <br>
					Startgetal: `6`<br>
					Formule: `y=-2x+6`<br>
				</li>
				<li>
					<table>
					<tr>
						<td>`2 1/2 x-4`</td>
						<td>`=`</td>
						<td>`-2x+6`</td>
					</tr>
					<tr>
						<td><FONT color="orange">`+2x`</FONT></td>
						<td></td>
						<td><FONT color="orange">`+2x`</FONT></td>
					</tr>
					<tr>
						<td>`4 1/2 x-4`</td>
						<td>`=`</td>
						<td>`6`</td>
					</tr>
					<tr>
						<td><FONT color="orange">`+4`</FONT></td>
						<td></td>
						<td><FONT color="orange">`+4`</FONT></td>
					</tr>
					<tr>
						<td>`4 1/2 x`</td>
						<td>`=`</td>
						<td>`10`</td>
					</tr>
					<tr>
						<td><FONT color="orange">`: 4 1/2`</FONT></td>
						<td></td>
						<td><FONT color="orange">`: 4 1/2`</FONT></td>
					</tr>
					<tr>
						<td>`x`</td>
						<td>`=`</td>
						<td>`(10)/(4 1/2) = 20/9`</td>
					</tr>
				</table>
				<br>
					`y=2 1/2 x -4`<br>
					`y=2 1/2 * 20/9 -4`<br>
					`y=5/2 * 20/9 -4`<br>
					`y=100/18 -4 `<br>
					`y=5 5/9 -4`<br>
					`y=1 5/9`
					<br>
					Controle met andere formule:<br>
					`y=-2x+6`<br>
					`y=-2*20/9 +6`<br>
					`y=-40/9 +6`<br>
					`y=-4 4/9 +6`<br>
					`y=1 5/9`
					coordinaten zijn: `(20/9 , 1 5/9)`.
				</li>
			</ol>
		</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="25">
			<h3>Opdracht 25</h3>
			<p><img src="afbeeldingen/analyse_lineaire_vergelijkingen_2hv/schildersbedrijven_vergelijken.png" width="400px" class="rightfloat">
			Hiernaast zie je de grafieken getekend die horen bij de schildersbedrijven "Witze" en schildersbedrijf "Anders". 
			</p>
			<ol>
				<li>
					Wat moet je bij schildersbedrijf "Anders" betalen voor een schildersklus van `20` uur? Wat betaal je voor dezelfde klus bij "Witze"?
				</li>
			</ol>
			<p>In mijn huis is de gang toe aan een schilderbeurt. De schilder verwacht ongeveer `5` uur bezig te zijn met de klus.</p>
			<ol start="2">
				<li>Welk schildersbedrijf moet ik inhuren om de kosten zo laag mogelijk te houden?</li>
			</ol>
			<p>Nu mijn gang er zo mooi uit ziet, wil ik toch ook graag dat mijn woonkamer een nieuw kleurtje krijgt. De schilder berekent dat hij voor de woonkamer `17` uur nodig heeft.</p>
			<ol start="3">
				<li>
					Welk bedrijf moet ik inhuren voor mijn woonkamer?
				</li>
				<li>
					Wanneer is bedrijf Witze goedkoper?
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

<div class="tekstblok opdracht" id="26">
	<h3>Opdracht 26</h3>
	<p>
		<div class="row">
		<div class="col-xs-8">
		Een luchtballon bevat 64 kg helium. Elk uur lekt er 1,8 kg weg.<br>
		Dat is niet zo erg zolang er maar minsten 40 kg in zit. 
<ol>
		<li>
			Maak een formule voor de hoeveelheid helium in de ballon. <br>
			Gebruik `u` voor de tijd (in uren) en `H` voor de hoeveelheid helium (in kg).
		</li>
		<li>
			Los de volgende vergelijking op:<br>
			`64-1,8u=0`<br>
			Leg uit wat je nu eigenlijk hebt uitgerekend.
		</li>
		<li>
			Welke vergelijking moet je oplossen om uit te rekenen wanneer er nog 40 kg helium in de ballon zit?
		</li>
		<li>
			Bereken de coordinaten van het snijpunt uit vraag c.
		</li>
		<li>
			Teken de grafiek van de formule `H=64-1,8u`. Bedenk goed hoe lang je je horizontale as maakt!
		</li>
		<li>
			Teken ook de grafiek van de formule `H=40`.
		</li>
		<li>
			Neem over en vul in:<br>
			Na .... uur en .... minuten zit er minder dan 40 kg helium in de ballon.
		</li>
		<li>
			Eelke wil graag reclame maken met zo'n reclameballon. De ballon laat ze om `09.00` uur op. <br>
			Van hoe laat tot hoe laat zit er meer dan 40 kg helium in de ballon? Gebruik de grafiek.
		</li>
	</ol>		
			</div>
		<div class="col-xs-4">
		<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2hv/reclameballon.png" width="200px" class="img-responsive">
		</div>
		</div>
</p>
	

<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						`H=64-1,8u`
					</li>
					<li>
						<table>
					<tr>
						<td>`64-1,8u`</td>
						<td>`=`</td>
						<td>`0`</td>
					</tr>
					<tr>
						<td><FONT color="orange">`-64`</FONT></td>
						<td></td>
						<td><FONT color="orange">`-64`</FONT></td>
					</tr>
					<tr>
						<td>`-1,8u`</td>
						<td>`=`</td>
						<td>`-64`</td>
					</tr>
					<tr>
						<td><FONT color="orange">`:-1,8`</FONT></td>
						<td></td>
						<td><FONT color="orange">`:-1,8`</FONT></td>
					</tr>
					<tr>
						<td>`u`</td>
						<td>`=`</td>
						<td>`..`</td>
					</tr>
					</table><br>
					Je hebt berekent wanneer er geen helium meer in de ballon zit.
					</li>
					<li>
						`64-1,8u=40`
					</li>
					<li>
						<table>
					<tr>
						<td>`64-1,8u`</td>
						<td>`=`</td>
						<td>`40`</td>
					</tr>
					<tr>
						<td><FONT color="orange">`-64`</FONT></td>
						<td></td>
						<td><FONT color="orange">`-64`</FONT></td>
					</tr>
					<tr>
						<td>`-1,8u`</td>
						<td>`=`</td>
						<td>`-24`</td>
					</tr>
					<tr>
						<td><FONT color="orange">`:-1,8`</FONT></td>
						<td></td>
						<td><FONT color="orange">`:-1,8`</FONT></td>
					</tr>
					<tr>
						<td>`u`</td>
						<td>`=`</td>
						<td>`13 1/3`</td>
					</tr>
					</table><br>
					Coordinaten zijn `(13 1/3 , 40)`.
					</li>
					<li>
						<br>
						<img src="afbeeldingen/analyse_lineaire_vergelijkingen_2hv/grafiek_reclameballon.png" width="500px">
					</li>
					<li>
						zie e.
					</li>
					<li>
						Na `13` uur en `20` minuten zit er minder dan 40 kg helium in de ballon.
					</li>
					<li>
						Van `09.00` uur tot `22.20` zit er meer dan `40` kg helium in de ballon.
					</li>
				</ol>
			</div>
			</div>		
</div>

<div class="tekstblok opdracht" id="27">
	<h3>Opdracht 27 @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Lineaire vergelijkingen (havo/vwo)</em> en maak activiteit:
	</p>
	<ol id="numbers" start="7">
		<li><em>Lineaire vergelijkingen Oefenen (1)</em></li>
		<li><em>Lineaire vergelijkingen Oefenen (2)</em></li>
		<li><em>Lineaire vergelijkingen Oefenen (3)</em></li>
		<li><em>Lineaire vergelijkingen Oefenen (4)</em></li>
		<li><em>Lineaire vergelijkingen Oefenen (5)</em></li>
	</ol>
</div><!-- @DWO -->

<div class="tekstblok opdracht" id="proeftoets">
	<h3>Proeftoets</h3>
	<p>
		Ga naar de map <a href="https://drive.google.com/drive/folders/0B-EzZiYS_HciWDNsS29Xa1lvcDQ" target="_blank">Proeftoetsen leerjaar 2 Wiskunde123</a> en open daar de juiste proeftoets.
	</p>
</div>

</div>