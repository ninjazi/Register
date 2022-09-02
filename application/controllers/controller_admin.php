<?php

class Controller_Admin extends Controller
{

    function __construct()
    {
        $this->model = new model_admin();
        $this->view = new View();
    }

    function action_index()
    {

    }
    function action_main()
    {
        $data = $this->model->get_data();
        $this->view->generate('admin_view.php', 'template_view.php', $data);
    }

}
