<?php 
$title='IT Solutions Services in Mumbai | Oriflamme IT Solutions';
$description='';
$keywords='';
$canonical='https://www.oriflammeitsolutions.com/';
$Title1='IT Solutions Services in Mumbai | Oriflamme IT Solutions.';
$Description3='';
$Title3='IT Solutions Services in Mumbai | Oriflamme IT Solutions';
$alternateName='IT Solutions Services in Mumbai | Oriflamme IT Solutions';
$Description2='';
$image='https://www.oriflammeitsolutions.com/img/man-5866475_1920.jpg';
$url='https://www.oriflammeitsolutions.com/';
?>
<?php
     $a=array("name","email","subject","contact","massage");
    //  global $subject;
    //  global $name;
    //  global $email;
    //  global $subject;
    //  global $contact;
     global $massage;
    $insert = false;
    $host = "localhost";
    $user = "priyadsj_mannu";
    $password ="Meady@1992#";
    $db_name ="priyadsj_oriflamme";
  
    
   
   $conn = mysqli_connect($host, $user, $password, $db_name);

    if (mysqli_connect_errno()) {
        die("Failed to connect with MySQL:" . mysqli_connect_errno());
    } else {
        $nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";
        $name = $email = $mobileno = "";
        $ctr=0;
        //Input fields validation  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //String Validation  
            if (empty($_POST['name'])) {
                $nameErr = "Name is required";
                $ctr++;
            } else {
                $name = input_data($_POST["name"]);
                // check if name only contains letters and whitespace  
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only alphabets and white space are allowed";
                    $ctr++;
                }
            }

            //Email Validation   
            if (empty($_POST['email'])) {
                $emailErr = "Email is required";
                $ctr++;
            } else {
                $email = input_data($_POST["email"]);
                // check that the e-mail address is well-formed  
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                    $ctr++;
                }
            }

            //Number Validation  
            if (empty($_POST['contact'])) {
                $mobilenoErr = "Mobile no is required";
                $ctr++;
            } else {
                $mobileno = input_data($_POST["contact"]);
                // check if mobile no is well-formed  
                if (!preg_match("/^[0-9]*$/", $mobileno)) {
                    $mobilenoErr = "Only numeric value is allowed.";
                    $ctr++;
                }
                //check mobile no length should not be less and greator than 10  
                if (strlen($mobileno) != 10) {
                    $mobilenoErr = "Mobile no must contain 10 digits.";
                    $ctr++;
                }
            }

            //URL Validation      
            // if (empty($_POST["website"])) {  
            //     $website = "";  
            // } else {  
            //         $website = input_data($_POST["website"]);  
            //         // check if URL address syntax is valid  
            //         if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {  
            //             $websiteErr = "Invalid URL";  
            //         }      
            // }  

            //Empty Field Validation  
            // if (empty($_POST["gender"])) {  
            //         $genderErr = "Gender is required";  
            // } else {  
            //         $gender = input_data($_POST["gender"]);  
            // }  

            //Checkbox Validation  
            // if (!isset($_POST['agree'])){  
            //         $agreeErr = "Accept terms of services before submit.";  
            // } else {  
            //         $agree = input_data($_POST["agree"]);  
            // } 

            $sql = "INSERT INTO contact_us(Name, Email, Subject, Contact, Massage)
            VALUES ('" . $_REQUEST['name'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['subject'] . "','" . $_REQUEST['contact'] . "','" . $_REQUEST['massage'] . "')";
    
            if ($ctr==0 && $conn->query($sql) === TRUE) {
                // echo "Record Submitted Successfully";
                $insert = true;
            } else {
                // echo "Error:" . $sql . "<br>" . $conn->error;
            }

        }

       
        $conn->close();

        // header("location:contactus.php ?");


    }
    ?>
    <?php
    // define variables to empty values  
    function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <style>
        /* ...........blog-btn................ */
        .btnslides {
            color: #f8f5f5;

        }

        .btnslides::after {
            border: 2px solid black;
            content: "";
            position: absolute;
            left: 0px;
            width: calc(16% - 8px);
            height: calc(100% - -9px);
            z-index: 1;
            transition: transform 0.3s ease;
        }

        /* .blogbtn:hover::after{
            transform: translate(-5px, -5px);
        } */
        .btnslides::after {
            transform: translate(8px, -20px);
        }

        .btnslides:hover::after {
            transform: translate(21px, -10px);
        }

        /* ...........blog-btn................ */

        /* ...........About-btn................ */
        .btnslides1 {
            color: #f8f5f5;

        }

        .btnslides1::after {
            border: 2px solid black;
            content: "";
            position: absolute;
            left: 0px;
            width: calc(16% - -22px);
            height: calc(100% - -9px);
            z-index: 1;
            transition: transform 0.3s ease;
        }

        /* .blogbtn:hover::after{
            transform: translate(-5px, -5px);
        } */
        .btnslides1::after {
            transform: translate(8px, -20px);
        }

        .btnslides1:hover::after {
            transform: translate(21px, -10px);
        }

        /* ...........About-btn................ */

        /* ..............................services............ */
        /* .imageborder{
            border: 2px solid red;
            border-radius: 50%;
            content:"";
            position:absolute;
            left: 0px;
            width: calc(100% - 130px);
            height: calc(100% - 130px);
            transform: translate(18px, -12px);
            z-index:1;
         } */

        /* .imageborder1{
            border: 1px solid red;
            border-radius: 50%;
            content:"";
            position:absolute;
            left: 433px;
            width: calc(100% - 130px);
            height: calc(100% - 130px);
            transform: translate(18px, -12px);
            z-index:1;
         } */

        /* .imageborder2{
            border: 1px solid red;
            border-radius: 50%;
            content:"";
            position:absolute;
            right: 415px;
            width: calc(100% - 130px);
            height: calc(100% - 130px);
            transform: translate(18px, -12px);
            z-index:1;
         } */

        .animation_card {
            transition: .5s all ease-in-out;
            transform-origin: top;
            transform: perspective(1000px) rotateY(180deg);
        }

        .animation_card:hover {
            transform: perspective(1000px) rotateY(360deg);
        }

        .animation_card:hover {
            transform: perspective(1000px) rotateY(360deg);
        }
       
        /* ................accordiance................... */
        .active,
        .accordion:hover {
            background-color: #ccc;
            color: red;
        }

        .active:after {
            content: "\2212";

        }

        /* ................accordiance................... */

/* ....................details container............ */
        /* .sun{
            box-shadow:
		0 0 0 10px #FFDE0030,
		0 0 0 20px #FFDE0020,
		0 0 0 30px #FFDE0010,
		0 0 0 40px #FFDE0020,
		0 0 0 50px #FFDE0000,
		0 0 20px 50px #FFDE0010;
	animation:
		sunrise 2s infinite linear forwards,
		rays 2s 2s infinite linear;
        }
        @keyframes sunrise {
	0% {
		box-shadow: none;
	}
}

@keyframes rays {
	0% {
		box-shadow: 
		0 0 0 0 #FFDE0020,
		0 0 0 10px #FFDE0020,
		0 0 0 20px #FFDE0030,
		0 0 0 30px #FFDE0020,
		0 0 0 10px #FFDE0010,
		0 0 20px 70px #FFDE0010;
	}
	100% {
		box-shadow: 
		0 0 0 10px #FFDE0020,
		0 0 0 20px #FFDE0010,
		0 0 0 30px #FFDE0000,
		0 0 0 40px #FFDE0010,
		0 0 0 60px #FFDE0000,
		0 0 20px 70px #FFDE0010;
	} */
/* } */
        
/* ....................details container............ */
/* ....image slider servies..... */
ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.carousel {
  position: relative;
  overflow: visible;
  margin-top: 50px;
  /* background-color: rgb(212, 251, 0); */
  /* background: linear-gradient(
    10deg,
    rgba(212, 251, 0, 0.5) 0%,
    rgba(255, 0, 245, 0.5) 100%
  ); */
  /* box-shadow: 5px 10px 30px rgba(255, 255, 255, 0.15); */
  /* border-radius: 20px; */
}

.carousel__slider {
  position: relative;
  display: flex;
  align-items: center;
  width: 253vw;
  /* border: 2px solid #333; */
  height: 400px;
}


.carousel__list {
  position: absolute;
  width: 100%;
  /* top: 50%; */
  left: 0;
  /* transform: translateY(-50%); */
  display: flex;
  align-items: center;
  justify-content: space-around;
}

.carousel__item {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 400px;
  overflow: visible;
  height: 350px;
  display: block;
  /* border: 2px solid #333; */
  box-sizing: border-box;
  background-color: rgba(255, 255, 255, 0.3);
  cursor: pointer;
}
.carousel__item:hover + .carsousel_product{
    display: none;
}

