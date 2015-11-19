<?php 
	//defineer titel
	$taaknaam ="Factoren en delers (hv)";
?>

<?php
	//Definieer sidebar
	$doorverwijzingen = array(
      '#inleiding' => 'Inleiding',
	  '#theorieA' => 'Deelbaar door 1, 2 of 3',
      '#theorieB' => 'Deelbaar door 4',
      '#theorieC' => 'Deelbaar door 5',
      '#theorieD' => 'Deelbaar door 6',
      '#theorieE' => 'Belangrijke delers',
      '#theorieF' => 'Vermenigvuldigen is herhaald optellen',
      '#theorieG' => 'Het product',
      '#theorieH' => 'Schrijven als product',
	  '#theorieI' => 'Schrijven als som',
	  '#theorieJ' => 'Hele tegels',
	  '#theorieK' => 'Ontbinden in factoren',
	  '#theorieL' => 'Tegengestelde bewerkingen',
	  '#theorieM' => 'Quotiënt, deeltal en deler',
      '#proeftoets' => 'Proeftoets');                                                      
?>


	<div class="row">
		<div class="col-md-8">

			
		</div>
		<div class="col-md-4">

		</div>
	</div>

<title>Leerjaar 1 | <?php echo $taaknaam; ?></title>

<div class="taakinhoud">

<div class="tekstblok theorie vaardigheden" id="inleiding">
	<h3>Inleiding</h3>
	<p>
		Een getal is <b>deelbaar</b> door een ander getal als er een heel getal uitkomt.
	</p>
	<p>
		<u>Voorbeeld</u>:<br>
		12 is deelbaar door 3, het antwoord is 4. Een mooi heel getal.<br>
		12 is niet deelbaar door 5, want hier is het antwoord 2,4. Geen mooi heel getal.
	</p>
	<p>
		In wiskundetaal zegt men dat een getal is een deler van het deeltal is als het quotiënt een heel getal is.	
	</p>
</div>
	
<div class="tekstblok opdracht" id="1">
	<h3>Opdracht 1</h3>
	<p>
		Door welke getallen is 12 deelbaar?
	</p>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				12 is deelbaar door 1, 2, 3, 4, 6 en 12<br>
				De delers 1 en 12 zijn wat flauw, maar niet onbelangrijk.
			</p>
		</div>
	</div>
</div>
	
<div class="tekstblok theorie vaardigheden" id="theorieA">
	<h3>Theorie A Deelbaar door 1, 2 of 3</h3>
	<div class="row">
		<div class="col-md-9">
			<p>
				Zonder rekenmachine kun je bij een betrekkelijk klein getal snel vaststellen of het wel of niet deelbaar is door een ander getal. Maar hoe zit dat bij een heel groot getal ?
			</p>
			<p>
				Om dat snel en zonder rekenmachine aan de weet te komen bestaan er een paar aardige eigenschappen van deelbaarheid. Sommige zijn zeer voor de hand liggend, andere weer zeer verrassend.
			</p>	
			<p>
				<u>Deelbaar door 1</u>:
			</p>
			<p>
				Alle getallen zijn deelbaar door 1.
			</p>	
			<p>
				Deze eigenschap lijkt onbelangrijk, maar blijkt later goed van pas te komen, bijvoorbeeld bij berekeningen in verhoudingstabellen.
			</p>	
			<p>
				<u>Deelbaar door 2</u>:
			</p>
			<p>
				Alle even getallen zijn deelbaar door 2.
			</p>
			<p>
				Even getallen zijn: 2, 4, 6, 8, et cetera.
			</p>
			<p>
				<u>Deelbaar door 3</u>:
			</p>
			<p>
				Een getal is deelbaar door 3 als de som van de cijfers van het getal deelbaar is door 3.
			</p>	
			<p>
				Dit is een handige! Neem bijvoorbeeld het getal 258.<br>
				Je ziet niet meteen of het deelbaar is door 3, maar als je de som van de cijfers neemt, dan zie je het wel.
			</p>
			<p>
				2 + 5 + 8 = 15
			</p>
			<p>
				En 15 is deelbaar door 3, dus 258 ook.
			</p>
		</div>
		<div class="col-md-3">
			<img src="afbeeldingen/vaardigheden_leerjaar_1/cijfer_1.png" alt="cijfer_1"/>
			<img src="afbeeldingen/vaardigheden_leerjaar_1/cijfer_2.png" alt="cijfer_2" />
			<img src="afbeeldingen/vaardigheden_leerjaar_1/cijfer_3.png" alt="cijfer_3"/>
		</div>
	</div>

