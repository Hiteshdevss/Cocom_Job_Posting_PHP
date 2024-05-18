<?php 
  require './components/_dbcon.php';

  if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name= $_POST['name'];
  $email= $_POST['email'];
  $message= $_POST['message'];

  $sql = "INSERT INTO `contact_form` (`Name`, `Email`, `Message`) VALUES ('$name', '$email', '$message')";
  $result = mysqli_query($conn, $sql);
  if($result){
    header("Location: thankyou.php");
  }
  }
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php require './components/_navbar.php'?>

    <div class="py-2 md:py-4 mr-0 md:mr-20 ml-0 md:ml-20 mt-5 pr-2 pl-2">
        <!-- First image visible on desktop -->
        <img src="./assets/desktop_JOB_&_INTERSHIP.png" class="rounded-md hidden md:block" alt="Job & Intership">
        <!-- Second image visible on mobile -->
        <img src="./assets/mobile_JOB_&_INTERSHIP.png" class="rounded-md md:hidden" alt="Job & Intership">
    </div>

    <section class="text-gray-600 body-font">
  <div class="container px-5 py-5 mx-auto top-0">
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="lg:w-1/2 md:w-2/3 mx-auto">    
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="static">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="static">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="static">
            <label for="message" class="leading-7 text-sm text-gray-600">Message / Query</label>
            <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit Query</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</section>
    
<script src="//code.tidio.co/iiifjimfg5spwyx0ujxk9euq63ylit2n.js" async></script>
<?php require './components/_footer.php'?>

</body>
</html>
