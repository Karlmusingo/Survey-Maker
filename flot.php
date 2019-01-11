<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>FLot</title>
</head>
<body>

  <div class="demo-container">
    <div id="placeholder" class="demo-placeholder"></div>
    <div id="menu">
      <button id="example-1">Default Options</button>
      <button id="example-2">Without Legend</button>
      <button id="example-3">Label Formatter</button>
      <button id="example-4">Label Radius</button>
      <button id="example-5">Label Styles #1</button>
      <button id="example-6">Label Styles #2</button>
      <button id="example-7">Hidden Labels</button>
      <button id="example-8">Combined Slice</button>
      <button id="example-9">Rectangular Pie</button>
      <button id="example-10">Tilted Pie</button>
      <button id="example-11">Donut Hole</button>
      <button id="example-12">Interactivity</button>
    </div>
  </div>




  <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../../excanvas.min.js"></script><![endif]-->
  <script src="bootstrap/js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <script language="javascript" type="text/javascript" src="flot/jquery.flot.js"></script>
  <script language="javascript" type="text/javascript" src="flot/jquery.flot.pie.js"></script>
  <script type="text/javascript">
    var donutData = [
    { label: 'Series2', data: 30, color: '#3c8dbc' },
    { label: 'Series3', data: 20, color: '#0073b7' },
    { label: 'Series4', data: 50, color: '#00c0ef' }
    ];

    var options = {
      series: {
        pie: {
          innerRadius: 0.5,
          show: true
        }
      }
    }
  };

  $.plot($(#placeholder), data, options );
</script>
</body>
</html>