<?php
	//Definieer sidebar
	$doorverwijzingen = array(
      '#inleiding' => 'Inleiding',
	  '#theorieA' => 'Herleiden is korter schrijven',
      '#theorieB' => 'Termen',
      '#theorieC' => 'Vergelijkingen oplossen met bordjes',
      '#theorieD' => 'Eerst herleiden, dan oplossen',
      '#theorieE' => 'Oppervlakte van een rechthoek',
      '#theorieF' => 'Factoren',
      '#theorieG' => 'Termen met machten',
      '#theorieH' => 'Herleiden met rechthoeken',
      '#theorieI' => 'Haakjes wegwerken',
      '#theorieJ' => 'Herleiden met tabellen',
      '#theorieK' => 'Machten van variabelen',
      '#theorieL' => 'Machten vermenigvuldigen',
      '#proeftoets' => 'Proeftoets');                                                      
?>


<title>Leerjaar 2 | Herleiden</title>

<div class="taakinhoud">

<div class="tekstblok theorie vaardigheden" id="inleiding">
	<h3>Herleiden</h3>
	<p>
		Deze taak gaat over <b>herleiden</b>. Herleiden is het korter schrijven van formules of expressies. Voor het werken met formules en het oplossen van vergelijkingen is goed kunnen herleiden van groot belang.
	</p>
	<p>
		We herhalen eerst de stof van <a href="index2.php?p=http://wiskunde.vathorstcollege.nl/index2.php?p=vaar_letterrekenen" target="_blank">Letterrekenen</a> uit leerjaar 1.<br>
		Daarna leer je met behulp van rechthoeken haakjes weg te werken. Belangrijke begrippen zijn: herleiden, expressies, stukjes- en rechthoekformule.
	</p>
	<!-- Opbouw taak:	<h3>Opbouw taak</h3>
		<ol>
			<li>
				herhalen begripen als termen, factoren en variabelen;
			</li>
			<li>
				herhalen herleiden van veeltermen;
			</li>
			<li>
				introductie rechthoek oppervlakte model voor herleiden haakjes;
			</li>
			<li>
				haakjes wegwerken met rechthoek- en stukjesformules;
			</li>
			<li>
				haakjes wegwerken met vermenigvuldigingstabel;
			</li>
			<li>
				introductie machten met variabelen;
			</li>
			<li>
				herleiden met machten.
			</li>
		</ol>		-->
		
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 1 Rechthoek met stokjes</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Hiernaast zie je een rechthoek gemaakt van tien stokjes. De lengte van één stokje is `g` cm.
			</p>
			<ol>
				<li>
					Bereken de omtrek van de rechthoek als je weet dat één stokje 5 cm lang is.
				</li>
				<li>
					Leg uit dat je de omtrek van de rechthoek kunt opschrijven als `omtrek=2 * g + 3 * g + 2 * g + 3 * g` 
				</li>
				<li>
					Bereken de omtrek van de rechthoek als `g=3` en als `g=8`.
				</li>
				<li>
					Volgens Meike kun je de formule herschrijven als `P=10g`.<br>
					De `P` staat voor het Engelse woord <em>perimeter</em> wat omtrek betekent.<br>
					Hoe komt zij aan die `10g`?
				</li>
				<li>
					Bereken `P` als `g=11`. Maak gebruik van de formule.
				</li>
			</ol>		
		</div>
		<div class="col-xs-5">
			<img src="../afbeeldingen/vaardigheden_leerjaar_2/rechthoek_stokjes.png" alt="rechthoek met stokjes"/>
		</div>		
	</div>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`5+5+5+5+5+5+5+5+5+5=10 * 5=50` cm
				</li>
				<li>
					De korte zijden zijn 2 stokjes lang en de lange zijden zijn 3 stokjes lang.<br>
					Een korte zijde is dan `2 * g` lang en een lange zijde `3 * g`.
				</li>
				<li>
					`omtrek=2 * 3 + 3 * 3 + 2 * 3 + 3 * 3 = 10 * 3 = 30`<br> 
					`omtrek=2 * 8 + 3 * 8 + 2 * 8 + 3 * 8 = 10 * 8 = 80`
				</li>
				<li>
					In totaal zijn het 10 stokjes.
				</li>
				<li>
					`P=10 * 11 = 110`
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 2 Touwtjes</h3>
		<div class="row">
			<div class="col-xs-12">
				<img src="../afbeeldingen/vaardigheden_leerjaar_2/touw_llkkk.png" alt="touw_llkkk" width="400" height="" />
			</div>
		</div>
	<p>
		Van de vijf stukken touw hierboven zijn er twee lang en drie kort. De lengte van een lang stuk touw is `l` cm en die van een kort stuk `k` cm.
	</p>
	<ol>
		<li>
			Bereken de totale lengte als gegeven is dat `l=3` en `k=2`.	
		</li>
		<li>
			Teken met behulp van 6 korte en 2 lange stukken touw een rechthoek.
		</li>
		<li>
			Naomi berekent de omtrek van deze rechthoek met de formule<br>
			`P=3k+l+3k+l`. Klopt deze formule?
		</li>
		<li>
			Naomi wil de formule korter schrijven.<br>
			Neem over en vul in: `3k+3k=...k`.<br>
			En: `l+l=...l`
		</li>
		<li>
			Nu weet Naomi hoe ze de formule korter schrijft!<br>
			Neem over en vul in: `P=...k+...l`.
		</li>
		<li>
			Waarom kun je de formule niet nog korter schrijven?
		</li>
		<li>
			Achmed maakt een rechthoek met 10 lange stukken en 8 korte stukken touw. Geef de formule voor de omtrek van de rechthoek die hij maakt. Gebruik weer de letter `P` van het Engelse <em>perimeter</em> voor omtrek.
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`3+3+2+2+2=12`
				</li>
				<li>
					<br>
					<img class="img-small" src="../afbeeldingen/vaardigheden_leerjaar_2/rechthoek_lkkklkkk.png" alt="rechthoek_lkkklkkk" />
				</li>
				<li>
					Ja, de formule klopt: de 2 korte zijden van de rechthoek zijn `l` lang en de 2 lange zijden zijn `3k` lang. 
				</li>
				<li>
					`3k+3k=6k`.<br>
					`l+l=2l`
				</li>
				<li>
					`P=6k+2l`<br>
					Merk op dat de letters op alfabetische volgorde staan.
				</li>
				<li>
					Omdat `6k` en `2l` geen gelijksoortige termen zijn, kun je ze niet bij elkaar op tellen.
				</li>
				<li>
					`P=8k+10l`<br>
					Het is een goede gewoonte om de letters op alfabetische volgorde te zetten.
				</li>
			</ol>
		</div>
		</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieA">
	<h3>Theorie A Herleiden is korter schrijven</h3>
	<div class="row">
		<div class="col-md-7">
			<p>
				Het korter schrijven van een formule of een expressie noem je <b>herleiden</b>.
			</p>		
			<p>
				`a=5b+3b` kun je herleiden tot `a=8b`
			</p>
			<p>
				De <b>termen</b> `5b` en `3b` hebben dezelfde <b>variabele</b>.<br>
				Zulke termen noem je <b>gelijksoortige termen</b>.<br>
				In een formule kun je zulke termen optellen of aftrekken. Daarmee maak je de formule korter.
			</p>
			<p>
				Formules als `q=3x+2y` en `w=5u-7` hebben geen gelijksoortige termen en kunnen dus niet korter worden geschreven.
			</p>
		</div>
		<div class="col-md-5">
			<p class="geeltje">
				Let op:<br>
				`3b=3*b`<br>
				`h=1*h`
				<br>				
				`5b` en `3b` zijn 
				<nobr>gelijksoortige termen</nobr>
				<br>
				`3x` en `2y` zijn <nobr>niet gelijksoortig</nobr>
			</p>
		</div>		
	</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 3 Termen</h3>
	<p>
		Jasper rekent met de formule<br>
		`g=4h+3h-h`
	</p>
	<ol>
		<li>
			Hoeveel termen staan in deze formule?
		</li>
		<li>
			Bereken `g` als `h=2` en als `h=10`.
		</li>
		<li>
			Welke variabelen staan in de formule?
		</li>
		<li>
			Voor de laatste `h` staat geen getal.<br>
			Welk getal zou je ervoor kunnen denken?
		</li>
		<li>
			Herschrijf de formule zo kort mogelijk.
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					3 termen: `4h`, `3h` en `h`.
				</li>
				<li>
					Je moet hier de waarde voor `h` tweemaal invullen.<br>
					`g=4*2+3*2-2=12`<br>
					`g=4*10+3*10-10=60`
				</li>
				<li>
					Twee namelijk: `g` en `h`
				</li>
				<li>
					Een `1`, want `h=1 * h`
				</li>
				<li>
					`g=4h+3h-h` wordt <br>
					`g=6h`
				</li>
			</ol>
		</div>
		</div>
	
</div>
	
