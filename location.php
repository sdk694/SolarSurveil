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
    <link rel="stylesheet" href="location.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script src="plotly.min.js"></script>

    <script>
        window.onload = function() {
          getmap1()
        }
    </script>

    <title>Location</title>
  </head>
  <body>
    
    <!-- The sidebar -->
    <div class="sidebar shadow" id="grad12">
      <a class="fa fa-tachometer fa-2x" href="dashboardmumbai.php"><span> Dashboard</span></a>
      <a class="fa fa-map-marker active fa-2x" href="location.php"><span> Location</span></a>
      <a class=" fa fa-sign-out fa-2x" href="register.php?logout=1"><span> Logout</span></a>
    </div>    

    </div>
    
    <!-- Page content -->
      <div class="content">
        <div class="card shadow">
          <h5 class="card-header bg-dark text-white" >Status and Locations of the panels</h5>
          <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                  <div class="card border-left-warning shadow" style="height: 130px;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total number of panels installed</div>
                                <div class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end">20</div>
                            </div>
                        </div>                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card border-left-warning shadow" style="height: 130px;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total number of nodes deployed</div>
                                <div class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end">30</div>
                            </div>
                        </div> 
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                    <div class="card border-left-warning shadow" style="height: 130px;">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total number of registered users</div>
                                <div class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end">20</div>
                            </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                     <div class="card border-left-warning shadow" style="height: 130px;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total number of appliance powered</div>
                                    <div class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end">5</div>
                                </div>
                            </div> 
                        </div>
                     </div>
                  </div>
              </div>
              <br>
              <div class="card shadow" style="height: 550px;">
                <h4 class="card-header bg-dark text-white">Locations and details of the Panels</h4>
                <div class="card-body">
                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Location on map</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="getmap2()">Details</a>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <br>
                      <div class="card" style="height: 380px;">
                        <div class="card-body">

                          <div id="map"></div>
                          <script>

                            function getmap1() {
                              var map = L.map('map').setView([19.5000, 72.5000], 8); 

                              L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=7Ip6PYWSWb3StlNV6AsB', {
                                attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
                              }).addTo(map);

                              var marker1 = L.marker([19.1292529, 72.9270092], { title : "Mahavir Majestik"}).addTo(map).bindPopup('<h2> Panel No 1 </h2> <p> 18W panel with 2 nodes</p>');
                              var marker2 = L.marker([19.0933, 72.8924]).addTo(map).bindPopup('<h2> Mini Solar Setup </h2><p> 2 150W panels with 4 nodes</p>');
                              var marker3 = L.marker([19.90101264, 73.21809223]).addTo(map);
                              var marker4 = L.marker([19.83774295,73.19422424]).addTo(map);
                              var marker5 = L.marker([19.84856818,73.19083765]).addTo(map);
                              var marker6 = L.marker([19.84879223,  73.19108605]).addTo(map);
                            }

                          </script>

                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <br>
                      <div class="card" style="height: 380px;">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Mumbai</h5>
                                  <p class="card-text">Testing On Mini Solar Setup of 150W using end nodes.</p>
                                  <a href="dashboardmumbai.php" class="btn btn-primary">Mumbai Dashboard</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Walvanda</h5>
                                  <p class="card-text">Implementation of end nodes at Walwanda.</p>
                                  <a href="dashboardmumbai.php" class="btn btn-primary">Walvanda Dashboard</a>
                                </div>
                              </div>
                            </div>
                          </div>

                         </div>                        
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