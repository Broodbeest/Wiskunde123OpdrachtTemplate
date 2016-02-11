<?php 
	//defineer titel
	$taaknaam ="Lineaire vergelijkingen";
?>

<?php
	//Definieer sidebar
	$doorverwijzingen = array(
      '#inleiding' => 'Inleiding',
	  '#theorieA' => 'Volgorde regels',
      '#theorieB' => 'Herleiden',
      '#theorieC' => 'Termen',
      '#theorieD' => 'Termen en Factoren',
      '#theorieE' => 'Tweetermen en Veeltermen',
      '#theorieF' => 'Oplossen met bordjes',
      '#proeftoets' => 'Proeftoets');                                                      
?>


<title>Leerjaar 1 | <?php echo $taaknaam; ?></title>

<div class="taakinhoud">	
			
<div class="tekstblok theorie analyse" id="inleiding">
	<h3>Inleiding</h3>	
	<p>
		Deze taak gaat over het oplossen van <b>lineaire vergelijkingen</b>. Om die vergelijkingen te kunnen oplossen leer je ook <b>rekenen met letters</b>. En natuurlijk wordt het maken van formules en grafieken bij lineaire verbanden herhaald en uitgediept.
	</p>
	<p>
		Veel opdrachten maak je op de DWO. Zorg dat de DWO werkt op jouw computer. Werk anders op die van een ander.
	</p>
	<p>
		Eerst wordt je voorkennis van machten en rekenvolgorde opgefrist. Kijk eventueel in de taak <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=v_1thv_machten_en_volgorde">Machten en volgorde</a> voor meer oefening en theorie.
	</p>
	<p>
		Ga ervan uit dat je ongeveer 10 uur nodig hebt voor deze taak: ongeveer 6 uur voor alle DWO opdrachten en ongeveer 4 uur voor de theorie en de opdrachten uit de taak zelf.
	</p>
</div>

<div class="tekstblok opdracht" id="1">
	<h3>Opdracht 1 @DWO</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module 'Letterrekenen deel 1' en maak de volgende activiteit:
			</p>
			<ol style="list-style-type: decimal !important;">
				<li>Machten en rekenvolgorde</li>
			</ol>
		</div>
		<div class="col-xs-5">
			<p class="geeltje">
				`(-8)^2 = 64`<br>
				`-8^2= -64`
			</p>
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie A Volgorde regels</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Bij rekenen gelden de volgende voorrangsregels:
			</p>
			<ol class="numbers" class="breuken">
				<li>
					binnen de haakjes;
				</li>
				<li>
					machtsverheffen;
				</li>
				<li>
					vermenigvuldigen en delen;
				</li>
				<li>
					optellen en aftrekken.
				</li>
			</ol>
		</div>
		<div class="col-xs-5">
			<p class="geeltje">
				`7-(12-8)^2 : 2=`<br>
				`7-4^2 :2 =`<br>
				`7-16 :2 =`<br>
				`7 - 8 = -1`
			</p>
		</div>
	</div>
	<p>
		Vermenigvuldigen en delen zijn even belangrijk, werk van links naar rechts. Hetzelfde geldt voor optellen en aftrekken.
	</p>
</div>

<div class="tekstblok opdracht" id="2">
	<h3>Opdracht 2 Volgorde met machten</h3>
	<p>
		Neem over en bereken met tussenstappen onder elkaar.
	</p>
		<table>
			<tr>
				<td width="300">
					<ol>
						<li>(7<sup>3</sup> + 7) : (-5)<sup>2</sup></li>
						<li>-5<sup>2</sup> : -6<sup>2</sup></li>
					</ol>
				</td>
				<td width="300">
					<ol start="3">
						<li>4 + 3<sup>2</sup> : (2 + 1)</li>
						<li>-3 &sdot; (-2)<sup>5</sup> : -4<sup>2</sup> + 6</li>
					</ol>
				</td>
			</tr>
		</table>
		
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol class="breuken">
					
					<li>
						(<u>7<sup>3</sup></u> + 7) : <u>(-5)<sup>2</sup></u><br>
						<u>(343 + 7)</u> : 25<br>
						350 : 25 = 14
					</li>
					<li>
						-<u>5<sup>2</sup></u> : -<u>6<sup>2</sup></u><br>
						-25 : -36 = 
						<math displaystyle="true">
						<mfrac>
							<mrow><mn>5</mn></mrow>
							<mrow><mn>6</mn></mrow>
						</mfrac>
						</math>
					</li>
					<li>4 + <u>3<sup>2</sup></u> : (2 + 1)<br>
						4 + 9 : <u>(2 + 1)</u><br>
						4 + <u>9 : 3</u><br>
						4 + 3 = 7</li>
					<li>-3 &sdot; <u>(-2)<sup>5</sup></u> : -<u>4<sup>2</sup></u> + 6<br>
						<u>-3 x -32</u> : -16 + 6<br>
						<u>96 : -16</u> + 6<br>
							-6 + 6 = 0</li>
				</ol>
			</div>
		</div>
</div>		

<p class="geeltje">
	Gebruik <code class="code">&sdot;</code> in plaats van <code class="code">&times;</code>. Zo voorkom je verwarring met de <code class="code">x</code>.<br>
	Vaak kun je het maal-teken helemaal weglaten, bijvoorbeeld:<br>
	`3 &times; a = 3 * a = 3a`<br>
	Zie ook <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=a_1thv_lineaire_formules">Lineaire formules</a> en <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=a_1thv_pijlenkettingen">Pijlenkettingen</a>.
</p>

<div class="tekstblok opdracht" id="3">
	<h3>Opdracht 3 Rechthoek met stokjes</h3>
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

<div class="tekstblok opdracht" id="4">
	<h3>Opdracht 4 Touwtjes</h3>
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

<div class="tekstblok theorie analyse" id="theorieB">
	<h3>Theorie B Herleiden</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				<b>Herleiden</b> is het korter schrijven van een formule of expressie. De <b>termen</b> `5b` en `3b` hebben dezelfde <b>variabele</b>. Zulke termen noem je <b>gelijksoortige termen</b>. Gelijksoortige termen kun je optellen of aftrekken. 
			</p>
			<p>
				De <b>expressie</b>:
				<br>
				<code class="code"><em>p</em> + <em>p</em> + <em>p</em></code>
				&nbsp;
				wordt
				&nbsp;
				<code class="code">3<em>p</em></code>
			</p>
			<p>
				De <b>formule</b>:
				<br>
				<code class="code"><em>a</em> = 5<em>b</em> + 3<em>b</em></code>
				&nbsp;
				wordt
				&nbsp;
				<code class="code"><em>a</em> = 8<em>b</em></code>
			</p>
			<p>
				Formules als `q=3x+2y` en `w=5u-7` hebben geen gelijksoortige termen en kun je niet herleiden.
			</p>
		</div>
		<div class="col-xs-5">
			<p class="geeltje">
				`3p = 3 &sdot;p`<br>
				`5b = 5 &sdot; b`
			</p>
			<p class="geeltje">
				`5b` en `3b` zijn 
				<nobr>gelijksoortige termen</nobr>
				<br>
				`3x` en `2y` zijn <nobr>niet gelijksoortig</nobr>
			</p>
			<p class="geeltje">
				Een <b>formule</b> bestaat uit twee delen: <b>invoer</b> en <b>uitvoer</b>.<br>
				De uitvoer staat meestal links van het <code class="code">=</code>-teken en de invoer rechts.
			</p>	
		</div>
	</div>
	
</div>

