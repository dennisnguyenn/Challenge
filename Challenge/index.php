<!--
* naam: <Dennis Nguyen>
* groep: 6C
* datum: 17-2-2018
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #b08010!important;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Memory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Getallenrij</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Picturepuzzel</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0 topnav-right">
                <a href="#"><i class="fas fa-sign-out-alt"></i></a>

            </form>
        </div>
    </nav>
</header>

<body>

<div class="container-fluid">
    <div class="row" style="margin-top:1rem">
        <div class="col-sm-6 monroe-image-sm-show">
            <img id="imgClickAndChange" onclick="changeImage()" src="assets/img/monroe_300x300_1.jpg" class="mx-auto d-block">
        </div>
        <div class="col-sm-6 col monroe-image-sm-hidden">
            <img src="assets/img/monroe_300x300_2.jpg" class="mx-auto d-block .hidden-xs">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h3 class="monroe_title">Marilyn Monroe</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p>Marilyn Monroe – Norma Jeane – had een moeilijke jeugd. Haar moeder was Gladys Pearl Mortenson, geboren
                Monroe,[1] en was eerder gehuwd met John Baker.
                Norma Jeanes moeder liet zich nog naar hem Gladys Sasha Baker noemen en liet Norma Jeane ook met deze
                achternaam dopen.
                Gladys Baker was weliswaar in 1924 getrouwd met Martin E. Mortensen, maar ze leefden al gescheiden
                voordat Gladys zwanger werd.
                [2] Mogelijk was Norma Jeanes vader Charles Stanley Gifford.[3] Gifford en Gladys Baker werkten beiden
                in de snijstudio van RKO Pictures,
                waar Baker Giffords ondergeschikte was. Gladys Baker was drugsverslaafd en liet de opvoeding van Marilyn
                over aan haar vrienden Albert en Ida Bolender.
                Toen Baker na een lange tijd met haar dochter in een oud krot ging wonen,
                kreeg ze een zenuwinzinking waardoor ze helemaal op hol sloeg (volgens ooggetuigen zou ze op het dak
                geklommen zijn en zo de hele buurt bij elkaar
                geschreeuwd hebben).</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nXXVMcyy_Ag"></iframe>
    </div>
</div>
<div class="container-fluid">
    <div class="col-sm-12 align-items-center">
        <table>
            <tr>
                <th style="text-align:center;" colspan="12"> Filmografie als acteur</th>
            </tr>
            <tr>
                <td>1947</td>
                <td>The Shocking Miss Pilgrim</td>
                <td>komedie</td>
            </tr>
            <tr>
                <td>1948</td>
                <td> Scudda Hoo! Scudda Hay!</td>
                <td>romantiek</td>
            </tr>
            <tr>
                <td>1950</td>
                <td>A Ticket to Tomahawk;</td>
                <td>Western</td>
            </tr>
        </table>
    </div>
    <div class="col-sm-12 align-items-center">
        <p style="background-color:#b08010;"> Dit is de footer</p>
    </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/js.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"> </script>
<script src="assets/js/bs-animation.js"></script>
</body>
</html>