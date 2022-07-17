<?php

require_once './vendor/autoload.php';

use App\classes\Home;
use App\classes\News;
use App\classes\Category;
use App\classes\Login;

$category = new Category();
$categories = $category->allCategories();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        $news = new News();
        $allNews = $news->allNews();
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'news-details')
    {
        $news = new News(); // Object
        $newsDetails = $news->getDetails($_GET['id']);
        include 'pages/details.php';
    }
    elseif ($_GET['page'] == 'category')
    {
        $news = new News();
        $allNews = $news->allNews();
        $category = new Category();
        $newsByCategory = $category->getNewsByCategory($_GET['id'], $allNews);
        include 'pages/category-news.php';
    }
    elseif ($_GET['page'] == 'login')
    {
        include 'pages/login.php';
    }
}
elseif (isset($_POST['loginBtn']))
{
    $login = new Login($_POST);
    $message = $login->checkUser();
    include 'pages/login.php';
}