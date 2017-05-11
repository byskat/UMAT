<style type="text/css">
	/* General */
	
	.searcher {
		padding: 20px;
		background-color: #DAD6D3;
	}

	.mapSection, .optionSection {
		margin: 0 15px;
		overflow: hidden;
		background: rgba(0,0,0,.1);
	    box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
	}

	.mapButton button, .optionButton button {
		width: 100%;
		border: 0;
		background-color: transparent;
	    color: rgba(0,0,0,.6);
	}

	.mapPanel, .optionPanel {
		overflow: hidden;
		height: 0;
		border-width: 0 1px;
	    border-style: solid;
	    border-color: rgba(0,0,0,.0);
	}

	/* mapSection */

	.mapSection {
		border-radius: 2px 2px 0 0;
		/*border-radius: 6px 6px 0 0;*/
		border-bottom: 0;
	}

	.mapPanel iframe {
		border: 0;

		/* Temporal */
		height: -webkit-calc(100% + 51px);
	    height:    -moz-calc(100% + 51px);
	    height:         calc(100% + 51px);
		margin-top: -51px;
	}

	/* searchSection */

	.searchSection {
		border-radius: 2px;
		background: rgba(0,0,0,.1);
	    box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
		/*border-radius: 10px;*/
	}

	.searchPanel {
		padding: 15px;

	}

	.searchPanel .form-control{
		font-family: Oswald;
		border-right:0;
		border-left: 0;
		box-shadow:0 0 0; 
		padding-left: 0;
		border-color:#ccc;
	}
	
	.searchPanel span {
		background-color: #fff;
	}

	.searchPanel button{
	    border:0;
	    background:transparent;
	}

	#toggleMap {
		padding: 0;
	}

	/* optionSection */

	.optionSection {
		border-radius: 0 0 6px 6px;
		border-top: 0;
	}

	.optionPanel {
		background-color: grey;
	}
	
	.optionPanel div {
		padding: 10px;
	}

</style>

<div class="searcher">

	<!-- Mapa (default o resultat) -->
	<div class="mapSection" >
		<!-- DESACTIVAT -->
		<div class="mapButton" style="display: none">
			<button id="switchMap" type="submit">
		        <i class="fa fa-chevron-up rotate" aria-hidden="true"></i>
		    </button>  
		</div>
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

	<!-- Opcións de mapa (normal, descarrega, etc...) DESACTIVAT -->
	<div class="optionSection" style="display: none">
		<div class="optionPanel">
			<div>
			<button>test</button>
				<input type="radio" name="aaa" value="1">
				<input type="radio" name="bbb" value="2">
				<input type="radio" name="ccc" value="3">
			</div>
		</div>
		<div class="optionButton">
			<button id="switchOption" type="submit">
		        <i class="fa fa-cog" aria-hidden="true"></i>
		    </button>  
		</div>
	</div>
</div>


<script type="text/javascript">

   	// Amaga seccións del iframe (ha de romandre al mateix domini).
   	$(document).ready( function () {
	    $('#mapFrame').on('load', function(){
	    	$(this).contents().find("#search").hidden();
	    });
	});

	//Fa actuar l'enter a la barra de cerca com un click a cercar.
	$("#searchInput").keyup(function(event){
	    if(event.keyCode == 13){
	        $("#searchMap").click();
	    }
	});

	//Recarrega el iframe, sempre que la query sigui diferent a la anterior.
	function reloadFrame (frame, query) {
		previousQuery = $(frame).attr('src');
		fullQuery = "http://www.girona.cat/planol/?q=" + query;
				
		if(previousQuery!=fullQuery) {
			$(frame).attr('src', fullQuery);
			return fullQuery;
		}
	}

	//Rep un trigger que desencadena l'animació, l'objectiu a desplegar, el maxim de pixels
	//que es desplegaran (i el minim) i si només es vol que el trigger s'activi un cop.
	function searchbarSwitcher (elementTrigger, elementObjective, max, min, onlyOpen) {
		$(elementTrigger).click( function(){

			var query = "";
			query = $("#searchInput").val();
			query = reloadFrame("#mapFrame",query);

			console.log(query);

			$("#linkMap").attr("href",query);

			if($(elementObjective).attr("aria-expanded")=="true" && !onlyOpen) {
				$(elementObjective).animate({ height: min }, 500 );
				$(elementObjective).attr("aria-expanded","false");
			} else {
				$(elementObjective).animate({ height: max+"px" }, 500 );
				$(elementObjective).attr("aria-expanded","true");
			}		

		});
	} 

	/* Barra de cerca, tant intro, com click al buto */
	searchbarSwitcher("#searchMap",".mapPanel",600,0,true)

	searchbarSwitcher("#toggleMap",".mapPanel",600,0,false)

	/* Pestanya de mapa */
	//searchbarSwitcher("#switchMap",".mapPanel",600,0);
	
	/* Pestanya d'opcións */
	//searchbarSwitcher("#switchOption",".optionPanel",50,0);

</script>