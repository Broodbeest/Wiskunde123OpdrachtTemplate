<title>Leerjaar 1 | Formules vergelijken</title>
<div class="container analyse">
<!--
<aside class="afvinklijst analyse">
	<p>Analyse 3</p>
	<ul>
		<li>Opdracht 1</li>
		<li>Opdracht 2</li>
		<li><b>Theorie A</b></li>
		<li>Opdracht 3</li>
		<li>Opdracht 4</li>
		<li><b>Theorie B</b></li>
		<li>Opdracht 5</li>
		<li>Opdracht 6</li>
		<li>Opdracht 7</li>
		<li>Opdracht 8</li>
		<li>Opdracht 9</li>
		<li>Opdracht 10</li>
		<li>Opdracht 11</li>
		<li><b>Theorie C</b></li>
		<li>Opdracht 12</li>
		<li><b>Theorie D</b></li>
		<li>Opdracht 13</li>
		<li><b>Theorie E</b></li>
		<li>Opdracht 14 @</li>
		<li>Opdracht 15</li>
		<li>Opdracht 16</li>
	</ul>
</aside>
-->
<!-- het hoofdblok -->
<div class="bodytekst">

	<!-- Hoofdtitel pagina -->
	<h1>Formules vergelijken</h1>

	<!-- Inleiding -->
	<div class="tekstblok theorie analyse">
		<h3>Inleiding</h3>
		<p>In deze taak ga je leren hoe je met een <b>terug-pijlenketting</b> een <b>vergelijking op kunt lossen</b>.<br>
		Een voorbeeld van een opgave die je aan het einde van deze taak op kunt lossen is:
			<ol>Een treinkaartje kost &euro;1,12 plus &euro;0,156 per kilometer. Het kost &euro;5,20 om van Amersfoort Vathorst naar Utrecht te reizen.
				<li type="a">Hoeveel kilometer is de afstand tussen Amersfoort Vathorst en Utrecht Centraal?</li>
			</ol>
		</p>
		<p>Je heb al geleerd hoe je dat kunt doen door een grafiek te tekenen, maar soms kun je het niet precies aflezen (bijboorbeeld als je niet nauwkeurig getekend hebt) en komt er een ander antwoord uit dan bij je buurman of -vrouw.<br>
			Met behulp van de terug-pijlenketting kun je een nauwkeurige berekening doen.</p>
	</div>

<!--opdracht 1-->
<div class="tekstblok opdracht analyse">
	<h3>Opdracht 1 Niet verdwalen in de Ensanche</h3>
	<p>
		In Barcelona is een wijk met een bijzondere plattegrond. De wijk heet de de Ensanche, dat is Spaans voor de ‘uitbreiding’, omdat het ooit een nieuw deel van de stad was. De plattegrond is een beetje saai, maar de huizen en winkels 	zijn leuk en verschillend. 
		<br>
		Hier is een stuk van de plattegrond. De grijze vakjes zijn de huizenblokken.</p>
	<p><img src="afbeeldingen/analyse_3/ensanche_opdr.png" width="350px">
		<ol>Je dwaalt van A naar B, via allerlei kleine pleintjes. Om niet te verdwalen houd je de route bij op een papiertje: Naar het oosten, 1 blok. Naar het noorden 2 huizenblokken...
				<p>Die notatie kan korter, schrijf het zo:</p>
				<p>O1  N2</p>
			<li>Maak deze routebeschrijving af tot aan plein B.</li><br>
			Ergens onderweg was een ijstentje. Waar, dat weet je niet meer. Daarom ga je precies dezelfde weg terug.
			<li>Noteer de routebeschrijving voor de terugweg van B naar A.</li><br>
			Tamara heeft vanaf een bepaald punt het volgende patroon vier keer gelopen. Zo schreef ze de route op:<br>
			Vier keer [ O3  N2  W1  Z1]
			<li>Hier is het begin getekend. Neem de tekening over en maak de route af.
				<img src="afbeeldingen/analyse_3/ensanche_opdr2.png" width="350px"></li>
			<li>Noteer net zo kort precies de route terug.</li>
		</ol>
		
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<p>Antwoorden<img src="afbeeldingen/analyse_3/ensanche_antw2.png" width="250px" class="rightfloat">
				<ol>
					<li>O1 N2 O3 N2 O2 Z3 W1 Z2 O2 N4 O1</li>
					<li>W1 Z4 W2 N2 O1 N3 W2 Z2 W3 Z2 W1</li>
					<li>Zie de afbeelding hiernaast.</li>
					<li>N1 O1 Z2 W3 N1 O1 Z2 W3 N1 O1 Z2 W3 N1 O1 Z2 W3.</li>
				</ol>
			</p>
			</div>
		</div>
	</p>
