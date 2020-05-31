<?php

use Page\Page;

require_once __DIR__."/../models/page.class.php";
require_once __DIR__."/../models/pictures.class.php";
require_once __DIR__."/../models/social.class.php";

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $page = new Page();

    $page = $page->getData($id);
    $page->pictures();
    $page->socialLinks();

    return $page;
}

