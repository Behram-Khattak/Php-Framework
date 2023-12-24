<?php

try {
    if (! require_once "./views/master.php")
        throw new Exception("File not found !");

} catch(Exception $e) {
    echo $e->getMessage();
}