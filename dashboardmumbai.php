<?php

session_start();
if(array_key_exists("email",$_COOKIE)){

    $_SESSION["email"] = $_COOKIE["email"];
    //echo 'Logged In user email is: '.$_COOKIE["email"];
    
}

if(array_key_exists("email",$_SESSION)){

    include ("sqlconnect2.php");

} else{

   header("Location: register.php");

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboardmumbai.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="plotly.min.js"></script>

    <script>
            function getforecast1() {
              var key = '27721ab96215a82e4a4d03fe0220858a';
              var city = "Mumbai"
              fetch('https://api.openweathermap.org/data/2.5/forecast?q=' + city + '&appid=' + key + '&units=metric')
              .then(response => response.json())
              .then(data => {
              console.log(data);
              cardforecast1(data)
              cardforecast2(data)
              cardforecast3(data)
              }
              )
              fetch('https://api.openweathermap.org/data/2.5/weather?q=' + city + '&appid=' + key + '&units=metric')
              .then(response => response.json())
              .then(data1 => {
              console.log(data1);
              todayweather(data1);
              }
              )

            }

            window.onload = function() {
                getforecast1()
            }
    </script>

    <title>Dashboard</title>
  </head>
  <body>
    
    <!-- The sidebar -->
    <div class="sidebar shadow" id="grad12">
      <a class="bg-warning text-dark active fa fa-tachometer fa-2x" href="dashboard.html"><span> Dashboard</span></a>
      <a class="fa fa-map-marker fa-2x" href="location.php"><span> Location</span></a>
      <a class=" fa fa-sign-out fa-2x" href="register.php?logout=1"><span> Logout</span></a>
    </div>
    
    <!-- Page content -->
    <div class="content">
        <div class="card shadow ">
          <h5 class="card-header bg-dark text-white lead"  style="font-size: 40px;">Dashboard - Mumbai </h5>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-9">
                <div class="card  shadow">
                  <div class="card-body bg-light">
                    <h4 class="card-title">Weather Forecast for the Next 3 days</h4>
                

                    <div class="row">
                      <div class="col-sm-4">
                        <div class="card border-light">
                          <div class="card-body bg-light">
                            <div class="row">
                              <button type="button" class="btn btn-primary col-8 text-uppercase shadow"><span id="description1"></span></button>
                              <button type="button" class="btn btn-light col-4 shadow"><img id="icon1"></button>  
                              <div class="card border-light col-12 shadow" style=" margin-top: 20px;">
                                <div class="card-body">
                                  <!-- add content here -->
                                  <p class="btn btn-success" id="date1"></p>
                                  <p class="h5" > Temp = <span class="h4" id="temptrature1"></span> </p>
                                  <!-- <p> Pressure = <span id="pressure1"></span> </p> -->
                                  <p class="h5"> Humidity = <span class="h4" id="humidity1"></span> </p>
                                  <p class="h5"> Windspeed = <span class="h5" id="windspeed1"></span> </p>
                                  <!-- <p> Winddig = <span id="winddig1"></span> </p> -->
                                
                                  <script>                               
                                     function cardforecast1(data) {
                                        var temptrature = data['list'][9]['main']['temp'];
                                        var pressure    = data['list'][9]['main']['pressure'];
                                        var humidity    = data['list'][9]['main']['humidity'];
                                        var windspeed   = data['list'][9]['wind']['speed'];
                                        var winddig     = data['list'][9]['wind']['deg'];
                                        var date        = data['list'][9]['dt_txt'];
                                        var description = data['list'][9]['weather'][0]['description'];
                                        var icon        = data['list'][9]['weather'][0]['icon'];                                  
                                        var iconurl     = "https://openweathermap.org/img/wn/" +icon + ".png";
      
                                        document.getElementById('temptrature1').innerHTML = temptrature;
                                        // document.getElementById('pressure1').innerHTML    = pressure;
                                        document.getElementById('humidity1').innerHTML    = humidity;
                                        document.getElementById('windspeed1').innerHTML   = windspeed;
                                        // document.getElementById('winddig1').innerHTML     = winddig;
                                        document.getElementById('date1').innerHTML        = date;
                                        document.getElementById('description1').innerHTML = description;
                                        document.getElementById('icon1').src = iconurl; 
      
      
                                      }
                                  </script>
      
                                </div>
                              </div>                          
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card border-light">
                          <div class="card-body bg-light">
                            <div class="row">
                              <button type="button" class="btn btn-primary col-8 shadow text-uppercase"><span id="description2"></span></button>
                              <button type="button" class="btn btn-light col-4 shadow"><img id="icon2"></button>
                              <div class="card col-sm-12 border-light shadow" style="margin-top: 20px;">
                                <div class="card-body">
                                  <!-- add content here -->
                                  <p class="btn btn-success" id="date2"></p>                           
                                  <p class="h5"> Temp = <span class="h4" id="temptrature2"></span> </p>
                                  <!-- <p> Pressure = <span id="pressure2"></span> </p> -->
                                  <p class="h5"> Humidity = <span class="h4" id="humidity2"></span> </p>
                                  <p class="h5"> Windspeed = <span class="h5" id="windspeed2"></span> </p>
                                  <!-- <p> Winddig = <span id="winddig2"></span> </p> -->
                                
                                  <script>                              
                                    function cardforecast2(data) {
                                       var temptrature = data['list'][17]['main']['temp'];
                                       var pressure    = data['list'][17]['main']['pressure'];
                                       var humidity    = data['list'][17]['main']['humidity'];
                                       var windspeed   = data['list'][17]['wind']['speed'];
                                       var winddig     = data['list'][17]['wind']['deg'];
                                       var date        = data['list'][17]['dt_txt'];
                                       var description = data['list'][17]['weather'][0]['description'];
                                       var icon        = data['list'][17]['weather'][0]['icon'];                                  
                                       var iconurl     = "https://openweathermap.org/img/wn/" +icon + ".png";
      
                                       document.getElementById('temptrature2').innerHTML = temptrature;
                                      //  document.getElementById('pressure2').innerHTML    = pressure;
                                       document.getElementById('humidity2').innerHTML    = humidity;
                                       document.getElementById('windspeed2').innerHTML   = windspeed;
                                      //  document.getElementById('winddig2').innerHTML     = winddig;
                                       document.getElementById('date2').innerHTML        = date;
                                       document.getElementById('description2').innerHTML = description;
                                       document.getElementById('icon2').src = iconurl; 
                                     }
                                 </script>
                                </div>
                              </div>                            
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card border-light">
                          <div class="card-body bg-light">
                            <div class="row">
                              <button type="button" class="btn btn-primary col-8 shadow text-uppercase"><span id="description3"></span></button>
                              <button type="button" class="btn btn-light col-4 shadow"><img id="icon3"></button> 
                              <div class="card col-sm-12 border-light shadow" style="margin-top: 20px;">
                                <div class="card-body">
                                  <!-- add content here -->
                                  <p  class="btn btn-success" id="date3"> </p>
                                  <p class="h5"> Temp = <span class="h4" id="temptrature3"></span> </p>
                                  <!-- <p> Pressure = <span id="pressure3"></span> </p> -->
                                  <p class="h5"> Humidity = <span class="h4" id="humidity3"></span> </p>
                                  <p class="h5"> Windspeed = <span class="h5" id="windspeed3"></span> </p>
                                  
                                  <!-- <p> Winddig = <span id="winddig3"></span> </p>   -->
                                  
                                  <script>                              
                                    function cardforecast3(data) {
                                       var temptrature = data['list'][25]['main']['temp'];
                                       var pressure    = data['list'][25]['main']['pressure'];
                                       var humidity    = data['list'][25]['main']['humidity'];
                                       var windspeed   = data['list'][25]['wind']['speed'];
                                       var winddig     = data['list'][25]['wind']['deg'];
                                       var date        = data['list'][25]['dt_txt'];
                                       var description = data['list'][25]['weather'][0]['description'];
                                       var icon        = data['list'][17]['weather'][0]['icon'];                                  
                                       var iconurl     = "https://openweathermap.org/img/wn/" +icon + ".png";
      
                                       document.getElementById('temptrature3').innerHTML = temptrature;
                                      //  document.getElementById('pressure3').innerHTML    = pressure;
                                       document.getElementById('humidity3').innerHTML    = humidity;
                                       document.getElementById('windspeed3').innerHTML   = windspeed;
                                      //  document.getElementById('winddig3').innerHTML     = winddig;
                                       document.getElementById('date3').innerHTML        = date;
                                       document.getElementById('description3').innerHTML = description;
                                       document.getElementById('icon3').src = iconurl;
                                     }
                                 </script>
                                </div>
                              </div>                           
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card shadow">
                  <div class="card-body bg-light">
                    <h4 class="card-title">Today's Weather </h4>
                    <div class="card border-light" >
                      <div class="card-body bg-light">
                        <div class="row">
                          <button type="button" class="btn btn-primary col-8 text-uppercase shadow"><span id="descurr"></span></button>
                          <button type="button" class="btn btn-light col-4 shadow"><img id="iconcurr"></button>                            
                        </div> 
                      </div>
                    </div>
                    <br>
                    <div class="card border-light shadow bg-light">
                      <div class="card-body">                       
                        <p><span class="h5" id="maincurr"></span></p>
                        <p class="h5">Tempt = <span class="h5" id="tempcurr"></span></p>
                        <p class="h5">Humidity    = <span  class="h5"id="humiditycurr"></span></p>
                        <p class="h5">Windspeed = <span class="h5"id="windspeedcurr"></span></p>
                      </div>
                    </div>
                      <script>
                        function todayweather(data){
                          var main        = data['weather'][0]['main'];
                          var description = data['weather'][0]['description'];
                          var temptrature = data['main']['temp'];
                          var humidity    = data['main']['humidity'];
                          var windspeed   = data['wind']['speed'];
                          var icon        = data['weather'][0]['icon'];
                          var iconurl     = "https://openweathermap.org/img/wn/" +icon + ".png";


                          document.getElementById('maincurr').innerHTML      = main 
                          document.getElementById('descurr').innerHTML       = description;
                          document.getElementById('tempcurr').innerHTML      = temptrature;
                          document.getElementById('windspeedcurr').innerHTML = windspeed;
                          document.getElementById('humiditycurr').innerHTML  = humidity;
                          document.getElementById('iconcurr').src = iconurl;

                        }
                      </script>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-body bg-light">
                <h3 class="card-header bg-info text-white"><span class="fa fa-bar-chart"></span> Data Analytics And Prediction</h3>
                <br>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="card border-left-dark shadow" style="height: 140px;">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Expected Power Generation Today BY The Panel</div>
                                  <div><span class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end" id="p0"></span><span> </span><span class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end">W</span> </div>
                              </div>
                          </div>                      
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card border-left-dark shadow" style="height: 140px;">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Power Generated Last Month</div>
                                  <div><span class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end" id="p1"></span><span> </span><span class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end">W</span> </div>
                              </div>
                          </div> 
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="card border-left-dark shadow" style="height: 140px;">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Average Power Generated Last Month</div>
                                  <div><span class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end" id="p2"></span><span> </span><span class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end">W</span> </div>
                              </div>
                          </div> 
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                       <div class="card border-left-dark shadow" style="height: 140px;">
                          <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total power consumed last month</div>
                                      <div><span class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end" id="p3"></span><span> </span><span class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end">W</span> </div>
                                    </div>
                              </div> 
                          </div>
                       </div>
                    </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-12">
                <div class="card ">
                  <div class="card-body badge-light ">
                    <h4 class="card-title ">Power Generated In The Last 30 Days</h4>
                    <br>
                    <div class="shadow" id="generated"></div>
                    <script>
                      fetch("power.json")
                        .then(response => response.json())
                        .then(data => {
                          console.log(data)
                          var x = []
                          var y = []
                          // document.querySelector("#debug").innerHTML =  data
                          // document.getElementById("debug").innerHTML = JSON.stringify(data.series[0].values)
                          data.series[0].values.forEach(element => {
                            x.push(element[0])
                            y.push(element[1])
                          });
                          
                          var sum = y.reduce(function(a,b) {
                            return  (a + b);
                          },0);
                          var avg = (sum / y.length) ;
                          console.log(sum)
                          document.getElementById('p1').innerHTML = sum.toFixed(5);
                          document.getElementById('p2').innerHTML = avg.toFixed(4);
                          var trace1 = {
                            x: x,
                            y: y,
                            type: 'scatter',
                            name: 'Power'
                            // line: {
                            //   color: 'rgb(52, 12, 121)',
                            //   width: 3
                            // },
                            
                            
                          };
                          var data = [trace1];

                          var layout = { 
                              title: '',
                              font: {size: 18}
                            };

                          var config = {responsive: true}

                          Plotly.newPlot('generated', data, layout, config);
                        })

                    </script>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body bg-light">
                    <h4 class="card-title">Power Consumed In The Last 30 Days</h4>
                    <br>
                    <div class="shadow" id="consumed"></div>
                    <script>
                      fetch("powerc.json")
                        .then(response => response.json())
                        .then(data => {
                          console.log(data)
                          var x = []
                          var y = []
                          // document.querySelector("#debug").innerHTML =  data
                          // document.getElementById("debug").innerHTML = JSON.stringify(data.series[0].values)
                          data.series[0].values.forEach(element => {
                            x.push(element[0])
                            y.push(element[1])
                          });
                          var sum = y.reduce(function(a,b) {
                            return  (a + b);
                          },0);
                          var avg = (sum / y.length)
                          console.log(sum)
                          document.getElementById('p3').innerHTML = sum.toFixed(2);
                          document.getElementById('p0').innerHTML = avg.toFixed(4)
                          var trace1 = {
                            x: x,
                            y: y,
                            type: 'scatter'
                          };


                          var data = [trace1];
                          var layout = { 
                              title: '',
                              font: {size: 18}
                            };

                          var config = {responsive: true}

                          Plotly.newPlot('consumed', data, layout, config);
                        })
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>