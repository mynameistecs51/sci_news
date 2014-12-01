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
        <div id="fb-root"></div>
        <script>
            // This is called with the results from from FB.getLoginStatus().
            function statusChangeCallback(response) {
              console.log('statusChangeCallback');
              console.log(response);
              // The response object is returned with a status field that lets the
              // app know the current login status of the person.
              // Full docs on the response object can be found in the documentation
              // for FB.getLoginStatus().
              if (response.status === 'connected') {
                // Logged into your app and Facebook.
                testAPI();
              } else if (response.status === 'not_authorized') {
                // The person is logged into Facebook, but not your app.
                document.getElementById('status').innerHTML = 'Please log ' +
                'into this app.';
              } else {
                // The person is not logged into Facebook, so we're not sure if
                // they are logged into this app or not.
                document.getElementById('status').innerHTML = 'Please log ' +
                'into Facebook.';
              }
            }

            // This function is called when someone finishes with the Login
            // Button.  See the onlogin handler attached to it in the sample
            // code below.
            function checkLoginState() {
              FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
              });
            }

            window.fbAsyncInit = function() {
              FB.init({
                appId      : '820131761362365',
              cookie     : true,  // enable cookies to allow the server to access 
                                  // the session
              xfbml      : true,  // parse social plugins on this page
              version    : 'v2.0' // use version 2.1
            });

            // Now that we've initialized the JavaScript SDK, we call 
            // FB.getLoginStatus().  This function gets the state of the
            // person visiting this page and can return one of three states to
            // the callback you provide.  They can be:
            //
            // 1. Logged into your app ('connected')
            // 2. Logged into Facebook, but not your app ('not_authorized')
            // 3. Not logged into Facebook and can't tell if they are logged into
            //    your app or not.
            //
            // These three cases are handled in the callback function.

            FB.getLoginStatus(function(response) {
              statusChangeCallback(response);
            });

          };

            // Load the SDK asynchronously
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&appId=820131761362365&version=v2.0";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

            // Here we run a very simple test of the Graph API after login is
            // successful.  See statusChangeCallback() for when this call is made.
            function testAPI() {
              console.log('Welcome!  Fetching your information.... ');
              FB.api('/me', function(response) {
                console.log('Successful login for: ' + response.name);
                document.getElementById('status').innerHTML =
                'Thanks for logging in, ' + response.name + '!';
              });
            }
          </script>

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
                 if(empty($fb_data)){     
                   echo anchor('$fb_data["loginUrl"]','<fb:login-button scope="public_profile,email" >');
                 }  else  {
                  echo ' <img src="https://graph.facebook.com/'.$fb_data['uid'].'/picture" alt="" class="pic" />';
                  echo "<br/>";
                  echo $fb_data['me']['name']." "; 
                  echo anchor($fb_data['logoutUrl'],'logout')."<br/>";
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
                </ul>
              </div>
              <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
          </nav>
          <div id="page-wrapper">