<div class="tekstblok opdracht">
	<h3>Opdracht 4 De omtrek van een rechthoek</h3>
	<p>
	Hieronder zie je een tegelvloer van vierkante tegels. De zijden van de tegels zijn `p` cm lang.<br>
		    <img class="img-small" src="afbeeldingen/vaardigheden_leerjaar_2/rooster_omtrek.png">
	</p>	
	<ol>
		<li>
			Neem over en vul aan:<br>
			<em>lengte</em> `= 5 * ...`<br>
			<em>breedte</em> `= 2 * ...`
		</li>
		<li> 
			Maak de formule af voor de <b>omtrek</b> van de vloer: `P = 5 * ... + 2 * ...+ 5 * ... + 2 * ...` 
		</li>
		<li>
			Herleid de formule voor de omtrek zo ver mogelijk.
		</li>
		<li>
			Bereken de omtrek van de vloer als `p=5`.
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<em>lengte</em> `= 5 * p`<br>
					<em>breedte</em> `= 2 * p`
				</li>
				<li> 
					`P = 5 * p + 2 * p+ 5 * p + 2 * p` 
				</li>
				<li>
					`P = 14p`
				</li>
				<li>
					`P = 14 * 5 = 70` cm<br>
					Merk op dat de eenheid bij het antwoord hoort te staan, `p` is immers het aantal cm.
				</li>
			</ol>		
			
		</div>
		</div>
	
</div>
	
<div class="tekstblok theorie vaardigheden" id="theorieB">
	<h3>Theorie B Termen</h3>
	<div class="row">
			<div class="col-xs-7">
				<p>
					Gelijksoortige <b>termen</b> mag je samen nemen.
					<br>
					`8a - 3a = 5a`
				</p>
				<p>
					De volgorde van termen mag je veranderen.
					<br>
					`3a + 4b = 4b + 3a`
				</p>
				<p>
					Beide regels toepassen:
					 `12p -3r -5p + 7r =`<br>
					 `12p - 5p -3r + 7r = 7p + 4r`
				</p>
			</div>
			<div class="col-xs-5">
				<p class="geeltje">
					De <em>commutatieve</em> of  <em>wissel</em>wet:<br>
					`a + b = b + a`<br>
					`7 + 5 = 5 + 7 = 12`<br>
					Let op:<br>
					`a - b = -b + a` <br>
					`7 - 5 = -5 + 7 = 2`
				</p>
			</div>
	</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 5 Activiteiten @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Herleiden (havo/vwo)</em> en maak:
		<ol>
			<li><em>Activiteit 1. Lengte</em></li>
			<li><em>Activiteit 2. Gelijksoortige termen</em></li>
		</ol>
	</p>
</div>
	
<div class="tekstblok opdracht">
	<h3>Opdracht 6 Herleiden van formules</h3>
	<p>
		Schrijf de formules korter als het kan. Schrijf anders <em>kan niet korter</em>.
	</p>
		<table>
			<tr>
				<td width="300">
					<ol>
						<li>
							`a=3b+5b`
						</li>
						<li>
							`g=9h-3h`
						</li>
						<li>
							`k=5m-5n`
						</li>
						<li>
							`y=-12x + 10x`
						</li>
					</ol>
				</td>

				<td width="300">
					<ol start="5">
						<li>
							`r= 9t+8t-9t`
						</li>
						<li>
							`q=9p-9`
						</li>
						<li>
							`d=3e-f+4e-5f+19`
						</li>
						<li>
							`h=-(5x+3y-x-3y)`
						</li>
					</ol>
				</td>
			</tr>
		</table>
		
		<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Let bij het nakijken er op of je de opgaven steeds netjes overschrijft.
			</p>
			<table>
				<tr>
					<td width="300">
						<ol>
							<li>
								`a=3b+5b`<br>
								`a=8b`
							</li>
							<li>
								`g=9h-3h`<br>
								`g=6h`
							</li>
							<li>
								`k=5m-5n`<br>
								<em>kan niet korter</em>
							</li>
							<li>
								`y=-12x + 10x`<br>
								`y=-2x`
							</li>
						</ol>
					</td>
	
					<td width="300">
						<ol start="5">
							<li>
								`r= 9t+8t-9t`<br>
								`r=8t`
							</li>
							<li>
								`q=9p-9`<br>
								<em>kan niet korter</em>
							</li>
							<li>
								`d=3e-f+4e-5f+19`<br>
								`d=7e-6f+19`
							</li>
							<li>
								`h=-(5x+3y-x-3y)`<br>
								`h=-(4x)=-4x`
							</li>
						</ol>
					</td>
				</tr>
			</table>
		</div>
		</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 7 Een schat</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Henk vindt een schat met oude munten. Er zijn gouden en zilveren munten. Elke gouden munt is 7 euro waard, elke zilveren is 4 euro waard. Het aantal gouden munten noemen we `g` en het aantal zilveren munten `z`.
			</p>
			<ol>
				<li>
					Bereken de waarde van de schat als `g=5` en `z=8`.
				</li>
				<li>
					Bereken ook de waarde als `g=9` en `z=2`
				</li>
				<li>
					Maak de formule om de waarde van de schat te berekenen af<br>
					`waarde=7*... + 4*...`
				</li>
				<li>
					Stel er zijn 15 munten en het aantal zilveren munten is de helft van het aantal gouden. Bereken de waarde van de schat.
				</li>
			</ol>		
		</div>
		<div class="col-xs-5">
			<img class="img-small" src="../afbeeldingen/vaardigheden_leerjaar_2/muntschat_klein.jpg" alt="muntschat"/>
		</div>		
	</div>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					5 gouden munten, elk 7 euro waard	`5 * 7 = 35`.<br>
					8 zilveren munten, elk 4 euro waard `8 * 4 = 32`.<br>
					Optellen: `35 + 32 = 67`.<br>
					De schat is dan €67,- waard.
				</li>
				<li>
					9 gouden munten, elk 7 euro waard	`9 * 7 = 63`.<br>
					2 zilveren munten, elk 4 euro waard `2 * 4 = 8`.<br>
					Optellen `63 + 8 = 71`.<br>
					De schat is dan €71,- waard.
				</li>
				<li>
					`waarde = 7g + 4z`<br>
					Merk op: tussen een cijfer en een letter zetten we geen vermenigvuldigingsteken.
				</li>
				<li>
					Even puzzelen geeft de juiste twee getallen.<br>
					`10 + 5 = 15` en `1/2 * 10 = 5`<br>
					Aantal gouden munten is `10` en aantal zilveren munten is `5`.<br>
					`g = 10` en `z = 5`<br>
					De formule was: `waarde = 7g + 4z`<br>
					Invullen geeft: `waarde = 7 * 10 + 4 * 5 `<br>
					`waarde = 70 + 20 = 90`<br>
					De schat is dan €90,- waard.
				</li>
			</ol>
		</div>
	</div>
	
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 8 Zak met geld</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				In een andere zak met munten zitten acht grote onbekende munten en vier munten van 1 euro in.<br>
				De waarde van een onbekende munt noemen we `m`.
			</p>
			<ol>
				<li>
					Leg uit dat je de totale waarde van de zak geld in euro's kunt uitrekenen met de formule<br>
					`waarde = 8m + 4`
				</li>
				<li>
					Bereken met behulp van de formule de waarde van de zak als één onbekende munt 5 euro waarde is.
				</li>
				<li>
					Bereken met behulp van de formule de waarde als `m=3,50`.
				</li>
				<li>
					Bereken de waarde van `m` als de totale waarde 52 euro is.
				</li>
			</ol>
	
		</div>
		<div class="col-xs-5">
			<img src="../afbeeldingen/vaardigheden_leerjaar_2/zak_met_geld.png" alt="zak_met_geld"/>
		</div>		
	</div>

	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					De vier munten van 1 euro zijn gewoon 1 euro.<br>
					De acht munten van onbekende waarde geven we de waarde `m`.<br>
					Samen heb je dan `8 * m` en `4`. In een formule wordt dat `8m + 4`.
				</li>
				<li>
					Invullen `waarde = 8*5 + 4`<br>
					Uitrekenen `waarde = 40 + 4 =44`<br>
					Antwoord: de waarde van de zak is dan 44 euro.
				</li>
				<li>
					Invullen `waarde = 8*3,50 + 4`<br>
					Uitrekenen `waarde = 28 + 4 =32`<br>
					Antwoord: de waarde van de zak is dan 32 euro.
				</li>
				<li>
					Totale waarde van de zak is 52 euro.<br>
					Dus `	8m + 4 = 52`<br>
					Dan `8m = 48`<br>
					Dus de waarde van is `m = 48/8 = 6`<br>
					De waarde van een onbekende munt is dan 6 euro.
				</li>
			</ol>
			
		</div>
		</div>
	
</div>

