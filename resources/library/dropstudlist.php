<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$autoid=$_GET['autoid'];
$sql='DELETE FROM marks WHERE autoid=:autoid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
    ':autoid' => $autoid ));
header("location:$baseurl/student.php");
?>