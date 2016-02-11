<?php 
	//defineer titel
	$taaknaam ="Kwadratische verbanden";
?>

<?php
	//Definieer sidebar
	$doorverwijzingen = array(
      '#inleiding' => 'Inleiding',
	  '#theorieA' => 'Het tweede verschil',
      '#theorieB' => 'Formules met kwadraten',
      '#theorieC' => 'Parabolen',
      '#theorieD' => 'Werkschema parabool',
      '#theorieE' => 'Formule kwadratisch verband',
      '#theorieF' => 'Coördinaten top (uitdaging)',      
      '#theorieG' => 'Werkschema parabool (uitdaging)',
      '#proeftoets' => 'Proeftoets');                                                      
?>

<title>Leerjaar 2 | <?php echo $taaknaam; ?></title>
	
<div class="taakinhoud">

<div class="tekstblok theorie analyse" id="inleiding">
	<h3>Inleiding</h3>
	<div class="row">
		<div class="col-md-8">
			<p>
				In voorgaande analyse blokken hebben jullie geleerd over <b>lineaire verbanden</b>. De grafiek bij een lineaire formule is een rechte lijn.<br>
				Als je een tabel maakt, kun je makkelijk <span id="hellingsgetal">hellingsgetal</span> en <span id="startgetal">startgetal</span> aflezen en zo de grafiek tekenen.
			</p>
			<p>
				Hieronder de tabel bij de formule: `B = 2w + 5`
				<div class="table-responsive verhouding">
		<table class="verhouding">
			<thead>
				<tr>
					<th colspan="2"></th>
					<th colspan="2">+ 1<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
					<th colspan="2">+ 1<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
					<th colspan="2">+ 1<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
					<th colspan="2">+ 1<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
					<th colspan="2">+ 1<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr class="borderbottom">
					<td><em>w</em></td>
					<td colspan="2">0</td>
					<td colspan="2">1</td>
					<td colspan="2">2</td>
					<td colspan="2">3</td>
					<td colspan="2">4</td>
					<td colspan="2">5</td>
				</tr>
				<tr>
					<td><em>B</em></td>
					<td colspan="2"><span id="startgetal">5</span></td></td>
					<td colspan="2">7</td>
					<td colspan="2">9</td>
					<td colspan="2">11</td>
					<td colspan="2">13</td>
					<td colspan="2">15</td>
				</tr>			
			</tbody>
			<tfoot>
				<tr >
					<th colspan="2"></th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>	
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
					<th></th>
				</tr>
			</tfoot>	
		</table>
	</div>
	</p>		
		</div>
		<div class="col-xs-4">
			<img class="img-responsive" src="../afbeeldingen/analyse_leerjaar_2/lineair_verband.png" alt="lineair_verband" width="" height="" />
		</div>
	
	</div>
		<div class="row">
		<div class="col-md-8">
			<p>
				Deze taak gaat over <b>kwadratische verbanden</b>. In een formule bij een kwadratisch verband staat altijd een <b>kwadraat</b>, vandaar de naam. Een voorbeeld van een kwadratische verband is de formule:
			</p>
			<p>
				`y = x^2 -6x + 10`
			</p>	
			<p>
				De grafiek bij een kwadratisch verband is een <b>parabool</b>. Zoals je in de afbeelding hiernaast ziet, is een parabool mooi <b>symmetrisch</b>. Ook kun je een  <span id="startgetal"><em>Top</em></span> aanwijzen, die precies op de <b>symmetrie-as</b> ligt.<br>
				
			</p>
						
		</div>
		<div class="col-md-4">
			<img src="../afbeeldingen/analyse_leerjaar_2/inleiding_parabool.png" alt="inleiding_parabool" width="" height="" />
		
		</div>
	</div>
	<p>
		In de tabel van een kwadratische formule kun je geen start- en hellingsgetal aflezen. Wel gaan we in die tabel andere opvallende eigenschappen ontdekken. Voor het tekenen van de parabool heb je minstens zeven punten nodig. Hieronder de tabel bij `y = x^2 -6x + 10`
	</p>
		<div class="table-responsive verhouding">
			<table class="verhouding">
				<tbody>
					<tr class="borderbottom">
						<td><em>x</em></td>
						<td colspan="2">0</td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2"><span id="startgetal">3</span></td>
						<td colspan="2">4</td>
						<td colspan="2">5</td>
						<td colspan="2">6</td>	
					</tr>
					<tr>
						<td><em>y</em></td>
						<td colspan="2">10</td>
						<td colspan="2">5</td>
						<td colspan="2">2</td>
						<td colspan="2"><span id="startgetal">1</span></td>
						<td colspan="2">2</td>
						<td colspan="2">5</td>
						<td colspan="2">10</td>
					</tr>			
				</tbody>
				<tfoot>
					<tr >
						<th colspan="2"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 5</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 1</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 1</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
						<th></th>
					</tr>
					<tr>
						<th colspan="2"></th>
						<th colspan="1"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
						<th></th>
					</tr>
				</tfoot>	
			</table>
			</div>

</div>

<div class="tekstblok opdracht" id="1">
	<h3>Opdracht 1 Blokjes</h3>
	<p>
		Hieronder staat een reeks van figuren met blokjes. Bij elk figuur is het aantal blokjes anders.
	</p>
		<img src="../afbeeldingen/analyse_leerjaar_2/blokjes_1.png" alt="blokjes_1" />
	<ol>
		<li>
			Neem de tabel over en vul hem verder in.
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>nummer figuur</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD>
					</TR>
					<TR>
						<TD width="150px"><em>aantal blokjes</em></TD><TD>3</TD><TD>5</TD><TD></TD><TD></TD><TD></TD><TD></TD>
					</TR>
				</TABLE>
		</li>
		<li>
			Hoeveel blokjes komen er elke keer bij? Geef dit met pijlen aan in de tabel.
		</li>
		<li>
			Hoeveel blokjes heeft figuur nummer `0`?
		</li>
		<li>
			Neem over en vul in:<br>
			Startgetal = ...<br>
			Hellingsgetal = ...
		</li>
		<li>
			Maak een formule bij deze situatie waarmee je het <em>aantal blokjes</em> kunt uitrekenen als je het nummer van de figuur weet.
		</li>
	</ol>
	<p>
		Door de woorden in de formules <b>af te korten</b> met <b>letters</b>, worden ze korter. Meestal nemen we hiervoor de eerste letter van het woord. <em>Aantal blokjes</em> korten we af tot <em>b</em> 
		en <em>nummer figuur</em> tot <em>n</em>.
	</p>
	<ol start="6">
		<li>
				Bereken <em>b</em>  als <em>n</em> =`9`.  (Dus bereken het aantal sterren van figuur met nummer `9`.)
			</li>
		<li>
				Hoe groot moet <em>n</em> zijn als <em>b</em>=27 ? Maak hiervoor de twee pijlenkettingen.
			</li>  
	</ol>

		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
					<ol>
						<li>
							<table class="verhouding" >
		
						<tbody>
							<tr class="borderbottom">
								<td><em>nummer figuur</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
									
							</tr>
							<tr>
								<td><em>aantal blokjes</em></td>
								<td colspan="2">3</td>
								<td colspan="2">5</td>
								<td colspan="2">7</td>
								<td colspan="2">9</td>
								<td colspan="2">11</td>
								<td colspan="2">13</td>
									
							</tr>			
						</tbody>
						<tfoot>
							<tr >
								<th colspan="1"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								
								<th></th>
							</tr>
						</tfoot>	
						</table>
						</li>
						<li>
							Steeds `2` erbij.
						</li>
						<li>
							`3-2=1` dus figuur nummer `0` heeft `1` blokje.
						</li>
						<li>
							Neem over en vul in:<br>
							Startgetal `= 1` <br>
							Hellingsgetal `= 2`
						</li>
						<li>
							<em>aantal blokjes</em> `= 1 + 2 *` <em>nummer figuur</em>
						</li>
						<li>
							<em>a</em> `= 1 + 2 *` <em>n</em><br>
							<em>a</em> `= 1 + 2 * 9`<br>
							<em>a</em> `= 1 + 18` <br>
							<em>a</em> `= 19`
						</li>
						<li>
							<img src="../afbeeldingen/analyse_leerjaar_2/pijlenketting_b_is_27.png" alt="pijlenketting_b_is_27" width="" height="" />
						</li>
							
					</ol>
			</div>
		</div>
</div>

<p class="geeltje">
	Vragen over pijlenkettingen? Ga naar <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=a_1thv_pijlenkettingen">Pijlenkettingen</a>.
</p>

<div class="tekstblok opdracht" id="2">
	<h3>Opdracht 2 Telefoonabonnement</h3>
	<div class="row">
		<div class="col-xs-8">
			<p>
				Voor een telefoonabonnement betaal je abonnementskosten en belkosten. 
				Stel je betaalt € `10,00` abonnementskosten per maand en nog € `0,20` per minuut.
				Van de kosten per maand kun je een formule maken.
			</p>
		</div>
		<div class="col-xs-3">
			<img src="../afbeeldingen/analyse_leerjaar_2/abonnement.png" alt="abonnement" width="" height="" />
		</div>
	</div>
	<ol>
		<li>
			Hoeveel moet je betalen als je helemaal niet hebt gebeld?
		</li>
		<li>
			Hoeveel moet je betalen als je 10 minuten hebt gebeld?
		</li>
		<li>
			Neem over en vul in:<br>
			`K=... * a + ... `<br>
			Met `K` voor totale kosten per maand en `a` voor aantal belminuten.
		</li>
		<li>
			Neem de tabel over en vul hem in:<br>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>a</em></td>
							<td colspan="2">0</td>
							<td colspan="2">50</td>	
						</tr>
						<tr>
							<td><em>K</em></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
				</table>
			</div>
		</li>
		<li>
			Teken de grafiek van <em>K</em> in een passend assenstelsel. Gebruik daarvoor de tabel.
		</li>
		<li>
			In december krijg ik een rekening van 17 euro. Onderzoek met behulp 
			van de grafiek hoe lang ik heb gebeld. Controleer je antwoord met de formule.
		</li>
		<li>
			In december krijg Femke een rekening van € 15,35. <br>
			Stel de vergelijking op waarmee Femke kan berekenen hoeveel minuten ze gebeld heeft in december.
		</li>
		<li>
			Los de vergelijking op.
		</li>
		<li>
			Hoeveel  heeft Femke gebeld in december? Geef je antwoord in <b>seconden</b> nauwkeurig.
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
				10 euro
			</li>
			<li>
				`10+10*0,20=`<br>
				`10+2=12`<br>
				Als je 10 minuten hebt gebeld, moet je € 12,- betalen.
			</li>
			<li>
				`K=0,20*a+10`<br>
				Met `K` voor totale kosten per maand en `a` voor aantal belminuten.
			</li>
			<li>
				<div class="table-responsive verhouding">
					<table class="verhouding" >
						<tbody>
							<tr class="borderbottom">
								<td><em>a</em></td>
								<td colspan="2">0</td>
								<td colspan="2">50</td>	
							</tr>
							<tr>
								<td><em>K</em></td>
								<td colspan="2">10</td>
								<td colspan="2">20</td>
							</tr>			
						</tbody>
					</table>
				</div>
			</li>
			<li><br>
				<img src="afbeeldingen/analyse_kwadratische_verbanden_(basis)/opdracht_bellen_e.png"  width="500" />
			</li>
			<li>
				Bij 17 euro aan kosten, hoort 35 minuten bellen.
			</li>
			<li>
				`0,20a + 10 = 15,35`
			</li>
			<li>
				`0,20a + 10 = 15,35`<br>
				`0,20a = 5,35`<br>
				`a = (5,35)/(0,20)= 26,75`
			</li>
			<li>
				`0,75*60=45`<br>
				Dus Femke heeft `26` minuten en `45` seconden gebeld.<br>
				Je kunt ook bedenken dat `26,75` minuten = `26 3/4` minuten en `3/4` minuut is 45 seconden.
			</li>
		</ol>
</div>
	</div>
</div>

