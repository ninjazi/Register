<?php

class Controller_Login extends Controller
{

    function __construct()
    {
        $this->model = new model_login();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('login_view.php', 'template_view.php', $data);
    }

}
