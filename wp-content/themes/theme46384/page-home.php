<?php
/**
* Template Name: Home Page
*/

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row" style="margin-bottom:25px">
			<div class="span12">
				<p class="main_title">
					Programme for Tourism Investment Attraction in the Drava Eco-Region<br><br>(PIADER)
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span12" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content" style="text-align: center;">
				<div class="row" id="mainpageStuff">
					<div class="mainPageMenuHover"></div>
					<div class="span2">
						<div class="row">
							<a href="<?php echo get_permalink(icl_object_id( 2030, 'page', false));?>">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/benefits_of_the_programme.jpg">
							</a>
						</div>
						<div class="row">
							<a href="<?php echo get_permalink(icl_object_id( 2030, 'page', false));?>" class="arrow-after">
								<?php echo(get_the_title(icl_object_id(2030,'page',false)));?><br/>
							</a>
						</div>
					</div>
					<div class="span2">
						<div class="row">
							<a href="<?php echo get_permalink(icl_object_id( 2032, 'page', false));?>">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/historic_baranya.jpg">
							</a>
						</div>
						<div class="row">
							<a href="<?php echo get_permalink(icl_object_id( 2032, 'page', false));?>" class="arrow-after">
								<?php echo(get_the_title(icl_object_id(2032,'page',false)));?><br/>
							</a>
						</div>
					</div>
					<div class="span2">
						<div class="row">
							<a href="<?php echo get_permalink(icl_object_id( 2034, 'page', false));?>">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tourism.jpg">
							</a>
						</div>
						<div class="row">
							<a href="<?php echo get_permalink(icl_object_id( 2034, 'page', false));?>" class="arrow-after">
								<?php echo(get_the_title(icl_object_id(2034,'page',false)));?><br/>
							</a>
						</div>
					</div>
				<!--/div>
				<div class="row"-->
					<div class="span2">
                                                <div class="row">
                                                        <a href="<?php echo get_permalink(icl_object_id( 2183, 'page', false));?>">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/related_projects.jpg"  width="216">
                                                        </a>
                                                </div>
                                                <div class="row">
                                                        <a href="<?php echo get_permalink(icl_object_id( 2183, 'page', false));?>" class="arrow-after">
                                                                <?php echo(get_the_title(icl_object_id(2183,'page',false)));?><br/>
                                                        </a>
                                                </div>
                                        </div>

					 <div class="span2">
                                                <div class="row">
                                                        <a href="<?php echo get_permalink(icl_object_id( 2036, 'page', false));?>">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/real_estates.jpg">
                                                        </a>
                                                </div>
                                                <div class="row">
                                                        <a href="<?php echo get_permalink(icl_object_id( 2036, 'page', false));?>" class="arrow-after">
                                                                <?php echo(get_the_title(icl_object_id(2036,'page',false)));?><br/>
                                                        </a>
                                                </div>
                                        </div>

					<div class="span2">
                                                <div class="row">
                                                        <a href="<?php echo get_permalink(icl_object_id( 2189, 'page', false));?>">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/success_stories.jpg"  width="216">
                                                        </a>
                                                </div>
                                                <div class="row">
                                                        <a href="<?php echo get_permalink(icl_object_id( 2189, 'page', false));?>" class="arrow-after">
                                                                <?php echo(get_the_title(icl_object_id(2189,'page',false)));?><br/>
                                                        </a>
                                                </div>
                                        </div>
				</div>
                <div id="mapMain" class="row">
            	    <br>
                    <iframe id="mapFrame" src="/map" height="800" width="100%"></iframe>
                </div>
                <div class="row" style="margin-top: 15px">
                    <img src="http://b.dryicons.com/images/icon_sets/shine_icon_set/png/128x128/map_down.png" id="mapToggle" />
                </div>
				<script type="text/javascript">
					$('#mainpageStuff .span2').bind('mouseover',
					    function() {
						var multiplier = $(this).index()-1,
						    menuHover = $('#mainpageStuff .mainPageMenuHover'),
						    left = -117 + (200 * multiplier) + "px";
						menuHover.css({
						    'left':left,
						    'top': '-184px'
						});
					    console.log(left);
						
						menuHover.show();
					    }
					);
					$('#mainpageStuff .span2').bind('mouseout',
					    function() {
						$('#mainpageStuff .mainPageMenuHover').hide();
					    }
					);
					
/*					$('#mapToggle').click(
						function() {
						console.log('Toggle');
						//$("#mapFrame").load(function(){
						   $("#mapFrame").trigger("showBtn");
						   $('#mapMain').slideDown(1000);
						//   });
						}
					);*/
				</script>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
