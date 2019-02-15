<!DOCTYPE html>
<html>
<head>
    <title>Shelter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        body {
            background: url('http://spb.modulkartiny.ru/wp-content/uploads/2017/08/modul-naya-kartina-koty-mnogo-kotov-1024x576.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }

        .btn {
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #fe6d6d;
            border-radius: 0;
            position: relative;
        }
        .formm {
            width: 600px; /* Ширина элемента в пикселах */
            padding: 10px; /* Поля вокруг текста */
            margin: auto; /* Выравниваем по центру */
            background: #fff6f2; /* Цвет фона */
            border-radius: 20px;
            border: 3px solid rgba(161, 138, 128, 0.52);
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
<div class="lead container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="my-4" style="text-align: center;">Add your pet here</h1>

            <?php

            if (isset($_POST['email'])) {
                $to = "shelter2019@mail.ru";
                $from = $_POST['email'];

                /* Указываем переменные, в которые будет записываться информация с формы */
                $name = $_POST['name'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                $breed = $_POST['breed'];
                $color = $_POST['color'];
                $vaccin = $_POST['vaccin'];
                $deworm = $_POST['deworm'];
                $steril = $_POST['steril'];
                $fee = $_POST['fee'];
                $email = $_POST['email'];
                $description = $_POST['description'];
                $phone = $_POST['phone'];
                $location = $_POST['loc'];
                $photo = $_POST['photo'];
                $subject = "Pet's profile from website hakaton19.beget.tech";

                $errors = array();
                /* Проверка правильного написания e-mail адреса */
                if (!preg_match("/^\d+$/", $age)) {
                    $errors[] = "Age is wrong!";
                }

                if (!preg_match("/^\d+$/", $fee)) {
                    $errors[] = "Fee is wrong!";
                }

                if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
                    $errors[] = "E-mail is wrong!";
                }

                if (!preg_match("/^\d+$/", $phone)) {
                    $errors[] = "Phone is wrong!";
                }

                if (empty($errors)) {
                    $message = "Form details below.\n\n";
                    $message .= "Name: " . $name . "\n";
                    $message .= "Age: " . $age . "\n";
                    $message .= "Gender: " . $gender . "\n";
                    $message .= "Breed: " . $breed . "\n";
                    $message .= "Color: " . $color . "\n";
                    $message .= "Vaccinated: " . $vaccin . "\n";
                    $message .= "Dewormed: " . $deworm . "\n";
                    $message .= "Sterillzed: " . $steril . "\n";
                    $message .= "Fee: " . $fee . "\n";
                    $message .= "E-mail: " . $email . "\n";
                    $message .= "Phone: " . $phone . "\n";
                    $message .= "Location: " . $location . "\n";
                    $message .= "Photo: " . $photo . "\n";
                    $message .= "Description: " . $description . "\n";

                    $headers = "From: $from \r\n";

                    /* Отправка сообщения, с помощью функции mail() */
                    mail($to, $subject, $message, $headers . 'Content-type: text/plain; charset=utf-8');
                    echo "Email sent successfully!";
                    echo "<br /><br /><a href='http://hakaton19.beget.tech'>Back to main page</a>";
                } else {
                    echo $errors[0];
                }
            }
            ?>

            <div class="formm">
            <form name="addpet" method="POST" style="text-align: center;" action="add.php">
                <section>
                    <label for="name">Name of the pet</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Write pet's name here" required><br>

                    <label for="age">Age of the pet</label>
                    <input type="number" id="age" name="age" class="form-control" step="1" placeholder="Write the age in MONTHS, please" required><br>

                    <span>Gender of your animal:    </span>
                    <!--Add your first radio button below-->
                    <input id="girl" type="radio" name="gender" value="girl">
                    <label for="girl">Girl     </label>
                    <!--Add your second radio button below-->
                    <input type="radio" id="boy" name="gender" value="boy">
                    <label for="boy">Boy</label>
                </section><br>

                <section>
                    <label for="breed">Breed of the pet</label>
                    <input type="text" class="form-control" id="breed" name="breed" placeholder="Pet's breed" required><br>

                    <label for="color">What are the colours of the pet?</label><br>
                    <input type="text" class="form-control" id="color" name="color" placeholder="Pet's colors" required><br>

                    <span>Is pet vaccinated?    </span>
                    <!--Add your first radio button below-->
                    <input id="yes" type="radio" name="vaccine" value="yes">
                    <label for="yes">Yes</label>
                    <!--Add your second radio button below-->
                    <input type="radio" id="no" name="vaccine" value="no">
                    <label for="no">No</label><br><br>

                    <span>Is pet dewormed?</span>
                    <!--Add your first radio button below-->
                    <input id="yes" type="radio" name="vaccine" value="yes">
                    <label for="yes">Yes</label>
                    <!--Add your second radio button below-->
                    <input type="radio" id="no" name="vaccine" value="no">
                    <label for="no">No</label><br><br>

                    <span>Is pet sterilized?</span>
                    <!--Add your first radio button below-->
                    <input id="yes" type="radio" name="vaccine" value="yes">
                    <label for="yes">Yes</label>
                    <!--Add your second radio button below-->
                    <input type="radio" id="no" name="vaccine" value="no">
                    <label for="no">No</label><br>
                </section><br>
                <section>
                    <label for="fee">Fee for the pet
                    </label>
                    <input type="number" class="form-control" step="5" id="fee" name="fee"
                           placeholder="Write in $. If free - write 0"
                           required><br>

                    <label for="email">Your e-mail</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="example@mail.ru" required><br>

                    <label for="phone">Your telephone number</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="+7(999)123-45-67" required><br>

                    <label for="loc">Location of the pet</label>
                    <input type="text" class="form-control" id="loc" name="loc" placeholder="Country and city/town" required><br>
                </section>
                <section>
                    <label for="description">Description</label>
                    <br>
                    <!--Add your code below-->
                    <textarea id="description" class="form-control" name="description" rows="3" cols="40"
                              placeholder="Write something about your pet"></textarea><br>

                    <label for="photo">Photo</label>
                    <input type="text" id="photo" class="form-control" name="photo" placeholder="URL to pet's photo"><br>

                    <input class="btn btn-lg" type="submit" value="Submit">
                </section>
            </form>
            </div>
        </div>
    </div>
</div>
</body>

<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
        <small>This site was specially made for the ITGS Hakaton 2019</small>
    </div>
</footer>
</html>