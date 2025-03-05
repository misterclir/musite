      <!-- jQuery -->
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/jquery/dist/jquery.min.js"></script>
      <!-- jQuery RAF (improved animation performance) -->
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/jquery-requestAnimationFrame/dist/jquery.requestAnimationFrame.min.js"></script>
      <!-- nanoScroller -->
      <!--<script type="text/javascript" src="https://www.fteamdevelopers.com/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>-->
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>
      <!-- Materialize -->
      <!--<script type="text/javascript" src="https://www.fteamdevelopers.com/materialize/bin/materialize.js"></script>-->
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/materialize/bin/materialize.js"></script>
      <!-- Simple Weather -->
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
      <!-- Sparkline -->
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
      <!-- Flot -->
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/flot/jquery.flot.js"></script>
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/flot/jquery.flot.time.js"></script>
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/flot/jquery.flot.pie.js"></script>
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/flot/jquery.flot.categories.js"></script>
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
      <!-- d3 -->
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/d3/d3.min.js"></script>
      <!-- nvd3 -->
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/nvd3/build/nv.d3.min.js"></script>
      <!-- Rickshaw -->
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/rickshaw/rickshaw.min.js"></script>
      <!-- jvectormap -->
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/assets/jquery-jvectormap/jquery-jvectormap.min.js"></script>
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/assets/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/assets/jquery-jvectormap/gdp-data.js"></script>
      <!-- Sortable -->
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/Sortable/Sortable.min.js"></script>
      <!-- Main -->
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/assets/_con/js/_con.min.js"></script>
      <!-- Google Prettify -->
      <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/panel/bower_components/code-prettify/src/prettify.js"></script>
      <script>
         /*
         * Flot Pie Chart
         */
         (function() {
          var chart = $("#flotPieChart");
          var data = [
          <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?>
          { label: "{#VIP_NAME_1}",  data: {#TOTAL_ACCOUNTS_VIP_SILVER}, color: "#90a4ae"},
          <?php endif; ?>
          <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?>
          { label: "{#VIP_NAME_2}",  data: {#TOTAL_ACCOUNTS_VIP_GOLD}, color: "#7986cb"},
          <?php endif; ?>
          <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?>
          { label: "{#VIP_NAME_3}",  data: {#TOTAL_ACCOUNTS_VIP_3}, color: "#9575cd"},
          <?php endif; ?>
          <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?>
          { label: "{#VIP_NAME_4}",  data: {#TOTAL_ACCOUNTS_VIP_4}, color: "#4db6ac"},
          <?php endif; ?>
          <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?>
          { label: "{#VIP_NAME_5}",  data: {#TOTAL_ACCOUNTS_VIP_5}, color: "#64b5f6"},
          <?php endif; ?>
          ];
          var options = {
            series: {
              pie: {
                innerRadius: 0.5,
                show: true
              }
            },
            grid: {
              hoverable: true
            },
            legend: {
              backgroundOpacity: 0,
              labelBoxBorderColor: "#fff"
            },
            tooltip: true,
            tooltipOpts: {
              content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
              shifts: {
                x: 20,
                y: 0
              },
              defaultTheme: false
            }
          };
          
          function initFlot() {
            $.plot(chart, data, options);
            chart.find('.legend table').css('width', 'auto')
            .find('td').css('padding', 5);
          }
          initFlot();
          $(window).on('resize', initFlot);
          
        }());
        /*
         * Stacked Bar Chart
         */
         (function() {
          nv.addGraph(function() {
            var chart = nv.models.multiBarChart()
            .color(["#64B5F6","#42A5F5"])
            .margin({left: 20, bottom: 20, right: 20})
                .reduceXTicks(false)   //If 'false', every single x-axis tick label will be rendered.
                .rotateLabels(0)      //Angle to rotate x-axis labels.
                .showControls(false)   //Allow user to switch between 'Grouped' and 'Stacked' mode.
                .groupSpacing(0.2)    //Distance between each group of bars.
                ;

                chart.yAxis
                .tickFormat(d3.format(',.1f'));

                d3.select('#chart1').append('svg')
                .datum(exampleData())
                .call(chart);

                return chart;
              });


          /* Inspired by Lee Byron's test data generator. */
          function stream_layers(n, m, o) {
            if (arguments.length < 3) o = 0;
            function bump(a) {
              var x = 1 / (.1 + Math.random()),
              y = 2 * Math.random() - .5,
              z = 10 / (.1 + Math.random());
              for (var i = 0; i < m; i++) {
                var w = (i / m - y) * z;
                a[i] += x * Math.exp(-w * w);
              }
            }
            return d3.range(n).map(function() {
              var a = [], i;
              for (i = 0; i < m; i++) a[i] = o + o * Math.random();
                for (i = 0; i < 5; i++) bump(a);
                  return a.map(stream_index);
              });
          }

          function stream_index(d, i) {
            return {x: i, y: Math.max(0, d)};
          }


          //Generate some nice data.
          function exampleData() {
            return stream_layers(1,30,50).map(function(data, i) {
              return {
                key: i?'New Posts':'Visitantes',
                values: data
              };
            });
          }
        }());
         
         
         
         /*
         * Stacked Area Chart
         */
         (function() {
          /*Data sample:
          { 
                "key" : "North America" , 
                "values" : [ [ 1025409600000 , 23.041422681023] , [ 1028088000000 , 19.854291255832],
                 [ 1030766400000 , 21.02286281168], 
                 [ 1033358400000 , 22.093608385173],
                 [ 1036040400000 , 25.108079299458],
                 [ 1038632400000 , 26.982389242348]
                 ...
         
                 */
                 d3.json('templates/{#TEMPLATE_DIR}/panel/assets/_con/nvd3/stackedAreaData.json', function(data) {
                  nv.addGraph(function() {
                    var chart = nv.models.stackedAreaChart()
                    .margin({bottom: 20})
                    .color(["#E27272","#64B5F6", "#FFD83C", "#81C784"])
                    .margin({right: 40, left: 40})
                  .x(function(d) { return d[0] })   //We can modify the data accessor functions...
                  .y(function(d) { return d[1] })   //...in case your data is formatted differently.
                  .useInteractiveGuideline(true)    //Tooltips which show all data points. Very nice!
                  .rightAlignYAxis(true)      //Let's move the y-axis to the right side.
                  .showControls(true)       //Allow user to choose 'Stacked', 'Stream', 'Expanded' mode.
                  .clipEdge(true);

              //Format x-axis labels with custom function.
              chart.xAxis
              .tickFormat(function(d) { 
                return d3.time.format('%x')(new Date(d)) 
              });

              chart.yAxis
              .tickFormat(d3.format(',.2f'));

              d3.select('#chart2').append('svg')
              .datum(data)
              .call(chart);

              nv.utils.windowResize(chart.update);

              return chart;
            });
                })
               }());
         
         
         
         
         // setTimeout(function() {
         //   toast('Welcome to Con!', 2000);
         // }, 1000);
       </script>