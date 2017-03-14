<?php require_once("../resources/php/includes/header.php"); ?>

<div id="headerViews" class="row restPublic">
	<div id="geodesia">
		<h1>Geodèsia</h1>
	</div>
</div>

<div class="mainBody row clear-fix">
	<div class="content">
		<div id="baseElement" class="col-md-6">
			<h1 id="info">Xarxa Topogràfica Municipal (XTM)</h1>
			<span class="hz"></span>
			<p class="intro">Els treballs topogràfics que es realitzen per fer cartografia urbana a qualsevol escala serveixen per relacionar els diferents elements que han de reflectir-se en un plànol, situant-los segons un sistema de referència preestablert. Aquest sistema de referència ve donat per les xarxes geodèsiques. El disseny d'aquestes xarxes es fa en funció de les característiques del terreny i pot ésser observada per mètodes geodèsics o per mètodes topogràfics, segons el nivell de precisió que es vulgui assolir.</p>


			<ul class="nav nav-tabs" id="viewTabs" role="tablist"> 
				<li role="presentation" class="active">
					<a href="#xtm" id="xtm-tab" role="tab" data-toggle="tab" aria-controls="xtm" aria-expanded="true">XTM</a>
				</li> 


				<li role="presentation" class=""> 
					<a href="#xu" id="xu-tab" data-toggle="tab" aria-controls="xu" aria-expanded="true">XU</a> 
				</li>

				<li role="presentation" class=""> 
					<a href="#descarrega" id="descarrega-tab" data-toggle="tab" aria-controls="descarrega" aria-expanded="true">Descàrrega</a> 
				</li> 

				<li role="presentation" class="">
					<a href="#documentacio" role="tab" id="documentacio-tab" data-toggle="tab" aria-controls="documentacio" aria-expanded="false">Documentació</a>
				</li> 
			</ul>

			<div class="tab-content" id="tabContent"> 
				<div class="tab-pane fade active in" role="tabpanel" id="xtm" aria-labelledby="xtm-tab"> 
					
					<p>Amb distribució de vèrtexs de la Xarxa Topogràfica Municipal (XTM) s'estableix un sèrie de punts que s’adapten a les necessitats dels seus usuaris i als condicionants propis del territori que garanteixen l’alta precisió requerida en els treballs de cartografia a totes les escales. Per a poder conèixer la descripció, la ubicació, les coordenades i altra informació relacionada amb els vèrtex geodèsics es genera una ressenya del senyal.</p> 

					<ul>
						<li>
							<p>La XTM està formada per una sèrie de poligonals principals i secundàries enllaçades en vèrtexs a la Xarxa Utilitària (XU) i té una densitat major de punts.</p>
						</li>
						<li>
							<p>Està formada per 600 vèrtexs aproximadament i la densitat mitjana és entre 300 i 500 metres.</p>
						</li>
						<li>
							<p class="no-margin">Els vèrtexs estan materialitzats amb geopunts oficials de l'Ajuntament de Girona.</p>

							<div class="col-md-6">
								<img class="vertexImg img-responsive pull-right" src="/umat/resources/img/temes/geodesia/vertex_1.jpg">
							</div>
							<div class="col-md-6">
								<img class="vertexImg img-responsice pull-left" src="/umat/resources/img/temes/geodesia/vertex_2.jpg">
							</div>
							<div style="clear:both;"></div>
						</li>
						<li>
							<p>El nom dels vèrtexs estan formats per un prefix, GI, seguit de quatre números, el primer dels quals, indica el barri on es troba.</p>
						</li>
						<li>
							<p>L'assignació del primer número per cada barri és la següent:</p>
							<p>
								<span class="vertexHighlight">GI1000</span>: Barri Nord (Pedret, Pont Major i Campdorà)<br>
								<span class="vertexHighlight">GI2000</span>: Barri Oest (Domeny, Taialà, Germans Sàbat, , Fontajau i Sant Ponç)<br>
								<span class="vertexHighlight">GI3000</span>: Barri de Montjuic<br>
								<span class="vertexHighlight">GI4000</span>: Barri Centre (Barri Vell, Mercadal, Carme)<br>
								<span class="vertexHighlight">GI5000</span>: Barri de Santa Eugènia (Sta Eugènia i Can Gibert del Pla)<br>
								<span class="vertexHighlight">GI6000</span>: Barri Eixample (Eixample Nord i Sud)<br>
								<span class="vertexHighlight">GI7000</span>: Barri Mas Xirgu<br>
								<span class="vertexHighlight">GI8000</span>: Barri Sud (Montilivi, Palau, Avellaneda i La Creueta)<br>
								<span class="vertexHighlight">GI9000</span>: Barri Est (Sant Daniel, Torre Gironella, Pedreres, Font de la Pólvora i Vila Roja i Gavarres
							</p>
						</li>

					</ul>

				</div> 

				<div class="tab-pane fade" role="tabpanel" id="xu" aria-labelledby="xu-tab"> 
					<p><a target="_blank" href="http://www.icgc.cat/Administracio-i-empresa/Serveis/Posicionament/Senyals-geodesics2">L'Institut Cartogràfic i Geològic de Catalunya</a>, conjuntament amb l'Ajuntament de Girona, crea la <b>Xarxa Utilitària (XU)</b>.<br>
					Un cop establerta la Xarxa Utilitària obtenim un conjunt de vèrtexs geodèsics repartits uniformement per tot el territori, que seran enllaçats mitjançant una Xarxa de Poligonals Principals i Secundàries conformant una Xarxa d’ordre inferior creada per l'Ajuntament de Girona, les quals serviran per establir bases topogràfiques de precisió, el conjunt d'aquestes bases formen la <b>Xarxa Topogràfica Municipal (XTM)</b>.
					</p>

					<ul>
						<li>
							<p>La xarxa utilitària és un xarxa mesurada amb GPS, resultat de la densificació de les xarxes d'ordre superior. Aquesta xarxa s'ha creat seguint les Especificacions tècniques per al Disseny i Monumentació de la Xarxa Utilitària de Catalunya, emeses per l'Institut Cartogràfic i Geològic de Catalunya, i la <a target="_blank" href="http://www.icc.cat/cat/content/download/48755/337804/file/Llei_11_1994_senyals_geodesics.pdf">Llei 11/1994 sobre senyals geodèsics</a>, de l'11 de juliol de 1994 (pdf 32 KB), publicada al DOGC núm. 1923 - 20/7/1994.</p>
						</li>
						<li>
							<p>Està formada per 41 vèrtexs repartits de forma homogènia i abasten la totalitat del terme municipal (sòl urbà i sòl rústic).</p>
						</li>
						<li>
							<p>La majoria dels vèrtexs Geodèsics estan ubicats en lloc elevats o destacats, amb visibilitat en la major part de l'horitzó garantint la visibilitat a almenys dos punts de la mateixa xarxa.</p>	
						</li>
						<li>
							<p>Densitat mitjana de la xarxa: Zona urbana: 800m - Zona rústica : 1000 - 1200m</p>
						</li>
						<li>
							<p>Els vèrtexs estan materialitzats amb els senyals oficials de l'I.C.G.C.</p>
						</li>
						<li>
							<p>A Girona les ressenyes dels vèrtexs de la XU s’identifiquen del 304097015 al 306098015 <a target="_blank" href="http://www.icgc.cat/Administracio-i-empresa/Serveis/Posicionament/Senyals-geodesics2">http://www.icgc.cat/Administracio-i-empresa/Serveis/Posicionament/Senyals-geodesics2</a></p>
						</li>

					</ul>
				</div> 

				<div class="tab-pane fade" role="tabpanel" id="descarrega" aria-labelledby="descarrega-tab"> 
					<table id="vertex" class="display table table-striped table-hover" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>#</th>
				                <th>X</th>
				                <th>Y</th>
				                <th>X</th>
				                <th></th>
				                <th></th>
				            </tr>
				        </thead>
				    </table>				
			    </div> 

				<div class="tab-pane fade" role="tabpanel" id="documentacio" aria-labelledby="documentacio-tab"> 
					<ul>
						<li>
							<p><b>Normativa Vigent</b><br>Article 10.4 de la Llei 16/2005, de 27 de desembre, de la informació geogràfica i de l’institut Cartogràfic de Catalunya</p>
						</li>
						<li>
							<p><b>Oficialitat</b><br>L'Ajuntament de Girona, a través de la UMAT té la competència del manteniment i control de la XTM, d'acord amb els paràmetres especificats en el Plec d’Especificacions Tècniques de Xarxes Geodèsiques, pel qual la XTM forma part del SPGIC (Servei de Posicionament Geodèsic Integrat de Catalunya).<br>Aquest document està pendent d'aprovació per la 
							<a target="_blank" href="http://territori.gencat.cat/ca/01_departament/03_atencio_a_la_ciutadania_i_participacio/05_consells_socials_i_ens_de_participacio_ciutadana/cartografia_i_informacio_geografica/">Comissió de Coordinació Cartogràfica de Catalunya (C4)</a></p>
						</li>
						<li>
							<p>Les especificacions tècniques per al registre de vèrtexs SPGIC són també un indicador de la qualitat i precisió de la XTM.</p>
						</li>
					</ul>
				</div> 
			</div>
		</div>

		<div class="col-md-6">
			<div class="mapVertex">
				<iframe src="http://terra.girona.cat/vu/vertexs_geodesics/"></iframe>
			</div>
		</div>
	</div>
</div>

<?php require_once("../resources/php/includes/footer.php"); ?>