</div>
	
<div class="tekstblok opdracht" id="2">
	<h3>Opdracht 2</h3>
	<p>
		Controleer of 258 deelbaar is door 3.
	</p>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				258 : 3 = 86
			</p>
		</div>
	</div>
</div>
	
<div class="tekstblok opdracht" id="3">
	<h3>Opdracht 3</h3>
	<p>
		Bepaal van de volgende getallen of ze deelbaar zijn door 2, door 3, door beide of door geen van beide.
	</p>
	<ol>
		<li>162</li>
		<li>245</li>
		<li>4136</li>	
		<li>5740</li>
		<li>53427152</li>
		<li>223463598</li>
		<li>16416</li>
		<li>279072</li>
		<li>3333312</li>
		<li>266664961</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>162 is deelbaar door 2, want even <br>
				én deelbaar door 3 want 1 + 6 + 2 = 9.</li>
				<li>245 niet deelbaar door 2, want oneven <br>
				en ook niet deelbaar door 3 want 2 + 4 + 5 = 11.</li>
				<li>4136 is deelbaar door 2, want even, <br>
				maar niet deelbaar door 3 want 4 + 1 + 3 + 6 = 14.</li>	
				<li>5740 is deelbaar door 2, want even, <br>
				maar niet deelbaar door 3 want 5 + 7 + 4 is 16.</li>
				<li>53427152 is deelbaar door 2, want even, <br>
				maar niet deelbaar door 3 want 5 + 3 + 4 + 2 + 7 + 1 + 5 + 2 = 28.</li>
				<li>223463598 is deelbaar door 2, want even, <br>
				én deelbaar door 3 want 2 + 2 + 3 + 4 + 6 + 3 + 5 + 9 + 8 = 42.</li>
				<li>16416 is deelbaar door 2, want even, <br>
				én deelbaar door 3 want 1 + 6 + 4 + 1 + 6 = 18.</li>
				<li>279072 is deelbaar door 2, want even, <br>
				én deelbaar door 3 want 2 + 7 + 9 + 7 + 2 = 27.</li>
				<li>3333312 is deelbaar door 2, want even, <br>
				én deelbaar door 3 want 3 + 3 + 3 + 3 + 3 + 1 + 2 = 18.</li>
				<li>266664961, is niet deelbaar door 2 want oneven, <br>
				maar niet deelbaar door 3 want 2 + 6 + 6 + 6 + 6 + 4 + 9 + 6 + 1 = 46.</li>
			</ol>
		</div>
	</div>			
</div>

<div class="tekstblok opdracht" id="4">
	<h3>Opdracht 4 (havo/vwo)</h3>
	<p>
		Maak van alle getallen uit opdracht 3 die niet deelbaar zijn door 2 ...
	</p>
	<ol>
		<li>
			 ... een zo klein mogelijk getal door maar één cijfer te veranderen.
		</li>
		<li>
			... een zo groot mogelijk getal door maar één cijfer te veranderen.
		</li>
		<li>
			Doe hetzelfde voor de getallen die niet deelbaar zijn door 3.
		</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>245 wordt dan 145 en 266664961 wordt dan 166664961</li>
				<li>245 wordt dan 945 en 266664961 wordt dan 966664961</li>
				<li>#</li>	
				<li>#</li>
			</ol>
		</div>
	</div>			
</div>
	
<div class="tekstblok theorie vaardigheden" id="theorieB">
	<h3>Theorie B Deelbaar door 4</h3>	
	<div class="row">
		<div class="col-md-8">
			<p>
				Een getal is deelbaar door 4 als het getal gevormd door de laatste twee cijfers deelbaar is door 4.
			</p>
			<p>
				<u>Voorbeeld</u>:<br>
				Is het getal 45624 deelbaar door 4?
			</p>
			<p>
				De laatste twee cijfers vormen het getal 24.<br>
				24 : 4 = 6
			</p>
			<p>
				24 is deelbaar door 4, dus 45624 is deelbaar door 4.
			</p>
			<p>
				Controle:<br>
				45624 : 4 = 11406
			</p>				
		</div>
		<div class="col-md-4">
			<img src="afbeeldingen/vaardigheden_leerjaar_1/cijfer_4.png" alt="cijfer_4" />	
		</div>
	</div>
	
