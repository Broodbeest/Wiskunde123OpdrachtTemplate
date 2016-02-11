<?php
//Definieer sidebar
$doorverwijzingen = array(
     '#inleiding' => 'Lineaire verbanden',
	 '#theorieA' => 'Lineaire formules',
	 '#theorieB' => 'Van tabel naar formule',
	 '#theorieC' => 'Formules bij grafieken maken',
	 '#theorieD' => 'Grafieken tekenen met behulp van een tabel',
	 '#proeftoets' => 'Proeftoets');  
?>


<title>Leerjaar 1 | Vergelijkingen</title>

<div class="taakinhoud">

<div class="tekstblok theorie analyse">
<h3>Theorie H Het hellingsgetal uitrekenen (havo/vwo)</h3>
<p>
	Het hellingsgetal is de toename van de uitvoer als de invoer met één toeneemt. Vaak kun je die niet zomaar bepalen, dan moet je gaan rekenen.
</p>
	<table class="verhouding">
		<tr><td ><em>x</em></td><td>0</td><td>5</td></tr>
		<tr><td><em>y</em></td><td>22</td><td>77</td></tr>
	</table>
<p>
	In de tabel hierboven kun je het hellingsgetal niet zomaar zien. Wel kun je de toename van de in- en uitvoer los bepalen.
</p>
<p>
	Invoer: van 0 naar 5, dus toename is `5 - 0 = 5`<br>
	Uitvoer: van 22 naar 77, dus toename is `77 - 22 = 55`
</p>
<p>
	De uitvoer neemt dus met 55 toe, terwijl de invoer met 5 toeneemt. Dan neemt de uitvoer met 11 toe voor een toename van 1 van de invoer. Dus het hellingsgetal is 11.
</p>
<p>
	Je kunt dit met de volgende berekening makkelijk uitrekenen:<br>
	<em>hellingsgetal</em> `=(77-22)/(5-0)`
</p>	
<p>
	Je deelt de toename van de uitvoer door de toename van de invoer. En een toename is het verschil tussen de twee waarden. 
</p>

</div>

<div class="tekstblok opdracht">
<h3>Opdracht 24 (havo/vwo)</h3>
<p>
	Maak bij elke tabel de bijbehorende formule. Let op: soms neemt de x grotere sprongen.
</p>
<ol>
	<li>
		<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
			<TR><TD ><em>x</em></TD><TD>0</TD><TD>10</TD></TR>
			<TR><TD><em>y</em></TD><TD>15</TD><TD>45</TD></TR>
		</TABLE>
	</li>
	<br>
	<li>
		<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
			<TR><TD ><em>x</em></TD><TD>4</TD><TD>8</TD></TR>
			<TR><TD><em>y</em></TD><TD>17</TD><TD>25</TD></TR>
		</TABLE>
	</li>
</ol>

<div class="hider">
	<div class="showhide">&rarr;</div>
	<div class="antwoord">
	<h3>Uitwerkingen bij opdracht 24</h3>
		<ol>
			<li>
				Hellingsgetal = `(45-15)/10` `= 3`<br>
				Startgetal af lezen onder `x=0` , dus `b=15`<br>
				Formule: `y = 3x + 15`.
			</li>
			<li>
				Hellingsgetal= `(25-17)/(8-4)` `= 8/4 = 2`<br>
				Startgetal (terugtellen) `17 - 8 = 9`<br>
				Formule: `y = 2x + 9`.
			</li>
		</ol>
	</div>
</div>

</div>

<div class="tekstblok theorie analyse">
<h3>Theorie I Grafieken tekenen met behulp van een tabel</h3>
<p>	
	We gaan de grafiek van de formule `y = 2x + 1` met behulp van een tabel tekenen.
</p>
<p>
	<u>Stap 1:</u><br>
	Omdat we voor een rechte lijn slechts twee punten nodig hebben,  maken een tabel met twee invoer- en uitvoerwaarden.<br>
	<table class="verhouding">
		<tr><td ><em>x</em></td><td>...</td><td>...</td></tr>
		<tr><td><em>y</em></td><td>...</td><td>...</td></tr>
	</table>
</p>
<p>
	<u>Stap 2:</u><br>
		De invoer bepalen we zelf. We kiezen voor makkelijke getallen die zorgen voor <b>roosterpunten</b>. <br>
		De 0 is bijna altijd handig omdat dat ten eerste makkelijk rekent en dan ten tweede meteen het snijpunt met de `y`-as is bepaald. Voor het tweede invoergetal kiezen we nu 5 omdat we zo een tweede punt krijgen dat redelijk van het eerste afligt. Dat maakt het tekenen van de grafiek straks makkelijker en nauwkeuriger.
	<table class="verhouding">
		<tr><td ><em>x</em></td><td>0</td><td>5</td></tr>
		<tr><td><em>y</em></td><td>...</td><td>...</td></tr>
	</table>
</p>
<p>
	<u>Stap 3:</u><br>
	Bereken de uitvoerwaarden door de invoer in te vullen in de formule:<br>
	Bij `x=0` hoort `y = 2*0 + 1 = 1` <br>
	Bij `x=0` hoort `y = 2*5 + 1 = 11` <br>
	<table class="verhouding">
		<tr><td ><em>x</em></td><td>0</td><td>5</td></tr>
		<tr><td><em>y</em></td><td>1</td><td>11</td></tr>
	</table>
</p>
<p>
	Uit de tabel halen we de punten (0, 1) en (5, 11). We maken een assenstelsel waar we deze punten inzetten. Zorg dat je assenstelsel groot genoeg is. Verbind tenslotte je punten met een mooie rechte lijn.
	<table bgcolor="white" width="97%">
		<tr>
			<td>
				<img src="afbeeldingen/analyse_leerjaar_1/theorie_I_punten.png" alt="theorie_I_punten" width="250px" height="" />
			</td>
			<td>
				<img src="afbeeldingen/analyse_leerjaar_1/theorie_I_grafiek.png" alt="theorie_I_grafiek" width="250px" height="" />
			</td>
		</tr>
		<tr style="text-align:center";>
			<td>
				markeer de punten
			</td>
			<td>
				verbind met een rechte lijn
			</td>
		</tr>
	</table>
