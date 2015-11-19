<?php
	//Definieer sidebar
	$doorverwijzingen = array(
      '#inleiding' => 'Inleiding',
	  '#theorieA' => 'Assenstelsel en coördinaten',
      '#theorieB' => 'Oppervlakte rechthoekige driehoek',
      '#theorieC' => 'Oppervlakte driehoeken',
      '#theorieD' => 'Formules voor driehoeken',
      '#theorieE' => 'Formules bij een cirkel',
      '#theorieF' => 'Nauwkeurig werken',
      '#theorieG' => 'Gelijkvormigheid (1)',
      '#theorieH' => 'Gelijkvormigheid (2)',
      '#theorieI' => 'Groeifactor bij gelijkvormigheid',
      '#theorieJ' => 'Twee dimensies',
      '#theorieK' => 'Groeifactor als oppervlakte berekenen',
      '#theorieL' => 'Drie dimensionaal',
      '#proeftoets' => 'Proeftoets');                                                      
?>

<title>Leerjaar 2hv | Vlakke figuren</title>

<div class="taakinhoud"><!-- de taak zelf -->
	<div class="tekstblok theorie meetkunde"  id="inleiding">
		<h3>Vlakke figuren en oppervlakte</h3>
		<p>
			Vorig jaar heb je veel geleerd over meetkunde. Dat is allemaal voorkennis voor dit schooljaar, maar zo kort na de vakantie moet dat natuurlijk even worden opgefrist.
		</p>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Je hebt dit jaar al eerder gebruikt dat je de <b>oppervlakte van een rechthoek</b> uit kunt rekenen door lengte keer breedte te doen.<br>
					In de vorm van een <b>woordformule</b> ziet dat er zo uit:</p>
				<p>&nbsp; Oppervlakte rechthoek = lengte &times; breedte</p>
				<p>Van de rechthoek hiernaast is de oppervlakte dus 3&sdot;7 = 21 cm<sup>2</sup>.</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/opp_rechthoek_th.png" width="250px">
			</div>
		</div>
		<p>
			<b>Let op</b> dat je de juiste <b>eenheden</b> bij je antwoorden schrijft.
		</p>
		<p>
			In deze taak ga je leren hoe je de <b>oppervlakte van een driehoek</b> kunt berekenen en van nog een boel andere vlakke figuren, zelfs van een cirkel.
		</p>
	</div>

	<!-- opdracht 1 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 1 Driehoeken</h3>
		<div class="row">
			<div class="col-xs-7">
				<p>
					Hiernaast zie je een rechthoekige, een gelijkbenige en een gelijkzijdige driehoek.
					<ol>
						<li>
							Teken de driehoeken over in je schrift (dat mag op ruitjespapier).
						</li>
						<li>
							Schrijf de juiste naam (rechthoekig, gelijkbenig of gelijzijdig) bij de driehoeken.
						</li>
						<li>
							Geef met de notatie die je kent voor gelijke lengte, gelijke hoeken en rechte hoeken aan wat je weet.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-5">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/driehoeken_opdr.png">
			</div>		
		</div>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-6">
						<p>Zie de afbeelding hieronder.</p>
					</div>
					<div class="col-xs-5">
						<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/driehoeken_antw.png" width="300px">
					</div>
				</div>
			</div>
		</div>
	</div><!-- opddracht suiten -->


	<!-- theorie A-->
	<div class="tekstblok theorie meetkunde" id="theorieA">
		<h3>Theorie A Assenstelsel en coördinaten</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Hier zie je een voorbeeld van een <b>assenstelsel</b>. Dit assenstelsel bestaat uit een <b><em>x</em>-</b> en een <b><em>y</em>-as</b>.
				</p>
				<p>
					In het assenstelsel snijden de <em>x</em>- en de <em>y</em>-as elkaar in de <b>oorsprong</b>.
				</p>
				<p>
					De oorsprong geef je aan met een hoofdletter O, en de <em>x</em>-as met een <em>x</em> en de <em>y</em>-as met een <em>y</em>.
				</p>
				<p>
					Zowel langs de <em>x</em>-as als langs de <em>y</em>-as is de <b>stapgrootte steeds hetzelfde</b>. De stapgrootte langs de <em>x</em>-as mag wel anders zijn dan langs de <em>y</em>-as. Met een <a href="afbeeldingen/meetkunde_leerjaar_2/zaagtand.pdf" target="_blank"><b>zaagtand</b></a> kan het eerste deel van een as worden ingekort.
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/assenstelsel_th.png">
			</div>
		</div>
		<p>
			In het plaatje zie je de <b>coördinaten</b> van punt <em>A</em> tussen haakjes staan: <nobr>(3, 2)</nobr>. De <em>x</em>-coördinaat van punt <em>A</em> is 3 en de <em>y</em>-coördinaat is 2.
		</p>
	</div>

	<!-- opdracht 2 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 2 Assenstelsel</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Neem het assenstelsel hiernaast over, inclusief de <b>zaagtand</b>.<br>
					<ol>
						<li>
							Ga na dat punt <em>P</em> coördinaten <nobr>(4, 18)</nobr> heeft.
						</li>
						<li>
							Wat zijn de coördinaten van <em>Q</em>?
						</li>
						<li>
							Teken de punten <nobr><em>R</em>(12, 18)</nobr> en <nobr><em>S</em>(4, 27)</nobr> in het assenstelsel.
						</li>
						<li>
							Bereken de oppervlakte van rechthoek <em>PQRS</em>.<br>
							Als je wil kun je eerst de rechthoek <em>PQRS</em> tekenen met <nobr><em>S</em>(4, 27)</nobr>.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/assenstelsel_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<h3>Uitwerking</h3>
				<div class="row">
					<div class="col-xs-6">
						<p>
							<ol>
								<li>
									<em>P</em> heeft <em>x</em>-coördinaat 4 en lees goed af op de <em>y</em>-as dat de <em>y</em>-coördinaat 18 is.
								</li>
								<li>
									<em>Q</em>(12, 27)
								</li>
								<li>
									Zie de afbeelding hiernaast.
								</li>
								<li>
									<em>lengte</em> &sdot; <em>breedte</em> = <br>&sdot; 8 &sdot; 9 = 72
								</li>
							</ol>
						</p>
					</div>
					<div class="col-xs-5">
						<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/assenstelsel_antw.png">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 3 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 3 Oppervlakte rechthoek</h3>
		<p>
			Hieronder zie je drie vlakke figuren. Schrijf op wat de naam is van het figuur en bereken de oppervlakte.
		</p>
		<div class="row">
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/rechthoek1_opdr.png">
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/rechthoek2_opdr.png">
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/rechthoek3_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol type="1">
					<li>Rechthoek met oppervlakte 27 cm<sup>2</sup></li>
					<li>Vierkant met oppervlakkte 25 cm<sup>2</sup></li>
					<li>Rechthoek met oppervlakte 27 cm<sup>2</sup></li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 4 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 4 Rechthoekige driehoek</h3>
		<p>
			Hieronder zie je een plaatje van een rechthoekige driehoek (&Delta;<em>ABC</em>) in een rechthoek (rechthoek <em>ABCD</em>). De figuur staat ook op je <a href="afbeeldingen/meetkunde_leerjaar_2/werkblad_oppervlakte.pdf" target="_blank">werkblad</a>.
		</p>
		<div class="row">
			<div class="col-xs-7">
				<br>
				<ol>
					Van &Delta;<em>ABC</em> moet de oppervlakte uitgerekend worden.
					<li>Welke zijden zijn rechthoekszijden?</li>
					<li>Knip &Delta;<em>ACD</em> uit.</li>
					<li>Kun jij deze driehoek zó op &Delta;<em>ABC</em> leggen, dat je hem helemaal bedekt?</li>
					<li>Weet jij nu misschien een manier om de oppervlakte van &Delta;<em>ABC</em> uit te rekenen?</li>
				</ol>
			</div>
			<div class="col-xs-5">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/rechthoekige_opdr.png" width="250px" class="rightfloat">
			</div>
		</div>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord"><p><b>Uitwerking</b><br>
				<ol>
					<li>&ang;<em>B</em> is recht. Dus de zijden <em>AB</em> en <em>BC</em> zijn rechthoekszijden (en als je heel flauw bent, dan <em>AD</em> en <em>CD</em> ook).</li>
					<li>-</li>
					<li>Ja dat kan. Leg de driehoeken zo op elkaar dat punt B en punt D op elkaar liggen en de beide schuine zijden ook op elkaar.</li>
					<li>Antwoord: 7,5 mm<sup>2</sup>.<br>
						Lees goed de theorie door, ook als je het antwoord goed had, misschien is je manier anders?</li>
				</ol>
			</p></div>
		</div>
	</div>

	<!-- theorie B -->
	<div class="tekstblok theorie meetkunde" id="theorieB">
		<h3>Theorie B Oppervlakte rechthoekige driehoek</h3>
		<div class="row">
			<div class="col-xs-7">
				<p>
					Om elke rechthoekige driehoek kun je een rechthoek tekenen waarvan jij de oppervlakte uit kunt rekenen. De helft van de oppervlakte van die rechthoek is de oppervlakte van de rechthoekige driehoek.
				</p>
				<p>
					De woordformule bij het berekenen van de <b>oppervlakte van een rechthoekige driehoek</b> is:
				</p>
				<p>
					&nbsp; Oppervlakte rechthoekige driehoek = lengte &times; breedte &divide; 2
				</p>
				<p>
					<b>Let op</b>: De lengte en de breedte moeten allebei een <b>rechthoekszijde</b> zijn van de driehoek.
				</p>
			</div>
			<div class="col-xs-5">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/rechthoekige_th.png">
			</div>
		</div>
	</div>

	<!-- opdracht 6 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 6 Berekenen</h3>
		<p>
			Hieronder zie je drie rechthoekige driehoeken.
		</p>
		<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/rechthoekige3_opdr.png">
		<p>
			<ol>
				<li>Wat zijn de rechthoekszijden van &Delta;<em>ABC</em>?</li>
				<li>Bereken de oppervlakte van &Delta;<em>ABC</em>.</li><br>
				<li>Wat zijn de rechthoekszijden van &Delta;<em>DEF</em>?</li>
				<li>Bereken de oppervlakte van &Delta;<em>DEF</em>.</li><br>
				<li>Bereken de oppervlakte van &Delta;<em>PQR</em>.</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/rechthoekige3_hint.png">
				<div class="hider">
					<div class="showhide">&rarr;</div>
					<div class="antwoord">
						<ol>
							<li><em>AB</em> en <em>AC</em>.</li>
							<li>12&divide;2 = 6 mm<sup>2</sup>.</li>
							<li><em>DE</em> en <em>EF</em>.</li>
							<li>917,1 cm<sup>2</sup>.</li>
							<li>18 dm<sup>2</sup>.</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 7 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 7 Rechthoek herkennen</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Hieronder zie je een plaatje van een driehoek in een rechthoek. De figuur gaat ook op je <a href="afbeeldingen/meetkunde_leerjaar_2/werkblad_oppervlakte.pdf" target="_blank">werkblad</a>.
				</p>
				<p>
					<ol>
						&Delta;<em>MNP</em> is <u>niet</u> een rechthoekige driehoek. Toch moet de oppervlakte uitgerekend worden.
						<li>
							Knip &Delta;<em>MPS</em> en &Delta;<em>NRP</em> uit.
						</li>
						<li>
							Kun jij deze driehoeken zó op &Delta;<em>MNP</em> leggen, dat je hem helemaal bedekt?
						</li>
						<li>
							Weet jij nu misschien een manier om de oppervlakte van &Delta;<em>MNP</em> uit te rekenen?
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gewone_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>-</li>
					<li>-</li>
					<li>Als je het nog niet weet, is niet erg; lees goed het theorieblok hieronder!</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- theorie C -->
	<div class="tekstblok theorie meetkunde" id="theorieC">
		<h3>Theorie C Oppervlakte driehoeken</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Om elke driehoek kun je een rechthoek tekenen. Het is de kunst om dat zó te doen dat je de lengte én de breedte weet van die rechthoek, zodat je de oppervlakte uit kunt rekenen.
				</p>
				<p>
					Als je de oppervlakte weet van de rechthoek, kun je ook de oppervlakte van de driehoek berekenen. De oppervlakte van &Delta;<em>MQP</em> is precies even groot als &Delta;<em>MPS</em> en <nobr><em>oppervlakte</em> &Delta;<em>NPQ</em></nobr> = <nobr><em>oppervlakte</em> &Delta;<em>NRP</em></nobr>. Dus de oppervlakte van de driehoek is de helft van de oppervlakte van de rechthoek.
				</p>
				<p>
					In het plaatje hiernaast heet lijnstuk <em>MN</em> de <b>basis</b> en <em>PQ</em> de <b>hoogtelijn</b> van de driehoek. De lengte van <em>PQ</em> vertelt hoe hoog punt <em>P</em> boven de basis ligt en heet dus de <b>hoogte</b>.
				</p>
				<p>
					De woordformule bij het berekenen van de oppervlakte van een willekeurige driehoek is (dus ook van een rechthoekige driehoek):
				</p>
				<p>
					&nbsp; Oppervlakte driehoek = basis &times; hoogte &divide; 2<br>
					of<br>
					&nbsp; Oppervlakte driehoek = <math><mfrac><mn>1</mn><mn>2</mn></mfrac></math> &times; basis &times; hoogte
				</p>
				<p>
					<b>Let op</b>: De basis en de hoogte moeten loodrecht op elkaar staan.
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gewone_th.png">
			</div>
		</div>
	</div>

	<!-- opdracht 8 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 8 Allerlei driehoeken</h3>
		<p>
			Hieronder zie je drie 'gewone' driehoeken, de maten zijn gegeven in centimeters.
			<ol>
				<li>Welk lijnstuk is de basis in &Delta;<em>ABC</em> en welke is de hoogtelijn?</li>
				<li>Bereken de oppervlakte van &Delta;<em>ABC</em>.</li>
				<br>
				<li>Schrijf op hoe lang de basis en hoe lang de hoogte is in &Delta;<em>EFG</em>.</li>
				<li>Wat is de oppervlakte van &Delta;<em>EFG</em>?</li>
				<li>Bereken de oppervlakte van &Delta;<em>JKL</em>.</li>
			</ol>
			<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gewone3_opdr.png">
		</p>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				Bekijk eerst deze hint:
				<br>
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gewone3_hint.png">
				<br>
				Klik hieronder voor het antwoord
				<div class="hider">
					<div class="showhide">&rarr;</div>
					<div class="antwoord">
						<ol>
							<li>Basis <em>AB</em> en hoogtlijn <em>CD</em></li>
							<li>7 cm<sup>2</sup></li>
							<li>Basis is 3,69 cm en de hoogte is 3,8 cm</li>
							<li>7,011 cm<sup>2</sup></li>
							<li>7,875 cm<sup>2</sup></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 9 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 9 Driehoeken herkennen</h3>
		<p>
			Je ziet hier twee driehoeken met <u>te veel</u> informatie. Bepaal eerst welke lijnstukken de basis en de hoogtelijn voorstellen.
			<br>
			<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gewone2_opdr.png">
			<ol>
				<li>Als je de oppervlakte van &Delta;<em>ABC</em> wilt berekenen, kun je dan <em>AE</em> als hoogtelijn gebruiken?<br>
					Leg uit in eigen woorden.</li>
				<li>Bereken de oppervlakte van &Delta;<em>ABC</em>.</li>
				<li>Wat is de oppervlakte van &Delta;<em>FGH</em>?</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>Hoogtelijn <em>AE</em> hoort bij basis <em>BC</em> omdat <em>AE</em> <u>loodrecht</u> op <em>BC</em> staat. Maar omdat ik <u>niet weet hoe lang</u> <em>BC</em> is, kan ik op deze manier de oppervlakte niet uitrekenen.</li>
					<li><em>AB</em>&sdot;<em>CD</em>&divide;2 = 6&sdot;5,73&divide;2 = 17,19.</li>
					<li><em>FH</em>&sdot;<em>GJ</em>&divide;2 = 6&sdot;2,76&divide;2 = 8,28.</li>
				</ol>
				<b>Let op</b>: Als er geen eenheid gegeven wordt, hoef je in je antwoord ook geen eenheid te noemen.
			</div>
		</div>
	</div>

	<!-- opdracht 10 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 10 Gelijke hoogte gelijk oppervlak</h3>
		<p>
			In de figuur hieronder loopt de lijn door <em>C</em>, <em>E</em> en <em>G</em> evenwijdig aan <em>AB</em>. Dat betekent dat <em>C</em> even hoog boven <em>AB</em> ligt als <em>E</em>.
		</p>
		<div class="row">
			<div class="col-xs-8">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gelijkehoogte_opdr.png">
			</div>
			<div class="col-xs-4">
			</div>
		</div>
		<p>
			<ol>
				<li>Bereken de oppervlakte van &Delta;<em>ABC</em>.</li>
				<li>Bereken de oppervlakte van &Delta;<em>ABE</em> en vergelijk het antwoord met de oppervlakte van &Delta;<em>ABC</em>.</li>
				<br>
				De oppervlakte van &Delta;<em>ABG</em> is precies even groot als van de driehoeken <em>ABC</em> en <em>ABE</em>.
				<li>Welk lijnstuk is de basis van &Delta;<em>ABG</em>?</li>
				<li>Welk lijnstuk is de hoogtelijn van &Delta;<em>ABG?</em></li>
				<li>Hoe groot denk jij dat de oppervlakte is van &Delta;<em>ABG</em>?</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<p>
					<ol>
						<li>6&times;4&divide;2 = 12 cm<sup>2</sup>.</li>
						<li>De hoogte is ook 4 cm. Dus 6&times;4&divide;2 = 12 cm<sup>2</sup>.</li>
						<li><em>AB</em> is de basis.</li>
						<li><em>GH</em> staat loodrecht op het verlgende van lijnstuk <em>AB</em>, dus dat zal de hoogtelijn zijn.</li>
						<li>De hoogte en basis hebben weer dezelfde lengte als de andere twee driehoeken. Dus 6&times;4&divide;2 = 12 cm<sup>2</sup>.</li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<!-- opdracht 11 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 11 Hoogtelijn buiten de driehoek</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					In de driehoek hiernaast valt de hoogtelijn náást de driehoek. In deze opdracht ga je leren of dat veel uit maakt.
				</p>
				<p>
					<ol>
						<li>Bereken de oppervlakte van &Delta;<em>PQR</em>, <u>gebruik <em>PR</em> als basis</u>.</li><br>
						De oppervlakte van &Delta;<em>PQR</em> zou hetzelfde moeten blijven, ook als je <em>PQ</em> als basis neemt.
						<li>Wat is de hoogtelijn, als <em>PQ</em> de basis is?</li>
						<li>Komt er inderdaad dezelfde oppervlakte uit als je <em>PQ</em> als basis neemt?</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/hoogtelijnbuiten_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<p>
					<ol>
						<li><em>PR</em>&sdot;<em>QS</em>&divide;2 = 10&sdot;4%divide;2 = 20 cm<sup>2</sup>.</li>
						<li>De hoogtelijn en de basis moeten loodrecht op elkaar staan. Dus als <em>PQ</em> de basis is, dan is <em>RT</em> de hoogtelijn.</li>
						<li><em>PQ</em>&sdot;<em>RT</em>&divide;2 = 6,4&sdot;6,25&divide;2 = 20 cm<sup>2</sup>. Dus JA.</li>
					</ol>
					Dus een hoogtelijn die niet ín de driehoek zit,maakt niet uit voor de berekening!
				</p>
			</div>
		</div>
	</div>

	<!-- theorie D -->
	<div class="tekstblok theorie meetkunde" id="theorieD">
		<h3>Theorie D Formules voor driehoeken</h3>
		<div class="row">
			<div class="col-xs-7">
				<p>
					Je hebt geleerd hoe je de oppervlakte van driehoeken kunt berekenen. Van rechthoekige driehoeken en van alle andere driehoeken. Een overzicht van die berekeningen kun je bekijken in het filmpje hiernaast.<br>
					<b>Let op</b>: wij gebruikten steeds het woord <u>basis</u> voor de zijde die je met de hoogte vermenigvuldigt. In het filmpje wordt <u>zijde</u> gebruikt.
				</p>
			</div>
			<div class="col-xs-5">
				<iframe width="252px" height="141px" src="//www.youtube.com/embed/D3XcaGoC_1o" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-7">
				<p>
					Als de hoogtelijn buiten de driehoek valt, kun je nog steeds op dezelfde manier de oppervlakte uitrekenen. Waarom dat zo is zie je in het filmpje hiernaast.<br>
					<b>Let op</b>: wij gebruikten steeds het woord <u>basis</u> voor de zijde die je met de hoogte vermenigvuldigt. In het filmpje wordt <u>zijde</u> gebruikt.
				</p>
			</div>
			<div class="col-xs-5">
				<iframe width="252px" height="141px" src="//www.youtube.com/embed/XXvpbEa4RLg" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<p>
			Als je in een figuur driehoeken kunt herkennen, kun je voortaan ook de oppervlakte uitrekenen. Bijvoorbeeld een vijfhoek (<b>uitwerken!</b>)
		</p>
	</div>

	<!-- opdracht 12 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 12 Herhalen</h3>
		<p>
			Bekijk de driehoeken hieronder goed. Je ziet dat de maten soms in verschillende eenheden zijn gegeven.
			<br>
			<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/herhalen_opdr.png">
			<br>
			<ol>
				<li>Bereken de oppervlakte van &Delta;<em>ABC</em> in cm<sup>2</sup>.</li>
				<li>Bereken de oppervlakte van &Delta;<em>EFG</em>.</li>
				<li>Bereken de oppervlakte van &Delta;<em>JKL</em>.</li>
			</ol>
			<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord"><p><b>Uitwerking</b><br>
						<ol>
							<li>25 cm &times; 35 cm &divide; 2 = 437,5 cm<sup>2</sup>.</li>
							<li>43 dm &times; 30 dm &divide; 2 = 645 dm<sup>2</sup>.</li>
							<li>4 &times; 2,7 &divide; 2 = 5,4</li>
						</ol>
					</p>
				</div>
			</div>
		</p>
	</div>

	<!-- opdracht 13 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 13 Coördinaten</h3>
		<p>Maak een assenstelsel met een <em>x</em>-as die loopt van -5 tot 5 en een `y`-as die ook van -5 naar 5 gaat.
			<ol>
				<li>Teken het punt A(-1,5; 1) (dat betekent dat je het punt A tekent met `x`-coördinaat -1,5 en `y`-coördinaat 1). Teken ook de punten B(2, 5) en C(3, 1) in een assenstelsel.</li>
				<li>Bereken de oppervlakte van &Delta;<em>ABC</em>.<br>
				<b>Hint</b>: de roosterlijnen in je wiskundeschrift staan loodrecht op elkaar.</li><br>

				<li>Teken de punten <em>P</em>(-4, 2), <em>Q</em>(1, 2) en <em>R</em>(3, -2).</li>
				<li>Bereken de oppervlakte van &Delta;<em>PQR</em>.</li><br>

				<li>Teken de punten <em>S</em>(-3, -4), <em>T</em>(2, -4) en <em>U</em>(1,375; -2,5).</li>
				<li>Bereken de oppervlakte van &Delta;<em>STU</em>.</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord"><p><b>Uitwerking</b><br>
					<ol>
						<li>Zie &Delta;<em>ABC</em>.</li>
						<li></li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<!-- opdracht 14 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 14 Driehoeken</h3>
		<p>
			Bekijk de driehoeken hieronder, let op de <b>eenheden</b>.<br>
			<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/driehoeken_opp_opdr.png">
			<ol>
				<li>
					Bereken de oppervlakte van &Delta;<em>PQR</em> in dm<sup>2</sup>.
				</li>
				<li>
					Bereken de oppervlakte van &Delta;<em>WXY</em> in cm<sup>2</sup>.
				</li>
				<li>
					Bereken de oppervlakte an &Delta;<em>ABC</em> in m<sup>2</sup>
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<p>
					<em>Oppervlakte driehoek</em> = `1/2*` <em>basis</em> &sdot; <em>hoogte</em>
					<ol>
						<li>
							basis = <em>PQ</em> = 50 cm = 5 dm<br>
							hoogte = <em>RS</em> = 4 dm<br>
							Opp. &Delta;<em>PQR</em> = `1/2 * 5 * 4 = 10` dm<sup>2</sup> 
						</li>
						<li>
							basis = <em>WX</em> = 6 cm<br>
							hoogte = <em>YZ</em> = 6 cm<br>
							Opp. &Delta;<em>WXY</em> = `1/2 * 6 * 6 = 18` cm<sup>2</sup>.
						</li>
						<li>
							basis = <em>BC</em> = 12 dm = 1,2 m<br>
							hoogte = <em>AD</em> = 56 dm = 5,6 m<br>
							Opp. &Delta;<em>ABC</em> = `1/2 * 1,2 *  5,6= 3,36` m<sup>2</sup>
						</li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<!-- opdracht 15 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 15 Driehoeken</h3>
		<p>
			Maak een assenstelsel met een <em>x</em>- en een <em>y</em>-as die lopen van -2 tot 5 en stapgrootte 1.
			<ol>
				<li>
					Teken de punten <em>A</em>(-2, 2), <em>B</em>(1, 2) en <em>C</em>(-2, 5). Bereken de oppervlakte van &Delta;<em>ABC</em>.
				</li>
				<li>
					Teken in hetzelfde assenstelsel de punten <em>D</em>(-2, -1), <em>E</em>(1,5; -1) en <em>F</em>(3, 3). Bereken de oppervlakte van &Delta;<em>DEF</em>.
				</li>
				<li>
					Teken ook in hetzelfde assenstelsel de punten <em>P</em>(3, 0), <em>Q</em>(5, 2) en <em>R</em>(5, 5). Bereken de oppervlakte van &Delta;<em>PQR</em>.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-6">
						<ol>Zie de afbeelding hiernaast voor het assenstelsel
							<li>
								Basis <em>AB</em> &perp; hoogte <em>AC</em><br>
								`1/2` &sdot; 3 &sdot; 3 = 4,5
							</li>
							<li>
								Basis <em>DE</em> hoort bij een hoogte van 4 (van punt <em>F</em> loodrecht naar beneden.<br>
								`1/2` &sdot; 3,5 &sdot; 4 = 7
							</li>
							<li>
								Basis <em>QR</em> hoort bij een hooge van 2: van punt <em>P</em> naar het verlengde van lijnstuk <em>QR</em><br>
								`1/2` &sdot; 3 &sdot; 2 = 3
							</li>
						</ol>
					</div>
					<div class="col-xs-6">
						<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/assenstelsel_driehoeken_antw.png">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 16 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 16 Vierhoeken</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Hieronder zie je een parallellogram, trapezium en een vlieger.
				</p>
				<p>
					In deze opdracht is het handig om symmetrische eigenschappen te gebruiken. Als iets spiegelsymmetrisch is, is de oppervlakte links en rechts van de spiegelas precies even groot.
				</p>
				<p>
					<ol>Figuur A: <em>AB</em> = 4, <em>BD</em> = 2,6, <em>AC</em> = 7,6.
						<li>
							Wat is de naam van deze figuur?
						</li>
						<li>
							Geef de namen van de twee <b>diagonalen</b>.
						</li>
						<li>
							Hoeveel spiegelassen heeft deze figuur?
						</li>
						<li>
							Wat is de kleinste draaihoek?
						</li>
						<br>De diagonalen staan loodrecht op elkaar.
						<li>
							Bereken de oppervlakte van deze figuur.
						</li>
						<br>
						Figuur B: <em>EF</em> = 2,5, <em>FH</em> = 3,5 en <em>EF</em> staat loodrecht op <em>FH</em>.
						<li>
							Wat is de naam van deze figuur?
						</li>
						<li>
							Hoeveel spiegelassen heeft deze figuur?
						</li>
						<li>
							Wat is de kleinste draaihoek?
						</li>
						<li>
							Bereken de oppervlakte van deze figuur.
						</li>
						<br>
						Figuur C: <em>KN</em> = 5,7, <em>LM</em> = 1,9 en <em>LP</em> = 1,8.
						<li>
							Wat is de naam van deze figuur?
						</li>
						<li>
							Hoeveel spiegelassen heeft deze figuur?
						</li>
						<li>
							Wat is de kleinste draaihoek?
						</li>
						<li>
							<b>Uitdaging</b>: Bereken de oppervlakte van deze figuur.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/vierhoeken_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<p>
					<ol>
						<li>Vlieger en ruit zijn allebei een goed antwoord.</li>
						<li><em>BD</em> en <em>AC</em></li>
						<li>Twee, namelijk de diagonalen</li>
						<li>360&deg; &divide; 2 = 180&deg;</li>
						<li>Bijvoorbeeld eerst oppervlakte van &Delta;<em>ABC</em> berekenen: <nobr>`1/2` <em>AC</em> &sdot; <em>hoogte</em></nobr> = <nobr>`1/2` &sdot; 7,6 &sdot; 1,3 = 4,94</nobr>. Totale oppervlakte is dus 9,88</li>
						<br>
						<li>Parallellogram</li>
						<li>0</li>
						<li>360&deg; &divide; 2 = 180&deg;</li>
						<li>Bijvoorbeeld eerst de oppervlakte van &Delta;<em>EFH</em> berekenen: <nobr>`1/2` <em>FH</em> &sdot; <em>EF</em></nobr> = <nobr>`1/2` &sdot; 3,5 &sdot; 2,5 = 4,375</nobr>. Totale oppervlakte is dus 8,75.</li>
						<br>
						<li>Trapezium</li>
						<li>0</li>
						<li>Deze figuur heeft geen kleinste draaihoek.</li>
						<li>6,84</li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<!-- opdracht 17 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 17 Oppervlakte van een cirkel</h3>
		<p>
			<ol>
				<li>
					Teken op ruitjespapier een assenstelsel met daarin de punten <nobr><em>P</em>(-1, -2)</nobr>, <nobr><em>Q</em>(7, -2)</nobr> en <nobr><em>R</em>(1, 6)</nobr>.
				</li>
				<br>
				Elk vierkantje op je ruitjespapier is 1 cm<sup>2</sup>. Er zijn 22 <u>vierkantjes</u> in &Delta;<em>PQR</em>. Er zijn steeds twee driehoekjes die samen ook 1 cm<sup>2</sup> zijn.
				<li>
					Bedenk wat de totale oppervlakte in &Delta;<em>PQR</em> is, zonder een berekening te doen.
				</li>
				<br>
				Maak op ruitjespapier een cirkel met een roosterpunt als middelpunt en straal ...cm.
				<li>
					Maak een schatting van het aantal cm<sup>2</sup> in de cirkel.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-6">
						<ol>
							<li>
								Zie de afbeelding hiernaast.
							</li>
							<li>
								Er zijn 22 blauwe hokjes, vier groene stukjes maken twee hokjes, vier gele stukjes maken twee hokjes, vier rode stukjes maken twee hokjes en vier paarse stukjes maken twee hokjes. Optellen: <font color="blue">22</font> + <font color="green">2</font> + <font color="yellow">2</font> + <font color="orange">2</font> + <font color="red">2</font> + <font color="purple">2</font> = 32 cm<sup>2</sup>.
							</li>
							<li>
								<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/opp_cirkel_th.png" width="200px" class="rightfloat">
								Zie de figuur hiernaast. Voor het antwoord kijk in de theorie hieronder.
							</li>
						</ol>
					</div>
					<div class="col-xs-6">
						<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/opp_tellen_th.png">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 18 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 18 Omtrek van een cirkel</h3>
		<p>
			Hiernaast zie je een rechthoek. De omtrek ervan kun je berekenen door de lengte van alle vier de zijden bij elkaar op te tellen. Maar wanneer je de omtrek van een cirkel moet bepalen, wordt het wat ingewikkelder.
		</p>
		<p>
			<ol>
				<li>
					Maak een cirkel met straal 2 op een ruitjesblad uit je schrift. Kies als middelpunt een snijpunt van twee lijnen.
				</li>
				<li>
					Gebruik dat elk hokje in je schrift 1 cm lang is. Kun je dan een schatting maken van hoe lang de omtrek van de cirkel is?
				</li>
			</ol>
		</p>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Linde wil weten of er een verband bestaat tussen de omtrek van een cirkel en de diameter. Ze heeft van heel veel ringen en oorbellen van haar moeder, zusje en zichzelf gemeten wat de diameter is en wat de omtrek is.
				</p>
				<p>
					<ol start="3">
						Bekijk de tabel hiernaast. Je ziet dat van cirkels met steeds een andere diameter (diameter = 2&sdot;straal) de omtrek is geschat.
						<li>
							Neem de tabel over en vul in.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<table>
					<thead>
						<tr>
							<td>Diameter</td><td>Omtrek</td><td>`\text{Omtrek}/\text{Diameter}`</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1,6</td><td>5,0</td><td></td>
						</tr>
						<tr>
							<td>2,0</td><td>6,4</td><td></td>
						</tr>
						<tr>
							<td>3,1</td><td>9,8</td><td></td>
						</tr>
						<tr>
							<td>6,0</td><td>18,8</td><td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- theorie E -->
	<div class="tekstblok theorie meetkunde" id="theorieE">
		<h3>Theorie E Formules bij een cirkel</h3>
		<div class="row">
			<div class="col-xs-7">
				<p>
					Het getal waarnaar Linde op zoek was is het getal 3,141593... Dit getal is een heel beroemd en veel gebruikt getal en heeft de naam `&pi;` (de Griekse letter p, spreek uit als pi).
				</p>
				<p>
					Het getal `&pi;` heeft heel veel decimalen. Gelukkig hoef je die niet allemaal te onthouden, want het hele getal staat opgeslagen op je rekenmachine onder de knop `&pi;` (zie de afbeelding hiernaast).
				</p>
				<p>
					Om de omtrek en de oppervlakte van een cirkel te berekenen heb je `&pi;` nodig. De formules zijn als volgt.
				</p>
				<p>
					<em>Omtrek cirkel</em> = 2 &sdot; `&pi;` &sdot; <em>straal</em>
					<br>
					<em>Oppervlakte cirkel</em> = `&pi;` &sdot; <em>straal</em><sup>2</sup>
				</p>
			</div>
			<div class="col-xs-5">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/texas_casio_pi.png">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-8">
				<p>
					<u>Voorbeeld</u>:<br>
					Bekijk de cirkel hiernaast en bereken de omtrek en de oppervlakte ervan.
				</p>
				<p>
					<u>Uitwerking</u>:<br>
					De <b>diameter</b> is 4 cm, dus de <b>straal</b> is 2 cm.
					<br>
					Omtrek = <nobr>2`&pi;`2 = (4`&pi;` =) 12,6 cm</nobr>
					<br>
					Oppervlakte is <nobr>`&pi;`2<sup>2</sup> = 12,57 cm<sup>2</sup></nobr>.
				</p>
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/opp_cirkel_vb.png">
			</div>
		</div>
	</div>

	<!-- opdracht 19 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 19 Cirkels</h3>
		<p>
			Bekijk de cirkels hieronder en bereken de omtrek en de oppervlakte van elke cirkel op 1 decimaal nauwkeurig.
		</p>
		<div class="row">
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/opp_cirkel_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
					Cirkel met middelpunt <em>M</em>:<br>
					De straal is 6, dus de diameter is 12. Omtrek = 12&sdot;`&pi;` = 37,7 cm<br>
					Oppervlakte = `&pi;` &sdot; 6<sup>2</sup> = 113,1 cm<sup>2</sup> (<b>Let op</b>: afronden!)
				</p>
				<p>
					Cirkel met middelpunt <em>P</em>:<br>
					Omtrek = diamter&sdot;`&pi;` = 9&sdot;`&pi;` = 28,3 cm<br>
					De diameter is 9 cm, dus de straal is 4,5 cm. Dus de oppervlakte is <nobr>`&pi;` &sdot; 4,5<sup>2</sup> = 63,6 cm<sup>2</sup></nobr>.
				</p>
				<p>
					Cirkel met middelpunt <em>Q</em>:<br>
					Omtrek = 2&sdot;`&pi;`&sdot;3 = 18,8 cm
					<br>
					Oppervlakte = `&pi;` &sdot; 3<sup>2</sup> = 28,3 cm<sup>2</sup>
				</p>
			</div>
		</div>
	</div>

	<!-- opdracht 20 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 20 Omgekeerd</h3>
		<p>
			<ol>
				Gegeven is dat de cirkel met middelpunt <em>M</em> een omtrek heeft van 12 cm.
				<li>
					Neem de formule over en vul zo ver mogelijk in:<br>
					<em>Omtrek = 2 &sdot; `&pi;` &sdot; straal</em>
				</li>
				<li>
					Bereken de straal.
				</li>
				<br>
				<b>Uitdaging</b>:<br>
				Meike beweert dat de cirkel met middelpunt <em>Q</em> een omtrek heeft van 20,5 cm en een oppervlakte van 30,5 cm<sup>2</sup>.
				<li>
					Ga met een berekening na of zij gelijk kan hebben.
				</li>
			</ol>
		</p>
	</div>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li><em>12 = 2 &sdot; `&pi;` &sdot; straal</em></li>
				<li>Straal = `12 / (2 &sdot; &pi;) &asymp; 1,9 cm.`</li>
				<li>Straal = `(20,5) / (2 &sdot; &pi;) &asymp; 3,262676.. cm.`<br>
					Oppervlakte = 3,262676..<sup>2</sup> &sdot; &pi; &asymp; 33,4 cm<sup>2</sup>.<br>Meike heeft dus geen gelijk.</li>
			</ol>
		</div>		
	</div>		

	<!-- opdracht 21 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 21 Door elkaar</h3>
		<p>
			<ol>
				<li>
					Gegeven is een cirkel met straal 4 dm. Bereken de oppervlakte.
				</li>	
				<li>
					Gegeven is een cirkel met diameter 10 mm. Bereken de omtrek.
				</li>	
				<li>
					Gegeven is een cirkel met omtrek 35 cm. Bereken de straal.
				</li>	
				<li>
					Gegeven is een cirkel met omtrek 40 cm<sup>2</sup>. Bereken de oppervlakte.
				</li>	
			</ol>
		</p>
	</div>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>Oppervlakte = `&pi;` &sdot; 4<sup>2</sup> dm<sup>2</sup> &asymp; 50,3 dm<sup>2</sup></li>
				<li>Straal = 5 cm. Omtrek 2 &sdot; `&pi;` &sdot; 5 cm = 31,4 cm </li>
				<li>Straal = Omtrek / 2 &sdot; &pi; = `35 / (2 &sdot; &pi;) &asymp; 5,6 cm.`</li>
				<li>Straal = Omtrek / 2 &sdot; &pi; = `40 / (2 &sdot; &pi;) &asymp; 6,3661977... cm.`<br>
					Oppervlakte = `6,3661977...<sup>2</sup> &sdot; &pi; &asymp; 127,3 cm<sup>2</sup>`</li>
			</ol>
		</div>		
	</div>		

	<!-- theorie F -->
	<div class="tekstblok theorie meetkunde" id="theorieF">
		<h3>Theorie F Nauwkeurig werken</h3>
		<p>
			Bij het berekenen van de oppervlakte van een cirkel gebruik je het getal `&pi;`, daardoor krijgen je antwoorden veel decimalen.
		</p>
		<p>
			Rond je antwoord netjes af zoals aangegeven, de <u>tussenstappen niet</u>!!!
		</p>
		<p>
			<u>Voorbeeld</u><br>
			Bekijk de halve cirkel hiernaast/hieronder en bereken de omtrek en de oppervlakte in twee decimalen nauwkeurig.
		</p>
		<p>
			<u>Uitwerking</u><br>
			De straal is 3 cm.<br>
			De oppervlakte van een cirkel invullen: <nobr>`&pi;` &sdot; 3<sup>2</sup></nobr>.
		</p>
		<p>
			<table>
				<tbody>
					<tr>
						<th width="200px">Met tussentijds afronden</th>
						<th width="200px">Zonder tussentijds afronden</th>
					</tr>
					<tr>
						<td>`&pi;` &sdot; 3<sup>2</sup> &asymp; 28,3</td>
						<td>`&pi;` &sdot; 3<sup>2</sup> = 28,27...</td>
					</tr>
					<tr>
						<td colspan="2">Oppervlakte van de halve cirkel is</td>
					</tr>
					<tr>
						<td>28,3 &divide; 2 = 14,15</td>
						<td>28,27... &divide; 2 &asymp; 14,14</td>
					</tr>
				</tbody>
			</table>
		</p>
	</div>

	<!-- opdracht 22 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 22 Cirkel?</h3>
		<p>
			Hieronder zie je drie figuren.<br>
			Geef je antwoord steeds in 2 decimalen nauwkeurig.
			<ol>
				<li>
					Bereken de oppervlakte van de halve cirkel met middellijn <nobr><em>AB</em> = 5 cm</nobr>.
				</li>
				<li>
					Bereken de oppervlakte van driekwart van de cirkel met straal <nobr><em>MP</em> = 1 dm</nobr>.
				</li>
				<li>
					<b>Uitdaging</b>: Bereken de oppervlakte van het vierkant <em>PQRS</em> met <nobr><em>QR</em> = 4 cm</nobr>, waar een cirkel met een diameter van 4 cm uit is geknipt.
				</li>
			</ol>
		</p>
		<div class="row">
			<div class="col-xs-8">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/opp_cirkeldelen_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						Oppervlakte van een hele cirkel met diameter <em>AB</em> = 5 cm, is de helft van <nobr>`&pi;` &sdot; 2,5<sup>2</sup></nobr>. Dus 19,63 / 2 = 9,82 cm<sup>2</sup>.
					</li>
					<li>
						Oppervlakte van de hele cirkel is <nobr>`&pi;` &sdot; 1<sup>2</sup> = 3,141592... cm<sup>2</sup></nobr>. Dus de oppervlakte van driekwart van de cirkel is: <nobr>`3/4` &sdot; 3,141592... = 2,36 dm<sup>2</sup></nobr>
					</li>
					<li>
						Rest Oppervlakte = Opp. vierkant - Opp. cirkel<br>
						Opp. vierkant = 4 cm &times; 4 cm = 16 cm<sup>2</sup><br>
						Straal = `1/2 &times; 4 = 2` cm<br>
						Opp. cirkel = 2<sup>2</sup> &times; `&pi;` = 4&pi; cm<sup>2</sup><br>
						Rest Opp. = 16 - 4`&pi;` &asymp; 3,43 cm<sup>2</sup>
					</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- odpracht 23 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 23 Omtrek! (Uitdaging)</h3>
		<p>
			Bekijk de drie figuren uit de opdracht hiervoor nogmaals.
			<ol>
				<li>
					Bereken de omtrek van halve cirkel.
				</li>
				<li>
					Bereken de omtrek van de driekwart cirkel.
				</li>
				<li>
					Bereken de lengte van rand die het blauwe gedeelte insluit.
				</li>
			</ol>
		</p>
	</div>

	<!-- opdracht 24 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 24 Groot en klein</h3>
		<p>
			Bekijk de afbeelding hieronder. De ene is een <b>vergroting</b> van een andere. Dus ze hebben precies dezelfde vorm, maar de één is uitvergroot.
		</p>
		<div class="row">
			<div class="col-xs-5">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/emoji_opdr.png">
			</div>
			<div class="col-xs-7">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/emoji_opdr.png">
			</div>
		</div>
		<p>
			<ol>
				<li>
					Meet de afstand tussen twee punten in het ene plaatje en ook in de andere.
				</li>
				<li>
					Hoeveel keer groter is de grote dan de kleine?
				</li>
				<li>
					Je buurman/buurvrouw heeft vast twee andere punten gekozen. Is zijn/haar antwoord ook anders dan de jouwe?
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						Kies bijvoorbeeld de mondhoeken of de onderste puntjes van de hartjes oid.
					</li>
					<li>
						Als het goed is, is de lengte in het linker plaatje 1,4 keer zo groot als in de kleine.
					</li>
					<li>
						Als het goed is, heeft je buurman/-vrouw dat ook!
					</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 25 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 25 Vergroten</h3>
		<div class="row">
			<div class="col-xs-8">
				<p>
					Renee tekende in haar schrift een dansend poppetje. Hiernaast zie je daarvan een plaatje. Teken het poppetje op ruitjes papier na, maar dan twee keer zo groot.
				</p>
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/vergroten_antw.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<p>
					Zie de afbeelding hieronder.
				</p>
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/vergroten_opdr.png">
			</div>
		</div>
	</div>

	<!-- theorie G -->
	<div class="tekstblok theorie meetkunde" id="theorieG">
		<h3>Theorie G Gelijkvormigheid</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Als twee figuren precies dezelfde vorm hebben noem je ze <b>gelijkvormig</b>. Als die twee gelijkvormige figuren niet precies even groot zijn of gedraaid zijn ten opzichte van elkaar, heten ze nog steeds gelijkvormig.
				</p>
				<p>
					Noem één van de twee figuren <b>origineel</b> en de andere <b>beeld</b> (het maakt niet uit in welke volgorde).<br>
					Als twee figuren gelijkvormig zijn, kun je uitrekenen hoeveel keer groter het beeld is vergeleken met het origineel (dat gebruikte jij al in de vorige opgaven). Maar dan moet je wel zeker weten dat ze gelijkvormig zijn.
				</p>
				<p>
					<u>Twee figuren zijn gelijkvormig als elke hoek in het origineel precies even groot als de overeenkomstige hoek in het beeld.</u>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gelijkvormig_th.png">
			</div>
		</div>
	</div>

	<!-- opdracht 26 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 26</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Hiernaast zie je vier driehoeken.
					<ol>
						<li>Welke driehoek is gelijkvormig met &Delta;<em>ABC</em>?</li>
						<li>Waarom zijn de andere twee driehoeken niet gelijkvormig?</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gelijkvormig_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<p>
					<ol>
						<li>
							Alleen &Delta;<em>DEF</em> ziet er hetzelfde uit.<br>
							Dus &Delta;<em>ABC</em> ~ &Delta;<em>DEF</em>.
						</li>
						<li>
							&ang;<em>G</em> en &ang;<em>M</em> zijn veel scherper dan welke hoek dan ook in &Delta;<em>ABC</em>.
						</li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<!-- theorie H -->
	<div class="tekstblok theorie meetkunde" id="theorieH">
		<h3>Theorie H Gelijkvormigheid</h3>
		<p>
			Als twee dingen hetzelfde zijn van vorm, maar andere afmetingen hebben, is het handig om het over vergroting of verkleining te hebben. Voorbeelden zijn tekeningen op schaal, het lezen van landkaarten of stadsplattegronden, vergroten en verkleinen van tekeningen via een kopieerapparaat...<br>
			Vergroten en verkleinen is ook een goede manier om na te denken over het metriek stelsel: waarom 1 m<sup>2</sup> = 100 dm<sup>2</sup>.
		</p>
		<div class="row">
			<div class="col-xs-7">
				<p>
					In het plaatje hiernaast zijn de driehoeken &Delta;<em>ABC</em> en &Delta;<em>RPQ</em> gelijkvormig (<b>Merk op</b> dat <em>RPQ</em> niet alfabetisch is!).<br>
					Dat kun je heel kort schrijven: &Delta;<em>ABC</em> ~ &Delta;<em>RPQ</em>. In deze driehoeken hoort <em>AB</em> bij <em>RP</em>.
				</p>
			</div>
			<div class="col-xs-5">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gelijkvormig_vb.png">
			</div>
		</div>
				<p>
					Een gemakkelijke manier om zijden te zoeken die bij elkaar horen te vinden is door te letten op welke hoeken even groot zijn:
				</p>
				<p>
					<u>Voorbeeld</u>:<br>
					Bekijk de twee driehoeken en toon aan dat ze gelijkvormig zijn.
				</p>
				<p>
					<u>Uitwerking</u>:<br>
					<ul>
						<li>&ang;<em>A</em> = &ang;<em>R</em></li>
						<li>&ang;<em>B</em> = &ang;<em>P</em></li>
						<li>&ang;<em>C</em> = &ang;<em>Q</em></li>
					</ul>
					<b>Let op</b>: Dus &Delta;<em>ABC</em> ~ &Delta;<em>RPQ</em>.
				</p>

	</div>

	<!-- div class="tekstblok opdracht">
		<h3>Ideeën</div>
			<p>Multiple choice &Delta;<em>ABC</em> ~ met a: &Delta;<em>PQR</em>, &Delta;<em>RQP</em>...</p>
			<p>&Delta;<em>ABC</em> ~ &Delta;<em>PQR</em>. Schrijf de letters <em>P</em>, <em>Q</em> en <em>R</em> bij de juiste hoekpunten.</p>
		-->

	<!-- opdracht 27 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 27</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Gegeven is dat &Delta;<em>KLM</em> gelijkvormig is met &Delta;<em>PQR</em>.
					<ol>
						<li>Neem over en vul in:
							<ul>
								<li>&ang;<em>K</em> = &ang;...</li>
								<li>&ang;<em>L</em> = &ang;...</li>
								<li>&ang;<em>M</em> = &ang;...</li>
							</ul>
						</li>
						<li>Neem over en vul in:<br>
							&Delta;<em>KLM</em> ~ &Delta;...</li>
						<li>Welke zijde hoort er bij <em>KL</em>?</li>
						<li>Welke zijde hoort er bij <em>PR</em>?</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gelijkvormig_opdr2.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<p>
					<ol>
						<li>
							&ang;<em>K</em> = &ang;<em>Q</em><br>
							&ang;<em>L</em> = &ang;<em>P</em><br>
							&ang;<em>M</em> = &ang;<em>R</em>
						</li>
						<li>
							&Delta;<em>KLM</em> ~ &Delta;<em>QPR</em> (<b>Let op</b> de volgorde van de letters P, Q en R!)
						</li>
						<li>
							<em>KL</em> hoort bij <em>PQ</em>
						</li>
						<li>
							<em>PR</em> hoort bij <em>LM</em>
						</li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<!-- opdracht 28 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 28</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Bekijk de driehoek hiernaast. &ang;<em>A</em> = 36&deg;, &ang;<em>B</em> = 57&deg; en <em>AB</em> = 15 cm.
					<ol>
						<li>
							Bereken hoe groot &ang;<em>C</em> is (gebruik de hoekensom).
						</li><br>
						Maak in je schrift &Delta;<em>PQR</em>, gelijkvormig aan &Delta;<em>ABC</em>.
						<li>
							Trek lijnstuk <em>PQ</em> = 5 cm.
						</li>
						<li>
							Teken &ang;<em>P</em> = &ang;<em>A</em> (gebruik je geo-driehoek).
						</li>
						<li>
							Teken &ang;<em>Q</em> = &ang;<em>B</em> en maak &Delta;<em>PQR</em> af.
						</li>
						<li>
							Controleer of alle zijden uit &Delta;<em>PQR</em> een derde zijn van de zijden uit &Delta;<em>ABC</em>.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gelijkvormig_tekenen_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<p>
					<ol>
						<li>
							&ang;<em>A</em> + &ang;<em>B</em> + &ang;<em>C</em> = 180&deg;<br>
							36&deg; + 57&deg; + &ang;<em>C</em> = 180&deg;<br>
							&ang;<em>C</em> = 180&deg; - 93&deg; = 87&deg;
						</li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<!-- opdracht 29 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 29 Gelijkvormige driehoeken</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Hiernaast zie je twee driehoeken met percies dezelfde vorm, dus &Delta;<em>ABC</em> is <b>gelijkvormig</b> met &Delta;<em>PQR</em>. Eén van de twee is alleen wel veel groter!
					<ol>
						<li>
							Welke getallen blijven hetzelfde? (en zeggen dus iets over de vorm van de driehoeken).
							<p><span></span></p><br>
							Bekijk de zijden <em>BC</em> en <em>QR</em>.
						</li>
						<li>
							Hoeveel keer groter zijn de zijden van &Delta;<em>PQR</em> dan die van &Delta;<em>ABC</em>?
						</li>
						<li>
							Bereken hoe lang <em>PQ</em> is.
						</li>
						<li>
							Hoeveel keer kleiner zijn de zijden van &Delta;<em>ABC</em> vergeleken met die van &Delta;<em>PQR</em>?
						</li>
						<li>
							Bereken hoe lang <em>AC</em> is.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gelijkvormig_opdr1.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>Het aantal graden dat de hoeken groot zijn.</li>
					<li><em>BC</em> = 3 en <em>QR</em> = 6, dus de zijden van &Delta;<em>PQR</em> zijn twee keer zo groot als die van &Delta;<em>ABC</em>.</li>
					<li><em>AB</em>&sdot;2 = 4. Dus <em>PQ</em> is 4 cm.</li>
					<li>De zijden van &Delta;<em>ABC</em> zijn half zo groot als die van &Delta;<em>PQR</em>.</li>
					<li><em>PR</em>&sdot;0,5 = 3,605. Dus <em>AC</em> = 3,605 cm.</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- theorie I -->
	<div class="tekstblok theorie meetkunde" id="theorieI">
		<h3>Theorie I Groeifactor bij gelijkvormigheid</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Twee vlakke figuren heten <b>gelijkvormig</b> als ze dezelfde vorm hebben. Van figuren waarvan de vorm gelijk is, zijn de overeenkomstige hoeken even groot.<br>
					Als twee vlakke figuren gelijkvormig zijn, hebben alle lengtes die bij elkaar horen steeds dezelfde <a href="index2.php?p=vaar_verhoudingen" target="_blank">verhouding</a> tot elkaar.
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gelijkvormig_opdr1.png">
			</div>
		</div>
		<p>
			In de opdracht hiervoor zag je dat &Delta;<em>ABC</em> gelijkvormig is met &Delta;<em>PQR</em>. In een verhoudingstabel (maar dan op zijn zij) ziet dat er zo uit:<br>
			<table class="verhouding">
				<tr>
					<td rowspan="2">&times;2 <img src="afbeeldingen/algemeen/bopijllinks.png" height="50px"></td>
					<td><b>&Delta;<em>ABC</em></b></td>
					<td><em>AB</em> = 2</td>
					<td><em>AC</em> = ...</td>
					<td><em>BC</em> = 3</td>
					<td rowspan="2"><img src="afbeeldingen/algemeen/bopijlrechts.png" height="50px"> &times;2</td>
				</tr>
				<tr>
					<td><b>&Delta;<em>PQR</em></b></td>
					<td><em>PQ</em> = ...</td>
					<td><em>PR</em> = 7,21</td>
					<td><em>QR</em> = 6</td>
				</tr>
			</table>
		</p>
		<p>
			De factor &times;2 heet ook wel de <b>vergrotingsfactor</b> of <b>groeifactor</b>, en doet precies hetzelfde als de groeifactor in <a href="index2.php?p=vaar_procentuele_groei" target="_blank">procentuele groei</a>.
		</p>
		<div class="row">
			<div class="col-xs-6">
				<p>
					<u>Voorbeeld</u>:<br>
					Gegeven is dat de driehoeken <em>ABC</em> en <em>EFG</em> van hiernaast gelijkvormig zijn.
					<ol type="a">
						<li>
							Bepaal de groeifactor.
						</li>
						<li>
							Bereken de lengte van <em>DF</em>.
						</li>
						<li>
							Bereken de lengte van <em>BC</em>.
						</li>
					</ol>
				</p>
				<p>
					<u>Uitwerking</u>:<br>
					<div class="tekstballon_theorie" style="width: 250px !important">
						<p>
							`text{Groeifactor} = text{nieuw}/text{oud}`
						</p>
					</div>
					<ol type="a">
						<li>
							Zijde <em>AB</em> hoort bij zijde <em>DE</em> en zijn allebei bekend (<em>AB</em> = 4 en <em>DE</em> = 3), dus daarmee moet de groeifactor worden bepaald.<br>
							<em>AB</em> &times; <em>groeifactor</em> = <em>DE</em><br>
							`text{groeifactor}=text{DE}/text{AB}=3/4=0,75`
						</li>
						<li>
							De bijbehorende zijde van <em>DF</em> is <em>AC</em>.<br>
							<em>DF</em> = <em>AC</em> &times; 0,75<br>
							<em>DF</em> = 4,5&sdot;0,75 = 3,375<br>
						</li>
						<li>
							De bijbehorende zijde van <em>BC</em> is <em>EF</em>.<br>
							<em>BC</em> &times; 0,75 = <em>EF</em><br> 
							<em>BC</em> = `text{EF}/(0,75)` <br>
							<em>BC</em> = `(2,7)/(0,75)` = 3,6.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gelijkvormig_th.png">
			</div>
		</div>
	</div>

	<!-- opdracht 30 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 30 Gelijkvormig</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Gegeven is dat de driehoeken &Delta;<em>ABC</em> en &Delta;<em>DEF</em> van hiernaast gelijkvormig zijn.
					<ol>
						<li>
							Bereken hoe groot &ang;<em>A</em> in &Delta;<em>ABC</em> is.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gelijkvormig_opdr2_2.png">
			</div>
		</div>
		<p>
			<ol start="2">
				<li>
					Hoe groot zal &ang;<em>E</em> in &Delta;<em>DEF</em> zijn?<br>En hoe groot is &ang;<em>F</em>?
				</li>
				<table class="verhouding">
					<tr>
						<td rowspan="2">
							&times;...<img src="afbeeldingen/algemeen/obpijllinks.png" height="50px">
						</td>
						<td>
							<b>&Delta;<em>ABC</em></b>
						</td>
						<td>
							<em>AB</em> = ...
						</td>
						<td>
							<em>AC</em> = ...
						</td>
						<td>
							<em>BC</em> = ...
						</td>
						<td rowspan="2">
							<img src="afbeeldingen/algemeen/obpijlrechts.png" height="50px">&times;...
						</td>
					</tr>
					<tr>
						<td>
							<b>&Delta;<em>DEF</em></b>
						</td>
						<td>
							<em>DF</em> = ...
						</td>
						<td>
							<em>EF</em> = ...
						</td>
						<td>
							<em>DE</em> = ...
						</td>
					</tr>
				</table>
				<li>
					Neem de tabel over en vul de lengtes in van de lijnstukken die je weet.
				</li>
				<li>
					Laat met een berekening zien dat een zijde uit &Delta;<em>DEF</em> met 1,5 moet worden vermenigvuldigt om de lengte van de bijbehorende zijde uit &Delta;<em>ABC</em> te krijgen.
				</li>
				<li>
					Bereken hoe groot <em>AC</em> en <em>AB</em> zijn.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>De hoekensom in een driehoek is altijd 180&deg;.<br>
						&ang;<em>A</em> + &ang;<em>B</em> + &ang;<em>C</em> = 180&deg;.<br>
						&ang;<em>A</em> + 37,7&deg; + 97,4&deg; = 180&deg;<br>
						&ang;<em>A</em> = 44,9&deg;</li>
					<li>De twee driehoeken zijn gelijkvormig, dus &ang;<em>DEF</em> heeft ook een hoek van 97,7, 44,9 en 37,7 graden.<br>
						&ang;<em>E</em> is stomp dus die zal 97,7&deg; zijn. Dan is &ang;<em>F</em> = 44,9&deg;</li>
					<li>
						<table class="verhouding">
							<tr>
								<td rowspan="2">
									&times;...<img src="afbeeldingen/algemeen/obpijllinks.png" height="50px">
								</td>
								<td>
									<b>&Delta;<em>ABC</em></b>
								</td>
								<td>
									<em>AB</em> = ...
								</td>
								<td>
									<em>AC</em> = ...
								</td>
								<td>
									<em>BC</em> = 3
								</td>
								<td rowspan="2">
									<img src="afbeeldingen/algemeen/obpijlrechts.png" height="50px">&times;...
								</td>
							</tr>
							<tr>
								<td>
									<b>&Delta;<em>DEF</em></b>
								</td>
								<td>
									<em>DF</em> = 2,71
								</td>
								<td>
									<em>EF</em> = `1 2/3`
								</td>
								<td>
									<em>DE</em> = 2
								</td>
							</tr>
						</table>
					</li>
					<li>
						<em>DE</em> = 2 en 2&sdot;1,5 = 3. Dus het klopt, want <em>BC</em> = 3.<br>
						Een andere manier is de volgende.
						<table class="verhouding">
							<thead>
								<th></th><th colspan="2">&divide;2<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th><th colspan="2">&times;3<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
							</thead>
							<tr>
								<td colspan="2"><em>DE</em> = 2</td><td colspan="2">1</td><td><em>BC</em> = 3</td>
							</tr>
						</table>
					</li>
					<li>
						<em>AC</em> = <em>DF</em>&sdot;1,5 = 4,065<br>
						<em>AB</em> = <em></em>&sdot;1,5 = 2,5.
					</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 31 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 31 Snavelfiguur</h3>
		<div class="row">
			<div class="col-xs-7">
				<p>
					De afmetingen van &Delta;<em>ABC</em> kun je gemakkelijk aflezen: <nobr><em>AB</em> = 5</nobr> en <nobr><em>BC</em> = 4</nobr>. De lengte van <nobr><em>DE</em> = 3</nobr>.
					<ol>
						<li>
							Toon aan dat &Delta;<em>ABC</em> gelijkvormig is met &Delta;<em>ADE</em>.
						</li>
						<li>
							Bereken de groeifactor als je &Delta;<em>ABC</em> als origineel beschouwd.
						</li>
						<li>
							Gebruik jouw groeifactor om de lengte van <em>AD</em> te berekenen.
						</li>
						<li>
							<em>AE</em> is ongeveer 4,8 lang. Hoe lang is <em>AC</em>?
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-5">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/snavelfiguur1_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>&ang;<em>A</em> in &Delta;<em>ABC</em> is even groot als &Delta;<em>ADE</em> (obviously!). &ang;<em>B</em> en &ang;<em>D</em> zijn ook even groot, want beiden recht. Vanwege de hoekensom zijn beide overgebleven hoeken ook even groot.</li>
					<li><em>DE</em> hoort bij <em>BC</em>. De groeifactor is daarom `3/4=0,75`</li>
					<li><em>AD</em> hoort bij <em>AB</em>. Dus `AD = 5 &sdot; 0,75 = 3,75`.</li>
					<li>`AC = (AE)/(0,75) = (4,8)/(0,75) = 6,4`</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 32 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 32 Snavelfiguur?</h3>
		<div class="row">
			<div class="col-xs-8">
				<p>
					De figuur uit de afbeelding hiernaast lijkt heel erg op die van de vorige opgave. <nobr><em>PQ</em> = 3</nobr>, <nobr><em>PR</em> = 4</nobr> en <nobr><em>QR</em> = 5</nobr>. Dat QR 5 is kun je ook uitrekenen met de stelling van Pythagoras, maar daar gaan we het het volgende thema over hebben...
					<ol>
						<li>
							Toon aan dat &Delta;<em>PQR</em> gelijkvormig is met &Delta;<em>PRS</em>.
						</li>
						<li>
							Beredeneer dat <em>QR</em> in &Delta;<em>PQR</em> hoort bij <em>PR</em> in &Delta;<em>PRS</em>.
						</li>
						<li>
							Bereken de groeifactor als &Delta;<em>PQR</em> het origineel is.
						</li>
						<li>
							Bereken de lengte van <em>PS</em> en <em>QS</em>.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/snavelfiguur2_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>
						&ang;<em>P</em> = &ang; <em>S</em> (beide zijn recht)<br>
						&ang;<em>R</em> = &ang; <em>R</em> (zelfde hoek)<br>
						Van de twee driehoeken zijn twee hoeken evengroot, dus:<br>
						&Delta;<em>PQR</em> is gelijkvormig met &Delta;<em>SQR</em>.
					</li>
					<li>
						Beide driehoeken zijn rechthoekige driehoeken.<br>
						In &Delta;<em>PQR</em> is <em>QR</em> de zijde die tegenover de rechte hoek ligt.<br>
						In &Delta;<em>PRS</em> is juist <em>PR</em> de zijde die tegenover de rechte hoek ligt.
						
					</li>
					<li>
						De groeifactor = `(PR)/(PQ) = 4/5 = 0`,`8` 
					</li>
					<li>
						`PS = 0`,`8 * `<br>
						`QS = 0`,`8 * PQ`<br>
						Bereken de lengte van <em>PS</em> en <em>QS</em>.
					</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 33 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 33 Gelijkvormig</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					<ol>
						<li>
							<nobr><em>AC</em> = 5</nobr> 
							Toon aan dat &Delta;<em>ABC</em> gelijkvormig is met &Delta;<em>AED</em>.
						</li>
						<li>
							Bereken de groeifactor.
						</li>
						<li>
							Bereken de lengtes van <em>AD</em> en <em>AE</em>.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/gelijkvormig_opdr3.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>`AB^2+BC^2=AC^2`<br>
						`4^2+3^2=AC^2` dus<br>
						`AC=sqrt(16+9)=5`.
					</li>
					<li>Vanwege het klavertje in de hoeken <em>A</em> is zeker dat &ang;<em>A</em> in &Delta;<em>ABC</em> even groot is als &ang;<em>A</em> in &Delta;<em>AED</em>.<br>
						&ang;<em>B</em> = &ang;<em>E</em>, want beiden recht<br>
						Dus vanwege de hoekensom geldt dat &ang;<em>C</em> = &ang;<em>D</em>.<br>
						Dus ze zijn gelijkvormig
					</li>
					<li>In &Delta;<em>AED</em> is alleen bekend dat <em>DE</em> = 4,5, en <em>DE</em> hoort bij <em>BC</em>.<br>
						De groeifactor is `text(nieuw)/text(oud)=(4,5)/3=1,5`.
					</li>
					<li>
						`AD=AB&sdot;1,5`<br>
						`AD=4&sdot;1,5=6`<br>
						en<br>
						`AE=AC&sdot;1,5`<br>
						`AE=5&sdot;1,5=7,7`
					</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 34 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 34 Vlaggenmast</h3>
		<div class="row">
			<div class="col-xs-9">
				<p>
					In de schets hiernaast zie je Anne die de lengte van de vlaggenmast gaat berekenen.
				</p>
				<p>
					Eerst laat ze haar eigen schaduw op hetzelfde punt te laten eindigen als de schaduw van de vlaggenmast.<br>
					Anne is zelf 1,67 meter en haar schaduw is 1,35 meter. De lengte van de schaduw van de vlaggenmast is 2,97 meter.
					<ol>
						<li>
							Anne maakt een rechte hoek met haar schaduw en de vlaggenmast ook. Schets de twee driehoeken bij deze situatie en schrijf zoveel mogelijk lengtes erbij.
						</li>
						<li>
							Bereken de groeifactor in 5 decimalen nauwkeurig als je Anne en haar schaduw beschouwt als origineel.
						</li>
						<li>
							Bereken de lengte van de vlaggenmast.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-3">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/vlaggenmast_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>-</li>
					<li>`text{nieuw}/text{oud}=(2,97)/(1,35)=2,2`</li>
					<li>Anne&sdot;groeifactor = vlaggenmast<br>
						1,67&sdot;2,2 = 3,674</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 35 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 35 Grens</h3>
		<p>
			Susanna wil graag met een bootje over de Frans-Zwitserse grens in het Meer van Geneve varen. Ze gebruikt onderstaande foto van Google-maps om uit te zoeken hoe lang die grens is.
		</p>
		<div class="row">
			<div class="col-xs-8">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/kaartschaal_opdr.png">
			</div>
		</div>
		<p>
			<ol>
				<li>
					Bepaal wat de groeifactor is. Gebruik daarvoor de schaal rechtsonderin het plaatje op het <a href="afbeeldingen/meetkunde_leerjaar_2/werkblad_vergroten.pdf" target="_blank">werkblad</a>.
				</li>
				<li>
					Meet hoe lang de grens is op het <a href="afbeeldingen/meetkunde_leerjaar_2/werkblad_vergroten.pdf" target="_blank">werkblad</a>.
				</li>
				<li>
					Bereken hoe lang de grens in het echt zal zijn.
				</li>
			</ol>
		</p>
		<!-- div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
			</div>
		</div -->
	</div>

	<!-- opdracht 36 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 36 iPhony 5</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Isar heeft een iPhony 5 gekocht, maar is stiekem nog aan het twijfelen over de grotere iPhony 6.<br>
					Van de iPhony 6 weet Isar dat de afmetingen van het scherm 4,1 bij 2,3 inch zijn. En het display een diagonaal heeft van 4,7 inch.
				</p>
				<p>
					Bereken de afmetingen van de iPhony5.
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/iphony5_opdr.png">
			</div>
		</div>
		<!-- div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">

			</div>
		</div-->
	</div>

	<!-- opdracht 37 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 37 Opstap oppervlakte</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Hiernaast zie je een tekening op ruitjespapier.
					<ol>
						<li>
							Teken de figuur na, maar nu twee keer zo breed en twee keer zo lang.
						</li>
						<li>
							Elk hokje is 1 cm<sup>2</sup>. Tel hoeveel cm<sup>2</sup> de oppervlakte is van de figuur hiernaast.
						</li>
						<li>
							Tel hoeveel cm<sup>2</sup> de oppervlakte is van de figuur in jouw schrift.
						</li>
						<br>
						<li>
							Teken de afbeelding nog een keer, maar nu half zo groot. Tel weer hoeveel cm<sup>2</sup> de oppervlakte is.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/ruitjestekening_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/ruitjestekening_antw.png" width="300px" class="rightfloat"><br>
				<ol>
					<li>Zie het linker huisje hiernaast.</li>
					<li>Het origineel is 5 cm<sup>2</sup> groot</li>
					<li>Het huisje dat twee keer zo hoog en twee keer zo breed is, heeft een oppervlakte van 20 cm<sup>2</sup>.</li>
					<li>Het kleinste huisje is 1,25 cm<sup>2</sup> groot.</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- theorie J -->
	<div class="tekstblok theorie meetkunde" id="theorieJ">
		<h3>Theorie J Twee dimensies</h3>
		<p>
			Oppervlakte is twee dimensionaal, dus als een figuur vergroot wordt met een groeifactor 3, betekent dat dat de lengte drie keer zo groot wordt en de breedte ook drie keer zo groot.
		</p>
		<p>
			De formule om oppervlakte te berekenen is `text{lengte}&sdot;text{breedte}`. Dus als de lengte 3 keer zo groot wordt en de breedte ook 3 keer zo groot, wordt de oppervlakte 3&sdot;3 = 9 keer zo groot.
		</p>
		<p>
			`text{Opp oud}&sdot;text{groeifactor}^2=text{Opp nieuw}`
		</p>
		<div class="row">
			<div class="col-xs-6">
				<p>
					<u>Voorbeeld</u>:<br>
					Krimpie Dinky is een plastic vel waarop je kunt tekenen. Daarna knip je de tekening uit en verwarm je het in de oven. Door de warmte krimpt het vel. Een lijn van 5,9 cm op het plastic vel wordt een lijntje van 2,3 cm.
					<ol type="a">
						<li>
							Bereken de groeifactor.
						</li>
						<br>
						Een heel vel Krimpie is 25 bij 20 cm groot, dus de oppervlakte is 500 cm<sup>2</sup>.
						<li>
							Bereken de oppervlakte van dit vel nadat het in de oven is gekrompen.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/krimpie_th.jpg">
			</div>
		</div>
		<p>
			<u>Stappenplan</u>:<br>
			<ol type="a">
				<li>
					Nieuw is de kleine, oud is het plastic vel. Dus `\text{nieuw}/\text{oud}=(2,3)/(5,9)&asymp;0,3898`.
				</li>
				<li>
					De oppervlakte wordt in de lengte én in de breedte 0,3898 keer zo groot.<br>
					`500&sdot;0,3898&sdot;0,3898 = 500&sdot;0,3898^2&asymp;75,97202`cm<sup>2</sup>.
				</li>
			</ol>
		</p>
	</div>

	<!-- opdracht 38 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 38</h3>
		<p>
			Bereken hoeveel keer groter de oppervlakte groter wordt met een factor...
			<ol>
				<li>3</li>
				<li>1,5</li>
				<li>0,75</li>
				<li>0,6</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>3<sup>2</sup> = 9 keer zo groot.</li>
					<li>1,5<sup>2</sup> = 2,25 keer zo groot.</li>
					<li>0,75<sup>2</sup> = 0,5625 keer zo groot.</li>
					<li>0,6<sup>2</sup> = 0,36 keer zo groot.</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 39 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 39 Nijntje vergroten</h3>
		<p>
			Hiernaast zie je een afbeelding van Nijntje. Door de lengte en de breedte van deze afbeelding te veranderen, kun je de oppervlakte van het vierkant <em>ABCD</em> vergroten of verkleinen.<br>
			<iframe class="rightfloat" scrolling="no" src="https://tube.geogebra.org/material/iframe/id/1300633/width/461/height/549/border/888888/rc/false/ai/false/sdz/true/smb/false/stb/false/stbh/true/ld/false/sri/true/at/auto" width="420px" height="500px" style="border:0px;"> </iframe>
			<ol>
				Halveer de oppervlakte door de alleen de lengte te veranderen.
				<li>
					Waarom is Nijntje nu niet meer gelijkvormig met eerst?
				</li>
				<br>
				Zet de lengte op 3 en de breedte ook. Dan is de oppervlakte 9.
				<li>
					Onderzoek wat de lengte en de breedte moeten worden om de oppervlakte een vierkant dat tien keer groter is te laten zijn.
				</li>
				<li>
					Bereken wat de groeifactor is.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>De oppervlakte was 36. De lengte moet 3 worden, want 3&sdot;6 = 18 en 18 is de helft van 36.<br>
						Nijntje is niet meer gelijkvormig met de Nijntje die 6 bij 6 groot was, omdat de lengte en breedt niet meer dezelfde verhouding hebben als eerst.</li>
					<li>De oppervlakte was 9 en moet dus 90 worden. Als lengte = breedte = 9,5 is de oppervlakte 90,25.</li>
					<li>Oude lengte was 3, nieuwe lengte is 9,5. Dus de groeifactor is `(9,5)/3&asymp;3,167`</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 40 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 40 A4</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Van een A4 zijn de afmetingen altijd 21,0 bij 29,7 cm.
					<ol>
						<li>
							Bereken de oppervlakte van het A4.
						</li>
						<br>
						Vouw het A4 eerst in de lengte in tweeën en daarna in de andere richting door de helft (zie de afbeelding hiernaast).
						<li>
							Wat zijn de afmetingen van het opgevouwen papier?
						</li>
						<li>
							Bereken de oppervlakte.
						</li>
						<li>
							Beredeneer waarom een A4 in vieren gevouwen gelijkvormig is met een A4.
						</li>
						<li>
							Hoeveel keer groter is de oppervlakte geworden?
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/a4_th.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>
						21,0&sdot;29,7 = 623,7.
					</li>
					<li>
						De zijden zijn dan 21,0&sdot;0,5 = 10,5 cm en 29,7&sdot;0,5 = 14,85.
					</li>
					<li>
						De oppervlakte is dan 10,5&sdot;14,85 = 130,925<br>
						Of: 623,7&sdot;0,5 = 155,925 cm<sup>2</sup>.
					</li>
					<li>
						Alle zijden zijn gehalveerd en hebben daarom dezelfde verhouding met elkaar als bij het ongevouwen A4.
					<li>
						De oppervlakte is 0,5<sup>2</sup> = 0,25 keer zo groot.
					</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 41 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 41 iPhony 6</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Leslie heeft een iPhony 6 gekocht, maar is stiekem nog aan het twijfelen over de grotere iPhony 6 Plus.<br>
					De afmetingen van het scherm van de iPhony 6 zijn 4,09 bij 2,30 inch en het display heeft een diagonaal van 4,7 inch.<br>
					<ol>
						<li>
							Bereken de oppervlakte van de iPhony 6.
						</li>
						<br>
						Op een vergelijkingssite leest Leslie, dat het scherm van de iPhony 6 Plus een factor 1,17 groter is dan de iPhony 6.
						<li>
							Bereken de oppervlakte van de iPhony 6 Plus zoals in de theorie hierboven.
						</li>
						<li>
							Bereken hoeveel keer groter de oppervlakte van de iPhony 6 Plus is dan de iPhony 6 Plus.
						</li>
						<li>
							Bereken de de afmetingen van het scherm van de iPhony 6 Plus.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/iphony6_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>4,09&sdot;2,30 = 9,407 inch<sup>2</sup></li>
					<li>Oppervlakte iPhony 6 plus = 9,407 inch<sup>2</sup>&sdot; 1,17<sup>2</sup> &asymp; 12,87 inch<sup>2</sup></li>
					<li>1,17<sup>2</sup> &asymp; 1,37 dus 1,37 x zo groot.</li>
					<li>4,09 &sdot; 1,17 &asymp; 4,79 en 2,3 &sdot; 1,17 &asymp; 2,69</li>
				</ol>
			</div>
		</div -->
	</div>


	<!-- oefentoets -->
	<div class="tekstblok theorie meetkunde" id="proeftoets">
		<h3>Proeftoets</h3>
		<p>
		Voor een proeftoets inclusief uitwerkingen, klik op:	<a href="https://docs.google.com/document/d/1ofvnZzkGW3bs6jr8P7OnI6vJCCvlEX8ggcN4O_tOvis/edit" alt="thema_8_toets_hv.pdf" target="_blank">Proeftoets</a>.
		<br>                                                                 
			Maak de toets in 40 minuten met behulp van je eigen rekenmachine, pennen, potloden en geodriehoek.
		</p>
	</div>
</div><!-- /de taak zelf -->

	<div><!-- verwijzingen naar doelen, voorkennis, werkwijze en benodigdheden -->
		<div id="open_doelen" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>Doelen</h3>
				<ol>
					<li>...;</li>
					<li></li>
				</ol>
			</div>
		</div>
		<div id="open_voorkennis" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h3>Voorkennis</h3>
				<div class="row">
					<div class="col-xs-8">
						<ol>
							<li>Met liniaal: lijnstuk (<em>AB</em>), lijn (<em>k</em>), lengte meten (<nobr><em>AB</em> = 3 cm</nobr>)</li>
							<li>Met passer: cirkel maken (middelpunt <em>M</em>, straal 3 cm), lengte afpasseren (Havo/Vwo: loodlijn oprichten/neerlaten)</li>
							<li>Oppervlakte berekenen van vlakke figuren (driehoeken, rechthoeken, ...);</li>
							<li><b>Oppervlakte van een cirkel</b> berekenen</li>
							<li>Driehoeken met <b>dezelfde verhoudingen</b> herkennen (<b>gelijkvormigheid</b>)</li>
							<li>Assenstelsel lezen, maken en gebruiken;</li>
							<li>Eenheden uit het metriek stelsel gebruiken en toepassen;</li>
							<li>Verhoudingstabellen</li>
							<li>
								Geodriehoek: hoek meten, hoek tekenen
							</li>
							<li>
								<b>Hoekensom</b> gebruiken (in een driehoek is de som van de hoeken 180&deg;)
							</li>
							<li>
								Herkennen en tekenen/construeren: Rechthoekige, gelijkbenige en gelijkzijdige driehoek, vierkant, rechthoek, parallellogram en vlieger
							</li>
							<li>
								<b>Oppervlakte</b> van een driehoek berekenen (of vierkant, rechthoek...)
							</li>
							<li>
								<b>Draai</b>- en <b>spiegelsymmetrie</b> herkennen en beredeneren wat de <b>kleinste draaihoek</b> en het aantal <b>spiegelassen</b> zijn.
							</li>
						</ol>
					</div>
					<div class="col-xs-4">
						<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/lijn_inl.png">
					</div>
				</div>
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
						<li>Schrift, pen, potlood en gum;</li>
						<li>Geo-driehoek en passer;</li>
						<li>rekenmachine.</li>
					</ol>
				</p>
			</div>
		</div>
	</div><!-- /verwijzingen naar doelen, voorkennis, werkwijze en benodigdheden -->