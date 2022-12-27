<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="" method ="POST">
<body> input your age to see who you are
    <input type="text" name="age" id="">
    <button type="submit" name="submit">Submit</button>
    <p>
        <?php
        if(isset($_POST ['submit'])){
            $age = $_POST['age'];

            if($age  <= 15){
                echo "Your age is "  .$age. " so you are a baby";
            }
            else if($age  <= 30){
                echo "Your age is "  .$age. " so you are a teenager";
            }
            else if($age  <= 50){
                echo "Your age is "  .$age. " so you are a old age";
            }
            else{
                echo "Your age is"  .$age;
            }
        }
        ?>
    </p>
</form>
<!--Table of 2-->
<?php
$i = 3;
$j = 1;
while($i  <= 30){
    echo "3" * $j. "<br>";
    $i+= 3;  //write the multiple of the number
    $j++;
}
echo "<br>";
//multiplication through for loop
for($i = 1; $i <= 10 ; $i++){
    echo "12" * $i. "<br>";
}
?>
</body>
</html>