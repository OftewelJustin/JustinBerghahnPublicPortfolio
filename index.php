<!DOCTYPE html>
<html lang="en">
<?php
require ("./php/head.php");
?>
<body>


<section class="hero is-dark is-fullheight">
    <div class="fakeLoader"></div>
    <?php
        require ("./php/nav.php");
    ?>

    <div class="hero-body has-text-centered">
        <div class="column">
            <h1 class="has-text-white has-text-weight-bold is-size-1 has-text-center hover-effect-1 glitch"><a href="https://github.com/OftewelJustin">Hi, I'm Justin 👋</a></h1>
            <p class="has-text-white has-text-weight-bold is-size-4 has-text-center hover-effect-1">Welcome to my Portfolio!</p>
        </div>
    </div>
    <script>
        $.fakeLoader();
    </script>
    <script src="js/core.js"></script>
</section>
</body>
</html>