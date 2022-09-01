<?php
    $value = "";
    $result = "";
    $Name1 = "value";
    $Value1 = "";
    $Name2 = "op";
    $Value2 = "";

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
       \\não peguei a parte de estruturar a calculadora\\
    </center>
</form>
