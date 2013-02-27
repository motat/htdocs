<?php
session_start();
                    if(!isset($_SESSION['email'])):
                    $id = $_SESSION['email'];
                    $sql = "SELECT lastname, email FROM accounts WHERE email='$id'"
                    $result = mysql_query($sql)
                    $row = mysql_fetch_array($result);
                     or die(mysql_error());
                     while ($row = mysql_fetch_array($result)){
                         print "<div>$row[email] $row[lastname]</div>\n";
?>