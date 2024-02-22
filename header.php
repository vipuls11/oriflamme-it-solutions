<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Comfortaa&family=Dancing+Script:wght@500&family=Edu+NSW+ACT+Foundation&family=Montserrat:ital,wght@1,300;1,400&family=Noto+Sans+Zanabazar+Square&family=Noto+Sans:wght@500&family=Nunito+Sans&family=Open+Sans&family=Pacifico&family=Poppins:ital@0;1&family=Raleway:ital@0;1&family=Roboto&family=Shantell+Sans:ital@1&family=Source+Sans+Pro&family=Zeyada&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="stroke.css">
    <link rel="icon" type="image/x-icon" href="img/logo1.png">
        <!-- ----------jquery--------- -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
            crossorigin="anonymous"></script>

<title>
    <?php
    echo $title;
    ?>
</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
    font-family: 'Poppins', sans-serif;
}
        .container-2
        {width: 90%;
        margin: auto;
    }

    .nav-color{
        /* background-color: #b30000; */
        padding: 0  20px;
       
    }

        .menu:hover .Sub-Menu {
            display: block;
        }

       
        .menu:hover .sub-menu-it-services{
            display: block;
        }

        .menu:hover .sub-menu-web-services{
            display: block;
        }

        .menu a{ 
            position: relative;
        }
        .menu a:after{
            content:"";
            position: absolute;
            background-color: rgb(207, 5, 5);
            height: 2px;
            width: 0;
            left: 0;
            bottom: 0;
            transition: 0.3s;
        }

        .menu a:hover:after{
            width: 100%;
        }
        /* section{
            background-image:url("tailwin img/_backgroundscreeningservices.jpg") ;
           padding-top: 100px;
           padding-bottom: 50px;
           padding-left: 50px;
           padding-right: 50px;
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover ;  
        } */
        .ham-icon{display: none;}
        
        @media only screen and (max-width:1100px){
            #nav-menu{
            display: none;       
            position: absolute;
            left: 0;
            top: 100px;
            width: 100%;
        }
        .ham-icon{display: block;}
        .menu-item{
            background-color: rgb(8,47,73);
            flex-direction: column;
           width: 100% ;
        }
        .menu a:after{
            bottom: 0px;
        }
        .menu-item li{
            padding: 4px 0;
        }
        .menu-item li a{
            padding: 0;

        }
        .menu .sub-menu-it-services{
            top:30px;
            left: 0;
            z-index: 1100;
        }
        
        .menu .Sub-Menu{
            top:30px;
            left: 0;
            z-index: 5;
        }

        .menu .sub-menu-web-services{
            top:30px;
            left: 0;
            z-index: 5;
        }
        }

        /* ...........blog-btn................ */
        .blogbtn {
            color: #f8f5f5;
            
        }

        .blogbtn::after{
            border: 2px solid #fbf9f9;
            content:"";
            position:absolute;
            right: 14px;
            width:calc(100% - -8px);
            height:calc(100% - -10px);
            z-index:1;
            transition: transform 0.3s ease;
        }

        /* .blogbtn:hover::after{
            transform: translate(-5px, -5px);
        } */
        .blogbtn::after{
            transform: translate(6px, -20px);
        }
        .blogbtn:hover::after{
            transform: translate(18px, -11px);
        }
         /* ...........blog-btn................ */

         .active2{
            /* background-color: #fbf9f9; */
            color:red;
         }
          
    </style>