</p>
<p>				
	Denk eraan dat je tekent met potlood en geodriehoek. Zet de formule bij de grafiek en zet de namen van de assen op de juiste plek. 
</p>
</div>

<div class="tekstblok opdracht">
<h3>Opdracht 25: tekenen grafiek met tabel</h3>
<p>
	Teken de grafiek van de formule `y = 4x + 3` met behulp van een tabel.
</p>
<ol>
	<li>Neem de tabel over en vul in: 
		<table class="verhouding">
			<tr><td ><em>x</em></td><td>0</td><td>10</td></tr>
			<tr><td><em>y</em></td><td>...</td><td>...</td></tr>
		</table>
	</li>
	<li>
		Waarom is het genoeg om in de tabel maar twee waarden voor `x` te gebruiken?
	</li>
	<li>
		Waarom is het handig om als eerste waarde in de tabel `x=0` te kiezen?
	</li>			
	<li>
		Waarom is het niet handig om als tweede waarde `x=1` te kiezen?
	</li>
	<li>
		Teken de grafiek bij de formule. Maak daarvoor eerst een geschikt assenstelsel.
	</li>
</ol>
	
<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<h3>Uitwerkingen bij opdracht 25</h3>
			<ol>
				<li>
					<table class="verhouding">
						<tr><td ><em>x</em></td><td>0</td><td>10</td></tr>
						<tr><td><em>y</em></td><td>3</td><td>43</td></tr>
					</table>
				</li>
				<li>Je hoeft maar twee waarden voor `x` te gebruiken omdat de grafiek een rechte lijn wordt.</li>
				<li>`x = 0` rekent makkelijk, je hebt gelijk het startgetal en het snijpunt met de <nobr><em>y</em>-as: (0, 3)</nobr>.</li>
				<li>Omdat de twee punten dan heel dicht tegen elkaar zitten in het assenstelsel. Het is dan lastiger om de lijn nauwkeurig te tekenen.</li>
				<li><br><img src="afbeeldingen/analyse_leerjaar_1/grafiek_opdracht18_manier1.png"  width="400px"></li>
			</ol>
		</div>
	</div>
</div>

<!-- 

<div class="tekstblok opdracht analyse">
	<h3>Opdracht 20:tekenen grafiek met hellings- en startgetal</h3>
	<p>	We gaan de grafiek van de volgende formule tekenen:<br></p>
	<em>y</em>=5+<math><mfrac><mrow><mi>1</mi></mrow><mrow><mi>3</mi></mrow></mfrac></math><em>x</em>. </p>	
		<ol>
			<li>Neem de tabel over en vul in: 
				<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
								<TR><TD ><mi>x</mi></TD><TD><mn></mn></TD><TD><mi></mn></TD></TR>
								<TR><TD><mi>y</mi></TD><TD></TD><TD></TD></TR></TABLE>
			</li>
			<li>Waarom is het handig om als tweede waarde een <a href="index2.php?p=tafels_van_vermenigvuldiging">veelvoud</a> van drie te kiezen?</li>
			<li>Teken de grafiek bij de formule. Maar daarvoor eerst een geschikt assenstelsel.</li>

		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<p>Antwoorden
				<ol>
					<li><TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
								<TR><TD ><mi>x</mi></TD><TD><mn>0</mn></TD><TD><mi>9</mn></TD></TR>
								<TR><TD><mi>y</mi></TD><TD>5</TD><TD>8</TD></TR></TABLE></li>
					<li>Omdat je dan een heel getal voor <em>y</em> krijgt. Hele waarden kan je nauwkeuriger in je assenstelsel tekenen.</li>
					<li><img src="afbeeldingen/analyse_leerjaar_1/grafiek_opdracht19_manier1.png" class="rightfloat" width="400px"></li>
				</ol>
			</p>
			</div>
		</div>
	</p>
</div>

<div class="tekstblok opdracht analyse">
	<h3>Opdracht 20:tekenen grafiek <b>manier 1** (HAVO/VWO)</b> </h3>
	<p>We gaan de grafiek van de volgende formule tekenen:<br>
	<math><mi>y = -5 + </mi><mfrac><mrow><mi>2</mi></mrow><mrow><mi>7</mi></mrow></mfrac><mi>x</mi></math>. </p>
		<ol>
			<li>Neem de tabel over en vul in: 
				<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
								<TR><TD ><mi>x</mi></TD><TD><mn></mn></TD><TD><mi></mn></TD></TR>
								<TR><TD><mi>y</mi></TD><TD></TD><TD></TD></TR></TABLE>
			
			<li>Teken de grafiek bij de formule. Maar daarvoor eerst een geschikt assenstelsel.</li>

		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<p>Antwoorden
				<ol>
					<li><TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
								<TR><TD ><mi>x</mi></TD><TD><mn>0</mn></TD><TD><mi>70</mn></TD></TR>
								<TR><TD><mi>y</mi></TD><TD>-5</TD><TD>15</TD></TR></TABLE></li>
					<li><img src="afbeeldingen/analyse_leerjaar_1/grafiek_opdracht20.png" class="rightfloat" width="400px"></li>
				</ol>
			</p>
			</div>
		</div>
	</p>
</div>

<div class="tekstblok opdracht analyse">
	<h3>Opdracht 21:tekenen grafiek <b>manier 2</b> (HAVO/VWO)</h3>
		<ol>
			<li>Teken een assenstelsel. Teken de x-as van 0 t/m 8 met stapgrootte 1 en de y-as van 0 t/m 20 neem stapgrootte 1 op de verticale as.</li>
			<li>We gaan nu de grafiek tekenen bij de formule <math><mi>y</mi><mo>=</mo><mn>3</mn><mo>+</mo><mn>4</mn><mi>x</mi></math>. Wat is het startgetal in de formule? Dit is het punt waar de grafiek op de verticale as begint.  Teken dit punt in je assenstelsel.</li>
			<li>Wat is het hellingsgetal in de formule?</li>
			<li>Het hellingsgetal betekende dat als <em>x</em> 1 groter wordt, de <em>y</em>, in dit geval, 4 groter wordt.<br>
			Ga nu met je potlood op het startgetal in je grafiek staan. Schuif 1 hokje naar rechts en houdt je potlood op je papier. Nu is de <em>x</em>  1 groter. Hoeveel moet ik omhoog /omlaag om bij mijn volgende punt van de grafiek te komen? Teken dit punt.</li>
			<li>Teken nu de grafiek door de twee punten met een lijn te verbinden.</li>
	
