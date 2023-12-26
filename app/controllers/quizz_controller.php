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
        $answers = new AnswersDAO();
        $questions = $question->getQuestions();
        $questionsArray = [];
        foreach ($questions as $question) {
            $id = $question->getId();
            $ansrs = $answers->getAnswersByQuestionId($id);
            $answersArray = [];
            foreach ($ansrs as $answer) {
                $answerData = [
                    'id' => $answer->getId(),
                    'content' => $answer->getContent(),
                    'correct' => $answer->getIsCorrect()
                ];
                $answersArray[] = $answerData;
            }
            $questionData = [
                'id' => $question->getId(),
                'content' => $question->getContent(),
                'answers' => $answersArray,
                'theme' => [
                    'name' => $question->getTheme()->getName()
                ]
            ];
            $questionsArray[] = $questionData;
        }

        // print_r($questions);
        echo json_encode($questionsArray);
    }
}
