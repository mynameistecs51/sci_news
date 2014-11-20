<?php $this->load->view("header");?>
<!-- Add jQuery library -->
        <script type="text/javascript" src="<?php echo base_url().'js/jquery-1.10.2.min.js';?>"></script>

        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="<?php echo base_url().'js/jquery.mousewheel.pack.js?v=3.1.3';?>"></script>

        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="<?php echo base_url().'source/jquery.fancybox.pack.js?v=2.1.5';?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'source/jquery.fancybox.css?v=2.1.5';?>" media="screen" />

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

        });
        </script>
        <style type="text/css">
            .fancybox-custom .fancybox-skin {
                box-shadow: 0 0 50px #222;
            }

            tbody {
                max-width: 700px;
                margin: 0 auto;
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
            		<tbody>
            			<p>
            				<?php 
            				$picture_name_array = explode(',', $row->news_file_upload);
							foreach ($picture_name_array as $key => $value_detail) { //show picture 
								?>
								<a class="fancybox" href="<?php echo base_url().'file_upload/pict_news/'.$value_detail;?>" data-fancybox-group="gallery" title="<?php echo $row->news_title;?>">
									<img src="<?php echo base_url().'file_upload/pict_news/'.$value_detail;?>" alt=""/>
								</a>
								<?php
							}
							?>
						</p>
						<hr/>
					</tbody>			
				</div>  <!-- ./ end   class=" col-sx-8 col-sm-10" style="word-wrap:break-word; display:block;  -->
				<?php
			}
			?>
		</div>
		<?php $this->load->view('footer');?>