<?php 
	//defineer titel
	$taaknaam ="Machten en wortels";
?>



<?php
	//Definieer sidebar
	$doorverwijzingen = array(
      '#inleiding' => 'Inleiding',
	  '#theorieA' => 'Kwadraten',
      '#theorieB' => 'Kwadraat van negatieve getallen',
      '#theorieC' => 'Machten',
      '#theorieD' => 'Volgorde regels',
      '#theorieE' => 'Machten van negatieve getallen',
      '#theorieF' => 'Wortels',
      '#theorieG' => 'Wortels op de getallenlijn',
      '#theorieH' => 'Wortels met rekenmachine',
      '#theorieI' => 'Wortels in volgorde',
      '#theorieJ' => 'Volgorde regels',
      '#theorieK' => 'Exact en benaderen',
      '#theorieL' => 'Wortels herleiden I',
      '#theorieM' => 'Wortels herleiden II',
      '#proeftoets' => 'Proeftoets');                                                      
?>


<title>Leerjaar 2 | <?php echo $taaknaam; ?></title>


<div class="row">
	<div class="col-xs-7">
	
	</div>
	<div class="col-xs-5">
	
	</div>
</div>


<div class="taakinhoud">

<div class="tekstblok theorie vaardigheden" id="inleiding">
	<h3>Inleiding</h3>

	<div class="row">
		<div class="col-xs-7">
			<p>
				Deze taak gaat over machten en wortels. Een bijzondere macht ken je al: het kwadraat. 	Net als vermenigvuldigen en delen, zijn wortel en kwadraat ook elkaars tegengestelde.
			</p>
			<p>
				Ook leer je exacte uitkomsten bepalen en het herleiden van wortels. In deze taak gebruik je de rekenmachine voor het benaderen van uitkomsten.
			</p>
		</div>
		<div class="col-xs-5">
			<img src="../afbeeldingen/vaardigheden_leerjaar_2/Wortel.gif" alt="Wortel"/>
		</div>
	</div>
	
</div>

<div class="tekstblok opdracht" id="1">
	<h3>Opdracht 1 Volgorde</h3>
	<!-- bron: Getal en ruimte 2vmbo-t/havo deel 1 eerste druk 2010, blz. 8 -->
	<p>
		Neem over en reken uit met behulp van tussenstappen onder elkaar.
	</p>
	<div class="row">
		<div class="col-md-4">
			<ol>
				<li>
					`15 - 3 * 4 -3`
				</li>
				<li>
					`(15 - 3) * 4 -3`
				</li>
				<li>
					`(15 - 3) * (4 -3)`
				</li>
			</ol>
		</div>
		<div class="col-xs-4">
			<ol start="4">
				<li>
					`18 + 24 : (29 - 27) * 3`
				</li>
				<li>
					`(18 + 24) : (29 - 27) * 3`
				</li>
				<li>
					`(18 + 24) : 29 - 27 * 3`
				</li>
			</ol>		
		</div>
	</div>

		
	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Let bij het nakijken op: overnemen, tussenstappen en onder elkaar werken.
			</p>
			<div class="row">
					<div class="col-md-4">
						<ol class="breuken">
							<li>
								`15 - 3 * 4 - 3 =`<br>
								`15 - 12 - 3 =`<br>
								`3 - 3 = 0`
							</li>
							<li>
								`(15 - 3) * 4 -3 =` <br>
								`12 * 4 -3 =` <br>
								`48 - 3 = 45`							
							</li>
							<li>
								`(15 - 3) * (4 -3) =`<br>
								`12 * (4 -3) =`<br>
								`12 * 1 = 12`
							</li>
						</ol>
					</div>
					<div class="col-xs-4">
						<ol start="4" class="breuken">
							<li>
								`18 + 24 : (29 - 27) * 3 =`<br>
								`18 + 24 : 2 * 3 =`<br>
								`18 + 36 = 54`<br>
							</li>
							<li>
								`(18 + 24) : (29 - 27) * 3 =` <br>
								`42 : 2 * 3 = `<br>
								`21 * 3 = 63` <br>
							</li>
							<li>
								`(18 + 24) : 29 - 27 * 3 =`<br>
								`42 : 29 - 81 =`<br>
								`42/29 - 2349/29= - 2307/29 = -79 16/29`
							</li>
						</ol>
					</div>
				</div>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="2">
	<h3>Opdracht 2 Volgorde</h3>
	<!-- bron: Getal en ruimte 2vmbo-t/havo deel 1 eerste druk 2010, blz. 8 -->
	<p>
		Neem over en reken uit met behulp van tussenstappen onder elkaar.
	</p>
	<ol class="breuken">
		<li>
			`(10+15 * 2)/(4*5) + 20`
		</li>
		<li>
			`(48:(2 * 3) * 5)/(12 + 8) + 20`
		</li>
		<li>
			`(64 + 4 * (5-3))/(2 * 18)`  `+ (14-10) * 3`
		</li>
	</ol>
		
		<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
					Let bij het nakijken er op of je de opgaven steeds netjes overschrijft. Je mag per tussenstap meerdere bewerkingen uitvoeren, mits dit mag volgens de rekenregels.
			</p>
			<ol class="breuken">
				<li>
					`(10+15 * 2)/(4*5) + 20 =`<br>
					`40/20 + 20 =`<br>
					`2 + 20 = 22`
				</li>
				<li>
					`(48:(2 * 3) * 5)/(12 + 8) + 20 =`<br>
					`(48:6 * 5)/20 + 20 =`<br>
					`40/20 + 20 = 22`<br>
				</li>
				<li>
					`(64 + 4 * (5-3))/(2 * 18)`  `+ (14-10) * 3 =`<br>
					`(64 + 4 * 2)/36`  `+ 4 * 3 =`<br>
					`(64 + 8)/36`  `+ 12 =`<br>
					`2 + 12 = 14`<br>
				</li>
			</ol>
		</div>
		</div>
</div>

<div class="tekstblok opdracht" id="3">
	<h3>Opdracht 3 Vierkanten met zijden</h3>
	<div class="row">
		<div class="col-xs-5">
			<p>
				Bereken van elk van de drie vierkanten de oppervlakte.	
			</p>
		</div>
		<div class="col-xs-7">
			<p class="geeltje">
				Oppervlakte vierkant = zijde * zijde<br>
				De zijden van een vierkant zijn even lang.	
			</p>			
		</div>
	</div>
	<img src="../afbeeldingen/vaardigheden_leerjaar_2/drie_vierkanten.png" alt="drie_vierkanten" />
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Blauw: `3 * 3 = 9` <em>cm</em><sup>2</sup> <br>
				Groen: `4 * 4 = 16` <em>cm</em><sup>2</sup><br>
				Geel: `5 * 5 = 25` <em>cm</em><sup>2</sup>
			</p>
			<p>
				Alleen antwoorden met juiste eenheid zijn correct. Let er op dat de eenheid een oppervlakte-maat is.
			</p>
		</div>
		</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieA">
	<h3>Theorie A Kwadraten</h3>
	<div class="row">
		<div class="col-xs-5">
			<p>
				De oppervlakte van een vierkant is het kwadraat van zijn zijde.
			</p>
			<p>
				Het kwadraat van een getal is het getal met zichzelf vermenigvuldigd.<br>
				Het kwadraat van `7` is `49`, want `7 * 7` is `49`.<br>
				In plaats van `7 * 7` kun je `7^2` schrijven.
			</p>
		</div>
		<div class="col-xs-7">
			<img src="../afbeeldingen/vaardigheden_leerjaar_2/vierkant_5x5_theorie.png" alt="vierkant_5x5_theorie"/>
		</div>
	</div>	
</div>

