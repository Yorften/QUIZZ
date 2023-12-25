<?php


class Home extends Controller
{
    public function index()
    {

        if (isset($_POST['start'])) {
            $username = trim(htmlspecialchars($_POST['username']));
            $_SESSION['username'] = $username;
            header('Location:/quizz/quizz/index/' . $_SESSION['username']);
        }

        $this->view('home');
    }
}
