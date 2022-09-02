<?php

class Controller_register extends Controller
{
    function __construct()
    {
        $this->model = new model_register();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('register_view.php', 'template_view.php', $data);
    }
}