<div class="tekstblok opdracht" id="4">
	<h3>Opdracht 4 Tabel met kwadraten</h3>
	<p>
		Neem over en vul in.
	</p>
	<div class="table-responsive verhouding">
		<table class="verhouding">
			<tbody>
				<tr class="borderbottom">
					<td><em>getal</em></td>
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
					<td><em><em>kwadraat</em></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>			
			</tbody>
		</table>
	</div>

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

<div class="tekstblok opdracht" id="5">
	<h3>Opdracht 5 Kwadraat van `-6`</h3>
	<p>
		Achmed berekent het kwadraat van `-6`.<br>
		Hij doet `-6 * -6 = 36`.<br>
		"Dat is gek," denkt hij, "mijn antwoord is positief!"<br> 
		Heeft hij het goed gedaan?
	</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Hij heeft het goed gedaan, want het kwadraat van een getal is het getal met zichzelf vermenigvuldigen 	in dit geval dus `-6 * -6` en het product van een negatief getal en een negatief getal is positief, zie <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=v_1thv_rekenen_met_negatieve_getallen">Rekenen met negatieve getallen</a>.
			</p>
		</div>
		</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieB">
	<h3>Theorie B Kwadraat van negatieve getallen</h3>
	<p>
		Bij negatieve getallen kan er verwarring ontstaan als je met kwadraten werkt.
		<br>
		Gebruik daarom <b>haakjes</b> bij het kwadraat van een negatief getal.
	</p>	
	<p>
		Het kwadraat van `-4` is `16`, want `-4 * -4= 16`.<br>
		Het kwadraat van `-4` schrijf je als `(-4)^2`.
	</p>
	<p>
		Let op de verschillen in notatie en betekenis als je wel of geen haakjes gebruikt.
	</p>
	<table class="table">
		<tbody>
			<tr>
				<td>
					<u>notatie:</u>
				</td>
				<td>
					<u>betekenis:</u>
				</td>
			</tr>
			<tr>
				<td>
					`(-5)^2 = -5 * -5 = 25`
				</td>
				<td>
					<em>Het kwadraat van min 5.</em>
				</td>
			</tr>
			<tr>
				<td>
					`-5^2 = - 5 * 5 = -25`
				</td>
				<td>
					<em>Min het kwadraat van 5.</em>
				</td>
			</tr>
		</tbody>
	</table>	
</div>

<div class="tekstblok opdracht" id="6">
	<h3>Opdracht 6 Product</h3>
	<p>
		Herschrijf als product en reken uit.
	</p>
	<div class="row">
		<div class="col-xs-3">
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
		<div class="col-xs-3">
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
		<div class="col-xs-6">
			<p class="geeltje">
				`3^2 = 3 * 3 = 9`		
				<br>
				`(-3)^2 =-3 * -3 = 9`
				<br>
				`-3^2 = - 3 * 3 = -9 `
			</p>
		</div>
	</div>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<div class="row">
				<div class="col-xs-6">
					<ol>
						<li>
							`10^2 = 10 * 10 = 100`
						</li>
						<li>
							`3^2 = 3 * 3 = 9`
						</li>
						<li>
							`(-2)^2 = -2 * -2 = 4`
						</li>
					</ol>
				</div>
					<div class="col-xs-6">
						<ol start="4">
							<li>
			s					`(-5)^2 = -5 * -5 = 25`
							</li>
							<li>
								`-7^2 = -7 * 7 = -49`
							</li>
							<li>
								`-(-11)^2 = - (-11 * -11) = - 121`
							</li>
						</ol>
					</div>
				</div>
		</div>
		</div>
</div>

<div class="tekstblok opdracht" id="7">
	<h3>Opdracht 7 Met en zonder haakjes</h3>
	<p>
		Leg het verschil uit tussen:
		<br>
		`(-8)^2` en		`-8^2`
	</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<p>
			`(-8)^2` betekent het kwadraat van `-8`, dus `-8 * -8 = 64`.<br>
			`-8^2` betekent min het kwadraat van `8`, dus `-(8 * 8)= -64`.
		</p>
		</div>
		</div>
</div>

<div class="tekstblok opdracht" id="8">
	<h3>Opdracht 8 Kwadraten</h3>
	<p>
		Neem over en reken uit.
	</p>
		<table>
			<tr>
				<td width="300">
					<ol>
						<li>
							`6^2`
						</li>
						<li>
							`(-7)^2`
						</li>
						<li>
							`-5^2`
						</li>
					</ol>
				</td>

				<td width="300">
					<ol start="4">
						<li>
							`(-9)^2`
						</li>
						<li>
							`-9^2`
						</li>
						<li>
							`-(-3)^2`
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
								`6^2 = 6 * 6 = 36`
							</li>
							<li>
								`(-7)^2 = -7 * -7 = 49`
							</li>
							<li>
								`-5^2 = -(5 * 5) = -25`
							</li>
						</ol>
					</td>
					<td width="300">
						<ol start="4">
							<li>
								`(-9)^2 = -9 *  -9 = 81`
							</li>
							<li>
								`-9^2 = -(9 * 9) = -81`
							</li>
							<li>
								`-(-3)^2 = -(-3 * -3) = -9`
							</li>
							</ol>
					</td>
				</tr>
			</table>
		</div>
		</div>
</div>

<div class="tekstblok opdracht" id="9">
	<h3>Opdracht 9 Rekenmachine</h3>
	<div class="row">
		<div class="col-xs-5">
			<p>
				Neem over en reken uit met behulp van je rekenmachine. Rond af op twee decimalen.
			</p>
			<ol>
				<li>
					`0`,`20^2`
				</li>
				<li>
					`3`,`17^2`
				</li>
				<li>
					`-2`,`04^2`
				</li>
				<li>
					`(-134`,`09)^2`
				</li>
				<li>
					`-0`,`07^2`
				</li>
				<li>
					`9`,`99^2`
				</li>
			</ol>
		</div>
		<div class="col-xs-7">
			<p class="geeltje">
				Gebruik de knop <span class="formula"> `x^2` </span> op je rekenmachine.<br>
				<img class="img-small" src="../afbeeldingen/vaardigheden_leerjaar_2/texas_en_casio.png" alt="texas_en_casio" />
			</p>
		</div>
	</div>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`0`,`20^2 = 0`,`04`
				</li>
				<li>
					`3`,`17^2 = 10`,`0489 &approx; 10`,`05`
				</li>
				<li>
					`-2`,`04^2 = -4,1616 &approx; -4,16`
				</li>
				<li>
					`(-134`,`09)^2 = 17.980`,`1281 &approx; 17.980`,`13`
				</li>
				<li>
					`-0`,`07^2 = 0`,`0049 &approx; 0`,`00`
				</li>
				<li>
					`9`,`99^2 = 99`,`8001 &approx; 99`,`80 `
				</li>
			</ol>
		</div>
		</div>
</div>

<div class="tekstblok opdracht" id="10">
	<h3>Opdracht 10 Invullen</h3>
	<p>
		Neem over en vul in.
	</p>
	<div class="row">
		<div class="col-xs-4">
			<ol>
				<li>
					`3 * ... = 9`
				</li>
				<li>
					`4 * ... = 16`
				</li>
				<li>
					`6 * ... = 36`
				</li>
			</ol>
		</div>
		<div class="col-xs-4">
			<ol start="4">
				<li>
					`...^2 = 9`
				</li>
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
			<div class="row">
				<div class="col-xs-4">
					<ol>
						<li>
							`3 * 3 = 9`
						</li>
						<li>
							`4 * 4 = 16`
						</li>
						<li>
							`6 * 6 = 36`
						</li>
					</ol>
				</div>
				<div class="col-xs-4">
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
				</div>
			</div>
		</div>
		</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieC">
	<h3>Theorie C Machten</h3>
	<div class="row">
		<div class="col-xs-6">
			<p>
				Het product van gelijke <b>factoren</b> is een <b>macht</b>:<br>
				`3 * 3 * 3 * 3 = 3^4`<br>
				`3^4` betekent `3` tot de macht `4`.
			</p>	
			<p>
			   `3^2` en `3^7` noem je ook machten van `3`, <br>
			   omdat het <b>grondtal</b> `3` is.<br>
			   De `2` en de `7` zijn hier de <b>exponenten</b>.
			</p>
			<p>
				Een kwadraat is ook een macht: `3^2` betekent `3` tot de macht `2`.
			</p>		
		</div>
		<div class="col-xs-6">
			<p class="geeltje">
				<img src="../afbeeldingen/vaardigheden_leerjaar_2/macht.png" alt="macht" />
			</p>
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="11">
	<h3>Opdracht 11 Machten</h3>
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

