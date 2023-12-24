<?php
include_once '../config/Connection.php';
require_once 'Themes.php';

class ThemesDAO
{
    private $conn;
    private Themes $theme;

    public function __construct()
    {
        $this->conn = Connection::getInstance()->getConnection();
        $this->theme = new Themes();
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