<div class="tekstblok opdracht" id="5">
	<h3>Opdracht 5 Termen</h3>
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
	
<div class="tekstblok opdracht" id="6">
	<h3>Opdracht 6 De omtrek van een rechthoek</h3>
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
	
<div class="tekstblok theorie analyse" id="theorieC">
	<h3>Theorie C Termen</h3>
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

<div class="tekstblok opdracht" id="7">
	<h3>Opdracht 7 @DWO</h3>
	<div class="row">
		<div class="col-xs-6">
			<p>
				Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module 'Letterrekenen deel 1' en maak de volgende activiteiten:
			</p>
			<ol style="list-style-type: decimal !important;" start="2">
				<li>Lengte</li>
				<li>Oppervlakte en inhoud</li>
				<li>Formules herleiden</li>
				<li>Formules herleiden, oefenen</li>
				<li>Expressies herleiden</li>
				<li>Letterrekenen oefenen</li>
			</ol>
		</div>
		<div class="col-xs-6">
			<p class="geeltje">
				De formule voor de oppervlakte van een rechthoek is:<br>
				Oppervlakte rechthoek = <nobr>lengte ⋅ breedte</nobr>
			</p>
			<p class="geeltje">
				De formule voor de inhoud van een kubus met zijde a is:<br>
				Inhoud kubus = a ⋅ a ⋅ a of korter:<br>
				Inhoud kubus = a<sup>3</sup>
			</p>
			
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="8">
	<h3>Opdracht 8 Herleiden van formules</h3>
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

<div class="tekstblok opdracht" id="9">
		<h3>Opdracht 9 Herleiden</h3>
		<p>Neem over en herleid.</p>
		<table>
			<tr>
				<td width="300">
					<ol>
						<li>`p + p + p + p + p =`</li>
						<li>`p*p*p*p=`</li>
						<li>`2x*3x=`</li>
					</ol>
				</td>
				<td width="300">
					<ol start="4">
						<li>`3x*4x + 12x^2=`</li>
						<li>`5x^2 * 3x + x * 4x * 3x =`</li>
						<li>`23x^3 - 6x^2 * 8x + 2x * 4x = `</li>
					</ol>
				</td>
			</tr>
		</table>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<table>
				<tr>
					<td>
						<ol>
							<li>`p + p + p + p + p= 5p`</li>
							<li>`p*p*p*p= p^4`</li>
							<li>`2x*3x= 6x^2`</li>
							<li>`3x*4x + 12x^2= 12x^2 + 12x^2 = 24x^2`</li>
							<li>`5x^2 * 3x + x * 4x * 3x =15x^3 + 12x^3 = 27x^3`</li>
							<li>`23x^3 - 6x^2 * 8x + 2x * 4x =23x^3 - 48x^3 + 8x^2 = -25x^3 + 8x^2`</li>
						</ol>
					</td>
				</tr>
			</table>
		</div>		

</div>
	
</div>

<div class="tekstblok opdracht" id="10">
	<h3>Opdracht 10 @DWO</h3>
	<div class="row">
		<div class="col-xs-6">
			<p>
				Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module 'Letterrekenen deel 2' en maak de volgende activiteiten:
			</p>
			<ol style="list-style-type: decimal !important;">
				<li>Gelijksoortige termen, inleiding</li>
				<li>Gelijksoortige termen, oefenen</li>
				<li>Produkten van factoren, inleiding</li>
				<li>Produkten van factoren, oefenen</li>
			</ol>
		</div>
		<div class="col-xs-6">
			<p class="geeltje">
				Sorteer factoren volgens het alfabet:<br>
				`y * x * z = xyz`<br>
				Hogere machten vooraan sorteren:<br>
				`2x^2 + 3x^5 = 3x^5 + 2x^2`
			</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="11">
	<h3>Opdracht 11 Een schat</h3>
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

<div class="tekstblok opdracht" id="12">
	<h3>Opdracht 12 Zak met geld</h3>
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
					Bereken de waarde van `m` als de totale waarde 52 euro is. Je mag natuurlijk een pijlenketting gebruiken.
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

<p class="geeltje">
	Voor terugrekenen met pijlen ga je naar <a href="a_1thv_pijlenkettingen.php">Pijlenkettingen</a>.
</p>

<div class="tekstblok opdracht" id="13">
	<h3>Opdracht 13 Touwpuzzel (uitdaging)</h3>
	<div class="row">
		<div class="col-xs-8">
			<p>
				Los de volgende puzzels op. Het is handig om een schets te maken.
			</p>
			<ol>
				<li>
					Je hebt vier stukken touw: drie daarvan zijn even lang; het vierde stuk is langer; alle stukken samen zijn 12 meter; en een kort en een lang stuk zijn samen 7 meter. Hoe lang zijn de verschillende stukken touw?<br>
					Tip: maak een tekening en zet de maten erbij.
				</li>
				<li>
					Een ander touw, van 18 meter, wordt in 5 stukken geknipt: twee van die stukken zijn even lang; de andere drie stukken ook, maar ze zijn korter dan de eerste twee; en een kort stuk en een lang stuk zijn samen 8 meter. Probeer erachter te komen hoe lang de stukken touw zijn.<br>
					Tip: verwerk de gegevens weer in een tekening.
				</li>
			</ol>
		</div>
		<div class="col-xs-4">
			<img src="../afbeeldingen/vaardigheden_leerjaar_1/tauw.png" alt="tauw" />
		</div>
	</div>
	
	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				
			</div>		
		</div>
	
</div>

<div class="tekstblok theorie analyse" id="theorieD">
	<h3>Theorie D Termen en Factoren</h3>
	<div class="row">
		<div class="col-xs-6">
			<p>				
		Termen mag je ordenen, mits je <em>minnen</em> mee neemt.<br>
		2<em><FONT color="red">p</FONT></em> - 3<em><FONT color="green">r</FONT></em> - 5<em><FONT color="red">p</FONT></em> + 7<em><FONT color="green">r</FONT></em> = 2<em><FONT color="red">p</FONT></em> - 5<em><FONT color="red">p</FONT></em> - 3<em><FONT color="green">r</FONT></em> + 7<em><FONT color="green">r</FONT></em>
	</p>
		</div>
		<div class="col-xs-6">
			<p class="geeltje">
				`8 - 6 = + 8 + - 6 = -6 + 8 = 2`<br>
			</p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-6">
			<p>
				Gelijksoortige termen kun je optellen of aftrekken:<br>
				2<em><FONT color="red">p</FONT></em> - 5<em><FONT color="red">p</FONT></em> - 3<em><FONT color="green">r</FONT></em> + 7<em><FONT color="green">r</FONT></em> = -3<em><FONT color="red">p</FONT></em> + 4<em><FONT color="green">r</FONT></em>
			</p>
		</div>
		<div class="col-xs-6">
			<p class="geeltje">
				2<em><FONT color="red">p</FONT></em> en -5<em><FONT color="red">p</FONT></em> zijn <b>gelijksoortige</b> termen. 
			</p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-6">
			<p>
				`2*8` is een produkt van twee <b>factoren.</b><br>
				`2*a*b` is een produkt van drie <b>factoren.</b>
			</p>
		</div>
		<div class="col-xs-6">
			<p class="geeltje">		
				<b>product</b> = vermenigvuldiging
			</p>
		</div>
	</div>	
	
		<div class="row">
		<div class="col-xs-6">		
			<p>
				De volgorde van factoren mag veranderen:<br>
				`2 ⋅ a ⋅ 3 ⋅ b = 2 ⋅ 3 ⋅ a ⋅ b = 6ab`
			</p>
		</div>
		<div class="col-xs-6">
			<p class="geeltje">		
				`8 * -2 = -2 * 8 = -16`<br>
				`a*b = b*a`
			</p>
		</div>
	</div>	

