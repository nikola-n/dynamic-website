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

    <?php

    require_once 'db.php';


    ?>
</head>

<body>
    <div class="container-fluid background-1">
        <div class="row">
            <h1 class="text-center title-margin">Еден чекор ве дели од вашата веб страна</h1>

            <form action="create.php" method="POST">
                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="cover"><b>Напишете го линкот до cover сликата:</b></label><br>
                    <input type="url" class="form-control" name="cover" required>
                </div>
                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="heading"><b>Внесете го насловот:</b></label><br>
                    <input type="text" class="form-control" name="heading" required>
                </div>
                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="subheading"><b>Внесете го поднасловот:</b></label><br>
                    <input type="text" class="form-control" name="subheading" required>
                </div>
                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="about"><b>Напишете нешто за вас:</b></label><br>
                    <textarea name="about" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="phone"><b>Внесете го вашиот телефон:</b></label><br>
                    <input type="text" class="form-control" name="phone" required>
                </div>
                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="location"><b>Внесете ја вашата локација:</b></label><br>
                    <input type="text" class="form-control" name="location" required>
                    <hr>
                </div>

                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="type"><b>Одверете дали нудите сервиси или продукти:</b></label> <br> <br>
                    <select name="type" class="form-control" id="">
                        <option name="blank" value="blank">...</option>
                        <option name="services" value="services">Сервиси</option>
                        <option name="products" value="products">Продукти</option>
                    </select> <br> <br> <br>
                </div>
                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="url_img">Внесете URL од слика и опис на вашите продукти или сервиси:</label><br><br>
                    <label for="url_img">URL од слика</label><br>
                    <input type="url" class="form-control" name="url_img" required> <br> <br>
                    <label for="about_img">Опис за сликата</label><br>
                    <textarea name="about_img" id="" cols="30" rows="10" class="form-control"></textarea> <br>
                </div>
                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="url_img1">Внесете URL од слика и опис на вашите продукти или сервиси:</label><br><br>
                    <label for="url_img1">URL од слика</label><br>
                    <input type="url" class="form-control" name="url_img1" required> <br>
                    <label for="about_img1">Опис за сликата</label><br>
                    <textarea name="about_img1" id="" cols="30" rows="10" class="form-control"></textarea> <br>
                </div>
                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="url_img2">Внесете URL од слика и опис на вашите продукти или сервиси:</label><br><br>
                    <label for="url_img2">URL од слика</label><br>
                    <input type="url" class="form-control" name="url_img2" required> <br>
                    <label for="about_img2">Опис за сликата</label><br>
                    <textarea name="about_img2" id="" cols="30" rows="10" class="form-control"></textarea>
                    <hr>
                </div>

                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="description"><b>Напишете нешто за вашата компанија што луѓето треба да го знаат пред да ве контактираат:</b></label><br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    <hr>
                </div>

                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="linkedin"><b>LinkedIn</b></label><br>
                    <input type="text" class="form-control" name="linkedin" required>
                </div>
                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="facebook"><b>Facebook</b></label><br>
                    <input type="text" class="form-control" name="facebook" required>
                </div>

                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="twitter"><b>Twitter</b></label><br>
                    <input type="text" class="form-control" name="twitter" required>
                </div>
                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="googleplus"><b>Google+</b></label><br>
                    <input type="text" class="form-control" name="googleplus" required>
                    <hr>
                </div>

                <div class="form-group col-md-4 col-md-offset-4 col-xs-12 text-center">
                    <button type="submit" class="btn btn-block form-control form-button">Потврди</button>
                </div>
            </form>
        </div>
    </div>

    </div>
    </div>






















    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>