<?php

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocom | Loading........</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="h-screen flex justify-center items-center">
  <img src="./assets/liquid-loading.gif" alt="loading">
</div>
<script>
        setTimeout(function() {
            window.location.href = "home.php";
        }, 3000); // Redirect after 5 seconds (5000 milliseconds)
</script>
</body>
</html>';
?>
