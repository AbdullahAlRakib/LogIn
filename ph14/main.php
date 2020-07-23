<?php
require_once './Student.php';
use App\classes\Student;
$message='';
if(isset($_POST['btn'])) {
    $student = new Student();
    $message = $student->saveStudentInfo();
}
?>
<a href="main.php">Add Student</a> ||
<a href="view-student.php">View Student</a>||
<a href="">Log Out</a>


<h2><?php echo $message;?></h2>
<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" name="email"> </td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><input type="number" name="phone"> </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"> </td>
        </tr>
    </table>
</form>

