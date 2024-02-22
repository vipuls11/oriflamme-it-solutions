<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>

<body>
    <?php include("header.php") ?>

    <?php
    // $a = array("name", "email", "subject", "contact", "massage");
    //  global $subject;
    //  global $name;
    //  global $email;
    //  global $subject;
    //  global $contact;
    global $massage;
    $insert = false;
    $host = "localhost";
    $user = "root";
    $password = "";
    $db_name = "oriflam";



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
            if (empty($_POST["name"])) {
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
            if (empty($_POST["email"])) {
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
            if (empty($_POST["contact"])) {
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
            } else 
            {
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
    <!-- ...................CONTACT US ......................... -->
    
    <div class="container mx-auto w-full relative opacity-80 ">
        <img src="img/White Grey Law Firm Clean Grids Law Firm Website.png" alt="" class="w-full">
        <div class="absolute top-80 left-5 lg:block hidden">
            <h1 class="text-5xl font-semibold text-white">Contact Us</h1>
            <div class="flex gap-4 px-4 items-center my-10 opacity-95 bg-slate-50 py-4 text-center text-xl font-semibold text-center justify-center">
                <h2><a href="index.php">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="contactus.php">Contact Us</a></h2>
            </div>
        </div>
        <div class="absolute top-28 left-5  lg:hidden block">
            <h1 class="text-2xl font-semibold text-white">Contact Us</h1>
            <div class="flex gap-4 items-center px-4 my-5 opacity-95 bg-slate-50 py-4 text-center text-md font-semibold text-center justify-center">
                <h2><a href="index.php">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="contactus.php">Contact Us</a></h2>
            </div>
        </div>
    </div>
    <!-- ...................CONTACT US...................... -->
    <div class="container mx-auto my-10 px-8 grid lg:grid-cols-3 gap-5 lg:my-20">
        <div class="border-2 border-sky-950 p-4 flex gap-5 ">
            <div class="">
                <span class="text-5xl font-semibold text-red-600 "><i class="fa-solid fa-phone"></i></span>
            </div>
            <div>
                <h1 class="uppercase font-semibold text-xl text-sky-950 ">Phone Number</h1>
                <p class="my-2 text-md  text-gray-400"><a href="tel:022 49716152">022 49716152</a></p>
                <p class="my-2 text-md  text-gray-400"><a href="tel:022 4971292">022 4971292</a></p>
            </div>
        </div>
        <div class="border-2 border-sky-950 p-4 flex gap-5">
            <div class="">
                <span class="text-5xl font-semibold text-red-600 my-5 "><i class="fa-solid fa-location-dot"></i></span>
            </div>
            <div class="pr-8">
                <h1 class="uppercase font-semibold text-xl text-sky-950 ">Location</h1>
                <p class="my-2 text-md text-gray-400 leading-6 text-justify ">1st Floor, Unit No 18, Nand Ghanshayam Industrial Estate, Off Mahakali Caves Rd, Andheri East Mumbai, 400093</p>
            </div>
        </div>
        <div class="border-2 border-sky-950 p-4  flex  gap-5 lg:justify-center">
            <div class="">
                <span class="text-5xl font-semibold text-red-600"><i class="fa-solid fa-envelope"></i></span>
            </div>
            <div>
                <h1 class="uppercase font-semibold text-xl text-sky-950 ">Email Address</h1>
                <p class="my-2 text-md text-gray-400"><a href="mailto: pravin@oriflammeitsolutions.com">pravin@oriflammeitsolutions.com</a></p>
                <p class="my-2 text-md text-gray-400"><a href="mailto: support@oriflammeitsolutions.com">support@oriflammeitsolutions.com</a></p>
            </div>
        </div>
    </div>
    </div>


    <!-- ..............................contactus.................... -->
    <div class="my-10 px-8 lg:py-20 bg-gray-50">
        <div class="lg:flex container mx-auto gap-5">
            <div class="lg:w-1/3">
                <div class="float-right">
                    <h4 class="uppercase text-sm text-red-600 font-semibold mb-5">CONTACT US</h4>
                    <h1 class="text-4xl text-sky-950 font-semibold mb-5">Send us a message to get started!</h1>
                    <div class="my-5">
                        <p class="text-lg text-sky-950 font-semibold leading-8">We are committed to providing the best quality products and services to meet your needs. Contact us today to learn more about how we can help you achieve your goals.</p>
                    </div>
                    <div class="text-sky-950">
                        <div class="flex  gap-5  text-2xl w-full h-full">
                            <a class="facebook" href="#"><span class="text-blue-600"><i class="fa-brands fa-facebook-f"></i></span></a>
                            <a class="twitter" href="#"><span class="text-blue-500"><i class="fa-brands fa-twitter"></span></i></a>
                            <a class="linkedin" href="#"><span class="text-sky-700"><i class="fa-brands fa-linkedin"></span></i></a>
                            <a class="pinterest" href=""><span class="text-red-700"><i class="fa-brands fa-square-pinterest"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-2/3">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <span class="error">* Required field </span>
                    <div class="lg:grid lg:grid-cols-2 gap-5">  
                        <div class="w-full">
                            <label for="" class="">Your Name<span class="text-red-600 ">*</span><span class="text-red-600 text-sm error"><?php echo "\n".$nameErr; ?></span></label><br>
                            <input type="text" name="name" id="" placeholder="Your name here" class="w-full my-2 text-sm py-2.5 focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600">
                        </div>
                        <div>
                            <label for="">Your Email<span class="text-red-600 error">*</span><span class="text-red-600 text-sm error"><?php echo "\n".$emailErr; ?></span></label><br>
                            <input type="email" name="email" id="" placeholder="Your email here" class="w-full my-2 text-sm py-2.5">
                        </div>
                        <div>
                            <label for="">Your Subject</label><br>
                            <input type="text" name="subject" id="" placeholder="Your subject here" class="w-full my-2 text-sm py-2.5">
                        </div>

                        <div>
                            <label for="">Contact Number<span class="text-red-600 error">*</span><span class="text-red-600 text-sm error"> <?php echo "\n".$mobilenoErr; ?></span></label><br>
                            <input type="number" name="contact" id="" placeholder="Your phone number here"  value="<?php echo $mobileno;?>" class="w-full my-2 text-sm py-2.5">

                        </div>
                    </div>
                    <div class="my-5">
                        <!-- <label for="">Massages <span  class="text-red-600 error">*</span><?php echo $mobilenoErr; ?></label>  <br> -->
                        <textarea type="text" name="massage" id="" cols="115" rows="5" placeholder="Tell us few words" class="my-2 text-sm"></textarea>
                    </div>
                    <div><button class="bg-red-600 tetx-white px-4 py-2 font-semibold uppercase text-white border-double  border-8 border-white">send Message</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- ..............................contactus.................... -->

    <div class="container2">
        <div class="w-full ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d120628.5139863043!2d72.7919582!3d19.1233962!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c805e9793bc3%3A0xe041821653a92f5f!2sOriflamme%20IT%20Solutions!5e0!3m2!1sen!2sin!4v1685591453348!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <?php include("footer.php") ?>
    <script>
        $(document).ready(function() {
            $("#msg").slideUp(0).delay(1000).slideDown('slow');
            $("#msg").slideDown(1).delay(2000).slideUp('slow');
        });
    </script>

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