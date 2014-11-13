<?php $this->load->view("header");?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">รายการข่าว</h1>
	</div>    <!-- /.col-lg-12 -->
</div>	<!-- /.row -->
<div class="row" >

	<?php 
	foreach ($show_news as $detail => $row) 	{		// show detail news 		
		?>
		<div class=" col-sx-8 col-sm-10" style="word-wrap:break-word; display:block; ">
			<div class="panel panel-info">
				<div class="panel panel-heading"> <h4><?php echo $row->news_title;?></h4></div>
				<div class="panel panel-body"><p>					
					<?php echo $row->news_detail;	?>	<!-- //show detail text -->
				</p></div>
			</div>	<!-- //end div=class panel -->
			<?php 			

			$picture_name_array = explode(',', $row->news_file_upload);
			foreach ($picture_name_array as $key => $value_detail) { //show picture 
				echo '<div class="col-xs-6 col-md-3">';
				echo '<div class="thumbnail">';
				echo '<img src='.base_url().'file_upload/pict_news/'.$value_detail.' alt="" width=350px height=220px> &nbsp;';
				echo '</div>';	//  <!--  ./ end class="thumbnail"-->
				echo '</div>';	//<!-- ./ end class = "col-xs-6 col-md-3" -->
			}
		}	
		?>
	</div>
</div>
<?php $this->load->view('footer');?>