</div>

<!--opdracht 2-->
<div class="tekstblok opdracht analyse">
		<h3>Opdracht 2 Terugrekenen</h3>
		<p>De vorige opdracht ging over terugwandelen. Nu gaat het over terugrekenen. Het scheelt weinig, let maar op.</p>
			<ol>	
				<li>Begin met het getal 4. Doe drie keer het volgende:<br>
					vermenigvuldig met 3 en haal er 1 af. <br>
					De uitkomst die je vindt, ligt al boven de 80! Wat is die uitkomst precies?</li>
				<li>Stel je voor: Pascal is met een ander getal begonnen, maar jij weet niet welk getal. Pascal doet hetzelfde als jij deed, en zegt: “Ik heb 41 als uitkomst!”. Met welk getal is Pascal begonnen? Hoe heb je dat achterhaald?</li>
				<li>Je kunt het spel opschrijven als een route (pijlenketting) van begingetal (invoer) naar eindgetal (uitvoer):<br>
					<table>
						<thead>
							<tr>
								<th align="center">Route heen</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><math><mtext>Begingetal </mtext>&nbsp;<mover><mo>&rarr;</mo><mo>&nbsp;&times;<mn>3&nbsp;&nbsp;</mn></mo></mover>&nbsp;<mo>...</mo>&nbsp;<mover><mo>&rarr;</mo><mo>&nbsp;&minus;<mn>1&nbsp;&nbsp;</mn></mo></mover>&nbsp;<mo>...</mo>&nbsp;<mover><mo>&rarr;</mo><mo>&nbsp;&times;<mn>3&nbsp;&nbsp;</mn></mo></mover>&nbsp;<mo>...</mo>&nbsp;<mover><mo>&rarr;</mo><mo>&nbsp;&minus;<mn>1&nbsp;&nbsp;</mn></mo></mover>&nbsp;<mo>...</mo>&nbsp;<mover><mo>&rarr;</mo><mo>&nbsp;&times;<mn>3&nbsp;&nbsp;</mn></mo></mover>&nbsp;<mo>...</mo>&nbsp;<mover><mo>&rarr;</mo><mo>&nbsp;&minus;<mn>1&nbsp;&nbsp;</mn></mo></mover>&nbsp;<mtext>Eindgetal</mtext></math></td>
							</tr>
						</tbody>
					</table>
					<table>
						<thead>
							<tr>
								<th align="center">Route terug</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><math><mtext>Begingetal </mtext>&nbsp;<mover><mo>&larr;</mo><mo>&nbsp;<mo>&nbsp;...&nbsp;</mo>&nbsp;</mn></mo></mover>&nbsp;<mo>...</mo>&nbsp;<mover><mo>&larr;</mo><mo>&nbsp;<mo>&nbsp;...&nbsp;</mo>&nbsp;</mn></mo></mover>&nbsp;<mo>...</mo>&nbsp;<mover><mo>&larr;</mo><mo>&nbsp;<mo>&nbsp;...&nbsp;</mo>&nbsp;</mn></mo></mover>&nbsp;<mo>...</mo>&nbsp;<mover><mo>&larr;</mo><mo>&nbsp;<mo>&nbsp;...&nbsp;</mo>&nbsp;</mn></mo></mover>&nbsp;<mo>...</mo>&nbsp;<mover><mo>&larr;</mo><mo>&nbsp;<mo>&nbsp;...&nbsp;</mo>&nbsp;</mn></mo></mover>&nbsp;<mo>...</mo>&nbsp;<mover><mo>&larr;</mo><mo>&nbsp;&plus;<mn>1&nbsp;&nbsp;</mn></mo></mover>&nbsp;<mtext>Eindgetal</mtext></math></td>
							</tr>
						</tbody>
					</table>
					<img src="afbeeldingen/analyse_3/pascal.png" width="500px"><br>
					Neem de routes over en vul de Route Terug in. Je begint rechts, want deze route gaat van Eindgetal  naar Begingetal.
					Het begin is er al.</li>

			</ol>
			<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
				<p>Antwoorden
					<ol>
						<li>4 x 3 - 1 = 11<br>
						    11 x 3 - 1 = 32<br>
						    32 x 3 - 1 = 95</li>
						<li>(41 + 1) : 3 = 14<br>
						    (14 + 1) : 3 = 5<br>
						    (5 + 1) : 3 = 2<br>
						    Pascal is dus met het getal 2 begonnen!</li>
						<li><br>
							<img src="afbeeldingen/analyse_3/3b_antw2c.png" width="500px"></li>				
					</ol>
				</p>
				</div>
			</div>
		</p>
	</div>

