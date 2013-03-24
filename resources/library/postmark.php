<?php

require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
if(isset($_SESSION['id']))
{
    $id = $_SESSION['id'];
    //professor id
    $pid=$_GET['uid'];
    $sql='SELECT * FROM accounts WHERE id=:id';
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(
        ':id' => $id ));
    $row=$stmt->fetch();
    $createid = $_GET['createid'];
    
    $sqlget='SELECT * FROM listings WHERE createid=:createid';
    $stmtget=$conn->prepare($sqlget);
    $stmtget->execute(array(
        ':createid' => $createid ));
    $rowget=$stmtget->fetch();
    $uid=$rowget['id'];
    /*Sql to check if mark exsists*/
    $sqlcheck='SELECT * FROM marks WHERE createid=:createid AND markid=:markid';
    $stmtcheck=$conn->prepare($sqlcheck);
    $stmtcheck->execute(array(
        ':createid' => $createid,
        ':markid' => $id ));
    $rowcheck=$stmtcheck->fetch();
    if ( $stmtcheck->rowCount() > 0)
        {
        header("location:$baseurl/listings.php?county=".$_GET['county']."&pageid=2");
        }
    else
        {
        //Script to check if professor already has a mark
        //'1' = new message
        //'0' = no message
        //In the script, if value is already 1, then do nothing. If 0 then make into 1
        $sqlp='SELECT * FROM accounts where id=:pid';
        $stmtp=$conn->prepare($sqlp);
        $stmtp->execute(array(
            ':pid' => $pid ));
        $rowp=$stmtp->fetch();
        //Professor ID from database, use to compare to PID from $_GET
        $newid=$rowp['new'];
        if($newid == 0)
            {
                $sql='UPDATE accounts SET new=:new WHERE id=:id';
                $stmt=$conn->prepare($sql);
                $stmt->execute(array(
                    ':new' => '1',
                    ':id' => $pid )) ;
            }
        
        $subject=$rowget['subject'];
        $uid=$rowget['id'];
        $prof=$rowget['firstname'];
        $information=$rowget['information'];
        $firstname = $row['firstname'];
        $email = $row['email'];
        $sql1='INSERT INTO marks (id,firstname,email,createid,subject,prof,information,markid) VALUES (:uid,:firstname,:email,:createid,:subject,:prof,:information,:markid)';
        $stmt=$conn->prepare($sql1);
        $stmt->execute(array(
            ':uid' => $uid,
            ':firstname' => $firstname,
            ':email' => $email,
            ':createid' => $createid,
            ':subject' => $subject,
            ':prof' => $prof,
            ':information' => $information,
            ':markid' => $id )); 
        header("location:$baseurl/listings.php?county=".$_GET['county']."&pageid=1");
        
    }
}
else
{   
    header("location:$baseurl/failed.php?success=loginreq");
}
?>