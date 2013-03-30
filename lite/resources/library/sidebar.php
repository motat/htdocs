    <div class='sidebar'>
        <div class='top'>
            <a href='http://localhost/lite'><h1>ahhyes</h1></a>
        </div>
        <div class='nav'>
            <?php if(isset($_SESSION['uid'])) { $uid=$_SESSION['uid'];?><a href="javascript:showonlyone('add');"><span class='nav'>Add</span></a>&nbsp;&nbsp;<a href="javascript:showonlyone('edit');"><span class='nav'>Edit</span></a>&nbsp;&nbsp;<a href="javascript:showonlyone('account');"><span class='nav'>Account</span></a><?php } else { ?><a href="javascript:showonlyone('register');"><span class='nav'>Register</span></a>&nbsp;&nbsp;<a href="javascript:showonlyone('login');"><span class='nav'>Login</span></a><?php } ?>
        </div>
        <div style='clear:both'>
        </div>
        <div id='footer'>
            <span class='sub'>copyright vadim 2013</span>
        </div>
        <?php require_once('resources/library/quote.php'); ?>
<!--REGISTER-->
        <div id='register' class='form'>
            <form action="resources/library/register.php" method="POST"> 
                <input type="text" name="username" placeholder='Username'/>
                <input type="text" name="email" placeholder='Email'>
                <input type="password" name="password" placeholder='Password'>
                <button type='submit' class='btn'>Register</button>            
            </form>
        </div>
<!--LOGIN-->
        <div id='login' class='form'>
            <form action="resources/library/login.php" method="POST"> 
                <input type="text" name="username" placeholder='Username'>
                <input type="password" name="password" placeholder='Password'>
                <button type='submit' class='btn'>Login</button>            
            </form>
        </div>
<!--ADD-->
        <div id='add' class='form'>
            <form action="resources/library/add.php" method="POST"> 
                <input type="text" name="subject" placeholder='Subject'/>
                <textarea  name="information" placeholder='More information..'></textarea>
                <input type="text" name="payment" placeholder='Fill in if payment is required'/>
                <div class="styled-select">
                   <select name='county'>
                      <option value='oc'>Orange County</option>
                      <option value='la'>Los Angeles County</option>
                   </select>
                </div>
                <button type='submit' class='btn'>Add Listing</button>            
            </form>
        </div>
<!--EDIT-->
        <div id='edit' class='form'>
            <form action="resources/library/add.php" method="POST"> 
                <input type="text" name="subject" placeholder='Subject'/>
                <textarea  name="information" placeholder='More information..'></textarea>
                <input type="text" name="payment" placeholder='Fill in if payment is required'/>
                <div class="styled-select">
                   <select name='county'>
                        <?php/*
                        session_start();
                        $uid=$_SESSION['uid'];
                        $sql='SELECT * FROM entrys WHERE uid=:uid';
                        $stmt=$conn->prepare($sql);
                        $stmt->execue(array(
                            ':uid' => $uid
                            ));
                        while($row=$stmt->fetch())
                            {   
                                $subject=$_row['subject'];
                                echo "
                                <option value='oc'>sd</option>
                                ";
                            }*/
                        ?>
                    
                   </select>
                </div>
                <button type='submit' class='btn'>Add Listing</button>            
            </form>
        </div>
        <!--ADD-->
        <div id='account' class='form'>
            <?php require_once ('resources/library/account.php'); ?>
        </div>
        <div style='clear:both'>
        </div>
    </div>