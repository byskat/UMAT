<div class="searcher">
	<!-- Mapa (default o resultat) -->
	<div class="mapSection" >
		<div class="mapPanel">
			<iframe id="mapFrame" src="http://www.girona.cat/planol/?q=" width="100%">
			  <p>El teu navegador no suporta iframes.</p>
			</iframe>
		</div>
	</div>

	<!-- Cercador navbar -->
	<div class="searchSection">
		<div class="searchPanel input-group">
		    <span class="input-group-addon">
		        <button id="searchMap" type="submit">
		            <i class="fa fa-search" aria-hidden="true"></i>
		        </button>  
		    </span>
			<input id="searchInput" type="text" class="form-control"  placeholder="Buscar localització, carrers, cooredandes...">
		    <span class="input-group-addon">
		        <button id="toggleMap" type="submit">
		            <i class="fa fa-map-o" aria-hidden="true"></i>
		        </button>  
		    </span>
		    <span class="input-group-addon">
		        <a href="http://www.girona.cat/planol/" target="_blank" id="linkMap" type="submit">
		            <i class="fa fa-external-link" aria-hidden="true"></i>
		        </a>  
		    </span>
		</div>
	</div>
</div>