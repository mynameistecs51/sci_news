<?php $this->load->view("header");?>
<!--  jquery lightbox -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="<?php echo base_url().'js/jquery.mousewheel.pack.js';?>"></script>
<script src="<?php echo base_url().'js/jquery-1.10.2.min.js';?>"></script>
<!-- css lightbox -->
<link href="<?php echo base_url().'css/plugins/lightbox.css';?>" rel="stylesheet">

<!-- ./end  -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">รายการข่าว</h1>
	</div>    <!-- /.col-lg-12 -->
</div>	<!-- /.row -->
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox({
			openEffect	: 'none',
			closeEffect	: 'none'
		});
	});
</script>
<div class="row" >

	<?php 
	foreach ($show_news as $detail => $row) 	{		// show detail news 		
		?>
		<div class=" col-sx-8 col-sm-10" style="word-wrap:break-word; display:block; ">
			<div class="panel panel-info">
				<div class="panel panel-heading"> <h4><?php echo $row->news_title;?></h4>
					<div class="col-sm-offset-9 col-sx-5"><?php echo $row->news_date;?></div>
				</div>
				<div class="panel panel-body"><p>					
					<?php echo $row->news_detail;	?>	<!-- //show detail text -->
				</p></div>
			</div>	<!-- //end div=class panel -->
			<?php 			

			$picture_name_array = explode(',', $row->news_file_upload);
			foreach ($picture_name_array as $key => $value_detail) { //show picture 
				echo '<div class="col-xs-6 col-md-3">';
				echo '<div class="thumbnail">';
				echo '<a class="fancybox" rel="gallery1" href='.base_url().'file_upload/pict_news/'.$value_detail.'  title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">';
				echo '<img src='.base_url().'file_upload/pict_news/'.$value_detail.' alt="" width=350px height=220px> &nbsp;';
				echo '</a>';
				echo '</div>';	//  <!--  ./ end class="thumbnail"-->
				echo '</div>';	//<!-- ./ end class = "col-xs-6 col-md-3" -->
			}
		}	
		?>
	</div>
</div>
<?php $this->load->view('footer');?>