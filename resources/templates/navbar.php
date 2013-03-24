<?php
$newresult='';
if(isset($_SESSION['id']))
    {
    $sid=$_SESSION['id'];
    $sql='SELECT * FROM accounts WHERE id=:id';
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(
        ':id' => $sid ));
    $row=$stmt->fetch();
    $newresult=$row['new'];
    if($newresult == 1)
        {
            $newresult = '(new)';
        }
    else
        {
            $newresult = '';
        }
    }
?>
<div class="menu">
    <ul>            
        <li class="single-link"><a href="<?php echo $root;?>/professor.php">Professor <?php echo $newresult;?></a></li>
        <li class="single-link"><a href="<?php echo $root;?>/student.php">Student</a></li>
        <li><a href="#">Listings<span class="box"></span></a>
            <ul>
                <li><a href="<?php echo $root;?>/add.php">Add Listing</a></li>
                <li><a href="<?php echo $root;?>/selectcount.php">Select a County</a></li>
                <li><a href="<?php echo $root;?>/listings.php?county=oc">Orange County</a></li>
                <li><a href="<?php echo $root;?>/listings.php?county=">All</a></li>
            </ul>
        </li>
        <li><a href="#">Account</a>
            <ul>
                <?php if(isset($_SESSION['id'])) {?> <li><a href="<?php echo $root;?>/profile.php">User Panel</a></li><?php }?>
                <?php if(!isset($_SESSION['id'])) {?> <li><a href="<?php echo $root;?>/login.php">Login</a></li><?php }?>
                <?php if(isset($_SESSION['id'])) {?><li><a href="<?php echo $root;?>/logout.php">Logout</a></li><?php }?>
                <?php if(!isset($_SESSION['id'])) {?> <li><a href="<?php echo $root;?>/register.php">Create Account</a></li><?php }?>
            </ul>    
        </li>
    </ul>
</div>