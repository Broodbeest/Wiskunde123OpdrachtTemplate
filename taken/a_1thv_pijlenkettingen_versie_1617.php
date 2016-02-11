<?php 
	//defineer titel
	$taaknaam ="Pijlenkettingen";
?>

<?php
	//Definieer sidebar
	$doorverwijzingen = array(
      '#inleiding' => 'Inleiding',
	  '#theorieA' => 'Woordformules',
      '#theorieB' => 'Pijlenketting',
      '#theorieC' => 'Pijlenketting nogmaals',
      '#theorieD' => 'Van woordformule naar formule',
      '#theorieE' => 'Extra mooie pijlenkettingen',
      '#theorieF' => 'Omgekeerde pijlenketting',
      '#proeftoets' => 'Proeftoets');                                                      
?>

<title>Leerjaar 1 | <?php echo $taaknaam; ?></title>

<div class="taakinhoud">

<div class="tekstblok theorie analyse" id="inleiding">
	<h3>Inleiding</h3>
	<p>
		Een formule beschrijft het verband tussen invoer en uitvoer. Als de invoer bekend is, kun je die invullen en zo de uitvoer berekenen. Omgekeerd kan het ook, dan heb je een <b>vergelijking</b>.
	</p>
	<p>
		In deze taak ga je leren hoe je met <b>pijlenkettingen</b> een vergelijking op kunt lossen.
	</p>
	<div class="tekstblok opdracht"</div>
	<p>
		<u>Een voorbeeld opgave</u>:
	</p>
		<div class="row" >
			<div class="col-xs-7">
				<p>
					Een treinkaartje kost &euro; 1,12 plus &euro; 0,156 per kilometer. Het kost &euro; 5,20 om van Amersfoort Vathorst naar Utrecht te reizen.
				</p>
				<p>
					Hoeveel kilometer is de afstand tussen Amersfoort Vathorst en Utrecht Centraal per spoor?
				</p>
			</div>
			<div class="col-xs-4">
				<img class="small" src="../afbeeldingen/analyse_leerjaar_1/Station_Vathorst.jpg" alt="Station_Vathorst" width="" height="" />
			</div>
		</div>
	</div>
	<p>
		We beginnen met het opfrissen van je kennis uit de vorige taken: <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=v_1thv_rekenen_met_negatieve_getallen">Rekenen met negatieve getallen</a>, <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=v_1thv_machten_en_volgorde">Machten en volgorde</a>, <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=v_1thv_breuken">Breuken</a> en <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=a_1thv_lineaire_formules" target="_blank">Lineaire formules</a>.
	</p>
</div>

<!-- toevoegen oefeningen met rekenen met negatieve getallen -->


<div class="tekstblok opdracht" id="1">
	<h3>Opdracht 1 Volgorde regels</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Jasper is vergeten in welke volgorde de bewerkingen moeten worden uitgevoerd. Kun jij hem helpen?
			</p>
			<ol>
				<li>
					Zet de bewerkingen in de juiste volgorde:
					<br>
					optellen, delen, vermenigvuldigen, haakje wegwerken, machten, aftrekken en, als je het al weet ook, wortels
				</li>
				<li>
					Fatima kan zich nog vaag herinneren dat er iets bij geschreven kan worden. Niels weet daar nog een afkorting voor: "vlnr". Weet jij wat dat zou kunnen betekenen?
					<br>
					"Van ... naar ... "
				</li>
			</ol>
		</div>
		<div class="col-xs-5">
			<img id="img-small" src="../afbeeldingen/analyse_leerjaar_1/rekenvolgorde.png" alt="rekenvolgorde" width="" height="" />
		</div>
	</div>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<ol id="numbers"> 
						<li>haakje wegwerken</li>
						<li>machten en wortels, van links naar rechts</li>
						<li>delen en vermenigvuldigen, van links naar rechts</li>
						<li>optellen en aftrekken, van links naar rechts</li>
					</ol>
				</li>
				<li>
					"Van <em>links</em> naar <em>rechts</em>."
				</li>
			</ol>
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="2">
	<h3>Opdracht 2 Volgorde (basis)</h3>
	<p>
		Neem de opgaven over en reken ze met tussenstappen onder elkaar uit, zonder rekenmachine.
	</p>
	<div class="row">
		<div class="col-xs-5">
			<ol>
				<li>
					`24 : -3 * 7 =`
				</li>
				<li>
					`-96 - 4 * 25 =`
				</li>
				<li>
					`-3 * (-1,4 - 0,2) =`
				</li>
				<li>
					`-8 + - 12 : -2 =`
				</li>
			</ol>				
		</div>
		<div class="col-xs-5">
			<ol start="5">
				<li>
					`(4 + 5) : 3 - 5 =`
				</li>
				<li>
					`20 : 5 - 4 * 3 =`
				</li>
				<li>
					`(10 + 8) * (10 - 6) =`
				</li>
				<li>
					`36 : (4 - 3) + 8 * 2 =`
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
							`24 : -3 * 7 =`<br>
							`-8 * 7 = -56`
						</li>
						<li>
							`-96 - 4 * 25 =`<br>
							`-96 - 100 = -196`
						</li>
						<li>
							`-3 * (-1,4 - 0,2) =`<br>
							`-3 * -1,6 = 4,8`
						</li>
						<li>
							`-8 + - 12 : -2 =`<br>
							`-8 + 6 = -2`
						</li>
					</ol>				
				</div>
				<div class="col-xs-5">
					<ol start="5">
						<li>
							`(4 + 5) : 3 - 5 =`<br>
							`9 : 3 - 5 = -2`
						</li>
						<li>
							`20 : 5 - 4 * 3 =`<br>
							`4 - 4 * 3 = -8`
						</li>
						<li>
							`(10 + 8) * (10 - 6) =`<br>
							`18 * 4 = 72`<br>
						</li>
						<li>
							`36 : (4 - 3) + 8 * 2 =`<br>
							`36 : 1 + 16= 52`
						</li>
					</ol>		
				</div>
			</div>
		</div>
	</div>
</div>


<p class="geeltje">
	Vragen over rekenen met negatieve getallen? Ga naar <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=v_1thv_rekenen_met_negatieve_getallen">Rekenen met negatieve getallen</a>.
</p>
<p class="geeltje">
	Vragen over de volgorde van bewerkingen? Ga naar <a href="http://wiskunde.vathorstcollege.nl/index_taken.php p=v_1thv_machten_en_volgorde">Machten en volgorde</a>.
</p>

<div class="tekstblok opdracht" id="1">
	<h3>Opdracht 1 @DWO</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Log in op de <a href="http://ws.fisme.science.uu.nl/dwo/leerling/" target="_blank">DWO</a>, open de module 'Letterrekenen deel 1' en maak de volgende activiteiten:
			</p>
			<ol style="list-style-type: decimal !important;">
				<li>Machten, opfrissen</li>
				<li>Machten en rekenvolgorde, opfrissen</li>
				<li>Machten en rekenvolgorde, oefenen</li>
			</ol>
		</div>
		<div class="col-xs-5">
			<p class="geeltje machten">
				Merk op dat:<br>
				`8^0 = 1`<br>
				`-7^0= -1`<br>
				Kortom:	`x^0=x`
			</p>
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie A Machten</h3>
	<div class="row">
		<div class="col-xs-8">
			<p>
				Het product van gelijke <b>factoren</b> is een <b><span style="color: red">macht</span></b>:<br>
				<span style="color: green">3</span> &sdot; <span style="color: green">3</span> &sdot; <span style="color: green">3</span> &sdot; <span style="color: green">3</span> = <span style="color: green">3</span><sup><span style="color: red">4</span></sup><br>
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
	<p>
		Gebruik <b>haakjes</b> bij de macht van een negatief getal.
	</p>
	<p>
		`-4 &sdot; -4 = (-4)^2 = 16`<br>
		`-4 &sdot; -4 &sdot; -4 = (-4)^3 = -64`<br>
	</p>
	<p>
		Let op dat een oneven macht van een negatief getal als uitkomst negatief is.	
	</p>
</div>

<div class="tekstblok opdracht" id="2">
	<h3>Opdracht 2 Even en oneven machten</h3>
	<p>Bereken</p>
	<div class="row">
		<div class="col-xs-6">
			<ol>
				<li>-5<sup>4</sup> =</li>
				<li>(-5)<sup>4</sup> =</li>
				<li>Waarom verschillen de uitkomsten bij a. en b.?</li>
			</ol>
		</div>
		<div class="col-xs-6">
			<ol start="4">
				<li>-5<sup>3</sup> =</li>
				<li>(-5)<sup>3</sup> =</li>
				<li>Is er verschil tussen de uitkomsten bij d. en e.? Waarom wel/niet?</li>
			</ol>
		</div>
	</div>
	
	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-6">
						<ol>
							<li>- 5 <mo>&sdot;</mo> 5 <mo>&sdot;</mo> 5 <mo>&sdot;</mo> 5 = -625</li>
							<li>-5 <mo>&sdot;</mo> -5 <mo>&sdot;</mo> -5 <mo>&sdot;</mo> -5 = 625</li>
							<li>Bij opdracht a. moet je alleen 5<sup>4</sup> berekenen en dan de min ervoor.<br>
								Bij opdracht b. moet je <b>en</b> "negatief" en 5 tot de macht vier doen.</li>
						</ol>
					</div>
					<div class="col-xs-6">
						<ol start="4">
							<li>- 5 <mo>&sdot;</mo> 5 <mo>&sdot;</mo> 5 = -125</li>
							<li>-5 <mo>&sdot;</mo> -5 <mo>&sdot;</mo> -5= -125</li>
							<li>Er is wel een verschil in berekening maar geen verschil in antwoord. Dit komt omdat je een oneven aantal negatieve getallen vermenigvuldigt.</li>
						</ol>
					</div>
				</div>
				
			</div>		
		</div>
</div>

<div class="tekstblok opdracht" id="3">
	<h3>Opdracht 3 Machten uit het hoofd</h3>
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
					`3^0 = `
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
		<div class="col-xs-4">
			<ol start="9">
				<li>`-2^0=`</li>
				<li>`(-1)^4 =`</li>
				<li>`-1^4 =`</li>
				<li>`(-1)^39 =`</li>
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
								`3^0 = 1`
							</li>
							<li>
							 `-4^3 = -64`
							</li>
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
					<td width="300">
						<ol start="9">
							<li>`-2^0= -1`</li>
							<li>`(-1)^4 = 1`</li>
							<li>`-1^4 = -1`</li>
							<li>`(-1)^39 = -1`</li>
						</ol>
					</td>
				</tr>		
			</table>
		</div>
	</div>
</div>
		
<div class="tekstblok opdracht" id="4">
	<h3>Opdracht 4 Positief of negatief</h3>
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

<div class="tekstblok theorie analyse" id="theorieB">
	<h3>Theorie B Volgorde regels</h3>
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

<div class="tekstblok opdracht" id="3">
	<h3>Opdracht 3 Volgorde (uitdaging)</h3>
	<p>
		Neem de opgaven over en reken ze met tussenstappen onder elkaar uit, zonder rekenmachine.
	</p>
	<div class="row">
		<div class="col-xs-5">
			<ol>
				<li>
					`-4 * 3 + - 7 - -3 =`
				</li>
				<li>
					`-4 * -3 + (- 7 - -3) =`
				</li>
				<li>
					`28 : -2 + -5 * -1 =`
				</li>
				<li>
					`28 : (-2 + -5) * -1 =`
				</li>
			</ol>		
		</div>
		<div class="col-xs-5">
			<ol start="5">
				<li>
					`28 : (-2 + -5 * 1) =`
				</li>

				<li>
					`60 : (10 + -2 + 4) =`
				</li>
				<li>
					`60 : (-10 + -2) + 4 =`
				</li>
				<li>
					`60 : 10 + -2 + 4 =`
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
							`-4 * 3 + - 7 - -3 =`<br>
							`-12 - 7 + 3 = -16`
						</li>
						<li>
							`-4 * -3 + (- 7 - -3) =`<br>
							`12 + -4 = 8`
						</li>
						<li>
							`28 : -2 + -5 * -1 =`<br>
							`-14 + 5 = -9`
						</li>
						<li>
							`28 : (-2 + -5) * -1 =`<br>
							`28 : -7 * -1 = `<br>
							`-4 * -1 = 4`
						</li>
					</ol>		
				</div>
				<div class="col-xs-5">
					<ol start="5">
						<li>
							`28 : (-2 + -5 * 1) =`<br>
							`28 : (-2 -5) =`<br>
							`28 : -7 = -4`
						</li>
						<li>
							`60 : (10 + -2 + 4) =`<br>
							`60 : 12 = 5`
						</li>
						<li>
							`60 : (-10 + -2) + 4 =`<br>
							`60 : -12 + 4 =`<br>
							`-5 + 4 = -1`
						</li>
						<li>
							`60 : 10 + -2 + 4 =`<br>
							`6 - 2 + 4 = 8`
						</li>
					</ol>		
				</div>
			</div>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="4">
	<h3>Opdracht 4 Machten en volgorde</h3>
	<p>
		Neem over en bereken met tussenstappen onder elkaar, zonder rekenmachine.
	</p>
	<div class="row">
		<div class="col-xs-5">
			<ol class="machten">
				<li>`(3^2 - 7) : (-2)^2 =`</li>
				<li>`-(-5)^2 : (-6^2 : - 3^2) =`</li>
				<li>`-25^2 : (-25)^2 =`</li>
			</ol>
		</div>
		<div class="col-xs-5">
			<ol start="4" class="machten">
				<li>`4 + 3^4 : (2 + 1)^2 =`</li>
				<li>`-3 * (-2)^5 : (-4)^2 + (6 - 6^2) =`</li>
				<li>`-135^0 : -1^((1232-567)) =`</li>
			</ol>
		</div>
	</div>
		
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-5">
						<ol class="machten">
							<li>
								`(3^2 - 7) : (-2)^2 =`<br>
								`(9 - 7) : 4 =`<br>
								`2 : 4 = 1/2`
							</li>
							<li>
								`-(-5)^2 : (-6^2 : - 3^2) =`<br>
								`-25 : (-36 : -9)=`<br>
								`-25 : 4 = -6 1/4`
							</li>
							<li>
								`-25^2 : (-25)^2 = -1`<br>
								<em>Vallen tegen elkaar weg.</em>
							</li>
						</ol>
					</div>
					<div class="col-xs-6">
						<ol start="4" class="machten">
							<li>
								`4 + 3^4 : (2 + 1)^2 =`<br>
								`4 + 81 : 9 =`<br>
								`4 + 9 = 13`
							</li>
							<li>
								`-3 * (-2)^5 : (-4)^2 + (6 - 6^2) =`<br>
								`-3 * -32 : 16 + (6 - 36) =`<br>
								`96 : 16 - 30 = 6 - 30 = -24`
							</li>
							<li>
								`-135^0 : -1^((1232-567)) =`<br>
								`-1 : -1 = 1`
							</li>
						</ol>
					</div>
				</div>			
			</div>
		</div>
