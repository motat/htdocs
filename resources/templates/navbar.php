<div class="menu">
    <ul>            
        <li class="single-link"><a href="http://localhost/professor.php">Professor</a></li>
        <li class="single-link"><a href="http://localhost/student.php">Student</a></li>
        <li><a href="#">Listings<span class="box"></span></a>
            <ul>
                <li><a href="http://localhost/selectcount.php">Select a County</a></li>
                <li><a href="http://localhost/listings.php?county=oc">Orange County</a></li>
                <li><a href="http://localhost/listings.php?county=">All</a></li>
            </ul>
        </li>
        <?php if(!isset($_SESSION['id'])) {?>  <li><a href="http://localhost/login.php">Login</a></li><?php }else{?> <li><a href="http://localhost/logout.php">Logout</a></li><?php }?>
    </ul>
</div>