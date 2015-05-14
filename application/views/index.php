<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="ข่าประกาศคณะวิทยาศาสตร์ ม.ราชภัฎอุดรธานี คณะวิทยาศาสตร์">
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
		body 
		{
			background-image: url("<?php echo base_url().'file_upload/image/background.jpg';?>");
			background-color: #cccccc;
		}
	</style>

</head>

<body >
	<div class="container">
	<div class="row col-md-12">
			<form class="form-inline" role="form">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-3 control-label">Password</label>
					<div class="col-sm-4">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Sign in</button>
					</div>
				</div>
			</form>
		</div>
	</div> <!-- ./end div class=container -->
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