<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<p>Antwoorden
				<ol>
					<li>zie b.</li>
					<li><br><img src="afbeeldingen/analyse_leerjaar_1/grafiek_21b.png" width="300px"></li>
					<li>hellingsgetal = 4</li>
					<li><br><img src="afbeeldingen/analyse_leerjaar_1/grafiek_21d.png"  width="300px"></li>
					<li><br><img src="afbeeldingen/analyse_leerjaar_1/grafiek_21e.png"  width="300px"></li>
				</ol>
			</p>
			</div>
		</div>
	</p>
</div>

<div class="tekstblok opdracht analyse">
	<h3>Opdracht 22 Formule opstellen bij een rechte lijn</h3>
	<p>Hiernaast zie je de grafiek getekend van een rechte lijn. We gaan nu de formule opstellen van deze rechte lijn.
		<img src="afbeeldingen/analyse_leerjaar_1/grafiek.png" class="rightfloat" width="200px"></p>

		<ol>
			<li>Zoek twee roosterpunten die op de grafiek liggen. Noteer de coördinaten in onderstaande tabel:
				<TABLE FRAME="void" RULES="all"  width="100" style="text-align: center">
								<TR><TD><em>x</em></TD><TD><mn></mn></TD><TD><mi></mn></TD></TR>
								<TR><TD><em>y</em></TD><TD></TD><TD></TD></TR></TABLE>
			
			<li>Nu je de tabel hebt met twee punten van de grafiek kan je de formule opstellen, stel deze formule op.</li>
			<li>Had je ook in één keer het startgetal kunnen aflezen uit de grafiek zonder eerst de tabel te hebben gemaakt? Geldt dit ook voor het hellingsgetal?</li>
		</ol>

		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<p>Antwoorden
				<ol>
					<li>	<TABLE FRAME="void" RULES="all"  width="100" style="text-align: center">
								<TR><TD><em>x</em></TD><TD>0</TD><TD>2</TD></TR>
								<TR><TD><em>y</em></TD><TD>24</TD><TD>14</TD></TR></TABLE></li>
					<li>startgetal = 24<br>
					    hellingsgetal is: 2 stapjes naar rechts, 10 naar <FONT color="red">beneden</FONT>. Dus één stapje naar rechts is 5 naar <FONT color="red">beneden</FONT>. de hellingsgetal = <FONT color="red">-</FONT>5<br>
					    of:  (14 - 24) : 2 = -5<br>
					    formule: <em>y</em> = -5<em>x</em> + 24</li>
					<li>Het startgetal is direct af te lezen uit de grafiek. Het is het snijpunt met de <em>y</em>-as. Het hellingsgetal is niet direct af te lezen omdat niet precies is af te lezen hoeveel je naar beneden moet als je één hokje naar rechts gaat. Neem daarom twee hokjes naar rechts vanaf het startgetal. Dit geeft een mooi af te lezen punt. </li>
				</ol>
			</p>
			</div>
		</div>
	</p>
</div>

<div class="tekstblok opdracht analyse">
	<h3>Opdracht 23 Formule opstellen bij twee gegeven punten.</h3>
	<ol>
		<li>Teken in een assenstelsel de lijn door de punten A(0,3) en B(4,11).Laat de lijn niet stoppen bij de punten, het is geen lijnstuk, maar trek hem door.</li>
		<li>Als de x-coördinaat met 4 toeneemt, dan neemt de y-coördinaat met … toe.</li>
		<li>Als de x-coördinaat met 1 toeneemt, dan neemt de y-coördinaat met … toe.</li>
		<li>Wat is y als x=0?</li>
		<li>Maak de formule bij de grafiek <math><mi>y = … x x + …</mi></math></li>
	</ol>

	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<p>Antwoorden
				<ol>
					<li><img src="afbeeldingen/analyse_leerjaar_1/antw_23a.png"  width="200px"><br></li>
					<li>Als de x-coördinaat met 4 toeneemt, dan neemt de y-coördinaat met 8 toe.</li>
					<li>Als de x-coördinaat met 1 toeneemt, dan neemt de y-coördinaat met 2 toe.</li>
					<li>als <math><mi>x = 0</mi></math> dan is <math><mi>y = 3</mi></math></li>
					<li><math><mi>y = 2x + 3</mi></math></li>
				</ol>
			</p>
			</div>
		</div>
	</p>
</div>

<div class="tekstblok opdracht analyse">
	<h3>Opdracht 24 Formule opstellen bij twee gegeven punten.</h3>
	<p>Gegeven zijn de punten A(-4,0) en B(5,3).</p>
	<ol>
		<li>Hoeveel neemt de x-coordinaat toe van punt A naar punt B?</li>
		<li>Hoeveel neemt de y-coördinaat toe van punt A naar punt B?</li>
		<li>Als de x-coördinaat met 1 toeneemt, dan neemt de y-coördinaat met … toe.</li>
		<li>Wat is y als x=0?</li>
		<li>Maak de formule bij de grafiek <math><mi>y = … x x + …</mi></math></li>
	</ol>
	

		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<p>Antwoorden
				<ol>
					<li>De x-coördinaat neemt met 9 toe.</li>
					<li>De y-coördinaat neemt met 3 toe.</li>
					<li>Als de x-coördinaat met 1 toeneemt, dan neemt de y-coördinaat met <math><mfrac><mrow><mi>3</mi></mrow><mrow><mi>9</mi></mrow></mfrac></math> toe. Dus met <math><mfrac><mrow><mi>1</mi></mrow><mrow><mi>3</mi></mrow></mfrac></math>.</li>
					<li>Ik moet vanuit punt A(-4,0) vier stappen naar rechts om bij x=0 te komen. Eén stap naar rechts betekent <math><mfrac><mrow><mi>1</mi></mrow><mrow><mi>3</mi></mrow></mfrac></math> erbij op de y-coördinaat. Dus vier stappen naar rechts betekent <math><mfrac><mrow><mi>4</mi></mrow><mrow><mi>3</mi></mrow></mfrac> </math>erbij op de y-coördinaat. De y-coördinaat was 0.<br>
					Startgetal: 0 + <math><mfrac><mrow><mi>4</mi></mrow><mrow><mi>3</mi></mrow></mfrac></math> = <math><mfrac><mrow><mi>4</mi></mrow><mrow><mi>3</mi></mrow></mfrac></math>. </li>
					<li><math><mi>y = <mfrac><mrow><mi>1</mi></mrow><mrow><mi>3</mi></mrow></mfrac>x +<mfrac><mrow><mi>4 </mi></mrow><mrow><mi>3</mi></mrow></mfrac></mi></math></li>
				</ol>
			</p>
			</div>
		</div>
	</p>