</div>

<div class="tekstblok opdracht" id"5">
	<h3>Opdracht 5</h3>
	<p>
		Bepaal of de volgende getallen deelbaar zijn door 4.
	</p>
	<ol>
		<li>40808</li>
		<li>55117</li>
		<li>44411</li>
		<li>50540</li>
	</ol>
 
	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>40808 is deelbaar door 4</li>
					<li>55117 is niet deelbaar door 4</li>
					<li>44411 is niet deelbaar door 4</li>
					<li>50540 is deelbaar door 4</li>
				</ol>
			</div>
		</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieC">
	<h3>Theorie C Deelbaar door 5</h3>
	<div class="row">
		<div class="col-md-8">
			<p>
				Een getal is deelbaar door 5 als het getal eindigt met een 0 of een 5.
			</p>
			<p>
				<u>Voorbeeld</u>:<br>
				Is 62576120 deelbaar door 5?
			</p>
			<p>
				Ja, want het getal eindigt op een 0.<br>
				62576120 : 5 = 12515224
			</p>	
		</div>
		<div class="col-md-4">
			<img src="afbeeldingen/vaardigheden_leerjaar_1/cijfer_5.png" alt="cijfer_5" />
		</div>
	</div>
	

</div>

<div class="tekstblok opdracht" id="6">
	<h3>Opdracht 6</h3>
	<p>
		Bepaal of de volgende getallen deelbaar zijn door 5.
	</p>
	<ol>
		<li>49875</li>
		<li>55111</li>
		<li>12346</li>
		<li>50505</li>
	</ol> 
	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>49875 is deelbaar door 5</li>
					<li>55111 is niet deelbaar door 5</li>
					<li>12346 is niet deelbaar door 5</li>
					<li>50505 is deelbaar door 5</li>
				</ol>
			</div>
		</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieD">
	<h3>Theorie D Deelbaar door 6</h3>
	<div class="row">
		<div class="col-md-8">
			<p>
				Een getal is deelbaar door 6 als het getal <b>én</b> door 2 <b>én</b> door 3 deelbaar is.
			</p>	
			<p>
				<u>Voorbeeld</u>:<br>
				Is 47370 deelbaar door 6?
			</p>
			<p>
				47370 is even, dus deelbaar door 2.
			</p>
			<p>
				4 + 7 + 3 + 7 + 0 = 21<br>
				21 is deelbaar door 3, dus 47370 is deelbaar door 3.
			</p>
			<p>
				47370 is deelbaar door 2 én door 3, dus 47370 is deelbaar door 6.
			</p>
			<p>
				Controle:<br>
				47370 : 6 = 7895
			</p>
		</div>
		<div class="col-md-4">
			<img src="afbeeldingen/vaardigheden_leerjaar_1/cijfer_6.png" alt="cijfer_6"  />
		</div>
	</div>
</div>		
	
<div class="tekstblok opdracht" id="7">
	<h3>Opdracht 7</h3>
	<p>
		Bepaal of de volgende getallen deelbaar zijn door 6.
	</p>
	<ol>
		<li>16416</li>
		<li>279072</li>
		<li>33312</li>
		<li>4136</li>
	</ol>

	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>16416 is deelbaar door 6</li>
					<li>279072 is deelbaar door 6</li>
					<li>33312 is deelbaar door 6</li>
					<li>4136 is niet deelbaar door 6</li>
				</ol>
			</div>
		</div>
</div>	

