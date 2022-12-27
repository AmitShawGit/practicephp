<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    Number 1 : <input type="number" name="num1" id=""><br><br>
    Number 2 : <input type="number" name="num2" id=""><br><br>
    <select name="operation" id="">
        <option value="add">ADD</option>
        <option value="sub">SUB</option>
        <option value="div">DIV</option>
        <option value="mult">MULT</option>
    </select>
    <button type="submit" name="submit">Calculate</button>
    <p>
        <?php
        if(isset($_POST['submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            switch($operation){
                case "add" : $sum = $num1 + $num2;
                echo 'the addition of two number is '.$sum;
                break;

                case "sub" : $sub = $num1 - $num2;
                echo 'the substaction of two number is '.$sub;
                break;

                case "div" : $div = $num1 / $num2;
                echo 'the division of two number is '.$div;
                break;

                case "mult" : $mult = $num1 * $num2;
                echo 'the multiplication of two number is '.$mult;
                break;
            }

        }
        ?>
    </p>
    </form>
</body>
</html>