<?php 
	//defineer titel
	$taaknaam ="Machten en volgorde";
?>


<?php
	//Definieer sidebar
	$doorverwijzingen = array(
      '#inleiding' => 'Inleiding',
      '#theorieA' => 'Kwadraten',
      '#theorieB' => 'Kwadraat van negatieve getallen',
      '#theorieC' => 'Factoren en machten',
      '#theorieD' => 'Machten van negatieve getallen',
      '#theorieE' => 'Volgorde',
	  '#theorieF' => 'Afspraken',
      '#theorieG' => 'Wat gaat vóór?',
      '#theorieH' => 'Gelijkwaardige bewerkingen',
      '#theorieI' => 'Meerdere bewerkingen',
      '#theorieJ' => 'Machten en volgorde',
      '#theorieK' => 'Haakjes',
      '#theorieL' => 'Regels en stappenplan',
      '#proeftoets' => 'Proeftoets');                                                      
?>

<title>Leerjaar 1 | <?php echo $taaknaam; ?></title>

<div class="taakinhoud"><!-- de taak zelf -->
	
<div class="tekstblok theorie vaardigheden" id="inleiding">
	<h3>Inleiding <?php echo $taaknaam; ?></h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Deze taak gaat over machten en de volgorde van bewerkingen.<br>
				Een bijzondere macht ken je al uit de taak <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=v_1thv_tafels">Tafels</a>: het kwadraat.
			</p>
			<p>
				Het kwadraat van 8 is de tweede macht van 8, notatie:<br>
				`8 &times; 8 = 8^2`
			</p>
			<p>
				In de afbeelding staat de <em>zevende</em> macht van 3. Straks weet je precies hoe dit werkt.
			</p>		
		</div>
		<div class="col-xs-5">
			<img src="../afbeeldingen/vaardigheden_leerjaar_1/grondtalexponent.gif" alt="grondtalexponent" width="" height="" />
		</div>
	</div>
	<p class="geeltje">
		Let op: deze taak maak je zonder rekenmachine! Je mag natuurlijk wel kladpapier gebruiken voor lastige berekeningen.
	</p>
</div>

<div class="tekstblok opdracht" id="1">
	<h3>Opdracht 1 Vierkanten met zijden</h3>
	
	<div class="row">
		<div class="col-xs-5">
			<p>
				Bereken van elk van de drie vierkanten de oppervlakte.
			</p>
		</div>
		<div class="col-xs-7">
			<p class="geeltje">
				Oppervlakte vierkant = zijde &times; zijde<br>
				De zijden van een vierkant zijn even lang.
			</p>
		</div>		
	</div>	

	<img class="img-responsive" src="../afbeeldingen/vaardigheden_leerjaar_1/drie_vierkanten.png" alt="drie_vierkanten" />
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Blauw: `3 &times; 3 = 9` <em>cm</em><sup>2</sup> <br>
				Groen: `4 &times; 4 = 16` <em>cm</em><sup>2</sup><br>
				Geel: `5 &times; 5 = 25` <em>cm</em><sup>2</sup>
			</p>
			<p>
				Let er op dat de eenheid een oppervlakte-maat is. Had je die eenheden goed, dan ben je een kanjer. 
			</p>
		</div>
		</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieA">
	<h3>Theorie A Kwadraten</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				De oppervlakte van een vierkant is het kwadraat van zijn zijde.
			</p>
			<p>
				Het kwadraat van een getal is het getal met zichzelf vermenigvuldigd.
			</p>
			<p>
				Het kwadraat van `7` is `49`, want `7 &times; 7` is `49`.<br>
				In plaats van `7 &times; 7` kun je `7^2` schrijven.
			</p>		
		</div>
		<div class="col-xs-3">
			<img src="../afbeeldingen/vaardigheden_leerjaar_1/vierkant_5x5_theorie.png" alt="vierkant_5x5_theorie" width="150" class="rightfloat" />
		</div>		
	</div>	
</div>

<div class="tekstblok opdracht" id="2">
	<h3>Opdracht 2 Tabel met kwadraten</h3>
	<p>
		Neem over en vul in.
	</p>
	<table class="verhouding" width="200">
		<tr>
			<td width="150"><em>getal</em></td>
			<td>0</td>
			<td>6</td>
			<td>7</td>
			<td>8</td>
			<td>9</td>
			<td>13</td>
			<td>15</td>
			<td>20</td>
		</tr>
		<tr>
			<td width="150"><em>kwadraat</em></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<table class="verhouding" width="200">
				<tr>
					<td width="150"><em>getal</em></td>
					<td>0</td>
					<td>6</td>
					<td>7</td>
					<td>8</td>
					<td>9</td>
					<td>13</td>
					<td>15</td>
					<td>20</td>
				</tr>
				<tr>
					<td width="150"><em>kwadraat</em></td>
					<td>0</td>
					<td>36</td>
					<td>49</td>
					<td>64</td>
					<td>81</td>
					<td>169</td>
					<td>225</td>
					<td>400</td>
				</tr>
			</table>
			<p>
				Het is raadzaam deze kwadraten uit het hoofd te kennen.
			</p>
		</div>
		</div>
</div>

