<?php
ob_start();
?>

<?php
$title='Oriflamme It Solution';
 include("header.php") ?>
<?php
 session_start();
$conn=mysqli_connect('localhost','root','','oriflam') or die('Unable to connect');
?>

    <div class="container mx-auto my-40 ">
        <div class=" border-2 rounded-xl bg-sky-950 border-red-600 w-96 py-10 mx-auto">
<div class=" text-center">
    <h2 class="py-5 text-3xl font-semibold mb-10 text-white">Please Login</h2>
    <div >
        <form action="showdata.php" method="post">
        <input type="text" class="field mb-5" name="Username" placeholder="Username" id="" > <br>
        <input type="text" class="field mb-5" name="Pass" placeholder="Password" > <br>
        <!-- <input type="submit" class="field" name="login" value="login">  -->
         <button type="submit" class="field border border-gray-400 rounded-md px-4 py-1 text-white" name="login" value="login">Login</button>
        </form>
    </div>
</div>
</div> 
</div>
<?php
if(isset($_POST['login'])){
    $Username= $_POST['Username'];
    $Pass = $_POST['Pass'];

    $select=mysqli_query($conn, "SELECT * FROM login_user WHERE Username = '$Username' AND Pass='$Pass'");
    $row=mysqli_fetch_array($select);

    if(is_array($row)){
        $_SESSION["Username"] = $row['Username'];
        $_SESSION["Pass"] = $row['Pass'];
    }
    else
    {
        echo '<script type= "text/javascript">';
        echo 'alert("Invalid Username or Password")';
        echo 'window.location.href="showdata.php"';
        echo '</scripts>';
    }
}
if(isset($_SESSION["Username"])){
    header("location:login.php");
}
?>
<?php include("footer.php") ?>
<?php
ob_end_flush();
?>