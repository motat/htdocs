<?php
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
            <h1>facebook</h1>
        </div>
        <div id='footerinright'>
            <h1>contact us</h1>
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
                <h1>facebook</h1>
            </div>
            <div id='footerinright'>
                <h1>contact us</h1>
            </div>
        </div>
        <div id='footerright'>
            <h1>Ahh Yes</h1>
        </div>
    </div>";
    }
    ?>
    