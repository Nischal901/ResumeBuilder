<?php
require '../assets/class/database.class.php';
require '../assets/class/function.class.php';

if($_POST){
    $post=$_POST;

    if($post['username'] && $post['password']){
        $username=$db->real_escape_string($post['username']);
        $password=$db->real_escape_string($post['password']);
        
        $result=$db->query("SELECT * FROM head WHERE (username='$username' && password='$password') ");

        $result = $result->fetch_assoc();
        if($result){
            $fn->setAuth($result);
            $fn->setAlert('logged in !');
            $fn->redirect('../admindashboard.php');



        }else{
            $fn->setError('Incorrect email id or password  !');
            $fn->redirect('../admin.php');

        }


}else{
    $fn->setError('please fill the form !');

    $fn->redirect('../login.php');
}
}else{
    $fn->redirect('../login.php');

}



?>