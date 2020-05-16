<?php
    session_start();
    if(isset($_SESSION['userid'])=='') {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width initial-scale=1">
        
        <!-- Bootstrap CSS -->
        <link href='styles/bootstrap.min.css' rel='stylesheet' type="text/css">
        
        <!-- Custom Styles -->
        <link href='styles/welcome-page.css' rel='stylesheet' type="text/css">
        <title>Welcome!</title>
    
    </head>
    
    <body>
        <div class="container">
            <div class="jumbotron ">
                <h1>Welcome to the FUTURE.</h1>
                <h3>It's everything you imagined</h3>
            </div>
        </div>
        
        <!-- Intro -->  
        <div class="row intro">
            <div class="col-sm-10">
                <h5>Have you ever been bored in life?<br>
                If you have, then fear not. We have the best thing in the world for you.</h5>
            </div>
            <div class="col-sm-2">
                <p> &nbsp; </p>
            </div>
        </div>
        <br>
        
        <!--- Details section --->
        <div class="container">
            <div class="row details">
                <div class="col-sm-4 details ">
                    <h3 class="heading">Totally New.</h3>
                    <p>This is an entirely new concept.<br> Never seen before. </p>
                </div>
                <div class="col-sm-4 details">
                    <h3 class="heading">You're the first.</h3>
                    <p>You get exclusive access to this.<br>Grab it while you can.</p>
                </div>
                <div class="col-sm-4 details">
                    <h3 class="heading">Assured Quality</h3>
                    <p>We always give you the best.<br>Always.</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- Long details -->
        <div class="row">
            <div class="col-sm-12 long-deets">
                <p>We have brought together an amazing product for you. Customised to your needs, it is tailored to suit your needs. Years of research and hardwork has led us to this amazing invention. Hundreds of thousands of hours were put in to make this.<br></p>
                <h4 id="enjoy-life">Enjoy life to it's fullest with us</h4>
            </div>
<!--            <div class="col-sm-2"><p>&nbsp;</p></div>-->
        </div>
        
        <!-- End -->
        <div class="container">
            <div class="col-sm-12">
                <a href="logout.php?logout=true"> <button class="btn btn-primary" name="logout" type="button">Logout</button></a>
            </div>
        </div>
    </body>
    
</html>