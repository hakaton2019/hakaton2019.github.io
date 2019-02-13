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
    <!-- Page Heading -->
    <h1 class="my-4">Pets
        <small>waiting for adoption</small>
    </h1>

    <div style="text-align:center"><h3><small>Search for a pet that best matches your needs!</small></h3></div>
    <img class="img-fluid img-thumbnail" src="http://www.rentcafe.com/dmslivecafe/UploadedImages/fd506291-25cb-4339-b94e-14b01fef1bea.jpg">

        <?php
            $user = '';
            $password = '';
            $db = '';
            $host = '';

            $link = mysqli_init();
            $success = mysqli_real_connect(
               $link,
               $host,
               $user,
               $password,
               $db
            );

            // SEARCH

            $cols = array('Gender', 'Breed', 'Fee', 'Sterilized', 'State');

            echo '<table border="1" align="center"><tr>';
            foreach ($cols as &$col) {
                echo '<th align="center">' . $col . '</th>';
            }
            echo '</tr>';

            /*
            echo '<table border="1" align="center">';
            // Gender
                $q = "SELECT DISTINCT Gender FROM main ORDER BY Gender DESC";
                $res = mysqli_query($link, $q);
                
                echo '<tr><td>';
                echo '<form method="POST">';
                @$g = $_POST['Gender'];
                echo '<select name="Gender">';
                #echo '<option selected></option>';
                while ($row = mysqli_fetch_array($res)) {
                    echo '<option value="' . $row['Gender'] . '">' . $row['Gender'] . '</option>';
                }
                echo '</select>';

                echo '<p><div style="text-align:center">
                    <button class="button" type="submit" id="submit">Find</button>
                </div></p>';

                echo '</form></td></tr></table>';
            // Breed
            // Fee
            // Sterilized
            // State

            $sql = "SELECT * FROM main WHERE Gender='" . $g . "'";
            $result = mysqli_query($link, $sql);
            $rows = mysqli_fetch_all($result);
            */

            echo '<p><tr>';

            foreach ($cols as &$col) {
                
                $q = "SELECT DISTINCT " . $col . " FROM main ORDER BY " . $col . " DESC";
                $res = mysqli_query($link, $q);

                echo '<td>';
                echo '<form method="POST">';

                // POSTs
                if ($col == 'Gender') { @$g = $_POST['Gender']; }
                elseif ($col == 'Breed') { @$b = $_POST['Breed']; }
                elseif ($col == 'Fee') { @$f = $_POST['Fee']; }
                elseif ($col == 'Sterilized') { @$ster = $_POST['Sterilized']; }
                elseif ($col == 'State') { @$stat = $_POST['State']; }

                echo '<select name="' . $col . '">';

                echo '<option selected>Any</option>';
                while ($row = mysqli_fetch_array($res)) {
                    echo '<option value="' . $row[$col] . '">' . $row[$col] . '</option>';
                }
                echo '</select></td>';
            }
            echo '</tr></table></p>';

            echo '<p><div style="text-align:center">
                <button class="button" type="submit" id="submit">Find</button>
            </div></p>';

            echo '</form>';

            // currently in development

            // Construct an SQL query!
            $sql = "SELECT * FROM main WHERE ";

            if ($g != 'Any') {
                $sql .= "Gender='";
                $sql .= $g;
                $sql .= "'";
            }
            elseif ($b != 'Any') {
                $sql .= "Breed='";
                $sql .= $b;
                $sql .= "'";
            }
            elseif ($f != 'Any') {
                $sql .= "Fee='";
                $sql .= $f;
                $sql .= "'";
            }
            elseif ($ster != 'Any') {
                $sql .= "Sterilized='";
                $sql .= $ster;
                $sql .= "'";
            }
            elseif ($stat != 'Any') {
                $sql .= "State='";
                $sql .= $stat;
                $sql .= "'";
            }

            // currently in development

            #$sql = "SELECT * FROM main WHERE Gender='" . $g . "' AND Breed='" . $b . "' AND Fee='" . $f . "' AND Sterilized='" . $ster . "' AND State='" . $stat . "'";
            @$result = mysqli_query($link, $sql);
            if (!$result) {
                echo '<div style="text-align:center"><h3>No results matching your criteria.</h3></div>';
            }
            @$rows = mysqli_fetch_all($result);

        ?>

    <div class="row">
    <?php
        @$size = sizeof($rows);
        for ($i = 0; $i < $size; $i++) {
            echo '<div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a>';
                        echo '<img class="card-img-top" src="images/' . $rows[$i][9] . '" alt="">';
                    echo '</a>
                    <div class="card-body">
                        <h4 class="card-title">
                             <a style="color:darkblue">';
                                echo $rows[$i][0];
                            echo '</a>
                        </h4>
                        <p class="card-text">';
                            echo "<b>Age: </b>" . $rows[$i][1] . " (in months)<br>";
                            echo "<b>Gender: </b>" . $rows[$i][2] . "<br>";
                            echo "<b>Breed: </b>" . $rows[$i][11] . "<br>";
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
                        echo '</p>
                    </div>
                </div>
            </div>';
        }
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
            <a class="page-link" href="pets2.php">1</a>
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
