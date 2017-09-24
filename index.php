<?php
include_once("autoload.php");
?>
<style>
h1 {
    font-family: 'Helvetica', 'Arial', sans-serif;
    color: #030303;
}
body {
    font-family: 'Helvetica', 'Arial', sans-serif;
    background-color: linen;
}
</style>
<html>
<head>
    <title>Exercise 3</title>
    <h1>Exercise 3</h1>
</head>
<body>

<?php


    $Harry = new registeredUser("Regular User", "01");
    $Travis = new admin("Administrator", "blah");

    $Harry->firstName = "Harry";
    $Harry->lastName = "Stanton";
    $Harry->emailAddress = "hstant@gmail.com";

    $Travis->firstName = "Travis";
    $Travis->lastName = "Henderson";
    $Travis->emailAddress = "paris@texas.com";


    echo($Harry->echoAttributes());
    echo "<br>";
    echo($Travis->echoAttributes());

    echo("<br>".admin::disMuhStatic(3, 3)."<br>");
?>

<br>
<button><a href="regist_form.php">REGISTRATION FORM</a></button>

</body>
</html>
