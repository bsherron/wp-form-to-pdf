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
			<label for="usernames"><?php _e('Twitter Username(s):', 'twitter-wings'); ?></label>
			<input type="text" id="usernames" name="tw_usernames" class="tw_input" value="<?php echo get_option('tw_usernames'); ?>" />
			<span class="desc"><?php _e('List of Twitter accounts separated with ",". e.g. <i>joepahl,bsdeluxe,dylanized</i> (default: <i>blank</i>)', 'twitter-wings'); ?></span>
		</div>
		
		<div class="formrow hashtag">		
			<label><?php _e('Filter Tweets by hashtag', 'twitter-wings'); ?></label>
			<?php if(get_option('tw_hashes') != ""){ $ch = ' checked'; } else { $ch = ''; } ?>
			<input type="checkbox" id="hashtag" name="tw_hashtag"<?php echo $ch ?> />
			<span class="desc"><?php _e('Turn on hashtag filtering. (default: off)', 'twitter-wings'); ?></span>					
		</div>
		
		</div>

		<input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="tw_usernames,tw_hashes,tw_number,tw_photos,tw_user_titles,tw_screennames,tw_https,tw_chashes,tw_removehashes,tw_cache,tw_cache_time,tw_title,tw_time_below,tw_retweet,tw_reply,tw_user_display,tw_styles,tw_time_form,tw_follow_lang,tw_link_color,tw_text_color,tw_follow_count,tw_follow_button,tw_follow_name,tw_follow,tw_follow_move" />
		
		<input type="submit" class="button-primary" value="<?php _e('Save Settings', 'twitter-wings'); ?>" />
	
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