<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./phplogo.png">
    <title>Site web en php</title>
</head>

<body>

<?php
echo "<h1>hello php</h1>";
?>

    <form action="site.php" methode="get">
        Name:<input type="text" name="Name"><br>
        <input type="submit">
    </form>
    <?php
       echo $_GET["Name"]; 
    ?>

    <form action="site.php" method="post">
        password:<input type="password" name="password"><br>
        <input type="submit">
    </form>
    <?php
       echo $_POST["password"];   
    ?>

    <form action="site.php" method="post">
        Apples <input type="checkbox" name="fruits[]" value="apples"><br>
        oranges <input type="checkbox" name="fruits[]" value="oranges"><br>
        limon <input type="checkbox" name="fruits[]" value="limon"><br>
        <input type="submit">
    </form>

    <?php
     $fruits=$_POST["fruits"];
     echo $fruits[0];    
    ?>


    <!-------------------- les tabeaux associatifs ----------------------->

    <form action="site.php" method="post">
        student's name:<input type="text" name="student"><br>
        <input type="submit">
    </form>

    <?php
     $grades= array("jim"=>"A+", "pam"=>"B-", "oscar"=>"c+");
     $grades["jim"] ="F";
     echo $grades["oscar"];
     echo $grades["jim"];
     echo count($grades);
     echo $grades[$_POST["student"]];
    ?>
    <hr>

    <form action="site.php" method="post">
        your grade is<input type="text" name="grade"><br>
        <input type="submit">
    </form>
    <?php
        $grade = $_POST["grade"];
        
         switch ($grade) {
        case "A":
            echo "you did amazing";
            break;
        case "B":
            echo "you did well";
            break;
        case "C":
            echo "you did average";
            break;
        case "D":
            echo "you did bad";
            break;
        case "F":
            echo "you FAILED!";
            break;
        default: 
            echo "invalid grade";
        }
    ?>
    <hr>

    <?php
    $luckyNumbers = array(2,1,4,1,6,9);
    for ($i=0; $i<=count($luckyNumbers); $i++) {
        echo "$luckyNumbers[$i] <br>";
    } 
    ?>
    <hr>


    <?php include "header.html"?>
    <p>i am adel</p>
    <?php include "footer.html"?>

    <?php
      $title = "my first post";
      $author = "adel";
      $wordCount = 400;
      include "article-header.php";
      include "useful-tools.php";
      sayHi("AADDEELL");
      echo $feetInMile;
    ?>
    <br>


    <?php
      class student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa){
                $this -> name = $name;
                $this -> major = $major;
                $this -> gpa = $gpa;                
            }
            function hasHonors(){
                if ($this -> gpa >= 4.5 ) {
                    return "true";
                }
                return "false";
            }
     }
      $student1 = new student("Jim","Business", 2.8);
      $student2 = new student("Pam", "Art", 3.6);
      
      echo $student2 -> hasHonors();
    
    ?>
    <hr>

    <?php
    
     class movie
     {
         public $title;
         private $rating;

         public function __construct($title, $rating)
         {
             $this -> title = $title;
             $this -> setRating($rating);
         }

         function getRating()
         {
            return $this -> rating;
         }

         function setRating($rating)
         {
            if ($rating == "G" || $rating == "PG" || $rating == "PG-13")
             {
                $this -> rating = $rating;
            } else {
                $this -> rating = "NR";
            }
                    }
            }
         $avengers = new movie("Avengers", "dog");
         $avengers -> setRating ('oups!');
         echo $avengers -> getRating ();    
    ?>


    <hr>

    <?php
     class chef {
        function makeChicken(){
            echo "the chef makes chicken <br>";
        }
        function makeSalad(){
            echo "the chef makes salad <br>";
        }
        function makeSpecialDish(){
            echo "the chef makes bbq ribs <br>";
        }
     }

     class italianChef extends chef {
         function makePasta(){
            echo "the chef makes Pasta <br>";
         }
         function makeSpecialDish() {
             echo "the chef makes chicken parm <br>";
         }
     }
     $chef = new chef();
     $chef -> makeSpecialDish();
     $italianChef = new italianChef();
     $italianChef -> makeSpecialDish();
    
    ?>

</body>

</html>