</div>

<div class="tekstblok opdracht" id="14">
	<h3>Opdracht 14 @DWO</h3>
	<div class="row">
		<div class="col-xs-6">
			<p>
				Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module 'Letterrekenen deel 2' en maak de volgende activiteiten:
			</p>
			<ol style="list-style-type: decimal !important;" start="5">
				<li>Termen en factoren oefenen</li>
				<li>Tweetermen</li>
				<li>Veeltermen</li>
				<li>Veeltermen herleiden oefenen</li>
			</ol>
		</div>
		<div class="col-xs-6">
			<p class="geeltje">
				Sorteer factoren volgens het alfabet:<br>
				`y * x * z = xyz`<br>
				Hogere machten vooraan sorteren:<br>
				`2x^2 + 3x^5 = 3x^5 + 2x^2`
			</p>
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieE">
	<h3>Theorie E Tweetermen en Veeltermen</h3>
	<p>
		`-3 ⋅a ⋅ 2 + b ⋅ 3 ⋅ 8` is een <b>tweeterm</b>.<br>
		De eerste term is `-3 ⋅a ⋅ 2`  en de tweede term is `b ⋅ 3 ⋅ 8`.<br>
		Je kunt deze tweeterm herleiden tot `-6a + 24b`
	</p>
	<p>
		`-3 ⋅a ⋅ 2 + b ⋅ 3 ⋅ 8 + 4&sdot;a` is een <b>drieterm</b>.<br>
		Je kunt deze herleiden tot de <b>tweeterm</b> `10a + 24b`.
	</p>
	<p>
		`-5 &sdot; p &sdot; 2 + 3 &sdot; q &sdot; 3 &sdot; 8 - 2  &sdot; r &sdot; 7` is ook een voorbeeld van een <b>drieterm.</b><br>
		Je kunt deze drieterm herleiden tot `-10p + 72q - 14r`.
	</p>
	<p>
		Tweetermen, drietermen, viertermen, vijftermen enz. worden ook wel <b>veeltermen</b> genoemd.<br>
		Je moet veeltermen zo veel mogelijk herleiden. Dus zo kort mogelijk schrijven.
	</p>
</div>

<div class="tekstblok opdracht" id="15">
	<h3>Opdracht 15 Herleiden</h3>
	<p>Schrijf de expressies hieronder zo kort mogelijk.</p>
	<div class="row">
		<div class="col-xs-6">	
			<ol>
				<li>3<em>a</em> + 2<em>p</em> - 2<em>a</em> + 10<em>p</em> =</li>
				<li>24<em>r</em> - 8<em>k</em> + 16<em>r</em> - 4<em>k</em> + 12 =</li>
				<li>-<em>x</em> + 8<em>y</em> - 4 + 2<em>x</em> =</li>
			</ol>
		</div>
		<div class="col-xs-6">
			<ol start="4">
					<li>4<em>p</em> + 3<em>s</em> - 7<em>t</em> + 7<em>s</em> - 10 =</li>
						<li>
					<math display='inline'>
					<mn>-</mn>
					<mfrac>
						<mrow>
							<mi>5</mi>
						</mrow>
						<mrow>
							<mi>8</mi>
						</mrow>
					</mfrac>
					<mi>p</mi><mo>+</mo><mn>3</mn><mi>q</mi><mo>-</mo><mn>4</mn><mi>q</mi><mo>+</mo><mn>2</mn><mi>p</mi><mo>=</mo>
					</math>
				</li>		
						<li>
					1<math display='inline'><mfrac><mrow><mi>3</mi></mrow>
														<mrow><mi>7</mi></mrow>
												</mfrac><em>a</em> + 5<em>b</em> - 4<math display='inline'><mfrac><mrow><mi>2</mi></mrow>
														<mrow><mi>3</mi></mrow><em>a</em> - 7<em>b</em> =</li>
					</ol>
		</div>
	</div>
				
	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol class="breuken">
					<li><em>a</em> + 12<em>p</em></li>
					<li>40<em>r</em> - 12<em>k</em> + 12</li>
					<li><em>x</em> + 8<em>y</em> - 4</li>
					<li>4<em>p</em> + 10<em>s</em> - 7<em>t</em> - 10</li>
					<li>	
						<math displaystyle='true'>
							<mn>1</mn>
							<mfrac>
								<mrow><mn>3</mn></mrow>
								<mrow><mn>8</mn></mrow>
							</mfrac>
							<mi>p</mi><mo>-</mo><mi>q</mi>
						</math>
					</li>
					<li>
						<math displaystyle='true'>
							<mn>1</mn>
							<mfrac>
								<mrow><mn>9</mn></mrow>
								<mrow><mn>21</mn></mrow>
							</mfrac>
							<mi>a</mi><mo>-</mo>
							<mn>4</mn>
							<mfrac>
								<mrow><mi>14</mi></mrow>
								<mrow><mi>21</mi></mrow>
							</mfrac>
							<mi>a</mi>
							<mo>-</mo><mn>2</mn><mi>b</mi><mo>=</mo>
						</math>
						<br>
						<math displaystyle='true'>
							<mfrac>
								<mrow><mn>30</mn></mrow>
								<mrow><mn>21</mn></mrow>
							</mfrac>
							<mi>a</mi>
							<mo>-</mo>
							<mfrac>
								<mrow><mn>98</mn></mrow>
								<mrow><mn>21</mn></mrow>
							</mfrac>
							<mi>a</mi>
							<mo>-</mo><mn>2</mn><mi>b</mi><mo>=</mo>
						</math>
						<br>
						<math displaystyle='true'>
							<mfrac>
								<mrow><mn>-68</mn></mrow>
								<mrow><mn>21</mn></mrow>
							</mfrac>
							<mi>a</mi>
							<mo>-</mo><mn>2</mn><mi>b</mi>
							<mo>=</mo>
							<mn>-3</mn>
							<mfrac>
								<mrow><mn>5</mn></mrow>
								<mrow><mn>21</mn></mrow>
							</mfrac>
							<mi>a</mi>
							<mo>-</mo><mn>2</mn><mi>b</mi>
						</math>
					</li>
				</ol>
			</div>		
		</div>
</div>

<div class="tekstblok opdracht" id="16">
	<h3>Opdracht 16 Herleiden</h3>
		<p>Herleid zo ver zo mogelijk.</p>
		<div class="row">
			<div class="col-xs-6">	
				<ol>
					<li>
						`3a * 8b =`
					</li>
					<li>
						`5a + 3b - 8a =`
					</li>
					<li>
						`-2b * 8 * 3a =`
					</li>
					<li>
						`-5x * 3y * -7z =`
					</li>
					<li>
						`7p ⋅ 3t - 2p ⋅ 11t =`
					</li>
				</ol>
			</div>
			<div class="col-xs-6">
				<ol start="6">
					<li>
						`4r * 12r * 2 = `
					</li>
					<li>
						`-3x ⋅ 5y + 6y ⋅ 3x =`
					</li>
					<li>
						`-2p * * 16r * 5q =`
					</li>
					<li>
						`3 ⋅ 5x + 8 - 3y ⋅ 12 + 3 ⋅ -4x =`
					</li>
					<li>
						`2 1/5 a * 5b * 2/11 a =`
					</li>
				</ol>
			</div>
		</div>					

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<div class="row">
				<div class="col-xs-6">	
					<ol class="breuken">
							<li>
								`3a * 8b = 24ab`
							</li>
							<li>
							`5a + 3b - 8a = -3a + 3b`
							</li>
							<li>
								`-2b * 8 * 3a = -48ab`
							</li>
							<li>
								`-5x * 3y * -7z =105xyz`
							</li>
							<li>
								`7p ⋅ 3t - 2p ⋅ 11t = 21pt - 22pt = -pt`
							</li>
						</ol>
				</div>
				<div class="col-xs-6">	
					<ol start="6" class="breuken">
						<li>
							`4r * 12r * 2 = 96r^2`
						</li>
						<li>
							`-3x ⋅ 5y + 6y ⋅ 3x = -15xy + 18xy = 3xy`
						</li>
						<li>
							`-2p * * 16r * 5q =-160pqr`
						</li>
						<li>
							`3 ⋅ 5x + 8 - 3y ⋅ 12 + 3 ⋅ -4x = 3x - 36y + 8`
						</li>
						<li>
							`11/5 a * 5b * 2/11 a = 2a^2b`
						</li>
					</ol>
				</div>
			</div>			
	</div>
	</div>
			
