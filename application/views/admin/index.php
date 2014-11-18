<?php $this->load->view("header");?>

<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript">

    function PreviewImage() {

        var oFReader = new FileReader();

        oFReader.readAsDataURL(document.getElementById("images[]").files[0]);

        oFReader.onload = function (oFREvent) {

            document.getElementById("show_pic").src = oFREvent.target.result;

        };

    } 

</script>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">เพิ่มข่าว</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">

   <div class="row  col-md-11 ">

       <div class="row">
           <?php echo form_open_multipart('sci_con/do_upload/',' class="form-horizontal" role="form" ');?>
           <div class="form-group col-xs-6">
               <label for="input_detail" class="col-sm-4 control-label">หัวข้อข่าว </label>
               <div class="col-sm-8">
                   <input type="text" class="form-control" id="input_title" name="input_title" value=""> <br/>
               </div>
               <label for="input_detail" class="col-sm-4 control-label">รายละเอียด </label>
               <div class="col-sm-8">
                <textarea class="form-control" rows="4" cols="50" id="input_detail" name="input_detail" style="height: 192px; width: 288px;"></textarea>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label for="input_picture" class="col-sm-2 control-label">รูปภาพ   </label>
            <div class="col-sm-8">
                <img id="show_pic" name="show_pic" src="<?php echo base_url().'image/pict_admin/no-image.jpg';?>" alt="" style="width:130px; height:130px" /><br/><br/>
                <input type="file" id="images[]" class="form-control" name="images[]" size="20" onchange="PreviewImage();" multiple=""/>
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

<!-- end jquery reader upload picture -->
<!-- /#page-wrapper -->
<?php $this->load->view('footer');?>