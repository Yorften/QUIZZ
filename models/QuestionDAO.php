<?php
include_once '../config/Connection.php';
require_once 'Question.php';


class QuestionDAO
{
    private $conn;
    private Question $question;

    public function __construct()
    {
        $this->conn = Connection::getInstance()->getConnection();
        $this->question = new Question();
    }


    /**
     * Get the value of question
     */ 
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set the value of question
     *
     * @return  self
     */ 
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    
}
