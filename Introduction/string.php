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
    <header>PHP Tutorial :04 (String)</header>
    <main>
        <h2>PHP String</h2>
    <!--php string started-->
        <?php 
        const brk = "<br/>";
            $name = "Sanjoy";
            $title = "Kundu";
            $address = "Madaripur Sadar 7902";
            $mobile = "01873428918";
            $age =22;
            echo "My name is $name"."<br/>";
            echo "My name is ".$name." ".$title."<br/>";
            echo "Im ${age} years old"."<br/>";
            echo "Hello $name";
        ?>
        <hr><hr>




      <!--php string count-->
        <h2>Strcount</h2>
        <?php
            $country = "Bangladesh";
            $wordCount = "Hello Bangladesh";
            $result = strlen($country);
            $word_count = str_word_count($wordCount);
            echo "Name ".$country."<br/>";
            echo "Total length is ".$result."<br/>";
            echo "Total word is ",$word_count."<br/>";
        ?>





        <!--php string uppercase-->
        <h2>PHP Uppercase</h2>
        <?php
        $info = "i am form Bangladesh";
        $infoResult = strtoupper($info);
        echo $infoResult;
        ?>

        <!--php string lowercase-->
        <h2>PHP Lowercase</h2>
        <?php
        $info2 = "Im form CANADA";
        $infoResult2 = strtolower($info2);
        echo $infoResult2;
        ?>

       <!--php string reverse-->
       <h2>PHP Reverse</h2>
       <?php 
       $info3 = "I am a good Boy";
       $resultInfo3 = strrev($info3);
       echo $resultInfo3;
       ?>



      <!--PHP string trim-->
      <h2>Php String trim</h2>
      <?php 
      $firstName = "Sanjoy";
      $lastName = "Kundu";
      echo trim($firstName);
      ?>
 

    </main>

    <footer>we are learning php</footer>
</body>

</html>
