<?php
	$languages = icl_get_languages('skip_missing=N&orderby=KEY&order=DIR');
	$activeLanguage = 'en';
	foreach($languages as $language) {
		if($language['active'] == 1) {
			$activeLanguage = $language['language_code'];
		}
	}
?>
		<div style="text-align:right;padding-top:10px; margin-bottom: 10px;">
		<style type="text/css"> .lang_sel_list_horizontal { float:right; }</style>
		<?php do_action('icl_language_selector'); ?>
		
			<!--a href="?lang=en"><img src="/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png"/></a>  <a href="?lang=hu"><img src="/wp-content/plugins/sitepress-multilingual-cms/res/flags/hu.png"/></a>  <a href="?lang=hr"><img src="/wp-content/plugins/sitepress-multilingual-cms/res/flags/hr.png"/></a--><br/><br/>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slogan_<?php echo(strtolower($activeLanguage));?>.png"/>
		</div>
		<!--div style="color:#4b4b4d;text-align:right; font-size:14px; font-weight:bold; font-style: italic;">
			A cross-border region where rivers<br/>connect, not divide
		</div-->