<div class="tekstblok theorie vaardigheden" id="theorieE">
	<h3>Theorie E Belangrijke delers</h3>
	<div class="row">
		<div class="col-md-9">
			<p>
				De belangrijkste delers zijn die van 1 t/m 13, andere delers zijn niet echt nuttig om te weten.
			</p>
			<p>
				Je kunt controleren of een getal deelbaar is door de priemgetallen 7, 11 of 13. Maar de regels daarvoor zijn complex en dan is het handiger en sneller om een staartdeling uit te voeren.<br>
				Blijven dus de getallen 8, 9, 10 en 12 over.
			</p>
			<p>
				Deelbaar door:
					<ul>
					 	<li>
					 		8 als het getal gevormd door de laatste drie cijfers deelbaar is door 8;
					 	</li>
					 	<li>
					 		9 als de som van de cijfers deelbaar is door 9;
					 	</li>
					 	<li>
					 		10 als het getal even is én deelbaar door 5;
					 	</li>
					 	<li>
					 		12 als het getal deelbaar is door 4 én door 3.
					 	</li>
					</ul>
			</p>
			<p>
				De regels voor deelbaarheid door 10 en 12 zijn vergelijkbaar met die voor 6. Blijkbaar kunnen we 'deelbaarheid' combineren. 		
			</p>	
		</div>
		<div class="col-md-2">
			<img src="afbeeldingen/vaardigheden_leerjaar_1/cijfers.png" alt="cijfers_7,8,9,10,11,12,13" width="120" height="" class="rightfloat" />
		</div>
	</div>	
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 8</h3>
	<p>Bedenk hoe je kunt controleren of een getal deelbaar is door:</p>
	<ol>
		<li>15</li>
		<li>18</li>
		<li>24</li>
		<li>50</li>
	</ol>

	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<h3>Antwoorden</h3>
				<ol>
					<li>Deelbaar door 15, als deelbaar door 3 én 5.</li>
					<li>Deelbaar door 18, als deelbaar door 2 én 9.</li>
					<li>Deelbaar door 24, als deelbaar door 2 én door 12 of 4 én 6 of 3 én 8.</li>
					<li>Deelbaar door 50, als deelbaar door 5 én 10.</li>
				</ol>
			</div>
		</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 9 @</h3>
	<p>Oefen met deelbaarheid met het volgende spel: <a href="http://www.fisme.science.uu.nl/toepassingen/00022/toepassing_rekenweb.html" target="_blank"><em>Kraak de kluis</em></a>.</p>
	<p>
			Het kan zijn dat het spel wordt geblokkeerd wegens Java-instellingen. Het is mogelijk dit te regelen. Als het je lukt: extra goed van je. Lukt het niet, ga gewoon door met de rest van de taak of probeer het spel op de laptop van een ander.
	</p>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 10</h3>
	<p>
		Bepaal van de volgende getallen of ze deelbaar zijn door 8, 9, 10 en/of 12.
	</p>
	<ol>
		<li>300</li>
		<li>864</li>
		<li>10800</li>
	</ol>

	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<h3>Antwoorden</h3>
				<ol>
					<li>
						300 is deelbaar door 10 en 12.
					</li>
					<li>
						864 is deelbaar door 8, 9 en 12
					</li>
					<li>
						10800 is deelbaar door 8, 9, 10 en 12.
					</li>
				</ol>
			</div>
		</div>	
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 11</h3>
	<ol>
		<li>Bedenk een getal dat deelbaar is door zowel 3, 5, 7 als 12.</li>
		<li>Bedenk een getal dat deelbaar is door zowel 2, 6, 8 als 9.</li>
		<li>Bedenk een getal dat deelbaar is door zowel 3, 13 als 17.</li>
	</ol>

	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<h3>Uitwerkingen</h3>
				<ol>
					<li>
						3 × 5 × 7 × 12 = 1260
					</li>
					<li>
						2 × 6 × 8 × 9 = 864	
					</li>
					<li>
						3 × 13 × 17 = 663
					</li>
				</ol>
			</div>
		</div>	
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 12</h3>
	<p>Bereken zonder hulpmiddelen de som van de volgende getallen</p>
	<ol>
		<li>2 + 2 + 2 + 2 + 2 + 2 =</li>
		<li>7 + 7 + 7 + 7 =</li>
		<li>45 + 45 + 45 + 45 + 45 + 45 + 45 + 45 + 45 + 45 =</li>
	</ol>

	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<h3>Uitwerkingen</h3>
				<ol>
					<li>2 + 2 + 2 + 2 + 2 + 2 = 12</li>
					<li>7 + 7 + 7 + 7 = 28</li>
					<li>45 + 45 + 45 + 45 + 45 + 45 + 45 + 45 + 45 + 45 = 450</li>
				</ol>
			</div>
		</div>
