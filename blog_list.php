<?php require './components/_dbcon.php'?>
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
        <img src="./assets/desktop_BLOG.png" class="rounded-md hidden md:block" alt="Job & Intership">
        <!-- Second image visible on mobile -->
        <img src="./assets/mobile_BLOG.png" class="rounded-md md:hidden" alt="Job & Intership">
    </div>

<section class="text-gray-600 body-font mr-0 md:mr-20 ml-0 md:ml-20 -mt-10">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      
    <!-- fetch all blog -->
    <?php
    $sql = 'SELECT * FROM `blog`';
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $Blog_ID= $row['Blog_ID'];
      $Blog_Title= $row['Blog_Title'];
      $Blog_Description= $row['Blog_Description'];
      $Blog_Category= $row['Blog_Category'];
      $Blog_Img= $row['Blog_Img'];
      echo'<div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="'.$Blog_Img.'" width="720" height="400" alt="blog">
          <div class="p-6">
            <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-700/10 mb-3">'.$Blog_Category.'</span>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">'.$Blog_Title.'</h1>
            <p class="leading-relaxed mb-3">'.subStr($Blog_Description,0,100).' ...</p>
            <div class="flex items-center flex-wrap">
              <a href="blog_details.php?blogid='.$Blog_ID.'" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              
            </div>
          </div>
        </div>
      </div>';
    }
    ?>

    </div>
  </div>
</section>
<script src="//code.tidio.co/iiifjimfg5spwyx0ujxk9euq63ylit2n.js" async></script>

    <?php require './components/_footer.php'?>
</body>
</html>
