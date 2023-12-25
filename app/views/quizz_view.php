<!doctype html>
<html lang="en">

<head>

    <?php require_once(__DIR__ . '/../components/head.html'); ?>
    <title>QUIZZ | AWS</title>

</head>

<body>
    <main class="flex flex-col justify-center items-center h-screen">
        <p>Welcome <?= $_SESSION['username'] ?>!</p>
    </main>
    <script src="/quizz/app/js/main.js"></script>
</body>

</html>