</div>
 
<div class="tekstblok theorie vaardigheden" id="theorieF">
	<h3>Theorie F Vermenigvuldigen is herhaald optellen</h3>
	<p><b>Vermenigvuldigen</b> is een slimme en snelle manier van optellen.<br> 
		Maak maar eens de volgende som:</p>
	<p>3 + 3 + 3 + 3 =</p>
	<p>Hier staat eigenlijk 4 maal 3. Dat is een stuk sneller dan al die drieën bij elkaar optellen.</p>
	<p>3 + 3 + 3 + 3 = 4 × 3 = 12</p>
	<p>Zo zie je: vermenigvuldigen is herhaald optellen.</p>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 13</h3>
	<p>Hoe had je de sommen van opdracht 12 snel kunnen uitrekenen? Laat je berekeningen zien.</p>		
</div>

<div class="tekstblok theorie vaardigheden" id="theorieG">
	<h3>Theorie G Het product</h3>
	<p>Een ander woord voor vermenigvuldiging is <b>product</b>.<br>
		Het product van 3 en 4 is 12, want 3 × 4 = 12.<br>
		3 en 4 zijn de <b>factoren</b> van dit product.</p>
	<p><u>Voorbeeld</u>:</p>
	<p>Het product van 3 en 7 is 21, want 3 × 7 = 21.</p>	
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 14</h3>
	<p>Neem over en vul in, zoals het bij voorbeeld hierboven.</p>
	<ol>
		<li>Het product van 3 en 7 is ... , want ... × ... = ... .</li>
		<li>Het product van 5 en 9 is ... , want ... × ... = ... .</li>
		<li>Het product van 7 en 8 is ... , want ... × ... = ... .</li>
	</ol>
 
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<h3>Uitwerkingen</h3>
			<ol>
				<li>Het product van 3 en 7 is 21, want 3 × 7 = 21.</li>
				<li>Het product van 5 en 9 is 45, want 5 × 9 = 45.</li>
				<li>Het product van 7 en 8 is 56, want 7 × 8 = 56.</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieH">
	<h3>Theorie H Schrijven als product</h3>
	<p>
		Als je een steeds hetzelfde getal optelt, kun je beter vermenigvuldigen. <br>
		"6 + 6 + 6" kun je herschrijven als het <b>product van twee factoren</b>: 3 en 6.
	</p>
	<p><u>Voorbeeld</u>:</p>
	<p>Schrijf de som als product van twee factoren en geef antwoord.<br>
		6 + 6 + 6 = 3 × 6 = 18</p>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 15</h3>
	<p>Schrijf de som als product van twee factoren en geef antwoord.</p>
	<ol>
		<li>5 + 5 + 5 + 5 =</li>
		<li>9 + 9 + 9 =</li>
		<li>1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 =</li>
		<li>0 + 0 =	</li>
	</ol>
 
	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<h3>Uitwerkingen</h3>
				<ol>
					<li>5 + 5 + 5 + 5 = 4 × 5 = 20</li>
					<li>9 + 9 + 9 = 3 × 9 = 27</li>
					<li>1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 = 8 × 1 = 8</li>
					<li>0 + 0 =	2 × 0 = 0</li>
				</ol>
			</div>
		</div>	
</div>

