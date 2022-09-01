<?php
    $value = "";
    $result = "";
    $cookieName1 = "value";
    $cookieValue1 = "";
    $cookieName2 = "op";
    $cookieValue2 = "";

    if (isset($_POST['value1'])) {
        $num = $_POST['value1'];
    } else {
        $num = "";
    }

    if (isset($_POST['submit'])) {
        $num = $_POST['value1'] . $_POST['submit'];
    } else {
        $num = "";
    }

    if (isset($_POST[''])) {
        $Value1 = $_POST['op'];
        setcookie($Name1,$Value1,time()+(86400 * 40),"/");

        $Value2 = $_POST['op'];
        setcookie($Name2,$Value2,time()+(86400 * 40),"/");

        $num = "";

?>

<h3>calculadoar2.0</h3>

<form method="post">
    <center>
       
    </center>
</form>