</div>

<ol id="numbers">
	<li>
		Met behulp van een tabel. We gebruiken maar twee waarden in de tabel omdat dat genoeg is voor rechte lijnen.
	</li>
	<li>
		Met behulp van het startgetal en het hellingsgetal van de formule (havo/vwo).
	</li>
</ol>

-->

<div class="tekstblok theorie analyse" id="theorieC">
	<h3>Theorie C Start- en hellingsgetal</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				In de wiskunde gebruiken we andere woorden voor beginwaarde en regelmaat.
			</p> 
			<p>
				De beginwaarde noemen we voortaan <span id="startgetal">startgetal</span>.
			</p>
			<p>
				De regelmaat noemen we voortaan <span id="hellingsgetal">hellingsgetal</span>.
			</p>
		</div>
		<div class="col-xs-5">
			<figure>
				<img src="afbeeldingen/analyse_leerjaar_1/helling_na_start.jpeg" alt="helling_na_start"  />
				<figcaption>
					Na de start kwam een flinke helling.
				</figcaption>
			</figure>
		</div>
	</div>
</div>

<!-- opdracht 6-->
<div class="tekstblok opdracht">
	<h3>Opdracht 6 Schilder <em>Van Wanten</em></h3>
	<p>De woonkamer van Harry is aan een flinke opknapbeurt toe. Al zijn wanden moeten worden geschilderd. Hij kan zelf niet goed schilderen en dus vraagt hij een aantal offertes op. Schildersbedrijf <em>Van Wanten</em> geeft Harry de volgende formule op waarmee zij het bedrag berekenen:<br>
	<em>Bedrag</em> = 52 + 18 &times; <em>aantal uren</em>.
		<ol>
			<li>Hoeveel moet Harry betalen als de schilder 9 uur aan het schilderen is geweest?</li>
			<li>Wat stelt de 18 voor in de formule?</li>
			<li>Wat stelt de 52 voor in de formule?</li>
		</ol>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord"><p>Antwoorden
					<ol>
						<li>52 + 18 &times; 9 = 52 + 162 = &euro;214</li>
						<li>&euro;18 per uur</li>
						<li>&euro;52 vaste kosten</li>
					</ol>
				</p>
			</div>
		</div>
	</p>
</div>

<div class="tekstblok theorie analyse" id="van woord- naar formule">
<h3>Theorie C Van woordformule naar formule</h3>
<p>
	In een <b>woordformule</b> gebruik je woorden om aan te geven wat je berekent en waarmee je rekent. In andere woorden: het <b>verband</b> tussen <b>invoer</b> en <b>uitvoer</b> is in woorden uitgedrukt.
</p>
<p>
	Voorbeeld:<br>
	<em>aantal sterren</em> = 2 x <em>nummer figuur</em> + 3
</p>
<p>
	Vanaf nu korten we de woorden in de formules af met een <b>letter</b>.  De woordformule uit het voorbeeld wordt dan:
<br>
	<em>s</em> = 2 x <em>n</em> + 3
</p>
<p>
	Meestal nemen we hiervoor de eerste letter van het woord.
</p>	
</div>

<!-- opdracht 7 -->
<div class="tekstblok opdracht">
	<h3>Opdracht 7 Schilder <em>Pak Maar Aan</em></h3>
	<p>Een andere schilder werkt niet met formules. Schildersbedrijf <em>Pak Maar Aan</em> rekent &euro;37 vaste kosten en zegt dat Harry voor ieder uur werken &euro;23 moet betalen.
		<ol>
			<li>Maak een formule voor het bedrijf <em>Pak Maar Aan</em>.</li>
			<li>Wat moet Harry betalen bij <em>Pak Maar Aan</em> als er 9 uur geschilderd is?</li>
			<li>Welk bedrijf zou jij adviseren als er 9 uur schilderswerk is, <em>Pak Maar Aan</em> of <em>Van Wanten</em>?</li>
		</ol>
		<div class="hider">
		<div class="showhide">&rarr;</div>
			<div class="antwoord"><p>Antwoorden
				<ol>
					<li><em>Bedrag in &euro;</em> = 37 + 23 &times; <em>aantal gewerkte uren</em></li>
					<li>37 + 23 &times; 9 = 37 + 207 = &euro;244</li>
					<li>Als er 9 uur schilderwerk is, dan is <em>Pak Maar Aan</em> duurder, dus zou ik <em>Van Wanten</em> adviseren.</li>
				</ol>
			</p>
			</div>
		</div>
	</p>
</div>

