<?php

class model_admin extends Model
{
    public function get_data()
    {
        session_start();

        if ($_SESSION['admin']) {

            $page = $_GET['page'] ?? 1;

            // Назначаем количество данных на одной странице
            $size_page = 3;
            // Вычисляем с какого объекта начать выводить
            $offset = ($page - 1) * $size_page;

            $total_rows = \R::count('users');
            $total_pages = ceil($total_rows / $size_page);

            $data['users'] = R::getAll('SELECT * FROM `users` LIMIT ?, ?', [$offset, $size_page]);

            $data['page'] = $page;
            $data['total_pages'] = $total_pages;

            return $data;

        } else {
            session_destroy();
            Route::ErrorPage404();
        }
        return true;
    }
}