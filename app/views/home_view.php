<!doctype html>
<html lang="en">

<head>

    <?php require_once(__DIR__ . '/../components/head.html'); ?>
    <title>QUIZZ | AWS</title>

</head>

<body>
    <main class="flex flex-col gap-16 justify-center items-center h-screen bg-[#232f3e] md:gap-8">
        <img src="/quizz/assets/images/aws.png" alt="" class="object-contain w-1/2 md:w-1/5">
        <form method="POST" class="flex flex-col gap-4 bg-white rounded-xl p-4 w-10/12 sm:w-3/4 md:w-2/5 lg:w-2/5">
            <div class="flex flex-col">
                <div id="userInput" class="flex flex-col h-[47.99px] border-2 bg-white border-[#A1A1A1] p-2 rounded-md">
                    <input class="text-center text-lg font-medium placeholder:font-medium placeholder:text-center focus:outline-none" id="username" type="text" name="username" placeholder="Enter your name" autocomplete="off">
                </div>
                <div id="userErr" class="text-red-600 text-xs pl-3"></div>
            </div>
            <input type="submit" name="start" class="text-2xl font-bold rounded-lg px-4 py-2 bg-[#ff9900] text-[#000716] hover:bg-[#dd8404] duration-300" value="Start">
        </form>
    </main>
    <script src="/quizz/app/js/main.js"></script>
    <script src="/quizz/app/js/validate.js"></script>

</body>

</html>