<!-- opdracht 8-->
<div class="tekstblok opdracht">
	<h3>Opdracht 8 Vergelijken</h3>
	<p>In deze opdracht gaan we kijken of er ook klussen zijn waarbij <em>Pak Maar Aan</em> duurder is dan <em>Van Wanten</em>.</p>
		<ol>
			<li>Neem de tabel hieronder over en vul hem in. <img src="afbeeldingen/analyse_leerjaar_1/A2figuur9.png" width="500px"></li>
			<li>Teken een grafiek bij de tabel die je net hebt gemaakt. Kies op de verticale as stappen van 25 euro.</li>
			<li>Waar in de grafieken zie je de startgetallen &euro;52,- en &euro;37,-?</li>
			<li>Hoe kun je aan de grafiek zien welke bedrijf een groter bedrag per uur rekent?</li>
			<li>Bij welk aantal uren schilderen maakt het voor Harry niet uit welk bedrijf hij kiest?</li><br>
			Stel dat Harry een vriend van jou is en je weet dat hij zal gaan kiezen tussen de bedrijven <em>Pak Maar Aan</em> en <em>Van Wanten</em>.
			<li>Schrijf een kort bericht (mail, sms, tweet of briefje) aan Harry, waarin staat welk bedrijf hij volgens jou moet kiezen.<br>
				Ook als het een sms, tweet of mail is, schrijf je de tekst in je schrift.</li>
		</ol>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord"> 
				<ol>
					<li><table>
						<tr><td>Aantal uren klussen</td><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
						<tr><td>Bedrag <em>Van Wanten</em></td><td>52</td><td>70</td><td>88</td><td>106</td><td>124</td><td>142</td><td>160</td><td>170</td><td>196</td></tr>
						<tr><td>Bedrag <em>Pak Maar Aan</em></td><td>37</td><td>60</td><td>83</td><td>106</td><td>129</td><td>152</td><td>175</td><td>198</td><td>221</td></tr></table></li>
					<li><img src="afbeeldingen/analyse_leerjaar_1/antw_vergelijken2.png" width="300px" class="rightfloat">Zie de afbeelding hiernaast.</li>
					<li>Op de "Bedrag in euro's"-as.</li>
					<li>De grafiek van <em>Pak Maar Aan</em> gaat sneller omhoog, dus die rekent meer per uur.</li>
					<li>Wanneer er 3 uur geklust wordt, maakt het in kosten niet uit welk bedrijf Harry kiest</li>
					<li>Hoi Harry, ging jij niet klussen in jouw huis? Ik heb twee bedrijven bekeken, <em>Van Wanten</em> en<em>Pak Maar Aan</em> <em>Van Wanten</em> is voordeliger als je meer dan 3 uur nodig denkt te hebben voor de klus. Succes met klussen!</li>
				</ol>
			</div>
		</div>
</div>

<!-- opdracht 9-->
<div class="tekstblok opdracht">
	<h3>Opdracht 9 Autobedrijf <em>Snel Weg</em></h3>
	<p>Voor het huren van een auto rekent autobedrijf <em>Snel Weg</em> met de volgende formule:<br>
		<em>Bedrag in &euro;</em> = 50 + 3,2 &times; <em>aantal kilometer</em>.
		<ol>
			<li>Wat zijn de kosten als je 90 kilometer gaat rijden met deze huurauto?</li>
			<br>Autobedrijf <em>Rustig Aan</em> rekent &euro;30 vaste kosten en &euro;4 per kilometer.
			<li>Neem de tabel hieronder over en vul hem in. 
				<table rules="all">
					<tr>
						<td>Aantal kilometer</td><td>0</td><td>10</td><td>20</td><td>30</td><td>40</td><td>50</td><td>60</td><td>70</td><td>80</td>
					</tr>
					<tr>
						<td>Bedrag <em>Snel Weg</em></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
					</tr>
					<tr>
						<td>Bedrag <em>Rustig Aan</em></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
					</tr>
				</table><br>
				<!-- <img src="afbeeldingen/analyse_leerjaar_1/A2figuur10.png" width="500" /> --></li>
			<li>Bij welke autobedrijf kun je beter een auto huren voor een kort ritje in de stad?</li>
			<li>Wanneer kan je beter kiezen voor bedrijf <em>Snel Weg</em>?</li>
		</ol>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord"><p>Antwoorden
				<ol>
					<li><em>Bedrag in &euro;</em> = 50 + 3,2 &times; 90 = 45 + 267 = &euro;338,-</li>
					<li><table rules="all">
						<tr><td>Aantal kilometers</td><td>0</td><td>10</td><td>20</td><td>30</td><td>40</td><td>50</td><td>60</td><td>70</td><td>80</td></tr>
						<tr><td>Bedrag <em>Snel Weg</em></td><td>50</td><td>82</td><td>114</td><td>146</td><td>178</td><td>210</td><td>242</td><td>274</td><td>306</td></tr>
						<tr><td>Bedrag <em>Rustig Aan</em></td><td>30</td><td>70</td><td>110</td><td>150</td><td>190</td><td>230</td><td>270</td><td>310</td><td>350</td></tr></table></li>
					<li>In de tabel kun je aflezen dat bij 20 kilometer <em>Rustig aan</em> goedkoper is en bij 30 kilometer is <em>Snel Weg</em> goedkoper. Dus eerst is <em>Rustig Aan</em> goedkoper, daarna <em>Snel Weg</em>. Ergens tussen de 20 en 30 kilometer zijn ze even duur. Voor korte ritjes kun je beter voor <em>Rustig Aan</em> kiezen.</li>
					<li>Voor langere ritten kun je beter bij <em>Snel Weg</em> zijn</li>
				</ol>
			</p>
			</div>
		</div>
	</p>
</div>
	
