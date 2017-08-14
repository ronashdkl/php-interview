<?php
/**
 * Created by PhpStorm.
 * User: rnsdk
 * Date: 8/12/2017
 * Time: 12:38 PM
 */
require "database.php";
if($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    if(!empty($name)&& !empty($email)&& !empty($contact)){

        $sql = "INSERT INTO information (name,email,contact) VALUES ('$name','$email','$contact')";
        $query = mysqli_query($con,$sql);
        if($query){
                    echo"Success";
        }else{
            echo mysqli_error($con);
        }
           // echo mysqli_error();
    }

}else{
    echo "No Direct Acess";
}