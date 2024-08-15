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
<!-- php buld server : php -S localhost:8000 -->
    <header>PHP Tutorial :01 (Variable)</header>
    <main>
        <h4 class="subTitle">Email: sanjoykundu187@gmail.com</h4>
        <h3 class="subTitle">Connect with Sanjoy Kundu</h3>
        <h4 class="subTitle">Current Time is <?= date("h:i:s")?></h4>
        <hr>
        <hr>
        <h2>Variable</h2>
        <?php 
        $firstName = "Sanjoy";                     // variable  type string
        $lastName  = "Kundu";                      // variable  type string
        $address   = "Madaripur";                 // variable  type string
        $email     = "sanjoykundu187@gmail.com";
        $sanjoysInfo = "My name is $firstName $lastName. Im form $address. My email address is $email";
        
        echo $email."<br/>"; 
        echo $sanjoysInfo;
        ?>
        <h3>Types of variable</h3>
        <ol style="margin-left:13%">
            <li>String</li>
            <li>Integer</li>
            <li>Float</li>
            <li>Array</li>
            <li>Object</li>
            <li>Null</li>
            <li>Boolean</li>
        </ol>
        <br>
        <h3>Check php data type uisng var_dump() function</h3>
        <?php
        $num1 = 10;       //integer
        $num2 = 10.55;   //float
        $num3 = true;   //boolean
        $num4 = ["volvo", "sacnia", "hino"];  //array
        $num5 = "Im form Bangladesh";   //string
        $num6 = NULL;
       ?>
       <ul>
        <li>Checking varable type 
            <ol>
                <li>Fist Number is <?= var_dump($num1)?></li>
                <li>Second Number is <?= var_dump($num2)?></li>
                <li>Third Number is <?= var_dump($num3)?></li>
                <li>Fourth Number is <?= var_dump($num4)?></li>
                <li>Five Number is <?= var_dump($num5)?></li>
                <li>Six Number is <?= var_dump($num6)?></li>
            </ol>
        </li>

        <li>Assign Multiple Value
            <ol>
                <li><?= $x = $y = $z = "ABCDEF"?></li>
                <li><?php echo $x ?></li>
                <li><?php echo $y ?></li>
                <li><?php echo $z ?></li>
            </ol>
        </li>
       </ul>

    <br><br><br><br><br>
        



<h3>Variable Scope</h3>
<h5>There are 3 kinds of variable scope: </h5>
<ol type="i" style="padding-left:30px;">
    <li>Local</li>
    <li>Global</li>
    <li>Static</li>
</ol>
<br> <br> <br>
<ul>
    <li><h4>Local Scope </h4>
        <ol>
            <li>
                <?php 
                function result(){
                    $name = "LG Monitor";
                    $length = 14.4;
                    $amount = 13000;
                    $info = "Monitor name ${name}.Monitor Length is ${length}. Total Amount is ${amount}";
                    echo $info;
                }
                result();
                // echo $name; undifiend we cant access locally
                ?>
            </li>
            <li><?= result() ?></li>
        </ol>
        <br>
    </li>
    <li>
        <h4>Global Scope</h4>
        <ol>
            <li>Wrong way
                <?php
                 $x = 5; // global scope

                 function myTest() {
                   // using x inside this function will generate an error
                   return "<p>Variable x inside function is: $x</p>";
                 }
                 myTest();
                 echo $x;
                ?>
            </li>
            <li>
                Right Way
                <?php 
                    $m = "GOOD";
                    $n = "BOY";
                    function myTest2(){
                        GLOBAL $m, $n;
                        $answer =  "Result is = $m  $n";
                        echo $answer;
                    }

                    myTest2();
                    echo "I am a ${m} man";
                ?>
            </li>

            <li>
                <h4>GLOBAL KEYWORD MATH</h4>
                <?php 
                    $e = 10;
                    $f = 20;
                    function math(){
                        $GLOBALS["z"] = $GLOBALS["e"] + $GLOBALS["f"];
                    }
                    math();
                    echo "TOTAL ADDITION IS = $z";
                ?>
            </li>

            <br> <br>
            <li>
                <h4>Static Variable</h4>
                <?php 
                function lastFunction(){
                    static $o = 0; // declear a fist variable by using static keyword
                    echo $o;
                    $o++;
                }
                lastFunction();
                echo "<br/>";
                lastFunction();
                echo "<br/>";
                lastFunction();
                echo "<br/>";
                lastFunction();
                echo "<br/>";
                ?>
            </li>
        </ol>
    </li>
</ul>













    </main>
    <footer>we are learning php</footer>
</body>
<!-- <script>
    setTimeout(() => {
        window.location.reload(1);
    }, 5000);
</script> -->
</html>