<!-- opdracht 10-->
<div class="tekstblok opdracht">
	<h3>Opdracht 10 Vergelijken</h3>
	<p>In de som hierboven kan je in de tabel niet aflezen vanaf welk aantal kilometers het ene bedrijf gunstiger is dan het andere.<br>
		We zouden dit wel zichtbaar kunnen maken als we van beide formules de grafiek zouden tekenen in één assenstelsel. Gebruik in de volgende opgaven de tabel uit de opdracht hiervoor.</p>
		<ol>
			<li>Teken een geschikt assenstelsel zodat alle punten uit de tabel van opgave 8 er in passen.<br>
				<u>Let op</u>: de gegevens van <em>Snel Weg</em> en van <em>Rustig Aan</em> moeten in de grafiek passen!</li><br>
			<li>Zet de punten van bedrijf <em>Snel Weg</em> in het assenstelsel en teken de grafiek van het bedrag in &euro; bij <em>Snel Weg</em>.</li>
			<li>Zet ook de punten van bedrijf <em>Rustig Aan</em> in hetzelfde assenstelsel en teken de grafiek van het bedrag in &euro; bij <em>Rustig Aan</em>.</li>
			<li>Welke autoverhuurder zou jij adviseren als iemand een auto zou willen huren voor een rit van 98 km?</li>
			<li>Wat is de meetkundige naam van het punt waar het niet uit maakt welk bedrijf je kiest? Geef ook de coördinaten van dat punt.</li><br>
			
		</ol>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord"><img src="afbeeldingen/analyse_leerjaar_1/antw_autobedrijf.PNG" width="250px" class="rightfloat">
				<ol>
					<li>Laat de <em>x</em>-as bijvoorbeeld gaan van 0 tot 80 met stapgrootte 10 en de <em>y</em>-as van 0 tot 350 met stapgrootte 50.</li>
					<li>Zie de figuur hiernaast. bij y=50+3.2x en y=30+4x</li>
					<li>Zie de figuur hiernaast.</li>
					<li>Bij een rit van 98 km is bedrijf <em>Snel Weg</em> voordeliger, want de rode lijn ligt onder de groene lijn.</li>
					<li>Snijpunt: <nobr>(25, 130)</nobr>.</li>
					<li>Zet je potlood bij 192 op de verticale as. Teken vandaar een horizontale lijn tot de lijn van <em>Snel Weg</em>. Teken vanaf die rode lijn een loodlijn omlaag naar de horizontale en lees daar het aantal kilometers af. Als je op de horizontale as kijkt, zie je 35 kilometer staan.</li>
				</ol>
			</div>
		</div>
	</p>
</div>

<!-- theorie C -->
<div class="tekstblok theorie analyse">
	<h3>Theorie C Vergelijkingen</h3>
	<p>In bovenstaande opgave 10e. heb je uitgezocht wanneer de kosten bij beide bedrijven gelijk zijn. Als je dit snijpunt, ook wel <em>omslagpunt</em>, hebt gevonden, dan kan je iets zeggen over de kosten van beide bedrijven. Op het snijpunt zijn beide bedrijven even duur, maar rechts van het snijpunt is <em>"Rustig Aan"</em> goedkoper. Links van het snijpunt is <em>"Snel Weg"</em> goedkoper.</p>
</div>


<!-- opdracht 10-->
<div class="tekstblok opdracht">
	<h3>Opdracht 11 Vergelijken</h3>
	<p>Kijk nog eens naar opgave 10 en beantwoord dan de volgende vraag:</p>
					
			<p>Simon heeft een auto gehuurd bij <em>Snel Weg</em> en moet bij terugkomst &euro;192,- betalen.
			Gebruik de grafiek om uit te zoeken hoeveel kilometer Simon gereden heeft.</p>
		
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord"><p>Antwoorden<img src="afbeeldingen/analyse_leerjaar_1/antw_autobedrijf.PNG" width="250px" class="rightfloat">
					<p>Zet je potlood bij 192 op de verticale as. Teken vandaar een horizontale lijn tot de lijn van <em>Snel Weg</em>. Teken vanaf die rode lijn een loodlijn omlaag naar de horizontale en lees daar het aantal kilometers af. Als je op de horizontale as kijkt, zie je 45 kilometer staan.</p>
				
			</div>
		</div>
	</p>
</div>

<!-- theorie C 
<div class="tekstblok theorie analyse">
	<h3>Theorie C Vergelijkingen</h3>
	<p>filpmpje met grafiek vergelijking oplossen</p>
</div>
-->
<!-- opdracht 12-->
<div class="tekstblok opdracht">
	<h3>Opdracht 12 Kanoën</h3>
	<p>Botenverhuurbedrijf  <em>De Waterrat</em> verhuurt kano’s. De huurprijs in euro’s bereken je met de formule <em>huurprijs</em> = 2,80 + 5 &times; <em>aantal uur</em>.
		<ol>
			<li>Bereken de huurprijs als je 3 uur een kano huurt bij <em>De Waterrat</em>.</li><br>
			Botenverhuurbedrijf <em>Kanotopper</em> verhuurt ook kano’s. Zij berekenen de huurprijs met de volgende formule <em>huurprijs</em> = 4 + 4,10 &times; <em>aantal uur</em>
			<li>Neem de tabel hieronder over en vul hem in.
				<table rules="all">
					<tr>
						<td>Aantal uur huren</td><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td>
					</tr>
			10e		<tr>
						<td>Huurprijs <em>De Waterrat</em></td>
					</tr>
					<tr>
						<td>Huurprijs <em>Kanotopper</em></td>
					</tr>
				</table>
				<!-- <img src="afbeeldingen/analyse_leerjaar_1/A2figuur11.png" width="500"> Je hoeft haast nooit een kano meer dan 4 uur te huren en 0 opnemen in je grafiek is toch wel fijn... --></li>
			<li>Teken de grafieken bij beide formules in één assenstelsel.</li>
			<br>
			Nienke huurt een kano bij <em>De Waterrat</em> en moet daarvoor &euro;10,30 betalen.
			<li>Gebruik de grafiek om uit te zoeken hoe lang Nienke de kano gehuurd heeft.</li>
			<li>Lees uit de grafiek af wanneer de huurprijzen gelijk zijn.</li>
			<br>
			Ruben is mentor van een brugklas en wil met zijn klas gaan kanoën. Hij wil bij <em>De Waterrat</em> of bij <em>Kanotopper</em> kano's huren.
			<li>Schrijf aan Ruben een briefje waarin je hem advies geeft over de twee kanoverhuurders. Je weet nog niet hoe lang hij gaat kanoën met zijn klas.</li>
		</ol>
		<!-- antwoorden uitklap -->	
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<p>Antwoord
					<ol>
						<li><em>huurprijs</em> = 2,80 + 5 &times; 3 = 2,80 + 15 = &euro;17,80.</li>
						<li><table rules="all">
							<tr>
								<td>Aantal uur huren</td><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td>
							</tr>
							<tr>
								<td>Huurprijs <em>De Waterrat</em></td><td>2,80</td><td>7,80</td><td>12,80</td><td>17,80</td><td>22,80</td>
							</tr>
							<tr>
								<td>Huurprijs <em>Kanotopper</em></td><td>4,00</td><td>8,10</td><td>12,20</td><td>16,30</td><td>20,40</td>
							</tr>
						</table></li>
						<img src="afbeeldingen/analyse_leerjaar_1/antw_kanoen.png" width="200px" class="rightfloat">
						<li>Zie de figuur hiernaast.</li>
						<li>Kijk op de verticale as bij &euro;10,30. Kijk welk punt op de grafiek daar bij hoort. Je ziet dan dat Nienke de kano anderhalf uur gehuurd heeft.</li>
						<li>Als je heel erg netjes getekend hebt en heel precies kan aflezen, dan is het antwoord 1 uur en 20 minuten.</li>
						<li>Hoi Ruben, als je met je leerlingen minder dan een uur gaat kanoen, kun je het beste naar <em>De Waterrat</em> gaan. Als je 2 uur of langer gaat kanoën, dan kun je beter bij <em>Kanotoppers</em> huren.</li>
					</ol>
				</p>
			</div>
		</div>
	</p>
