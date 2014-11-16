<?php $this->load->view("header");?>
<!--  jquery lightbox -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="<?php echo base_url().'js/jquery.mousewheel.pack.js';?>"></script>
<script src="<?php echo base_url().'js/jquery-1.10.2.min.js';?>"></script>
<!-- css lightbox -->
<link href="<?php echo base_url().'css/plugins/lightbox.css';?>" rel="stylesheet">

<!-- ./end  -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">รายการข่าว</h1>
	</div>    <!-- /.col-lg-12 -->
</div>	<!-- /.row -->
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox({
			openEffect	: 'none',
			closeEffect	: 'none'
		});
	});
</script>
<!-- js show picture lightbox -->

    <script type="text/javascript">
        $(document).ready(function() {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

            /*
             *  Different effects
             */

            // Change title type, overlay closing speed
            $(".fancybox-effects-a").fancybox({
                helpers: {
                    title : {
                        type : 'outside'
                    },
                    overlay : {
                        speedOut : 0
                    }
                }
            });

            // Disable opening and closing animations, change title type
            $(".fancybox-effects-b").fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                helpers : {
                    title : {
                        type : 'over'
                    }
                }
            });

            // Set custom style, close if clicked, change title type and overlay color
            $(".fancybox-effects-c").fancybox({
                wrapCSS    : 'fancybox-custom',
                closeClick : true,

                openEffect : 'none',

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    overlay : {
                        css : {
                            'background' : 'rgba(238,238,238,0.85)'
                        }
                    }
                }
            });

            // Remove padding, set opening and closing animations, close if clicked and disable overlay
            $(".fancybox-effects-d").fancybox({
                padding: 0,

                openEffect : 'elastic',
                openSpeed  : 150,

                closeEffect : 'elastic',
                closeSpeed  : 150,

                closeClick : true,

                helpers : {
                    overlay : null
                }
            });

            /*
             *  Button helper. Disable animations, hide close button, change title type and content
             */

            $('.fancybox-buttons').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    buttons : {}
                },

                afterLoad : function() {
                    this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                }
            });


            /*
             *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
             */

            $('.fancybox-thumbs').fancybox({
                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,
                arrows    : false,
                nextClick : true,

                helpers : {
                    thumbs : {
                        width  : 50,
                        height : 50
                    }
                }
            });

            /*
             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
            */
            $('.fancybox-media')
                .attr('rel', 'media-gallery')
                .fancybox({
                    openEffect : 'none',
                    closeEffect : 'none',
                    prevEffect : 'none',
                    nextEffect : 'none',

                    arrows : false,
                    helpers : {
                        media : {},
                        buttons : {}
                    }
                });

            /*
             *  Open manually
             */

            $("#fancybox-manual-a").click(function() {
                $.fancybox.open('1_b.jpg');
            });

            $("#fancybox-manual-b").click(function() {
                $.fancybox.open({
                    href : 'iframe.html',
                    type : 'iframe',
                    padding : 5
                });
            });

            $("#fancybox-manual-c").click(function() {
                $.fancybox.open([
                    {
                        href : '1_b.jpg',
                        title : 'My title'
                    }, {
                        href : '2_b.jpg',
                        title : '2nd title'
                    }, {
                        href : '3_b.jpg'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });


        });
    </script>
    <style type="text/css">
        .fancybox-custom .fancybox-skin {
            box-shadow: 0 0 50px #222;
        }
    </style>
        <!-- ./end show slide picture  lightbox-->
<div class="row" >

	<?php 
	foreach ($show_news as $detail => $row) 	{		// show detail news 		
		?>
		<div class=" col-sx-8 col-sm-10" style="word-wrap:break-word; display:block; ">
			<div class="panel panel-info">
				<div class="panel panel-heading"> <h4><?php echo $row->news_title;?></h4>
					<div class="col-sm-offset-9 col-sx-5"><?php echo $row->news_date;?></div>
				</div>
				<div class="panel panel-body"><p>					
					<?php echo $row->news_detail;	?>	<!-- //show detail text -->
				</p></div>
			</div>	<!-- //end div=class panel -->
			<?php 			

			$picture_name_array = explode(',', $row->news_file_upload);
			foreach ($picture_name_array as $key => $value_detail) { //show picture 
				echo '<div class="col-xs-6 col-md-3">';
				echo '<div class="thumbnail">';
				echo '<a class="fancybox" rel="gallery1" href='.base_url().'file_upload/pict_news/'.$value_detail.'  title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">';
				echo '<img src='.base_url().'file_upload/pict_news/'.$value_detail.' alt="" width=350px height=220px> &nbsp;';
				echo '</a>';
				echo '</div>';	//  <!--  ./ end class="thumbnail"-->
				echo '</div>';	//<!-- ./ end class = "col-xs-6 col-md-3" -->
			}
		}	
		?>
	</div>
</div>
<?php $this->load->view('footer');?>