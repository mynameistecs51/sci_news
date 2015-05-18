<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Draggable - Auto-scroll</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #draggable, #draggable2, #draggable3 { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 0 10px 10px 0; }
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable({ scroll: true });
    $( "#draggable2" ).draggable({ scroll: true, scrollSensitivity: 100 });
    $( "#draggable3" ).draggable({ scroll: true, scrollSpeed: 100 });
  });
  </script>
</head>
<body>
 
<div id="draggable" class="ui-widget-content">
  <p>Scroll set to true, default settings</p>
</div>
 
<div id="draggable2" class="ui-widget-content">
  <p>scrollSensitivity set to 100</p>
</div>
 
<div id="draggable3" class="ui-widget-content">
  <p>scrollSpeed set to 100</p>
</div>
 
<div style="height: 5000px; width: 1px;"></div>
 
 
</body>
</html>