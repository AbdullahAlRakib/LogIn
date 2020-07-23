<?php


namespace App\classes;


class Student
{
    //create function
    public function saveStudentInfo(){
        extract($_POST);
        $link=mysqli_connect('localhost','root','','student');
        $sql= "INSERT INTO students(name,email,phone)VALUES('$name','$email','$phone')";
        if(mysqli_query($link,$sql)){
            return "Success";
        }
        else{
            die("Problem".mysqli_error($link));
        }
    }

    //read function
    public function getAllStudentInfo(){
        $link=mysqli_connect('localhost','root','','student');
        $sql="SELECT * FROM students";
        if($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        }
        else{
            die("Problem".mysqli_error($link));

        }

    }


    public function getStudentInfoById($id){
        $link=mysqli_connect('localhost','root','','student');
        $sql="SELECT * FROM students WHERE id='$id'";
        if($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        }
        else{
            die("Problem".mysqli_error($link));

        }
    }
    //Update Student Info
    public function updateStudentInfo($id){
        extract($_POST);
        $link=mysqli_connect('localhost','root','','student');
        $sql="UPDATE students SET name='$name',email='$email',phone='$phone' WHERE id='$id'";

        if(mysqli_query($link,$sql)){
            header('Location:view-student.php');
        }
        else{
            die("Problem".mysqli_error($link));
        }
    }

    //Delete Student Info
    public function deleteStudentInfo($id){

        $link=mysqli_connect('localhost','root','','student');
        $sql="DELETE FROM students  WHERE id='$id'";

        if(mysqli_query($link,$sql)){
            header('Location:view-student.php');
        }
        else{
            die("Problem".mysqli_error($link));
        }
    }

    public function searchStudentInfoBySearchText(){
        extract($_POST);
        $link=mysqli_connect('localhost','root','','student');
       // $sql="SELECT * FROM students WHERE name ='$search_text'";
        $sql="SELECT * FROM students WHERE name LIKE'%$search_text%' || email LIKE'%$search_text%' || phone LIKE'%$search_text%'";

        if($queryResult=mysqli_query($link,$sql)){
         return $queryResult;
        }
        else{
            die("Problem".mysqli_error($link));
        }
    }


}