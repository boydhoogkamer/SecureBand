<?php 

function home() {
    include "home.php";
}

function patchnotes() {
    $patchnotescontent = get_patchnotes();
    include "patchnotes.php";
}

function gametips() {
    $gametipscontent = get_gametips();
    include "gametips.php";
}

function about() {
    include "about.php";
}

function contact() {
    include "contact.php";
}