<div class="tekstblok theorie vaardigheden" id="theorieC">
	<h3>Theorie C Vergelijkingen oplossen met bordjes</h3>
	<p>
		`8m + 4 = 44`	is een <b>vergelijking</b>.<br> De <b>oplossing</b> is die waarde voor `m` waarmee de vergelijking klopt.
	</p>
	<p>
		Als `8m + 4 = 44` dan `m=...` .
	</p>
	<p>
		De bordjesmethode werkt zo:
	</p>

	<table class="table">
		<tr>
			<td>Stap 1</td>
			<td>
				Neem de vergelijking over.
			</td>
			<td>
				`8m + 4 = 44`
			</td>
		</tr>	
		<tr>
			<td>Stap 2</td>
			<td>
				Leg een bordje op `8m`.
			</td>
			<td>
				<code class="bordje">?</code> `+`  `4 = 44`
			</td>
		</tr>			
 		<tr>		
 			<td>Stap 3</td>
			<td>
				Onder het bordje moet `40` liggen, want:
			</td>
			<td>
				`40 + 4 = 44`<br>
			</td>
		</tr>	
		<tr>		
 			<td>Stap 4</td>
			<td>
				Nu weet je dat `8m` gelijk is aan `40`.
			</td>
			<td>
				`8m = 40`
			</td>
		</tr>	
		<tr>	
			<td>Stap 5</td>
			<td>
				Nu leggen we een bordje op `m`.<br>
				Weet je nog: `8m` betekent `8*m`!
			</td>
			<td>
				`8*`<code class="bordje">?</code> `=40`
			</td>
		</tr>
		<tr>
			<td>Stap 6</td>
			<td>
				Onder het bordje moet `5` liggen, want:
			</td>
			<td>
				`8*5=40`<br>
				Dus `m=5`
			</td>
		</tr>
		<tr>
			<td>Stap 7</td>
			<td>
				Controleer je antwoord door dit in te vullen.
			</td>
			<td>
				`8*5+4=44` Klopt!
			</td>
		</tr>
	</table>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 9 Activiteit @DWO (alleen vwo)</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Herleiden (havo/vwo)</em> en maak:<br>
		<em>Activiteit 3. Bordjesmethode</em>.
	</p>
</div>
	
<div class="tekstblok opdracht">
	<h3>Opdracht 10 Bordjesmethode</h3>
	<p>
		Los de volgende vergelijkingen op met de bordjes methode.
	</p>
	<table>
			<tr>
				<td width="300">
					<ol>
						<li>`x+23=30`</li>
						<li>`x-8=47`</li>
						<li>`2x+12=27`</li>
						<li>`3x+38=53`</li>
					</ol>
				</td>
				<td width="300">
					<ol start="5">
						<li>`4x-7=33`</li>
						<li>`12+5x=137`</li>
						<li>`-8+7x=41`</li>
						<li>`112-8x=-48`</li>
					</ol>
				</td>
			</tr>
	</table>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<div class="row">
				<div class="col-xs-6">
					<ol>
						<li>
							`x+23=30`<br>
							<code class="bordje">?</code> `+` `23=30`<br>
							`x=7`
						</li>
						<li>
							`x-8=47`<br>
							<code class="bordje">?</code> `-` `8=47`<br>
							`x=55`
						</li>
						<li>
							`2x+12=27`<br>
							<code class="bordje">?</code> `+` `12=27`<br>
							`2x=15`<br>
							`2` `*` <code class="bordje">?</code> `= 15`<br>
							`x=7 1/2`
						</li>
						<li>
							`3x+38=53`<br>
							<code class="bordje">?</code> `+` `38=53`<br>
							`3x=15`<br>
							`3` `*` <code class="bordje">?</code> `= 15`<br>
							`x=5`
						</li>
					</ol>			
				</div>
				<div class="col-xs-6">
					<ol start="5">
						<li>
							`4x-7=33`<br>
							<code class="bordje">?</code> `-` `7=33`<br>
							`4x=49`<br>
							`4` `*` <code class="bordje">?</code> `= 40`<br>
							`x=10`
						</li>
						<li>
							`12+5x=137`<br>
							`12 +` <code class="bordje">?</code> `=137`<br>
							`5x=125`<br>
							`5` `*` <code class="bordje">?</code> `= 125`<br>
							`x=25`
						</li>
						<li>
							`-8+7x=41`<br>
							`-8 +` <code class="bordje">?</code> `=41`<br>
							`7x=49`<br>
							`7` `*` <code class="bordje">?</code> `= 49`<br>
							`x=7`
						</li>
						<li>
							`112-8x=-48`<br>
							`112 -` <code class="bordje">?</code> `=-48`<br>
							`8x=160`<br>
							`8` `*` <code class="bordje">?</code> `= 160`<br>
							`x=20`
						</li>
					</ol>				
				</div>
			</div>

		</div>		
	</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieD">
	<h3>Theorie D Eerst herleiden, dan oplossen</h3>
	<p>
		Als er gelijksoortige termen zijn, moet je eerst herleiden, voordat je een vergelijking kunt oplossen.
	</p>
	<p>
		<u>Voorbeeld</u>:<br>
		Los de vergelijking `4p + 8p - 3p = 27` op.
	</p>
	<table class="table">
		<tr>
			<td>Stap 1</td>
			<td>
				Neem de vergelijking over.
			</td>
			<td>
				`4p + 8p - 3p = 27`
			</td>
		</tr>	
		<tr>
			<td>Stap 2</td>
			<td>
				Herleid de vergelijking.
			</td>
			<td>
				`9p = 27`
			</td>
		</tr>			
 		<tr>		
 			<td>Stap 3</td>
			<td>
				Bordje op `p`.
			</td>
			<td>
				`9 *` <code class="bordje">?</code> `=27`
			</td>
		</tr>	
	
		<tr>		
 			<td>Stap 4</td>
			<td>
				Dus:
			</td>
			<td>
				`p = 27/9 = 3`
			</td>
		</tr>	
		
		<tr>
			<td>Stap 5</td>
			<td>
				Controle. Neem `p=3` en vul in.
			</td>
			<td>
				`9*3 =27` Klopt!
			</td>
		</tr>
	</table>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 11 Bordjesmethode met herleiden</h3>
	<p>
		Herleid en los op.
	</p>
		<table>
			<tr>
				<td width="300">
					<ol>
						<li>
							`3a + 4a = 35`
						</li>
						<li>
							`2b + 10b = 72`
						</li>
						<li>
							`c + 8c = 54`
						</li>
						<li>
							`9d - 3d = 48`
						</li>
						<li>
							`18e - 10e + e = 63`
						</li>
					</ol>
				</td>

				<td width="300">
					<ol start="6">	
						<li>
							`3f - 4f = 88`
						</li>
						<li>
							`4g + 10 = -30`
						</li>
						<li>
							`-h + 3h - 4h = 12`
						</li>
						<li>
							`40 - 12i = 4`
						</li>
						<li>
							`9 + 7j = -19`
						</li>
					</ol>
				</td>
			</tr>
		</table>
		
		<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
					In deze uitwerkingen zijn de bordjes weggelaten.<br>
					Let er bij het nakijken op of je onder elkaar hebt gewerkt.
			</p>
			<table>
			<tr>
				<td width="300">
					<ol>
						<li>
							`3a + 4a = 35`<br>
							`7a = 35`<br>
							`a = 35/7 = 5`
						</li>
						<li>
							`2b + 10b = 72`<br>
							`12b = 72`<br>
							`b = 72/12 = 6`
						</li>
						<li>
							`c + 8c = 54`<br>
							`9c = 54`<br>
							`c = 54/9 = 6`
						</li>
						<li>
							`9d - 3d = 48`<br>
							`6d = 48`<br>
							`d = 48/6 = 8`
						</li>
						<li>
							`18e - 10e + e = 63`<br>
							`9e = 63`<br>
							`e = 63/9 = 7`
						</li>
					</ol>
				</td>

				<td width="300">
					<ol start="6">	
						<li>
							`3f - 4f = 88`<br>
							`-f = 88`<br>
							`f = 88/-1 = -88` 
						</li>
						<li>
							`4g + 10 = -30`<br>
							`4g = -40`<br>
							`g = -40/4 = -10`
						</li>
						<li>
							`-h + 3h - 4h = 12`<br>
							`-2h = 12`<br>
							`h = 12/-2 = -6`
						</li>
						<li>
							`40 - 12i = 4`<br>
							`-12i = - 36`<br>
							`i = -36/-12 = 3`
						</li>
						<li>
							`9 + 7j = -19`<br>
							`7j = -28`<br>
							`j = -28 / 7 = -4`
						</li>
					</ol>
				</td>
			</tr>
		</table>
		</div>
		</div>			
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 12 Touwpuzzel 1</h3>
	<p>
		Je hebt vier stukken touw. Drie stukken zijn even lang en het vierde stuk is langer.<br>
		Alle stukken samen zijn 12 meter. Een kort en een lang stuk zijn samen 7 meter.
	</p>
	<p>
		Bereken hoe lang de verschillende stukken touw zijn.<br>
		(Tip: maak een tekening en zet de maten erbij)
	</p>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
					Noem de lengte van een kort stuk `k` en de lengte van een lang stuk `l`.<br>
					Een kort en een lang stuk zijn samen 7 meter, dus `k + l = 7`<br>
					Drie stukken zijn even lang en het vierde stuk is langer, dus `3k + l = 12`<br>
					<img class="img-small" src="../afbeeldingen/vaardigheden_leerjaar_2/uitwerking_12.png" alt="uitwerking_12" width="300" class="rightfloat" />
					`2k + k + l = 3k + l`<br>
					`2k + 7 = 12`<br>
					`2k = 5`<br>
					`k = 5/2 = 2 1/2`<br>
					`l = 7 - 2 1/2 = 4 1/2`
			</p>
		</div>
	</div>
		
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 13 Touwpuzzel 2</h3>
	<p>
		Een stuk touw van 18 meter wordt in 5 stukken geknipt. Twee van die stukken zijn even lang, de andere drie stukken ook, maar die zijn korter dan de eerste twee.<br>
		Een kort stuk en een lang stuk zijn samen 8 meter.
	</p>
	<p>
		Bereken hoe lang de stukken touw zijn.<br>
		(Tip: verwerk de gegevens weer in een tekening)
	</p>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Noem kort weer `k` en lang weer `l`.<br>
				`2l + 3k = 18` en `k + l = 8`<br>
				Tweemaal een kort en een lang stuk is 16 m.<br>
				`2l + 2k = 16` dan moet `k = 2`<br>
				`l = 8 - 2 = 6`<br>
				Een kort stuk is 2 meter en een lang stuk is 6 meter.		
			</p>	
		</div>
	</div>	
