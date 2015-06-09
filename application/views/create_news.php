<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create news </title>
	<link rel="stylesheet" href="<?php echo base_url();?>js/jquery-ui-1.11.4.custom/jquery-ui.css">

	<!--  <link rel="stylesheet" href="/resources/demos/style.css"> -->
	<style>
		#draggable {width:130px; height:130px; padding: 0.5em; }
		#draggable { cursor: move; }
		#containment-wrapper { width: 95%; height:500px; border:2px solid #ccc; padding: 10px; border: dotted 1px black; }
		.delete{color:red; display: none;}
		.hiddent-file{display: none;}
		#draggable:hover .delete{display: block}
		/*.item- :hover .delete{display: block;}*/
		h3 { clear: left; }
	</style>
</head>
<body>

	<h3>สร้าง content ขนาดกระดาษ A3 แนวนอน:</h3>กลับหน้าหลัก <a href="index">index</a> 

	<!-- <div class="draggable" id="resize"></div> -->

	<div id="draggable" class="ui-widget-content" name="draggable">
		<img class="img" id="show_pic" name="show_pic" src="<?php echo base_url().'image/pict_admin/no-image.jpg';?>" alt="" style="width:130px; height:130px" />

		<input type="file" id="images" class="hiddent-file" name="images" size="20" onchange="PreviewImage(this);" />
		<a class="delete" href="#">delete </a>
	</div>

	<br/><br/>
	<!-- <input type="file" id="images[]" class="form-control" name="images[]" size="20" onchange="PreviewImage();" multiple=""/> -->

	<div >
		<p>ดับเบิ้ลคลิ๊กเพื่อเพิ่มรูปภาพ</p>
	</div>

	<div class="ui-layout-center" id="containment-wrapper"> 
		<!-- display box latter news -->
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
 			$(".ui-widget-content").draggable({
 				helper: "clone",
                         	//Create counter
                         	start: function() { counts[0]++; }
                         });

 			$("#containment-wrapper").droppable({
 				drop: function(e, ui){
 					if(ui.draggable.hasClass("ui-widget-content")) {
 						$(this).append($(ui.helper).clone());
					 	//Pointing to the ui-widget-content class in containment-wrapper and add new class.
					 	$("#containment-wrapper .ui-widget-content").addClass("item-"+counts[0]);
					 	$("#containment-wrapper .img").addClass("imgSize-"+counts[0]);

						//Remove the current class (ui-draggable and ui-widget-content)
						$("#containment-wrapper .item-"+counts[0]).removeClass("ui-widget-content ui-draggable ui-draggable-dragging");

						// $(".delete .item- "+counts[0]).dblclick(function() {
						// 	$(this).remove();
						// });
						$('.delete ').click(function(){
							$(this).remove();
							return false;
						});
						make_draggable($(".item-"+counts[0])); 
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
 			}

 		});
</script>
</body>
</html>