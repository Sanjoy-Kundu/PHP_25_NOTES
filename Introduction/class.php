<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Introduction</title>
</head>
<style>
    *{
        margin:0px;
        padding:0px;
        box-sizing:border-box;
    }
    header, footer{
    height: 30px;
    width: 100%;
    background-color: #d1b6b6;
    border: 1px solid white;
    box-shadow: 1px 1px 1px 0px;
    text-align:center;
    }
    main{
        height:auto;
        width:100%;
        background-color:#f7d4d4;
    }
    main .subTitle{
        text-align:right;
    }
</style>
<body>
<!-- php buld server : php -S localhost:8000/print.php -->
    <header>PHP Tutorial :04 (Class)</header>


    <main>
        <h2>PHP Class</h2>
        <?php 
            /*class className{
                public $propertyName = "Sanjoy";
                public function mehoadName(){
                    //$this keyword is used to call properties & methods within the class
                    $this->propertyName;
                    $this->methodName();
                }
            }
        

        $obj = new className;
        echo $obj->methodName();
        $obj->propertyName;
           */




        //object example using game class
        class Game{
            const BREAK = "<br/>";
            public $name;
            public $price;
            public $photo;
            public $dir = ".games/";

            public function print_game(){
                echo "<div style='height:auto; width:240px; border:1px solid black; float:left' margin-left:10px;>";
                echo $this->name.self::BREAK;
                echo $this->price.self::BREAK;
                echo $this->dir.$this->photo.self::BREAK;
                echo "</div>";
            }
        }   
        $game1 = new Game; //game1 is the object type of Game
        $game1->name = "football";
        $game1->price = 120000;
        $game1->photo = "football_dear.jpg";
        $game1->print_game(); //print the game1



        $game2 = new Game; //game2 is the object of Game
        $game2->name = "Cricket";
        $game2->price=22000;
        $game2->photo = "crickt_england.jpg";
        $game2->print_game();
        print_r($game2);
        ?>
<hr> <hr>












        <h1>Another Class with Making Car</h1>
        <?php 
        class Car{

            const BR = "<br/>";

            public $carName;
            public $carModel;
            public $carPrice;
            public $carGarage;
            public $carNumber;
            public $carImage;
            public $dir="./games/";


            public function print_private_car(){
                echo "<div style='border:1px solid white'; height:200px; width:200px; display:flex;>";
                echo "<img src='{$this->dir}{$this->carImage}' style='height:150px; width:150px'>";
                echo "<h4>Car Name is {$this->carName}</h2>".self::BR;
                echo "<h5>Car Model is {$this->carModel}</h3>".self::BR;
                echo "<h5>Car Price is {$this->carPrice}</h3>".self::BR;
                echo "<h5>Car Garage is {$this->carGarage}</h3>".self::BR;
                echo "<h5>Car Number is {$this->carNumber}</h4>".self::BR;
            }

            public function car_making($name, $model,$price,$garage,$number,$image){
                $this->carName = $name;
                $this->carModel = $model;
                $this->carPrice = $price;
                $this->carGarage = $garage;
                $this->carNumber = $number;
                $this->carImage = $image;
            }
            
        }
        
        $hanif = new Car;
        $hanif->car_making("Hanif","ABS-011",13000000,"Mirpur",10,"hanif-paribahan.jpg");
        //print_r($hanif);
        $hanifAc = new Car;

        $hanifAc->car_making("Hanif AC", "ABS-102", 20000000, "Mirpur", 11, "hanif-paribahan-ac.jpg");
        $hanif->print_private_car();
        $hanifAc->print_private_car();
        
        ?>
    </main>





















    <footer>we are learning php</footer>
</body>

</html>