</div>

<p class="geeltje">
	Voor meer oefening met de <em>volgorde van bewerkingen</em> kun je op <a href="http://www.sommenprinter.nl/getalbegripvolgorde.php>">sommenprinter.nl</a> werkbladen met oefeningen op jouw niveau selecteren, maken en nakijken.
</p>

<div class="tekstblok opdracht" id="5">
	<h3>Opdracht 5 Getallenschema (uitdaging)</h3>
	<div class="row">
		<div class="col-xs-4">
			<ol>
				<li>
					In het getallenschema staat de <b>som</b> van twee naast elkaar gelegen getallen in het vak er boven. Neem het schema over en bereken het bovenste getal.
				</li>
			</ol>
		</div>
		<div class="col-xs-8">
			<table>
				<tbody>
					<tr>
						<td colspan="4"></td>
						<td colspan="2" id="getallenschema">?</td>
						<td colspan="4"></td>
					</tr>	
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td colspan="2" id="getallenschema">-109</td>
						<td colspan="2" id="getallenschema">...</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>	
					<tr>
						<td></td>
						<td></td>
						<td colspan="2" id="getallenschema">...</td>
						<td colspan="2" id="getallenschema">...</td>
						<td colspan="2" id="getallenschema">...</td>
						<td></td>
						<td></td>
					</tr>	
					<tr>
						<td></td>
						<td colspan="2" id="getallenschema">-211</td>
						<td colspan="2" id="getallenschema">532</td>
						<td colspan="2" id="getallenschema">...</td>
						<td colspan="2" id="getallenschema">53</td>
						<td></td>
					</tr>			
				</tbody>
			</table>
		</div>
	</div>
	<p></p>
	<div class="row">
		<div class="col-xs-4">
			<ol start="2">
				<li>
					In het getallenschema staat het <b>product</b> van twee naast elkaar gelegen getallen in het vak er boven. Neem het schema over en bereken het bovenste getal.
				</li>
			</ol>
		</div>
		<div class="col-xs-8">
			<table>
				<tbody>
					<tr>
						<td colspan="4"></td>
						<td colspan="2" id="getallenschema">?</td>
						<td colspan="4"></td>
					</tr>	
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td colspan="2" id="getallenschema">24</td>
						<td colspan="2" id="getallenschema">...</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>	
					<tr>
						<td></td>
						<td></td>
						<td colspan="2" id="getallenschema">...</td>
						<td colspan="2" id="getallenschema">...</td>
						<td colspan="2" id="getallenschema">...</td>
						<td></td>
						<td></td>
					</tr>	
					<tr>
						<td></td>
						<td colspan="2" id="getallenschema">2</td>
						<td colspan="2" id="getallenschema">2</td>
						<td colspan="2" id="getallenschema">...</td>
						<td colspan="2" id="getallenschema">5</td>
						<td></td>
					</tr>			
				</tbody>
			</table>
		</div>
	</div>			

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<table>
						<tbody>
							<tr>
								<td colspan="4"></td>
								<td colspan="2" id="getallenschema">-1448</td>
								<td colspan="4"></td>
							</tr>	
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td colspan="2" id="getallenschema">-109</td>
								<td colspan="2" id="getallenschema">-1339</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>	
							<tr>
								<td></td>
								<td></td>
								<td colspan="2" id="getallenschema">321</td>
								<td colspan="2" id="getallenschema">-430</td>
								<td colspan="2" id="getallenschema">-909</td>
								<td></td>
								<td></td>
							</tr>	
							<tr>
								<td></td>
								<td colspan="2" id="getallenschema">-211</td>
								<td colspan="2" id="getallenschema">532</td>
								<td colspan="2" id="getallenschema">-962</td>
								<td colspan="2" id="getallenschema">53</td>
								<td></td>
							</tr>			
						</tbody>
					</table>
				</li>
				<li>
					<table>
						<tbody>
							<tr>
								<td colspan="4"></td>
								<td colspan="2" id="getallenschema">2160</td>
								<td colspan="4"></td>
							</tr>	
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td colspan="2" id="getallenschema">24</td>
								<td colspan="2" id="getallenschema">90</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>	
							<tr>
								<td></td>
								<td></td>
								<td colspan="2" id="getallenschema">4</td>
								<td colspan="2" id="getallenschema">6</td>
								<td colspan="2" id="getallenschema">15</td>
								<td></td>
								<td></td>
							</tr>	
							<tr>
								<td></td>
								<td colspan="2" id="getallenschema">2</td>
								<td colspan="2" id="getallenschema">2</td>
								<td colspan="2" id="getallenschema">3</td>
								<td colspan="2" id="getallenschema">5</td>
								<td></td>
							</tr>			
						</tbody>
					</table>				
				</li>
			</ol>
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="6">
	<h3>Opdracht 6 Combineer de bewerkingen</h3>
	<p>
		Probeer met de vier getallen steeds zo dicht mogelijk bij of op 120 uit te komen.<br>
		Je mag haakjes en de bewerkingen `+`, `-`, `*` en `:` gebruiken.
	</p>
	<div class="row">
		<div class="col-xs-5">
			<ol>
				<li>
					`2` ` ` `3` ` ` `4` ` ` `5`
				</li>
				<li>
					`2` ` ` `6` ` ` `9` ` ` `13`
				</li>
			</ol>
		</div>
		<div class="col-xs-5">
			<ol start="3">				
				<li>
					`2` ` ` `3` ` ` `4` ` ` `6`
				</li>
				<li>
					`1` ` ` `11` ` ` `7 1/2` ` ` `2 1/2`
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
							`2 * 3 * 4 * 5 = 120`
						</li>
						<li>
							`(13 + 9 - 2) * 6 = 120`
						</li>
					</ol>
				</div>
				<div class="col-xs-5">
					<ol start="3">				
						<li>
							`(2 + 3) * 4 * 6 = 120`
						</li>
						<li>
							`(1 + 11) * (7 1/2 + 2 1/2) = 120`
						</li>
					</ol>				
				</div>
			</div>			
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="7">
	<h3>Opdracht 7 Welk getal?</h3>
	<p>
		Bereken het getal op de plek van het <span class="formula"> ?</span>-teken.
	</p>
	<div class="row">
		<div class="col-xs-5">
			<ol>
				<li>
					`75 +`<span class="formula"> ? </span>`= 103`
				</li>
				<li>
					<span class="formula"> ? </span>` + 46 = 39`
				</li>
				<li>
					`76 -`<span class="formula"> ? </span>`= 50`
				</li>
				<li>
					<span class="formula"> ? </span>`- 612 = -100`
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
					<span class="formula"> ? </span> `- 65 = 21`
				</li>
				<li>
					`625 +`<span class="formula"> ? </span>`= 693`
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
							`75 +`<span class="formula"> ? </span>`= 103`<br>
							<span class="formula"> ? </span>`= 28`
						</li>
						<li>
							<span class="formula"> ? </span>` + 46 = 39`<br>
							<span class="formula"> ? </span>`= -7`
						</li>
						<li>
							`76 -`<span class="formula"> ? </span>`= 50`<br>
							<span class="formula"> ? </span>`= 26`
						</li>
						<li>
							<span class="formula"> ? </span>`- 612 = -100`<br>
							<span class="formula"> ? </span>`= 512`
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
							<span class="formula"> ? </span> `- 65 = 21`<br>
							<span class="formula"> ? </span>`= 86`
						</li>
						<li>
							`625 +`<span class="formula"> ? </span>`= 693`<br>
							<span class="formula"> ? </span>`= 68`
						</li>
					</ol>				
				</div>
			</div>			
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="8">
	<h3>Opdracht 8 Welk getal?</h3>
	<p>
		Bereken het getal op de plek van het <span class="formula"> ?</span>-teken.
	</p>
	<div class="row">
		<div class="col-xs-5">
			<ol>
				<li>
					`81 :`<span class="formula"> ? </span>`= 3`
				</li>
				<li>
					`90 :`<span class="formula"> ? </span>`= -3`
				</li>
				<li>
					<span class="formula"> ? </span>`* 4 = -32`
				</li>
				<li>
					`-24 *`<span class="formula"> ? </span>`= 120`
				</li>
				
			</ol>
		</div>
		<div class="col-xs-5">
			<ol start="5">				
				<li>
					<span class="formula"> ? </span>`: 3 = 8`
				</li>
				<li>
					<span class="formula"> ? </span>`: 3 = -8`
				</li>
				<li>
					`-16 *`<span class="formula"> ? </span>`= -4`
				</li>
				<li>
					<span class="formula"> ? </span>`*`<span class="formula"> ? </span>`= 25`
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
							`81 :`<span class="formula"> ? </span>`= 3`<br>
							<span class="formula"> ? </span>`= 27`
						</li>
						<li>
							`90 :`<span class="formula"> ? </span>`= -3`<br>
							<span class="formula"> ? </span>`= -30`
						</li>
						<li>
							<span class="formula"> ? </span>`* 4 = -32`<br>
							<span class="formula"> ? </span>`= -8`
						</li>
						<li>
							`-24 *`<span class="formula"> ? </span>`= 120`<br>
							<span class="formula"> ? </span>`= -5`
						</li>
						
					</ol>
				</div>
				<div class="col-xs-5">
					<ol start="5">				
						<li>
							<span class="formula"> ? </span>`: 3 = 8`<br>
							<span class="formula"> ? </span>`= 24`
						</li>
						<li>
							<span class="formula"> ? </span>`: 3 = -8`<br>
							<span class="formula"> ? </span>`= -24`
						</li>
						<li>
							`-16 *`<span class="formula"> ? </span>`= -4`<br>
							<span class="formula"> ? </span>`= 1/4`
						</li>
						<li>
							<span class="formula"> ? </span>`*`<span class="formula"> ? </span>`= 25`<br>
							<span class="formula"> ? </span>`= 5` of <span class="formula"> ? </span>`= -5`
						</li>
					</ol>				
				</div>
			</div>			
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="9">
	<h3>Opdracht 9 Welk getal?</h3>
	<p>
		Bereken het getal op de plek van het <span class="formula"> ?</span>-teken.
	</p>
	<div class="row">
		<div class="col-xs-5">
			<ol>
				<li>
					`198 +`<span class="formula"> ? </span>`= 527`
				</li>
				<li>
					`25 *`<span class="formula"> ? </span>`= -150`
				</li>
				<li>
					`49 -`<span class="formula"> ? </span>` =  16`
				</li>
				<li>
					`-35 :`<span class="formula"> ? </span>`= 17 1/2`
				</li>
				
			</ol>
		</div>
		<div class="col-xs-5">
			<ol start="5">				
				<li>
					<span class="formula"> ? </span> `+ 583 = 462`
				</li>
				<li>
					<span class="formula"> ? </span> `- 67 4/5 = -22 7/10`
				</li>
				<li>
					<span class="formula"> ? </span> `* -14 = 196`
				</li>
				<li>
					<span class="formula"> ? </span> `: 27 = 3`
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
							`198 +`<span class="formula"> ? </span>`= 527`<br>
							<span class="formula"> ? </span>`= 329`
						</li>
						<li>
							`25 *`<span class="formula"> ? </span>`= -150`<br>
							<span class="formula"> ? </span>`= -6`
						</li>
						<li>
							`49 -`<span class="formula"> ? </span>` = 16`<br>
							<span class="formula"> ? </span>`= 33`
						</li>
						<li>
							`-35 :`<span class="formula"> ? </span>`= 17 1/2`<br>
							<span class="formula"> ? </span>`= -2`
						</li>
						
					</ol>
				</div>
				<div class="col-xs-5">
					<ol start="5">				
						<li>
							<span class="formula"> ? </span> `+ 583 = 462`<br>
							<span class="formula"> ? </span>`= -121`
						</li>
						<li>
							<span class="formula"> ? </span> `- 67 4/5 = -22 7/10`<br>
							<span class="formula"> ? </span>`= 45 1/10`
						</li>
						<li>
							<span class="formula"> ? </span> `* -14 = 196`<br>
							<span class="formula"> ? </span>`= -14`
						</li>
						<li>
							<span class="formula"> ? </span> `: 27 = 3`<br>
							<span class="formula"> ? </span>`= 81`
						</li>
					</ol>				
				</div>
			</div>			
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="10">
	<h3>Opdracht 10 Herhaald optellen</h3>
	<p>
		Steeds hetzelfde getal optellen kun je herschrijven als een product.<br>
		Bijvoorbeeld:<br>
		`3 + 3 + 3 + 3 + 3 = 5 * 3 = 15`
	</p>
	<p>
		Herschrijf de volgende sommen als product en bereken het antwoord.
	</p>
	<ol class="machten">
		<li>
			`8 + 8 + 8 + 8 = `
		</li>
		<li>
			`2 1/2 + 2 1/2 + 2 1/2 = `
		</li>
		<li>
			`-4 + -4 + -4 + -4 + -4 + -4 + -4 = `
		</li>
	</ol>
	<p>
		Uitdaging:
	</p>
	<ol start="4">
		<li>
			`-4 + 5 + -4 + 5 + -4 + 5 + -4 + 5 + -4 = `
		</li>
		<li>
			`-7 - 7 + 7 + 7 + 7 + 7 - 7 = `
		</li>
		<li>
			`-1/3 + 3 - 1/3 + 3 - 1/3 + 3 =`
		</li>

		<li>
			`11 + 15 + 11 + 15 + 11 + 15 + 11 =`
		</li>
		<li>
		 	`- 4/5 + 3/4 - 4/5 - 4/5 - 4/5 + 3/4 - 4/5 + 3/4 + 1/2 + 1/2 + 3/4 =`
		</li>
	</ol>		

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol class="machten">
				<li>
					`8 + 8 + 8 + 8 = 4 * 8 = 32`
				</li>
				<li>
					`2 1/2 + 2 1/2 + 2 1/2 = 3 * 2 1/2 = 7 1/2`
				</li>
				<li>
					`-4 + -4 + -4 + -4 + -4 + -4 + -4 = 7 * -4 = -28`
				</li>
			</ol>
			<p>
				Uitdaging:
			</p>
			<ol start="4">
				<li>
					`-4 + 5 + -4 + 5 + -4 + 5 + -4 + 5 + -4 = 5 * -4 + 4 * 5 = 0`
				</li>
				<li>
					`-7 - 7 + 7 + 7 + 7 + 7 - 7 = 3 * -7 + 4 * 7 = 7`
				</li>
				<li>
					`-1/3 + 3 - 1/3 + 3 - 1/3 + 3 = 3 * 3 + 3 * -1/3 = 9 - 1 = 8`
				</li>
		
				<li>
					`11 + 15 + 11 + 15 + 11 + 15 + 11 = 4 * 11 + 3 * 15 = 44 + 45 = 89`
				</li>
				<li>
				 	`- 4/5 + 3/4 - 4/5 - 4/5 - 4/5 + 3/4 - 4/5 + 3/4 + 1/2 + 1/2 + 3/4 = 5 * -4/5 + 4 * 3/4 + 2 * 1/2 = -4 + 3 + 1 = 0`
				</li>
			</ol>			
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="11">
	<h3>Opdracht 11 Herhaald vermenigvuldigen</h3>
	<p>
		Steeds hetzelfde getal vermenigvuldigen met zichzelf kun je herschrijven als een macht.<br>
		Bijvoorbeeld:<br>
		`3 * 3 * 3 * 3 * 3 = 3^5 = 243`
	</p>
	<p>
		Herschrijf de volgende producten als macht. Bereken het antwoord eventueel met een rekenmachine.
	</p>
	<ol class="machten">
		<li>
			`8 * 8 * 8 * 8 = `
		</li>
		<li>
			`-2 * -2 * -2 * -2 = `
		</li>
		<li>
			`-4 *  -4 *  -4 *  -4 *  -4 *  -4 *  -4 = `
		</li>
		<li>
			`7 * 7 * 7 * 7 * 7 * 7 * 7 = `
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol class="machten">
				<li>
					`8 * 8 * 8 * 8 = 8^4 = 4096`
				</li>
				<li>
					`-2 * -2 * -2 * -2 = (-2)^4 = 16`
				</li>
				<li>
					`-4 *  -4 *  -4 *  -4 *  -4 *  -4 *  -4 = (-4)^7 = -16.384`
				</li>
				<li>
					`7 * 7 * 7 * 7 * 7 * 7 * 7 = 7^7 = 823.543`
				</li>
			</ol>			
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="12">
	<h3>Opdracht 12 Herhaald vermenigvuldigen (uitdaging)</h3>
	<p>
		Herschrijf de volgende producten als macht, zoals het voorbeeld. Bereken het antwoord eventueel met een rekenmachine.
	</p>	
	<p>
		<u>Voorbeeld</u>: `3 * 2 * 3 * 2 * 3 * 2 * 3 = `
	</p>
	<ol class="machten">
		<li>
			`11 * 15 * 11 * 15 = `
		</li>
		<li>
			`3 * 4 * 3 * 4 * 3 * 4 * 3 = `
		</li>
		<li>
		 	`-4 * -3 * -4 * -3 * -4  = `
		</li>
		<li>
			`-4 * 5 * -4 * 5 * -4 * 5 * -4 * 5 * -4 = `
		</li>
	</ol>		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol class="machten">
				<li>
					`11 * 15 * 11 * 15 = 11^2 * 15^2 = 121 * 225 = 27.225`
				</li>
				<li>
					`3 * 4 * 3 * 4 * 3 * 4 * 3 = 3^4 * 4^3 = 81 * 64 = 5184`
				</li>
				<li>
				 	`-4 * -3 * -4 * -3 * -4  = (-4)^3 * (-3)^2 = -64 * 9 = -576`
				</li>
				<li>
					`-4 * 5 * -4 * 5 * -4 * 5 * -4 * 5 * -4 = (-4)^5 * 5^4 = -1024 * 625 = 640.000`
				</li>
			</ol>			
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="13">
	<h3>Opdracht 13 Sommen</h3>
	<p>
		Neem over en bereken, zonder rekenmachine.
	</p>
	<div class="row">
		<div class="col-xs-5">
			<ol class="breuken">
				<li>
					`-2 2/3 + 1 2/3 + 2/3 =`
				</li>
				<li>
					`2/5 + 3/4 - 1 1/2 =`
				</li>
				<li>
					`-2 3/4 - 1 1/3 + 1/6 = `
				</li>
				<li>	
					`7/8 * 4/5 * 1 1/4 =`
				</li>
			</ol>				
		</div>
		<div class="col-xs-5">
			<ol class="breuken" start="5">
				<li>
					`-2 2/3 : - 1 1/4 = `
				</li>
				<li>
					`9/121 : 3/11 =`
				</li>
				<li>
					`4 1/4 + 1 3/4 : - 5/6 = `
				</li>
				<li>
					`1 1/3 * 3 : 2/9 = `
				</li>
			</ol>		
		</div>
	</div>

		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<div class="row">
				<div class="col-xs-5">
					<ol class="breuken">
						<li>
							`-2 2/3 + 1 2/3 + 2/3 =`<br>
							`-8/3 + 5/3 + 2/3 = -1/3`
						</li>
						<li>
							`2/5 + 3/4 - 1 1/2 =`<br>
							`8/20 + 15/20 - 30/20 = -7/20`
						</li>
						<li>
							`-2 3/4 - 1 1/3 + 1/6 = `<br>
							`-33/12 - 16/12 + 2/12 = - 47/12 = - 3 11/12`
						</li>
						<li>	
							`7/8 * 4/5 * 1 1/4 =`<br>
							`7/2 * 1/5 * 5/4 = 7/2 * 1/4 = 7/8`
						</li>
					</ol>				
				</div>
				<div class="col-xs-5">
					<ol class="breuken" start="5">
						<li>
							`-2 2/3 : - 1 1/4 = `<br>
							`-8/3 * -4/5 = 32/15 = 2 2/15`
						</li>
						<li>
							`9/121 : 3/11 =`<br>
							`9/121 * 11/3 = 3/11`
						</li>
						<li>
							`4 1/4 + 1 3/4 : - 5/6 = `<br>
							`17/4 - 7/4 * 6/5 = 85/20 - 42/20 = 43/20 = 2 3/20` 
						</li>
						<li>
							`1 1/3 * 3 : 2/9 = `<br>
							`4 * 9/2 = 18`</li>
					</ol>		
				</div>
			</div>
		</div>
	</div>
