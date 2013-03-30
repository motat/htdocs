    <div class='min'>
        <div id='holder'>
            <?php 
            if(isset($_SESSION['uid']))
                { 
            ?>
            <div class='left'>
                <?php require_once('resources/library/alist.php'); ?>
            </div>
            <div class='right'>
                <?php require_once('resources/library/ylist.php'); ?>
            </div>
            <div style='clear:both;'></div>
        </div>
        <div id='holder'>
            <div class='left'>
                <?php require_once('resources/library/slist.php'); ?>
            </div>
            <div class='right'>
                <?php require_once('resources/library/srlist.php'); ?>
            </div>
            <div style='clear:both;'></div>
        </div>
        <div id='holder'>
                <h3><span class='plus'> + </span> add </h3>
                <!--<h3><span class='edit'> e </span> edit </h3>-->
                <h3><span class='more'> > </span> more </h3> 
                <h3><span class='minus'> - </span> remove </h3>               
            <?php
                }
                else
                {

            ?>
                <?php echo "<div id='mid'>"; require_once('resources/library/alist.php'); echo "</div>"; ?>
            <?php
            }
            ?>
        </div>
    </div> 