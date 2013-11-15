<?php /* Wrapper Name: Footer */
	$languages = icl_get_languages('skip_missing=N&orderby=KEY&order=DIR');
	$activeLanguage = 'en';
	foreach($languages as $language) {
		if($language['active'] == 1) {
			$activeLanguage = $language['language_code'];
		}
	}
?>

<div class="span6">
    <div class="row" style="margin-top:5px;margin-right:0px;">
	<div class="span6" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
		<?php get_template_part("static/static-footer-nav"); ?>
	</div>
    </div>
    <div class="row" style="margin-top:30px;margin-right:0px;">
	<div class="span4" style="margin-left:0px;">
		<img src="http://www.nookofeurope.eu/wp-content/themes/theme46384/images/eu_<?php echo(strtolower($activeLanguage));?>.png" alt="The project is co-financed by the Euopean Union through the<br> Hungary-Croatia IPA Cross-border Co-operation Programme" title="The project is co-financed by the Euopean Union through the<br> Hungary-Croatia IPA Cross-border Co-operation Programme"/>
	</div>
	<!--div class="span1">
		<img src="http://www.nookofeurope.eu/wp-content/themes/theme46384/images/icons/flag-eu.png" alt="The project is co-financed by the Euopean Union through the<br> Hungary-Croatia IPA Cross-border Co-operation Programme" title="European Union"/>
	</div>

	<div class="span5" style="margin-left:0px;">
		The project is co-financed by the Euopean Union through the<br> Hungary-Croatia IPA Cross-border Co-operation Programme
	</div-->
    </div>
</div>
<div class="span5" style="text-align:right">
	<img src="http://www.nookofeurope.eu/wp-content/themes/theme46384/images/nookofeurope-logo.jpg"/>
</div>
