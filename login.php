<?php
$title='Oriflamme It Solution';
 include("header.php");
// session_start();

?>

<?php 
    require_once("connection.php");
    $query = " select * from contact_us ";
    $result = mysqli_query($con,$query);
    
    $num_per_page = 10;
    
    if(isset($_GET["page"]))
    {
        $page=$_GET["page"];
    }
    else{
        $page=1;
    }
    $start_from=($page-1)*10;
    
    $query="select * from contact_us limit $start_from , $num_per_page";
    $result= mysqli_query($con,$query);
?>

<!-- .....................download filter in excel form database of contact_us......................... -->
<?php
$query=$con->query("SELECT * FROM contact_us ORDER BY name ASC");
?>
<?php
    function filterData(&$str){
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"')) $str = '"'.str_replace('"', '""', $str). '"'; 
    }

    //Excel file name download
    $fileName = "contact_us_export_data-" . date('Ymd'). ".xlsx";

    // Column names
    $fields = array('Name', 'Email', 'Subject', 'Contact', 'Massage');

    //Display column names as first row
    $excelData = implode("\t", array_values($fields)). "\n";

    $query=$con->query("SELECT * FROM contact_us ORDER BY name ASC");

    if($query->num_rows > 0){
        // Outpt each row of the data
        $i=0;
        while($row = $query->fetch_assoc()){
            $i++;
            $rowData = array($i, $row['Name'], $row['Email'], $row['Subject'], $row['Contact'], $row['Massage']);
            array_walk($rowData, 'filterData');
            $excelData .= implode("\t", array_values($rowData)) ."\n";
        }
        
    }
    else{
        $excelData .= 'No records found...'. "\n";
    }
    // Headers for download 
    
    echo $excelData;
    header("Content-Type: application/vnd.ms-excel"); 
    header("Content-Disposition: attachment; filename=\"$fileName\""); 
        //Render excel data

        exit;
?>
<!-- ....................download filter in excel form database of contact_us........................ -->
<style>
     /* a{
        padding:0px 5px;
    } */
</style>
<div class="container mx-auto mt-16 w-full">
<div class="text-right">
<button class="border border-gray-400 px-4 py-2 my-4 font-semibold bg-sky-950 text-white rounded-md">
 <a href ="logout.php">logout</a>
</button>
</div>

<div class="text-right">
    <button class="border border-black rounded-lg text-sky-950 px-4 py-2 font-semibold my-2"><span class="pr-2"><i class="fa-solid fa-file-excel"></i></span>Download</button>
</div>
    <table class="w-full">
        <tbody class=" overflow-hidden">
            <tr class="border border-gray-400">
                <th class="border border-gray-400 p-2">Id</th>
                <th class="border border-gray-400  p-2">Name</th>
                <th class="border border-gray-400 p-2">Email</th>
                <th class="border border-gray-400  p-2">Subject</th>
                <th class="border border-gray-400  p-2">Contact</th>
                <th class="border border-gray-400 p-2">Massage	</th>
                <th class="border border-gray-400 p-2">Date</th>
            </tr>
            <?php 
                           if($query->num_rows > 0){       
                                    while($req=mysqli_fetch_assoc($result)){ $i++;
                                    {
                                        $id  = $req['id'];
                                        $Name = $req['Name'];
                                        $Email = $req['Email'];
                                        $Subject = $req['Subject'];
                                        $Contact = $req['Contact'];
                                        $Massage = $req['Massage'];
                            ?>

                                        <tr class="border border-gray-400">
                                        <td class="border border-gray-400 px-4 py-2"><?php echo  $id  ?></td>
                                        <td class="border border-gray-400 px-4 py-2 "><?php echo  $Name  ?></td>
                                        <td class="border border-gray-400 px-4 py-2"><?php echo  $Email ?></td>
                                        <td class="border border-gray-400 px-4 py-2"><?php echo  $Subject ?></td>
                                        <td class="border border-gray-400 px-4 py-2"><?php echo $Contact ?></td>
                                        <td class="border border-gray-400 px-4 py-2"><?php echo $Massage ?></td>
                                        <!-- <td class="border border-gray-400"><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                        <td class="border border-gray-400"><a href="delete.php?Del=<?php echo $UserID ?>" onclick="return confirm('Are you sure you to delete this')">Delete</a></td> -->
                                    </tr>        
                            <?php 
                                    }
                                }  
                            }  
                            else{
                                ?>
                                <tr><td>No member(s) found.......</td></tr>
                                <?php
                            }
                            ?>  
        </tbody>
    </table>
</div>
<div>
    <!-- <h2>welcome<?php echo $_SESSION['Username'];?></h2> -->

</div>
<div class="container mx-auto text-center">
<?php

$query = " select * from contact_us ";
    $result = mysqli_query($con,$query);

$total_records= mysqli_num_rows($result);
$total_pages=ceil($total_records/$num_per_page);

for($i=1; $i<=$total_pages; $i++){
    echo "<a href='login.php?page=".$i."'>".$i."\t</a>";
}


?>
</div>
<?php include("footer.php") ?>  