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

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <?php echo anchor( 'sci_con','<i class="glyphicon glyphicon-picture"></i> เพิ่มข้อมูลรูปภาพ','class="active"');?>
                            </li>
                            <li>
                                <?php echo anchor('sci_con/list_news','<i class="glyphicon glyphicon-th-list"></i> รายการข่าว','class="active"');?>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">