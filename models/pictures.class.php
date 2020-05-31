<?php

namespace Picture;

require_once 'db.class.php';
use Database\DbConnection as DB;
use PDO;

class Picture extends DB {

    private $pic1;
    private $pic2;
    private $pic3;
    private $text1;
    private $text2;
    private $text3;

    public function setProperty($property, $value) {
        $this->$property = $value;
    }
    public function getProperty($property)
    {
        return $this->$property;
    }

    public function save()
    {
        try {

        $sql = "INSERT INTO pictures (pic1,pic2,pic3,text1,text2,text3) VALUES (:pic1,:pic2,:pic3,:text1,:text2,:text3)";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bindParam(':pic1', $this->pic1);
        $stmt->bindParam(':pic2', $this->pic2);
        $stmt->bindParam(':pic3', $this->pic3);
        $stmt->bindParam(':text1', $this->text1);
        $stmt->bindParam(':text2', $this->text2);
        $stmt->bindParam(':text3', $this->text3);
        $stmt->execute();
        $id = $this->getConnection()->lastInsertId();

        return $id;

        }catch (\PDOException $e)
        {
            $e->getMessage();
            die();
        }
    }
}