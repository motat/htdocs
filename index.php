<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Ahhha!</title>
    <link href="css/indexstyle.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
    <div id="top">
        <div class="main">
            <div id="header"></div>
            <div style="clear:both"></div>  
            <a href="http://localhost"><div style=background:url('images/menu.png'); height=124px; id="menu"></div></a> 
                <?php
                include 'resources/config.php';
                require_once ('resources/templates/navbar.php');
                ?>
            <div id="content">
                <div id="quote">
                     <h1>&quot;All intelligent thoughts have already been thought; 
                         what is necessary is only to try to think them again.&quot;</h1>
                     <h2>-Johann Wolfgang von Goethe</h2>
                </div>
            </div>
            <div id="info">
                <div id="minibar">
                    <h3>Welcome</h3>
                </div>
                <div id="intro">
                    <h1>Greetings, from Ahhha!</h1>
                    
                </div>
                
            </div>
            <div id="servicemain">
                <div id="service">
                    <h2>Currently, our service is focused on, and supported towards, The Southern California area.</h2>
                </div>
            </div>
            <div id="footer">
                <div id="contact">
                <!--<h1>Contact Vadim <a style="color:#160000;" href="#">Here</a>!</h1>-->
            </div>
                <div id="copyright">
                    <h1>&#169; Vadim Pishchenko</h1>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>
