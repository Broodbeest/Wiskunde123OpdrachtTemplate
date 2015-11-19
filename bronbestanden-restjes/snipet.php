 <canvas width="600" height="250" id="cvs_bar" style="float: right"></canvas>

    <script>
        $(document).ready(function ()
        {
            var line = new RGraph.Line('cvs_bar', [[100,-60],[-65,-30]])
                .set('colors', ['rgba(255, 176, 176, 0.5)', 'rgba(153, 208, 249,0.5)']) 
                 .set('labels', ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])
               
                .set('tooltips', ['Teijl','Kees','Kevin','Kevin','John','John','Gregory','Gregory'])
                .set('tooltips.event', 'onmousemove')
                .set('ymax', 100)
                .set('ylabels.count', 2)
                .set('hmargin.grouped', 2)
                .set('title', 'Bar chart with tooltips and interactive key')
                .set('gutter.top', 50)
                .set('gutter.left', 80)
                .set('gutter.right', 15)
                .set('gutter.bottom', 50)
                .set('axis.linewidth',1) /* dikte van de x-as */
                .set('chart.title.xaxis','maanden van het jaar')
                .set('chart.title.xaxis.pos', 0.3) /* positie van de titel van de x-as */
                .set('chart.title.yaxis','uitgaven bezoeker')
                .set('chart.title.yaxis.pos', 0.3)
                .set('xaxispos', 'center')

                .draw()
        });
    </script>
    
<table class="verhouding">
		
		<tbody>
			<tr class="borderbottom">
				<td><em>nummer figuur</em></td>
				<td colspan="2">0</td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
			</tr>
			<tr>
				<td><em>aantal sterren</em></td>
				<td colspan="2"><FONT color="red">3</FONT></td>
				<td colspan="2">5</td>
				<td colspan="2">7</td>
				<td colspan="2">9</td>
				<td colspan="2">11</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr>
				<th colspan="2"></th>
				<th colspan="2"><img class="responsive-img" src="afbeeldingen/algemeen/lrpijlonder.png" alt="lrpijlonder" width="15px" height="10px" /><br><FONT color="green">+ 2</FONT></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br><FONT color="green">+ 2</FONT></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br><FONT color="green">+ 2</FONT></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br><FONT color="green">+ 2</FONT></th>
				
				<th></th>
			</tr>
		</tfoot>	
		</table>
		
		

<div class="row">
	<div class="col-md-2">
		<p>Stap 1</p>
	</div>
	<div class="col-md-5">
		<p>
		
		</p>
	</div>
	<div class="col-md-5">
	
	</div>			
</div>
<div class="row">
	<div class="col-md-2">
		<p>Stap 2</p>
	</div>
	<div class="col-md-5">
		<p>
		
		</p>
	</div>
	<div class="col-md-5">
		<p>
		
		</p>
	</div>			
</div>
<div class="row">
	<div class="col-md-2">
		<p>Stap 3</p>
	</div>
	<div class="col-md-5">
		<p>
		
		</p>
	</div>
	<div class="col-md-5">
		<p>
		
		</p>
	</div>			
</div>
<div class="row">
	<div class="col-md-2">
		<p>Stap 4</p>
	</div>
	<div class="col-md-5">
		<p>
		
		</p>
	</div>
	<div class="col-md-5">
		<p>
		
		</p>
	</div>			
</div>
<div class="row">
	<div class="col-md-2">
		<p>Stap 5</p>
	</div>
	<div class="col-md-5">
		<p>
		
		</p>
	</div>
	<div class="col-md-5">
		<p>
		
		</p>
	</div>			
</div>
<div class="row">
	<div class="col-md-2">
		<p>Stap 6</p>
	</div>
	<div class="col-md-5">
		<p>
		
		</p>
	</div>
	<div class="col-md-5">
		<p>
		
		</p>
	</div>			
</div>
<div class="row">
	<div class="col-md-2">
		<p>Stap 7</p>
	</div>
	<div class="col-md-5">
		<p>
		
		</p>
	</div>
	<div class="col-md-5">
		<p>
		
		</p>
	</div>			
</div>