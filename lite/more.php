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
    echo "
        <div class='min'>
            <div id='holder'>
                <h3>"; echo $information; echo "</h3>
            </div>
        </div>";   
    }
if(isset($_GET['msg']))
{
    $msg=$_GET['msg'];
    if($msg=='1')
    {
        echo "
            <div class='min'>
                <div id='holder'>
                    <h3>You just requested this class.</h3>
                </div>
            </div>
            ";
    }
    if($msg=='2')
    {
        echo "
            <div class='min'>
                <div id='holder'>
                    <h4>You have already requested this class.</h4>
                </div>
            </div>
            ";
    }
}
?>
