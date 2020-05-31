<?php
require_once __DIR__."/../models/page.class.php";
require_once __DIR__."/../models/pictures.class.php";
require_once __DIR__."/../models/social.class.php";

use Page\Page as Page;
use Picture\Picture as Picture;
use Social\Social as Social;


if($_SERVER["REQUEST_METHOD"] == "GET"){

    echo "you DON'T have permissions to access this file";
    die();
}else{

    $picture = new Picture;
    $picture->setProperty("pic1", $_POST["pic1"]);
    $picture->setProperty("pic2", $_POST["pic2"]);
    $picture->setProperty("pic3", $_POST["pic3"]);
    $picture->setProperty("text1", $_POST["text1"]);
    $picture->setProperty("text2", $_POST["text2"]);
    $picture->setProperty("text3", $_POST["text3"]);
    $pictureID = $picture->save();

    $social = new Social;
    $social->setProperty("linkedin", $_POST["linkedin"]);
    $social->setProperty("facebook", $_POST["facebook"]);
    $social->setProperty("twitter", $_POST["twitter"]);
    $social->setProperty("google_plus", $_POST["google_plus"]);
    $socialID = $social->save();


    $page = new Page;
    $page->setProperty("link_cover", $_POST["link_cover"]);
    $page->setProperty("title", $_POST["title"]);
    $page->setProperty("subtitle", $_POST["subtitle"]);
    $page->setProperty("about", $_POST["about"]);
    $page->setProperty("mobile", $_POST["mobile"]);
    $page->setProperty("location", $_POST["location"]);
    $page->setProperty("before_contact", $_POST["before_contact"]);
    $page->setProperty("service_product", $_POST["service_product"]);
    $page->setProperty("social_id", $socialID);
    $page->setProperty("pictures_id", $pictureID);
    $id = $page->save();

    header("Location: ../views/page.php?id=$id");
}