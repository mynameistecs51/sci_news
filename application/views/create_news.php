<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Create news </title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
    .draggable { width: 90px; height: 90px; padding: 0.5em; float: left; margin: 0 10px 10px 0; }
    /*#draggable, #draggable2 { margin-bottom:20px; }*/
    #draggable { cursor: n-resize; }
    /*#draggable2 { cursor: e-resize; }*/
    #containment-wrapper { width: 95%; height:500px; border:2px solid #ccc; padding: 10px; }

    h3 { clear: left; }
  </style>
  <script>
    $(function() {
      jQuery(function() {
        jQuery(".dragImg").draggable({
        //  use a helper-clone that is append to 'body' so is not 'contained' by a pane
        helper: function() {
          return jQuery(this).clone().appendTo(' body').css({
            'zIndex': 5
          });
        },
        cursor: 'move',
        containment: "document"
      });

        jQuery('.ui-layout-center').droppable({
          activeClass: 'ui-state-hover',
          accept: '.dragImg',
          drop: function(event, ui) {
            if (!ui.draggable.hasClass("dropped"))
              jQuery(this).append(jQuery(ui.draggable).clone().addClass("dropped").draggable());
          }
        });
      });

      $(".dragImg").resizable();

    });
  </script>
</head>
<body>

  <h3>สร้าง content ขนาดกระดาษ A3 แนวนอน:</h3>กลับหน้าหลัก <?php echo anchor('sci_con/','index');?>
  <a class="add-box" href="#">add textarea  </a>
  
  <div class="dragImg"><img src="http://placehold.it/80x80">
  </div>

  <div class="ui-layout-center" id="containment-wrapper"> 

  </div>

</body>
</html>