</div>

<div class="tekstblok theorie vaardigheden" id="theorieE">
	<h3>Theorie E Oppervlakte van een rechthoek</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				De oppervlakte van een kun je berekenen met de formule 		<em>A = lengte * breedte</em>
			</p>
			<p>
				De oppervlakte van de oranje rechthoek is<br>
			 <em>A = 10 * 8 = 80</em>
			</p>
			<p>
				De oppervlakte van de gele rechthoek is <br>
				<em>A</em> = 8<em>b</em>.
			</p>
			<p>
				Pas als je een waarde voor `b` weet, kun je de oppervlakte ook echt berekenen.
			</p>			
		</div>
		<div class="col-xs-5">
			<img class="img-medium" src="../afbeeldingen/vaardigheden_leerjaar_2/theorie_oppervlakte_rechthoeken.png" alt="twee rechthoeken" width="200" height=""  class="rightfloat"/>
		</div>		
	</div>
</div>	

<div class="tekstblok opdracht">
<h3>Opdracht 14 Oppervlakte rechthoek</h3>
	<div class="row">
		<div class="col-xs-8">
			<ol>
				<li>
					Bereken de oppervlakte van de gele rechthoek uit het theorieblok als `b=3`.
				</li>
				<li>
					Bereken ook de oppervlakte als `b=5,5`. Gebruik de formule uit het theorieblok.
				</li>
				<li>
					Gegeven is dat `A=72`. Bereken `b`.
				</li>
			</ol>		
		</div>
		<div class="col-xs-4">
			<p class="geeltje">
				<em>A</em> komt van het Engelse woord <em>area</em> voor oppervlakte.
			</p>
		</div>		
	</div>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`A=8b` en `b=3`<br>
					`A = 8 * 3 = 24`
				</li>
				<li>
					`A=8b` en `b=5,5`<br>
					`A = 8 * 5,5 = 44`
				</li>
				<li>
					`A=8b` en `A=72`<br>
					`8b = 72`<br>
					`b = 72/8 = 9`
				</li>
			</ol>
		</div>
		</div>
	
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 15 Oppervlakte rechthoeken</h3>
	<img src="../afbeeldingen/vaardigheden_leerjaar_2/opdracht_rechthoeken.png" alt="opdracht_rechthoeken" width="600" height="" />
	<p>
		Hierboven zie je drie rechthoeken en een vierkant.
	</p>
	<ol>
		<li>
			Geef van alle rechthoeken de formule voor de oppervlakte.
		</li>
		<li>
			Bereken de oppervlakte van het vierkant als `d=3`.
		</li>
		<li>
			Leg uit dat je voor de oppervlakte van het vierkant de formule `A=d^2` kunt gebruiken.
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`Z = 7a`<br>
					`G = 18b`<br>
					`R = 5c`<br>
					`O= d^2`
				</li>
				<li>
					`O=3^2=9`
				</li>
				<li>
					`d * d = d^2`
				</li>
			</ol>
		</div>
		</div>
		
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 16 Kwadraten herleiden</h3>
	<div class="row">
		<div class="col-xs-8">
			<p>
				Schrijf de volgende formules zo kort mogelijk.	<br>
				<u>Voorbeeld</u>:<br>
				`A = 4 * 5 * b * b` wordt: `A = 20b^2`
			</p>
			<table>
				<tr>
					<td width="300">
						<ol>
							<li>
								`A=t*t`
							</li>
							<li>
								`A=u*u`
							</li>
							<li>
								`A=5*c*c`
							</li>
	
						</ol>
					</td>
	
					<td width="300">
						<ol start="4">
							<li>
								`A=6*3*d*d`
							</li>
							<li>
								`A=3*2*q*q`
							</li>
							<li>
								`A=4*2*k*k`
							</li>
						</ol>
					</td>
				</tr>
			</table>

		</div>
		<div class="col-xs-4">
			<p class="geeltje">
				Kwadraten<br>
				`8 * 8 = 8^2`<br>
				dus ook<br>
				`g * g = g^2`<br>
			</p>
		</div>		
	</div>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<table>
				<tr>
					<td width="300">
						<ol>
							<li>
								`A=t*t` wordt `A=t^2`
							</li>
							<li>
								`A=u*u` wordt `A=u^2`
							</li>
							<li>
								`A=5*c*c` wordt `A=5c^2`
							</li>
	
						</ol>
					</td>
	
					<td width="320">
						<ol start="4">
							<li>
								`A=6*3*d*d` wordt `A=18d^2`
							</li>
							<li>
								`A=3*2*q*q` wordt `A=6q^2`
							</li>
							<li>
								`A=4*2*k*k` wordt `A=8k^2`
							</li>
						</ol>
					</td>
				</tr>
			</table>		
		</div>
		</div>
			
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 17 De tegelvloer</h3>
		<p>
			Hieronder zie je een tegelvloer van vierkante tegels.<br> De zijden van de tegels zijn `p` lang.<br>
		    <img class="img-medium" src="afbeeldingen/vaardigheden_leerjaar_2/rooster_oppervlakte.png"  width="300px">
		</p>
		<ol>
			<li>
				Leg uit waarom de oppervlakte van één tegel gelijk is aan `p^2`.
			</li>
			<li>
				Leg uit dat de oppervlakte van de gehele vloer gelijk is aan `10p^2`.
			</li>
			<li>
				De oppervlakte van de vloer kun je ook uitrekenen met behulp van de lengte en breedte. Geef de formule<br>
				`A = ... * ...`
		</li>
		<li>
			Leg uit waarom geldt dat: `5p*2p=10p^2`.
		</li>
		<li>
			Van een andere rechthoek is de lengte `12p` en de breedte `6p`. Geef de formule voor
		    de oppervlakte van de rechthoek. Herleid je formule zo ver mogelijk.
		  </li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`p * p = p^2`
				</li>
				<li>
					Er zijn 10 tegels van elk `p^2` groot.
				</li>
				<li>
					`A = 5p * 2p`
				</li>
				<li>
					`A = 12p * 6p`, dus<br>
					`A = 72p^2`
				  </li>	
			</ol>
	</div>		
</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 18 Activiteit @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Herleiden (havo/vwo)</em> en maak:<br>
		<em>Activiteit 4. Oppervlakte en inhoud</em>.
	</p>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieF">
	<h3>Theorie F Factoren</h3>
	<div class="row">
		<div class="col-md-8">
			<p>
				Bij <b>factoren</b> mag je de volgorde veranderen. <br>
				`2 * a * 3 * b =`<br>
				`2*3*a*b= 6ab`
			</p>
			<p>
				Bij het vermenigvuldigen van getallen en letters zet je de gewone getallen voor en de letters op alfabetische volgorde achter.
			</p>
		</div>
		<div class="col-md-4">
			<p class="geeltje">
				De commutatieve of wisselwet:<br>
				`b * a = a * b`<br>
				Voorbeeld:<br>
				`8 * 3 * 2 = 2 * 3 * 8`
			</p>
		</div>
	</div>	
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 19 Activiteit @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Herleiden (havo/vwo)</em> en maak:<br>
		<em>Activiteit 5. Producten van factoren</em>.
	</p>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 20 Formules herleiden</h3>
	<p>
		Schrijf de volgende formules korter.
	</p>
		<table>
			<tr>
				<td width="300">
					<ol>
						<li>
							`a = 3 * b * 4 * b`
						</li>
						<li>
							`b = 8 * 8h * h`
						</li>
						<li>
							`c = 6 * n^2`
						</li>
						<li>
							`d = 4b^2 * 5`
						</li>
						<li>
							`e= 1/4 t * 1/4 t * 8`
						</li>
					</ol>
				</td>

				<td width="300">
					<ol start="6">
						<li>
							`f=3a*8b`
						</li>
						<li>
							`g=-2*b*8*3*a`
						</li>
						<li>
							`h=5z*-3*y*-7z`
						</li>
						<li>
							`i=-2p*8r*5q`
						</li>
						<li>
							`j= 2 1/2 a * 4b * 2/5 a`
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
								`a = 12b^2`
							</li>
							<li>
								`b = 64h^2`
							</li>
							<li>
								`c = 6n^2`
							</li>
							<li>
								`d = 20b^2`
							</li>
							<li>
								`e= 1/2 t^2`
							</li>
						</ol>
					</td>
					<td width="300">
						<ol start="6">
							<li>
								`f=24ab`
							</li>
							<li>
								`g=-48ab`
							</li>
							<li>
								`h=105yz^2`
							</li>
							<li>
								`i=-80pqr`
							</li>
							<li>
								`j= 4a^2 b`
							</li>
						</ol>
					</td>
				</tr>
			</table>
		</div>
		</div>
			
