<!DOCTYPE html>
<html>
<head>
    <title>Shelter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"-->
    <!--          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"-->
    <!--          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">-->
    <!--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <style type="text/css">


        .bubbly-button {
            font-family: 'Helvetica', 'Arial', sans-serif;
            display: inline-block;
            font-size: 1em;
            padding: 1em 2em;
            margin-top: 20px;
            margin-bottom: 20px;
            -webkit-appearance: none;
            appearance: none;
            background-color: #f59d4b;
            color: white;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            position: relative;
            transition: transform ease-in 0.1s, box-shadow ease-in 0.25s;
            box-shadow: 0 2px 25px rgba(200, 76, 21, 0.49);
        }

        .bubbly-button:focus {
            outline: 0;
        }

        .bubbly-button:before, .bubbly-button:after {
            position: absolute;
            content: '';
            display: block;
            width: 140%;
            height: 100%;
            left: -20%;
            z-index: -1000;
            transition: all ease-in-out 0.5s;
            background-repeat: no-repeat;
        }

        .bubbly-button:before {
            display: none;
            top: -75%;
            background-image: radial-gradient(circle, #ff8e4d 20%, transparent 20%), radial-gradient(circle, transparent 20%, #ff8e4d 20%, transparent 30%), radial-gradient(circle, #ff8e4d 20%, transparent 20%), radial-gradient(circle, #ff8e4d 20%, transparent 20%), radial-gradient(circle, transparent 10%, #ff0081 15%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%);
            background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%, 10% 10%, 18% 18%;
        }

        .bubbly-button:after {
            display: none;
            bottom: -75%;
            background-image: radial-gradient(circle, #ff8e4d 20%, transparent 20%), radial-gradient(circle, #ff8e4d 20%, transparent 20%), radial-gradient(circle, transparent 10%, #ff8e4d 15%, transparent 20%), radial-gradient(circle, #ff8e4d 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%);
            background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 10% 10%, 20% 20%;
        }

        .bubbly-button:active {
            transform: scale(0.9);
            background-color: #f98c17;
            box-shadow: 0 2px 25px rgba(255, 78, 27, 0.2);
        }

        .bubbly-button.animate:before {
            display: block;
            animation: topBubbles ease-in-out 0.75s forwards;
        }

        .bubbly-button.animate:after {
            display: block;
            animation: bottomBubbles ease-in-out 0.75s forwards;
        }

        @keyframes topBubbles {
            0% {
                background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;
            }
            50% {
                background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 90% 30%;
            }
            100% {
                background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%, 50% 40%, 65% 10%, 90% 20%;
                background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
            }
        }

        @keyframes bottomBubbles {
            0% {
                background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%, 70% -10%, 70% 0%;
            }
            50% {
                background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%, 105% 0%;
            }
            100% {
                background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%, 110% 10%;
                background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
            }
        }    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style> .button1 {
            background-color: white;
            color: #995e3a;
            border: none;
            text-align: left;
            display: inline-block;
            font-size: 20px;
            padding: 0px;
            cursor: pointer;
        } </style>


    <script type="text/javascript">
        window.alert = function () {
        };
        var defaultCSS = document.getElementById('bootstrap-css');

        function changeCSS(css) {
            if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }

        $(document).ready(function () {
            var iframe_height = parseInt($('html').height());
            window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
    <div class="container">
        <a class="navbar-brand" href="index.html">Shelter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Main</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="pets.php">Our pets
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="articles.html">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stats.html">Statistics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.html">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Content -->
<div class="container">
    <!-- Page Heading -->
    <h1 class="my-4">Pets
        <small>waiting for adoption</small>
    </h1>

    <div style="text-align:center"><p class="lead">Search for a pet that best matches your needs or choose one directly
            from our database here or add your own.</p>
        <button class="bubbly-button" onclick="window.location.href='/pets2.php'">Let's search a pet for you!</button>
        <button class="bubbly-button" onclick="window.location.href='/add.php'">Add your pet here</button>
        <script type="text/javascript">
            var animateButton = function (e) {

                e.preventDefault;
                //reset animation
                e.target.classList.remove('animate');

                e.target.classList.add('animate');
                setTimeout(function () {
                    e.target.classList.remove('animate');
                }, 700);
            };

            var bubblyButtons = document.getElementsByClassName("bubbly-button");

            for (var i = 0; i < bubblyButtons.length; i++) {
                bubblyButtons[i].addEventListener('click', animateButton, false);
            }
        </script>
        <br/></div>

    <?php
    #$user = 'root';
    #$password = '';
    $user = 'hakaton19_pets';
    $password = 'hakaton19_pets';
    $db = 'hakaton19_pets';
    $host = 'localhost';

    $link = mysqli_init();
    $success = mysqli_real_connect(
        $link,
        $host,
        $user,
        $password,
        $db
    );

    // SEARCH -> pets2.php


    #$ids = array(of smth);
    #$sql = "SELECT * FROM main WHERE PetID IN ('" . implode("','", $ids) . "')";
    $sql = "SELECT * FROM main";

    /*
    0 Name
    1 Age
    2 Gender
    3 Vaccinated
    4 Dewormed
    5 Sterilized
    6 Fee
    7 Description
    8 PetID
    9 Img
    10 Contacts
    11 Breed
    12 State
    13 Color_1
    14 Color_2
    15 Color_3
    */

    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result);

    mysqli_close($link);
    ?>

    <div class="row">
        <?php
        $size = sizeof($rows);
        $rands = range(0, $size - 1);
        shuffle($rands);
        #for ($i = 0; $i < $size; $i++) {
        foreach ($rands as $i) {
            echo '<div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a>';
            echo '<img class="card-img-top" src="images/' . $rows[$i][9] . '" alt="">';
            echo '</a>
                    <div class="card-body">
                        <h4 class="card-title">
                             <a style="color:darkblue">';
            echo '<form method="GET" action="onepet.php">
                                <input type="hidden" name="PetID" value="' . $rows[$i][8] . '">
                                <button class="button1" type="submit">' . $rows[$i][0] . '</button>
                                </form>';
            #echo $rows[$i][0];
            echo '</a>
                        </h4>';
            echo '<p class="card-text">';
            echo "<b>Age: </b>" . $rows[$i][1] . " (in months)<br>";
            echo "<b>Gender: </b>" . $rows[$i][2] . "<br>";
            /*
                echo "<b>Breed: </b>" . $rows[$i][11] . "<br>";
                echo "<b>Colors: </b>";
                    if ($rows[$i][13] != 'Unknown') { echo $rows[$i][13] . " "; }
                    if ($rows[$i][14] != 'Unknown') { echo $rows[$i][14] . " "; }
                    if ($rows[$i][15] != 'Unknown') { echo $rows[$i][15]; }
                    echo "<br>";
                echo "<b>Description: </b>" . $rows[$i][7] . "<br>";
                echo "<b>Fee: </b>$" . $rows[$i][6] . "<br>";
                echo "<b>The pet is: </b><br>";;
                    if ($rows[$i][3] == 'Yes') {echo "- vaccinated.<br>";}
                        elseif ($rows[$i][3] == 'No') {echo "- not vaccinated.<br>";}
                        else {echo "";}
                    if ($rows[$i][4] == 'Yes') {echo "- dewormed.<br>";}
                        elseif ($rows[$i][4] == 'No') {echo "- not dewormed.<br>";}
                        else {echo "";}
                    if ($rows[$i][5] == 'Yes') {echo "- sterilized.<br>";}
                        elseif ($rows[$i][5] == 'No') {echo "- not sterilized.<br>";}
                        else {echo "";}
                    if ($rows[$i][3] == 'Not Sure' && $rows[$i][4] == 'Not Sure' && $rows[$i][5] == 'Not Sure') {echo "- in need of health check as we don't have enough info.<br>";}
                echo "<b>Malaysian state: </b>" . $rows[$i][12] . "<br>";
                echo "<b>Contact the owner(s): </b>" . substr($rows[$i][10], 0, -1) . "<br>";
                echo "<b>Pet ID: </b>" . $rows[$i][8] . "<br>";
            */
            echo '</p>';
            echo '</div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>
<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
        <small>This site was specially made for the ITGS Hakaton 2019</small>
    </div>
</footer>
</body>
</html>
