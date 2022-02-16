<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>IF-ELSE</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .container{
            max-width:80%;
            background-color:green;
            margin:auto;
            padding:20px;
            text-align:center;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <h1>LETS LEARN ABOUT PHP</h1>
        <?php
        $age=15;
        if($age>=18)
        {
            echo "YOU CAN VOTE";
        }
        else if($age<=15)
            echo "YOU CAN BE A VOLUNTEER";
        else 
            echo "YOU CANNOT VOTE";


            // LOOPS
        echo"<br>";

        $langu=array("python","c++","c","php");
        
        
        echo"<br>";
        // FOR LOOPS
        echo "<h1>FOR LOOP</h1>";
        for($i=0;$i<count($langu);$i++)
        {
            echo "<br>THE VALUE OF LANGUAGE ARE USING FOR LOOP: ";
            echo $langu[$i];    
        }
        echo"<br>";
        // WHILE LOOPS 
        echo"<br>";
        echo "<h1>WHILE LOOP</h1>";
        $a=0;
        while($a<count($langu))
        {
            echo "<br>THE VALUE OF LANGUAGE IS: ";
            echo $langu[$a];
            $a++;
        }

        echo"<br>";
        // DOWHILE LOOPS 
        echo"<br>";
        echo "<h1>DOWHILE LOOP</h1>";
        $a=0;
        
        do{
            echo "<br>THE VALUE OF LANGUAGE IS: ";
            echo $langu[$a];
            $a++;
        }while($a<count($langu));
        echo"<br>";

          // FOREACH LOOPS 
          echo"<br>";
          echo "<h1>FOREACH LOOP</h1>";
          
          foreach ($langu as $iterate) {
              echo"<br> THE VALUE OF LANGUAGE IS: ";
              echo $iterate;
              # code...
          }
        ?>
    </div>
  </body>
</html>