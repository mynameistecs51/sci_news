
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
        <script src="<?php echo base_url().'js/jquery.js';?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url().'js/bootstrap.min.js';?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url().'js/plugins/metisMenu/metisMenu.min.js';?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url().'js/sb-admin-2.js';?>"></script>

    </body>

    </html>