</div>

<p class="geeltje">
	Voor meer oefening met de <em>breuken</em> kun je op <a href="http://www.sommenprinter.nl/getalbegripvolgorde.php>">sommenprinter.nl</a> werkbladen met oefeningen op jouw niveau selecteren, maken en nakijken.
</p>

<div class="tekstblok opdracht" id="14">
	<h3>Opdracht 14 Voetbalgras</h3>
	<div class="row">
		<div class="col-xs-9">
			<p>
				Een voetbalveld wordt opnieuw ingezaaid.<br>
				Per vierkante meter is ongeveer 15 gram graszaad nodig.<br>
				Het veld is 100 bij 80 meter.
			</p>
			<ol>
				<li>
					Bereken de oppervlakte van het voetbalveld in `m^2`.
				</li>
				<li>
					Hoeveel kilo graszaad is er nodig om het hele veld in te zaaien?
				</li>
				<li>
					Hoeveel veel vierkante meter veld kun je inzaaien met 900 gram graszaad?
				</li>
			</ol>
		</div>
		<div class="col-xs-3">
			<img src="../afbeeldingen/analyse_leerjaar_1/graszaad.jpg" alt="graszaad" width="" height="" />
		</div>
	</div>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<em>A</em><sub>veld</sub> = 100 &sdot; 80 = 8.000 m<sup>2</sup><br>
					<p class="geeltje">
						De <em>A</em> komt van het Engels voor oppervlakte: <em>area</em>. De Nederlandse <em>O</em> van <em>oppervlakte</em> kun je makkelijk verwarren met de <em>O</em> van <em>omtrek</em>.
					</p>
				</li>
				<li>
					15 gram voor 1 m<sup>2</sup><br>
					15 &sdot; 8000 = 120.000 <em>gram</em> = 120 <em>kg</em><br>
					Er is 120 <em>kg</em> graszaad nodig om het hele veld in te zaaien.
				</li>
				<li>
					900 : 15 = 60<br>
					Je kunt 60 <em>m</em><sup>2</sup> veld inzaaien met 900 <em>gram</em> graszaad.
				</li>
			</ol>		
		</div>
	</div>

</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie A Woordformules</h3>
	<p>
		In de taak <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=a_1thv_lineaire_formules" target="_blank">Lineaire formules</a> zijn we bezig geweest met lineaire verbanden. Je hebt leren werken met het hellings- en startgetal. Met deze getallen kon je lineaire (woord)formules maken.  
	</p>
	<p>
		Een formule is een recept om iets mee uit te rekenen. Bekijk de afbeelding:
	</p>
	<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_1/tafelschikkingen_3.png">		
	<p>
		Als er een tafel bijkomt komen er twee stoelen bij. Het hellingsgetal is <span id="hellingsgetal">2</span> erbij.
	</p>  
	<p>
		De <span id="startgetal">éne</span> stoel aan kop van de tafel zit in ieder figuur. Het startgetal is <span id="startgetal">1</span>.
	</p>
	<p>
		De woordformule is dan: <em>Aantal stoelen</em> = <span id="hellingsgetal">2</span> &times; <em>nummer figuur</em> + <span id="startgetal">1</span>.
	</p>
	<p>
		Bij ieder recept hoort een <b>werkvolgorde</b>. Denk maar aan het bakken van een taart: eerst moet je het deeg maken, dan de vulling maken en in je taart stoppen en dan afbakken. Hanteer je de verkeerde volgorde, bijvoorbeeld eerst het deeg maken, dan afbakken en daarna de vulling erin dan geeft dit geen goed resultaat.  <br>
		Dit geldt ook voor het gebruiken van een formule. Dus ga je rekenen met formules, denk dan goed aan de rekenvolgorde!
	</p>	
</div>

<div class="tekstblok opdracht" id="15">
	<h3>Opdracht 15 Invullen en rekenen</h3>
	<p>
		<em>Aantal stoelen</em> = <span id="hellingsgetal">2</span> &times; <em>aantal tafels</em> + <span id="startgetal">1</span>
	</p>
	<ol>
		<li>
			Bereken met bovenstaande formule het aantal stoelen als ik 12 tafels heb.
		</li>
		<li>
			Harry heeft uitgerekend dat het antwoord van de vraag hierboven 36 moet zijn. Wat doet Harry fout?
		</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li><em>Aantal stoelen</em> = 1 + 2 x <em>aantal tafels<br></em>
				    <em>Aantal stoelen</em> = 1 + 2 x 12<br>
                    <em>Aantal stoelen</em> = 1 + 24<br>
                    <em>Aantal stoelen</em> = 25</li>
				<li>Harry heeft niet goed aan de rekenvolgorde gedacht. Je moet altijd eerst de vermenigvuldigen en dan pas optellen.<br>
					Hij heeft eerst opgeteld, <nobr>1 + 2 = 3</nobr>, en daarna vermenigvuldigd, <nobr>3 x 12 = 36</nobr>.</li>
			</ol>
		</div>
	</div>

</div>

