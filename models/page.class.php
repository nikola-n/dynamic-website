<?php


namespace Page;

require_once "db.class.php";

use Database\DBConnection as DB;
use PDO;
use PDOException;

class Page extends DB {

    public $id = "";
    private $link_cover;
    private $title;
    private $subtitle;
    private $about;
    private $mobile;
    private $location;
    private $before_contact;
    private $service_product;
    private $social_id;
    private $pictures_id;

    private $pictures = [];
    private $socialLinks = [];

    public function setProperty($property, $value)
    {
        $this->$property = $value;
    }

    public function getProperty($property)
    {
        return $this->$property;
    }

    public function save()
    {
        try
        {
            $sql = "INSERT INTO pages (link_cover, title, subtitle, about, mobile, location, before_contact, service_product, social_id, pictures_id) VALUES (:link_cover, :title, :subtitle, :about, :mobile, :location, :before_contact, :service_product, :social_id, :pictures_id)";
            $stmt = $this->getConnection()->prepare($sql);
            $stmt->bindParam(":link_cover", $this->link_cover);
            $stmt->bindParam(":title", $this->title);
            $stmt->bindParam(":subtitle", $this->subtitle);
            $stmt->bindParam(":about", $this->about);
            $stmt->bindParam(":mobile", $this->mobile);
            $stmt->bindParam(":location", $this->location);
            $stmt->bindParam(":before_contact", $this->before_contact);
            $stmt->bindParam(":service_product", $this->service_product);
            $stmt->bindParam(":social_id", $this->social_id);
            $stmt->bindParam(":pictures_id", $this->pictures_id);
            $stmt->execute();
            $this->id = $this->getConnection()->lastInsertId();

            return $this->id;

        } catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }


    public function getData($id)
    {
        try
        {
            $sql = "SELECT * FROM pages WHERE id = $id";

            $stmt = $this->getConnection()->prepare($sql);
            $stmt->execute();
            $pageData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($pageData[0] as $pageProperty => $propertyValue)
            {
                $this->setProperty($pageProperty, $propertyValue);
            }
            return $this;

        } catch (PDOException $e)
        {
            echo $e->getMessage();
        }

    }

    public function pictures()
    {
        $sql = "SELECT pictures.* FROM pages JOIN pictures ON pages.pictures_id = pictures.id WHERE pages.id = " . $this->id;
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute();
        $pictures = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->setProperty("pictures", $pictures[0]);
        return $this;
    }

    public function socialLinks()
    {
        $sql = "SELECT social.* FROM social JOIN pages ON social.id = pages.social_id WHERE pages.id =  " . $this->id;
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute();
        $socialLinks = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->setProperty("socialLinks", $socialLinks[0]);
        return $this;

    }

}
