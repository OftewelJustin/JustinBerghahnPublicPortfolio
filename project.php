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
        <div class="column ">
            <p class="has-text-center has-text-weight-bold has-text-white is-size-3"><span class="slide-right">2021</span></p>
            <h1 class="has-text-white has-text-weight-bold is-size-1 has-text-center hover-effect-2 "><a href="./demo/escapecraft/index.php">EscapeCraft</a></h1>
        </div>
        <div class="column ">
            <p class="has-text-center has-text-weight-bold has-text-white is-size-3"><span class="">2021</span></p>
            <h1 class="has-text-white has-text-weight-bold is-size-1 has-text-center hover-effect-2 "><a href="./demo/api-model/index.php">API Model</a></h1>
        </div>
    </div>
</section>
<script>
    $.fakeLoader();
</script>
<script src="js/core.js"></script>

</body>
</html>
