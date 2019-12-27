<?php
require_once 'db.php';

//var_dump($_GET["id"]);
$sql = "SELECT * FROM page WHERE id={$_GET['id']}";

$stmt = $db->query($sql);


while ($row = $stmt->fetch()) {

    $webpage[] = $row;
}


//var_dump($webpage);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Christmas Page</title>

</head>

<body>


    <?php foreach ($webpage as $page) { ?>
        <nav class='navbar navbar-default nav-style'>
            <div class='container-fluid col-md-12 col-xs-12'>
                <div class='row' style="margin:0; padding:0;">   
                    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                        <ul class='nav navbar-nav'>
                            <li><a href='#home'>Дома</a></li>
                            <li><a href='#aboutUs'>За нас</a></li>
                            <li><a href='#type'><?= $page['type'] ?></a></li>
                            <li><a href='#contact'>Контакт</a></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>
    <?php }; ?>
    <?php foreach ($webpage as $page) { ?>
        <div class="container-fluid" id='home'>
            <div class="row" style="margin:0; padding:0;">
            <?php echo "<div style='
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(\"$page[cover]\");
                background-repeat: no-repeat;
                height: 60vh;
                padding: 0;
                background-size: cover;
                margin:0;'
                </div>" ?>
                <h1 class="text-center"><?= $page['heading'] ?></h1>
                <h3 class="text-center"><?= $page['subheading'] ?></h3>
            </div>
        </div>
    <?php }; ?>
    
    
    <?php foreach ($webpage as $page) { ?>
        <div class="container-fluid" id='aboutUs'>
            <div class="row">
                <h1 class ="aboutush1"style="color:black; padding-bottom:1%; margin-left:1%;">За Нас</h1>
                <div class="aboutUs col-md-8">
                    <p><?= $page['about'] ?></p>
                </div>
                <div class="phone col-md-3 col-md-offset-1">
                    <p>Телефон</p>
                    <p><?= $page['phone'] ?></p>
                    <br>
                    <p>Локација</p>
                    <p><?= $page['location'] ?></p>

                </div>
            </div>
        </div>
    <?php }; ?>
    <?php foreach ($webpage as $page) { ?>

        <div class="container-fluid"  id='type'>
            <div class="row">
                <h1 style="color:black; padding-bottom:1%;" class="text-center"><?= $page['type'] ?></h1>
                <div class="col-md-4">
                   <?php echo '<img src='.$page['url_img'].' class="img-responsive">'?>
                    <h4 class="text-center">Опис на првиот продукт</h4>
                    <p><?= $page['about_img'] ?></p>

                </div>
                <div class="col-md-4">
                    <img src="<?= $page['url_img1'] ?>" alt="" class="img-responsive">
                    <h4 class="text-center">Опис на вториот продукт</h4>
                    <p><?= $page['about_img1'] ?></p>

                </div>
                <div class="col-md-4">
                    <img src="<?= $page['url_img2'] ?>" alt="" class="img-responsive">
                    <h4 class="text-center">Опис на третиот продукт</h4>
                    <p><?= $page['about_img2'] ?></p>

                </div>
            </div>
        </div>
    <?php }; ?>
    <?php foreach ($webpage as $page) { ?>

        <div class="container-fluid" id='contact'>
            <div class="row">
                <h1 style="color:black; padding-bottom:1%;"class="text-center">Контакт</h1>
                <div class="col-md-6">
                    <h4>Текст</h4>
                    <p><?= $page['description'] ?></p>
                </div>
                <div class="col-md-4 col-md-offset-1 border">
                    <form action="" method="get">
                        <div class="form-group">
                            <label for="name">Име</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Вашето име">
                        </div>
                        <div class="form-group">
                            <label for="email">Емаил</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Вашиот емаил">
                        </div>
                        <div class="form-group">
                            <label for="msg">Порака</label> <br>
                            <textarea class="form-control" name="msg" id="msg" cols="20" rows="10" placeholder="Вашата порака"></textarea>
                        </div>
                        <div class="form-group text-center">
                        <button type="submit" class="btn btn-default form-btn">Испрати</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php }; ?>


    <div class="container-fluid background-2">
        <div class="row">
            <div class="col-md-8">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, ex saepe odit praesentium laboriosam nisi laborum magni nam consectetur doloribus eius culpa ad facilis neque? Impedit nesciunt officia laudantium natus!</p>
            </div>
            <div class="col-md-3 col-md-offset-1 icons">
                <?php foreach ($webpage as $page) { ?>
                    <a href="<?= $page['linkedin'] ?>"><i class="fab fa-linkedin-in"></i></a>
                    <a href="<?= $page['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?= $page['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                    <a href="<?= $page['googleplus'] ?>"><i class="fab fa-google-plus-g"></i></a>
            </div>
        <?php }; ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>