<!--opdracht 3-->
	<div class="tekstblok opdracht analyse">
		<h3>Opdracht 3 Raadsels</h3>

		<p>
			Vind steeds het antwoord op de raadsels. Gebruik daarbij routes of teken pijlenkettingen!</p>
			<ol>	
				<li><br><img src="afbeeldingen/analyse_3/raadsel.png" width="500px"></li>
					
					<aside class="tekstballon_theorie" style="width:250px !important;">
						Het kwadraat van een getal is het getal keer zichzelf.<br>
						Dus het kwadraat van `3` is `9`.<br>
						Je schrijft het als: `3^2 = 9`
					</aside>
					
				<li>Ik heb een getal in gedachten, neem het kwadraat ervan en tel er 5 bij op. Nu heb ik 69.<br>
					Maak een pijlenketting en zoek uit of je het getal kan vinden.</li>
					<li>Waren er meer antwoorden mogelijk bij het raadsel van b.?</li>
				<li>Bedenk zelf een derde raadsel. Geef elkaar je raadsels op om op te lossen.</li>
			</ol>
			<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
				<p>Antwoorden
					<ol>
						<li><br>
							<img src="afbeeldingen/analyse_3/3b_antw3a.png" width="500px"></li>
						<li><img src="afbeeldingen/analyse_3/3b_antw3b.png" width="500px"></li>
						<li>Ja, `-8` is ook een oplossing, want het kwadraat van `-8` is ook 64 en 64 + 5 is 69.</li>	
						<li>eigen raadsel met antwoord</li>			
					</ol>
				</p>
				</div>
			</div>
		</p>
	</div>

	<!--opdracht 4-->
	<div class="tekstblok opdracht analyse">
		<h3>Opdracht 4 Rekenpijlen gebruiken</h3>
		<p>Bij de analysetaak <a href="http://wiskunde.vathorstcollege.nl/index2.php?p=analyse_woordformules" target="_blank">Woordformules</a> hebben we grafieken gebruikt om uit te zoeken wat de invoer moet zijn geweest als we de uitvoer wisten. Hoe ging dat ook al weer?</p>	
		<p>Ik huur een auto bij bedrijf Snel Weg. Dit bedrijf berekent het huurbedrag met de volgende formule:
		<nobr><em>B</em> = 45 + 3&sdot;<em>a</em></nobr>.<br>
		Hierin is <em>B</em> het huurbedrag en <em>a</em> het aantal kilometers dat ik rij met de auto. Ik krijg een rekening van 495 euro.</p>
		<p>Om uit te rekenen hoeveel kilometer ik heb gereden, voer je de volgende stappen uit:
			<ol>	
				<li>Teken de grafiek die hoort bij de formule <nobr><em>B</em> = 45 + 3&sdot;<em>a</em></nobr>. Maak hiervoor eerst een tabel, zorg dat <em>a</em> = 250 km in de tabel zit.</li>
				<li>Zoek met behulp van de <u>tabel</u> uit hoeveel kilometer ik kan rijden voor &euro;495.</li>
				<li>Zoek met behulp van de <u>grafiek</u> uit hoeveel kilometer ik kan rijden voor &euro;495.</li>
				<li>Maak de rekenpijl bij de formule en reken met behulp van de terugrekenpijl uit hoeveel km ik kan rijden voor &euro;495.</li>
				<li>Je hebt nu op drie verschillende manieren uitgezocht hoeveel km ik heb gereden voor &euro;495.<br>Welke manier vond jij het prettigst?</li>
			</ol>
			<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
				<p>Antwoorden
					<ol>
						<li><TABLE FRAME="void" RULES="all"  width="200px" style= "text-align: center"
									<TR><TD ><em>a</em></TD><TD>0</TD><TD>50</TD><TD>100</TD><TD>150</TD><TD>200</TD><TD>250</TD></TR>
									<TR><TD><em>B</em></TD><TD>45</TD><TD>195</TD><TD>345</TD><TD>495</TD><TD>645</TD><TD>795</TD></TABLE>
							<img src="afbeeldingen/analyse_3/3b_antw4a.png" width="500px"></li>
						<li>
							In de tabel staat 150 boven 495.<br>
							Dus voor &euro;495 kan ik 150 km. rijden.</li>
						<li><br>
							<img src="afbeeldingen/analyse_3/3b_antw4c.png" width="250px"><br>
							Aflezen op de horizontale as: ik kan 150 km rijden voor &euro;495.</li>
						<li><br> 
							<img src="afbeeldingen/analyse_3/3b_antw4d.png" width="500px"></li>				
					</ol>
				</p>
				</div>
			</div>
		</p>
	</div>

