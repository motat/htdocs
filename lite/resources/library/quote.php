
<?php
$RandomList = array();
$RandomList[] = '<h3>An investment in knowledge pays the best interest.</h3><br/><br/><h4>-Benjamin Franklin</h4>';
$RandomList[] = '<h3>True knowledge exists in knowing that you know nothing.</h3><br/><br/><h4>-Socrates</h4>';
$RandomList[] = '<h3>And what, Socrates, is the food of the soul? Surely, I said, knowledge is the food of the soul.</h3><br/><h4>-Plato</h4>';
$RandomList[] = '<h3>Knowledge is power.</h3><br/><br/><h4>-Francis Bacon</h4>';
$RandomList[] = '<h3>The greater our knowledge increases the more our ignorance unfolds.</h3><br/><h4>-John F. Kennedy</h4>';
$RandomList[] = '<h3>As knowledge increases, wonder deepens.</h3><br/><br/><h4>-Charles Morgan</h4>';




echo "
    <div class='sidecontainer'>
            <center>"; ?><?php echo $RandomList[rand(0,count($RandomList)-1)]; ?><?php echo"</center>
    </div>";
                
?>
</body>
</html>