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
        $cookieValue1 = $_POST['op'];
        setcookie($cookieName1,$cookieValue1,time()+(86400 * 30),"/");

        $cookieValue2 = $_POST['op'];
        setcookie($cookieName2,$cookieValue2,time()+(86400 * 30),"/");

        $num = "";
    }

    switch($_COOKIE['op']){
        case "+":
            $result = $_COOKIE['num'] + $num;
            break;
        case "/":
            $result = $_COOKIE['num'] / $num;
            break;
        case "-":
            $result = $_COOKIE['num'] - $num;
            break;
        case "x":
            $result = $_COOKIE['num'] * $num;
            break;
    }
?>

<h3>C A L C U L A T O R</h3>

<form method="post">
    <center>
        <input type="text" name="result" value="<?php echo $result?>" readonly>
        <br>
        <label>1º valor</label>
        <br>
        <input type="text" name="value1" value="<?php echo $result?>" readonly>
        <br>
        <br>
        <label>2º valor</label>
        <br>
        <input type="text" name="value2" value="<?php echo $result?>" readonly>
        <br>
        <br>
        <label>Resultado</label>
        <br>
        <br>
        <table border="1">
            <tr>
                <td>
                    <input type="submit" name="op" value="/">
                </td>
                <td>
                    <input type="submit" name="submit" value="7">
                </td>
                <td>
                    <input type="submit" name="submit" value="8">
                </td>
                <td>
                    <input type="submit" name="submit" value="9">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="4">
                </td>
                <td>
                    <input type="submit" name="submit" value="5">
                </td>
                <td>
                    <input type="submit" name="submit" value="6">
                </td>
                <td>
                    <input type="submit" name="op" value="*">
                </td>
            </tr>
            <tr>
               <td>
                    <input type="submit" name="op" value="-">
                </td>
                <td>
                    <input type="submit" name="submit" value="1">
                </td>
                <td>
                    <input type="submit" name="submit" value="2">
                </td>
                <td>
                    <input type="submit" name="submit" value="3">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="op" value="+">
                </td>
                <td>
                    <input type="submit" name="submit" value="0">
                </td>
                <td colspan="2">
                    <input type="submit" name="equals_to" value="=">
                </td>
                
            </tr>
        </table>
    </center>
</form>