</div>

<div class="tekstblok theorie analyse" id="theorieF">
	<h3>Theorie F Lineaire formules</h3>
	<div class="row">
		<div class="col-xs-8">
			<p>
				De grafiek van `y = 3x + 5` is een rechte lijn. De formule noemen we een <b>lineaire formule</b>. Er is een <b>lineair verband</b> tussen de <b>invoer <em>x</em></b> en de <b>uitvoer <em>y</em></b>
			</p>
			<p>
				Voor het tekenen van een rechte lijn heb je aan twee punten genoeg. Om de grafiek bij `y= 3x +5` te tekenen, maak je een tabel met twee punten. Kies makkelijke getallen voor `x`.
			</p>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>x</em></td>
							<td colspan="2">0</td>
							<td colspan="2">5</td>	
						</tr>
						<tr>
							<td><em>y</em></td>
							<td colspan="2"><span id="startgetal">5</span></td>
							<td colspan="2">20</td>
						</tr>			
					</tbody>
				</table>
			</div>
			<p>
				De grafiek gaat door <em>A</em>(0, 5) en <em>B</em>(5, 20). Teken deze punten in een assenstelsel, trek een lijn en klaar is je grafiek.
			</p>
		</div>
		<div class="col-xs-4">
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_bij_yis3xplus5.png" alt="grafiek_bij_yis3xplus5" width="" height="" />
		</div>
		
	</div>
	<p>
		De <b>algemene vorm</b> van een lineaire formule is:
	</p>
	<p class="text-center">
		<nobr><em>y</em> = <span id="hellingsgetal">a</span><em>x</em> + <span id="startgetal">b</span></nobr>
	</p>
	<p>
		Waarbij <span id="hellingsgetal">a</span> het <span id="hellingsgetal">hellingsgetal</span> is en <span id="startgetal">b</span> het <span id="startgetal">startgetal</span>.
	</p>
	<ol id="numbers">
		<li>
			Als je 1 naar rechts gaat, ga je <span id="hellingsgetal">a</span> omhoog.
		</li>
		<li>
			De grafiek snijdt de <em>y</em>-as in het punt (0, <span id="startgetal">b</span>).
		</li>
	</ol>
</div>

<div class="tekstblok opdracht" id="17">
	<h3>Opdracht 17 @DWO</h3>
	<div class="row">
		<div class="col-xs-8">
			<p>
				Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module 'Lineaire vergelijkingen' en maak de volgende activiteiten:
			</p>
			<ol style="list-style-type: decimal !important;">
				<li>Lineaire formules</li>
			</ol>
		</div>
		<div class="col-xs-4">
			
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="18">
	<h3>Opdracht 18 Slechts twee punten!</h3>
		<ol>
			<li>
				Teken de grafiek bij de formule 
				`N=3 1/2 t+5`.
				<br>
				Gebruik daarbij de volgende tabel:<br>
				<div class="table-responsive verhouding">
					<table class="verhouding" >
						<tbody>
							<tr class="borderbottom">
								<td><em>t</em></td>
								<td colspan="2">0</td>
								<td colspan="2">4</td>	
							</tr>
							<tr>
								<td><em>N</em></td>
								<td colspan="2"><span id="startgetal">...</span></td>
								<td colspan="2">...</td>
							</tr>			
						</tbody>
					</table>
				</div>
			</li>	
			<li>
				Teken de grafiek bij de formule 
				`y = -2t +3`.
				<br>
			Gebruik daarbij de volgende tabel:
			<br>
			<div class="table-responsive verhouding">
					<table class="verhouding" >
						<tbody>
							<tr class="borderbottom">
								<td><em>x</em></td>
								<td colspan="2">0</td>
								<td colspan="2">5</td>	
							</tr>
							<tr>
								<td><em>y</em></td>
								<td colspan="2"><span id="startgetal">...</span></td>
								<td colspan="2">...</td>
							</tr>			
						</tbody>
					</table>
				</div>
			</li>
			<li>
				Waarom is het handig om bij de invoer steeds in ieder geval '0' te kiezen?
			</li>
		</ol>
	</div>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord"><class="breuken"> <math displaystyle="inline">
				<ol>
					<li><TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
									<TR><TD ><em>t</em></TD><TD>0</TD><TD>4</TD></TR>
									<TR><TD><em>N</em></TD><TD>5</TD><TD>19</TD></TR></TABLE><br><img src="afbeeldingen/analyse_5/opdracht_2a.png" width="600px"></li>
					<li><TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
									<TR><TD ><em>t</em></TD><TD>0</TD><TD>5</TD></TR>
									<TR><TD><em>y</em></TD><TD>3</TD><TD>-7</TD></TR></TABLE><br><img src="afbeeldingen/analyse_5/opdracht_2b.png" width="600px"></li>
				</ol>
					
			</div>
	</div>	

<p>hier is iets met de div</p>

<div class="tekstblok opdracht" id="17">
	<h3>Opdracht 17 @DWO</h3>
	<div class="row">
		<div class="col-xs-8">
			<p>
				Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module 'Lineaire vergelijkingen' en maak de volgende activiteiten:
			</p>
			<ol style="list-style-type: decimal !important;">
				<li>Lineaire formules</li>
			</ol>
		</div>
		<div class="col-xs-4">
			
		</div>
	</div>
</div>

	<div class="tekstblok opdracht">
			<h3>Opdracht 3@</h3>
			<p>
			Ga naar de <a href="http://ws.fisme.science.uu.nl/dwo/frameset.html" target="_blank">DWO</a>, 
			log in en open de module 'A5 Lineaire Vergelijkingen'. Maak activiteit 2: De richtingscoefficient.</p>
	</div>		

<!--theorie -->
	<div class="tekstblok theorie analyse">
		<h3>Lineaire formules</h3>
		<p>De grafiek van <math><mi>y = ax + b</mi></math> is een rechte lijn.</p>
		<p>De <math><mi>a</mi></math> in de formule is het <FONT color="red">hellingsgetal</FONT>. Een andere naam is de <FONT color="red">richtingscoefficient</FONT> afgekort met <em>rc</em>.</p>
		<p>Het hellingsgetal geeft aan hoeveel de lijn omhooggaat als je 1 stapje naar rechts gaat. Als het hellingsgetal negatief is, dan gaat de grafiek omlaag.</p>
			
			Stappenplan berekenen richtingscoefficient:<br>
			<tr>
				<td>Stap 1:</td>
				<td>Lees twee punten af uit de grafiek.</td><br>
			</tr>
			<tr>
				<td>stap 2:</td>
				<td>De richtingscoefficient van lijn <em>l</em> is <em>rc<sub>l</sub></em> = <math><mfrac><mrow><mi>verticaal</mi></mrow><mrow><mi>horizontaal</mi></mrow></mfrac></math></p></td>
			</tr>
	</div>


