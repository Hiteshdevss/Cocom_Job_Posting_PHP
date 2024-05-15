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
        <img src="./assets/desktop_about.png" class="rounded-md hidden md:block" alt="about">
        <!-- Second image visible on mobile -->
        <img src="./assets/mobile_about.png" class="rounded-md md:hidden" alt="about">
    </div>

    <!-- our value section started -->
    <section class="text-gray-600 body-font mr-0 md:mr-20 ml-0 md:ml-20 mt-5" id="our-values">
    <div class="container px-5 py-10 mx-auto">
        <div class="flex flex-col text-center w-full mb-5">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-indigo-600">Our Values</h1>
        </div>
        <div class="flex flex-wrap -m-4" id="values-container">
        <div class="p-4 md:w-1/3">
            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
            <div class="flex flex-col mb-3">
                <img src="./assets/empowerment.png" class="w-20" alt="Empowerment">
                <h2 class="text-gray-900 text-lg title-font font-medium">Empowerment</h2>
            </div>
            <div class="flex-grow">
                <p class="leading-relaxed text-base text-justify">At Cocom, we believe in empowering fresher talent by providing them with unparalleled opportunities to kickstart their careers. Our platform serves as a gateway for freshers to explore a multitude of job and internship options tailored to their skills and aspirations.</p>
            </div>
            </div>
        </div>
        <div class="p-4 md:w-1/3">
            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
            <div class="flex flex-col mb-3">
            <img src="./assets/inclusivity.png" class="w-20" alt="Inclusivity">
                <h2 class="text-gray-900 text-lg title-font font-medium">Inclusivity</h2>
            </div>
            <div class="flex-grow">
                <p class="leading-relaxed text-base text-justify">Inclusivity is at the heart of what we do. We strive to create a diverse and inclusive environment where every fresher feels welcomed and valued. Regardless of background or experience, Cocom ensures equal access to opportunities for all.</p>
            </div>
            </div>
        </div>
        <div class="p-4 md:w-1/3">
            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
            <div class="flex flex-col mb-3">
            <img src="./assets/Excellence.png" class="w-20" alt="Excellence">
                <h2 class="text-gray-900 text-lg title-font font-medium">Excellence</h2>
            </div>
            <div class="flex-grow">
                <p class="leading-relaxed text-base text-justify">We are committed to excellence in everything we do. From curating top-notch job and internship listings to providing exceptional support to our users, excellence is ingrained in every aspect of the Cocom experience. We continuously strive to raise the bar and set new standards for the industry.</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- our value section ended -->

    <section class="text-gray-600 body-font mr-0 md:mr-20 ml-0 md:ml-20 -mt-20">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-indigo-600">About Us</h1>
        <p class="mb-8 leading-relaxed text-justify">Welcome to Cocom, your go-to portal for fresher job and internship opportunities. At Cocom, we understand the challenges that fresh graduates face when entering the job market, which is why we are dedicated to providing a platform that connects talented individuals with exciting career prospects. Whether you're a recent graduate looking to kickstart your career or an employer seeking fresh talent, Cocom offers a seamless solution. Our user-friendly interface and comprehensive database make it easy for candidates to browse through job openings and internship programs, while our streamlined application process ensures a hassle-free experience. Join us at Cocom and take the first step towards a successful career journey.</p>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
        </div>
    </div>
    </section>

    <section class="text-gray-600 body-font mr-0 md:mr-20 ml-0 md:ml-20 -mt-36">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
        </div>
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-indigo-600">Who We Are?</h1>
        <p class="mb-8 leading-relaxed text-justify">"Cocom" is more than just a brand; it's a commitment to empowering the future workforce. At Cocom, we are dedicated to providing opportunities for fresher job seekers and aspiring interns to kickstart their careers and fulfill their professional aspirations. We believe in fostering an inclusive environment where talent meets opportunity, bridging the gap between potential and success. With our innovative platform, we aim to revolutionize the job and internship search experience, offering a seamless and user-friendly interface that connects talented individuals with reputable organizations. At Cocom, we are not just a portal; we are a community-driven initiative that believes in the power of fresh perspectives and new beginnings. Join us on our journey to redefine career advancement and unlock the potential within every individual.</p>
        </div>
    </div>
    </section>

    <script src="//code.tidio.co/iiifjimfg5spwyx0ujxk9euq63ylit2n.js" async></script>
    <?php require './components/_footer.php'?>
</body>
</html>
        