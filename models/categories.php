<?php

class Categories
{

    private $id;
    private $title;
    private $description;
    private $picture;

    public function __construct()
    {
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    public static function addCategory($bddConn, $tableName, $bindParam)
    {
        $results = $bddConn->add($bddConn, $tableName, $bindParam);
        return $results;
    }

    public static function listCategories($bddConn, $tableName, $limit, $className, $where, $what, $order, $by)
    {
        $fetchedResults = Connexion::list($bddConn, $tableName, $limit, $className, $where, $what, $order, $by);
        return $fetchedResults;
    }

    public static function takeOneCategory($bddConn)
    {
        $fetchedResults = $bddConn->takeOneElement($bddConn, $_GET['id']);
        return $fetchedResults;
    }

    public static function modifyCategories($bddConn, $bindParam)
    {
        $results = $bddConn->modify($bddConn, $bindParam);
        return $results;
    }

    public static function deleteCategory($bddConn, $id, $tableName)
    {
        $results = $bddConn->delete($bddConn, $id, $tableName);
        return $results;
    }
}