<div class="tekstblok opdracht" id="12">
	<h3>Opdracht 12 Exponenten</h3>
	<p>
		Neem over en vul de exponenten in:
	</p>
	<ol>
		<li>
			`3 * 3 = 3^...`
		</li>
		<li>
			`3 * 3 * 3 = 3^...`
		</li>
		<li>
			`3 * 3 * 3 * 3 * 3 * 3 = 3^...`
		</li>
		<li>
			`3 * 3 * 3 * 3 * 3 * 3 * 3 * 3 * 3 * 3 * 3 = 3^...`
		</li>
	</ol>	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`3 * 3 = 3^2`
				</li>
				<li>
					`3 * 3 * 3 = 3^3`
				</li>
				<li>
					`3 * 3 * 3 * 3 * 3 * 3 = 3^6`
				</li>
				<li>
					`3 * 3 * 3 * 3 * 3 * 3 * 3 * 3 * 3 * 3 * 3 = 3^11`
				</li>
			</ol>
		</div>
	</div>		
</div>

<div class="tekstblok opdracht" id="13">
	<h3>Opdracht 13 Machten</h3>
	<p>
		Neem over en vul in:
	</p>
	<ol>
		<li>
			`5 * ... = 5^2`
		</li>
		<li>
			`... * ... * ... = 6^3`
		</li>
		<li>
			`8 * 8 * 8 * 8 = ...^4`
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`5 * 5 = 5^2`
				</li>
				<li>
					`6 * 6 * 6 = 6^3`
				</li>
				<li>
					`8 * 8 * 8 * 8 = 8^4`
				</li>
			</ol>
		</div>
	</div>		
</div>

<div class="tekstblok opdracht" id="14">
	<!-- bron: Moderne Wiskunde 1a vwo 2012, blz. 117 -->
	<h3>Opdracht 14 Machten</h3>
	<p>
		Neem de tabel over en vul deze verder in. Je mag je rekenmachine gebruiken. Dus niet je telefoon! Op deze manier leer je je rekenmachine goed kennen.
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
				`2^9`
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
						`2^9`
					</td>
					<td>
						`2`
					</td>
					<td>
						`9`
					</td>
					<td>
						`512`
					</td>
					<td>
						twee tot de macht negen
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
	<h3>Theorie D Volgorde regels</h3>
	<p>
		Bij rekenen gelden de volgende voorrangsregels:
	</p>
	<div class="row">
		<div class="col-md-7">
			<ol class="numbers">
				<li>
					binnen de haakjes;
				</li>
			</ol>
		</div>
		<div class="col-md-5">
			<p class="geeltje">
				`7-(12-8)^2 : 2=`
			</p>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-7">
			<ol class="numbers" start="2">
				<li>
					machtsverheffen;
				</li>
			</ol>
		</div>
		<div class="col-md-5">
			<p class="geeltje">
				`7-4^2 :2 =`
			</p>
		</div>
	</div>				
	<div class="row">
		<div class="col-md-7">
			<ol class="numbers" start="3">
				<li>
					vermenigvuldigen en delen;
				</li>
			</ol>
		</div>
		<div class="col-md-5">
			<p class="geeltje">
				`7-16 :2 =`
			</p>
		</div>
	</div>		
	<div class="row">
		<div class="col-md-7">
			<ol class="numbers" start="4">
				<li>
					optellen en aftrekken.
				</li>
			</ol>
		</div>
		<div class="col-md-5">
			<p class="geeltje">
				`7 - 8 = -1`
			</p>
		</div>
	</div>			
	<p>
		Vermenigvuldigen en delen zijn even belangrijk, werk van links naar rechts. Hetzelfde geldt voor optellen en aftrekken.
	</p>
</div>

<div class="tekstblok opdracht" id="15">
	<h3>Opdracht 15 Sommen</h3>
	<p>Bereken met tussenstappen onder elkaar, zonder rekenmachine.</p>
	<div class="row">
		<div class="col-md-4">
			<ol>
				<li>
					`4 * 2^3 = `
				</li>
				<li>
					`3 - 2^4 = `
				</li>
				<li>
					`(6-3)^3 : 9 = `
				</li>
			</ol>
		</div>
		<div class="col-md-4">
			<ol start="4">
				<li>
					`6^2 - 2^5 =`
				</li>
				<li>
					`0^13 - 1^93 + 3^3 =`
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
				<div class="col-md-4">
					<ol>
						<li>
							`4 * 2^3 = `<br>
							`4 * 8 = 32`
						</li>
						<li>
							`3 - 2^4 = `<br>
							`3 - 16 = -13`<br>
						</li>
						<li>
							`(6-3)^3 : 9 = `<br>
							`3^3 : 9 =` <br>
							`27 : 9 = 3`
						</li>
					</ol>
				</div>
				<div class="col-md-4">
					<ol start="4">
						<li>
							`6^2 - 2^5 =` <br>
							`36 - 32 = 4`
						</li>
						<li>
							`0^13 - 1^93 + 3^3 =`<br>
							`0 - 1 + 27 = 26`
						</li>
						<li>
							`11^2 - 9 - 2^2 = `<br>
							`121 - 9 - 4 = `<br>
							`102 - 4 = 108`
						</li>
					</ol>
				</div>
			</div>
			
		</div>
	</div>
</div>

<div class="tekstblok theorie vaardigheden" id"theorieE">
	<h3>Theorie E Machten van negatieve getallen</h3>
	<p>
		Bij het kwadraat en andere <b>machten van negatieve getallen</b> gebruik je altijd <b>haakjes</b>.
	</p>
	<table class="table">
		<tr>
			<td>	
				De tweede macht van `-4` is:
			</td>
			<td>
				`(-4)^2 = -4 * -4 = 16`
			</td>
		</tr>
		<tr>
			<td>
				De derde macht van `-4` is:
			</td>
			<td>
				`(-4)^3 = -4 * -4 * -4 = -64`
			</td>
		</tr>
	</table>
	<p class="geeltje">
		Let op dat een oneven macht van een negatief getal negatief is.	
	</p>
</div>

<div class="tekstblok opdracht" id="16">
	<h3>Opdracht 16 Machten uit het hoofd</h3>
	<p>
		Bereken zonder rekenmachine.
	</p>
	<div class="row">
		<div class="col-md-4">
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
		<div class="col-md-4">
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
			<div class="row">
				<div class="col-md-6">
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
						</li>
					</ol>
				</div>
				<div class="col-md-6">
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
				</div>
			</div>
		</div>
	</div>
</div>
		
<div class="tekstblok opdracht" id="17">
	<h3>Opdracht 17 Positief of negatief</h3>
	<p>
		Schrijf op of de uitkomst positief of negatief is.
	</p>
	<div class="row">
		<div class="col-md-4">
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
		<div class="col-md-4">
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
			<div class="row">
				<div class="col-md-4">
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
				</div>
				<div class="col-md-4">
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
				</div>
			</div>
		</div>
	</div>		
</div>