<div class="tekstblok theorie analyse" id="theorieB">
	<h3>Theorie B Pijlenketting</h3>
	<p>
		Zoals je bij het bakken van een taart een werkvolgorde aanhoudt, zo moet je ook de rekenvolgorde aanhouden bij het rekenen met formules.
	</p>
	<p>
	 	Om deze rekenvolgorde niet te vergeten, kun je bij een formule een werkschema maken. Zo’n werkschema noemen we in de wiskunde een <b>pijlenketting</b>.
	</p>
	<p>
		Bij de woordformule:<br>
		<em>Aantal stoelen</em> = <span id="hellingsgetal">2</span> &sdot; <em>aantal tafels</em> + <span id="startgetal">1</span>
	</p>
	<p class="machten">
		hoort de pijlenketting:<br>
		<math>
			<mi>aantal tafels</mi>
			<mover>
				<mo>&rarr;</mo>
				<mo>&nbsp; &sdot;2 &nbsp;</mo>
			</mover>
			<mo>&nbsp; ... &nbsp;</mo>
			<mover>
				<mo>&rarr;</mo>
				<mo>&nbsp; &plus;1 &nbsp;</mo>
			</mover>
			<mi>aantal stoelen</mi>
		</math>
	
	</p>
	<p>
		Met die pijlenketting geef je alle rekenstappen aan. Links begin je met de <em>invoer</em>, boven de eerste pijl staat wat je als eerste met die invoer moet doen. In dit geval vermenigvuldigen met 2. Dan is er ruimte voor een tussenantwoord. Boven de tweede pijl staat wat je met dat tussenantwoord moet doen. In dit geval moet je er 1 bij op tellen. Helemaal rechts komt dan de <em>uitvoer</em>.
	</p>
	<p>
		<u>Voorbeeld</u>:<br>
		Bereken het aantal stoelen bij de 15 tafels.
	</p>
	<p>
		Vul `15` in voor <em>aantal tafels</em>
	</p>
	<p class="machten">
		<math>
			<mn>15</mn>
			<mover>
				<mo>&rarr;</mo>
				<mo>&nbsp; &sdot;2 &nbsp;</mo>
			</mover>
			<mo>&nbsp; 30 &nbsp;</mo>
			<mover>
				<mo>&rarr;</mo>
				<mo>&nbsp; &plus;1 &nbsp;</mo>
			</mover>
			<mn>31</mn>
		</math>
	</p>
	<p>
		Bij de <em>uitvoer</em> staat `31`. Het aantal stoelen bij de 15 tafels is 31.
	</p>		
</div>

<div class="tekstblok opdracht" id="16">
<h3>Opdracht 16 Pijlenketting maken</h3>
	<p>
		Pepijn spaart voor een nieuwe vliegende bezem. Het bedrag dat hij spaart, kun je berekenen met de volgende formule:<br>
		<em>Bedrag in €</em> = 3 &sdot; <em>aantal weken</em> + 10
	</p>
	<ol>
		<li class="machten">
			Neem de pijlenketting over en maak hem af.<br>
			<math>
				<mi>aantal weken</mi>
				<mover>
					<mo>&rarr;</mo>
					<mo>&nbsp; &sdot;... &nbsp;</mo>
				</mover>
				<mo>&nbsp; ... &nbsp;</mo>
				<mover>
					<mo>&rarr;</mo>
					<mo>&nbsp; &plus;...&nbsp;</mo>
				</mover>
				<mn>...</mn>
			</math>
		</li>
		<li>
			Wat is de invoer bij deze pijlenketting?
		</li>
		<li>
			Wat is de uitvoer bij deze pijlenketting?
		</li>
		<li>
			Bereken met behulp van de pijlenketting het bedrag na 32 weken.
		</li>
		<li>
			Bereken met behulp van de pijlenketting het bedrag na 119 weken.
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<math>
						<mi>aantal weken</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;3 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;10 &nbsp;</mo>
						</mover>
						<mi>Bedrag in €</mi>
					</math>
				</li>
				<li>
					Invoer is het <em>aantal weken</em>.
				</li>
				<li>
					Uitvoer is het <em>Bedrag in €</em>.
				</li>
				<li>
					<math>
						<mi>32</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;3 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 96 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&plus; 10 &nbsp;</mo>
							&nbsp;
						</mover>
						<mi>106</mi>
					</math><br>
					Na 32 weken is er 106 euro gespaard.
				</li>
				<li>
					<math>
						<mi>119</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;3 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 357 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;10 &nbsp;</mo>
						</mover>
						<mi>367</mi>
					</math><br>
					Na 119 weken is er 367 euro gespaard.
				</li>
			</ol>

		</div>
	</div>
	
</div>

<div class="tekstblok opdracht" id="17">
	<h3>Opdracht 17 Woordformule en pijlenketting</h3>
	<p>
		Een taxichauffeur rekent €6,50,- voorrijkosten en €2,50 per kilometer. 
	</p>
	<ol class="machten">
		<li>
			Maak een woordformule waarmee je de totale ritprijs kunt uitrekenen als je het aantal gereden kilometers weet.
		</li>
		<li>
			Maak een pijlenketting bij de formule.	
		</li> 
		<li>
			Bereken met de pijlenketting de kosten van een ritje van 23 kilometer.
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol class="machten">
				<li>
					<em>Totale ritprijs</em> = 2,50 &sdot; <em>aantal kilometer</em> + 6,50
				</li>
				<li>
					<math>
						<mi>aantal kilometer</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;2,50 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;6,50 &nbsp;</mo>
						</mover>
						<mi>Totale ritprijs</mi>
					</math>
				</li>
				<li>
					<math>
						<mi>23</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot; 2,50 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 57,50 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus; 6,50 &nbsp;</mo>
						</mover>
						<mi>64</mi>
					</math><br>
					Een ritje van 23 kilometer kost 64 euro.
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieC">
	<h3>Theorie C Pijlenketting nogmaals</h3>
	
	<p>
		Nog een voorbeeld hoe je een pijlenketting moet maken. Merk op dat de formule verschilt in opbouw.
	</p>
	<p>
		Neem de volgende formule: <em>Bedrag in €</em> = 4 + 3 &sdot; <em>aantal uur</em>
	</p>
	
	<div class="row">
		<div class="col-xs-12">
			<table class="table">
				<tbody>
					<tr>
						<td width="70">
							Stap 1
						</td>
						<td>
							Begin links met de <b>invoer</b>. 
						</td>
						<td>
							<math class="machten">
								<mi>aantal uur</mi>
								<mover>
									<mo>&rarr;</mo>
									<mo>...</mo>
								</mover>
								<mo>&nbsp; ... &nbsp;</mo>
								<mover>
									<mo>&rarr;</mo>
									<mo>...</mo>
								</mover>
								<mi>...</mi>
							</math>
						</td>
					</tr>
				<tr>
					<td>
						Stap 2
					</td>
					<td>
						Vermenigvuldigen heeft voorrang, boven de eerste pijl komt <code class="code">&sdot;3</code>.
					</td>
					<td>
						<math class="machten">
							<mi>aantal uur</mi>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp;&sdot;3&nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
							<mover>
								<mo>&rarr;</mo>
								<mo>...</mo>
							</mover>
							<mi>...</mi>
						</math>
					</td>
				</tr>
				<tr>
					<td>
						Stap 3
					</td>
					<td>
						Optellen na het tussenantwoord, boven de tweede pijl komt <code class="code">+4</code>.
					</td>
					<td>
						<math>
							<mi>aantal uur</mi>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp; &sdot;3 &nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp; &plus;4 &nbsp;</mo>
								&nbsp;
							</mover>
							<mi>...</mi>
						</math>
					</td>
				</tr>
				<tr>
					<td>
						Stap 4
					</td>
					<td>
						Eindig rechts met de <b>uitvoer</b>.
					</td>
					<td>
						<math>
							<mi>aantal uur</mi>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp; &sdot;3 &nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp; &plus;4 &nbsp;</mo>
								&nbsp;
							</mover>
							<mi>Bedrag in €</mi>
						</math>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="18">
	<h3>Opdracht 18 Pijlenketting</h3>
	<p>
		Gegeven is de volgende woordformule:<br>
		<em>Kosten treinkaartje</em> = 1,20 + 0,18 &sdot; <em>aantal kilometer</em>
	</p>
	<ol>
		<li>
			Neem de pijlenketting over en vul hem in.<br>
			<math class="machten">
				<mi>aantal kilometer</mi>
				<mover>
					<mo>&rarr;</mo>
					<mo>&nbsp; &sdot;... &nbsp;</mo>
				</mover>
				<mo>&nbsp; ... &nbsp;</mo>
				<mover>
					<mo>&rarr;</mo>
					<mo>&nbsp; &plus;... &nbsp;</mo>
				</mover>
				<mi>Kosten treinkaartje</mi>
			</math>
		</li>
		<li>
			Bereken met de pijlenketting de kosten van een treinrit over 27 km.
		</li>
	</ol>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						<math class="machten">
							<mi>aantal kilometer</mi>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp; &sdot;0,18 &nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp; &plus;1,20 &nbsp;</mo>
							</mover>
							<mi>Kosten treinkaartje</mi>
						</math>
					</li>
					<li>
						<math class="machten">
							<mi>27</mi>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp; &sdot;0,18 &nbsp;</mo>
							</mover>
							<mo>&nbsp; 4,86 &nbsp;</mo>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp; &plus;1,20 &nbsp;</mo>
							</mover>
							<mi>6,06</mi>
						</math>
						<br>
						Een treinrit van 27 km kost € 6,06.					
					</li>
				</ol>				
			</div>
		</div>
</div>

<div class="tekstblok opdracht" id="19">
	<h3>Opdracht 19 Pijlenketting</h3>
	<p>
		Gegeven is de volgende woordformule:<br>
		<em>Huurprijs in €</em> = 12 × </em>aantal dagen</em> + 50
	</p>
	<ol>
		<li>
			Neem de pijlenketting over en vul hem in.<br>
			<math class="machten">
				<mi>aantal dagen</mi>
				<mover>
					<mo>&rarr;</mo>
					<mo>&nbsp; &sdot;... &nbsp;</mo>
				</mover>
				<mo>&nbsp; ... &nbsp;</mo>
				<mover>
					<mo>&rarr;</mo>
					<mo>&nbsp; &plus;... &nbsp;</mo>
				</mover>
				<mi>Huurprijs in €</mi>
			</math>
		</li>
		<li>
			Bereken met de pijlenketting de huurprijs bij 8 dagen.
		</li>
	</ol>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						<math class="machten">
							<mi>aantal dagen</mi>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp; &sdot;12 &nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp; &plus;50 &nbsp;</mo>
							</mover>
							<mi>Huurprijs in €</mi>
						</math>
					</li>
					<li>
						<math class="machten">
							<mi>8</mi>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp; &sdot;12 &nbsp;</mo>
							</mover>
							<mo>&nbsp; 96 &nbsp;</mo>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp; &plus;50 &nbsp;</mo>
							</mover>
							<mi>146</mi>
						</math>
						<br>
						8 dagen huren, kost € 146,-.					
					</li>
				</ol>		
			</div>
		</div>
</div>

<div class="tekstblok theorie analyse" id="theorieD">
<h3>Theorie D Van woordformule naar formule</h3>
	<div class="row">
		<div class="col-xs-8">
			<p>
				In een <b>woordformule</b> gebruik je woorden om het <b>verband</b> tussen <b>invoer</b> en <b>uitvoer</b> uit te drukken.
			</p>
			<p>
				<u>Voorbeeld</u>:<br>
				<em>aantal sterren</em> = 2 &times; <em>nummer figuur</em> + 3
			</p>
			<p>
				Als je in plaats van woorden <b>letters</b> gebruikt, krijg je een <b>formule</b>:<br>
				<em>s</em> = 2 &sdot; <em>n</em> + 3<br>
				Met <em>s</em> voor <em>aantal sterren</em> en <em>n</em> voor <em>nummer figuur</em>
			</p>
			</div>
		<div class="col-xs-4">
		<img src="../afbeeldingen/analyse_leerjaar_1/invoer_formule_uitvoer.png" alt="invoer_formule_uitvoer" width="" height="" />
		</div>
	</div>	
	<p class="geeltje">
		Het product van een getal met een variabele schrijf je zonder vermenigvuldigingsteken. <br>
		`2 * x = 2x`
	</p>
	<div class="row">
		<div class="col-xs-8">
			<p>
				Het vermenigvuldigingsteken tussen een getal en een letter, laten we voortaan weg. De formule wordt dan:<br>
				<em>s</em> = 2<em>n</em> + 3<br>
			</p>
			<p>
				De letters in formules noemen we <b>variabelen</b>. Variabelen zijn meestal de eerste letters van de woorden uit de woordformule. Als je niet weet wat de invoer of uitvoer is of betekent, gebruik je <b><em>x</em></b> voor  <em>invoer</em> en <b><em>y</em></b> voor <em>uitvoer</em>. In dit geval zou je de formule kunnen herschrijven als:<br>
				<em>y</em> = 2<em>x</em> + 3<br>
			</p>	
			
		</div>
		<div class="col-xs-4">
		<img src="../afbeeldingen/analyse_leerjaar_1/x_formule_y.png" alt="x_formule_y" width="" height="" />
		</div>
	</div>
	
	<p class="geeltje">
		Merk op dat sowieso het teken <code>&times;</code> verwarring oplevert met de letter `x`, daarom gebruiken we de <code>&sdot;</code> als vermenigvuldigingsteken zodra we met variabelen werken.
	</p>	
</div>

