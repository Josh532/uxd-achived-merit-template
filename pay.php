<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>name the website here </title> <!-- if you leave this unchanged, it will look very suspicious, make sure you change this -->
    <link rel="stylesheet" href="https://classless.de/classless.css"> <!-- this is classless css, it is a pre made css sheet, you can use your own css, im just really lazy -->
</head>
<body>
    <form class="pay_form" action="pay_process.php" method="post">
       <div><input type="number" name="card_number" id="card_number" placeholder="Insert FAKE card number" required></div>
       <div><input type="text" name="card_name" id="card_name" placeholder="name on card (FAKE)" required></div>              <!-- this is all very similar to infomation.php, refer to that one -->
       <div><input type="number" name="cvc" id="cvc" placeholder="secuirty code FAKE" required></div>
       <button type="submit" class="submit_button">Pay</button>
    </form>
</body>
</html>
