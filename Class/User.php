<?php
include("helper/Database.php");
class User extends Database
{
    public function login($data)
    {
        $email = $data['email'];
        $password = md5($data['password']);

        $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

        if(mysqli_query($this->connector,$query)){
            $result = mysqli_query($this->connector, $query);
            $user = mysqli_fetch_assoc($result);
            if($user){
                header('location:index.php');
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['password'] = $user['password'];
            } else{
                $error = "You Email or Password is Incorrect!";
                return $error;
            }
        }
    }

    public function logout(){
        session_destroy();
        if($_GET['logout'] != 'user.views'){
            header('location:login.php');
        }else{
            header('location:../../login.php');
        }
    }
}