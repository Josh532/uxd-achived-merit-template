
<!-- REMOVE COMMENTS BEFORE PUBLISHING, CHANGE ID'S AND NAMES, FOR OGRIONALITY, IF YOU CHANGE ID'S AND NAMES, YOU MUST CHANGE THE ID IN THE SQL, 

CREATE TABLE `data_collect`(
`id` int(11) NOT NULL AUTO_INCREMENT,
`f_name` varchar(128) NOT NULL,
`l_name` varchar(128) NOT NULL,
`email` varchar(225) NOT NULL UNIQUE,
`phone` varchar(11) NOT NULL,
`address` varchar(128) NOT NULL,
`city` varchar(128) NOT NULL,
`postal` varchar(8) NOT NULL,
`option` varchar(128),
PRIMARY KEY (`id`)
);


IF YOU CHANGE AN ID EG. f_name to first_name, `f_name` must also be changed to `first_name`, refer to sql table above for reference, change some id's for ogrionality -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert title of your website here</title>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo filemtime('style.css'); ?>" /> <!-- Links the css to the html page (css styles (like makeup) the html page). -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- font awesome, gives cool emojis and icons, if you want to add them, go to font awesome on google-->
    <link rel="stylesheet" href="https://classless.de/classless.css">

</head>
<body>
        <!-- infomation enter form -->
                                                                          <!-- you can change the name of data-process.php, provided you change data-process.php file, to whatever you named the file-->
    <form class="payment-form" action="data-process.php" method="POST">   <!-- Form starts here, action identifies that form that processes the form, find "data.php" in the explorer in github, it contains the process code.
        <!-- names -->                                                    <!-- method post, means the code will update and publish to the sql table, if you change the method="get", the infomation will display for the user. - use this method if you are having troubles linking sql table to the website to debug.-->
        <div><input type="text" name="f_name" id="f_name" placeholder="first name" required></div>
        <div><input type="text" name="l_name" id="l_name" placeholder="last name" required></div>

        <!-- contact -->                                                                                              <!-- Try adding new infomation here, if you change an id="xyz", you must change it in the sql -->
        <div><input type="text" name="email" id="email" placeholder="email adress" required></div>
        <div><input type="number" name="phone" id="phone" placeholder="phone number" required></div>

        <!-- address -->
        <div><input type="text" name="address" id="address" placeholder="address" required></div>
        <div><input type="text" name="city" id="city" placeholder="city" required></div>
        <div><input type="text" name="postal" id="postal" placeholder="postal" required></div>

        <!-- optional -->
        <div><input type="text" name="option" id="option" placeholder="delivery instructions (optional)"></div>
        <!-- submit -->
        <button type="submit" class="submit_button">Next</button> <!-- type submit allows the database to understand you are submitting data, it executes the process file, eg. action="data-process.php", and updates the database -->
    </form>

</body>
</html>