<div class="tekstblok theorie vaardigheden" id="theorieI">
	<h3>Theorie I Schrijven als som</h3>
	<p>Andersom kun je een product van twee factoren ook als som herschrijven.</p>
	<p><u>Voorbeeld</u>:</p>
	<p>Schrijf het product als som van termen en geef antwoord.<br>
		7 × 4 = 4 + 4 + 4 + 4 + 4 + 4 + 4 = 28</p>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 16</h3>
	<p>Schrijf als som en geef antwoord.</p>
	<ol>
		<li>3 × 9 =</li>
		<li>4 × 13 =</li>
		<li>5 × 41 =</li>
		<li>0 × 10 =</li>
	</ol>
 
 	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<h3>Uitwerkingen</h3>
				<ol>
					<li>3 × 9 = 9 + 9 + 9 = 27</li>
					<li>4 × 13 = 13 + 13 + 13 + 13 = 52</li>
					<li>5 × 41 = 41 + 41 + 41 + 41 + 41 = 205</li>
					<li>0 × 10 = 0</li>
				</ol>
			</div>
		</div>	
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 17</h3>
	<p>
		Leg uit wat vermenigvuldigen met optellen te maken heeft. Verwerk de volgende begrippen in je uitleg som, product, termen en factoren. Maak gebruik van voorbeelden.
	</p>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieJ">
	<h3>Theorie J Hele tegels</h3>
	<img src="afbeeldingen/vaardigheden_leerjaar_1/theorie_a_tegels_in_tuin.png" alt="theorie_a_tegels_in_tuin" class="rightfloat" width="200px" height="" />
	
	<p>
		Jan wil zijn terras betegelen met mooie  vierkante tegels. Hij heeft gezien dat er precies 4 rijen van 15 tegels nodig zijn.</p>
	<p>
		Jan maakt een <b>schaaltekening</b> van zijn terras, met de <b>afmetingen</b> in hele tegels, 4 bij 15. Zo ziet hij hoeveel tegels hij nodig heeft. Met 60 tegels kan hij zijn terras bedekken. 
	</p>
	<img src="afbeeldingen/vaardigheden_leerjaar_1/theorie_a_raster_4_bij_15.png" alt="theorie_a_raster_4_bij_15" width="90%" height="" />	
</div>
	
<div class="tekstblok opdracht">
	<h3>Opdracht 18</h3>
	<p>
	Hoe heeft Jan berekend dat hij 60 tegels nodig heeft? Laat een mogelijke berekening zien.
	</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<h3>Uitwerkingen</h3>
			<p>Jan heeft het product van 4 en 15 genomen.<br>4 × 15 = 60</p>
		</div>
	</div>
</div>
	
<div class="tekstblok opdracht">
	<h3>Opdracht 19</h3>
	<p>
	De buurvrouw heeft bij Jan gezien hoe mooi het is en wil ook graag dezelfde tegels op haar terras. In haar terras passen 6 rijen van 9 tegels. <br>
	Maak net zo'n tekening als Jan heeft gemaakt en bereken hoeveel tegels zij nodig heeft? Schrijf je berekening op.
	</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<h3>Uitwerkingen</h3>			
			<p>
				6 × 9 = 54<br>
				Zij heeft 54 tegels nodig.
			</p>
		</div>
	</div>
</div>
	
<div class="tekstblok opdracht">
	<h3>Opdracht 20</h3>
	<p>
	Hoeveel tegels heb je nodig voor een terras met 18 rijen van 26 tegels? Maak je berekening met de hand en schrijf je deze op, denk aan kolomsgewijs rekenen.
	</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<h3>Uitwerkingen</h3>
			<p>
				18 × 26 = 468<br>
				Voor een terras van 18 bij 26 tegels zijn 468 tegels nodig.
			</p>
		</div>
	</div>
</div>
	
<div class="tekstblok opdracht">
	<h3>Opdracht 21</h3>
	<p>
		In de rechthoeken hieronder zie je allemaal gelijke vierkantjes. Bepaal de afmetingen van de rechthoeken en bereken daarmee uit hoeveel vierkantjes elke rechthoek bestaat.
	</p>			
	<img src="afbeeldingen/vaardigheden_leerjaar_1/opdracht_4.png" alt="opdracht_4" width="90%" height="" />
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<h3>Uitwerkingen</h3>				
			<p>
				Groot naar klein:<br>
				6 × 8 = 48 tegels<br>
				4 × 11 = 44 tegels<br>
				3 × 6 = 18 tegels<br>
				3 × 4 = 12 tegels
			</p>
		</div>
	</div>
</div>
		
<div class="tekstblok opdracht">
	<h3>Opdracht 22</h3>
	<p>
		Teken zoveel mogelijk verschillende rechthoeken waar 12 vierkantjes in passen.
	</p>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<h3>Uitwerkingen</h3>
			<table>
				<tr>
					<td>
						2 × 6 of 6 × 2<br>
						3 × 4 of 4 × 3<br>
						1 × 12 of 12 × 1<br>
					</td>
					<td>
						<img src="afbeeldingen/vaardigheden_leerjaar_1/uitwerkingen_5.png" alt="uitwerkingen_5" width="200" height="" class="floatright" />
					</td>
				</tr>
				<tr>
					<td>Waarom teken ik maar drie in plaats van zes rechthoeken?</td>
				</tr>
				<tr>
					<td>
					<div class="hider">
						<div class="showhide">&rarr;</div>
						<div class="antwoord">Omdat de rechthoek van 2 bij 6 wiskundig gelijk is aan die van 6 bij 2. En dat geldt ook voor de andere combi's.</div>
					</div>
					</td>
				</tr>
			</table>					
		</div>
	</div>
