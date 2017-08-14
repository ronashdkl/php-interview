<?php
/**
 * Created by PhpStorm.
 * User: rnsdk
 * Date: 8/12/2017
 * Time: 12:18 PM
 */
$host = "localhost";
$database = "phptest";
$username = "root";
$password= "";

$con = mysqli_connect($host,$username,$password,$database);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


