<?php /* Static Name: Social Links */ ?>
<ul class="social">
	<?php 	
		$social_networks = array("facebook", "google-plus", "rss", "pinterest", "linkedin");
		for($i=0, $array_lenght=count($social_networks); $i<$array_lenght; $i++){
			if(of_get_option($social_networks[$i]) != "") {
				echo '<li><a href="'.of_get_option($social_networks[$i]).'" title="'.$social_networks[$i].'"><i class="icon-'.$social_networks[$i].'"></i></a></li>';
			};
		};
	?>
</ul>