</div>

<div class="tekstblok theorie vaardigheden" id="theorieG">
	<h3>Theorie G Termen met machten</h3>
	<div class="row">
		<div class="col-md-8">
			<p>
				Termen als `3x^2` en `5x^2` zijn <b>gelijksoortig</b>, omdat ze beide een gelijke (in dit geval tweede) macht van `x` zijn.
			</p>
			<p>
				<u>Voorbeeld</u>:<br>
				`K = 4p^3 - q^2 + 2p^3 - 2q^2`<br>
				kun je herleiden tot:<br>
				`K = 6p^3 - 3q^2`
			</p>
		</div>
		<div class="col-md-4">
			<p class="geeltje">
				Gelijksoortige machten kun je herleiden<br>
				`4a^3 + a^3=5a^3`
			</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 21 Activiteiten @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Herleiden (havo/vwo)</em> en maak:
	</p>
	<ol>
		<li><em>Activiteit 6. Veeltermen herleiden</em></li>
		<li><em>Activiteit 7. Formules herleiden</em></li>
		<li><em>Activiteit 8. Expressies herleiden</em></li>
	</ol>

</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 22 Vier figuren</h3>
	<p>
		Geef voor elk van de figuren hieronder een zo kort mogelijke formule voor de oppervlakte.
	</p>
	<img src="../afbeeldingen/vaardigheden_leerjaar_2/oppervlakte_vier_figuren.png" alt="vier figuren" width="600" height="" />
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Figuur A: `A=15p^2`<br>
				Figuur B: `A= 1/2 * 12p^2 = 6p^2`<br>
				Figuur C: `A= 1/2 p^2`<br>
				Figuur D: `A= 2p^2`<br>
			</p>
		</div>
		</div>
	
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 23 Fotolijst</h3>
	<div class="row">
		<div class="col-xs-8">
			<p>
				Een fotolijst heeft de vorm zoals hiernaast.<br>
				De lijst is overal zo breed als de helft van de foto.
			</p>
			<ol>
				<li>	
					Stel de foto is 30 bij 30 cm. Hoe breed is dan de lijst?
				</li>
				<li>
					Bereken de oppervlakte van de foto mét lijst.
				</li>
				<li>
					Bereken de oppervlakte van de lijst alleen.
				</li>
				<li>
					Hoe breed wordt de lijst als de foto een zijde heeft van `2p` cm?
				</li>
				<li>
					Geef een formule voor de oppervlakte `A` in cm<sup>2</sup> van de lijst alleen, als de foto zijden van `2p` cm heeft.
				</li>
			</ol>
		</div>
		<div class="col-xs-4">
			<img src="../afbeeldingen/vaardigheden_leerjaar_2/fotolijst.png" alt="fotolijst"/>
		</div>
	</div>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>	
						`1/2 * 30 = 15`<br>
						De lijst is dan 15 cm breed.
					</li>
					<li>
						Breedte en lengte beide 60 cm, want foto plus tweemaal lijst.<br>
						Oppervlakte `= 60 * 60 = 3600` cm<sup>2</sup>
					</li>
					<li>
						Oppervlakte foto is 30 * 30 = 900 cm<sup>2</sup>.<br>
						Oppervlakte lijst is dan 3600 - 900 = 2700 cm<sup>2</sup>.
					</li>
					<li>
						`1/2 * 2p = p`<br>
						De lijst wordt dan `p` breed.
					</li>
					<li>
						`A_(lijst) = 4p * 4p - 2p * 2p`<br>
						`A_(lijst) = 16p^2 - 4p^2`<br>
						`A_(lijst) = 12p^2`
					</li>
				</ol>
		</div>
		</div>
	
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 24 Rechthoek met gaten</h3>
	<p>
		In een rechthoekig vlak zijn vier vierkanten uitgesneden.<br>
		Bereken de oppervlakte van het blauwe gedeelte.
		<img src="../afbeeldingen/vaardigheden_leerjaar_2/rechthoekig_vlak.png" alt="rechthoekig_vlak" width="500" height="" />
	</p>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				`A_(blauw) = 6b * 10a - a*a - b*b - 2a*2a - 2b*2b`<br>
				`A_(blauw) = 60ab - a^2 - b^2 - 4a^2 - 4b^2`<br>
				`A_(blauw) = 60ab - 5a^2 - 5b^2`
			</p>
		</div>
		</div>
	
</div>

<div class="tekstblok theorie vaardigheden" id="theorieH">
	<h3>Theorie H Herleiden met rechthoeken</h3>
	<div class="row">
		<div class="col-xs-8">
			<p>
				Een rechthoek bestaat uit een blauw en een rood deel. De oppervlakte kun je op twee manieren uitrekenen.
			</p>
			<br>
			<p>
				Manier 1 <em>De stukjesformule</em>:<br>
				Bereken de oppervlakte per deel en tel de delen op.
			</p>
			<p>
				Opp. rechthoek = opp. blauw + opp. rood<br>
				`A= 3 * 5 + 3 * 3 = 24`
			</p>
			<br>
			<p>
				Manier 2 <em>De rechthoekformule</em>:<br>
				Vermenigvuldig de afmetingen met elkaar.
			</p>
			<p>
				Opp. rechthoek = <em>zijde<sub>1</sub></em> &times; <em>zijde<sub>2</sub></em><br>
				`A=3 * (5+3) = 3 * 8 = 24`
			</p>		
		</div>
		<div class="col-xs-4">
			<img class="img-medium" src="../afbeeldingen/vaardigheden_leerjaar_2/theorie_rechthoek_model.png" alt="theorie_rechthoek_model" />
		</div>		
	</div>	
	
</div>

<div class="tekstblok opdracht" id="25">
<h3>Opdracht 25 Rechthoek</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>Bekijk de blauw-rode rechthoek, neem over en vul in.</p>
				<ol>
					<li>
						Oppervlakte blauw = 2 &sdot; ... = ...<br>
						Oppervlakte rood = 2 &sdot; ... = ...
					</li>
					<li>
						Stukjesformule = ... + ... = ...
					</li>
					<li>
						Lengte = 8 + ...<br>
						Breedte = ...
					</li>
					<li>
						Rechthoekformule = ... &sdot; (8 + ...) = ...
					</li>
					<li>
						Geef ook de stukjes- en de rechthoekformule bij de groen-gele rechthoek.
					</li>
				</ol>
		
		</div>
		<div class="col-xs-5">
			<img class="img-medium" src="../afbeeldingen/vaardigheden_leerjaar_2/opdracht_rechthoek.png" alt="opdracht_rechthoek" />
		</div>		
	</div>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Oppervlakte blauw = 2 &sdot; 8 = 16<br>
					Oppervlakte rood = 2 &sdot; 1 = 2
				</li>
				<li>
					Stukjesformule = 16 + 2 = 18
				</li>
				<li>
					Lengte = 8 + 1<br>
					Breedte = 2
				</li>
				<li>
					Rechthoekformule = 2 (8 + 1) = 2 &sdot; 9 = 18
				</li>
				<li>
					Stukjesformule = 8 * 3 + 8 * 7 = 24 + 56 = 80<br>
					Rechthoekformule = 8 (3 + 7) = 8 &sdot; 10 = 80
				</li>
			</ol>
		</div>
		</div>
	
</div>	

<div class="tekstblok theorie vaardigheden" id="theorieI">
	<h3>Theorie I Haakjes wegwerken</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Met behulp de oppervlakte van de rechthoek gaan we aantonen dat:
			</p>
			<p>
				`3(5+g) = 15 +3g`
			</p>
			<p>
				Dit noem je het herleiden van haakjes, oftewel haakjes wegwerken.
			</p>
		</div>
		<div class="col-xs-5">
			<p class="geeltje">
				Haakjes wegwerken is het herschrijven van de rechthoekformule in de stukjesformule.
			</p>
		</div>	
	</div>
	<p>
		De oppervlakte van de groen-blauwe rechthoek rechthoek kun je op twee manieren uitrekenen.
	</p>
	<div class="row">
		<div class="col-xs-7">	
			
			<p>
				Manier 1 <em>De stukjesformule</em>:<br>
				`A= 3 * 5 + 3 * g = 15 +3g`
			</p>
			<p>
				Manier 2 <em>De rechthoekformule</em>:<br>
				`A=3 * (5+g) = 3(5+g)`
			</p>

		</div>
		<div class="col-xs-5">
			<img src="../afbeeldingen/vaardigheden_leerjaar_2/theorie_groen_blauwe_rechthoek.png" alt="theorie_groen_blauwe_rechthoek" width="250" height="" class="rightfloat" />
		</div>		
	</div>
	<p>
		Omdat beide formules dezelfde oppervlakte berekenen, kun je concluderen dat:<br>
		`3(5+g) = 15 +3g`
	</p>
</div>

<div class="tekstblok opdracht" id="26">
	<h3>Opdracht 26 Twee formules 1</h3>
	<div class="row">
		<div class="col-xs-8">
			<ol>
				<li>
					Geef van de rechthoek hiernaast de stukjesformule.
				</li>
				<li>
					Schrijf ook rechthoekformule op.
				</li>
				<li>
					Neem over en vul in:<br>
					... (... + ...) = ... + ...
				</li>
			</ol>
		</div>
		<div class="col-xs-4">
			<img src="../afbeeldingen/vaardigheden_leerjaar_2/rechthoek_met_8tplus40.png" />
		</div>		
	</div>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Stukjesformule `A = 8t + 40`
				</li>
				<li>
					Rechthoekformule `A= 8(t + 5)`
				</li>
				<li>
					8(t + 5) = 8t + 40
				</li>
			</ol>
		</div>
		</div>
	
