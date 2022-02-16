<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>OPERATOR PHP</title>
  </head>
  <body>
    <?php

    // CONSTANT
    define('pi', '3.1');
    
    $a=4;
    $b=32;
    //Arithmetic operator
    echo "THE value of VARIABLE A and B are :";
    echo $a + $b;
    // echo "<br";
    
    //ASsignment operator
    $c=$a;
    $c+=1;
    echo"<br>";
    echo "THe value of c is : ";
    echo $c;
    

    //Comparison operator
    echo "<br>";
    echo "THE VALUE OF 1==4 is :";
    echo var_dump(1==4);

    echo "<br>";
    echo "THE VALUE OF 1!=4 is :";
    echo var_dump(1!=4);

    echo "<br>";
    echo "THE VALUE OF 1>=4 is :";
    echo var_dump(1>=4);

    echo "<br>";
    echo "THE VALUE OF 1<=4 is :";
    echo var_dump(1<=4);


    //LOGICAL OPERATOR
    // and 
    // or 
    // not 
    // xor
    echo "<br>";
    $myvar=(false and true);
    echo var_dump($myvar);

    echo "<br>";
    $myvar=(true or true);
    echo var_dump($myvar);

    echo "<br>";
    echo "<h1>DATA TYPES</h1>";
    $stri="HELLO JARVIS";
    echo var_dump($stri);
    echo "<br>";
    echo pi;
    
?>
  </body>
</html>