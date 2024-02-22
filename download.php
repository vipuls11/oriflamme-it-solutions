<?php


$_SESSION['IS_DOWNLOAD'] = 'yes';

 if(isset($_SESSION['IS_DOWNLOAD'])){ 
    $file = "CompanyProfile.pdf";
    $path = "file:///C:/xampp/htdocs/oriflammeitSolution/catelog/$file";
    
    if (file_exists($path)) {
        header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=$file");
        readfile($path);
        header('location:blogs.php');
die();
    } else {
        echo "File not found: $path";
    }
      
}
    
?>