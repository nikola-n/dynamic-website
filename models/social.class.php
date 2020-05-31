<?php
//
//namespace Social;
//
//require_once 'db.class.php';
//
//use Database\DbConnection as DB;
//
//class Social extends DB {
//
//    private $linkedin;
//    private $facebook;
//    private $twitter;
//    private $google_plus;
//
//    public function setProperty($property, $value)
//    {
//        $this->$property = $value;
//    }
//
//    public function getProperty($property)
//    {
//        return $this->$property;
//    }
//
//    public function save()
//    {
//        try
//        {
//            $sql = "INSERT INTO social (linkedin, facebook, twitter, google_plus) VALUES (:linkedin, :facebook, :twitter, :geoogle_plus)";
//            $stmt = $this->getConnection()->prepare($sql);
//            $stmt->bindParam(':linkedin', $this->linkedin);
//            $stmt->bindParam(':facebook', $this->facebook);
//            $stmt->bindParam(':twitter', $this->twitter);
//            $stmt->bindParam(':google_plus', $this->google_plus);
//            $stmt->execute();
//            $id = $this->getConnection()->lastInsertId();
//
//            return $id;
//
//        }catch (\PDOException $e) {
//            $e->getMessage();
//            die();
//        }
//    }
//}


namespace Social;

require_once "db.class.php";

use Database\DBConnection as DB;


class Social extends DB {

    // page social
    private $linkedin;
    private $facebook;
    private $twitter;
    private $google_plus;

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
            $sql = "INSERT INTO social (linkedin, facebook, twitter, google_plus) VALUES (:linkedin, :facebook, :twitter, :google_plus)";
            $stmt = $this->getConnection()->prepare($sql);
            $stmt->bindParam(":linkedin", $this->linkedin);
            $stmt->bindParam(":facebook", $this->facebook);
            $stmt->bindParam(":twitter", $this->twitter);
            $stmt->bindParam(":google_plus", $this->google_plus);

            $stmt->execute();
            $id = $this->getConnection()->lastInsertId();

            return $id;

        } catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

}