<div class="tekstblok opdracht" id="20"><h3>Opdracht 20 Schilder <em>Van Wanten</em></h3>
	<p>
		De woonkamer van Harry is aan een flinke opknapbeurt toe. Al zijn wanden moeten worden geschilderd. Hij kan zelf niet goed schilderen en dus vraagt hij een aantal offertes op. Schildersbedrijf <em>Van Wanten</em> geeft Harry de volgende woordformule op waarmee zij het bedrag berekenen:<br>
		<em>Bedrag in €</em> = 52 + 18 &times; <em>aantal uren</em>.
	</p>
	<ol>
		<li>
			Maak een formule met letters van de woordformule. Neem <em>B</em> voor <em>Bedrag in €</em> en <em>u</em> voor <em>aantal uren</em>.
		</li>
		<li>
			Maak een pijlenketting bij deze formule met variabelen. Let op de volgorde.
		</li>
		<li>
			Hoeveel moet Harry betalen als de schilder 9 uur aan het schilderen is geweest?
		</li>
		<li>
			Bereken `B` met de pijlenketting als `u = 12`. Wat heb je nu uitgerekend?
		</li>
		<li>
			Bereken `B` met de pijlenketting als `u = 15`.
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`B = 52 + 18u` of<br>
					`B = 18u + 52`
				</li>
				<li>
					<math class="machten">
						<mi>aantal uren</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;18 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;52 &nbsp;</mo>
						</mover>
						<mi>Bedrag in €</mi>
					</math>
				</li>
				<li>
					<math class="machten">
						<mi>9</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;18 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 162 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;52 &nbsp;</mo>
						</mover>
						<mi>214</mi>
					</math>
					<br>
					Voor 9 uur betaalt hij € 214,-.
				</li>
				<li>
					<math class="machten">
						<mi>12</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;18 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 216 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;52 &nbsp;</mo>
						</mover>
						<mi>268</mi>
					</math>
					<br>
					Je hebt uitgerekend hoeveel Harry moet betalen als er 12 uur geschilderd wordt.
				</li>
				<li>
					<math class="machten">
						<mi>15</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;18 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 270 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;52 &nbsp;</mo>
						</mover>
						<mi>322</mi>
					</math>
					<br>
					15 uur schilderen kost 322 euro.
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="21">
	<h3>Opdracht 21 Pijlenketting</h3>
	<p>
		Gegeven is de volgende formule: <nobr><em>b</em> = 4 + 7<em>u</em></nobr>.
	</p>
	<ol>
		<li>
			Neem over en vul de pijlenketting in:<br>
			<math class="machten">
				<mi>u</mi>
				<mover>
					<mo>&rarr;</mo>
					<mo>&nbsp; &sdot;... &nbsp;</mo>
				</mover>
				<mo>&nbsp; ... &nbsp;</mo>
				<mover>
					<mo>&rarr;</mo>
					<mo>&nbsp; &plus;... &nbsp;</mo>
				</mover>
				<mi>b</mi>
			</math>
		</li>		
		<li>
			Neem <em>u</em> = 5 en bereken <em>b</em> met behulp van de pijlenketting.
		</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<math class="machten">
						<mi>u</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;7 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;4 &nbsp;</mo>
						</mover>
						<mi>b</mi>
					</math>
				</li>
				<li>
					<math class="machten">
						<mi>5</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;7 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 35 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;4 &nbsp;</mo>
						</mover>
						<mi>39</mi>
					</math>
					<br>
					Als `u=5`, dan `b=39`.
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="22">
	<h3>Opdracht 22 pijlenketting</h3>
	<p>
		Gegeven is de volgende formule: <nobr><em>b</em> = 23 + 12<em>u</em></nobr>.
	</p>
	<ol>
		<li>
			Neem over en vul de pijlenketting in:<br>
			<math class="machten">
				<mi>...</mi>
				<mover>
					<mo>&rarr;</mo>
					<mo>&nbsp; &sdot;... &nbsp;</mo>
				</mover>
				<mo>&nbsp; ... &nbsp;</mo>
				<mover>
					<mo>&rarr;</mo>
					<mo>&nbsp; &plus;... &nbsp;</mo>
				</mover>
				<mi>...</mi>
			</math>
		</li>
		<li>
			Neem <em>u</em> = 3 en bereken <em>b</em> met behulp van de pijlenketting.
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<math class="machten">
						<mi>u</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;12 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;12 &nbsp;</mo>
						</mover>
						<mi>b</mi>
					</math>
				</li>
				<li>
					<math class="machten">
						<mi>3</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;12 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 36 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;23 &nbsp;</mo>
						</mover>
						<mi>59</mi>
					</math>
					<br>
					Als `u=3`, dan `b=59`.
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="23">
	<h3>Opdracht 23 Pijlenketting</h3>
	<p>
		Gegeven is de volgende formule: <nobr><em>q</em> = 5<em>r</em> - 12</nobr>.
	</p>
	<ol>
		<li>Maak de pijlenketting voor bovenstaande formule.</li>
		<li>Bereken <em>q</em> als <em>r</em> = 7. Gebruik de pijlenketting.</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<math class="machten">
						<mi>r</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;5 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &minus;12 &nbsp;</mo>
						</mover>
						<mi>q</mi>
					</math>
				</li>
				<li>
					<math class="machten">
						<mi>7</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;5 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 35 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &minus;12 &nbsp;</mo>
						</mover>
						<mi>23</mi>
					</math>
					<br>
					`q=23`, als `r=7`.
				</li>	
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="24">
	<h3>Opdracht 24 Pijlenketting</h3>
	<p>
		Gegeven zijn de volgende formules:<br>
		<nobr><em>q</em> = -7 + 2<em>r</em></nobr><br>
		<nobr><em>q</em> = 2<em>r</em> - 7</nobr>
	</p>
	<ol>
		<li>
			Maak een assenstelsel met horizontaal de <em>r</em>-as van -2 tot en met 4 en verticaal de <em>q</em>-as van -8 tot en met 2. Teken de grafieken bij beide formules in dit assenstelsel. Maak eventueel eerst een tabel.
		</li>  
		<li>
			Maak de pijlenketting bij beide formules.
		</li>
		<li>
			Leg uit waarom de formule aan elkaar gelijk zijn.
		</li>
		<li>
			Bereken <em>q</em> als <em>r</em> = 6. Gebruik de pijlenketting.
		</li>
		<li>
			Bereken <em>q</em> als <em>r</em> = -3. Gebruik de pijlenketting.
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<img class="img-small" src="../afbeeldingen/analyse_leerjaar_1/qis2rmin7.png" alt="qis2rmin7" width="" height="" />
				</li>
				<li>
					<math class="machten">
						<mi>r</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;2 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &minus;7 &nbsp;</mo>
						</mover>
						<mi>q</mi>
					</math>
					<br>
					Pijlenketting hoort bij beide formules.
				</li>	
				<li>
					Vermenigvuldigen gaat voor aftrekken. 
				</li>
				<li>
					<math class="machten">
						<mi>6</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;2 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 12 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &minus;7 &nbsp;</mo>
						</mover>
						<mi>5</mi>
					</math>
					<br>
					`q=5`, als `r=6`						
				</li>	
				<li>
					<math class="machten">
						<mi>-3</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;2 &nbsp;</mo>
						</mover>
						<mo>&nbsp; -6 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &minus;7 &nbsp;</mo>
						</mover>
						<mi>-13</mi>
					</math>
					<br>
					`q=-13`, als `r=-3`	
				</li>					
			</ol>
		</div>
	</div>
</div>

<p class="geeltje">
	Vragen over het tekenen van grafieken bij lineaire formules? Ga naar <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=a_1thv_lineaire_formules#theorieF">Lineaire formules</a>.
</p>

<div class="tekstblok opdracht" id="25">
	<h3>Opdracht 25 Pijlenketting</h3>
	<p>
		Gegeven is de volgende formule: <nobr><em>q</em> = 15 - 3<em>r</em></nobr>.
	</p>
	<ol>
		<li>Maak de pijlenketting voor bovenstaande formule.</li>
		<li>Bereken <em>q</em> als <em>r</em> = 7. Gebruik de pijlenketting.</li>
		<li>Bereken <em>q</em> als <em>r</em> = -4. Gebruik de pijlenketting.</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<math class="machten">
						<mi>r</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;-3 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;15 &nbsp;</mo>
						</mover>
						<mi>q</mi>
					</math>
				</li>	
				<li>
					<math class="machten">
						<mi>7</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;-3 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 21 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;15 &nbsp;</mo>
						</mover>
						<mi>-6</mi>
					</math>
					<br>
					`q=-6`, als `r=7`	
				</li>	
				<li>
					<math class="machten">
						<mi>-4</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;-3 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 12 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;15 &nbsp;</mo>
						</mover>
						<mi>27</mi>
					</math>
					<br>
					`q=27`, als `r=-4`	
				</li>					
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="26">
	<h3>Opdracht 26 Pijlenketting</h3>
	<p>
		Gegeven is de volgende formule: <nobr><em>a</em> = -7 - 4<em>t</em></nobr>.
	</p>
	<ol>
		<li>Maak de pijlenketting voor bovenstaande formule.</li>
		<li>Bereken <em>a</em> als <em>t</em> = 5. Gebruik de pijlenketting.</li>
		<li>Bereken <em>a</em> als <em>t</em> = -5. Gebruik de pijlenketting.</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<math class="machten">
						<mi>t</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;-4 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &minus;7 &nbsp;</mo>
						</mover>
						<mi>a</mi>
					</math>
				</li>	
				<li>
					<math class="machten">
						<mi>5</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;-4 &nbsp;</mo>
						</mover>
						<mo>&nbsp; -20 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &minus;7 &nbsp;</mo>
						</mover>
						<mi>-27</mi>
					</math>
					<br>
					`a=-27`, als `t=5`	
				</li>	
				<li>
					<math class="machten">
						<mi>-5</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;-4 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 20 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &minus;7 &nbsp;</mo>
						</mover>
						<mi>13</mi>
					</math>
					<br>
					`a=13`, als `t=-5`	
				</li>					
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieE">
	<h3>Theorie E Extra mooie pijlenkettingen (uitdaging)</h3>
	<div class="row">
		<div class="col-md-7">
			<p>
				Zoals je gezien hebt, is het erg belangrijk dat je weet wat de rekenvolgorde is!<br>
				Met haakjes wordt het nog leuker. 
			</p>
		</div>
		<div class="col-md-5">
			<p class="geeltje">
				<u>Let op</u>:
				<br>
				3(4 + 5) = 3 &sdot; (4 + 5) = 27
				<br>
				-(2 + 6) = -1 &sdot; (2 + 6) = -8
			</p>
		</div>
	</div>
	<p>
		<u>Voorbeeld</u>:<br>
		Maak een pijlenketting bij de volgende formule: <br>
		<nobr><em>b</em> = -5(3<em>u</em> - 15) + 2 </nobr>
	</p>

	<div class="row">
		<div class="col-xs-12">
			<table class="table">
				<tbody>
					<tr>
						<td width="70">
							Stap 1
						</td>
						<td>
							Begin met de variabele van de invoer. 
						</td>
						<td>
							<math class="machten">
								<mi>u</mi>
								<mover>
									<mo>&rarr;</mo>
									<mo>...</mo>
								</mover>
								<mo>&nbsp; ... &nbsp;</mo>
							</math>
						</td>
					</tr>
				<tr>
					<td>
						Stap 2
					</td>
					<td>
						Eerst binnen de haakjes.<br>
						Vermenigvuldigen komt voor aftrekken, 
						boven de eerste pijl komt <code class="code">&sdot;3</code>. <br>
						Boven de tweede pijl komt <code class="code">-15</code>.
					</td>
					<td>
						<math class="machten">
							<mi>u</mi>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp;&sdot;3&nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp;&minus;15&nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
						</math>
					</td>
				</tr>
				<tr>
					<td>
						Stap 3
					</td>
					<td>
						Het tussenantwoord binnen de haakjes wordt vermenigvuldigt met -5. 
						Boven de derde pijl komt <code class="code">&sdot; -5</code>.
					</td>
					<td>
						<math class="machten">
							<mi>u</mi>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp;&sdot;3&nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp;&minus;15&nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp;&sdot;-5&nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
						</math>
					</td>
				</tr>
				<tr>
					<td>
						Stap 4
					</td>
					<td>
						Als laatste bewerking wordt er 2 opgeteld, boven de vierde pijl komt <code class="code">+2</code>. <br>
						Sluit af met de uitvoer.
					</td>
					<td>
						<math class="machten">
							<mi>u</mi>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp;&sdot;3&nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp;&minus;15&nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp;&sdot;-5&nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
							<mover>
								<mo>&rarr;</mo>
								<mo>&nbsp;&plus;2&nbsp;</mo>
							</mover>
							<mi> b</mi>
						</math>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="27">
	<h3>Opdracht 27 Extra mooie pijlenkettingen (uitdaging)</h3>
	<p>
		Gegeven is de volgende formule: <nobr><em>y</em> = -3(4<em>x</em> + 12) - 5</nobr>.
	</p>
	<ol>
		<li>Maak de pijlenketting voor bovenstaande formule.</li>
		<li>Bereken <em>y</em> als <em>x</em> = 6. Gebruik de pijlenketting.</li>
		<li>Hoe groot is <em>y</em> als je weet dat <em>x</em> = -4? Gebruik de pijlenketting.</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<math class="machten">
						<mi>x</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;4 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&plus;12&nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;-3&nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&minus;5&nbsp;</mo>
						</mover>
						<mi>y</mi>
					</math>
				</li>
				<li>
					<math class="machten">
						<mi>6</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;4 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 24 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&plus;12&nbsp;</mo>
						</mover>
						<mo>&nbsp; 36 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;-3&nbsp;</mo>
						</mover>
						<mo>&nbsp; -108 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&minus;5&nbsp;</mo>
						</mover>
						<mi>-113</mi>
					</math>
					<br>
					`y=-113`, als `x=6`
				</li>
				<li>
					<math class="machten">
						<mi>-4</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;4 &nbsp;</mo>
						</mover>
						<mo>&nbsp; -16 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&plus;12&nbsp;</mo>
						</mover>
						<mo>&nbsp; -4 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;-3&nbsp;</mo>
						</mover>
						<mo>&nbsp; 12 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&minus;5&nbsp;</mo>
						</mover>
						<mi> 7</mi>
					</math>
					<br>
					`y=7`, als `x=-4`
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="28">
	<h3>Opdracht 28 Extra mooie pijlenkettingen (uitdaging)</h3>
	<p>
		Maak bij elke formule een pijlenketting en bereken <em>y</em> als <em>x</em> = 3 en als <em>x</em> = -3.
	</p>
	<ol class="machten">
		<li>
			<nobr><em>y</em> = 3(12 - 4<em>x</em>) + 15</nobr>
		</li>
		<li>
			<nobr><em>y</em> = -(2<em>x</em> - 1) - 7</nobr>
		</li>
		<li>
			<nobr><em>y</em> = 13- 2(<em>x</em><sup>2</sup> + 10)</nobr>
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol class="machten">
				<li>
					<math class="machten">
						<mi>3</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;-4 &nbsp;</mo>
						</mover>
						<mo>&nbsp; -12 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&plus;12&nbsp;</mo>
						</mover>
						<mo>&nbsp; 0 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;3&nbsp;</mo>
						</mover>
						<mo>&nbsp; 0 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&plus;15&nbsp;</mo>
						</mover>
						<mi>15</mi>
						<br>
						`y=15`, als `x=3`
					</math>
					<br>
					<math class="machten">
						<mi>-3</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;-4 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 12 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&plus;12&nbsp;</mo>
						</mover>
						<mo>&nbsp; 24 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;3&nbsp;</mo>
						</mover>
						<mo>&nbsp; 72 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&plus;15&nbsp;</mo>
						</mover>
						<mi>y</mi>
					</math>
					<br>
					`y=87`, als `x=-3`
				</li>
				<li>
					<math class="machten">
						<mi>3</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;2 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 6 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&minus;1&nbsp;</mo>
						</mover>
						<mo>&nbsp; 5 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;-1&nbsp;</mo>
						</mover>
						<mo>&nbsp; -5 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&minus;7&nbsp;</mo>
						</mover>
						<mi>-12</mi>
					</math>
					<br>
					`y = -12`, als `x= 3`
					<br>
					<math class="machten">
						<mi>-3</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;2 &nbsp;</mo>
						</mover>
						<mo>&nbsp; -6 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&minus;1&nbsp;</mo>
						</mover>
						<mo>&nbsp; -7 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;-1&nbsp;</mo>
						</mover>
						<mo>&nbsp; 7 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&minus;7&nbsp;</mo>
						</mover>
						<mi>0</mi>
					</math>
					<br>
					`y = 0`, als `x= -3`
				</li>
				<li>
					<math class="machten">
						<mi>3</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;kwadraat &nbsp;</mo>
						</mover>
						<mo>&nbsp; 9 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&plus;10&nbsp;</mo>
						</mover>
						<mo>&nbsp; 19 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;-2&nbsp;</mo>
						</mover>
						<mo>&nbsp; -38 &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&plus;13 &nbsp;</mo>
						</mover>
						<mi>-25</mi>
					</math>
					<br>
					`y = -25`, als `x= 3` en als `x = -3`<br>
					Bedenk dat `(-3)^2 = 3^2`.
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht">
	<h3>Vrije opdracht: Extra mooie pijlenkettingen (uitdaging)</h3>
	<p>
		Via deze <a href="http://www.fisme.science.uu.nl/toepassingen/02034/" target="_blank">applet</a> kun je oefenen met het maken van pijlenkettingen. Bovenin het scherm staat steeds de formule. Sleep steeds de juiste bewerking in het scherm en vul daar het juiste getal in. Verbind alle bewerkingen met pijlen. Eindig met de uitvoer pijl.
	</p>
