<?php
include('connection.php');

if (isset($_SESSION['IS_DOWNLOAD'])) {
    unset($_SESSION['IS_DOWNLOAD']);
    $file = 'CompanyProfile.pdf';
    header('Content-disposition: attachment; filename=' . $file);
    header('Content-type: application/pdf');
    // $path = "C:/xampp/htdocs/oriflammeitSolution/catelog/" . $file;
    $path = $_SERVER['DOCUMENT_ROOT'] . '/oriflammeitSolution/catelog/' . $file;
    readfile($path);
} else {
    header('location:blogs.php');
}