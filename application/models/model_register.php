<?php

class model_register extends Model
{
    public function get_data()
    {
        if (isset($_POST['email'])) {

            $username = $_POST['name'];
            $surname = $_POST['surname'];
            $date = $_POST['date'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $users = \R::dispense('users');
            $users->username = $username;
            $users->surname = $surname;
            $users->date = $date;
            $users->email = $email;
            $users->password = password_hash($password, PASSWORD_DEFAULT);
            \R::store($users);

            header('Location:/login/');
            $data["register_status"] = "ok";

        } else {
            $data["register_status"] = "";
        }
        return $data;
    }
}