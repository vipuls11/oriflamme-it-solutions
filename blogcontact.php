<div class="lg:w-60 border border-black bg-gray-400 rounded-lg p-2 drop-shadow-md shadow-lg lg:m-0  m-3" >
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div>
                       <span class="error">* Required field </span> 
                    </div>
                    
                <div class="text-sm">
                <div class="w-full" >
                      <label for="" class="">Your Name</label><br>
                      <!-- <span class="text-red-600 ">*</span><span class="text-red-600 text-sm error"><?php echo "\n".$nameErr; ?></span> -->
                    <input type="text" name="name" id="" placeholder="Your name here" class="w-full my-2 text-sm rounded-lg focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600">
                </div>
                <div>
                    <label for="">Your Email</label><br>
                    <!-- <span class="text-red-600 error">*</span><span class="text-red-600 text-sm error"><?php echo "\n".$emailErr; ?></span> -->
                    <input type="email" name="email" id="" placeholder="Your email here" class="w-full my-2 text-sm rounded-lg" >
                </div>
                <div>
                    <label for="">Required Services</label><br>
                    <input type="text" name="subject" id="" placeholder="Your subject here" class="w-full my-2 text-sm rounded-lg">
                </div>
               
                <div>
                    <label for="">Contact Number</label><br>
                    <!-- <span class="text-red-600 error">*</span><span class="text-red-600 text-sm error"> <?php echo "\n".$mobilenoErr; ?></span> -->
                    <input type="number" name="contact" id="" placeholder="Your phone number here" class="w-full my-2 text-sm rounded-lg">
                </div>
            </div>
            <div class="text-sm">
                <label for="">Massages</label>  <br>
                <textarea type="text" name="massage" id="" cols="115" rows="3" placeholder="Tell us few words" class="w-full my-2 text-sm rounded-lg"></textarea>
                </div>
                <div><button class="bg-red-600 tetx-white px-4 py-1 font-semibold uppercase text-white border-double rounded-lg  border-8 border-white">Send Message</button>
            </div>
            </form>
        </div>