.carousel__item:hover {
  transform: scale(1);
 
  background-color: rgba(255, 255, 255, 0.7);
}
/* ....image slider servies..... */
/* ...........tabs................. */
.tablinks.active1{
/* background-color: midnightblue; */
background-color: #ccc;
color: midnightblue;
}
/* ...........tabs................. */
.card_wrapper .mini_card{
display: block;
}
.card_wrapper:hover .mini_card {
    display: none;
}
.card_wrapper .mini_card:hover {
    display: block;
}
/*........................marquae...............*/
 /* -----home----------- */

        @-webkit-keyframes scroll {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(calc(-250px * 7));
                }
            }

            @keyframes scroll {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(calc(-250px * 7));
                }
            }

            .slidermar {
                background: white;
                /* box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125); */
                height: 180px;
                margin: auto;
                overflow: hidden;
                position: relative;
                width:100%;
            }

            .slidermar::before,
            .slidermar::after {
                background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
                content: "";
                height: 180px;
                position: absolute;
                width: 200px;
                z-index: 2;
            }

            .slide-track img{
                /*width: 60%;*/
                aspect-ratio: 3/2;
                object-fit: contain;
                mix-blend-mode: color-burn;
            }

            .slidermar::after {
                right: 0;
                top: 0;
                transform: rotateZ(180deg);
            }

            .slidermar::before {
                left: 0;
                top: 0;
            }

            .slidermar .slide-track {
                -webkit-animation: scroll 40s linear infinite;
                animation: scroll 40s linear infinite;
                display: flex;
                width: calc(250px * 14);
            }

            .slidermar .slidemar {
                height: 180px;
                width: 250px;
            }
            
            /*.................career page css..................*/
             .cardcareer{
        position: relative;
        display: inline-block;
        padding: 6px 10px;
        border: 2px solid #111;
        /* text-transform:uppercase; */
        color:#111;
        text-decoration: none;
        /* font-weight:600; */
        /* font-size: 20px; */
        /* box-shadow: 10px 10px 14px #000000; */
    }

    .card_content{
        position: relative;
        z-index: 3;
    }

    .cardcareer:before{
        content: '';
        position:absolute;
        top:4px;
        left: -2px;
        width: calc(100% + 10px);
        height: calc(100% - 12px);
        background: #fff;
        transition:0.5s ease-in-out;
        transform:scaleY(1)
    }

    .cardcareer:hover:before{
        transform: scaleY(0);
    }

    .cardcareer:after{
        content: '';
        position:absolute;
        left: 4px;
        top: -2px;
        height: calc(100% + 10px);
        width: calc(100% - 12px);
        background: #fff;
        transition:0.5s ease-in-out;
        transform:scaleX(1);
        transition-delay: 0.5s;
    }

    .cardcareer:hover:after{
        transform: scaleX(0);
    }
      /*.................career page css..................*/
    </style>

    <?php include("header.php") ?>
    <div class="">
        <!-- ..........slide image......... -->
        <div>
            <div id="slider">
                <div class="slides relative">
                    <img src="img/banner2.png" width="100%" class="" />
                    <div class="absolute top-2 lg:top-10 right-5 w-8/12 ml-auto">
                        <h1 class="lg:text-5xl  text-white font-bold uppercase my-10 ">Build Your Business with Expert IT Support and Consulting Services.</h1>
                        <p class="lg:text-lg hidden lg:block md:block my-4">With Oriflamme IT Solutions, achieving success has never been easier. <br> IT Support and Consulting Services will help your business thrive and reach new heights. take the next step towards greatness.</p>
                        <div class=" mt-10 relative lg:block hidden">
                            <a href="contactus.php" class="text-white font-semibold"> <button class="btnslides bg-red-800 ml-6 px-6 py-1.5 ">GET START</button></a>
                        </div>
                    </div>
                </div>


                <div class="slides relative">
                    <img src="img/banner3.png" width="100%" class="" />
                    <div class="absolute top-2 lg:top-10 right-5 w-8/12 ml-auto">
                        <h1 class="lg:text-5xl  text-white font-bold uppercase my-10">Your Business Success is just one decision away.</h1>
                        <p class="lg:text-lg my-4 hidden lg:block md:block">We provide a comprehensive range of IT services tailored to your business needs, from cybersecurity to cloud computing solutions. Let us help you streamline your IT infrastructure and optimize your business operations.
                        </p>
                        <div class=" mt-10 relative lg:block hidden">
                            <a href="contactus.php" class="text-white font-semibold"> <button class="btnslides bg-red-800 ml-6 px-6 py-1.5 ">GET START</button></a>
                        </div>
                    </div>
                </div>

                <div class="slides relative">
                    <img src="img/banner4.png" width="100%" class="" />
                    <div class="absolute top-2 lg:top-10 right-5 w-8/12 ml-auto">
                        <h1 class="lg:text-5xl  text-white font-bold uppercase w-3/4 my-10 ">Exceptional IT Services for Your Success.</h1>
                        <p class="lg:text-lg  my-4 hidden lg:block md:block">We know that every business has unique technology needs. That's why our team is committed to providing customized IT solutions that help you reach your goals faster and more efficiently than ever before.</p>
                        <div class=" mt-10 relative lg:block hidden">
                            <a href="contactus.php" class="text-white font-semibold"><button class="btnslides bg-red-800 ml-6 px-6 py-1.5 ">GET START</button></a>
                        </div>
                    </div>
                </div>


                <!-- <div id="dot"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
 </div> -->
            </div>
        </div>
        <!-- ................slide_image.......... -->

        <!-- .......what we do........... -->
        <div class="container my-10 px-8 mx-auto lg:pt-10 lg:pb-20">
            <div class="text-center py-10">
            
                <h1 class="uppercase text-red-800 text-md font-semibold">What we do</h3>
                <!-- <div class="stroke"></div> -->
                    <h1 class="text-4xl font-extrabold mt-4">Services That Help You Grow.</h1>
            </div>
            <div class="grid lg:grid-cols-3 lg:gap-5 gap-14 ">
                <div>
                    <div class="card_wrapper bg-red-100  relative bg-no-repeat bg-cover cursor-pointer"><img class=" w-full h-full cursor-pointer" src="img/Product-vs-Service-based-Companies.jpg" alt="">
                        <div class="image_card absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">
                            <div class="text-white text-center">
                                <span><img src="img/product.png" alt="" class="w-20 h-20 mx-auto my-4"></span>
                                <h1 class="text-3xl font-semibold hover:text-red-800 my-2"><a href="All_in_One_Computer_Laptop_Desktop_and_Accessories_Dealer_partner">PRODUCTS</a></h1>
                                <p class="px-10">We focus on the best practices for it solutions and services</p>
                            </div>
                        </div>
                        <div class="mini_card absolute -bottom-8 right-0 overflow">
                           <div class="flex gap-5 items-center justify-end bg-slate-100 w-96 ml-auto">
                                <img src="img/scan.png" alt="" class="w-12 h-12">
                                 <h1 class="uppercase text-2xl font-bold ">PRODUCT</h1>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="card_wrapper  relative  bg-no-repeat bg-cover cursor-pointer"><img class=" w-full h-full cursor-pointer" src="img/It_services.jpg" alt="">
                        <div class="image_card absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">
                            <div class="opacity-100 text-white text-center">
                                <span><img src="img/technical-support (1).png" alt="" class="w-20 h-20 mx-auto my-4"></span>
                                <h1 class="text-3xl font-semibold hover:text-red-800 my-2"><a href="It_Services">IT SERVICES</a></h1>
                                <p class="px-10">We focus on the best practices for it solutions and services</p>
                            </div>
                        </div>
                        <div class="mini_card absolute -bottom-8 right-0 overflow">
                            <div class="flex gap-5 items-center justify-end bg-slate-100 w-96 ml-auto">
                                <img src="img/technical-support.png" alt="" class="w-12 h-12">
                                <h1 class="uppercase text-2xl font-bold ">IT SERVICES</h1>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="card_wrapper  relative  bg-no-repeat bg-cover cursor-pointer"><img class=" w-full h-full cursor-pointer" src="img/surveillanceservice.jpg" alt="">
                        <div class="image_card absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">
                            <div class="opacity-100 text-white text-center">
                                <span><img src="img/cctv-camera.png" alt="" class="w-20 h-20 mx-auto my-4"></span>
                                <h1 class="text-3xl font-semibold hover:text-red-800 my-2"><a href="surveillance-service">SURVEILLANCE SERVICES</a></h1>
                                <p class="px-10">We focus on the best practices for it solutions and services</p>
                            </div>
                        </div>
                        <div class="mini_card absolute -bottom-8 right-0 overflow">
                            <div class="flex gap-2 items-center justify-end bg-slate-100 w-96 ml-auto">
                                <img src="img/cctv (1).png" alt="" class="w-12 h-12">
                                <h1 class="uppercase text-2xl font-bold ">SURVEILLANCE SERVICES</h1>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .......what we do........... -->

        <!-- ...........About Us................. -->
        <div class="lg:py-14 my-10 px-8 bg-gray-100 ">
            <div class="container mx-auto lg:flex gap-2 items-center">
                <div class="lg:w-2/5"><img src="img/IT Solutions company.jpg" alt="" class=""></div>
                <div class="relative lg:w-3/5 ">
                    <div class="text-left py-10">
                        <h1 class="uppercase text-red-800 text-md font-semibold text-center">About Us</h3>
                        <!-- <div class="stroke"></div> -->
                            <h1 class="slidupeanimate text-4xl font-extrabold mt-4">What makes us unique in IT service transformation?</h1>
                    </div>
                    <div class="">
                        <p class="">Our Expert Solutions Include IT Support & services, IT Consulting, IT Help Desk, data analysis tools and more. We specialize in helping organizations make informed decisions about their digital presence and IT infrastructure so they can focus on what matters most: delivering great customer experiences!</p>
                        <div class="grid grid-cols-2  lg:w-3/5 my-10">
                            <div class="slidedowntoupanimate border-r-2 border-r-grey-700 text-center">
                                <h1 class="num text-4xl font-bold text-red-600 my-2" data-val="12">12</h1>
                                <h3>Years Experience</h3>
                            </div>
                            <div class="px-4">
                                <ul class="leading-8">
                                    <li><span class="text-lg font-semibold text-red-600">&#x2713;</span> information Security</li>
                                    <li><span class="text-lg font-semibold text-red-600">&#x2713;</span> Mobile Platform</li>
                                    <li><span class="text-lg font-semibold text-red-600">&#x2713;</span> Data Synchronization</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 relative lg:block hidden">
                        <a href="" class="text-white font-semibold"> <button class="btnslides1 bg-red-800 ml-6 px-6 py-1.5 uppercase">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...........About Us................. -->

    <div class="bg-sky-950 bg-[url('img/bg-01.png')] bg-cover no-repeat">
        <div class="container mx-auto my-10 px-8">
            <div class="text-center py-10">
                <h1 class="uppercase text-red-800 text-md font-semibold">OUR SERVICES</h3>
                <!-- <div class="stroke"></div> -->
                    <h1 class="text-4xl font-extrabold mt-4 text-white ">We Provide The Best Services</h1>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-x-5 gap-y-10 pb-20">
                <div class="flex gap-5">
                    <div class="">
                        <img src="img/serviceslogos/manager it service.png" alt="" class="w-24 w-24">
                    </div>
                    <div class="grid place-content-center">
                        <h1 class="uppercase font-bold text-lg text-center text-white hover:text-red-600">Managed it services</h1>
                        <!--<p class="my-2 text-md font-semibold text-gray-400">We focus on the best practices for it solutions and services.</p>-->
                        <button class="text-md font-semibold text-white hover:text-red-600"><a href="Managed_It_Services"> Read more<span>&#8594;</span></a></button>
                    </div>
                </div>

                <div class="flex  gap-5">
                    <div class="">
                        <img src="img/serviceslogos/networking solution.png" alt="" class="w-24 w-24">
                    </div>
                    <div class="grid place-content-center">
                        <h1 class="uppercase font-bold text-lg text-center text-white hover:text-red-600">Networking Solutions</h1>
                        <!--<p class="my-2 text-md font-semibold text-gray-400">We focus on the best practices for it solutions and services.</p>-->
                        <button class="text-md font-semibold text-white hover:text-red-600"><a href="Network_Solutions">Read more<span>&#8594;</span></a></button>
                    </div>
                </div>

                <div class="flex gap-5">
                <div class="">
                        <img src="img/serviceslogos/virulization.png" alt="" class="w-24 w-24">
                    </div>
                    <div class="grid place-content-center">
                        <h1 class="uppercase font-bold text-center text-lg text-white hover:text-red-600">Virtualization</h1>
                        <!--<p class="my-2 text-md font-semibold text-gray-400">We focus on the best practices for it solutions and services.</p>-->
                        <button class="text-md font-semibold text-white hover:text-red-600"><a href="Virtualization">Read more<span>&#8594;</span></a></button>
                    </div>
                </div>

                <div class="flex gap-5">
                <div class="">
                        <img src="img/serviceslogos/network security.png" alt="" class="w-24 w-24">
                    </div>
                    <div class="grid place-content-center">
                        <h1 class="uppercase font-bold text-lg text-center text-white hover:text-red-600">Networking Security</h1>
                        <!--<p class="my-2 text-md font-semibold text-gray-400">We focus on the best practices for it solutions and services.</p>-->
                        <button class="text-md font-semibold text-white hover:text-red-600"><a href="IT_Security_and_Network_Security">Read more<span>&#8594;</span></a></button>
                    </div>
                </div>

                <div class="flex gap-5">
                <div class="">
                        <img src="img/serviceslogos/amc.png" alt="" class="w-24 w-24">
                    </div>
                    <div class="grid place-content-center">
                        <h1 class="uppercase font-bold text-center text-lg text-white hover:text-red-600">Amc | FM’s Services</h1>
                        <!--<p class="my-2 text-md font-semibold text-gray-400">We focus on the best practices for it solutions and services.</p>-->
                        <button class="text-md font-semibold text-white hover:text-red-600"><a href="AMC_FMS_CIO_Services">Read more<span>&#8594;</span></a></button>
                    </div>
                </div>

                <div class="flex gap-5">
                <div class="">
                        <img src="img/serviceslogos/cloud service.png" alt="" class="w-24 w-24">
                    </div>
                    <div class="grid place-content-center">
                        <h1 class="uppercase font-bold texttext-lg text-white hover:text-red-600">Cloud Services</h1>
                        <!--<p class="my-2 text-md font-semibold text-gray-400">We focus on the best practices for it solutions and services.</p>-->
                        <button class="text-md font-semibold text-white hover:text-red-600"><a href="Managed_Cloud_Services">Read more<span>&#8594;</span></a></button>
                    </div>
                </div>

                <div class="flex gap-5">
                <div class="">
                        <img src="img/serviceslogos/backup (2).png" alt="" class="w-24 w-24">
                    </div>
                    <div class="grid place-content-center">
                        <h1 class="uppercase font-bold text-lg text-center text-white hover:text-red-600">Data backup and Recovery</h1>
                        <!--<p class="my-2 text-md font-semibold text-gray-400">We focus on the best practices for it solutions and services.</p>-->
                        <button class="text-md font-semibold text-white hover:text-red-600"><a href="Databackup_and_Disaster_Recovery">Read more<span>&#8594;</span></a></button>
                    </div>
                </div>

                <div class="flex gap-5">
                <div class="">
                        <img src="img/serviceslogos/licensing.png" alt="" class="w-24 w-24">
                    </div>
                    <div class="grid place-content-center">
                        <h1 class="uppercase font-bold text-lg text-center text-white hover:text-red-600">Software Licensing</h1>
                        <!--<p class="my-2 text-md font-semibold text-gray-400">We focus on the best practices for it solutions and services.</p>-->
                        <button class="text-md font-semibold text-white hover:text-red-600"> <a href="Software_Licensing_Solutions">Read more<span>&#8594;</span></a></button>
                    </div>
                </div>

                <div class="flex gap-5">
                <div class="">
                        <img src="img/serviceslogos/cctv (8).png" alt="" class="w-24 w-24">
                    </div>
                    <div class="grid place-content-center">
                        <h1 class="uppercase font-bold text-lg text-center text-white hover:text-red-600">Surveillance service</h1>
                        <!--<p class="my-2 text-md font-semibold text-gray-400">We focus on the best practices for it solutions and services.</p>-->
                        <button class="text-md font-semibold text-white hover:text-red-600"><a href="surveillance-service">Read more<span>&#8594;</span></a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ............................customer  best............................ -->

    <!-- ....................customer Experience.................... -->

    <div class="container mx-auto lg:flex gap-5 my-10 px-8 lg:my-10">
        <div class="lg:w-1/2">
            <h1 class="text-4xl font-extrabold mt-4 text-black my-5 text-sky-950">Our focus is always on giving you the best client experience possible!</h1>
            <div class="my-5">
                <div class="flex gap-2">
                    <div class="">
                        <img src="img/customer expercience.jpg" alt="">
                    </div>
                    <div class="px-4 leading-8 text-sky-950">
                        <p>From our responsive communication to our attention to detail, we're dedicated to providing top-notch service every step of the way.</p>
                    </div>
                </div>
                <div>
                
                </div>
                <div class="flex items-center justify-between mt-4">
                <span class="text-md font-semibold text-black dark:text-blue-500">It Service</span>
                <span class="text-md font-semibold text-black dark:text-blue-500">70%</span>     
                </div>
                    <div class="w-full h-2  bg-gray-200 rounded dark:bg-gray-700">
                        <div class="h-2 bg-red-600 rounded" style="width: 60%"></div>
                    </div>   
            </div>
        </div>
        <div class="lg:w-1/2">
            <button class="accordion bg-grey-100 text-sky-950 p-4 border border-grey-200 transition font-semibold after: content:[\002B] after:font-bold after:ml-5 my-2 w-full text-left"><span>1. </span>Why Oriflamme IT Solutions the best company?</button>
            <div class="panel px-8  bh-white overflow-hidden max-h-0 transition-[max-h-0 0.2s ease-out] leading-7">
                <p class="leading text-justify">Our team of experts works above and beyond to provide the best IT service and solutions for our clients.
                    From exceptional customer service to high-quality products, we constantly push ourselves to be the best.
                    Customer satisfaction, quality, and reliability are our top priorities.
                    Our team has years of experience and expertise, offering top-notch services to our clients. From network security to cloud computing, we've got you covered.
                    We've put in the work, done our research, and listened to our customers. That's why we're confident in saying we're the best at what we do.
                    </p>
            </div>

            <button class="accordion bg-grey-100 text-sky-950 font-semi-bold font-semibold p-4 border border-grey-200 transition after:content:[\002B] after:font-bold after:ml-5 my-2 w-full text-left font-semi-bold"><span>2. </span>How can you take our business to the next level?</button>
            <div class="panel px-8  bh-white overflow-hidden max-h-0 transition-[max-h-0 0.2s ease-out] leading-7">
                <p class="leading-8 text-justify">Every company is different and needs individual assistance, as we are aware. That's why we're committed to providing customised IT solutions that will help take your business to the next level.
                Our team of business strategists has been hard at work compiling tips and tricks to help take your business to new heights. From IT support to consulting, we’ve got you covered.
                with our comprehensive IT services, tailored to fit your unique needs and goals.
                </p>
            </div>

            <button class="accordion bg-grey-100 text-sky-950  font-sem-bold font-semibold p-4 border border-grey-200 transition after:content:[\002B] after:font-bold after:ml-5 my-2 w-full font-semi-bold text-left"><span>3. </span>How Do Your IT Solutions Work?</button>
            <div class="panel px-8  bh-white overflow-hidden max-h-0 transition-[max-h-0 0.2s ease-out] leading-7">
                <p class="leading-8 text-justify">Our team is dedicated to finding the perfect tech solutions for your business needs. We provide support, security, and   customization so that you can focus on what you do best.
                Our innovative IT solutions streamline your business operations, enhance efficiency, and reduce downtime.
            </p>
            </div>

        </div>
    </div>
    <!-- <div class="container mx-auto">
        <div class="bg-[#b30000] flex items-center justify-between px-4 py-6 my-10">
            <div><h1 class="text-2xl font-semibold mt-4 text-white my-4 text-sky-950">Get Your Free<br> Business Industrial</h1></div>
            <div><div class="sun rounded-full bg-gray-400 px-4 py-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
            </svg>
        </div></div>
            <div><p class="text-2xl font-semibold mt-4 text-white my-4 text-sky-950"><a href="">(+44)123 456 789</a></p>
                    <p class="text-2xl font-semibold mt-4 text-white my-4 text-sky-950">example@gmail.com</p>
            </div>
        </div>
    </div> -->
    <!-- .....................contact form details................... -->

    <!-- .......................slider mouse......................... -->
    <!-- <div id="">
    <section class="carousel">
        <div class="carousel__slider">
          <ul class="carousel__list">
            <li class="carousel__item">
                <div class="carousel__item relative w-full bg-no-repeat bg-cover cursor-pointer"><img class=" w-full h-full cursor-pointer" src="img/MANAGEDITSERVICES.jpg" alt="">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80 z-10">
                            <div class="text-white text-center">
                                <span><img src="img/product.png" alt="" class="w-20 h-20 mx-auto my-4"></span>
                                <h1 class="text-3xl font-semibold hover:text-red-800 my-2 uppercase"><a href="#">Managed it services</a></h1>
                                <p class="px-10">We focus on the best practices for it solutions and services</p>
                            </div>
                        </div>
                        <div class="carsousel_product absolute -bottom-8 right-0 overflow-visible ">
                            <div class="flex gap-2 items-center justify-end bg-slate-100 py-5 w-60 ml-auto py-5">
                                <img src="img/scan.png" alt="" class="w-12 h-12">
                                <h1 class="uppercase text-xl font-bold uppercase">Managed it services</h1>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
            </li>
            <li class="carousel__item">
            <div class="carousel__item relative w-full bg-no-repeat bg-cover cursor-pointer"><img class=" w-full h-full cursor-pointer" src="img/NETWORKINGSOLUTIONS.png" alt="">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80 z-10">
                            <div class="text-white text-center">
                                <span><img src="img/product.png" alt="" class="w-20 h-20 mx-auto my-4"></span>
                                <h1 class="text-3xl font-semibold hover:text-red-800 my-2 uppercase"><a href="#">Networking Solutions</a></h1>
                                <p class="px-10">We focus on the best practices for it solutions and services</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-8 right-0 overflow-visible ">
                            <div class="flex gap-2 items-center justify-end bg-slate-100 w-60 ml-auto py-5">
                                <img src="img/scan.png" alt="" class="w-12 h-12">
                                <h1 class="uppercase text-xl font-bold uppercase">Networking Solutions</h1>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
            </li>
            <li class="carousel__item">
            <div class="carousel__item relative w-full bg-no-repeat bg-cover cursor-pointer"><img class=" w-full h-full cursor-pointer" src="img/VIRTUALIZATION.jpg" alt="">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80 z-10">
                            <div class="text-white text-center">
                                <span><img src="img/product.png" alt="" class="w-20 h-20 mx-auto my-4"></span>
                                <h1 class="text-3xl font-semibold hover:text-red-800 my-2 uppercase"><a href="#">Virtualization</a></h1>
                                <p class="px-10">We focus on the best practices for it solutions and services</p>
                            </div>
                        </div>
                        <div class="carsousel_product absolute -bottom-8 right-0 overflow-visible ">
                            <div class="flex gap-2 items-center justify-end bg-slate-100 w-72 ml-auto py-5">
                                <img src="img/scan.png" alt="" class="w-12 h-12">
                                <h1 class="uppercase text-xl font-bold uppercase">Virtualization</h1>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
            </li>
            <li class="carousel__item">
            <div class="carousel__item relative w-full bg-no-repeat bg-cover cursor-pointer"><img class=" w-full h-full cursor-pointer" src="img/NETWORKINGSECURITY.jpg" alt="">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80 z-10">
                            <div class="text-white text-center">
                                <span><img src="img/product.png" alt="" class="w-20 h-20 mx-auto my-4"></span>
                                <h1 class="text-3xl font-semibold hover:text-red-800 my-2 uppercase"><a href="#">Networking Security</a></h1>
                                <p class="px-10">We focus on the best practices for it solutions and services</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-8 right-0 overflow-visible ">
                            <div class="flex gap-2 items-center justify-end bg-slate-100 w-60 ml-auto py-5">
                                <img src="img/scan.png" alt="" class="w-12 h-12">
                                <h1 class="uppercase text-xl font-bold uppercase">Networking Security</h1>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
            </li>
            <li class="carousel__item">
            <div class="carousel__item relative w-full bg-no-repeat bg-cover cursor-pointer"><img class=" w-full h-full cursor-pointer" src="img/AMC  FMS SERVICES.webp" alt="">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80 z-10">
                            <div class="text-white text-center">
                                <span><img src="img/product.png" alt="" class="w-20 h-20 mx-auto my-4"></span>
                                <h1 class="text-3xl font-semibold hover:text-red-800 my-2 uppercase"><a href="#">Amc | FM’s Services</a></h1>
                                <p class="px-10">We focus on the best practices for it solutions and services</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-8 right-0 overflow-visible ">
                            <div class="flex gap-2 items-center justify-end bg-slate-100 w-60 ml-auto py-5">
                                <img src="img/scan.png" alt="" class="w-12 h-12">
                                <h1 class="uppercase text-xl font-bold uppercase">Amc | FM’s Services</h1>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
            </li>
            <li class="carousel__item">
            <div class="carousel__item relative w-full bg-no-repeat bg-cover cursor-pointer"><img class=" w-full h-full cursor-pointer" src="img/CLOUDSERVICES.jpg" alt="">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80 z-10">
                            <div class="text-white text-center">
                                <span><img src="img/product.png" alt="" class="w-20 h-20 mx-auto my-4"></span>
                                <h1 class="text-3xl font-semibold hover:text-red-800 my-2 uppercase"><a href="#">Cloud Services</a></h1>
                                <p class="px-10">We focus on the best practices for it solutions and services</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-8 right-0 overflow-visible ">
                            <div class="flex gap-2 items-center justify-end bg-slate-100 w-60 ml-auto py-5">
                                <img src="img/scan.png" alt="" class="w-12 h-12">
                                <h1 class="uppercase text-xl font-bold uppercase">Cloud Services</h1>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
            </li>
            <li class="carousel__item">
            <div class="carousel__item relative w-full bg-no-repeat bg-cover cursor-pointer"><img class=" w-full h-full cursor-pointer" src="img/DATA BACKUP AND RECOVERY.jpg" alt="">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80 z-10">
                            <div class="text-white text-center">
                                <span><img src="img/product.png" alt="" class="w-20 h-20 mx-auto my-4"></span>
                                <h1 class="text-3xl font-semibold hover:text-red-800 my-2 uppercase"><a href="#">Data backup and Recovery</a></h1>
                                <p class="px-10">We focus on the best practices for it solutions and services</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-8 right-0 overflow-visible ">
                            <div class="flex gap-2 items-center justify-end bg-slate-100 w-60 ml-auto py-5">
                                <img src="img/scan.png" alt="" class="w-12 h-12">
                                <h1 class="uppercase text-xl font-bold uppercase">Data backup and Recovery</h1>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
            </li>
            <li class="carousel__item">
            <div class="carousel__item relative w-full bg-no-repeat bg-cover cursor-pointer"><img class=" w-full h-full cursor-pointer" src="img/SOFTWARE LICENSING.webp" alt="">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80 z-10">
                            <div class="text-white text-center">
                                <span><img src="img/product.png" alt="" class="w-20 h-20 mx-auto my-4"></span>
                                <h1 class="text-3xl font-semibold hover:text-red-800 my-2 uppercase"><a href="#">Software Licensing </a></h1>
                                <p class="px-10">We focus on the best practices for it solutions and services</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-8 right-0 overflow-visible ">
                            <div class="flex gap-2 items-center justify-end bg-slate-100 w-60 ml-auto py-5">
                                <img src="img/scan.png" alt="" class="w-12 h-12">
                                <h1 class="uppercase text-xl font-bold uppercase">Software Licensing </h1>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
            </li>
            <li class="carousel__item">
            <div class="carousel__item relative w-full bg-no-repeat bg-cover cursor-pointer"><img class=" w-full h-full cursor-pointer" src="img/SURVEILLANCESERVICE1.jpg" alt="">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80 z-10">
                            <div class="text-white text-center">
                                <span><img src="img/product.png" alt="" class="w-20 h-20 mx-auto my-4"></span>
                                <h1 class="text-3xl font-semibold hover:text-red-800 my-2 uppercase"><a href="#">Surveillance service</a></h1>
                                <p class="px-10">We focus on the best practices for it solutions and services</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-8 right-0 overflow-visible ">
                            <div class="flex gap-2 items-center justify-end bg-slate-100 w-60 ml-auto py-5">
                                <img src="img/scan.png" alt="" class="w-12 h-12">
                                <h1 class="uppercase text-xl font-bold uppercase">Surveillance service</h1>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
            </li>
          </ul>
        </div>
      </section> 
