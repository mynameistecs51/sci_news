<?php $this->load->view('header');?>

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
<div class="row ">
	<div class="row col-md-12">
		<div class="col-lg-12">
			<h1 class="page-header">แก้ไขข่าว</h1>
		</div>
		<!-- /.col-lg-12 --> 
	</div>
	<!-- /.row -->

	<div class="row  col-md-12 ">

		<div class="row">
			<?php echo form_open_multipart('sci_con/edit#/',' class="form-horizontal" role="form" ');?>
			<?php
			$pict_array =array();
			foreach($get_news_id as $row_news){
				if(!isset($pict_array[$row_news->news_id])){
					$pict_array[$row_news->news_id] = array();
				}
				?>
				<div class="form-group col-sm-12">
					<label for="input_headnews" class="col-sm-2 control-label">หัวข้อข่าว </label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="input_title" name="input_title" value="<?php echo $row_news->news_title;?>"> <br/>
					</div>
					<label for="input_files" class="col-sm-2">เพิ่มรูปภาพ</label>
					<div class="col-sm-4 ">
						<img id="show_pic" name="show_pic" src="<?php echo base_url().'image/pict_admin/no-image.jpg';?>" alt="" style="width:130px; height:130px" /><br/><br/>
						<input type="file" id="images[]" class="form-control" name="images[]" size="20" onchange="PreviewImage();" multiple=""/>
					</div>
				</div>
				<div id="form-group col-sm-12">
					<label for="input_detail" class="col-sm-2 control-label">รายละเอียด </label>
					<div class="col-sm-4">
						<textarea class="form-control" rows="4" cols="5" id="input_detail" name="input_detail"><?php echo $row_news->news_detail;?></textarea>
					</div>

					<div class="col-xs-6 text-center">
						<button type="reset" class="btn btn-warning" value="reset">reset</button>
						<button type="submit" class="btn btn-success" value="save">update</button>
					</div>
				</div>
				<?php echo form_close(); ?>
				<div class="form-group col-md-12"><hr/></div>
				<div class="form-group col-md-12">
					<label for="input_picture" class="col-sm-2 control-label">รูปภาพ   </label>
					<?php 
					$picture_name_array = explode(',', $row_news->news_file_upload);
					$c = count($picture_name_array);
					for($i=0; $i < $c; $i++){
						array_push($pict_array[$row_news->news_id], array('array_title' => $i, 'array_pictName' => $picture_name_array[$i]));
					}
					?>
					<?php foreach ($pict_array[$row_news->news_id] as $row_array) {
						?>
						<input type="hidden" id="id_pict" name="name_pict" value="<?php $row_array['array_pictName'];?>">
						<div class="col-xs-6 col-md-2">
							<div class="show_images thumbnail" id="show_pic-[<?php echo $i;?>]">
								<a class="fancybox" href="<?php echo base_url().'file_upload/pict_news/'.$row_array['array_pictName'];?>" data-fancybox-group="gallery" title="<?php echo $row_news->news_title;?>">
									<img src="<?php echo base_url().'file_upload/pict_news/'.$row_array['array_pictName'];?>"alt=""   id="images[<?php echo $i;?>]"/>
								</a>
								<!-- <a class="update" id="id_picture[<?php echo $i;?>]" href="#">update</a> -->
								<button type="button" class="btn btn-primary btn-sm update" data-toggle="modal" data-target="#myModal<?php echo $row_array['array_title'];?>">
									update
								</button>
								<!-- <a class="delete btn btn-primary btn-sm" href="#">delate</a> -->
								<?php echo anchor('sci_con/delete_updatePicture/'.$row_news->news_id.'/'.$row_array['array_title'],'delete','class ="delete btn btn-primary btn-sm"');?>
							</div>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="myModal<?php echo $row_array['array_title'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Modal title</h4>
									</div>
									<div class="modal-body">
										<?php

										echo $row_array['array_title'];
										echo "<br/>";
										echo $row_array['array_pictName'];
										echo "<br/>";
										echo $this->input->post('name_pict');

										?>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div><!-- end modal -->
						<?php 
					}
					?>
				</div>
				<?php
			}
			?>
		</div>  <!-- --- end class="row col-md-offset-2" --------- -->
		<hr> 
	</div>
</div>
<!-- end jquery reader upload picture -->
<!-- /#page-wrapper -->

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

	function PreviewImage() {  //show picture on click

		var oFReader = new FileReader();

		oFReader.readAsDataURL(document.getElementById("images[]").files[0]);

		oFReader.onload = function (oFREvent) {

			document.getElementById("show_pic").src = oFREvent.target.result;

		};
	}
</script>
<?php $this->load->view('footer');?>