<div class="tekstblok opdracht" id="18">
	<h3>Opdracht 18 Machten uitrekenen</h3>
	<p>Neem over en bereken zonder rekenmachine.</p>
	<ol>
		<li>De macht met exponent 4 en grondtal 3.</li>
		<li>De derde macht van -3.</li>
		<li>-2<sup>4</sup> =</li>
		<li>(-2)<sup>4</sup> =</li>
		<li>-1<sup>4</sup> =</li>
		<li>(-1)<sup>39</sup> =</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>3<sup>4</sup> = 81</li>
				<li>(-3)^3 = -27</li>
				<li>- 2 x 2 x 2 x 2 = -16</li>
				<li>-2 x -2 x -2 x -2 = 16</li>
				<li>- 1 x 1 x 1 x 1 = -1</li>
				<li> -1, want de macht is een oneven getal. </li>
			</ol>	
		</div>
	</div>		
</div>
	
<div class="tekstblok opdracht" id="19">
	<h3>Opdracht 19 Machten en volgorde</h3>
	<p>
		Neem over en bereken met tussenstappen onder elkaar.
	</p>
		<ol>
			<li>(7<sup>3</sup> + 7) : (-5)<sup>2</sup> =</li>
			<li>-5<sup>2</sup> : -6<sup>2</sup> =</li>
			<li>4 + 3<sup>2</sup> : (2 + 1) =</li>
			<li>-3 x (-2)<sup>5</sup> : -4<sup>2</sup> + 6 =</li>
		</ol>
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
							<mrow><mn>25</mn></mrow>
							<mrow><mn>36</mn></mrow>
						</mfrac>
						</math>
					</li>
					<li>4 + <u>3<sup>2</sup></u> : (2 + 1)<br>
						4 + 9 : <u>(2 + 1)</u><br>
						4 + <u>9 : 3</u><br>
						4 + 3 = 7</li>
					<li>-3 x <u>(-2)<sup>5</sup></u> : -<u>4<sup>2</sup></u> + 6<br>
						<u>-3 x -32</u> : -16 + 6<br>
						<u>96 : -16</u> + 6<br>
							-6 + 6 = 0</li>
				</ol>
			</div>
		</div>
</div>		

<div class="tekstblok theorie vaardigheden" id="theorieF">
	<h3>Theorie F Wortels</h3>
	<aside class="tekstballon_theorie" style="width: 150px !important">
	<p>
		`sqrt9 = 3`		
		<br>
		want
		<br>
		`3^2 = 9`
	</p>
	</aside>
	<p>
		De wortel is het tegenovergestelde van het kwadraat.
	</p>
	<p>
		Als je vraagt: "Welk getal in het <b>kwadraat</b> is `25`?"<br>
		Kun je ook vragen: "Welk getal is de <b>wortel</b> van `25`?"<br>
	</p>
	<p>
		De <b>wortel</b> van `49` is `7`, want het <b>kwadraat</b> van `7` is `49`.
	<br>
		In plaats van wortel `49` schrijven we `sqrt49`.
	</p>
</div>

<div class="tekstblok opdracht" id="20">
	<h3>Opdracht 20 Vierkanten met oppervlakte</h3>
	<p>
		Zoek uit hoe lang de zijde van elk vierkant is. Bedenk dat de zijden van een vierkant even lang zijn.
	</p>
		<img src="../afbeeldingen/vaardigheden_leerjaar_2/4_vierkanten.png" alt="4_vierkanten" width="500" height="" />
		<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Het vierkant met oppervlakte 4 cm<sup>2</sup> heeft zijden van `sqrt(4)=2` cm.<br>
				Het vierkant met oppervlakte 9 cm<sup>2</sup> heeft zijden van `sqrt(9)=3` cm.<br>
				Het vierkant met oppervlakte 16 cm<sup>2</sup> heeft zijden van `sqrt(16)=4` cm.<br>
				Het vierkant met oppervlakte 25 cm<sup>2</sup> heeft zijden van `sqrt(25)=5` cm.
			</p>
		</div>
		</div>
</div>

<div class="tekstblok opdracht" id="21">
	<h3>Opdracht 21 Tabel met wortels</h3>
	<p>
		Neem over en vul in.
	<table class="verhouding" width="200">
		<tr>
			<td width="150"><em>getal</em></td>
			<td>1</td>
			<td>4</td>
			<td>9</td>
			<td>16</td>
			<td>25</td>
			<td>36</td>
			<td>49</td>
			<td>64</td>
		</tr>
		<tr>
			<td width="150"><em>wortel</em></td>
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
	</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<table class="verhouding" width="200">
				<tr>
					<td width="150"><em>getal</em></td>
					<td>1</td>
					<td>4</td>
					<td>9</td>
					<td>16</td>
					<td>25</td>
					<td>36</td>
					<td>49</td>
					<td>64</td>
				</tr>
				<tr>
					<td width="150"><em>wortel</em></td>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
					<td>7</td>
					<td>8</td>
				</tr>
			</table>
		</div>
		</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieG">
	<h3>Theorie G Wortels op de getallenlijn</h3>
	<p>
		In de vorige opdracht was de uitkomst van de wortel steeds een heel getal. Je kunt zeggen: "De wortels komen mooi uit."<br>		
		Maar dat geldt voor de meeste wortels niet.
	</p>
	<p>
		Hieronder zie je een stukje van een getallenlijn.
	<img class="img-responsive" src="../afbeeldingen/vaardigheden_leerjaar_2/wortelgetallenlijn.png" alt="wortelgetallenlijn" />
	</p>
	<p>
		De wortels van `1`, `4` en `9` komen mooi overeen met de getallen `1`, `2` en `3`. <br>
		Want `sqrt1 = 1`, `sqrt4 = 2` en `sqrt9 = 3`
	</p>
	<p>
		De andere wortels komen niet zo mooi terecht. Gelukkig kun je wel snel zien tussen welke getallen een wortel uitkomt.
		<br>
		Neem `sqrt2`, dat ligt tussen `sqrt1` en `sqrt4`, dus de uitkomst van `sqrt2` ligt tussen `1` en `2`. 
		<br>
		Het kunnen plaatsen van een wortel op de getallenlijn helpt je bij het begrijpen en kunnen toepassen van wortels.
	</p>
</div>

<div class="tekstblok opdracht" id="22">
	<h3>Opdracht 22 Tussen twee helen</h3>
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

<div class="tekstblok opdracht" id="23">
	<h3>Opdracht 23 Wortels op getallenlijn (uitdaging)</h3>
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
				<img src="../afbeeldingen/vaardigheden_leerjaar_2/uitwerking_wortels_getallenlijn.png" alt="uitwerking_wortels_getallenlijn" width="600" height="" /><br>
				De wortels 10 t/m 80 liggen tussen 3 en 9.
			</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="24">
	<h3>Opdracht 24 Wortels tussen helen (uitdaging)</h3>
	<div class="row">
		<div class="col-md-8">
			<p>
				Bepaal tussen welke twee hele getallen de wortels liggen.<br>
				Schrijf je antwoord als volgt op: 	`2 &lt; sqrt6 &lt; 3`
			</p>		
			<div class="row">
				<div class="col-md-6">
						<ol>
							<li>
								`sqrt46`
							</li>
							<li>
								`sqrt18`
							</li>
						</ol>
					</div>
					<div class="col-md-6">
						<ol start="3">
							<li>
								`sqrt29`
							</li>
							<li>
								`sqrt35`
							</li>
						</ol>
					</div>
			</div>
		</div>					
		<div class="col-xs-4">
			<p class="geeltje">
				<span class="formula">`&lt;`</span> betekent <em>kleiner dan</em><br>	
				`1 &lt; sqrt3 &lt; 2` betekent:<br>
				`1` is kleiner dan `sqrt3` én <br>
				`sqrt3` is kleiner dan `2`.
			</p>
		</div>
	</div>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
					<li>
						`6 &lt; sqrt46 &lt; 7`, want `sqrt36=6` en `sqrt49=7`
					</li>
					<li>
						`4 &lt; sqrt18 &lt; 5`, want `sqrt16=4` en `sqrt25=5`
					</li>
					<li>
						`5 &lt; sqrt29 &lt; 6`, want `sqrt25=5` en `sqrt36=6`
					</li>
					<li>
						`5 &lt; sqrt35 &lt; 6`, want `sqrt25=5` en `sqrt36=6`
					</li>
				</ol>
		</div>
	</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieH">
	<h3>Theorie H Wortels met rekenmachine</h3>
	<div class="row">
		<div class="col-xs-5">
			<p>
				Veel wortels kun je niet uit het hoofd berekenen.<br>
				Gebruik dan een rekenmachine.
			</p>
			<p>
				Rond af op twee decimalen achter de komma, tenzij anders wordt gevraagd.<br>
				`sqrt6 approx 2,45`
			</p>
			<p>
				Hiernaast stap voor stap hoe je de wortel van 6 met je rekenmachine kunt uitrekenen.
			</p>		
		</div>
		<div class="col-xs-7">
		<p class="geeltje">
			<img src="../afbeeldingen/vaardigheden_leerjaar_2/wortel_texas_casio.png" alt="wortel_texas_casio" />
		</p>
		</div>
	</div>	
