<?php
$host = 'localhost';
$path = 'root';
$db_password = '';

function dbQuery($query)
{
    $database = new mysqli('localhost', 'root', '', 'customer_info');
    $database->query($query);
}
