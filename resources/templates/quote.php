<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
$RandomList = array();
$RandomList[] = '<span class="quote">An investment in knowledge pays the best interest.</span><br/><br/><span class="author">-Benjamin Franklin</span>';
$RandomList[] = '<span class="quote">True knowledge exists in knowing that you know nothing.</span><br/><br/><span class="author">-Socrates</span>';
$RandomList[] = '<span class="quote">And what, Socrates, is the food of the soul? Surely, I said, knowledge is the food of the soul.</span><br/><span class="author">-Plato</span>';
$RandomList[] = '<span class="quote">Knowledge is power.</span><br/><br/><span class="author">-Francis Bacon</span>';
$RandomList[] = '<span class="quote">The greater our knowledge increases the more our ignorance unfolds.</span><br/><span class="author">-John F. Kennedy</span>';
$RandomList[] = '<span class="quote">As knowledge increases, wonder deepens.</span><br/><br/><span class="author">-Charles Morgan</span>';




echo "
    <div id='quote'>
        <div id='genquote'>
            <h1>"; ?><?php echo $RandomList[rand(0,count($RandomList)-1)]; ?><?php echo"</h1>

        </div>
    </div>";
                
?>
</body>
</html>