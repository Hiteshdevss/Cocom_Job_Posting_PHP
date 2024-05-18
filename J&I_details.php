<?php require './components/_dbcon.php';?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">
    <?php require './components/_navbar.php'?>
    <?php
      $job_id = $_GET['job_id'];
      $sql = 'SELECT * FROM `jobs` WHERE Job_ID = '.$job_id;
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $Job_Title = $row['Job_Title'];
        $Job_Exp_lvl = $row['Job_Exp_lvl'];
        $Job_Description = $row['Job_Description'];
      }
    ?>
    <div class="flex-grow flex flex-col md:flex-row mr-0 md:mr-20 ml-0 md:ml-20 mt-5 pr-2 pl-2">
      <div class="md:w-9/12 p-5">
        <div class="flex">
        <img src="./assets/Google.png" class="mt-4 h-2/3 md:h-20 w-20 p-2 flex justify-center rounded-lg" alt="Blog Image">
        <h2 class="font-bold mt-5 text-3xl text-indigo-600 text-center md:text-justify"><?php echo $Job_Title; ?><br><span class="items-center rounded-md bg-indigo-50 px-2  font-medium text-indigo-700 text-sm ring-1 ring-inset ring-indigo-700/10"><?php echo $Job_Exp_lvl;  ?></span></h2>
        </div>
        <p class="mb-5 mt-5 text-justify"><?php echo $Job_Description; ?></p>
      </div>
      <div class="md:w-3/12 p-5">
          <h2 class="font-medium text-indigo-600 text-center md:text-justify text-3xl mt-2">Trending Articles</h2>
          <ul class="pr-5 pl-1 pt-2 text-center md:text-justify">
              <?php
              $sql = 'SELECT * FROM `blog` LIMIT 4';
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                $Blog_Title = $row['Blog_Title'];
                $Blog_ID= $row['Blog_ID'];
                echo '<li class="mt-2"><a href="blog_details.php?blogid='.$Blog_ID.'" class="text-gray-600 hover:text-gray-800">'.$Blog_Title.'</a></li>';
              }
              ?>
          </ul>
          <img class="rounded-lg flex flex-row mt-5" src="https://dummyimage.com/500x800/000/fff" alt="ad">
          <img class="rounded-lg flex flex-row mt-5" src="https://dummyimage.com/500x800/000/fff" alt="ad">
      </div>
    </div>
<?php require './components/_footer.php'?>
</body>
</html>