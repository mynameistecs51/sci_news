<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Draggable - Constrain movement</title>
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

      $( "#draggable1" ).draggable({ containment: "#containment-wrapper", scroll: false });
      $( "#draggable2" ).draggable({ containment: "#containment-wrapper", scroll: false });
    });
  </script>
</head>
<body>

  <h3>สร้าง content ขนาดกระดาษ A3 แนวนอน:</h3>
  <div id="containment-wrapper">
    <div id="draggable1" class="draggable ui-widget-content">
      <p>I'm contained within the box</p>
    </div>

    <div id="draggable2" class="draggable ui-widget-content">
      <p>I'm contained within the box</p>
    </div>
  </div>

</body>
</html>