<!--theorie 4-->
	<div class="tekstblok theorie analyse">
		<h3>Theorie A Vergelijking oplossen</h3>
		<p>Het is best veel werk om eerst de grafiek te tekenen en dan de invoer af te lezen bij een gegeven uitvoer.<br>
		Het uitzoeken van de invoer bij een gegeven uitvoer kan ook met behulp van de rekenpijlen! In het volgende voorbeeld kan je zien hoe dit moet. </p>
		<p>Ik huur een auto bij bedrijf Snel Weg. Dit bedrijf berekent het huurbedrag met de volgende formule:
		<nobr><em>B</em> = 45 + 3&sdot;<em>a</em></nobr>.<br>
		Hierin is <em>B</em> het huurbedrag en <em>a</em> het aantal kilometers dat ik rij met de auto. Ik krijg een rekening van 495 euro.</p>
		<p>Ik wil graag uitzoeken hoeveel kilometer ik dan heb gereden.</p>
		<p>
			<table class="stappenplan">
				<thead><b>Stappenplan</b></thead>
				<tr>
					<td width="80px">Stap 1:</td>
					<td>Maak de “heenpijlenketting”.</td><td>
						<math><mi>a</mi><mover><mo>&rarr;</mo><mo>&nbsp;&times;<mn>3&nbsp;</mn>&nbsp;</mo></mover><mo>...</mo><mover><mo>&rarr;</mo><mo>&nbsp;&plus;<mn>45&nbsp;</mn>&nbsp;</mo>&nbsp;</mover><mi>B</mi></math>
						<!-- img src="afbeeldingen/analyse_3/theorie_5_pijl1.png" width="200px" -->
					</td>
				</tr>
				<tr>
					<td>Stap 2:</td>
					<td>Maak de “terugpijlenketting”.Begin dus ook achteraan!</td><td>
					<math><mi>a</mi><mover><mo>&larr;</mo><mo>&nbsp;&divide;<mn>3&nbsp;</mn>&nbsp;</mo></mover><mo>...</mo><mover><mo>&larr;</mo><mo>&nbsp;&minus;<mn>45&nbsp;</mn>&nbsp;</mo>&nbsp;</mover><mi>B</mi></math>
						<!-- img src="afbeeldingen/analyse_3/theorie_5_pijl2.png" width="200px" -->
					</td>
				</tr>
				<tr>
					<td>Stap 3:</td>
					<td>Vul B in en bereken a.</td><td>
					<math><mn>150</mn><mover><mo>&larr;</mo><mo>&nbsp;&divide;<mn>3&nbsp;</mn>&nbsp;</mo></mover><mn>450</mn><mover><mo>&larr;</mo><mo>&nbsp;&minus;<mn>45&nbsp;</mn>&nbsp;</mo>&nbsp;</mover><mn>495</mn></math>
						<!-- img src="afbeeldingen/analyse_3/theorie_5_pijl3.png" width="200px" -->
					</td>
				</tr>
				<tr>
					<td>Stap 4:</td>
					<td>Geef antwoord op de vraag.</td><td>150 kilometer.</td>
				</tr>			
			</table>
		</p>
		<p>We hebben nu opgelost: <nobr>&euro;495 = 45 + 3&sdot;<em>a</em></nobr>.<br>
		Dit noem je in de wiskunde <b>een vergelijking oplossen</b>!</p>
		<p>Het <b>oplossen van vergelijkingen</b> kan dus op drie manieren.
			<ol>
				<li>een tabel maken en aflezen.</li><br>
				<li>een grafiek tekenen en aflezen.</li><br>
				<li>een terug-pijlenketting maken en uitrekenen.</li><br>
			</ol>
		</p>
	</div>

	<!--opdracht 5-->
	<div class="tekstblok opdracht analyse">
		<h3>Opdracht 5</h3>
		<p>
			<ol>	
				<li>Teken de grafiek die hoort bij de volgende formule: <nobr><em>y</em> = 7<em>x</em> - 5</nobr>.</li>
				<li>Lees uit de grafiek af hoe groot <em>x</em> ongeveer is als <em>y</em> = 40.</li>
				<li>Welk antwoord heeft je buurman bij vraag 5b?</li>
			</ol>
			<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
				<p>Antwoorden
					<ol>
						<li><br><img src="afbeeldingen/analyse_3/3b_antw5a.png" width="250px"></li>
						<li><br><img src="afbeeldingen/analyse_3/3b_antw5b.png" width="250px"><br>
							Dus bij <em>y</em> = 40 hoort <em>x</em> = 6,3 of <em>x</em> = 6,4.</li>
						<li>Het antwoord is niet precies af te lezen, dus misschien hebben je buurman en jij een klein verschil in antwoord.</li>
					</ol>
				</p>
				</div>
			</div>
		</p>
	</div>

	<!--opdracht 6-->
	<div class="tekstblok opdracht analyse">
		<h3>Opdracht 6</h3>
		<p>Zoals je in de vorige opgave hebt gemerkt lukt het niet altijd om met behulp van de grafiek de precieze invoer af te 
		lezen.
			<ol>	
				<li>Maak de heen- en de terug-pijlenketting bij de vergelijking <nobr><em>y</em> = 7<em>x</em> - 5</nobr>.</li>
				<li>Los de vergelijking <nobr>7<em>x</em> - 5 = 40</nobr> op met behulp van de terug-pijlenketting.<br>
					Rond je antwoord af op één decimaal. Afronden moeilijk? Bekijk dan het <a href="http://www.youtube.com/watch?v=doViv1ucEjw" target="_blank">instructiefilmpje over afronden.</a></li>
				<li>Heb je nu wel hetzelfde antwoord als je buurman?</li>
			</ol>
			<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
				<p>Antwoorden
					<ol>
						<li><br><img src="afbeeldingen/analyse_3/3b_antw6a.png" width="200px"></li>
						<li><br><img src="afbeeldingen/analyse_3/3b_antw6b.png" width="200px"></li>
						<li>Als het goed is, hebben jullie nu precies hetzelfde antwoord.</li>
					</ol>
				</p>
				</div>
			</div>
		</p>
	</div>

