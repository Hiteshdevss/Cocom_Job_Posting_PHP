<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-indigo-300 via-indigo-200 to-white">
<?php require './components/_navbar.php'?>
<div class="h-screen container flex justify-center">
    <div class="h-100 w-96 bg-gray-50 rounded-lg p-5 mt-20 shadow-lg fixed">
    <h1 class="text-xl text-center mb-2">Only <span class="text-indigo-600 font-bold">*Admins*</span> can access from here</h1>
        <input type="text" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="name@cocom.top">
        <input type="password" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-3" placeholder="#1233@%">
        <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-3">Access to Dashboard</button>
    </div>
</div>
<body>
</body>
</html>