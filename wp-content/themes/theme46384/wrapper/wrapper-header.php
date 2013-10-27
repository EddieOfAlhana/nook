<?php /* Wrapper Name: Header */ ?>
<div class="row">
	<div class="span3" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">
		<?php get_template_part("static/static-logo"); ?>
	</div>
	<div class="span9" data-motopress-type="static">
		<?php get_template_part("static/static-header-right"); ?>
	</div>
</div>
<div class="row">
	<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
		<?php get_template_part("static/static-nav"); ?>
	</div>
	<div class="hidden-phone" data-motopress-type="static" data-motopress-static-file="static/static-search.php">
		<?php get_template_part("static/static-search"); ?>
	</div>
</div>