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


// we need FPDF
require('fpdf17/fpdf.php');

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

// here's how you include a file to a string
function get_include_contents($filename, $form) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}

// shortcode for form display
add_shortcode("display_form_for_pdf","wpftpdf_display_form");
function wpftpdf_display_form($atts, $content) {
	extract( shortcode_atts( array(
		'form' => ''
		), $atts ) );
	$out = "";
	if ($form != '') {
		$out = get_include_contents(dirname(__FILE__) . "/forms/" . $form . ".php", $form);
	}
	return $out;
}



// keep it classy
class WPPostToPDF {
	private $file_path;  
	private $email_to;
	private $email_subject;
	private $email_message;
	private $email_headers;
	
	public function __construct() {
		$this->file_path = $this->upload_dir() . date("Y-m-d-H-i-s") . ".pdf";
		$this->email_to = "";
		$this->email_subject = "New Application";
		$this->email_message = "Attached, please find the new application.";
		$this->email_headers = "";
	}
	
	function create_pdf($post) {


		$pdf = new FHFPDF();
		include("templates/" . $post['template_name'] . ".php");
		//$pdf->Output($this->file_path, 'F');
		$pdf->Output();
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

//extend fpdf to simplify
class FHFPDF extends FPDF {
	
	
	function print_line($label, $value, $multiline=false, $label_width=50, $line_height=8) {
		$this->Cell($label_width,$line_height,$label);
		if ($multiline) {
			$this->MultiCell(0,$line_height,stripslashes($value));
		}
		else {
			$this->Cell(0,$line_height,stripslashes($value),0,1);
		}

	}
	
	function essay_question($label, $value, $line_height=8) {
		$this->MultiCell(0,$line_height,$label);
		$this->MultiCell(0,$line_height,stripslashes($value));
		$this->Ln();
		
	}
	
	function heading($value, $multiline=false, $line_height=12, $header_font_size=16) {

		$this->SetFont('Helvetica','',16);
		if ($multiline) {
			$this->MultiCell(0,$line_height,stripslashes($value));
		}
		else {
			$this->Cell(0,$line_height,stripslashes($value));
		}
		$this->Ln();
		$this->SetFont('Helvetica','', 12);
	}
}

?>