</div> -->
<div>
         <!-- ..............................contactus.................... -->
     <div class="my-10 px-8 lg:py-10 bg-gray-200">
        <div class="lg:flex container mx-auto gap-5">
            <div class="lg:w-1/2">
                <div class="relative" >
                     <img src="img/IT Solutions company.jpg" alt="" class="w-full h-full overflow-hidden bg-cover">
            <div class="absolute grid place-content-center place-items-center top-0 right-0 left-0 w-full h-full overflow-hidden opacity-90 transition duration-300 ease-in-out bg-sky-950" style="box-shadow: 4px 4px 10px #000000;">
            <div class="text-center  text-white ">
                    <h2>Before going further, please</h2>
                    <h4 class="text-4xl my-2 text-red-600 font-extrabold">Oriflamme It Solutions</h4>
                    <h5 class="my-3">Need help? <span>Contact Us</span></h5>
                    <p class="my-3 text-3xl">Phone: <span>+91 9930646412</span></p>
                    <address class="mb-3">
                   1st Floor, Unit No 18, Nand Ghanshyam Industrial Estate,<br>Off Mahakali Caves Rd, Andheri East<br>Maharashtra 400093.
                    </address>
                    <button data-modal-target="authentication-modal1" data-modal-toggle="authentication-modal1" type="button" class="px-6 py-2  border-2 border-white">Contact US</button>
                </div>
            </div>
        </div>
            </div>
            <div class="lg:w-1/2 grid place-content-center">
                   <div class="mt-[10px]">
                         <?php
                        if ($ctr==0 & $insert == true) {
                         echo "<p id='msg' class='submitMsg py-4 text-center bg-green-300'>Massage submitted succesfully.Thank You</p>";
                            }
                    ?>
                    </div>
                      <h4 class="uppercase text-sm text-sky-950 font-semibold mb-5 lg:text-left">CONTACT US</h4>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div>
                       <span class="error">* Required field </span> 
                    </div>
                    
                <div class="lg:grid lg:grid-cols-2 gap-5">
                <div class="w-full" >
                      <label for="" class="">Your Name<span class="text-red-600 ">*</span><span class="text-red-600 text-sm error"><?php echo "\n".$nameErr; ?></span></label><br>
                    <input type="text" name="name" id="" placeholder="Your name here" class="w-full my-2 text-sm py-2.5 px-2 border border-red-600   dark:bg-gray-700 dark:border-red-600 dark:placeholder-gray-400 dark:text-white focus:outline-none focus:ring-1 focus:ring-sky-950 focus:border-transparent">
                </div>
                <div>
                    <label for="">Your Email<span class="text-red-600 error">*</span><span class="text-red-600 text-sm error"><?php echo "\n".$emailErr; ?></span></label><br>
                    <input type="email" name="email" id="" placeholder="Your email here" class="w-full my-2 text-sm py-2.5 px-2 border border-red-600   dark:bg-gray-700 dark:border-red-600 dark:placeholder-gray-400 dark:text-white focus:outline-none focus:ring-1 focus:ring-sky-950 focus:border-transparent" >
                </div>
                <div>
                    <label for="">Required Services</label><br>
                    <input type="text" name="subject" id="" placeholder="Your subject here" class="w-full my-2 text-sm py-2.5 px-2 border border-red-600   dark:bg-gray-700 dark:border-red-600 dark:placeholder-gray-400 dark:text-white focus:outline-none focus:ring-1 focus:ring-sky-950 focus:border-transparent">
                </div>
               
                <div>
                    <label for="">Contact Number<span class="text-red-600 error">*</span><span class="text-red-600 text-sm error"> <?php echo "\n".$mobilenoErr; ?></span></label><br>
                    <input type="number" name="contact" id="" placeholder="Your phone number here" class="w-full my-2 text-sm py-2.5 px-2 border border-red-600   dark:bg-gray-700 dark:border-red-600 dark:placeholder-gray-400 dark:text-white focus:outline-none focus:ring-1 focus:ring-sky-950 focus:border-transparent">
                </div>
            </div>
            <div class="my-5">
                <label for="">Massages</label>  <br>
                <textarea type="text" name="massage" id="" cols="115" rows="5" placeholder="Tell us few words" class="w-full my-2 px-2 pt-2.5 text-sm border border-red-600   dark:bg-gray-700 dark:border-red-600 dark:placeholder-gray-400 dark:text-white focus:outline-none focus:ring-1 focus:ring-sky-950 focus:border-transparent"></textarea>
                </div>
                <div><button class="bg-red-600 tetx-white px-4 py-2 font-semibold uppercase text-white border-double  border-8 border-white">send Message</button>
            </div>
            </form>
        </div>
       
    </div>
    </div>
    <!-- ..............................contactus.................... -->
