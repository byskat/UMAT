$(document).ready(function() {

	// Popover toggle (bootstrap init).
	$('[data-toggle="popover"]').popover();

	// Tabs toggle (bootstrap init).
	$('#viewTabs a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});

	// Tooltip toggle (bootstrap init).
	$('[data-toggle="tooltip"]').tooltip();

	// Fa actuar l'enter a la barra de cerca com un click a cercar.
	$("#searchInput").keyup(function(event){
		if(event.keyCode == 13){
			$("#searchMap").click();
		}
	});

	// Barra de cerca, tant intro, com click al butó
	searchbarSwitcher("#searchMap",".mapPanel",600,0,true);
	searchbarSwitcher("#toggleMap",".mapPanel",600,0,false);

	// Base server url
	var sURL = "/umat/resources/php/server.php";

	// Traducció català DataTables
	var catala = {
		"sProcessing":   "Processant...",
		"sLengthMenu":   "Mostra _MENU_ elements",
		"sZeroRecords":  "No s'han trobat elements.",
		"sInfo":		 "Mostrant de _START_ a _END_ de _TOTAL_ elements",
		"sInfoEmpty":	"Mostrant de 0 a 0 de 0 elements",
		"sInfoFiltered": "(filtrat de _MAX_)",
		"sInfoPostFix":  "",
		"sSearch":	   "Filtrar:",
		"sUrl":		  "",
		"oPaginate": {
			"sFirst":	"Primer",
			"sPrevious": "Anterior",
			"sNext":	 "Següent",
			"sLast":	 "Últim"
		}
	};

	// ---Geodesia---

	adaptHeight('#baseElement', '.mapVertex', -32, 600);
	adaptHeight('#baseElement', 'iframe', 19, 651);

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		var target = $(e.target).attr("href");
		adaptHeight('#baseElement', '.mapVertex', -32, 600);
		adaptHeight('#baseElement', 'iframe', 19, 651);
	});

	/*
		DataTable que genera tots els vertex.
	*/
	var mapaURL = "http://terra.girona.cat/vu/vertexs_geodesics/?sel=vertexs&valor=";
	var descarregaURL = "https://terra.girona.cat/apps/vertexs_geodesics/vertexs/veure_pdf/";

	$('#vertex').DataTable({
		"processing": true,
		"serverSide": true,
		"pagingType": "simple",
		"ajax": sURL+"/?table=vertex",
		"columnDefs": [ {
		"targets": 4,
		"orderable": false,
		"data": [0],
		"render": function ( data, type, full, meta ) {
			return '<a href="'+mapaURL+data+'" target="_blank" class="downloadButton btn btn-default"><i class="fa fa-external-link" aria-hidden="true"></i></a>';
		}
		}, {
			"targets": 5,
			"orderable": false,
			"data": [0],
			"render": function ( data, type, full, meta ) {
				return '<a href="'+descarregaURL+data+'" target="_blank" class="downloadButton btn btn-default"><i class="fa fa-download" aria-hidden="true"></i></a>';
			}
		} ],
		'language': catala
	});

	/*
		DataTable que genera totes les descàrregues de topografia.
	*/
	$('#descarregaTopografia').DataTable({
		"processing": true,
		"serverSide": true,
		"paging": false,
		"ordering": false,
		"searching": false,
		"info": false,
		"ajax": sURL+"/?table=descarregaTopografia",
		"columnDefs": [ {
			"targets": 0,
			"visible": false
		  }, {
			"targets": 2,
			"data": null,
			"render": function ( data, type, full, meta ) {
				return '<a href="'+data[2]+'" target="_blank" data-toggle="tooltip" data-placement="top" title="'+data[4]+' mb" class="downloadButton btn btn-default">DGN <i class="fa fa-download" aria-hidden="true"></i></a>';
		  	}
		  }, {
			"targets": 3,
			"data": null,
			"render": function ( data, type, full, meta ) {
				return '<a href="'+data[3]+'" target="_blank" data-toggle="tooltip" data-placement="top" title="'+data[5]+' mb" class="downloadButton btn btn-default">DWG <i class="fa fa-download" aria-hidden="true"></i></a>';
			}
		  }, {
			"targets": 4,
			"data": [6]
		  } ],
		"language": catala,
		"fnDrawCallback": function( oSettings ) {
			$('[data-toggle="tooltip"]').tooltip()
		}
	});

	/*
		DataTable que genera totes les descàrregues de cartografia.
	*/
	$('#descarregaCartografia').DataTable({
		"processing": true,
		"serverSide": true,
		"paging": false,
		"ordering": false,
		"searching": false,
		"info": false,
		"ajax": sURL+"/?table=descarregaTopografia",
		"columnDefs": [ {
			"targets": 0,
			"data": [1]
		  }, {
			"targets": 1,
			"data": null,
			"render": function ( data, type, full, meta ) {
			  return '<a href="'+data[2]+'" target="_blank" data-toggle="tooltip" data-placement="top" title="'+data[4]+' mb" class="downloadButton btn btn-default">DGN <i class="fa fa-download" aria-hidden="true"></i></a>';
		  	}
		  }, {
			"targets": 2,
			"data": null,
			"render": function ( data, type, full, meta ) {
			  return '<a href="'+data[3]+'" target="_blank" data-toggle="tooltip" data-placement="top" title="'+data[5]+' mb" class="downloadButton btn btn-default">DWG <i class="fa fa-download" aria-hidden="true"></i></a>';
		  }
		  }, {
			"targets": 3,
			"data": [6]
		  } ],
		  'language': catala,
		"fnDrawCallback": function( oSettings ) {
	  		$('[data-toggle="tooltip"]').tooltip()
		}
	});

	/*
		DataTable que genera totes les noticies.
	*/
	$('#llistaNoticies').DataTable({
		"responsive": true,
		"processing": true,
		"serverSide": true,
		"ordering": false,
		"info": false,
		"ajax": sURL+"/?table=noticies",
		"columnDefs": [ {
			"targets": 0,
			"data": [0],
			"visible": false
		  }, {
			"targets": 1,
			"data": null,
			"render": function ( data, type, full, meta ) {
			  var html = '<h2>'+data[1]+'</h2>';
			  html += '<p class="articleSubtitle">'+data[2]+'</p>';
			  html += '<p class="articleBody"><span class="articleDate">'+ newsDateFormat(data[5]) +'</span> '+data[3]+' </p>';
			  html += '<a class="articleMore" href="?noticia='+data[0]+'">Més info...</a>';

			  return html;
		  	}
		  }, {
			"targets": 2,
			"data": [4],
			"render": function ( data, type, full, meta ) {
			  return '<img src="'+data+'">';
		  	}
		  } ],
		  'language': catala
	});

	/*
		DataTable que genera les noticies de l'inici.
	*/
	$('#llistaNoticiesInici').DataTable({
		"responsive": true,
		"processing": true,
		"serverSide": true,
		"ordering": false,
		"info": false,
		"searching": false,
		"lengthMenu": [ [2, 5, 10, -1], [2, 5, 10, "All"] ],
		"pageLength": 5, 
		"ajax": sURL+"/?table=noticies",
		"columnDefs": [ {
			"targets": 0,
			"data": [0],
			"visible": false
		  }, {
			"targets": 1,
			"data": null,
			"render": function ( data, type, full, meta ) {
			  var html = '<h2>'+data[1]+'</h2>';
			  html += '<p class="articleSubtitle">'+data[2]+'</p>';
			  html += '<p class="articleBody"><span class="articleDate">'+ newsDateFormat(data[5]) +'</span> '+data[3]+' </p>';
			  html += '<a class="articleMore" href="arxiu/noticies.php?noticia='+data[0]+'">Més info...</a>';

			  return html;
		  	}
		  }, {
			"targets": 2,
			"data": [4],
			"render": function ( data, type, full, meta ) {
			  return '<img src="'+data+'">';
		  	}
		  } ],
		  'language': catala
	});

	if ($('#noticia')) {
		$.ajax({ 
			url: sURL+"/?noticia="+$('#noticia').attr('data-id'),
			success: function(output) {
				output = $.parseJSON(output);

				$('#noticia h1').text(output["title"]);
				$('#noticia .articleSubtitle').text(output["subtitle"]);
				$('#noticia .articleBody').append(output["body"]);
				$('#noticia .articleDate').text(output["date"]);
				$('#noticia .articleImg').attr("src",output["img"]);				 
			}
		});
	}
});

