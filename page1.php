<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
</head>
<body>
<?php 
        require "includes/header.inc.php" 
    ?>

        <h2>Setting the name variable equal to bruce in the URL injects that value into the variable $name on page2. Try it with a different name (not case sensitive)!</h2>
        <a href="http://localhost/project2/page2.php?name=bruce">http://localhost/project2/page2.php?name=bruce</a>

        <h2>Check out a box I made featuring a wooden leopard print pattern. Simply set the product value to leopard boxin the URL. You can also try values like cheeto or terrier</h2>
        <a href="http://localhost/project2/page2.php?product=leopard-box">http://localhost/project2/page2.php?product=leopard box</a>

        <h2>Change the background color of the page to any color using the color variable in the URL. Use a hexidecimal number without the # sign in front.</h2>
        <a href="http://localhost/project2/page2.php?color=337788">http://localhost/project2/page2.php?color=337788</a>

        <h2>Take a look at one or multiple products using the qty variable by entering a number (spelled out) value. Try values two and three.</h2>
        <a href="http://localhost/project2/page2.php?qty=one">http://localhost/project2/page2.php?qty=one</a>
        
        <h2>A catalog of all products can be accessed using Boolean logic. When inputing 1 to the catalog variable shows the catalog.</h2>
        <a href="http://localhost/project2/page2.php?catalog=1">http://localhost/project2/page2.php?catalog=1</a>

        <h2>Using Boolean logic we can run a 50% off sale by setting the sale variable to true or 1 or yes.</h2>
        <a href="http://localhost/project2/page2.php?sale=yes">http://localhost/project2/page2.php?sale=1</a>

        <h2>Using the blog variable we can select a readable passage by a number (spelled out). Try two and three as well!</h2>
        <a href="http://localhost/project2/page2.php?blog=one">http://localhost/project2/page2.php?blog=one</a>

        <h2>Finally we can use the & operator to build a query string so that our variables can work in conjunction with eachother! Try any combination you like!</h2>
        <a href="http://localhost/project2/page2.php?name=kyle&color=337788&blog=one&sale=1">http://localhost/project2/page2.php?name=kyle&color=337788&blog=one&sale=1</a>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
<?php require "includes/footer.inc.php";?> 
</body>
</html>