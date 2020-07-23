<?php
    require_once './Student.php';
    use App\classes\Student;
    $student=new Student();
    $queryResult=$student->getStudentInfoById($_GET['id']);
    $data=mysqli_fetch_assoc($queryResult);
    if(isset($_POST['btn'])){
        $student->updateStudentInfo($data['id']);
    }
?>
<a href="main.php">Add Student</a> ||
<a href="view-student.php">View Student</a>||
<a href="">Log Out</a>
<h2>Update Student Information</h2>

<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" value="<?php echo $data['name'];?>"  name="name"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" value="<?php echo $data['email'];?>"name="email"> </td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><input type="number" value="<?php echo $data['phone'];?>"name="phone"> </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Update"> </td>
        </tr>
    </table>
</form>