</div>

<div class="tekstblok opdracht" id="27">
	<h3>Opdracht 27 Twee formules 2</h3>
	<div class="row">
		<div class="col-xs-8">
			<ol>
				<li>
					Geef van de rechthoek hiernaast de stukjesformule.
				</li>
				<li>
					Schrijf ook rechthoekformule op.
				</li>
				<li>
					Neem over en vul in:<br>
					... (... + ...) = ... + ...
				</li>
			</ol>	
		</div>
		<div class="col-xs-4">
			<img src="../afbeeldingen/vaardigheden_leerjaar_2/rechthoek_met_36plus12x.png" alt="rechthoek_met_36plus12x"  />
		</div>		
	</div>
	</h3>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						Stukjesformule `A = 36 + 12x`
					</li>
					<li>
						Rechthoekformule `A = 12(3 + x)`
					</li>
					<li>
						`12(3 + x) = 36 + 12x`
					</li>
				</ol>
		</div>
		</div>
			
</div>

<div class="tekstblok opdracht" id="28">
	<h3>Opdracht 28 Zelf tekenen</h3>
	<p>
		Gegeven is de volgende expressie: 3<em>a</em>(4 + <em>a</em>).
	</p>
	<ol>
		<li>
			Teken de rechthoek die hoort bij bovenstaande expressie.
		</li>
		<li>
			Maak de stukjesformule bij bovenstaande expressie. Je kunt gebruik maken van je rechthoek.
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<br>
					<img class="img-small" src="../afbeeldingen/vaardigheden_leerjaar_2/rechthoek_met_12aplus3aa.png" alt="rechthoek_met_12aplus3aa"  />
				</li>
				<li>
					`A = 12a + 3a^2`<br>
					`A = 3a^2 + 12a` (netter, want hogere machten eerst)
					
				</li>
			</ol>
		</div>
		</div>
	
</div>

<div class="tekstblok opdracht" id="29">
	<h3>Opdracht 29 Activiteiten @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Herleiden (havo/vwo)</em> en maak:
		</p>
	<ol>
			<li><em>Activiteit 9. Rechthoeken, oppervlakte en formules</em>.</li>
			<li><em>Activiteit 10. Formules met en zonder haakjes</em>.</li>
			<li><em>Activiteit 11. Expressies herleiden met rechthoeken</em>.</li>
		</ol>
</div>

<div class="tekstblok opdracht" id="30">
	<h3>Opdracht 30 Expressies herleiden</h3>
	<p>
		Schrijf de volgende expressies zonder haakjes. Neem ze eerst over.
	</p>
	<table>
		<tr>
			<td width="300">
				<ol>
					<li>
						`3x(2x+5) =`
					</li>
					<li>
						`1/2 (6r+2) =`
					</li>
					<li>
						`3p(4 + 3p) =`
					</li>
					<li>
						`a(a - 3) =`
					</li>
				</ol>
			</td>
			<td width="300">
				<ol start="5">
					<li>
						`3y(-y-3) =`
					</li>
					<li>
						`4h( 1/2 h + 2) =`
					</li>
					<li>
						`-p(-4 - 3p) =`
					</li>
					<li>
						`a(-2a - 8) =`
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
								`3x(2x+5) = 6x^2 + 15x`
							</li>
							<li>
								`1/2 (6r+2) = 3r + 1`
							</li>
							<li>
								`3p(4 + 3p) = 9p^2 + 12p`
							</li>
							<li>
								`a(a - 3) = a^2 - 3a`
							</li>
						</ol>
					</td>
					<td width="300">
						<ol start="5">
							<li>
								`3y(-y-3) = -3y^2 - 9y`
							</li>
							<li>
								`4h( 1/2 h + 2) = 2h^2 + 8h`
							</li>
							<li>
								`-p(-4 - 3p) = 3p^2 + 4p`
							</li>
							<li>
								`a(-2a - 8) = -2a^2 - 8a`
							</li>
						</ol>
					</td>
				</tr>
			</table>
			<p>
					Het is gebruikelijk om de termen met de hoogste macht vooraan te zetten.
			</p>
		</div>
		</div>
				
</div>

<div class="tekstblok opdracht" id="31">
	<h3>Opdracht 31 Gekleurde gebieden (vwo)</h3>
	<p>
		Geef de oppervlakte van de gekleurde gebieden. Herleid je antwoorden.
	</p>
	<img src="../afbeeldingen/vaardigheden_leerjaar_2/Drie_figuren.png" alt="Drie_figuren" width="600" height="" />
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Opp. gekleurd gebied = opp. rechthoek - opp. rechthoek<br>
				`A = 4a(6a-2) - 5*3a`<br>
				`A = 24a^2 - 8a - 15a`<br>
				`A = 24a^2 - 23a`
			</p>
			<p>
				Opp. gekleurd gebied = opp. rechthoek - opp. driehoek<br>
				`A = 5b(3b-2) - 2b(3b-4)`<br>
				`A = 15b^2 - 10b - 6b^2 + 8b`<br>
				`A = 9b^2 - 2b`
			</p>
			<p>
				Opp. gekleurd gebied = opp. trapezium - opp. vierkant<br>
				`A = 1/2 * 6c (6c + 4c+4) - 2c*2c`<br>
				`A = 3c (10c+4) - 4c^2`<br>
				`A = 30c^2 + 12c - 4c^2`<br>
				`A = 26c^2 + 12c`
			</p>
		</div>
		</div>
	
</div>

<div class="tekstblok theorie vaardigheden" id="theorieJ">
	<h3>Theorie J Herleiden met tabellen</h3>
	<div class="row">
		<div class="col-xs-8">
			<p>
				Om een expressie als `3b(5 + 2b)` te herleiden, kun je gebruik maken van een rechthoek.
			</p>
			<p>
				Met die rechthoek kun je makkelijk de haakjes wegwerken en<br>
				`3b(5 + 2b)` herleiden tot `15b+6b^2`.
			</p>
			<p>
				In plaats van een rechthoek kun je ook herleiden met behulp van een <b>vermenigvuldigingstabel</b>.
			</p>
		</div>
		<div class="col-xs-3">
			<img src="../afbeeldingen/vaardigheden_leerjaar_2/theorie_herleiden_tabellen.png" alt="theorie_herleiden_tabellen" width="250" class="rightfloat"/>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="32">
	<h3>Opdracht 32 Herleiden met tabellen</h3>
	<p>
		Neem de tabellen over. Vul ze in en schrijf zonder haakjes.
	</p>
	<ol>
		<li>
			<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
					<TR>
						<TD>
							<em><Font color="red">x</FONT></em>
						</TD>
						<TD>
							4<em>p</em>
						</TD>
						<TD>
							8
						</TD>
					</TR>
					<TR>
						<TD>
							2<em>p</em>
						</TD>
						<TD>
							...
						</TD>
						<TD>
							...
						</TD>
					</TR>
				</TABLE>
		</li>
		<li>
			<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
						<TR>
							<TD>
								<em><Font color="red">x</FONT></em>
							</TD>
							<TD>
								-<em>p</em>
							</TD>
							<TD>
								12
							</TD>
						</TR>
						<TR>
							<TD>
								-5<em>p</em>
							</TD>
							<TD>
								...
							</TD>
							<TD>
								...
							</TD>
						</TR>
					</TABLE>
		</li>
	</ol>
	<div class="hider">
	<div class="showhide">&rarr;</div>
	<div class="antwoord">
		<ol>
		<li>
			<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
					<TR>
						<TD>
							<em><Font color="red">x</FONT></em>
						</TD>
						<TD>
							4<em>p</em>
						</TD>
						<TD>
							8
						</TD>
					</TR>
					<TR>
						<TD>
							2<em>p</em>
						</TD>
						<TD>
							`8p^2`
						</TD>
						<TD>
							`16p`
						</TD>
					</TR>
				</TABLE>
		</li>
		<li>
			<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
						<TR>
							<TD>
								<em><Font color="red">x</FONT></em>
							</TD>
							<TD>
								-<em>p</em>
							</TD>
							<TD>
								12
							</TD>
						</TR>
						<TR>
							<TD>
								-5<em>p</em>
							</TD>
							<TD>
								`5p^2`
							</TD>
							<TD>
								`-60p`
							</TD>
						</TR>
					</TABLE>
		</li>
	</ol>
	</div>
	</div>	
	
</div>

<div class="tekstblok opdracht" id="33">
	<h3>Opdracht 33 Activiteit @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Herleiden (havo/vwo)</em> en maak:
		<br>
		<em>Activiteit 12. Herleiden met tabellen</em>.
		</p>
</div>

