<ul id="header">
                <li><a href="http://localhost/professor.php">Professor</a></li>
                <li><a href="http://localhost/student.php">Student</a></li>
                <li><a href="http://localhost/listings.php">Listings</a></li>
                <?php if(!isset($_SESSION['id'])) {?>  <li><a href="http://localhost/login.php">Login</a></li><?php }else{?> <li><a href="http://localhost/logout.php">Logout</a></li><?php }?>
</ul>