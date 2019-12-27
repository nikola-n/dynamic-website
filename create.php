<?php


require_once 'db.php';
//require_once 'form.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $cover = $_POST['cover'];
    $heading = $_POST['heading'];
    $subheading = $_POST['subheading'];
    $about = $_POST['about'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $type = $_POST['type'];
    if ($type == 'services') {
        $type = 'Сервиси';
    } else {
        $type = 'Продукти';
    }
    $url_img = $_POST['url_img'];
    $about_img = $_POST['about_img'];
    $url_img1 = $_POST['url_img1'];
    $about_img1 = $_POST['about_img1'];
    $url_img2 = $_POST['url_img2'];
    $about_img2 = $_POST['about_img2'];
    $description = $_POST['description'];
    $linkedid = $_POST['linkedin'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $googleplus = $_POST['googleplus'];


    $sql = "INSERT INTO page (cover,heading,subheading,about,phone,location,type, url_img, about_img, url_img1, about_img1, url_img2, about_img2,description,linkedin,facebook,twitter,googleplus) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $db->prepare($sql);
    try {
        if($stmt->execute([$_POST['cover'], $_POST['heading'], $_POST['subheading'], $_POST['about'], $_POST['phone'], $_POST['location'], $type, $_POST['url_img'], $_POST['about_img'], $_POST['url_img1'], $_POST['about_img1'], $_POST['url_img2'], $_POST['about_img2'], $_POST['description'], $_POST['linkedin'], $_POST['facebook'], $_POST['twitter'], $_POST['googleplus']])) {
            $id = $db->lastInsertId();
      //      var_dump($id); die;
            header("Location: page.php?status=success&id=$id");
            die();
        } else {
            header("Location: page.php?status=error");
            die();
        }
    } catch (PDOException $e) {
        $e->getMessage();
    }



    if ($_GET['status'] == 'success') {
        echo "<p class ='text-center' style='color:green; font-weight:bold;'>Successfully Registered</p>" . "<br>";
    } else {
        echo "<p class = 'text-center'style='color:red; font-weight:bold;'>Error, Try again!</p>" . "<br>";
    }
}
