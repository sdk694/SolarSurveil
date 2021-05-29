<?php
        $link = mysqli_connect("localhost","yourusername","yourpassword","solarnexus"); 

        if(mysqli_connect_error()){
            die("Not connected to MySQL Database. Error! :("."<br>");
        }
