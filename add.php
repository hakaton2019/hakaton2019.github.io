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
<div class="container">
    <!-- Page Heading -->
    <h1 class="my-4">Add your pet
    </h1>
    
    <?php 

    if(isset($_POST['email'])){  
    $to = "shelter2019@mail.ru";  
    $from = $_POST['email'];
     
    /* Указываем переменные, в которые будет записываться информация с формы */
    $name = $_POST['name'];
    $age= $_POST['age'];
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
    if (!preg_match("/^\d+$/", $age))
    {
    $errors[] = "Age is wrong!";
    }
    
    if (!preg_match("/^\d+$/", $fee))
    {
    $errors[] = "Fee is wrong!";
    }
    
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
    {
    $errors[] = "E-mail is wrong!";
    }
    
    if (!preg_match("/^\d+$/", $phone))
    {
    $errors[] = "Phone is wrong!";
    }
    
    if (empty($errors)){
    $message = "Form details below.\n\n";
    $message .= "Name: ".$name."\n";
    $message .= "Age: ".$age."\n";
    $message .= "Gender: ".$gender."\n";
    $message .= "Breed: ".$breed."\n";
    $message .= "Color: ".$color."\n";
    $message .= "Vaccinated: ".$vaccin."\n";
    $message .= "Dewormed: ".$deworm."\n";
    $message .= "Sterillzed: ".$steril."\n";
    $message .= "Fee: ".$fee."\n";
    $message .= "E-mail: ".$email."\n";
    $message .= "Phone: ".$phone."\n";
    $message .= "Location: ".$location."\n";
    $message .= "Photo: ".$photo."\n";
    $message .= "Description: ".$description."\n";
    
    $headers = "From: $from \r\n";
         
    /* Отправка сообщения, с помощью функции mail() */
    mail($to, $subject, $message, $headers . 'Content-type: text/plain; charset=utf-8');
    echo "Email sent successfully!";
    echo "<br /><br /><a href='http://hakaton19.beget.tech'>Back to main page</a>";
    }
    else{
        echo $errors[0];
    }}
    ?>

    <form name="addpet" method="POST" action="add.php">

        <p><label for="name">Pet's name</label>
        <input type="text" id="name" name="name" placeholder="Pet's name" required></p>

        <p><label for="age">Age</label>
        <input type="text" id="age" name="age" placeholder="Pet's age in months" required></p>

        <p><label for="gender">Gender</label>
        <select id="gender" name="gender">
          <option value="girl">girl</option>
          <option value="boy">boy</option>
        </select></p>

        <p><label for="breed">Breed</label>
        <input type="text" id="breed" name="breed" placeholder="Pet's breed" required></p>

        <p><label for="color">Color</label>
        <input type="text" id="color" name="color" placeholder="Pet's colors" required></p>

        <p><label for="vaccin">Is pet vaccinated?</label>
        <select id="vaccin" name="vaccin">
          <option value="yes">yes</option>
          <option value="no">no</option>
          <option value="not sure">not sure</option>
        </select></p>

        <p><label for="deworm">Is pet dewormed?</label>
        <select id="deworm" name="deworm">
          <option value="yes">yes</option>
          <option value="no">no</option>
          <option value="not sure">not sure</option>
        </select></p>

        <p><label for="steril">Is pet sterillzed?</label>
        <select id="steril" name="steril">
          <option value="yes">yes</option>
          <option value="no">no</option>
          <option value="not sure">not sure</option>
        </select></p>

        <p><label for="fee">Fee</label>
        <input type="text" id="fee" name="fee" placeholder="What is a fee for your pet? If free - write 0." required></p>

        <p><label for="email">E-mail</label>
        <input type="text" id="email" name="email" placeholder="Your email" required></p>

        <p><label for="phone">Telephone number</label>
        <input type="text" id="phone" name="phone" placeholder="Your telephone number" required></p>

        <p><label for="loc">Location</label>
        <input type="text" id="loc" name="loc" placeholder="Where is your pet located?" required></p>

        <p><label for="description">Description</label>
        <textarea id="description" name="description" placeholder="Write something about your pet" style="height:200px"></textarea></p>
        
        <p><label for="photo">Photo</label>
        <input type="text" id="photo" name="photo" placeholder="URL to pet's photo"></p>

        <input type="submit" value="Submit">
    </form>

    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
        <small>This site was specially made for the ITGS Hakaton 2019</small>
    </div>
</footer>
</body>
</html>