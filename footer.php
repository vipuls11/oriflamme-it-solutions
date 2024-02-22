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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
    <!-- <link rel="icon" type="image/x-icon" href="tailwin img/logoooooooo-removebg-preview.png" width=""> -->
    <title>Oriflamme IT Solutions</title>
   
</head>
<style> body{
    font-family: 'Poppins', sans-serif;
}</style>

<?php
    //  $a=array("email");
    //  global $subject;
    //  global $name;
    //  global $email;
    //  global $subject;
    //  global $contact;
    //  global $massage;
    $insert = false;
    $validation = false;
    $host = "localhost";
    $user = "root";
    $password ="";
    $db_name ="oriflam";
   
    
   
   
    $conn = mysqli_connect($host, $user, $password, $db_name);
    // checkEmail($conn1, $emailInput);
  

    if(mysqli_connect_errno()){
        die("Failed to connect with MySQL:". mysqli_connect_errno());   
    }
    else{ 
        $emailErr = "";
        $email = "";
        $ctr=0;  
        
        function checkEmail($conn, $emailInput){
       
            $query = "SELECT email FROM subscribers WHERE email='$emailInput'";
            
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
             return true;
            }
            return false;
          }
    }
  
        if(isset($_POST['email']) ){
        $emailInput= $_REQUEST['email'];
        if (checkEmail($conn, $emailInput)) {
            $validation = true;
            // echo "<span style='color:red'>This Email is already in use</span>";
        }
        else
        {
        $sql ="INSERT INTO subscribers(email)
        VALUES ('".$_REQUEST['email']."')";

        // if($conn->query($sql)=== TRUE){
        //     // echo "Record Submitted Successfully";
        //     $insert = true;
        // }
        // else{
        //     echo "Error:".$sql. "<br>" .$conn->error;
        // }

        //Email Validation   
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            $ctr++;
        } else {
            $email = input_data($_POST["email"]);
            function valid_email($str) {
                return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/", $str)) ? FALSE : TRUE;
        }
            // check that the e-mail address is well-formed 
             
            if (!valid_email($email, (""))) {
                $emailErr = "Invalid email format";
                $ctr++;
            }
        }

    

        $sql = "INSERT INTO subscribers( Email)
        VALUES ('" . $_REQUEST['email'] . "')";

        if ($ctr==0 && $conn->query($sql) === TRUE) {
            // echo "Record Submitted Successfully";
            $insert = true;
        } else 
        {
            // echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
        $conn->close();

        // header("location:Contact.php ?");
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
<body>
<!-- bg-red-900 -->
<!-- bg-[#b30000] -->
<div class="bg-[#b30000]">
    <div class="container mx-auto  px-8 grid lg:grid-cols-3 py-5 lg:gap-5 place-content-center w-full">
        <div class="flex items-center text-white gap-5 pb-5 lg:pb-0">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
              </svg>
              </div>
            <div>
                <h1 class="font-semibold">Contact Us</h1>
                <p  class="text-xl font-bold"><a href="tel:022 49716152"> 022 49716152</a><span>/</span><a href="tel:022 4971292"> 022 4971292</a></p>
            </div>
        </div>
    
    <div><img src="img/logo.png" alt=""></div>
    
        <div class="flex items-center lg:justify-start text-white">
            <div>
                <h1 class="font-semibold">Mail Us</h1>
                <p  class="text-xl  font-bold mr-4"><a href="mailto: support@oriflammeitsolutions.com"> support@oriflammeitsolutions.com</a></p>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                  </svg>                  
              </div>
        
    </div>
</div>
</div>
<div class="bg-sky-950">
    <footer class=" ">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8  p-5  text-lg  ">
        <div class="text-left">
        <div>
          <h1 class="text-2xl font-bold text-white">About Company</h1>
        </div>
        <p class="text-lg  my-10 text-white">We have 10+ years experience. Helping you overcome technology challenges.</p>
        <div class="text-white"> 
            <a   class="facebook mx-2 text-4xl font-semibold hover:text-blue-700 text-blue-600"><i class="fa-brands fa-facebook-f" ></i></a>
            <a  class="twitter mx-2 text-4xl font-semibold hover:text-blue-700 text-blue-500"><i class="fa-brands fa-twitter" > </i></a>
            <a  class="linkedin mx-2 text-4xl font-semibold hover:text-blue-700 text-sky-700"><i class="fa-brands fa-linkedin" ></i></a>
            <a  class="pinterest mx-2 text-4xl font-semibold hover:text-blue-700 text-red-700"><i class="fa-brands fa-square-pinterest"></i></a>
        </div>
        <div  class="text-sm  my-10 text-white">
                <p><span>Branch Office  :</span> Ist Floor, House No -107, B -BLK, Gali No-1, Majlis Park,
                    Delhi, North West Delhi, Delhi, 110033</p> 
            </div>
        </div>
    
        <div class="cursor-pointer">
            <h3 class="text-2xl font-bold text-white">Contact Us    </h3>
            <div class="py-10">
            <div  class="text-lg  my-0 text-white">
                <p><span>Address : </span>1st Floor, Unit No 18, Nand Ghanshyam Industrial Estate, Off Mahakali Caves Rd, Andheri East, Maharashtra 400093</p>
            </div>
            <p  class="text-lg  my-5 text-white"><span>Email :</span><a href="mailto: pravin@oriflammeitsolutions.com"> pravin@oriflammeitsolutions.com</a></p>
        <p  class="text-lg text-white"><span>Phone :</span><a href="tel:+91-9930425384">  +91-9930425384</a><span>/</span><a href="tel:9930646412"> 9930646412</a></p>
    </div>
        </div>

      

        <div class="cursor-pointer">
            <h3 class="text-2xl font-bold text-white">Newsletter</h3>
            <div class="py-10">
            <p class="text-lg  text-white">Subscribe to our newsletter to receive updates on the latest news!</p>
            <div class="my-10">         
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        
                    </div>
                    <input type="search" id="default-search" name="email" class="block w-80 mx-auto p-2 pl-5 text-lg  text-gray-700 border border-gray-300  bg-gray-50  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Subscribe with us" >
                    <button type="submit" class="text-gray-800 absolute lg:right-10  left-[300px] sm:right-12 -bottom-1 text-3xl px-4 py-2 "><i class="fa-solid fa-paper-plane"></i></button>
                    
                </div>
                <div class="text-center">
                <span class="py-2  text-red-600 text-sm error"><?php echo "\n".$emailErr; ?></span>
                </div>
            </form>
            <div class="">
                <?php
                    // if(isset($_SESSION['status']))
                    // {
                    //     ?>
                           <div>
                           <!-- <p id='msg' class='submitMsg py-4 text-center bg-green-300'><?php echo $_SESSION['status'];?></p> -->
                            </div>
                       <?php
                        
                    //     unset($_SESSION['staus']);
                    // }
                ?>
            </div>
               <div class="">
               

                   <?php
                          if($ctr==0 & $insert == true){
                          echo "<p id='msg' class='submitMsg py-2 text-center bg-green-300'>You have subscribe succesfully.</p>";
                          }
                      ?>

                    <?php
                          if($validation == true){
                          echo "<p id='valid' class='submitMsg py-2 text-center bg-sky-950 text-red-600'>This Email is already in use.</p>";
                          }
                      ?>
                      </div>
            </div>
           
        </div>
    </div>
    </div>
    <div>
        <div class="text-center py-5 border-t border-t-white">
        <p class="text-lg text-white">© 2023 Oriflamme It Solution Powered by <span class="text-red-600">Oriflamme</span></p>
        <div class="text-right bg-red-200">
        <button id="scroll" class="border border-sky-600 p-4 bg-sky-800 fixed bottom-4 right-4 mt-2 text-4xl text-red-700 rotate-90">&#10096;</button>
        </div>
    </div>
    </div>
    </footer>
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
    $(document).ready(function(){ 
  $(window).scroll(function(){ 
      if ($(this).scrollTop() > 100) { 
          $('#scroll').fadeIn(); 
      } else { 
          $('#scroll').fadeOut(); 
      } 
  }); 
  $('#scroll').click(function(){ 
      $("html, body").animate({ scrollTop: 0 }, 800); 
      return false; 
  }); 
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>