<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 4</h3>
			<p>Bereken de richtingscoefficient bij de volgende grafieken:</p>
			<ol>
				<li><br><img src="afbeeldingen/analyse_5/opdracht_4a.png" width="500px"></li>
				<li><br><img src="afbeeldingen/analyse_5/opdracht_4b.png" width="500px"></li>
			</ol>
		</div>

<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<h3>Uitwerkingen bij opdracht 4</h3>
				<ol>
					<li>Lees af de punten: (0,2) en (2,9)<br>
						Dit geeft <em>rc</em> `= (9-2)/(2-0)=7/2`<br>
						Dus <em>rc</em> = `3 1/2`
					</li>
					<li>
						Lees af de punten: (2,7) en (6,4)<br>
						Dit geeft <em>rc</em> `= (4-7)/(6-2)= -3/4`<br>
						Dus <em>rc</em> `= -3/4`
					</li>
				</ol>
			</div>		
		</div>
		</div>
	
<!-- Opdracht 5 DWO -->
<div class="tekstblok opdracht">
	<h3>Opdracht 5@</h3>
	<p>
		Ga naar de <a href="http://ws.fisme.science.uu.nl/dwo/frameset.html" target="_blank">DWO</a>, 
		log in en open de module 'A5 Lineaire Vergelijkingen'. Maak activiteit 3: De vergelijking van een lijn opstellen.
	</p>
</div>

<!--Theorie Opstellen van een formule a.d.v. een lijn -->
<div class="tekstblok theorie analyse">
	<h3>De formule voor een lijn opstellen</h3>
	<p>
		De algemene formule bij een lijn heeft de vorm `y = ax + b`.
	</p>
	<p>
		Om de formule voor de lijn te vinden moet je het <b>hellingsgetal `a`</b> en het <b>startgetal `b`</b> bepalen.
	</p>
	<table style="vertical-align=top" class="stappenplan">
		<tr>
			<td>Stap 1:</td>
			<td>
				Als je `x = 0` invult in de formule, krijg je `y = b`. Dus de lijn gaat door het punt <math><mi>(0,b)</mi></math>. Om `b` te vinden bepaal je dus het snijpunt met de `y`-as.
			</td>
		</tr>
		<tr>	
			<td>Stap 2:</td>
			<td>
				Het getal `a` is het <b>hellingsgetal</b> van de lijn. Kies twee handige roosterpunten waarmee je dit hellingsgetal kunt bepalen.
			</td>
		</tr>
		<tr>	
			<td>Stap 3:</td>
			<td>Schrijf tenslotte de formule van de lijn op.</td>
		</tr>
	</table>
	<p>
		Let bij het opstellen van de formule van een lijn goed op de getallen en de letters langs de assen!
	</p>
</div>

<!-- opdracht 6 Opstellen van een formule a.d.v. een lijn-->
<div class="tekstblok opdracht">

	<h3>Opdracht 6</h3>
	<p>
		Stel voor iedere lijn de formule op. Schrijf duidelijk op hoe je aan je antwoord bent gekomen.
	</p>
	<img src="afbeeldingen/analyse_5/opdracht_6abc.png" width="600px">

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<h3>Antwoorden bij opdracht 6</h3>
			<p class="breuken">
				Blauw: `N = 1/3 * t + 5`<br>
				Groen: `N = -2  1/2 t + 9`<br>
				Paars: `N = 1 1/2 t + 7`
			</p>
		</div>		
	</div>
	
</div>


<div class="tekstblok opdracht" id="17">
	<h3>Opdracht 17 Welk getal?</h3>
	<p>
		Bereken het getal op de plek van het <span class="formula"> ?</span>-teken.
	</p>
	<div class="row">
		<div class="col-xs-5">
			<ol>
				<li>
					`5 +`<span class="formula"> ? </span>`= 13`
				</li>
				<li>
					<span class="formula"> ? </span> ` - 4 = 39`
				</li>
				<li>
					`76 +`<span class="formula"> ? </span>`= 50`
				</li>
			</ol>
		</div>
		<div class="col-xs-5">
			<ol start="5">				
				<li>
					`51 -`<span class="formula"> ? </span>`= 26`
				</li>
				<li>
					`-63 -`<span class="formula"> ? </span>`= -69`
				</li>
				<li>
					<span class="formula"> ? </span> `+ 65 = 21`
				</li>
			</ol>				
		</div>
	</div>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<div class="row">
				<div class="col-xs-5">
					<ol>
						<li>
							`5 +`<span class="formula"> ? </span>`= 13`<br>
							<span class="formula"> ? </span>`= 8`
						</li>
						<li>
							<span class="formula"> ? </span>` - 4 = 39`<br>
							<span class="formula"> ? </span>`= 43`
						</li>
						<li>
							`76 +`<span class="formula"> ? </span>`= 50`<br>
							<span class="formula"> ? </span>`= -26`
						</li>
					</ol>
				</div>
				<div class="col-xs-5">
					<ol start="5">				
						<li>
							`51 -`<span class="formula"> ? </span>`= 26`<br>
							<span class="formula"> ? </span>`= 25`
						</li>
						<li>
							`-63 -`<span class="formula"> ? </span>`= -69`<br>
							<span class="formula"> ? </span>`= 6`
						</li>
						<li>
							<span class="formula"> ? </span> `+ 65 = 21`<br>
							<span class="formula"> ? </span>`= -44`
						</li>
					</ol>				
				</div>
			</div>			
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="18">
	<h3>Opdracht 18 Welk getal?</h3>
	<p>
		Bereken het getal op de plek van het <span class="formula"> ?</span>-teken.
	</p>
	<div class="row">
		<div class="col-xs-5">
			<ol>
				<li>
					`27 :`<span class="formula"> ? </span>`= 3`
				</li>
				<li>
					`-90 :` <span class="formula"> ? </span>`= 9`
				</li>
				<li>
					<span class="formula"> ? </span> `* -2 = 32`
				</li>
				<li>
					`-12 *` <span class="formula"> ? </span>`= 240`
				</li>
				
			</ol>
		</div>
		<div class="col-xs-5">
			<ol start="5">				
				<li>
					<span class="formula"> ? </span> `: 3 = 5`
				</li>
				<li>
					<span class="formula"> ? </span> `: 3 = -15`
				</li>
				<li>
					`56 *`<span class="formula"> ? </span>`= 7`
				</li>
				<li>
					<span class="formula"> ? </span>`* 1/3 = -9`
				</li>
			</ol>				
		</div>
	</div>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<div class="row">
				<div class="col-xs-5">
					<ol>
						<li>
							`27 :`<span class="formula"> ? </span>`= 3`<br>
							<span class="formula"> ? </span>`= 9`
						</li>
						<li>
							`-90 :`<span class="formula"> ? </span>`= 9`<br>
							<span class="formula"> ? </span>`= -10`
						</li>
						<li>
							<span class="formula"> ? </span>`* -2 = 32`<br>
							<span class="formula"> ? </span>`= -16`
						</li>
						<li>
							`-12 *`<span class="formula"> ? </span>`= 240`<br>
							<span class="formula"> ? </span>`= -20`
						</li>
						
					</ol>
				</div>
				<div class="col-xs-5">
					<ol start="5">				
						<li>
							<span class="formula"> ? </span>`: 3 = 5`<br>
							<span class="formula"> ? </span>`= 15`
						</li>
						<li>
							<span class="formula"> ? </span>`: 3 = -15`<br>
							<span class="formula"> ? </span>`= -45`
						</li>
						<li>
							`56 *`<span class="formula"> ? </span>`= 7`<br>
							<span class="formula"> ? </span>`= 8`
						</li>
						<li>
							<span class="formula"> ? </span> `* 1/3 = -9`<br>
							<span class="formula"> ? </span>`= -27`
						</li>
					</ol>				
				</div>
			</div>			
		</div>
	</div>