</div>

<div class="tekstblok opdracht" id="25">
	<h3>Opdracht 25 Met rekenmachine</h3>
	<p>
		Bereken met behulp van je rekenmachine, rond af op 2 decimalen. Vragen over afronden? Kijk bij bijvoorbeeld op <a href="http://www.beterrekenen.nl/website/index.php?pag=247">Beterrekenen.nl</a> voor uitleg.
	</p>
	<div class="row">
		<div class="col-md-2">
			<ol>
				<li>
					`sqrt2 &approx;`
				</li>
				<li>
					`sqrt3 &approx;`
				</li>
				<li>
					`sqrt5 &approx;`
				</li>
			</ol>
		</div>
		<div class="col-xs-2">
			<ol start="4">
				<li>
					`sqrt6 &approx;`
				</li>
				<li>
					`sqrt10 &approx;`
				</li>
				<li>
					`sqrt15 &approx;`
				</li>
			</ol>		
		</div>
		<div class="col-xs-7">
			<p class="geeltje">
				<span class="formula">&approx;</span> betekent <em>ongeveer</em><br>
				`sqrt7 &approx; 2`,`65` betekent: <em>"Wortel 7 is ongeveer 2,65."</em>
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
							`sqrt2 = 1`,`41421... approx 1`,`41`
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

<div class="tekstblok opdracht" id="26">
	<h3>Opdracht 26 Tafelkleed</h3>
	<div class="row">
		<div class="col-xs-6">
			<p>
				Iris heeft voor haar kleine zusje een vierkant tapijt uitgezocht. Het is beschikbaar in twee formaten: <nobr>een van 7 m<sup>2</sup> en een van 8 m<sup>2</sup>.</nobr>
			</p>
			<p>
				Toon aan met behulp van een berekening dat het grotere formaat ongeveer 18 centimeter langer en breder is dan het kleinere formaat.
			</p>		
		</div>
		<div class="col-xs-6">
			<img src="../afbeeldingen/vaardigheden_leerjaar_2/tapijt.jpg" alt="tapijt" />
		</div>
	</div>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Weten: bij vierkant alle zijden gelijk, dus lengte = breedte.<br>
				Aanpak: eerst de bijbehorende zijden berekenen, dan het verschil uitrekenen.<br>
				`sqrt 7 &approx; 2`,`646` `m` en `sqrt 8 &approx; 2`,`828` `m`<br>
				`2`,`828 - 2`,`646 = 0`,`182` `m` `&approx; 18` `cm`
			</p>
			<p>
				In één keer uitrekenen kan ook:<br>
				`sqrt8 - sqrt7 &approx; 0`,`18` `m` `= 18` `cm`
			</p>
			<p>
				Jouw antwoord is goed als je een berekening geeft met uitkomst én de juiste eenheden.
			</p>
		</div>
		</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieI">
	<h3>Theorie I Wortels in volgorde</h3>
	<p>
		<b>Worteltrekken</b> heeft net als <b>machtsverheffen</b> voorrang op de andere bewerkingen.<br> Dus worteltrekken komt voor vermenigvuldigen, delen, optellen en aftrekken.
	</p>
	<p>Hieronder wordt stap voor stap voorgedaan hoe je een opgave als<br> `8 × 2^3 + 4 =` moet uitrekenen.
	</p>
	<table style="vertical-align=top" class="stappenplan">
		<tr>
			<td>Stap 1</td>
			<td>Neem de opgave over in je schrift.</td>
			<td width="200">`8 × 2^3 + 4 =`</td>
		</tr>
		<tr>
			<td>Stap 2</td>
			<td>De macht heeft voorrang.</td>
			<td>`8 × 8 + 4 =`</td>
		</tr>
		<tr>
			<td>Stap 3</td>
			<td>Daarna vermenigvuldigen.</td>
			<td>`64  + 4 = 68`</td>
		</tr>
	</table>
	<p>Hieronder ook stap voor stap hoe je een opgave als<br> `sqrt(9 + 4^2) - 7 =` moet uitrekenen. Nu staat er een deel onder het wortel-teken, dat heeft voorrang, alsof het tussen haakjes staat.
	</p>
	<table style="vertical-align=top" class="stappenplan">
		<tr>
			<td>Stap 1</td>
			<td>Neem de opgave over in je schrift.</td>
			<td width="200">`sqrt(9 + 4^2) - 7 =`</td>
		</tr>
		<tr>
			<td>Stap 2</td>
			<td>De wortel heeft voorrang, maar binnen de wortel staat weer een kwadraat.</td>
			<td>`sqrt(9 + 16) - 7 =`</td>
		</tr>
		<tr>
			<td>Stap 3</td>
			<td>De optelling onder de wortel heeft voorrang.</td>
			<td>`sqrt(25) - 7 =`</td>
		</tr>
		<tr>
			<td>Stap 4</td>
			<td>Nu eerst de wortel en dan aftrekken.</td>
			<td>`5 - 7 = -2`</td>
		</tr>
	</table>
</div>

<div class="tekstblok opdracht" id="27">
	<h3>Opdracht 27 Volgorde</h3>
	<p>
	Neem over en vul de juiste getallen in op de puntjes. 
	</p>
	<ol>
		<li>
		`5 + sqrt9 - 4^2 =`<br>
		`5 +  … - ... =`<br>
		`… - ... = …`
		</li>
		<li>
		`sqrt(169-144)-(9-2^2)=`<br>
		`sqrt... - (9-...)=`<br>
		`... - ...= ...`
		</li>
		<li>
		`9^2 - (15-7)^2 : sqrt16 × 2 =` <br>
		`9^2 - ...^2 : sqrt16 × 2 =` <br>
		`... - ... : ... × 2 =` <br>
		`... - ... × 2 =` <br>
		`... - ... = ...`
		</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
				`5 + sqrt9 - 4^2 =`<br>
				`5 + 3 - 16 =`<br>
				`8 - 16 = -8`
				</li>
				<li>
				`sqrt(169-144)-(9-2^2)=`<br>
				`sqrt25 - (9-4)=`<br>
				`5 - 5 = 0`
				</li>
				<li>
				`9^2 - (15-7)^2 : sqrt16 × 2 =` <br>
				`9^2 - 8^2 : sqrt16 × 2 =` <br>
				`81 - 64 : 4 × 2 =` <br>
				`81 - 16 × 2 =` <br>
				`81 - 32 = 49`
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieJ">
	<h3>Theorie J Volgorde regels</h3>
	<p>
		Bij rekenen gelden de volgende voorrangsregels:
	</p>
		<aside class="tekstballon_theorie" style="width: 220px !important">
		`7-(12-8)^2 * sqrt25 =`<br>
		`7-4^2 * sqrt25 =`<br>
		`7-16 * 5 =`<br>
		`7-80 =-73`
	</aside>
	
	<ol class="numbers" class="breuken">
		<li>
			binnen de haakjes;
		</li>
		<li>
			machtsverheffen en worteltrekken;
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

