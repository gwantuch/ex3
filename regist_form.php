<?php
include_once("autoload.php");
?>

<html>
<style>
h1 {
    font-family: 'Helvetica', 'Arial', sans-serif;
    color: #030303;
}
body {
    background-color: linen;
}
input {
    font-family: 'Helvetica', 'Arial', sans-serif;
    width: 25%;
} 
</style>
    <h1>REGISTRATION FORM</h1>
<form action="results.php" method="post">
<fieldset style= "border: 0px;">
    <ul>
        <li>
            <input id="firstname" name="firstname" type="text" placeholder="First Name" required autofocus/>
        </li>
        <li>
            <input id="lastname" name="lastname" type="text" placeholder="Last Name" required/>
        </li>
        <li>
            <input id="email" name="email" type="email" placeholder="Email Address" required/>
        </li>
    </ul>
    <input class="submit" type="submit" value="SUBMIT!" />
</fieldset>
</form>
<a href= "index.php">HOME</a>
</html>