</div>

<div class="tekstblok theorie analyse" id="theorieF">
	<h3>Theorie F Oplossen met bordjes</h3>
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





<!-- Opdracht 7 DWO -->
<div class="tekstblok opdracht">
	<h3>Opdracht 7 @</h3>
	<p>
		Ga naar de <a href="http://ws.fisme.science.uu.nl/dwo/frameset.html" target="_blank">DWO</a>, 
	log in en open de module 'A5 Lineaire vergelijkingen'. Maak activiteit 4:De bordjesmethode.
	</p>
</div>

<!--Theorie Bordjesmethode-->
<div class="tekstblok theorie analyse">
	<h3>Bordjesmethode</h3>
	<p>
		`5x + 23 = 38`	is een voorbeeld van een <b>vergelijking</b>. Als je deze vergelijking wilt <b>oplossen</b>, dan wil je weten welke `x` je moet invullen zodat er `38` uitkomt.
	</p>
	<p>
		De waarde van `x` waarvoor de vergelijking klopt, heet een <b>oplossing</b> van de vergelijking. De letter in de vergelijking, hier is dat de letter `x`, noemen we de <b>variabele</b>. 
	</p>
	<p>
		Vergelijkingen kan je oplossen met behulp van de <b>bordjesmethode</b>.<br>
		De bordjesmethode werkt zo:
	</p>
			<!--<p class="breuken">
				Los de volgende vergelijking op:<br>
				`5x + 23 = 38`<br>
				Leg een bordje op `5x`.<br>
				<span class="formula"> ? </span> `+ 23=38`<br>
				Onder het bordje ligt een waarde van 15, want `15+23=38`.<br>
				`5x=15`<br>
				Leg een bordje op `x`.<br>
				`5*` <span class="formula"> ? </span> `=15`<br>
				Onder het bordje ligt een waarde van `3`, want `5*3=15`.<br>
				`x=3`
			</p>-->
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

<!-- Opdracht 8 -->
<div class="tekstblok opdracht">
	<h3>Opdracht 8</h3>
	<p>Los de volgende vergelijkingen op met de bordjes methode:</p>
	<ol>
		<li>`x+12=30`</li>
		<li>`x-22=35`</li>
		<li>`2x+7=13`</li>
		<li>`3x+24=51`</li>
		<li>`4x-8=52`</li>
		<li>`3+6x=6`</li>
		<li>`-8+5x=17`</li>
		<li>`17-8x=-23`</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<h3>
				Uitwerkingen bij opdracht 8
			</h3>
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

<!-- Opdracht 9 h/v: bordjes met haakjes en breuken -->
<div class="tekstblok opdracht">
	<h3>Opdracht 9(h/v)</h3>
	<p>
		Los de volgende vergelijkingen op met de bordjesmethode:
	</p>
	<ol class="breuken">
		<li>
			`5*(8+x)=50`
		</li>
		<li>
			`-4*(7-3x)=32`
		</li>
		<li>
			`12/x+15=18`
		</li>
		<li>
			`x/25-32=-27`
		</li>
		<li>
			`5-4x=3 2/5`
		</li>														
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<h3>
				Uitwerkingen bij opdracht 9
			</h3>
			<ol class="breuken">
				<li>
					`5*(8+x)=50`<br>
					Leg een bordje op `8+x`.<br>
					`5*` <span class="formula"> ? </span> `=50`<br>
					Onder het bordje ligt een waarde van 10, want `5*10=50`.<br>
					`8+x=10`<br>
					Leg een bordje op `x`.<br>
					`8+` <span class="formula"> ? </span> `=10`<br>
					Onder het bordje ligt een waarde van `2`, want `8+2=10`.<br>
					`x=2`
				</li>
				<li>
					`-4*(7-3x)=32`<br>
					`-4*` <span class="formula"> ? </span> `=32`, dus <span class="formula"> ? </span> `=-8`<br>
					`7-3x=-8`<br>
					`7-` <span class="formula"> ? </span>` =-8`, dus <span class="formula"> ? </span> `=15`<br>
					`3x=15`<br>
					`3*` <span class="formula"> ? </span>` =15`, dus <span class="formula"> ? </span> `=5`<br>
					`x=5` 
				</li>
				<li>
					`12/x+15=18`<br>
					<span class="formula"> ? </span> `+15=18`, dus <span class="formula"> ? </span> `=3`<br>
					`12/x=3`<br>
					`12:` <span class="formula"> ? </span> `=3`, dus <span class="formula"> ? </span> `=4`<br>
					`x=4`<br>
				</li>
				<li>
					`x/25-32=-27`<br>
					<span class="formula"> ? </span> `-32=-27`, dus <span class="formula"> ? </span> `=5`<br>
					`x/25=5`<br>
					<span class="formula"> ? </span> `:25=5`, dus <span class="formula"> ? </span> `=125`<br>
					`x=125`<br>
				</li>
				<li>
					`5-4x=3 2/5`<br>
					`5-` <span class="formula"> ? </span> `=3 2/5`, dus <span class="formula"> ? </span> `=1 3/5`<br>
					`4x=1 3/5`<br>
					`4x=8/5`<br>
					`4*` <span class="formula"> ? </span> `=8/5`, dus <span class="formula"> ? </span> `=2/5`<br>
					`x=2/5`<br>
				</li>				
			</ol>
		</div>		
	</div>																		


	<div class="tekstblok opdracht">
			<h3>Opdracht 10 @</h3>
			<p>
			Ga naar de <a href="http://ws.fisme.science.uu.nl/dwo/frameset.html" target="_blank">DWO</a>, 
			log in en open de module 'A5 Lineaire vergelijkingen'. Maak activiteit 5: De balansmethode.</p>
		</div>


	<div class="tekstblok opdracht">
			<h3>Opdracht 11 @</h3>
			<p>
			Ga naar de <a href="http://ws.fisme.science.uu.nl/dwo/frameset.html" target="_blank">DWO</a>, 
			log in en open de module 'A5 Lineaire vergelijkingen'. Maak activiteitt 6: Vergelijkingen oplossen 1.</p>
		</div>


	<div class="tekstblok opdracht">
			<h3>Opdracht 12 @</h3>
			<p>
			Ga naar de <a href="http://ws.fisme.science.uu.nl/dwo/frameset.html" target="_blank">DWO</a>, 
			log in en open de module 'A5 Lineaire vergelijkingen'. Maak activiteit 7: Vergelijkingen oplossen 2.</p>
		</div>

