<?php
    $con = mysqli_connect('localhost','root','','abcschool');
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $grade = $_POST['grade'];

    $check = mysqli_query($con,"DELETE FROM userdetails WHERE firstname = '$firstname' and lastname = '$lastname' and grade = '$grade'");
 
    if($check > 0){
        header("Location:http://localhost/Capstone%20Project/index.html");
    }

?>