<?php
/*
Plugin Name: WP Form to PDF
Plugin URI: https://github.com/bsherron/wp-form-to-pdf
Version: 1.0
Description: Uses FPDF to accept POST data and convert it to a PDF
Author: Bob Sherron
Author URI: http://bobsherron.com
Text Domain: wp-form-to-pdf
*/

/*  Copyright 2011  Bob Sherron  (bsherron@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Install 

register_activation_hook(__FILE__, 'wpftpdf_install');

function wpftpdf_install() {
	// makes the wp-post-to-pdf upload dir
	$uploads = wp_upload_dir();
	$dir_path = $uploads['basedir'] . "/wp-post-to-pdf";
	if (!is_dir($dir_path)) {
		mkdir($dir_path);
	}
}

/* Adds our admin options under "Options" */
function wpftpdf_options_page() {
	add_options_page('WP Form to PDF', 'WP Form to PDF', 10, 'wp-form-to-pdf/options.php');
}


class WPPostToPDF {
	private $file_path;  
	private $email_to;
	private $email_subject;
	private $email_message;
	private $email_headers;
	
	public function __construct() {
		$this->file_path = $this->upload_dir() . date("Y-m-d-H-i-s") . ".pdf";
		$this->email_to = "bob.sherron@fleishman.com,bsherron@gmail.com";
		$this->email_subject = "New Application";
		$this->email_message = "Attached, please find the new application.";
		$this->email_headers = "";
	}
	
	function create_pdf($post) {
		require('fpdf17/fpdf.php');
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Helvetica','',16);
		$pdf->Cell(0,10,'Hello World!',0,1);
		$pdf->Cell(0,10,'Hello World Again!',0,1);
		$pdf->Output($this->file_path, 'F');
		echo $this->file_path;
	}
	
	function send_pdf() {
		if (is_file($this->file_path)) {
			if (wp_mail($this->email_to, $this->email_subject, $this->email_message, $this->email_headers, $this->file_path)) {
				echo "Mail sent!";
			}
		}
	}
	
	function upload_dir() {
		$uploads = wp_upload_dir();
		return $uploads['basedir'] . "/wp-post-to-pdf/";
	}
}

?>