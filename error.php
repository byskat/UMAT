<?php 
	require_once("resources/php/includes/header.php"); 

	$status = $_SERVER["REDIRECT_STATUS"];
	$codes = array(
	       403 => array("403", "No tens permisos per accedir."),
	       404 => array("404", "No hem trobat la pàgina que cerques."),
	       405 => array("405", "Mètode d'accés no permès."),
	       408 => array("408", "No s'ha pogut enviar la sol·licitud en el temps permès pel servidor."),
	       500 => array("500", "La sol·licitud no ha tingut èxit a causa d'una condició inesperada trobada pel servidor."),
	       502 => array("502", "El servidor ha rebut una resposta no vàlida pel servidor d'origen al tractar de complir amb la sol·licitud."),
	       504 => array("504", "El servidor superior no va poder enviar una sol·licitud en el temps permès pel servidor."),
	);

	$title = $codes[$status][0];
	$message = $codes[$status][1];

	if ($title == false || strlen($status) != 3) {
	       $message = "Please supply a valid status code.";
	}
?>

<style type="text/css">
	.notFound {
		padding:30px;
		margin-bottom: 25px;
		text-align: center;
	}

	.notFound button {
		font-family: Oswald;
	}

	.notFoundError {
		font-family: Oswald;
		font-size: 70px;
		color: #C99C3D;
	}

	.notFoundText {
		text-align: center;
	}

</style>

<div class="mainBody row clear-fix">
	<div class="content">
		<div class="col-md-12">
			<div class="notFound">
				<span class="notFoundError"><?php echo $title ?></span>
				<p class="notFoundText"><?php echo $message ?></p>
				<a href="/umat"><button class="btn btn-default">Tornar a l"inici</button></a>
			</div>
		</div>
	</div>
</div>

<?php require_once("resources/php/includes/footer.php"); ?>