<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Get Components</title>
    <style>
        table {
          margin-left: auto;
          margin-right: auto;
          margin-top: 20px;
          border-collapse: collapse;
          width: 80%;
          color: black; 
          font-size: 18px;
          text-align: center;
          column-gap: 20px;
          
        } 
        
        th {
          background-color: #ffc404;
          color: black;
          column-gap: 10px;
          border: solid;
        }
        tr:nth-child(even) {
          background-color: #f2f2f2;
          border :solid;
        }
        tr:nth-child(odd) {
          border :solid;
        }
        td{
          border :solid;
        }

        ::-webkit-scrollbar {
              width: 7px;
          }

          ::-webkit-scrollbar-track {
              box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
              border-radius: 10px;
          }

          ::-webkit-scrollbar-thumb {
              box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
              border-radius: 10px;
          }
            
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #173f5f;" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a href="index.html" class="pull-left"><img src="solarsurveiltransparent.png" alt="" height="40px" style="margin-right: 12px; margin-top: 2px;"></a>
            <a class="navbar-brand" href="index.html">SOLAR SURVEIL</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="solarcalculator.html">Calculator <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="view_item2.php">Get Components</a>
            </li>
            </ul>
            <span class="navbar-text text-white">
            Solar Surveil Team
            </span>
        </div>
    </nav>

    <br>
    
    <div class="container">
        <div class="card shadow">
            <div class="card-header bg-dark text-white">
              <h1>View Components Online</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                      <div class="card shadow">
                        <div class="card-body">
                                <form method="post">
                                    <div class="form-row">
                                        <div class="form-group"> 
                                            <label for="inputSolar"><h5>Power Rating (W)</h5></label>
                                            <select id="inputSolar" class="form-control" name="powerrating">
                                                <option selected disabled>Power requirement</option>
                                                <option>50</option>
                                                <option>125</option>
                                                <option>180</option>
                                                <option>375</option>
                                                <option>40</option>
                                                <option>160</option>
                                                <option>330</option>
                                                <option>325</option>
                                                <option>100</option>
                                                <option>270</option>
                                                <option>165</option>
                                                <option>325</option>
                                                <option>100</option>
                                                <option>150</option>
                                                <option>50</option>
                                                <option>370</option>
                                                <option>270</option>
                                                <option>325</option>
                                                <option>200</option>
                                                <option>75</option>
                                                <option>300</option>
                                                <option>125</option>
                                                <option>180</option>
                                                <option>340</option>
                                                <option>245</option>
                                                <option>290</option>
                                                <option>250</option>
                                                <option>200</option>
                                                <option>100</option>
                                                <option>150</option>
                                                <option>330</option>
                                                <option>380</option>
                                                <option>370</option>
        
        
                                            </select>
                                        </div>
                                    </div> 
                                    <button type="submit" class="btn btn-info" name="submit2">Get panel details</button>
                                    
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card shadow">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6"> 
                                    <label for="inputBattery1"><h5>Battery voltage (V)</h5></label>
                                    <select id="inputBattery1" class="form-control" name="voltage">
                                        <option selected disabled>Required voltage</option>
                                        <option>12</option>            
                                    </select>
                                </div>
                                <div class="form-group col-md-6"> 
                                <label for="inputBattery2"><h5>Battery Size (Ah)</h5></label>
                                <select id="inputBattery2" class="form-control" name="capacity">
                                    <option selected disabled>Battery size Ah</option>
                                    <option>100</option>
                                    <option>150</option>
                                    <option>120</option>
                                    <option>150</option>
                                    <option>150</option>
                                    <option>150</option>
                                    <option>150</option>
                                    <option>150</option>
                                    <option>26</option>
                                    <option>150</option>
                                    <option>150</option>
                                </select>
                            </div>
                        </div> 
                            <button type="submit" class="btn btn-info" name="submit3">Get Battery details</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card shadow">
                          <div class="card-body">
                            <div class="form-row">
                                <div class="form-group"> 
                                    <label for="miscel"><h5>Item Name</h5></label>
                                    <select id="miscel" class="form-control" name="itemname">
                                        <option selected disabled>Choose Item</option>
                                        <option>SOLAR DC WIRE</option>   
                                        <option>MC4 CONNECTORS</option>
                                        <option>PANEL STAND</option>         
                                    </select>
                                    </div>
                                </div> 
                                <button type="submit" class="btn btn-info" name="submit6">Get Items</button>
                          </div>
                        </div>
                      </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-6">
                      <div class="card shadow">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6"> 
                                    <label for="inputCharge1"><h5>Charge Controller Current Rating (A)</h5></label>
                                    <select id="inputCharge1" class="form-control" name="ampererating">
                                        <option selected disabled>Vequired current rating</option>
                                        <option>6</option>
                                        <option>10</option>
                                        <option>20</option>
                                        <option>20</option>
                                        <option>50</option>
                                        <option>50</option>
                                        <option>10</option>
                                        <option>60</option>
                                        <option>30</option>
                                        <option>60</option>
                                        <option>30</option>
                                        <option>50</option>
                                        <option>50</option>
                                        <option>10</option>
                                        <option>20</option>
                                        <option>10</option></option>
                                        <option>40</option>
                                        <option>30</option>
                                        <option>60</option>
                                        <option>40</option>
                                        <option>80</option>
                                        <option>40</option>
                                    </select>
                                    </div>
                                    <div class="form-group col-md-6"> 
                                    <label for="inputCharge2"><h5>Charge Controller Voltage (V)</h5></label>
                                    <select id="inputCharge2r" class="form-control" name="voltagerating">
                                        <option selected disabled>Voltage (same as battery)</option>
                                        <option>12</option>
                                        <option>24</option>
                                        <option>48</option>
                                        <option>12|24</option>
                                        <option>24|48</option>
                                        <option>24|36</option>
                                        <option>24|36|48</option>
                                        <option>12|24|36|48</option>
                                    </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info" name="submit4">Get CC details</button>
    
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card shadow">
                        <div class="card-body">
                        <form method="post">
                              <div class="form-row">
                                <div class="form-group col-md-6"> 
                                <label for="inputInverter1"><h5>Inverter Voltage</h5></label>
                                  <select id="inputInverter1" class="form-control" name="voltage">
                                    <option selected disabled>Voltage (same as battery)</option>
                                    <option>12</option>
                                    <option>24</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-6"> 
                                <label for="inputInverter2"><h5>Inverter Power (VA)</h5></label>
                                  <select id="inputInverter2" class="form-control" name="capacity">
                                    <option selected disabled>Inverter power</option>
                                    <option>300 W / 400 VA</option>
                                    <option>560 W / 700 VA</option>
                                    <option>720 W / 900 VA</option>
                                    <option>880 W / 1735 VA</option>
                                    <option>1KW / 1265 VA</option>
                                    <option>1KW / 1135 VA</option>
                                    <option>1.3 KW / 1735 VA</option>
                                    <option>1.8 KW / 2335 VA</option>
                                    <option>800 W / 1KVA</option>
                                    <option>2.2 KW / 2.2KVA</option>
                                  </select>
                                </div>
                              </div> 
                              <br>
                              <button type="submit" class="btn btn-info" name="submit5">Get Inverter details</button>
                            </form>  
    
                        </div>
                      </div>
                    </div>
                </div>
                  
            </div>
        </div>
    </div>

    <?php
            include 'sql_connect.php';    
             // $success = "";
             // $failure = "";   

            if(isset($_POST['submit2'])){ 
            
            //print_r ($_POST);
            $selectwhereQuery2 = "SELECT * FROM panel WHERE powerrating = $_POST[powerrating]"; 
            $result2 = mysqli_query($conn,$selectwhereQuery2);
            $resultsCheck1 = mysqli_num_rows($result2);

            if ($resultsCheck1 > 0) {
            
                // output data of each row
                echo " <table>
                <tr>
                <th>Panel  ID</th> 
                <th>Brand</th>
                <th>Type</th> 
                <th>Power Rating</th>
                <th>Voltage Rating</th> 
                <th>Price</th> 
                <th>Price Per Watt</th>
                <th>Link</th>
                <th>Inverter Id</th>
                <th>CCID</th>
                </tr>";

                while($row = mysqli_fetch_assoc($result2)) 
                {
                echo "<tr><td>" . $row["panelid"] . "</td><td>" . $row["brand"]. "</td><td>" . $row["type"] . "</td><td>" . $row["powerrating"] . "</td><td>" . $row            ["voltagerating"] . "</td><td>" . $row["price"] . "</td><td>" . $row["priceperwatt"] . "</td><td>" . $row["link"] . "</td><td>" . $row["inverterid"]             . "</td><td>" . $row["ccid"] . "</td></tr>";
                }
                echo "</table>";
            }
            
            $conne->close();        
        }

    ?>

    <?php
    include 'sql_connect.php';     
   // $success = "";
   // $failure = "";   

    if(isset($_POST['submit3'])){ 
      
      //print_r ($_POST);
      $selectwhereQuery3 = "SELECT * FROM battery WHERE voltage = $_POST[voltage] AND capacity = $_POST[capacity]"; 
      $result3 = mysqli_query($conn,$selectwhereQuery3);
      $resultsCheck2 = mysqli_num_rows($result3);

      if ($resultsCheck2 > 0) 
      {
        // output data of each row
        echo " <table>
        <tr>
          <th>Battery ID</th> 
          <th>Brand</th>
          <th>Type</th> 
          <th>Capacity</th>
          <th>Voltage</th> 
          <th>Rating</th>
          <th>Price</th> 
          <th>Link</th>
        </tr>";

        while($row = mysqli_fetch_assoc($result3)) 
        {
          echo "<tr><td>" . $row["brandid"] . "</td><td>" . $row["brand"]. "</td><td>" . $row["type"] . "</td><td>" . $row["capacity"] . "</td><td>" . $row["voltage"] . "</td><td>" . $row["capacityrating"] . "</td><td>" . $row["price"] . "</td><td>" . $row["link"] . "</td></tr>";
        }
        echo "</table>";
      }
    
    //  else{
     // echo "0 results";
     // }
      
    //  if (!$result3){ 
      //  $failure = "Error viewing data.";
    //  }
    
      $conne->close();        
    }

    //if($failure){
     // echo "<div class='alert alert-danger col-sm-4' role='alert'>".$failure."</div>";
   // }  
  ?> 

  <?php
      include 'sql_connect.php';     
    //  $success = "";
     // $failure = "";   

      if(isset($_POST['submit4'])){ 
        
        //print_r ($_POST);
        $selectwhereQuery4 = "SELECT * FROM chargecontroller WHERE ampererating = $_POST[ampererating] AND voltagerating = '$_POST[voltagerating]'"; 
        $result4 = mysqli_query($conn,$selectwhereQuery4);
        $resultsCheck3 = mysqli_num_rows($result4);
        if ($resultsCheck3 > 0) 
        {
          // output data of each row
          echo " <table>
          <tr>
            <th>Charge Controller ID</th> 
            <th>Brand</th>
            <th>Type</th> 
            <th>Current Rating</th>
            <th>Voltage</th> 
            <th>Price</th>
            <th>Link</th> 
          </tr>";

          while($row = mysqli_fetch_assoc($result4)) 
          {
            echo "<tr><td>" . $row["ccid"] . "</td><td>" . $row["brand"]. "</td><td>" . $row["type"] . "</td><td>" . $row["ampererating"] . "</td><td>" . $row["voltagerating"] . "</td><td>" . $row["price"] . "</td><td>" . $row["link"] . "</td></tr>";
          }
          echo "</table>";
        }
      
        //else{
       // echo "0 results";
       // }
        
        //if (!$result4){ 
         // $failure = "Error viewing data.";
       // }
        $conne->close();        
        }
 
     // if($failure){
       // echo "<div class='alert alert-danger col-sm-4' role='alert'>".$failure."</div>";
     // }  
    ?> 


    <?php
    include 'sql_connect.php';     
   // $success = "";
   // $failure = "";   

    if(isset($_POST['submit5'])){ 
      
      //print_r ($_POST);
      $selectwhereQuery5 = "SELECT * FROM solarinverter WHERE voltage = $_POST[voltage] AND capacity = '$_POST[capacity]'"; 
      $result5 = mysqli_query($conn,$selectwhereQuery5);
      $resultsCheck4 = mysqli_num_rows($result5);
      if ($resultsCheck4 > 0) 
      {
        // output data of each row
        echo " <table>
        <tr>
          <th>Inverter ID</th> 
          <th>Brand</th>
          <th>Type</th> 
          <th>Capacity</th>
          <th>Voltage</th> 
          <th>CC Rating</th>
          <th>Price</th>
          <th>Link</th> 
        </tr>";

        while($row = mysqli_fetch_assoc($result5)) 
        {
          echo "<tr><td>" . $row["inverterid"] . "</td><td>" . $row["brand"]. "</td><td>" . $row["type"] . "</td><td>" . $row["capacity"] . "</td><td>" . $row["voltage"] . "</td><td>" . $row["ccrating"] . "</td><td>" . $row["price"] . "</td><td>" . $row["link"] . "</td></tr>";
        }
        echo "</table>";
      }
    
     // else{
      //echo "0 results";
     // }
      
     // if (!$result5){ 
      //  $failure = "Error viewing data.";
     // }
      $conne->close();        
     }

   // if($failure){
     // echo "<div class='alert alert-danger col-sm-4' role='alert'>".$failure."</div>";
   // }  
  ?>

  <?php
  include 'sql_connect.php';     
