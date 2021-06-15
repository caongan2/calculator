<?php
include "vendor/autoload.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST['operator'];

    $calculator = new \App\Calculator();
    echo "Result: " . $calculator->calculator($operator, $number1, $number2);

}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>Cá kiu lây tồ</legend>
    <form action="" method="post">
        <table>
            <caption>Sím pồ cá kiu lây tồ</caption>
            <tr>
                <td>First operand: </td>
                <td><input type="number" name="number1" value="<?php echo $number1 ?>"></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td>
                    <select name="operator" id="">
                        <option value="plus">Addition</option>
                        <option value="minus">Minus</option>
                        <option value="multiply">Multiply</option>
                        <option value="division">Division</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Second operand:</td>
                <td><input type="number" name="number2" value="<?php echo $number2 ?>" ></td>
            </tr>
        </table>
        <input type="submit">
    </form>


</fieldset>
</body>
</html>