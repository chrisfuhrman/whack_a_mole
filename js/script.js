<script>

(function() {


    var whackGame, catSelection, scoreCount, score;
    var cat = $('#game-container').children();
    var btnAgain = $('#btn-again');
    var btnStart = $('#btn-start');
    var btnStop = $('#btn-stop');



    // Function to generate a random # btwn 0 - 28
    function randomNum() {
        ranNum = Math.floor(Math.random() * 29 );

        return ranNum;
    }

    function playSound() {
        var sound = $('#cat-audio')[0];
        sound.load();
        sound.play();
    }

    // Function to stop the game (remove cats)
    function stopGame() {

        // stops cats from appearing
        clearInterval(whackGame);

        // After 1 sec, slide up the score and hide the stop btn
        setTimeout(function () {
            $('#score, #timer').slideUp();
            btnStop.hide();
        }, 1000);
        
        // After 1.5 secs, hide start btn, show play again button, and final content for user
        setTimeout(function () {
            btnAgain.show();
            btnStart.hide();
            // final content for user
            $('#final-message').text('You are awesome!');
            $('#final-score').text('You scored ' + scoreCount + ' points');
        }, 1500);

    }

    // Function to run the whack a cat game
    function runGame() {

        var interval = 1000;
        var timeStart = 60;
        var endTime = 0;
        scoreCount = 0;

        // set the 
        whackGame = setInterval(function () {
            var timer = $('#timer');
            var score = $('#score');
            var scoreBoard = $('#score, #timer');

            if (timeStart <= endTime ) {
                score.text('Score | ' + scoreCount);
                timer.text('Timer | ' + timeStart);
                stopGame();

            } else {

                score.text('Score | ' + scoreCount);
                timer.text('Timer | ' + timeStart);
                // Slide score down
                scoreBoard.slideDown();

                timeStart--;
                ranNum = randomNum();
                // dispaly the relevant cat box based on the random num
                    cat.each( function(index) {
                        if (ranNum == index) {
                            catSelection = $(cat[index]);
                            catSelection.children()
                                .fadeIn(700)
                                .delay(700)
                                .fadeOut();
                            catSelection.off();
                        }

                    });

            }


        }, interval);

        // functionality runs once you've whacked a cat
        $('.cat').on('click', function() {
            $(this).hide();
            // remove event listener on click
            $(this).off();
            // add 1 point to scoreCount when cat is clicked
            scoreCount++;
            playSound();
        });

    }


    // Start the game by clicking on the START button
    btnStart.on('click', function() {
        $(this).hide()
            .siblings().show();
        // run runGame function upon click
        runGame();
    });

    // Stop the game by clicking the STOP button
    btnStop.on('click', function() {
        // run stopGame function to end game
        stopGame();
    });

    // Restart the game by clicking on the PLAY AGAIN button
    btnAgain.on('click', function() {
        $(this).hide();
        $('#final-content').hide();
        btnStop.show();
        // run runGame function upon click
        runGame();
    });


})();



</script>
