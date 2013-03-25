<?php
include 'resources/config.php';
if(isset($_SESSION['id']))
    {
    $id=$_SESSION['id'];
    $sql='SELECT email FROM accounts WHERE id=:id';
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(
        ':id' => $id ));
    $row=$stmt->fetch();
    $email=$row['email'];
    echo "
        <div class='footer'>
            <div id='wrapper'>
            <div id='fmid'>
                <h4><a href='";?><?php echo $root; echo "/help.php'>tips and help</a></h4>
                <h4><a href='";?><?php echo $root; echo "/contact.php'>contact</a></h4>
                <h4><a href='";?><?php echo $root; echo "/tos.php'>tos</a></h4>
            </div>
            </div>
            <div id='fleft'>
                <h4><a href='https://www.facebook.com/pages/Ahhyesorg/165579820265516'>facebook</a></h4>
             </div>     
            <div id='fright'>
                <h4>"; echo $email; echo"</h4>
            </div>
        </div>";
    }
else
    {
    echo "
        <div class='footer'>
            <div id='wrapper'>
                <div id='fmid'>
                    <h4><a href='";?><?php echo $root; echo "/help.php'>tips and help</a></h4>
                    <h4><a href='";?><?php echo $root; echo "/contact.php'>contact</a></h4>
                    <h4><a href='";?><?php echo $root; echo "/tos.php'>tos</a></h4>
                </div>
            </div>
            <div id='fleft'>
                <h4><a href='https://www.facebook.com/pages/Ahhyesorg/165579820265516'>facebook</a></h4>
             </div>     
            <div id='fright'>
                <h4>ahhyes.org</h4>
            </div>
        </div>";
    }
    ?>
    