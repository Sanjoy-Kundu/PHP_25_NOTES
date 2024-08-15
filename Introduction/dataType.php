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
        height:100%;
        width:100%;
        background-color:#f7d4d4;
    }
    main .subTitle{
        text-align:right;
    }
</style>
<body>
<!-- php buld server : php -S localhost:8000/print.php -->
    <header>PHP Tutorial :03 (Data Type)</header>










    <main>
        <h3>PHP Data Type</h3>
        <ol style="margin-left:10%">
            <li>String</li>
            <li>Integer</li>
            <li>Float</li>
            <li>Array</li>
            <li>Object</li>
            <li>Boolean</li>
            <li>Null</li>
            <li>Resource</li>
            <li>I can get the data type using var_dump() function</li>
        </ol>
    <br> <br> <br>
        <ul style="margin-left:10%" type="square">
            <li><h4>String</h4> 
            <ol>
                <li>
                    <?php 
                      $x = "We are learning PHP";
                      $y = "PHP is fun";
                      echo $x;
                      echo "<br/>";
                      echo $y;
                      echo "<br/>";
                      //var_dump($y);
                      ?>
                </li>
            </ol>  
         </li>

         <li><h4>Integer</h4>
            <ol>
                <li>
                    <?php
                      $num1 = 100;
                      $num2 = 100;
                      $result = $num1 + $num2;
                      echo "First Number is ".$num1;
                      echo "<br/>";
                      echo "Second Number is ".$num2;
                      echo "<br/>";
                      echo "Total addition is = ".$result;
                    ?>
                </li>
            </ol>
        </li>

        <li> <h4>Float</h4>
            <ol>
                <li>
                    <?php
                        $num3 = 10.11;
                        $num4 = 12.12;
                        $final_result = $num3 + $num4;
                        echo "First Number is ".$num3;
                        echo "<br/>";
                        echo "Second Number is ".$num4;
                        echo "<br/>";
                        echo "Total Additio is = ".$final_result;
                        echo "<br/>";
                    ?>
                </li>
            </ol>
        </li>

        <li>
            <h4>Array</h4>
            <ol>
                <li>
                    <?php
                        $country = array("Bangladesh", "Inida", "Japan", "Chaina");
                        print_r($country);
                        echo "<br/>";
                        $numbers = [10, 20,30,50];
                        print_r($numbers);
                    ?>
                </li>
            </ol>
        </li>
        <li>
            <h4>Object</h4>
            <ol>
                <li>
                    <?php 
                   class Car {
                    public $color;
                    public $model;
                    public function __construct($c, $m) {
                      $this->color = $c;
                      $this->model = $m;
                    }
                    public function message() {
                      return "My car is a " . $this->color . " " . $this->model . "!";
                    }
                  }
                  
                  $myCar = new Car("red", "Volvo");
                  $myCar2 = new Car("blue", "scania");
                  print_r($myCar);
                  echo "<br/>";
                  print_r($myCar2);
                  echo "<br/>";
                  //var_dump($myCar);
                    ?>
                </li>


                <li>
                    <?php 
                        class Electronics{
                            public $name;
                            public $price;
                            public function __construct($electronicName, $electronicPrice){
                                $this->name = $electronicName;
                                $this->price = $electronicPrice;
                            }

                            public function box(){
                                return "My Electronics name is ".$this->name. "Electronics Price is ".$this->price;
                            }
                        }

                        $info_one = new Electronics("Acere Monitor", 12500);
                        $info_two = new Electronics("Ovo Ips", 2250);
                        print_r($info_one);
                        echo "<br/>";
                        print_r($info_two);
                    
                    ?>
                </li>
            </ol>
        </li>
        </ul>

     
    </main>





















    <footer>we are learning php</footer>
</body>

</html>
