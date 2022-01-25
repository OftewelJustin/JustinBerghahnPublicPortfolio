<!DOCTYPE html>
<html lang="en">
<?php
require ("./php/head.php");
?>
<body>
<div class="fakeLoader"></div>

<section class="hero is-dark is-fullheight">
    <?php
    require ("./php/nav.php");
    ?>
    <div class="hero-body has-text-centered is-four-fifths">
        <div class="columns">
            <div class="column ">
                <h1 class="has-text-white has-text-weight-bold is-size-1 has-text-center ">ABOUT<span class="outline ml-4">JUSTIN BERGHAHN</span></h1>
                <p class="has-text-white">Hello my name is Justin and I am 18 years old, and I live in the Netherlands! I am now following the web development course at the graphic lyceum, in my spare time I also like to make websites! In my spare time I like to go to amusement park around the world with friends! Hopefully I was able to provide some additional information about myself!</p>
                <div class="columns mt-5">
                    <div class="column">
                    </div>
                    <div class="column">
                    </div>
                    <div class="column">
                        <button class="button is-dark"><a href="https://github.com/OftewelJustin"><i class="fab fa-github has-text-white"></i></a></button>
                    </div>
                    <div class="column">
                        <button class="button is-dark"><a href="https://www.linkedin.com/in/justin-berghahn/"><i class="fab fa-linkedin-in has-text-white"></i></a></button>
                    </div>
                    <div class="column">
                    </div>
                    <div class="column">
                    </div>
                </div>
            </div>

        </div>

    </div>



</section>
<script>
    $.fakeLoader();
</script>
<script src="js/core.js"></script>

</body>
</html>