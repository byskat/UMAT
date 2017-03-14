<div id="headerViews" class="row restPublic">
	<div id="cartografia">
		<h1>Cartografia</h1>
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
			<figure class="stylizedImg viewImg">
				<a href="#"><img class="img-fluid" src="http://localhost/frame/img/headerViews/cartografia.jpg">
				<span class="infoBox">Lorem</span></a>
			</figure>
		</div>

		<div class="col-md-12">
			
			<ul class="nav nav-tabs" id="viewTabs" role="tablist"> 
				<li role="presentation" class="active">
					<a href="#cartografia_tematica" id="cartografia_tematica-tab" role="tab" data-toggle="tab" aria-controls="cartografia_tematica" aria-expanded="true">Cartografia temàtica</a>
				</li> 


				<li role="presentation" class=""> 
					<a href="#cartografia_topografica" id="cartografia_topografica-tab" data-toggle="tab" aria-controls="cartografia_topografica" aria-expanded="true">Cartografia topogràfica</a> 
				</li>

				<li role="presentation" class="">
					<a href="#acords_de_cessio_de_cartografia" role="tab" id="acords_de_cessio_de_cartografia-tab" data-toggle="tab" aria-controls="acords_de_cessio_de_cartografia" aria-expanded="false">Acords de cessió de cartografia</a>
				</li> 
			</ul>

			<div class="tab-content" id="tabContent"> 
				<div class="tab-pane fade active in" role="tabpanel" id="cartografia_tematica" aria-labelledby="cartografia_tematica-tab"> 
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 

					<style type="text/css">
						.downloadContainer {
							width: 100%;
							margin-top: 10px;
						}

						.downloadItem {
							font-family: Arial;
							padding: 10px;

							display: none;
						}

						.downloadItem:nth-child(even) {
							background-color: #f5f4f3;
						}

						.downloadItem>td {
							padding: 5px 10px;
						}

						.downloadItem>td:nth-last-child {
							width: 60px;
						}

						.downloadHeader {
							font-family: Oswald;
							font-weight: normal;
							/*color: #C99C3D;*/
							font-size: 18px;
						}

						.downloadHeader>button {
							margin-left: 5px;
							border: 0;
							background-color: #fff;
						}

						.downloadButton, .downloadLink {
							float: right;
						}

						a.downloadButton {
							color: #000;
						}

					</style>

					<script type="text/javascript">
						$.getScript("includes/js/download.js", function(){

							var url = "includes/js/data/downloads.json"; 

							getData(url,function(data){
								var table = generateDownloadTable(data);
								$("#cartografia_tematica").append(table);
							});
						});
					</script>
				</div> 

				<div class="tab-pane fade" role="tabpanel" id="cartografia_topografica" aria-labelledby="cartografia_topografica-tab"> 
					<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
				</div> 

				<div class="tab-pane fade" role="tabpanel" id="acords_de_cessio_de_cartografia" aria-labelledby="acords_de_cessio_de_cartografia-tab"> 
					<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p> 
				</div> 
			</div>


			<script>
				$('#viewTabs a').click(function (e) {
				  e.preventDefault()

				  $(this).tab('show')
				})
			</script>
		</div>


		<div class="col-md-12">
			<p>* Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore <a href="#">magna aliqua</a>.</p>
		</div>


	</div>

</div>


<!--

					<div class="buttonBox">
						<a href="#" class="btn mapaBase"><i class="fa fa-map" aria-hidden="true"></i>Cartografía base</a>
						<a href="#" class="btn mapaUrbanisme"><i class="fa fa-building" aria-hidden="true"></i>Urbanisme</a>
						<a href="#" class="btn mapaTurisme"><i class="fa fa-info-circle" aria-hidden="true"></i>Turisme</a>
						<a href="#" class="btn mapaEducacio"><i class="fa fa-book" aria-hidden="true"></i>Educació</a>
						<a href="#" class="btn mapaSS"><i class="fa fa-group" aria-hidden="true"></i>Serveis socials</a>
						<a href="#" class="btn mapaEsports"><i class="fa fa-soccer-ball-o" aria-hidden="true"></i>Esports</a>
						<a href="#" class="btn mapaSalut"><i class="fa fa-heartbeat" aria-hidden="true"></i>Salut</a>
						<a href="#" class="btn mapaHisenda"><i class="fa fa-institution " aria-hidden="true"></i>Hisenda</a>
						<a href="#" class="btn mapaSostenibilitat"><i class="fa fa-leaf" aria-hidden="true"></i>Sostenibilitat i medi ambient</a>
						<a href="#" class="btn mapaMobilitat"><i class="fa fa-bus" aria-hidden="true"></i>Mobilitat i vía pública</a>
						<a href="#" class="btn mapaDocument"><i class="fa fa-file" aria-hidden="true"></i>Gestió documental, arxius i publicacions</a>
						<a href="#" class="btn mapaAnalitica"><i class="fa fa-pie-chart" aria-hidden="true"></i>Cartografía analítica</a>
					</div>

-->