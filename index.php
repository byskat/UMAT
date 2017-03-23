
<?php $headerViews = true; require_once("resources/php/includes/header.php"); ?> 

<div class="row">
	<?php require_once("resources/php/includes/searcher.php"); ?>
</div>

<div class="mainBody row clear-fix">
	<div id="content">

		<div class="col-md-12">
			<?php require_once("resources/php/includes/shortcuts.php"); ?>
		</div>

		<div class="col-md-12">
			<h1>Notícies</h1>
			<div class="news">
				<table id="llistaNoticiesInici" class="display table articles"></table>
				<button class="moreNews btn"><i class="fa fa-plus-square" aria-hidden="true"></i></button>
			</div>
		</div>

		<div class="clearfix"></div>
	</div> <!-- END content -->
	
	<div id="relevant" class="no-gutter">
		<div class="col-xs-4">
			<figure class="stylizedImg">
				<a href="#"><img class="img-fluid" src="/umat/resources/img/arxiu.jpg">
				<span class="infoBox">Arxiu</span></a>
			</figure>
		</div>
		<div class="col-xs-4">
			<figure class="stylizedImg">
				<a href="#"><img class="img-fluid" src="/umat/resources/img/nomenclator.png">
				<span class="infoBox">Nomenclàtor de Carrers</span></a>
			</figure>
		</div>
		<div class="col-xs-4">
			<figure class="stylizedImg">
				<a href="#"><img class="img-fluid" src="/umat/resources/img/planejament.jpg">
				<span class="infoBox">Planejament Urbanistic</span></a>
			</figure>
		</div>
		<div class="clearfix"></div>
	</div><!-- END relevant -->
	
	<div id="contact" class="clearfix bg-img placeholder">
		<a href="contacte.php">
			<button type="button" class="btn btn-default btn-lg btnContacte">Contacte</button>
		</a>
	</div> <!-- END contact -->
</div> <!-- END mainBody -->

<?php require_once("resources/php/includes/footer.php"); ?>