
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
			<?php require_once("resources/php/includes/news.php"); ?>
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
	
	<style type="text/css">
		.placeholder {
			height: 120px !important;
			text-align: center;
		    vertical-align: middle;
		    line-height: 117px;
		}

		.bg-img {
		  width: 100%;
		  height: 100%;
		  background: url('/umat/resources/img/mapUmatBlur.jpg') center center no-repeat;
		  background-size: cover;
		  
		  &:before {
		    content: '';
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			background-image: linear-gradient(to bottom right,#002f4b,#dc4225);
			opacity: .6; 
		  }
		}
	</style>

	<div id="contact" class="clearfix bg-img placeholder">
		<a href="contacte.php">
			<button type="button" class="btn btn-default btn-lg btnContacte">Contacte</button>
		</a>
	</div> <!-- END contact -->
</div> <!-- END mainBody -->

<?php require_once("resources/php/includes/footer.php"); ?>