<?php
$var = $_GET['data'];
echo shell_exec("python Data_Downloader.py $var");
?> 
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Stock predictor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="\Stock-Prediction-master\login\welcome.php">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="\Stock-Prediction-master\login\about.html">About</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="\Stock-Prediction-master\login\team.html">Team</a>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="\Stock-Prediction-master\login\searchbox\SearchBox.html">Search</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="\Stock-Prediction-master\login\portfolio.php">Portfolio</a>
        </li>
     
      </ul>
  
    <div class="navbar-collapse collapse">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    <a href="/login/logout.php" class="btn btn-dark">Logout</a>
        </li>
    </ul>
    </div>
  
  
    </div>
  </nav>  
  <br>
<input type="file" id="uploadfile" accept=".csv">
<button id="uploadconfirm">Predict Buy & Sell</button>
<head>
<script src="https://cdn.jsdelivr.net/npm/papaparse@5.3.2/papaparse.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-stock.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-annotations.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-data-adapter.min.js"></script>
  <link href="https://cdn.anychart.com/playground-css/annotated/annotated-title.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
  <style type="text/css">

    html,
    body,
    #container {
      width: 100%;
      height: 93%;
      margin: 0;
      padding: 0;
    }
  
</style>
</head>
<body>
  
  <div id="container"></div>
  <script>
    
     var show = '<?=$var?>';
      var name = '<?=$var?>'+'.csv';

    anychart.onDocumentReady(function () {
      anychart.data.loadCsvFile(
        name,
        function (data) {
          var dataTable = anychart.data.table();
          dataTable.addData(data);
          var mapping = dataTable.mapAs({
            open: 1,
            high: 2,
            low: 3,
            close: 4
          });
          var scrollerMapping = dataTable.mapAs();
          scrollerMapping.addField('value', 5);
          var chart = anychart.stock();
          chart.padding([40, 40, 40, 40]);
          var plot = chart.plot(0);
          // grid settings
          plot.yGrid(true).xGrid(true).xMinorGrid(true).yMinorGrid(true);

          // create EMA indicators with period 50
          var ema = plot.ema(dataTable.mapAs({ value: 4 }));
          ema.series().stroke('1.5 #455a64');

          // create candlestick series
          var series = plot.candlestick(mapping).name(show);
          series.legendItem().iconType('rising-falling');

          var controller = plot.annotations();
  
          chart.scroller().candlestick(mapping);

          // set chart selected date/time range
          chart.selectRange('max', 'max'); 

          // set container id for the chart
          chart.container('container');
          // initiate chart drawing
          chart.draw();

          // create range picker
          var rangePicker = anychart.ui.rangePicker();
          // init range picker
          rangePicker.render(chart);

          // create range selector
          var rangeSelector = anychart.ui.rangeSelector();
          // init range selector
          rangeSelector.render(chart);
          const Signaldata = [];
        const uploadconfirm = document.getElementById('uploadconfirm').addEventListener('click',()=>{
            Papa.parse(document.getElementById('uploadfile').files[0],
            {
                download: true,
                header: true,
                skipEmptyLine: true,
                complete: function(results){
                    for(i = 0; i < results.data.length;i++){
                       Signaldata.push( results.data[i].Signal);
                       if(results.data[i].Signal==1.0){
                        //Marker For UP Arrow
                        var marker1 = controller.marker({
                        xAnchor: results.data[i].Date,
                        valueAnchor: results.data[i].Close,
                        size: 30,
                        offsetY: 10
                        //for()
                       }); 
                         }
                        else if(results.data[i].Signal==-1.0){
                          var marker2 = controller.marker({ 
                          xAnchor:results.data[i].Date,
                          valueAnchor:results.data[i].Close,
                          markerType:"arrowDown",
                          size:30,
                          offsetY:-40
                          });
                       }
                       else {
                        
                                }
                    }
                    
                }
            });
        });
        }
      );
    });
  
</script>
  
</body>
</html>