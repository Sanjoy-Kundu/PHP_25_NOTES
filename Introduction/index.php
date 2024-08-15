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
        height:500px;
        width:100%;
        background-color:#f7d4d4;
    }
    main .subTitle{
        text-align:right;
    }
</style>
<body>
<!-- php buld server : php -S localhost:8000 -->
    <header>PHP Tutorial :01</header>
    <main>
        <h4 class="subTitle">Email: sanjoykundu187@gmail.com</h4>
        <h3 class="subTitle">Connect with Sanjoy Kundu</h3>
        <h4 class="subTitle">Current Time is <?= date("h:i:s")?></h4>
        <hr>
        <hr>
        <h2>Variable</h2>
    </main>
    <footer>we are learning php</footer>
</body>
<!-- <script>
    setTimeout(() => {
        window.location.reload(1);
    }, 5000);
</script> -->
</html>
