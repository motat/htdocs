<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link href="css/new.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
$RandomList = array();
$RandomList[] = '<h2>An investment in knowledge pays the best interest.</h2><br/><br/><h3>-Benjamin Franklin</h3>';
$RandomList[] = '<h2>True knowledge exists in knowing that you know nothing.</h2><br/><br/><h3>-Socrates</h3>';
$RandomList[] = '<h2>And what, Socrates, is the food of the soul? Surely, I said, knowledge is the food of the soul.</h2><br/><h3>-Plato</h3>';
$RandomList[] = '<h2>Knowledge is power.</h2><br/><br/><h3>-Francis Bacon</h3>';
$RandomList[] = '<h2>The greater our knowledge increases the more our ignorance unfolds.</h2><br/><h3>-John F. Kennedy</h3>';
$RandomList[] = '<h2>As knowledge increases, wonder deepens.</h2><br/><br/><h3>-Charles Morgan</h3>';




echo "
    <div class='medium'>
        <div id='quote'>
            <center>"; ?><?php echo $RandomList[rand(0,count($RandomList)-1)]; ?><?php echo"</center>
        </div>
    </div>";
                
?>
</body>
</html>