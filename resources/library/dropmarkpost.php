<?php
/*NOTE ADD SECURITY MESSURE SO PEOPLE DONT EDIT INFO IN BROWSER AND DELETE MARKS - NOT DONE*/
require_once(realpath(dirname(__FILE__) . "/../config.php"));
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$autoid=$_GET['autoid'];
//mysql_query("DELETE FROM marks WHERE firstname= '$firstname' AND subject= '$subject' AND email='$email'");
$sql='DELETE FROM marks WHERE autoid=:autoid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
    ':autoid' => $autoid ));
header("location:$baseurl/professor.php");
?>