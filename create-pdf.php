<?php
// start up WP
require_once( dirname(__FILE__) . '/../../../wp-load.php' );
wp();


if ($_POST) {

	$new_pdf = new WPPostToPDF();	
	$new_pdf->create_pdf($_POST);
	if ($new_pdf->send_pdf()) {
		wp_redirect($_POST['return_url']."?msg=1");
		exit;
	}
	
}

?>