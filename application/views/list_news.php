<?php $this->load->view("header");?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">รายการข่าว</h1>
	</div>    <!-- /.col-lg-12 -->
</div>	<!-- /.row -->
<div class="row" >

	<?php 
	foreach ($show_news as $detail => $row) 	{		// show detail news 		

		echo '<div class=" col-sx-8 col-sm-5 " style="word-wrap:break-word; display:block; ">';
		echo '<div class="panel panel-info">';
		echo '<div class="panel panel-heading"> <h4>รายละเอียดสินค้า</h></div>';
		echo '<div class="panel panel-body"><p>';
						//show detail text
		echo $row->news_detail;
		echo '</p></div>';
		echo "</div>";	//end div=class panel

		echo '<div class="col-md-4">';  //----------show picture news-------------//
		$picture_name_array = explode(',', $row->news_file_upload);
		foreach ($picture_name_array as $key => $value_detail) { //show picture 
			echo '<img src='.base_url().'file_upload/pict_news/'.$value_detail.' alt="" width=350px height=220px> &nbsp;';
		}	
		echo "</div>";  //-- end div class col-md-4 ----//
	}
	?>
</div>
<?php $this->load->view('footer');?>