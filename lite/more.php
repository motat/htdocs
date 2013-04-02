<?php
require_once("resources/config.php");
if(isset($_GET['eid']))
    {
    $eid=$_GET['eid'];
    $sql='SELECT * FROM entrys WHERE eid=:eid';
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(
        ':eid' => $eid
        ));
    $row=$stmt->fetch();
    $information=$row['information'];
    $subject=$row['subject'];
    $payment=$row['payment'];
    $county=$row['county'];
    echo "
        <div class='min'>
            <div id='holder'>
                <h2>"; echo $subject; echo "</h2>
                <h3>"; echo $information; echo "</h3>
                <h3>"; echo $payment; echo "</h3>
                <h3>County: "; echo $county; echo "</h3>
            </div>
        </div>";   
    }
if(isset($_GET['uid']))
    {
    $uid=$_GET['uid'];
    $sql='SELECT * FROM accounts WHERE uid=:uid';
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(
        ':uid' => $uid
        ));
    $row=$stmt->fetch();
    $email=$row['email'];
    echo "
        <div class='min'>
            <div id='holder'>
                <h2>"; echo $email; echo "</h2>
            </div>
        </div>";   
    }
if(isset($_GET['msg']))
{
    $msg=$_GET['msg'];
    if($msg=='1')
    {
        echo "
            <div class='info'>
                <div id='holder'>
                    <h2>You just requested this class.</h2>
                </div>
            </div>
            ";
    }
    if($msg=='2')
    {
        echo "
            <div class='info'>
                <div id='holder'>
                    <h2>You have already requested this class.</h2>
                </div>
            </div>
            ";
    }
    if($msg=='3')
    {
        echo "
            <div class='info'>
                <div id='holder'>
                    <h2>You have registered an account! Now you can login and begin looking for lessons or posting them</h2>
                </div>
            </div>
            ";
    }
    if($msg=='4')
    {
        echo "
            <div class='info'>
                <div id='holder'>
                    <h2>Your lesson has been submitted. You will be notified when your lesson is requested</h2>
                </div>
            </div>
            ";
    }
    if($msg=='5')
    {
        echo "
            <div class='info'>
                <div id='holder'>
                    <h2>You have removed the request for this lesson</h2>
                </div>
            </div>
            ";
    }
}
?>
