<!DOCTYPE html>
<html>
<head>
    <title>Shelter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>
    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="//yastatic.net/share2/share.js"></script>
    <style>
        body {
            background: url('http://spb.modulkartiny.ru/wp-content/uploads/2017/08/modul-naya-kartina-koty-mnogo-kotov-1024x576.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
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

    $sql = "SELECT * FROM main WHERE PetID='" . $_GET['PetID'] . "'";

    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result);

    mysqli_close($link);
    ?>


    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <!-- Page Heading -->
                <h1 class="my-4">
                    <?php
                    if (substr($rows[0][0], -1) != 's') {
                        echo $rows[0][0] . "'s";
                    } else {
                        echo $rows[0][0] . "'";
                    }
                    ?>
                    <small>profile</small>
                </h1>

                <?php
                echo '<div style="text-align: center;"><a>';
                echo '<img src="images/' . $rows[0][9] . '" alt="">';
                echo '</a>
                <div>
                    <h4 class="card-title">
                         <a style="color:darkblue">';
                echo $rows[0][0];
                echo '</a>
                    </h4>';
                echo '<p>';
                echo "<b>Age: </b>" . $rows[0][1] . " (in months)<br>";
                echo "<b>Gender: </b>" . $rows[0][2] . "<br>";
                echo "<b>Breed: </b>" . $rows[0][11] . "<br>";
                echo "<b>Colors: </b>";
                if ($rows[0][13] != 'Unknown') {
                    echo $rows[0][13] . " ";
                }
                if ($rows[0][14] != 'Unknown') {
                    echo $rows[0][14] . " ";
                }
                if ($rows[0][15] != 'Unknown') {
                    echo $rows[0][15];
                }
                echo "<br>";
                echo "<b>Description: </b>" . $rows[0][7] . "<br>";
                echo "<b>Fee: </b>$" . $rows[0][6] . "<br>";
                echo "<b>The pet is: </b><br>";;
                if ($rows[0][3] == 'Yes') {
                    echo "- vaccinated.<br>";
                } elseif ($rows[0][3] == 'No') {
                    echo "- not vaccinated.<br>";
                } else {
                    echo "";
                }
                if ($rows[0][4] == 'Yes') {
                    echo "- dewormed.<br>";
                } elseif ($rows[0][4] == 'No') {
                    echo "- not dewormed.<br>";
                } else {
                    echo "";
                }
                if ($rows[0][5] == 'Yes') {
                    echo "- sterilized.<br>";
                } elseif ($rows[0][5] == 'No') {
                    echo "- not sterilized.<br>";
                } else {
                    echo "";
                }
                if ($rows[0][3] == 'Not Sure' && $rows[0][4] == 'Not Sure' && $rows[0][5] == 'Not Sure') {
                    echo "- in need of health check as we don't have enough info.<br>";
                }
                echo "<b>Malaysian state: </b>" . $rows[0][12] . "<br>";
                echo "<b>Contact the owner(s): </b>" . substr($rows[0][10], 0, -1) . "<br>";
                echo "<b>Pet ID: </b>" . $rows[0][8] . "<br>";
                echo '</p>';
                echo '</div>
            
        </div>';
                ?>
            </div>
        </div>
    </div>


</div>
<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div style="text-align:center" class="ya-share2" data-services="vkontakte,facebook,twitter,whatsapp,telegram"></div>
    <div class="container text-center">
        <small>This site was specially made for the ITGS Hakaton 2019</small>
    </div>
</footer>
</body>
</html>