</div>
    <div class="my-5">
    <div class="text-center py-10">
                <h1 class="uppercase text-red-800 text-md font-semibold">OUR PARTNERS</h3>
                    <!-- <h1 class="text-4xl font-extrabold mt-4 text-white ">We Provide The Best Services</h1> -->
            </div>
          <div>
    <div class="slidermar">
        <div class="slide-track">
            <div class="slidemar">
                <!--<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250"-->
                <!--    alt="" />-->
                <img src="img/marq/Acronics.png" alt="" class="">
            </div>
            <div class="slidemar">
                <img src="img/marq/adobe.png" class="" 
                    alt="" />
            </div>
            <div class="slidemar">
                 <img src="img/marq/Bosch.png" alt="" >
            </div>
            <div class="slidemar">
              <img src="img/marq/cisco.png" alt="" >
            </div>
            <div class="slidemar">
                 <img src="img/marq/cp plus.png" alt="" >
            </div>
            <div class="slidemar">
                <img src="img/marq/cyberroam.png" alt="" >
            </div>
            <div class="slidemar">
                 <img src="img/marq/D-Link.png" alt="" >
            </div>
            <div class="slidemar">
                <img src="img/marq/dahua.png" alt="" >
            </div>
            <div class="slidemar">
                 <img src="img/marq/dell.png" alt="" >
            </div>
            <div class="slidemar">
                <img src="img/marq/epson.png" alt="" >
            </div>
            <div class="slidemar">
              <img src="img/marq/essl.png" alt="" >
            </div>
            <div class="slidemar">
               <img src="img/marq/fortinet.png" alt="" >
            </div>
            <div class="slidemar">
                 <img src="img/marq/Google app logo.png" alt="" >
            </div>
            <div class="slidemar">
                <img src="img/marq/Hickvision.png" alt="" >
            </div>
        </div>
    </div>
  </div>  
    </div>
