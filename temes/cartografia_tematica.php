<?php require_once("../resources/php/includes/header.php"); ?>

<div id="headerViews" class="row restPublic">
	<div id="cartografia_tematica">
		<h1>Cartografia Temàtica</h1>
	</div>
</div>

<div class="mainBody row clear-fix">

	<div class="content">
		<div class="col-md-6">
			<h1 id="info">Info</h1>
			<span class="hz"></span>
			<p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<div class="col-md-6">
			<div class="mapVertex">
				<iframe src="http://www.mygooltracking.com/public/c81e728d9d4c2f636f067f89cc14862c?&baseLayer=1&mainTab=0&wb=0&rutas=599&sw=41.976362,2.818959&ne=41.987463,2.84209"></iframe>
			</div>
		</div>

		<div class="col-md-12">
			
			<ul class="nav nav-tabs" id="viewTabs" role="tablist"> 
				<li role="presentation" class="active">
					<a href="#descarregues" id="descarregues-tab" role="tab" data-toggle="tab" aria-controls="descarregues" aria-expanded="true">Cartografia temàtica</a>
				</li> 


				<li role="presentation" class=""> 
					<a href="#cartografia_topografica" id="cartografia_topografica-tab" data-toggle="tab" aria-controls="cartografia_topografica" aria-expanded="true">Cartografia topogràfica</a> 
				</li>

				<li role="presentation" class="">
					<a href="#acords_de_cessio_de_cartografia" role="tab" id="acords_de_cessio_de_cartografia-tab" data-toggle="tab" aria-controls="acords_de_cessio_de_cartografia" aria-expanded="false">Acords de cessió de cartografia</a>
				</li> 
			</ul>

			<div class="tab-content" id="tabContent"> 
				<div class="tab-pane fade active in" role="tabpanel" id="descarregues" aria-labelledby="descarregues-tab"> 
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
	
					<table id="descarregaCartografia" class="table" cellspacing="0" width="100%"></table>

				</div> 

				<div class="tab-pane fade" role="tabpanel" id="cartografia_topografica" aria-labelledby="cartografia_topografica-tab"> 
					<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
				</div> 

				<div class="tab-pane fade" role="tabpanel" id="acords_de_cessio_de_cartografia" aria-labelledby="acords_de_cessio_de_cartografia-tab"> 
					<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p> 
				</div> 
			</div>
		</div>
	</div>
</div>

<?php require_once("../resources/php/includes/footer.php"); ?>