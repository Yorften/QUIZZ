<?php

class Quizz extends Controller
{
    public function index($param = [])
    {
        if (isset($_SESSION['username']) && $_SESSION['username'] == $param) {
            $this->view('quizz', $param);
        } else {
            $logout = new Logout();
            $logout->logout();
            header('location:/quizz/home/index/');
        }
    }

    public function questions()
    {
        $question = new QuestionsDAO();
        $questions = $question->getQuestions();

        return json_encode($questions);
    }
}