<!--theorie -->
	<div class="tekstblok theorie analyse">
			<h3>De balansmethode</h3>
			<p>Er zijn vergelijkingen die je niet helemaal met de bordjesmethode kunt oplossen.</p>
			<p>Je leert nu een andere methode: <b>de balansmethode</b>.</p>

			<p>Los de vergelijking <math><mn>5</mn><mi>x</mi><mo>+</mo><mn>6</mn><mo>=</mo><mn>2</mn><mi>x</mi><mo>+<mn>12</mn></math> op.
			<table class="stappenplan">
			<tr>
					<td>Stap 1:</td>
					<td>Haal links en rechts <FONT color="orange"><math><mn>2</mn><mi>x</mi></math></FONT> weg.</td>
					<td><table>
							<tr>
								<td><math><mn>5</mn><mi>x</mi><mo>+</mo><mn>6</mn></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>2</mn><mi>x</mi><mo>+</mo><mn>12</mn></math></td>
							</tr>
							<tr>
								<td><FONT color="orange"><math><mn>-2</mn><mi>x</mi></math></FONT></td>
								<td></td>
								<td><FONT color="orange"><math><mn>-2</mn><mi>x</mi></math></FONT></td>
							</tr>
							<tr>
								<td><math><mn>3</mn><mi>x</mi><mo>+</mo><mn>6</mn></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>12</mn></math></td>
							<tr>
						</table></td>
			</tr>			

    		<tr>		
    				<td>Stap 2:</td>
					<td>Haal links en rechts <FONT color="orange"><math><mn>6</mn></math></FONT> weg.</td>
					<td><table>
							<tr>
								<td><math><mn>3</mn><mi>x</mi><mo>+</mo><mn>6</mn></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>12</mn></math></td>
							</tr>
							<tr>
								<td><FONT color="orange"><math><mn>-6</mn></math></FONT></td>
								<td></td>
								<td><FONT color="orange"><math><mn>-6</mn></math></FONT></td>
							</tr>
							<tr>
								<td><math><mn>3</mn><mi>x</mi></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>6</mn></math></td>
							<tr>
						</table></td>
			</tr>	
			<tr>	<td>Stap 3:</td>
					<td>Deel nu beide kanten door <FONT color="orange"><math><mn>3</mn></math></FONT>.</td>
					<td><table>
							<tr>
								<td><math><mn>3</mn><mi>x</mi></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>6</mn></math></td>
							</tr>
							<tr>
								<td><FONT color="orange"><math><mo>:</mo><mn>3</mn></math></FONT></td>
								<td></td>
								<td><FONT color="orange"><math><mo>:</mo><mn>3</mn></math></FONT></td>
							</tr>
							<tr>
								<td><math><mi>x</mi></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>2</mn></math></td>
							</tr>
						</table></td>
			</tr>
			
		</table></p>
</div>

<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 13</h3>
			<p>Los de volgende vergelijkingen op met de balansmethode. 
				Schrijf steeds op wat je links en rechts doet. 
				Werk dus net zoals het voorbeeld hierboven.</p>
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
				</li><
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

<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 14</h3>
			<p>Robin en Moustafa moeten de volgende vergelijking oplossen:<br>
				<table>
					<tr>
						<td><math><mn>2</mn><mi>x</mi><mo>-</mo><mn>8</mn></math></td>
						<td><math><mo>=</mo></math></td>
						<td><math><mn>5</mn></math></td>
					</tr></table>
			<p>Robin zegt: "We moeten er nu dus links en rechts <math><mn>8</mn></math> afhalen!"<br>
				Moustafa zegt: Je moet er links en rechts 8 bij doen!"</p>
				<p>Wie heeft hier gelijk en waarom?</p>
			</p>

				
		</div>

<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<p>Moustafa heeft gelijk!<br>
				 Om ervoor te zorgen dat `-8` nul wordt moet je er 8 bij optellen!</p>
					
			</div>		
		</div>

<!--theorie -->
	<div class="tekstblok theorie analyse">
		<h3>De balansmethode 2</h3>
		<p>Om er voor te zorgen dat in de opgave hierboven <math><mi>-</mi><mn>8</mn></math> verdwijnt, moeten we er <math><mn>8</mn></math> bij optellen!
			Je doet dus steeds de tegenovergestelde bewerking.</p>
		<p>Hier een voorbeeld:</p>
		<p>Los de vergelijking <math><mn>6</mn><mi>x</mi><mo>-</mo><mn>8</mn><mo>=</mo><mn>4</mn><mi>x</mi><mo>+<mn>22</mn></math> op.</p>
			<table class="stappenplan">
			<tr>
					<td>Stap 1:</td>
					<td>Haal links en rechts <FONT color="orange"><math><mn>4</mn><mi>x</mi></math></FONT> weg.</td>
					<td><table>
							<tr>
								<td><math><mn>6</mn><mi>x</mi><mo>-</mo><mn>8</mn></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>4</mn><mi>x</mi><mo>+</mo><mn>22</mn></math></td>
							</tr>
							<tr>
								<td><FONT color="orange"><math><mn>-4</mn><mi>x</mi></math></FONT></td>
								<td></td>
								<td><FONT color="orange"><math><mn>-4</mn><mi>x</mi></math></FONT></td>
							</tr>
							<tr>
								<td><math><mn>2</mn><mi>x</mi><mo>-</mo><mn>8</mn></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>22</mn></math></td>
							<tr>
						</table></td>
			</tr>			

    		<tr>		
    				<td>Stap 2:</td>
					<td>Doe er links en rechts <FONT color="orange"><math><mn>8</mn></math></FONT> bij.</td>
					<td><table>
							<tr>
								<td><math><mn>2</mn><mi>x</mi><mo>-</mo><mn>8</mn></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>22</mn></math></td>
								
							</tr>
							<tr>
								<td><FONT color="orange"><math><mn>+8</mn></math></FONT></td>
								<td></td>
								<td><FONT color="orange"><math><mn>+8</mn></math></FONT></td>
							</tr>
							<tr>
								<td><math><mn>2</mn><mi>x</mi></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>30</mn></math></td>
							<tr>
						</table></td>
			</tr>	
			<tr>	<td>Stap 3:</td>
					<td>Deel nu beiden kanten door <FONT color="orange"><math><mn>2</mn></math></FONT>.</td>
					<td><table>
							<tr>
								<td><math><mn>2</mn><mi>x</mi></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>30</mn></math></td>
							</tr>
							<tr>
								<td><FONT color="orange"><math><mo>:</mo><mn>2</mn></math></FONT></td>
								<td></td>
								<td><FONT color="orange"><math><mo>:</mo><mn>2</mn></math></FONT></td>
							</tr>
							<tr>
								<td><math><mi>x</mi></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>15</mn></math></td>
							<tr>
						</table></td>
			</tr>
			
		</table></p>

	</div>


