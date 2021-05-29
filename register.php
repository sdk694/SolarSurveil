<?php 
    //Sessions: Last till browser is ON
    session_start();   

    include 'sqlconnect2.php'; 
    
    //If user presses logout, then all Sessions & Cookies destroyed
    if(array_key_exists("logout",$_GET)){
        unset($_SESSION);
        session_destroy();
        $_SESSION = array();
        setcookie("email","",time() - 60*60);
        $_COOKIE["email"]="";
    
    } //Else if user has not pressed logout, it takes it back to thw Logged In page!! wao! 
    else if ((array_key_exists("email",$_SESSION) AND $_SESSION["email"]) OR (array_key_exists("email",$_COOKIE) AND $_COOKIE["email"])){
        header("Location:dashboard.php");

    }

    $success="";
    $failure="";

    if(array_key_exists("email",$_POST) && array_key_exists("password",$_POST)){

        // echo "<br>";

        if($_POST["email"] == ""){ //Checking if email is empty
            $failure = "<p>Email is required</p>";
        } else if ($_POST["password"] == ""){  //Checking if password is empty
            $failure = "<p>Password is required</p>";   
        } else {       
            
            //Sign Up
            if($_POST["signup"]==1){

                // Given password
                $password = $_POST["password"];

                // Validate password strength
                $uppercase = preg_match('@[A-Z]@', $password);
                $lowercase = preg_match('@[a-z]@', $password);
                $number    = preg_match('@[0-9]@', $password);
                $specialChars = preg_match('@[^\w]@', $password);

                if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8 || strlen($password) > 20) {
                    $failure = 'Password should be at least 8 characters & atmost 20 characters in length and should include at least one upper case letter, one number and one special character.';
                }
                else {
                    
                    //echo 'Strong password.';
 
                    //Checking if email is already present in DB
                    $checkQuery = "SELECT email FROM userinfo WHERE email ='".mysqli_real_escape_string($link,$_POST["email"])."'";
                    $result1 = mysqli_query($link,$checkQuery);

                    //Checks if there are rows where email is repeated
                    if( mysqli_num_rows($result1) == 0){    

                        //Using password_hash
                        $_POST["password"] = password_hash($_POST["password"],PASSWORD_DEFAULT);

                        $insertQuery = "INSERT INTO userinfo VALUES ('".mysqli_real_escape_string($link,$_POST["email"])."','".mysqli_real_escape_string($link,$_POST["password"])."')"; 
    
                        if (mysqli_query($link,$insertQuery)){
                            $success = "Sign up Complete!";  //This is overridden by Sessions

                            $_SESSION["email"] = $_POST["email"];

                            if($_POST["stayloggedin"] == '1'){
                                
                                setcookie("email",$_POST["email"],time()+60*60*24*365);
                            
                            }
                            header("Location: dashboard.php");
    
                        } else {
                            $failure = "ERROR signing up!";
                        }
                    } else {
                        $failure = "Email already exists in the DB. Try with a new email or Sign in with the earlier one!";
                    }
                }
            }    
            
            //Sign In
            else {
                    
                $checkQuery2 = "SELECT * FROM userinfo WHERE email ='".mysqli_real_escape_string($link,$_POST["email"])."'";    
                
                $result2 = mysqli_query($link,$checkQuery2);


                $row = mysqli_fetch_array($result2);
                
                // print_r ($row);
                // print_r(gettype($_POST["password"]));
                // print_r(gettype($row["password"]));

                if(array_key_exists("email",$row)){
                    // print_r("Hello");
                    // print_r(json_encode(password_verify($_POST["password"],$row["password"])));
                    if(password_verify($_POST["password"],$row["password"])){
                       
                        $success = "Username & Password correct";
                        $_SESSION["email"] = $_POST["email"];

                        if($_POST["stayloggedin"] == '1'){
                            
                            setcookie("email",$_POST["email"],time()+60*60*24*365);
                        
                        }
                        header("Location: dashboard.php");

                    } else {
                        $failure = "Wrong Username or Password";
                    }
                }
            
            }
        
        }
    }

?>



