<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="view_item.css">
    <title>Select Component</title>
    <style>
      table {
        
        margin-left: 20px;
        margin-top: 20px;
        border-collapse: collapse;
        width: 90%;
        color: black; 
        font-size: 18px;
        text-align: center;
      } 
      th {
        background-color: darkgrey;
        color: black;
      }
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
     
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <span class="navbar-brand mb-0 h1">SOLAR NEXUS</span>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="solarcalculator.html">Calculator<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Buy Now</a>
          </ul>
        </div>
        <span class="navbar-text text-white mb-0">
          LoRa RMS Team
        </span>
    </nav>
  

    <h3>View components available online</h3>
     <h4>Solar Panel</h4>
    <form method="post">
      <div class="form-row">
        <div class="form-group col-md-3"> 
        <label for="inputSolar">Power Rating (W)</label>
          <select id="inputSolar" class="form-control" name="powerrating">
            <option selected disabled>Choose your power requirement</option>
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
      <br>
      <button type="submit" class="btn btn-info" name="submit2">Click Here</button>
    </form> 
       
    
    <?php
      include 'sql_connect.php';     
     // $success = "";
     // $failure = "";   

      if(isset($_POST['submit2'])){ 
        
        //print_r ($_POST);
        $selectwhereQuery2 = "SELECT * FROM panel WHERE powerrating = $_POST[powerrating]"; 
        $result2 = mysqli_query($conne,$selectwhereQuery2);
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
            echo "<tr><td>" . $row["panelid"] . "</td><td>" . $row["brand"]. "</td><td>" . $row["type"] . "</td><td>" . $row["powerrating"] . "</td><td>" . $row["voltagerating"] . "</td><td>" . $row["price"] . "</td><td>" . $row["priceperwatt"] . "</td><td>" . $row["link"] . "</td><td>" . $row["inverterid"] . "</td><td>" . $row["ccid"] . "</td></tr>";
          }
          echo "</table>";
        }
      
       // else{
        //echo "0 results";
        //}
        
        //if (!$result2){ 
         // $failure = "Error viewing data.";
       // }
        $conne->close();        
        }
 
     // if($failure){
       // echo "<div class='alert alert-danger col-sm-4' role='alert'>".$failure."</div>";
     // }  
    ?>
    <hr>
    <br>
    <h4>Battery</h4>
    <form method="post">
      <div class="form-row">
        <div class="form-group col-md-3"> 
        <label for="inputBattery1">Battery voltage (V)</label>
          <select id="inputBattery1" class="form-control" name="voltage">
            <option selected disabled>Choose your required voltage</option>
            <option>12</option>            
          </select>
        </div>
        <div class="form-group col-md-3"> 
        <label for="inputBattery2">Battery Size (Ah)</label>
          <select id="inputBattery2" class="form-control" name="capacity">
            <option selected disabled>Choose your battery size Ah</option>
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
      <br>
      <button type="submit" class="btn btn-info" name="submit3">Click Here</button>
    </form> 
    <?php
      include 'sql_connect.php';     
     // $success = "";
     // $failure = "";   

      if(isset($_POST['submit3'])){ 
        
        //print_r ($_POST);
        $selectwhereQuery3 = "SELECT * FROM battery WHERE voltage = $_POST[voltage] AND capacity = $_POST[capacity]"; 
        $result3 = mysqli_query($conne,$selectwhereQuery3);
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
    <hr>
    <br>
    <h4>Charge Controller</h4>
    <form method="post">
      <div class="form-row">
        <div class="form-group col-md-3"> 
        <label for="inputCharge1">Charge Controller Current Rating (A)</label>
          <select id="inputCharge1" class="form-control" name="ampererating">
            <option selected disabled>Choose your required current rating</option>
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
        <div class="form-group col-md-3"> 
        <label for="inputCharge2">Charge Controller Voltage (V)</label>
          <select id="inputCharge2r" class="form-control" name="voltagerating">
            <option selected disabled>Choose your voltage (same as battery)</option>
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
      <br>
      <button type="submit" class="btn btn-info" name="submit4">Click Here</button>
    </form>  
    <?php
      include 'sql_connect.php';     
    //  $success = "";
     // $failure = "";   

      if(isset($_POST['submit4'])){ 
        
        //print_r ($_POST);
        $selectwhereQuery4 = "SELECT * FROM chargecontroller WHERE ampererating = $_POST[ampererating] AND voltagerating = '$_POST[voltagerating]'"; 
        $result4 = mysqli_query($conne,$selectwhereQuery4);
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
    <hr>  
    <h4>Inverter</h4>
    <form method="post">
      <div class="form-row">
        <div class="form-group col-md-3"> 
        <label for="inputInverter1">Inverter Voltage (V Same as battery)</label>
          <select id="inputInverter1" class="form-control" name="voltage">
            <option selected disabled>Voltage (same as battery)</option>
            <option>12</option>
            <option>24</option>
          </select>
        </div>
        <div class="form-group col-md-3"> 
        <label for="inputInverter2">Inverter Power (VA)</label>
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
      <button type="submit" class="btn btn-info" name="submit5">Click Here</button>
    </form>  
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
    <hr>
    <br>
    <h4>Miscellaneous</h4>
    <form method="post">
      <div class="form-row">
        <div class="form-group col-md-3"> 
        <label for="miscel">Item Name</label>
          <select id="miscel" class="form-control" name="itemname">
            <option selected disabled>Choose Item</option>
            <option>SOLAR DC WIRE</option>   
            <option>MC4 CONNECTORS</option>
            <option>PANEL STAND</option>         
          </select>
        </div>
      </div> 
      <br>
      <button type="submit" class="btn btn-info" name="submit6">Click Here</button>
    </form> 
    <?php
      include 'sql_connect.php';     
    // $success = "";
     // $failure = "";   

      if(isset($_POST['submit6'])){
        
        //print_r ($_POST);
        $selectwhereQuery6 = "SELECT * FROM misc  WHERE itemname = '$_POST[itemname]'"; 
        //echo $selectwhereQuery6;
        $result6 = mysqli_query($conne,$selectwhereQuery6);
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
    <hr>
    <br>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>