</div>				

<div class="tekstblok opdracht">
	<h3>Opdracht 23</h3>		
	<p>
		Vijf rechthoeken bestaan steeds uit 36 vierkantjes, wat kunnen de afmetingen van deze rechthoeken zijn? In het schema hieronder staat steeds één van de zijdes gegeven, neem het schema over en vul het verder in.
	</p>
		<img src="afbeeldingen/vaardigheden_leerjaar_1/opdracht_6.png" alt="opdracht_6" width="60%" height="" />
		<div class="hider">
		<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<h3>Uitwerkingen</h3>			
				<img src="afbeeldingen/vaardigheden_leerjaar_1/uitwerkingen_6.png" alt="uitwerkingen_6" width="60%" height="" />
			</div>
		</div>
</div>
					
<div class="tekstblok theorie vaardigheden" id="theorieK">
	<h3>Theorie K Ontbinden in factoren</h3>
	<p>
		36 is het product van 3 en 12.<br>
		3 en 12 zijn de <b>factoren</b> van dit product.
	</p>
	<p>
		In opdracht 6 heb je gezien dat het product 36 in meerdere combinaties van factoren kan worden gesplitst. Bij het splitsen van producten in factoren gebruiken we alleen <b>gehele</b> getallen. Het splitsen in factoren noemen we <b>ontbinden in factoren</b>.
	</p>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 24</h3>
	<p>Neem over en vul de ontbrekende factoren in.</p>
	<ol>
		<li>20 = 4 × …</li>
		<li>18 = … × 3 </li>
		<li>72 = 8 × …</li>
		<li>100 = … × 5</li>
		<li>Welke andere combinaties van factoren zijn er mogelijk? Gebruik alleen gehele getallen.</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<h3>Uitwerkingen</h3>			
			<ol>
				<li>20 = 4 × 5</li>
				<li>18 = 6 × 3 </li>
				<li>72 = 8 × 9</li>
				<li>100 = 20 × 5</li>
			</ol>
			<p>Anders combinaties zijn:</p>
			<ol>
				<li>20 = 1 × 20 = 2 × 10 (en/of andersom)</li>
				<li>18 = 1 × 18 = 2 × 9 (en/of andersom)</li>
				<li>72 = 1 × 72 = 2 × 36 = 3 × 24 = 4 × 18 = 6 × 12 (en/of andersom)</li>
				<li>100 = 1 × 100 = 2 × 50 = 4 × 25 (en/of andersom)</li>
			</ol>					
		</div>
	</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 25</h3>
	<ol>
			<li>Hoeveel rechthoeken kun je maken met 25 vierkantjes?</li>
			<li>Hoeveel met 24 vierkantjes? </li>
			<li>En hoeveel met 23 vierkantjes?</li>
		</ol>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<h3>Uitwerkingen</h3>				
				<ol>
					<li>Met 25 vierkantjes kun je twee verschillende rechthoeken maken: 1 bij 25 en 5 bij 5.</li>
					<li>Met 24 vierkantjes kun je vier verschillende rechthoeken maken: 1 bij 24; 2 bij 12; 3 bij 8 en 4 bij 6.</li>
					<li>Met 23 vierkantjes kun je maar één rechthoek maken: die van 1 bij 23.</li>
				</ol>
				<p>
					Merk op dat we in de wiskunde een rechthoek van 4 bij 6 gelijk vinden aan die van 6 bij 4. We tellen deze dus maar één maal mee in deze opdracht.
				</p>	
			</div>
		</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 26</h3>
	<p>Hoewel 25, 24 en 23 erg dicht bij elkaar liggen, zijn het toch heel verschillende getallen. Leg uit waarin die getallen van elkaar verschillen.</p>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<h3>Uitwerkingen</h3>
			<p>
				23 is alleen te ontbinden in 1 en 23, de andere twee getallen kun je in meer factoren ontbinden.
			</p>
		</div>
	</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieL">
	<h3>Theorie L Tegengestelde bewerkingen</h3>
	<p>
		Net als optellen en aftrekken zijn delen en vermenigvuldigen elkaars <b>tegengestelde</b> bewerking.
	</p>
	<p>
		<u>Voorbeelden</u><br>
		6 : 2 = 3, want 3 × 2 = 6<br>
		14 : 7 = 2, want 2 × 7 = 14<br>
		36 : 12 = 3, want 3 × 12 = 36<br>
	</p>
