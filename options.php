<?php
$location = $options_page; // Form Action URI
$ch = '';
?>

<div id="wpftpdf-admin" class="wrap">
	<header>
		<div id="icon-plugins" class="icon32"></div><h2><?php _e('WP Form to PDF', 'wp-form-to-pdf'); ?></h2>
	</header>
	
	<form method="post" action="options.php">

		<?php wp_nonce_field('update-options'); ?>

		<div class="formrow first">
			<label for="wpftpdf_recipients"><?php _e('Email Recipient(s):', 'wp-form-to-pdf'); ?></label>
			<input type="text" id="wpftpdf_recipients" name="wpftpdf_recipients" class="tw_input" value="<?php echo get_option('wpftpdf_recipients'); ?>" />
			<span class="desc"><?php _e('Separate multiple addresses with a comma. Required to send pdf via email.', 'wp-form-to-pdf'); ?></span>
		</div>
		<div class="formrow">
			<label for="wpftpdf_bcc"><?php _e('Bcc Recipient(s):', 'wp-form-to-pdf'); ?></label>
			<input type="text" id="wpftpdf_bcc" name="wpftpdf_bcc" class="tw_input" value="<?php echo get_option('wpftpdf_bcc'); ?>" />
			<span class="desc"><?php _e('Separate multiple addresses with a comma. (Default: <i>blank</i>)', 'wp-form-to-pdf'); ?></span>
		</div>
		
		<div class="formrow">
			<label for="wpftpdf_thankyou"><?php _e('Thank you message:', 'wp-form-to-pdf'); ?></label>
			<textarea id="wpftpdf_thankyou" name="wpftpdf_thankyou" class="tw_input"><?php echo get_option('wpftpdf_thankyou'); ?></textarea>
			<span class="desc"> </span>
		</div>
		<!--
<div class="formrow hashtag">		
			<label><?php# _e('Filter Tweets by hashtag', 'wp-form-to-pdf'); ?></label>
			<?php# if(get_option('tw_hashes') != ""){ $ch = ' checked'; } else { $ch = ''; } ?>
			<input type="checkbox" id="hashtag" name="tw_hashtag"<?php# echo $ch ?> />
			<span class="desc"><?php# _e('Turn on hashtag filtering. (default: off)', 'wp-form-to-pdf'); ?></span>					
		</div>
-->
		
		</div>

		<input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="wpftpdf_recipients,wpftpdf_bcc,wpftpdf_thankyou" />
		
		<input type="submit" class="button-primary" value="<?php _e('Save Settings', 'wp-form-to-pdf'); ?>" />
	
	</form>
</div>

<style>
	
	#wpftpdf-admin header {
		margin-bottom : 12px;
	}

	#wpftpdf-admin label { width: 180px; float: left; color: #000; }

	#wpftpdf-admin .tw_input { float: left; width: 300px; }

	#wpftpdf-admin .short { width: 80px; }  

	#wpftpdf-admin .desc{ clear: left; display: block; font-size: 12px; color: #666; } 

	#wpftpdf-admin .formrow { padding: 7px; clear: both; border-bottom: 1px solid #e5e5e5; border-top: 2px solid #fff; }

	#wpftpdf-admin .first { border-top: none; } 

	#wpftpdf-admin .last { border-bottom: none; }  

	.button-primary { width: 100px; margin-top: 15px; height: 25px; }       

</style>