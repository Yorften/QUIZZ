<?php
include_once '../config/Connection.php';
require_once 'Answers.php';

class AnswersDAO
{
    private $conn;
    private Answers $answer;

    public function __construct()
    {
        $this->conn = COnnection::getInstance()->getConnection();
        $this->answer = new Answers();
    }

    /**
     * Get the value of answer
     */ 
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set the value of answer
     *
     * @return  self
     */ 
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }
}