<div class="tekstblok opdracht" id="34">
	<h3>Opdracht 34 Herleiden</h3>
	<div class="row">
		<div class="col-md-6">
			<p>
				Neem over en herleid. Je mag eerst een vermenigvuldigingstabel gebruiken.
			</p>
		</div>
		<div class="col-md-6">
			<p class="geeltje">
				Let op:<br>
				`-(a+b)=-a-b`
			</p>
		</div>
	</div>
	
		<table>
		<tr>
			<td width="300">
				<ol>
					<li>
						`4(3+b) + 2b=`
					</li>
					<li>
						`3(a-b)+2(b-a)=`
					</li>
					<li>
						`-(x-2y)+4(x+y)=`
					</li>
					<li>
						`4(p+2)-3p=`
					</li>
					<li>
						`-2(1-q)+3q=`
					</li>				
				</ol>
			</td>
	
			<td width="300">
				<ol start="6">
				<li>
						`5(a-3)-4a=`
					</li>
					<li>
						`-3(5+2y)+y=	`				
					</li>
					<li>
						`2(2p-q)+3(p+q)=`
					</li>
					<li>
						`-(a-2b)+2(-a-b)=`
					</li>
					<li>
							`-2(2x-y)-4(x+y)=`
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
							`4(3+b) + 2b=`<br>
							`12 + 4b + 2b = 6b + 12`
						</li>
						<li>
							`3(a-b)+2(b-a)=`<br>
							`3a - 3b + 2b - 2a = a - b`
						</li>
						<li>
							`-(x-2y)+4(x+y)=`<br>
							`-x + 2y + 4x + 4y = 3x + 6y`
						</li>
						<li>
							`4(p+2)-3p=`<br>
							`4p + 8 -3p = p +8`
						</li>
						<li>
							`-2(1-q)+3q=`<br>
							`-2 + 2q + 3q = 5q - 2`
						</li>				
					</ol>
				</td>
		
				<td width="300">
					<ol start="6">
					<li>
							`5(a-3)-4a=`<br>
							`5a - 15 -4a = a -15`
						</li>
						<li>
							`-3(5+2y)+y=	`				<br>
							`-15 -6y + y = -5y -15`
						</li>
						<li>
							`2(2p-q)+3(p+q)=`<br>
							`4p - 2q +3p + 3q = 7p + q`
						</li>
						<li>
							`-(a-2b)+2(-a-b)=`<br>
							`-a + 2b - 2a - 2b = -3a`
						</li>
						<li>
								`-2(2x-y)-4(x+y)=`<br>
								`-4x + 2y -4x - 4y = -8x - 2y`
						</li>
						
					</ol>
				</td>
			</tr>
		</table>
	</div>
	</div>					
</div>

<div class="tekstblok theorie vaardigheden" id="theorieK">
	<h3>Theorie K Machten van variabelen</h3>
	<div class="row">
		<div class="col-xs-8">
			<p>
				Het product van gelijke <b>variabelen</b> is een <b>macht</b>:<br>
				`g * g * g * g = g^4`
			</p>
		</div>
		<div class="col-xs-4">
			<p class="geeltje">
				`g * g * ...  * g = g^n`
			</p>
		</div>
	</div>	
	<div class="row">
		<div class="col-xs-8">
			<p>
				<b>Gelijke machten</b> kun je samen nemen:<br>
				`g^3 + g^3 = 2g^3`
			</p>
		</div>
		<div class="col-xs-4">
			<p class="geeltje">
				`g^a + g^a = 2g^a`
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-8">
			<p>
				<b>Ongelijke machten</b> kun je <b>niet</b> samen nemen:<br>
				`g^3 + g^4 = `<em>kan niet</em>
			</p>		
		</div>
		<div class="col-xs-4">
			<p class="geeltje">
				`g^a + g^b =` <em>kan niet</em>
			</p>
		</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="35">
	<h3>Opdracht 35 Activiteiten @DWO</h3>
	<p>
			Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Herleiden (havo/vwo)</em> en maak:
	</p>
	<ol>
		<li><em>Activiteit 13. Producten herleiden 1</em></li>
		<li><em>Activiteit 14. Producten herleiden 2</em></li>
		<li><em>Activiteit 15. Herleiden met machten en tabellen</em></li>
	</ol>
</div>

<div class="tekstblok opdracht" id="36">
	<h3>Opdracht 36 Herleiden als het kan</h3>
	<p>
		Schrijf de formules zo kort mogelijk. Schrijf anders <em>kan niet kleiner</em>.
	</p>
	<table>
		<tr>
			<td width="300">
				<ol>
					<li>
						`h=3k^2-k^2`
					</li>
					<li>
						`m=p^3+5p^3-2p^3`
					</li>
					<li>
						`d=3f^7-7f+f^7`
					</li>
					<li>
						`z=2y^2-y^2+8`
					</li>
				</ol>
			</td>

			<td width="300">
				<ol start="5">
					<li>
						`q=4w^5-4w*5`
					</li>
					<li>
						`c=9i^6-6i^9+96`
					</li>
					<li>
						`a=-13r^5-5+13r+5`
					</li>
					<li>
						`j=6x^2+3y^2-3x^2+y^2`
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
						`h=2k^2`
					</li>
					<li>
						`m=4p^3`
					</li>
					<li>
						`d=4f^7-7f`
					</li>
					<li>
						`z=y^2 + 8`
					</li>
				</ol>
			</td>

			<td width="300">
				<ol start="5">
					<li>
						`q = 4w^5 - 20w`
					</li>
					<li>
						<em>kan niet kleiner</em>
					</li>
					<li>
						`a = -13r^5 + 13r`
					</li>
					<li>
						`j = 3x^2 + 4y^2`
					</li>
					
				</ol>
			</td>
		</tr>
	</table>
		</div>
		</div>
	
</div>

<div class="tekstblok opdracht" id="37">
	<h3>Opdracht 37 Reeks</h3>
	<p>
		Neem de reeks over en vul aan.
	</p>
	<p>
		`a^1 = a`<br>
		`a^2 = a * a`<br>
		`a^3 = a * a * ...`<br>
		`a^4 = ...`<br>
		`a^5 = ...`
	</p>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				`a^1 = a`<br>
				`a^2 = a * a`<br>
				`a^3 = a * a * a`<br>
				`a^4 = a * a * a * a`<br>
				`a^5 = a * a * a * a * a`
			</p>
		</div>
		</div>
	
</div>

<div class="tekstblok opdracht" id="38">
	<h3>Opdracht 38 Armando</h3>
	<p>
		Armando wil de formule `h=a^2*a^3` korter schrijven.<br>
		Dit is wat hij heeft bedacht:<br>
		`a^2= a*a` en `a^3=a*a*a`, dus dan `h= a*a*a*a*a`
	</p>
	<ol>
		<li>
			Neem over en vul in: `h=a^2*a^3=a^...`
		</li>
		<li>
			Schrijf de formule `k=p^4*p^2` korter.
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`h=a^2*a^3=a^5`
				</li>
				<li>
					`k=p^6`
				</li>
			</ol>
		</div>
		</div>
</div>

<div class="tekstblok theorie vaardigheden">
	<h3>Theorie L Machten vermenigvuldigen</h3>
	<aside class="tekstballon_theorie">
	<p>
		product van machten<br>
		`g^a * g^b = g^((a+b)`
	</p>
	</aside>	
	<p>
		Als je gelijke machten vermenigvuldigt, tel je de exponenten bij elkaar op:<br>
		`g^3 * g^4 = g^((3+4)) = g^7`
	</p>
	<p>
		Dit kun je als volgt bedenken:<br>
		`g^3 = g*g*g` en  `g^4 = g*g*g*g` dus <br>
		`g^3 * g^4 = g*g*g * g*g*g*g = g^7`
	</p>		
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 39 Machten herleiden</h3>
	<p>
		Schrijf de volgende formules zo kort mogelijk.
	</p>
		<table>
			<tr>
				<td width="300">
					<ol>
						<li>
							`A=g*g*g*g`
						</li>
						<li>
							`B=2k*k*k`
						</li>
						<li>
							`C=-j*j*16`		
						</li>
						<li>
							`D=p^2*p^3`
						</li>
					</ol>
				</td>

				<td width="300">
					<ol start="5">
						<li>
							`E=8g^3*g^5*3g^2`
						</li>
						<li>
							`F=-3m^5*-4m^2`
						</li>
						<li>
							`G=5*t^2*t^5*2`
						</li>
						<li>
							`H=-x^2*-2x^3*-3x^4*-4x^5`
						</li>
					</ol>
				</td>
			</tr>
		</table>
		
	<div class="hider">
	<div class="showhide">&rarr;</div>
	<div class="antwoord">
		<h3>Uitwerkingen</h3>
		<table>
			<tr>
				<td width="300">
					<ol>
						<li>
							`A=g^4`
						</li>
						<li>
							`B=2k^3`
						</li>
						<li>
							`C=-16j^2`		
						</li>
						<li>
							`D=p^5`
						</li>
					</ol>
				</td>

				<td width="300">
					<ol start="5">
						<li>
							`E=24g^10`
						</li>
						<li>
							`F=12m^7`
						</li>
						<li>
							`G=10t^7`
						</li>
						<li>
							`H=24x^14`
						</li>
					</ol>
				</td>
			</tr>
		</table>
	</div>
	</div>			
</div>

