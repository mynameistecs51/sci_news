<!DOCTYPE html>
<html>
<head>
	<title>test fckeditor</title>
	<script type="text/javascript" src="<?php echo base_url();?>fckeditor/fckeditor.js"></script>
</head>
<body>
	<textarea name="detail" id="detail"></textarea>
	<script type="text/javascript">
		var oFCKeditor = new FCKeditor( 'detail' ) ;
		oFCKeditor.BasePath = '<?php echo base_url(); ?>fckeditor/';
		//oFCKeditor.Height = 300;
		oFCKeditor.ReplaceTextarea() ;
	</script>
</body>
</html>