/**
 * Formata la data de la secció noticies
 * @param  {String} date Data en format string
 * @return {String} Data amb l'ordre desitjat    
 */
function newsDateFormat (date) {
	var t = date.split('-');
	return t[2]+"/"+t[1]+"/"+t[0];
}

/**
 * Funció que adapta l'alçada d'un element amb un altre. Pot rebre un int amb 
 * pixels extres i alçada minima i màxima.
 * @param  {String} baseElement Selector del contenidor original
 * @param  {String} element     Selector sobre el que volem adaptar
 * @param  {int} extra          Piexels extra per afegir a l'alçada
 * @param  {int} min            Alçada mínima
 * @param  {int} max            Alçada màxima
 */
function adaptHeight (baseElement, element, extra, min, max) {
	var h = $(baseElement).height() + (!!extra ? extra : '');
	!!max && h>max ? h = max : h;
	!!min && h<min ? h = min : h;
	$(element).height( h );
}

/**
 * Recarrega el iframe, sempre que la query sigui diferent a la anterior.
 * @param  {String} frame Selector del iframe sobre el que volem modificar l'url
 * @param  {String} query String que concatenarem al frame.
 */
function reloadFrame (frame, query) {
	previousQuery = $(frame).attr('src');
	fullQuery = "http://www.girona.cat/planol/?q=" + query;
			
	if(previousQuery!=fullQuery) {
		$(frame).attr('src', fullQuery);
		$("#linkMap").attr("href",fullQuery);
	}
}

/**
 * Rep un trigger que desencadena l'animació, l'objectiu a desplegar, el maxim 
 * de pixels que es desplegaran (i el minim) i si només es vol que el trigger 
 * s'activi un cop.
 * @param  {String} elementTrigger   Classe de l'item desencadenant.
 * @param  {String} elementObjective Classe de l'item objectiu.
 * @param  {int} max                 Màxim de pixels a desplegar.
 * @param  {int} min                 Minim de pixels a desplegar.
 * @param  {Boolean} onlyOpen        Bloqueja o no l'element seleccionat.
 */
function searchbarSwitcher (elementTrigger, elementObjective, max, min, onlyOpen) {
	$(elementTrigger).click( function(){

		reloadFrame("#mapFrame", $("#searchInput").val());

		if($(elementObjective).attr("aria-expanded")=="true" && !onlyOpen) {
			$(elementObjective).animate({ height: min }, 500 );
			$(elementObjective).attr("aria-expanded","false");
		} else {
			$(elementObjective).animate({ height: max+"px" }, 500 );
			$(elementObjective).attr("aria-expanded","true");
		}		
	});
}