<div class="tekstblok opdracht" id="28">
	<h3>Opdracht 28 Volgorde met de hand (uitdaging)</h3>
	<p>
		Neem over en bereken met tussenstappen onder elkaar.
	</p>
		<table class="breuken">
			<tr>
				<td width="320">
					<ol>
						<li>
							`sqrt9 + 3^2 - sqrt49 =`
						</li>
						<li>
							`3 * sqrt(20+5) - 17 =`
						</li>
						<li>
							`sqrt(10 + 3 * 2) : sqrt(2 * 3^2 -2) =`
						</li>
						<li>
							`sqrt(12^2) : (24 : 2) =`
						</li>
					</ol>
				</td>

				<td width="280">
					<ol start="5">
						<li>
							`sqrt(17 - 2 * 2^2) + 1/3 =`
						</li>
						<li>
							`(5^2)/(sqrt36) - 2/(4-1) = `
						</li>
						<li>
							`sqrt(12^2 + 5^2) =`
						</li>
						<li>
							`39/sqrt9 * sqrt169 : (2+11) =`
						</li>
					</ol>
				</td>
			</tr>
		</table>	
		<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<table class="breuken">
			<tr>
				<td width="320">
					<ol>
						<li>
							`sqrt9 + 3^2 - sqrt49 =`<br>
							`3 + 9 - 7 = 5`<br>
							` `<br>
							` `
						</li>
						<li>
							`3 * sqrt(20+5) - 17 =`<br>
							`3 * sqrt25 - 17 =`<br>
							`15 -17 = -2`<br>
							` `
						</li>
						<li>
							`sqrt(10 + 3 * 2) : sqrt(2 * 3^2 -2) =`<br>
							`sqrt(10+6) : sqrt(2 * 9 -2) = `<br>
							`sqrt16 : sqrt16 = 1`<br>
							` `
						</li>
						<li>
							`sqrt(12^2) : (24 : 2) =`<br>
							`12 : 12 =1`<br>
							` `
						</li>
					</ol>
				</td>

				<td width="280">
					<ol start="5">
						<li>
							`sqrt(17 - 2 * 2^2) + 1/3 =`<br>
							`sqrt(17 - 8) + 1/3 = ` <br>
							`sqrt9 + 1/3 = 3 1/3`<br>
							` `
						</li>
						<li>
							`(5^2)/(sqrt36) - 2/(4-1) = `<br>
							`25/6 - 2/3 =` <br>
							`25/6 - 4/6 = 21/6 = 3 1/2`<br>
							` `
						</li>
						<li>
							`sqrt(12^2 + 5^2) =`<br>
							`sqrt(144 + 25) =` <br>
							`sqrt169 = 13`<br>
							` `
						</li>
						<li>
							`39/sqrt9 * sqrt169 : (2+11) =`<br>
							`39/3 * 13 : 13 =` <br>
							`13 * 13 : 13 = 13`
						</li>
					</ol>
				</td>
			</tr>
		</table>
		</div>
		</div>	
</div>

<div class="tekstblok opdracht" id="29">
	<h3>Opdracht 29 Met de rekenmachine</h3>
	<p>
		Bereken met behulp van een rekenmachine, rond waar nodig af op één decimaal.
	</p>
		<table class="breuken">
			<tr>
				<td width="320">
					<ol>
						<li>
							`sqrt10 + 3^2 - sqrt50 =`
						</li>
						<li>
							`3 1/2 * sqrt(20-7) - 17 =`
						</li>
						<li>
							`sqrt(11 - 3 * 3) : sqrt(4 * 3^2) =`
						</li>
						<li>
							`sqrt(13^2) : (26 : 2) =`
						</li>
					</ol>
				</td>

				<td width="280">
					<ol start="5">
						<li>
							`sqrt(173 - 2 * 9^2) - 1/3 =`
						</li>
						<li>
							`(5^2)/(sqrt39) - 2/(6-1) = `
						</li>
						<li>
							`sqrt(13^2 - 5^2) =`
						</li>
						<li>
							`139/sqrt10 * sqrt121 : (19 - 18/3) =`
						</li>
					</ol>
				</td>
			</tr>
		</table>	
		
		<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Let op dat je bij benaderingen het `&approx;`-teken gebruikt.
			</p>
		<table class="breuken">
			<tr>
				<td width="320">
					<ol>
						<li>
							`sqrt10 + 3^2 - sqrt50 approx 5,1`
						</li>
						<li>
							`3 1/2 * sqrt(20-7) - 17 approx -4,4`
						</li>
						<li>
							`sqrt(11 - 3 * 3) : sqrt(4 * 3^2) approx 0,2`
						</li>
						<li>
							`sqrt(13^2) : (26 : 2) =1`
						</li>
					</ol>
				</td>

				<td width="280">
					<ol start="5">
						<li>
							`sqrt(173 - 2 * 9^2) - 1/3 approx 3`,`0`
						</li>
						<li>
							`(5^2)/(sqrt39) - 2/(6-1) approx 3`,`6`
						</li>
						<li>
							`sqrt(13^2 - 5^2) = 12`
						</li>
						<li>
							`139/sqrt10 * sqrt121 : (19 - 18/3) approx 37`,`2`
						</li>
					</ol>
				</td>
			</tr>
		</table>
		</div>
		</div>
		
</div>

<div class="tekstblok theorie vaardigheden" id="theorieK">
	<h3>Theorie K Exact en benaderen</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				`sqrt(3 + 11)` geeft `sqrt14` op je rekenmachine.<br>
				Dit is de exacte uitkomst.
			</p>
			<p>
				Een druk op de juiste knop geeft een benadering, zie afbeelding. 	Rond af op twee decimalen, tenzij anders wordt gevraagd.
			</p>
			<p>
				`sqrt(3 + 11) = sqrt14 &approx; 3,74`
			</p>
			<p>
				`sqrt(42:7) = sqrt6 &approx; 2,45`
			</p>
		</div>
		<div class="col-xs-5">
			<img src="../afbeeldingen/vaardigheden_leerjaar_2/wortel_texes_casio_benaderen.png" alt="wortel_texes_casio_benaderen"  />
		</div>
	</div>
	<p class="geeltje">
		Gebruik `=` voor exacte uitkomsten.<br>
		Gebruik `&approx;` voor benaderingen.
	</p>
	
</div>

<div class="tekstblok opdracht" id="30">
	<h3>Opdracht 30 Wortels exact</h3>
		<p>
			Geef de exacte uitkomsten bij de volgende opgaven. Reken ze steeds uit met tussenstappen onder elkaar.
		</p>
		<ol class="breuken">
			<li>
				`sqrt(10 - 5) =`
			</li>
			<li>
				`sqrt (3 * 7) =`
			</li>
			<li>
				`sqrt(13 - 3 * 4) =`
			</li>
			<li>
				`sqrt(11^2 + 1) =`
			</li>
		</ol>				
		
		<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol class="breuken">
			<li>
				`sqrt(10 - 5) = sqrt5`
			</li>
			<li>
				`sqrt (3 * 7) =sqrt21`
			</li>
			<li>
				`sqrt(13 - 3 * 4) = sqrt1=1`
			</li>
			<li>
				`sqrt(11^2 + 1) = sqrt 122`
			</li>
		</ol>				
		</div>
		</div>
</div>

