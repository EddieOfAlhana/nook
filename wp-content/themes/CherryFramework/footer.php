		<footer class="motopress-wrapper footer">
			<div class="container">
				<div class="row">
					<div class="span12" data-motopress-wrapper-file="wrapper/wrapper-footer.php" data-motopress-wrapper-type="footer" data-motopress-id="<?php echo uniqid() ?>">
						<div class="span6">
							<span><img src="http://www.nookofeurope.eu/wp-content/themes/theme46384/images/icons/flag-eu.png"/></span>
							<span>The project is co-financed by the Euopean Union through the<br> Hungary-Croatia IPA Cross-border Co-operation Programme</span>
						</div>
						<div class="span6" style="text-align:right">
							<img src="http://www.nookofeurope.eu/wp-content/themes/theme46384/images/nookofeurope-logo.jpg"/>
						</div>
						<?php //get_template_part('wrapper/wrapper-footer'); ?>
					</div>
				</div>
			</div>
		</footer>
		<!--End #motopress-main-->
	</div>
	<div id="back-top-wrapper" class="visible-desktop">
		<p id="back-top">
			<a href="#top"><span></span></a>
		</p>
	</div>
	<?php if(of_get_option('ga_code')) { ?>
		<script type="text/javascript">
			<?php echo stripslashes(of_get_option('ga_code')); ?>
		</script>
		<!-- Show Google Analytics -->
	<?php } ?>
	<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->
</body>
</html>