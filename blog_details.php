<?php require './components/_dbcon.php'?>
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
      $blogid = $_GET['blogid'];
      $sql = 'SELECT * FROM `blog` WHERE Blog_ID = '.$blogid;
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $Blog_Title = $row['Blog_Title'];
        $Blog_Description = $row['Blog_Description'];
        $Blog_Category= $row['Blog_Category'];
        $Blog_Img= $row['Blog_Img'];
      }
    ?>
    <div class="flex-grow flex flex-col md:flex-row mr-0 md:mr-20 ml-0 md:ml-20 mt-5 pr-2 pl-2">
      <div class="md:w-9/12 p-5">
        <img src="<?php echo $Blog_Img; ?>" class="mt-2 h-2/3 md:h-96 w-full flex justify-center rounded-lg" alt="Blog Image">
        <h2 class="font-bold mt-5 text-3xl text-indigo-600 text-center md:text-justify"><?php echo $Blog_Title; ?><span class="items-center rounded-md bg-indigo-50 px-2 ml-3 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-700/10"><?php echo $Blog_Category;  ?></span></h2>
        <p class="mb-5 mt-5 text-justify"><?php echo $Blog_Description; ?></p>
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

    <script src="//code.tidio.co/iiifjimfg5spwyx0ujxk9euq63ylit2n.js" async></script>
</body>
</html>
