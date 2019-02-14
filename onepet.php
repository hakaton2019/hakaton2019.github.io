<!DOCTYPE html>
<html>
<head>
    <title>Shelter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css\pets.css">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
    <div class="container">
        <a class="navbar-brand" href="index.html">Shelter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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

    <!-- Page Heading -->
    <h1 class="my-4">
        <?php
            if (substr($rows[0][0], -1) != 's') { echo $rows[0][0] . "'s"; }
            else { echo $rows[0][0] . "'"; }
        ?> 
        <small>profile</small>
    </h1>

    <div class="row">
    <?php
        echo '<div class="col-lg-4 col-sm-6 mb-4">
            <div class="card h-100">
                <a>';
                    echo '<img class="card-img-top" src="images/' . $rows[0][9] . '" alt="">';
                echo '</a>
                <div class="card-body">
                    <h4 class="card-title">
                         <a style="color:darkblue">';
                            echo $rows[0][0];
                        echo '</a>
                    </h4>';
                    echo '<p class="card-text">';
                        echo "<b>Age: </b>" . $rows[0][1] . " (in months)<br>";
                        echo "<b>Gender: </b>" . $rows[0][2] . "<br>";
                        echo "<b>Breed: </b>" . $rows[0][11] . "<br>";
                        echo "<b>Colors: </b>";
                            if ($rows[0][13] != 'Unknown') { echo $rows[0][13] . " "; }
                            if ($rows[0][14] != 'Unknown') { echo $rows[0][14] . " "; }
                            if ($rows[0][15] != 'Unknown') { echo $rows[0][15]; }
                            echo "<br>";
                        echo "<b>Description: </b>" . $rows[0][7] . "<br>";
                        echo "<b>Fee: </b>$" . $rows[0][6] . "<br>";
                        echo "<b>The pet is: </b><br>";;
                            if ($rows[0][3] == 'Yes') {echo "- vaccinated.<br>";}
                                elseif ($rows[0][3] == 'No') {echo "- not vaccinated.<br>";}
                                else {echo "";}
                            if ($rows[0][4] == 'Yes') {echo "- dewormed.<br>";}
                                elseif ($rows[0][4] == 'No') {echo "- not dewormed.<br>";}
                                else {echo "";}
                            if ($rows[0][5] == 'Yes') {echo "- sterilized.<br>";}
                                elseif ($rows[0][5] == 'No') {echo "- not sterilized.<br>";}
                                else {echo "";}
                            if ($rows[0][3] == 'Not Sure' && $rows[0][4] == 'Not Sure' && $rows[0][5] == 'Not Sure') {echo "- in need of health check as we don't have enough info.<br>";}
                        echo "<b>Malaysian state: </b>" . $rows[0][12] . "<br>";
                        echo "<b>Contact the owner(s): </b>" . substr($rows[0][10], 0, -1) . "<br>";
                        echo "<b>Pet ID: </b>" . $rows[0][8] . "<br>";
                    echo '</p>';
                echo '</div>
            </div>
        </div>';
    ?>
    </div>

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <!--li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li-->
        <li class="page-item">
            <!--a class="page-link" href="pets.php">1</a-->
            <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
            <script src="//yastatic.net/share2/share.js"></script>
            <div style="text-align:center" class="ya-share2" data-services="vkontakte,twitter,reddit,evernote,linkedin,tumblr,telegram"></div>
        </li>
        <!--li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li-->
    </ul>

</div>
<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
        <small>This site was specially made for the ITGS Hakaton 2019</small>
    </div>
</footer>
</body>
</html>
