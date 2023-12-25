<?php
require_once (__DIR__ . '/../config/Connection.php');
require_once 'Question.php';


class QuestionsDAO
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
