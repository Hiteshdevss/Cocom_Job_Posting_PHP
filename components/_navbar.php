<div class="header-2 sticky top-5 pr-2 pl-2">
  <nav class="bg-gray-50 py-2 md:py-4 mr-0 md:mr-20 ml-0 md:ml-20 shadow-lg border rounded-lg mt-5">
    <div class="container px-4 mx-auto md:flex md:items-center">

      <div class="flex justify-between items-center">
        <img src="./assets/cocom_logo.png" class="w-7 mr-2" alt="Logo">
        <a href="./index.php" class="font-bold text-3xl text-indigo-600">Cocom</a>
        <button class="rounded text-indigo-600 md:hidden" id="navbar-toggle">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
        </svg>
        </button>
      </div>

      <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
        <a href="./index.php" class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-transparent rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300">Home</a>
        <a href="./about.php" class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-transparent rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300">About</a>
        <a href="./job&intership.php" class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-transparent rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300">Jobs & Intership</a>
        <a href="./blog_list.php" class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-transparent rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300">Blog</a>
        <a href="./contact.php" class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-transparent rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300">Contact</a>
        <a href="./login.php" class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-transparent rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300">Login</a>
        <a href="#" class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Signup</a>
        <a href="#" class="p-2 lg:px-4 md:mx-2 text-red-600 text-center border border-solid border-red-600 rounded hover:bg-red-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Logout</a>
      </div>
    </div>
  </nav>
</div>

<script>
    let toggleBtn = document.querySelector("#navbar-toggle");
    let collapse = document.querySelector("#navbar-collapse");

    toggleBtn.onclick = () => {
    collapse.classList.toggle("hidden");
    collapse.classList.toggle("flex");
    };
</script>