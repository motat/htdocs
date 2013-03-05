<?php
$RandomList = array();
$RandomList[] = '<span style="color:white;">An investment in knowledge pays the best interest.</span><br/><br/>-Benjamin Franklin';
$RandomList[] = '<span style="color:white;">True knowledge exists in knowing that you know nothing.</span><br/><br/>-Socrates';
$RandomList[] = '<span style="color:white;">And what, Socrates, is the food of the soul? Surely, I said, knowledge is the food of the soul.</span><br/>-Plato';
$RandomList[] = '<span style="color:white;">Knowledge is power.</span><br/><br/>-Francis Bacon';
$RandomList[] = '<span style="color:white;">The greater our knowledge increases the more our ignorance unfolds.</span><br/><br/>-John F. Kennedy';
$RandomList[] = '<span style="color:white;">As knowledge increases, wonder deepens.</span><br/><br/>-Charles Morgan';




echo "
    <div id='quote'>
        <div id='genquote'>
            <h1>"; ?><?php echo $RandomList[rand(0,count($RandomList)-1)]; ?><?php echo"</h1>

        </div>
    </div>";
                
?>