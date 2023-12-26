<!doctype html>
<html lang="en">

<head>

    <?php require_once(__DIR__ . '/../components/head.html'); ?>
    <title>QUIZZ | AWS</title>
    <style>
        @keyframes shakeAnimation {
            0% {
                transform: translate(2px, 1px) rotate(0deg);
            }

            10% {
                transform: translate(-1px, -2px) rotate(-1deg);
            }

            20% {
                transform: translate(-3px, 0px) rotate(1deg);
            }

            30% {
                transform: translate(0px, 2px) rotate(0deg);
            }

            40% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            50% {
                transform: translate(-1px, 2px) rotate(-1deg);
            }

            60% {
                transform: translate(-3px, 1px) rotate(0deg);
            }

            70% {
                transform: translate(2px, 1px) rotate(-1deg);
            }

            80% {
                transform: translate(-1px, -1px) rotate(1deg);
            }

            90% {
                transform: translate(2px, 2px) rotate(0deg);
            }

            100% {
                transform: translate(1px, -2px) rotate(-1deg);
            }
        }

        .shake {
            animation-name: shakeAnimation;
            animation-duration: 0.5s;
            transform-origin: 50% 50%;
            animation-iteration-count: 2;
        }
    </style>
</head>

<body>
    <main class="flex flex-col justify-center gap-8 items-center min-h-screen bg-[#232f3e]">
        <p class="text-white mt-[10%] text-2xl md:mt-10 md:text-xl">Welcome <?= $_SESSION['username'] ?>!</p>
        <div id="total">
            <p class="absolute top-28 md:top-10 left-5 text-white">Score : </p>
            <p class="absolute top-28 md:top-10 left-[80px] text-white" id="score">0</p>
        </div>
        <div class="hidden min-h-[90vh] h-0 w-0 grid grid-cols-2 gap-4 md:gap-8 inline-block bg-green-600 bg-red-600 w-full p-2 border shadow-lg border-gray-400 rounded-lg select-none cursor-pointer peer peer-checked:border-amber-600 peer-checked:text-amber-600 peer-checked:bg-[#ff9900] shadow-md shadow-2xl peer-checked:shadow-2xl h-[200px] h-[100px] text-xl"></div>
        <div id="content" class="flex flex-col justify-center items-center gap-8 w-[95%] md:w-3/4 h-full mx-auto">

        </div>
        <div class="absolute top-44 md:top-20 mx-auto rounded-xl bg-red-600 text-lg font-medium text-white" id="error"></div>
    </main>

    <script src="/quizz/app/js/main.js"></script>
</body>

</html>