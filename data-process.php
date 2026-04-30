<?php

include 'database.php'; // Connects to database.php, has connection to database in xxampp WHEN USING PHP IN XAMPP, YOU MUST TURN ON LOCAL HOST AND APACHE IF YOU DO NOT HAVE XAMPP THIS WILL NOT WORK, AS THIS IS A PHP GUIDE FOR XAMPP

if ($_SERVER ["REQUEST_METHOD"] == "POST") {

    $firstName = htmlspecialchars(trim($_POST['f_name'])); // $variable = htmlspecialchars(trim($_POST['variable mentioned in sql table and infomation.php eg. f_name, l_name etc']
    $lastName = htmlspecialchars(trim($_POST['l_name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitize and validate input: filter_var removes unwanted characters, and htmlspecialchars ensures safe output rendering
    $phone = htmlspecialchars(trim ($_POST['phone']));
    $address = htmlspecialchars(trim ($_POST['address']));
    $city = htmlspecialchars(trim($_POST['city']));
    $postal = htmlspecialchars(trim($_POST['postal']));
    $option    = isset($_POST['option']) ? htmlspecialchars(trim($_POST['option'])) : '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die('Invaild email');
    }


$query = "INSERT INTO data_collect (f_name, l_name, email, phone, `address`, city, postal)
    VALUES (?,?,?,?,?,?,?)"; //lists all variables in query =, then in values (?,?) the amount of question marks are the amount of variables and inserts into the database table

    $stmt = $mysqli->prepare($query);

    $stmt->bind_param("sssssss", $firstName, $lastName, $email, $phone, $address, $city, $postal);

    if($stmt->execute()){
        echo"Confimed";
        header("location: pay.php"); // redirects user to pay.php page when the purchase is successful (for sake of guide, do not change this file name, unless you can fix it
        exit();
    }
    else{
        echo "please complete the form" . $stmt->error; // if the user doesn't complete the form, they are told to do it again
    }

    $mysqli->close();
}
?>
