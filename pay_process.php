<?php // once again this is simlar to infomation-process.php so refer to guide there -->

include 'database.php';

if ($_SERVER ["REQUEST_METHOD"] == "POST") {    

    $card_number = htmlspecialchars(trim($_POST['card_number']));
    $card_name = htmlspecialchars(trim($_POST['card_name']));
    $cvc = htmlspecialchars(trim($_POST['cvc']));


$query = "INSERT INTO payment_form (card_number, card_name, cvc)
    VALUES (?,?,?)";

    $stmt = $mysqli->prepare($query);

    $stmt->bind_param("sss", $card_number,$card_name,$cvc);

    if($stmt->execute()){
        echo"Confimed";
        header("location: success.html");
        exit();
    }
    else{
        echo "please complete the form" . $stmt->error;
    }

    $mysqli->close();
}
?>