<div class="tekstblok opdracht" id="31">
	<h3>Opdracht 31 Wortel benaderen</h3>
	<p>
		Geef bij de wortels van de vorige opgave een benadering op twee decimalen achter de komma.
	</p>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol class="breuken">
				<li>
					`sqrt(10 - 5) = sqrt5 approx 2`,`24`
				</li>
				<li>
					`sqrt (3 * 7) =sqrt21 approx 4`,`58`
				</li>
				<li>
					`sqrt(13 - 3 * 4) = sqrt1=1`
				</li>
				<li>
					`sqrt(11^2 + 1) = sqrt 122 approx 11`,`05`
				</li>
			</ol>			
		</div>
	</div>
</div>

<div class="tekstblok theorie vaardigheden">
	<p>
		De rest van de taak is alleen voor <em>uitdaging</em>.
	</p>
</div>

<p>
</p>

<div class="tekstblok theorie vaardigheden" id="theorieL">
	<h3>Theorie L Wortels herleiden I (uitdaging)</h3>
		<aside class="tekstballon_theorie" style="width: 220px !important">
			`a = 1 * a` <br>
			`sqrt3 = 1 * sqrt3`<br>
			
	</aside>
	<p>
		Wortels kun je net als letters herleiden, zie <a href="http://wiskunde.vathorstcollege.nl/index2.php?p=vaar_herleiden_2hv" target="_blank">taak herleiden</a>.
	</p>
	<p>
		Voor elk getal `a` geldt dat: `a + a = 2a`
	</p>
	<p>
		Stel `a = sqrt3`, dan geldt dat: `sqrt3 + sqrt3 = 2sqrt3`
	</p>
	<p>
		Net als bij het herleiden met letters mag je alleen gelijksoortige wortels bij elkaar optellen of van elkaar aftrekken.
	</p>
	<p>
		Als een wortel mooi uitkomt, herleid dan tot geheel getal.<br>
		`2sqrt9 + 4sqrt10 - sqrt9 = sqrt9 + 4sqrt10 = 3 + 4sqrt10`
	</p>
</div>

<div class="tekstblok opdracht" id="32">
	<h3>Opdracht 32 Wortels herleiden (uitdaging)</h3>
	<p>
		Neem over en herleid de volgende wortels, schrijf anders <em>kan niet korter</em>.
	</p>
		<table class="breuken">
			<tr>
				<td width="320">
					<ol>
						<li>
							`sqrt10 + sqrt10 =`
						</li>
						<li>
							`sqrt3 - 2sqrt3 + 8sqrt3 =`
						</li>
						<li>
							`sqrt14 - sqrt4 - sqrt10 =`
						</li>
						<li>
							`sqrt2 + sqrt3 + 4sqrt2 =`
						</li>
					</ol>
				</td>

				<td width="280">
					<ol start="5">
						<li>
							`sqrt17 - 2sqrt3 + 3sqrt17 + 18sqrt3 =`
						</li>
						<li>
							`-9sqrt6 + sqrt9 - sqrt6 = `
						</li>
						<li>
							`sqrt100 - sqrt16 + 2sqrt16 =`
						</li>
						<li>
							`sqrt10 - sqrt10 + 10 =`
						</li>
					</ol>
				</td>
			</tr>
		</table>	
		
		<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol class="breuken">
				<li>
					`sqrt10 + sqrt10 = 2sqrt10`
				</li>
				<li>
					`sqrt3 - 2sqrt3 + 8sqrt3 = 7sqrt3`
				</li>
				<li>
					`sqrt14 - sqrt4 - sqrt10 =` <em>kan niet korter</em>
				</li>
				<li>
					`sqrt2 + sqrt3 + 4sqrt2 = 5sqrt2 + sqrt3`
				</li>
				<li>
					`sqrt17 - 2sqrt3 + 3sqrt17 + 18sqrt3 = 16sqrt3 + 4sqrt17`
				</li>
				<li>
					`-9sqrt6 + sqrt9 - sqrt6 = 3 - 10sqrt6`
				</li>
				<li>
					`sqrt100 - sqrt16 + 2sqrt16 = 10 - 4 + 8 = 14`
				</li>
				<li>
					`sqrt10 - sqrt10 + 10 = 10`
				</li>
			</ol>
		</div>
		</div>
</div>
	
<div class="tekstblok theorie vaardigheden" id="theorieM">
	<h3>Theorie M Wortels herleiden II (uitdaging)</h3>
	<p>
		Net als met letters, kun je alle wortels met elkaar vermenigvuldigen.
	</p>
	<span class="tab_voorbeeld">
		<u>Regel</u>:<br>
		`a * b = ab`
	</span>
	<div class="tab">
		<u>Voorbeeld</u>:<br>
		`sqrt3 * sqrt5 = sqrt15`
	</div>
	<p>
		Andersom kun je soms een wortel ook splitsen in een product van wortels. 
	</p>
	<span class="tab_voorbeeld">
		<u>Regel</u>:<br>
		`sqrt(ab) = sqrta * sqrtb`
	</span>
	<div class="tab">
		<u>Voorbeeld</u>:<br>
		`sqrt21 = sqrt3 * sqrt7`
	</div>
	<p>
		Mooie wortels kun je daarna uitrekenen, zodat er een zo ver mogelijk herleide exacte uitkomst overblijft.
	</p>
	<p>
		`sqrt90 = sqrt9 * sqrt10 = 3sqrt10`
		<br>
		`sqrt12 = sqrt4 * sqrt3 = 2sqrt3`
		<br>
		`3sqrt50 = 3 * sqrt25 * sqrt 2 = 3 * 5 * sqrt2 = 15sqrt2`
	</p>
	<span class="tab_voorbeeld">
		Merk op dat:<br>
		`sqrt(a^2) = a`
	</span>
	<div class="tab">
		<u>Voorbeeld</u>:<br>
		`sqrt(3^2) = sqrt9 = 3`
	</div>
	<p></p>
		<span class="tab_voorbeeld">
		`sqrta * sqrta = a`
	</span>
	<div class="tab">
		 `sqrt16 * sqrt16 = 4 * 4 = 16`
	</div>
</div>

