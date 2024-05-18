<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex flex-col">
<?php require './components/_navbar.php'?>

<div class="flex-grow flex flex-col items-center justify-center px-2 md:px-20 static">
    <img src="./assets/Submitted.gif" class="h-36 mb-5" alt="logo">
    <h1 class="text-5xl md:text-7xl font-bold text-center text-indigo-600 mt-2">Thank You!!</h1>
    <h3 class="text-xl md:text-2xl font-bold text-center text-indigo-600 mt-2">Information successfully registered. We will call you shortly.</h3>
    <p class="md:py-4 mr-0 md:mr-20 ml-0 md:ml-20 mt-1 pr-10 pl-10 text-center">We respect your privacy. Your Information is safe with us.</p>
    <a href="./contact.php"><button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>Back
    </button></a>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = 'contact.php';
        }, 5000); // Redirect after 5 seconds (5000 milliseconds)
    </script>

</body>
</html>
