<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="ข่าประกาศคณะวิทยาศาสตร์ ม.ราชภัฎอุดรธานี">
	<meta name="author" content="ข่าวชาววิทย์">

	<title><?php echo $title;?> </title>

	<!-- icon head title -->
	<link rel="icon" type="image/x-icon" href="<?php echo base_url().'file_upload/image/logo_sci.png';?>">  
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url().'css/bootstrap.min.css';?>" rel="stylesheet">
	<link href="<?php echo base_url().'css/bootstrap-responsive.css';?>" rel="stylesheet">
	<link href="<?php echo base_url().'css/bootstrap.css';?>" rel="stylesheet">

	<!-- Bootstrap Cuttom CSS -->
	<!-- <link href="<?php echo base_url().'css/shop-homepage.css';?>" rel="stylesheet"> -->

	<style type="text/css">
		body  {
			background-image: url("<?php echo base_url().'file_upload/image/background.jpg';?>");
			background-color: #cccccc;
		}
	</style>

</head>

<body >
	<div class="container-fluid">
		<div class="navbar-header">
			<a><h2></h2></a>
		</div>
	</div>

	<!-- Page Content -->
	<div class="container col-sm-12">
		<header class="col-sm-13" style="background-color:#ffffff;padding:2px 2px 2px 2px;">
			<div class="panel panel-info">
				<div class="panel-heading"><h1><b><marquee>Panel heading without title</marquee></b></h1></div>
			</div>
		</header>
		<!-- Page Heading -->
		
		<!-- Project One -->
		<div class="row col-sm-12" style="padding: 10px 5px 5px 5px;">
			<div class="col-md-7">
				<!-- <video width="320" height="240" controls autoplay> -->
				<iframe width="420" height="315"
				src="http://www.youtube.com/embed/XGSy3_Czz8k">
			</iframe>
			Your browser does not support the video tag.
			<!-- s -->
		</div>

		<div class="row col-md-5">
			<div class="panel panel-info">
				<div class="panel-heading"><h1><b>Panel heading without title</b></h1></div>
				<div class="panel-body">
					<h2><p>Panel content</p></h2>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->
</div>
<!-- Footer -->
<div class="container">

	<footer  class="navbar navbar-fixed-bottom"  role="navigation" >
		<div class="row"><hr/>	
			<div class="col-md-offset-10">
				<p>Copyright &copy; Scicence News</p>
			</div>
		</div>
	</footer>

</div>


<!-- jQuery Version 1.11.0 -->
<script src="<?php echo base_url().'js/jquery-1.11.0.js';?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url().'js/bootstrap.min.js';?>"></script>

</body>

</html>



