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
    <header>PHP Tutorial :02 (Print)</header>










    <main>
        <h2>PHP Echo / Print</h2>
        <h3>PHP Echo Statement Display Test</h3>
        <?php 
            $info1 = "We are learning PHP";
            $info2 = "Learn and fun with PHP";
            $version = "8.1.2";
            $language = "PHP";
            $allLanguage = "python";
            echo $info1;
            echo "<br/>";
            echo $info2;
            echo "<br/>";
            echo "<h1>PHP VERSION IS ${version}</h1>";
            echo "<br/>";
            echo $version;
            echo "<br/>";
            echo "We are learning ${language} language.";
            echo "<br/>";
            echo "I know $language and I already finished $allLanguage";
            echo "<br/>";
            echo "My favourite language is ".$language;

        ?>
    </main>





















    <footer>we are learning php</footer>
</body>

</html>
