     <?php
    $title = 'All in One Computer Laptop Desktop and Accessories Dealer partner';
    $description = 'Find the best deals on computer, laptops, printers, CCTV cameras, servers, antivirus software, and licensing software. Shop now for quality products at unbeatable prices.';
    $keywords = '';
    $canonical = 'https://oriflammeitsolutions.com/All_in_One_Computer_Laptop_Desktop_and_Accessories_Dealer_%20partner';
    $Title1 = 'All in One Computer Laptop Desktop and Accessories Dealer partner';
    $url = 'https://oriflammeitsolutions.com/All_in_One_Computer_Laptop_Desktop_and_Accessories_Dealer_%20partner';
    $Description2 = 'Find the best deals on computer, laptops, printers, CCTV cameras, servers, antivirus software, and licensing software. Shop now for quality products at unbeatable prices.';
    $image = 'https://oriflammeitsolutions.com/img/products.jpg';
    $Description3 = 'Find the best deals on computer, laptops, printers, CCTV cameras, servers, antivirus software, and licensing software. Shop now for quality products at unbeatable prices.';
    $Title3 = 'All in One Computer Laptop Desktop and Accessories Dealer partner';
    $alternateName = 'All in One Computer Laptop Desktop and Accessories Dealer partner';
    $Twitterurl = 'https://oriflammeitsolutions.com/img/products.jpg';
    include("header.php")
     ?> 
<script src="js/sweetalert.js"></script>

   <?php 
   session_start();
      $host = "localhost";
      $user = "root";
      $password = "";
      $db_name = "oriflam";
$conn = mysqli_connect($host, $user, $password, $db_name);

