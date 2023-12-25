<?php
require_once (__DIR__ . '/../config/Connection.php');
require_once 'Theme.php';

class ThemesDAO
{
    private $conn;
    private Theme $theme;

    public function __construct()
    {
        $this->conn = Connection::getInstance()->getConnection();
        $this->theme = new Theme();
    }

    /**
     * Get the value of theme
     */ 
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set the value of theme
     *
     * @return  self
     */ 
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }


}