<div class="tekstblok opdracht" id="3">
	<h3>Opdracht 3 Kwadraat van `-6`</h3>
	<p>
		Achmed berekent het kwadraat van `-6`.<br>
		Hij doet `-6 &times; -6 = 36`.<br>
		"Dat is gek," denkt hij, "mijn antwoord is positief!"<br> 
		Heeft hij het goed gedaan?
	</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Hij heeft het goed gedaan, want het kwadraat van een getal is het getal met zichzelf vermenigvuldigen in dit geval dus `-6 &times; -6` en het product van een negatief getal en een negatief getal is positief, zie <a href="index_taken.php?p=v_thv_rekenen_met_negatieve_getallen" target="_blank">Rekenen met negatieve getallen</a>.
			</p>
		</div>
		</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieB">
	<h3>Theorie B Kwadraat van negatieve getallen</h3>
	<div class="row">
		<div class="col-xs-5">
			<p>
				Gebruik <b>haakjes</b> bij het kwadraat van <b>negatieve getallen</b> om verwarring te voorkomen.
			</p>	
			<p>
				Het kwadraat van `-4` is `16`, want `-4 &times; -4= 16`.<br>
				Je schrijft: `(-4)^2=-4 &times; -4= 16`.
			</p>
		</div>
		<div class="col-xs-7">
				<p class="geeltje">
					Verschil in notatie = verschil in betekenis.
				</p>
				<p class="geeltje">
					Notatie: `(-5)^2 = -5 &times; -5 = 25`
					<br>
					Betekent: <em>Het kwadraat van min 5.</em>
				</p>
				<p class="geeltje">
					Notatie: `-5^2 = - 5 &times; 5 = -25`
					<br>
					Betekent: <em>Min het kwadraat van 5.</em>
				</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="4">
	<h3>Opdracht 4 Product</h3>
	<p>
		Herschrijf als product en reken uit.
	</p>
	<div class="row">
		<div class="col-xs-4">
					<ol>
						<li>
							`10^2`
						</li>
						<li>
							`3^2`
						</li>
						<li>
							`(-2)^2`
						</li>
					</ol>
		</div>
		<div class="col-xs-4">
			<ol start="4">
				<li>
					`(-5)^2`
				</li>
				<li>
					`-7^2`
				</li>
				<li>
					`-(-11)^2`
				</li>
			</ol>
		</div>
		<div class="col-xs-4">
			<p class="geeltje">
				`3^2 = 3 &times; 3 = 9`		
				<br>
				`(-3)^2 =-3 &times; -3 = 9`
				<br>
				`-3^2 = - 3 &times; 3 = -9 `
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
								`10^2 = 10 &times; 10 = 100`
							</li>
							<li>
								`3^2 = 3 &times; 3 = 9`
							</li>
							<li>
								`(-2)^2 = -2 &times; -2 = 4`
							</li>
						</ol>
					</td>
					<td width="300">
						<ol start="4">
							<li>
								`(-5)^2 = -5 &times; -5 = 25`
							</li>
							<li>
								`-7^2 = -7 &times; 7 = -49`
							</li>
							<li>
								`-(-11)^2 = - (-11 &times; -11) = - 121`
							</li>
						</ol>
					</td>
				</tr>
			</table>
		</div>
		</div>
</div>

