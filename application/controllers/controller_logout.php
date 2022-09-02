<?php

class controller_logout extends Controller
{
    function action_index()
    {
        session_start();
        session_destroy();
        header('Location:/');
    }
}