<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
echo "<div id='sidebar'>
		<div id='sidebarmini'>
                <h1>Lesson or Name</h1>
				</div>
				</br>
                <form  method='post' action='" ;?><?php echo"/search.php?go'  id='searchform'> 
                    <input  type='text' name='name'>
                        <br/>
                    <input  type='submit' name='submit' value='Search'> 
                </form>
                
            </div>
	    </div>";
?>