<div class="tekstblok opdracht" id="3">
	<h3>Opdracht 3 Pre-paid</h3>
	<p>
		Een andere manier om te bellen is via een zogenaamd pre-paid abonnement. Je koopt vooraf beltegoed.
		De kosten voor het aantal minuten dat je hebt gebeld, gaan van het beltegoed af. 
		De formule waarmee je het beltegoed kunt berekenen is:<br>
		`B = - 0,25 * a + 40`
	</p>
	<ol>
		<li>
			Hoeveel is mijn beltegoed als ik nog niet heb gebeld?
		</li>
		<li>
			Wat is mijn beltegoed als `20` minuten heb gebeld?
		</li>
		<li>
			Bereken hoe lang ik maximaal kan bellen met een beltegoed van € `40` euro.
		</li>
		<li>
			Teken de grafiek bij de formule. Je kan gebruik maken van de tabel hieronder:
			<br><br>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>a</em></TD><TD>0</TD><TD>40</TD>
					</TR>
					<TR>
						<TD width="150px"><em>B</em></TD><TD></TD><TD></TD>
					</TR>
				</TABLE><br>

		</li>
		<li>
			Hoe kan je het antwoord van vraag c. aflezen uit de grafiek?
		</li>
	</ol>


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						`40` euro.
					</li>
					<li>
						`40-0,25*20`<br>
						`40-5=35` euro.
					</li>
					<li>
						<table>
					<tr>
						<td>`0`</td>
						<td>`=`</td>
						<td>`40-0,25a`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`+0,25a`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`+0,25a</td>
					</tr>
					<tr>
						<td>`0,25a`</td>
						<td>`=`</td>
						<td>`40`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:0,25`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:0,25`</td>
					</tr>
					<tr>
						<td>`a`</td>
						<td>`=`</td>
						<td>`160`</td>
					</tr>
					</table>
					Ik kan dus maximaal `160` minuten bellen.
				</li>
				<li>
					<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>a</em></TD><TD>0</TD><TD>40</TD>
					</TR>
					<TR>
						<TD width="150px"><em>B</em></TD><TD>40</TD><TD>30</TD>
					</TR>
				</TABLE><br>
				<img src="afbeeldingen/analyse_kwadratische_verbanden_hv/opdracht_3d.png"  width="500" />
			</li>
			<li>
				Kijk waar de grafiek de horizontale as snijdt. 
			</li>
			</ol>
						
					
			</div>		
		</div>
</div>

<div class="tekstblok opdracht" id="4">
	<h3>Opdracht 4 Meer blokjes</h3>
	<img class="img-responsive" id="img-medium" src="afbeeldingen/analyse_leerjaar_2/blokjes_2.PNG" alt="blokjes_2" />
	<ol>
		<li>
			Neem de tabel over en vul hem verder in.
			<div class="table-responsive verhouding">
			<table class="verhouding" >
				<tbody>
					<tr class="borderbottom">
						<td><em>nummer figuur</em></td>
						<td colspan="2">0</td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2">3</td>
						<td colspan="2">4</td>	
						<td colspan="2">5</td>
						<td colspan="2">6</td>
					</tr>
					<tr>
						<td><em>aantal blokjes</em></td>
						<td colspan="2">0</td>
						<td colspan="2">1</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
					</tr>			
				</tbody>
				<tfoot>
					<tr>
						<th colspan="2"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th></th>
					</tr>
				</tfoot>	
			</table>
		</div>
		</li>
		<li>
			Hoeveel blokjes komen er elke keer bij? Geef dit met pijlen aan in de tabel. 
		</li>
		<li>
			Kun je bij de tabel een formule maken van de vorm:<br>
			<em>aantal blokjes</em> = <em>hellingsgetal</em> &sdot; <em>nummer figuur</em> +  <span id="startgetal">startgetal</span>? Waarom wel/niet?
		</li>
		<li>
			Welke formule past bij de rij?<br>
			<ol id="numbers">
				<li>
					`a = n^2` &nbsp; &nbsp; &nbsp; &nbsp;
					<span class="geeltje">
						Let op: `n`<sup>2</sup> `= n * n`.
					</span>
				</li>
				<li>
					`a = 2n + 1`
				</li>
			</ol>
			Met <em>a</em> voor <em>aantal blokjes</em> en <em>n</em> voor <em>nummer figuur</em>.	
		</li>
		<li>
			Bereken met de formule het <em>aantal blokjes</em> als <nobr>`n = 10`</nobr>.  
		</li>
	</ol>
	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						<div class="table-responsive verhouding">
							<table class="verhouding" >
								<tbody>
									<tr class="borderbottom">
										<td><em>nummer figuur</em></td>
										<td colspan="2">0</td>
										<td colspan="2">1</td>
										<td colspan="2">2</td>
										<td colspan="2">3</td>
										<td colspan="2">4</td>	
										<td colspan="2">5</td>
										<td colspan="2">6</td>
									</tr>
									<tr>
										<td><em>aantal blokjes</em></td>
										<td colspan="2">0</td>
										<td colspan="2">1</td>
										<td colspan="2">4</td>
										<td colspan="2">9</td>
										<td colspan="2">16</td>
										<td colspan="2">25</td>
										<td colspan="2">36</td>
									</tr>			
								</tbody>
								<tfoot>
									<tr>
										<tr>
											<th colspan="1"></th>
											<th colspan="1"></th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 1</th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 7</th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 9</th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
											<th></th>
										</tr>
									</tr>
								</tfoot>	
							</table>
						</div>
					</li>
					<li>
						Zie tabel.
					</li>
					<li>
						Nee, want de toename is niet steeds gelijk.
					</li>
					<li>
						Formule 1:<br>
						`a = n^2`
					</li>
					<li>
						`a =10^2 = 100`
					</li>
				</ol>
			</div>
		</div>
</div>

<p class="geeltje">
	Kijk in de taak <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=v_2thv_machten_en_wortels" target="_blank">Machten en wortels</a> voor een herhaling van kwadraat.
</p>

<div class="tekstblok opdracht" id="5">
	<h3>Opdracht 5</h3>
	<p>
		Bij een rij met blokjesfiguren hoort de formule:<br>
		`a= 4 + n^2`
	</p>
	<ol>
		<li>
			Bereken met de formule het aantal blokjes voor figuur nummer `3`.
		</li>
		<li>
			Bereken met de formule het aantal blokjes voor figuur nummer `5`.
		</li>
		<li>
			Onder de tabel zie je twee rijen met pijltjes. De eerste rij ken je al: hier vul je het verschil in tussen de twee vakjes erboven. In de tweede rij doe je hetzelfde: weer het verschil tussen de twee vakjes erboven.<br>
			Neem de tabel over en vul hem in.<br>
			<div class="table-responsive verhouding">
			<table class="verhouding">
				<tbody>
					<tr class="borderbottom">
						<td><em>n</em></td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2">3</td>
						<td colspan="2">4</td>
						<td colspan="2">5</td>
						<td colspan="2">6</td>	
					</tr>
					<tr>
						<td><em>a</em></td>
						<td colspan="2"></td>
						<td colspan="2"></td>
						<td colspan="2"></td>
						<td colspan="2"></td>
						<td colspan="2"></td>
						<td colspan="2"></td>
					</tr>			
				</tbody>
				<tfoot>
					<tr >
						<th colspan="2"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th></th>
					</tr>
					<tr>
						<th colspan="2"></th>
						<th colspan="1"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th></th>
					</tr>
				</tfoot>	
			</table>
			</div>
		</li>
		<li>
			Er is een figuur met 104 blokjes. Welk nummer heeft dat figuur?
		</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`a=4+3^2`<br>
					`a=4+9=13`
				</li>
				<li>
					`a=4+5^2`<br>
					`a=4+25=29`
				</li>
				<li>
					<div class="table-responsive verhouding">
						<table class="verhouding">
							<tbody>
								<tr class="borderbottom">
									<td><em>n</em></td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
									<td colspan="2">4</td>
									<td colspan="2">5</td>
									<td colspan="2">6</td>	
								</tr>
								<tr>
									<td><em>a</em></td>
									<td colspan="2">5</td>
									<td colspan="2">8</td>
									<td colspan="2">13</td>
									<td colspan="2">20</td>
									<td colspan="2">29</td>
									<td colspan="2">40</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 7</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 9</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
									<th></th>
								</tr>
								<tr >
									<th colspan="2"></th>
									<th colspan="1"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>
				</li>
				<li>
					`104-4=100`<br>
					`10^2=100` dus figuur nummer `10` heeft `104` blokjes.
				</li>
			</ol>
		</div>		
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie A Het tweede verschil</h3>
	<p>
		In de eerste drie opgaven is de toename van de uitvoer steeds gelijk, dit noemen we het  <span id="hellingsgetal">hellingsgetal</span> of <span id="hellingsgetal">eerste verschil</span>:
	</p>
	<div class="table-responsive verhouding">
		<table class="verhouding" >
			<tbody>
					<tr class="borderbottom">
						<td><em>n</em></td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2">3</td>
						<td colspan="2">4</td>
						<td colspan="2">5</td>
						<td colspan="2">6</td>	
						<td colspan="2">7</td>	
					</tr>
					<tr>
						<td><em>a</em></td>
						<td colspan="2">3</td>
						<td colspan="2">5</td>
						<td colspan="2">7</td>
						<td colspan="2">9</td>
						<td colspan="2">11</td>
						<td colspan="2">13</td>
						<td colspan="2">15</td>	
					</tr>			
				</tbody>
			<tfoot>
					<tr >
					<th colspan="1"></th>
					<th colspan="1"></th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th></th>
				</tr>
			</tfoot>	
		</table>
	</div>
	<p>
		De algemene lineaire formule is:<br>
		<em>y</em> = <span id="hellingsgetal">hellingsgetal</span> &sdot; <em>x</em> + <span id="startgetal">startgetal</span>
	</p>
	<p>
		Uit de tabel halen we de <em>invoer n</em>, de <em>uitvoer a</em>, het <span id="hellingsgetal">hellingsgetal</span> `2` en het <span id="startgetal">startgetal</span> `1`.<br>
		De formule wordt die bij deze tabel hoort, wordt dan:<br>
		`a = 2n+1`
	</p>
	<p>
		In de tabellen bij opgave `4` en `5` is niet het eerste verschil, maar het <b>tweede</b> verschil <b>gelijk</b>:
	</p>
	<div class="table-responsive verhouding">
		<table class="verhouding">
			<tbody>
				<tr class="borderbottom">
				<td><em>n</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>	
			</tr>
				<tr>
				<td><em>a</em></td>
				<td colspan="2">1</td>
				<td colspan="2">4</td>
				<td colspan="2">9</td>
				<td colspan="2">16</td>
				<td colspan="2">25</td>
				<td colspan="2">36</td>
			</tr>			
			</tbody>
			<tfoot>
				<tr>
					<th colspan="2"></th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 7</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 9</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
					<th></th>
				</tr>
				<tr>
					<th colspan="2"></th>
					<th colspan="1"></th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th></th>
				</tr>
			</tfoot>
		</table>
	</div>
	<p>
		Bij zo'n tabel hoort een <b>kwadratisch verband</b>.
	</p>
</div>

<div class="tekstblok opdracht" id="6">
			<h3>Opdracht 6</h3>
			<p></p>
				<ol>
					<li>
						Neem de tabel hieronder over, en laat met 
						behulp van pijlen zien dat bij de tabel een lineaire 
						formule hoort.<br>
						<br>
						<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD>
					</TR>
					<TR>
						<TD width="150px"><em>a</em></TD><TD>7</TD><TD>12</TD><TD>17</TD><TD>22</TD><TD>27</TD><TD>32</TD><TD>37</TD>
					</TR>
				</TABLE><br>
					</li>
					<li>
						Hoeveel blokjes horen er bij figuur nummer `0`?
					</li>
					<li>
						Wat is het hellingsgetal?
					</li>
					<li>
						Neem over en vul in:<br>
						`a = ... &sdot;n + ...`
					</li>
					<li>
						Maak een assenstelsel met <nobr>horizontaal van -2 tot en met 5</nobr> en <nobr>verticaal van -10 tot en met +30
						</nobr> en teken hierin de grafiek bij deze tabel.
					</li>
				</ol>


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li><table class="verhouding" >
		
						<tbody>
							<tr class="borderbottom">
								<td><em>nummer figuur</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
								
							</tr>
							<tr>
								<td><em>aantal blokjes</em></td>
								<td colspan="2">7</td>
								<td colspan="2">12</td>
								<td colspan="2">17</td>
								<td colspan="2">22</td>
								<td colspan="2">27</td>
								<td colspan="2">32</td>
								
							</tr>			
						</tbody>
						<tfoot>
							<tr >
								<th colspan="1"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th></th>
							</tr>
						</tfoot>	
						</table>
						</li>
						<li>
							`7-5=2` <br>
							Dus bij figuur nummer `0` horen `2` blokjes.
						</li>
						<li>
							Het hellingsgetal is `5` ,want als de bovenste rij met `1` toeneemt dan komt er onder steeds `5` bij.
						</li>
						<li>
							`a = 5n + 2`
						</li>
						<li>
							<img class="img-medium" src="../afbeeldingen/analyse_leerjaar_2/grafiek_bij_ais5nplus2.png" alt="grafiek_bij_ais5nplus2" width="" height="" />
						</li>
					</ol>
					
			</div>		
		</div>

</div>

<div class="tekstblok opdracht" id="7">
	<h3>Opdracht 7</h3>
	<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_2/blokjes_3.png" alt="blokjes_3" />
	<ol>
		<li>
			Neem de tabel over en vul hem in:<br><br>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
			<TR>
				<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD>
			</TR>
			<TR>
				<TD width="150px"><em>a</em></TD><TD></TD><TD></TD><TD></TD>
			</TR>
			</TABLE><br>
		</li>
		<li>
			Hoort bij de tabel een lineair verband? Waarom wel/niet?
		</li>
		<li>
			Welke formule past bij de tabel?
			<ol id="numbers">
				<li>
					`a = 3 &sdot; n^2`
				</li>
				<li>
					`a = n^2 + 3`
				</li>
			</ol>
		</li>
		<li>
			Bereken met de formule hoeveel blokjes figuur 6 heeft.
		</li>
		<li>
			Neem de tabel over en vul hem in:<br>
			<br>
			<div class="table-responsive verhouding">
				<table class="verhouding">
					<tbody>
						<tr class="borderbottom">
							<td><em>n</em></td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>
							<td colspan="2">5</td>
							<td colspan="2">6</td>	
						</tr>
						<tr>
							<td><em>a</em></td>
							<td colspan="2"></td>
							<td colspan="2"></td>
							<td colspan="2"></td>
							<td colspan="2"></td>
							<td colspan="2"></td>
							<td colspan="2"></td>
						</tr>			
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th></th>
						</tr>
						<tr >
							<th colspan="2"></th>
							<th colspan="1"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th></th>
						</tr>
					</tfoot>	
				</table>
			</div>
		</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD>
					</TR>
					<TR>
						<TD width="150px"><em>a</em></TD><TD>4</TD><TD>7</TD><TD>12</TD>
					</TR>
					</TABLE><br>
				</li>
				<li>
					Bij de tabel hoort geen lineair verband omdat de toename niet steeds hetzelfde is.
				</li>
				<li>
					Formule `2`: `a = n^2 + 3`
				</li>
				<li>
					`a = n^2 + 3`<br>
					`a = 6^2 + 3`<br>
					`a = 36 + 3 = 39`<br>
					Dus figuur nummer `6` heeft `39` blokjes.
				</li>
				<li>
				<div class="table-responsive verhouding">
					<table class="verhouding">
						<tbody>
							<tr class="borderbottom">
								<td><em>n</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
							</tr>
							<tr>
								<td><em>a</em></td>
								<td colspan="2">4</td>
								<td colspan="2">7</td>
								<td colspan="2">12</td>
								<td colspan="2">19</td>
								<td colspan="2">28</td>
								<td colspan="2">39</td>
							</tr>			
						</tbody>
						<tfoot>
							<tr>
								<th colspan="2"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 7</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 9</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
								<th></th>
							</tr>
							<tr>
								<th colspan="2"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th></th>
							</tr>
						</tfoot>	
					</table>
				</div>
			</li>
		</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="8">
	<h3>Opdracht 8</h3>
	<p>
		Neem de tabel hieronder over en laat zien dat bij de tabel een kwadratische verband hoort.
	</p>
	<div class="table-responsive verhouding">	
				<table class="verhouding">
					<tbody>
						<tr class="borderbottom">
							<td><em>n</em></td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>
							<td colspan="2">5</td>
							<td colspan="2">6</td>
							<td colspan="2">7</td>	
						</tr>
						<tr>
							<td><em>a</em></td>
							<td colspan="2">2</td>
							<td colspan="2">14</td>
							<td colspan="2">34</td>
							<td colspan="2">62</td>
							<td colspan="2">98</td>
							<td colspan="2">142</td>
							<td colspan="2">194</td>
						</tr>			
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th></th>
						</tr>
						<tr>
							<th colspan="2"></th>
							<th colspan="1"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th></th>
						</tr>
					</tfoot>	
				</table>
			</div>
				
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<div class="table-responsive verhouding">	
				<table class="verhouding">
					<tbody>
						<tr class="borderbottom">
							<td><em>n</em></td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>
							<td colspan="2">5</td>
							<td colspan="2">6</td>
							<td colspan="2">7</td>	
						</tr>
						<tr>
							<td><em>a</em></td>
							<td colspan="2">2</td>
							<td colspan="2">14</td>
							<td colspan="2">34</td>
							<td colspan="2">62</td>
							<td colspan="2">98</td>
							<td colspan="2">142</td>
							<td colspan="2">194</td>
						</tr>			
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 12</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 20</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 28</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 36</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 44</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 52</th>
							<th></th>
						</tr>
						<tr>
							<th colspan="2"></th>
							<th colspan="1"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
							<th></th>
						</tr>
					</tfoot>	
				</table>
			</div>
			<p>
				Het tweede verschil is steeds hetzelfde dus bij de tabel hoort een kwadratische formule.	
			</p>		
		</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="9">
	<h3>Opdracht 9 Vier tabellen</h3>
	<ol>
		<li>
			Hieronder zie je vier tabellen.
			Neem de tabellen over en onderzoek of er een lineair of kwadratisch verband bij hoort.</p>
			<ol id="numbers">
				<li>											
				<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD>
					</TR>
					<TR>
						<TD width="150px"><em>a</em></TD><TD>5</TD><TD>16</TD><TD>33</TD><TD>56</TD><TD>85</TD><TD>120</TD>
					</TR>
				</TABLE>
				</li>
				<li>
					<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD>
					</TR>
					<TR>
						<TD width="150px"><em>a</em></TD><TD>18</TD><TD>15</TD><TD>12</TD><TD>9</TD><TD>6</TD><TD>3</TD>
					</TR>
				</TABLE>
			</li>
				<li>
					
						<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD>
					</TR>
					<TR>
						<TD width="150px"><em>a</em></TD><TD>-10</TD><TD>-6</TD><TD>-2</TD><TD>2</TD><TD>6</TD><TD>10</TD>
					</TR>
				</TABLE>
			</li>
				<li>
				<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD>
					</TR>
					<TR>
						<TD width="150px"><em>a</em></TD><TD>9</TD><TD>12</TD><TD>17</TD><TD>24</TD><TD>33</TD><TD>44</TD>
					</TR>
				</TABLE><br>
			</li>
			</ol>
		</li>		
		<li>
			Maak de formules bij de lineaire verbanden.
		</li>
	</ol>	

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<ol id="numbers">
						<li>
							<table class="verhouding">
								<tbody>
									<tr class="borderbottom">
										<td><em>n</em></td>
										<td colspan="2">1</td>
										<td colspan="2">2</td>
										<td colspan="2">3</td>
										<td colspan="2">4</td>
										<td colspan="2">5</td>
										<td colspan="2">6</td>
									</tr>
									<tr>
										<td><em>a</em></td>
										<td colspan="2">5</td>
										<td colspan="2">16</td>
										<td colspan="2">33</td>
										<td colspan="2">56</td>
										<td colspan="2">85</td>
										<td colspan="2">120</td>
									</tr>			
								</tbody>
								<tfoot>
									<tr >
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 17</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 23</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 29</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 35</th>
									<th></th>
								</tr>
								<tr>
									<th colspan="2"></th>
									<th colspan="1"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 6</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 6</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 6</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 6</th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
						<br>
						Het tweede verschil is steeds hetzelfde. Bij de tabel hoort een kwadratisch verband.
					</li>
					<li>
						<table class="verhouding" >
							<tbody>
							<tr class="borderbottom">
								<td><em>n</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
								
							</tr>
							<tr>
								<td><em>a</em></td>
								<td colspan="2">18</td>
								<td colspan="2">15</td>
								<td colspan="2">12</td>
								<td colspan="2">9</td>
								<td colspan="2">6</td>
								<td colspan="2">3</td>
								
							</tr>			
						</tbody>
							<tfoot>
							<tr >
								<th colspan="1"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th></th>
							</tr>
						</tfoot>	
						</table><br>
						Het eerste verschil is steeds hetzelfde. Bij de tabel hoort een lineair verband.
					</li>
					<li>
						<table class="verhouding" >
							<tbody>
							<tr class="borderbottom">
								<td><em>n</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
								
							</tr>
							<tr>
								<td><em>a</em></td>
								<td colspan="2">-10</td>
								<td colspan="2">-6</td>
								<td colspan="2">-2</td>
								<td colspan="2"> 2</td>
								<td colspan="2"> 6</td>
								<td colspan="2">10</td>
								
							</tr>			
						</tbody>
							<tfoot>
							<tr >
								<th colspan="1"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th></th>
							</tr>
						</tfoot>	
						</table>
						<br>
						Het eerste verschil is steeds hetzelfde. Bij de tabel hoort een lineair verband.
					</li>
					<li>
						<table class="verhouding">
							<tbody>
			<tr class="borderbottom">
				<td><em>n</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>
			</tr>
			<tr>
				<td><em>a</em></td>
				<td colspan="2">9</td>
				<td colspan="2">12</td>
				<td colspan="2">17</td>
				<td colspan="2">24</td>
				<td colspan="2">33</td>
				<td colspan="2">44</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 7</th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 9</th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
				<th></th>
			</tr>
			<tr >
				<th colspan="2"></th>
				<th colspan="1"></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th></th>
			</tr>

		</tfoot>	
	</table>
	<br>
		Het tweede verschil is steeds hetzelfde. Bij de tabel hoort een kwadratisch verband.
					</li>
				</ol>
				</li>
				<li>
					Voor tabel `2`:<br>
					Startgetal: `18+3=21`<br>
					Hellingsgetal: `-3`<br>
					<em>a</em> `=21-3*n`<br>
					<br>
					Voor tabel `3`:<br>
					Startgetal: `-10-4=-14`<br>
					Hellingsgetal: `+4`<br>
					<em>a</em> `=-14+4*n`
				</li>
			</ol>		
		</div>		
	</div>
</div>

<p class="geeltje">
	Vragen over het maken van lineaire formules? Ga naar <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=a_1thv_lineaire_formules">Lineaire formules</a>.
</p>

<div class="tekstblok theorie analyse" id="theorieB">
	<h3>Theorie B Formules met kwadraten</h3>
	<p>
		Bij tabel `4` in opgave `9` hoort een <b>kwadratische formule</b>:
		<br>
		<em>a</em> `=8 + n`<sup>2</sup><br>
		<br>
		Je ziet in de formule bij de letter `n` (we noemen dit de <b>variabele</b>) een <b>kwadraat</b>. <br>
		Als in een formule de variabele in het kwadraat staat dan heet zo'n formule een <b>kwadratische formule</b>.<br>
		Wil je weten hoeveel blokjes figuur `9` heeft? Vul in de formule `9` in op de plek van `n`.<br>
		<em>a</em> `= 8 + 9`<sup>2</sup><br>
		<em>a</em> `= 8 + 81 = 89`<br>
		Dus figuur nummer `9` bestaat uit 89 blokjes.
	</p>
</div>

<div class="tekstblok opdracht" id="10">
	<h3>Opdracht 10</h3>
	<p>
		Bij een rij met blokjesfiguren hoort de formule:<br>
		`a = 5n^2 - 3`<br>
		Met `a` voor <em>aantal blokjes</em> en `n` voor <em>nummer figuur</em>.
	</p>
	<ol>
		<li>
			Neem over en vul in:<br>
			Figuur nummer `3` heeft ... blokjes want:<br>
			`a = 5 &sdot; 3^2 - 3`<br>
			`a = 5 &sdot; ... - 3`<br>
			`a = ... - 3`<br>
			`a = ...`
		</li>
		<li>
			Bereken met de formule het aantal blokjes voor figuur nummer `2`.
		</li>
		<li>
			Bereken met de formule het aantal blokjes voor figuur nummer `4`.
		</li>
		<li>
			Onder de tabel zie je twee rijen met pijltjes. De eerste rij ken je al: hier vul je het verschil in tussen de twee vakjes erboven. In de tweede rij doe je hetzelfde: weer het verschil tussen de twee vakjes erboven.<br>
			Neem de tabel over en vul hem in.<br>
			<table class="verhouding" style="background-color:white">		
							<tbody>
								<tr class="borderbottom">
									<td><em>n</em></td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
									<td colspan="2">4</td>
									<td colspan="2">5</td>
									<td colspan="2">6</td>	
								</tr>
								<tr>
									<td><em>a</em></td>
									<td colspan="2"></td>
									<td colspan="2"></td>
									<td colspan="2"></td>
									<td colspan="2"></td>
									<td colspan="2"></td>
									<td colspan="2"></td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th></th>
								</tr>
								<tr>
									<th colspan="2"></th>
									<th colspan="1"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th></th>
								</tr>	
							</tfoot>	
						</table>
		</li>
		<li>
			Wat valt je op aan de getallen in de tweede rij onder de tabel?
		</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Figuur nummer `3` heeft `42` blokjes want:<br>
					`a = 5 &sdot; 3^2 -3`<br>
					`a = 5 &sdot; 9 - 3`<br>
					`a = 45 - 3`<br>
					`a = 42`
				</li>
				<li>
					`a = 5 &sdot; 2^2 -3`<br>
					`a = 5 &sdot; 4 - 3`<br>
					`a = 20 - 3`<br>
					`a = 17`
				</li>
				<li>
					`a = 5 &sdot; 4^2 -3`<br>
					`a = 5 &sdot; 16 - 3`<br>
					`a = 80 - 3`<br>
					`a = 77`
				</li>
				<li>
					<table class="verhouding">
						<tbody>
							<tr class="borderbottom">
								<td><em>n</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
							</tr>
							<tr>
								<td><em>a</em></td>
								<td colspan="2">2</td>
								<td colspan="2">17</td>
								<td colspan="2">42</td>
								<td colspan="2">77</td>
								<td colspan="2">122</td>
								<td colspan="2">177</td>
							</tr>			
						</tbody>
						<tfoot>
							<tr>
								<th colspan="2"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 15</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 25</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 35</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 45</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 55</th>
								<th></th>
							</tr>
							<tr>
								<th colspan="2"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
								<th></th>
							</tr>
						</tfoot>	
					</table>
				</li>
				<li>
					De getallen in de tweede rij zijn allemaal 10. Ze zijn gelijk aan elkaar. Dit heet het <b>tweede verschil</b>.
				</li>
			</ol>
		</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="11">
	<h3>Opdracht 11</h3>
	<p>Neem over en bereken:</p>
	<div class="row">
		<div class="col-md-6">
			<ol>
				<li>
					`3`<sup>`2`</sup>` = 3 * 3 =...`
				</li>
				<li>
					`6`<sup>`2`</sup>` = ... * ... =...`
				</li>
				<li>
					`4`<sup>`2`</sup>` = ... * ... =...`
				</li>
				<li>
					`(-3)`<sup>`2`</sup>` = -3 * -3 =...`
				</li>
				<li>
					`(-5)`<sup>`2`</sup>` = ... * ... =...`
				</li>
				<li>
					`(-7)`<sup>`2`</sup>` = ... * ... =...`
				</li>
			</ol>		
		</div>
		<div class="col-md-6">
			<ol start="7">
				<li>
				`-3`<sup>`2`</sup>` = - 3 * 3 = -9`
				</li>
				<li>
				`-7`<sup>`2`</sup>` = ...    ... * ... = .....`
				</li>
				<li>
				`-5`<sup>`2`</sup>` = ...    ... * ... = .....`
				</li>
				<li>
				`-(-6)`<sup>`2`</sup>` = -  -6 * -6 = -36`
				</li>
				<li>
				`-(-8)`<sup>`2`</sup>` = ...    ... * ... = ...`
				</li>
				<li>
				`-(-4)`<sup>`2`</sup>` = ...    ... * ... = ...`
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
							`3`<sup>`2`</sup>` = 3 * 3 = 9`
							</li>
							<li>
								`6`<sup>`2`</sup>` = 6 * 6 = 36`
							</li>
							<li>
								`4`<sup>`2`</sup>` = 4 * 4 = 16`
							</li>
							<li>
								`(-3)`<sup>`2`</sup>` = -3 * -3 = 9`
							</li>
							<li>
								`(-5)`<sup>`2`</sup>` = -5 * -5 = 25`
							</li>
							<li>
								`(-7)`<sup>`2`</sup>` = -7 * -7 = 49`
							</li>
						</ol>
					</div>
					<div class="col-md-6">
						<ol start="7">
							<li>
							`-3`<sup>`2`</sup>` = - 3*3 = -9`
							</li>
							<li>
							`-7`<sup>`2`</sup>` = - 7*7 = -49`
							</li>
							<li>
							`-5`<sup>`2`</sup>` = - 5*5 = -25`
							</li>
							<li>
							`-(-6)`<sup>`2`</sup>` = -  -6 * -6 = -36`
							</li>
							<li>
							`-(-8)`<sup>`2`</sup>` = - -8*-8 = -64`
							</li>
							<li>
							`-(-4)`<sup>`2`</sup>` = - -4*-4 = -16`
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
</div>

<div class="tekstblok opdracht" id="12">
	<h3>Opdracht 12</h3>
	<p>Neem over en bereken met tussenstappen.</p>
	<div class="row">
		<div class="col-md-6">
			<ol>
				<li>
					`4^2 + 5 = `
				</li>
				<li>
					`3^2 + 7 =`
				</li>
				<li>
					`(-9)^2 - 12 =`
				</li>
				<li>
					`-3 * (-5)^2 = `
				</li>
				<li>
					`-4 * 6^2 = `
				</li>
			</ol>
		</div>
		<div class="col-md-6">
			<ol start="6">
				<li>
					`5 *(-7)^2 = `
				</li>
				<li>
					`7 * -3^2 = `
				</li>
				<li>
					`5 * -4^2 =`
				</li>
				<li>
					`-2 * -5^2 = `
				</li>
			</ol>
		</div>
	</div>
	
	<div class="hider">	
		<div class="showhide">&rarr;</div>
		<div class="antwoord">

					<ol>
					<li>
					`4`<sup>`2`</sup>` + 5 = 4 * 4  +  5 = 16 + 5 = 21`
				</li>
				<li>
					`3`<sup>`2`</sup>` + 7 = 3 * 3 + 7 = 9 + 7 = 16`
				</li>
				<li>
					`(-9)`<sup>`2`</sup>` - 12 = -9*-9 - 12 = 81 - 12 = 69`
				</li>
				<li>

					`-3 * (-5)`<sup>`2`</sup>` = -3 *   -5 * -5 = -3 * 25 = -75`
				</li>
				<li>
					`-4 * 6 `<sup>`2`</sup>` = -4 * 6*6 = -4 * 36 = -144`
				</li>
				<li>
					`5 *(-7)`<sup>`2`</sup>` = 5 * -7*-7 = 5 * 49 = 245`
				</li>
		
								
					<li>
					`7 * -3`<sup>`2`</sup>` = 7 * -  3 * 3 = 7 * -9 = -63`
					</li>
					<li>
					`5 * -4`<sup>`2`</sup>` = 5 * -4*4 = 5 * -16 = -80`
					</li>
					<li>
					`-2 * -5`<sup>`2`</sup>` = -2 * - 5*5 = -2 * -25 = 50`
					</li>
					
				</ol>
				
				</div>
	</div>
</div>

<div class="tekstblok opdracht" id="13">
	<h3>Opdracht 13 Machten en volgorde (uitdaging)</h3>
	<p>
		Neem over en bereken met tussenstappen onder elkaar, zonder rekenmachine.
	</p>
	<div class="row">
		<div class="col-md-6">
			<ol class="machten">
				<li>`(3^3 - 7) : (-2)^2 =`</li>
				<li>`-(-5)^2 : (-6^2 : - sqrt81) =`</li>
				<li>`-25^2 : (-25)^2 =`</li>
			</ol>
		</div>
		<div class="col-md-6">
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
					<div class="col-md-6">
						<ol class="machten">
							<li>
								`(3^3 - 7) : (-2)^2 =`<br>
								`(27 - 7) : 4 =`<br>
								`20 : 4 = 5`
							</li>
							<li>
								`-(-5)^2 : (-6^2 : - sqrt81) =`<br>
								`-25 : (-36 : -9)=`<br>
								`-25 : 4 = -6 1/4`
							</li>
							<li>
								`-25^2 : (-25)^2 = -1`<br>
								<em>Vallen tegen elkaar weg.</em>
							</li>
						</ol>
					</div>
					<div class="col-md-6">
						<ol start="4" class="machten">
							<li>
								`4 + 3^4 : (2 + 1)^2 =`<br>
								`4 + 81 : 9 =`<br>
								`4 + 9 = 13`
							</li>
							<li>
								`-3 * (-2)^5 : (-4)^2 + (6 - 6^2) =`<br>
								`-3 * 32 : 16 + (6 - 36) =`<br>
								`-6 - 30 = -36`
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

<div class="tekstblok opdracht" id="14">
	<h3>Opdracht 14 Poncho</h3>
	<div class="row">
		<div class="col-md-8">
			<p>
				Brechtje is getrouwd met Servaas en samen hebben ze twee kinderen, Isis en Sam. Brechtje wil voor haar gezin poncho's gaan breien. Ze heeft een vierkant breipatroon gevonden. In het midden van het vierkant zit een gat waar het hoofd doorheen moet. 	Een formule om de oppervlakte van de poncho te berekenen is:<br>
				<em>oppervlakte Poncho</em> = <em>lengte</em><sup>2</sup> -2,5<br>
				Met lengte in dm en de oppervlakte in dm<sup>2</sup>.		
			</p>
			<p>
				Sam is haar jongste, dus met deze poncho is ze zo klaar. De lengte van de poncho van Sam moet 5 dm worden. Voor Isis is ze langer bezig want zij is langer dan Sam. Haar poncho krijgt een lengte van 7 dm. Voor haar man is ze het langst bezig. Hij heeft een poncho nodig met een lengte van 120 cm.
			</p>
		</div>
		<div class="col-md-4">
			<img id="img-medium" src="afbeeldingen/analyse_leerjaar_2/poncho_1.png" alt="poncho" width="200" class="rightfloat" />
		</div>
	</div>
	<ol>
		<li>
			Bereken met de formule de oppervlakte van de poncho van Sam.
		</li>
		<li>
			Bereken met de formule de oppervlakte van de poncho van Isis.
		</li>
		<li>
			Bereken met de formule de oppervlakte van de poncho van Servaas.
		</li>
		<li>
			Brechtje heeft ook een poncho voor zichzelf gemaakt. De oppervlakte van haar poncho is `97,5` dm<sup>2</sup>.
			Zoek uit wat de lengte is van haar poncho.
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						<em>oppervlakte Poncho</em>`=` <em>lengte</em><sup>2</sup> `-2,5`<br>
						<em>oppervlakte Poncho</em>`=` <em>5</em><sup>2</sup> `-2,5`<br>
						<em>oppervlakte Poncho</em>`= 25 - 2,5`<br>
						<em>oppervlakte Poncho</em>`= 22,5` <br>
						Dus de oppervlakte van de poncho van Sam is `22,5` dm<sup>2</sup>.
					</li>
					<li>
						<em>oppervlakte Poncho</em>`=` <em>lengte</em><sup>2</sup> `-2,5`<br>
						<em>oppervlakte Poncho</em>`=` <em>7</em><sup>2</sup> `-2,5`<br>
						<em>oppervlakte Poncho</em>`= 49 - 2,5`<br>
						<em>oppervlakte Poncho</em>`= 46,5` <br>
						Dus de oppervlakte van de poncho van Sam is `46,5` dm<sup>2</sup>.
					</li>
					<li>
						`120` cm `= 12` dm <br>
						<em>oppervlakte Poncho</em>`=` <em>lengte</em><sup>2</sup> `-2,5`<br>
						<em>oppervlakte Poncho</em>`=` <em>12</em><sup>2</sup> `-2,5`<br>
						<em>oppervlakte Poncho</em>`= 144 - 2,5`<br>
						<em>oppervlakte Poncho</em>`= 141,5` <br>
						Dus de oppervlakte van de poncho van Sam is `141,5` dm<sup>2</sup>.
					</li>
					<li>
						<em>oppervlakte Poncho</em>`=` <em>lengte</em><sup>2</sup> `-2,5`<br>
						`97,5 =` <em>lengte</em><sup>2</sup> `-2,5`<br>
						Gebruik de bordjes methode:<br>
							`97,5 =` <em>lengte</em><sup>2</sup> `-2,5`<br>
							`97,5 =`<span class="formula"> ? </span> `- 2,5`<br>
							<span class="formula"> ? </span> `= 100`<br>
							<em>lengte</em><sup>2</sup> ` = 100`<br>
							<span class="formula"> ? </span><sup>2</sup> `= 100`<br>
							<span class="formula"> ? </span> `= 10`<br>
							Dus de <em>lengte</em> `= 10`<br>
							<br>
						Of de balansmethode:<br>
							<table>
								<tr>
									<td>`97,5`</td>
									<td>`=`</td>
									<td><em>lengte</em><sup>2</sup>`-2,5`</td>
								</tr>
								<tr>
									<td class="tussenstap_vergelijking">`+2,5`</td>
									<td></td>
									<td class="tussenstap_vergelijking">`+2,5`</td>
								</tr>
								<tr>
									<td>`100`</td>
									<td>`=`</td>
									<td><em>lengte</em><sup>2</sup></td>
								</tr>
								<tr>
									<td><em>lengte</em><sup>2</sup></td>
									<td>`=`</td>
									<td>`100`</td>
								</tr>
								<tr>
									<td><em>lengte</em></td>
									<td> `=` </td>
									<td class="tussenstap_vergelijking">`sqrt(10)`</td>
									<td> `=` </td>
									<td class="tussenstap_vergelijking">10</td>
								</tr>
							</table><br>
							Dus de <em>lengte</em> van de poncho van Brechtje is `10` dm.
						</li>
					</ol>	
			</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="15">
	<h3>Opdracht 15</h3>
	<p>
		De queteletindex (afgekort QI) of body-mass index (BMI) is een meetisntrument 
		waarmee we kunnen kijken of een persoon voor zijn lengte een juist gewicht heeft. 
	</p>
	<p>
		Als de BMI te hoog is, dan heeft de persoon overgewicht.<br>
		Als de BMI te laag is heeft de persoon een ondergewicht.<br>
		Als je een BMI hebt tussen 
		de `18,5` en `25` dan heb je een gezond gewicht.
	</p>	
	<div class="row">
		<div class="col-md-7">
			<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/QI_grafiek.PNG" >
		</div>
		<div class="col-md-5">
			<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/QI_tabel.PNG"  >
		</div>
	</div>
	<p>
		Hafid wil graag weten hoe zwaar hij mag zijn om nog een gezond gewicht te hebben. Om zijn gewicht te berekenen met een BMI-waarde van `25` gebruikt hij de volgende formule:<br>
		<em>lichaamsgewicht</em> `= 25 * `<em>lengte</em><sup>2</sup><br>
		Met <em>lengte</em> in meters en <em>lichaamsgewicht</em> in kg.
	</p>
	<ol>
			<li>
				Hafid is `1,68` meter. Bereken hoe zwaar hij <b>maximaal</b> mag zijn voor een gezond gewicht. Rond je antwoord af op hele kilo's.
			</li>
			<li>
				Als zijn BMI-waarde onder de `18,5` komt heeft Hafid ondergewicht.<br>
				Om zijn gewicht te berekenen met een BMI-waarde van `18,5` moet hij de volgende formule gebruiken:<br>
				<em>lichaamsgewicht</em> `= 18,5 * `<em>lengte</em><sup>2</sup><br>
				Ook hier geldt weer dat de <em>lengte</em> in meters is en het <em>lichaamsgewicht</em> in kg.<br>
				Bereken met behulp van de formule hoe zwaar Hafid <b>minimaal</b> moet zijn om een gezond gewicht te hebben. Rond je antwoord af op hele kilo's.
			</li>
			<li>
				Neem over en vul in:<br>
				Hafid moet een gewicht hebben tussen ...kg en ...kg om een gezond gewicht te hebben.
			</li>
			<li>
				Gebruik de formules hierboven om voor jou uit te rekenen tussen welke waarden je gewicht moet zitten om een gezond gewicht te hebben.
			</li>
		</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						<em>lichaamsgewicht</em> `= 25 * `<em>lengte</em><sup>2</sup><br>
						<em>lichaamsgewicht</em> `= 25 * `<em>1,68</em><sup>2</sup><br>
						<em>lichaamsgewicht</em> `= 25 * 2,8224`<br>
						<em>lichaamsgewicht</em> `= 70,56`<br>
						Dus Hafid mag maximaal `70` kilo zijn voor een gezond gewicht. <br>
						Let op:<br>
						Als we wiskundig goed afronden moeten we afronden op `71` kilo. <br>
						Bij `71` kilo heeft Hafig geen gezond gewicht meer.	<br>
						
					</li>
					<li>
						<em>lichaamsgewicht</em> `= 18,5 * `<em>lengte</em><sup>2</sup><br>
						<em>lichaamsgewicht</em> `= 18,5 * `<em>1,68</em><sup>2</sup><br>
						<em>lichaamsgewicht</em> `= 18,5 * 2,8224`<br>
						<em>lichaamsgewicht</em> `= 52,2144`<br>
						Dus Hafid moet minimaal `53` kilo zijn voor een gezond gewicht. <br>
						Let op:<br>
						Als we wiskundig goed afronden moeten we afronden op `52` kilo. <br>
						Bij `52` kilo heeft Hafid geen gezond gewicht meer. Hj heeft dan ondergewicht.	<br>
						
					</li>
					<li>
						Hafid moet een gewicht hebben tussen `53`kg en `70`kg om een gezond gewicht te hebben.
					</li>
					<li>
						-
					</li>
									
				</ol>
			</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="16">
	<h3>Opdracht 16</h3>
	<div class="row">
		<div class="col-md-8">
			<p>
				Gegeven is de volgende formule:<br>
				`y=x^2`
			</p>
			<ol>
				<li>
					Neem de tabel over en vul hem in.
					<div class="table-responsive verhouding">	
						<table class="verhouding">
							<tbody>
								<tr class="borderbottom">
									<td><em>x</em></td>
									<td colspan="2">-3</td>
									<td colspan="2">-2</td>
									<td colspan="2">-1</td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>	
								</tr>
								<tr>
									<td><em>y</em></td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
								</tr>			
							</tbody>
						</table>
					</div>
				</li>
			</ol>
		</div>
		<div class="col-md-4">
			<p class="geeltje"> 
				Let op:<br>
				als je voor de `x` een negatief getal moet invullen, dan moet je dat getal altijd tussen haakjes zetten!
			</p>
		</div>		
	</div>
	<div class="row">
		<div class="col-md-8">
			<ol start="2">
				<li>
					Maak een assenstelsel. Neem een <em>x</em>-as van -3 tot en met 3 en een <em>y</em>-as van 0 tot en met 9.
				</li>
				<li>			
					Zet de punten uit de tabel in het assenstelsel.
				</li>
				<li>
					Teken een vloeiende lijn (dit noemen we een <b>kromme</b>) door de punten.<br>
					Je mag de punten dus niet verbinden door rechte lijnen!
				</li>
				<li>
					Schrijf de formule bij de parabool.
				</li>
			</ol>
		</div>
		<div class="col-md-4">
		<!--
			<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/tabel_coordinaten_assenstelsel.PNG"  width="175px" >
			-->
		</div>
	</div>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">	
					<div class="table-responsive verhouding">	
						<table class="verhouding">
							<tbody>
								<tr class="borderbottom">
									<td><em>x</em></td>
									<td colspan="2">-3</td>
									<td colspan="2">-2</td>
									<td colspan="2">-1</td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>	
								</tr>
								<tr>
									<td><em>y</em></td>
									<td colspan="2">9</td>
									<td colspan="2">4</td>
									<td colspan="2">1</td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">4</td>
									<td colspan="2">9</td>
								</tr>			
							</tbody>
						</table>
					</div>					
				
					<img src="afbeeldingen/analyse_leerjaar_2/assenstelsel_formule.png" >
							
			</div>		
	</div>

</div>

<div class="tekstblok theorie analyse" id="theorieC">
	<h3>Theorie C Parabolen</h3>
	<p>
		In opdracht 16 heb je de grafiek getekend bij de formule `y=x^2`.
		De grafiek bij een kwadratische formule heet een <b>parabool</b>. 
	</p>
	<p>
		Een parabool is altijd <b>symmetrisch</b>. Dat betekent dat je hem zo kan vouwen dat beide helften precies op elkaar vallen. De lijn waarover je moet vouwen heet de <b>symmetrie-as</b>. Op de symmetrie-as ligt de <b>top</b>. Die is of het laagste punt of het hoogste punt van de parabool.
	</p>
	<br>
	<div class="row">
		<div class="col-md-6">
			 	<img class="img-medium" src="afbeeldingen/analyse_leerjaar_2/parabool_theorie.png"   >
			 <p>
			 	Is top het <b>laagste</b> punt is, dan het een <b>dalparabool</b>.
			 </p>
		</div>
		<div class="col-md-6">
			<img class="img-medium" src="afbeeldingen/analyse_leerjaar_2/bergparabool_theorie.png"   >
			<p>
				Is de top het <b>hoogste</b> punt, dan is het een <b>bergparabool</b>.
			</p>
	</div>
	</div>
</div>

<div class="tekstblok opdracht" id="17">
	<h3>Opdracht 17</h3>
	<div class="row">
		<div class="col-md-7">
			<p>
				Enola trapt een bal heel hard weg. In de grafiek hiernaast kan je zien hoe hoog de bal komt.
			</p>
			<ol>
				<li>
					Is de grafiek hiernaast een bergparabool of een dalparabool?
				</li>
				<li>
					Neem over en vul in:<br>
					De coördinaten van de top zijn: `(... , ...)`.
				</li>
				<li>
					Lees uit de grafiek af na hoeveel meter de bal weer op de grond komt.
				</li>
				<li>
					Lees uit de grafiek af hoe hoog de bal komt.
				</li>
				<li>
					Juan staat 3 meter van Enola vandaan. De bal is recht boven Juan. <br>
					Hoe hoog is de bal?
				</li>
				<li>
					Op een afstand van `2` meter is de bal `12` meter hoog. <br>
					Op welke afstand is de bal weer `12` meter hoog?
				</li>
			</ol>
		</div>
		<div class="col-md-5">
			<img src="afbeeldingen/analyse_leerjaar_2/opdracht_bal.png" >
		</div>
	</div>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<div class="row">
			<div class="col-md-7">
				<ol>
				<li>
					De grafiek is een bergparabool.
				</li>
				<li>
					De coordinaten van de top zijn: `(4 , 16)`.
				</li>
				<li>
					De bal komt na 8 meter weer op de grond.
				</li>
				<li>
					De bal komt 16 meter hoog.
				</li>
				<li>
					Dan is de bal 15 meter hoog, zie afbeelding.
				</li>
				<li>
					De bal is na `6` meter weer op `12` meter hoog. Kijk in de tabel of in de grafiek.
				</li>
			</ol>

			</div>
			<div class="col-md-5">
				<img class="img-medium" src="afbeeldingen/analyse_leerjaar_2/opdracht_bal_afstand.png" >
			</div>
		</div>
		</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="18">
	<h3>Opdracht 18</h3>
	<div class="row">
		<div class="col-md-7">
			<p>
				Een korfballer gooit een bal precies in de korf. De baan die de bal aflegt is een parabool.<br>
				De formule die bij de parabool hoort is:<br>
				`H = -0,56a^2 + 3a + 2`.<br>
				Met `H` de hoogte en `a` de afstand, beide in meters.
			</p>
			<ol>
				<li>
								Is de parabool een bergparabool of een dalparabool?
							</li>
				<li>
								Op welke hoogte laat de speler de bal los?
							</li>
				<li>
								Controleer je antwoord van b. door in de formule `a=0` in te vullen.
							</li>
				<li>
								Hoever staat de korfballer van de korf?
							</li>
				<li> 
								Bereken met de formule hoe hoog de korf is.
							</li>
				<li>
								Lees uit de grafiek af hoe hoog de bal komt.
							</li>
			</ol>
		</div>
		<div class="col-md-5">
			<img src="afbeeldingen/analyse_leerjaar_2/opdracht_basketbal_kleur.png"  >
		</div>
	</div>
	


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						Het is een bergparabool.
					</li>
					<li>
						De speler laat de bal op  `2` meter hoogte los.
					</li>
					<li>
						En, klopt het?
					</li>
					<li>
						De speler staat `5` meter van de korf.
					</li>
					<li>
						Vul op de plek van `a`, `5` in.<br>
						<em>H</em> `= -0,56a`<sup>`2`</sup> `+ 3a + 2`<br>
						<em>H</em> `= -0,56*5`<sup>`2`</sup> `+ 3*5 + 2`<br>
						<em>H</em> `= -0,56*25 `+ 3*5 + 2`.<br>
						<em>H</em> `= -14`+ 15 + 2`<br>
						<em>H</em> `= 3`<br>
						Dus de korf hangt op `3` meter hoogte.
					</li>
					<li>
						De bal komt `6` meter hoog.
					</li>
				</ol>
					
			</div>		
		</div>

</div>

<div class="tekstblok theorie analyse" id="theorieD">
	<h3>Theorie D Werkschema parabool tekenen</h3>
	<div class="row">
		<div class="col-md-11 tekstblok opdracht">
			<p>
				Teken de grafiek bij de formule: `H =2a+0,5a^2`<br>
				Met `H` en `a` in meters.<br>
				Gebruik daarbij de volgende tabel:
			</p>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>a</em></td>
							<td colspan="2">-5</td>
							<td colspan="2">-4</td>
							<td colspan="2">-3</td>
							<td colspan="2">-2</td>
							<td colspan="2">-1</td>
							<td colspan="2">0</td>	
							<td colspan="2">1</td>
						</tr>
						<tr>
							<td><em>H</em></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
				</table>
			</div> 
			<br>
		</div>		
	</div>
			
	<div class="row">
		<div class="col-xs-2">
			Stap 1
		</div>
		<div class="col-xs-5">
			Vul de gegeven tabel in.
			<p class="geeltje">
				Bij het kwadraat van negatieve getallen gebruik je haakjes.
			</p>
		</div>
		<div class="col-xs-4">
			`H=2a+0,5a^2`<br>
			`H=2 &sdot; -5 + 0,5 &sdot; (-5)^2`<br>
			`H= -10 + 0,5 &sdot; 25`<br>
			`H= -10 + 12,5 = 2,5`<br>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-xs-2">

		</div>
		<div class="col-xs-9">
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>a</em></td>
							<td colspan="2">-5</td>
							<td colspan="2">-4</td>
							<td colspan="2">-3</td>
							<td colspan="2">-2</td>
							<td colspan="2">-1</td>
							<td colspan="2">0</td>	
							<td colspan="2">1</td>
						</tr>
						<tr>
							<td><em>H</em></td>
							<td colspan="2">2,5</td>
							<td colspan="2">0</td>
							<td colspan="2">-1,5</td>
							<td colspan="2">-2</td>
							<td colspan="2">-1,5</td>
							<td colspan="2">0</td>
							<td colspan="2">2,5</td>
						</tr>			
					</tbody>
				</table>
			</div>
		</div>

	</div>	
	<br>
	<div class="row">
		<div class="col-xs-2">
			Stap 2
		</div>
		<div class="col-xs-5">
			Teken een assenstelsel.<br>
			Kijk goed naar de getallen in de tabel om te bepalen hoe lang je horizontale as en verticale as moet zijn.
		</div>
		<div class="col-xs-4">
			<img src="afbeeldingen/analyse_leerjaar_2/theorie_grafiek_tekenen_1.png"  >		
		</div>
	</div>	
	<br>
	<div class="row">
		<div class="col-xs-2">
			Stap 3
		</div>
		<div class="col-xs-5">
			Teken de punten uit de tabel in het assenstelsel.
		</div>
		<div class="col-xs-4">
			<img src="afbeeldingen/analyse_leerjaar_2/theorie_grafiek_tekenen_2.png"  >		
		</div>
	</div>	
	<br>
	<div class="row">
		<div class="col-xs-2">
			Stap 4
		</div>
		<div class="col-xs-5">
			Teken een vloeiende kromme (lijn) door de punten.<br>
			En zet de formule bij de grafiek.<br>
			Let op:<br>
			Stop de lijn niet bij het eerste en laatste punt, maar teken de grafiek door!
		</div>
		<div class="col-xs-4">
			<img src="afbeeldingen/analyse_leerjaar_2/theorie_grafiek_tekenen_4.png"  >		
		</div>
	</div>			
</div>

<div class="tekstblok opdracht" id="19">
	<h3>Opdracht 19</h3>
	<p>
		Teken de grafiek bij de formule:<br>
		`y = 3x^2 - 6x`<br>
		Gebruik daarbij de volgende tabel:
	</p>
	<div class="table-responsive verhouding">
		<table class="verhouding" >
			<tbody>
				<tr class="borderbottom">
					<td><em>x</em></td>
					<td colspan="2">-2</td>
					<td colspan="2">-1</td>
					<td colspan="2">0</td>
					<td colspan="2">1</td>
					<td colspan="2">2</td>
					<td colspan="2">3</td>	
					<td colspan="2">4</td>
				</tr>
				<tr>
					<td><em>y</em></td>
					<td colspan="2">...</td>
					<td colspan="2">...</td>
					<td colspan="2">...</td>
					<td colspan="2">...</td>
					<td colspan="2">...</td>
					<td colspan="2">...</td>
					<td colspan="2">...</td>
				</tr>			
			</tbody>
		</table>
	</div> 

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>x</em></td>
							<td colspan="2">-2</td>
							<td colspan="2">-1</td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>	
							<td colspan="2">4</td>
						</tr>
						<tr>
							<td><em>y</em></td>
							<td colspan="2">24</td>
							<td colspan="2">9</td>
							<td colspan="2">0</td>
							<td colspan="2">-3</td>
							<td colspan="2">0</td>
							<td colspan="2">9</td>
							<td colspan="2">24</td>
						</tr>			
					</tbody>
				</table>
			</div> 
			<br>
				<img class="img-medium" src="../afbeeldingen/analyse_leerjaar_2/parabool_bij_yis3xkwadraatmin6x.png" alt="parabool_bij_yis3xkwadraatmin6x" width="" height="" />
			</div>		
	</div>

</div>

<div class="tekstblok opdracht" id="20">
	<h3>Opdracht 20</h3>
		<div class="row">
			<div class="col-md-8">
				<p>
					Teken de grafiek bij de formule:<br>
					`y= -x^2 + 4x`<br>
					Gebruik daarbij de volgende tabel:
				</p>
				<div class="table-responsive verhouding">
					<table class="verhouding" >
						<tbody>
							<tr class="borderbottom">
								<td><em>x</em></td>
								<td colspan="2">-1</td>
								<td colspan="2">0</td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>	
								<td colspan="2">5</td>
							</tr>
							<tr>
								<td><em>y</em></td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
							</tr>			
						</tbody>
					</table>
				</div> 
			</div>
			<div class="col-md-4">
				<p class="geeltje">
					Gebruik `x^2` op je rekenmachine.<br>
					<img src="afbeeldingen/vaardigheden_leerjaar_1/texas_en_casio.png" alt="texas_en_casio" />
				</p>
			</div>
		</div>

		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<div class="table-responsive verhouding">
					<table class="verhouding" >
						<tbody>
							<tr class="borderbottom">
								<td><em>x</em></td>
								<td colspan="2">-1</td>
								<td colspan="2">0</td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>	
								<td colspan="2">5</td>
							</tr>
							<tr>
								<td><em>y</em></td>
								<td colspan="2">-5</td>
								<td colspan="2">0</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">3</td>
								<td colspan="2">0</td>
								<td colspan="2">-5</td>
							</tr>			
						</tbody>
					</table>
				</div> 
				<br>
				<img class="img-medium" src="../afbeeldingen/analyse_leerjaar_2/parabool_bij_yisminxkwadraatplus4x.png" alt="parabool_bij_yisminxkwadraatplus4x" width="" height="" />
			</div>		
		</div>

</div>

<div class="tekstblok opdracht" id="21">
	<h3>Opdracht 21</h3>
	<img src="afbeeldingen/analyse_leerjaar_2/foto_volleybal.PNG" >
	<p>
			Marit maakt een werkstuk over volleyballen. Op de foto hierboven zie je hoe Marit een bal onderhands wegslaat. In de
			tekening ernaast zie je de baan van de bal die vanaf de 1e achterlijn weggeslagen is. De bal gaat recht vooruit in de richting van de 2e achterlijn.
			Voor de baan van de bal gebruikt Marit de formule:
		</p>
		<p>
			<em>hoogte</em> ` = − 0,05 &sdot; a ^2 + 0,7 &sdot; a + 0,55`<br>
			<br>
			Hierin is <em>hoogte</em> de hoogte van de bal boven de grond en `a` de horizontale
			afstand vanaf het punt waar Marit de bal weggeslagen heeft. Zowel hoogte als
			`a` zijn in meters.
		</p>
	
	<ol>
		<li>
			Bereken met behulp van de formule op welke hoogte Marit de bal wegslaat. Schrijf je berekening op. 
		</li>
		<li>
			Neem de tabel hieronder over en vul hem in.<br>
			<br>
			<TABLE FRAME="void" RULES="all"  width="400px" style= "text-align: center">
			<TR>
				<TD width="100px"><em>`a`</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD><TD>8</TD><TD>9</TD><TD>10</TD><TD>11</TD><TD>12</TD>
			</TR>
			<TR>
				<TD width="100px"><em>hoogte</em></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD>						
			</TR>
			</TABLE><br>
		</li>
		<li>
			Teken de grafiek van de hoogte.
		</li>
	</ol>
	
	<div class="row">
		<div class="col-md-7">
			<p>
				Een volleybalveld heeft een lengte van `18` meter. Het net hangt in het midden.
				De bovenkant van het net hangt `2,24` meter boven de grond. <br>
				Hier zie je het bovenaanzicht van het volleybalveld en de baan van de bal.
			</p>
		</div>
		<div class="col-md-5">
			<img src="afbeeldingen/analyse_leerjaar_2/foto_veld.PNG" >
		</div>
	</div>
	<ol start="4">
		<li>
			Laat met een berekening zien dat de afstand tussen de bal en de bovenkant van het
			net 56 cm. is. 
		</li>
		<li>
			Komt de bal voor of achter de 2<sup>e</sup> achterlijn voor het eerst op de grond?
			Laat zien hoe je aan je antwoord komt. 
		</li>
	</ol>

	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						<em>hoogte</em> ` = − 0,05` &sdot; `a` <sup>2</sup> ` + 0,7`&sdot;`a + 0,55`<br>
						<em>hoogte</em> ` = − 0,05*0` <sup>2</sup> ` + 0,7*0 + 0,55`<br>
						<em>hoogte</em> ` = − 0,05*0 + 0,7*0 + 0,55`<br>
						<em>hoogte</em> ` = 0 + 0 + 0,55`<br>
						<em>hoogte</em> ` = 0,55`<br>
					</li>
						Neem de tabel hieronder over en vul hem in.<br>
						<br>
						<TABLE FRAME="void" RULES="all"  width="400px" style= "text-align: center">
						<TR>
							<TD width="100px"><em>`a`</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD><TD>8</TD><TD>9</TD><TD>10</TD><TD>11</TD><TD>12</TD>
						</TR>
						<TR>
							<TD width="100px"><em>hoogte</em></TD><TD>0,55</TD><TD>1,2</TD><TD>1.75</TD><TD>2,2</TD><TD>2,55</TD><TD>2,8</TD><TD>2,95</TD><TD>3</TD><TD>2,95</TD><TD>2,8</TD><TD>2,55</TD><TD>2,2</TD><TD>1,75</TD>						
						</TR>
						</TABLE><br>
					</li>
					<li>
						 <img class="img-small" src="afbeeldingen/analyse_leerjaar_2/volleybal.png" >
					</li>
					<li>
						Het veld is `18` meter lang. Het net hangt in het midden, dus op `9` meter. Vul  `a=9` in de formule in.<br>
						<em>hoogte</em> ` = − 0,05` &sdot; `a` <sup>2</sup> ` + 0,7`&sdot;`a + 0,55`<br>
						<em>hoogte</em> ` = − 0,05*9` <sup>2</sup> ` + 0,7*9 + 0,55`<br>
						<em>hoogte</em> ` = − 0,05*81 + 0,7*9 + 0,55`<br>
						<em>hoogte</em> ` = -4,05 + 6,3 + 0,55`<br>
						<em>hoogte</em> ` = 2,8`<br>
						Het net hangt op `2,24` meter en de bal komt op `2,8` meter.<br>
						Het net hangt op `224` centimeter en de bal komt op `280` centimeter.<br>
						Dus de bal komt `280-224 = 56` centimeter boven het net.
					</li>
					<li>
						De afstand tot de 2<sup>e</sup> achterlijn is `18` meter.<br>
						<em>hoogte</em> ` = − 0,05` &sdot; `a` <sup>2</sup> ` + 0,7`&sdot;`a + 0,55`<br>
						<em>hoogte</em> ` = − 0,05*18` <sup>2</sup> ` + 0,7*18 + 0,55`<br>
						<em>hoogte</em> ` = -3,05`<br>
						Dit is een negatief getal dus de bal komt voor de 2<sup>e</sup> achterlijn op de grond.
					</li>
				</ol>
						
			</div>		
		</div>
</div>

<div class="tekstblok theorie analyse" id="theorieE">
	<h3>Theorie E Formule kwadratisch verband</h3>
	<p>
		De formule van de korfballer is een voorbeeld van een <b>kwadratische formule</b>.
		Een kwadratische formule is altijd van de vorm:
	</p>
	<p>
		`y=ax^2 +bx + c` waarbij `a!=0`
	</p>
	<p>
		`a` is het getal <b>voor</b> `x^2`<br>
		`b` is het getal <b>voor</b> `x`<br>
		`c` is het losse getal.
	</p>
	<p>
		Neem de formule:<br>
		`H = -0,56a^2 + 3a + 2`.<br>
		Voor deze formule geldt:<br>
		`a = -0,56`<br>
		`b = 3`<br>
		`c = 2`<br>
		<br>
		Je ziet aan de waarde van `a` of het een bergparabool of een dalparabool is.<br>
		Als `a &lt; 0`, dan is het een <b>bergparabool</b>.<br>
		Als `a &gt; 0`, dan is het een <b>dalparabool</b>.<br>
	</p>
	<p>
		Twee voorbeelden:
	</p>
	
	<div class="row">
		<div class="col-md-6">
			<p>
				Voor de formule:<br>
				`y = 2x^2 + 3x + 4`
			</p>
			<p>
				geldt `a &gt; 0` dus <b>dalparabool</b>.
			<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_2/bergparabool.png">
			</p>
		
		</div>
		<div class="col-md-6">
			<p>
				Voor de formule:<br>
				`y = -2x^2 + 3x + 4`
			</p>
			<p>
				geldt `a &lt; 0` dus <b>bergparabool</b>.
			<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_2/dalparabool.png">
			</p>
		</div>
	
	</div>
	
</div>

<div class="tekstblok opdracht" id="22">
	<h3>Opdracht 22 (uitdaging)</h3>
	<p>
		In de theorie heb je gelezen dat bij een kwadratische formule de variabele `a` niet gelijk mag zijn aan nul.<br>
		Waarom mag `a` nooit nul zijn?
	</p>
			
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Vul voor de `a` nul in:<br>
				`0*x^2 + bx + c`<br>
				Bedenk: `0*x=0`<br>
				`0 + bx + c = bx + c`<br>
				Je ziet dat door de vermenigvuldiging met nul de term `x^2` verdwijnt. We houden nu geen kwadratische formule over maar een lineaire formule!
			</p>			
		</div>		
	</div>

</div>

<div class="tekstblok opdracht" id="23">
	<h3>Opdracht 23</h3>
	<ol>
		<li>
					Gegeven is de formule `y=2,4x^2+8x−3` Neem over en vul in:<br>
					`a`=...<br>
					`b`=...<br>
					`c`=...<br>
				</li>
		<li>
					Is de grafiek een bergparabool of een dalparabool?
				</li>
	</ol>			

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						`a= 2,4`<br>
						`b= 8`<br>
						`c= -3`<br>
					</li>
					<li>
						`a &gt; 0` dus <b>dalparabool</b>
					</li>
				</ol>		
			</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="24">
	<h3>Opdracht 24</h3>
	<ol>
		<li>
					Gegeven is de formule `y=-3x^2-x+3 1/2` Neem over en vul in:<br>
					`a`=...<br>
					`b`=...<br>
					`c`=...<br>
				</li>
		<li>
					Is de grafiek een bergparabool of een dalparabool?
				</li>
	</ol>
				
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						`a= -3`<br>
						`b= -1`<br>
						`c= 3 1/2`<br>
					</li>
					<li>
						`a &lt; 0` dus <b>bergparabool</b>
					</li>
				</ol>
					
			</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="25">
	<h3>Opdracht 25</h3>
	<p>
		Neem de formules hieronder over en noteer daaronder steeds de `a`, de `b` en de `c`. 
		Zet er steeds bij of het een bergparabool of een dalparabool is.
	</p>
	<ol class="machten">
		<li>
			`y=1 2/3 x`<sup>2</sup>`-4x+5 1/2`
		</li>
		<li>
			`y=-3x`<sup>2</sup>`+x-0,8`
		</li>
		<li>
			`y=-x`<sup>2</sup>`-4x+5 1/2`
		</li>
		<li>
			`y=0,74x`<sup>2</sup>`+x`
		</li>
		<li>
			`y=2x + 4x`<sup>2</sup>`-10`
		</li>
		<li>
			`y=7+ 3/4 x`<sup>2</sup>`+0,04x`
		</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol class="machten">
				<li>
					`a= 1 2/3`<br>
					`b= -4`<br>
					`c=5 1/2`<br>
					`a &gt; 0` dus <b>dalparabool</b>
				</li>
				<li>
					`a= -3`<br>
					`b= 1`<br>
					`c=-0,8`<br>
					`a &lt; 0` dus <b>bergparabool</b>
				</li>
				<li>
					`a= -1`<br>
					`b= -4`<br>
					`c= 5 1/2`<br>
					`a &lt; 0` dus <b>bergparabool</b>
				</li>
				<li>
					`a= 0,74`<br>
					`b= 1`<br>
					`c= 0`<br>
					`a &gt; 0` dus <b>dalparabool</b>
				</li>
				<li><aside class="tekstballon_theorie">
						Let op: de `a` is het getal voor `x^2`, maar hoeft niet altijd vooraan te staan!
						</aside>
					`a= 4`<br>
					`b= 2`<br>
					`c= -10`<br>
					`a &gt; 0` dus <b>dalparabool</b>
				</li>
				<li>
					`a= 3/4`<br>
					`b= 0,04`<br>
					`c= 7`<br>
					`a &gt; 0` dus <b>dalparabool</b>
				</li>
			</ol>
		</div>		
	</div>
</div>

<p class="geeltje">Vanaf hier is de taak enkel voor uitdaging.</p>


<div class="tekstblok theorie analyse" id="theorieF">
	<h3>Theorie E Coördinaten top (uitdaging)</h3>
	<p>
		Voor het maken van een tabel bij een kwadratisch verband is het handig om vooraf te weten wat de coördinaten van de top zijn. Je kunt dan snel de <em>x</em>-waarden van je tabel kiezen.
	</p>
	<p>
		De `x`-coördinaat van de top van de parabool bereken je met de formule:<br>
		`x`<sub>top</sub>`= - (b)/(2a)`<br>
		De bijbehorende `y`-coördinaat bereken je vervolgens door de gevonden `x`-coördinaat in te vullen in de formule.<br>
	</p>
	<p>
		<u>Voorbeeld</u>:<br>
		Bereken de top van de parabool `y=4 x^2 + 40x + 5`
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
							Bepaal de waarden van `a` en `b`. 
						</td>
						<td>
							`a = 4`<br>
							`b = 40`
						</td>
					</tr>
				<tr>
					<td>
						Stap 2
					</td>
					<td>
						Bereken `x`<sub>top</sub> met de formule door de waarden van `a` en `b` in te vullen.
					</td>
					<td>
						`x`<sub>top</sub>`= - (40)/(2 &sdot; 4) = -5`
					</td>
				</tr>
				<tr>
					<td>
						Stap 3
					</td>
					<td>
						Bereken `y`<sub>top</sub> door `x`<sub>top</sub> in de formule in te vullen.
					</td>
					<td>
						`y`<sub>top</sub>`=4 (-5)^2 + 40 &sdot; -5 + 5`<br>
						`y`<sub>top</sub>` =100 - 200 + 5 = -95`
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	
	<p>
		Dus coördinaten top: (-5, 95)
	</p>
</div>

<div class="tekstblok opdracht" id="26">
	<h3>Opdracht 26 (uitdaging)</h3>
	<ol>
		<li>
					Gegeven is de formule `y=3x^2+18x−4` Neem over en vul in:<br>
					`a`=...<br>
					`b`=...<br>
					`c`=...<br>
				</li>
		<li>
					Bereken de coördinaten van de top van de parabool.
				</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						`a= 3`<br>
						`b=18`<br>
						`c=-4`<br>
					</li>
					<li>
						`x`<sub>top</sub>`= - (b)/(2a)`<br>
						<br>
						`x`<sub>top</sub>`= - (18)/(2*3)`<br>
						<br>
						`x`<sub>top</sub>`= -(18)/(6)`<br>
						`x`<sub>top</sub>`= -3`<br>
						<br>
						`y`<sub>top</sub>`= 3x^2+18x−4`<br>
						`y`<sub>top</sub>`=3*(-3)^2 + 18*-3-4`<br>
						`y`<sub>top</sub>`=3*9 + 18*-3 -4`<br>
						`y`<sub>top</sub>`= 27  - 54 -4`<br>
						`y`<sub>top</sub>`=  -27 -4 = -31`<br>
						<br>
						Dus coördinaten top: `(-3, -31)`
					</li>
				</ol>
					
			</div>		
	</div>

</div>

<div class="tekstblok opdracht" id="27">
	<h3>Opdracht 27 (uitdaging)</h3>
	<ol>
		<li>
					Gegeven is de formule `y=-x^2+4x+5` Neem over en vul in:<br>
					`a`= ...<br>
					`b`= ...<br>
					`c`= ...<br>
				</li>
		<li>
					Bereken de coördinaten van de top van de parabool.
				</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						`a = -1`<br>
						`b = 4`<br>
						`c = 5`<br>
					</li>
					<li>
						
						`x`<sub>top</sub>`= - (b)/(2a)`<br>
						<br>
						`x`<sub>top</sub>`= - (4)/(2*-1)`<br>
						<br>
						`x`<sub>top</sub>`= -(4)/(-2)`<br>
						`x`<sub>top</sub>`= 2`<br>
						<br>
						`y`<sub>top</sub>`= -x^2+4x+5`<br>
						`y`<sub>top</sub>`=-2^2 + 4*2 + 5`<br>
						`y`<sub>top</sub>`=-4 + 4*2 +5`<br>
						`y`<sub>top</sub>`=-4 + 8 + 5 = 9`<br>
						<br>
						Dus coördinaten top: `(2, 9)`
					</li>
				</ol>
			</div>		
	</div>

</div>

<div class="tekstblok opdracht" id="28">
			<h3>Opdracht 28 (uitdaging)</h3>
			<ol>
				<li>
					Gegeven is de formule `y=5x^2-5x−4` Neem over en vul in:<br>
					`a`=...<br>
					`b`=...<br>
					`c`=...<br>
				</li>
				<li>
					Bereken de coördinaten van de top van de parabool.
				</li>
			</ol>

<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						`a = 5`<br>
						`b= -5`<br>
						`c= -4`<br>
					</li>
					<li>
						`x`<sub>top</sub>`= - (b)/(2a)`<br>
						<br>
						`x`<sub>top</sub>`= - (-5)/(2*5)`<br>
						<br>
						`x`<sub>top</sub>`= -(-5)/(10)`<br>
						`x`<sub>top</sub>`= 1/2`<br>
						<br>
						`y`<sub>top</sub>`= 5x^2-5x−4`<br>
						`y`<sub>top</sub>`= 5*(1/2)^2 - 5*1/2 - 4`<br>
						`y`<sub>top</sub>`= 5*1/4 - 5*1/2 - 4`<br>
						`y`<sub>top</sub>`= 5/4 -2 1/2 - 4 = -5 1/4 `<br>
						<br>
						Dus coördinaten top: `(1/2 , -5 1/4)`
					</li>
				</ol>
			</div>		
		</div>

</div>

<div class="tekstblok theorie analyse" id="theorieG">
	<h3>Theorie F Werkschema parabool (uitdaging)</h3>
	<p>
		Voor het tekenen van een parabool maak je een tabel met minstens zeven punten. Als je de `x`-coördinaat van de top in het midden zet, hoef je zo min mogelijk te rekenen.
	</p>
	<p>
		<u>Voorbeeld</u>:<br>	
		Teken de grafiek bij de formule:<br>
			`y=2x^2-12x+20`<br>
	</p>
	
	<div class="row">
		<div class="col-md-2">
			<p>
				Stap 1
			</p>
		</div>
		<div class="col-md-10">
			<p>
				Bereken de `x`-coördinaat van de top.<br>
			</p>
		</div>	
	</div>
	<br>
	<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-4">
			<p>
				`a = 2` <br>
				`b = -12`
			</p>
		</div>
		<div class="col-md-6">
			`x`<sub>top</sub>`= - (-12)/(2 &sdot; 2) = 3`
		</div>
	</div>
	<br>
	
	<div class="row">
		<div class="col-md-2">
			<p>
				Stap 2
			</p>
		</div>
		<div class="col-md-10">
			<p>
				Maak een tabel. Zet de `x`<sub>top</sub> in het midden van de bovenste rij. Kies aan beide kanten nog 3 getallen voor `x`.
			</p>
		</div>	
	</div>
	<br>
	<div class="row">
		<div class="col-md-2"> 
		</div>
		<div class="col-md-10">
			<div class="table-responsive verhouding">
					<table class="verhouding" >
						<tbody>
							<tr class="borderbottom">
								<td><em>x</em></td>
								<td colspan="2">0</td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>	
								<td colspan="2">5</td>
								<td colspan="2">6</td>
							</tr>
							<tr>
								<td><em>y</em></td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
							</tr>			
						</tbody>
					</table>
				</div>
		</div>
	</div>	
	<br>
	
	<div class="row">
		<div class="col-md-2">
			<p>
				Stap 3
			</p>
		</div>
		<div class="col-md-10">
			<p>
				Bereken de bijbehorende `y`-waarden.
			</p>
		</div>	
	</div>
	<br>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10">
			<p>
				voor `x = 3` geldt:	`y`<sub>top</sub> `= 2 &sdot; 3^2 - 12 &sdot; 3 + 20 = 2`
			</p>
			<p>
				voor `x = 2` en `x = 4` geldt: 	`y`<sub>top</sub> `= 2 &sdot; 2^2 - 12 &sdot; 2 + 20 = 4`
			</p>
			<p>
				voor `x = 1` en `x = 5` geldt: `y`<sub>top</sub> `= 2 &sdot; 1^2 - 12 &sdot; 1 + 20 = 10`
			</p>
			<p>
				voor `x = 0` en `x = 6` geldt: `y`<sub>top</sub> `= 2 &sdot; 0^2 - 12 &sdot; 0 + 20 = 20`
			</p>
		</div>
	</div>
	<br>	
	
	<div class="row">
		<div class="col-md-2">
			<p>
				Stap 4
			</p>
		</div>
		<div class="col-md-10">
			<p>
				Vul de tabel in en bepaal de assen van het assenstelsel.
			</p>
		</div>	
	</div>
	<br>
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10">
			<div class="table-responsive verhouding">
					<table class="verhouding" >
						<tbody>
							<tr class="borderbottom">
								<td><em>x</em></td>
								<td colspan="2">0</td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>	
								<td colspan="2">5</td>
								<td colspan="2">6</td>
							</tr>
							<tr>
								<td><em>y</em></td>
								<td colspan="2">20</td>
								<td colspan="2">10</td>
								<td colspan="2">4</td>
								<td colspan="2">2</td>
								<td colspan="2">4</td>
								<td colspan="2">10</td>
								<td colspan="2">20</td>
							</tr>			
						</tbody>
					</table>
				</div>
			<p>
				`x`-as: minimaal van 0 tot en met 6<br>
				`y`-as: minimaal van 2 tot en met 20
			</p>
		</div>
	</div>
	<br>
	
	<div class="row">
		<div class="col-md-2">
			<p>
				Stap 5
			</p>
		</div>
		<div class="col-md-10">
			<p>
				Teken het assenstelsel, zet de punten het de tabel erin. Verbind de punten met een vloeiende lijn en zet de formule erbij.
			</p>
		</div>	
	</div>
	<br>
	<div class="row">
		<div class="col-md-2">
		</div>	
		<div class="col-md-10">
			<img class="img-small" src="afbeeldingen/analyse_leerjaar_2/theorie_grafiek_tekenen_top.png" 
		</div>
	</div>
	</div>
</div>

<div class="tekstblok opdracht" id="29">
	<h3>Opdracht 29 (uitdaging)</h3>
	<p>
		Maak gebruik van de `x`<sub>top</sub> en teken de parabool bij de volgende formules:
	</p>
	<ol>
		<li>
			`y=2x^2-8x+1`
		</li>
		<li>
			`y=3x^2- 6x`
		</li>
		<li>
			`y = -x^2+ 4x`
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
						`a = 2`<br>
						`b =-8`<br>
						<br>
						`x`<sub>top</sub>`= - (b)/(2a)`<br>
						<br>
						`x`<sub>top</sub>`= - (-8)/(2*2)`<br>
						<br>
						`x`<sub>top</sub>`= -(-8)/(4)`<br>
						`x`<sub>top</sub>`= 2`<br>
						<br>
						`y=2x^2-8x+1`<br>
						`y`<sub>top</sub>`=2*2`<sup>2</sup>`-8*2 + 1`<br>
						`y`<sub>top</sub>`=2*4 - 16 + 1`<br>
						`y`<sub>top</sub>`=8 - 16 + 1`<br>
						`y`<sub>top</sub>`=-8+1 = -7`<br>
						<br>
						Dus coördinaten top: `T(2,-7)`<br>

						<TABLE FRAME="void" RULES="all"  width="200px" style= "text-align: center">
						<TR>
							<TD width="25px"><em>`x`</em></TD><TD width="50px">-1</TD><TD width="50px">0</TD><TD width="50px">1</TD><TD width="50px">2</TD><TD width="50px">3</TD><TD width="50px">4</TD><TD width="50px">5</TD>
						</TR>
						<TR>
							<TD width="25px"><em>y</em></TD><TD width="50px">11</TD><TD width="50px">1</TD><TD width="50px">-5</TD><TD width="50px">-7</TD><TD width="50px">-5</TD><TD width="50px">1</TD><TD width="50px">11</TD>						
						</TR>
						</TABLE><br>
						<img src="afbeeldingen/analyse_kwadratische_verbanden_hv/antwoord_opdracht_25.png"  width="225px" ></td>
					</li>
				<li>
					`a = 3`<br>
						`b =-6`<br>
						<br>
						`x`<sub>top</sub>`= - (b)/(2a)`<br>
						<br>
						`x`<sub>top</sub>`= - (-6)/(2*3)`<br>
						<br>
						`x`<sub>top</sub>`= -(-6)/(6)`<br>
						`x`<sub>top</sub>`= 1`<br>
						<br>
						`y=2x^2-8x+1`<br>
						`y`<sub>top</sub>`=3x^2- 6x`<br>
						`y`<sub>top</sub>`=3*1^2 - 6*1`<br>
						`y`<sub>top</sub>`=3*1 - 6`<br>
						`y`<sub>top</sub>`=3 - 6 = -3`<br>
						<br>
						Dus coördinaten top: `T(1,-3)`<br>

				<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
						<TR>
							<TD width="150px"><em>`a`</em></TD><TD>-2</TD><TD>-1</TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD>
						</TR>
						<TR>
							<TD width="150px"><em>Hoogte</em></TD><TD>24</TD><TD>9</TD><TD>0</TD><TD>-3</TD><TD>0</TD><TD>9</TD><TD>24</TD>					
						</TR>
				</TABLE><br>
				<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/opdracht_18.png"  width="225px" >

					
					</li>
				<li>
						`a = -1`<br>
						`b =4`<br>
						<br>
						`x`<sub>top</sub>`= - (b)/(2a)`<br>
						<br>
						`x`<sub>top</sub>`= - (4)/(2*-1)`<br>
						<br>
						`x`<sub>top</sub>`= -(4)/(-2)`<br>
						`x`<sub>top</sub>`= 2`<br>
						<br>
						`y=2x^2-8x+1`<br>
						`y`<sub>top</sub>`=-x`<sup>2</sup>`+ 4x`<br>
						`y`<sub>top</sub>`=-2^2 + 4*2`<br>
						`y`<sub>top</sub>`=-4 +8 = 4`<br>
						<br>
						Dus coördinaten top: `T(2,4)`<br>

				<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
						<TR>
							<TD width="150px"><em>`x`</em></TD><TD>-1</TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD>
						</TR>
						<TR>
							<TD width="150px"><em>`y`</em></TD><TD>-5</TD><TD>0</TD><TD>3</TD><TD>4</TD><TD>3</TD><TD>0</TD><TD>-5</TD>					
						</TR>
			</TABLE><br>
			<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/opdracht_19.png"  width="225px" >
		

					
					</li>
			</ol>
		</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="30">
		<h3>Opdracht 30 (uitdaging)</h3>
		<p>Hieronder zie je een boogbrug die de vorm heeft van een parabool. De formule die bij de parabool hoort, is 
			`h=1,5a-0,25a^2`.
			<img src="afbeeldingen/analyse_kwadratische_verbanden_hv/boogbrug.PNG"  width="350px" ><br>
			In deze formule is `h` de hoogte van de brug in meters, en `a` de afstand vanaf de linkerkant van de brug in meters.
		</p>
			<ol>
				<li>Neem de tabel hieronder over en vul hem in. <br>
					<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
						<TR>
							<TD><em>`a`</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD>
						</TR>
						<TR>
							<TD><em>`h`</em></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD>
						</TR>
					</TABLE>
				</li>
				<li>
					Hoe hoog ligt het hoogste punt van de brug boven het water?
				</li>
				<li>
					Hoe breed is de brug?
				</li>
			</ol>
			
			<div class="row">
				<div class="col-md-7">
					<ol start="4">
				
				
				<li>
		Een klein containerbootje zoals op het plaatje hiernaast is aan de voorkant `3` meter 
		breed en komt 1.60 meter boven het water uit. Het bootje vaart precies in het midden 
		onder de brug door. <br>
		Laat met een berekening zien dat dit bootje onder de brug door past.
				</li>
			</ol>
				</div>
				<div class="col-md-5">
									<img class="img-small" src="afbeeldingen/analyse_kwadratische_verbanden_hv/containerboot.PNG"  class="rightfloat"  >

				</div>
			</div>
			
			
			
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
							<ol>
								<li><br>
									<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
										<TR>
											<TD><em>`a`</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD>
										</TR>
										<TR>
											<TD><em>`h`</em></TD><TD>`0`</TD><TD>`1,25`</TD><TD>`2`</TD><TD>`2,25`</TD><TD>`2`</TD><TD>`1,25`</TD><TD>`0`</TD><TD>`-1,75`</TD>
										</TR>
									</TABLE>
					</li>
					<li>
						Aflezen uit de tabel:`2,25` meter
					</li>
					<li>
						Aflezen uit de tabel: Bij 0 en 6 meter is de hoogte van de brug 0 meter, dus daar raakt hij het water. De brug is dus 6 meter breed.
					</li>
					<li>
						Het midden van de brug is bij a=3 meter. De boot is 3 meter breed, die gaat dus van a=`1,5`m tot `4,5`m. Vul `1,5`(of `4,5`) in in de formule:<br>
						`h=1,5*1,5-0,25*(1,5^2) = 1,685`<br>
						De boot van `1,6` meter hoogte past er dus door.
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