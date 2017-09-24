<?php
include_once("autoload.php");
?>
<style>
h1 {
    font-family: 'Helvetica', 'Arial', sans-serif;
    color: #030303;
}
body {
    background-color: linen;
}
</style>
<html>
<h1>RESULTS</h1>
<?php
    $newUser = new registeredUser("newUser", "regular");
    $newUser->firstName = $_POST["firstname"];
    $newUser->lastName = $_POST["lastname"];
    $newUser->emailAddress = $_POST["email"];
    if(is_a($newUser, "registeredUser")) {
        echo("<b>Attributes of ".$newUser->firstName.":</b><br>". $newUser->echoAttributes());
        echo("Object is a ".get_class($newUser));
    }
?>
<br>
<button><a href="regist_form.php">REGISTRATION AGAIN?</a></button>
<button><a href="index.php">BACK HOME!</a></button>
</html>