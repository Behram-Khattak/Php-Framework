<?php
/**
 * This try catch block is used to run the main,
 * view file of the framework if the file exist's.
 */
try {
    
    include_once __DIR__. '/../views/welcome.php' or
    throw new Exception(404, "Page not found !");

} catch(Exception $e) {
    echo $e->getMessage();
}