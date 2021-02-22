<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <div class="main-container" style="margin-top: 25%;s">
    <?php 

    if (isset($_POST['submit']))
    
    if (is_numeric($_POST['Num1']) && is_numeric($_POST['num2'])) {
        //Calculate  total

    if ($_POST['operation'] == 'plus') {
    $result = $_POST['num1'] + $_POST['num2'];
    }

    if ($_POST['operation'] == 'minus') {
    $result = $_POST['num1'] - $_POST['num2'];
    }

    if ($_POST['operation'] == 'multiply') {
    $result = $_POST['num1'] * $_POST['num2'];
    }

    if ($_POST['operation'] == 'divided by') {
    $result = $_POST['num1'] / $_POST['num2'];
    }

    echo "<h1>{$_POST['num1']} {$_POST['operation']} {$_POST['num2']} equals {$result}</h1>}";

    else {
    echo 'Numeric values are required';
    }
    }

    ?>
    </div>

    <form action="calculator.php" method="post">
        <input name="num1" type="text">

        <select name="operation" id="operation">
            <option value="plus">Plus</option>
            <option value="minus">Minus</option>
            <option value="multiply">Multiply</option>
            <option value="divided by">Divided by</option>
        </select>

        <input name="num2" type="text">
        <input name="submit" type="submit" value="Calculate">
    </form>
</body>
</html>