</head>
<body>
     <!-- <div class="flex justify-between px-10 py-1 bg-slate-300 text-sm ">
        <div><a href="">+91 7900108552</a></div>
        <div class="">
            <marquee behavior="" direction=""><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p></marquee>
        </div>
    </div> -->
    <div id="navbar" class="nav-color fixed w-full bg-sky-950 z-50">
    <nav class="relative flex text-gray-300 justify-between items-center py-1 " >
        <div>
            <a href="index.php"><img src="img/logo.png" alt="" width="350px"></a>
        </div>
        <div id="nav-menu">
            <ul class="nav flex text-md menu-item font-base text-white">
           <li class="menu relative "><a href="aboutus.php" class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="aboutus.php"?"active2":"")?>">ABOUT US</a></li>
         
           <li class="menu relative "><a href="products.php" class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="products.php"?"active2":"")?>">PRODUCTS</a></li>
           <li class="menu relative "><a href="itservices.php"  class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="itservices.php"?"active2":"")?>">IT SERVICES</a>
            <div class="sub-menu-it-services absolute hidden text-left top-[32px] left-5 bg-sky-950 px-2 text-white text-sm w-60">
                <ul>
                    <li  class="mb-2 py-2"> <a  href="ManagedItService.php" class=" <?php echo(basename($_SERVER['PHP_SELF'])=="ManagedItService.php"?"active2":"")?>">MANAGED IT SERVICES</a></li>
                   <li class="mb-2 py-2"><a  href="networking.php" class=" <?php echo(basename($_SERVER['PHP_SELF'])=="networking.php"?"active2":"")?>">NETWORKING SOLUTIONS</a></li>
                   <li class="mb-2 py-2"><a  class=" <?php echo(basename($_SERVER['PHP_SELF'])=="virtualization.php"?"active2":"")?>" href="virtualization.php">VIRTUALIZATION</a> </li>
                   <li class="mb-2 py-2"><a  href="security.php" class=" <?php echo(basename($_SERVER['PHP_SELF'])=="security.php"?"active2":"")?>">NETWORKING SECURITY</a></li>
                   <li class="mb-2 py-2" ><a class=" <?php echo(basename($_SERVER['PHP_SELF'])=="amc.php"?"active2":"")?>"  href="amc.php">AMC/CIO SERVICES</a> </li>
                   <li class="mb-2 py-2" ><a  href="cloudtechnology.php" class=" <?php echo(basename($_SERVER['PHP_SELF'])=="cloudtechnology.php"?"active2":"")?>">CLOUD TECHNOLOGY</a></li>
                   <li class="mb-2 py-2" ><a  href="backup.php" class=" <?php echo(basename($_SERVER['PHP_SELF'])=="backup.php"?"active2":"")?>">BACKUP & DISASTER RECOVERY</a></li>
                    <li  class="mb-2 py-2"><a  href="softwarelicensce.php" class=" <?php echo(basename($_SERVER['PHP_SELF'])=="softwarelicensce.php"?"active2":"")?>">LICENSING</a></li>
                </ul>
            </div>
            </li>
            <li><a  href="surveillance.php" class=" <?php echo(basename($_SERVER['PHP_SELF'])=="surveillance.php"?"active2":"")?>">SURVEILLANCE SERVICES</i></a>
                <div class="Sub-Menu absolute hidden text-left top-[32px] left-5 bg-sky-950 text-white px-2 py-2 text-sm  w-60">
                    <ul>
                    <li class="mb-2 py-2"><a  href="video.php" class=" <?php echo(basename($_SERVER['PHP_SELF'])=="video.php"?"active2":"")?>">VIDEO SURVEILLANCE</a></li>
                     <li class="mb-2 py-2"><a  href="accesscontrol.php" class=" <?php echo(basename($_SERVER['PHP_SELF'])=="accesscontrol.php"?"active2":"")?>">ACCESS CONTROL</a></li>
                     <li class="mb-2 py-2"><a  href="attendance.php" class=" <?php echo(basename($_SERVER['PHP_SELF'])=="attendance.php"?"active2":"")?>">ATTENDANCE SOLUTIONS</a></li>
                     <li class="mb-2 py-2"><a  href="intrusion.php" class=" <?php echo(basename($_SERVER['PHP_SELF'])=="intrusion.php"?"active2":"")?>">INTRUSION ALARM</a></li>
                    <!-- <li class="mb-2 py-2"><a   href=""></a></li>  -->
                </ul>
                 </div>
             </li>
             <li class="menu relative lg:hidden block"><a href=""  class="py-2 mx-4">BLOGS</a></li>
             <!-- <li class="menu relative"><a href=""  class="py-4 mx-4">WEB SERVICES</a>
                <div class="sub-menu-web-services absolute hidden text-left top-[58px] left-5 bg-slate-50 text-black px-2 py-2 text-lg  w-48">
                    <ul>
                         <li class="mb-2"><a  href="">WEB DEVELOPMENT</a></li> 
                        <li class="mb-2"><a  href="">CREATIVE SERVICES</a> </li>
                        <li class="mb-2"><a  href="">APP DEVELOPMENT</a> </li>
                         <li class="mb-2"><a  href="">MOBILE APP DEV</a></li>
                        <li class="mb-2"> <a   href="">SUPPORT & MAINTENANCE</a></li> 
                        <li class="mb-2"><a  href="">DIGITAL MARKETING</a></li> 
                        <li class="mb-2"><a  href="">BULK SMS SERVICES</a></li> 
                    </ul>
                </div>y
            </li> -->
            <li class="menu relative "><a href="contactus.php"  class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="contactus.php"?"active2":"")?>">CONTACT US</a></li>
        </ul>
        </div>
        <div class="bg-red-800 px-6 py-1.5 lg:block hidden relative">
            <a href="" class="text-white font-semibold "><button class="blogbtn">BLOGS</button></a>
        </div>
        <div  class="ham-icon"  onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </div>
        <!-- <div class="flex text-lg">
            <form action="" class="px-6">
            <input class="px-2 outline-none border" type="text" placeholder="search"> 
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
            <button >Login</button>
        </div> -->
     </nav> 
</div> 

     <script>
        function myFunction() {
          var x = document.getElementById("nav-menu");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
        </script>
        <script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-10px";
  }
}
</script> 

<script>
   
</script>
</body>
</html>