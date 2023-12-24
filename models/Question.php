<?php
require_once 'Themes.php';

class Question
{
    private $id;
    private $content;
    private Themes $theme;

    public function __construct()
    {
        $this->theme = new Themes();
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
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
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
