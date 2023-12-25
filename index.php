<?php
/**
 * This try catch block is used to run the main,
 * view file of the framework if the file exist's.
 */
try {
    if (! include_once __DIR__ . '/views/master.php')
     {
        throw new Exception(404 .' '. "Page not found !");
     }

} catch(Exception $e) {
    echo $e->getMessage();
}