if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL:" . mysqli_connect_errno());
} else {
    $first_nameErr = $last_nameErr = $mobilenoErr = $pincodeErr = $cityErr = $productErr = "";
    $name = $email = $mobileno = "";
    $ctr=0;
    //Input fields validation  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

         //String Validation  
         if (empty($_POST["first_name"])) {
            $first_nameErr = "First Name is required";
            $ctr++;
        } else {
            $first_name = input_data($_POST["first_name"]);
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/", $first_name)) {
                $first_nameErr = "Only alphabets and white space are allowed";
                $ctr++;
            }
        }

        //String Validation  
        if (empty($_POST["last_name"])) {
            $last_nameErr = "Last Name is required";
            $ctr++;
        } else {
            $last_name = input_data($_POST["last_name"]);
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/", $last_name)) {
                $last_nameErr = "Only alphabets and white space are allowed";
                $ctr++;
            }
        }

        // Email Validation   
        if (empty($_POST["pincode"])) {
            $pincodeErr = "Pincode is required";
            $ctr++;
        } else {
            $pincode = input_data($_POST["pincode"]);
            // check if mobile no is well-formed  
            if (!preg_match("/^[0-9]*$/", $pincode)) {
                $pincodeErr = "Only numeric value is allowed.";
                $ctr++;
            }
            //check mobile no length should not be less and greator than 10  
            if (strlen($pincode) != 6) {
                $pincodeErr = "pincode must contain 6 digits.";
                $ctr++;
            }
        }

        //Number Validation  
        if (empty($_POST["mobile"])) {
            $mobilenoErr = "Mobile no is required";
            $ctr++;
        } else {
            $mobileno = input_data($_POST["mobile"]);
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

    //String Validation  
    if (empty($_POST["city"])) {
        $cityErr = "City is required";
        $ctr++;
    } else {
        $city = input_data($_POST["city"]);
        // check if name only contains letters and whitespace  
        if (!preg_match("/^[a-zA-Z ]*$/", $city)) {
            $cityErr = "Only alphabets and white space are allowed";
            $ctr++;
        }
    }

    if (empty($_POST["product_requirement"])) {
        $productErr = "Product details is required";
        $ctr++;
    // } else {
    //     $product = input_data($_POST["product_requirement"]);
    //     // check if name only contains letters and whitespace  
    //     if (!preg_match("/^[a-zA-Z]+[a-zA-Z0-9._]+$/", $product)) {
    //         $productErr = "Only alphabets and white space are allowed";
    //         $ctr++;
    //     }
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

        $sql = "INSERT INTO product_all(product_name, first_name, last_name, email, mobile, address, pincode, landmark, state, city, product_requirement)
        VALUES ('" . $_REQUEST['product_name'] . "','" . $_REQUEST['first_name'] . "','" . $_REQUEST['last_name'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['mobile'] . "','" . $_REQUEST['address'] . "','" . $_REQUEST['pincode'] . "','" . $_REQUEST['landmark'] . "','" . $_REQUEST['state'] . "','" . $_REQUEST['city'] . "','" . $_REQUEST['product_requirement'] . "')";

        if ($ctr==0 && $conn->query($sql) === TRUE) {
            // echo "Record Submitted Successfully";
            // $insert = true;
            $_SESSION['status'] = "Your Requirement Submitted Successfully, Thank You!";
            $_SESSION['status_code'] = "Success";
        } 
        // else 
        // {
        //     echo "Error:" . $sql . "<br>" . $conn->error;
        // }
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
    <!-- ...................Managed It Service ...................... -->
    <div class="container  mx-auto w-full relative opacity-80">
        <img src="img/products.jpg" alt="" class="w-full ">
        <div class="absolute top-80 left-5 lg:block hidden w-3/5">
            <h1 class="text-5xl font-semibold text-white">All in One Computer Laptop Desktop and Accessories</h1>
        </div>
        <div class="absolute top-80 left-5 lg:block hidden my-28">
            <!--<h1 class="text-5xl font-semibold text-white">All in One Computer Laptop Desktop and Accessories</h1>-->
            <div class="flex gap-4 px-4 items-center  opacity-95 bg-slate-50 py-4 text-center text-xl font-semibold text-center justify-center">
                <h2><a href="Index">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="All_in_One_Computer_Laptop_Desktop_and_Accessories_Dealer_ partner">Products</a></h2>
            </div>
        </div>
        <div class="absolute top-40 left-5 block lg:hidden ">
            <h1 class="text-3xl font-semibold text-white">All in One Computer Laptop Desktop and Accessories</h1>
        </div>
        <div class="absolute top-56 left-5  lg:hidden block">
            <!--<h1 class="text-2xl font-semibold text-white">All in One Computer Laptop Desktop and Accessories</h1>-->
            <div class="flex gap-4 items-center px-4 my-5 opacity-95 bg-slate-50 py-4 text-center text-md font-semibold text-center justify-center">
                <h2><a href="Index">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="All_in_One_Computer_Laptop_Desktop_and_Accessories_Dealer_ partner">Products</a></h2>
            </div>
        </div>
    </div>
    <!-- ...................products banner...................... -->

    <div class="container mx-auto my-10 px-8">

        <div class=" py-2 px-4 mt-5">
            <h2 class="text-xl font-semibold text-center my-5">Desktop Computer And Personal Laptop</h2>
            <h4 class="text-lg text-justify">We “<span class="text-sky-950">Oriflamme IT Solutions</span>” are Sole proprietorship based company, involved as the Wholesale Trader of Desktop Computer, Personal Laptop, Network Server and much more.</h4>
        </div>



        <div class="flex">
            <!-- Brand List  -->
            <div class="py-24" style=" position: -webkit-sticky; position: sticky; top: 0; max-height:100vh;">
                <form action="" method="GET" id="myform">
                    <div class="lg:w-80 w-58 ">
                        <!--<div class="flex justify-between border border-gray-200 py-4 px-4 bg-sky-950">-->
                        <!--    <h5 class="lg:text-xl text-white">Filter</h5>-->
                        <!--<button type="submit" class="text-sm px-2 py-1 bg-red-600 mr-2 text-white">Apply</button>-->
                        <!--</div>-->
                        <div class="py-4 bg-sky-950 px-4  text-white">
                            <h6 class="border-b border-b-gray-200 pb-2 text-md">Product List</h6>
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "oriflamme_it_solution");
                            $brand_query = "SELECT * FROM a_brands";
                            $brand_query_run = mysqli_query($con, $brand_query);

                            if (mysqli_num_rows($brand_query_run) > 0) {
                                foreach ($brand_query_run as $brandlist) {
                                    $checked = [];
                                    if (isset($_GET['brands'])) {
                                        $checked = $_GET['brands'];
                                    }

                            ?>

                                    <div class="checkbox text-md ">
                                        <input type="checkbox" name="brands[]" class="my-5 common_selector ram " id="<?= $brandlist['id']; ?>" value="<?= $brandlist['id']; ?>" <?php if (in_array($brandlist['id'], $checked)) {
                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                } ?> />
                                        <?= $brandlist['name']; ?>
                                    </div>

                                    <script>
                                        $('#<?= $brandlist['id']; ?>').on('change', function() {
                                            $('#myform').submit();
                                        })
                                    </script>
                            <?php
                                }
                            } else {
                                echo "No Brands Found";
                            }
                            ?>
                        </div>
                    </div>
                </form>
            </div>


            <div class="my-20 grid gap-10 lg:grid-cols-3 grid-cols-1 text-center px-10  w-full">
                <?php
                if (isset($_GET['brands'])) {
                    $brandchecked = [];
                    $brandchecked = $_GET['brands'];
                    foreach ($brandchecked as $rowbrand) {
                        $products = "SELECT * FROM  a_products WHERE brand_Id IN ($rowbrand)";
                        $products_run = mysqli_query($con, $products);
                        if (mysqli_num_rows($products_run) > 0) {
                            foreach ($products_run as $productitems) :
                ?>
                                <div class="text-center filter_data">
                                    <img src="<?= $productitems['image1']; ?>" alt="" class="h-60 m-auto">
                                    <h6><?= $productitems['name']; ?></h6>
                                    <div class="text-center border-slate-900 m-4 ">
                                        <button onclick="openPopup1('<?= $productitems['name']; ?>')" class=" bg-blue-900 text-white px-4 py-2 rounded-md">Inquiry</button>
                                    </div>
                                </div>
                                <script>
                                    function openPopup1(name) {
                                        console.log(name)
                                        document.getElementById('mypopup').style.display = "block";
                                        document.getElementById('heading').innerHTML = name;
                                        document.getElementById('service_name').value = name;
                                    }

                                    function closepopup1(id) {
                                        document.getElementById('heading').innerHTML = "";
                                        document.getElementById('service_name').value = "";
                                        document.getElementById('mypopup').style.display = "none";
                                    }
                                </script>


                            <?php
                            endforeach;
                        }
                    }
                } else {
                    $products = "SELECT * FROM a_products";
                    $products_run = mysqli_query($con, $products);
                    if (mysqli_num_rows($products_run) > 0) {
                        foreach ($products_run as $productitems) :
                            ?>
                            <div class="text-center ">
                                <img src="<?= $productitems['image1']; ?>" alt="" class="h-60 m-auto">
                                <h6><?= $productitems['name']; ?></h6>
                                <div class="text-center border-slate-900 m-4 ">
                                    <button onclick="openPopup1('<?= $productitems['name']; ?>')" class=" bg-blue-900 text-white px-4 py-2 rounded-md">Inquiry</button>
                                </div>
                                <script>
                                    function openPopup1(name) {
                                        console.log(name)
                                        document.getElementById('mypopup').style.display = "block";
                                        document.getElementById('heading').innerHTML = name;
                                        document.getElementById('service_name').value = name;
                                    }

                                    function closepopup1(id) {
                                        document.getElementById('heading').innerHTML = "";
                                        document.getElementById('service_name').value = "";
                                        document.getElementById('mypopup').style.display = "none";
                                    }
                                </script>
                            </div>
                <?php
                        endforeach;
                    } else {
                        echo "No Items Found";
                    }
                }
                ?>

            </div>
        </div>
    </div>
    <!-- ............inquiry modal.............. -->
    <div id="mypopup" class="modal hidden fixed  pt-28 left-0 top-0 w-full h-full overflow-auto bg-[ rgb(0,0,0)] bg-[rgba(0,0,0,0.4)]">
        <div class="relative text-center lg:w-3/6  m-auto mt-20">
            <span onclick=" closepopup1('<?= $productitems['id']; ?>')" class="close absolute -top-2 right-0 cursor-pointer m-4 text-lg font-semibold">&times;</span>

            <div class=" bg-sky-50 rounded-lg py-10">
                <div class="z-10 text-xl font-semibold py-2 justify-center bg-sky-950 text-white">
                    <h2 id="heading"></h2>
                    <!-- Product Inquiry Form for Customers requirements -->
                </div>
                <div class=" mt-5 px-8">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <input type="hidden" id="service_name" name="product_name">
                        <div class="lg:grid lg:grid-cols-2 gap-5 my-5">
                            <div class="text-left">
                                <label for="" class="">First Name<span>*</span><span class="text-red-600 text-sm error"><?php echo "\n".$first_nameErr; ?></span></label><br>
                                <input name="first_name" type="text" class="w-full">
                            </div>
                            <div class="text-left">
                                <label for="">Last Name<span>*</span><span class="text-red-600 text-sm error"><?php echo "\n".$last_nameErr; ?></span></label><br>
                                <input name="last_name" type="text" class="w-full">
                            </div>
                        </div>
                        <div class="lg:grid lg:grid-cols-2 gap-5 my-5">
                            <div class="text-left">
                                <label for="">Email</span></label><br>
                                <input name="email" type="text" class="w-full">
                            </div>
                            <div class="text-left">
                                <label for="">Mobile<span>*</span><span class="text-red-600 text-sm error"><?php echo "\n".$mobilenoErr; ?></span></label><br>
                                <input name="mobile" type="number" value="<?php echo $mobileno;?>" class="w-full">
                            </div>
                        </div>
                        <div class="my-5">
                            <div class="text-left">
                                <label for="">Address</label> <br>
                                <div class=""><textarea name="address" id="" cols="62" rows="4" placeholder="" class="w-full"></textarea></div>
                                <!-- <div class="block lg:hidden"><textarea name="address" id="" cols="24" rows="4" placeholder="" class="w-full"></textarea></div> -->
                            </div>
                        </div>
                        <div class="lg:grid lg:grid-cols-2 gap-5 my-5">
                            <div class="text-left">
                                <label for="">Pincode<span>*</span><span class="text-red-600 text-sm error"><?php echo "\n".$pincodeErr; ?></span></label><br>
                                <input type="text" name="pincode" class="w-full">
                            </div>
                            <div class="text-left">
                                <label for="">Landmark</label><br>
                                <input type="text" name="landmark" class="w-full">
                            </div>
                        </div>

                        <div class="lg:grid lg:grid-cols-2 gap-5 my-5">
                            <div class="text-left">
                                <label for="">State</span></label><br>
                                <input type="text" name="state" class="w-full">
                            </div>
                            <div class="text-left">
                                <label for="">City<span>*</span><span class="text-red-600 text-sm error"><?php echo "\n".$cityErr; ?></span></label><br>
                                <input type="text" name="city" class="w-full">
                            </div>
                        </div>

                        <div class="my-5 text-left">
                            <label for="" class="text-left">Products Requirement Details <span>*</span><span class="text-red-600 text-sm error"><?php echo "\n".$productErr; ?></span></label><br>
                            <div class=""> <textarea name="product_requirement" id="" cols="62" rows="8" placeholder="" class="w-full"></textarea required></div>
                            <!-- <div class="block lg:hidden"> <textarea name="product_requirement" id="" cols="24" rows="8" placeholder="" class="w-full"></textarea></div> -->
                        </div>
                      
                        <button class="px-4 py-1 mt-5 bg-white text-lg border-2 border-grey-600 rounded-lg">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ............inquiry modal.............. -->
    <?php include("footer.php") ?>
    <script>
        $(document).ready(function() {


            


            filter_data();

            function filter_data() {
                // $('.filter_data').html('<div id="loading" style="" ></div>');
                // var action = 'fetch_data';

                // var brand = get_filter('brand');
                var ram = get_filter('ram');
                // var storage = get_filter('storage');
                $.ajax({
                    // url:"fetch_data.php",
                    method: "POST",
                    data: {
                        action: action,
                        brand: brand,
                        ram: ram
                    },
                    success: function(data) {
                        $('.filter_data').html(data);
                    }
                });
            }

            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }

            $('.common_selector').click(function() {
                filter_data();
            });



        });
    </script>

    <!-- ...............inquiry modal............... -->

    <script>
        // Get the modal
        var modal = document.getElementById("popup");

        // Get the button that opens the modal
        var btn = document.getElementById("submit");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <!-- ...............inquiry modal............... -->
    <!-- <script>
    swal("Good job!", "You clicked the button!", "success");
</script> -->

<?php 
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
    ?>
 
    <script>
           swal({
  title: "<?php echo $_SESSION['status']; ?>",
 text: "<?php echo $_SESSION['status_code']; ?>",
  icon: "success",
  button: "Ohk",
});
    // swal("Good job!", "You clicked the button!", "success");
</script>
<?php
unset($_SESSION['status']);
}
?>