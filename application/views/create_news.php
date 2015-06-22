<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create news </title>
	<link rel="stylesheet" href="<?php echo base_url();?>js/jquery-ui-1.11.4.custom/jquery-ui.css">
	<!--  <link rel="stylesheet" href="/resources/demos/style.css"> -->
	<style>
		#draggable  {width:130px; height:130px; padding: 0.5em; cursor: move; }
		#containment-wrapper { width: 95%; height:500px; border:2px solid #ccc; padding: 10px; border: dotted 1px black; display: block; }
		.delete{color:red; display: none;}
		/*.hiddent-file{display: none;}*/
		.img_file{display: none;}
		/*#draggable:hover .delete{display: block}*/
		.ui-draggable-handle:hover .delete{display: block;}
		#obj{display: block; }
		#obj_text {width:10px;height: 380px;padding: 0.5em; cursor: move; display: inline; border: 1;}

		h3 { clear: left; }
	</style>
</head>
<body>
	<div>
		<h3>สร้าง content ขนาดกระดาษ A3 แนวนอน:</h3>กลับหน้าหลัก <a href="index">index</a> 
	</div>
	<br/><br/>

	<div id="obj">
		<div id="draggable" class="ui-widget-content" name="draggable" style="float:left;  margin-right:30px;">
			<img class="img" id="show_pic" name="show_pic" src="<?php echo base_url().'image/pict_admin/no-image.jpg';?>" alt="" style="width:130px; height:130px" />

			<input type="file" id="images" class="img_file" name="images" size="20"   />

			<a class="delete" href="#">delete </a>

		</div>
		<div id="obj_text" class="text_area" >
			<textarea rows="4" cols="50" id="obj_textarea" >
				ข้อความ
			</textarea>
		</div>
		<br/>
	</div>

	<br/><br/>
	<!-- <input type="file" id="images[]" class="form-control" name="images[]" size="20" onchange="PreviewImage();" multiple=""/> -->

	<div >
		<p>ดับเบิ้ลคลิ๊กเพื่อเพิ่มรูปภาพ</p>

		<div class="ui-layout-center" id="containment-wrapper"> 
			<!-- display box latter news -->
		</div>
	</div>
	<!-- jquery  -->
	<script src="<?php echo base_url();?>js/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
	<script src="<?php echo base_url();?>js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
	<script>
		$(function(){  
 			//Make every clone image unique.  
 			var counts = [0];
 			var resizeOpts = { 
 				handles: "all" ,autoHide:true
 			};    
 			$(".ui-widget-content , .text_area").draggable({
 				helper: "clone",
 				cursor: "move",
                         	//Create counter
                         	start: function() { counts[0]++; }
                         });

 			$("#containment-wrapper").droppable({
 				drop: function(e, ui){
 					if(ui.draggable.hasClass("ui-widget-content") || ui.draggable.hasClass('text_area')) {
 						$(this).append($(ui.helper).clone());
						//Pointing to the ui-widget-content class in containment-wrapper and add new class.
						$("#containment-wrapper .ui-widget-content").addClass("item-"+counts[0]);
						$("#containment-wrapper .img").addClass("imgSize-"+counts[0]);
						$("#containment-wrapper .text_area").addClass('text_area-'+counts[0]);	//add textarea

						//Remove the current class (ui-draggable and ui-widget-content)
						$("#containment-wrapper .item-"+counts[0]).removeClass("ui-widget-content ui-draggable ui-draggable-dragging");
						$("#containment-wrapper .text_area-"+counts[0]).removeClass('text_area ui-draggable ui-draggable-handle ui-draggable-dragging')

						// $("#containment-wrapper .img_file").addClass('img_upload-'+counts[0]);	//input file upload
						$('#containment-wrapper #images').attr('id','images-'+counts[0]);	//input file upload
						$('#containment-wrapper #show_pic').attr('id','show_pic-'+counts[0]);	//show picture upload

						$('.item-'+counts[0]).dblclick(function(){
							$('#images-'+counts[0]).click();
						});

						$('.delete').click(function() {
							$(this).parent().remove();
						});
						make_draggable($(".item-"+counts[0])); 
						make_draggable($(".text_area-"+counts[0]));
						$(".imgSize-"+counts[0]).resizable(resizeOpts);

					}

				}
			});

var zIndex = 0;
function make_draggable(elements){
	elements.draggable({
		containment:'parent',
		start:function(e,ui){ ui.helper.css('z-index',++zIndex); },
		stop:function(e,ui){
		}
	});
	$('#images-'+counts[0]).change(function() {
		PreviewImage(this).parent();
	});
}

 			//functon preview file upload
 			function PreviewImage() {

 				var oFReader = new FileReader();

 				oFReader.onload = function (oFREvent) {

 					document.getElementById("show_pic-"+counts[0]).src = oFREvent.target.result;

 				};

 				oFReader.readAsDataURL(document.getElementById("images-"+counts[0]).files[0]);

 			}
 		});
</script>
</body>
</html>