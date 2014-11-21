<?php $this->load->view('header');?>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			 $('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

		tbody {
			max-width: 700px;
			margin: 0 auto;
		}
	</style>


<tbody>
	<p>
		<?php 
		foreach ($get_news_id as $detail => $row) 	{
			
			$picture_name_array = explode(',', $row->news_file_upload);
			foreach ($picture_name_array as $key => $value_detail) { //show picture 
			
				?>
				<a class="fancybox" href="<?php echo base_url().'file_upload/pict_news/'.$value_detail;?>" data-fancybox-group="gallery" title="<?php echo $row->news_title;?>">
					<img src="<?php echo base_url().'file_upload/pict_news/'.$value_detail;?>" alt="" style="width:128px;"/>
				</a>
				<?php
			}
		}
		?>
	</p>
</tbody>
<?php $this->load->view('footer');?>