</div>

<div class="tekstblok opdracht" id="29">
	<h3>Opdracht 29 Niet verdwalen in de Ensanche</h3>
	<p>
		In Barcelona is een wijk met een bijzondere plattegrond. De wijk heet de de Ensanche, dat is Spaans voor de ‘uitbreiding’, omdat het ooit een nieuw deel van de stad was. De plattegrond is een beetje saai, maar de huizen en winkels zijn leuk en verschillend. Hier is een stuk van de plattegrond. De grijze vakjes zijn de huizenblokken.
	</p>
	<img class="img-responsive img-mediium" src="afbeeldingen/analyse_leerjaar_1/ensanche_opdr.png">
	<p>
		Je dwaalt van A naar B, via allerlei kleine pleintjes. Om niet te verdwalen, houd je de route bij op een papiertje: naar het oosten, 1 blok; naar het noorden, 2 huizenblokken; et cetera.
	</p>
	<p>
		Die notatie kan korter, schrijf het zo: O1  N2.
	</p>
	<ol>
		<li>
			Maak deze routebeschrijving af tot aan plein B.
		</li>
		<p>
			Ergens onderweg was een ijstentje. Waar, dat weet je niet meer. Daarom ga je precies dezelfde weg terug.
		</p>
		<li>
			Noteer de routebeschrijving voor de terugweg van B naar A.
		</li>
		<p>
			Tamara heeft vanaf een bepaald punt het volgende patroon vier keer gelopen. Zo schreef ze de route op: Vier keer [ O3  N2  W1  Z1].
		</p>
		<li>
			Hier is het begin getekend. Neem de tekening over en maak de route af.
		</li>
		<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_1/ensanche_opdr2.png">
		<li>
			Noteer net zo kort precies de route terug.
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>O1 N2 O3 N2 O2 Z3 W1 Z2 O2 N4 O1</li>
				<li>W1 Z4 W2 N2 O1 N3 W2 Z2 W3 Z2 W1</li>
				<li><img src="afbeeldingen/analyse_leerjaar_1/ensanche_antw2.png"></li>
				<li>N1 O1 Z2 W3 N1 O1 Z2 W3 N1 O1 Z2 W3 N1 O1 Z2 W3.</li>
			</ol>
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="30">
	<h3>Opdracht 30 Terugrekenen</h3>
	<p>
		De vorige opdracht ging over terugwandelen. Nu gaat het over terugrekenen. Het scheelt weinig, let maar op.	
	</p>
	<ol>	
		<li>
			Begin met het getal 4. Doe drie keer het volgende:<br>
			vermenigvuldig met 3 en haal er 1 af. <br>
			De uitkomst die je vindt, ligt al boven de 80! Wat is die uitkomst precies?
		</li>
		<li>
			Stel je voor: Pascal is met een ander getal begonnen, maar jij weet niet welk getal. Pascal doet hetzelfde als jij deed, en zegt: “Ik heb 41 als uitkomst!”. Met welk getal is Pascal begonnen? Hoe heb je dat achterhaald?
		</li>
	</ol>
	<p>
		Je kunt het spel opschrijven als een route (pijlenketting) van begingetal (invoer) naar eindgetal (uitvoer):
	</p>
	<p class="machten">
		<math>
			<mtext>Begingetal</mtext>&nbsp;
			<mover>
				<mo>&rarr;</mo>
				<mo>&nbsp;&sdot;3 &nbsp;</mo>
			</mover>
			<mo>&nbsp;...&nbsp;</mo>
			<mover>
				<mo>&rarr;</mo>
				<mo>&nbsp; &minus;1 &nbsp;</mo>
			</mover>
			<mo>&nbsp;...&nbsp;</mo>
			<mover>
				<mo>&rarr;</mo>
				<mo>&nbsp;&sdot;3 &nbsp;</mo>
			</mover>
			<mo>&nbsp;...&nbsp;</mo>
			<mover>
				<mo>&rarr;</mo>
				<mo>&nbsp; &minus;1 &nbsp;</mo>
			</mover>
			<mo>&nbsp;...&nbsp;</mo>
			<mover>
				<mo>&rarr;</mo>
				<mo>&nbsp;&sdot;3 &nbsp;</mo>
			</mover>
			<mo>&nbsp;...&nbsp;</mo>
			<mover>
				<mo>&rarr;</mo>
				<mo>&nbsp; &minus;1 &nbsp;</mo>
			</mover>
			&nbsp;<mtext>Eindgetal</mtext>
		</math>
	</p>
	<ol start="3">
		<li>
			Neem de pijlenketting over en vul '41' als uitvoer in.
		</li>
	</ol>
	<p>
		Hieronder is de omgekeerde pijlenketting gemaakt.
	</p>
	<p class="machten">
		<math>
			<mtext>Begingetal</mtext>&nbsp;
			<mover>
				<mo>&larr;</mo>
				<mo>&nbsp;&divide;3 &nbsp;</mo>
			</mover>
			<mo>&nbsp;...&nbsp;</mo>				
			<mover>
				<mo>&larr;</mo>
				<mo>&nbsp; &plus;1 &nbsp;</mo>
			</mover>
			<mo>&nbsp;...&nbsp;</mo>
			<mover>
				<mo>&larr;</mo>
				<mo>&nbsp;&divide;3 &nbsp;</mo>
			</mover>
			<mo>&nbsp;...&nbsp;</mo>
			<mover>
				<mo>&larr;</mo>
				<mo>&nbsp; &plus;1 &nbsp;</mo>
			</mover>
			<mo>&nbsp;...&nbsp;</mo>
			<mover>
				<mo>&larr;</mo>
				<mo>&nbsp;&divide;3 &nbsp;</mo>
			</mover>
			<mo>&nbsp;...&nbsp;</mo>
			<mover>
				<mo>&larr;</mo>
				<mo>&nbsp; &plus;1 &nbsp;</mo>
			</mover>
			&nbsp;<mi>41</mi>
		</math>
	</p>
	<ol start="4">
		<li>
			Wat valt je op?
		</li>
		<li>
			Neem de omgekeerde pijlenkettingen over en reken terug van Eindgetal naar Begingetal, werk van rechts naar links.
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol class="machten">
				<li>
					4 x 3 - 1 = 11<br>
				    11 x 3 - 1 = 32<br>
				    32 x 3 - 1 = 95
				 </li>
				<li>
					(41 + 1) : 3 = 14<br>
				    (14 + 1) : 3 = 5<br>
				    (5 + 1) : 3 = 2<br>
				    Pascal is dus met het getal 2 begonnen!
				 </li>
				 <li>
					<math>
						<mtext>Begingetal</mtext>&nbsp;
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;3 &nbsp;</mo>
						</mover>
						<mo>&nbsp;...&nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &minus;1 &nbsp;</mo>
						</mover>
						<mo>&nbsp;...&nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;3 &nbsp;</mo>
						</mover>
						<mo>&nbsp;...&nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &minus;1 &nbsp;</mo>
						</mover>
						<mo>&nbsp;...&nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp;&sdot;3 &nbsp;</mo>
						</mover>
						<mo>&nbsp;...&nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &minus;1 &nbsp;</mo>
						</mover>
						&nbsp;<mtext>41</mtext>
					</math>
				 </li>
				<li>
					Het valt op dat de pijlen de andere kant op wijzen en dat de bewerkingen steeds tegengesteld zijn.
				</li>
				<li>
					<math>
						<mi>2</mi>&nbsp;
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp;&divide;3 &nbsp;</mo>
						</mover>
						<mo>&nbsp;6&nbsp;</mo>				
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &plus;1 &nbsp;</mo>
						</mover>
						<mo>&nbsp;5&nbsp;</mo>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp;&divide;3 &nbsp;</mo>
						</mover>
						<mo>&nbsp;15&nbsp;</mo>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &plus;1 &nbsp;</mo>
						</mover>
						<mo>&nbsp;14&nbsp;</mo>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp;&divide;3 &nbsp;</mo>
						</mover>
						<mo>&nbsp;42&nbsp;</mo>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &plus;1 &nbsp;</mo>
						</mover>
						&nbsp;<mi>41</mi>
					</math>
				</li>				
			</ol>
		</div>
	</div>
		
</div>