</div>

<!-- opdracht 13 -->
<div class="tekstblok opdracht">
	<h3>Opdracht 13 </h3>
	<p>Twee kaarsen worden tegelijk aangestoken. De lengte van kaars <em>A</em> bereken je met de formule <nobr><em>lengte kaars A</em> = 18 - 2,25 &times; <em>aantal branduren</em></nobr>.</p>
	<p>De lengte van kaars <em>B</em> bereken je met de formule <nobr><em>lengte kaars B</em> = 24 - 4 &times; <em>aantal branduren</em></nobr>.</p>
	<p>De eenheid van <em>lengte kaars A</em> en <em>lengte kaars B</em> is centimeters.
		<ol>
			<li>Maak een tabel met aantal branduren op de eerste regel. Laat de branduren van 0 t/m 8 gaan en stapgrootte 1. Maak een tabel voor de kaarsen <em>A</em> en <em>B</em>.</li>
			<li>Teken de grafieken van bij de twee kaarsen in één assenstelsel.<br>
				<u>Let op</u>: Kijk goed hoe lang je verticale as moet worden en welke stapgrootte daar bij past.</li><br>
			<li>Hoe lang is kaars <em>A</em> als hij wordt aangestoken?<br>
				Geef het punt dat daarbij hoort de kleur groen in je grafiek.</li>
			<li>Zoek het punt dat hoort bij de lengte van kaars <em>A</em> na 1 uur branden. Kleur dat punt ook groen.</li>
			<li>Hoeveel centimeter wordt kaars <em>A</em> korter per uur branden?</li>
			<li>Hoe lang is kaars B als hij aangestoken wordt? Kleur het punt in de grafiek dat bij je antwoord hoort rood.</li>
			<li>Hoe lang is kaars <em>B</em> als hij 1 uur heeft gebrand? Kleur het punt dat daarbij hoort ook rood.</li>
			<li>Hoeveel centimeter wordt kaars <em>B</em> korter per uur?</li>
			<li>Na hoeveel uur branden zijn de kaarsen even lang?</li>
			<li>Hoe lang duurt het voordat kaars <em>B</em> helemaal is opgebrand?</li>
		</ol>
		<!-- antwoorden uitklap -->	
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord"><p>Antwoorden
				<ol>
					<li><table rules="all">
							<tr>
								<td>branduren</td><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
							<tr>
								<td>lengte kaars A</td><td>18</td><td>15,75</td><td>13,5</td><td>11,25</td><td>9</td><td>6,75</td><td>4,5</td><td>2,25</td><td>0</td></tr>
							<tr>
								<td>lengte kaars B</td><td>24</td><td>20</td><td>16</td><td>12</td><td>8</td><td>4</td><td>0</td><td>-4</td><td>-8</td></tr>
						</table>
						Een kaars kan geen negatieve lengte hebben, dus de punten (7, -4) en (8, -8) hoef je niet te tekenen!
					</li>
					<li><img src="afbeeldingen/analyse_leerjaar_1/antw_kaarsen.png" width="250px" class="rightfloat">Zie de figuur hiernaast.</li>
					<li>Kaars <em>A</em> is bij het aansteken 18 centimeter lang.</li>
					<li>(1; 15,75)</li>
					<li>Per branduur wordt kaars <em>A</em> 2,25 centimeter korter.</li>
					<li>Kaars <em>B</em> is bij aansteken 24 centimeter lang.</li>
					<li>(1, 20)</li>
					<li>Per branduur wordt kaars <em>B</em> 4 centimeter korter.</li>
					<li>Het snijpunt is ongeveer (3,4; 10,3), dus na ongeveer 3,4 uur zijn beide kaarsen 10,3 centimeter lang.</li>
					<li>(6, 0), dus 6 uur</li>
				</ol>
			</p>
			</div>
		</div>
	</p>
</div>

<!-- theorie D -->
<div class="tekstblok theorie analyse">
	<h3>Theorie D <em></em></h3>
	<p>Zoals je hebt gezien bij de opgave over de kaarsen wordt de grafiek bij een <b>lineaire formule</b> een rechte lijn. Een voorbeeld van een lineaire formule is <nobr><em>lengte kaars</em> = <em><b>startgetal</b></em> + <em><b>hellingsgetal</b></em> &times; <em>branduren</em></nobr>.</p>
	<p>Dit komt omdat de lengte van de kaars per uur met een zelfde hoeveelheid afneemt; er is een <b>gelijkmatige afname</b>. Deze afname noem je het hellingsgetal. De afname blijft steeds gelijk. Als er bij een formule sprake is van een gelijkmatige toename of afname dan wordt de grafiek die bij die formule hoort een rechte lijn.</p>
	<p>Bij het tekenen van een rechte lijn heb je aan twee punten genoeg om hem te tekenen, want een lijn is de kortste weg tussen twee punten (zie taak <a href="index2.php?p=meetkunde_bloem">Arabesk</a>).<br>
		Je hoeft dus maar een tabel met twee punten te maken om de grafiek te kunnen tekenen. Je mag natuurlijk meer punten opnemen in je tabel en in je grafiek.</p>	
