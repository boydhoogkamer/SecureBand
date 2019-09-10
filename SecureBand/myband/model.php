<?php 

function get_patchnotes() {

    $pdo = dbConnect();
    $query     = 'SELECT * FROM `patchnotes`';
    $statement = $pdo->query( $query );

    return $statement;
}

function get_gametips() {

    $pdo = dbConnect();
    $query     = 'SELECT * FROM `gametips`';
    $statement = $pdo->query( $query );

    return $statement;
}