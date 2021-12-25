<?php
    $con = mysqli_connect('localhost','root','','abcschool');
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $grade = $_POST['grade'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $check_data = mysqli_query($con,"SELECT * FROM userdetails WHERE phonenumber = '$phonenumber'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        header("Location:http://localhost/Capstone%20Project/mainpage.html");
    }else{
        $input = mysqli_query($con,"INSERT INTO userdetails (id,firstname,lastname,phonenumber,grade,age,gender)VALUES('$id','$firstname','$lastname','$phonenumber','$grade','$age','$gender')");
        if($input){
            header("Location:http://localhost/Capstone%20Project/mainpage.html");
        }
    }

?>