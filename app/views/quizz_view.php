<!doctype html>
<html lang="en">

<head>

    <?php require_once(__DIR__ . '/../components/head.html'); ?>
    <title>QUIZZ | AWS</title>

</head>

<body>
    <main class="flex flex-col justify-around gap-16 items-center h-screen">
        <p>Welcome <?= $_SESSION['username'] ?>!</p>
        <div id="content" class="flex flex-col justify-evenly items-center w-[95%] md:w-3/4 h-full mx-auto">

        </div>
    </main>

    <script src="/quizz/app/js/main.js"></script>
</body>

</html>