<div class="bg-sky-950 ">
    
<div id="animation-carousel" class="relative w-full pt-10 lg:pt-0" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-80  overflow-hidden md:h-96 ">
         <!-- Item 1 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <div class="bg-sky-950  block w-full lg:h-96  lg:pb-0 pb-24  text-center grid place-items-center">
            <!-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> -->
            <h6 class="text-sm text-red-600 font-semibold">TESTIMONIALS</h6>
            <h1 class="text-2xl font-semibold text-white">What Our Clients Say</h1>
            <div class="w-16 bg-red-200 mx-auto rounded-full"><img src="img/avatar-01.jpg" alt="" class="rounded-full"></div>
            <p class="lg:w-1/2 mx-auto text-white lg:text-md text-sm">Man, this thing is getting better and better as I learn more about it.We were treated like royalty.It Solution Should be nominated for service of the year.I made back the purchase price in just 48 hours!</p>
            <div>
            <h3 class="text-red-600 font-semibold">Pradeep Chahuan</h3>
            <h4 class="text-white font-semibold">Developer</h4>
            </div>
        </div>
            
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
        <div class="bg-sky-950  block w-full lg:h-96 lg:pb-0 lg:pb-24  text-center grid place-items-center">
            <!-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> -->
            <h6 class="text-sm text-red-600 font-semibold">TESTIMONIALS</h6>
            <h1 class="text-2xl font-semibold text-white">What Our Clients Say</h1>
            <div class="w-16 bg-red-200 mx-auto rounded-full"><img src="img/avatar-01.jpg" alt="" class="rounded-full"></div>
            <p class="lg:w-1/2 mx-auto text-white">Man, this thing is getting better and better as I learn more about it.We were treated like royalty.It Solution Should be nominated for service of the year.I made back the purchase price in just 48 hours!</p>
            <div>
            <h3 class="text-red-600 font-semibold">Pradeep Chahuan</h3>
            <h4 class="text-white font-semibold">Developer</h4>
            </div>
        </div>
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item="active">
        <div class="bg-sky-950  block w-full  lg:h-96 lg:pb-0 text-center grid place-items-center">
            <!-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> -->
            <h6 class="text-sm text-red-600 font-semibold">TESTIMONIALS</h6>
            <h1 class="text-2xl font-semibold text-white">What Our Clients Say</h1>
            <div class="w-16 bg-red-200 mx-auto rounded-full"><img src="img/avatar-01.jpg" alt="" class="rounded-full"></div>
            <p class="lg:w-1/2 mx-auto text-white ">Man, this thing is getting better and better as I learn more about it.We were treated like royalty.It Solution Should be nominated for service of the year.I made back the purchase price in just 48 hours!</p>
            <div>
            <h3 class="text-red-600 font-semibold">Pradeep Chahuan</h3>
            <h4 class="text-white font-semibold">Developer</h4>
            </div>
        </div>
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
        <div class="bg-sky-950  block w-full  lg:h-96 lg:pb-0  text-center grid place-items-center">
            <!-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> -->
            <h6 class="text-sm text-red-600 font-semibold">TESTIMONIALS</h6>
            <h1 class="text-2xl font-semibold text-white">What Our Clients Say</h1>
            <div class="w-16 bg-red-200 mx-auto rounded-full"><img src="img/avatar-01.jpg" alt="" class="rounded-full"></div>
            <p class="lg:w-1/2 mx-auto text-white">Man, this thing is getting better and better as I learn more about it.We were treated like royalty.It Solution Should be nominated for service of the year.I made back the purchase price in just 48 hours!</p>
            <div>
            <h3 class="text-red-600 font-semibold">Pradeep Chahuan</h3>
            <h4 class="text-white font-semibold">Developer</h4>
            </div>
        </div>
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
        <div class="bg-sky-950  block w-full  lg:h-96 lg:pb-0  text-center grid place-items-center">
            <!-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> -->
            <h6 class="text-sm text-red-600 font-semibold">TESTIMONIALS</h6>
            <h1 class="text-2xl font-semibold text-white">What Our Clients Say</h1>
            <div class="w-16 bg-red-200 mx-auto rounded-full"><img src="img/avatar-01.jpg" alt="" class="rounded-full"></div>
            <p class="lg:w-1/2 mx-auto text-white">Man, this thing is getting better and better as I learn more about it.We were treated like royalty.It Solution Should be nominated for service of the year.I made back the purchase price in just 48 hours!</p>
            <div>
            <h3 class="text-red-600 font-semibold">Pradeep Chahuan</h3>
            <h4 class="text-white font-semibold">Developer</h4>
            </div>
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<div class="lg:block hidden tab mb-4 overflow-hidden text-center">
            <button class="tablinks bg-red-600 hover:bg-white text-white hover:text-red-600 border border-sky-950 p-2 mx-2" onclick="openCity(event, 'Mission')">Mission and vision</button>
            <button class="tablinks bg-red-600 hover:bg-white text-white hover:text-red-600 border border-sky-950 p-2 mx-2" onclick="openCity(event, 'Partners')">Partners</button>
            <button class="tablinks bg-red-600 hover:bg-white text-white hover:text-red-600 border border-sky-950 p-2 mx-2" onclick="openCity(event, 'team')">Career</button>
           <!-- <button class="tablinks bg-red-600 hover:bg-white text-white hover:text-red-600 border border-sky-950 p-2 mx-2" onclick="openCity(event, 'Careers')">Careers with us</button> -->
