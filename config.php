<?php  

/* 

    The important thing to realize is that the config file should be included in every 

    page of your project, or at least any page you want access to these settings. 

    This allows you to confidently use these settings throughout a project because 

    if something changes such as your database credentials, or a path to a specific resource, 

    you'll only need to update it here. 

*/

try {

$username='ahhyes08_root';
$password='1fiction';

$conn = new PDO('mysql:host=localhost;dbname=ahhyes08_lite  
, $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){

    echo 'ERROR: ' . $e->getMessage();

}



if(!$conn)

    {

        die(mysql_error());

    }



$config = array(  

    "urls" => array(  

        "baseUrl" => "ahhyes.org"  

    ),  

    "paths" => array(  

        "resources" => "/path/to/resources",  

        "images" => array(  

            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images",  

            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images"  

        )  

    )  

);

//Will be in Every pages Title

$webname = 'Ahhyes website for people to find a tutor or trainer for any skill or subject';

//Root

$root = 'http://ahhyes.org';

/* 

    I will usually place the following in a bootstrap file or some type of environment 

    setup file (code that is run at the start of every page request), but they work 

    just as well in your config file if it's in php (some alternatives to php are xml or ini files). 

*/  

/* 

    Creating constants for heavily used paths makes things a lot easier. 

    ex. require_once(LIBRARY_PATH . "Paginator.php") 

*/  

defined("LIBRARY_PATH")  

    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));  

defined("TEMPLATES_PATH")  

    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));  

/* 

    Error reporting. 

*/  

ini_set("error_reporting", "true");  

error_reporting(E_ALL|E_STRCT);  

?>  