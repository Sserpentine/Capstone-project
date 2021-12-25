<?php
    $con = mysqli_connect('localhost','root','','abcschool');
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $grade = $_POST['grade'];

    $check = mysqli_query($con,"UPDATE userdetails SET grade = '$grade' WHERE firstname = '$firstname' and lastname = '$lastname'");
 
    if($check > 0){
        header("Location:http://localhost/Capstone%20Project/mainpage.html");
    }

?>