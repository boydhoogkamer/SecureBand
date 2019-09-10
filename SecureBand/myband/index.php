<?php
require "functions.php";
require "model.php";
require "controllers.php";


if ( ! isset( $_GET['page'] ) ) {
	header( 'Status: 404' );
	echo '404 Page Not Found';
	exit;
}

switch ( $_GET['page'] ) {
	case 'home':
		home();
		break;
	case 'patchnotes':
		patchnotes();
        break;
    case 'gametips':
		gametips();
        break;
    case 'about':
		about();
        break;
    case 'contact':
		contact();
        break;
        
}