// $success = "";
 // $failure = "";   

  if(isset($_POST['submit6'])){
    
    //print_r ($_POST);
    $selectwhereQuery6 = "SELECT * FROM misc  WHERE itemname = '$_POST[itemname]'"; 
    //echo $selectwhereQuery6;
    $result6 = mysqli_query($conn,$selectwhereQuery6);
    $resultsCheck = mysqli_num_rows( $result6);

      
    
      // output data of each row
      if($resultsCheck > 0)
      {
      echo " <table>
      <tr>
        <th>Item ID</th> 
        <th>Item Name</th>
        <th>Specs</th> 
        <th>Price</th>
        <th>Link</th> 
      </tr>";

      while($row = mysqli_fetch_assoc($result6)) 
      {
        echo "<tr><td>" . $row["itemid"] . "</td><td>" . $row["itemname"]. "</td><td>" . $row["specs"] . "</td><td>" . $row["price"] . "</td><td>" . $row["link"] . "</td></tr>";
      }
       echo "</table>";
    }
  
    
    
    
    //if (!$result6){ 
    //  $failure = "Error viewing data.";
   // }
    $conne->close();        
    }

 // if($failure){
   // echo "<div class='alert alert-danger col-sm-4' role='alert'>".$failure."</div>";
 // }  
