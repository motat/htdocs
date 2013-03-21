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
echo "<div id='footer'>
    <div id='footerin'>
        <div id='footerinleft'>
            <h1>media</h1>
        </div>
        <div id='footerinright'>
            <h1><a href='";?><?php echo $root; echo "/contact.php'>contact us</a></h1>
            <h1><a href='";?><?php echo $root; echo "/help.php'>tips and help</a></h1>
        </div>
    </div>
    <div id='footerright'>
        <h1>"; echo $email; echo"</h1>
    </div>
</div>";
    }
else
    {
    echo"
    <div id='footer'>
        <div id='footerin'>
            <div id='footerinleft'>
                <h1>media</h1>
            </div>
            <div id='footerinright'>
                <h1><a href='";?><?php echo $root; echo "/contact.php'>contact us</a></h1>
                <h1><a href='";?><?php echo $root; echo "/help.php'>tips and help</a></h1>
            </div>
        </div>
        <div id='footerright'>
            <h2>Ahh Yes</h2>
        </div>
    </div>";
    }
    ?>
    