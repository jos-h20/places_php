<?php
class Place
{
    /****Properties****/
    private $name;
    private $year;
    /****Constructor****/
    function __construct($name, $year)
    {
        $this->name = $name;
        $this->year = $year;
    }
    /****Setters****/
    function setName($new_name)
    {
        $this->name = (string) $new_name;
    }
    function setYear($new_year)
    {
        $this->year = (string) $new_year;
    }
    /****Getters****/
    function getName()
    {
        return $this->name;
    }
    function getYear()
    {
        return $this->year;
    }
    /****Functions****/
    //save all
    function save()
    {
        array_push($_SESSION['list_of_places'], $this);
    }
    //get all the places
    static function getAll()
    {
        return $_SESSION['list_of_places'];
    }
    //delete all the places
    static function deleteAll()
    {
        $_SESSION['list_of_places'] = array();
    }
}

 ?>