?> 
   <?php
      include 'sql_connect.php';     
     // $success = "";
     // $failure = "";   

      if(isset($_POST['submit5'])){ 
        
        //print_r ($_POST);
        $selectwhereQuery5 = "SELECT * FROM solarinverter WHERE voltage = $_POST[voltage] AND capacity = '$_POST[capacity]'"; 
        $result5 = mysqli_query($conne,$selectwhereQuery5);
        $resultsCheck4 = mysqli_num_rows($result5);
        if ($resultsCheck4 > 0) 
        {
          // output data of each row
          echo " <table>
          <tr>
            <th>Inverter ID</th> 
            <th>Brand</th>
            <th>Type</th> 
            <th>Capacity</th>
            <th>Voltage</th> 
            <th>CC Rating</th>
            <th>Price</th>
            <th>Link</th> 
          </tr>";

          while($row = mysqli_fetch_assoc($result5)) 
          {
            echo "<tr><td>" . $row["inverterid"] . "</td><td>" . $row["brand"]. "</td><td>" . $row["type"] . "</td><td>" . $row["capacity"] . "</td><td>" . $row["voltage"] . "</td><td>" . $row["ccrating"] . "</td><td>" . $row["price"] . "</td><td>" . $row["link"] . "</td></tr>";
          }
          echo "</table>";
        }
      
       // else{
        //echo "0 results";
       // }
        
       // if (!$result5){ 
        //  $failure = "Error viewing data.";
       // }
        $conne->close();        
       }
 
     // if($failure){
       // echo "<div class='alert alert-danger col-sm-4' role='alert'>".$failure."</div>";
     // }  
    ?> 



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>