<?php
try {
    $db = new PDO( 'sqlite:'.__DIR__.'/database.db' );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch ( \Exception $e ) {
    echo 'Error connecting to the Database: ' . $e;
    // e->getMessage();
    exit;
}