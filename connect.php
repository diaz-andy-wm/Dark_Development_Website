<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=darkdevelopement', 'root', 'root');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
