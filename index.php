<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <!-- <link rel="icon" href="/favicon.ico"> -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/mole.css">

    <!-- <link rel="stylesheet" type="text/css" href="css/site.css">  -->

    <link href='http://fonts.googleapis.com/css?family=Knewave' rel='stylesheet' type='text/css'>

</head>

<body>

    <div id="board">
        <span class="display-hide" id="score"></span>
        <span class="display-hide" id="timer"></span>
    </div>

<div class="container">
    
    <h1>Whack a cat</h1>

    <div id="button-container">
        <button type="button" class="btn btn-primary btn-lg" id="btn-start">Start Game</button>
        <button type="button" class="btn btn-primary btn-lg display-hide" id="btn-stop">Stop Game</button>
    </div>

    <div id="final-content">
        <p id="final-message"></p>
        <p id="final-score"></p>
    </div>

   <div id="button-container">
        <button type="button" class="display-hide btn btn-primary btn-lg" id="btn-again">Play again?</button>
    </div>
    
    <audio id="cat-audio" src="aud/cat.mp3"></audio>
    
    <div id="game-container">

        <div class="grid custom-cursor" id="box-0">
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class="grid" id="box-1">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-2">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-3">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-4">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-5">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-6">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-7">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-8">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-9">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-10">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-11">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-12">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-13">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-14">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-15">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-16">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-17">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-18">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-19">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-20">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
        <div class ="grid" id="box-21">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
       <div class ="grid" id="box-22">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
       <div class ="grid" id="box-23">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
       <div class ="grid" id="box-24">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
       <div class ="grid" id="box-25">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
       <div class ="grid" id="box-26">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>
       <div class ="grid" id="box-27">
            
            <img src="img/cat_small.png" class="display-hide cat">
        </div>

        <div class="clear"></div>

    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<?php require_once 'js/script.js'; ?>

</body>
</html>