<!-- 
<div class="tekstblok theorie vaardigheden">
	<h3>Theorie Z Stappenplan rekenen met machten</h3>
	<p>
		Hoe moet je machten herleiden?
	</p>
	<p>
		<u>Voorbeeld</u>:<br>
		Herleid de volgende expressie:<br>
		`6x^3*5y^2*-2 -20x*2y^2*-x^2=`
	</p>
		
	<table>
		<tr>
			<td width="80">
				Stap 1:
			</td>
			<td width="300">
				`6*5*-2*x^3*y^2 -20*2*-1*x^2*x*y^2=`
			</td>
			<td width="220" colspan="2">
				Verander per term de volgorde<br>
				van de factoren.
			</td>
		</tr>
		<tr>
			<td></td><td></td><td></td>
		</tr>
		<tr>
			<td>
				Stap 2:
			</td>
			<td>
				`-60x^3y^2 +40x^3y^2=`
			</td>
			<td colspan="2">
				Reken uit en herleid<br> 
				gelijke letterfactoren<br>
				tot een macht<br>
				
			</td>
		</tr>
		<tr>
			<td></td><td></td><td></td>
		</tr>
	</table>

</div>-->

<div class="tekstblok opdracht">
	<h3>Opdracht 40 Machten mix herleiden</h3>
	<p>
		Neem over en herleid, schrijf anders <em>kan niet</em>.
	</p>
	<!-- Bron: Moderne wiskunde Hoofdstuk 12 boek 1hv deel 2, blz. 167 -->
		<table>
			<tr>
				<td width="300">
					<ol>
						<li>
							`g=a*3a+a^3`
						</li>
						<li>
							`f=2j*3j^2+j^3`
						</li>
						<li>
							`m=h^2*5h^5-5`	
						</li>
						<li>
							`q=9z^3-6z^2-5`
						</li>
					</ol>
				</td>

				<td width="300">
					<ol start="5">
						<li>
							`w=6t^3-6t*t-6`
						</li>
						<li>
							`k=b^3-2b*b^2+2b^2`
						</li>
						<li>
							`h=2d*d^2+4d^2`
						</li>
						<li>
							`v=4r^6-2r^3*2r^3`
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
								`g=a*3a+a^3`<br>
								`g = a^3 + 3a^2`
							</li>
							<li>
								`f=2j*3j^2+j^3`<br>
								`f = 7j^3`
							</li>
							<li>
								`m=h^2*5h^5-5`	<br>
								`m = 5h^7 - 5`
							</li>
							<li>
								`q=9z^3-6z^2-5`<br>
								<em>kan niet kleiner</em>
							</li>
						</ol>
					</td>
	
					<td width="300">
						<ol start="5">
							<li>
								`w=6t^3-6t*t-6`<br>
								`w = 6t^3 - 6t^2 - 6`
							</li>
							<li>
								`k=b^3-2b*b^2+2b^2`<br>
								`k = -b^3 + 2b^2`
							</li>
							<li>
								`h=2d*d^2+4d^2`<br>
								`h = 2d^3 + 4d^2`
							</li>
							<li>
								`v=4r^6-2r^3*2r^3`<br>
								`v = 0`
							</li>
						</ol>
					</td>
				</tr>
			</table>
		</div>
		</div>
			
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 41 Machten mix herleiden mét haakjes</h3>
	<p>
		Neem over en herleid, schrijf anders <em>kan niet</em>.
	</p>
	
		<table>
			<tr>
				<td width="300">
					<ol>
						<li>
							`-3a^3(4a^2-7)=`
						</li>
						<li>
							`4b^4(2b+8a)=`
						</li>
						<li>
							`2c^2(c^5-8c)=`	
						</li>
						<li>
							`3x^2(5x+3y^3)=`
						</li>
					</ol>
				</td>

				<td width="300">
					<ol start="5">
						<li>
							`3x^2y^2(5x+3y)=`
						</li>
						<li>
							`b^3(-2b+b^2)+2b^4=`
						</li>
						<li>
							`2d(d^3+4d^2) - d^2(d-7d^2)=`
						</li>
						<li>
							`4r(r^6-2r^3*2r^3)-r^7=`
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
							`-3a^3(4a^2-7)=`<br>
							`-12a^5 + 21a^3`
						</li>
						<li>
							`4b^4(2b+8a)=`<br>
							`8b^5 + 32ab^4`
						</li>
						<li>
							`2c^2(c^5-8c)=`	<br>
							`2c^7 - 16c^3`
						</li>
						<li>
							`3x^2(5x+3y^3)=`<br>
							`15x^3 + 9x^2y^3`
						</li>
					</ol>
				</td>

				<td width="300">
					<ol start="5">
						<li>
							`3x^2y^2(5x+3y)=`<br>
							`15x^3y^2 + 9x^2y^3`
						</li>
						<li>
							`b^3(-2b+b^2)+2b^4=`<br>
							`-2b^4 + b^5 + 2b^4 = b^5`
						</li>
						<li>
							`2d(d^3+4d^2) - d^2(d-7d^2)=`<br>
							`2d^4 + 8d^3 - d^3 + 7d^4 = 9d^4 + 7d^3`
						</li>
						<li>
							`4r(r^6-2r^3*2r^3)-r^7=`<br>
							`4r^7 - 16r^7 - r^7= -13r^7`
						</li>
					</ol>
				</td>
			</tr>
		</table>
		</div>
		</div>
			
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 42 Activiteiten @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module <em>Herleiden Zelftoetsen (havo/vwo)</em> en maak:
	</p>
	<ol>
		<li><em>Activiteit 1. Zelftoets Letterrekenen</em></li>
		<li><em>Activiteit 2. Zelftoets Termen en factoren</em></li>
		<li><em>Activiteit 3. Zelftoets Veeltermen herleiden</em></li>
		<li><em>Activiteit 4. Zelftoets Herleiden met rechthoeken</em></li>
		<li><em>Activiteit 5. Zelftoets Herleiden met tabellen</em></li>
		<li><em>Activiteit 6. Zelftoets Herleiden met machten</em></li>
	</ol>
	<p class="geeltje">
		Let op: het zijn zelftoetsen, klik pas op nakijken na de laatste opdracht binnen een activiteit.
	</p>
</div>

<div class="tekstblok theorie vaardigheden">
	<h3>Tot slot</h3>
	<p>
		En waar kun je dit nu allemaal voor gebruiken?
	</p>
	<p>
		Het is vaak handig om formules te kunnen vergelijken en om ze eenvoudiger te kunnen maken.
	</p>
	<p>
		En zeg nu zelf, het is toch ook simpelweg fantastisch wat je allemaal kunt doen met getallen en variabelen.
	</p>
</div>

<div class="tekstblok opdracht" id="proeftoets">
	<h3>Proeftoets</h3>
	<p>
		Maak de <a href="https://docs.google.com/document/d/1UImHq91EQZnvSLLG-Y1Ta-KOMqpv2mw4lHINsLtiTls/edit" target="_blank">proeftoets</a> om je voor te bereiden op de echte.
	</p>
</div>

</div>

<div><!-- verwijzingen naar doelen, voorkennis, werkwijze en benodigdheden -->

		<div id="open_doelen" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>Doelen</h3>
					<ul>
						<li>
							Leerlingen herhalen het letterrekenen van leerjaar 1;
						</li>
						<li>
							Leerlingen kunnen de oppervlakte van een rechthoek uitdrukken als stukjes- en als rechthoekformule;
						</li>
						<li>
							Leerlingen kunnen haakjes wegwerken;
						</li>
						<li>
							Leerlingen kunnen expressies met machten herleiden.
						</li>
					</ul>

			</div>
		</div>

		<div id="open_voorkennis" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>Voorkennis</h3>
				<ol>
					<li>taak <a href="http://wiskunde.vathorstcollege.nl/index2.php?p=vaar_letterrekenen" target="_blank">Letterrekenen</a>;</li>
					<li>taak <a href="http://wiskunde.vathorstcollege.nl/index2.php?p=analyse_lineaire_vergelijkingen_1hv" target="_blank">Lineaire vergelijkingen 1hv</a>.</li>
				</ol>
			</div>
		</div>

		<div id="open_werkwijze" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>Werkwijze</h3>
				 <p>
					 Je maakt de opdrachten uit de taak in je schrift. Zorg voor een nette kantlijn en zet opgaven uit een opdracht steeds onder elkaar. Kijk nog even op de <a href="afbeeldingen/algemeen/voorbeeldbladzijde_wiskundeschrift.pdf" target="_blank">voorbeeldbladzijde</a> als je niet meer weet hoe je schrift eruit moet zien.
					 <br>
					 Schrijf sommen steeds eerst over voordat je ze stap voor stap uitrekent. Kijk je eigen werk kritisch na. Tip: kijk elkaars werk na en geef elkaar feedback over het gemaakte werk.
				</p>
				<p>
					 De DWO staat voor Digitale Wiskunde Omgeving. Maak er de gevraagde activiteiten. Let op: zelftoetsen moet je maar <b>éénmaal</b> nakijken, bij andere activiteiten kun je meestal eindeloos oefenen met steeds nieuwe opgaven.
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
						<li>Schrift, pen, potlood en gum;</li>
						<li>Een werkend DWO account;
						<li>Een computer met toegang tot de DWO.</li>
					</ol>
				</p>
			</div>
		</div>

	</div><!-- /verwijzingen naar doelen, voorkennis, werkwijze en benodigdheden -->
