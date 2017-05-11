<?php

// Mysql-Datatables
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'test',
    'host' => 'localhost'
);

$dsn = 'mysql:dbname='.$sql_details['db'].';host='.$sql_details['host'];
$user = $sql_details['user'];
$password = $sql_details['pass'];

if(isset($_GET["table"])) {
    
    require_once('ssp.class.php');

    $table = '';
    $primaryKey = '';
    $columns = '';

    $tableRequested = $_GET["table"];

    /* Geodèsia - Vèrtexs */
    if($tableRequested == "vertex") {
        $table = 'vertexs';
        $primaryKey = 'list_nom';
        $columns = array(
            array( 'db' => 'list_nom',      'dt' => 0 ),
            array( 'db' => 'list_x',        'dt' => 1 ),
            array( 'db' => 'list_y',        'dt' => 2 ),
            array( 'db' => 'list_z',        'dt' => 3 ),
            array( 'db' => 'list_mapa',     'dt' => 4 ),
            array( 'db' => 'list_ressenya', 'dt' => 5)
        );
    }

    /* Topografia - Descarrega */
    if($tableRequested == "descarregaTopografia") {
        $table = 'topografia';
        $primaryKey = 'id';
        $columns = array(
            array( 'db' => 'id',      'dt' => 0 ),
            array( 'db' => 'nom',     'dt' => 1 ),
            array( 'db' => 'dgn',     'dt' => 2 ),
            array( 'db' => 'dwg',     'dt' => 3 ),
            array( 'db' => 'pes_dgn', 'dt' => 4 ),
            array( 'db' => 'pes_dwg', 'dt' => 5 ),
            array( 'db' => 'data',    'dt' => 6)
        );
    }

    /* Cartografia - Descarrega */
    if($tableRequested == "descarregaCartografia") {
        $table = 'topografia';
        $primaryKey = 'id';
        $columns = array(
            array( 'db' => 'id',      'dt' => 0 ),
            array( 'db' => 'nom',     'dt' => 1 ),
            array( 'db' => 'dgn',     'dt' => 2 ),
            array( 'db' => 'dwg',     'dt' => 3 ),
            array( 'db' => 'pes_dgn', 'dt' => 4 ),
            array( 'db' => 'pes_dwg', 'dt' => 5 ),
            array( 'db' => 'data',    'dt' => 6)
        );
    }

    /* Noticies */
    if($tableRequested == "noticies") {
        $table = 'news';
        $primaryKey = 'id';
        $columns = array(
            array( 'db' => 'id',       'dt' => 0 ),
            array( 'db' => 'title',    'dt' => 1 ),
            array( 'db' => 'subtitle', 'dt' => 2 ),
            array( 'db' => 'body',     'dt' => 3 ),
            array( 'db' => 'img',      'dt' => 4 ),
            array( 'db' => 'date',     'dt' => 5 )
        );
    }

    $response = SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns );

    echo json_encode($response);
}

/* Noticia */
if(isset($_GET["noticia"])) {

    $sql = 'SELECT * FROM news WHERE id = :id';

    $db = new PDO($dsn, $user, $password);
    $statement = $db->prepare("SELECT * FROM news WHERE id = :id");
    $statement->execute(array(':id' => $_GET["noticia"]));
    $row = $statement->fetch(PDO::FETCH_ASSOC); 

    echo json_encode($row);
}