<div class="tekstblok opdracht" id="5">
	<h3>Opdracht 5 Met en zonder haakjes</h3>
	<p>
		Leg het verschil uit tussen:
		<br>
		`(-8)^2` en		`-8^2`
	</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<p>
			`(-8)^2` betekent het kwadraat van `-8`, dus `-8 &times; -8 = 64`.<br>
			`-8^2` betekent min het kwadraat van `8`, dus `-(8 &times; 8)= -64.
		</p>
		</div>
		</div>
</div>

<div class="tekstblok opdracht" id="6">
	<h3>Opdracht 6 Kwadraten</h3>
	<p>
		Neem over en reken uit.
	</p>
	<div class="row">
		<div class="col-xs-4">
			<ol>
				<li>
					`6^2`
				</li>
				<li>
					`(-7)^2`
				</li>
			</ol>
		</div>
		<div class="col-xs-4">
			<ol start="3">
				<li>
					`-5^2`
				</li>
				<li>
					`(-9)^2`
				</li>
			</ol>
		</div>
		<div class="col-xs-4">
			<ol start="5">
				<li>
					`-9^2`
				</li>
				<li>
					`-(-3)^2`
				</li>
			</ol>
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
								`6^2 = 6 &times; 6 = 36`
							</li>
							<li>
								`(-7)^2 = -7 &times; -7 = 49`
							</li>
							<li>
								`-5^2 = -(5 &times; 5) = -25`
							</li>
						</ol>
					</td>
					<td width="300">
						<ol start="4">
							<li>
								`(-9)^2 = -9 &times;  -9 = 81`
							</li>
							<li>
								`-9^2 = -(9 &times; 9) = -81`
							</li>
							<li>
								`-(-3)^2 = -(-3 &times; -3) = -9`
							</li>
							</ol>
					</td>
				</tr>
			</table>
		</div>
		</div>
</div>

<div class="tekstblok opdracht" id="7">
	<h3>Opdracht 7 Invullen</h3>
	<p>
		Neem over en vul in.
	</p>
	<div class="row">
		<div class="col-xs-4">
			<ol>
				<li>
					`3 &times; ... = 9`
				</li>
				<li>
					`4 &times; ... = 16`
				</li>
			</ol>
		</div>
		<div class="col-xs-4">
			<ol start="3">
				<li>
					`6 &times; ... = 36`
				</li>
				<li>
					`...^2 = 9`
				</li>
			</ol>
		</div>
		<div class="col-xs-4">
			<ol start="5">
				<li>
					`...^2 = 16`
				</li>
				<li>
					`...^2 = 36`
				</li>
			</ol>
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
							`3 &times; 3 = 9`
						</li>
						<li>
							`4 &times; 4 = 16`
						</li>
						<li>
							`6 &times; 6 = 36`
						</li>
					</ol>
				</td>
				<td width="300">
					<ol start="4">
						<li>
							`3^2 = 9`
						</li>
						<li>
							`4^2 = 16`
						</li>
						<li>
							`6^2 = 36`
						</li>
					</ol>
				</td>
			</tr>
		</table>
		</div>
		</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieC">
	<h3>Theorie C Machten en factoren</h3>
	<p>
		Een ander woord voor vermenigvuldiging is <b>product</b>.<br>
		Het product van 3 en 4 is 12, want 3 × 4 = 12.<br>
		3 en 4 zijn de <b>factoren</b> van dit product.
	</p>
	<p>
		Het product van 3 en 7 is 21, want 3 × 7 = 21.
	</p>
	<div class="row">
		<div class="col-xs-8">

			<p>
				Het product van gelijke <b>factoren</b> is een <b><span style="color: red">macht</span></b>:<br>
				<span style="color: green">3</span> &times; <span style="color: green">3</span> &times; <span style="color: green">3</span> &times; <span style="color: green">3</span> = <span style="color: green">3</span><sup><span style="color: red">4</span></sup><br>
				<span style="color: green">3</span><sup><span style="color: red">4</span></sup> betekent <span style="color: green">3</span> tot de macht <span style="color: red">4</span>.
			</p>	
			<p>
			   <span style="color: green">3</span><sup><span style="color: red">2</span></sup> en <span style="color: green">3</span><sup><span style="color: red">7</span></sup> noem je ook machten van 3, <br>
			   omdat het <b><span style="color: green">grondtal</span></b> `3` is.<br>
			   De <span style="color: red">2</span> en de <span style="color: red">7</span> zijn hier de <b><span style="color: red">exponenten</span></b>.
			</p>
			<p>
				Een kwadraat is ook een macht: <span style="color: green">3</span><sup><span style="color: red">2</span></sup> betekent <span style="color: green">3</span> tot de macht <span style="color: red">2</span>.
			</p>
		</div>
		<div class="col-xs-4">
			<img src="../afbeeldingen/vaardigheden_leerjaar_1/macht.png" alt="macht" width="140" height="" />
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="8">
	<h3>Opdracht 8 Machten</h3>
	<p>
		Schrijf bij elke macht het grondtal en de exponent op.
	</p>
	<ol>
		<li>
			`2^3`
		</li>
		<li>
			`12^5`
		</li>
		<li>
			`102^101`
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
				`2^3` grondtal is 2, exponent is 3
			</li>
			<li>
				`12^5` grondtal is 12, exponent is 5
			</li>
			<li>
				`102^101` grondtal is 102, exponent is 101
			</li>
		</ol>
		</div>
	</div>		
</div>

<div class="tekstblok opdracht" id="9">
	<h3>Opdracht 9 Exponenten</h3>
	<p>
		Neem over en vul de exponenten in:
	</p>
	<ol>
		<li>
			`3 &times; 3 = 3^...`
		</li>
		<li>
			`3 &times; 3 &times; 3 = 3^...`
		</li>
		<li>
			`3 &times; 3 &times; 3 &times; 3 &times; 3 &times; 3 = 3^...`
		</li>
		<li>
			`3 &times; 3 &times; 3 &times; 3 &times; 3 &times; 3 &times; 3 &times; 3 &times; 3 &times; 3 &times; 3 = 3^...`
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<table>
			<tr>
				<td>
					`3 &times; 3 = 3^2`
				</td>
			</tr>
			<tr>
				<td>
					`3 &times; 3 &times; 3 = 3^3`
				</td>
			</tr>
			<tr>
				<td>
					`3 &times; 3 &times; 3 &times; 3 &times; 3 &times; 3 = 3^6`
				</td>
			</tr>
			<tr>
				<td>
					`3 &times; 3 &times; 3 &times; 3 &times; 3 &times; 3 &times; 3 &times; 3 &times; 3 &times; 3 &times; 3 = 3^11`
				</td>
			</tr>
		</table>
		</div>
	</div>		
</div>

<div class="tekstblok opdracht" id="10">
	<h3>Opdracht 10 Machten</h3>
	<p>
		Neem over en vul in:
	</p>
	<ol>
		<li>
			`5 &times; ... = 5^2`
		</li>
		<li>
			`... &times; ... &times; ... = 6^3`
		</li>
		<li>
			`8 &times; 8 &times; 8 &times; 8 = ...^4`
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<table>
			<tr>
				<td>
					`5 &times; 5 = 5^2`
				</td>
			</tr>
			<tr>
				<td>
					`6 &times; 6 &times; 6 = 6^3`
				</td>
			</tr>
			<tr>
				<td>
					`8 &times; 8 &times; 8 &times; 8 = 8^4`
				</td>
			</tr>
		</table>
		</div>
	</div>		
</div>

<div class="tekstblok opdracht" id="11">
	<!-- bron: Moderne Wiskunde 1a vwo 2012, blz. 117 -->
	<h3>Opdracht 11 Machten</h3>
	<p>
		Neem de tabel over en vul deze verder in.
	</p>
	<table class="verhouding">
		<tr>
		<td> </td>
		<td>
			<em>grondtal</em>
		</td>
		<td>
			<em>exponent</em>
		</td>
		<td>
			<em>uitkomst</em>
		</td>
		<td>
			<em>uitspraak</em>
		</td>
		</tr>
		<tr>
			<td>
				`5^4`
			</td>
			<td>
				...
			</td>
			<td>
				...
			</td>
			<td>
				...
			</td>
			<td>
				vijf tot de macht vier
			</td>
		</tr>
		<tr>
			<td>
				`2^5`
			</td>
			<td>
				...
			</td>
			<td>
				...
			</td>
			<td>
				...
			</td>
			<td>
				twee tot de macht ...
			</td>
		</tr>
		<tr>
			<td>
				...
			</td>
			<td>
				4
			</td>
			<td>
				3
			</td>
			<td>
				...
			</td>
			<td>
				...
			</td>
		</tr>
		<tr>
			<td>
				...
			</td>
			<td>
				3
			</td>
			<td>
				...
			</td>
			<td>
				81
			</td>
			<td>
				...
			</td>
		</tr>
	</table>
	<br>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<table class="verhouding">
				<tr>
					<td> </td>
					<td>
						<em>grondtal</em>
					</td>
					<td>
						<em>exponent</em>
					</td>
					<td>
						<em>uitkomst</em>
					</td>
					<td>
						<em>uitspraak</em>
					</td>
				</tr>
				<tr>
					<td>
						`5^4`
					</td>
					<td>
						`5`
					</td>
					<td>
						`4`
					</td>
					<td>
						`625`
					</td>
					<td>
						vijf tot de macht vier
					</td>
				</tr>
				<tr>
					<td>
						`2^5`
					</td>
					<td>
						`2`
					</td>
					<td>
						`5`
					</td>
					<td>
						`32`
					</td>
					<td>
						twee tot de macht vijf
					</td>
				</tr>
				<tr>
					<td>
						`4^3`
					</td>
					<td>
						`4`
					</td>
					<td>
						`3`
					</td>
					<td>
						`64`
					</td>
					<td>
						vier tot de macht drie
					</td>
				</tr>
				<tr>
					<td>
						`3^4`
					</td>
					<td>
						`3`
					</td>
					<td>
						`4`
					</td>
					<td>
						`81`
					</td>
					<td>
						drie tot de macht vier
					</td>
				</tr>
			</table>
		</div>
	</div>		
</div>

<div class="tekstblok theorie vaardigheden" id="theorieD">
	<h3>Theorie D Machten van negatieve getallen</h3>
	<p>
		Gebruik haakjes bij de macht van een negatief getal.
	</p>	
	<p>
		`-4 &times; -4 = (-4)^2 = 16`<br>
		`-4 &times; -4 &times; -4 = (-4)^3 = -64`<br>
	</p>
	<p>
		Let op dat een oneven macht van een negatief getal als uitkomst negatief is.	
	</p>
</div>

<div class="tekstblok opdracht" id="12">
	<h3>Opdracht 12 Machten uit het hoofd</h3>
	<p>
		Bereken zonder rekenmachine.
	</p>
	<div class="row">
		<div class="col-xs-4">
			<ol>
				<li>
					`(-2)^3 = `
				</li>
				<li>
					`(-2)^4 = `
				</li>
				<li>
					`(-3)^3 = `
				</li>
				<li>
				 `-4^3 = `
				</li>
			</ol>
		</div>
		<div class="col-xs-4">
			<ol start="5">
				<li>
					`-(-2)^5 =`
				</li>
				<li>
					`(-1)^13  =`
				</li>
				<li>
					`(-1)^2048 = `
				</li>
				<li>
				 `-(-3^2)^2 = `
				</li>
			</ol>
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
								`(-2)^3 = -8`
							</li>
							<li>
								`(-2)^4 = 16`
							</li>
							<li>
								`(-3)^3 = -27`
							</li>
							<li>
							 `-4^3 = -64`
						</ol>
					</td>
					<td width="300">
						<ol start="5">
							<li>
								`-(-2)^5 = -(-32) = 32`
							</li>
							<li>
								`(-1)^13  = -1`
							</li>
							<li>
								`(-1)^2048 = 1`
							</li>
							<li>
							 `-(-3^2)^2 = -(-9)^2 = -81`
							</li>
						</ol>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
		
<div class="tekstblok opdracht" id="13">
	<h3>Opdracht 13 Positief of negatief</h3>
	<p>
		Schrijf op of de uitkomst positief of negatief is.
	</p>
	<div class="row">
		<div class="col-xs-4">
			<ol>
				<li>
					`2^5` is ...
				</li>
				<li>
					`-2^3` is ...
				</li>
				<li>
					`(-3)^4` is  ...
				</li>
			</ol>		
		</div>
		<div class="col-xs-4">
			<ol start="4">
				<li>
					`(-8)^3` ...
				</li>
				<li>
					`-5^4` is ...
				</li>
				<li>
					`(-5)^4` is ... 
				</li>
			</ol>		
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
							`2^5` is positief
						</li>
						<li>
							`-2^3` is negatief
						</li>
						<li>
							`(-3)^4` is positief
						</li>
					</ol>
				</td>
				<td>
					<ol start="4">
						<li>
							`(-8)^3` is negatief
						</li>
						<li>
							`-5^4` is negatief
						</li>
						<li>
							`(-5)^4` is positief 
						</li>
					</ol>
				</td>
				</tr>
			</table>
		</div>
	</div>		
</div>

<div class="tekstblok opdracht" id="14">
	<h3>Opdracht 14 Machten uitrekenen</h3>
	<p>Neem over en bereken zonder rekenmachine.</p>
	<ol>
		<li>De macht met exponent 4 en grondtal 3.</li>
		<li>De derde macht van -3.</li>
		<li>`-2^4` =</li>
		<li>`(-2)^4` =</li>
		<li>`-1^4` =</li>
		<li>`(-1)^39` =</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>`3^4 = 81`</li>
				<li>`(-3)^3 = -27`</li>
				<li>`- 2 * 2 * 2 * 2 = -16`</li>
				<li>`-2 * -2 * -2 * -2 = 16`</li>
				<li>`- 1 * 1 * 1 * 1 = -1`</li>
				<li> `-1`, want de macht is een oneven getal. </li>
			</ol>	
		</div>
	</div>		
</div>
	
<div class="tekstblok opdracht" id="15">
	<h3>Opdracht 15 @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module 'Machten en volgorde' en maak:
	</p>
		<ol>
			<li><em>Activiteit 1. Machten, inleiding</em></li>
			<li><em>Activiteit 2. Machten, oefenen</em></li>
		</ol>
	<p>
		Ga eerst verder met de taak, voordat je de andere activiteiten maakt.
	</p>
</div>
	
<div class="tekstblok theorie vaardigheden" id="theorieE">
	<h3>Theorie E Volgorde van bewerkingen</h3>
	<p>
		Een melkboer uit Klazienaveen besluit zijn geluk in Saoudi-Arbië te proberen. Hij gaat daar babymelk verkopen. Naast de snelweg van de hoofdstad naar het vliegveld laat hij het volgende bord neerzetten:
		<img class="img-responsive" src="afbeeldingen/vaardigheden_leerjaar_1/babymelk.png" alt="volgorde_van_bewerkingen_1" />
		<br>
		Tot zijn grote teleurstelling wil niemand daar zijn melk kopen. Hoe komt dat?
	</p>
	<p>
		sknil raan sthcer nav tseel ,tseel tid eiw
	</p>
	<p>
		De zin hierboven is waarschijnlijk niet direct leesbaar. Maar zou je hem van rechts naar links lezen, dan wordt het anders. Wat betekent dit voor de afbeelding van de melkboer in Saoudi-Arbië?
	</p>
</div>

<div class="tekstblok opdracht" id="16">
	<h3>Opdracht 16 Rijden</h3>
	<ol>
		<li>Noem een land waar ze op de linker weghelft rijden?</li>
		<li>Hoe rijd je dan over een rotonde?</li>
	</ol>
	<!-- uitwerkingen -->
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">				   	
			<ol>
				<li>Verenigd Koninkrijk, Nepal, Zuid-Afrika, Australië, et cetera, klik <a href="https://nl.wikipedia.org/wiki/Links_rijden#Landen_en_gebieden_waar_men_links_rijdt" target="_blank">hier</a> voor meer landen</li>
				<li>Linksom, dus met de klok mee.</li>
			</ol>
		</div>
	</div>
	<!-- /uitwerkingen -->
</div>

<div class="tekstblok theorie vaardigheden" id="theorieF">
	<h3>Theorie F Afspraken</h3>
	<div class="row">
		<div class="col-md-8">
			<p>
				In de wiskunde worden er <b>afspraken</b> gemaakt, zodat duidelijk is wat we bedoelen. Ook voor het maken van <b>berekeningen</b> zijn er afspraken, over die afspraken gaat deze taak.
			</p>
		</div>
		<div class="col-md-4">
			<img class="img-responsive" src="afbeeldingen/vaardigheden_leerjaar_1/afspraken.jpg" alt="afspraken" />
		</div>
	</div>				
</div>

<div class="tekstblok opdracht" id="17">
		<h3>Opdracht 17 Wie heeft gelijk?</h3>
		<p>
			Perrin en Mat maken beiden de volgende opgave:<br>
			6 + 4 × 6 =<br>
			Volgens Perrin komt er 60 uit, Mat denkt 30.
		</p>
		<ol>
			<li>Laat zien hoe ze tot hun antwoorden zijn gekomen.</li>
			<li>Wie heeft er gelijk? Leg je antwoord uit.</li>		
		</ol>
		
		<!-- uitwerkingen -->
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">				   	
				<ol>
					<li>
						Perrin heeft eerst opgeteld en daarna vermenigvuldigd.<br>
						6 + 4 × 6 =<br>
						10 × 6 = 60<br>
						Mat heeft eerst vermenigvuldigd en daarna opgeteld.<br>
						6 + 4 × 6 =<br>
						6 + 24 =30
					</li>
					<li>
						Mat heeft gelijk, hij heeft gerekend volgens de volgorde regels. Die zeggen dat vermenigvuldigen voor optellen gaat.
					</li>
				</ol>
			</div>
		</div>
		<!-- /uitwerkingen -->
	</div>

<div class="tekstblok theorie vaardigheden" id="theorieG">
	<h3>Theorie G Wat gaat vóór?</h3>
	<div class="row">
		<div class="col-md-8">
			<p>
				Het maakt voor de oplossing veel uit of je begint met optellen of vermenigvuldigen.	
			</p>
			<p>
				Afgesproken is dat vermenigvuldigen en delen voor optellen en aftrekken gaan.
			</p>
		</div>
		<div class="col-md-4">
			<p class="geeltje">
				Afspraak:<br>
				Eerst vermenigvuldigen en delen,<br>
				Dan optellen en aftrekken.
			</p>
		</div>
	</div>	
</div>

<div class="tekstblok opdracht" id="18">
		<h3>Opdracht 18 Wat gaat voor?</h3>				
		<p>Neem over en bereken.</p>
		<div class="row">
			<div class="col-xs-4">
				<ol>
					<li>6 + 2 × 4 =</li>
					<li>22 - 3 × 4 =</li>
				</ol>					
			</div>
			<div class="col-xs-4">
				<ol start="3">
					<li>12 - 6 : 3 =</li>
					<li>11 + 6 : 3 =</li>
				</ol>
			</div>
		</div>
		<!-- uitwerkingen -->
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<div class="row">
					<div class="col-md-4">
					   	<ol>
							<li>
								6 + 2 × 4 =<br>
								6 + 8 = 14
							</li>
							<li>22 - 3 × 4 =<br>
								22 - 12 = 10
							</li>
					   	</ol>
					</div>
					<div class="col-md-4">
						<ol start="3">
							<li>12 - 6 : 3 =<br>
								12 - 2 = 10
							</li>
							<li>11 + 6 : 3 =<br>
								11 + 2 = 13
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- /uitwerkingen -->				
	</div>

<div class="tekstblok theorie vaardigheden" id="theorieH">
	<h3>Theorie H Gelijkwaardige bewerkingen</h3>
	<div class="row">
			<div class="col-md-8">
				<p>
					Vermenigvuldigen en delen zijn gelijkwaardige <b>bewerkingen</b>. We werken van links naar rechts, precies zoals we lezen. Ook als je twee
					keer in een opgave moet delen of twee keer moet vermenigvuldigen, werk je van links naar rechts. 
				</p>
					
			
			</div>
			<div class="col-md-4">
				<p class="geeltje">
					Afspraak:<br>
					Gelijkwaardige bewerkingen?<br>
					Dan van links naar rechts!
				</p>
			</div>
	    </div>
	<div class="row">
			<div class="col-xs-6">
				<p>
					<u>Voorbeeld 1</u><br>
					`3 × 4 : 2 =`<br>
					`12   : 2 = 6`
				</p>
			</div>
			<div class="col-xs-6">
				<p>
					<u>Voorbeeld 2</u><br>
					`12 : 3 : 2 =` <br>
					`4 : 2 = 2`
				</p>
			</div>
	      </div>				    
	<div class="row">
			<div class="col-md-8">
				<p>
					Merk op dat we de opgave met <b>tussenstappen</b> onder elkaar uitrekenen.
				</p>
			</div>
			<div class="col-md-4">
					<p class="geeltje">
						Gebruik tussenstappen.
					</p>

			</div>
		</div>
</div>

<div class="tekstblok opdracht" id="19">
	<h3>Opdracht 19</h3>
	<p>Neem over en bereken.</p>
	<div class="row">
		<div class="col-xs-4">
			<ol>
				<li>18 : 9 × 2 =</li>
				<li>3 × 7 : 21 =</li>
			</ol>			
		</div>
		<div class="col-xs-4">
			<ol start="3">
				<li>39 : 13 : 3 =</li>
				<li>6 × 4 × 2 =</li>
			</ol>			
		</div>
	</div>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>18 : 9 × 2 =<br>
					2 × 2 = 4
				</li>
				<li>3 × 7 : 21 =<br>
					21 : 21 = 1
				</li>
				<li>39 : 13 : 3 =<br>
					3 : 3 = 1
				</li>
				<li>6 × 4 × 2 =<br>
					24 × 2 = 48
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="20">
	<h3>Opdracht 20 Bewerkingen</h3>
	<p>
		Optellen is een van de bewerkingen die je gebruikt bij rekenen. Welke andere bewerkingen ken je?
	</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>Aftrekken, vermenigvuldigen, delen, machtsverheffen, worteltrekken</p>
		</div>
	</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieI">
	<h3>Theorie I Meerdere bewerkingen</h3>
	<p>
		Een opgave kan ook uit meer dan twee bewerkingen bestaan. Om overzicht te houden bij het uitwerken, onderstreep je steeds eerst de <b>bewerking</b> met <b>voorrang</b> en werk je met <b>tussenstappen</b> onder elkaar.
	</p>
	<p>
		Hieronder stap voor stap hoe je een opgave berekent als:<br> <nobr>6 × 3 + 4 : 2 - 8</nobr>.
	</p>
	<div class="row">
		<div class="col-xs-2">
			<p>Stap 1</p>
		</div>
		<div class="col-xs-4">
			<p class="geeltje">6 × 3 + 4 : 2 - 8 =</p>
		</div>
		<div class="col-xs-6">
			<p>
				Neem de opgave over in je schrift.<br>
				Zet er een '=' teken achter.
			</p>
		</div>	
	</div>
	<div class="row">
		<div class="col-xs-2">
			<p>Stap 2</p>
		</div>
		<div class="col-xs-4">
			<p class="geeltje"><u>6 × 3</u> + 4 : 2 - 8 =</p>
		</div>
		<div class="col-xs-6">
			<p>
				Onderstreep de bewerking met voorrang.
			</p>
		</div>	
	</div>
	<div class="row">
		<div class="col-xs-2">
			<p>Stap 3</p>
		</div>
		<div class="col-xs-4">
			<p class="geeltje">18  + <u>4 : 2</u> - 8 =</p>
		</div>	
		<div class="col-xs-6">
			<p>
				Bereken het onderstreepte gedeelte, neem de rest over en onderstreep de volgende bewerking die voorrang heeft.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-2">
			<p>Stap 4</p>
		</div>
		<div class="col-xs-4">
			<p class="geeltje"><u>18   +   2</u>  - 8 =</p>
		</div>
		<div class="col-xs-6">
			<p>
				Bereken het onderstreepte gedeelte, neem de rest over en onderstreep de volgende bewerking die voorrang heeft.
			</p>
		</div>	
	</div>
	<div class="row">
		<div class="col-xs-2">
			<p>Stap 5</p>
		</div>
		<div class="col-xs-4">
			<p class="geeltje">20  - 8 = 12</p>
		</div>	
		<div class="col-xs-6">
			<p>
				Bereken het onderstreepte gedeelte, neem de rest over en zet het antwoord achter het laatste ‘=’-teken.
			</p>
		</div>
	</div>
	<p>
		Merk op dat de tussenstappen onder elkaar staan en dat het eindantwoord alleen achter het laatste '='-teken staat.
	</p>
</div>

<div class="tekstblok opdracht" id="21">
	<h3>Opdracht 21 Overnemen en invullen</h3>
	<p>
		Neem over en vul de juiste getallen in op de puntjes. 
	</p>
	<div class="row">
		<div class="col-xs-4">
			<ol>
				<li>
					5 + <u>3 × 2</u> - 8 =<br>
					<u>5 +  …</u> - 8 =<br>
					… - 8 = …	
				</li>
			</ol>				
		</div>
		<div class="col-xs-4">
			<ol start="2">
				<li>
					9 - <u>48 : 16</u> × 2 = <br>
					9 -    <u>…     × 2</u> =<br>
					9 -        …       = … 	
				</li>
			</ol>				
		</div>
	</div>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Is de juiste bewerking steeds echt onderstreept?
			</p>
			<div class="row">
				<div class="col-xs-4">
					<ol>
						<li>
							5 + <u>3 × 2</u> - 8 =<br>
							<u>5 +  6</u> - 8 =<br>
							11       - 8 = 3
						</li>
					</ol>
				</div>
				<div class="col-xs-4">
					<ol start="2">
						<li>
							9 - <u>48 : 16</u> × 2 = <br>
							9 -    <u>3     × 2</u> =<br>
							9 -        6       = 3 
						</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="22">
	<h3>Opdracht 22 Met tussenstappen</h3>
	<p>
		Neem over en bereken met onderstrepen én tussenstappen.
	</p>
	<div class="row">
		<div class="col-xs-4">
			<ol>
				<li>9 × 2 : 3 + 9 =</li>
				<li>8 + 3 × 7 - 2 =</li>
				<li>12 : 4 × 2 - 1 =</li>
				<li>121 - 10 × 11 =</li>
			</ol>
		</div>
		<div class="col-xs-8">
			<ol start="5">				
				<li>60 - 56 : 8 + 2 =</li>
				<li>34 - 17 + 3 × 2 : 6 =</li>
				<li>1068 - 100 × 10 - 9 × 7 =</li>
			</ol>
		</div>
	</div>
	<div class="hider">
<div class="showhide">&rarr;</div>
<div class="antwoord">
<ol>
	<li>
	<u>9 × 2</u> : 3 + 9 =<br>
	<u>18 : 3</u> + 9 =<br>
	6 + 9 = 15
	</li>
	<li>
	8 + <u>3 × 7</u> - 2 =<br>
	<u>8 + 21</u> - 2 =<br>	
	29 - 2 = 27
	</li>
	<li>
	<u>12 : 4</u> × 2 - 1 =<br>
	<u>3 × 2</u> - 1 =<br>
	6 - 1 = 5	
	</li>
	<li>
	121 - <u>10 × 11</u> =<br>
	121 - 110 = 11
	</li>
	<li>
	60 - <u>56 : 8</u> + 2 =<br>
	<u>60 - 7</u> + 2 =<br>	
	53 + 2 = 55	
	</li>
	<li>
	34 - 17 + <u>3 × 2</u> : 6 = <br>
	34 - 17 + <u>6 : 6</u> = <br>
	<u>34 - 17</u> + 1 = <br>
	17 + 1 = 18
	</li>
	<li>
	1068 - <u>100 × 10</u> - 9 × 7 =<br>
	1068 - 1000 - <u>9 × 7</u> =<br>
	<u>1068 - 1000</u> - 63 =<br>
	68 - 63 = 5
	</li>
</ol>
</div>
</div>
</div>

<div class="tekstblok opdracht" id="23">
	<h3>Opdracht 23 Welke bewerkingen?</h3>
	<p>
		Neem over en zet de juiste bewerkingen tussen de getallen zodat het antwoord klopt.
	</p>
	<div class="row">
		<div class="col-xs-4">
			<ol>
				<li>3 … 6 … 3 = 15</li>
				<li>3 … 8 … 3 = 27</li>
			</ol>		
		</div>
		<div class="col-xs-4">
			<ol start="3">
				<li>24 … 4 … 6 = 26</li>
				<li>24 … 4 … 7 = 13</li>
			</ol>
		</div>
	</div>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>3 × 6 - 3 = 15</li>
				<li>3 + 8 × 3 = 27</li>
				<li>24 - 4 + 6 = 26</li>
				<li>24 : 4 + 7 = 13</li>	
			</ol>
		</div>
	</div>
</div>
	
<div class="tekstblok opdracht" id="24">
	<h3>Opdracht 24 Vul bewerkingen in</h3>
	<p>
		Neem over en vul de volgende bewerkingen in: optellen, aftrekken en vermenigvuldigen. Kies ze zo dat je het grootst mogelijke antwoord krijgt, je moet alledrie de bewerkingen een keer gebruiken.<br>
		4 … 2 … 3 … 4 =
	</p>
	<p>
		En nogmaals, maar dan voor het kleinst mogelijke antwoord.<br>
		4 … 2 … 3 … 4 =
	</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				`4 - 2 + 3 &times; 4 = 14`<br>
				`4 - 2 &times; 3 + 4 = 2`<br>
				Of, als je ook negatieve getallen uitkomsten gebruikt:<br>
				`4 + 2 - 3 &times; 4 = -6`
			</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="25">
	<h3>Opdracht 25 @DWO</h3>
	<p>
		Tot nu toe waren de oefeningen vooral met positieve getallen. In de komende DWO activiteiten worden zowel positieve als negatieve getallen gebruikt.
	</p>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module 'Machten en volgorde' en maak:
	</p>
		<ol>
			<li><em>Activiteit 3. Drie getallen optellen en aftrekken</em></li>
			<li><em>Activiteit 4. Optellen en aftrekken, met strafpunten</em></li>
		</ol>
	<p>
		Ga eerst verder met de taak, voordat je de andere activiteiten maakt.
	</p>
</div>
	
<div class="tekstblok theorie vaardigheden" id="theorieJ">
	<h3>Theorie J Machten en volgorde</h3>
	<p>
		Machtsverheffen heeft voorrang boven vermenigvuldigen of delen én optellen of aftrekken.
	</p>
	<div class="row">
		<div class="col-xs-4">
			<p>
				<u>Voorbeeld 1</u><br>
				`9 - 18 : 3^2 =` <br>
				`9 - 18 : 9 = `<br>
				`9 - 2 = 7`	
			</p>
		</div>
		<div class="col-xs-4">
			<p>
				<u>Voorbeeld 2</u><br>
				`3 &times; 4^2 + 5^3 =`<br>
				`3 &times; 16 + 125 = `<br>
				`48 + 125 = 173`
			</p>
		</div>
	   </div>
</div>	

<div class="tekstblok opdracht" id="26">
	<h3>Opdracht 26 Met machten</h3>
	<p>
		Neem over en bereken met onderstrepen én tussenstappen.
	</p>
	<div class="row">
		<div class="col-xs-4">
			<ol>
				<li>
					`4 &times; 2^3 = `
				</li>
				<li>
					`3 - (-2)^4 = `
				</li>
				<li>
					`(-4)^3 : 8 = `
				</li>
			</ol>
		</div>
		<div class="col-xs-8">
			<ol start="4">
				<li>
					`6^2 - 2^5 =`
				</li>
				<li>
					`0^13 - (-1)^93 + (-3)^3 =`
				</li>
				<li>
					`11^2 - 9 - 2^2 = `
				</li>
			</ol>
		</div>
	</div>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<div class="row">
				<div class="col-xs-4">
					<ol>
						<li>
							`4 &times; 2^3 = `<br>
							`4 &times; 8 = 32`
						</li>
						<li>
							`3 - (-2)^4 = `<br>
							`3 - 16 = -13`
						</li>
						<li>
							`(-4)^3 : 8 = `<br>
							`-64 : 8 = -8` 
						</li>
					</ol>
				</div>
				<div class="col-xs-6">
					<ol start="4">
						<li>
							`6^2 - 2^5 =`<br>
							`36 - 32 = 4`
						</li>
						<li>
							`0^13 - (-1)^93 + (-3)^3 =`<br>
							`0 + 1 - 27 = -26`
						</li>
						<li>
							`11^2 - 9 - 2^2 = `<br>
							`121 - 9 - 4 = 108`
						</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>
	
<div class="tekstblok theorie vaardigheden" id="theorieK">
	<h3 id="theorieE">Theorie K Haakjes</h3>
	<p>
		In het verkeer heeft rechts voorrang. Wel zijn er <b>uitzonderingen</b>, bijvoorbeeld bij voorrangswegen of stoplichten, politiewagens met sirene of voetgangers op een zebrapad. Bij het rekenen kun je ook aangeven dat bepaalde bewerkingen toch <b>voorrang</b> hebben boven andere. Dat doe je met <b>haakjes</b>. Bekijk de voorbeelden hieronder.
	</p>
	<div class="row">
		<div class="col-xs-4">
			<p>
				<u>Voorbeeld 1</u><br>
				`6 + 2 × 3 = `<br>
				`6 +    6    = 12`	
			</p>
		</div>
		<div class="col-xs-4">
			<p>
				<u>Voorbeeld 2</u><br>
				`(6 + 2) × 3 =`<br> 
				`8 × 3 = 24`
			</p>
		</div>
	  </div>
	<p>		
		De <b>haakjes</b> om het stukje <code style="color: black">6 + 2</code> geven aan dat je <b>eerst</b> de som van 6 en 2 moet nemen, <b>voordat</b> je gaat vermenigvuldigen met 3.
	</p>
	<p>
		<b>De voorrangsregel op een rij:</b><br>
		1.	Tussen de haakjes;<br>
		2. Machtsverheffen;<br>
		3.	Vermenigvuldigen of delen van links naar rechts;<br>
		4.	Optellen of aftrekken van links naar rechts.
	</p>
	<p class="geeltje">
		Schrijf alle tussenstappen onder elkaar op, onderstreep steeds de bewerking die voorrang heeft en zet het antwoord na het laatste '='-teken.
	</p>
	<div class="row">
		<div class="col-xs-4">
			<p>
				<u>Voorbeeld 1</u><br>
				(<u>5 - 3</u>)× 3<sup>2</sup> =<br>
				2  × <u>3</u><sup>2</sup> = <br>
				2  × 9  = 18
			</p>
		</div>
		<div class="col-xs-6">
			<p>		
				<u>Voorbeeld 2</u><br>
				-6 × (-4 + <u>4</u><sup>2</sup>) : <u>2</u><sup>3</sup> - 8 =<br>
				-6 × (<u>-4 + 16</u>) : 8 - 8 =<br>
				<u>-6 &times; 12</u> : 8 - 8 =<br>
				<u>-72 : 8</u> - 8 =<br>
				9 - 8 = 1
			</p>
		</div>
	</div>
	<p class="geeltje">
		Haakje die uitgewerkt zijn, hoef je niet meer op te schrijven.	
	</p>
</div>
	
<div class="tekstblok opdracht" id="27">
	<h3>Opdracht 27 Met haakjes</h3>
	<p>
		Nogmaals de getallen uit opdracht 24. Weer moet je zo groot of zo klein mogelijk uitkomen.
	</p>
	<p>
		Neem over en vul de volgende bewerkingen in: optellen, aftrekken en vermenigvuldigen. Kies ze zo dat je het grootst mogelijke antwoord krijgt, je moet alledrie de bewerkingen een keer gebruiken. En nu mag je ook haakjes toevoegen.<br>
		4 … 2 … 3 … 4 =
	</p>
	<p>
		En nogmaals, maar dan voor het kleinst mogelijke antwoord.<br>
		4 … 2 … 3 … 4 =
	</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				`(4 - 2 + 3) &times; 4 = 20`<br>
				`4 &times; 2 - (3 + 4) = 1`<br>
				Of, als je ook negatieve getallen uitkomsten gebruikt:<br>
				`4 - (2 &times; (3 + 4) = -10`
			</p>
		</div>
	</div>
</div>
	
<div class="tekstblok opdracht" id="28">
	<h3>Opdracht 28 @Spelletje (niet verplicht)</h3>
	<p>
		Open de applet via de koppeling: <a href="http://henkreuling.nl/applets/24flippo_game.html" target="_blank">24 game</a> en speel het spel. Probeer er 
		minstens vijf goed te hebben.
		<br>
		Let op: het spel begint pas als je op de startknop drukt.	
	</p>
</div>
		
<div class="tekstblok opdracht" id="29">
	<h3>Opdracht 29 Sommen</h3>
	<p>
	Neem over en bereken de volgende opgaven met onderstrepen én tussenstappen onder elkaar.
	</p>
	<div class="row">
		<div class="col-xs-6">
			<ol>
				<li>100 - 7 + 8 × 5 =</li> 
				<li>7 × (1 + 5) = </li>
				<li>5 + 2 × 7 + 0 - 5 =</li>
				<li>100 - (7 + 8) × 5 = </li>
				<li>(37 - 10) : 9 + 2 =</li>
				<li>0 + 4 + (2 × 5) + 5 =</li>
			</ol>
		</div>
		<div class="col-xs-6">
			<ol start="6">
				<li>(0 + 3) + 4 + 0 × 6 =</li>
				<li>7 - 7 + (1 + 4) × 2 - 2 =</li>
				<li>6 × 4 + (4 - 4) - 7 =</li>
				<li>7 × 0 + 1 + 4 + 7 × 0 =</li>
				<li>7 × 2 - 5 × (5 - 4) =</li>
			</ol>
		</div>
	</div>
	
	<div class="hider">
	<div class="showhide">&rarr;</div>
	<div class="antwoord">
	<ol>
		<li>
			100 - 7 + <u>8 × 5</u> =<br>
			<u>100 - 7</u> + 40 =<br>
			93 + 40 = 133
		</li> 
		<li>
			7 × (<u>1 + 5</u>) = <br>
			7 × 6 = 42	
		</li>
		<li>
			5 + <u>2 × 7</u> + 0 - 5 =<br>
			<u>5 + 14</u> + 0 - 5 =<br>
			<u>19 + 0</u> - 5 =<br>
			19 - 5 = 14
		</li>
		<li>
			100 - (<u>7 + 8</u>) × 5 =<br> 
			100 - <u>15 × 5</u> =<br> 
			100 - 75 = 25 
		</li>
		<li>
			(<u>37 - 10</u>) : 9 + 2 =<br>
			<u>27 : 9</u> + 2 =<br>
			3 + 2 = 5
		</li>
		<li>
			0 + 4 + (<u>2 × 5</u>) + 5 =<br>
			<u>0 + 4</u> + 10 + 5 =<br>
			<u>4 + 10</u> + 5 =<br>
			14 + 5 = 19
		</li>
		<li>
			(<u>0 + 3</u>) + 4 + 0 × 6 =<br>
			3 + 4 + <u>0 × 6</u> =<br>
			<u>3 + 4</u> + 0 =<br>
			7 + 0 = 7							
		</li>
		<li>
			7 - 7 + (<u>1 + 4</u>) × 2 - 2 =<br>
			7 - 7 + <u>5 × 2</u> - 2 =<br>
			7 - 7 + 10 - 2 =<br>
			<u>7 - 7</u> + 10 - 2 =<br>
			<u>0 + 10</u> - 2 =<br>
			10 - 2 = 8<br>
		</li>
		<li>
			6 × 4 + (<u>4 - 4</u>) - 7 =<br>
			<u>6 × 4</u> + 0 - 7 =<br>
			<u>24 + 0</u> - 7 =<br>
			24 - 7 = 17<br>
		</li>
		<li>
			<u>7 × 0</u> + 1 + 4 + 7 × 0 =<br>
			0 + 1 + 4 + <u>7 × 0</u> =<br>
			<u>0 + 1</u> + 4 + 0 =<br>
			1 + 4 + 0 = 5
		</li>
		<li>
			7 × 2 - 5 × (<u>5 - 4</u>) =<br>
			<u>7 × 2</u> - 5 × 1 =<br>
			14 - <u>5 × 1</u> =<br>
			14 - 5 = 9							
		</li>
	</ol>
	</div>
	</div>
	</div>
		
<div class="tekstblok theorie vaardigheden" id="theorieL">
	<h3>Theorie L Regels en stappenplan</h3>
	<p>
		<u>De voorrangsregel op een rij</u>:<br>
		1.	tussen de haakjes;<br>
		2. machten;<br>
		3.	vermenigvuldigen of delen van links naar rechts en<br>
		4.	optellen of aftrekken van links naar rechts.
	</p>
	<p>
		<u>Stappenplan</u>:<br>
		1.	schrijf alle tussenstappen onder elkaar op;<br>
		2.	onderstreep steeds de bewerking die voorrang heeft en <br>
		3.	zet het antwoord na het laatste '='-teken.
	</p>
	</div>

<div class="tekstblok opdracht" id="30">
	<h3>Opdracht 30 Machten en volgorde</h3>
	<p>
		Neem over en bereken met tussenstappen onder elkaar.
	</p>
	<div class="row">
		<div class="col-xs-4">
			<ol>
				<li>`(7^3 + 7) : (-5)^2 =`</li>
				<li>`-5^2 : -6^2 =`</li>
			</ol>
		</div>
		<div class="col-xs-8">
			<li>`4 + 3^2 : (2 + 1) =`</li>
				<li>`-3 &#x00B7; (-2)^5 : -4^2 + 6 =`</li>
			</ol>
		</div>
	</div>
		
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>		
					<li>
						`(7^3 + 7) : (-5)^2 =`<br>
						<u>(343 + 7)</u> : 25 =<br>
						350 : 25 = 14
					</li>
					<li>
						`-5^2 : -6^2 =`<br>
						`-25 : -36 = 25/36` 
					</li>
					<li>
						`4 + 3^2 : (2 + 1) =`<br>
						4 + 9 : <u>(2 + 1)</u> =<br>
						4 + <u>9 : 3</u> =<br>
						4 + 3 = 7
					</li>
					<li>
						`-3 &#x00B7; (-2)^5 : -4^2 + 6 =`<br>
						<u>-3 &#x00B7; -32</u> : -16 + 6 =<br>
						<u>96 : -16</u> + 6 =<br>
						-6 + 6 = 0
					</li>
				</ol>
			</div>
		</div>
</div>	

<div class="tekstblok opdracht" id="31">
	<h3>Opdracht 31 @DWO</h3>
	<p>
		Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module 'Machten en volgorde' en maak:
	</p>
		<ol>
			<li><em>Activiteit 5. Rekenvolgorde 1</em></li>
			<li><em>Activiteit 6. Rekenvolgorde 2</em></li>
			<li><em>Activiteit 7. Rekenvolgorde 3</em></li>
		</ol>
</div>

<div class="tekstblok theorie vaardigheden">
	<h3>Samenvatting volgorde regels</h3>
	<p>
		Bij rekenen gelden de volgende voorrangsregels:
	</p>
	<aside class="tekstballon_theorie" style="width: 220px !important">
		`7-(12-8)^2 : 2=`<br>
		`7-4^2 :2 =`<br>
		`7-16 :2 =`<br>
		`7 - 8 = -1`
	</aside>
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
	<p>
		Vermenigvuldigen en delen zijn even belangrijk, werk van links naar rechts. Hetzelfde geldt voor optellen en aftrekken.
	</p>
</div>


<div class="tekstblok opdracht" id="proeftoets">
	<h3>Proeftoets</h3>
	<p>
		Ga naar de map <a href="https://drive.google.com/a/vathorstcollege.nl/folderview?id=0B-EzZiYS_HciOW5CTldLNFNUNXc&usp=sharing">Proeftoetsen leerjaar 1 Wiskunde123</a> en open daar de juiste proeftoets.
	</p>
</div>



</div><!-- /de taak zelf -->

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

            







