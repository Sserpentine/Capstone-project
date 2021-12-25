<?php
    $con = mysqli_connect('localhost','root','','abcschool');
    $grade = $_POST['grade'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $check_data = mysqli_query($con,"SELECT * FROM userdetails WHERE grade = '$grade' and firstname = '$firstname' and lastname = '$lastname'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        header("Location:http://localhost/Capstone%20Project/mainpage.html");
    }else{
        header("Location:http://localhost/Capstone%20Project");
    }

?>