<div class="tekstblok opdracht" id="33">
	<h3>Opdracht 33 Wortels herleiden (uitdaging)</h3>
		<p>
		Neem over en herleid de wortels zo ver mogelijk.
		</p>
			<table class="breuken">
			<tr>
				<td width="300">
					<ol>
						<li>
							`sqrt36 * sqrt 36 = `
						</li>
						<li>
							`(sqrt3)^2 =`
						</li>
						<li>
							`(sqrt349)^2 =`
						</li>
						<li>
							`sqrt(26^2) =`
						</li>
						<li>
							`sqrt18 = sqrt9 * ...`
						</li>

					</ol>
				</td>

				<td width="300">
					<ol start="6">
						<li>
							`sqrt20 =`
						</li>
						<li>
							`sqrt50 * sqrt(sqrt4) =`
						</li>						
						<li>
							`sqrt98 + sqrt98=`
						</li>
						<li>
							`sqrt18 + sqrt27 =`
						</li>
						<li>
							`5sqrt32 - 3sqrt32 = `
						</li>

					</ol>
				</td>
			</tr>
		</table>	
			
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol class="breuken">
				<li>
					`sqrt36 * sqrt 36 = 36`
				</li>
				<li>
					`(sqrt3)^2 =3`
				</li>
				<li>
					`(sqrt349)^2 =349`
				</li>
				<li>
					`sqrt(26^2) =26`
				</li>
				<li>
					`sqrt18 = sqrt9 * sqrt2 = 3sqrt2`
				</li>
				<li>
					`sqrt20 = sqrt4 * sqrt5 = 2sqrt5`
				</li>
				<li>
					`sqrt50 * sqrt(sqrt4) = sqrt25 * sqrt 2 * sqrt2 = 10`
				</li>						
				<li>
					`sqrt98 + sqrt98= sqrt49*sqrt2 + sqrt49*sqrt2 = 7sqrt2 + 7sqrt2 = 14sqrt2`
				</li>
				<li>
					`sqrt18 + sqrt27 =sqrt9 * sqrt 2 + sqrt9 * sqrt3 = 3sqrt2 + 3sqrt3`
				</li>
				<li>
					`5sqrt32 - 3sqrt32 = 2sqrt32 = 8sqrt2`
				</li>

			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 34 Exacte uitkomsten (uitdaging)</h3>
		<p>
		Neem over en bereken met tussenstappen de exacte uitkomsten.
		</p>
			<table class="breuken">
			<tr>
				<td width="300">
					<ol>
						<li>
							`sqrt2 * sqrt50 = `
						</li>
						<li>
							`sqrt7 * sqrt14 =`
						</li>
						<li>
							`sqrt39 * sqrt13 =`
						</li>
						<li>
							`sqrt2 * sqrt6 + sqrt6 * sqrt3 =`
						</li>
					</ol>
				</td>

				<td width="300">
					<ol start="5">
						<li>
							`sqrt6 * sqrt8 - 3sqrt2 =`
						</li>
						<li>
							`5sqrt32 - 3sqrt32 = `
						</li>
						<li>
							`3sqrt100 - 2sqrt200 - sqrt300 =`
						</li>
						<li>
							`-sqrt72 - sqrt72 + 10sqrt6 =`
						</li>
					</ol>
				</td>
			</tr>
		</table>	
			
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<table class="breuken">
				<tr>
				<td width="300">
					<ol>
						<li>
							`sqrt2 * sqrt50 = `<br>
							`sqrt100=10`
						</li>
						<li>
							`sqrt7 * sqrt14 =`<br>
							`sqrt7 * sqrt7 * sqrt2 = 7sqrt2`<br>
							` `
						</li>
						<li>
							`sqrt39 * sqrt13 =`<br>
							`sqrt3 * 13 = 13sqrt3`
						</li>
						<li>
							`sqrt2 * sqrt6 + sqrt6 * sqrt3 =`<br>
							`2sqrt3 + 3sqrt2`
						</li>
					</ol>
				</td>

				<td width="300">
					<ol start="5">
						<li>
							`sqrt6 * sqrt8 - 3sqrt2 =`<br>
							`4sqrt3 - 3sqrt2`
						</li>
						<li>
							`5sqrt32 - 3sqrt32 = `<br>
							`2sqrt16 * sqrt2 = 8sqrt2`<br>
							` `
						</li>
						<li>
							`3sqrt100 - 2sqrt200 - sqrt300 =`<br>
							`30 - 20sqrt2 - 10sqrt3`
						</li>
						<li>
							`-sqrt72 - sqrt72 + 10sqrt6 =`<br>
							`-12sqrt2 + 10sqrt6` 
						</li>
					</ol>
				</td>
			</tr>
			</table>			
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="35">
	<h3>Opdracht 35 L.O.L. (uitdaging)</h3>
	<img src="../afbeeldingen/vaardigheden_leerjaar_2/cassiere.jpg" alt="cassiere" width="200" height="" class="rightfloat"/>
	<ol>
		<li>
			Lisa verdient `sqrt17` euro per uur en Daan `2`,`02^2`. Laat met een berekening zien dat Lisa na 8 uur werken, bij benadering 34 eurocent meer heeft verdiend.
		</li>
		<li>
			Een rechthoek is `sqrt100` meter breed en `sqrt300` meter lang.<br>
			Geef een benadering op centimeters van de omtrek én bereken de exacte oppervlakte in dm<sup>2</sup>.
		</li>
		<li>
				<aside class="tekstballon_theorie" style="width: 150px !important">
		<em>A<sub>cirkel</sub></em> = `&pi;` &sdot; <em>straal</em><sup>2</sup>
		</aside>
			Van een cirkel is de straal `sqrt3` cm. Bereken de oppervlakte van deze cirkel in dm<sup>2</sup>. Geef een benadering op twee decimalen. 
		</li>
		
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Aanpak: eerst het verschil uitrekenen in verdiensten per uur, vervolgens dat vermenigvuldigen met de 8 uren die ze hebben gewerkt.<br>
					`8*(sqrt17 - 2`,`02^2) = 0`,`341645... approx 0`,`34`<br>
					`0`,`34` euro = `34` eurocent
				</li>
				<li>
					Aanpak: de omtrek is de som van alle zijden. De zijden zijn gegeven in meters, dus of afronden op twee decimalen achter de komma in meters, of omrekenen naar hele centimeters.<br>
					Omtrek `= 2sqrt100 + 2sqrt300`<br>
					Omtrek `= 2*10 + 2 * sqrt100 * sqrt3` <br>
					Omtrek `= 20 + 20sqrt3 approx 54,64` <em>m</em><br>
					of `5.464` <em>cm</em> <br>
					De oppervlakte van een rechthoek is lengte maal breedte.<br>
					Lengte `= sqrt300` m` = 10sqrt3` m `= 100sqrt3` <em>dm</em><br>
					Breedte `= sqrt100` m` = 10` m `= 100` <em>dm</em><br>
					A<sub>rechthoek</sub> `= 100sqrt 3 * 100 = 10.000sqrt3` <em>dm</em><sup>2</sup><br>
				</li>
				<li>
					Aanpak: gegeven straal invullen in formule. Let op: straal is gegeven in centimeters, antwoord wordt gevraagd in vierkante decimeters. Dus, of eerst omrekenen van centimeters naar decimeters, of op het eind van vierkante centimeters naar vierkante decimeters.<br>
					<em>A<sub>cirkel</sub></em> = `&pi;` &sdot; <em>straal</em><sup>2</sup><br>
					<em>A<sub>cirkel</sub></em> = `&pi;*(sqrt3)^2`<br>
					<em>A<sub>cirkel</sub></em> = `3&pi;` cm<sup>2</sup><br>
					<em>A<sub>cirkel</sub></em> = `3&pi;` cm<sup>2</sup> = 0`,`03` dm <sup>2</sup> `approx 0`,`09` dm<sup>2</sup>
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



<div><!-- verwijzingen naar doelen, voorkennis, werkwijze en benodigdheden -->
	<div id="open_doelen" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>	Doelen</h3>
				<ol>
					<li>Leerlingen herhalen het rekenen met volgorde van bewerkingen;</li>
					<li>Leerlingen herhalen het begrip kwadraten;</li>
					<li>Leerlingen leren het begrip machten en rekenen met machten;</li>
					<li>Leerlingen leren wat wortels zijn en rekenen met wortels;</li>
					<li>Leerlingen leren wortels uitrekenen met behulp van de rekenmachine;</li>
					<li>Leerlingen leren het verschil tussen exacte oplossingen en benaderingen;</li>
					<li> Leerlingen leren wortels herleiden.</li>
				</ol>
			</div>
		</div>
	<div id="open_voorkennis" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>Voorkennis</h3>
				<ol>
					<li>volgorde van bewerkingen;</li>
					<li>negatieve getallen, kwadraten en afronden;</li>
					<li>eigenschappen van vierkant, oppervlakte van een cirkel;</li>
					<li>herleiden.</li>
				</ol>
			</div>
		</div>
	<div id="open_werkwijze" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>Werkwijze</h3>
					<p>
						Zorg dat je een rekenmachine bij de hand hebt. Gebruik geen telefoon, maar een echte rekenmachine.<br>
						Maak de opdrachten uit de taak in je schrift. Schrijf sommen steeds eerst over voordat je ze stap voor stap uitrekent. Kijk je eigen werk kritisch na. Tip: kijk elkaars werk na en geef elkaar feedback over het gemaakte werk.
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
						<li>Schrift, pen, potlood en gum. En natuurlijk je computer en een goed humeur.</li>
					</ol>
				</p>
			</div>
		</div>
</div><!-- /verwijzingen naar doelen, voorkennis, werkwijze en benodigdheden -->

