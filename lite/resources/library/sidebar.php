    <div class='sidebar'>
        <div class='top'>
            <a href='http://localhost/lite'><h1>ahhyes</h1></a>
        </div>
        <div class='nav'>
            <?php if(isset($_SESSION['id'])) {?><a href="javascript:showonlyone('add');"><span class='nav'>Add</span></a>&nbsp;&nbsp;<a href="javascript:showonlyone('edit');"><span class='nav'>Edit</span></a>&nbsp;&nbsp;<a href="javascript:showonlyone('account');"><span class='nav'>Account</span></a><?php } else { ?><a href="javascript:showonlyone('register');"><span class='nav'>Register</span></a>&nbsp;&nbsp;<a href="javascript:showonlyone('login');"><span class='nav'>Login</span></a><?php } ?>
        </div>
        <div style='clear:both'>
        </div>
        <div id='footer'>
            <span class='sub'>copyright vadim 2013</span>
        </div>
        <?php require_once('resources/library/quote.php'); ?>
        <div id='register' class='form'>
            <form action="resources/library/register.php" method="POST"> 
                <input type="text" name="username" placeholder='Username'/>
                <input type="text" name="email" placeholder='Email'>
                <input type="password" name="password" placeholder='Password'>
                <button type='submit' class='btn'>Register</button>            
            </form>
        </div>
        <div id='login' class='form'>
            <form action="resources/library/login.php" method="POST"> 
                <input type="text" name="username" placeholder='Username'>
                <input type="password" name="password" placeholder='Password'>
                <button type='submit' class='btn'>Login</button>            
            </form>
        </div>

        <div style='clear:both'>
        </div>

    </div>