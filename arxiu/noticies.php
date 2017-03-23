<?php require_once("../resources/php/includes/header.php"); ?>

<div id="headerViews" class="row restPublic">
	<div id="noticies">
		<h1>Noticies</h1>
	</div>
</div>

<div class="mainBody row clear-fix">
	<div class="col-md-12">

		<?php
			if (isset($_GET['noticia'])) {
		?>

		<div id="noticia" class="noticia" data-id=<?php echo '"'.$_GET['noticia'].'"'; ?>>
			<h1 id="info"></h1>
			<span class="hz"></span>
			<div class="col-md-8 ">
				<p class="articleSubtitle"></p>
				<p class="articleBody"><span class="articleDate"></span> </p>
			</div>
			<div class="col-md-4">
				<img class="articleImg" src="">
			</div>
			<?php
				if (isset($_SERVER['HTTP_REFERER'])) {
					$referer = $_SERVER['HTTP_REFERER'];
				} else {
					$referer = "noticies.php";
				}
			?>
			<div class="col-md-12"><a href=<?php echo "'".$referer."'"; ?>><span class="btnEnrere btn btn-default btn-lg"><i class="fa fa-arrow-left" aria-hidden="true"></i></span></a></div>
			<div style="clear:both"></div>
		</div>

		<?php
			} else {
		?>

		<h1 id="info">Arxiu de noticies</h1>
		<span class="hz"></span>
		<p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<table id="llistaNoticies" class="display table articles"></table>

		<?php } ?>
	</div>
</div>

<?php require_once("../resources/php/includes/footer.php"); ?>