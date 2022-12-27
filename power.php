<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method = "POST">
    <h1>Power Calculator</h1>
    Base:
      <input type="number" name="base" id="base">  <br><br><br>
      Power:
      <input type="number" name="power" id="power"><br><br>
      <p>
        <?php
      if(isset($_POST ['submit'] )){
        $num = $_POST['base'] ;
       $power = $_POST['power'] ;
      // $square = pow(base,power); <---formula

        $square = pow($num , $power);

        echo $square ;

      }
?>
      </p>
      <input type="submit" name="submit" id="submit">
</form>
 
<!-- Area of Circle

<form action="" method = "POST">
  <h1>Find The Area of Shapes</h1>
  <div class="circle">
  <h5>Area of Circle</h5>
  <br>
  enter the radius of circle 
  <input type="number" name= "radius" id ="radius">
  <p>
  <?php
    /*Power of Number*/
    
    /* 
     if(isset($_POST ['submit'] )){
        $radius = $_POST['radius'];
        $pi = 3.141;
        $areaofCircle = $pi * $radius * $radius;
        echo $areaofCircle ;
 
      }*/
?> 
  </p>
  <button type = "submit" name="submit" id="submit">submit</button>
</div>
</form> 
  
-->

</body>
</html>
