<?php $this->load->view('header');?>

<script type="text/javascript">

	function PreviewImage() {

		var oFReader = new FileReader();

		oFReader.readAsDataURL(document.getElementById("images[]").files[0]);

		oFReader.onload = function (oFREvent) {

			document.getElementById("show_pic").src = oFREvent.target.result;

		};

	} 

</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox').fancybox();
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
	.delete ,.update{
		color:red;
		display: none;
		top: -10px;
		width: auto;
		height: auto;
		position:absolute;
	}
	.show_images:hover .delete{

		width: auto;
		height: auto;
		display: inline-block;
		top:0px;
		left: 0px;
	}
	.show_images:hover .update{

		width: auto;
		height: auto;
		top:0px;
		right: 0px;
		display: inline-block;

	}
</style>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">แก้ไขข่าว</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">

	<div class="row  col-md-12 ">

		<div class="row">
			<?php echo form_open_multipart('sci_con/do_upload/',' class="form-horizontal" role="form" ');?>
			<?php 
			foreach($get_news as $row_news){
				?>
				<div class="form-group col-sm-12">
					<label for="input_detail" class="col-sm-2 control-label">หัวข้อข่าว </label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="input_title" name="input_title" value="<?php echo $row_news->news_title;?>"> <br/>
					</div>
					<label for="input_detail" class="col-sm-2 control-label">รายละเอียด </label>
					<div class="col-sm-4">
						<textarea class="form-control" rows="4" cols="5" id="input_detail" name="input_detail"><?php echo $row_news->news_detail;?></textarea>
					</div>
				</div>
				<div class="row ">
					<label for="input_picture" class="col-sm-2 control-label">รูปภาพ   </label>
					<?php 
						$picture_name_array = explode(',', $row_news->news_file_upload);
						foreach ($picture_name_array as $key => $value_detail) { //show picture
							?>
					<div class="col-xs-6 col-md-2">
						<!-- <img id="show_pic" name="show_pic" src="<?php echo base_url().'image/pict_admin/no-image.jpg';?>" alt="" style="width:130px; height:130px" /><br/><br/>
						<input type="file" id="images[]" class="form-control" name="images[]" size="20" onchange="PreviewImage();" multiple=""/>-->
							<div class="show_images thumbnail">
								<a class="fancybox" href="<?php echo base_url().'file_upload/pict_news/'.$value_detail;?>" data-fancybox-group="gallery" title="<?php echo $row_news->news_title;?>">
									<img src="<?php echo base_url().'file_upload/pict_news/'.$value_detail;?>"alt="" style="width:128px;"/>
								</a>
								<a class="update" href="#">update</a>
								<a class="delete" href="#">delate</a>
							</div>
						</div>
						<?php
					}
					?>
				</div>

				<?php } ?>
				<div> 
				</div>
				<div class="col-sm-offset-8  col-xs-4">
					<button type="reset" class="btn btn-warning" value="reset">reset</button>
					<button type="submit" class="btn btn-success" value="save">update</button>
				</div>
				<?php echo form_close(); ?>
			</div>  <!-- --- end class="row col-md-offset-2" --------- -->

			<hr> 
		</div>
	</div>
	<!-- end jquery reader upload picture -->
	<!-- /#page-wrapper -->
	<?php $this->load->view('footer');?>