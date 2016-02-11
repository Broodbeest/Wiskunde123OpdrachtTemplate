<?php
	//defineer titel
	$taaknaam ="Pythagoras";
?>

<?php
	//Definieer sidebar
	$doorverwijzingen = array(
      '#inleiding' => 'Inleiding',
	  '#theorieA' => 'Rechthoekige driehoeken',
      '#theorieB' => 'Stelling van Pythagoras',
      '#theorieC' => 'Formule (Uitdaging)',
      '#theorieD' => 'Pythagoras omgekeerd',
      '#theorieE' => 'Omgekeerde formule (Uitdaging)',
      '#theorieF' => 'Driehoeken',
      '#proeftoets' => 'Proeftoets');                                                      
?>

<title>Leerjaar 2t | <?php echo $taaknaam; ?></title>

<div class="taakinhoud"><!-- de taak zelf -->
	<div class="tekstblok theorie meetkunde"  id="inleiding">
		<h3>De stelling van Pythagoras</h3>
		<p>
			De <b>stelling van Pythagoras</b> is de meest bekende stelling in de wiskunde. Bijna iedereen kent deze stelling, ook als ze nooit wat met wiskunde doen in het dagelijks leven.
			<br>
			In deze taak ga je leren wat de stelling van Pythagoras is, en leer je wanneer je hem kan toepassen.
		</p>
	</div>

	<!-- opdracht 1 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 1 Driehoeken</h3>
		<p>
			Hieronder zie je enkele driehoeken.
			<br>
			&Delta;<em>DEF</em> is gelijkbenig.
			<ol>
				<li>
					Hoe kun je dat zien?
				</li>
			</ol>
		</p>
		<p>
			Mirjam beweert dat &Delta;<em>NPQ</em> gelijkbenig is.
			<ol start="2">
				<li>
					Als Mirjam gelijk heeft, licht toe. Als zij ongelijk heeft, wat voor soort driehoek is het dan?
				</li>
				<li>
					Er zijn in totaal 5 gelijkbenige driehoeken, van twee driehoeken is dat zeker en van drie driehoeken moet je dat nameten. Geef de namen van die driehoeken.
				</li>
			</ol>
		</p>
		<div class="row">
			<div class="col-xs-10">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/speciale_driehoeken_opdr.png">
			</div>
		</div>
		<p>
			Er zijn 6 rechthoekige driehoeken. Kun jij ze allemaal vinden?
			<ol start="4">
				<li>
					Geef de namen van de rechthoekige driehoeken, bijvoorbeeld &Delta;<em>ABC</em>.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<h3>Uitwerkingen</h3>
				<p>
					<ol>
						<li>
							Twee zijden zijn even lang (zie het streepje), namelijk <em>DF</em> en <em>EF</em>.
						</li>
						<li>
							&Delta;<em>NPQ</em> is gelijkzijdig, er zijn <u>drie</u> zijden even lang. Dat kun je zien doordat op alle drie de zijden evenveel streepjes zijn getekend.<br>
							Je zou ook kunnen zeggen dat &Delta;<em>NPQ</em> gelijkbenig is, want het heeft twee zijden die even lang zijn.
						</li>
						<li>
							&Delta;<em>DEF</em>, &Delta;<em>GHJ</em> zijn zeker gelijkbenig.<br>
							Als er nog drie gelijkbenige driehoeken zijn, dan moeten dat &Delta;<em>RST</em>, &Delta;<em>RTU</em> en &Delta;<em>STU</em> zijn.
						</li>
						<li>
							&Delta;<em>ABC</em>, &Delta;<em>KLM</em>, &Delta;<em>RST</em>, &Delta;<em>RTU</em>, &Delta;<em>STU</em> en &Delta;<em>VWX</em>
						</li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<!-- opdracht 2 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 2 Rechte hoeken</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					De drie driehoeken hiernaast hebben allemaal een rechte hoek. Ze staan ook op je <a href="afbeeldingen/meetkunde_leerjaar_2/werkblad_pythagoras.pdf" target="_blank">werkblad</a>.
					<ol>
						<li>
							Volgens Bart is &ang;<em>C</em> = 100&deg;. Heeft hij gelijk?
						</li>
						<li>
							Gebruik je geo-driehoek om van elke driehoek de rechte hoek te vinden. Schrijf op welke hoeken recht zijn.
						</li>
					</ol>
				</p>
				<p>
					<b>Rechthoekszijden</b> zitten altijd aan de rechte hoek vast.
					<ol start="3">
						<li>
							Schrijf van alle driehoeken de rechthoekszijden op.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/rechthoekig_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-7">
						<p>
							<ol>
								<li>
									&ang;<em>C</em> is recht, maar een rechte hoek is 90&deg;. Bart heeft dus ongelijk.
								</li>
								<li>
									&Delta;<em>ABC</em>: &ang;<em>C</em> is recht<br>
									&Delta;<em>KLM</em>: &ang;<em>M</em> is recht<br>
									&Delta;<em>PQR</em>: &ang;<em>Q</em> is recht
								</li>
								<li>
									&Delta;<em>ABC</em>: <em>AC</em> en <em>BC</em><br>
									&Delta;<em>KLM</em>: <em>KM</em> en <em>LM</em><br>
									&Delta;<em>PQR</em>: <em>PQ</em> en <em>QR</em>
								</li>
							</ol>
						</p>
					</div>
					<div class="col-xs-5">
						<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/rechthoekig_antw.png">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- theorie A -->
	<div class="tekstblok theorie meetkunde" id="theorieA">
		<h3>Theorie A Rechthoekige driehoeken</h3>
		<div class="row">
			<div class="col-xs-8">
				<p>
					Het is belangrijk om <u>rechthoekige</u> driehoeken te kunnen herkennen. Daarnaast is het van belang dat je direct ziet wat de <b>rechthoekszijden</b> en de <b>schuine zijde</b> zijn in die rechthoekige driehoek.
					<ul>
						<li>
							Rechthoekszijden grenzen altijd aan de rechte hoek.
						</li>
						<li>
							De schuine zijde staat tegenover de rechte hoek en is altijd de langste van de drie zijden.
						</li>
						<li>
							De rechthoekszijden zijn dus altijd korter dan de schuine zijde en worden daarom ook <b>korte zijde</b> genoemd en
						</li>
						<li>
							De schuine zijde wordt ook wel de <b>lange zijde</b> genoemd.
						</li>
					</ul>
				</p>
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/rechthoekig_th.png">
			</div>
		</div>
	</div>

	<!-- opdracht 3 -->
	<div class="tekstblok opdracht ">
		<h3>Opdracht 3 De schuine zijde is de langste?</h3>	
		<div class="row"> 
			<div class="col-xs-6">
				<p>
					De rechthoekige driehoeken uit de vorige opgave staan ook op het <a href="afbeeldingen/meetkunde_leerjaar_2/werkblad_pythagoras.pdf" target="_blank">werkblad</a>.
				</p>
				<p>
					Meet met je geodriehoek alle zijden uit &Delta;<em>ABC</em> op. 
					<ol>
						<li>
							Is de schuine zijde ook de langste zijde?
						</li>
					</ol>
				</p>
				<p>
					Pak je passer en stel hem in op de lengte <em>KL</em>.
					<ol start="2">
						<li>
							Gebruik je passer om te checken dat <em>KM</em> en <em>LM</em> korter zijn dan <em>KL</em>.
						</li>
						<li>
							Ga met je passer na welke zijde de langste zijde is in &Delta;<em>PQR</em>.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/rechthoekig_antw.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-6">
						<p>
							<ol>
								<li>Ja, <em>AB</em> is de langste zijde van de drie.</li>
								<li>Zie de afbeelding hiernaast. De cirkelboog met middelpunt <em>K</em> en straal <em>KL</em> snijdt het lijnstuk <em>KM</em> niet. <em>KL</em> is dus langer dan <em>KM</em>.</li>
								<li>-</li>
							</ol>
						</p>
					</div>
					<div class="col-xs-6">
						<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/rechthoekig_passer_antw.png">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 4 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 4 Allerlei zijden</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					<ol>
						<li>
							Welke zijden zijn de rechthoekszijden in &Delta;<em>ABC</em>?
						</li>
						<li>
							Schrijf van &Delta;<em>KLM</em> en &Delta;<em>PQR</em> op wat de schuine zijdes zijn.
						</li>
						<li>
							Wat is de langste zijde van &Delta;<em>PQR</em>?
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/rechthoekig_antw.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<p>
					<ol>
						<li><em>AC</em> en <em>BC</em>.</li>
						<li><em>KL</em> in &Delta;<em>KLM</em> en <em>PR</em> in &Delta;<em>PQR</em>.</li>
						<li>Dat is ook zijde <em>PR</em>.</li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<!-- opdracht 5 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 5 Driehoeken tekenen</h3>
		<div class="row">
			<div class="col-xs-10">
				<p>
					Op het <a href="afbeeldingen/meetkunde_leerjaar_2/werkblad_pythagoras.pdf" target="_blank">werkblad</a> staat een lijn met daarop de punten <em>A</em> en <em>B</em>.
					<ol>
						<li>
							Teken de rechthoekige driehoek &Delta;<em>ABC</em> waarin &ang;<em>A</em> recht is en <nobr>&ang;<em>B</em> = 30&deg;</nobr>.
							<ul>
								<li>
									Teken een lijn die in <em>A</em> een rechte hoek maakt met <em>AB</em>.
								</li>
								<li>
									Gebruik je geo-driehoek om door <em>B</em> een lijn te trekken die een hoek van 30&deg; maakt met <em>AB</em>.
								</li>
								<li>
									Noem het snijpunt van de twee lijnen <em>C</em>.
								</li>
							</ul>
						</li>
						<br>
						<li>
							Welke zijden zijn de rechthoekszijden?
						</li>
						<li>
							Welke zijde is de langste zijde?
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-2">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/tekenen1_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-4">
						<p>
							<ol>
								<li>Zie afbeelding hiernaast</li>
								<li><em>AB</em> en <em>AC</em></li>
								<li><em>BC</em></li>
							</ol>
						</p>
					</div>
					<div class="col-xs-3">
						<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/tekenen1_antw.png">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 6 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 6 Driehoeken tekenen (uitdaging)</h3>
		<div class="row">
			<div class="col-xs-10">
				<p>
					Op het <a href="afbeeldingen/meetkunde_leerjaar_2/werkblad_pythagoras.pdf" target="_blank">werkblad</a> staat een lijn met daarop punt <em>P</em>.
					<ol>
						<li>
							Teken &Delta;<em>PQR</em> met <em>PQ</em> = 7,5 cm, &ang;<em>Q</em> = 69&deg; en <em>PR</em> = 7.
							<ul>
								<li>Zet punt <em>Q</em> op de lijn 7,5 cm van <em>P</em>.</li>
								<li>Trek een lijn door <em>Q</em> zodat &ang;<em>Q</em> = 69&deg;.</li>
								<li>Stel je passer in op 7 cm en maak een cirkel met middelpunt <em>P</em>.</li>
							</ul>
						</li>
						<br>
						<li>
							Welke hoek is de rechte hoek? Meet na.
						</li>
						<li>
							Meet de lengte van de tweede rechthoekszijde.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-2">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/tekenen2_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-6">
						<p>
							<ol>
								<li>Zie afbeelding hiernaast</li>
								<li>&ang;<em>R</em> is de rechte hoek.</li>
								<li><em>QR</em> is ongeveer 2,7 cm lang.</li>
							</ol>
						</p>
					</div>
					<div class="col-xs-3">
						<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/tekenen2_antw.png">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 7 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 7 Driehoeken tekenen (Uitdaging)</h3>
		<p>
			<ol>
				<li>
					Teken &Delta;<em>ABC</em> met <em>AB</em> = 5 cm, &ang;<em>A</em> = 90&deg; en <em>AC</em> = 3 cm.
					<ul>
						<li>Trek een lijn en zet daarop de punten <em>A</em> en <em>B</em>, 5 cm uit elkaar</li>
						<li>Maak een loodlijn op <em>AB</em> door <em>A</em></li>
						<li>Zet punt <em>C</em> op de loodlijn, 3 cm verwijderd van <em>A</em></li>
						<li>Trek het lijnstuk <em>BC</em></li>
					</ul>
				</li>
				<li>
					Meet met je geo-driehoek na dat de schuine zijde de langste is.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-4">
						<p>
							Zie de afbeelding hiernaast.
						</p>
					</div>
					<div class="col-xs-4">
						<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/3-hoek_tekenen_antw1.png">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 8 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 8 Eigenschappen gebruiken</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Met de informatie uit het memo-blaadje hiernaast kun je zonder te tekenen de volgende vragen beantwoorden:
				</p>
				<p>
					<ol>
						Van de rechthoekige driehoek &Delta;<em>ABC</em> is <em>AC</em> de schuine zijde.
						<li>
							Welke hoek is de rechte hoek?
						</li>
						<li>
							Schrijf de namen op van de rechthoekszijden.
						</li>
						<br>
						&Delta;<em>DEF</em> is rechthoekig. De zijden <em>DF</em> en <em>EF</em> zijn de rechthoekszijden.
						<li>
							Schrijf op welke hoek recht is.
						</li>
						<li>
							Welke zijde is de schuine zijde?
						</li>
						<br>
						&Delta;<em>KLM</em> is een rechthoekige driehoek. Zijde <nobr><em>KL</em> = 3</nobr>, <nobr><em>LM</em> = 5</nobr> en <nobr><em>KM</em> = 4</nobr>.
						<li>
							Welke zijde is de schuine zijde?
						</li>
						<li>
							Welke hoek is de rechte hoek?
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<div class="tekstballon_theorie">
					<p>
						schuine zijde = langste zijde
					</p>
					<p>
						schuine zijde zit niet aan de rechte hoek vast
					</p>
					<p>
						rechthoekszijde = korte zijde
					</p>
					<p>
						rechthoekszijde zit aan rechte hoek vast
					</p>
				</div>
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<p>
					<ol>
						<li>
							"De schuine zijde zit niet aan de rechte hoek vast", dus &ang;<em>A</em> en &ang;<em>C</em> zijn niet de rechte hoeken, dat moet &ang;<em>B</em> zijn.
						</li>
						<li>
							"De rechthoekzijden zitten aan de rechte hoek vast", dus <em>AB</em> en <em>BC</em> zijn de rechthoekszijden.
						</li>
						<li>
							"De rechthoekszijden zitten aan de rechte hoek vast", de zijden <em>DF</em> en <em>EF</em> hebben het punt <em>F</em> gemeen, dus &ang;<em>F</em> is de rechte hoek.
						</li>
						<li>
							<em>DE</em>
						</li>
						<li>
							"De schuine zijde is de langste zijde" en <nobr><em>LM</em> = 5</nobr> is de langste zijde.
						</li>
						<li>
							&ang;<em>K</em> ligt tegenover de schuine zijde en is dus de rechte hoek.
						</li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<!-- opdracht 9 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 9 Kwadraten zonder rekenmachine</h3>	
		<div class="row">
			<div class="col-xs-6">
				<p>
					Voordat je de stelling van Pythagoras leert, moet je naast rechthoekige driehoeken ook een boel weten van kwadraten en wortels.
				</p>
			</div>
			<div class="col-xs-6">
				<div class="tekstballon_theorie">
					<p>"Iets in het kwadraat" betekent "vermenigvuldigen met zichzelf".</p>
				</div>
			</div>
		</div>
		<p>
			Bereken zonder rekenmachine
			<div class="kolommen2">
				<ol>
					<li>2<sup>2</sup> = ...&sdot;... = ...</li>
					<li>(-1)<sup>2</sup> = ...&sdot;... = ...</li>
					<li>4<sup>2</sup> = ...</li>
					<li>8<sup>2</sup> = ...</li>
					<li>3<sup>2</sup> = ...</li>
					<li>9<sup>2</sup> = ...</li>
					<li>7<sup>2</sup> = ...</li>
					<li>...<sup>2</sup> = 25</li>
					<li>...<sup>2</sup> = 36</li>
					<li>...<sup>2</sup> = 1</li>
					<li>...<sup>2</sup> = 0</li>
					<li>...<sup>2</sup> = 100</li>
				</ol>
			</div>
		</p>
		<p>
			Zie de taak <a href="index2.php?p=vaar_kwadraten_en_wortels_2thv" target="_blank">Wortels en kwadraten</a> als je merkt dat het je het niet gemakkelijk vindt.
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="kolommen2">
					<ol>
						<li>2<sup>2</sup> = 2&sdot;2 = 4</li>
						<li>(-1)<sup>2</sup> = -1&sdot;-1 = 1</li>
						<li>4<sup>2</sup> = 4&sdot;4 = 16</li>
						<li>8<sup>2</sup> = 8&sdot;8 = 64</li>
						<li>3<sup>2</sup> = 9</li>
						<li>9<sup>2</sup> = 81</li>
						<li>7<sup>2</sup> = 49</li>
						<li>5<sup>2</sup> = 25</li>
						<li>6<sup>2</sup> = 36</li>
						<li>1<sup>2</sup> = 1</li>
						<li>0<sup>2</sup> = 0</li>
						<li>10<sup>2</sup> = 100</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 10 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 10 Kwadraten</h3>
		<p>
			Bereken deze kwadraten. Je mag een rekenmachine gebruiken.
		</p>
		<p>
			<div class="kolommen2">
				<ol>
					<li>12<sup>2</sup> = ...</li>
					<li>42<sup>2</sup> = ...</li>
					<li>18<sup>2</sup> = ...</li>
					<li>32<sup>2</sup> = ...</li>
					<li>19<sup>2</sup> = ...</li>
					<li>100<sup>2</sup> = ...</li>
				</ol>
			</div>
		</p>
		<p>
			Zie de taak <a href="index2.php?p=vaar_kwadraten_en_wortels_2thv" target="_blank">Wortels en kwadraten</a> als je merkt dat het je het niet gemakkelijk vindt.
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="kolommen2">
					<ol>
						<li>12<sup>2</sup> = 122</li>
						<li>42<sup>2</sup> = 1764</li>
						<li>18<sup>2</sup> = 324</li>
						<li>32<sup>2</sup> = 1024</li>
						<li>19<sup>2</sup> = 361</li>
						<li>100<sup>2</sup> = 10 000</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
		
	<!-- opdracht 11 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 11 Wortels</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Zonder rekenmachine. Bereken de wortels of schrijf "kan niet".
				</p>
			</div>
			<div class="col-xs-6">
				<div class="tekstballon_theorie">
					<p>
						`sqrt4` berekent: "<nobr>welk getal</nobr> vermenigvuldigd met zichzelf is 4?"
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<ol>
					<li>`...^2` = 4</li>
					<li>`sqrt{4}` = ...</li>
					<li>`...^2` = 9</li>
					<li>`sqrt{9}` = ...</li>
					<li>`sqrt{16}` = ...</li>
				</ol>
			</div>
			<div class="col-xs-4">
				<ol start="6">
					<li>`sqrt{49}` =  ...</li>
					<li>`sqrt{1}` = ...</li>
					<li>`sqrt{100}` = ...</li>
					<li>`sqrt{0}` = ...</li>
					<li>`sqrt{169}` = ...</li>
				</ol>
			</div>
		</div>
		<p>
			Zie de taak <a href="index2.php?p=vaar_kwadraten_en_wortels_2thv" target="_blank">Wortels en kwadraten</a> als je merkt dat het je het niet gemakkelijk vindt.
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="kolommen2">
					<ol class="breuken">
						<li>2<sup>2</sup> = 4</li>
						<li>`sqrt4` = 2</li>
						<li>3<sup>2</sup> = 9</li>
						<li>`sqrt9` = 3</li>
						<li>`sqrt16` = 4</li>
						<li>`sqrt49` =  7</li>
						<li>`sqrt1` = 1</li>
						<li>`sqrt100` = 10</li>
						<li>`sqrt0` = 0</li>
						<li>`sqrt(169)` = 13</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="tekstblok theorie meetkunde" id="theorieB">
		<h3>Theorie B De stelling van Pythagoras</h3>
		<div class="row">
			<div class="col-xs-8">
				<p>
					Voor de stelling van Pythagoras heb je een <b>rechthoekige driehoek</b> nodig en moet je goed kunnen rekenen met kwadraten en wortels.
				</p>
				<p>
					De <b><font color="#660000">rechthoekszijden</font></b> worden soms ook de <b>korte zijden</b> genoemd en grenzen aan de <b><font color="#000066">rechte hoek</font></b>.<br>
					De zijde die <b>niet</b> aan de rechte hoek vast zit heet de <b><font color="#006600">schuine zijde</font></b>, maar wordt ook wel <b><font color="#006600">lange zijde</font></b> genoemd. De schuine zijde bevindt zich altijd tegenover de rechte hoek.<br>
				</p> 
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/rechthoekig_th_kleur.png">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-9">
				<p>
					Volg het voorbeeld om te leren hoe je de schuine zijde van een rechthoekige driehoek kunt berekenen.
				</p>
				<p>
					<u>Voorbeeld</u>:<br>
					Van de rechthoekige driehoek hiernaast zijn de korte zijden 3 en 4 centimeter lang.	Bereken de lengte van de schuine zijde.<br>
				</p>
			</div>
			<div class="col-xs-3">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/pythagoras_th.png">
			</div>
		</div>
		<p>
			<u>Uitwerking</u>
		</p>
		<div class="row">
			<div class="col-xs-2"><p>Stap 1</p></div>
			<div class="col-xs-6"><p>Maak een tabel zoals hiernaast.</p></div>
			<div class="col-xs-4">
				<table class="pythagoras">
					<tr>
						<td><b>zijde</b></td>
						<td><b>kwadraat</b></td>
					</tr>
					<tr>
						<td>...</td>
						<td>...</td>
						<td></td>
					</tr>
					<tr>
						<td>...</td>
						<td>...</td>
						<td>+</td>
					</tr>
					<tr>
						<td>...</td>
						<td>...</td>
						<td></td>
					</tr>
				</table>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2"><p>Stap 2</p></div>
			<div class="col-xs-6"><p>Zet de zijden in de tabel, maar zorg dat de <b><FONT color="#006600">schuine zijde</FONT></b> altijd onderaan staat! Zet een vraagteken bij de zijde die je moet berekenen.</p></div>
			<div class="col-xs-4">
				<table class="pythagoras">
					<tr>
						<td><b>zijde</b></td>
						<td><b>kwadraat</b></td>
						<td></td>
					</tr>
					<tr>
						<td><em>AB</em> = 4</td>
						<td>...</td>
						<td></td>
					</tr>
					<tr>
						<td><em>AC</em> = 3</td>
						<td>...</td>
						<td>+</td>
					</tr>
					<tr>
						<td><em>BC</em> = ?</td>
						<td>...</td>
						<td></td>
					</tr>
				</table>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2"><p>Stap 3</p></div>
			<div class="col-xs-6"><p>Bereken de kwadraten.</p></div>
			<div class="col-xs-4">
				<table class="pythagoras">
					<thead>
						<th colspan="2" class="centerfloat">
							kwadrateren
							<div class"row">
								<div class="col-xs-12">
									<img class="img-responsive" src="afbeeldingen/algemeen/lrpijlboven.png" width="50px">
								</div>
							</div>
						</th>
					</thead>
					<tr>
						<td><b>zijde</b></td>
						<td><b>kwadraat</b></td>
					</tr>
					<tr>
						<td><em>AB</em> = 4</td>
						<td>16</td>
						<td></td>
					</tr>
					<tr>
						<td><em>AC</em> = 3</td>
						<td>9</td>
						<td>+</td>
					</tr>
					<tr>
						<td><em>BC</em> = ?</td>
						<td>...</td>
						<td></td>
					</tr>
				</table>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2"><p>Stap 4</p></div>
			<div class="col-xs-6"><p>Tel de kwadraten bij elkaar op.</p></div>
			<div class="col-xs-4">
				<table class="pythagoras">
					<thead>
						<th colspan="2" class="centerfloat">
							kwadrateren
							<div class"row">
								<div class="col-xs-12">
									<img class="img-responsive" src="afbeeldingen/algemeen/lrpijlboven.png" width="50px">
								</div>
							</div>
						</th>
					</thead>
					<tr>
						<td><b>zijde</b></td>
						<td><b>kwadraat</b></td>
					</tr>
					<tr>
						<td><em>AB</em> = 4</td>
						<td>16</td>
						<td></td>
					</tr>
					<tr>
						<td><em>AC</em> = 3</td>
						<td>9</td>
						<td>+</td>
					</tr>
					<tr>
						<td><em>BC</em> = ?</td>
						<td>25</td>
						<td></td>
					</tr>
				</table>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2"><p>Stap 5</p></div>
			<div class="col-xs-6"><p>Bereken het vraagteken door wortel te trekken.</p></div>
			<div class="col-xs-4">
				<table class="pythagoras">
					<thead>
						<th colspan="2" class="centerfloat">
							kwadrateren
							<div class"row">
								<div class="col-xs-12">
									<img class="img-responsive" src="afbeeldingen/algemeen/lrpijlboven.png" width="50px">
								</div>
							</div>
						</th>
					</thead>
					<tfoot>
						<th colspan="2" class="centerfloat">
							<div class"row">
								<div class="col-xs-12">
									<img class="img-responsive" src="afbeeldingen/algemeen/rlpijlonder.png">
								</div>
							</div>
							<br>
							wortel trekken
						</th>
					</tfoot>
					<tr>
						<td><b>zijde</b></td>
						<td><b>kwadraat</b></td>
					</tr>
					<tr>
						<td><em>AB</em> = 4</td>
						<td>16</td>
						<td></td>
					</tr>
					<tr>
						<td><em>AC</em> = 3</td>
						<td>9</td>
						<td>+</td>
					</tr>
					<tr>
						<td><em>BC</em> = ?</td>
						<td>25</td>
						<td></td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<!-- opdracht 12 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 12 Pythagoras zonder rekenmachine</h3>
		<div class="row">
			<div class="col-xs-8">
				<p>
					In de tabel hieronder is <em>BC</em> al ingevuld onder de streep.
					<ol>
						<li>
							Waarom moet <em>BC</em> onder de streep?
						</li>
						<li>
							Neem de tabel over en vul de rechthoekszijden in het midden in en de schuine zijde onder de streep.
						</li>
						<br>
						<li>
							Bereken de kwadraten.
						</li>
						<li>
							Tel de kwadraten van de rechthoekszijden bij elkaar op
						</li>
						<li>
							Bereken de lengte van de schuine zijde.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/345_pythagoras_opdr.png">
				<br>
				<div class="tekstballon_theorie">
					<p>
						<table class="pythagoras" class="rightfloat">
							<thead>
							<th colspan="2">
								kwadrateren
								<div class"row">
									<div class="col-xs-12">
										<img class="img-responsive" src="afbeeldingen/algemeen/lrpijlboven.png">
									</div>
								</div>
							</th>
							</thead>
							<tfoot>
								<th colspan="2">
								<div class"row">
									<div class="col-xs-12">
										<img class="img-responsive" src="afbeeldingen/algemeen/rlpijlonder.png">
									</div>
								</div>
								wortel trekken
								</th>
							</tfoot>
							<tr>
								<td><b>zijde</b></td>
								<td><b>kwadraat</b></td>
								<td></td>
							</tr>
							<tr>
								<td>...</td><td></td>
								<td></td>
							</tr>
							<tr>
								<td>...</td><td></td>
								<td>+</td>
							</tr>
							<tr>
								<td><em>BC</em> = ?</td><td></td>
								<td></td>
							</tr>
						</table>
					</p>
				</div>
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-9">
						<p>
							<ol>
								<li><em>AC</em> en <em>AB</em> zijn de rechthoekszijden, dus <em>BC</em> is de schuine zijde en de schuine zijde gaat altijd onder de streep.</li>
								<li>Zie de tabel hiernaast.</li>
								<li>-</li>
								<li>-</li>
								<li>`sqrt25=5`</li>
							</ol>
						</p>
					</div>
					<div class="col-xs-3">
						<table class="pythagoras">
							<thead>
								<th colspan="2" class="centerfloat">
									kwadraat
									<div class"row">
										<div class="col-xs-12">
											<img class="img-responsive" src="afbeeldingen/algemeen/lrpijlboven.png" width="50px">
										</div>
									</div>
								</th>
							</thead>
							<tfoot>
								<th colspan="2" class="centerfloat">
									<div class="col-xs-12">
										<img class="img-responsive" src="afbeeldingen/algemeen/rlpijlonder.png">
									</div>
									wortel
								</th>
							</tfoot>
							<tr>
								<td><b>zijde</b></td>
								<td><b>kwadraat</b></td>
							</tr>
							<tr>
								<td><em>AB</em> = 4</td><td>16</td>
								<td></td>
							</tr>
							<tr>
								<td><em>AC</em> = 3</td><td>9</td>
								<td>+</td>
							</tr>
							<tr>
								<td><em>BC</em> = ?</td><td>25</td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 13 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 13 Pythagoras zonder rekenmachine</h3>
		<div class="row">
			<div class="col-xs-8">
				<p>
					Bekijk de driehoeken hieronder.
					<ol>
						<li>
							Ga na dat <em>AB</em> en <em>AC</em> de rechthoekszijden zijn.
						</li>
						<br>
						Neem de tabel uit het theorieblok over en vul <em>AB</em> en <em>AC</em> boven en <em>BC</em> onder de streep in.
						<li>
							Bereken <em>BC</em>. Gebruik je rekenmachine niet.
						</li>
						<br>
						Bedenk welke zijden in &Delta;<em>KLM</em> de korte zijden zijn en welke de schuine zijde.
						<li>
							Bereken de lengte van de schuine zijde.
						</li>
						<br>
						<li>
							Bereken de lengte van de schuine zijde uit &Delta;<em>PQR</em>.
						</li>
					</ol>
				</p>
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/pythagoras_int_opdr.png">
			</div>
			<div class="col-xs-4">
				<div class="tekstballon_theorie">
					<p>
						<table class="pythagoras">
							<thead>
								<th colspan="2" class="centerfloat">
									kwadraat<br><img src="afbeeldingen/algemeen/lrpijlboven.png">
								</th>
							</thead>
							<tfoot>
								<th colspan="2" class="centerfloat">
									<img src="afbeeldingen/algemeen/rlpijlonder.png"><br>wortel
								</th>
							</tfoot>
							<tr>
								<td><b>zijde</b></td>
								<td><b>kwadraat</b></td>
							</tr>
							<tr>
								<td>kort</td>
								<td>...</td>
								<td></td>
							</tr>
							<tr>
								<td>kort</td>
								<td>...</td>
								<td>+</td>
							</tr>
							<tr>
								<td>schuin</td>
								<td>...</td>
								<td></td>
							</tr>
						</table>
					</p>
				</div>
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-6">
						<p>
							<ol>
								<li>
									&ang;<em>A</em> is recht, dus zijn <em>AB</em> en <em>AC</em> rechthoekszijden.
								</li>
								<li>
									De schuine zijde is `sqrt100 = 10`.
								</li>
							</ol>
						</p>
					</div>
					<div class="col-xs-3">
						<table class="pythagoras">
							<thead>
								<th colspan="2">
									kwadraat
									<div class"col-xs-12">
										<img class="img-responsive" src="afbeeldingen/algemeen/lrpijlboven.png">
									</div>
								</th>
							</thead>
							<tfoot>
								<th colspan="2">
									<img src="afbeeldingen/algemeen/rlpijlonder.png" width="50px"><br>wortel
								</th>
							</tfoot>
							<tr>
								<td><b>zijde</b></td>
								<td><b>kwadraat</b></td>
								<td></td>
							</tr>
							<tr>
								<td><em>AB</em> = 6</td>
								<td>36</td>
								<td></td>
							</tr>
							<tr>
								<td><em>AC</em> = 8</td>
								<td>64</td>
								<td>+</td>
							</tr>
							<tr>
								<td><em>BC</em> = ?</td>
								<td>100</td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-5">
						<p>
							<ol start="3">
								<li>
									De schuine zijde is `sqrt169 = 13`.
								</li>
							</ol>
						</p>
					</div>
					<div class="col-xs-3">
						<table class="pythagoras">
							<thead>
								<th colspan="2">
									kwadraat<br><img src="afbeeldingen/algemeen/lrpijlboven.png" width="50px">
								</th>
							</thead>
							<tfoot>
								<th colspan="2">
									<img src="afbeeldingen/algemeen/rlpijlonder.png" width="50px"><br>wortel
								</th>
							</tfoot>
							<tr>
								<td><b>zijde</b></td>
								<td><b>kwadraat</b></td>
										<td></td>
							</tr>
							<tr>
								<td><em>AB</em> = 5</td>
								<td>25</td>
								<td></td>
							</tr>
							<tr>
								<td><em>AC</em> = 12</td>
								<td>144</td>
								<td>+</td>
							</tr>
							<tr>
								<td><em>BC</em> = ?</td>
								<td>169</td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<p>
							<ol start=""4>
								<li>
									De schuine zijde is `sqrt289=17`.
								</li>
							</ol>
						</p>
					</div>
					<div class="col-xs-3">
						<table class="pythagoras">
							<thead>
								<th colspan="2">
									kwadraat<br><img src="afbeeldingen/algemeen/lrpijlboven.png" width="50px">
								</th>
							</thead>
							<tfoot>
								<th colspan="2">
									<img src="afbeeldingen/algemeen/rlpijlonder.png" width="50px"><br>wortel
								</th>
							</tfoot>
							<tr>
								<td><b>zijde</b></td>
								<td><b>kwadraat</b></td>
										<td></td>
							</tr>
							<tr>
								<td><em>AB</em> = 8</td>
								<td>64</td>
								<td></td>
							</tr>
							<tr>
								<td><em>AC</em> = 15</td>
								<td>225</td>
								<td>+</td>
							</tr>
							<tr>
								<td><em>BC</em> = ?</td>
								<td>289</td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="tekstblok theorie meetkunde" id="theorieC">
		<h3>Theorie C De formule <em>a</em><sup>2</sup> + <em>b</em><sup>2</sup> = <em>c</em><sup>2</sup> (Uitdaging)</h3>
		<div class="row">
			<div class="col-xs-8">
				<p>
					Mocht je Havo-ambities hebben, zou je alle volgende opgaven met deze formule-vorm van de stelling van Pythagoras kunnen maken. De tabel neemt iets meer ruimte in je schrift in beslag en de formule-vorm vraagt iets meer van jouw analyse-vaardigheden (bordjes-methode en balansmethode).
				</p>
			</div>
			<div class="col-xs-4">
				<p class="geeltje">
					Maak (eventueel samen met je docent) de keus of jij deze theorie leest en probeert toe te passen!
				</p>
			</div>
		</div>
		<p>
			In plaats van een tabel invullen, kun je ook deze ene regel invullen: <em>a</em><sup>2</sup> + <em>b</em><sup>2</sup> = <em>c</em><sup>2</sup>. Daarin zijn <em>a</em> en <em>b</em> de rechthoekszijden en <em>c</em> de schuine zijde.
		</p>
		<div class="row">
			<div class="col-xs-8">
				<p>
					<u>Voorbeeld</u>:<br>
					Bekijk de rechthoekige driehoek hiernaast en bereken de schuine zijde.
				</p>
				<p>
					<u>Uitwerking</u>:
				</p>
				<p>
					<table class="stappenplan">
						<tr>
							<td>Stap 1</td>
							<td>
								Vul de korte zijden in voor <em>a</em> en <em>b</em>.
							</td>
							<td>
								<em>a</em><sup>2</sup> + <em>b</em><sup>2</sup> = <em>c</em><sup>2</sup><br>
								4<sup>2</sup> + 4,2<sup>2</sup> = <em>c</em><sup>2</sup>
							</td>
						</tr>
						<tr>
							<td>Stap 2</td>
							<td>Reken de kwadraten uit</td>
							<td>
								4<sup>2</sup> + 4,2<sup>2</sup> = <em>c</em><sup>2</sup><br>
								16 + 17,64 = <em>c</em><sup>2</sup>
							</td>
						</tr>
						<tr>
							<td>Stap 3</td>
							<td>Tel op</td>
							<td>16 + 17,64 = 33,64<br>
								Dus <em>c</em><sup>2</sup> = 33,64</td>
						</tr>
						<tr>
							<td>Stap 4</td>
							<td>Neem de wortel</td>
							<td><em>c</em> = `sqrt(33,64)=5,8`</td>
						</tr>
					</table>
				</p>
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/formule1_th.png">
			</div>
		</div>
	</div>

	<!-- opdracht 14 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 14 Pythagoras</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Hiernaast staan drie rechthoekige driehoeken afgebeeld. Om de lengte van de schuine zijden te berekenen heb je een rekenmachine nodig.<br>
					Bereken van alle drie de schuine zijde.
				</p>
				<p class="geeltje">
					Het maakt niet uit of je een tabel gebruikt of de formule uit de theorie hierboven. Kies wat voor jou het beste is!
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/pythagoras_int2_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-1">
					</div>
					<div class="col-xs-3">
						<p>
							<b>Tabel</b>
						</p>
					</div>
					<div class="col-xs-8">
						<p>
							<b>Formule</b>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-1">
						<p>
							&Delta;<em>ABC</em>
						</p>
					</div>
					<div class="col-xs-3">
						<table class="pythagoras">
							<thead>
								<th colspan="2" class="centerfloat">
									kwadraat<br><img src="afbeeldingen/algemeen/lrpijlboven.png">
								</th>
							</thead>
							<tfoot>
								<th colspan="2" class="centerfloat">
									<img src="afbeeldingen/algemeen/rlpijlonder.png"><br>wortel
								</th>
							</tfoot>
							<tr>
								<td><b>zijde</b></td>
								<td><b>kwadraat</b></td>
							</tr>
							<tr>
								<td><em>AB</em> = 12</td>
								<td>144</td>
								<td></td>
							</tr>
							<tr>
								<td><em>AC</em> = 5</td>
								<td>25</td>
								<td>+</td>
							</tr>
							<tr>
								<td><em>BC</em> = ?</td>
								<td>169</td>
								<td></td>
							</tr>
						</table>
						<p>
							<em>BC</em> = `sqrt(169)` = 13
						</p>
					</div>
					<div class="col-xs-8">
						<p>
							<em>BC</em> is de schuine zijde, dus <em>c</em>.
							<br>
							`a^2+b^2=c^2`<br>
							`5^2+12^2=c^2`<br>
							`25+144=c^2`<br>
							`169=c^2`, dus `c=sqrt(169)=13`.
						</p>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-1">
						<p>
							&Delta;<em>DEF</em>
						</p>
					</div>
					<div class="col-xs-3">
						<table class="pythagoras">
							<thead>
								<th colspan="2" class="centerfloat">
									kwadraat<br><img src="afbeeldingen/algemeen/lrpijlboven.png">
								</th>
							</thead>
							<tfoot>
								<th colspan="2" class="centerfloat">
									<img src="afbeeldingen/algemeen/rlpijlonder.png"><br>wortel
								</th>
							</tfoot>
							<tr>
								<td><b>zijde</b></td>
								<td><b>kwadraat</b></td>
							</tr>
							<tr>
								<td><em>DE</em> = 15</td>
								<td>225</td>
								<td></td>
							</tr>
							<tr>
								<td><em>EF</em> = 8</td>
								<td>64</td>
								<td>+</td>
							</tr>
							<tr>
								<td><em>DF</em> = ?</td>
								<td>289</td>
								<td></td>
							</tr>
						</table>
						<p>
							<em>DF</em> = `sqrt(289)` = 17
						</p>
					</div>
					<div class="col-xs-8">
						<p>
							<em>DF</em> is de schuine zijde, dus <em>c</em>.
							<br>
							`a^2+b^2=c^2`<br>
							`8^2+15^2=c^2`<br>
							`64+225=c^2`<br>
							`289=c^2`, dus `c=sqrt(289)=17`.
						</p>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-1">
						<p>
							&Delta;<em>GHI</em>
						</p>
					</div>
					<div class="col-xs-3">
						<table class="pythagoras">
							<thead>
								<th colspan="2" class="centerfloat">
									kwadraat<br><img src="afbeeldingen/algemeen/lrpijlboven.png">
								</th>
							</thead>
							<tfoot>
								<th colspan="2" class="centerfloat">
									<img src="afbeeldingen/algemeen/rlpijlonder.png"><br>wortel
								</th>
							</tfoot>
							<tr>
								<td><b>zijde</b></td>
								<td><b>kwadraat</b></td>
							</tr>
							<tr>
								<td><em>GH</em> = 7</td>
								<td>49</td>
								<td></td>
							</tr>
							<tr>
								<td><em>HI</em> = 24</td>
								<td>576</td>
								<td>+</td>
							</tr>
							<tr>
								<td><em>GI</em> = 625</td>
								<td>169</td>
								<td></td>
							</tr>
						</table>
						<p>
							<em>GI</em> = `sqrt(625)` = 25
						</p>
					</div>
					<div class="col-xs-8">
						<p>
							<em>GI</em> is de schuine zijde, dus <em>c</em>.
							<br>
							`a^2+b^2=c^2`<br>
							`7^2+24^2=c^2`<br>
							`49+576=c^2`<br>
							`625=c^2`, dus `c=sqrt(625)=25`.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 15 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 15 Pythagoras decimaal</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Bekijk de driehoeken hiernaast. Om de schuine zijdes te berekenen heb je een rekenmachine nodig.
					<ol>
						<li>
							Bereken de schuine zijde van &Delta;<em>ABC</em> in twee decimalen nauwkeurig.<br>
							<u>Let op</u> de eenheid van je antwoord.
						</li>
						<li>
							Bereken de schuine zijde van &Delta;<em>KLM</em> in twee decimalen nauwkeurig.
						</li>
						<li>
							Bereken de schuine zijde van &Delta;<em>XYZ</em> in twee decimalen nauwkeurig.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/pythagoras_intdec_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<p>
					<ol>
						<li>
							<em>AB</em><sup>2</sup> = <em>AC</em><sup>2</sup> + <em>BC</em><sup>2</sup><br>
							<em>AB</em><sup>2</sup> `= 4^2 + 4^2`<br>
							<em>AB</em><sup>2</sup> `= 32`<br>
							`AB= sqrt32 = 4sqrt2 &asymp;5,66` cm
						</li>
						<li>
							<em>KM</em><sup>2</sup> = <em>KL</em><sup>2</sup> + <em>ML</em><sup>2</sup><br>
							<em>KM</em><sup>2</sup> `= 4^2 + 2^2`<br>
							<em>KM</em><sup>2</sup> `= 20`<br>
							<em>KM</em> `=sqrt20 = 2sqrt5 &asymp;4`,`47` cm
						</li>
						<li>
							<em>XY</em><sup>2</sup> = <em>XZ</em><sup>2</sup> + <em>YZ</em><sup>2</sup><br>
							<em>XY</em><sup>2</sup> `= 5^2 + 2^2`<br>
							<em>XY</em><sup>2</sup> `= 29`<br>
							<em>XY</em> `=sqrt29  &asymp;5`,`38` cm
						</li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<!-- opdracht 16 -->
	<div class="tekstblok opdracht">
		<div class="row">
			<div class="col-xs-7">
				<h3>Opdracht 16 Rechthoekig?</h3>
			</div>
			<div class="col-xs-2">
				<img src="http://www.allsmileys.com/files/sweetim-emotions/6378.gif">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Bekijk &Delta;<em>ABC</em> hiernaast, met <nobr><em>AB</em> = 9</nobr>, <nobr><em>BC</em> = 4</nobr> en <nobr><em>AC</em> = 8</nobr>. Het lijkt net of &ang;<em>C</em> recht is, maar is dat ook zo?
					<ol>
						<li>Vul de rechthoekszijden en de schuine zijde van &ang;<em>ABC</em> in in de tabel.</li>
						<li>Controleer of de kwadraten van de rechthoekszijden optellen tot het kwadraat van de schuine zijde.</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/check_rechthoekig_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-6">
						<table class="pythagoras">
							<tr>
								<td>zijde</td><td>kwadraat</td>
								<td></td>
							</tr>
							<tr>
								<td><em>AC</em> = 8</td><td>64</td>
								<td></td>
							</tr>
							<tr>
								<td><em>BC</em> = 4</td><td>16</td>
								<td>+</td>
							</tr>
							<tr>
								<td><em>AB</em> = 9</td><td>...</td>
								<td></td>
							</tr>
						</table>
						<p>
							<em>AB</em> kwadrateren levert `9^2=81`, terwijl op de puntjes ook `64+16=80` moet staan...<br>
							Dus &Delta;<em>ABC</em> is niet rechthoekig, omdat de stelling van Pythagoras niet werkt.
						</p>
					</div>
					<div class="col-xs-6">
						<p>
							Zijde <em>AB</em> is de langste zijde, dus <em>c</em>.<br>
							`AC^2+BC^2` zou gelijk moeten zijn aan `AB^2`<br>
							`8^2+4^2=64+16=80` zou gelijk moeten zijn aan `9^2=81`.<br>
							Dat is bijna gelijk aan elkaar, maar net niet. Daarom is &Delta;<em>ABC</em> niet rechthoekig, want de stelling van Pythagoras werkt niet.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 17 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 17 Rechthoekig?</h3>
		<p>
			<ol>
				Van de rechthoekige driehoek &Delta;<em>ABC</em> is gegeven dat <nobr><em>AB</em> = 10</nobr>, <nobr><em>BC</em> = 12,5</nobr> en <nobr><em>AC</em> = 7,5</nobr>.
				<li>
					Welke zijde is de rechthoekszijde en welke zijde is de schuine zijde?
				</li>
				<li>
					Vul de tabel in en controleer dat de kwadraten van de rechthoekszijden inderdaad optellen tot het kwadraat van de schuine zijde.
				</li>
				<br>
				Van &Delta;<em>PQR</em> is gegeven dat <em>PQ</em> = 2, <em>QR</em> = 2 en <em>PR</em> = 3. De zijde <em>PR</em> is het langste.
				<li>
					Vul de tabel in en controleer of de kwadraten van de korte zijden optellen tot het kwadraat van de lange zijde.
				</li>
				<li>
					Is &Delta;<em>PQR</em> een rechthoekige driehoek? Zo ja, welke hoek is de rechte hoek?
				</li>
				<br>
				In &Delta;<em>XYZ</em> is gegeven dat <em>XY</em> = 10, <em>YZ</em> = 26 en <em>XZ</em> = 24.
				<li>
					Controleer of dit een rechthoekige driehoek is. Als het een rechthoekige driehoek is, welke hoek is dan de rechte hoek?
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-1">
					</div>
					<div class="col-xs-3">
						<p>
							<b>Tabel</b>
						</p>
					</div>
					<div class="col-xs-8">
						<p>
							<b>Formule</b>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-1">
						<p>
							&Delta;<em>ABC</em>
						</p>
					</div>
					<div class="col-xs-3">
						<table class="pythagoras">
							<thead>
								<th colspan="2" class="centerfloat">
									kwadraat<br><img src="afbeeldingen/algemeen/lrpijlboven.png">
								</th>
							</thead>
							<tfoot>
								<th colspan="2" class="centerfloat">
									<img src="afbeeldingen/algemeen/rlpijlonder.png"><br>wortel
								</th>
							</tfoot>
							<tr>
								<td><b>zijde</b></td>
								<td><b>kwadraat</b></td>
							</tr>
							<tr>
								<td><em>AB</em> = 10</td>
								<td>100</td>
								<td></td>
							</tr>
							<tr>
								<td><em>AC</em> = 7,5</td>
								<td>56,25</td>
								<td>+</td>
							</tr>
							<tr>
								<td><em>BC</em> = 12,5</td>
								<td>...</td>
								<td></td>
							</tr>
						</table>
						<p>
							<em>BC</em> = `sqrt(100+56,25)=sqrt(156,25)` = 12,5.<br>
							Dus &Delta;<em>ABC</em> is rechthoekig en &ang;<em>A</em> is de rechte hoek.
						</p>
					</div>
					<div class="col-xs-8">
						<p>
							<em>BC</em> is de schuine zijde, dus <em>c</em>.
							<br>
							`AB^2+AC^2=BC^2`<br>
							`10^2+7,5^2=c^2`<br>
							`100+56,25=c^2`<br>
							`156,25=c^2`, dus `c=sqrt(156,25)=12,5`<br>
							Dus &Delta;<em>ABC</em> is rechthoekig.
						</p>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-1">
						<p>
							&Delta;<em>PQR</em>
						</p>
					</div>
					<div class="col-xs-3">
						<table class="pythagoras">
							<thead>
								<th colspan="2" class="centerfloat">
									kwadraat<br><img src="afbeeldingen/algemeen/lrpijlboven.png">
								</th>
							</thead>
							<tfoot>
								<th colspan="2" class="centerfloat">
									<img src="afbeeldingen/algemeen/rlpijlonder.png"><br>wortel
								</th>
							</tfoot>
							<tr>
								<td><b>zijde</b></td>
								<td><b>kwadraat</b></td>
							</tr>
							<tr>
								<td><em>PQ</em> = 2</td>
								<td>4</td>
								<td></td>
							</tr>
							<tr>
								<td><em>QR</em> = 2</td>
								<td>4</td>
								<td>+</td>
							</tr>
							<tr>
								<td><em>PR</em> = 3</td>
								<td>...</td>
								<td></td>
							</tr>
						</table>
						<p>
							<em>PR</em> = `sqrt(8)` &aprox; 2,828, dat is niet 3.<br>
							&Delta;<em>PQR</em> is niet rechthoekig.
						</p>
					</div>
					<div class="col-xs-8">
						<p>
							<em>PR</em> is de schuine zijde, dus <em>c</em>.
							<br>
							`PQ^2+QR^2=PR^2`<br>
							`2^2+2^2` zou gelijk moeten zijn aan `3^2`<br>
							`4+4` zou gelijk moeten zijn aan 9<br>
							Maar 8 is niet gelijk aan 9, dus &Delta;<em>PQR</em> is niet rechthoekig.
						</p>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-1">
						<p>
							&Delta;<em>XYZ</em>
						</p>
					</div>
					<div class="col-xs-3">
						<table class="pythagoras">
							<thead>
								<th colspan="2" class="centerfloat">
									kwadraat<br><img src="afbeeldingen/algemeen/lrpijlboven.png">
								</th>
							</thead>
							<tfoot>
								<th colspan="2" class="centerfloat">
									<img src="afbeeldingen/algemeen/rlpijlonder.png"><br>wortel
								</th>
							</tfoot>
							<tr>
								<td><b>zijde</b></td>
								<td><b>kwadraat</b></td>
							</tr>
							<tr>
								<td><em>XY</em> = 10</td>
								<td>100</td>
								<td></td>
							</tr>
							<tr>
								<td><em>XZ</em> = 24</td>
								<td>576</td>
								<td>+</td>
							</tr>
							<tr>
								<td><em>YZ</em> = 26</td>
								<td>...</td>
								<td></td>
							</tr>
						</table>
						<p>
							<em>YZ</em> = `sqrt(676)` = 26.<br>
							Dus &Delta;<em>XYZ</em> is rechthoekig.
						</p>
					</div>
					<div class="col-xs-8">
						<p>
							<em>YZ</em> is de schuine zijde, dus <em>c</em>.
							<br>
							`XY^2+XZ^2=YZ^2`<br>
							`10^2+24^2` zou gelijk moeten zijn aan `26^2`<br>
							`100+576` zou gelijk moeten zijn aan `676`<br>
							Dus &Delta;<em>XYZ</em> is rechthoekig.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 18 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 18 Assenstelsel</h3>
		<div class="row">
			<div class="col-xs-7">
				<p>		
					<ol>
						<li>
							Maak een assenstelsel met op de <em>x</em>-as de getallen -3 tot en met 4 en op de <em>y</em>-as de getallen -2 tot en met 6.
						</li>
						<li>
							Teken de punten <em>X</em>(-2, -2), <em>Y</em>(3, 5) en <em>Z</em>(-2, 5) in het assenstelsel.
						</li>
						<li>
							Leg uit waarom &Delta;<em>XYZ</em> een rechthoekige driehoek is.
						</li>
						<li>
							Welke zijden zijn de rechthoekszijden en wat is de schuine zijde?
						</li>
						<li>
							Bereken de lengte van de schuine zijde.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-5">
				<p class="geeltje">
					De roosterlijnen in een assenstelsel staan altijd loodrecht op elkaar.
				</p>
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-6">
						<p>
							<ol>
								<li>Zie de afbeelding hiernaast.</li>
								<li>Zie de afbeelding hiernaast.</li>
								<li><em>XZ</em> en <em>YZ</em> zijn de rechthoekszijden en <em>XY</em> de schuine zijde.</li>
								<li>
									<table class="pythagoras">
										<tr>
											<td>zijde</td><td>kwadraat</td>
											<td></td>
										</tr>
										<tr>
											<td><em>XZ</em> = 7</td>
											<td>49</td>
											<td></td>
										</tr>
										<tr>
											<td><em>YZ</em> = 5</td>
											<td>25</td>
											<td>+</td>
										</tr>
										<tr>
											<td><em>XY</em> = ?</td>
											<td>74</td>
											<td></td>
										</tr>
									</table>
									Dus de zijde `XY=sqrt74&asymp;8,60`
								</li>
							</ol>
						</p>
					</div>
					<div class="col-xs-6">
						<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/assen1_antw.png">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 19 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 19 Assenstelsel</h3>
		<div class="row">
			<div class="col-xs-8">
				<p>
					Bekijk de afbeelding hiernaast, welke ook op het <a href="afbeeldingen/meetkunde_leerjaar_2/werkblad_pythagoras.pdf" target="_blank">werkblad</a>.
				</p>
				<p>
					In deze opdracht ga je onderzoeken of &Delta;<em>PQR</em> een rechthoekige driehoek is. Daarvoor moet je eerst weten hoe lang de zijden <em>PR</em>, <em>QR</em> en <em>PQ</em> zijn.
					<ol>
						<li>
							Teken het punt <em>R</em><sub>1</sub>(2, -2) in het assenstelsel.<br>
							Leg uit waarom &Delta;<em>PQR</em><sub>1</sub> een rechthoekige driehoek is.
						</li>
						<li>
							Gebruik een tabel om te controleren dat <em>PQ</em> = 5.
						</li>
						<li>
							Teken het punt <em>P</em><sub>1</sub>(2, 4) in het assenstelsel en bereken de lengte van <em>RQ</em> in 3 decimalen nauwkeurig &Delta;<em>P</em><sub>1</sub><em>QR</em>.
						</li>
						<li>
							Gebruik het punt <em>Q</em><sub>1</sub>(-2, 4) om de lengte van zijde <em>PR</em> in 3 decimalen nauwkeurig te berekenen.
						</li>
						<br>
						<li>
							Vul de tabel in voor &Delta;<em>PQR</em>
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/assen2_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<div class="row">
					<div class="col-xs-8">
						<p>
							<ol>
								<li>
									Zie de afbeelding hiernaast.
									<br>&Delta;<em>PQR</em><sub>1</sub> is rechthoekig, omdat de roosterlijnen in een assenstelsel altijd loodrecht op elkaar staan. Dus &ang;<em>Q</em><sub>1</sub> is recht.
								</li>
								<li>
									<table class="pythagoras">
										<tr>
											<td>zijde</td><td>kwadraat</td>
											<td></td>
										</tr>
										<tr>
											<td><em>PR</em><sub>1</sub> = 4</td><td>16</td>
											<td></td>
										</tr>
										<tr>
											<td><em>QR</em><sub>1</sub> = 3</td><td>9</td>
											<td>+</td>
										</tr>
										<tr>
											<td><em>PQ</em> = ?</td><td>25</td>
											<td></td>
										</tr>
									</table>
									Dus `PQ=sqrt25=5`.
								</li>
								<li>
									<table class="pythagoras">
										<tr>
											<td>zijde</td><td>kwadraat</td>
											<td></td>
										</tr>
										<tr>
											<td><em>P</em><sub>1</sub><em>Q</em> = 3</td><td>9</td>
											<td></td>
										</tr>
										<tr>
											<td><em>P</em><sub>1</sub><em>R</em> = 2</td><td>4</td><td>+</td>
										</tr>
										<tr>
											<td><em>QR</em> = ?</td><td>13</td>
											<td></td>
										</tr>
									</table>
									Dus `QR=sqrt13&asymp;3,606`.
								</li>
								<li>
									<table class="pythagoras">
										<tr>
											<td>zijde</td><td>kwadraat</td>
											<td></td>
										</tr>
										<tr>
											<td><em>Q</em><sub>1</sub><em>R</em> = 2</td><td>4</td>
											<td></td>
										</tr>
										<tr>
											<td><em>PQ</em><sub>1</sub> = 6</td><td>36</td>
											<td>+</td>
										</tr>
										<tr>
											<td><em>PR</em> = ?</td><td>40</td>
											<td></td>
										</tr>
									</table>
									Dus `PR=sqrt40&asymp;6,325`.
								</li>
								<li>
									<table class="pythagoras">
										<tr>
											<td>zijde</td><td>kwadraat</td>
											<td></td>
										</tr>
										<tr>
											<td><em>PQ</em> = 5</td><td>25</td>
											<td></td>
										</tr>
										<tr>
											<td><em>QR</em> = 3,606</td><td>13</td><td>+</td>
										</tr>
										<tr>
											<td><em>PR</em> = 6,325</td><td>?...?</td>
											<td></td>
										</tr>
									</table>
									`6,325^2 = 40` en 25 + 13 = 38. Dus de stelling van Pythagoras werkt hier niet. Daarom is &Delta;<em>PQR</em> niet rechthoekig.
								</li>
							</ol>
						</p>
					</div>
					<div class="col-xs-4">
						<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/assen2_antw.png">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- opdracht 20 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 20 Pythagoras omgekeerd?</h3>
		<div class="row">
			<div class="col-xs-8">
				<p>
					Bekijk de rechthoekige driehoek hiernaast.
					<ol>
						<li>
							Welke zijde is de schuine zijde?
						</li>
						<li>
							Vul in de tabel de gegevens van de schuine zijde in onder de streep.
						</li>
						<li>
							Kun jij nu berekenen hoe lang zijde <em>BC</em> is?
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/kz_inl_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<p>
					<ol>
						<li><em>AB</em></li>
						<li>
							<table class="pythagoras">
								<tr>
									<td>zijde</td><td>kwadraat</td><td></td>
								</tr>
								<tr>
									<td>...</td><td></td><td></td>
								</tr>
								<tr>
									<td>...</td><td></td><td>+</td>
									<td>+</td>
								</tr>
								<tr>
									<td><em>AB</em> = 20,5</td><td>420,25</td><td></td>
								</tr>
							</table>
						</li>
						<li>
							<table class="pythagoras">
								<tr>
									<td>zijde</td><td>kwadraat</td><td></td>
								</tr>
								<tr>
									<td><em>AC</em> = 13,3</td><td>176,89</td><td></td>
								</tr>
								<tr>
									<td><em>BC</em> = ?</td><td>...</td><td></td>
								</tr>
								<tr>
									<td><em>AB</em> = 20,5</td><td>420,25</td><td></td>
								</tr>
							</table>
							Op de puntjes komt het getal 243,36 te staan. Dus `BC=sqrt(243,36)=15,6`.
						</li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<div class="tekstblok theorie meetkunde" id="theorieD">
		<h3>Theorie D Pythagoras omgekeerd</h3>
		<div class="row">
			<div class="col-xs-8">
				<p>
					De stelling van Pythagoras kan ook worden gebruikt om de lengte van een rechthoekszijde te berekenen.
				</p>
				<p>
					<u>Voorbeeld</u>:<br>
					Bekijk de afbeelding hiernaast, vul de tabel in om <em>BC</em> te berekenen.
				</p>
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/kz_inl_opdr.png">
			</div>
		</div>
		<p>
			<u>Uitwerking</u>:
			<table class="stappenplan">
				<tr>
					<td>Stap 1</td>
					<td>Vul wat je weet over de korte zijde in het middenstuk in en over de schuine zijde onder de streep.</td>
					<td>
						<table class="pythagoras">
							<tr>
								<td><b>zijde</b></td><td><b>kwadraat</b></td><td></td>
							</tr>
							<tr>
								<td><em>AC</em> = 13,3</td><td></td><td></td>
							</tr>
							<tr>
								<td><em>BC</em> = ?</td><td></td><td>+</td>
							</tr>
							<tr>
								<td><nobr><em>AB</em> = 20,5</nobr></td><td></td><td></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>Stap 2</td>
					<td>Bereken de kwadraten en vul in.</td>
					<td>
						<table class="pythagoras">
							<tr>
								<td><b>zijde</b></td><td><b>kwadraat</b></td><td></td>
							</tr>
							<tr>
								<td><em>AC</em> = 13,3</td><td>176,89</td><td></td>
							</tr>
							<tr>
								<td><em>BC</em> = ?</td><td></td><td>+</td>
							</tr>
							<tr>
								<td><nobr><em>AB</em> = 20,5</nobr></td><td>420,25</td><td></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>Stap 3</td>
					<td>Bereken welk getal er bij 176,89 opgeteld moet worden om 420,25 te krijgen.</td>
					<td>420,25 - 176,89 = 243,36</td>
				</tr>
				<tr>
					<td>Stap 4</td>
					<td>Neem de wortel van het getal uit <nobr>stap 3</nobr>.</td>
					<td><em>BC</em> = `sqrt(243,36)=15,6`</td>
				</tr>
			</table>
		</p>
	</div>

	<!-- opdracht 21 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 21 Pythagoras omgekeerd</h3>
		<div class="row">
			<div class="col-xs-8">
				<p>
					Bekijk de driehoeken hiernaast.<br>
					Gebruik de tabel om de ontbrekende korte zijde te berekenen:
					<table class="pythagoras">
						<tr>
							<td>zijde</td><td>kwadraat</td><td></td>
						</tr>
						<tr>
							<td>kort</td><td></td><td></td>
						</tr>
						<tr>
							<td>kort</td><td></td><td>+</td>
						</tr>
						<tr>
							<td>lang</td><td></td><td></td>
						</tr>
					</table>
					<ol>
						<li>Vul de korte zijde in tussen de strepen en de schuine zijde onder de streep.</li>
						<li>Bereken het ontbrekende kwadraat.</li>
						<li>Bereken de lengte van de onbekende korte zijde.</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/formule2_th.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<p>
					<ol>
						<li><em>AB</em> en <em>BC</em> zijn de korte zijden en <em>AC</em> de schuine. Zie tabel hieronder</li>
						<li><em>BC</em><sup>2</sup> = 25 - 16 = 9</li>
						<li><em>BC</em> = `sqrt9=3`</li>
					</ol>
					<table class="pythagoras">
						<tr>
							<td>zijde</td><td>kwadraat</td><td></td>
						</tr>
						<tr>
							<td><em>AB</em> = 4</td><td>16</td><td></td>
						</tr>
						<tr>
							<td><em>BC</em> = ?</td><td>...</td><td>+</td>
						</tr>
						<tr>
							<td><em>AC</em> = 5</td><td>25</td><td></td>
						</tr>
					</table>
				</p>
			</div>
		</div>
	</div>

	<!-- opdracht 22 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 22 Pythagoras omgekeerd</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Bekijk de driehoeken hiernaast.
					<ol>
						<li>Bepaal wat de schuine en rechthoekszijden van &Delta;<em>ABC</em> zijn.</li>
						<li>Vul de tabel in met de schuine zijde onder de streep.</li>
						<li>Bereken de ontbrekende zijde.</li>
						<br>
						<li>Laat zien dat de lengte van de ontbrekende zijde van &Delta;<em>DEF</em> gelijk is aan 12,6.</li>
						<br>
						<li>Bereken de lengte van de ontbrekende zijde van &Delta;<em>KLM</em>.</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/omgekeerd1_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<p>
					<ol>
						<li><em>AB</em> en <em>BC</em> zijn de rechthoekszijden, <em>AC</em> is de schuine zijde.</li>
						<li>Zie de tabel hieronder.
							<table class="pythagoras">
								<thead>
									<th colspan="3">
										&Delta;<em>ABC</em>
									</th>
								</thead>
								<tr>
									<td>zijde</td><td>kwadraat</td><td></td>
								</tr>
								<tr>
									<td><em>AB</em> = ?</td><td>...</td><td></td>
								</tr>
								<tr>
									<td><em>BC</em> = 10,5</td><td>110,25</td><td>+</td>
								</tr>
								<tr>
									<td><em>AC</em> = 13,7</td><td>187,69</td><td></td>
								</tr>
							</table>
						</li>
						<li><em>AB</em><sup>2</sup> = 187,69 - 110,25 = 77,44<br>
							<em>AB</em> = `sqrt(77,44)=8,8`</li>
						<li>
							<table class="pythagoras">
								<thead>
									<th colspan="3">
										&Delta;<em>DEF</em>
									</th>
								</thead>
								<tr>
									<td>zijde</td><td>kwadraat</td><td></td>
								</tr>
								<tr>
									<td><em>EF</em> = 5,75</td><td>33,0625</td><td></td>
								</tr>
								<tr>
									<td><em>DF</em> = ?</td><td></td><td>+</td>
								</tr>
								<tr>
									<td><em>DE</em> = 13,85</td><td>191,8225</td><td></td>
								</tr>
							</table>
							<em>DF</em><sup>2</sup> = 191,8225 - 33,0625 = 158,76<br>
							<em>DF</em> = `sqrt(158,76) =12,6`
						</li>
						<li>
							<table class="pythagoras">
								<thead>
									<th colspan="3">
										&Delta;<em>KLM</em>
									</th>
								</thead>
								<tr>
									<td>zijde</td><td>kwadraat</td><td></td>
								</tr>
								<tr>
									<td><em>KL</em> = ?</td><td>...</td><td></td>
								</tr>
								<tr>
									<td><em>LM</em> = 7,2</td><td>51,84</td><td>+</td>
								</tr>
								<tr>
									<td><em>KM</em> = 9,7</td><td>94,09</td><td></td>
								</tr>
							</table>
							<em>KL</em><sup>2</sup> = 94,09 - 51,84 = 42,25<br>
							<em>KL</em> = `sqrt(42,25)=6,5`
						</li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<div class="tekstblok theorie meetkunde" id="theorieE">
		<h3>Theorie E Omgekeerde formule (Uitdaging)</h3>
		<div class="row">
			<div class="col-xs-8">
				<p>
					<ul>
						<li>Heb jij de formule bij de stelling van Pythagoras gebruikt en ging dat goed?</li>
						<li>Heb je bij analyse-taken gemerkt dat jij de balansmethode al beheerst?</li>
					</ul>
					Dan kun je ook het berekenen van een rechthoekszijde met de formule leren!
				</p>
			</div>
			<div class="col-xs-4">
				<p class="geeltje">
					Bepaal (eventueel samen met je docent) of jij deze uitdaging aangaat!
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-9">
				<p>
					In plaats van een tabel invullen, kun je ook deze ene regel invullen: <nobr><em>a</em><sup>2</sup> + <em>b</em><sup>2</sup> = <em>c</em><sup>2</sup></nobr>. Daarin zijn <em>a</em> en <em>b</em> de rechthoekszijden en <em>c</em> de schuine zijde.
				</p>
				<p>
					<u>Voorbeeld</u>:<br>
					Bekijk de rechthoekige driehoek hiernaast en bereken de schuine zijde.
				</p>
			</div>
			<div class="col-xs-3">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/formule2_th.png">
			</div>
		</div>
		<p>
			<u>Uitwerking</u>:<br>
			<table class="stappenplan">
				<tr>
					<td>Stap 1</td>
					<td>
						Vul de bekende zijden in voor <em>a</em> en <em>c</em> (of <em>b</em> en <em>c</em>).
					</td>
					<td>
						<em>a</em><sup>2</sup> + <em>b</em><sup>2</sup> = <em>c</em><sup>2</sup><br>
						4<sup>2</sup> + <em>b</em><sup>2</sup> = 5,8<sup>2</sup>
					</td>
				</tr>
				<tr>
					<td>Stap 2</td>
					<td>Reken de kwadraten uit.</td>
					<td>
						4<sup>2</sup> + <em>b</em><sup>2</sup></td><td>=</td><td>5,8<sup>2</sup>
						<br>
						16 + <em>b</em><sup>2</sup></td><td>=</td><td>33,64
					</td>
				</tr>
				<tr>
					<td>Stap 3</td>
					<td>
						Gebruik de <font color="blue"><b>balansmethode</b></font>
					</td>
					<td>
						<table class="tussenstap_vergelijking">
							<tr>
								<td>16 + <em>b</em><sup>2</sup></td><td>=</td><td>33,64</td>
							</tr>
							<tr>
								<td><font color="blue"><b>-16</b></font></td><td></td><td><font color="blue"><b>-16</b></font></td>
							</tr>
							<tr>
								<td><em>b</em><sup>2</sup></td><td>=</td><td>17,64</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>Stap 4</td>
					<td>Neem de wortel</td>
					<td><em>b</em> = `sqrt(17,64)=3,2`</td>
				</tr>
			</table>
		</p>
	</div>

	<!-- opdracht 23 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 23 Pythagoras door elkaar</h3>
		<div class="row">
			<div class="col-xs-7">
				<p>
					Hiernaast staan drie rechthoekige driehoeken afgebeeld. Van elke driehoek is één lengte ontbekend, dat kan zijn van een rechthoekszijde of van de lange zijde.
					<ol>
						<li>
							Bepaal wat de schuine en rechthoekszijden van &Delta;<em>PQR</em>.
						</li>
						<li>
							Vul de tabel in met de schuine zijde onder de streep.
						</li>
						<li>
							Bereken de ontbrekende zijde in twee decimalen nauwkeurig.
						</li>
						<br>
						De lengte van de ontbrekende zijde in &Delta;<em>STU</em> is ongeveer 7. 
						<li>
							Bereken in twee decimalen nauwkeurig.
						</li>
						<li>
							Bereken in twee decimalen nauwkeurig de lengte van de ontbrekende zijde van &Delta;<em>VWX</em>.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/mix_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<p>
					<ol>
						<li>
							<em>PQ</em> en <em>PR</em> zijn de rechthoekszijden, <em>QR</em> is de schuine zijde.
						</li>
						<li>
							<table class="pythagoras">
								<tr>
									<td>zijde</td><td>kwadraat</td><td></td>
								</tr>
								<tr>
									<td><em>PQ</em> = 4</td><td>16</td><td></td>
								</tr>
								<tr>
									<td><em>PR</em> = 7</td><td>49</td><td>+</td>
								</tr>
								<tr>
									<td><em>QR</em> = ?</td><td>...</td><td></td>
								</tr>
							</table>
						</li>
						<li>
							<em>QR</em> = `sqrt(16+49)=sqrt65` &asymp; 8,06
						</li>
						<li>
							<em>TU</em><sup>2</sup> = 81 - 36 = 45<br>
							<em>TU</em> = `sqrt45` &asymp; 6,71
						</li>
						<li>
							<em>VX</em><sup>2</sup> = 36 - 9 = 27<br>
							<em>VX</em> = `sqrt27` &asymp; 5,20
						</li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 25 Vlieger</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Samira wil een vlieger maken, van papier en 6 stokjes (vier voor de zijden en twee voor de diagonalen).
				</p>
				<p>
					Ze wil graag dat de twee kortste zijden een rechte hoek maken. De korte zijden moeten 12,5 cm worden en de langste diagonaal 24 cm.
				</p>
				<p>
					Wat is de totale lengte van alle stokjes bij elkaar opgeteld?
					<ol>
						<li>
							Bereken de lengte van de tweede diagonaal
						</li>
						<li>
							Hoe groot is &ang;<em>S</em> in &Delta;<em>BCS</em>?
						</li>
						<li>
							Bereken de lengte <em>CS</em>.
						</li>
						<li>
							Bereken de lengte <em>AB</em>.
						</li>
						<li>
							Wat is de totale lengte van alle stokjes bij elkaar opgeteld?
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/vlieger_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<p>
				</p>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 26 Oriëntatie hulplijntje</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Hiernaast zie je de afbeelding van een gelijkbenige driehoek, &Delta;<em>ABC</em>. In deze opdracht ga je de lengte van <em>AB</em> berekenen.
					<br>
					Alleen in rechthoekige driehoeken kun je met de stelling van Pythagoras de lengte van een zijde uitrekenen. Daarom is de hoogtelijn getekend; <em>CD</em> = 6,5. De hoogtelijn deelt deze <u>gelijkbenige</u> driehoek in twee precies dezelfde, maar gespiegelde driehoeken.
					<ol>
						<li>
							Er zijn twee rechthoekige driehoeken. Schrijf op welke dat zijn.
						</li>
						<li>
							Bereken de ontbrekende rechthoekszijde van één van de rechthoekige driehoeken.
						</li>
						<li>
							Hoe lang is <em>AC</em>?
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/hoogtelijn_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<p>
					<ol>
						<li>
							&Delta;<em>ADC</em> en &Delta;<em>BCD</em>.
						</li>
						<li>
							In &Delta;<em>ADC</em> is <em>AD</em> de onbekende rechthoekszijde.<br>
							<em>AD</em><sup>2</sup> = 64 - 42,25 = 21,75<br>
							<em>AD</em> = `sqrt(21,75)` &asymp; 4,7
						</li>
						<li>
							<em>AB</em> = 2&sdot;<em>AD</em> = 2&sdot;4,66... &asymp; 9,33
						</li>
					</ol>
				</p>
			</div>
		</div>
	</div>
		
	<div class="tekstblok theorie meetkunde" id="theorieF">
		<h3>Theorie F Driehoeken</h3>	
		<div class="row">
			<div class"col-xs-6">
				<p>
					Als een driehoek een onbekende zijde heeft die berekend moet worden, is de eerste stap om een <u>rechthoekige driehoek</u> te zoeken waarin je vervolgens de <u>stelling van Pythagoras</u> kunt toepassen. Daarvoor moet je soms zelf een slim gekozen <b>hulplijntje</b> zetten, zoals de stippellijn in de opgave hiervoor.
				</p>
				<p>
					<u>Voorbeeld</u>:<br>
					In de afbeelding hiernaast zie je een trapezium.
					Bereken de lengte van <em>PS</em>.
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/hulplijntje_th.png">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<p>
					<u>Uitwerking</u>:<br>
					Een slim hulplijntje om nog meer rechthoekige driehoeken te maken is de stippellijn vanuit <em>R</em> met lengte 8.<br>
					Net als <em>RQ</em> is de lengte tussen de twee stippellijnen op <em>PS</em> 3,5 cm.
				</p>
				<p>
					Er zijn nu twee rechthoekige driehoeke: &Delta;<em>PQT</em> en &Delta;<em>RSV</em>.
				</p>
				<p>
					In &Delta;<em>PQT</em> zijn <em>PT</em> en <em>QT</em> de rechthoekszijden, dus vul je de tabel op deze manier in:
					<table class="pythagoras">
						<tr>
							<td>Zijde</td><td>Kwadraat</td><td></td>
						</tr>
						<tr>
							<td><em>PT</em> = ?</td><td></td><td></td>
						</tr>
						<tr>
							<td><em>QT</em> = 8</td><td>64</td><td>+</td>
						</tr>
						<tr>
							<td><em>PQ</em> = 8,6</td><td>73,96</td><td></td>
						</tr>
					</table>
				</p>
				<p>
					<em>PT</em> = `sqrt(73,96-64)` &asymp; 3,156
				</p>
				<p>
					In &Delta;<em>RSV</em> is <em>RS</em> de schuine zijde. Met de stelling van Pythagoras de rechthoekszijde berekenen: <em>SV</em> = `sqrt(10^2-8^2)` = 6.
				</p>
				<p>
					<em>PS</em> is daarom 3,156 + 3,5 + 6 cm lang.
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/hulplijntje_th_uitw.png">
			</div>
		</div>
	</div>
		
	<div class="tekstblok opdracht">
		<h3>Opdracht 27 Ranja</h3>	
		<div class="row">
			<div class="col-xs-6">
				<p>
					Een glas is aan de onderzijde 8 cm breed en aan de bovenkant 12 cm. Het glas is 13 cm hoog. Er staat een rietje in het glas, zie het plaatje hiernaast.
					<ol>
						<li>
							Wat is de lengte van de zijkant van het glas?
						</li>
						<li>
							Wat is de lengte van de onderkant van het rietje tot waar hij op het glas rust?
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/glas_rietje_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<p>
					<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/glas_rietje_antw.png" width="" class="">
					<ol>
						<li></li>
						<li></li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 28 Studentenkamer</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Raoul gaat studeren in Breda en heeft een geweldige studentekamer op het oog. Deze kamer kost €275,- per maand.
				</p>
				<p>
					Om te vergelijken met andere studentenkamers wil hij ook de oppervlakte van deze kamer weten. Daarom heeft hij een plattegrond gemaakt, maar is van de muur met de deur vergeten om de lengte op te schrijven.
					<ol>
						<li>
							Kun jij de lengte van dat stuk muur berekenen? Doe dat.
						</li>
						<li>
							Bereken de oppervlakte van de kamer in m<sup>2</sup> nauwkeurig.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/studentenkamer_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<p>
					<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/studentenkamer_antw.png" width="250px" class="rightfloat">
					<ol>
						<li>
							Zie de tekening hiernaast voor de hulplijntjes.<br>
							Er ontstaat een rechthoekige driehoek met rechthoekszijden 1,3 en 1 meter. Dus de schuine zijde is 1,64 meter lang.
						</li>
						<li>
							De figuur is in drie delen verdeeld. Een rechthoek van 3 bij 2,7 meter, een rechthoek van 2 bij 1 meter en een trapezium met een onderkant van 3 meter, een bovenkant van 2 meter en een hoogte van 1,3 meter.<br>
							Oppervlakte van de onderste rechthoek is <nobr>3&sdot;2,7 = 8,1 m<sup>2</sup></nobr>.<br>
							Oppervlakte van de bovenste rechthoek is <nobr>2&sdot;1 = 2 m<sup>2</sup></nobr>.<br>
							De oppervlakte van het trapezium is <nobr>3&sdot;1,3 - `1/2`&sdot;1&sdot;1,3 = 3,25 m<sup>2</sup></nobr>.<br>
							Totale oppervlakte is dus <nobr>8,1 + 2 + 3,25 = 13,35 m<sup>2</sup></nobr>, het antwoord is <nobr>13 m<sup>2</sup></nobr>.
						</li>
					</ol>
				</p>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 29 Tuin</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Meike heeft een huis gekocht, met tuin. Op de afbeelding hieronder zie je een stukje plattegrond.<br>
					Ze wil graag gras in de tuin. Om zeker te zijn dat ze genoeg graszaad gaat kopen bij de tuinwinkel, heeft ze gemeten hoe lang de zijden van de tuin zijn. De langste zijde kon niet gemeten worden, omdat er allemaal struiken in de weg stonden.
					<ol>
						<li>
							Kun jij de lengte van die zijde berekenen?
						</li>
						<li>
							Bereken de oppervlakte van de tuin in vierkante meters.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/tuin_opdr.png">
			</div>
		</div>
	</div>
	
	
	<div class="tekstblok opdracht" id="proeftoets">
	<h3>Proeftoets</h3>
	<p>
		Ga naar <a href="https://drive.google.com/a/vathorstcollege.nl/folderview?id=0B-EzZiYS_HciWDNsS29Xa1lvcDQ&usp=drive_web&ddrp=1#" target="_blank">map proeftoetsen</a> en kies de juiste proeftoets bij dit onderwerp om je voor te bereiden op de echte.
	</p>
</div>

	
	
	
</div>



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
			<ol>
				<li>...;</li>
				<li></li>
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
