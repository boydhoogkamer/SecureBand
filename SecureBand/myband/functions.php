<?php 
function dbConnect() {
    try {
        $pdo = new PDO( 'mysql:host=127.0.0.1;dbname=c3621myband', 'c3621root', 'jzrrL9VL#A' );
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        $pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
        return $pdo;
    } 
    catch ( PDOException $e ) {
        echo $e->getFile().' on line ' . $e->getLine() . ': ' . $e->getMessage();
        exit();
    }
}