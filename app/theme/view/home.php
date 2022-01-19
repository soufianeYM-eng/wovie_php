<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ASSETS.'/css/homeStyle.css';?>">
    <link rel="shortcut icon" href="<?php echo ASSETS.'/img/favicon.png';?>">
    <title>Aeonnovel - Homepage</title>
</head>
<body>
    <header class="showcase">
        <div class="showcase-top">
            <img src="<?php echo ASSETS.'/img/logoAeo.png';?>" alt="Aeonnovel Logo">
            <a href="<?php echo APP.'/login';?>" class="btn btn-signIn">Sign in</a>
        </div>
        <div class="showcase-content">
            <h1 class="big-title">Novels and lightnovels in audiobooks</h1>
            <div class="flex">
                <h3 class="header-sub-title" id="word"></h3><p class="header-sub-title blink typed-cursor">|</p>
            </div>
            <p class="ready">Ready to start ? Enter your email to begin or restart your account</p>
            <!-- <div class="get-started">
                <input class="email" type="email" name="email" id="mail" placeholder="Email address" required>
                <button class="button" type="submit" id="btn-started" class="btn btn-lg">Get started</button>
            </div> -->
            <div class="all-get">
                <form class="get-started" method="POST">
                    <input type="hidden" name="_ACTION" value="get-started">
                    <input type="email" name="email" id="mail" placeholder="Email address" required>
                    <button type="submit" id="btn-started" class="button btn btn-lg" >Get started</button>
                </form>
                <div class="quote-div">
                    <img class="quote-trial" src="<?php echo ASSETS.'/img/quote_7_day.png'; ?>">
                </div>
            </div>
        </div>
    </header>

    <!-- <section class="style-cards">
        <div class="card-0">
            <img src="<?php echo ASSETS.'/img/2.jpg';?>" alt="Aeonnovel Mobile">
            <div class="desc-0">
                <h1>Create profiles for kids.</h1>
                <h3>Send kids on adventures with their favourite characters in a space made just for them—free with your membership.</h3>
            </div>
        </div>
        <div class="card-1">
            <div class="desc-1">
                <h1>Enjoy on your TV.</h1>
                <h3>Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players and more.</h3>
            </div>
            <img src="<?php echo ASSETS.'/img/tv.png';?>" alt="Aeonnovel TV">
            <video class="video-1" autoplay="" playsinline="" muted="" loop=""><source src="<?php echo ASSETS.'/img/1.m4v';?>" type="video/mp4"></video>
        </div>
        <div class="card-2">
            <img src="<?php echo ASSETS.'/img/3.jpg';?>" alt="Aeonnovel Mobile">
            <div class="desc-2">
                <h1>Download your shows to watch offline.</h1>
                <h3>Save your favourites easily and always have something to watch.</h3>
            </div>
        </div>
        <div class="card-3">
            <div class="desc-3">
                <h1>Watch everywhere.</h1>
                <h3>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</h3>
            </div>
            <img src="<?php echo ASSETS.'/img/4.png';?>" alt="Device-Pile-In">
            <video class="video-2" autoplay="" playsinline="" muted="" loop=""><source src="<?php echo ASSETS.'/img/2.m4v';?>" type="video/mp4"></video>
        </div>
    </section>

    <section class="lastsec">
        <div class="faq">
            <h1>Frequently Asked Questions</h1>
            <ul class="questions">
                <li>What is Aeonnovel?</li>
                <li>How much does Aeonnovel cost?</li>
                <li>Where can I watch?</li>
                <li>How do I cancel?</li>
                <li>What can I watch on Aeonnovel?</li>
                <li>Is Aeonnovel good for kids?</li>
            </ul>
        </div>
    </section>


    <footer class="footer">
        <p>Questions? Call 000-800-040-1843</p>
        <div class="footer-cols">
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Speed Test</a></li>
            </ul>
            <ul>
                <li><a href="#">Help Centre</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Cookie Preferences</a></li>
                <li><a href="#">Watch for Free</a></li>
            </ul>
            <ul>
                <li><a href="#">Account</a></li>
                <li><a href="#">Ways to Watch</a></li>
                <li><a href="#">Corporate Information</a></li>
                <li><a href="#">Legal Notices</a></li>
            </ul>
            <ul>
                <li><a href="#">Media Centre</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Aeonnovel Originals</a></li>
            </ul>
        </div>
    </footer> -->
</body>
</html>

<script>

    var started = document.getElementById("btn-started");
    var email = document.getElementById("mail");
    started.addEventListener('click',function(){
        localStorage.setItem("user-mail", email.value);
        //window.location.replace('/register');
    })
    const words = ["Unlimited access","More Than 5000 Hours Of Listening"];
    let i = 0;
    let timer;

    function typingEffect() {
        let word = words[i].split("");
        var loopTyping = function() {
            if (word.length > 0) {
                document.getElementById('word').innerHTML += word.shift();
            } else {
                setTimeout(() => {
                    deletingEffect();
                }, 2300);
                return false;
            };
            timer = setTimeout(loopTyping,150);
        };
        loopTyping();
    };

    function deletingEffect() {
        let word = words[i].split("");
        var loopDeleting = function() {
            if (word.length > 0) {
                word.pop();
                document.getElementById('word').innerHTML = word.join("");
            } else {
                if (words.length > (i + 1)) {
                    i++;
                } else {
                    i = 0;
                };
                typingEffect();
                return false;
            };
            timer = setTimeout(loopDeleting,45);
        };
        loopDeleting();
    };

    typingEffect();


</script>