</div>
</div>

</div>
<div class="container mx-auto">
    <!-- ...................responsive mobile...................... -->
<div class="block lg:hidden tab my-4 overflow-hidden text-center">
            <button class="tablinks bg-red-600 hover:bg-white text-white hover:text-red-600 border border-sky-950 p-2 mx-1" onclick="openCity(event, 'Mission')">Mission and vision</button>
            <button class="tablinks bg-red-600 hover:bg-white text-white hover:text-red-600 border border-sky-950 p-2 mx-1" onclick="openCity(event, 'Partners')">Partners</button>
            <button class="tablinks bg-red-600 hover:bg-white text-white hover:text-red-600 border border-sky-950 p-2 mx-1" onclick="openCity(event, 'team')">Career</button>
           <!-- <button class="tablinks bg-red-600 hover:bg-white text-white hover:text-red-600 border border-sky-950 p-2 mx-2" onclick="openCity(event, 'Careers')">Careers with us</button> -->
</div>
<!-- ...................responsive mobile...................... -->
<div id="Mission" class="tabcontent hidden py-10">
        <div class="grid lg:grid-cols-2 ">
                <div class=""><img src="img/mission.jpg" alt="" class=""></div>
                <div class="px-8">
                    <h1 class="text-4xl font-semibold text-sky-950">Our Mission</h1>
                    <div class="py-4 leading-7">
                    <p>Oriflamme IT Solutions, we believe that technology should be a tool for growth, not a hindrance. That's why we strive to provide cutting-edge managed IT services, including AMc and fms service, firewall, cyber security, networking solutions, data backup, and cloud computing, that empower our clients to achieve their business goals. Our mission is to deliver reliable, efficient, and customized IT solutions that are tailored to meet the unique needs of each of our clients, so they can focus on what they do best - growing their business. We are committed to providing exceptional customer service, building long-term relationships, and staying on the forefront of technological innovation to ensure our clients stay ahead of the curve. When you partner with Oriflamme IT Solutions, you can trust us to be your go-to source for all of your IT needs.</p>
                    </div>
                  
                </div>
            </div>
            <div class="lg:flex items-center px-8  py-5">
                        <div>
                        <p class=" leading-7">Oriflamme IT Solutions, our Vision is to provide reliable and innovative technology solutions that empower businesses to achieve their goals. Our team of experienced professionals is dedicated to providing outstanding customer service and exceeding expectations. With Oriflamme IT Solutions, businesses can rest assured that their technology infrastructure is secure, efficient, and always operating at peak performance.</p>
                        </div>
                        <div class="w-full">
                        <img src="img/missionvission.jpg" alt="w-full">
                        </div>
                    </div>
