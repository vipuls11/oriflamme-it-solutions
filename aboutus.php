
<?php
$title= 'Oriflamme IT Solution:About Us';
 include("header.php") ?>
           <?php 
    $insert = false;
    $host = "localhost";
    $user = "root";
    $password ="";
    $db_name ="oriflam";

    $conn = mysqli_connect($host, $user, $password, $db_name);

    if(mysqli_connect_errno()){
        die("Failed to connect with MySQL:". mysqli_connect_errno());
    }
    else{
        if(isset($POST['name'])){
        $sql ="INSERT INTO contact_us(Name, Email, Subject, Contact, Massage)
         VALUES ('".$_REQUEST['name']."','".$_REQUEST['email']."','".$_REQUEST['subject']."','".$_REQUEST['contact']."','".$_REQUEST['massage']."')";

        if($conn->query($sql)=== false){
            // echo "Record Submitted Successfully";
            $insert = true;
        }
        else{
            echo "Error:".$sql. "<br>" .$conn->error;
        }
        $conn->close();
        // header("location:aboutus.php ?");
    }
}
?> 
    
    <style>
        /* ...........Work Process.......... */

        /* ...........Work Process.......... */

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

  
    </style>



    <!-- ...................about Us banner...................... -->
    <div class="container mx-auto w-full relative opacity-80">
        <img src="img/about2.jpg" alt="" class="w-full">
        <div class="absolute top-80 left-5 lg:block hidden">
            <h1 class="text-5xl font-semibold text-white" >About Us</h1>
            <div class="flex gap-4 px-4 items-center my-10 opacity-95 bg-slate-50 py-4 text-center text-xl font-semibold text-center justify-center">
                <h2><a href="index.php">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="aboutus.php">About Us</a></h2>
            </div>
        </div>
        <div class="absolute top-28 left-5  lg:hidden block">
            <h1 class="text-2xl font-semibold text-white">About Us</h1>
            <div class="flex gap-4 items-center px-4 my-5 opacity-95 bg-slate-50 py-4 text-center text-md font-semibold text-center justify-center">
                <h2><a href="">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="">About Us</a></h2>
            </div>
        </div>
    </div>
    <!-- ...................about Us banner...................... -->

    <!-- ..................About US Container................ -->
    <div class="container mx-auto my-10">
        <div class="grid lg:grid-cols-2 gap-5 place-content-center">
            <div>
                <h4 class="slidineanimate uppercase text-sm text-red-600 font-semibold mb-4">About Us</h4>
                <h1 class="slidedowntoupanimate text-4xl text-sky-950 font-semibold my-5">We’re Delivering The Best Customer Experience</h1>
                <div class="slidupeanimate lg:flex ">
                    <img src="img/mission.png" alt="" class="w-38 h-24">
                    <p class="leading-8"><span class="text-sky-950 font-semibold">Oriflamme IT Solutions</span>, we believe that technology should be a tool for growth, not a hindrance. That's why we strive to provide cutting-edge managed IT</p>
                </div>
                <p class="slidupeanimate leading-8">
                    services, including <a href=""><span class="text-sky-950 font-semibold ">AMc and fms service</span></a>, firewall, cyber security, networking solutions, data backup, and cloud computing, that empower our clients to achieve their business goals. 
                </p>
                <p class="slidupeanimate leading-8 mt-2">Our mission is to deliver reliable, efficient, and customized IT solutions that are tailored to meet the unique needs of each of our clients, so they can focus on what they do best - growing their business. We are committed to providing exceptional customer service, building long-term relationships, and staying on the forefront of technological innovation to ensure our clients stay ahead of the curve. When you partner with <span class="text-sky-950 font-semibold">Oriflamme IT Solutions</span>, you can trust us to be your go-to source for all of your IT needs.</p>
            </div>
            <div class="slidupeanimate grid place-content-end">
                <img src="img/aboutus123.jpeg" alt="">
            </div>
        </div>
        <div class="my-10">
            <p class="slidupeanimate leading-8"> We are committed to providing exceptional customer service, building long-term relationships, and staying on the forefront of technological innovation to ensure our clients stay ahead of the curve. When you partner with <span class="text-sky-950 font-semibold">Oriflamme IT Solutions</span>, you can trust us to be your go-to source for all of your IT needs.</p>
        </div>
        <div class="grid lg:grid-cols-2 gap-5 place-content-center">
            <div class="slidedowntoupanimate grid place-content-end">
                <img src="img/vission1.png" alt="">
            </div>
            <div class="slidupeanimate grid place-content-start">
                <div class="flex">
                    <img src="img/vission.png" alt="" class="w-38 h-24">
                    <p class="leading-8"><span class="text-sky-950 font-semibold">Oriflamme IT Solutions</span>, our Vision is to provide reliable and innovative technology solutions that empower businesses to achieve their goals. </p>
                </div>
                <p class="leading-8">Our team of experienced professionals is dedicated to providing outstanding customer service and exceeding expectations. With <span class="text-sky-950 font-semibold">Oriflamme IT Solutions</span>, businesses can rest assured that their technology infrastructure is secure, efficient, and always operating at peak performance.</p>
            </div>
        </div>
    </div>

    <div>
        <div class="grid lg:grid-cols-2  my-10">
            <div class="slidedowntoupanimate w-full"><img src="img/whyuseyou.jpg" alt="" class="w-full mt-14"></div>
            <div class="bg-sky-950 bg-[url('img/bg-07.png')] bg-cover bg-no-repeat grid place-content-center">
                <div class="slidupeanimate px-8 py-4 lg:py-0">
                    <h4 class="uppercase text-sm text-red-600 font-semibold mb-5">WHY CHOOSE US</h4>
                    <h1 class="text-4xl text-white font-semibold ">Discover why we're the top choice for all your needs</h1>
                    <p class="my-5 leading-8 text-white">Our team goes above and beyond to ensure customer satisfaction with every product or service we provide. Don't settle for less than the best!</p>
                    <div class="grid grid-cols-3 gap-5 text-white mt-20">
                        <div class="text-center">
                            <div class="grid place-content-center my-2 border-2 rounded-xl py-2 border-grey-400 w-28 mx-auto"><img src="img/serviceslogos/response.png" alt="" class="w-16  h-16"></div>
                            <h2>Quick Respone of the Query</h2>
                        </div>
                        <div class="text-center">
                        <div class="grid place-content-center my-2 border-2 rounded-xl py-2 border-grey-400 w-28 mx-auto"><img src="img/serviceslogos/maintenance (2).png" alt="" class="w-16 h-16"></div>
                            <h2>Regular Maintenance</h2>
                        </div>
                        <div class="text-center">
                        <div class="grid place-content-center my-2 border-2 rounded-xl py-2 border-grey-400 w-28 mx-auto"><img src="img/serviceslogos/maintenance (1).png" alt="" class="w-16 h-16"></div>
                            <h2>Expert and Well-Trained Techicians</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..................About US Container................ -->

    <!-- .......................work process.............. -->
    <div class="">
        <div class="text-center">
            <h4 class="slidineanimate uppercase text-sm text-red-600 font-semibold mb-5">WHY CHOOSE US</h4>
            <h1 class="slidedowntoupanimate text-4xl text-sky-950 font-semibold mb-10 ">Our Working Process</h1>
            <div class="slidupeanimate grid lg:grid-cols-3 px-10 gap-10 justify-items-center bg-[url('img/process-line.png')] bg-no-repeat bg-center">
                <div class="card_wrapper text-center px-4 hover:scale-110">
                    <div class=" grid justify-center my-5 relative">
                        <img src="img/process-01.jpg" alt="" class="rounded-full w-44">
                        <div class=" rounded-full w-14 absolute bottom-0 right-24"><img src="img/001-removebg-preview.png" alt="" class=" card_number w-14 bg-red-600 rounded-full"></div>
                    </div>
                    <h2 class="text-xl font-semibold text-sky-950 my-2">Planning</h2>
                    <p class="text-sm leading-8">With careful planning and focused effort, executing on a plan can take you to great heights.</p>
                </div>
                <div class="text-center px-4 ">
                    <div class="grid justify-center my-5 relative">
                        <img src="img/process-02.jpg" alt="" class="rounded-full w-56">
                        <div class="rounded-full w-14 absolute bottom-0 right-24"><img src="img/02-1-removebg-preview.png" alt="" class="w-14 bg-red-600 rounded-full"></div>
                    </div>
                    <h2 class="text-xl font-semibold text-sky-950 my-2">Execution</h2>
                    <p class="text-sm leading-8">The key to achieving our goals is to focus on execution. We must prioritize taking action over analysis and perfection.</p>
                </div>
                <div class="card_wrapper text-center px-4 hover:scale-110">
                    <div class="grid justify-center my-5 relative">
                        <img src="img/process-03.jpg" alt="" class="rounded-full w-44">
                        <div class=" rounded-full w-14 absolute bottom-0 right-24"><img src="img/033-removebg-preview.png" alt="" class="card_number w-14 bg-red-600 rounded-full"></div>
                    </div>
                    <h2 class="text-xl font-semibold text-sky-950 my-2">Success</h2>
                    <p class="text-sm leading-8">With a clear plan in place, we're ready to put in the work and achieve our goals. Hard work, dedication, and perseverance are the keys to success.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- .......................work process.............. -->
    <div class="text-center my-10">
        <h4 class="slidineanimate uppercase text-sm text-red-600 font-semibold my-5">About Us</h4>
        <h1 class="slidedowntoupanimate text-4xl text-sky-950 font-semibold my-5">Our Motivated Team</h1>
        <div class="slidupeanimate grid grid-cols-4 gap-5  w-10/12 mx-auto">
            <div>
                <div class="relative"><img src="img/team-01.jpg" alt="" class="">
                    <div class="image_card  absolute top-0 right-0 bottom-0 left-0 text-end w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-60">
                        <div class="flex  gap-2 items-end justify-center text-white text-lg w-full h-full">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center my-4">
                    <h1 class="text-lg text-sky-950 hover:text-red-600 font-semibold"><a href="pravin.php">Pravin Rai</a></h1>
                    <h4 class="text-sm">Founder</h4>
                </div>
            </div>
            <div>
                <div class="relative"><img src="img/team-02.jpg" alt="" class="">
                    <div class="image_card  absolute top-0 right-0 bottom-0 left-0 text-end w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-60">
                        <div class="flex  gap-2 items-end justify-center text-white text-lg w-full h-full">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center my-4">
                    <h1 class="text-lg text-sky-950 hover:text-red-600 font-semibold"><a href="rita.php">Rita Mishra</a></h1>
                    <h4 class="text-sm">HR</h4>
                </div>
            </div>
            <div>
                <div class="relative"><img src="img/Alok.png" alt="" class="">
                    <div class="image_card  absolute top-0 right-0 bottom-0 left-0 text-end w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-60">
                        <div class="flex  gap-2 items-end justify-center text-white text-lg w-full h-full">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center my-4">
                    <h1 class="text-lg text-sky-950 hover:text-red-600 font-semibold"><a href="alok.php">Alok Mishra</a></h1>
                    <h4 class="text-sm">Account</h4>
                </div>
            </div>
            <div>
                <div class="relative"><img src="img/Umesh.png" alt="" class="">
                    <div class="image_card  absolute top-0 right-0 bottom-0 left-0 text-end w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-60">
                        <div class="flex  gap-2 items-end justify-center text-white text-lg w-full h-full">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center my-4">
                    <h1 class="text-lg text-sky-950 hover:text-red-600 font-semibold"><a href="umesh.php">Umesh Vishwakarma</a></h1>
                    <h4 class="text-sm">Sales Head</h4>
                </div>
            </div>
        </div>
