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
    <style> .button1 { background-color: white; color: darkblue; border: none; text-align: left; display: inline-block; font-size: 20px; padding: 0px; cursor: pointer; } </style>
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
    <!-- Page Heading -->
    <h1 class="my-4">Pets
        <small>waiting for adoption</small>
    </h1>

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
			echo '<div style="text-align:center"><p class="lead">Search for a pet that best matches your needs or choose one directly from our database here.';
			echo '<form action="pets2.php"><input class="button" type="submit" name="enter" value="Search"/></form></p></div>';

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
        $rands = range(0, $size-1);
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

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="pets.php">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>

</div>
<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
        <small>This site was specially made for the ITGS Hakaton 2019</small>
    </div>
</footer>
</body>
</html>
