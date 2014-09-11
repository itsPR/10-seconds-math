<!DOCTYPE html>
<html class="no-js" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>10 seconds of math. be fast. be clever.</title>
        <meta name="description" content="A professional brain trainer. One that is both efficient and fun to use.
We want to show you that mathematics is far from boring. It's awesome! It's fun! It makes sense.
Don't lollygag around on the web or with other dull 'learning' apps. You just found what you were looking for. A professional brain trainer, one that is both efficient and fun to use.
Strengthen your mental abilities, improve your ability to stay concentrated over long periods of time and sharpen your perception skills.
You won't regret it.
We guarantee, if you make it through the entire plan you'll be better than you've ever been. Pinky promise!">


        <meta name="author" content="Troubi Entertainment">
        <meta name="keywords" content="10 seconds of math, mental math trainer, math practice, mental arithmetic, mental calculations, math trainer, online, free, no download, mathematik kopfrechentrainer, mathe trainer online, mathe üben, kopfrechnen üben" />


        <meta property="og:image" content="http://www.mental-math-trainer.com/img/mental-math-trainer.png" />
        <meta property="og:title" content="10 seconds of math. be fast. be clever" />
        <meta property="og:description" content="10 seconds of math. be fast. be clever. http://mental-math-trainer.com" />
        <meta property="og:url" content="http://www.mental-math-trainer.com" />

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/mental-math-trainer-favicon.ico?v=2">

        <link rel="canonical" href="http://www.mental-math-trainer.com" /> <!-- self for twitter -->
        <link rel="canonical" href="https://play.google.com/store/apps/details?id=com.troubi.kingofmath" />
        <link rel="canonical" href="https://play.google.com/store/apps/details?id=com.troubi.mathtricks" />
        <link rel="canonical" href="https://www.troubi.com" />
        <link rel="canonical" href="https://www.michael-jakob.com" />
        <link rel="canonical" href="https://www.metahill.com" />


        <!-- Latest compiled and minified Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">


        <!-- The noUiSlider stylesheet -->
        <link rel="stylesheet" href="css/jquery.nouislider.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">


        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/buttons.css"> 
        <link rel="stylesheet" href="css/share.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>



    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- <div id="fb-root"></div> -->
    
    <div class="jumbotron">
      <div id="title">
          <img src="img/mental-math-trainer.png" alt="Mental Math Trainer App Icon" />
          <h1 id="text-title">10 seconds of math</h1>
      </div>
      <div id="settings-and-stats" class="container">
        <div id="settings" class="white-box">
            <h2 id="text-selectrange">Number limit</h2>
            <div id="math-range-slider"></div>

            <p id="text-operations">&nbsp;</p>
            <div id="div-operations">
                <ul class="nobullets">
                    <li><label><input type="checkbox" checked="checked" value="add"> + <span id="text-op-add">Addition</span></label></li>
                    <li><label><input type="checkbox" value="sub"> - <span id="text-op-sub">Subtraction</span></label></li>
                    <li><label><input type="checkbox" value="pow"> x&sup2; <span id="text-op-pow">Powers</span></label></li>
                </ul>
                <ul class="nobullets">
                    <li><label><input type="checkbox" value="mul"> &times; <span id="text-op-mul">Multiplication</span></label></li>                    
                    <li><label><input type="checkbox" value="div"> &divide; <span id="text-op-div">Division</span></label></li>
                    <li><label><input type="checkbox" value="sqrt"> &radic;x <span id="text-op-pow">Square roots</span></label></li>
                </ul>
            </div>
        </div>

        <div id="stats" class="white-box">
            <p id="time-box">
                <span id="time-left">10</span>
                <span id="time-left-text">seconds left</span>
                <span id="time-left-indicator"></span>
            </p>
            <div id="results">
                <h2>Results
                    <img src="img/info.png" class="info" 
                         class="btn btn-default" 
                         data-toggle="tooltip"
                         data-placement="right"
                         data-html="true"
                         title="<strong>&#8212; score factors &#8212;</strong><br>correct answered<br>number limit<br>number of operators enabled" />
                </h2>
                

                <p class="description"></p>


                <div id="sharebuttons">
                    <section>
                      <div class="sharebutton">
                        <a class="twitter-share-button" href="https://twitter.com/share" data-text="" data-via="" data-hashtags="mathwiz, math">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                      </div>

                        <div class="cover">
                            <div class="innie"></div>
                            <div class="spine"></div>
                            <div class="outie"></div>
                        </div>
                        <div class="shadow"></div>
                    </section>

                    <section class="sharefacebook">
                      <div class="sharebutton">
                      <img id="facebookshare" src="img/fb-share.png" />
                      <!-- <div id="facebookshare" data-href="http://www.mental-math-trainer.com/"></div> -->
                        </div>
                            <div class="cover">
                            <div class="innie"></div>
                            <div class="spine"></div>
                            <div class="outie"></div>
                        </div>
                        <div class="shadow"></div>
                    </section>
                </div>

            </div>
        </div>
        <p id="start-quiz"><a class="button blue">Play Again</a></p>
      </div>
    </div>

    <div id="questionbox" class="jumbotron">
        <p id="question">&nbsp;</p>
        <div id="answerbox">
          <div class="input-group">
            <input id="question-answer" pattern="[0-9]{1, 4}" autofocus placeholder="your answer" type="tel" class="form-control">
            <span class="input-group-btn">
              <button id="submit-answer" class="btn btn-default" type="button">&#x21a9;</button>
            </span>
          </div>
        </div>
    </div>

    <div id="social-container" class="container">
      <div id="viewport"></div>
      <footer>
        <p>&copy; <a href="http://troubi.com">Troubi Entertainment</a> 2014</p>
      </footer>
    </div>

    <span style="display:none">
    <?php
        $positive = preg_replace('/\n/', '|', file_get_contents('raw/positive.txt'));
        $negative = preg_replace('/\n/', '|', file_get_contents('raw/negative.txt'));
        echo "<span id='jsdata-positive'>$positive</span>";
        echo "<span id='jsdata-negative'>$negative</span>";
    ?>
    </span>

    <!-- fork me on github -->
    <a id="github-forkme" target="_blank" href="https://github.com/michaeljakob/10-seconds-math">
        <img src="img/forkme-github.png" alt="Fork me on GitHub">
    </a>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/setup.js"></script>
    <script src="js/setdefaults.js"></script>
    <script src="js/localization.js"></script>

    <script src="js/utility.js"></script>
    <script src="js/questionfactory.js"></script>
    <script src="js/main.js"></script>

    <!-- The noUiSlider script -->
    <script src="js/jquery.nouislider.min.js"></script>
    <script src="js/jquery.color.js"></script>


    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-52396561-1');ga('send','pageview');
    </script>

  </body>
</html>
