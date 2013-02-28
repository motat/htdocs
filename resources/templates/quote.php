<?php
$RandomList = array();
$RandomList[] = '<span style="color:#000; background-color:#fff">A</span>';
$RandomList[] = '<span style="color:#f00; background-color:#fff">B</span>';
$RandomList[] = '<span style="color:#0f0; background-color:#fff">C</span>';
$RandomList[] = '<span style="color:#00f; background-color:#fff">D</span>';
$RandomList[] = '<span style="color:#ff0; background-color:#fff">E</span>';
$RandomList[] = '<span style="color:#0ff; background-color:#fff">F</span>';
$RandomList[] = '<span style="color:#fff; background-color:#000">G</span>';



echo "
    <div id='quote'>
        <div id='genquote'>
            <h1>"; ?><?php echo $RandomList[rand(0,count($RandomList)-1)]; ?><?php echo"</h1>
            <h2>-Albert Einstein</h2>
        </div>
    </div>";
                
?>