</div>


<!-- opdracht 14-->
<div class="tekstblok opdracht analyse">
	<h3>Opdracht 14 Spons en Co.</h3>
	<p>Elly zoekt een schoonmaakbedrijf voor het Vathorst College en onderzoekt bedrijf <em>Spons en Co</em>. De kosten voor het schoonmaken van de school kun je berekenen met de formule<br>
		<em>schoonmaakkosten</em> = 50 + 25 &times; <em>aantal uur</em>.
		<ol>
			<li>Wat is het startgetal in deze formule?</li>
			<li><table rules="all" class="rightfloat">
					<tr>
						<td>Aantal uur</td><td>0</td><td>8</td>
					</tr>
					<tr>
						<td>Schoonmaakkosten</td>
					</tr>
				</table>
				<!-- <img src="afbeeldingen/analyse_leerjaar_1/A2figuur12.png" height class="rightfloat" /> -->
				Neem de tabel over en vul hem in.<br>
				Waarom is het handig om de tabel te laten beginnen bij aantal uur is nul?</li>
			<li>Teken de grafiek bij de formule.<br>
				Neem stappen van 1 uur en van 25 euro per hokje op je roosterpapier.</li>
			<li>Gebruik de grafiek om uit te zoeken hoeveel uur er schoongemaakt zou moeten worden als dat &euro;215,- kost.</li>
		</ol>
		<!-- antwoorden uitklap -->	
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<p>Antwoorden
					<ol>
						<li>Het startgetal is &euro;50,-.</li>
						<li><table rules="all" class="rightfloat">
								<tr>
									<td>Aantal uur</td><td>0</td><td>8</td></tr>
								<tr>
									<td>Schoonmaak kosten</td><td>50</td><td>250</td>
								</tr>
							</table>
							Zie de tabel hiernaast.<br>
							Het is handig om bij nul uren werk te beginnen, omdat je dan weet wat je minimaal moet betalen.</li>
						<li><img src="afbeeldingen/analyse_leerjaar_1/antw_spons.png" width="200px" class="rightfloat">Zie de figuur hiernaast.</li>
						<li>Kijk op de vertikale as waar &euro;215 staat en zoek het punt op de grafiek wat daarbij hoort. Het aantal uren werk dat hoort bij dat punt op de grafiek is iets meer dan 6,5 uur.</li>
					</ol>
				</p>
			</div>
		</div>
	</p>
</div>

<!-- opdracht 15 -->
<div class="tekstblok opdracht analyse">
	<h3>Opdracht 15 Het Propere Pluisje</h3>
	<p>Elly vergelijkt <em>Spons en Co.</em> met schoonmaakbedrijf  <em>Het Propere Pluisje</em>. Zij berekenen de kosten voor een schoonmaakklus met de volgende formule<br>
		<em>kosten</em> = 25 + 37,50 &times; <em>aantal uur</em>.</p>
	<ol>
		<li><img src="afbeeldingen/analyse_leerjaar_1/A2figuur13.png" height class="rightfloat"/>Neem de tabel over en vul hem in. </li>
		<li>Teken de grafiek die bij <em>Het Propere Pluisje</em> hoort in hetzelfde assenstelsel als <em>Spons en Co.</em>.</li>
		<li>Bij welk aantal uren schoonmaken zijn de bedrijven even duur?</li>
		<li>Welk bedrijf kan Elly het best inhuren om de hele school te laten schoonmaken: <em>Het Propere Pluisje</em>, of toch <em>Spons en Co.</em>?<br>
			Ligt je antwoord toe.</li>
	</ol>
	<!-- antwoorden uitklap -->	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>Antwoord bij <em>Het Propere Pluisje</em>
			<ol>
				<li><table>
						<tr>
							<td>Aantal uren</td><td>0</td><td>8</td></tr>
						<tr>
							<td>Schoonmaakkosten</td><td>25</td><td>325</td></tr>
					</table></li>
				<li><img src="afbeeldingen/analyse_leerjaar_1/antw_properepluis.png" width="200px" class="rightfloat">Zie de figuur hiernaast</li>
				<li>Het snijpunt van de twee grafieken betekent dat voor dat aantal uren de kosten bij beide bedrijven even hoog zijn: 2 uur.</li>
				<li>Aangezien het Vathorst College een behoorlijk groot gebouw is, zullen de schoonmakers wel meer dan twee uur bezig zijn met schoonmaken. Dan is <em>Spons en Co.</em> voordeliger.</li>
			</ol>
			</p>
		</div>
	</div>
</div>








<!-- Inleiding -->
<div class="tekstblok theorie analyse">
<img src="afbeeldingen/analyse_leerjaar_1/ik_love_formules.png" alt="ik_love_formules" width="150" height="" class="rightfloat"/>
<h3>Inleiding</h3>
<p>
	De afgelopen thema's heb je veel geleerd over formules:
</p>
	<ul>
		<li>Je hebt geleerd <b>regelmaat</b> te ontdekken in figuren;</li> 
		<li>Je hebt <b>woordformules</b> leren maken;</li>
		<li>Je hebt geleerd <b>formules</b> te makken vanuit een verhaaltje;</li>
		<li>Je hebt geleerd hoe je met behulp van <b>rekenpijlen</b> met formules rekent;</li>
		<li>En je hebt geleerd <b>grafieken</b> te tekenen en te interpreteren.</li>
	</ul>
<p>
	In deze taak wordt veel van deze voorkennis herhaald en ga je iets nieuws leren: hoe je vanuit een <b>tabel</b> of een <b>grafiek</b> een <b>formule</b> kunt opstellen.
</p>
</div>


</div>

</div>