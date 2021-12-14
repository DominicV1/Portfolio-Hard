<?php

$dsn = 'mysql:dbname=portfolio_do;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

$sql = "SELECT * FROM work";
$workAll = $pdo->query($sql);
$workAll->setFetchMode(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/4cff907b3f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dominic.</title>

    <style>
        body {
            font-family: 'Space Mono', monospace;
            font-weight: 700;

        }

        body::-webkit-scrollbar {
            display: none;
        }

        #navbar {
            font-family: 'Space Mono', monospace;
            font-weight: 400;
        }

    </style>

</head>
<body class="bg-rose-50 py-8 lg:py-16 px-6 lg:px-24">

<header class="fixed">
    <div>
        <div class="font-semibold text-black text-4xl">
            <a href="https://github.com/DominicV1" target="_blank">
                <b id="letDest"></b>
            </a>
        </div>
    </div>
    <div id="navbar" class="opacity-0 w-64 text-base text-gray-400 transition-all duration-1000 ease-in-out">
        <div class="flex justify-between">
            <a href="#about" class="hover:text-red-300">
                <i class="fas fa-info"></i>
                About
            </a>
            <a href="#work" class="hover:text-red-300">
                <i class="fas fa-code-branch"></i>
                Work
            </a>
            <a href="#contact" class="hover:text-red-300">
                <i class="fas fa-address-card"></i>
                Contact</a>
        </div>
    </div>
</header>
<!--ABOUT SECTION-->
<div id="about" class="min-h-screen opacity-0 text-black-400 transition-all duration-1000 ease-in-out  text-center">
    <h1 class="text-3xl pt-20">
        <i class="fas fa-user-cog"></i> Dominic V.
    </h1>
    <p class="text-l">
        I'm <a href="https://twitter.com/cinimoD_Dev" class="underline hover:text-red-400" target="_blank">@dominic</a>,
        a student at the
        <a href="https://www.bit-academy.nl/" class="underline hover:text-red-400">@bit_academy</a> and going to be a
        Full Stack web developer.<br>
        At this moment
        I'm learning alot about coding and different languages/frameworks. <br>
        The main languages I'm learning right now are:
        <a href="https://www.php.net" class="hover:text-red-400" target="_blank">PHP</a>,
        <a href="https://www.w3.org/TR/CSS/#css" class="hover:text-red-400" target="_blank">CSS</a> (<a
                href="https://tailwindcss.com/" class="hover:text-red-400" target="_blank">Tailwind CSS</a>),
        <a href="https://html.spec.whatwg.org/multipage/" class="hover:text-red-400" target="_blank">HTML5</a>,
        <a href="https://www.mysql.com/" class="hover:text-red-400" target="_blank">MySQL</a> and
        <a href="https://www.javascript.com/" class="hover:text-red-400" target="_blank">JavaScript</a>.
    </p>
</div>
<!--WORK SECTION-->
<div id="work"
     class="opacity-0 text-l text-black-400 transition-all duration-1000 ease-in-out min-h-screen">

    <h1 class="text-center text-2xl"><i class="fas fa-tasks"></i> Work</h1>
    <p class="text-center text-slate-200">This is just a beginning. Come back later to check for more repo's or visit my
        <a href="https://github.com/DominicV1" target="_blank" class="hover:text-red-400">github</a>:D
    </p>
    <!--    Magic. Do not touch.-->

    <div class="container mt-4 max-w-3xl mx-auto content-center">
        <div class="grid grid-cols-1 sm:grid-cols-2">
            <?php while ($work = $workAll->fetch()) { ?>

                <div class="card m-2 cursor-pointer border border-gray-400 rounded-lg hover:shadow-md hover:border-opacity-0 transform hover:-translate-y-1 transition-all duration-200 bg-white">
                    <a href="<?= $work['repo'] ?>" target="_blank">
                        <div class="m-3">
                            <h2 class="text-lg mb-2">
                                <?= htmlspecialchars($work['title']); ?>
                                <span class="text-sm text-slate-300 font-mono border-gray-00 bg-rose-50 inline rounded-full px-2 align-top float-right">
                                    <?= htmlspecialchars($work['cr_year']); ?>
                                </span>
                                <span class="text-sm text-teal-800 font-mono bg-teal-100 inline rounded-full px-2 align-top float-right animate-pulse">
                                    <?= htmlspecialchars($work['tag']); ?>
                                </span>
                            </h2>
                            <p class="font-light font-mono text-sm text-gray-700 hover:text-gray-900 transition-all duration-200">
                                <?= htmlspecialchars($work['description']); ?>

                            </p>
                            <a href="<?= $work['repo'] ?>" target="_blank"
                               class="hover:text-red-400 float-bottom"><i class="fab fa-github-alt"></i> Visit the
                                repository</a>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!--CONTACT SECTION-->
<div id="contact" class="opacity-0 text-l text-black-400 transition-all duration-1000 ease-in-out text-center">
    <h1>
        Reach out to me
    </h1>
    <p>
        <a href="https://github.com/DominicV1" target="_blank"><i class="fab fa-github-alt hover:text-red-400"></i></a>
        |
        <a href="https://www.linkedin.com/in/dominic-v-87a234228/" target="_blank"><i
                    class="fab fa-linkedin-in hover:text-red-400"></i></a> |
        <a href="https://twitter.com/cinimoD_Dev" target="_blank"><i class="fab fa-twitter hover:text-red-400"></i></a>
        |
        <a href="https://api.whatsapp.com/send/?phone=310640364521&text&app_absent=0" target="_blank"><i
                    class="fab fa-whatsapp hover:text-red-400"></i></a> |
        <a href="mailto:DominicLDC@outlook.com" target="_blank"><i class="fab fa-mailchimp hover:text-red-400"></i></a>

    </p>
</div>
<script src="letter-script.js"></script>

<footer>
</footer>

</body>
</html>