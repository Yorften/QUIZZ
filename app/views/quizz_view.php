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

<body class="overflow-x-hidden">
    <main class="flex flex-col justify-center gap-8 items-center min-h-screen bg-[#232f3e]">
    <p id="theme" class="absolute top-0 px-4 py-2 bg-white rounded-b-xl text-xl font-medium"></p>
        <p id="welcome" class="text-white mt-[5vh] text-2xl h-[3.5] md:mt-[5vh] md:text-xl z-10">Welcome <?= $_SESSION['username'] ?>!</p>
        <div id="total" class=" z-10">
            <p class="absolute top-28 md:top-10 left-5 text-white">Score : </p>
            <p class="absolute top-28 md:top-10 left-[80px] text-white" id="score">0</p>
        </div>
        <div id="progress" class="h-[1.5vh] w-[91%] md:w-[73%] rounded-md bg-black z-10 mt-[10vh] md:mt-0">
            <div class="progress h-full w-0 rounded-md bg-[#ff9900] transition-[width] ease-in duration-500"></div>
        </div>
        <div class="hidden min-h-[85vh] py-2 p-2 md:min-h-[90vh] h-full md:h-[75vh] md:overflow-y-auto md:overflow-y-scroll min-h-[85vh] h-0 w-0 grid grid-cols-2 gap-4 md:gap-8 inline-block bg-green-600 bg-red-600 w-full p-2 border shadow-lg border-gray-400 rounded-lg select-none cursor-pointer peer peer-checked:border-amber-600 peer-checked:text-amber-600 peer-checked:bg-[#ff9900] shadow-md shadow-2xl peer-checked:shadow-2xl h-[200px] h-[100px] text-xl child:text-xl child:font-semibold flex justify-between items-center p-2 flex gap-2 items-center justify-between p-1 border border-gray-600 bg-red-500 bg-green-500 flex flex-col justify-around bg-white rounded-lg min-h-[85vh] md:min-h-[90vh] w-full md:w-3/5 border-2 border-gray-700 p-1 py-2 p-1 px-4 bg-[#ff9900] text-lg font-medium border border-black rounded-xl flex flex-col self-end text-4xl hidden"></div>
        <div id="content" class="flex flex-col justify-start items-center gap-8 w-[95%] md:w-3/4 z-10">

        </div>
        <div class="absolute transition-opacity duration-700 ease-in top-60 md:top-[100px] mx-auto rounded-xl bg-red-600 text-lg font-medium text-white opacity-0" id="error"></div>
    </main>

    <script src="/quizz/app/js/main.js"></script>
</body>

</html>