</div>

<div id="Partners" class="tabcontent hidden py-10">
<div class="grid lg:grid-cols-2 w-9/12 mx-auto">
                <div class=""><img src="img/partner.jpeg" alt="" class=""></div>
                <div class="px-8">
                    <h1 class="text-4xl font-semibold text-sky-950">Our Technology Partners</h1>
                    <div class="py-4">
                    <p>We cooperated with Technology Managers to expand its abilities at each progression of the product advancement process.</p>
                    <div class="flex gap-2 items-center lg:gap-10 py-5">
                        <img src="img/partnerslogo/download (3).png" alt="" class="w-32">
                        <img src="img/partnerslogo/bosch-790323.png" alt="" class="w-32">
                        <img src="img/partnerslogo/1280px-Cisco_logo.svg.png" alt="" class="w-32">
                        <img src="img/partnerslogo/Lenovo-Logo-1.png" alt="" class="w-32">
                    </div>
                    </div>
                </div>
            </div> 
</div>

<div id="team" class="tabcontent hidden py-10">
<div class="">
    <!-- .......................details...................... -->
    <div class="lg:flex container mx-auto my-20">
        <div class="lg:w-1/3">
        <div class="mx-4 shadow-lg">
                <div class="relative"><img src="img/team-03.jpg" alt="" class="">
                    <!-- <div class="image_card  absolute top-0 right-0 bottom-0 left-0 text-end w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-60">
                        <div class="flex  gap-2 items-end justify-center text-white text-lg w-full h-full">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="my-8">
                    <div class="flex justify-between mx-4  py-4 border-b border-gray-400" >
                    <h1 class="text-lg font-semibold text-sky-950 hover:text-red-600 font-semibold"><a href="#">+44 123-456-789</a></h1>
                    <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-red-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    </p>
                    </div>

                    <div class="flex justify-between mx-4  py-4 border-b border-gray-400" >
                    <h1 class="text-lg font-semibold text-sky-950 hover:text-red-600 font-semibold"><a href="#">example@email.com</a></h1>
                    <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-red-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>

                    </p>
                    </div>

                    <div class="flex justify-between mx-4  py-4 " >
                    <h1 class="text-lg font-semibold text-sky-950 hover:text-red-600 font-semibold">66 Guild Street 512B, Great NT</h1>
                    <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-red-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>

                    </p>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="lg:w-2/3">
        <div class="mx-8">
        <h1 class="uppercase text-red-800 text-md font-semibold">Business Development Manager</h3>
        <h1 class="text-4xl font-extrabold mt-5 text-sky-950 ">Umesh Vishwakarma</h1>

        <div class="py-10">
            <p class="leading-8">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p> <br>
            <p class="leading-8">
            Most gardens consist of a mix of natural and constructed elements, although even very ‘natural’ gardens are always an inherently artificial creation. Natural elements present in a garden principally.
            </p>
        </div>
        <div class="py-10 border-y border-gray-400">
            <div class="flex items-center gap-5">
                <div><h1 class="text-2xl font-semibold text-sky-950">Follow Me:</h1></div>
                <div >
                            <a href="#" class="mx-2 text-xl font-semibold hover:text-red-600"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="mx-2 text-xl font-semibold hover:text-red-600"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="mx-2 text-xl font-semibold hover:text-red-600"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div>
            <div class="grid lg:grid-cols-2 my-5 lg:gap-x-3 gap-5">
                <div style=" perspective: 1000px;"><img src="img/AMC  FMS SERVICES.webp" alt="" class="rounded-lg" style="transform-style: preserve-3d;
  transform: rotateY(30deg); box-shadow: 10px 10px 14px #000000;"  ></div>
                <div>
                    <p class="leading-8" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt laudantium odit nam vitae reprehenderit incidunt natus maxime consequuntur tempore. Aspernatur aliquid eius commodi id earum fugit veritatis architecto assumenda iure dolorum, cumque, esse magni harum expedita autem molestiae magnam natus.</p>
                </div>
            </div>
        </div>

        <div>
            <div class="grid lg:grid-cols-3 gap-5 py-10">
                <div class="cardcareer" >
                    <div class="card_content">
                    <img src="img/AMC  FMS SERVICES.webp" alt="" class="rounded-lg">
            <h3 class="font-semibold">Lorem ipsum dolor sit amet consectetur</h3>
            <p class="text-xs leading-8 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat fuga error modi optio repudiandae eum dolorem doloremque deserunt ut temporibus, dignissimos, cupiditate incidunt impedit architecto! Facilis corrupti non expedita qui.</p>
            </div>
        </div>
                <div class="cardcareer">
                <div class="card_content">
                    <img src="img/AMC  FMS SERVICES.webp" alt="" class="rounded-lg">
                <h3 class="font-semibold">Lorem ipsum dolor sit amet consectetur</h3>
                <p class="text-xs leading-8 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat fuga error modi optio repudiandae eum dolorem doloremque deserunt ut temporibus, dignissimos, cupiditate incidunt impedit architecto! Facilis corrupti non expedita qui.</p>
            </div>
            </div>
                <div class="cardcareer">
                <div class="card_content">
                    <img src="img/AMC  FMS SERVICES.webp" alt="" class="rounded-lg">
                <h3 class="font-semibold">Lorem ipsum dolor sit amet consectetur</h3>
                <p class="text-xs leading-8 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat fuga error modi optio repudiandae eum dolorem doloremque deserunt ut temporibus, dignissimos, cupiditate incidunt impedit architecto! Facilis corrupti non expedita qui.</p>
            </div>
</div>
            </div>
        </div>
        <!-- <div>
        <div><h1 class="text-2xl font-semibold text-sky-950 my-5">Contact Us</h1></div>
        <form action="">
                <div class="grid grid-cols-2 gap-5">
                <div class="w-full" >
                    <label for="" class="">Your Name<span class="text-red-600">*</span></label><br>
                    <input type="text" name="" id="" placeholder="Your name here" class="w-full my-2 text-sm py-2.5">
                </div>
                <div>
                    <label for="">Your Email<span class="text-red-600">*</span></label><br>
                    <input type="text" name="" id="" placeholder="Your email here" class="w-full my-2 text-sm py-2.5">
                </div>
                <div>
                    <label for="">Your Subject<span class="text-red-600">*</span></label><br>
                    <input type="text" name="" id="" placeholder="Your subject here" class="w-full my-2 text-sm py-2.5">
                </div>
               
                <div>
                    <label for="">Contact Number<span class="text-red-600">*</span></label><br>
                    <input type="number" name="" id="" placeholder="Your phone number here" class="w-full my-2 text-sm py-2.5">
                </div>
            </div>
            <div class="my-5">
                <label for="">Massages <span  class="text-red-600">*</span></label>  <br>
                <textarea type="text" name="" id="" cols="115" rows="5" placeholder="Tell us few words" class="my-2 text-sm "></textarea>
                </div>
                <div><button class="bg-red-600 tetx-white px-4 py-2 font-semibold uppercase text-white border-double  border-8 border-white">send Message</button>
            </div>
            </form>
            </div> -->
        </div>
        </div>
        </div>
       <!-- .......................details...................... -->
            </div> 
</div>
</div>

