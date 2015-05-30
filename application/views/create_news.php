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
		#containment-wrapper { width: 95%; height:500px; border:2px solid #ccc; padding: 10px; }
		.resizable { width: 150px; height: 150px; padding: 0.5em; }
		/*.title{blackground:lightblue;height: 50px;cursor: pinter;margin-bottom: 20px;}*/
		.delete{color:red; display: none;}
		.hiddent-file{display: none;}
		#draggable:hover .delete{display: block}
		h3 { clear: left; }
	</style>
</head>
<body>

	<h3>สร้าง content ขนาดกระดาษ A3 แนวนอน:</h3>กลับหน้าหลัก <a href="index">index</a> 

	<!-- <div class="draggable" id="resize"></div> -->

	<div id="draggable" class="ui-widget-content" name="draggable[]">
		<img id="show_pic" name="show_pic" src="<?php echo base_url().'image/pict_admin/no-image.jpg';?>" alt="" style="width:130px; height:130px" />

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

		$(function() {

			$("#draggable").draggable({
				helper: function() {
					return jQuery(this).clone().appendTo(' body').css({
						'zIndex': 5
					});
				},
				cursor: 'move',
				containment: "document"
			});

			$('.ui-layout-center').droppable({
				activeClass: 'ui-state-hover',
				accept: '#draggable',
				tolerance:'pointer',

				drop: function(event, ui) {
					if (!ui.draggable.hasClass("dropped")){
						$(this).append($(ui.draggable).clone().addClass("dropped").draggable().resizable().dblclick( function(){
							$('input[type="file"]').click(); 
						}));
						$('.delete').click(function(){
							$(this).parent().remove();
							return false;
						});
            // show pic ture box file upload //
            function PreviewImage() {

              var oFReader = new FileReader();

              oFReader.readAsDataURL(document.getElementById("images").files[0]);

              oFReader.onload = function (oFREvent) {

                document.getElementById("show_pic").src = oFREvent.target.result;

              };

            } 
            // end show pic ture file upload//

          }
        }
      });

		});
</script>
</body>
</html>