<?php
require_once './Login.php';
use App\classes\Login;
if(isset($_POST['btn'])){
    $login=new Login();
    $login->adminLoginCheck();
}
?>

<form action=""method="post">
    <table>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email"> </td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="password"> </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit" </td>
        </tr>
    </table>
</form>