</div>
			
<div class="tekstblok opdracht">
	<h3>Opdracht 27</h3>
	<p>
		Neem over, bereken en geef het bijbehorende product, zoals in de voorbeelden hierboven.</p>
	<ol>
		<li>26 : 2 = … , want … × … = …</li>
		<li>48 : 6 = … , want … × … = …</li>
		<li>121 : 11 = … , want … × … = …</li>
		<li>56 : 7 =  … , want … × … = …</li>
		<li>39 : 3 = … , want … × … = …</li>
		<li>45 : 9 = … , want … × … = …</li>
		<li>45 : 15 = … , want … × … = …</li>
		<li>63 : 7 = … , want … × … = …</li>
		<li>84 : 21 = … , want … × … = …</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<h3>Uitwerkingen</h3>			
			<ol>
				<li>26 : 2 = 13, want 13 × 2 = 26</li>
				<li>48 : 6 = 8, want 8 × 6 = 48</li>
				<li>121 : 11 = 11, want 11 × 11 = 121</li>
				<li>56 : 7 = 8, want 8 × 7 = 56</li>
				<li>39 : 3 = 13, want 13 × 3 = 39</li>
				<li>45 : 9 = 5, want 9 × 5 = 45</li>
				<li>45 : 15 = 3, want 3 × 15 = 45</li>
				<li>63 : 7 = 9, want 9 × 7 = 63</li>
				<li>84 : 21 = 4, want 4 × 21 = 84</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok theorie vaardigheden" id="theorieM">
	<h3>Theorie M Quotiënt, deeltal en deler</h3>
	<img src="afbeeldingen/vaardigheden_leerjaar_1/theorie_e_deler_en_deeltal.jpg" alt="theorie_e_deler_en_deeltal" width="250" height="" class="rightfloat" />
	<p>
		Als een <b>deling</b> op gaat, is de rest nul.
	</p>
	<p>
		Een ander woord voor deling is <b>quotiënt</b>. Het quotiënt van 30 en 6 is 5, want 30 : 6 = 5. Omdat er <b>geen rest</b> overblijft, noemen we 6 een <b>deler</b> van 30.<br>
		5 is trouwens ook een deler van 30, want <nobr>30 : 5 = 6.</nobr> Het getal 30 is in deze opgave het <b>deeltal</b>.
	</p>
	<p>
		30 kun je ontbinden in de factoren 5 en 6, want 5 × 6 = 30
	</p>
	<p>
		Kortom: 5 en 6 zijn zowel de delers als de factoren van 30. Factoren en delers zijn in dit verband gelijk.
	</p>
	<p>
		Nog een voorbeeld<br>
		39 : 3 = 13, dus 3 is een deler van 39.<br>
		39 : 13 = 3, dus 13 is ook een deler van 39.
	</p>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 28</h3>
	<ol>
		<li>Geef alle mogelijke delers van 54.</li>
		<li>Geef alle mogelijk delers van 78.</li>
		<li>Welke delers hebben 54 en 78 gemeen?</li>
		<li>Wat is de grootste deler waar je 54 én 78 door kunt delen?</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<h3>Uitwerkingen</h3>				
			<ol>
				<li>54 is deelbaar door: 2, 3, 6, 9, 18, 27.</li>
				<li>78 is deelbaar door: 2, 3, 6, 13, 26 en 39.</li>
				<li>54 en 78 hebben de volgende gemene delers: 2, 3 en 6.</li>
				<li>De grootste gemene deler van 54 en 78 is 6.</li>
			</ol>
		</div>
	</div>
</div>
		
</div>

