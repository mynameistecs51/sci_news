<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title;?> </title>
  <link rel="icon" type="image/x-icon" href="<?php echo base_url().'image/pict_admin/logo_sci.png';?>">  
  <!-- JS Light box -->
  <!-- Add jQuery library -->
  <script type="text/javascript" src="<?php echo base_url().'js/jquery-1.10.2.min.js';?>"></script>

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="<?php echo base_url().'js/jquery.mousewheel.pack.js?v=3.1.3';?>"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="<?php echo base_url().'source/jquery.fancybox.pack.js?v=2.1.5';?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'source/jquery.fancybox.css?v=2.1.5';?>" media="screen" />
  <!-- ./end js lightbox -->
  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url().'css/bootstrap.min.css';?>" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="<?php echo base_url().'css/plugins/metisMenu/metisMenu.min.css';?>" rel="stylesheet">

  <!-- Timeline CSS -->
  <link href="<?php echo base_url().'css/plugins/timeline.css';?>" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?php echo base_url().'css/sb-admin-2.css';?>" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="<?php echo base_url().'css/plugins/morris.css';?>" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?php echo base_url().'font-awesome-4.1.0/css/font-awesome.min.css';?>" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        

      </head>

      <body>

    <div id="wrapper">

      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">Science Admin </a>
        </div>
        <!-- /.navbar-header --> 
        <div class="row col-xs-offset-3 col-md-7" >  
         <!-- <div class=" col-md-offset-5">   -->      
         <div class="nav navbar-top-links navbar-right " align="center" style="inline:2px;padding-top: 25px">
           <?php 
           if(!$fb_data['me']){     
            echo anchor($fb_data['loginUrl'],'<image src="'.base_url().'image/pict_admin/fb_login.png"/>');
          }  else  {
            echo ' <img src="https://graph.facebook.com/'.$fb_data['uid'].'/picture" alt="" class="pic" />';
            echo "<br/>";
            echo $fb_data['me']['name']." "; 
            //echo anchor($fb_data['logoutUrl'],'logout');
              echo anchor('sci_con/logout','logout');
          } 
          ?>
        </div>
      </div>

      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            <li>
              <?php echo anchor( 'sci_con/add_news/','<i class="glyphicon glyphicon-picture"></i> เพิ่มข้อมูลรูปภาพ','class="active"');?>
            </li>
            <li>
              <?php echo anchor('sci_con/list_news','<i class="glyphicon glyphicon-th-list"></i> รายการข่าว','class="active"');?>
            </li>
            <li>
            <?php echo anchor('sci_con/create_news','<i class="glyphicon glyphicon-file"></i>จดหมายข่าว','class="active"');?>
            </li>
            <li>
              <?php echo anchor('sci_con/fck_editor' ,'<i class="glyphicon glyphicon-file"></i>fckeditor','class="active"');?>
            </li>
          </ul>
        </div>
        <!-- /.sidebar-collapse -->
      </div>
      <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">