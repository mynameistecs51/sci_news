<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title;?> </title>

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
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">ทดสอบ</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">

                    <div class="row  col-md-10 col-md-offset-1 ">


                        <div class="row">

                            <?php echo form_open_multipart('admin_con/add_detail',' class="form-horizontal" role="form" ');?>
                            <div class="form-group col-xs-6">
                                <label for="input_detail" class="col-sm-4 control-label">รายละเอียด </label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" rows="4" cols="50" id="input_detail" name="input_detail" style="height: 192px; width: 288px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="input_picture" class="col-sm-2 control-label">รูปภาพ   </label>
                                <div class="col-sm-8">
                                    <img id="show_pic" src="<?php echo base_url().'image/pict_admin/no-image.jpg';?>" alt="" style="width:130px; height:130px" /><br/><br/>
                                    <input type="file" id="userfile" class="form-control" name="userfile" size="20" onchange="PreviewImage();" multiple/>
                                </div>
                            </div>

                            <div class="col-sm-offset-8  col-xs-4">
                                <button type="reset" class="btn btn-warning" value="reset">reset</button>
                                <button type="submit" class="btn btn-success" value="save">save</button>
                            </div>
                         <?php echo form_close(); ?>
                    </div>  <!-- --- end class="row col-md-offset-2" --------- -->
                    <hr>   
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<script type="text/javascript">

    function PreviewImage() {

        var oFReader = new FileReader();

        oFReader.readAsDataURL(document.getElementById("userfile").files[0]);

        oFReader.onload = function (oFREvent) {

            document.getElementById("show_pic").src = oFREvent.target.result;

        };

    } 

</script>
    <!-- jQuery -->
    <script src="<?php echo base_url().'js/jquery.js';?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'js/bootstrap.min.js';?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url().'js/plugins/metisMenu/metisMenu.min.js';?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url().'js/sb-admin-2.js';?>"></script>

</body>

</html>
