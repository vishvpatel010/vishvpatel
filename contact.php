<?php
    session_start();
    require 'dbcon.php';
    
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $sql = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
        $result = mysqli_query($connect,$sql);
        if($result)
        {
            $_SESSION['status'] = "Thank you for getting in touch! We appreciate you contacting us";
            header("Location:../vishvpatel");
        }
        else{
            $_SESSION['status'] = "Please filled once again";
            header("Location:../vishvpatel");
        }
    }
    
?>