<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 15</h3>
			<p>Los de volgende vergelijkingen op met de balansmethode. 
				Schrijf steeds op wat je links en rechts doet. 
				Werk dus net zoals het voorbeeld hierboven.</p>
				<p><ol>
					<li><math><mn>8</mn><mi>x</mi><mo>-</mo><mn>4</mn><mo>=</mo><mn>5</mn><mi>x</mi><mo>+</mo><mn>5</mn></math></li>
					<li><math><mn>5</mn><mi>x</mi><mo>-</mo><mn>12</mn><mo>=</mo><mn>3</mn><mi>x</mi><mo>+</mo><mn>4</mn></math></li>
					<li><math><mn>3</mn><mi>x</mi><mo>-</mo><mn>5</mn><mo>=</mo><mi>x</mi><mo>+</mo><mn>7</mn></math> Let op: <math><mi>x</mi></math> betekent <math><mn>1</mn><mi>x</mi></math>!</li>
					<li><math><mn>8</mn><mi>x</mi><mo>-</mo><mn>17</mn><mo>=</mo><mn>3</mn><mi>x</mi><mo>-</mo><mn>2</mn></math></li>
				</ol></p>
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
				</ol>

					
			</div>		
		</div>

	<div class="tekstblok opdracht">
			<h3>Opdracht 16</h3>
			<p>Nog een voorbeeld:
						<table>
							<tr>
								<td><math><mn>-8</mn><mi>x</mi><mo>+</mo><mn>7</mn></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>-2</mn><mi>x</mi><mo>+</mo><mn>37</mn></math></td>
							</tr>
							<tr>
								<td><FONT color="orange"><math><mo>+</mo><mn>2</mn><mi>x</mi></math></FONT></td>
								<td></td>
								<td><FONT color="orange"><math><mo>+</mo><mn>2</mn><mi>x</mi></math></FONT></td>
							</tr>
							<tr>
								<td><math><mn>-6</mn><mi>x</mi><mo>+</mo><mn>7</mn></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>37</mn></math></td>
							</tr>
							<tr>
								<td><FONT color="orange"><math><mo>-</mo><mn>7</mn></math></FONT></td>
								<td></td>
								<td><FONT color="orange"><math><mo>-</mo><mn>7</mn></math></FONT></td>
							</tr>	
							<tr>
								<td><math><mn>-6</mn><mi>x</mi></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>30</mn></math></td>
							</tr>
							<tr>
								<td><FONT color="orange"><math><mo>:</mo><mn>-6</mn></math></FONT></td>
								<td></td>
								<td><FONT color="orange"><math><mo>:</mo><mn>-6</mn></math></FONT></td>
							</tr>	
							<tr>
								<td><math><mi>x</mi></math></td>
								<td><math><mo>=</mo></math></td>
								<td><math><mn>-5</mn></math></td>
							</tr>
						</table></p>
					
			<p>Los de volgende vergelijkingen op met de balansmethode. 
				Schrijf steeds op wat je links en rechts doet. 
				Werk dus net zoals het voorbeeld hierboven.</p>
				<ol>
					<li><math><mn>2</mn><mi>x</mi><mo>+</mo><mn>5</mn><mo>=</mo><mn>-7</mn><mi>x</mi><mo>-</mo><mn>85</mn></math></li>
					<li><math><mn>6</mn><mi>x</mi><mo>-</mo><mn>7</mn><mo>=</mo><mn>-2</mn><mi>x</mi><mo>+</mo><mn>9</mn></math></li>
					<li><math><mn>-3</mn><mi>x</mi><mo>+</mo><mn>12</mn><mo>=</mo><mn>-8</mn><mi>x</mi><mo>+</mo><mn>52</mn></math></li>
					<li><math><mn>-7</mn><mi>x</mi><mo>-</mo><mn>13</mn><mo>=</mo><mn>-3</mn><mi>x</mi><mo>-</mo><mn>29</mn></math></li>
				</ol>
		</div>

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










<div class="tekstblok opdracht" id="15">
	<h3>Opdracht 15 @DWO</h3>
	<div class="row">
		<div class="col-xs-6">
			<p>
				Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module 'Letterrekenen deel 3' en maak de volgende activiteiten:
			</p>
			<ol style="list-style-type: decimal !important;">
				<li>Rechthoeken, oppervlakte en formules</li>
				<li>Formules met en zonder haakjes</li>
				<li>Expressies herleiden met rechthoeken</li>
			</ol>
		</div>
		<div class="col-xs-6">
			
		</div>
	</div>
</div>




<div class="tekstblok opdracht" id="17">
	<h3>Opdracht 17 @DWO</h3>
	<div class="row">
		<div class="col-xs-6">
			<p>
				Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module 'Letterrekenen deel 3' en maak de volgende activiteiten:
			</p>
			<ol style="list-style-type: decimal !important;" start="4">
				<li>Handig rekenen met tabellen</li>
				<li>Letterrekenen met tabellen inleiding</li>
				<li>Letterrekenen met tabellen oefenen</li>
			</ol>
		</div>
		<div class="col-xs-6">
			
		</div>
	</div>
</div>



<div class="tekstblok opdracht" id="20">
	<h3>Opdracht 20 @DWO</h3>
	<div class="row">
		<div class="col-xs-6">
			<p>
				Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module 'Letterrekenen deel 4' en maak de volgende activiteiten:
			</p>
			<ol style="list-style-type: decimal !important;">
				<li>Producten herleiden inleiding</li>
				<li>Producten herleiden oefenen</li>
				<li>Herleiden met machten en tabellen</li>
			</ol>
		</div>
		<div class="col-xs-6">
			
		</div>
	</div>
</div>


	
	<div class="tekstblok theorie analyse">
		<h3>Proeftoets</h3>
		<p>
			Voor een proeftoets inclusief uitwerkingen, klik op:	<a href="afbeeldingen/vaar_letterrekenen/letterrekenen_formules_vergelijken_proeftoets.pdf" alt="letterrekenen_formules_vergelijken_proeftoets.pdf" target="_blank">Proeftoets</a>.
		<br>                                                                 
			Maak de toets in 40 minuten met behulp van je eigen rekenmachine, pennen, potloden en geodriehoek.
		</p>
	</div>

</div>


<nav>
<ul class="doelen">
	<li>
		<a href="#open_doelen">Doelen</a>
		<div id="open_doelen" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>	Doelen</h3>
				<ol>
					<li>weten wat macht, grondtal en exponent betekenen;</li>
					<li>weten wat een formule en een expressie is;</li>
					<li>kunnen rekenen met machten;</li>
					<li>kunnen rekenen met variabelen;</li>
					<li>leren wat gelijksoortige termen zijn;</li>
					<li>kunnen herleiden van veeltermen.</li>
				</ol>
			</div>
		</div>
	</li>
	<li>
		<a href="#open_voorkennis">Voorkennis</a>
		<div id="open_voorkennis" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>Voorkennis</h3>
				<ol>
					<li>variabelen en letters;</li>
					<li>volgorde van bewerkingen;</li>
					<li>oppervlakte van een rechthoek kunnen berekenen.</li>
				</ol>
			</div>
		</div>
	</li>
	<li>
		<a href="#open_werkwijze">Werkwijze</a>
		<div id="open_werkwijze" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>Werkwijze</h3>
				<p>
					Maak de opdrachten uit de taak in je schrift. Schrijf sommen steeds eerst over voordat je ze stap voor stap uitrekent. Kijk je eigen werk kritisch na. Tip: kijk elkaars werk na en geef elkaar feedback over het gemaakte werk.<br>
					Maak de activiteiten op de DWO zorgvuldig, houd vol en blijf proberen tot je het goed hebt. Met de <em>zelftoetsen</em> kun je goed testen of je op het goede spoor zit. Aan het einde van de taak, kun je die zelftoetsen nogmaals maken, je krijgt dan vanzelf nieuwe opgaven. Een mooie manier om je voor te bereiden op de toets.
				</p>
			</div>
			</div>
	</li>
		<li>
		<a href="#open_benodigdheden">Benodigdheden</a>
		<div id="open_benodigdheden" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>Benodigdheden</h3>
				<p>
					Je hebt een werkende computer nodig met daarop toegang tot de DWO, een schrift en een pen.<br>
					Mocht de DWO het niet doen, controleer dan eerst je instellingen. Werk Java bij door eerst de nieuwste versie te laden, dan al je browsers af te sluiten en dan die nieuwste versie te installeren.<br>
					Als het toch niet lukt op jouw computer, werk dan op die van een ander. Gebruik natuurlijk wel je eigen account.
				</p>
			</div>
			</div>
	</li>
</ul>
</nav>
	