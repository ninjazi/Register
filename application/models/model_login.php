<?php

class model_login extends Model
{
    public function get_data()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = \R::findOne('users', 'email = ?', [$email]);

            if (password_verify($password, $user->password)) {
                session_start();
                echo $_SESSION['admin'];
                $_SESSION['admin'] = $password;
                header('Location:/admin/main');
                $data["login_status"] = "access_granted";
            } else
                $data["login_status"] = "access_denied";

        } else {
            $data["login_status"] = "";
        }
        return $data;
    }
}