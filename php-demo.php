<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php program</title>
</head>
<body>
      <h1>Case sensitive</h1>
    <?php
         echo "Hello world<br>";
         $four = 2 + 2;
         $capital = 67;
         print("Variable capital is $capital<br>");
         print("Variable CaPiTaL is $CaPiTaL<br>");

    ?>

    <h1>Double datatype/Float</h1>
    <?php
         $many = 2.2888800;
        $many_2 = 2.2111200;
        $few = $many + $many_2;
        print("$many + $many_2 = $few <br>");
    ?>

        


</body>
</html>