<div class="tekstblok opdracht" id="31">
	<h3>Opdracht 31 Raadsels</h3>
	<p>
		Vind steeds het antwoord op de raadsels. Gebruik daarbij routes of teken pijlenkettingen!
	</p>
	<ol>	
		<li>
			Ik heb een getal in gedachten!<br>
			Ik doe het getal keer 7, min 6, gedeeld door 5, plus 4, maal 3.<br>
			Nu heb ik 1008.<br>
			Welk getal had ik in gedachten?
		</li>	
		<li>
			Ik heb een getal in gedachten, neem het kwadraat ervan en tel er 5 bij op.<br>
			Nu heb ik 69.<br>
			Maak een pijlenketting en zoek uit of je het getal kunt vinden.
		</li>
		<li>
			Waren er meer antwoorden mogelijk bij het raadsel van b.?
		</li>
		<li>
			Bedenk zelf een raadsel. Geef elkaar je raadsels op om op te lossen.
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<br>
					<img src="afbeeldingen/analyse_3/3b_antw3a.png" width="500px">
				</li>
				<li>
					<img src="afbeeldingen/analyse_3/3b_antw3b.png" width="500px">
				</li>
				<li>
					Ja, `-8` is ook een oplossing, want het kwadraat van `-8` is ook 64 en 64 + 5 is 69.
				</li>	
				<li>
					Eigen raadsel met antwoord.
				</li>			
			</ol>
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="32">
	<h3>Opdracht 32 Pijlenkettingen gebruiken</h3>
	<p>
		Bij de analysetaak <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=a_1thv_lineaire_formules" target="_blank">Lineaire formules</a> hebben we grafieken gebruikt om uit te zoeken wat de invoer moet zijn geweest als we de uitvoer wisten. Hoe ging dat ook al weer?
	</p>	
	<p>
		Ik huur een auto bij bedrijf Snel Weg. Dit bedrijf berekent het huurbedrag met de volgende formule:
		<nobr><em>B</em> = 45 + 3&sdot;<em>a</em></nobr>.<br>
		Hierin is <em>B</em> het huurbedrag en <em>a</em> het aantal kilometers dat ik rij met de auto. Ik krijg een rekening van 495 euro.
	</p>
	<p>
		Om uit te rekenen hoeveel kilometer ik heb gereden, voer je de volgende stappen uit:
	</p>
	<ol>	
		<li>
			Teken de grafiek die hoort bij de formule <nobr><em>B</em> = 45 + 3&sdot;<em>a</em></nobr>. Maak hiervoor eerst een tabel, zorg dat <em>a</em> = 250 km in de tabel zit.
		</li>
		<li>
			Zoek met behulp van de <u>tabel</u> uit hoeveel kilometer ik kan rijden voor &euro;495.
		</li>
		<li>
			Zoek met behulp van de <u>grafiek</u> uit hoeveel kilometer ik kan rijden voor &euro;495.
		</li>
		<li>
			Maak de pijlenketting bij de formule en reken met behulp van de omgekeerde pijlenketting uit hoeveel km ik kan rijden voor &euro;495.
		</li>
		<li>
			Je hebt nu op drie verschillende manieren uitgezocht hoeveel km ik heb gereden voor &euro;495.<br>Welke manier vond jij het prettigst?
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<TABLE FRAME="void" RULES="all"  width="200px" style= "text-align: center"
						<TR>
							<TD ><em>a</em></TD><TD>0</TD><TD>50</TD><TD>100</TD><TD>150</TD><TD>200</TD><TD>250</TD>
						</TR>
						<TR>
							<TD><em>B</em></TD><TD>45</TD><TD>195</TD><TD>345</TD><TD>495</TD><TD>645</TD><TD>795</TD>
						</TR>
					</TABLE>
					<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_bij_Bis45plus3keera.png" alt="grafiek_bij_Bis45plus3keera" width="" height="" />
					
				</li>
				<li>
					In de tabel staat 150 boven 495.<br>
					Dus voor &euro;495 kan ik 150 km rijden.
				</li>
				<li>
					<br>
					<img src="../afbeeldingen/analyse_leerjaar_1/antwoord_grafiek_bij_Bis45plus3keera.png" alt="antwoord_grafiek_bij_Bis45plus3keera" width="" height="" />
					<br>
					Aflezen op de horizontale as: ik kan 150 km rijden voor &euro;495.
				</li>
				<li>
					<math class="machten">
						<mi>a</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;3 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;45 &nbsp;</mo>
						</mover>
						<mi>B</mi>
					</math>
					<br>
				
					<math class="machten">
						<mi>150</mi>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &divide;3 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 450 &nbsp;</mo>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &minus;45 &nbsp;</mo>
						</mover>
						<mi>495</mi>
					</math>
					<br>
					`a = 150`
				</li>				
			</ol>
		</div>
	</div>
	
</div>

<div class="tekstblok theorie analyse" id="theorieF"><h3>Theorie F Omgekeerde pijlenketting</h3>
	<p>
		Het is veel werk om eerst een tabel of grafiek te maken en dan de invoer af te lezen bij een gegeven uitvoer. Daarbij komt het niet altijd mooi uit.
		<br>
		Met behulp van een <b>omgekeerde pijlenketting</b> gaat het snel en precies.
	</p>
	<div  class="tekstblok opdracht">
		<p>
			<u>Een voorbeeld opgave</u>:
		</p>
		<p>
			Ik huur een auto bij bedrijf Snel Weg. Dit bedrijf berekent het huurbedrag met de volgende formule:
			<nobr><em>B</em> = 45 + 3&sdot;<em>a</em></nobr>.<br>
			Hierin is <em>B</em> het huurbedrag en <em>a</em> het aantal kilometers dat ik rij met de auto.
		</p>
		<p>
		 	Ik krijg een rekening van 1.815,- euro. 
		</p>
		<p>
			Ik wil weten hoeveel kilometer in rekening is gebracht.
		</p>
	</div>
	<p>
		<u>Stappenplan</u>:<br>
		Als de uitvoer bekend is en je wilt de invoer uitrekenen. Dan moet je de volgende <b>vergelijking</b> oplossen:<br>
		45 + 3a = 1815<br>
		Waarbij de juiste <em>a</em> de oplossing is.
	</p>
	<div class="row">
		<div class="col-xs-12">

			<table class="table">
				<tbody>
					<tr>
						<td width="70">
							Stap 1
						</td>
						<td>
							Maak een normale pijlenketting, van invoer naar uitvoer. 
						</td>
						<td>
							<math class="machten">
								<mi>a</mi>
								<mover>
									<mo>&rarr;</mo>
									<mo>&nbsp; &sdot;3 &nbsp;</mo>
								</mover>
								<mo>&nbsp; ... &nbsp;</mo>
								<mover>
									<mo>&rarr;</mo>
									<mo>&nbsp; &plus;45 &nbsp;</mo>
								</mover>
								<mi>B</mi>
							</math>
						</td>
					</tr>
				<tr>
					<td>
						Stap 2
					</td>
					<td>
						Zet een lege omgekeerde pijlenketting recht onder de eerste.
					</td>
					<td>
						<math class="machten">
							<mi>a</mi>
							<mover>
								<mo>&larr;</mo>
								<mo>&nbsp; ... &nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
							<mover>
								<mo>&larr;</mo>
								<mo>&nbsp; ... &nbsp;</mo>
							</mover>
							<mi>B</mi>
						</math>
					</td>
				</tr>
				<tr>
					<td>
						Stap 3
					</td>
					<td>
						Zet de tegengestelde bewerkingen op de pijlen.<br>
						<code class="code">+4</code> wordt <code class="code">-4</code> en 	<code class="code">&sdot;3</code> wordt <code class="code">&divide;3</code>
					</td>
					<td>
						<math class="machten">
							<mi>a</mi>
							<mover>
								<mo>&larr;</mo>
								<mo>&nbsp; &divide;3 &nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
							<mover>
								<mo>&larr;</mo>
								<mo>&nbsp; &minus;45 &nbsp;</mo>
							</mover>
							<mi>B</mi>
						</math>					
					</td>
				</tr>
				<tr>
					<td>
						Stap 4
					</td>
					<td>
						Vul de uitvoer in.
					</td>
					<td>
						<math class="machten">
							<mi>a</mi>
							<mover>
								<mo>&larr;</mo>
								<mo>&nbsp; &divide;3 &nbsp;</mo>
							</mover>
							<mo>&nbsp; ... &nbsp;</mo>
							<mover>
								<mo>&larr;</mo>
								<mo>&nbsp; &minus;45 &nbsp;</mo>
							</mover>
							<mi>1815</mi>
						</math>
					</td>
				</tr>
				<tr>
					<td>
						Stap 5
					</td>
					<td>
						Reken van rechts naar links naar de invoer toe.<br>
						1815 - 45 = 1770<br>
						1770 : 3 = 590
					</td>
					<td>
						<math class="machten">
							<mi>590</mi>
							<mover>
								<mo>&larr;</mo>
								<mo>&nbsp; &divide;3 &nbsp;</mo>
							</mover>
							<mo>&nbsp; 1770 &nbsp;</mo>
							<mover>
								<mo>&larr;</mo>
								<mo>&nbsp; &minus;45 &nbsp;</mo>
							</mover>
							<mi>1815</mi>
						</math>
					</td>
				</tr>
				<tr>
					<td>
					</td>
					<td>
						De oplossing van de vergelijking is `a= 590`.<br>
						Er is dus 590 kilometer in rekening gebracht.
					</td>
					<td>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	
	<div class="geeltje">
		<p>
			Het <b>oplossen van vergelijkingen</b> kun je nu op drie manieren.
			<br>
			<ol>
				<li>een tabel maken en aflezen.</li>
				<li>een grafiek tekenen en aflezen.</li>
				<li>een omgekeerde pijlenketting maken en uitrekenen.</li>
			</ol>
		</p>
	</div>
</div>

<div class="tekstblok opdracht" id="33">
	<h3>Opdracht 33 Buren</h3>
	<ol>	
		<li>Teken de grafiek die hoort bij de volgende formule: <nobr><em>y</em> = 7<em>x</em> - 5</nobr>.</li>
		<li>Lees uit de grafiek af hoe groot <em>x</em> ongeveer is als <em>y</em> = 40.</li>
		<li>Welk antwoord heeft je buurman bij vraag b?</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<div class="row">
						<div class="col-md-4">
							<br><img id="img-small" src="afbeeldingen/analyse_leerjaar_1/antwoord_buren_a.png">
						</div>
						<div class="col-md-8">
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-md-4">
							<br><img id="img-small" src="afbeeldingen/analyse_leerjaar_1/antwoord_buren_b.png">
						</div>
						<div class="col-md-8">
						</div>
					</div>
					Dus bij <em>y</em> = 40 hoort <em>x</em> = 6,3 of <em>x</em> = 6,4.
				</li>
				<li>
					Het antwoord is niet precies af te lezen, dus misschien hebben je buurman en jij een klein verschil in antwoord.
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="34">
	<h3>Opdracht 34 Preciezer</h3>
	<p>
		Zoals je in de vorige opgave hebt gemerkt lukt het niet altijd om met behulp van de grafiek de precieze invoer af te 	lezen.
	</p>
	<ol>	
		<li>
			Maak de normale en omgekeerde pijlenketting bij de vergelijking <nobr><em>y</em> = 7<em>x</em> - 5</nobr>.
		</li>
		<li>
			Los de vergelijking <nobr>7<em>x</em> - 5 = 40</nobr> op met behulp van de omgekeerde pijlenketting.<br>
			Rond je antwoord af op één decimaal. 
		</li>
		<li>
			Heb je nu wel hetzelfde antwoord als je buurman?
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<math class="machten">
						<mi>x</mi>
						<mover>
							<mo>&#x27F6;</mo>
							<mo>&nbsp; &sdot;7 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &minus;5 &nbsp;</mo>
						</mover>
						<mi>y</mi>
					</math>
					<br>
					<math class="machten">
						<mi>x</mi>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &divide;7 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &plus;5 &nbsp;</mo>
						</mover>
						<mi>y</mi>
					</math>
				</li>
				<li>
					<math class="machten">
						<mi>6,4</mi>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &divide;7 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 45 &nbsp;</mo>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &plus;5 &nbsp;</mo>
						</mover>
						<mi>40</mi>
					</math>
					`x &approx; 6,4`
				</li>
				<li>
					Als het goed is, hebben jullie nu precies hetzelfde antwoord.
				</li>
			</ol>
		</div>
	</div>
</div>

<p class="geeltje">
	Vragen over afronden? Bekijk dan het <a href="http://www.youtube.com/watch?v=doViv1ucEjw" target="_blank">instructiefilmpje over afronden.</a> 
	<br>
	Gebruik een koptelefoon of oordopjes.
</p>

<div class="tekstblok opdracht" id="35">
	<h3>Opdracht 35 Oplossen</h3>
	<p>
		Los nu met behulp een omgekeerde pijlenketting de volgende vergelijkingen op. Maak steeds eerst de normale pijlenketting.
		<br>
		Gebruik geen rekenmachine en laat (vereenvoudigde) breuken in je antwoord staan.
	</p>
	<ol>
		<li>3<em>x</em> - 12 = 32</li>
		<li>-5<em>x</em> + 15 = 72</li>
		<li>-8 + 7<em>x</em> = -4</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<math class="machten">
						<mi>x</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;3 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &minus;12 &nbsp;</mo>
						</mover>
						<mi>32</mi>
					</math>
					<br>
						`44/3`
					<math class="machten">
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &divide;3 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 45 &nbsp;</mo>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &plus;12 &nbsp;</mo>
						</mover>
						<mi>32</mi>
					</math>
					<br>
					`x = 14 2/3`
				</li>
				<li>
					<math class="machten">
						<mi>x</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;-5 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;15 &nbsp;</mo>
						</mover>
						<mi>72</mi>
					</math>
					<br>
						`-57/5`
					<math class="machten">
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &divide;-5 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 57 &nbsp;</mo>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &minus;15 &nbsp;</mo>
						</mover>
						<mi>32</mi>
					</math>
					<br>
					`x = -11 2/5`
				</li>
				<li>
					<math class="machten">
						<mi>x</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;7 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &minus;8 &nbsp;</mo>
						</mover>
						<mi>-4</mi>
					</math>
					<br>
						`4/7`
					<math class="machten">
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &divide;7 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 4 &nbsp;</mo>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &plus;8 &nbsp;</mo>
						</mover>
						<mi>-4</mi>
					</math>
					<br>
					`x = 4/7`
				</li>
			</ol>
		</div>
	</div>
	
</div>

<p class="geeltje">
	Vragen over rekenen met breuken? Ga dan nog even terug naar de taak <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=v_1thv_breuken">Breuken</a>.
</p>

