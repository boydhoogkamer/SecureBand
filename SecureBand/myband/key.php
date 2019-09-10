<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="key.css">
    <title>Key</title>
</head>
<body>
    <div class="login">
    <div class="logo">
        <img src="img/boydlogo.png" alt="logo">
        
        <form action="checkkey.php" method="post">
                <p class="welcome">Welcome summoner, fill in your key to continue.<br></p>
                <input type='password' id='' placeholder="Key here..." name='key' value='' style="width: 290px; height: 20px;"><br>
                <br>
                <input type="image" name="submit" src="img/usekey.jpg" border="0" alt="Submit" style="width: 300px;" />

        </form>
        <?php if(isset($_GET['error'])): ?>
        <div class="foutekey"><strong>Wrong key!</strong></div>
        <?php endif?>
    </div>
    </div>
    <script src="key.js"></script>
</body>     
</html>