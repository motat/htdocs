<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$rateid=$_GET['rate'];
$recentid=$_GET['recentid'];

$sqlget='SELECT * FROM recents WHERE rid=:rid';
$stmtget=$conn->prepare($sqlget);
$stmtget->execute(array(
    ':rid' => $recentid ));
$row=$stmtget->fetch();

$uid=$row['uid'];

$sqlacc='SELECT * FROM accounts WHERE id=:uid';
$stmtacc=$conn->prepare($sqlacc);
$stmtacc->execute(array(
    ':uid' => $uid ));
$rowacc=$stmtacc->fetch();
$marks=$rowacc['marks'];

//Adding marks in database with Recents data
$sum=$marks+$rateid;

//SQL to Post new Mark to database
$sqlpost='UPDATE accounts SET marks=:sum WHERE id=:uid';
$stmtpost=$conn->prepare($sqlpost);
$stmtpost->execute(array(
    ':sum' => $sum,
    ':uid' => $uid ));

//SQL to Delete Recents
$sqldel='DELETE FROM recents WHERE rid=:rid';
$stmtdel=$conn->prepare($sqldel);
$stmtdel->execute(array(
    ':rid' => $recentid ));

header("location:$root/success.php?success=rated");  