<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Create news </title>
  <link rel="stylesheet" href="<?php echo base_url();?>js/jquery-ui-1.11.4.custom/jquery-ui.css">

  <!--  <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <style>
    #draggable { width: 50px; height: 70px; padding: 0.5em; }
    #draggable { cursor: move; }
    #containment-wrapper { width: 95%; height:500px; border:2px solid #ccc; padding: 10px; }
    .resizable { width: 150px; height: 150px; padding: 0.5em; }
    /*.title{blackground:lightblue;height: 50px;cursor: pinter;margin-bottom: 20px;}*/
    .delete{color:red; display: none;}
    #draggable:hover .delete{display: block}
    h3 { clear: left; }
  </style>

</head>
<body>

  <h3>สร้าง content ขนาดกระดาษ A3 แนวนอน:</h3>กลับหน้าหลัก <a href="http://sci.udru.ac.th/scinews/sci_con">index</a>  <a class="add-box" href="#">add textarea  </a>
  
  <!-- <div class="draggable" id="resize"></div> -->
  <div id="draggable" class="ui-widget-content">
    <p> picture </p>
    <a class="delete" href="#">delete </a>
  </div>
  <div >
    <p>add text box</p>
  </div>
  <div class="ui-layout-center" id="containment-wrapper"> 

  </div>
  <!-- jquery  -->
  <script src="<?php echo base_url();?>js/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
  <script src="<?php echo base_url();?>js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>    
  <script>

    // function fnResize(){
    //   $(".resizable").resizable();
    // }

    $(function() {
      $("#draggable").draggable({
        helper: function() {
          return jQuery(this).clone().appendTo(' body').css({
            'zIndex': 5
          });
        },
        cursor: 'move',
        containment: "document"
      });

      $('.ui-layout-center').droppable({
        activeClass: 'ui-state-hover',
        accept: '#draggable',
        tolerance:'pointer',

        drop: function(event, ui) {
          if (!ui.draggable.hasClass("dropped")){
            $(this).append($(ui.draggable).clone().addClass("dropped").draggable().resizable());
          }

          $('.delete').click(function(){
          $(this).parent().remove();
          return false;
          });
        }

      });


    });
  </script>
</body>
</html>