<!-- .................................................core team.......................... -->
        <!-- <h1 class="slidedowntoupanimate text-4xl text-sky-950 font-semibold my-5">Core Motivated Team</h1> -->
        <!-- <div class="slidupeanimate grid grid-cols-4 gap-5  w-10/12 mx-auto">
            <div>
                <div class="relative"><img src="img/team-01.jpg" alt="" class="">
                    <div class="image_card  absolute top-0 right-0 bottom-0 left-0 text-end w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-60">
                        <div class="flex  gap-2 items-end justify-center text-white text-lg w-full h-full">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center my-4">
                    <h1 class="text-lg text-sky-950 hover:text-red-600 font-semibold"><a href="pravin.php">Subhash</a></h1>
                    <h4 class="text-sm">Founder</h4>
                </div>
            </div>
            <div>
                <div class="relative"><img src="img/team-02.jpg" alt="" class="">
                    <div class="image_card  absolute top-0 right-0 bottom-0 left-0 text-end w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-60">
                        <div class="flex  gap-2 items-end justify-center text-white text-lg w-full h-full">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center my-4">
                    <h1 class="text-lg text-sky-950 hover:text-red-600 font-semibold"><a href="rita.php">Gaurav</a></h1>
                    <h4 class="text-sm">HR</h4>
                </div>
            </div>
            <div>
                <div class="relative"><img src="img/team-03.jpg" alt="" class="">
                    <div class="image_card  absolute top-0 right-0 bottom-0 left-0 text-end w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-60">
                        <div class="flex  gap-2 items-end justify-center text-white text-lg w-full h-full">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center my-4">
                    <h1 class="text-lg text-sky-950 hover:text-red-600 font-semibold"><a href="alok.php">Pradeep</a></h1>
                    <h4 class="text-sm">Account</h4>
                </div>
            </div>
            <div>
                <div class="relative"><img src="img/team-04.jpg" alt="" class="">
                    <div class="image_card  absolute top-0 right-0 bottom-0 left-0 text-end w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-60">
                        <div class="flex  gap-2 items-end justify-center text-white text-lg w-full h-full">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center my-4">
                    <h1 class="text-lg text-sky-950 hover:text-red-600 font-semibold"><a href="umesh.php">Pawan</a></h1>
                    <h4 class="text-sm">Sales Head</h4>
                </div>
            </div>
        </div> -->
    </div>
    <!-- ..................accordance...................... -->
    <div class="container mx-auto my-10">
        <div class="text-center">
            <h4 class="slidineanimate uppercase text-sm text-red-600 font-semibold mb-5">FAQ</h4>
            <h1 class="slidedowntoupanimate text-4xl text-sky-950 font-semibold mb-10 ">Do You Have Any Questions?</h1>
        </div>
        <div class="slidedowntoupanimate lg:flex gap-5">
            <div class="lg:w-1/2">
                <button class="accordion bg-grey-100 text-sky-950 p-4 border border-grey-200 transition font-semibold after: content:[\002B] after:font-bold after:ml-5 my-2 w-full text-left"><span>1. </span>What kinds of IT services and products do you provide?</button>
                <div class="panel px-8  bh-white overflow-hidden max-h-0 transition-[max-h-0 0.2s ease-out] leading-7">
                    <h1 class="text-lg my-2">Here are our best products and services.</h1>
                    <div class="grid grid-cols-2 gap-5">
                        <div>
                            <h3 class="text-lg my-2">IT Services</h3>
                            <ul class="leading-9 text-sm list-disc list-outside">
                                <li>Managed IT services.</li>
                                <li>Networking solutions</li>
                                <li>Virtualization</li>
                                <li>AMC and FMS services</li>
                                <li>Cloud technology solutions</li>
                                <li>Data backup and recovery</li>
                                <li>Software licencing solutions</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg my-2">Surveillance services</h3>
                            <ul class="leading-9 text-sm list-disc list-outside">
                                <li>CCTV cameras and video surveillance</li>
                                <li>Access control</li>
                                <li>Virtualization</li>
                                <li>Attendance solutions</li>
                                <li>Intrusion alarm</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg my-2">Products and services</h3>
                            <ul class="leading-9 text-sm list-disc list-outside">
                                <li>Laptops/desktop systems</li>
                                <li>Computer Hardware Accessories</li>
                                <li>Office Printers</li>
                                <li>AMC and FMS services</li>
                                <li>Attendance machine</li>
                                <li>Firewall</li>
                                <li>Cctv camera</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <button class="accordion bg-grey-100 text-sky-950 font-semi-bold font-semibold p-4 border border-grey-200 transition after:content:[\002B] after:font-bold after:ml-5 my-2 w-full text-left font-semi-bold"><span>2. </span>Why oriflamme IT solutions?</button>
                <div class="panel px-8  bh-white overflow-hidden max-h-0 transition-[max-h-0 0.2s ease-out] leading-7">
                    <p class="leading-8 text-sm my-2">Oriflamme is the managed service provider for the best and leading IT infrastructure, IT maintenance, and web development companies in Mumbai. We offer an IT help desk and support, remote support, and troubleshooting; we also manage hardware and software services for our clients, all at the best price compared to other IT solutions in Mumbai. <br> <br>
                        We have an AMC (Annual Maintenance Contract) on our managed services. We offer a distinguished service to our clients.
                    </p>
                </div>

                <button class="accordion bg-grey-100 text-sky-950  font-sem-bold font-semibold p-4 border border-grey-200 transition after:content:[\002B] after:font-bold after:ml-5 my-2 w-full font-semi-bold text-left"><span>3. </span>Do we make site visits to your office?</button>
                <div class="panel px-8  bh-white overflow-hidden max-h-0 transition-[max-h-0 0.2s ease-out] leading-7">
                    <p class="leading-8 text-sm my-2">Absolutely! If we can't fix anything remotely, as a local managed service provider, we send out our experts and technicians to the location. In order to ensure that your IT issues may be resolved quickly and remotely, we work to develop an infrastructure. Our engineers and technicians will visit the location if we are unable to resolve them remotely.
                    </p>
                    <h3 class="text-lg my-2">What is the response time?</h3>
                    <p class="leading-8 text-sm ">We work to find solutions as quickly as we can. Depending on the seriousness of the problem a client is experiencing, our help desk is always open, and we guarantee quick response times. Our objective is to satisfy your IT requirements while constructing a proactive, strong, and intelligent IT infrastructure that will reduce disruptions and downtime.</p>
                </div>

            </div>
            <div class="lg:w-1/2">
                <button class="accordion bg-grey-100 text-sky-950 p-4 border border-grey-200 transition font-semibold after: content:[\002B] after:font-bold after:ml-5 my-2 w-full text-left"><span>4. </span>How do you get your IT services?</button>
                <div class="panel px-8  bh-white overflow-hidden max-h-0 transition-[max-h-0 0.2s ease-out] leading-7">
                    <h1 class="text-lg my-2">There are several ways to get IT services from us.</h1>
                    <p class="leading-8 text-sm">You can visit our website and browse through our services section to see if we offer the type of service you require. You can then fill out a contact form on our website, and a member of our team will get back to you as soon as possible. <br> <br>
                        You can email us directly at the email address provided on our website. You can describe your specific IT needs, and we will work with you to find the best solution. <br><br>
                        You can call us at the phone number provided on our website. Our customer support staff will help you. You can also find us on various social media platforms, such as Facebook, Twitter, Instagram, and LinkedIn. You can send us a direct message, and we will guide you through the process of getting IT services from us. <br><br>
                        We also offer a free consultation where you can discuss your business needs with us. We will provide you with the best solution based on your requirements and budget..
                    </p>
                </div>

                <button class="accordion bg-grey-100 text-sky-950 font-semi-bold font-semibold p-4 border border-grey-200 transition after:content:[\002B] after:font-bold after:ml-5 my-2 w-full text-left font-semi-bold"><span>5. </span>What is the cost of your services?</button>
                <div class="panel px-8  bh-white overflow-hidden max-h-0 transition-[max-h-0 0.2s ease-out] leading-7">
                    <p class="leading-8 text-sm my-2">We take pleasure in being "ecosystem agnostic"; whether your team uses Google Apps or Office 365, Windows, Mac, Android, or iOS, we will support them. Need to build a server locally or host one virtually on Amazon or Azure? We will help you. Need to switch from one ecosystem to another? We'll be here for you.
                    </p>
                </div>

                <button class="accordion bg-grey-100 text-sky-950  font-sem-bold font-semibold p-4 border border-grey-200 transition after:content:[\002B] after:font-bold after:ml-5 my-2 w-full font-semi-bold text-left"><span>6. </span>What types of systems do you support?</button>
                <div class="panel px-8  bh-white overflow-hidden max-h-0 transition-[max-h-0 0.2s ease-out] leading-7">
                    <p class="leading-8 text-sm my-2">It actually depends on the service levels you require and the goals you want to pursue. In today's fast-paced world, every business requires IT, yet we do have multiple tiered structures that give different service levels, which specify hours, fees, and response times. Your needs, requirements, and budget will all be taken into consideration while we work.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- ..............................contactus.................... -->
    <div class=" py-20 bg-gray-50">
        <div class="lg:flex container mx-auto gap-5">
            <div class="lg:w-1/3">
                <div class="float-right">
                    <h4 class="uppercase text-sm text-red-600 font-semibold mb-5">CONTACT US</h4>
                    <h1 class="text-4xl text-sky-950 font-semibold mb-10">Feel free to get in touch with experts</h1>

                    <div class="my-5">
                        <h3 class="text-xl text-red-600 font-semibold my-2"><a href="tel:022 4971292">022 4971292</a></h3>
                        <h3 class="text-xl text-red-600 font-semibold"><a href="mailto: support@oriflammeitsolutions.com">support@oriflammeitsolutions.com</a></h3>
                    </div>
                    <div class="my-5">
                        <p class="text-lg text-sky-950 font-semibold leading-9">1st Floor, Unit No 18, Nand Ghanshayam Industrial Estate, Off Mahakali Caves Rd, Andheri East Mumbai, Maharashtra 400093</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-2/3">
  
            <?php
            
                if($insert == true){
                echo "<p id='msg'  class='submitMsg py-4 text-center bg-green-300'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
                }
            ?>
                <form action="aboutus.php" method="POST">
                <div class="lg:grid lg:grid-cols-2 gap-5">
                <div class="w-full" >
                    <label for="" class="">Your Name<span class="text-red-600">*</span></label><br>
                    <input type="text" name="name" id="" placeholder="Your name here" class="w-full my-2 text-sm py-2.5 focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600">
                </div>
                <div>
                    <label for="">Your Email<span class="text-red-600">*</span></label><br>
                    <input type="text" name="email" id="" placeholder="Your email here" class="w-full my-2 text-sm py-2.5">
                </div>
                <div>
                    <label for="">Your Subject<span class="text-red-600">*</span></label><br>
                    <input type="text" name="subject" id="" placeholder="Your subject here" class="w-full my-2 text-sm py-2.5">
                </div>
               
                <div>
                    <label for="">Contact Number<span class="text-red-600">*</span></label><br>
                    <input type="number" name="contact" id="" placeholder="Your phone number here" class="w-full my-2 text-sm py-2.5">
                </div>
            </div>
            <div class="my-5">
                <label for="">Massages <span  class="text-red-600">*</span></label>  <br>
                <textarea type="text" name="massage" id="" cols="115" rows="5" placeholder="Tell us few words" class="my-2 text-sm "></textarea>
                </div>
                <div><button class="bg-red-600 tetx-white px-4 py-2 font-semibold uppercase text-white border-double  border-8 border-white">send Mesaage</button>
            </div>
            </form>
        </div>
       
    </div>
    </div>
    <!-- ..............................contactus.................... -->
    <?php include("footer.php") ?>
    <!-- ..................accordance.......... -->
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
    <!-- ..................accordance.......... -->
    
    <script>
    $(document).ready(function() {
        $("#msg").slideUp(0).delay(1000).slideDown('slow');
        $("#msg").slideDown(1).delay(2000).slideUp('slow');
    });
</script>
