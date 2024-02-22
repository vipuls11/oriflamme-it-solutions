<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="javascript" href="mediashare.js"> -->
    <title>Main Services</title>
</head>

<body>
    <div class="w-96 bg-sky-950 my-10 mb-10">
        <div class="p-8">
            <h3 class="my-5 text-xl font-semibold text-white">Main Services</h3> 
            <ul>
                <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><a href="ManagedItService.php" class="<?php echo(basename($_SERVER['PHP_SELF'])=="ManagedItService.php"?"active2":"")?>"><span class="bg-red-700 p-3  absolute bottom-3 left-2 rounded-full opacity-60"></span> MANAGED IT SERVICES <span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></a></li>
                <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><a href="networking.php" class="<?php echo(basename($_SERVER['PHP_SELF'])=="networking.php"?"active2":"")?>"><span class="bg-red-700 p-3  absolute bottom-3 left-1 rounded-full opacity-60"></span>NETWORKING SOLUTIONS <span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></a></li>
                <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><a href="virtualization.php" class="<?php echo(basename($_SERVER['PHP_SELF'])=="virtualization.php"?"active2":"")?>"><span class="bg-red-700 p-3  absolute bottom-3 left-1 rounded-full opacity-60"></span>VIRTUALIZATION <span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></a></li>
                <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><a href="security.php" class="<?php echo(basename($_SERVER['PHP_SELF'])=="security.php"?"active2":"")?>"><span class="bg-red-700 p-3  absolute bottom-3 left-1 rounded-full opacity-60"></span>NETWORKING SECURITY <span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></a></li>
                <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><a href="amc.php" class="<?php echo(basename($_SERVER['PHP_SELF'])=="amc.php"?"active2":"")?>"><span class="bg-red-700 p-3  absolute bottom-3 left-1 rounded-full opacity-60"></span>AMC | FM’S SERVICES <span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></a></li>
                <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><a href="cloudtechnology.php" class="<?php echo(basename($_SERVER['PHP_SELF'])=="cloudtechnology.php"?"active2":"")?>"><span class="bg-red-700 p-3  absolute bottom-3 left-1 rounded-full opacity-60"></span>CLOUD SERVICES <span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></a></li>
                <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><a href="backup.php" class="<?php echo(basename($_SERVER['PHP_SELF'])=="backup.php"?"active2":"")?>"><span class="bg-red-700 p-3  absolute bottom-3 left-1 rounded-full opacity-60"></span>DATA BACKUP AND RECOVERY<span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></a></li>
                <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><a href="softwarelicensce.php" class="<?php echo(basename($_SERVER['PHP_SELF'])=="softwarelicensce.php"?"active2":"")?>"><span class="bg-red-700 p-3  absolute bottom-3 left-1 rounded-full opacity-60"></span>SOFTWARE LICENSING <span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></a></li>
                <!-- <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><span class="bg-red-700 p-3  absolute bottom-3 left-1 rounded-full opacity-60"></span>SURVEILLANCE SERVICE <span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></li> -->
            </ul>
        </div>
    </div>
     
    <div class="w-96 bg-sky-950 my-10">
        <div class="p-8">
            <h3 class="my-5 text-xl font-semibold text-white">Brochures</h3>
            <div class=" w-full text-white h-full">
           <p class="my-4 text-justify">Our speciality is providing complete solution and systems that work through the use of our outstanding design, unique client engagement model, procurement, project management, implementation and support processes.</p>
         <button class="bg-red-600 text-white px-4 py-2 border-4 border-double border-white"> <a href="img/Company Profile .pdf" download>Download</a></button>
        </div>
        </div>
    </div>

    <div class="w-96 bg-sky-950 my-10">
        <div class="p-8">
            <h3 class="my-5 text-xl font-semibold text-white">Follow Us</h3>
            <div class="flex  gap-5  text-2xl w-full h-full">
            <a class="facebook" ><span class="text-blue-600"><i class="fa-brands fa-facebook-f" ></i></span></a>
            <a class="twitter" href="#"><span class="text-blue-500"><i class="fa-brands fa-twitter" > </i></span></a>
            <a class="linkedin" href="#"><span class="text-sky-700"><i class="fa-brands fa-linkedin" ></i></span></a>
            <a class="pinterest" href=""><span class="text-red-700"><i class="fa-brands fa-square-pinterest"></i></span></a>
        </div>
        </div>
    </div>
   


    <script>
        const link = encodeURI(window.location.href);
const msg = encodeURIComponent('Hey, I found interesting Blog');
const title = encodeURIComponent('10 points to incorporate in your 2023 social media strategy');

const fb = document.querySelector('.facebook');
fb.href = `https://www.facebook.com/share.php?u=${link}`;

const twitter = document.querySelector('.twitter');
twitter.href = `http://twitter.com/share?&url=${link}&text=${msg}`;

const linkedIn = document.querySelector('.linkedin');
linkedIn.href = `https://www.linkedin.com/sharing/share-offsite/?url=${link}`;

// const reddit = document.querySelector('.reddit');
// reddit.href = `http://www.reddit.com/submit?url=${link}&title=${title}`;

// const whatsapp = document.querySelector('.whatsapp');
// whatsapp.href = `https://api.whatsapp.com/send?text=${msg}: ${link}`;

const pinterest = document.querySelector('.pinterest');
pinterest.href = `http://pinterest.com/share?&url=${link}&text=${msg}`;

// const telegram = document.querySelector('.telegram');
// telegram.href = `https://telegram.me/share/url?url=${link}&text=${msg}`;

//  const instagram = document.querySelector('.instagram');
// instagram.href = `https://www.pinterest.com/pin/create/button/?url=${link}`;

    </script>
</body>

</html>