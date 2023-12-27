<?php
require_once(__DIR__ . '/../config/Connection.php');
require_once 'Question.php';
require_once 'AnswersDAO.php';

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
        $stmt = $this->conn->prepare("SELECT questionId,questionContent,themeName FROM (SELECT questionId,questionContent,themeName FROM questions JOIN themes ON questions.themeId = themes.themeId ORDER BY RAND() LIMIT 10) AS random_questions ORDER BY themeName");
        $stmt->execute();
        $questions = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $qst = new Question();
            $qst->setId($row['questionId']);
            $qst->setContent($row['questionContent']);
            $qst->getTheme()->setName($row['themeName']);
            array_push($questions, $qst);
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

