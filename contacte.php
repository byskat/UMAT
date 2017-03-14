<?php include("resources/php/includes/header.php"); ?> 

<div id="contact" class="row">
	<div class="col-md-6">
		<h1>Contacte</h1>
		<span class="hz"></span>

		<form id="formContact">
			<div class="form-group">
				<label for="name">Nom</label>
				<input class="formControl" type="text" id="name">
			</div>
			<div class="form-group">
				<label for="telf">Telèfon</label>
				<input class="formControl" type="tel" id="telf">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="formControl" id="email">
			</div>
			<div class="form-group">
				<label for="comment">Comentari</label>
				<textarea class="formControl" id="comment" rows="3"></textarea>
			</div>

			<button type="submit" class="btn btnSend"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
		</form>
	</div>
	<div class="col-md-6">
		<h1>On ens pots trobar</h1>
		<span class="hz"></span>
		<ul class="contactInfo">
			<li><h3>Adreça</h3></li>
			<li>Carrer dels Banyoles, 17acc</li>
			<li>17004 GIRONA</li>

			<li><h3>Telèfon</h3></li>
			<li>(+34) 972 419 417</li>
			
			<li><h3>Email</h3></li>
			<li>umat@ajgirona.cat</li>

			<li><h3>Horari</h3></li>
			<li>Dilluns a divendres,</li>
			<li>de 8 a 15 h</li>
		</ul>
	</div>
	
	<div class="col-md-12 no-padding" style="overflow: hidden">
		<div id="map">
			<iframe src="http://www.girona.cat/planol/?q=UMAT"></iframe>
		</div>
	</div>

</div> <!-- END contact -->

<?php include("resources/php/includes/footer.php"); ?> 
