<?php
include_once 'config/Connection.php';
require_once 'Answer.php';

class AnswersDAO
{
    private $conn;
    private Answer $answer;

    public function __construct()
    {
        $this->conn = COnnection::getInstance()->getConnection();
        $this->answer = new Answer();
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