<div class="tekstblok opdracht" id="36">
	<h3>Opdracht 36 Treinreis</h3>
	<p>
		Als je wel eens met de trein gereisd hebt, weet je waarschijnlijk wel dat als een treinreis verder gaat, je ook meer moet betalen.
	</p>
	<p>
		De prijs van een treinkaartje op middellange trajecten kun je berekenen door &euro; 0,156 per kilometer op te tellen bij het starttarief van &euro; 1,12.
	</p>
	<ol>
		<li>
			Maak de normale pijlenketting waarmee je de prijs voor een treinkaartje kunt uitrekenen als je het aantal gereden kilometers weet.
		</li>
		<li>
			Maak de omgekeerde pijlenketting.
		</li>
		<li>
			Een treinkaartje van Amersfoort Vathorst naar Utrecht Centraal kost &euro; 5,20.
			<br>
			Hoeveel kilometer is de afstand tussen Amersfoort Vathorst en Utrecht Centraal per spoor?
		</li>
		<li>
			Lotte maakt een treinreis en moet &euro; 10,50 betalen. <br>
			Bereken hoeveel kilometers Lotte met de trein heeft afgelegd. Maak gebruik van de omgekeerde pijlenketting.
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol class="machten">
				<li>
					<math class="machten">
						<mi>prijs in €</mi>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &sdot;0,156 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&rarr;</mo>
							<mo>&nbsp; &plus;1,12 &nbsp;</mo>
						</mover>
						<mi>aantal kilometer</mi>
					</math>
				</li>
				<li>
					<math class="machten">
						<mi>prijs in €</mi>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &divide;0,156 &nbsp;</mo>
						</mover>
						<mo>&nbsp; ... &nbsp;</mo>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &minus;1,12 &nbsp;</mo>
						</mover>
						<mi>aantal kilometer</mi>
					</math>
				</li>
				<li>
					<math class="machten">
						<mi>26,153...</mi>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &divide;0,156 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 4,08 &nbsp;</mo>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &minus;1,12 &nbsp;</mo>
						</mover>
						<mi>5,20</mi>
					</math>
					<br>
					Per spoor is de afstand tussen Amersfoort Vathorst en Utrecht ongeveer 26 km. 
				</li>
				<li>
					<math class="machten">
						<mi>60,128...</mi>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &divide;0,156 &nbsp;</mo>
						</mover>
						<mo>&nbsp; 9,38 &nbsp;</mo>
						<mover>
							<mo>&larr;</mo>
							<mo>&nbsp; &minus;1,12 &nbsp;</mo>
						</mover>
						<mi>10,50</mi>
					</math>
					<br>
					Lotte heeft ongeveer 60 km in de trein gezeten.
				</li>
			</ol>		
		</div>
	</div>

</div>

<p>
	Uitwerkingen zijn tot hier gecontroleerd.
</p>

<div class="tekstblok opdracht" id="37">
	<h3>Opdracht 37 Tuinman</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Een tuinman plant rozen langs de rand van een gazon.<br>
				Hij berekent het aantal rozen met de formule:<br>
				<em>aantal rozen</em> = 2 + 5 &sdot; <em>aantal meter</em>
			</p>
			<ol>
				<li>
					Hoeveel rozen heeft hij nodig voor een rand van 6 meter?
				</li>
				<li>
					Hoeveel meter kan de tuinman met 182 rozen beplanten? Maak gebruik van pijlenkettingen.
				</li>
				<li>
					Heb je aan 300 rozen genoeg voor een gazon van 10 bij 6 meter?
				</li>
			</ol>
		</div>
		<div class="col-xs-3">
			<img src="../afbeeldingen/analyse_leerjaar_1/roos.png" alt="roos" width="" height="" />
		</div>
	</div>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			nog geen uitwerkingen
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="38">
	<h3>Opdracht 38 Bouwmarkt</h3>
	<div class="row">
		<div class="col-xs-8">
			<p>
				Een bouwmarkt verkoopt stoeptegels voor € 2,- per stuk.<br>
				Het thuisbezorgen van de tegels kost € 10,-.<br>
			</p>
			<ol>
				<li>
					Maak een formule waarmee je het <em>bedrag</em> uitrekent als je het <em>aantal tegels</em> invoert.
				</li>
				<li>
					Wat is in de formule het <em>startgetal</em>?
				</li>
				<li>
					Wat is in de formule het <em>hellingsgetal</em>?
				</li>
				<li>
					Bereken met de formule wat je moet betalen als je 50 tegels koopt en laat bezorgen.
				</li>
				<li>
					Bereken ook wat je moet betalen voor 113 en 297 tegels.
				</li>
				<li>
					Hoeveel tegels kun je kopen en laten bezorgen voor € 340,-?
				</li>
				<li>
					Er is een actie: als je meer dan 300 tegels koopt, betaal je slechts € 1,60 per tegel en geen bezorgkosten.<br>
					Bereken hoeveel tegels je dankzij de actie meer kunt kopen, als je voor de actie precies genoeg had voor 315 tegels.
				</li>
			</ol>	
		</div>
		<div class="col-xs-4">
			<img src="../afbeeldingen/analyse_leerjaar_1/stoeptegels.jpeg" alt="stoeptegels" width="" height="" />
		</div>
	</div>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			nog geen uitwerkingen
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="39">
	<h3>Opdracht 39 Huurauto</h3>
	<div class="row">
		<div class="col-xs-6">
			<p>
				In het assenstelsel staan drie grafieken die de kosten van een huurauto tonen.
			</p>
			<ol>
				<li>
					Zoek bij elke grafiek de juiste formule.<br>
					Kies uit de volgende mogelijkheden:
					<ol id="numbers">
				<li>
					<em>kosten in €</em> = 25 &sdot; <em>afstand</em> + 0,30
				</li>
				<li>
					<em>kosten in €</em> = 0,50 &sdot; <em>afstand</em> <!-- grafiek II -->
				</li>
				<li>
					<em>kosten in €</em> = 0,30 &sdot; <em>afstand</em> + 25 <!-- grafiek I -->
				</li>
				<li>
					<em>kosten in €</em> = 0,30 &sdot; <em>afstand</em> + 30
				</li>	
				<li>
					<em>kosten in €</em> = 0,25 &sdot; <em>afstand</em> + 30 <!-- grafiek III -->
				</li>
				<li>
					<em>kosten in €</em> = 0,20 &sdot; <em>afstand</em> + 25
				</li>				
			</ol>
				</li>
				<li>
					Bereken met pijlenkettingen bij elke huurauto hoe ver je mag rijden voor € 37,50.
				</li>
			</ol>
		</div>
		<div class="col-xs-6">
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_driemaal_kosten_afstand.png" alt="grafiek_driemaal_kosten_afstand" width="" height="" />
		</div>
	</div>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			nog geen uitwerkingen
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="40">
	<h3>Opdracht 40 Autobedrijf <em>Snel Weg</em></h3>
	<p>Voor het huren van een auto rekent autobedrijf <em>Snel Weg</em> met de volgende formule:<br>
		<em>Bedrag in &euro;</em> = 50 + 3,2 &times; <em>aantal kilometer</em>.
		<ol>
			<li>
				Hoeveel kilometer mag je rijden voor € 658,-?
			</li>
			<li>
				Als je vooraf betaalt, krijg je 16 cent korting per kilometer.<br>
				Hoeveel kilometer mag je dan meer rijden voor € 658,-?
			</li>
			<li>
				Sommige klanten nemen ook een verzekering. Dan betaal je per kilometer een toeslag van 0,7 cent of je betaalt een eenmalige toeslag van 8,50.<br>
				Johnny wil maximaal 350 euro betalen op rekening én een verzekering.<br>
				Wat raad jij hem aan? De kilometertoeslag of de eenmalige toeslag? Licht je antwoord toe met een berekening.
			</li>				
		</ol>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				nog geen uitwerkingen
			</div>
		</div>
	</p>
</div>
	
<div class="tekstblok opdracht" id="41">
	<h3>Opdracht 41 Zonder rekenmachine (uitdaging)</h3>
	<p>
		Los zonder rekenmachine de volgende vergelijkingen op.
	</p>
	<ol class="breuken">
		<li>
			<math display='inline'>
				<mi>3</mi><mi>x</mi><mo>+</mo>
					<mfrac>
						<mrow><mi>2</mi></mrow>
						<mrow><mi>7</mi></mrow>
					</mfrac>
					<mo>=</mo>
					<mi>5</mi>
			</math>
		</li>
		<li>
			<math display='inline' >
				<mi>6</mi>
				<mfrac>
					<mrow><mi>2</mi></mrow> <!--teller van de breuk-->
					<mrow><mi>3</mi></mrow> <!--noemer van de breuk-->	
				</mfrac>
			<mi>x</mi><mo>+</mo><mi>5</mi>
			<mo>=</mo>
			<mi>49</mi>
		</li>
		<li>
		<math display='inline'>
			<mo>-</mo>
				<mfrac>
					<mrow><mi>5</mi></mrow>
					<mrow><mi>8</mi></mrow>
				</mfrac>
			<mi>x</mi>
			<mo>+</mo>
			<mfrac>
				<mrow><mi>1</mi></mrow> <!--teller van de breuk-->
				<mrow><mi>3</mi></mrow> <!--noemer van de breuk-->	
			</mfrac>
			<mo>=</mo>
			<mi>5</mi>	
		</math>
		</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<math class="machten">
						<mi>x</mi>
						<mover>
							<mo>&#x27F6;</mo>
							<mrow>
								<mo>&sdot;</mo>
								<mi>3</mi>
							</mrow>
						</mover>
						
						&nbsp;
						<mi>...</mi> 
						&nbsp;
						
						<mover>
							<mo>&#x27F6;</mo>
							<mrow>
								<mo> &plus;</mo>
								<mfrac>
									<mrow><mi>2</mi></mrow> <!--teller van de breuk-->
									<mrow><mi>7</mi></mrow>	
								</mfrac>
								&nbsp;
							</mrow>
						</mover>
						<mi>5</mi>
					</math>
					<br>
					<math class="machten">
						<mi>1</mi>
						<mfrac>
							<mrow><mi>4</mi></mrow>
							<mrow><mi>7</mi></mrow>
						</mfrac>
						
						<mover>
							&nbsp;
							<mo>&larr;</mo>
							<mrow>
								<mo>&divide;</mo>
								<mi>3</mi>							
							</mrow>
							&nbsp;
						</mover>
						
						&nbsp; 
						<mfrac>
							<mrow><mi>33</mi></mrow>
							<mrow><mi>7</mi></mrow>
						</mfrac>
						&nbsp;
							
						<mover>
							<mo>&#x27F5;</mo>
							<mrow> <mo>&minus;</mo>
								<mfrac>
									<mrow><mi>2</mi></mrow> <!--teller van de breuk-->
									<mrow><mi>7</mi></mrow>	
								</mfrac>
								&nbsp;
							</mrow>
						</mover>
						
						<mi>5</mi>
					</math>
				</li>
				
				<li>
					<math class="machten">
						<mi>x</mi>
						<mover>
							<mo>&#x27F6;</mo>
							<mrow>
								<mo>&sdot;</mo>
								<mfrac>
									<mrow><mi>20</mi></mrow>
									<mrow><mi>3</mi></mrow>	
								</mfrac>
							</mrow>
						</mover>
						
						&nbsp;
						<mi>...</mi> 
						&nbsp;
						
						<mover>
							<mo>&#x27F6;</mo>
							<mrow>
								<mo> &plus;</mo>
								<mi>5</mi>
								&nbsp;
							</mrow>
						</mover>
						<mi>49</mi>
					</math>
					<br>
					<math class="machten">
						<mi>6</mi>
						<mfrac>
							<mrow><mi>3</mi></mrow>
							<mrow><mi>5</mi></mrow>
						</mfrac>
						
						<mover>
							&nbsp;
							<mo>&larr;</mo>
							<mrow>
								<mo>&divide;</mo>
								<mfrac>
									<mrow><mi>20</mi></mrow>
									<mrow><mi>3</mi></mrow>
								</mfrac>						
							</mrow>
							&nbsp;
						</mover>
						
						&nbsp; 
						<mi>44</mi>
						&nbsp;
							
						<mover>
							<mo>&#x27F5;</mo>
							<mrow> <mo>&minus;</mo>
								<mi>5</mi>
								&nbsp;
							</mrow>
						</mover>
						
						<mi>49</mi>
					</math>
				</li>
				
				<li>
					<math class="machten">
						<mi>x</mi>
						<mover>
							<mo>&#x27F6;</mo>
							<mrow>
								<mo>&sdot; &minus;</mo>
								<mfrac>
									<mrow><mi>5</mi></mrow>
									<mrow><mi>8</mi></mrow>	
								</mfrac>
							</mrow>
						</mover>
						
						&nbsp;
						<mi>...</mi> 
						&nbsp;
						
						<mover>
							<mo>&#x27F6;</mo>
							<mrow>
								<mo> &plus;</mo>
								<mfrac>
									<mrow><mi>1</mi></mrow>
									<mrow><mi>3</mi></mrow>	
								</mfrac>
								&nbsp;
							</mrow>
						</mover>
						<mi>5</mi>
					</math>
					<br>
					<math class="machten">
						<mo>-</mo>
						<mi>7</mi>
						<mfrac>
							<mrow><mi>7</mi></mrow>
							<mrow><mi>15</mi></mrow>
						</mfrac>
						
						<mover>
							&nbsp;
							<mo>&larr;</mo>
							<mrow>
								<mo>&divide; &minus;</mo>
								<mfrac>
									<mrow><mi>5</mi></mrow>
									<mrow><mi>8</mi></mrow>
								</mfrac>						
							</mrow>
							&nbsp;
						</mover>
						
						&nbsp; 
						<mfrac>
							<mrow><mi>14</mi></mrow>
							<mrow><mi>3</mi></mrow>	
						</mfrac>
						&nbsp;
							
						<mover>
							<mo>&#x27F5;</mo>
							<mrow> 
								<mo>&minus;</mo>
								<mfrac>
									<mrow><mi>1</mi></mrow>
									<mrow><mi>3</mi></mrow>	
								</mfrac>
								&nbsp;
							</mrow>
						</mover>
						
						<mi>5</mi>
					</math>
				</li>
			</ol>
		</div>
	</div>

</div>


<div class="tekstblok opdracht" id="proeftoets">
	<h3>Proeftoets</h3>
	<p>
		Ga naar <a href="https://drive.google.com/a/vathorstcollege.nl/folderview?id=0B-EzZiYS_HciOW5CTldLNFNUNXc&usp=drive_web&ddrp=1#" target="_blank">map proeftoetsen</a> en kies de juiste proeftoets bij dit onderwerp om je voor te bereiden op de echte.
	</p>
</div>
	
</div>