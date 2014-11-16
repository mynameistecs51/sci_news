<!DOCTYPE html>
<html>
<head>
	<title>fancyBox - Fancy jQuery Lightbox Alternative | Demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Add jQuery library -->
	<script type="text/javascript" src="<?php echo base_url().'js/jquery-1.10.2.min.js';?>"></script>

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'source/helpers/jquery.fancybox-buttons.css?v=1.0.5';?>" />
	<script type="text/javascript" src="<?php echo base_url().'source/helpers/jquery.fancybox-buttons.js?v=1.0.5';?>"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			 $('.fancybox-buttons').fancybox({
			 	openEffect  : 'none',
			 	closeEffect : 'none',

			 	prevEffect : 'none',
			 	nextEffect : 'none',

			 	closeBtn  : false,

			 	helpers : {
			 		title : {
			 			type : 'inside'
			 		},
			 		buttons	: {}
			 	},

			 	afterLoad : function() {
			 		this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
			 	}
			 });

			});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

		body {
			max-width: 700px;
			margin: 0 auto;
		}
	</style>
</head>
<body>

	<h3>Button helper</h3>
	<p>
		<?php 
		foreach ($show_news as $detail => $row) 	{
			echo $detail."xxx<br/>";
			$picture_name_array = explode(',', $row->news_file_upload);
			foreach ($picture_name_array as $key => $value_detail) { //show picture 
				echo base_url().'file_upload/pict_news/'.$value_detail ;
				?>
				<a class="fancybox-buttons" data-fancybox-group="button" href="<?php base_url().'file_upload/pict_news/'.$value_detail;?>"><img src="<?php base_url().'file_upload/pict_news/'.$value_detail;?>" alt="" /></a>
				<?php
			}
		}
		?>
	</p>
	<p>
		Photo Credit: Instagrammer @whitjohns
	</p>
</body>
</html>