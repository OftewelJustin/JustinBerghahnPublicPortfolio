<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Minecraft Damage Value Calculator</title>

    <!-- Main CSS-->
    <link rel="stylesheet" href="./css/bulma.css">

</head>

<body>
<section class="hero is-light is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="box">
                <div class="login-form">
                    <div class="form-group">
                        <h3 class="title has-text-black-bis">Diamond Tools Values</h3>
                        <label>Please enter a number</label>
                        <input type="text" value="0" id="getal2" placeholder="Please enter a number" class="input " />
                    </div>
                    <button class="button is-link mt-5" onclick="vermenigvuldigen()">Calculate</button>
                    <p class="center">Result: <span id="uitkomst"></span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var uitkomstElement = document.getElementById("uitkomst");
    var getal1 = 0.0006402048655569782;
    var getal2 = 0;



    function vermenigvuldigen() {
        haalGetallenOp();
        uitkomstElement.innerHTML = getal1 * getal2;
    }

    function haalGetallenOp() {
        getal2 = Number(document.getElementById("getal2").value);

    }
</script>


</body>

</html>
<!-- end document-->
