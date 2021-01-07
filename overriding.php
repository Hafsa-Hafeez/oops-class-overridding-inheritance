<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
     class shape 
     {
         public function draw(){
            echo "";
         }
     }
     class circle extends shape{
         public function draw(){
            #code....
             echo "a curve in drawn with 360 angel";
             echo "<div style='height:100px; width:100px; border-radius:50px; background-color:black;'></div>";
         }
     }
     class rectangle extends shape{
         public $_width;
         public $_height;
         public function __construct(int $height, int $width)
         {
             #code....
             $this-> width =$width;
             $this-> height =$height;
             echo "<br> rectangle width is $width and height is $height";
         }
          public function draw(){
            echo "<br>";
              
            
               for($j = 0; $j < $this -> height ; $j++) 
               {
                   if ($j > 0) {
                       # code...
                echo "|";

                   }
                   else{
                       echo "&nbsp;";
                   }
                for ($i = 0; $i < $this -> width ; $i++) {
                    if ($j==0 || $j ==($this -> height)-1) {
                        echo "_";
                    }
                    else{
                        echo "&nbsp;&nbsp;";
                            
                    }
                }
                //   else{
                //        echo "/";
                //     }
                if ($j > 0) {
                    # code...
             echo "|";

                }
                   echo "<br>";
                   
               }
            }
     }
     
    //  class square extends shape{
        // public $_side;
        // public function __construct(int $side)
        // {
            #code....
            // $this-> _side =$side;
            // echo "<br> square has four equal  sides $side cm";
        // }
    // }
    // class square extends rectangle{
        
    //     public function __construct(int $side)
    //     {
    //         parent::__construct($side,$side);          
    //     }
    // }
     $c = new circle;
     $c ->draw();

     $r = new rectangle(5, 20);
     $r ->draw();

    //  $s = new square(5);
    //  $s ->draw();
    ?>

</body>
</html>