<html lang="en">
    <head>
        <title>Dashboard Sign up and Login</title>
        <bootstrapReq>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Bootstrap CSS, jQuery, PopperJS, Bootstrap JS - Cloud based packages -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           
            <!-- OR - Local packages -->
            <!-- <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
            <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
            <script src="popper.min.js"></script>
            <script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script> -->
        </bootstrapReq>

<style>
    body {
        margin: 0;
        color: #6a6f8c;
        background: #20639b;
        font: 600 16px/18px 'Open Sans', sans-serif
    }

    .login-box {
        width: 100%;
        margin: auto;
        /* max-width: 525px; */
        min-height: 500px;
        position: relative;
        background-color: #173f5f;
        box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19)
    }

    .login-snip {
        width: 100%;
        height: 100%;
        position: absolute;
        padding: 90px 70px 50px 70px;
        background: #173f5f;
    }

    .login-snip .login,
    .login-snip .sign-up-form {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        transform: rotateY(180deg);
        backface-visibility: hidden;
        transition: all .4s linear
    }

    .login-snip .sign-in,
    .login-snip .sign-up,
    .login-space .group .check {
        display: none
    }

    .login-snip .tab,
    .login-space .group .label,
    .login-space .group .button {
        text-transform: uppercase
    }

    .login-snip .tab {
        font-size: 22px;
        margin-right: 15px;
        padding-bottom: 5px;
        margin: 0 15px 10px 0;
        display: inline-block;
        border-bottom: 2px solid transparent
    }

    .login-snip .sign-in:checked+.tab,
    .login-snip .sign-up:checked+.tab {
        color: #fff;
        border-color: #1161ee
    }

    .login-space {
        min-height: 345px;
        position: relative;
        perspective: 1000px;
        transform-style: preserve-3d
    }

    .login-space .group {
        margin-bottom: 15px
    }

    .login-space .group .label,
    .login-space .group .input,
    .login-space .group .button {
        width: 100%;
        color: #fff;
        display: block
    }

    .login-space .group .input,
    .login-space .group .button {
        border: none;
        padding: 15px 25px;
        border-radius: 25px;
        background: rgba(255, 255, 255, .1)
    }

    .login-space .group input[data-type="password"] {
        text-security: circle;
        -webkit-text-security: circle
    }

    .login-space .group .label {
        color: #aaa;
        font-size: 12px
    }

    .login-space .group .button {
        background: #1161ee
    }

    .login-space .group label .icon {
        width: 15px;
        height: 15px;
        /* border-radius: 2px; */
        position: relative;
        display: inline-block;
        background: rgba(255, 255, 255, .1)
    }

    .login-space .group label .icon:before,
    .login-space .group label .icon:after {
        content: '';
        width: 10px;
        height: 2px;
        background: #fff;
        position: absolute;
        transition: all .2s ease-in-out 0s
    }

    .login-space .group label .icon:before {
        left: 3px;
        width: 5px;
        bottom: 6px;
        transform: scale(0) rotate(0)
    }

    .login-space .group label .icon:after {
        top: 6px;
        right: 0;
        transform: scale(0) rotate(0)
    }

    .login-space .group .check:checked+label {
        color: #fff
    }

    .login-space .group .check:checked+label .icon {
        background: #1161ee
    }

    .login-space .group .check:checked+label .icon:before {
        transform: scale(1) rotate(45deg)
    }

    .login-space .group .check:checked+label .icon:after {
        transform: scale(1) rotate(-45deg)
    }

    .login-snip .sign-in:checked+.tab+.sign-up+.tab+.login-space .login {
        transform: rotate(0)
    }

    .login-snip .sign-up:checked+.tab+.login-space .sign-up-form {
        transform: rotate(0)
    }

    *,
    :after,
    :before {
        box-sizing: border-box
    }

    .clearfix:after,
    .clearfix:before {
        content: '';
        display: table
    }

    .clearfix:after {
        clear: both;
        display: block
    }

    a {
        color: inherit;
        text-decoration: none
    }

    .hr {
        height: 2px;
        margin: 60px 0 50px 0;
        background: rgba(255, 255, 255, .2)
    }

    .foot {
        text-align: center
    }

    .card {
        width: 500px;
        /* left: 100px */
    }

    ::placeholder {
        color: #b3b3b3
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
        <div class="container-fluid" style="margin-top: 30px;">
        <div id="error">
                                            <?php
                                                if($success){
                                                    echo '<div class="alert alert-success col-sm-6 mx-auto" role="alert"><b>'.$success.'</b></div>';
                                                } 
                                                if($failure){
                                                    echo '<div class="alert alert-danger col-sm-6 mx-auto" role="alert"><b>'.$failure.'</b></div>';
                                                }            
                                            ?>
                                        </div>
            <div class="row ">
                <div class="col-md-6 mx-auto p-0 d-flex justify-content-center">
                    <div class="card border-light">
                        <div class="login-box">
                            <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">SIGN UP</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">LOGIN</label>
                                <div class="login-space">
                                    <div class="login">
                                    <form action="" method="post" id="signUpForm">
                <!-- <h2 class="card-header bg-dark text-white d-flex justify-content-center">Dashboard Sign up</h2> -->
                <br>
                 <div class="form-group row text-white">
                    <div class="col-12 align-self-center">
                        <label for="">Email</label>
                        <input type="email" class="col-sm-12 form-control " name="email" placeholder="Your Email address">
                        <small id="emailHelp" class="form-text text-white-50">Email will not be shared</small>
                    </div>
                </div>
                <div class="form-group  row text-white ">
                    <div class="col-12 align-self-center">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Your password">
                        <small id="pwdHelp" class="form-text text-white-50">-> Atleast: 8 characters (Max 20), one number, one upper & lower case <-</small>
                    </div>
                </div>
                <div class="">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input " name="stayloggedin" value=1 checked>
                    <label class="form-check-label text-white"  for="stayloggedin">Stay logged in</label>
                </div>
                </div>
                <div class="">
                <div class="form-group">
                    <input type="hidden" name="signup" value=1>
                </div> 
                <input type="submit" name="submit" value="Sign Up" class=" col-12 btn btn-primary">
                <br><br>
                <a class="d-flex justify-content-center text-white" href="index.html">Go back to main page</a>
                <br><br> 
                </div>
                <br>
                <!-- <div class ="">
                <div class="row">
                    <div class="col-6 ">Already signed up?<br> Please Log in.</div>
                    <div class="col-6 ">
                        <a class= "btn btn-primary toggleForm float-left" role="button"><span id="toggleFormButton">Log In</span></a> 
                    </div>
                </div>
                </div> -->
            </form> 
            </div>
                                    <div class="sign-up-form">
                                    <form action="" method="post" id="loginForm">
                <!-- <h2 class="card-header bg-dark text-white d-flex justify-content-center">Dashboard Login</h2> -->
                <br>
                <div class="form-group row  d-flex justify-content-center link text-white">
                    <div class="col-12 align-self-center">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email"  placeholder="Your registered login email address">
                    </div>
                 </div>  
                <div class="form-group row  d-flex justify-content-center  link text-white">
                    <div class="col-12 align-self-center">
                        <label for="">Password</label>
                        <input type="password"  class="form-control" name="password" placeholder="Your Login password">
                    </div>
                </div>
                <div class="">
                <div class="form-check">
                    <input type="checkbox" name="stayloggedin" class="form-check-input" value=1 checked>                    
                    <label class="form-check-label text-white" for="stayloggedin">Stay logged in</label>
                </div>
                </div>
                <div class="form-group">
                    <input type="hidden" name="signup" value=0>
                </div> 
                <div class="d-flex justify-content-center  links ">
                <input type="submit" name="submit" value="Login" class="col-12 btn btn-primary">

                </div>
                <br><br>
                <a class="d-flex justify-content-center text-white" href="index.html">Go back to main page</a>
                <!-- <br>
                <div class="row ">
                    <div class="col-6 my-auto text-right padding-0">Not Signed up?</div>
                    <div class="col-6 padding-0">
                        <a class= "btn btn-primary toggleForm float-left" role="button"><span id="toggleFormButton">Sign Up</span></a> 
                    </div>
                </div> -->
            </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(".toggleForm").click(function(){
                $("#signUpForm").toggle();
                $("#loginForm").toggle();
                $("#error").empty();
            })
        </script>
    </body>