<!-- <div id="Careers" class="tabcontent hidden py-10">
<div class="grid grid-cols-2 w-10/12 mx-auto">
                <div class="px-2">
                    <h1 class="text-4xl font-semibold text-sky-950">Why work with us?</h1>
                   
                    <div class="grid grid-cols-2   py-5 leading-9">
                        <div class="">
                        <p><span class="text-lg font-semibold text-red-600 mx-2">&#x2713;</span> Flexible Time Off</p>
                        <p><span class="text-lg font-semibold text-red-600 mx-2">&#x2713;</span> 24/7 parking.</p>
                        <p><span class="text-lg font-semibold text-red-600 mx-2">&#x2713;</span> Full medical benefits</p>
                        </div>
                        <div>
                        <p><span class="text-lg font-semibold text-red-600 mx-2">&#x2713;</span> Collaborative environment</p>
                        <p><span class="text-lg font-semibold text-red-600 mx-2">&#x2713;</span> Health, Dental, And Vision</p>
                        <p><span class="text-lg font-semibold text-red-600 mx-2">&#x2713;</span> Flexible hours</p>
                        </div>
                    </div>
                   
                </div>
                <div class="w-96 mx-auto"><img src="img/callsupport.jpg" alt="" class=""></div>
            </div>
</div> -->
    <!-- .......................slider mouse......................... -->
    <!-- .......................OUR STATISTICS.......................... -->
    <div class="grid lg:grid-cols-4 md:grid-cols-4 px-8 py-10">
        <div class="text-center py-5">
        <span class="num  text-red-600 text-4xl font-semibold" data-val="150">150 </span>
            <h4 class="text-sky-950 uppercase my-2 font-semibold">Completed Projects</h4>
        </div>
        <div class="text-center lg:border-x lg:border-gray-400 py-5">
            <span class="num text-red-600 text-4xl font-semibold" data-val="8285">8285</span>
            <h4 class="text-sky-950 uppercase my-2 font-semibold">COFFEE ORDERED</h4>
        </div>
        <div class="text-center lg:border-r lg:border-gray-400 py-5">
            <span class="num text-red-600 text-4xl font-semibold" data-val="2245">2245</span>
            <h4 class="text-sky-950 uppercase my-2 font-semibold">PROBLEM SOLVED</h4>
        </div>
        <div class="text-center py-5">
            <span class="num text-red-600 text-4xl font-semibold" data-val="543">543</span>
            <h4 class="text-sky-950 uppercase my-2 font-semibold">HAPPY CLIENTS</h4>
        </div>
    </div>
     <!-- .......................OUR STATISTICS.......................... -->
    </div>

    <div class="container mx-auto lg:mb-10 my-10 px-8">
        <div class="text-center py-10">
    <h1 class="slidineanimate uppercase text-red-800 text-md font-semibold">OUR BLOGS</h3>
    <h1 class="slidupeanimate text-4xl font-extrabold mt-4 text-sky-950 ">Read Our Latest Blogs</h1>
    </div>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-10 ">
        <div class="card hover:drop-shadow-xl border overflow-hidden">
            <a href="top-10-benefits-of-computer-annual-maintenance-services" target="_blank"><div class="h-60 relative">
            <img src="img/solution.webp" alt="" class="bg-cover w-full h-full hover:scale-110 transition duration-700 ease-in-out">
            <a href="top-10-benefits-of-computer-annual-maintenance-services" target="_blank"><div class="absolute top-0 left-4 bg-red-600 text-white px-6 py-2 hover:bg-sky-950 text-sm"><h4>Annual Maintenance Services</h4></div></a>
        </div></a>
            <div class="p-4 bg-white">
                <span class="my-2 text-red-600">April 17, 2023</span>
               <a href="top-10-benefits-of-computer-annual-maintenance-services" target="_blank"> <h1 class="my-2 text-2xl font-semibold text-sky-950 hover:text-red-600 cursor-pointer">Top 10 Benefits of Computer Annual Maintenance Services</h1></a>
               <div class="border-t border-gray-400">
               <a href="top-10-benefits-of-computer-annual-maintenance-services" target="_blank"><button class="border border-red-700 hover:border-sky-800 mt-2 bg-red-600 hover:bg-sky-950 text-white hover:text-red-600 text-sm font-semibold px-4 py-2 rounded-md my-2">Read More</button></a>
                </div>
        </div>
        </div>
        
        <div class="card hover:drop-shadow-xl border overflow-hidden">
            <a href="what-is-managed-it-service-providers" target="_blank"><div class="h-60 relative">
            <img src="img/marketing.jpg" alt="" class="bg-cover w-full h-full hover:scale-110 transition duration-700 ease-in-out">
            <a href="what-is-managed-it-service-providers" target="_blank"><div class="absolute top-0 left-4 bg-red-600 text-white px-6 py-2 hover:bg-sky-950 text-sm"><h4>It service</h4></div></a>
        </div></a>
            <div class="p-4 bg-white">
                <span class="my-2 text-red-600">April 17, 2023</span>
                <a href="what-is-managed-it-service-providers" target="_blank"><h1 class="my-2 text-2xl font-semibold text-sky-950 hover:text-red-600 cursor-pointer">What is Managed It Service Providers</h1></a>
               <div class="border-t border-gray-400">
                <a href="what-is-managed-it-service-providers" target="_blank"><button class="border border-red-700 hover:border-sky-800 mt-2 bg-red-600 hover:bg-sky-950 text-white hover:text-red-600 text-sm font-semibold px-4 py-2 rounded-md my-2">Read More</button></a>
                </div>
        </div>
        </div>

        <div class="card hover:drop-shadow-xl border overflow-hidden">
            <a href="#" target="_blank"><div class="h-60 relative">
            <img src="img/development.jpg" alt="" class="bg-cover w-full h-full hover:scale-110 transition duration-700 ease-in-out">
            <a href="#" target="_blank"><div class="absolute top-0 left-4 bg-red-600 text-white px-6 py-2 hover:bg-sky-950 text-sm"><h4>Development</h4></div></a>
        </div></a>
            <div class="p-4 bg-white">
                <span class="my-2 text-red-600">April 17, 2023</span>
                <a href="#" target="_blank"><h1 class="my-2 text-2xl font-semibold text-sky-950 hover:text-red-600 cursor-pointer">Simple guidance for you in web development.</h1></a>
               <div class="border-t border-gray-400">
                <a href="#" target="_blank"><button class="border border-red-700 hover:border-sky-800 mt-2 bg-red-600 hover:bg-sky-950 text-white hover:text-red-600 text-sm font-semibold px-4 py-2 rounded-md my-2">Read More</button></a>
                </div>
        </div>
        </div>
        </div>
    </div>
    <?php include("footer.php") ?>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

    <script>
        var index1 = 0;
        var slides = document.querySelectorAll(".slides");
        // var dot = document.querySelectorAll(".dot");

        function changeSlide() {

            if (index1 < 0) {
                index = slides.length - 1;
            }

            if (index1 > slides.length - 1) {
                index1 = 0;
            }

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                // dot[i].classList.remove("active");
            }

            slides[index1].style.display = "block";
            //   dot[index1].classList.add("active");

            index1++;

            setTimeout(changeSlide, 2000);

        }

        changeSlide();
    </script>

    <!-- .................card img slider........................ -->
    <script>
                // "use strict";

// function carousel() {
//   let carouselSlider = document.querySelector(".carousel__slider");
//   let list = document.querySelector(".carousel__list");
//   let item = document.querySelectorAll(".carousel__item");
//   let list2;

//   const speed = 1;

//   const width = list.offsetWidth;
//   let x = 0;
//   let x2 = width;

//   function clone() {
//     list2 = list.cloneNode(true);
//     carouselSlider.appendChild(list2);
//     list2.style.left = `${width}px`;
//   }

//   function moveFirst() {
//     x -= speed;

//     if (width >= Math.abs(x)) {
//       list.style.left = `${x}px`;
//     } else {
//       x = width;
//     }
//   }

//   function moveSecond() {
//     x2 -= speed;

//     if (list2.offsetWidth >= Math.abs(x2)) {
//       list2.style.left = `${x2}px`;
//     } else {
//       x2 = width;
//     }
//   }

//   function hover() {
//     clearInterval(a);
//     clearInterval(b);
//   }

//   function unhover() {
//     a = setInterval(moveFirst, 30);
//     b = setInterval(moveSecond, 30);
//   }

//   clone();

//   let a = setInterval(moveFirst, 30);
//   let b = setInterval(moveSecond, 30);

//   carouselSlider.addEventListener("mouseenter", hover);
//   carouselSlider.addEventListener("mouseleave", unhover);
// }

// carousel();

//     </script>
     <!-- ...................tabs............. -->
        <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active1", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active1";
}
</script>  
<!-- ...................tabs.............   -->
</div>

<script>
    let valueDisplays = document.querySelectorAll(".num");
let interval = 4000;
valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});
    </script>


<!-- 17/01/2024 update index.php  -->



