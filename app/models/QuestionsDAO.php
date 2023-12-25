<?php
require_once(__DIR__ . '/../config/Connection.php');
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


    public function getQuestions()
    {
        $stmt = $this->conn->prepare("SELECT * FROM questions JOIN themes ORDER BY RAND()");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $questions = array();
        while($result){
            $qst = new Question();
            $qst->setId($result['questionId']);
            $qst->setContent($result['questionContent']);
            $qst->getTheme()->setName($result['themeName']);
            array_push($questions,$qst);
        }
        return $questions;
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
