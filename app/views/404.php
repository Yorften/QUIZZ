<!doctype html>
<html lang="en">

<head>
    <?php require_once '../components/head.html'; ?>
    <title>Notfound</title>
</head>

<body>
    <!-- component -->
    <main class="h-screen w-full flex flex-col justify-center items-center bg-[#1A2238]">
        <img src="../../assets/images/aws_smile_transparent.png" alt="aws icon" class="w-72 object-contain md:w-auto">
        <h1 class="text-9xl font-extrabold text-white tracking-widest">404</h1>
        <div class="bg-[#FF6A3D] px-2 text-sm rounded rotate-12 mt-44 md:mt-auto absolute">
            Page Not Found
        </div>
        <button class="mt-5">
            <a href="/QUIZZ" class="relative inline-block text-sm font-medium text-[#FF6A3D] group active:text-orange-500 focus:outline-none focus:ring">
                <span class="absolute inset-0 transition-transform translate-x-0.5 translate-y-0.5 bg-[#FF6A3D] group-hover:translate-y-0 group-hover:translate-x-0"></span>

                <span class="relative block px-8 py-3 bg-[#1A2238] border border-current">
                    <router-link>Go Home</router-link>
                </span>
            </a>
        </button>
    </main>
</body>

</html>