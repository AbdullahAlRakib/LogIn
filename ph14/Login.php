<?php


namespace App\classes;


class Login
{
    public function adminLoginCheck(){

        extract($_POST);
        $md5Password=md5($password);
        $link=mysqli_connect('localhost','root','','student');
        $sql="SELECT * FROM users WHERE email='$email' && password='$md5Password'";
        if($queryResult=mysqli_query($link,$sql)){
            $user=mysqli_fetch_assoc($queryResult);
            if($user){
                session_start();
                $_SESSION['id']=$user['id'];
                $_SESSION['name']=$user['name'];

              header('Location:view-student.php');
            }
            else{
                header('Location:index.php');
            }

        }
        else{
            die("Problem".mysqli_error($link));
        }
    }

    public function logOut(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        
        header('Location:index.php');
    }
}