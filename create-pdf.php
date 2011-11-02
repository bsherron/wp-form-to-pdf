<?php
// start up WP
require_once( dirname(__FILE__) . '/../../../wp-load.php' );
wp();


if ($_POST) {

	$new_pdf = new WPPostToPDF();	
	$new_pdf->create_pdf($_POST);

//	$new_pdf->send_pdf();

}

?>