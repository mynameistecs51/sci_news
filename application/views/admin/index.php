<?php $this->load->view("header");?>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">ทดสอบ</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">

                    <div class="row  col-md-11 ">


                        <div class="row">

                            <?php echo form_open_multipart('#',' class="form-horizontal" role="form" ');?>
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


                                    <div id="uploader_div"></div> <!-- ///////////////-->

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
<?php $this->load->view('footer');?>