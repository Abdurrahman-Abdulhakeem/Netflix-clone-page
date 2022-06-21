<?php
   include('session.php');
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Netflix Clone Page</title>
</head>
<body>
    <section class="showcase">
        <header class="top">
            <h1 class="logo">NETFLIX</h1>
            <a href="index.php" class="login">Sign Out<?php session_destroy()?></a>
        </header>
      
        <div class="text">
            <h1>Welcome <?php echo $login_session; ?></h1>
            <h3>Unlimited movies, TV shows, and more.</h3>
            <p>Watch anywhere. Cancel anytime.</p>
              
        </div>
</section>

    <div class="mainbar">
        <div class="img"></div>
        <bar class="text">
        <h2>Enjoy On Your TV.</h2>
        <p>Watch on smart TVs, Playstation, xbox, chromecast, Apple Tv, Blu-ray players and more.</p> 
    </bar>   
    </div>
    <div class="sidebar">
        <div class="iphone"></div>
        <bar class="text">
        <h2>Download your shows to watch offline.</h2>
        <p>Save your favorites easily and always have something to watch.</p>
    </bar>
    </div>
    <div class="aside">
        <h2>Watch everywhere.</h2>
        <p>Stream unlimited movies and TV shows on your phone, tablet, laptop and TV.</p>
    </div>
    <div class="lastbar">
        <div class="kids"></div>
        <bar class="text">
            <h2>Create profiles for kids.</h2>
            <p>Send kids on adventures with their favorite characters in a space made just for them—free with your membership.</p>
        </bar>
    </div>

    </section>
</body>
</html>