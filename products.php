<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <?php include("header.php") ?>
    <!-- ...................Managed It Service ...................... -->
    <div class="container pt-20 mx-auto w-full relative opacity-80">
        <img src="img/All NETWORKING PRODUCT.png" alt="" class="w-full ">
        <div class="absolute top-80 left-5 lg:block hidden">
            <h1 class="text-5xl font-semibold text-white">Products</h1>
            <div class="flex gap-4 px-4 items-center my-10 opacity-95 bg-slate-50 py-4 text-center text-xl font-semibold text-center justify-center">
                <h2><a href="index.php">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="products.php">Products</a></h2>
            </div>
        </div>
        <div class="absolute top-28 left-5  lg:hidden block">
            <h1 class="text-2xl font-semibold text-white">Products</h1>
            <div class="flex gap-4 items-center px-4 my-5 opacity-95 bg-slate-50 py-4 text-center text-md font-semibold text-center justify-center">
                <h2><a href="index.php">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="products.php">Products</a></h2>
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
            <div class="my-20">
                <form action="" method="GET">
                    <div class="lg:w-80 w-58 ">
                        <div class="flex justify-between border border-gray-200 py-4 px-4 bg-sky-950">
                            <h5 class="lg:text-xl text-white">Filter</h5>
                            <button type="submit" class="text-sm px-2 py-1 bg-red-600 mr-2 text-white">Apply</button>
                        </div>
                        <div class="py-4 bg-sky-950 px-4  text-white">
                            <h6 class="border-b border-b-gray-200 pb-2 text-md">Product List</h6>
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "oriflam");
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
                                        <input type="checkbox" name="brands[]" class="my-5 common_selector ram " value="<?= $brandlist['id']; ?>" <?php if (in_array($brandlist['id'], $checked)) {
                                                                                                                                                        echo "checked";
                                                                                                                                                    } ?> />
                                        <?= $brandlist['name']; ?>
                                    </div>
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
            <?php 
    require_once("connection.php");
    $products = "SELECT * FROM  a_products WHERE brand_Id";
                        $products_run = mysqli_query($con, $products);
    
    $num_per_page = 10;
    
    if(isset($_GET["page"]))
    {
        $page=$_GET["page"];
    }
    else{
        $page=1;
    }
    $start_from=($page-1)*10;
    
    $products="SELECT * FROM a_products WHERE brand_Id IN  limit $start_from , $num_per_page";
    $products_run= mysqli_query($con,$products);
?>

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
                                    <button type="Submit" id="submit" onclick=" openPopup(<?= $productitems['name']; ?>)" class=" bg-blue-900 text-white px-4 py-2 rounded-md">Inquiry</button>
                                </div>

                                 <!-- ............inquiry modal.............. -->
                                 <div id="popup" class="modal hidden fixed  pt-28 left-0 top-0 w-full h-full overflow-auto bg-[ rgb(0,0,0)] bg-[rgba(0,0,0,0.4)]">
                                    <div class="relative text-center w-3/6 m-auto mt-20">
                                        <span class="close absolute -top-2 right-0 cursor-pointer m-4 text-lg font-semibold">&times;</span>
                                        
                                        <div class=" bg-sky-50 rounded-lg py-10">
                                        <div class=" z-10 text-xl font-semibold py-2 justify-center bg-sky-950 text-white">
                                        <h2><?= $productitems['name']; ?></h2>
                                        <!-- Product Inquiry Form for Customers requirements -->
                                        </div>
                                        <div class=" mt-5 px-8">
                                            <form action="">
                                                <div class="grid grid-cols-2 my-5">
                                                    <div class="text-left">
                                                    <label for="" class="">First Name<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                    <div class="text-left">
                                                    <label for="">Last Name<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-2 my-5">
                                                    <div class="text-left">
                                                    <label for="">Email<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                    <div class="text-left">
                                                    <label for="">Mobile<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                </div>
                                                <div class="my-5">
                                                    <div class="text-left">
                                                        <label for="">Address<span>*</span></label> <br> 
                                                        <textarea name="" id="" cols="62" rows="4" placeholder=""></textarea>
                                                    </div>
                                                <div class="grid grid-cols-2 my-5">
                                                    <div class="text-left">
                                                    <label for="">Pincode<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                    <div class="text-left">
                                                    <label for="">Landmark<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                </div>

                                                <div class="grid grid-cols-2 my-5">
                                                    <div class="text-left">
                                                    <label for="">State<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                    <div class="text-left">
                                                    <label for="">City<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="my-5 text-left">
                                                        <label for="" class="text-left">Products Requirement Details</label><br>
                                                        <textarea name="" id="" cols="62" rows="8" placeholder=""></textarea>
                                                    </div>
                                            <button type="button" class="px-4 py-1 mt-5 bg-white text-lg border-2 border-grey-600 rounded-lg" onclick="closepopup()">Submit</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ............inquiry modal.............. -->
                                </div>
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
                            <?php 
    require_once("connection.php");
    $products = "SELECT * FROM  a_products WHERE brand_Id ";
    $products_run = mysqli_query($con, $products);
    
    $num_per_page = 10;
    
    if(isset($_GET["page"]))
    {
        $page=$_GET["page"];
    }
    else{
        $page=1;
    }
    $start_from=($page-1)*10;
    
    $products="select * from _products WHERE brand_Id IN limit $start_from , $num_per_page";
    $products_run= mysqli_query($con,$products);
