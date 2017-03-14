
<?php require_once("../resources/php/includes/header.php"); ?>

<div id="headerViews" class="row restPublic">
	<div id="topografia">
		<h1>Topografia</h1>
	</div>
</div>

<div class="mainBody row clear-fix">

	<div class="content">
		<div class="col-md-6">
			<p class="intro">La base topogràfica municipal està dissenyada per la seva integració el Sistema d'informació <b>Territorial de l'Ajuntament de Girona</b> (SIT). La Unitat Municipal d'Anàlisi Territorial (UMAT), assumeix les tasques de la producció i manteniment de la base. </p>
		</div>

		<div class="col-md-6">
			<div id="carousel-topografia" class="carousel slide viewImg" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-topografia" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-topografia" data-slide-to="1"></li>
			  </ol>

			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="http://localhost/frame/img/headerViews/cartografia.jpg" alt="...">
			    </div>
			    <div class="item">
			      <img src="http://localhost/frame/img/headerViews/cartografia.jpg" alt="...">
			    </div>
			  </div>

			  <a class="left carousel-control" href="#carousel-topografia" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-topografia" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>

		<div class="col-md-12">
			
			<ul class="nav nav-tabs" id="viewTabs" role="tablist"> 
				<li role="presentation" class="active">
					<a href="#btm" id="btm-tab" role="tab" data-toggle="tab" aria-controls="btm" aria-expanded="true">Base Topogràfica Municipal (BTM)</a>
				</li> 


				<li role="presentation" class=""> 
					<a href="#descarrega" id="descarrega-tab" data-toggle="tab" aria-controls="descarrega" aria-expanded="true">Descàrrega</a> 
				</li>

				<li role="presentation" class="">
					<a href="#documentacio" role="tab" id="documentacio-tab" data-toggle="tab" aria-controls="documentacio" aria-expanded="false">Documentació</a>
				</li> 
			</ul>

			<div class="tab-content" id="tabContent"> 
				<div class="tab-pane fade active in" role="tabpanel" id="btm" aria-labelledby="btm-tab"> 
					
					<ul>
						<li>
							<p>La base topogràfica 1:500 de Girona representa la digital d’imatge aèria de successius vols fotogramètrics. També incorpora dades de llicència d'obra i altre informació del SIT municipal.</p>
						</li>
						<li>
							<p>La cartografia s'actualitza tan per àmbits com per nivells d'informació segons les necessitats de la gestió administrativa local.</p>
						</li>
						<li>
							<p>Des de juliol de 2015, la versió 3 de les bases topogràfiques cartografia urbana de la ciutat de Girona i la base topogràfica 1:2000 representa tot l'àmbit municipal.</p>
						</li>
						<li>
							<p>Les dades s'obtenen per taquimetria i per restitució 1:500 i 1:2000 es distribueixen senceres com a bases contínues. Es distribueix un únic arxiu per escala o format. Desapareix l’antiga unitat de distribució per fulls.</p>
						</li>
					</ul>
				</div> 

				<div class="tab-pane fade" role="tabpanel" id="descarrega" aria-labelledby="descarrega-tab"> 
					<div class="row">
						<div class="col-md-8">
							<h4>Base topogràfica i Altimetria <span class="topografiaSubtitle">Base topogràfica continua. Arxiu únic.</span></h4>
					    	
							<table id="descarregaTopografia" class="table" cellspacing="0" width="100%"></table>
					    </div>
					    <div class="col-md-4">
					    	<h4>Cartografia per àmbit <span class="topografiaSubtitle">Retall de l'usuari</span></h4>
					    	
					    	<p class="DCVseparator">El servei de descàrrega de cartografia per àmbit, envia per correu electrònic una extensio de 400x400 metres del plànol topogràfic, en format DGN, DWG o PDF. Permet la cerca per adreça, referència cadastral o escollir un àmbit des del mapa interactiu.</p>
					    	<a href="http://terra.girona.cat/vu/descarrega_cartografia_vectorial/?eina=dcv" class="btn btn-default">DCV <i class="fa fa-external-link" aria-hidden="true"></i></a>
						</div>
						<div class="col-md-12">
							<p class="minor-text">Cartografia inscrita i dipositada al <a href="http://www.rcc.cat/web/rcccontent/ca/oficialitat.html" target="_blank">Registre Cartogràfic de Catalunya</a>(RCC). <a class="linkUpdate" href="http://www.girona.cat/umat/cat/actualitat2.php?idReg=95510" target="_blank">Més informació.</a></p>

							<p class="minor-text">D'acord amb del conveni de col·laboració entre el Departament de Territori i Sostenibilitat de la Generalitat de Catalunya i aquest Ajuntament per a la delegació de l'oficialització de l'actualització contínua de la cartografia topogràfica a escala 1:500 i 1:2000 que aquest genera entre inscripcions al Registre Cartogràfic de Catalunya, la cartografia topogràfica que s'ofereix té caràcter oficial. Les bases cartogràfiques registrades són accessibles a la web del Registre Cartogràfic de Catalunya.</p> 

							<p class="minor-text">L'ús i funció de la base topogràfica oficial queda regulat a la Llei i Reglament de la informació geogràfica (<a href="http://dogc.gencat.cat/ca/pdogc_canals_interns/pdogc_resultats_fitxa/?documentId=440028&language=ca_ES&action=fitxa" target="_blank">Llei 16/2005, de 27 de desembre</a> - <a href="http://dogc.gencat.cat/ca/pdogc_canals_interns/pdogc_resultats_fitxa/?documentId=459933&language=ca_ES&action=fitxa" target="_blank">Decret 398/2006, de 24 d'octubre</a>).
							</p>
						</div>
					</div>
					<div style="clear: both;"></div>
				</div> 

				<div class="tab-pane fade" role="tabpanel" id="documentacio" aria-labelledby="documentacio-tab"> 
					<ul>
						<li>
							<p><b>Oficialitat</b><br>La base topogràfica municipal està inscrita al <a href="http://www.rcc.cat/" target="_blank">Registre Cartogràfic de Catalunya</a>(RCC) i des del 20 de desembre de 2010 és la cartografia ofical a tots els efectes de conformitat amb l'article 20.9 del <a href="http://www.gencat.cat/diari/4748/06292021.htm" target="_blank">decret 398/2006 de 24 d'octubre</a>, pel qual s'aprova el desenvolupament de la <a href="http://www.gencat.cat/diari/4543/05361027.htm" target="_blank">Llei 16/2005, de 27 de desembre</a>, de la informació geogràfica i de l'Institut Cartogràfic de Catalunya. <a href="" target="_blank"></a>Més informació...</p>
							<p>Actualització de la cartografia oficial:<br>
							- versió 2.1 inscrita a la secció oficial del RCC el 2 d'agost de 2013<br>
							- versió 3 inscrita a la secció oficial del RCC el 13 d'abril de 2016
							</p>
						</li>
						<li>
							<p><b>Plecs d’especificacions tècniques</b> (descarrega de PDFs)</p>
							<p>
								<a href="#" class="downloadButton btn btn-default" target="_blank">BTM 1:500 v3 <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
								<a href="#" class="downloadButton btn btn-default" target="_blank">BTM 1:2000 v3 <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
							</p>
						</li>
					</ul>
				</div> 
			</div>
		</div>
	</div>
</div>

<?php require_once("../resources/php/includes/footer.php"); ?>