<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 
   <form action = "site.php" method="get">
   NAME: <input type= "text" name="name">
   <input type ="submit">
   </form> 
   <br>
  <?php
   echo "Hello world im kristian";
   $NameOfCharacter = "Johny";
   echo $NameOfCharacter;
   echo strtoupper($NameOfCharacter);
   $AgeOfCharecter = 67;
   echo $AgeOfCharecter;

   $fruits = ["apple", "bannana", "pineapple"];
   foreach($fruits as $fruits){
    echo $fruits . "<br>";
   }
  
   $Candy = ["snickers", "loli", "sas"];

   foreach($Candy as $Candy){
    echo $Candy. "<br>";
   }

   $Food = ["chciekn", "cereal", "cupcake"];

   foreach($Food as $Food){
    echo $Food . "<br>";
   }

  ?>
</body>
</html>