?>
                            <div class="text-center ">
                                <img src="<?= $productitems['image1']; ?>" alt="" class="h-60 m-auto">
                                <h6><?= $productitems['name']; ?></h6>
                                <div class="text-center border-slate-900 m-4 ">
                                    <button type="Submit" id="submit" onclick=" openPopup(<?= $productitems['name']; ?>)" class=" bg-blue-900 text-white px-4 py-2 rounded-md">Inquiry</button>
                                </div>

                                <!-- ............inquiry modal.............. -->
                                <div id="popup" class="modal hidden fixed  pt-28 left-0 top-0 w-full h-full overflow-auto bg-[ rgb(0,0,0)] bg-[rgba(0,0,0,0.4)]">
                                    <div class="relative text-center w-3/6 m-auto mt-20">
                                        <span class="close absolute -top-2 right-0 cursor-pointer m-4 text-lg font-semibold">&times;</span>
                                        
                                        <div class=" bg-sky-50 rounded-lg py-10">
                                        <div class=" z-10 text-xl font-semibold py-2 justify-center bg-sky-950 text-white">
                                        <h2><?= $productitems['name']; ?></h2>
                                        <!-- Product Inquiry Form for Customers requirements -->
                                        </div>
                                        <div class=" mt-5 px-8">
                                            <form action="">
                                                <div class="grid grid-cols-2 my-5">
                                                    <div class="text-left">
                                                    <label for="" class="">First Name<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                    <div class="text-left">
                                                    <label for="">Last Name<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-2 my-5">
                                                    <div class="text-left">
                                                    <label for="">Email<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                    <div class="text-left">
                                                    <label for="">Mobile<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                </div>
                                                <div class="my-5">
                                                    <div class="text-left">
                                                        <label for="">Address<span>*</span></label> <br> 
                                                        <textarea name="" id="" cols="62" rows="4" placeholder=""></textarea>
                                                    </div>
                                                <div class="grid grid-cols-2 my-5">
                                                    <div class="text-left">
                                                    <label for="">Pincode<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                    <div class="text-left">
                                                    <label for="">Landmark<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                </div>

                                                <div class="grid grid-cols-2 my-5">
                                                    <div class="text-left">
                                                    <label for="">State<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                    <div class="text-left">
                                                    <label for="">City<span>*</span></label><br>
                                                    <input type="text">
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="my-5 text-left">
                                                        <label for="" class="text-left">Products Requirement Details</label><br>
                                                        <textarea name="" id="" cols="62" rows="8" placeholder=""></textarea>
                                                    </div>
                                            <button type="button" class="px-4 py-1 mt-5 bg-white text-lg border-2 border-grey-600 rounded-lg" onclick="closepopup()">Submit</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ............inquiry modal.............. -->
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
    <div class="container mx-auto text-center">
<?php

$products = "SELECT * FROM  a_products WHERE brand_Id ";
                        $products_run = mysqli_query($con, $products);

$total_records= mysqli_num_rows( $products_run);
$total_pages=ceil($total_records/$num_per_page);

for($i=1; $i<=$total_pages; $i++){
    echo "<a href='products.php?page=".$i."'>".$i."\t</a>";
}


?>
</div>
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
        function openPopup(name){
          console.log('test')
            document.getElementById("popup").style.display="block";
        }
        function closepopup(){
            document.getElementById('popup').style.display="none";
        }
    </script>
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
</body>

</html>