<!--opdracht 7-->
<div class="tekstblok opdracht analyse">
		<h3>Opdracht 7</h3>
		<p>Los nu met behulp van de heen-, en terug-pijlenketting de volgende vergelijkingen op. Gebruik geen rekenmachine, laat dus breuken in je antwoord staan.<br>
		Wil je voor je aan het rekenen slaat nog even kijken hoe het rekenen met breuken gaat? Ga dan nog even terug naar de taak 
			 <a href="index2.php?p=rekenen_met_breuken_3">rekenen met breuken 3.</a>
			<ol>
				<li>3<em>x</em> - 12 = 32</li>
				<li>-5<em>x</em> + 15 = 72</li>
				<li>-8 + 7<em>x</em> = -4</li>
			</ol>
			<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
				<p>Antwoorden
					<ol>
						<li><br><img src="afbeeldingen/analyse_3/3b_antw7a.png" width="250px"></li>
						<li><br><img src="afbeeldingen/analyse_3/3b_antw7b.png" width="250px"></li>
						<li><br><img src="afbeeldingen/analyse_3/3b_antw7c.png" width="250px"></li>
					</ol>
				</p>
				</div>
			</div>
		</p>
	</div>

	<!-- opdracht 8 -->
	<div class="tekstblok opdracht analyse">
		<h3>Opdracht 8 Treinreis</h3>
		<p>Als je wel eens met de trein gereisd hebt, weet je waarschijnlijk wel dat als een treinreis verder gaat, je ook meer moet betalen.</p>
		<p>De prijs van een treinkaartje op middellange trajecten kun je berekenen door &euro;0,156 per kilometer op te tellen bij &euro;1,12.
			<ol>
				<li>Maak de pijlenketting bij de prijs voor een treinkaartje.</li>
				<li>Maak ook de terug-pijlenketting.</li><br>
				Een treinkaartje van Amersfoort Vathorst naar Utrecht Centraal kost &euro;5,20.
				<li>Hoeveel kilometer is de afstand tussen Amersfoort Vathorst en Utrecht Centraal?</li><br>
				Lotte maakt een treinreis en moet &euro;10,50 betalen.
				<li>Bereken hoeveel kilometers de trein van Lotte afgelegd heeft. Maak gebruik van de terug-pijlenketting.</li>
			</ol>
			<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
					<p>Schrijf je antwoorden netjes uit en lever in bij je docent.</p>
				</div>
			</div>
		</p>
	</div>

	<!-- theorie A -->
	<div class="tekstblok theorie analyse">
		<h3>Theorie Havo/Vwo Exact</h3>
		<p>In de opdracht hieronder ga je met behulp van een terug-pijlenketting vergelijkingen oplossen. Gebruik daarbij <u>niet</u> je rekenmachine, daardoor zullen je antwoorden breuken of hele getallen zijn. Als het antwoord op een vergelijking <u>geen decimaal getal</u> mag zijn, zeggen we dat je <u>de vergelijking <b>exact</b> op moet lossen</u>.</p>
		<p>Wil je, voor je aan het <b>exact</b> uitrekenen slaat nog even kijken hoe het rekenen met breuken ook al weer gaat? Kijk dan even terug naar de taak <a href="index2.php?p=rekenen_met_breuken_3">Rekenen met breuken 3</a>.</p>
	</div>

	<!--opdracht 9-->
	<div class="tekstblok opdracht analyse">
		<h3>Opdracht 9 (HAVO/VWO)</h3>
		<p>
			Los nu met behulp van de heen-, en terug-pijlenketting de volgende vergelijkingen <b>exact</b> op.
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
				<p>Antwoorden
					<ol>
						<li><br><img src="afbeeldingen/analyse_3/3b_antw8a.png" width="250px"></li>
						<li><br><img src="afbeeldingen/analyse_3/3b_antw8b.png" width="300px"></li>
						<li><br><img src="afbeeldingen/analyse_3/3b_antw8c.png" width="350px"></li>
					</ol>
				</p>
				</div>
			</div>
		</p>
	</div>
	